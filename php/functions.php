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
      # Function for logic of br() and hr() because they are simiral
     function forLogic($case, $num){
         # If is numeric, allow permission to continue with the code
        if(is_numeric($num)) :
        # If number if 0 || 1, return just one br() || hr()
        if($num == 0 || $num == 1):
                echo $case;
        # Else, return value of $num, br($num) ||  hr($num)
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
    </code>
  </pre>
</blockquote></div>
                   
                        <div class="col-md-6">
<blockquote>
  <pre>
    <code>
            # Function for logic of br() and hr() because they are simiral
     function forLogic($case, $num){
         # If is numeric, allow permission to continue with the code
        if(is_numeric($num)) :
        # If number if 0 || 1, return just one br() || hr()
        if($num == 0 || $num == 1):
                echo $case;
        # Else, return value of $num, br($num) ||  hr($num)
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