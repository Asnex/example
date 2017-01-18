<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Vizitka</title>

   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/vizitka.css">
        <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        <script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
        <script src="./js/vizitka.js"></script>
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
        <a class="navbar-brand">Vizitka</a>
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
        <div class="panel panel-default">
        <div class="panel-heading">Vizitka</div>
        <div class="panel-body">
        <div class="col-md-4">
          <div class="panel panel-default">
          <div class="panel-body">
        <input type="text" name="company" placeholder="company" id="company" class="form-control" />
        <input type="text" name="description" placeholder="description" id="description" class="form-control space-label" />
        <input type="text" name="visitName" placeholder="name" id="visitName" class="form-control space-label" />
        <input type="text" name="adress" placeholder="adress" id="adress" class="form-control space-label" />
        <input type="text" name="city" placeholder="city" id="city" class="form-control space-label" />
        <input type="text" name="postal" placeholder="postal" id="postal" class="form-control space-label" />
        <input type="text" name="phone" placeholder="phone" id="phone" class="form-control space-label" />
      </div>
      </div>
        </div>
        <div class="col-md-8">
        <div class="panel panel-default">
        <div id="html-holder">
        <div class="panel-body html-holder">
        <div id="displayCompany" class="company col-md-offset-3"></div>
        <div id="displayDescription" class="description col-md-offset-4"></div>
        <div id="displayName" class="visitName col-md-offset-1"></div>
        <div id="displayAdress" class="adress"></div>
        <div id="displayCity" class="city"></div>
        <div id="displayPostal" class="postal"></div>
        <div id="displayPhone" class="phone"></div>
        </div>
        </div>
          </div>


        </div>

        </div>
        <div class="panel-footer">
            <div class="panel-body">
            <div class="col-md-4">
          <input id="btnPreviewImage" type="button" value="Preview" class="btn btn-primary btn-sm"/>
          <button id="btnResetPreview" type="button" class="btn btn-danger btn-sm">Reset</button>
          <button type="button" class="btn btn-default btn-sm"><a id="btnConvertHtml2Image" href="#">Download</a></button>

        </div>

            <div class="col-md-8">
          <div id="previewImage">
        </div>
        </div>
  </div>
        </div>


        </div>

        </div>


		<hr>


        </div>


   </body>

  <script type="text/javascript">
  $("#company").keyup(function(){
    var input_company = document.getElementById('company').value;
    document.getElementById('displayCompany').innerHTML = input_company;
   });

  $("#description").keyup(function(){
     var input_description = document.getElementById('description').value;
     document.getElementById('displayDescription').innerHTML = input_description;
    });

  $("#visitName").keyup(function(){
      var input_name = document.getElementById('visitName').value;
      document.getElementById('displayName').innerHTML = input_name;
     });

  $("#adress").keyup(function(){
       var input_adress = document.getElementById('adress').value;
       document.getElementById('displayAdress').innerHTML = input_adress;
      });

  $("#city").keyup(function(){
           var input_city = document.getElementById('city').value;
           document.getElementById('displayCity').innerHTML = input_city;
          });

  $("#postal").keyup(function(){
           var input_postal = document.getElementById('postal').value;
           document.getElementById('displayPostal').innerHTML = input_postal;
          });

  $("#phone").keyup(function(){
                   var input_phone = document.getElementById('phone').value;
                   document.getElementById('displayPhone').innerHTML = input_phone;
                  });


    </script>

</html>
