<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs par site</title>

    <link rel="stylesheet" href="indexstyle_206.css">

</head>

<body>
    <h1>Nombre des agents des sites Web. -Serveur_xxx2- </h1>
    <?php //include 'connexionDB_Serveur206.php'; ?>

    
    <table>
        <thead>
            <tr>
                <th>Groupe</th>
                <th>Nombre d'agents actifs</th>
            </tr>
        </thead>
        <tbody>
            <?php //include 'C:\xampp2\htdocs\prjStage\Maroc\Serveur103\showData.php'; ?>
        </tbody>
    </table>


    <?php sqlsrv_close($c); ?>
    <script>
        setInterval(function(){
            location.reload();
            }, 600000);
    </script>

</body>
</html>
