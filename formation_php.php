<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>

        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php /* Insérer du code PHP ici */ ?>
            Voici quelques petits tests :
        </p>

        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>

         <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

         <?php
          $fullname = "Mathieu Nebra";
          echo "Bonjour $fullname et bienvenue sur le site !";
         ?>
        </br>
        <hr></hr>
         <h2><center>STRUCTURES CONDITIONNELEES</center></h2>
         <?php
                $isEnabled = true;
                $isOwner = false;
                $isAdmin = true;

                if (($isEnabled && $isOwner) || $isAdmin) {
                    echo 'Accès à la recette validé';
                } else {
                    echo 'Accès à la recette interdit !';
                }

        ?>

    </br> <hr></hr>
    <h2><center>CONDITIONS SWITCH</center></h2>
    <?php
$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;

    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;

    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;

    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;

    case 12:
        echo "Tu es assez bon";
    break;

    case 16:
        echo "Tu te débrouilles très bien !";
    break;

    case 20:
        echo "Excellent travail, c'est parfait !";
    break;

    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>

    </body>
</html>
