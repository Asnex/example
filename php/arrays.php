 <div class="tab-pane" id="arrays">
       <div class="col-md-12">
        <div class="container">
              <div class="panel panel-default">
                <div class="panel-heading">Arrays</div>
                    <div class="panel-body">
                        <div class="arrays">
                           <blockquote>
                                <pre>
                                    <code>
               # Arrays for testing purposes, associative & indexed
                $array = [                                              $secondArray = [                          $thirdArray = [
                    'first'  => 'PHP',                                          'C',                                 '0' => 'PHP',
                    'second' => 'JavaScript',                                   'C#',                                'second' => 'HTML',
                    'third'  => 'HTML',                                         'JAVA',                              'JAVA',
                    'fourth' => 'CSS',                                          '.NET',                              'fourth' => 'CSS',
                    'fifth'  => 'MySql'                                         'Pyton'                              '5' => 'Pyton'
                    ];                                                     ];                                      ];

                  # Multidimensional array
               $fourthArray = [
                      [                                [                          [
                         'id' => 1,                        'id' => 2,                 'id' => 3,
                         'os' => 'Windows',                'os' => 'Linux',           'os' => 'Macintosh',
                         'version' =>                      'version' =>               'version' =>
                      [                                 [                         [
                              10,                          'Ubuntu',                  'Leopard',
                               7,                          'Centos',                  'Mavericks',
                             'XP'                          'Fedora',                  'Sierra'
                       ]                       ]                                  ]

                      ],                      ],                                 ]
               ];
                              </code>
                                </pre>
                            </blockquote>
                                 <?php
                # Array for testing purposes
                $array = [
                    'first'  => 'PHP',
                    'second' => 'JavaScript',
                    'third'  => 'HTML',
                    'fourth' => 'CSS',
                    'fifth'  => 'MySql'
                    ];
                 $secondArray = [
                    'C',
                    'C#',
                     'JAVA',
                     '.NET',
                     'Pyton'
                    ];
                 $thirdArray = [
                     '0' => 'PHP',
                     'second' => 'HTML',
                     'JAVA',
                     'fourth' => 'CSS',
                     '5' => 'Pyton'

                 ];
                 $fourthArray = [
  [
    'id' => 1,
    'os' => 'Windows',
    'version' =>
      [
         10,
         7,
         'XP'
          ]

  ],
  [
    'id' => 2,
    'os' => 'Linux',
     'version' =>
      [
         'Ubuntu',
         'Centos',
         'Fedora'
          ]
  ],
  [
    'id' => 3,
    'os' => 'Macintosh',
    'version' =>
      [
         'Leopard',
         'Mavericks',
         'Sierra'
          ]
  ]
];


