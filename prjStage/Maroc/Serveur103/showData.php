<?php


    $nb_agent_par_groupe = "select g.NOM_GRP as [Groupe], count(i.ident) as [Nombre d agent actif] from ident i inner join MaintenantTeleope m 
    on i.ident = m.Ident inner join groupes g
    on m.grp = g.Num_Camp where m.grp <> 0 group by g.NOM_GRP" ;

    $total_agent_actif = "	select count(*) as [nb agent actif] from MaintenantTeleope m inner join Groupes g on m.Grp = g.Num_Camp where m.Grp <> 0 ";

    $result1 = sqlsrv_query($c, $nb_agent_par_groupe);
    $result2 = sqlsrv_query($c, $total_agent_actif);

    if ($result1 === false) {
        die(print_r(sqlsrv_errors(), true));
    }


    while($row = sqlsrv_fetch_array($result1, SQLSRV_FETCH_ASSOC)){
        echo "<tr>";
        echo "<td><a href='agentsParGroupe.php?group=" . $row['Groupe'] . "'>" . $row['Groupe'] . "</a></td>";
        echo "<td>" .$row['Nombre d agent actif']. "</td>";
        echo "</tr>";
    }

    while($row = sqlsrv_fetch_array($result2, SQLSRV_FETCH_ASSOC)){
        echo "<tr style = 'background-color: #f2f2f2;'>";
        echo "<td style='font-weight: bold;'>Nombre total des agents actifs</td>";
        echo "<td style='font-weight: bold;'>" .$row['nb agent actif']. "</td>";
        echo "</tr>";
    }

?>