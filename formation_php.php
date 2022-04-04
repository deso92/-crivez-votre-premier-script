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


    </br> <hr></hr>
    <h2><center>BOUCLE -- WHILE --</center></h2>

    <?php
      $lines = 1;
        while ($lines <= 10)
        {
            echo 'Ceci est la ligne n°' . $lines . '<br />';
            $lines++;
        }
    ?>

    <br />
  <?php

    $mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
    $mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
    $laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

    $users = [$mickael, $mathieu, $laurene];

    $lines = 3; // nombre d'utilisateurs dans le tableau
    $counter = 0;

    while ($counter < $lines) {
        echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
        $counter++; // Ne surtout pas oublier la condition de sortie !
    }
  ?>


      </br> <hr></hr>
    <h2><center>BOUCLE -- FOR --</center></h2>
<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

?>

   <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>

    </br> <hr></hr>
    <h2><center>TABLEAU ASSOCIATIF ET BOUCLE FOREACH</center></h2>

    <?php

    $recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
  ];
?>

<div class="container">
        <h1>Affichage des recettes</h1>
        <!-- Boucle sur les recettes -->
        <?php foreach($recipes as $recipe) : ?>
            <!-- si la clé existe et a pour valeur "vrai", on affiche -->
            <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true): ?>

                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo $recipe['author']; ?></i>
                </article>

            <?php endif; ?>
        <?php endforeach ?>
    </div>

    </body>
</html>
