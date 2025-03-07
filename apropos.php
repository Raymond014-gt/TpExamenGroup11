<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - TP Cloud Computing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        section {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>

        <?php 
            include_once('header.php')
        ?>
    
    <h1>À propos du TP Cloud Computing</h1>
</header>

<div class="container">
    <section>
        <h2>Objectif du TP</h2>
        <p>Ce travail pratique vise à enseigner les concepts fondamentaux du Cloud Computing, notamment le déploiement d'applications, la gestion des services cloud et l'automatisation des infrastructures.</p>
    </section>

    <section>
        <h2>Technologies Utilisées</h2>
        <ul>
            <li>Amazon Web Services (AWS)</li>
            <li>Microsoft Azure</li>
            <li>Google Cloud Platform (GCP)</li>
            <li>Docker et Kubernetes</li>
        </ul>
    </section>

    <section>
        <h2>Encadrement</h2>
        <p>Ce TP est réalisé sous la supervision de [Nom du professeur/Encadrant] dans le cadre du cours de Cloud Computing.</p>
    </section>
</div>

<footer>
    <p>&copy; 2025 TP Cloud Computing - Tous droits réservés</p>
</footer>

</body>
</html>
