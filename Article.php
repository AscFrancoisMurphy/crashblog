<?php
try

{
    $bdd = new PDO('mysql:host=localhost;dbname=Projet_blog;charset=utf8', 'root', 'TPdevlog', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)

{
    die('Erreur : ' .$e ->getMessage());
}
?>
    <div class="cont_article">

<p>Titre</p>
  <input type="text" value="">    
</select>
       
     <p>Auteur</p>
     <form action="article.php" method="post">
<select id="Auteur"> 

            <?php


          $aut = $bdd->query('SELECT * FROM Auteurs');

          while ($donnees = $aut->fetch())
          {
          ?>

          <option value="<?php echo($donnees['Auteur_Nom']) ?>"><?php echo($donnees['Auteur_Nom']) ?></option>

          <?php
          }

          $aut->closeCursor();

          ?>


  <input type="submit" value="Créer">
</select>
</form>


 <p>Catégorie</p>
  <form action="article.php" method="post">
  <select id="Categorie"> 

           <?php


                            $cat = $bdd->query('SELECT * FROM Categories');

                           while ($donnees = $cat->fetch())
                       {
                        ?>
                           
                            <option value="<?php echo($donnees['Cat_Nom']) ?>"><?php echo($donnees['Cat_Nom']) ?></option>
                           
                        <?php
                        }

                       $cat->closeCursor();

                        ?>

  <input type="submit" value="Créer">
</select>
</form>





        <div class="aff_categorie">

           
           <textarea name="textarea"
            rows="50" cols="200">
  Vous pouvez écrire votre article ici
        </textarea>
        <input type="submit" value="Valider">
        </div>
        <a href="">x</a>
</div>





