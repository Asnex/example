<?php
 require './class.php';
 
  $upload = new Upload();
   # Call checkMe() method with all logic
  $upload->checkMe();
   # Show last uploaded image
  $upload->showImage();