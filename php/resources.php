 <div class="tab-pane" id="resources">
       <div class="col-md-12">
        <div class="container">
              <div class="panel panel-default">
                <div class="panel-heading">Resources</div>
                    <div class="panel-body">
                        <div class="resources">
                            <div class="col-md-6">
                                 <?php
   # Get the path of the resources file                              
   $fileName = 'resources/resources.txt';
   # File open with read option
   $file = fopen($fileName,'r')  or exit('Unable to open the file!');
   # feof()checks the end of  file in php
   While( ! feof($file) )
  {
       # fgets() read every line in file
       echo   fgets($file);
       br();
  }
   # fclose() used to close a file  in php
   fclose($file);

?>
                            </div>
                            <div class="col-md-6">
                                <blockquote>
                                <pre>
                                    <code>
                # Get the path of the resources file
   $fileName = 'resources/resources.txt';
   # File open with read option
   $file = fopen($fileName,'r')  or exit('Unable to open the file!');
   # feof()checks the end of  file in php
   While( ! feof($file) )
  {
       # fgets() read every line in file, fgetc() read a file character by character
       echo   fgets($file);
       br();
  }
   # fclose() used to close a file  in php
   fclose($file);
                              </code>
                                </pre>
                            </blockquote>

                            </div>

                    </div></div>
                <div class="panel-footer">A resource is a special variable, holding a reference to an external resource. Resources are created and used by special functions.</div>
            </div>
                 </div>

</div>
    </div>