?>


                             <table id="tableArrays" class="table table-hover table-bordered dt-responsive">
                                <thead>
                                    <tr>
                                        <th>Function</th>
                                         <th>Output</th>
                                          <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="label label-default">current()</span></td>
                                         <td><?= current($array);?></td>
                                          <td>First element of array, alias is pos()</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">end()</span></td>
                                         <td><?= end($array);?></td>
                                          <td>Last element of array</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">next()</span></td>
                                         <td><?= next($secondArray);?></td>
                                          <td>Moves the internal pointer to, and outputs, the next element in the array, works only with indexed arrays.</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">prev()</span></td>
                                         <td><?= prev($secondArray);?></td>
                                          <td>Moves the internal pointer to, and outputs, the previous element in the array, works only with indexed arrays</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">reset()</span></td>
                                         <td><?= reset($secondArray);?></td>
                                          <td>Moves the internal pointer to the first element of the array</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">count()</span></td>
                                         <td><?= count($array);?></td>
                                          <td>For counting the number of elements in array, same as sizeof()</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">extract()</span></td>
                                         <td><?php  $extract = extract($array);
                                                    echo $third; ?></td>
                                          <td>Set key from array as variable and show value</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_change_key_case()</span></td>
                                         <td><?php  print_r(array_change_key_case($array,CASE_UPPER));?></td>
                                          <td>Changes all keys in an array to lowercase or uppercase</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_chunk()</span></td>
                                         <td><?php  print_r(array_chunk($array, 3));?></td>
                                          <td>Splits an array into chunks of new arrays</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_column()</span></td>
                                         <td><?php // $os = array_column($fourthArray, 'os');
                                                  // var_dump($os);
                                                   ?></td>
                                          <td>Returns the values from a single column in the input array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_combine()</span></td>
                                         <td><?php $combine = array_combine($array, $secondArray);
                                                   print_r($combine); ?></td>
                                          <td>Creates an array by using the elements from one "keys" array and one "values" array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_count_values()</span></td>
                                         <td><?php $countValues = array_count_values($array);
                                                   print_r($countValues); ?></td>
                                          <td>Function counts all the values of an array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_diff()</span></td>
                                         <td><?php $diff = array_diff($array, $thirdArray);
                                                   print_r($diff); ?></td>
                                          <td>Function compares the values of two (or more) arrays, and returns the differences</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">array_fill()</span></td>
                                         <td><?php $fill = array_fill(0, 2, 'Ruby on Rails');
                                                   print_r($fill);?></td>
                                          <td>Function fills an array with values, array_fill_keys() fill an array with values, specifying keys</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_flip()</span></td>
                                         <td><?php $flip = array_flip($array);
                                                   print_r($flip); ?></td>
                                          <td>Flip all keys with their associated values in an array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_intersect()</span></td>
                                         <td><?php $intersect = array_intersect($array, $thirdArray);
                                                   print_r($intersect); ?></td>
                                          <td>Compares the values of two (or more) arrays, and returns the matches</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_key_exists()</span></td>
                                         <td><?php $keyExist = array_key_exists('first', $array);
                                                   if($keyExist):
                                                       echo "Key exist!";
                                                   endif;
                                                       ?></td>
                                          <td>Function checks an array for a specified key, and returns true if the key exists and false if the key does not exist</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_keys()</span></td>
                                         <td><?php $keys = array_keys($array);
                                                   print_r($keys); ?></td>
                                          <td>Function returns an array containing the keys as values</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">array_map()</span></td>
                                         <td><?php
                                        function array_map_compare($v1,$v2)
                                            {
                                            if ($v1===$v2):
                                                return "same";
                                                else:
                                                return "different";
                                            endif;
                                            }
                                        //  print_r(array_map("array_map_compare",$array, $thirdArray));?></td>
                                          <td>Sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_merge()</span></td>
                                         <td><?php $merge = array_merge($array, $thirdArray, $secondArray);
                                                   print_r($merge); ?></td>
                                          <td>Merges one or more arrays into one array.</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">array_merge_recursive()</span></td>
                                         <td><?php $mergeRecursive = array_merge_recursive($array, $thirdArray, $secondArray);
                                                   print_r($mergeRecursive); ?></td>
                                          <td>array_merge_recursive() function makes the value as an array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_multisort()</span></td>
                                         <td><?php  array_multisort($array);
                                                   print_r($array); ?></td>
                                          <td>Return a sorted array in ascending order</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">array_pad()</span></td>
                                         <td><?php  $pad = array_pad($secondArray, 6, 'Ruby on rails');
                                                   print_r($pad); ?></td>
                                          <td>Inserts a specified number of elements, with a specified value, to an array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_pop()</span></td>
                                         <td><?php $pop = array_pop($secondArray);
                                          echo "Deleted: ";print_r($pop);
                                          br();
                                          echo "New array: "; print_r($secondArray); ?></td>
                                          <td>Delete the last element of an array</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">array_push()</span></td>
                                         <td><?php  array_push($secondArray, 'CISCO', 'Angular');
                                                   print_r($secondArray); ?></td>
                                          <td>Inserts one or more elements to the end of an array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_rand()</span></td>
                                         <td><?php $rand = array_rand($thirdArray, 3);
                                                   print_r($rand); ?></td>
                                          <td>Return a random key from an array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_reduce()</span></td>
                                         <td><?php
                                        function array_reduce_string($v1,$v2)
                                            {
                                            return $v1 . "-" . $v2;
                                            }
                                        //  print_r(array_reduce($array, 'array_reduce_string'));?></td>
                                          <td>Sends the values in an array to a user-defined function, and returns a string</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">array_replace()</span></td>
                                         <td><?php $replace = array_replace($thirdArray, $secondArray);
                                                   print_r($replace); ?></td>
                                          <td>Replaces the values of the first array with the values from following arrays.</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_reverse()</span></td>
                                         <td><?php $reverse = array_reverse($thirdArray);
                                                   print_r($reverse); ?></td>
                                          <td>Returns an array in the reverse order</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">array_search()</span></td>
                                         <td><?php $search = array_search("CSS",$array);
                                                   print_r($search); ?></td>
                                          <td>Search an array for a value and returns the key</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">array_shift()</span></td>
                                         <td><?php $shift = array_shift($secondArray);
                                          echo "Deleted: ";print_r($shift);
                                          br();
                                          echo "New array: "; print_r($secondArray); ?></td>
                                          <td>Removes the first element from an array, and returns the value of the removed element</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_unshift()</span></td>
                                         <td><?php  array_unshift($secondArray, "Apache");
                                          echo "Added: Apache";
                                          br();
                                          echo "New array: "; print_r($secondArray); ?></td>
                                          <td>Inserts new elements to an array. The new array values will be inserted in the beginning of the array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_slice()</span></td>
                                         <td><?php $slice = array_slice($secondArray, 1,2);
                                                   print_r($slice); ?></td>
                                          <td>Returns selected parts of an array</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">array_splice()</span></td>
                                         <td><?php $splice = array_splice($thirdArray, 0,3, $secondArray);
                                                   print_r($splice); ?></td>
                                          <td>Remove elements from an array and replace it with new elements</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">array_sum()</span></td>
                                         <td><?=  array_sum([2,3,4,8,12]); ?></td>
                                          <td>Returns the sum of all the values in the array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_unique()</span></td>
                                         <td><?php $unique = array_unique($thirdArray);
                                                   print_r($unique); ?></td>
                                          <td>Remove duplicate values from an array</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">array_values()</span></td>
                                         <td><?php $values = array_values($array);
                                                   print_r($values); ?></td>
                                          <td>Returns an array containing all the values of an array</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">array_walk()</span></td>
                                         <td><?php function array_walk_user($value,$key, $str)
                                         {
                                         echo "The key $key $str $value";
                                              br();
                                          }
                                         array_walk($secondArray,"array_walk_user", "has the value"); ?></td>
                                          <td>Runs each array element in a user-defined function. The array's keys and values are parameters in the function</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">compact()</span></td>
                                         <td><?php
                                         $os = "Linux";
                                         $version = "Kubuntu";
                                         $codename = " Xenial Xerus";
                                         $compact = compact("os", "version", "codename");
                                                   print_r($compact); ?></td>
                                          <td>Creates an array from variables and their values</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">each()</span></td>
                                         <td><?php $each = each($thirdArray);
                                                   print_r($each); ?></td>
                                          <td>Returns the current element key and value, and moves the internal pointer forward</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">in_array()</span></td>
                                         <td><?php $in_array = in_array("Linux",$compact);
                                                echo  ($in_array == true) ? "Match" : "Not match" ?></td>
                                          <td>Searches an array for a specific value</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">key()</span></td>
                                         <td><?php $key = key($array);
                                                echo  "The \$key from the current position is $key"; ?></td>
                                          <td>Return the element key from the current internal pointer position</td>
                                    </tr>
                                       <tr>
                                        <td><span class="label label-default">list()</span></td>
                                         <td><?php  list($a, $b, $c, $d, $e) = $secondArray;
                                                echo  "List values: $a, $b, $c, $d, $e "; ?></td>
                                          <td>Assign values to a list of variables in one operation, This function only works on numerical arrays</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">range()</span></td>
                                        <td><?php $range = range("a", "f");
                                                print_r($range); ?></td>
                                          <td>Assign values to a list of variables in one operation, This function only works on numerical arrays</td>
                                    </tr>

                                </tbody>
                            </table>



                    </div></div>
                <div class="panel-footer"></div>
            </div>
            <div class="panel panel-default">
                      <div class="panel-heading">Array operators</div>
                          <div class="panel-body">
                              <div class="arrayOperators">

                               <table class="table table-hover">
                               <thead>
                                <tr>
                                 <th>Operator</th>
                                 <th>Name</th>
                                 <th class="exampleWidth">Example</th>
                                 <th>Description</th>
                                 <th>Array return</th>
                                </tr>
                               </thead>
                               <tbody>

                               <tr>
                                 <td>+</td>
                                 <td>Union</td>
                                 <td>$array + $secondArray</td>
                                 <td>Union of $array and $secondArray</td>
                                 <td><?php $union = $array + $secondArray;
                                     print_r($union)
                                     ?></td>
                               </tr>
                               <tr>
                                 <td>==</td>
                                 <td>Equality</td>
                                 <td>$array == $secondArray</td>
                                 <td>Returns true if $array and $secondArray have the same key/value pairs</td>
                                 <td><?= ($array == $secondArray) ? "true" : "false"; ?></td>
                               </tr>
                               <tr>
                                 <td>===</td>
                                 <td>Identity</td>
                                 <td>$array === $secondArray</td>
                                 <td>Returns true if $array and $secondArray have the same key/value pairs in the same order and of the same types</td>
                                 <td><?= ($array === $secondArray) ? "true" : "false"; ?></td>
                               </tr>
                               <tr>
                                 <td>!=</td>
                                 <td>Inequality</td>
                                 <td>$array != $secondArray</td>
                                 <td>Returns true if $array is not equal to $secondArray</td>
                                 <td><?= ($array != $secondArray) ? "true" : "false"; ?></td>
                               </tr>
                               <tr>
                                 <td><></td>
                                 <td>Inequality</td>
                                 <td>$array <> $secondArray</td>
                                 <td>Returns true if $array is not equal to $secondArray</td>
                                 <td><?= ($array <> $secondArray) ? "true" : "false"; ?></td>
                               </tr>
                               <tr>
                                 <td>!==</td>
                                 <td>Non-identity</td>
                                 <td>$array !== $secondArray</td>
                                 <td>Returns true if $array is not identical to $secondArray</td>
                                 <td><?= ($array !== $secondArray) ? "true" : "false"; ?></td>
                               </tr>

                               </tbody>
                       </table>
                               </div>
                              </div>
                      <div class="panel-footer">PHP array operators are used to compare arrays.</div>
                      </div>
        </div>
                 </div>
</div>
