var $tvc={id:""};
$tvc.draft="";
$tvc.ratingType="";
$tvc.ratingTypeInt="";
$tvc.head="";
$tvc.ratingValue="null";
$tvc.ratingSize="";
(function() {
  var nTimer = setInterval(function() {
    if (window.jQuery) {
      // Do something with jQuery
        start();
      clearInterval(nTimer);
    }
  }, 500);
})();
function start()
{$(document).ready(
    function(){if (typeof dataLayer == "undefined") {
    window.dataLayer = window.dataLayer || [];
    }
      dataLayer.push({
        "event" : "tvc_npsloaded"
      });

        var key=new Array("draft","pophight","popwidth","jsbkclr","jsfrclr"); 
        $tvc.bodycolor=$("body").css("background");$("body").css("background","black");
        if($tvc.draft==null){}else{ $("head").append(Base64.decode($tvc.head));
$("body").append("<div id=openModal class=modalDialog >" + Base64.decode($tvc.draft) + "</div>");
$(document).ready(function(){setTimeout(function(){$(" .modalDialog ").css("opacity",1);
$(" .modalDialog ").css("pointer-events","auto");
            $(" .modalDialog ").show();},3000);});}
$(".close").click(function(){
 dataLayer.push({
        "event" : "tvc_nps_close"
      });$(" .modalDialog ").css("opacity",0);
$(" .modalDialog ").css("display","none");
    $("body").css("background",$tvc.bodycolor);$("body").css("opacity",1);});$(".tvc_promoter").click(function(){
$("#boxb").hide();$("#page4").show();});
$(".tvc_passive").click(function(){$("#boxb").hide();
$("#page3").show();});
$(".tvc_detractors").click(function(){$("#boxb").hide();$("#page2").show();});
if($tvc.ratingTypeInt!=null)
{setRatings($tvc.ratingTypeInt);
console.log("ratingTypeInt:"+$tvc.ratingTypeInt);}
if ($tvc.ratingSize!=null)
{ setRatingSize($tvc.ratingSize);}});  $(document).ready(function(){


   $("#tvc_rating").on("rating.change", function(event, value, caption) {
       $tvc.ratingValue=value-1;
       console.log($tvc.ratingValue);
    });

  $(".score").on("click", function() {
    if($tvc.ratingValue<7)
    {
            $("#boxb").hide();
            $("#page2").show();
                   
    }

    else if($tvc.ratingValue>6 && $tvc.ratingValue<9)
    {
             $("#boxb").hide();
             $("#page3").show();

    }
     else if($tvc.ratingValue>8)
    {
             $("#boxb").hide();
             $("#page4").show();

    }
     dataLayer.push({
        "event" : "tvc_nps_SubmitClicked",
        "tvc_score": $tvc.ratingValue
      });
    

        });

 
$(".feedback1").on("click", function() {
   $tvc.feedback1=$("textarea").eq(0).val();
     dataLayer.push({
        "event" : "tvc_nps_FeddbackSubmit",
        "tvc_feedback": $tvc.feedback1
      });
    $(" .modalDialog ").css("opacity",0);
$(" .modalDialog ").css("display","none");
 $("body").css("background",$tvc.bodycolor);$("body").css("opacity",1);
        });

$(".feedback2").on("click", function() {
   $tvc.feedback1=$("textarea").eq(1).val();
     dataLayer.push({
        "event" : "tvc_nps_FeddbackSubmit",
        "tvc_feedback": $tvc.feedback1
      });
    $(" .modalDialog ").css("opacity",0);
$(" .modalDialog ").css("display","none");
 $("body").css("background",$tvc.bodycolor);$("body").css("opacity",1);
        });

});}
