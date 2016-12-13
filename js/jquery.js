 // jQuery function for tab selecting...
 // $(document).ready we use to be sure that whole document is loaded
 // before we fire action, in this case we use data-toggle selector with
 // $(this) current element
  $(document).ready(function() {
$('[data-toggle="tab"]').click(function(e) {
var $this = $(this),
loadurl = $this.attr('href'),
targ = $this.attr('data-target');

$.get(loadurl, function(data) {
$(targ).html(data);
});

$this.tab('show');
return false;
});
 });
 
 $(document).ready(function(){
     $("#driverTraversing").click(function(){
         
         $("h5").add(".traversingP").add(".traversingSpan").add(".traversingDiv").css({background: '#006699', color: '#fff'});
         // The parent() method returns the direct parent element of the selected element, in this case class container,
         // while in the parents() method we will returning all ancestor elements of the selected element.
         // in parentsUntil() we will returning ancestors between two selected elements.
         $(".parentDiv").parent().css({"background": "#d5d5d5", "border": "1px solid grey"});
         // The children() method returns all direct children of the selected element and
         // this method only traverse a single level down the DOM tree
         $(".childrenDiv").children().css({"color": "white", "border": "1px solid black"});
         // The closest() method returns the first ancestor of the selected element.
         $("span").closest("span").css({"color": "black", "border": "1px solid yellow"});
         // The contents() method returns all direct children, and filter text
         $(".contentsExample").contents().filter("i").wrap("<b/>");
         // The filter() method returns elements that match a certain criteria.
         $("p").filter(".traversingP").css({background: "yellow", color: "green"});
         // Returns an element with a specific index number of the selected elements, in this
         // case index (3) with class .contentsExample
         // we could use slice() in this manner if we have multiple elements, for example from slice(3) we start to show us elements
         // from index 3, or slice(1,3), or with negative order slice(-3), slice(-4,-2)
         $("p").eq(3).css("background-color", "grey");
         // The find() method returns descendant elements of the selected element.
         var findTree = $(".childrenDiv").find("p, span, div").map(function(){
         return this.tagName;}).get().join(", ");
         $(".childrenDiv").after("<h3>" + findTree + "<h3>");
         // First p element of #traversing
         $("p").first().css("background-color", "red");
         // Last p element of #traversing
         $("#traversing p").last().css("background-color", "red");
         // span inside p element, with has() method, with is() that checks if statement 
          if ($("p").parent().is("div")) {
          $("p").has("span").not(".keyPress").css("background-color", "green");
        }
        // .spanChecker with next(), select next element inside target element,
        // with nextAll() we will select all elements after starting one, and with
        // nextUntil() we will select start and last element to be effected, and all
        // between those two
          $(".spanChecker").next().css("color", "orange");
             if ($("p").parents().is("#traversing")) {
          $("#traversing p").not(".traversingP, #firstElement, .secondLevel, .spanChecker, .lastPelement, .contentsExample, #spanCheckerID").append(" paragraph with not() included.");
        }
        // The prev() method returns the previous sibling element of the selected element, which is in this case #spanCheckerID
        // prevAll() will return all previous sibling element, and prevUntil() method returns all previous sibling elements between the selector and stop.
        // The siblings() method returns all sibling elements of the selected element, both in parent and children order
        // or prev() and next() combine.
         $(".lastPelement").prev().css({"color": "red", "border": "1px solid red"});
        
          
        
     });
     
 });

        
    // Animations, case with one() to prevent constant behavior
    $(document).ready(function(){
         $(".animationClass").one("click dblclick", function(){
        $(this).animate({fontSize: "+=6px"});
    });
    // Animations with on()...
     $("#animationID").on("click dblclick", function(){
        $(this).animate({fontSize: "+=8px"});
        $(this).animate({letterSpacing: "+=5px"});
    });
    // Different versions of manipulation, with delay(), fadeIn, fadeToggle()
    // fadeTo(), toggle(), clearQueue() actions
     $("#driverANIMATIONS").click(function(){
        var div = $(".animatedClass");
        var txt = "</br>Div properties with initial padding parameters: </br>";
        div.animate({right: '0px', height: '+=100px', opacity: '0.5'}, "slow");
        div.animate({width: '+=200px', opacity: '0.8'}, "slow");
        div.animate({height: '-=50px', opacity: '0.5'}, "slow");
        div.animate({width: '+=200px', opacity: '0.8'}, "slow");
        div.animate({fontSize: '+=3em'}, "slow");
        // Adding info to txt variable
        txt += "Width of div: " + $(".animatedClass").width() + "</br>";
        txt += "Height of div: " + $(".animatedClass").height() + "</br>";
        txt += "Inner width of div: " + $(".animatedClass").innerWidth() + "</br>";
        txt += "Inner height of div: " + $(".animatedClass").innerHeight()  + "</br>";
        txt += "Outer width of div: " + $(".animatedClass").outerWidth() + "</br>";
        txt += "Outer height of div: " + $(".animatedClass").outerHeight();
        $(".animationClassProperties").html(txt);
    $("#divFadeInBlack").delay("slow").fadeIn();
    $("#divFadeInLightGreen").fadeToggle(3000);
    $("#divFadeInLightBlue").toggle(5000).fadeIn();
    $("#divFadeInRed").fadeTo("slow", 0.7);
    $("#divFadeInOrange").delay(4000).fadeIn();
    // clone() method in action
    $(".animationClass").clone().appendTo(".animationClassProperties");
    });
    // clearQueue() to stop behavior, finish() to stop immediately
      $("#driverStopANIMATIONS").click(function(){
        $(".animatedClass").clearQueue();
    });
    
    // slideToggle() is simiral to slideUp and slideDown functions...
       $("#driverSLIDE").click(function(){
        $(".slidePanel").slideToggle("slow");
    });
    // addClass() to change dynamicaly properties
    // .removeClass().addClass() ia action if we want to completly change classes
      $("#driverAddClass").click(function(){
        $(".slidePanel").addClass("addClass");
    });
    // toggleClass()  This method toggles between adding/removing classes
     $("#driverRemoveClass").click(function(){
        $(".slidePanel").removeClass("addClass");
    });
  
});

   // jQuery event with change action
    $(document).ready(function(){
    $(".change").change(function(event){
        var message = "The text has been changed.";
        $("#stageCHANGE").prepend(message + "<br />");
      
    });
    // jQuery event with blur action
      $(".blur").blur(function(){
        var message = "This input field has lost its focus.";
        $("#stageCHANGE").prepend(message +  "<br />");
    });
    
     $(".selected").select(function(){
         var message = "Text has been selected.";
        $("#stageCHANGE").prepend(message +  "<br />");
    });
    // Event with which key number was entered on keydown();
    $(".changeKey").keydown(function(event){ 
        var message = "Pressed key was: ";
        $("#stageCHANGE").prepend(message + event.which + "<br />");
          });
          
           $(".changeKeyUpDown").keydown(function(){
        $(".changeKeyUpDown").css("background-color", "#d5d5d5");
    });
    $(".changeKeyUpDown").keyup(function(){
        $(".changeKeyUpDown").css("background-color", "#e9e9e9");
    });
    i = 0;
      $(".changeKeyUpDown").keypress(function(){
        $("span").text(i += 1);
    });
    
});

