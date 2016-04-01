<!-- Stored in resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NPS Builder</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   
         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <link href="/assets/css/bootstrap-switch.css" rel="stylesheet">
        
     <link rel="stylesheet" href="/assets/css/star-rating.css"  type="text/css">
     <link rel="stylesheet" href="/assets/css/theme-krajee-svg.css"  type="text/css">
     
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
         <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js" type="text/javascript"></script>

        <script src="/assets/js/custom.js" type="text/javascript"></script>
        <script src="/assets/js/interact.min.js" type="text/javascript"></script>
        <script src="/assets/js/jscolor.js" type="text/javascript"></script>

         <script src="/assets/js/bootstrap-switch.js" type="text/javascript"></script>

          <script src="/assets/js/star-rating.js" type="text/javascript"></script>
        
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer="defer"></script>
        
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style type="text/css">
            
            
            
 body {
            font-family: 'Lato';

        }

            
           
 #main{border: 5px solid darkgrey;
 -webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;
              -moz-box-shadow: 1px 1px 3px #000;
              -webkit-box-shadow: 1px 1px 3px #000;
              box-shadow: 2px 2px 4px #000;
 }
      
        
.fa-btn {
            margin-right: 6px;
        }

.rotate {

/* Safari */
-webkit-transform: rotate(90deg);

/* Firefox */
-moz-transform: rotate(90deg);

/* IE */
-ms-transform: rotate(90deg);

/* Opera */
-o-transform: rotate(90deg);

/* Internet Explorer */
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
 cursor:pointer;

}

.label-as-badge {
    border-radius: 1em;
}
   
.button{
height:5%; 
  width: 10%;
}

#tabwindow{
  background-color:lightgrey;
    font-family: 'Lato';
          
}
.container-fluid, .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
  background-color: darkgrey;
}
div.container-fluid{
  height: 
}
.legends{
  margin-left: 45%;
  margin-top: 5%;
  font-weight: bolder;

}
form#rating{

  background-color: white;
}
.modalDialog {
                color: #000;
                top:20%;
                float: right;
                font-family:serif; 
               right: 30%;
               position: fixed;
                pointer-events: auto;
                font-family: Arial, Helvetica, sans-serif;
                
                background: rgba(0,0,0,0);
                z-index: 999;
                opacity:1;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                /*pointer-events: none;*/
            }
            .modalDialog:target {
               
            }
            #page2{
             width: 720px;
               height: 325px;
             position: relative;
               /*margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 5px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:5px 5px 10px #888888; 
                z-index: 99999;

            }
            #page3{
              width: 720px;
               height: 325px;
             position: relative;
              /* margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 5px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:5px 5px 10px #888888; 
                z-index: 99999;
            }

            #page4{

             width: 720px;
               height: 325px;
             position: relative;
              /* margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 5px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:5px 5px 10px #888888; 
                z-index: 99999;
            }

            #boxb {
               width: 720px;
               height: 325px;
             position: relative;
              /* margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 5px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:5px 5px 10px #888888; 
                z-index: 99999;
            
               /*background: -moz-linear-gradient(#fff, #999);
               background: -webkit-linear-gradient(#fff, #999);
               background: -o-linear-gradient(#fff, #999);
               */
            }
            
            .close:hover { 
              background-color: #fff;}
            .close {z-index: 99999;
              background: grey;
              color: #FFFFFF;
              line-height: 25px;
              position: absolute;
              right: -12px;
              text-align: center;
              top: -10px;
              width: 24px;
              text-decoration: none;
              font-weight: bold;
              -webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;
              -moz-box-shadow: 1px 1px 3px #000;
              -webkit-box-shadow: 1px 1px 3px #000;
              box-shadow: 1px 1px 3px #000;}
            
             
            .popTitle {
                 text-align: center;
                 
            }
            
            #rec_bar1>span{
                color: darkgrey;
                font-family: sans-serif;
            }
            #rec_bar>span{
            color: dimgrey;
                font-family:serif;               
            }
            .modalDialog p{
              color: black;
              font-weight: bolder;
              opacity: 0.7;
            }
.toolbox{
  /*width: 20px;
  height: 5px;*/
  }

code {
  width:100%;
  height:70%;
  outline: none;
  resize: none;
  overflow: auto;
  float:top;
}
 .ScrollStyle{
    /*max-height: 900px;
    overflow-y: scroll;*/
}
#drag-1, #drag-2 {
  /*width: 25%;
  height: 100%;
  min-height: 6.5em;
  margin: 10%;

  background-color: #29e;
  color: white;

  border-radius: 0.75em;
  padding: 4%;
*/
  -webkit-transform: translate(0px, 0px);
          transform: translate(0px, 0px);
}

#drag-me::before {
  content: "#" attr(id);
 /* font-weight: bold;*/
}
.resize-drag {
  /*background-color: #29e;
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  border-radius: 8px;
  padding: 20px;
  margin: 30px 20px;

  width: 120px;*/

  /* This makes things *much* easier */
  box-sizing: border-box;
}
.dropzone {
  background-color: #ccc;
  border: dashed 4px transparent;
  border-radius: 4px;
  margin: 10px auto 30px;
  padding: 10px;
  width: 80%;
  transition: background-color 0.3s;
}

.drop-active {
  border-color: #aaa;
}

.drop-target {
  background-color: #29e;
  border-color: #fff;
  border-style: solid;
}

.drag-drop {
  display: inline-block;
  min-width: 40px;
  padding: 2em 0.5em;

  color: #fff;
  background-color: #29e;
  border: solid 2px #fff;

  -webkit-transform: translate(0px, 0px);
          transform: translate(0px, 0px);

  transition: background-color 0.3s;
}

.drag-drop.can-drop {
  color: #000;
  background-color: #4e4;
}
#outer-dropzone {
  height: 140px;
}

#inner-dropzone {
  height: 80px;
}
.resize-container {
 /* width: 100%;*/

  height: 100%;
}


thead{
  background-color: lightgrey;

 -webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;
}
thead>tr>th{
  background-color: lightgrey;
  
 -webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;
}
tbody{
  background-color: darkgrey;
  
              -webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;
}

.rotate{
 background-color: red ;
  color: white;
 -webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;
 -moz-box-shadow: 1px 1px 3px #000;
              -webkit-box-shadow: 1px 1px 3px #000;
              box-shadow: 2px 2px 3px #000;
             opacity: 0.4;
             width: 100px;
             margin-bottom: 10px; 
}

.pagination{
  position: fixed;
  top:5%;

}
#properties thead{
  cursor: pointer;
}
     </style>
       
       
        
   
    

   
 
   

        
     
    
      <title>NPS Builder</title>
    
    </head>

    <body   id="body" style="overflow:hidden; margin:0">
    <script>

