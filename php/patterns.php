 <div class="tab-pane" id="patterns">
       <div class="col-md-12">
        <div class="container">
               <div class="panel panel-default">
                <div class="panel-heading">Singleton</div>
                    <div class="panel-body">
                        <div class="singleton">
                              <div class="col-md-6">
                               <?php
        # Singleton pattern, creates one instance of class

       class football {
           private static $instance;
           private function __construct() {

           }

           public static function getInstance(){
               if(self::$instance == null)
               self::$instance = new static();
               return self::$instance;

           }

                      public function set($key, $value){
               $this->$key = $value;
           }

           public function get($key){
               return $this->$key;
           }
       }
       $bla = football::getInstance();
        $bla->set("One", "Burek");
         $bla->set("Two", "Jogurt");

        $truc = football::getInstance();
        $truc->set('Three', 'Jagode');
        echo $truc->get('One');



  ?>

                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                <pre>
     <code>

                              </code>
                                </pre>
                            </blockquote>

                            </div>

                    </div></div>
                <div class="panel-footer">In the singleton pattern a class can distribute one instance of itself to other classes.</div>
            </div>
     <div class="panel panel-default">
                <div class="panel-heading">Factory</div>
                    <div class="panel-body">
                        <div class="factory">
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
