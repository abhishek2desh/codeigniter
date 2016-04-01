<?php

/**
 *
 * @author Aditya
 */
class User extends CI_Controller
{
    private $userId; // Id of - SYSADMIN/ADV/CM/TM/AP
    private $userType; // Type of User - SYSADMIN/ADV/CM/TM/AP

    /*
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->userId   = $this->session->userdata(SESSION_USER_ID);
        $this->userType = $this->session->userdata(SESSION_USER_TYPE);
        $callingMethod  = $this->router->method;

        $methodsRequiredLogin    = array('createUser', 'approveAffliate', 'rejectAffiliate',
            'approveAffiliate', 'viewAffiliates');
        $methodsNotRequiredLogin = array('login');

        // If user is not logged in
        if ($this->userId === null) {
            if (in_array($callingMethod, $methodsRequiredLogin)) {
                redirect(base_url());
            }
        } else {
            // User is logged in
            if (in_array($callingMethod, $methodsNotRequiredLogin)) {
                redirect(base_url());
            }
        }

        $this->load->model('UserManager');
    }

    /*
     * Home Page
     * @returns Nothing
     */
    public function index()
    {
        // User not logged in
        if ($this->userType === null) {

            $data = array(
                'page_title' => 'Home',
                'body' => $this->load->view('users/home', array(), TRUE)
            );
            $this->parser->parse('user_template', $data);
        } else {
            // User logged In
            if ($this->userType === USER_TYPE_ADVERTISER) {
                $data = array(
                    'page_title' => 'Advertiser Home',
                    'body' => $this->load->view('users/adv_home', array(), TRUE)
                );
                $this->parser->parse('user_template', $data);
            } elseif ($this->userType === USER_TYPE_AFFILIATE_PARTNER) {
                $data = array(
                    'page_title' => 'Affiliate Home',
                    'body' => $this->load->view('users/ap_home', array(), TRUE)
                );
                $this->parser->parse('user_template', $data);
            }
        }
    }

    /*
     * Show message board
     */
    public function showMessage()
    {
        $message = $this->session->flashdata("message");
        // Check whether there is anything in flash
        if ($message === null) {
            redirect(base_url());
        }
        $data = array(
            'page_title' => 'Message',
            'body' => $this->load->view('users/message',
                array('message' => $message), TRUE)
        );
        $this->parser->parse('user_template', $data);
    }

    /*
     * Login Authentication for user
     * @returns boolean true on successful authentication else false
     */
    public function login($userType = USER_TYPE_SYSTEM_ADMIN)
    {
        $userType = (int) $userType;
        $error    = '';
        if ($this->input->post('action') == 'Log In') {
            $userName = $this->input->post('username');
            $password = $this->input->post('password');

            // Get user by username
            $userInfo = $this->UserManager->getUserByEmail($userType, $userName);

            // If user does not exist throw error
            if (count($userInfo) === 0) {
                $error = "Username does not exist";
            } elseif ($userInfo['password'] !== md5($password)) {
                $error = "Wrong Password";
            } elseif ($userInfo['is_active'] == FLAG_NOT_ACTIVE) {
                $error = "User Not Activate";
            } else {
                // Set Session
                $this->session->set_userdata(SESSION_USER_ID,
                    (int) $userInfo['id']);
                $this->session->set_userdata(SESSION_USER_TYPE, (int) $userType);

                // Redirect to home
                redirect(base_url());
            }
        }
        $data = array(
            'page_title' => 'Login',
            'body' => $this->load->view('users/login', array('error' => $error),
                TRUE)
        );
        $this->parser->parse('user_template', $data);
    }

    // Public function logout
    public function logout($userType = USER_TYPE_SYSTEM_ADMIN)
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    /*
     * Creates a user depending upon its type
     * @return Newly created user
     */
    public function createUser()
    {
        try {
            $this->load->model('UserManager');
            $result = $this->UserManager->createUser();
            print json_encode($result);
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    public function createInternalAP()
    {
        try {
            $this->load->model('UserManager');
            $result = $this->UserManager->createInternalAP();
            print json_encode($result);
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    /*
     * Resets the password of the given user
     * @returns newly generated password string
     */
    public function resetPassword()
    {
        try {
            $this->load->model('UserManager');
            $this->UserManager->resetPassword();
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    /*
     * Performs sign up request for user
     * @returns boolean true on successful signup else false $userType
     */
    public function signup()
    {
        $error = '';
        if ($this->input->post('action') == 'Submit') {
            try {
                $this->load->model('UserManager');
                $this->UserManager->signup();

                // Set flashdata and redirect
                $message = "Thank you for the signup.<br/><br/>Please wait while your account is being reviewed.";
                $this->session->set_flashdata("message", $message);
                redirect(base_url().'show-message/');
            } catch (Exception $ex) {
                print $ex->getMessage();
            }
        }
        $data = array(
            'page_title' => 'Signup',
            'body' => $this->load->view('users/signup',
                array('error' => $error), TRUE)
        );
        $this->parser->parse('user_template', $data);
    }

    public function pendingAffliates()
    {
        $error = '';
        try {
            $this->load->model('UserManager');
            $result = $this->UserManager->getPendingAffiliates();
            $data   = array(
                'page_title' => 'Signup',
                'body' => $this->load->view('users/approveAffiliateList',
                    array('error' => $error,
                    'result' => $result
                    ), TRUE)
            );
            $this->parser->parse('user_template', $data);
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    public function rejectAffiliate()
    {
        try {
            $this->load->model('UserManager');
            $result = $this->UserManager->rejectAffiliate($this->userId);
            if ($result) {
                $message = "Affiliate Rejected";
            } else {
                $message = "Affiliate Reject failed";
            }
            $this->session->set_flashdata("message", $message);
            redirect(base_url().'show-message/');
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    /*
     * Changes the user status i.e active or inactive
     * @returns boolean value. True for activation and False on failing to activate the user
     */
    public function approveAffiliate()
    {
        //Fetch user parameters from request
        try {
            $this->load->model('UserManager');
            $result = $this->UserManager->approveAffiliate($this->userId);
            if ($result) {
                $message = "Affiliate Activated Successfully";
            } else {
                $message = "Affiliate Activation Failed";
            }
            $this->session->set_flashdata("message", $message);
            redirect(base_url().'show-message/');
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    /*
     * View the user of given type
     * @returns collection of users
     */
    public function viewAffiliates()
    {
        $error = '';
        try {
            $this->load->model('UserManager');
            $result = $this->UserManager->viewAffiliates($this->userId);
            $data   = array(
                'page_title' => 'Signup',
                'body' => $this->load->view('users/affiliatelist',
                    array('error' => $error,
                    'result' => $result
                    ), TRUE)
            );
            $this->parser->parse('user_template', $data);
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

}