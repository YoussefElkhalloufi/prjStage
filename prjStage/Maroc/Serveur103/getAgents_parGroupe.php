<?php

    //include 'connexionDB.php';


    if(isset($_GET['group'])) {
        $groupName = $_GET['group'];


        $sqlQuery = "SELECT (i.nom + ' ' + i.Prenom) AS [nom complet d'agent]
                 FROM ident i 
                 INNER JOIN MaintenantTeleope m ON i.ident = m.Ident 
                 INNER JOIN groupes g ON m.Grp = g.Num_Camp 
                 WHERE g.NOM_GRP = ? and m.grp <> 0 order by [nom complet d'agent] ";

        $stmt = sqlsrv_prepare($c, $sqlQuery, array(&$groupName));

        if(!$stmt) {
            die(print_r(sqlsrv_errors(), true));
        }

        if(sqlsrv_execute($stmt)) {
            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['nom complet d\'agent'] . "</td>";
                echo "</tr>";
            }
        }else{
            die(print_r(sqlsrv_errors(), true));
        }
    }
?>
