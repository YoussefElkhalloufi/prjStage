<?php
    $serverName = "192.168.3.204";
    $db = "vocalcom";
    $uid = "sa";
    $pass = "sa";

    $connection = [
        "Database" => $db,
        "Uid" => $uid,
        "PWD" => $pass
    ];

    $c = sqlsrv_connect($serverName, $connection);

    if(!$c){
        die(print_r(sqlsrv_errors(), true));
    }
?>