// HTML/CSS jQuery events
       $(document).ready(function(){
           
           $("#driverHTMLCSS").click(function(){
               // after(), before()
               $(".adding").after("<p>after(); function in action</p>");
               $("<p>insertAfter(); function in action</p>").insertAfter(".adding");
               $("<p>insertBefore(); function in action</p>").insertBefore(".adding");
               $(".adding").before("<p>before(); function in action</p>");
               // detach(), removes elements, simiral to remove(), which removes data and events
               // and empty(), who's removing content of element
               $(".dataInfo").detach();
               $(".adding").empty();
               // Set element attr
               $("img").attr({width: "100", height: "100", title: "jQuery"});
               var offsetValue = $(".adding").offset();
               $(".offsetValue").html("Offset values of .adding class: Top: " + offsetValue.top + " Left: " + offsetValue.left);
               var positionValue = $(".adding").position();
               $(".offsetValue").append("<br />Position values of .adding class: Top: " + positionValue.top + " Left: " + positionValue.left);
               // The prop() method sets or returns properties and values of the selected elements...
               // unlike attr() which only returns values, to remove prop we use removeProp();
               var $propValue = $(".propValue");
               $propValue.prop("color", "006699");
               $propValue.append("<br />The color property has the following value: " + $propValue.prop("color"));
                // to replace content of element, we use replaceWith(), and to replace more elements we use replaceAll();
               $(".propValue").replaceWith("Replaced text with using of replaceWith();<br />"); 
               $(".textValue").text("Remove some text, and add more text in selected element with text();, also use wrap() and wrapInner() functions.");
                // to remove attr() from element, we use removeAttr();
               $(".propValue").removeAttr("class");
               // Example of using wrap(); with instant class adding, for wraping all elements
               // we would use wrapAll(), and for unwrap, we would use unwrap function.
               $(".textValue").wrap("<div class='wrapClass'></div>");
               // wrapInner() allow us to wrap inside the element...
               $(".textValue").wrapInner("<b/>");
               
               
              
               
           });
       });

        // jQuery example with JSON 
         
         $(document).ready(function() {
              var dataJson = "";
            $("#driverJSON").click(function(){
				
               $.getJSON('../jquery/getjson.json', function(json) {
                 $.each(json, function (key, value) {
                dataJson += "Club: " + value.club + "<br /> City: " + value.city + "<br /> Country: " + value.country + "<hr />";
                $('#stageJSON').html(dataJson);
                $('#driverJSON').hide();
});
                 
               });
					
            });
         });
         
         // jQuery examples load content from external url on click action
        // we can use optional the dblclick() for some cases...
        
         $(document).ready(function() {
            $("#driverPHP").click(function(event){
               $('#stagePHP').load('../jquery/jqueryload.php');
               $('#driverPHP').hide();
            });
         });
         
             // Example of AJAX post jQuery action trigger
             
