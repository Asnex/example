<div class="tab-pane active" id="intro">

    <div class="col-md-12">
        <div class="container">
              <div class="panel panel-default">
                <div class="panel-heading">Constants</div>
                    <div class="panel-body">
                        <div class="constants">
                             <blockquote>
                                <pre>
                                    <code>
define("GREETING", "Welcome to PHP!");
const GREETINGS = "Welcome to PHP!";
echo "define: " . GREETING . " const: " . GREETINGS;
</code>
                                </pre>
                            </blockquote>
                       <?php
define("GREETING", "Welcome to PHP!");
const GREETINGS = "Welcome to PHP!";
echo "define: " . GREETING . " const: " . GREETINGS;
?>

                    </div></div>
                <div class="panel-footer">Constants are automatically global and can be used across the entire script.</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Scope</div>
                    <div class="panel-body">
                        <div class="globalScope">
                        <?php
$x = 25;
$y = 50;

function globalScope() {
    global $x, $y;

    echo "Output is:: " . $y = $x + $y;
}

globalScope();
?>
 <?= br(2); ?>
                            Example of code::
                            <blockquote>
                                <pre>
                                    <code>

$x = 25;
$y = 50;  <?= br(2); ?>

function globalScope() {
    global $x, $y;
    echo $y = $x + $y;
    }
    OR by using $GLOBALS[] array
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
</code>
                                </pre>
                            </blockquote>



                    </div></div>
                <div class="panel-footer">Example of global scope, since variable declared outside scope, can't be accessed within scope and reverse.</div>
            </div>

            <?= hr(); ?>

             <div class="panel panel-default">
                <div class="panel-heading">Static keyword</div>
                    <div class="panel-body">
                        <div class="staticKey">
                        <?php

   class staticClass
{
       # static variable
public static $i;
static function staticMethod() {
       # Iterrate throught static variable
     echo self::$i;
     self::$i++;

}
}
# Set variable value
staticClass::$i = 1;
# Get static variable value
echo "Output is:";
br();
staticClass::staticMethod();
br();
staticClass::staticMethod();
br();
staticClass::staticMethod();
?>
 <?= br(2); ?>
                            Example of code::
                            <blockquote>
                                <pre>
                                    <code>

   class staticClass
 {
       # static variable
  public static $i;
  static function staticMethod() {
       # Iterrate throught static variable
     echo self::$i;
     self::$i++;

  }
 }
 # Set variable value
 staticClass::$i = 1;
 # Get static variable value
 echo "Output is:";
 br();
 staticClass::staticMethod();
 br();
 staticClass::staticMethod();
 br();
 staticClass::staticMethod();
</code>
                                </pre>
                            </blockquote>



                    </div></div>
                <div class="panel-footer">Example of static key, when we don't want variable value to be deleted, but preserved.</div>
            </div>
             </div>
    </div>
</div>
