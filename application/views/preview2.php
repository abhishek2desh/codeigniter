<!DOCTYPE html>
<html>

    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
         
        <style>
            html, body {
                height: 100%;
            }
            

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }
.hide{

    visibility: hidden;
}
            
        </style>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"> </script>
   
    
    
    
   <script src="/assets/tags/commonFunc.js" async='true' type='text/javascript'></script>
    <script src="/assets/tags/<?php echo $this->session->userdata('username');?>.js" async='true' type='text/javascript'></script>
    </head>
    <body>
             

        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                
            </div>
        </div>


        
    </body>

</html>