$(document).ready(function(){
  

if( localStorage['draft']!=null)
  {var  contentEl = document.getElementById("openModal");
    contentEl.innerHTML=localStorage['draft'];
      if(localStorage['ratingTypeInt']!=null){
      setRatings(localStorage['ratingTypeInt']);
      console.log("ratingTypeInt:"+localStorage['ratingTypeInt']);
      }
      if (localStorage['ratingSize']!=null){ 
      setRatingSize(localStorage['ratingSize']);
      }
 }
 
 if( localStorage['draft']==null)
            {
                setRatings('1');
                setRatingSize('md');
            }
            jscolor=$('#boxb').css('background-color');//setcolor of rating container
 $('#rating.container-fluid').css('background-color',jscolor);

  $('#boxb').attr("contentEditable","true");
$('#page2').attr("contentEditable","true");
$('#page3').attr("contentEditable","true");
$('#page4').attr("contentEditable","true");
  }
  );


            $(document).ready(function(){
              $(window).load(function(){


                $('#body').css('height',window.innerHeight +'px');
                 $('#tabwindow').css('height',window.innerHeight +'px');
              });
              $(window).resize(function(){


                $('#body').css('height',window.innerHeight +'px');
                 $('#tabwindow').css('height',window.innerHeight +'px');
              });
            });
        
       

    function getPage(page)
{
console.log(page);
  if (page==1)
  {
    localStorage['page']=1;
    $('#page2').hide();
   $('#page3').hide();
   $('#page4').hide();
   $('#boxb').show();
  
  
  }
  else if(page==2)
  {  localStorage['page']=2;
    $('#boxb').hide();
   $('#page3').hide();
   $('#page4').hide();
   $('#page2').show();
   
    
  }
else if(page==3)
  { localStorage['page']=3;
    $('#boxb').hide();
   $('#page2').hide();
   $('#page4').hide();
   $('#page3').show();
   
    
  }
else if(page==4)
  { localStorage['page']=4;
   $('#boxb').hide();
   $('#page2').hide();
   $('#page3').hide();
   $('#page4').show();
   
   
  }

}
    $(document).ready(function(){
 
        $('.nps_logo_img').click(function(event){
            $('#body').append("<div class='imgpop' style='position:absolute'><input height='100px' id='imgurl2'  type='Text' placeholder='Input logo Url'></input><input id='imgset' type='button' value='setLogo' onclick='setimg2()'></input></div>");
             $('.imgpop').css("top",event.pageY-50);
    $('.imgpop').css("left",event.pageX-10);
    $('.imgpop').css("height",'auto');
    $('.imgpop').css("background",'grey');
    
    $('.imgpop').show();
    
                   
            
        });
        
   

          $('#propTab').mouseover(function(event){
    document.getElementById("toolTip").innerHTML="<strong><h4>Develepor Options</h4></strong>";
    $('#toolTip').css("top",event.pageY-50);
    $('#toolTip').css("left",event.pageX-10);
    $('#toolTip').css("height",'auto');
    $('#toolTip').show();

  });
  $('#propTab').on("mouseout",function(){
    document.getElementById("toolTip").innerHTML="<strong><h3>Develepor Options</h3></strong>";
    $('#toolTip').hide();

  });
  $('#propTab').on("click",function(){
    if($('#properties').css('display')=='none')
    {
      
       $('#propTab').html("<center><span class='rotate glyphicon glyphicon-cog'><div style='height:5%px'><h3>Hide Options</h3></div></span></center>");
      $('#toolTip').hide();
      $('#properties').show().slideDown("slow");
    } 
    else{
      
      $('#propTab').html("<center><span class='rotate glyphicon glyphicon-cog'><div style='height:5%px'><h3>Developer Options</h3></div></span></center>");
      $('#toolTip').hide();
      $('#properties').hide();
    } 

 

  });

 $(".tip").mouseover(function(event){
    $('#toolTip').html("<strong><h4>"+$(this).attr("tip")+"</h4></strong>");
    $('#toolTip').css("top",event.pageY-40);
    $('#toolTip').css("left",event.pageX-10);
    $('#toolTip').css("color","#011627");
    $('#toolTip').css("height","auto");
    $('#toolTip').show();
    
   });

 $(".tip").mouseout(function(event){
    $('#toolTip').hide();
   });

 //floating fon format container
$("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").mouseover(function(){
  $(this).css("border","3px dashed red");


});

$("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").mouseout(function(){
 if ($(this).css("border-style")=='dashed')
      $(this).css("border","0px dashed #fff");

});

$("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").click(function(event){
  $(this).css("border","3px solid red");
  $('#formatText').css("top","85%");
   $('#formatText').css("left","45%");
  $('#formatText').css("z-index","999");
   $('#formatText').show();
  
});
//set the first page in view rest hidden
 $('#page2').hide();
   $('#page3').hide();
   $('#page4').hide();
   $('#boxb').show();
   localStorage['page']=1;
// when cliclk in design tab or on views design the class are toggled to smaller version
      //$("#btnDesign1").click(function(){$('#tabwindow').toggleClass('col-md-9 col-md-12');});
      //$("#btnDesign2").click(function(){$('#tabwindow').toggleClass('col-md-9 col-md-12');});
      //$("#dropdown3").focus(function(){$('#tabwindow').toggleClass('col-md-12 col-md-6');});
     
      //^ colapse the prop and tool box to give space to survey flow tab
 
if(localStorage['ratingTypeInt']!=null){
setRatings(localStorage['ratingTypeInt']);
console.log("ratingTypeInt:"+localStorage['ratingTypeInt']);
}
if (localStorage['ratingSize']!=null){ 
setRatingSize(localStorage['ratingSize']);
}


 $("[name='npsOn']").bootstrapSwitch(); 
         $("[name='closeBtnBox']").bootstrapSwitch(); 
         $("[name='openFeedBox']").bootstrapSwitch(); 


});
  

    
  $(function() {
    $( '.panel' ).resizable();
  });
