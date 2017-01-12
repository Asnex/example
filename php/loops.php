<div class="tab-pane" id="loops">
       <div class="col-md-12">
        <div class="container">
      <div class="panel panel-default">
                <div class="panel-heading">While loop</div>
                    <div class="panel-body">
                        <div class="whileLoop"> 
                            <div class="col-md-6">
                 <?php 
$i=1;
while($i<=15):

    $j=1;
    while($j<=$i):
       nbsp(2);
       echo"*";
       nbsp(2);
      $j++;      
    endwhile;
    nbsp(6);
    $x=15;
    while($x>=$i):
       nbsp(2);
       echo"*";
       nbsp(2);
      $x--;      
    endwhile;
    
    br();
    $i++;
endwhile;


?>
                    </div>
                            <div class="col-md-6">
                                <blockquote>
                                <pre>
                                    <code>
                $i=1;
while($i<=15):

    $j=1;
    while($j<=$i):
       nbsp(2);
       echo"*";
       nbsp(2);
      $j++;      
    endwhile;
    nbsp(6);
    $x=15;
    while($x>=$i):
       nbsp(2);
       echo"*";
       nbsp(2);
      $x--;      
    endwhile;
    
    br();
    $i++;
endwhile;
                              </code>
                                </pre>     
                            </blockquote>
                                
                            </div>
                        </div></div>   
                <div class="panel-footer">PHP while loops execute a block of code while the specified condition is true.</div>
            </div>
              <div class="panel panel-default">
                <div class="panel-heading">Do while loop</div>
                    <div class="panel-body">
                        <div class="doWhileLoop"> 
                            <div class="col-md-6">
                                 <?php 
                 $i = 1;
                 $x = 2;
                 $y = 3;
do {
    if($i % $x == 0) {
        echo "x: " . $i . br();
    }
   
    elseif($i % $y == 0) {
         echo "y: " . $i . br();
    }
} while(++$i<=15);

?>
                                
                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                <pre>
                                    <code>
                 $i = 1;
                 $x = 2;
                 $y = 3;
do {
    if($i % $x == 0) {
        echo "x: " . $i . br();
    }
   
    elseif($i % $y == 0) {
         echo "y: " . $i . br();
    }
} while(++$i<=15);

                              </code>
                                </pre>     
                            </blockquote>
                                
                            </div>
               
                    </div></div>   
                <div class="panel-footer">PHP while loops execute a block of code while the specified condition is true.</div>
            </div>
              <div class="panel panel-default">
                <div class="panel-heading">For loop</div>
                    <div class="panel-body">
                        <div class="forLoop"> 
                              <div class="col-md-6">
                               <?php 
         $x = 3;
               
  for($i=0; $i<=20; $i++)
  {
      if($i % $x == 0):
              continue;
          elseif($i == 13) :
              break;    
          endif;
          
          echo $i . br();
  }
  ?>
                                
                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                <pre>
                                    <code>
                 $x = 3;
               
  for($i=0; $i<=20; $i++)
  {
      if($i % $x == 0):
              continue;
          elseif($i == 13) :
              break;    
          endif;
          
          echo $i . br();
  }

                              </code>
                                </pre>     
                            </blockquote>
                                
                            </div>
                 
                    </div></div>   
                <div class="panel-footer">PHP while loops execute a block of code while the specified condition is true.</div>
            </div>
         
        </div>
                 </div>

</div>