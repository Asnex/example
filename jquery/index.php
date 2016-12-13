<!DOCTYPE html>
<html lang="en">
    <head>  
      <title>jQuery</title>
     
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
      crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/jquery.css">
        <link rel="icon" href="../images/jquery-icon.ico" type="image/x-icon" />
   
   </head>
    <div class="col-md-12">
    <div class="col-md-5"></div>  
    <div class="col-md-2 cover"><img class="imgCover" src="../images/jquery-cover.png" /></div> 
    <div class="col-md-5"></div> 
    </div>
   <body>
	<div class="col-md-12">
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand">jQuery events</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
   
     <div class="tabbable">
<ul class="nav nav-tabs navbar-right nav nav-tabs" id="myTabs">
<li class="active"><a href="#traversing" data-toggle="tab">Traversing</a></li>
<li><a href="#animations" data-toggle="tab">Animations</a></li>
<li><a href="#change" data-toggle="tab">Change</a></li>
<li><a href="#htmlcss" data-toggle="tab">HTML/CSS</a></li>
<li><a href="#ajax" data-toggle="tab">Ajax</a></li>
<li><a href="#dom"   data-toggle="tab">DOM</a></li>
<li><a href="#hover"   data-toggle="tab">Hover</a></li>
</ul>


</nav>
    <hr />
 </div>
<div class="tab-content">
<div class="tab-pane active" id="traversing">
    <div class="col-md-12 traversing_case">
        <div class="container">
             <h4>Traversing events</h4>
            <input type="button" id="driverTraversing" class="btn btn-primary" value="Traversing driver" />
            <div class="parentDiv">
            <div class="childrenDiv">
            <h5>Traversing example for element h</h5>
            <p id="firstElement">First p element</p>
            <p class="traversingP">Traversing example for element p</p>
            <span class="traversingSpan">Traversing example for element span</span>
            <div class="traversingDiv">Traversing example for element div
            <p class="secondLevel">Traversing example for element second level, not affected by children() method.</p>
            
            </div>
            
            </div>
            <p class="contentsExample"><i>Some italic text</i></p>
            <p class="spanChecker"><p id="spanCheckerID">spanChecker with next() method</p><span>Span inside p element</span></p>
            <p class="lastPelement">Last p element of #traversing</p>
        </div>
             </div>
    </div>
</div>
<div class="tab-pane" id="animations">
       <div class="col-md-12">
        <div class="container">
      <div id = "stageANIMATIONS">
          <h4>Animation events</h4>
         
          <p class="animationClass">Click to animate text within the class with one(just one per action, click & dblclick)...</p>
          <p id="animationID">Click to animate text within the id with on(infinite)...</p>
          <input type="button" id="driverSLIDE" class="btn btn-danger" value="slideToggle" />
           <br /> <br />
           <div class="slidePanel">SlideUp/Down!<br />
           <input type="button" id="driverAddClass" class="btn btn-primary" value="Add class" />
           <input type="button" id="driverRemoveClass" class="btn btn-danger" value="Remove class" />
           </div>
          
          <div class="animationClassProperties"></div>
              <br />
          <input type="button" id="driverANIMATIONS" class="btn btn-success" value="Start animation" />
          <input type="button" id="driverStopANIMATIONS" class="btn btn-danger" value="Stop animation" />
          <div class="animatedClass"> Animated div </div>

      </div>
       
        </div>

                 </div>
      <div class="col-md-12">
        <div class="container">
<div id="divFadeInBlack"></div>
<div id="divFadeInLightGreen"></div>
<div id="divFadeInLightBlue"></div>
<div id="divFadeInRed"></div>
<div id="divFadeInOrange"></div>
</div> </div>
     

                 </div>
    <div class="tab-pane" id="change">
       <div class="col-md-12 second-case">
        <div class="container">
      <div id = "stageCHANGE">
          <h4>Change on key action event</h4>
           <div class="form-group">
        <input type="text" class="form-control change" placeholder="Change"  />
        </div>
<p>Write something in the input field, and then click outside the field or press enter.</p>
<hr />
  <div class="form-group">
        <input type="text" class="form-control blur" placeholder="Blur"  />
       
        </div>
 <p>Write something in the input field, and then click outside the field to lose focus (blur).</p>
        <hr />
         <div class="form-group">
        <input type="text" class="form-control selected" value="Select me!" />
       
        </div>
 <p>Select text inside the input field.</p>
        <hr />
 <div class="form-group">
        <input type="text" class="form-control changeKey" placeholder="Enter key"  />
       
        </div>
 <p>Press any key to get which key number was pressed.</p>
 <hr />
 <div class="form-group">
        <input type="text" class="form-control changeKeyUpDown" placeholder="Enter key up/down"  />
       
        </div>
 <p>Press any key to view keydown() keyup() method's in action.</p>
 <p class="keyPress">Keypresses: <span>0</span></p>
      </div>
		
       
        </div>
                 </div>

</div>
<div class="tab-pane" id="htmlcss">
       <div class="col-md-12">
        <div class="container">
     
          <h4>HTML/CSS actions</h4>
         
           <input type="button" id="driverHTMLCSS" class="btn btn-default" value="Driver HTML/CSS" />
            <br /> <br />
           <p class="adding">---------------------------------</p>
           
           <p class="dataInfo">Some text with detach();</p>
           <p class="offsetValue"></p>
           <p class="propValue">Some style</p>
           <p class="textValue">Some text</p>
           <img src="../images/jquery-cover.png" />
        </div>
                 </div>

</div>
    
    <div class="tab-pane" id="ajax">
       <div class="col-md-12">
        <div class="container">
      <div id = "stageAJAX">
          <h4>post AJAX on click action</h4>
      </div>
		
          <input type="button" id="driverAJAX" class="btn btn-default" value="AJAX" />
          
            <div id = "stageJSON">
          <h4>getJSON</h4>
      </div>
		
          <input type="button" id="driverJSON" class="btn btn-default" value="JSON" />
          <hr />
            <div id = "stagePHP">
          <h4>Load jQuery on click action</h4>
      </div>
		
     <input type="button" id="driverPHP" class="btn btn-primary" value="Load" />
        </div>
                 </div>

</div>
    
    <div class="tab-pane" id="dom">
       <div class="col-md-12 second-case">
        <div class="container">
              <h4>DOM manipulations, hover to start</h4>
            
      <div id = "stagecurrentTarget">
            
     
      </div>
		  <div id="relatedTarget"> </div>
                  <div id="eventTarget"> </div>
            <p class="currentTarget">currentTarget.innerHTML</p>
        </div>
                 </div>
</div>    
    
<div class="tab-pane" id="hover">
  <div class="col-md-12 third-case">
        <div class="container">
    
          <h4>jQuery action on hover</h4>
          <button id="hoverover" class="btn btn-default">Hover</button>
          <hr />
           <h4>jQuery action on focusIn focusOut, with mouseup mousedown actions</h4>
          <button id="focus" class="btn btn-default">Focus</button>
           <hr />
           <h4>jQuery action on mouseover mouseout</h4>
          <button id="mouse" class="btn btn-default">Mouse</button>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     Bootstrap modal fire on hover action
    </div>
  </div>
</div>
        </div>
                 </div>
</div>    
    


</div> 
</div>
   
		<hr>
  
                
      
   </body>
	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
  crossorigin="anonymous"></script>
   <script type="text/javascript" src="../js/jquery.js"></script>
  
</html>