$(function() {
    $( '.row' ).resizable();
  });
  function dragStart(ev) {
            ev.dataTransfer.effectAllowed='move';
            ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
            ev.dataTransfer.setDragImage(ev.target,0,0);
            
            return true;
         }
         
         function dragEnter(ev) {
            event.preventDefault();
            return true;
         }
         
         function dragOver(ev) {
            return false;
         }
         
         function dragDrop(ev) {
            var src = ev.dataTransfer.getData("Text");
            var itm = document.getElementById(src).lastChild;

// Copy the <li> element and its child nodes
            var cln = itm.cloneNode(true);
            ev.target.appendChild(cln);
            ev.stopPropagation();
            return false;
         }

          function updateRatinghvr(jscolor) {
    // 'jscolor' instance can be used as a string
      var css = '.rating:hover{ background-color: #'+jscolor+';}';
style = document.createElement('style');

if (style.styleSheet) {
    style.styleSheet.cssText = css;
} else {
    style.appendChild(document.createTextNode(css));
}

document.getElementsByTagName('head')[0].appendChild(style);

         var key="jsratinghvrclr";
         localStorage[key]=jscolor;
         //console.log(jscolor);
        }

    function updateRatingbk(jscolor) {
    // 'jscolor' instance can be used as a string
          
        // $('.rating').css('background','#' + jscolor);
           var css = '.rating{ background-color: #'+jscolor+';}';
style = document.createElement('style');

if (style.styleSheet) {
    style.styleSheet.cssText = css;
} else {
    style.appendChild(document.createTextNode(css));
}

document.getElementsByTagName('head')[0].appendChild(style);
         var key="jsratingbkclr";
         localStorage[key]=jscolor;
         //console.log(jscolor);
        }
    function updateRatingfc(jscolor) {
    // 'jscolor' instance can be used as a string
          
      //   $('.rating').css('color' ,'#' + jscolor);
          var css = '.rating{ color: #'+jscolor+';}';
style = document.createElement('style');

if (style.styleSheet) {
    style.styleSheet.cssText = css;
} else {
    style.appendChild(document.createTextNode(css));
}

document.getElementsByTagName('head')[0].appendChild(style);
         var key="jsratingfcclr";
         localStorage[key]=jscolor;
         //console.log(jscolor);
        }

        function updatebk(jscolor) {
    // 'jscolor' instance can be used as a string
               var key="jsbkclr";
                 localStorage[key]=jscolor;
                
        var page=parseInt(localStorage['page']);
        //console.log(typeof(page));

        if ($('#allbclr').is(":checked"))
{
 document.getElementById('boxb').style.backgroundColor = '#' + jscolor;
 document.getElementById('page2').style.backgroundColor = '#' + jscolor;
 document.getElementById('page3').style.backgroundColor = '#' + jscolor;
 document.getElementById('page4').style.backgroundColor = '#' + jscolor;
}
      
         switch(page)
         { 
         case 1:document.getElementById('boxb').style.backgroundColor= '#' + jscolor;
                $('#rating.container-fluid').css('background-color','#'+jscolor);

                 break;

        case 2:document.getElementById('page2').style.backgroundColor= '#' + jscolor;
              
                break;
                
        case 3:document.getElementById('page3').style.backgroundColor= '#' + jscolor;
                
                break;
        case 4:document.getElementById('page4').style.backgroundColor= '#' + jscolor;
               
                break;
          }
        }
    function updatefc(jscolor) {
    // 'jscolor' instance can be used as a string
         
         //console.log(jscolor);
          var key="jsfrclr";
         localStorage[key]=jscolor;
         
          var page=parseInt(localStorage['page']);
        console.log(typeof(page));
if ($('#allfclr').is(":checked"))
{
 document.getElementById('boxb').style.color = '#' + jscolor;
 document.getElementById('page2').style.color = '#' + jscolor;
 document.getElementById('page3').style.color = '#' + jscolor;
 document.getElementById('page4').style.color = '#' + jscolor;
}

         switch(page)
         { 
         case 1: document.getElementById('boxb').style.color = '#' + jscolor;
                
                 break;

        case 2:document.getElementById('page2').style.color = '#' + jscolor;
               
                break;
        case 3:document.getElementById('page3').style.color = '#' + jscolor;
                
                 break;
                          //console.log(jscolor);

        case 4:document.getElementById('page4').style.color = '#' + jscolor;
                 break;
         }
        }
        function updateHeight(value) {
    // 'jscolor' instance can be used as a string
          var key="pophight";
         localStorage[key]=value;
 
                
            var page=parseInt(localStorage['page']);
        console.log(typeof(page));
         switch(page)
         { 
         case 1: document.getElementById('boxb').style.height = value + 'px';
                
                 break;

        case 2:document.getElementById('page2').style.height = value + 'px';
                break;
                
        case 3:document.getElementById('page3').style.height = value + 'px';
                break;
         //console.log(jscolor);

        case 4:document.getElementById('page4').style.height = value + 'px';
                break;
         }
         
        }
        function updateWidth(value) {
    // 'jscolor' instance can be used as a string
         
         //console.log(jscolor);
          var key="popwidth";
         localStorage[key]=value;

           var page=parseInt(localStorage['page']);
        console.log(typeof(page));
         switch(page)
         { 
         case 1: document.getElementById('boxb').style.width = value + 'px';
               
                 break;

        case 2:document.getElementById('page2').style.width = value + 'px';
               break;
                
        case 3:document.getElementById('page3').style.width = value + 'px';
              break;

        case 4:document.getElementById('page4').style.width = value + 'px';
                 break;
         
        }
      }
    function updateclsbkclr (value)
    {
      $('.close').css("background-color",'#'+value);

    }  
     
    function updateclsclr (value)
    {
      $('.close').css("color",'#'+value);

    } 
    function updateclsopc (value)
    {
      $('.close').css("opacity",value);

    }      



function setRatings(value)
{
 var key="ratingType";
value= parseInt(value);
localStorage['ratingTypeInt']=value;
//  alert(value);

  if (value==null)
  {}
else if(value==1)
  {$('#rating').remove();
    localStorage[key]='<form id="rating" class="container-fluid"><div id="rec_bar1"><span style="margin-left:3%;">0</span><span style="margin-left:6%;">1</span><span style="margin-left:7%;">2</span><span style="margin-left:6%;">3</span><span style="margin-left:6%;">4</span><span style="margin-left:6%;">5</span><span style="margin-left:6%;">6</span><span style="margin-left:6%;">7</span><span style="margin-left:6%;">8</span><span style="margin-left:6%;">9</span><span style="margin-left:6%;">10</span></div><input id="tvc_rating" value="0" type="number" class="rating" min=0 max=11 step=1 data-size="md" data-stars="11"><div id="rec_bar"> <span>Not likely</span><span id="likely" style="margin-left:80%;">Very Likely</span> </div><br/><center><button type="button" style="width:150px" class="btn btn-info score">Submit</button></center></form>';
 
$('#boxb').append(localStorage[key]);
  $("#tvc_rating").rating();
  jscolor=$('#boxb').css('background-color');
  $('#rating.container-fluid').css('background-color',jscolor);
   }
else if(value==2)
  {$('#rating').remove();
   localStorage[key]='<form id="rating" class="container-fluid"><div id="rec_bar1"><span style="margin-left:3%;">0</span><span style="margin-left:6%;">1</span><span style="margin-left:7%;">2</span><span style="margin-left:6%;">3</span><span style="margin-left:6%;">4</span><span style="margin-left:6%;">5</span><span style="margin-left:6%;">6</span><span style="margin-left:6%;">7</span><span style="margin-left:6%;">8</span><span style="margin-left:6%;">9</span><span style="margin-left:6%;">10</span></div><input id="tvc_rating" type="number" class="kv-ltr-theme-svg-alt rating-loading" value="0" dir="ltr" data-size="md" min=0 max=11 step=1 data-stars="11"><div id="rec_bar"> <span>Not likely</span><span id="likely" style="margin-left:80%;">Very Likely</span> </div><br/><center><button type="button" style="width:150px" class="btn btn-info score">Submit</button></center></form>';

    $('#boxb').append(localStorage[key]);
    $('#tvc_rating').rating({
        hoverOnClear: false,
        theme: 'krajee-svg',
        containerClass: 'is-heart',
        filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
        emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
        defaultCaption: '{rating} hearts',
        starCaptions: function (rating) {
            return rating == 1 ? 'One heart' : rating + ' hearts';
        }
    });

 jscolor=$('#boxb').css('background-color');
 $('#rating.container-fluid').css('background-color',jscolor);
  }

  if (localStorage['ratingSize']!=null)
    {
        setRatingSize(localStorage['ratingSize']);
   
    }
    else
    {
       setRatingSize('md');
    }

  $('#tvc_rating').on('rating.change', function(event, value, caption) {
    console.log(value-1);
    console.log(caption);
});
  
   
}


