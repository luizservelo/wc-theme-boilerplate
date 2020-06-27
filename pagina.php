<?php

$Read->ExeRead(DB_PAGES, "WHERE page_name = :nm", "nm={$URL[0]}");

if (!$Read->getResult()){
    header('location: ' . BASE . '/404');
}
else{
    extract($Read->getResult()[0]);
}

var_dump($Read->getResult()[0]);

?>