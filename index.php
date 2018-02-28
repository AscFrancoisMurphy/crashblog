<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=CrashBlog_Equipe2;charset=utf8', 'Dev', 'luwasx18500',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    ?>
    <div>
        <div>
            <form action="index.php" method="post">
                <select name="" id="">
                    <option value="article">Article</option>
                    <option value="auteur">Autor</option>
                    <option value="categorie">Catégorie</option>
                </select>
                <input type="button" value="créer">
            </form>
        </div>
        <div>
            <form action="index.php" method="post">
                <select name="auteurs" id="">
                    <option value="autor">Autor</option>
                    <?php


                            $aut = $bdd->query('SELECT * FROM Auteur');

                            while ($donnees = $aut->fetch())
                        {
                        ?>
                            <tr>
                            <option value="<?php echo($donnees['auto']) ?>"><?php echo($donnees['auto']) ?></option>
                            </tr>
                        <?php
                        }

                        $aut->closeCursor();

                        ?>
                </select>
                <select name="categ" id="">
                    <option value="categorie">Catégorie</option>
                    <?php

                            $cato = $bdd->query('SELECT * FROM Categorie');

                            while ($donnees = $cato->fetch())
                        {
                        ?>
                            <tr>
                            <option value="<?php echo($donnees['Cat']) ?>"><?php echo($donnees['Cat']) ?></option>
                            </tr>
                        <?php
                        }

                        $cato->closeCursor();

                        ?>
                </select>
                <input type="submit" value="Trier par" name="sub">
            </form>
        </div>
    </div>
    
     <table>
    <?php
    
    $reponse = $bdd->query('SELECT * FROM Article');
        if (isset($_POST["sub"])){
           
            if($_POST["auteurs"]!==autor){
                $done = $_POST["auteurs"];
                $reponse = $bdd->prepare('SELECT * FROM Article WHERE Art_aut = ? ');
                $reponse->execute(array($done));  
            }
           
            elseif($_POST["categ"]!==categorie){
                $dcate = $_POST["categ"];
                $reponse = $bdd->prepare('SELECT * FROM Article WHERE Cate_nom = ? ');
                $reponse->execute(array($dcate));  
            } else{
               $reponse = $bdd->query('SELECT * FROM Article'); 
            } 
            }  
        ?>
        <?php
        
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