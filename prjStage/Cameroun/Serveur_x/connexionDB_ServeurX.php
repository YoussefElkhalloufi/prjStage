<?php
    $serverName = "xx";
    $db = "xx";
    $uid = "xx";
    $pass = "xx";

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