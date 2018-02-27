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
                    <option value="auteur">Autor</option>
                    <option value="categorie">Catégorie</option>
                </select>
                <input type="button" value="créer">
            </form>
        </div>
        <div>
            <form action="index.php">
                <select name="" id="">
                    <option value="auteur">Autor</option>
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
        <?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=CrashBlog_Equipe2;charset=utf8', 'Dev', 'luwasx18500');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
    $reponse = $bdd->query('SELECT * FROM Article');

    while ($donnees = $reponse->fetch())
{
?>
    <tr>
    <td><?php echo $donnees['Art_titre']; ?></td>
    <td><?php echo $donnees['Cate_nom']; ?></td>
    <td><?php echo $donnees['Art_aut']; ?></td>
    <td><?php echo $donnees['Art_date']; ?></td>
    </tr>
<?php
}

$reponse->closeCursor();

?>
    
    </table>
    <?php
    include 'categorie.php';
    ?>
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