<?php 

$ajax = $_POST['checker'];
if($ajax = 'success') :
    echo 'Ajax response is ' . $ajax;

endif;
