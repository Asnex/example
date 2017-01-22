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
            # While loop example
            # Set $i & $j variable to start iterrate from one
      $i=1;
        while($i<=15):

       $j=1;
         while($j<=$i):
            # print mark * after two no breaking space
       nbsp(2);
       echo"*";
       nbsp(2);

      $j++;

       endwhile;

    # separate two loops with 6 nbsp
    nbsp(6);

    # Do the same like in first loop, but in reverse order

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

          # Do while modulus example
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
                <div class="panel-footer">Do-while loops are very similar to while loops, except the truth expression is checked at the end of
                    each iteration instead of in the beginning</div>
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
         # For loop continue, break example

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
                <div class="panel-footer">PHP for loops execute a block of code a specified number of times.</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Foreach loop</div>
                    <div class="panel-body">
                        <div class="forLoop">
                              <div class="col-md-6">
                               <?php

                               $foreachArray = [
                                   "My",
                                   "alias",
                                   "is",
                                   "Asnex"
                               ];
                                 foreach ($foreachArray as $key => $value) :
                                     echo "\$key is $key, while \$value is $value" . br();
                                 endforeach;
  ?>

                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                <pre>
                                  <code>
    $foreachArray = [
            "My",
            "alias",
            "is",
            "Asnex"
     ];

      foreach ($foreachArray as $key => $value) :
        echo "\$key is $key, while \$value is $value" . br();
      endforeach;

                              </code>
                                </pre>
                            </blockquote>

                            </div>

                    </div></div>
                <div class="panel-footer">The foreach construct provides an easy way to iterate over arrays and objects.</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Switch loop</div>
                    <div class="panel-body">
                        <div class="forLoop">
                              <div class="col-md-6">
                               <?php

                               $switchArray = [
                                   "case1" => "Linux",
                                   "case2" => "Windows",
                                   "case3" => "Macintosh",
                                   "case4" => "Solaris"
                               ];
      foreach ($switchArray as $key => $value) :
       switch ($key) :
        case 'case1' :
            echo current($switchArray) . br();
            break ;
        case 'case2' :
            echo next($switchArray) . br();
            break ;
        case 'case3' :
            echo next($switchArray) . br();
            break ;
        case 'case4' :
            echo reset($switchArray) . br();
            break ;
       endswitch;
      endforeach;
  ?>

                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                <pre>
                                    <code>
      $switchArray = [
                                   "case1" => "Linux",
                                   "case2" => "Windows",
                                   "case3" => "Macintosh",
                                   "case4" => "Solaris"
                               ];
      foreach ($switchArray as $key => $value) :
       switch ($key) :
        case 'case1' :
            echo current($switchArray) . br();
            break ;
        case 'case2' :
            echo next($switchArray) . br();
            break ;
        case 'case3' :
            echo next($switchArray) . br();
            break ;
        case 'case4' :
            echo reset($switchArray) . br();
            break ;
       endswitch;
      endforeach;

                              </code>
                                </pre>
                            </blockquote>

                            </div>

                    </div></div>
                <div class="panel-footer">The switch statement is used to perform different actions based on different conditions.</div>
            </div>
        </div>
                 </div>

</div>
