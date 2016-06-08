<?php

header('Content-Type: text/xml');
echo '<?xml version='1.0' encoding="UTF-8" standalone="yes">';



echo '<errors>'; 


    $error = $_GET['error'];

    if(strlen($error) < 4 )
    	echo 'Incorrect name';

echo '<errors/>';

?>