function setRatingSize(value)
{
    var key="ratingSize";
    localStorage[key]=value;
      //alert(value);
  if(parseInt(localStorage['ratingTypeInt'])==1)
{
      if (value==null)
      {}
    else if(value=="xl")
      {
     
      $('#rec_bar1 >span').css('margin-left','66px');
      $('#rec_bar1 >span:first').css('margin-left','30px');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'xl'});
       document.getElementById('boxb').style.width =890+'px';
       document.getElementById('boxb').style.height =390+'px';
        document.getElementById('likely').style.marginLeft =83+'%';
        
      }
    else if(value=="lg")
      {$('#rec_bar1 >span').css('margin-left','53px');
     $('#rec_bar1 >span:first').css('margin-left','20px');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'lg'});
       document.getElementById('boxb').style.width =750+'px';
        document.getElementById('boxb').style.height =380+'px';
        document.getElementById('likely').style.marginLeft =80+'%';
        
      }
      else if(value=="md")
      {$('#rec_bar1 >span').css('margin-left','42px');
     $('#rec_bar1 >span:first').css('margin-left','17px');
        $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'md'});
        document.getElementById('boxb').style.width =630+'px';
         document.getElementById('boxb').style.height =370+'px';
        document.getElementById('likely').style.marginLeft =75+'%';
      
      }
      else if(value=="sm")
      {$('#rec_bar1 >span').css('margin-left','33px');
     $('#rec_bar1 >span:first').css('margin-left','13px');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'sm'});
       document.getElementById('boxb').style.width =550+'px';
         document.getElementById('boxb').style.height =350+'px';
        document.getElementById('likely').style.marginLeft =70+'%';
        
      }
       else if(value=="xs")
      {$('#rec_bar1 >span').css('margin-left','26px');
     $('#rec_bar1 >span:first').css('margin-left','10px');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'xs'});
       document.getElementById('boxb').style.width =450+'px';
         document.getElementById('boxb').style.height =330+'px';
        document.getElementById('likely').style.marginLeft =65+'%';
        
      }

    }
  else if(parseInt(localStorage['ratingTypeInt'])==2)
  {
     if (value==null)
      {}
    else if(value=="xl")
      {
     
      $('#rec_bar1 >span').css('margin-left','66px');
      $('#rec_bar1 >span:first').css('margin-left','32px');
       $('#tvc_rating').rating('create',{
        hoverOnClear: false,
        theme: 'krajee-svg',
        containerClass: 'is-heart',
        filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
        emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
        defaultCaption: '{rating} hearts',
        size:'xl',
        stars:11,
        starCaptions: function (rating) {
            return rating == 1 ? 'One heart' : rating + ' hearts';
        }
    });
       document.getElementById('boxb').style.width =900+'px';
       document.getElementById('boxb').style.height =390+'px';
        document.getElementById('likely').style.marginLeft =83+'%';
        
      }
    else if(value=="lg")
      {
        $('#rec_bar1 >span').css('margin-left','53px');
        $('#rec_bar1 >span:first').css('margin-left','22px');
        $('#tvc_rating').rating('create',{
            hoverOnClear: false,
            theme: 'krajee-svg',
            containerClass: 'is-heart',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            size:'lg',
            stars:11,
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            }
        });
       document.getElementById('boxb').style.width =750+'px';
        document.getElementById('boxb').style.height =370+'px';
        document.getElementById('likely').style.marginLeft =80+'%';
        
      }
      else if(value=="md")
      {
        $('#rec_bar1 >span').css('margin-left','39px');
        $('#rec_bar1 >span:first').css('margin-left','17px');
        $('#tvc_rating').rating('create',{
            hoverOnClear: false,
            theme: 'krajee-svg',
            containerClass: 'is-heart',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            size:'md',
            stars:11,
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            }
        });
        document.getElementById('boxb').style.width =590+'px';
        document.getElementById('boxb').style.height =360+'px';
        document.getElementById('likely').style.marginLeft =75+'%';
      
      }
      else if(value=="sm")
      {
        $('#rec_bar1 >span').css('margin-left','32px');
        $('#rec_bar1 >span:first').css('margin-left','14px');
        $('#tvc_rating').rating('create',{
            hoverOnClear: false,
            theme: 'krajee-svg',
            containerClass: 'is-heart',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            size:'sm',
            stars:11,
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            }
        });
        document.getElementById('boxb').style.width =550+'px';
        document.getElementById('boxb').style.height =350+'px';
        document.getElementById('likely').style.marginLeft =70+'%';
        
      }
       else if(value=="xs")
      {
        $('#rec_bar1 >span').css('margin-left','23px');
        $('#rec_bar1 >span:first').css('margin-left','12px');
                $('#tvc_rating').rating('create',{
            hoverOnClear: false,
            theme: 'krajee-svg',
            containerClass: 'is-heart',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            size:'xs',
            stars:11,
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            }
        });
        document.getElementById('boxb').style.width =450+'px';
        document.getElementById('boxb').style.height =340+'px';
        document.getElementById('likely').style.marginLeft =65+'%';
        
      }

    }

}

function setimg2(){
var str = document.getElementById("imgurl2").value;
document.getElementById("imgUrl").value=str;
setImg();
$('.imgpop').hide();
}

function setImg()
{
  var str = document.getElementById("imgUrl").value;
        $('.nps_logo_img').attr("src",str);
        console.log(str);  

str = document.getElementById("imgAlt").value;
        $('.nps_logo_img').attr("alt",str);     
        console.log(str);   

str = document.getElementById("imgHeight").value;
        $('.nps_logo_img').attr("height",str);     
        console.log(str);   

str = document.getElementById("imgWidth").value;
        $('.nps_logo_img').attr("width",str);     
        console.log(str);   

   


}

function setOption(value)
{
if (value=='false')
  {
   
    $('#propTab').hide();
    $('#properties').css('visibility','hidden');
  
  }
else if(value=='true')
  {
    
    $('#propTab').show();
     $

    if ($('#properties').css('visibility')=='hidden')
    {
      $('#properties').css('visibility','visible');


    }
    
  }

}

function changeFonts(value)
{
  console.log("fonts"+value);

        switch(value)
        {

        case '1':
             $("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").css('font-family',"'Helvetica Neue', Helvetica, Arial, sans-serif");
                 console.log("fonts"+value);
                break;

        case '2':$("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").css('font-family',"'Brush Script MT', cursive");
                 console.log("fonts"+value);
                break;
        case '3':
                $("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").css('font-family','Papyrus, fantasy');
                 console.log("fonts"+value);
                break;
        case '4':
                $("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").css('font-family',"Georgia, Times, 'Times New Roman', serif");
                 console.log("fonts"+value);
                break;
        case '5':
                $("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").css('font-family',"'Century Gothic', CenturyGothic, AppleGothic, sans-serif");
                 console.log("fonts"+value);
                break;
        case '6':$("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").css('font-family',"Perpetua, Baskerville, 'Big Caslon', 'Palatino Linotype', Palatino, 'URW Palladio L', 'Nimbus Roman No9 L', serif");
                 console.log("fonts"+value);
                break;



        }

}
  </script>


<div class="container-fluid">
    <div class="row" style="height:auto">
    
     <div id="tabwindow" class="col-md-12  resize-container resize-drag" style="height:auto;overflow-x: hidden;">
     
        <ul class="nav nav-tabs">

  
        <li class="active" ><a href="#dropdown1" onClick="setOption('false')" data-toggle="tab"><span class="glyphicon glyphicon-wrench" aria-expanded="true"></span>&nbsp;Genral Settings</a></li>
        <li class="divider"></li>
        <li><a href="#dropdown2" onClick="setOption('false')" data-toggle="tab"><span class="  glyphicon glyphicon-wrench"></span>&nbsp;Survey Configuration</a></li>
        <li class="divider"></li>
        <li ><a href="#dropdown3" onClick="setOption('false')" data-toggle="tab" ><span class="  glyphicon glyphicon-wrench"></span>&nbsp;survey Flow</a></li>
        <li class="divider"></li>
        <li><a href="#dropdown4" onClick="setOption('false')" data-toggle="tab"><span class="  glyphicon glyphicon-wrench"></span>&nbsp;Link Generator</a></li>
        <li id="btnDesign1" data-toggle="collapse" data-target=""  ><a href="#design" onClick="setOption('true')"    data-toggle="tab"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Design</a></li>
        <li ><a href="#" onClick="saveDraftLocal()" data-toggle=""><span class=" glyphicon glyphicon-eye-open"></span>&nbsp;Preview</a></li>
        <li ><a href="#dropdown5" onClick="saveDesignDb();setOption('false');" data-toggle="tab"><span class="  glyphicon glyphicon-floppy-disk"></span>&nbsp;Save & Publish </a></li>
        <li ><a href="#" onClick="resetDesign()" data-toggle=""><span class="glyphicon glyphicon-refresh"></span>&nbsp;Reset Design</a></li>
        <li role="presentation" class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               <?php echo $this->session->userdata("username"); ?><span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" >
                                <li  ><a href="/index.php/home/do_logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
        </li>
  
