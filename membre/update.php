 <h3> Nouveau mot de passe </h3>
        <form method="post">
            <table>
                <tr><td>Code </td><td><input type="text" name="loginmembre" value=""></td></tr>
                <tr><td>Password </td><td><input type="password" name="passwordmembre" value=""></td></tr>
                <tr><td><input type="submit" name="membre" value="Entrer"> </td></tr>
            </table>
        </form>   
<?php
/* Connexion à la bdd */

        if(isset($_POST["membre"]))
            {
                $loginmembre=$_POST["loginmembre"];
                $passwordmembre=$_POST["passwordmembre"];
                
                //2)connexion avec la base de donne "bonnebouffe'
                $connect = mysqli_connect('localhost','root','','librairie')
                    or die("Erreur de connexion avec la BD!");
                //3)Requete SQL avec PHP-mysql
                $insertion=mysqli_query($connect,"update membre set password = '$passwordmembre' where code='$loginmembre'") or die("Erreur de requête sql!!");
                //4)Analyse et affichage des resultats de la requete
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