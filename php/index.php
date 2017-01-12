<!DOCTYPE html>
<html lang="en">
    <head>  
      <title>PHP</title>
     
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
      crossorigin="anonymous">
       
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/jquery.css">
        <link rel="stylesheet" type="text/css" href="../css/php.css">
        <link rel="icon" href="../images/php-icon.ico" type="image/x-icon" />
   
   </head>
    <div class="col-md-12">
    <div class="col-md-2 cover col-md-offset-5"><?= image('php-cover.png'); ?></div> 
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
        <a class="navbar-brand">PHP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
   
     <div class="tabbable">
<ul class="nav nav-tabs navbar-right nav nav-tabs" id="myTabs">
<li class="active"><a href="#intro" data-toggle="tab">Intro</a></li>
<li><a href="#strings" data-toggle="tab">Strings</a></li>
<li><a href="#operators" data-toggle="tab">Operators</a></li>
<li><a href="#loops" data-toggle="tab">Loops</a></li>
<li><a href="#resources" data-toggle="tab">Resources</a></li>
<li><a href="#arrays"   data-toggle="tab">Arrays</a></li>
<li><a href="#functions"   data-toggle="tab">Functions</a></li>
<li><a href="#codes"   data-toggle="tab">Codes</a></li>
</ul>


</nav>
    <hr />
 </div>
<div class="tab-content">
     <?php 
      require 'intro.php';
      require 'strings.php';
      require 'operators.php';
      require 'loops.php';
      require 'arrays.php';
      require 'resources.php';
      require 'codes.php';
     ?>
    
<div class="tab-pane" id="functions">
  <div class="col-md-12">
        <div class="container">
    <div class="panel panel-default">
                <div class="panel-heading">br(), hr() & nbsp() functions</div>
                    <div class="panel-body">
                        <div class="functions"> 
                              <?php
                              
         # Break line in php, with multiple options                      
     function br($num = 0){
         # set value of $case variable
         $case = "<br />";
         # call forLogic method
         forLogic($case, $num);
    }
    
      # Horizontal rule in php, with multiple options                      
     function hr($num = 0){
         # set value of $case variable
         $case = "<hr />";
         # call forLogic method
         forLogic($case, $num);
       
    }
    
     # No breaking space in php, with multiple options                      
     function nbsp($num = 0){
         # set value of $case variable
         $case = "&nbsp";
         # call forLogic method
         forLogic($case, $num);
       
    }
      # Function for logic of br(), hr() & nbsp() because they are simiral
     function forLogic($case, $num){
         # If is numeric, allow permission to continue with the code
        if(is_numeric($num)) :
        # If number if 0 || 1, return just one br() || hr() || nbsp()
        if($num == 0 || $num == 1):
                echo $case;
        # Else, return value of $num, br($num) ||  hr($num) || nbsp($num)
        else :
            for($i=0; $i<$num; $i++){
                echo $case;
            }
        endif;
        // Else, fire E_NOTICE
        else :
            E_NOTICE;
        endif;
     }
    ?>
                      
Example of code::  <?= hr(); ?>
 <div class="col-md-6">
                 
<blockquote>
  <pre>
    <code>
            # Break line in php, with multiple options                      
     function br($num = 0){
         # set value of $case variable
         $case = "&lt;br /&gt;";
         # call forLogic method
         forLogic($case, $num);
    }
    
      # Horizontal rule in php, with multiple options                      
     function hr($num = 0){
         # set value of $case variable
         $case = "&lt;hr /&gt;";
         # call forLogic method
         forLogic($case, $num);
       
    }
    
     # No breaking space in php, with multiple options                      
     function nbsp($num = 0){
         # set value of $case variable
         $case = "&nbsp";
         # call forLogic method
         forLogic($case, $num);
       
    }
    </code>
  </pre>
</blockquote></div>
                   
                        <div class="col-md-6">
<blockquote>
  <pre>
    <code>
            # Function for logic of br(), hr() & nbsp() because they are simiral
     function forLogic($case, $num){
         # If is numeric, allow permission to continue with the code
        if(is_numeric($num)) :
        # If number if 0 || 1, return just one br() || hr() || nbsp()
        if($num == 0 || $num == 1):
                echo $case;
        # Else, return value of $num, br($num) ||  hr($num) || nbsp($num)
        else :
            for($i=0; $i<$num; $i++){
                echo $case;
            }
        endif;
        // Else, fire E_NOTICE
        else :
            E_NOTICE;
        endif;
     }
    </code>
  </pre>
</blockquote></div> 
</div>
                        
                    </div>   
                <div class="panel-footer">Example of break line, horizontal rule and no breaking space functions, which i found very useful in plain PHP.</div>
                </div>
            <?= hr(); ?>
             <div class="panel panel-default">
                <div class="panel-heading">image() function</div>
                    <div class="panel-body">
                        <div class="functions"> 
                            Example of code:: <?= hr(); ?>
                            <div class="col-md-6">
                              <?php
                              
        # Image function, for quick return of img                 
    function image($file, $id = null, $class = null){
        # Checking the number of args
       $numArgs = func_num_args ();
       if($numArgs <= 3) :
       $path = "src='../images/$file'";
       
       if($class != null) :
       $class  = "class='$class' ";
       endif;
       
       if($id != null) :
       $id  = "id='$id' ";
       endif;
       echo $image = "<img $id$class$path />";
       else:
           echo 'Too much arguments!';    
       endif;
    }
    ?>
               <blockquote>
  <pre>
    <code>
             # Image function, for quick return of img with id and class properties added
             
     # Checking the number of args
       $numArgs = func_num_args ();
       if($numArgs <= 3) :
       $path = "src='../images/$file'";
       
       if($class != null) :
       $class  = "class='$class' ";
       endif;
       
       if($id != null) :
       $id  = "id='$id' ";
       endif;
       echo $image = "<img $id$class$path />";
       else:
           echo 'Too much arguments!';    
       endif;
    
       # Return image()
       echo "&lt;img $id$class$path /&gt;";
    }
    </code>
  </pre>
</blockquote>       

 
</div>
                   
                        <div class="col-md-6"><?= image('php-cover.png', false, 'imagePHP'); ?>
                          <blockquote>
  <pre>
    <code>
        &lt;?= image('php-cover.png', false, 'imagePHP'); ?&gt;
 </code>
  </pre>
</blockquote>   
                        </div>
                    </div>  </div> 
                <div class="panel-footer">Example of image() function, which i found very useful in plain PHP.</div>
                </div>
            <?php $getIncludedFiles = get_included_files ();
    var_dump($getIncludedFiles);?>
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
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" />
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" />
   <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" />
   <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js" />

   <script type="text/javascript" src="../js/jquery.js"></script>
   <script type="text/javascript" src="../js/php.js"></script>
   <script>  $(document).ready(function() {
    $('#tableStrings, #tableArrays').DataTable();
} );</script>
</html>