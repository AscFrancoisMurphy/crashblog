<?php
try
{

	$bdd = new PDO('mysql:host=localhost;dbname=CrashBlog-Equipe2;charset=utf8', 'root', 'ekpdeg3tx');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}
?>
    <div class="cont_auteur">
    




        <TABLE border="5" width="25%" align="left" bgcolor="yellow" vertical_align="middle">


         
<?php


$reponse = $bdd->query('SELECT * FROM Auteur');


while ($donnees = $reponse->fetch())
{
?>
    <tr>
        
   <td> <?php echo $donnees['Nom_auteur']; ?></td>
        
    </tr>

<?php
}
$reponse->closeCursor();

?>


        </TABLE>



        <div class="aff_auteur">

           <p>Nouvel Auteur</p>
        <input type="text" value="">
        <input type="submit" value="Valider">
        </div>
        <a href="">x</a>
</div>




