<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/blog.css">
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
                <select name="" id="">
                    <option value="categorie">Catégorie</option>
                </select>
                <input type="button" value="Trier par">
            </form>
        </div>
    </div>
   <h1>CrashBlog</h1>
    <table>

<thead>
    <tr>
        <th>Auteurs</th>
        <th>Articles</th>
        <th>Categories</th>
        <th>Date</th>
    </tr>
</thead>
<tbody>
    <tr class="vert">
        <td>François</td>
        <td>La gestion des dechets</td>
        <td>Psychologie</td>
        <td>2018/02/27</td>
    </tr>
    <tr class="rouge">
        <td>Simon</td>
        <td>Combattre la dépression</td>
        <td>psychologie</td>
        <td>2018/02/27</td>
        </tr>
        <tr class="marron">
        <td>Alexis</td>
        <td>À la découverte du café</td>
        <td>découverte</td>
        <td>2018/02/27</td>
        </tr>
       <tr class="rosepale">
        <td>Samuel</td>
       <td>Les echec de levolution humaine</td>
       <td>préhistoire</td>
       <td>2018/02/27</td>
       </tr>
        <tr>
        <td>Julien</td>
        <td>Devenir quelquun pour les fragile</td>
        <td>Fantastique</td>
        <td>2018/02/27</td>
        </tr>
        <tr>
        <td>Tony</td>
        <td>Apprendre a faire des fonction sans résultats</td>
        <td>développement</td>
        <td>2018/02/27</td>
        </tr>
        <tr>
        <td>Caroline</td>
        <td>Savoir laver ses chaussures</td>
        <td>politique</td>
        <td>2018/02/27</td>
        </tr>
        <tr>
        <td>Gautier</td>
        <td>Travailler pour échouer</td>
        <td>Sentimentale</td>
        <td>2018/02/27</td>
        </tr>
        <tr>
        <td>Jordan</td>
        <td>Vivre avec un handicap</td>
        <td>Médecine</td>
        <td>2018/02/27</td>
        </tr>
        <tr>
        <td>Laure</td>
        <td>Travailer avec des moins que riens</td>
        <td>psychologie</td>
        <td>2018/02/27</td>
        </tr>
</tbody>

        <?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=CrashBlog-equipe2;charset=utf8', 'acs.samuel.mania', 'samuel1996');
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