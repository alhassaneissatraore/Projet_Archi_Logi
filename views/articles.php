<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activités Polytechniciennes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .menu {
            background-color: #333;
            width: 100%;
            display: flex;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .menu a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
        .content {
            width: 80%;
            max-width: 800px;
            margin: 20px 0;
            animation: fadeIn 1s ease-in-out;
        }
        .article {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s forwards;
            animation-delay: 0.2s;
        }
        .titre {
            font-size: 1.5em;
            margin: 0;
            color: #333;
        }
        .contenu {
            margin: 10px 0;
            color: #666;
        }
        .categorie {
            font-weight: bold;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Ensuring all articles have different animation delays */
        .article:nth-child(1) { animation-delay: 0.2s; }
        .article:nth-child(2) { animation-delay: 0.4s; }
        .article:nth-child(3) { animation-delay: 0.6s; }
        .article:nth-child(4) { animation-delay: 0.8s; }
        .article:nth-child(5) { animation-delay: 1s; }
    </style>
</head>
<body>
<h1>Activités Polytechniciennes</h1>
<div class="menu">
    <a href="index.php">Accueil</a>
    <a href="index.php?categorie=Sport">Sport</a>
    <a href="index.php?categorie=Santé">Santé</a>
    <a href="index.php?categorie=Education">Éducation</a>
    <a href="index.php?categorie=Politique">Politique</a>
</div>

<div class="content">
    <?php if (count($articles) > 0): ?>
        <?php foreach ($articles as $index => $article): ?>
            <div class='article' style="animation-delay: <?= 0.2 * ($index + 1) ?>s;">
                <h2 class='titre'><?= htmlspecialchars($article['titre']) ?></h2>
                <p class='contenu'><?= htmlspecialchars($article['contenu']) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun article trouvé pour cette catégorie.</p>
    <?php endif; ?>
</div>

</body>
</html>
