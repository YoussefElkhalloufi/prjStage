<?php
    $serverName = "192.168.11.101";
    $db = "Vocalcom";
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