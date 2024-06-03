<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs par site</title>

    <link rel="stylesheet" href="indexstyle103.css">

    
</head>

<body>
    <h1>Agents actifs du groupe <?php echo $_GET['group'] ?></h1>
    <?php include 'connexionDB_Serveur103.php'; ?>

    
    <table>
        <thead>
            <tr>
                <th>Nom complet d'agent</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'C:\xampp2\htdocs\prjStage\Maroc\Serveur103\getAgents_parGroupe.php'; ?>
        </tbody>
    </table>

    <script>
        setInterval(function(){
            location.reload();
        }, 600000);
    </script>
</body>
</html>
