<!DOCTYPE html>
<html lang="en">
    <head>  
      <title>Upload file</title>
     
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
      crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/jquery.css">
   
   </head>
  
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
        <a class="navbar-brand">Upload test</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
   
     <div class="tabbable">
<ul class="nav nav-tabs navbar-right nav nav-tabs" id="myTabs">

</ul>


</nav>
    <hr />
 </div>
        <div class="container">
        <div class="col-md-12">
            
          <form>
              <h3>File Upload</h3>
      
      <input id="fileToUpload" name="fileToUpload" type="file" class="form-control" />
      <input type="submit" value="upload" class="btn btn-success btn-block form-space-top"/> 
  
          </form>
             <div class="response form-space-top"></div>
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
  
  <script>
   // form submit action
   $("form").submit(function(e){	 
      e.preventDefault();
      var formData = new FormData($(this)[0]);
   $.ajax({
       url: 'action.php',
       type: 'POST',
       data: formData,
       async: false,
       cache: false,
       contentType: false,
       enctype: 'multipart/form-data',
       processData: false,
       success: function (response) {
           // response from ajax request
        $(".response").html(response);
       }
   });
   return false;
 });
</script>
  
</html>