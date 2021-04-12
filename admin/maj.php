<table width=100% border="1px">
<tr>
    <td width="50%" align="center">
    <img src = "../photos/livre.jpg" style = "height:50%;width:80%">
    </td>
    <!-- Formulaire de login -->
    <td valign="top"> 
        <h3> Changement d'un livre </h3>
        <form method="post"> <!--formulaire-->
           <table>
               
                <tr><td>Isbn </td><td><input type="text" name="isbn" value=""> </td> </tr>
               <tr><td>Titre </td><td><input type="text" name="titre" value=""> </td> </tr>
               <tr><td>Auteur </td><td><input type="text" name="auteur" value=""> </td> </tr>
               <tr><td>Prix </td><td><input type="text" name="prix" value=""> </td> </tr>
               
               <tr><td></td><td><input type="submit" name="maj" value="Inscrire"> </td> </tr>
            </table>
            </form>
         <!-- Debut :::Section PHP-->      
             <?php
                //1)Recuperation des donnees transmises par post
                if(isset($_POST["maj"]))
                {
                    
                   $isbn=$_POST["isbn"];
                    $titre=$_POST["titre"];
                    $auteur=$_POST["auteur"];
                    $prix=$_POST["prix"];
                    

                    //2)connection avec mysql
                    $connect = mysqli_connect('localhost','root','','librairie') or die ("Erreur de connxion avec la BD!");
                    include("../connexion.php");
                    //3)Requete sql d'ajout de changement
                    $insertion=mysqli_query($connect,"update livre set isbn = '$isbn', titre = '$titre', auteur = '$auteur', prix = '$prix' where isbn='$isbn'") or die("Erreur de requête sql!!");
                    //4)analyse et affichage des resultats de la requête
                    $nbre=mysqli_affected_rows($connect);
                    if($nbre >0)
                    {
                        echo "Changement de $nbre réussi";
                    }
                    else
                    {
                        echo "aucun changement de livre!";
                    }
                    
                    
                }
              ?>      
                    
               
         <!-- fin :::Section PHP-->      
        </td>
</tr>

</table>