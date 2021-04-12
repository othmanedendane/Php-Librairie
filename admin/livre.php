<h3>Bienvenue membre</h3>

<?php
//1)Connexion PHP avec mysql
include("../connexion.php");
//2)requete SQL de selection des recettes
$selection=mysqli_query($connect,"select * from livre limit 0,7");
//3)$Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3> Liste des livres </h3>
            <table border ='1'>
                
                <th> titre </th> 
                <th> auteur </th>
                <th> prix </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[1]</td> <td>$resultat[2]</td> <td>$resultat[3]</td>";
    
    }
    echo"</table>";
}

else
{
    echo "";
}

?>
<form method="post">
<br>
     <td> <a href="indexadmin.php?lien=ajoutlivre"> ajouter un livre </a> </td></tr>
    <br>
    <td> <a href="indexadmin.php?lien=maj"> maj d'un livre </a> </td></tr>
    <br>
        <td> <a href="indexadmin.php?lien=delete"> supression d'un livre </a> </td></tr>
</form>

