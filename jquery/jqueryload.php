<?php
// Require class Example and it's objects
require '../class.php';

$languages = $instance->selectLanguages();
// Bootstrap striped table with fix header
?>

 <div class="listAllLanguages">
        <table class="table table-striped header-fixed">
      
        <thead>
        <tr>
           
            <th>Lang_id</th>
            <th>Lang name</th>
        </tr>
    </thead>
    <tbody>
        
        
             <?php foreach ($languages as $lang) :
            // Heredoc syntax output
echo <<< OUTPUT
             <tr>     
             <td>$lang->lang_id.</td>
             <td>$lang->lang_name</td>
             </tr>
OUTPUT;
             endforeach; ?>
    </tbody>
   </table>
  </div>