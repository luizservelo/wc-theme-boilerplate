<?php 

if(empty($URL[1])){
    header('location: ' . BASE);
}
else{
    $search = urldecode($URL[1]);
}

// search for $search in your tables
