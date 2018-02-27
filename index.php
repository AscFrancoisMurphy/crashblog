<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <div>
            <form action="index.php">
                <select name="" id="">
                    <option value="article">Article</option>
                    <option value="autor">Autor</option>
                    <option value="categorie">Catégorie</option>
                </select>
                <input type="button" value="créer">
            </form>
        </div>
        <div>
            <form action="index.php">
                <select name="" id="">
                    <option value="autor">Autor</option>
                </select>
                <input type="text" name="" id="" value="nom de l'article">
                <input type="button" value="Date">
                <select name="" id="">
                    <option value="categorie">Catégorie</option>
                </select>
                <input type="button" value="Trier par">
            </form>
        </div>
    </div>
   
    <table>

    </table>
    <div class="popup auteur">
    <?php
        include 'php/Auteurs.php';
    ?>
    </div>
    <div class="popup article">
    <?php
        include 'php/Article.php';
    ?>
    </div>
    <div class="popup categorie">
    <?php
        include 'php/Categories.php';
    ?>
    </div>
</body>

</html>