</ul>
<div id="myTabContent" class="tab-content" style="height:100%">
  
    <div class="tab-pane fade active in" id="dropdown1">
    <div class="container-fluid">
      <div class="legends">General Settings</div>
      <form id="gnrSet" class="form-horizontal">
  <fieldset>
    <legend></legend>

    <div class="form-group">
      <label for="inputName" class="col-md-3  control-label">Company Name</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="inputName" placeholder="company Name">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Select Type of WebSite</label>
      <div class="col-md-8">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="Web Application" checked="">
            Web Application
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="E-commerce">
            E-commerce
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="Content">
            Content
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputUrl" class="col-md-3 control-label">Site URL://</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="inputUrl" placeholder="www.tatvic.com">
      </div>
    </div>
    
    <div class="form-group">
      <label for="imgUrl" class="col-md-3 control-label">Logo Link://</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="imgUrl" placeholder="www.tatvic.com/logo.jpg">
      </div>
    </div>
         
    <div class="form-group">
      <div class="col-md-8 col-md-offset-5">
        <button type="reset" class="btn btn-danger button">Cancel</button>
        <a href="#dropdown2" onClick="setOption('false')" data-toggle="tab" aria-expanded="true" style="color:#fff"><button type="button"  class="btn btn-primary button" onClick='sendForm(1)'>Next</button></a>
        <input type="hidden" name="formNo" value="1">
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>

  <div class="tab-pane fade" id="dropdown2">
      <div class="container-fluid">
      
       <div class="legends">Survey Configuration</div>
      <form id="srvConfig" class="form-horizontal">
  <fieldset>
    <legend></legend>
    
    <div class="form-group">
      <label class="col-md-4  control-label" >Status of Survey</label>
      <div class="col-md-3 ">
        <div class="checkbox">
          <label>
               <input type="checkbox" name="npsOn" data-size="large">
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4  control-label" align="left">Show Close Button</label>
      <div class="col-md-3 ">
        <div class="checkbox">
          <label>
               <input type="checkbox" name="closeBtnBox" data-size="large" checked>
          </label>
        </div>
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputWeb" class="col-md-4  control-label">Name to be presented in Survey</label>
      <div class="col-md-3 ">
        <input type="text" class="form-control" name="byName">
      </div>
    </div>

    <div class="form-group">
      <label for="visitCookie" class="col-md-4  control-label">Trigger On</label>
      <div class="col-md-3">
        <select class="form-control" name="visitCookie">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <label for="visitCookie" class="col-md-1  control-label">Visit</label>
    </div>
         
         
    <div class="form-group">
      <div class="col-md-8 col-md-offset-4">
        <button type="reset" class="btn btn-danger button">Cancel</button>
        <a href="#dropdown3" onClick="setOption('false')" data-toggle="tab" aria-expanded="true" style="color:#fff"><button type="button" class="btn btn-primary button" onClick='sendForm(2)'>Next</button></a>
        <input type="hidden" name="formNo" value="2">
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>
  <div class="tab-pane fade" id="dropdown3" >
     <div class="container-fluid">
      
       <div class="legends">Flow Settings</div>
    <form id='workFlow' class="form-horizontal">
  <fieldset>
    <legend></legend>

    <div class="form-group">
      <label for="inputName" class="col-md-4  control-label">Detractors Score: [1-6]</label>
      
      <div class="col-md-2">
        <div class="radio">
          <label>
            <input type="radio" name="tvc_detract" id="optionsRadios1" value="feedback" checked="">
            Detractor FeedBack Form
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_detract" id="optionsRadios2" value="url">
            Redirect to Url
          </label>
        </div>
        
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="input_detractor" placeholder="value(optional)">
      </div>
    </div>
      </br>
    <div class="form-group">
      <label for="inputName" class="col-md-4  control-label">Passive Promoter Score: [7-8]</label>
      
      <div class="col-md-2">
        <div class="radio">
          <label>
            <input type="radio" name="tvc_pass" id="optionsRadios1" value="feedback" checked="">
            Passive promoter FeedBack Form
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_pass" id="optionsRadios2" value="url">
            Redirect to Url
          </label>
        </div>
        
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="tvc_passive" placeholder="value(optional)">
      </div>
    </div>
  </br>
    <div class="form-group">
      <label for="inputName" class="col-md-4  control-label">Promoter Score: [9-10]</label>
      
      <div class="col-md-2">
        <div class="radio">
          <label>
            <input type="radio" name="tvc_promo" id="optionsRadios1" value="feedback" checked="">
            Share To Social Media
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_promo" id="optionsRadios2" value="url" >
            Redirect to Url
          </label>
        </div>
      
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="tvc_promoter" placeholder="value(optional)">
      </div>
    </div>
        
    <div class="form-group">
      <div class="col-md-8 col-md-offset-5">
        <button type="reset" class="btn btn-danger button">Cancel</button>
        <a href="#dropdown4" onClick="setOption('false')" data-toggle="tab" aria-expanded="true" style="color:#fff"><button type="button" class="btn btn-primary button" onClick='sendForm(3)'>Next</button></a>
        <input type="hidden" name="formNo" value="3">
      </div>
    </div>
  </fieldset>
</form>

    </div>

  </div>
  
  <div class="tab-pane fade" id="dropdown4">
    <div class="container-fluid">
     
        <div class="legends">Facebook and Twitter links Generator</div>
      <form id="customText" class="form-horizontal">
  <fieldset>
    <legend></legend>
         
    
    <div class="form-group">
      <label for="title" class="col-md-5  control-label">Post Title</label>
      <div class="col-md-3 ">
        <input id="sharetext"  type="text" class="form-control" name="title">
      </div>
    </div>

    
     <div class="form-group" style="display:none">
      <label for="inputWeb" class="col-md-5  control-label">Image To be Shared</label>
      <div class="col-md-3 ">
        <input type="text" class="form-control" name="imgUrl" placeholder="product/service image">
      </div>
    </div>

    <div class="form-group">
      <label for="inputWeb" class="col-md-5  control-label">Url</label>
      <div class="col-md-3 ">
        <input id="shareurl" type="text"  class="form-control" name="fbUrl" placeholder="product/website url">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-8 col-md-offset-5">
        <button type="reset" class="btn btn-danger button">Cancel</button>
        <a href="#design" onClick="setOption('true')" data-toggle="tab" aria-expanded="true" style="color:#fff"><button type="button" class="btn btn-primary button" onClick='sendForm(4)' style="width:15%">Start Designing</button></a>
        <input type="hidden" name="formNo" value="4">
        
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>
  
  <div class="tab-pane fade" id="dropdown5" style="height:50%">
    <div class="container-fluid" style="padding-bottom:5%;">
     
        <div class="legends">Add to the Head portion of ur website</div>
        <legend ></legend>
        <div style="padding-bottom:3%;"></div>
      
  <div id='main' class="col-md-5 col-md-offset-1" style="left:5%;top:20%;width:auto;text-anchor:middle; border:solid 1px #D3D3D6;background-color:#D3D3D3; text-align: justify">

