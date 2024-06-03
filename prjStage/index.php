<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs par site</title>
    <link rel="stylesheet" href="tst.css">
    <style>
        .nested-table {
            display: none;
        }
    </style>
</head>

<body>
    <h1>Nombre des agents des sites Web.</h1>
    
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Pays</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#" onclick="toggleNestedTable('maroc')"><img src="plusBtn.jpg" width="18"></a></td>
                <td>Maroc</td>
            </tr>
            <tr class="nested-table" id="maroc">
                <td colspan="2">
                    <table>
                        <tr><td><a href ='http://localhost/prjStage/Maroc/Serveur100/index_Serveur100.php'>Serveur 100--Qualitel</a></td></tr>
                        <tr><td><a href ='http://localhost/prjStage/Maroc/Serveur101/index_Serveur101.php'>Serveur 101--Fidélisation</a></td></tr>
                        <tr><td><a href ='http://localhost/prjStage/Maroc/Serveur103/index_Serveur103.php'>Serveur 103--CreationTrafic</td></tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><a href="#" onclick="toggleNestedTable('coteDivoire')"><img src="plusBtn.jpg" width="18"></a></td>
                <td>Cote d'Ivoire</td>
            </tr>
            <tr class="nested-table" id="coteDivoire">
                <td colspan="2">
                    <table>
                        <tr><td><a href ='http://localhost/prjStage/CoteDivoire/Serveur_204/index_Serveur204.php'>Serveur 204--Abidjan Tex3</a></td></tr>
                        <tr><td><a href ='http://localhost/prjStage/CoteDivoire/Serveur_205/index_Serveur205.php'>Serveur 205--Abidjan Tex4</a></td></tr>
                        <tr><td><a href ='http://localhost/prjStage/CoteDivoire/Serveur_206/index_Serveur206.php'>Serveur 206--Abidjan CDT</a></td></tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><a href="#" onclick="toggleNestedTable('cameroun')"><img src="plusBtn.jpg" width="18"></a></td>
                <td>Cameroun</td>
            </tr>
            <tr class="nested-table" id="cameroun">
                <td colspan="2">
                <table>
                        <tr><td><a href ='http://localhost/prjStage/Cameroun/Serveur_x/index_ServeurX.php'>Serveur xxx</a></td></tr>
                        <tr><td><a href ='http://localhost/prjStage/Cameroun/Serveur_xx/index_ServeurXX.php'>Serveur xxx</a></td></tr>
                        <tr><td><a href ='http://localhost/prjStage/Cameroun/Serveur_xxx/index_ServeurXXX.php'>Serveur xxx</a></td></tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <script>
        function toggleNestedTable(id) {
            var nestedTable = document.getElementById(id);
            if (nestedTable.style.display === "none") {
                nestedTable.style.display = "table-row";
            }else{
                nestedTable.style.display = "none";
            }
        }
    </script>
</body>
</html>