$("#driverAJAX").click(function(e)
{
    $.ajaxSetup({
  url : "../jquery/ajax.php",
  global: false,
  type: "POST"
});
    $.ajax(
    {
        data : {checker:"success"},
        success:function(data, textStatus, jqXHR) 
        {
            // Show response from ajax registration proccess...
            $("#stageAJAX").html(data);
            $('#driverAJAX').hide();
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
        }
    });
    e.preventDefault(); //STOP default action
    
}); 



// DOM tab actions

$(document).ready(function(){
    $(".currentTarget").hover(function(event){ 
         event.preventDefault();
         // Returning value of innerHTML
         $("#stagecurrentTarget").html("Returning values are: " + event.currentTarget.innerHTML);
         // Returning nodeName (Paragraph, input, button, etc...)
         $("#stagecurrentTarget").append("<br /> nodeName is : " + event.currentTarget.nodeName);
         // Checking does preventDefault() is called firs...
         $("#stagecurrentTarget").append("<br /> Was preventDefault() called: " + event.isDefaultPrevented() + "<br />");
         // delegateTarget, for changing css dynamicaly
         $(event.delegateTarget).css({
            "color": "white",
            "background-color": "#006699"
        });
          // Adding new button inside other div, and showing event.result on button click
          // with timeStamp event for showing the number of miliseconds, after JAN. 1st, 1970
          jQuery('<button/>', {
    id: 'buttonResult',
    class: "btn btn-danger btn-sm",
    text: 'event.result'
}).appendTo('#stagecurrentTarget');
 $("#buttonResult").click(function(){
        return "Return value on button click with event.result action! <br /> ";
    });
    $("#buttonResult").click(function(event){
        $("#stagecurrentTarget").prepend(event.result + " milliseconds after January 1, 1970: " + event.timeStamp + "<br />");
         
    });  
    
     $("#stagecurrentTarget").append("<br />");
    
       // Adding new button inside other div, and showing event.target on button click;
       
          jQuery('<button/>', {
    id: 'buttonTrigger',
    class: "btn btn-success btn-sm",
    text: 'Trigger'
}).appendTo('#stagecurrentTarget');
// Adding div
 jQuery('<div/>', {
    id: 'divTrigger',
    text: 'Trigger DIV',
    style: 'background-color: green'
}).appendTo('#stagecurrentTarget');
// Adding paragraph
jQuery('<p/>', {
    id: 'pTrigger',
    text: 'Trigger P',
    style: 'background-color: green'
    
}).appendTo('#stagecurrentTarget');
// Return which DOM element was clicked...
$("#buttonTrigger, #divTrigger, #pTrigger").click(function(event){
        $("#stagecurrentTarget").prepend("Triggered by a " + event.target.nodeName + " element.<br />");
        
    });
        // Adding new div inside other div, a showing mouse position, with mousemove();
          jQuery('<div/>', {
    class: 'mouseposition',
}).appendTo('#stagecurrentTarget');
$(document).mousemove(function(event){ 
        $(".mouseposition").text("Mouse position is at :: X: " + event.pageX + ", Y: " + event.pageY); 
    });
    // Adding new div, and preparing for namespace event
          jQuery('<div/>', {
    class: 'clickOnThis',
    text: 'Click on this: Namespace action!'
}).appendTo('#stagecurrentTarget');
         $(".clickOnThis").css("background-color", "#007799");
        
         $(".clickOnThis").on("custom.namespace",function(event){
        
    });
    // Add namespace and remove on mouseout down
    $(".clickOnThis").click(function(event){
        $(this).trigger("custom.namespace");
       jQuery('<div/>', {
    id: 'namespace',
    text: 'Custom namespace action!'
}).appendTo('#stagecurrentTarget');
 $("#namespace").css("background-color", "#008899");
 });  

   // On mouseenter(), use * selector to show what is nodeName.relatedTarget
     $("*").mouseenter(function(event){
        $("#relatedTarget").html("Related target is: " + event.relatedTarget.nodeName);
         $("#relatedTarget").css({
            "color": "white",
            "background-color": "#005599"
        });
    });
    // Event.type with click dblclick mouseover mouseout actions
     $("#stagecurrentTarget").on("click dblclick mouseover mouseout",function(event){
           $("#eventTarget").css({
            "color": "white",
            "background-color": "#004499"
        });
        $("#eventTarget").html("Event type: " + event.type);
    });
    
        
    });
});


   
   // Example of action on mouse hover over 
   $(document).ready(function(){
    $( "#hoverover" ).hover(function() {
           $('.modal').modal({
        show: true
    });
  });
  // Example of using focusin focusout actions...
   $("#focus").focusin(function(){
        $(".third-case").css("background-color", "#f2f2f2");
    });
    $("#focus").focusout(function(){
        $(".third-case").css("background-color", "#ffffff");
    });
    // Example of using mouseover mouseout actions...
     $("#mouse").mouseover(function(){
        $(".third-case").css("background-color", "#d5d5d5");
    });
    $("#mouse").mouseout(function(){
        $(".third-case").css("background-color", "#ffffff");
    });
    $("#focus").mouseup(function(){
        $(".third-case").append("<p style='color:green;'>Mouse button released.</p>");
    });
    $("#focus").mousedown(function(){
        $(".third-case").append("<p style='color:red;'>Mouse button pressed down.</p>");
    });
         
});