<?php $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';?>
<h4><?php echo htmlentities("<script src='http://nps.tatvic.com/assets/tags/commonFunc.js' async='true' type='text/javascript'></script>"); ?><br/><br/>  
  <?php echo htmlentities("<script src='http://nps.tatvic.coms/assets/tags/".$this->session->userdata("username").".js' async='true' type='text/javascript'></script>"); ?></br>
</h4>
        </div>
    </div>
  </div>


  <div class="tab-pane fade" id="design" >
    
     <div class="container" style="float:right;right:20%">
       <nav> <ul class="pagination" style="float:right;right:29%">
              <li class="disabled"><a href="#">&laquo;</a></li>
              <li onClick="getPage(1)" ><a href="#">Nps Main Page</a></li>
              <li onClick="getPage(2)" ><a href="#">Detractors Feedback</a></li>
              <li onClick="getPage(3)" ><a href="#">Passive Promoter Feedback</a></li>
              <li onClick="getPage(4)" ><a href="#">Thank You & Share</a></li>
              <li class="disabled"><a href="#">&raquo;</a></li>
            </ul>
        </nav>

         <div id="openModal" class="modalDialog" >
            <div contentEditable='true' id="boxb" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> 
                <a href="#" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img tip" tip="company logo" src="" alt="Here comes your logo"></CENTER>
                
                <h3 class="popTitle">We'd love your help.</h3>                        
                <p style="text-align:center" id="qstn" >How likely is it that you would recommend</p><p style="text-align:center" id="qstn"> our service to a friend?</p>
                 
            </div>

             <div contentEditable='true' id="page2" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)" style="height:350px"> 
                <a href="#close" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img" src=""></CENTER>
                
                <h3 class="popTitle">We regret for your inconvenience,please give us your suggestion how to make our services better.</h3>
                  <textarea class="form-control" cols="15" rows="6" style="posiiton:absolute;width:100%px;height:100%px"></textarea>           
                  <center><button type="button"  class="btn btn-info feedback1" style="margin-top:25px;width:150px">Submit</button></center>
            </div>

              <div contentEditable='true' id="page3" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)" style="height:350px"> 
                <a href="#close" title="Close" class="close">X</a>
                <CENTER><img class="nps_logo_img" src=""></CENTER>
               
                <h3 class="popTitle">We regret for your inconvenience, please give us your suggestion how to make our services better.</h3>
               <textarea class="form-control" cols="15" rows="6"  style="posiiton:absolute;width:100%px;height:50%px"></textarea>
                
                             
                  <center><button type="button"  class="btn btn-info feedback2" style=" margin-top:25px;width:150px">Submit</button></center>
            </div>

            <div contentEditable='true' id="page4" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> 
                <a href="#close" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img" src=""></CENTER>
                

              </br>

                <h1 class="popTitle">Thank you for your feedback!</h1>
                <CENTER><p>Your feedback will help us improve our services
                  to get your job done even better</p></CENTER><br/>
                 <CENTER><b><p>Spread the word!</p></b></CENTER><br/>


                <div id="tvc_social">
                  <a id="tvc_twitter" style="margin-left:5%;" href="" target="_blank">
                  <img src="http://d2blwevgjs7yom.cloudfront.net/npssulekhaimageV3/twtr.png"></a>
                  <a id="tvc_fb" style="margin-left:40%;" href="" target="_blank">
                  <img src="http://d2blwevgjs7yom.cloudfront.net/npssulekhaimageV3/fb.png"></a></div>
             
                             
                  
              </div>
              
           </div>
     </div>
     
          
  </div>

  
  </div>

<div id="properties" class="col-md-3 collapse" style="float:left;left:75%;position:absolute;top:15%;display:none">
      <div class="panel panel-primary resize-container resize-drag" style="overflow-x: hidden;overflow-y: scroll;height:60%;background-color:#fff" >
                <div class="panel-heading" style="background-color:#151515">
                  <h3 class="panel-title">Properties Window</h3>
                </div>

                <div class="panel-body table-responsive" style="background:#fff">
                 <table class="table" style="position:relative;color:#011627;background-color:#fff">
                   <thead>
                     <tr>                                            
                        <th colspan="2"  ><div data-toggle="collapse" data-target="#modalprop" style="color:#3884FC"><span class="caret"></span> &nbsp;&nbsp; Modal Properties</div></th>
                      </tr>
                      
                    </thead>
                   
                    <tbody id="modalprop" class="collapse in">
                      <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                     
                      <tr>
                        <td>background-color</td>
                        <td><input id="bckclr" class="jscolor form-control input-sm" onchange="updatebk(this.jscolor)" value="ffffff"></input></td>
                      </tr>
                      <tr>
                        <td><label class="checkbox-inline"><input id ="allbclr" name="bkclr" type="radio" checked="">All Pages</label></td>
                        <td><label class="checkbox-inline"><input id ="bclr" name="bkclr" type="radio" checked="">Current Page</label></ts>
                      </tr>
                      <tr>
                        <td>Fore-color</td>
                        <td><input id="frclr" class="jscolor form-control input-sm" onchange="updatefc(this.jscolor)" value="000000"></input></td>
                        
                      </tr>
                      <tr>
                        <td><label class="checkbox-inline"><input id ="allfclr"  name='fclr' type="radio" >All Pages</label></td>
                        <td><label class="checkbox-inline"><input id ="allfclr" name='fclr' type="radio" >Current Page</label></td>
                      </tr>
                      <tr>
                        <td>Width</td>
                        <td><input  id="width"  onchange="updateWidth(document.getElementById('width').value)" class="form-control input-sm" value="750"></input></td>
                      </tr>
                       <tr>
                        <td>Height</td>
                        <td><input id="height"  onchange="updateHeight(document.getElementById('height').value)" class="form-control input-sm" value="325"></input></td>
                      </tr>
                    </tbody>
                    <thead>
                     <tr>                                            
                        <th colspan="2"><div data-toggle="collapse" data-target="#ratingProp" style="color:#3884FC"><span class="caret"></span> &nbsp;&nbsp; Rating Properties</div></th>
                      </tr>
                      
                    </thead>
                    <tbody id="ratingProp" class="collapse">
                       <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                      <tr>
                        <td>Template</td>
                        <td>
                          <select id="ratingType" class="form-control input-sm" style="color:#000000"  onChange="setRatings(value,0)">
                            <option value='0'>none</option>
                            <option value='1'>Star Rating</option>
                            <option value='2'>Hearts</option>
                            <option value='3'>Smiley Faces</option>
                            <option value='4'>Custom Svg</option>
                          </select>
                        </td>
                      </tr>
                      
                      <tr>
                        <td>size</td>  
                        <td>
                           <select  class="form-control input-sm" style="color:#000000" onChange="setRatingSize(value)">
                            <option value="none">none</option>
                            <option value="xl">Extra large</option>
                            <option value="lg">Large</option>
                            <option value="md">medium</option>
                            <option value="sm">Small</option>
                            <option value="xs">Very Small</option>

                          </select>
                        </td>
                      </tr>
                                          
                    </tbody>
                     <thead>
                     <tr>                                            
                        <th colspan="2"><div data-toggle="collapse" data-target="#imgprop" style="color:#3884FC"><span class="caret "></span>&nbsp;&nbsp;&nbsp; Logo Properties</div></th>
                      </tr>
                      
                    </thead>
                    <tbody id="imgprop" class="collapse">
                       <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                      <tr>
                        <td>Source Url</td>
                        <td><input id="imgUrl"  class="form-control input-sm" onchange="setImg()" placeholder="(Use Http based url)" ></input></td>
                      
                      </tr>
                      <tr>
                        <td>Alternate text</td>
                        <td><input id="imgAlt"  class="form-control input-sm" onchange="setImg()" value="DemoLogo" placeholder="(company/website name)" ></input></td>
                      
                      </tr>
                      <tr>
                        <td>Height</td>
                        <td><input id="imgHeight"  class="form-control input-sm" onchange="setImg()" value='auto'  ></input></td>
                      
                      </tr>

                      </tr>
                      <tr>
                        <td>Width</td>
                        <td><input id="imgWidth"  class="form-control input-sm" onchange="setImg()" value='auto'></input></td>
                      </tr>
                    </tbody>
                              
                    <thead>
                     <tr>                                            
                        <th colspan="2"><div data-toggle="collapse" data-target="#closeprop" style="color:#3884FC"><span class="caret"></span> &nbsp;&nbsp; Close Button Properties</div></th>
                      </tr>
                      
                    </thead>
                    <tbody id="closeprop" class="collapse">
                       <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                      
                      <tr>
                        <td>Opacity</td>
                        <td>
                          <input  id="closeOpacity" type="number" min=0 max=1 step=0.1 onchange="updateclsopc (value)" class="form-control input-sm" value="1"></input>
                        </td>
                      
                      </tr>
                      <tr>
                        <td>Background</td>
                        
                         <td><input id="clsBckClr" class="jscolor form-control input-sm" onchange="updateclsbkclr(value)" value="000000"></input></td>
                       
                      
                      </tr>
                      <tr>
                        <td>Fore Color</td>
                     
                         <td><input id="clsFrClr" class="jscolor form-control input-sm" onchange="updateclsclr(value)" value="ffffff"></input></td>
                        
                      </tr>

                     
                     
                    </tbody>
                    <thead>
                     <tr>                                            
                        <th colspan="2"><div data-toggle="collapse" data-target="#fonts" style="color:#3884FC"><span class="caret"></span> &nbsp;&nbsp; Font Family Properties</div></th>
                      </tr>
                      
                    </thead>
                    <tbody id="fonts" class="collapse">
                       <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                      
                      <tr>
                        <td>Font Family</td>
                        <td>
                          <select class="form-control input-sm" onChange="changeFonts(value)">
                            <option value=1>Helvetica Neue</option>
                            <option value=2>Brush Script MT</option>
                             <option value=3>Papyrus</option>
                              <option value=4>Georgia</option>
                               <option value=5>Century Gothic</option>
                                <option value=6>Perpetua</option>

                          </select> 
                          
                      </tr>
                      

                  </tbody>
                                
                 </table>

                </div>
              </div>

          </div>
