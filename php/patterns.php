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

  class Singleton {

   # First we must declace property as private static
   private static $instance;

   # Also, we must call on private __construct method
   private function __construct() {

   }

   # Init the instance, and return if it
   public static function init() {

     if(self::$instance == null) :
      self::$instance = new static();
     endif;
        return self::$instance;
   }

   # Set key=>value pair
   public function set($key, $value) {
     $this->$key = $value;
   }
   # Get key and show value
  public function get($key) {

    return $this->$key;
  }

  }

  # Initiate the singleton object
  $singleton = Singleton::init();
  # Set the appropriate key=>value pairs
  $singleton->set("Amsterdam","Ajax");
  $singleton->set("Munich","Bayern");
  echo $singleton->get("Amsterdam") . br();
  echo $singleton->get("Munich") . br();

  # Initiate another one singleton object with different name
  $singletons = Singleton::init();
  $singletons->set("Torino","Juventus");
  $singletons->set("Moscow","CSKA");
  echo $singleton->get("Torino") . br();
  echo $singleton->get("Moscow") . br();
  echo hr();
  # var_dump to see output
  var_dump($singletons);


  ?>

                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                <pre>
                                     <code>
 # Singleton pattern, creates one instance of class

     class Singleton {

  # First we must declace property as private static
        private static $instance;

    # Also, we must call on private __construct method
    private function __construct() {

  }

      # Init the instance, and return if it
      public static function init() {

      if(self::$instance == null) :
           self::$instance = new static();
      endif;
         return self::$instance;
  }

     # Set key=>value pair
    public function set($key, $value) {
      $this->$key = $value;
  }

    # Get key and show value
     public function get($key) {
      return $this->$key;
     }
 }

   # Initiate the singleton object
   $singleton = Singleton::init();
   # Set the appropriate key=>value pairs
   $singleton->set("Amsterdam","Ajax");
   $singleton->set("Munich","Bayern");
   echo $singleton->get("Amsterdam") . br();
   echo $singleton->get("Munich") . br();

   # Initiate another one singleton object with different name
   $singletons = Singleton::init();
   $singletons->set("Torino","Juventus");
   $singletons->set("Moscow","CSKA");
   echo $singleton->get("Torino") . br();
   echo $singleton->get("Moscow") . br();
   echo hr();
   # var_dump to see output
   var_dump($singletons);

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
                        # Factory pattern for creating the clubs
                         class Club {
                           # Declaring private propertyes
                             private $clubAcro;
                             private $clubName;
                             private $clubCity;
                           # Construct function
                             public function __construct($acro, $name, $city) {
                                 $this->clubAcro = $acro;
                                 $this->clubName = $name;
                                 $this->clubCity = $city;
                          }
                           # Get club info
                             public function getClub() {
                                 return $this->clubAcro . ' ' . $this->clubName . ' ' . $this->clubCity;
                          }
                       }

                         # Class FootballClubFactory for creating the football clubs
                         class FootballClubFactory {
                             public static function createClub($acro, $name, $city)
                             {
                               # Return new Club factory logic
                                 return new Club($acro, $name, $city);
                             }
                         }

                         class BasketballClubFactory extends FootballClubFactory {
                         # Inheritance all from parent class
                         }

                         $ajax = FootballClubFactory::createClub('AFC', 'AJAX', 'Amsterdam');
                         # Use of polymorphism
                         $macabi = BasketballClubFactory::createClub('BC', 'Macabi', 'Tel Aviv');

                         echo $ajax->getClub();
                         br();
                         echo $macabi->getClub();

                          ?>

                         </div>
                         <div class="col-md-6">
                             <blockquote>
                             <pre>
<code>
  # Factory pattern for creating the clubs
   class Club {
     # Declaring private propertyes
       private $clubAcro;
       private $clubName;
       private $clubCity;
     # Construct function
       public function __construct($acro, $name, $city) {
           $this->clubAcro = $acro;
           $this->clubName = $name;
           $this->clubCity = $city;
    }
     # Get club info
       public function getClub() {
           return $this->clubAcro . ' ' . $this->clubName . ' ' . $this->clubCity;
    }
 }

   # Class FootballClubFactory for creating the football clubs
   class FootballClubFactory {
       public static function createClub($acro, $name, $city)
       {
         # Return new Club factory logic
           return new Club($acro, $name, $city);
       }
   }

   class BasketballClubFactory extends FootballClubFactory {
   # Inheritance all from parent class
   }

   $ajax = FootballClubFactory::createClub('AFC', 'AJAX', 'Amsterdam');
   # Use of polymorphism
   $macabi = BasketballClubFactory::createClub('BC', 'Macabi', 'Tel Aviv');

   echo $ajax->getClub();
   br();
   echo $macabi->getClub();

</code>
                             </pre>
                         </blockquote>

                         </div>

                 </div></div>
             <div class="panel-footer">In factory pattern, a class simply creates the object you want to use.</div>
         </div>

         <div class="panel panel-default">
          <div class="panel-heading">Strategy</div>
              <div class="panel-body">
                  <div class="factory">
                        <div class="col-md-6">

                       <?php
                     # Strategy pattern for creating the clubs and handle the data with interfaces

                     interface Languages {
                       # Declare static interface method
                       public static function fullname();

                     }
                     # Implement interface in three classes fot handling the strategy logic
                     class EnglishLang implements Languages {
                       public static function fullname() {
                         echo "Football club";
                       }
                     }
                     class FrenchLang implements Languages {
                       public static function fullname() {
                         echo "Club de Football";
                       }
                     }
                     class DeutschLang implements Languages {
                       public static function fullname() {
                         echo "Fußball-Club";
                       }
                     }

                     # Main class
                     class StrategyClub {
                      public function getLang($lang){
                         if($lang == "EN") :
                           EnglishLang::fullname();
                         elseif($lang == "FR") :
                           FrenchLang::fullname();
                         elseif($lang == "DE") :
                           DeutschLang::fullname();
                         endif;
                      }
                     }


                     # Call instance and return different data base od strategy implementation
                     $strategy = new StrategyClub();
                     $strategy->getLang("FR");
                     br();
                     $strategy->getLang("EN");
                     br();
                     $strategy->getLang("DE");

                       ?>

                      </div>
                      <div class="col-md-6">
                          <blockquote>
                          <pre>
<code>
  # Strategy pattern for creating the clubs and handle the data with interfaces

  interface Languages {
    # Declare static interface method
    public static function fullname();

  }
  # Implement interface in three classes fot handling the strategy logic
  class EnglishLang implements Languages {
    public static function fullname() {
      echo "Football club";
    }
  }
  class FrenchLang implements Languages {
    public static function fullname() {
      echo "Club de Football";
    }
  }
  class DeutschLang implements Languages {
    public static function fullname() {
      echo "Fußball-Club";
    }
  }

  # Main class
  class StrategyClub {
   public function getLang($lang){
      if($lang == "EN") :
        EnglishLang::fullname();
      elseif($lang == "FR") :
        FrenchLang::fullname();
      elseif($lang == "DE") :
        DeutschLang::fullname();
      endif;
   }
  }


  # Call instance and return different data base od strategy implementation
  $strategy = new StrategyClub();
  $strategy->getLang("FR");
  br();
  $strategy->getLang("EN");
  br();
  $strategy->getLang("DE");
</code>
                          </pre>
                      </blockquote>

                      </div>

              </div></div>
          <div class="panel-footer">Strategy defines a set of algorithms that can be used interchangeably.</div>
      </div>

        </div>
                 </div>

</div>
