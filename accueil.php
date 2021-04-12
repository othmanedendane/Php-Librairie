<h3>Bienvenue</h3>
<h3> Dans notre librairie </h3>
<?php
//1)Connexion PHP avec mysql
include("connexion.php");
//2)requete SQL de selection des recettes
$selection=mysqli_query($connect,"select * from livre limit 0,7");
//3)$Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3> Liste des livres </h3>
            <table border ='1'>
                <th>isbn</th> 
                <th> titre </th> 
                <th> auteur </th>
                <th> prix </th>  
                <th> photo </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td> <td>$resultat[1]</td> <td>$resultat[2]</td> <td>$resultat[3]</td>
        <td><img src='photos/$resultat[4]'style = height:70%;width:50%;align=center ></td> ";
    
    }
    echo"</table>";
}

else
{
    echo "";
}


?>