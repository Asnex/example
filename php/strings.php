<div class="tab-pane" id="strings">
       <div class="col-md-12">
        <div class="container">
       <div class="panel panel-default">
                <div class="panel-heading">Strings</div>
                    <div class="panel-body">
                        <div class="strings"> 
                       <?php 
                       print $str = "This is a string for 'manipulations'";
                       hr();
                       ?>
                            <table id="tableStrings" class="table table-hover table-bordered dt-responsive">
                                <thead>
                                    <tr>
                                        <th>Function</th> 
                                         <th>Output</th> 
                                          <th>Comment</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="label label-default">strlen()</span></td>
                                         <td><?= strlen($str);?></td>
                                          <td>Counts number of characters</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">str_word_count()</span></td>
                                         <td><?= str_word_count($str);?></td>
                                          <td>Counts number of words in string</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">strrev()</span></td>
                                         <td><?= strrev($str);?></td>
                                          <td>Reverse order of chars in string</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">addslashes()</span></td>
                                         <td><?= addslashes($str);?></td>
                                          <td>Add backslashes in front of predefined characters like ',"</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">addcslashes()</span></td>
                                         <td><?= addcslashes($str, "s");?></td>
                                          <td>Add backslashes in front of the specified characters. In this case letter "s"</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">chop()</span></td>
                                         <td><?= chop($str, "'manipulations'");?></td>
                                          <td> Removes whitespace or other characters from the right end of a string</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">chr()</span></td>
                                         <td><?= chr(64);?></td>
                                          <td>Returns a character from the specified ASCII value</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">chunk_split()</span></td>
                                         <td><?= chunk_split($str, 1, ".");?></td>
                                          <td>Splits a string into a series of smaller parts</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">explode()</span></td>
                                         <td><?php print_r (explode(" ",$str));?></td>
                                          <td>Breaks a string into an array, counterpart methods are implode & join.</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">htmlentities()</span></td>
                                         <td><?= htmlentities($str);?></td>
                                          <td>Convert some characters to HTML entities</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">lcfirst()</span></td>
                                         <td><?= lcfirst($str);?></td>
                                          <td>Converts the first character of a string to lowercase</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">ucwords()</span></td>
                                         <td><?= ucwords($str);?></td>
                                          <td>Converts the first character of each word in a string to uppercase</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">trim()</span></td>
                                         <td><?= trim($str, "This'");?></td>
                                          <td>Remove characters from both sides of a string, unlike ltrim(left) || rtrim(right)</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">str_ireplace()</span></td>
                                         <td><?= str_ireplace("This", "Replaced", $str);?></td>
                                          <td>Replaces some characters with some other characters in a string, simiral like str_replace(), but it's case-insensitive</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">str_pad()</span></td>
                                         <td><?= str_pad($str, 50, ".");?></td>
                                          <td>Pads a string to a new length, with wanted char</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">str_repeat()</span></td>
                                         <td><?= str_repeat($str, 2);?></td>
                                          <td>Repeats a string a specified number of times</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">str_shuffle()</span></td>
                                         <td><?= str_shuffle($str);?></td>
                                          <td>Randomly shuffles all the characters of a string</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">str_split()</span></td>
                                         <td><?php print_r (str_split($str));?></td>
                                          <td>Splits a every character of a string into an array</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">strcasecmp()</span></td>
                                         <td><?= strcasecmp($str, "This is a STRING for 'manipulations'");?></td>
                                          <td>Function compares two strings and returns 0 if they are equal, it's case-insensitive. Simiral to strcmp() which is case-sensitive</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">strstr()</span></td>
                                         <td><?= strstr($str, "for");?></td>
                                          <td>Searches for the first occurrence of a string inside another string, alias is strchr(), and case-insensitive version is stristr().
                                          If third argument is true, returns left side of string.</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">strcspn()</span></td>
                                         <td><?= strcspn($str, "for");?></td>
                                          <td>Returns the number of characters found in a string before any part of some specified characters are found</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">strip_tags()</span></td>
                                         <td><?= strip_tags($str);?></td>
                                          <td>This function strips a string from HTML, XML, and PHP tags</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">strpos()</span></td>
                                         <td><?= strpos($str, "o");?></td>
                                          <td>Finds the position of the first occurrence of a string inside another string. stripos() is case-insensitive version</td>
                                    </tr>
                                    <tr>
                                        <td><span class="label label-default">strrpos()</span></td>
                                         <td><?= strrpos($str, "o");?></td>
                                          <td>Finds the position of the last occurrence of a string inside another string. strripos() is case-insensitive version</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">strtok()</span></td>
                                         <td><?php $token = strtok($str," ");
                                         while ($token !== false)
                                         {
                                         echo "$token :: ";
                                         $token = strtok(" ");
                                         } ?></td>
                                          <td>Splits a string into smaller strings</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">strtoupper()</span></td>
                                         <td><?= strtoupper($str);?></td>
                                          <td>Convert all characters to uppercase</td>
                                    </tr>
                                      <tr>
                                        <td><span class="label label-default">strtolower()</span></td>
                                         <td><?= strtolower($str);?></td>
                                          <td>Convert all characters to lowercase</td>
                                    </tr>
                                     <tr>
                                        <td><span class="label label-default">wordwrap()</span></td>
                                         <td><?= wordwrap($str,15,"<br />");?></td>
                                          <td>Wrap a string into new lines when it reaches a specific length</td>
                                    </tr>
                                </tbody>
                            </table>
                           
                           
                           
                            
                          
                         
                    </div></div>   
                <div class="panel-footer">Example of most useful string manipulations.</div>
            </div>
       
        </div>

                 </div>
    
     

                 </div>
