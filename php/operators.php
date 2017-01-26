 <div class="tab-pane" id="operators">
       <div class="col-md-12">
        <div class="container">
          <div class="panel panel-default">
                    <div class="panel-heading">Arithmetic operators</div>
                        <div class="panel-body">
                            <div class="arithmeticOperators">
                              <?php
                              $x = 10;
                              $y = 5;
                              ?>
                             <table class="table table-hover">
                             <thead>
                              <tr>
                               <th>Operator</th>
                               <th>Name</th>
                               <th>Example</th>
                               <th>Description</th>
                               <th>Result</th>
                              </tr>
                             </thead>
                             <tbody>
                             <tr>
                              <td>+</td>
                              <td>Addition</td>
                              <td>$x + $y</td>
                              <td>Sum of $x and $y</td>
                              <td><?= $x + $y ?></td>
                             </tr>
                             <tr>
                              <td>-</td>
                              <td>Subtraction</td>
                              <td>$x - $y</td>
                              <td>Difference of $x and $y</td>
                              <td><?= $x - $y ?></td>
                             </tr>
                             <tr>
                              <td>*</td>
                              <td>Multiplication</td>
                              <td>$x * $y</td>
                              <td>Product of $x and $y</td>
                              <td><?= $x * $y ?></td>
                             </tr>
                             <tr>
                              <td>/</td>
                              <td>Division</td>
                              <td>$x / $y</td>
                              <td>Quotient of $x and $y</td>
                              <td><?= $x / $y ?></td>
                             </tr>
                             <tr>
                              <td>%</td>
                              <td>Modulus</td>
                              <td>$x % $y</td>
                              <td>Remainder of $x divided by $y</td>
                              <td><?= $x % $y ?></td>
                             </tr>
                             <tr>
                              <td>**</td>
                              <td>Exponentiation</td>
                              <td>$x ** $y</td>
                              <td>Result of raising $x to the $y th power</td>
                              <td>100000</td>
                             </tr>
                             </tbody>
                     </table>
                             </div>
                            </div>
                    <div class="panel-footer">Arithmetic operators are used with numeric values to perform common arithmetical operations.</div>
                    </div>

                    <div class="panel panel-default">
                              <div class="panel-heading">Assignment operators</div>
                                  <div class="panel-body">
                                      <div class="assignmentOperators">

                                       <table class="table table-hover">
                                       <thead>
                                        <tr>
                                         <th>Assignment</th>
                                         <th>Same as</th>
                                         <th>Description</th>
                                         <th>Result</th>
                                        </tr>
                                       </thead>
                                       <tbody>
                                       <tr>
                                        <td>$x = $y</td>
                                        <td>$x = $y</td>
                                        <td>The left operand gets set to the value of the expression on the right</td>
                                        <td><?= $x = $y ?></td>
                                       </tr>
                                       <tr>
                                         <td>$x += $y</td>
                                         <td>$x = $x + $y</td>
                                         <td>Addition</td>
                                         <td><?= $x += $y ?></td>
                                       </tr>
                                       <tr>
                                         <td>$x -= $y</td>
                                         <td>$x = $x - $y</td>
                                         <td>Subtraction</td>
                                         <td><?= $x -= $y ?></td>
                                       </tr>
                                       <tr>
                                         <td>$x *= $y</td>
                                         <td>$x = $x * $y</td>
                                         <td>Multiplication</td>
                                         <td><?= $x *= $y ?></td>
                                       </tr>
                                       <tr>
                                         <td>$x /= $y</td>
                                         <td>$x = $x / $y</td>
                                         <td>Division</td>
                                         <td><?= $x /= $y ?></td>
                                       </tr>
                                       <tr>
                                         <td>$x %= $y</td>
                                         <td>$x = $x % $y</td>
                                         <td>Modulus</td>
                                         <td><?= $x %= $y ?></td>
                                       </tr>
                                       </tbody>
                               </table>
                                       </div>
                                      </div>
                              <div class="panel-footer">Assignment operators are used with numeric values to write a value to a variable.</div>
                              </div>

                              <div class="panel panel-default">
                                        <div class="panel-heading">Comparison operators</div>
                                            <div class="panel-body">
                                                <div class="comparisonOperators">

                                                 <table class="table table-hover">
                                                 <thead>
                                                  <tr>
                                                   <th>Operator</th>
                                                   <th>Name</th>
                                                   <th>Example</th>
                                                   <th>Description</th>
                                                   <th>Boolean return</th>
                                                  </tr>
                                                 </thead>
                                                 <tbody>
                                                 <tr>
                                                  <td>==</td>
                                                  <td>Equal</td>
                                                  <td>$x == $y</td>
                                                  <td>Returns true if $x is equal to $y</td>
                                                  <td><?= ($x == $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 <tr>
                                                  <td>===</td>
                                                  <td>Identical</td>
                                                  <td>$x === $y</td>
                                                  <td>Returns true if $x is equal to $y, and they are of the same type</td>
                                                  <td><?= ($x === $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 <tr>
                                                  <td>!=</td>
                                                  <td>Not equal</td>
                                                  <td>$x != $y</td>
                                                  <td>Returns true if $x is not equal to $y</td>
                                                  <td><?= ($x != $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 <tr>
                                                  <td><></td>
                                                  <td>Not equal</td>
                                                  <td>$x <> $y</td>
                                                  <td>Returns true if $x is not equal to $y</td>
                                                  <td><?= ($x <> $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 <tr>
                                                  <td>!==</td>
                                                  <td>Identical</td>
                                                  <td>$x !== $y</td>
                                                  <td>Returns true if $x is not equal to $y, or they are not of the same type</td>
                                                  <td><?= ($x !== $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 <tr>
                                                  <td>></td>
                                                  <td>Greather than</td>
                                                  <td>$x > $y</td>
                                                  <td>Returns true if $x is greater than $y</td>
                                                  <td><?= ($x > $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 <tr>
                                                  <td><</td>
                                                  <td>Less than</td>
                                                  <td>$x < $y</td>
                                                  <td>Returns true if $x is less than $y</td>
                                                  <td><?= ($x < $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 <tr>
                                                  <td>>=</td>
                                                  <td>Greather than or equal to</td>
                                                  <td>$x >= $y</td>
                                                  <td>Returns true if $x is greater than or equal to $y</td>
                                                  <td><?= ($x >= $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 <tr>
                                                  <td><=</td>
                                                  <td>Less than or equal to</td>
                                                  <td>$x <= $y</td>
                                                  <td>Returns true if $x is less than or equal to $y</td>
                                                  <td><?= ($x <= $y) ? "true" : "false"; ?></td>
                                                 </tr>
                                                 </tbody>
                                         </table>
                                                 </div>
                                                </div>
                                        <div class="panel-footer">Comparison operators are used to compare two values (number or string).</div>
                                        </div>

                                        <div class="panel panel-default">
                                                  <div class="panel-heading">Increment / Decrement operators</div>
                                                      <div class="panel-body">
                                                          <div class="incrementDecrementOperators">

                                                           <table class="table table-hover">
                                                           <thead>
                                                            <tr>
                                                             <th>Operator</th>
                                                             <th>Name</th>
                                                             <th>Description</th>
                                                             <th>Result</th>
                                                            </tr>
                                                           </thead>
                                                           <tbody>

                                                           <tr>
                                                             <td>$x++</td>
                                                             <td>Post-increment</td>
                                                             <td>Returns $x, then increments $x by one</td>
                                                             <?php $x = 1; ?>
                                                             <td><?= $x++ ?></td>
                                                           </tr>
                                                           <tr>
                                                            <td>++$x</td>
                                                            <td>Pre-increment</td>
                                                            <td>Increments $x by one, then returns $x</td>
                                                             <?php $x = 1; ?>
                                                            <td><?= ++$x ?></td>
                                                           </tr>
                                                           <tr>
                                                             <td>$x--</td>
                                                             <td>Post-decrement</td>
                                                             <td>Returns $x, then decrements $x by one</td>
                                                              <?php $x = 1; ?>
                                                             <td><?= $x-- ?></td>
                                                           </tr>
                                                           <tr>
                                                             <td>--$x</td>
                                                             <td>Pre-decrement</td>
                                                             <td>Decrements $x by one, then returns $x</td>
                                                              <?php $x = 1; ?>
                                                             <td><?= --$x ?></td>
                                                           </tr>

                                                           </tbody>
                                                   </table>
                                                           </div>
                                                          </div>
                                                  <div class="panel-footer">Increment operators are used to increment a variable's value, while decrement operators are used to decrement a variable's value.</div>
                                                  </div>

                                                  <div class="panel panel-default">
                                                            <div class="panel-heading">Logical operators</div>
                                                                <div class="panel-body">
                                                                    <div class="logicalOperators">

                                                                     <table class="table table-hover">
                                                                     <thead>
                                                                      <tr>
                                                                       <th>Operator</th>
                                                                       <th>Name</th>
                                                                       <th>Example</th>
                                                                       <th>Description</th>
                                                                       <th>Boolean return</th>
                                                                      </tr>
                                                                     </thead>
                                                                     <tbody>

                                                                     <tr>
                                                                       <td>and / &&</td>
                                                                       <td>And</td>
                                                                       <td>$x && $y</td>
                                                                       <td>True if both $x and $y are true</td>
                                                                       <td><?= ($x && $y) ? "true" : "false"; ?></td>
                                                                     </tr>
                                                                     <tr>
                                                                       <td>or / ||</td>
                                                                       <td>Or</td>
                                                                       <td>$x || $y</td>
                                                                       <td>True if either $x or $y is true</td>
                                                                       <td><?= ($x || $y) ? "true" : "false"; ?></td>
                                                                     </tr>
                                                                     <tr>
                                                                       <td>xor</td>
                                                                       <td>Xor</td>
                                                                       <td>$x xor $y</td>
                                                                       <td>True if either $x or $y is true, but not both</td>
                                                                       <td><?= ($x xor $y) ? "true" : "false"; ?></td>
                                                                     </tr>
                                                                     <tr>
                                                                       <td>!</td>
                                                                       <td>Not</td>
                                                                       <td>!$x</td>
                                                                       <td>True if $x is not true</td>
                                                                       <td><?= (!$x) ? "true" : "false"; ?></td>
                                                                     </tr>

                                                                     </tbody>
                                                             </table>
                                                                     </div>
                                                                    </div>
                                                            <div class="panel-footer">Logical operators are used to combine conditional statements.</div>
                                                            </div>

                                                            <div class="panel panel-default">
                                                                      <div class="panel-heading">String operators</div>
                                                                          <div class="panel-body">
                                                                              <div class="stringOperators">
                                                                               <?php $str = "This is test string";
                                                                                     $string = " and this is second test string."; ?>
                                                                               <table class="table table-hover">
                                                                               <thead>
                                                                                <tr>
                                                                                 <th>Operator</th>
                                                                                 <th>Name</th>
                                                                                 <th>Example</th>
                                                                                 <th>Description</th>
                                                                                 <th>String result</th>
                                                                                </tr>
                                                                               </thead>
                                                                               <tbody>

                                                                               <tr>
                                                                                 <td>.</td>
                                                                                 <td>Concatenation</td>
                                                                                 <td>$str . $string</td>
                                                                                 <td>Concatenation of $str and $string</td>
                                                                                 <td><?= $str . $string; ?></td>
                                                                               </tr>
                                                                               <tr>
                                                                                 <td>.=</td>
                                                                                 <td>Concatenation assignment</td>
                                                                                 <td>$str .= $string</td>
                                                                                 <td>Concatenation assignment of $str and $string</td>
                                                                                 <td><?= $str .= $string; ?></td>
                                                                               </tr>

                                                                               </tbody>
                                                                       </table>
                                                                               </div>
                                                                              </div>
                                                                      <div class="panel-footer">String operators are specially designed for strings.</div>
                                                                      </div>
                </div>


        </div>
                 </div>
