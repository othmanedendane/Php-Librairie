<html>

<head>
    <title> Site de librairie </title>
    <style>
        li{
         display:inline;
        margin-right:120px;
        }
    </style>    
</head>

<body>
    <center>
        <!--Section entete -->
        <div style="width:80%;height:30%;border:1px solid black;"> 
        </div>
        <!--Section menu -->
        <div style="width:80%;height:10%;border:1px solid black;"> 
            <ol>
                <li><a href="index.php?lien=accueil"> Accueil </a> </li>
                <li><a href="index.php?lien=login"> Login </a> </li>
                <li><a href="index.php?lien=inscrire"> Inscrire </a> </li>
                <li><a href="index.php?lien=recherche"> recherche </a> </li>
            </ol>    
        </div>
        <!--Section details -->
        <div style="width:80%;"> 
        <!--Section PHP -->    
            <?php
            //verifier si le lien est cliqué
            if(isset($_GET["lien"]))
            {
                $lien=$_GET["lien"];
                //selon la valeur du lien recuperée
                switch($lien)
                {
                    case"accueil":
                        include("accueil.php");
                    break;
                    
                     case"login":
                        include("login.php");
                    break;
                    
                     case"inscrire":
                        include("inscrire.php");
                    break;
                    
                     case"recherche":
                        include("recherche.php");
                    break;
                    
                }
            }
            else
            {
               include("accueil.php"); 
            }

            ?>
        </div>

    </center>
</body>
</html>