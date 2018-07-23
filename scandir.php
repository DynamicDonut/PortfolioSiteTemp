<?php
    $fol = $_GET['folder'];
    $dir = $fol;
    $projList = scandir($dir, SCANDIR_SORT_NONE);
   
    //Remove . and ..
    unset($projList[0]);
    unset($projList[1]);
   
    $jsonArr = join("\",\"", $projList);
   
    echo "[\"" . $jsonArr . "\"]";
?>