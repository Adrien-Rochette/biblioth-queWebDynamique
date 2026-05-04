<?php
function debug($tabLivres){
print('<pre>');
print_r($tabLivres);
print('</pre>');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <link rel="stylesheet" href="includes/styles/styles.css">
</head>
<body>
<?php
    $livresTitle = ["Sem","Aris"];
    $tabLivres = [
            [
                    'img' => 'images/Livres.png',
                    'titre' => 'Livres',
                    'date' => '2019',
                    'auth' => 'SEM',
                    'desc' => ' ifrhbskvjhlqsnlvinsfnkjrqrbgoervonlkf'
            ],
            [
                    'img' => 'images/Livres.png',
                    'titre' => 'Livres',
                    'date' => '2018',
                    'auth' => 'ARIS',
                    'desc' => ' ifrhbskvjhlqsnlvinsfnkjrqrbgoervonlkf'
            ],
    ];
    debug($tabLivres);
?>
<?php
    print('<pre>');
    print_r($livresTitle);
    print('</pre>');
?>

<main class="container">
    <aside class="sidebar">
        <div class="brand">
            <img src="images/pileLivre.png" alt="Logo Library" class="logo-img">
            <h1 class="brand-title">Library</h1>
        </div>

        <nav class="sidebar-nav">
            <ul>
                <li><a href="index.php" class="active">Accueil</a></li>
                <li><a href="livres.html">Livres</a></li>
                <li><a href="auteur.html">Auteurs</a></li>
                <li><a href="user.html">Utilisateurs</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </aside>

    <section class="main-content">
        <header class="content-header">
            <h1 class="page-title">Livres</h1>
        </header>

        <div class="stats-grid">

            <?php
                foreach ($tabLivres as $livre):
            ?>
            <div class="auth-card">
                <img src="<?= $livre['img']; ?>" alt="livre" class="auth-icon">
                <div class="auth-card-details">
                    <h2><?= $livre['titre']; ?></h2>
                    <h3><?= $livre['auth']; ?></h3>
                    <span class="stat-number"><?= $livre['date']; ?></span>
                    <span class="stat-label"><?= $livre['desc']; ?></span>
                </div>
            </div>
            <?php
                endforeach;
            ?>



        </div>
    </section>
</main>

</body>
</html>