<div id="propTab" class="collapse" style="position:fixed;top:8%;float:left;margin-left=5%;width:50px;height:10px;z-index:9999;cursor:pointer;"><center><span class=" rotate glyphicon glyphicon-cog" ><div style="height:50%;"><h3>Developer Options</h3></div></span></center></div>

</div>


    
  

    
  </div>
</div>

<!--panels-->
<div id="editor" class="collapse">
<div class="col-lg-4">
             <div class="panel panel-warning resize-container resize-drag ui-widget-content">
                <div class="panel-heading" style="background-color:#151515"> 

                  <center><h1 class="panel-title"><strong>HTML<span class="glyphicon glyphicon-triangle-top" aria-hidden="true" style="float:right"></span></strong></h1></center>

                </div>
                <div class="panel-body" >
                 
                  <pre contentEditable='true' id="htmlcode" style="width: 100%; height: 70%; overflow-y: scroll;" class="prettyprint"  style="border:4px solid #88c">
                    
               </pre>
              </div>
            </div>
</div>
<div class="col-lg-4">
             <div class="panel panel-danger resize-container resize-drag ui-widget-content">
                <div class="panel-heading" style="background-color:#151515">
                  <center><h1 class="panel-title"><strong>JavaScript<span class="glyphicon glyphicon-triangle-top" aria-hidden="true" style="float:right"></span></strong></h1></center>
                </div>
                <div class="panel-body">

                 <pre contentEditable='true' style="width: 100%; height: 70%; overflow-y: scroll;" class="prettyprint" id="quine" style="border:4px solid #88c"> Put your JavaScript code here!</pre>
                </div>
              </div>
