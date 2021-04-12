<?php
//1) recuperation du nom recherché
if(isset($_POST["recherche"]))
{
    $search=$_POST["search"];
   
//2)Connexion avec MYSQL
    include("../connexion.php");
//3)Requete SQL de selection de recette
    $selection=mysqli_query($connect,"select * from livre where titre='$search'");
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
        <td><img src='../photos/$resultat[4]'style = height:70%;width:50%;align=center ></td> ";
        
         echo"</table>";
    echo "<td>sous-total : $resultat[3]</td><br>";
        $x = 0.05;  
        echo "tps : ";
        echo $resultat[3] * $x;
        echo "<br>";
        $y = 0.0975;
        echo "tva : ";
        echo $resultat[3] * $y;
        echo "<br>";
        echo "Total : ";
        echo $resultat[3] + ($resultat[3] * $x) + ($resultat[3] * $y);
    
    }
    
}

   
//2)Connexion avec MYSQL
    include("../connexion.php");
//3)Requete SQL de selection de recette
    $selection=mysqli_query($connect,"select * from livre where isbn='$search'");
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
        <td><img src='../photos/$resultat[4]'style = height:70%;width:50%;align=center ></td> ";
        
         echo"</table>";
    echo "<td>sous-total : $resultat[3]</td><br>";
        $x = 0.05;  
        echo "tps : ";
        echo $resultat[3] * $x;
        echo "<br>";
        $y = 0.0975;
        echo "tva : ";
        echo $resultat[3] * $y;
        echo "<br>";
        echo "Total : ";
        echo $resultat[3] + ($resultat[3] * $x) + ($resultat[3] * $y);
    
    }
   
}






   
//2)Connexion avec MYSQL
    include("../connexion.php");
//3)Requete SQL de selection de recette
    $selection=mysqli_query($connect,"select * from livre where auteur='$search'");
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
        <td><img src='../photos/$resultat[4]'style = height:70%;width:50%;align=center ></td> ";
        
         echo"</table>";
    echo "<td>sous-total : $resultat[3]</td><br>";
        $x = 0.05;  
        echo "tps : ";
        echo $resultat[3] * $x;
        echo "<br>";
        $y = 0.0975;
        echo "tva : ";
        echo $resultat[3] * $y;
        echo "<br>";
        echo "Total : ";
        echo $resultat[3] + ($resultat[3] * $x) + ($resultat[3] * $y);
    
        
    }
    
}
    
}

else
{
    echo "Aucun livre trouvé dans la base de donnees ";
}
    

    
    
    
/*if($resultat[3] = "25$")
{
     echo "      <th>Stotal</th> 
                <th> titre </th> "; 

}

elseif($resultat[3] = "20$")
{
    echo "<th>Stotal</th> 
                <th> auteur </th> ";
}
 else
{
    echo "non";
}   
    
    
  */  

?>