</div>
<div class="col-lg-4">
  
     <div class="panel panel-success resize-container resize-drag ui-widget-content">
          <div class="panel-heading" style="background-color:#151515">
                 <center> <h1 class="panel-title"><strong>CSS<span class="glyphicon glyphicon-triangle-top" aria-hidden="true" style="float:right"></span></strong></h1></center>
          </div>
              <div class="panel-body">
                
                 <pre  contentEditable='true' style="width: 100%; height: 70%; overflow-y: scroll;" class="prettyprint" id="quine" style="border:4px solid #88c">.modalDialog {
                color: #000;

                 opacity:1;
                pointer-events: auto;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0);
                z-index: 99999;
                opacity:1;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {
               
            }

            .modalDialog > div {
               width: 700px;
               height: 100%;
               /*position: relative;
               margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 10px;
               background: #e7e5d9;
               border: 1px;
               border-style:solid;
               box-shadow:10px 10px 15px #888888; 
               /*background: -moz-linear-gradient(#fff, #999);
               background: -webkit-linear-gradient(#fff, #999);
               background: -o-linear-gradient(#fff, #999);
               */
            }
            .close {
              opacity: 1;
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position:inherit;
                right: -12px;
                text-align: center;
                top: -10px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                -moz-box-shadow: 1px 1px 3px #000;
                -webkit-box-shadow: 1px 1px 3px #000;
                box-shadow: 1px 1px 3px #000;
            }
            .close:hover { background-color: #000; }
            .popTitle {
                 text-align: center;
                 
            }</pre>
              </div>
          </div>
                 
  </div>
</div>
</div>
<div id="toolTip" style="position:absolute;top:0;width:auto;height:20px;opacity:0.7;background:#fff;color:#000;display:none;z-index:9999"></div>
<div class="fontEdit" id="formatText" style="position:absolute;top:0;width:auto;height:20px;opacity:0.8;background-color:#FFF;display:none;cursor:pointer;">
       <span class="glyphicon glyphicon-font tip" tip="Fonts">
       

       </span>

      <span class="glyphicon glyphicon-bold tip" tip="Bold">
      </span>

      <span class="glyphicon glyphicon-italic tip" tip="Italics">
      </span>

      <span class="glyphicon glyphicon-align-left tip" tip="Left Justify">
      </span>

     <span class="glyphicon glyphicon-align-center tip" tip="Center Align">
      </span >

      <span class="glyphicon glyphicon-align-right tip" tip="Right Justify">
      </span>
     
      <span class="glyphicon glyphicon-align-justify tip" tip="Justify">
      </span>

</div>


         <script type="text/javascript">
    
var Base64 = {


    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",


    encode: function(input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = Base64._utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

        }

        return output;
    },


    decode: function(input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }

        }

        output = Base64._utf8_decode(output);

        return output;

    },

    _utf8_encode: function(string) {
        string = string.replace(/\r\n/g, "\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {

            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if ((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }

        }

        return utftext;
    },

    _utf8_decode: function(utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while (i < utftext.length) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if ((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i + 1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i + 1);
                c3 = utftext.charCodeAt(i + 2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

}
    
/*    var encode = document.getElementById('encode'),
    decode = document.getElementById('decode'),
    output = document.getElementById('output'),
    input = document.getElementById('input');


encode.onclick = function() {
    output.innerHTML = Base64.encode(input.value);
}
    
decode.onclick = function() {
    var $str = output.innerHTML;
    output.innerHTML = Base64.decode($str);
}    

    */


    


$(document).ready(function(){

      $(".close").click(function() {
            alert("closed clicked"); 
          });

    $("[name='my-checkbox']").bootstrapSwitch();
  }
);
 

   
   

function saveDraftLocal(){

$('#boxb').attr("contentEditable","false");
$('#page2').attr("contentEditable","false");
$('#page3').attr("contentEditable","false");
$('#page4').attr("contentEditable","false");

 /*var  contentEl = document.getElementById("rec_bar1");
   if(contentEl!=null){
    localStorage['rectBar1'] = contentEl.innerHTML;
console.log(localStorage['rectBar1']);
}*/

$('#rating').remove(); 
$('#boxb').remove('center')


var key = "draft";

localStorage[key]=null;

  var  contentEl = document.getElementById("openModal");
    localStorage[key] = contentEl.innerHTML;

 if(localStorage['ratingTypeInt']!=null){
setRatings(localStorage['ratingTypeInt']);

if (localStorage['ratingSize']!=null){ 
      setRatingSize(localStorage['ratingSize']);
      }
console.log("ratingTypeInt:"+localStorage['ratingTypeInt']);
}

jscolor=$('#boxb').css('background-color');
 $('#rating.container-fluid').css('background-color',jscolor);

  /*var  contentEl = document.getElementById("rec_bar1");
   if(contentEl!=null){
     contentEl.innerHTML=localStorage['rectBar1'] ;
}*/
  

    $('#boxb').attr("contentEditable","true");
$('#page2').attr("contentEditable","true");
$('#page3').attr("contentEditable","true");
$('#page4').attr("contentEditable","true");

  saveDesignDb();



  var win = window.open('/index.php/preview');
  win.focus();
}

function saveDesignDb(){
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   /*$(document).ready(function() {
                 
                      $.post( 
                         "{!! URL::to('testjson') !!}",
                         { _token: $('meta[name="csrf_token"]').attr('content'),body: localStorage['draft']},
                         function(data) {
                            console.log(data);
                         }
                      );
                  
               });*/

  $(document).ready(function() {
  $body=Base64.encode(localStorage['draft']);
    $.ajax ({
    url:  "/index.php/createjs",
    type: "POST",
    data: { file:'<?php echo $this->session->userdata("username"); ?>',head:Base64.encode("<style> .title {font-size: 96px;} .modalDialog {position: fixed; font-family: Arial, Helvetica, sans-serif; display:none;top: 0;right: 0; bottom: 0; left: 0;background: rgba(0,0,0,0);z-index: 99999;opacity:0;-webkit-transition: opacity 400ms ease-in;-moz-transition: opacity 400ms ease-in;transition: opacity 400ms ease-in;pointer-events:none;}.modalDialog:target{opacity:1;pointer-events: auto;}.modalDialog > div {width: 720px; height: 325px;position: relative;margin: 10% auto; padding: 5px 20px 13px 20px; border-radius: 5px;background: #FFFFFF;border: 1px;border-style:solid; box-shadow:5px 5px 10px #888888;}.close {z-index: 99999;background: #606061;color: #FFFFFF;line-height: 25px;position: absolute;right: -12px;text-align: center;top: -10px;width: 24px;text-decoration: none;font-weight: bold;-webkit-border-radius: 12px;-moz-border-radius: 12px;border-radius: 12px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;box-shadow: 1px 1px 3px #000;}.close:hover { background: #000;}.popTitle {text-align: center;}.container{ margin: auto;width: 60%;padding: 10px;}p{text-align:center;line-height: .5em;}</style>"),draft:$body,ratingType:Base64.encode(localStorage['ratingType']),ratingTypeInt:localStorage['ratingTypeInt'],ratingSize:localStorage['ratingSize']},
    cache: false,
    dataType: "json",
    success: function(data){
     
    
        //console.log(Base64.decode(data.response));
      // alert(data.response);



    }
});  
}); 
  
}


function resetDesign(){
var r = confirm("You are about to destroy your design!! do you whish to proceed?");
if (r == true) {
    localStorage.clear("draft");
 location.reload();
  //alert("cache cleared");
    setRatings('1');
    setRatingSize('md');
} else {
    x = "You pressed Cancel!";
}
  

    
}


function sendForm(value)
{
  console.log(value);
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
switch(value){

  case 1://general setting form 
        //alert(value);
        $.ajax ({
      url:  "/index.php/testjson",
      type: "POST",
      data: $('#gnrSet').serialize(),
      cache: false,
      dataType: "json",
      success: function(data){
   
         
        console.log(data);
        
      }
    });
      break;
  case 2:
  //alert(value);
     $.ajax ({
      url:  "/index.php/testjson",
      type: "POST",
      data: $('#srvConfig').serialize(),
      cache: false,
      dataType: "json",
      success: function(data){
   
         
        console.log(data);
    }
    });
          break;
   case 3:
   //alert(value);
   $.ajax ({
    url:  "/index.php/testjson",
    type: "POST",
    data: $('#workFlow').serialize(),
    cache: false,
    dataType: "json",
    success: function(data){
 
       
      console.log(data);
      }
    });
        break;
   case 4:
   //alert(value);
   $.ajax ({
    url:  "/index.php/testjson",
    type: "POST",
    data: $('#customText').serialize(),
    cache: false,
    dataType: "json",
    success: function(data){
 
       
      console.log(data);
     localStorage['fblink']=data;
      $('#customText').append('<center><a id="fblink" target="_blank" href='+data+'  style="color:#ffffff;">Click Me facebook !</a></center><br/>');
      $('#customText').append('<center><a id="tweetlink" target="_blank" href="https://twitter.com/intent/tweet?text='+document.getElementById('sharetext').value+'&url='+document.getElementById('shareurl').value+'style="color:#ffffff;">Click Me twitter !</a></center>');
      $('#fblink').show();
      $('#tvc_fb').attr('href',data);
      $('#tvc_twitter').attr('href','https://twitter.com/intent/tweet?text='+document.getElementById('sharetext').value+'&url='+document.getElementById('shareurl').value);
      }
    });
   break;
  }
}

 </script>
   <script>//<![CDATA[
(function () {
  function html(s) {
    return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  }
 
  var quineHtml = html(document.getElementById("openModal").innerHTML);
 
  // Highlight the operative parts:
  quineHtml = quineHtml.replace(
    /&lt;script src[\s\S]*?&gt;&lt;\/script&gt;|&lt;!--\?[\s\S]*?--&gt;|&lt;pre\b[\s\S]*?&lt;\/pre&gt;/g,
    '<span class="operative">$&</span>');
 
  document.getElementById("htmlcode").innerHTML = quineHtml;
})();
//]]>

/*$(document).ready(
function(){
var ca = document.createElement("script"),t; 
                ca.type = "text/javascript"; 
                ca.async = true; 
                ca.src = "assets/tags/{{ Auth::user()->name }}.js"; 
                t = document.getElementsByTagName("script")[0]; //find all the script tag, go to the first script tag
                t.parentNode.insertBefore(ca, t);

}

  );
*/



</script>


    </body>
</html>