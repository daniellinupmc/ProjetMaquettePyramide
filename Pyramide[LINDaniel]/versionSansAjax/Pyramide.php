<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
    <?php
    class Pyramide
    {
        public $nbetage;
        function __construct($nbetage)
        {
            $this->nbetage = $nbetage;
        }
    }

    function afficherPyramide()
    {
        try {
            if (isset($_POST['etage']) && $_POST['etage'] != NULL) {
                $AfficherPyramide = new Pyramide(intval($_POST['etage']));
                if ($AfficherPyramide->nbetage > 0) {
                    $nbEtageEnCours = 1;
                    for ($etage = 0; $etage < $AfficherPyramide->nbetage; $etage++) {
                        $res = "<span class='m-1'>";
                        $espace = $AfficherPyramide->nbetage - $nbEtageEnCours;
                        $caractere = $nbEtageEnCours;
                        while ($espace > 0) {
                            $res = $res . "&nbsp;";
                            $espace--;
                        }
                        while ($caractere > 0) {
                            $res = $res . "X";
                            $caractere--;
                        }
                        echo $res . "</span><br>";
                        $nbEtageEnCours++;
                    }
                    echo '<div class="alert alert-success w-25 m-2">LA PYRAMIDE A BIEN ETE AFFICHE</div>';
                } else {
                    throw new Exception('<div class="alert alert-danger w-25 m-2">Vous devez insérer une valeur positive!!!</div>');
                }
            }
        } catch (Exception $e) {
            echo $e . "<br>";
        }
    }

    echo afficherPyramide();
    ?>

    <a href="index.html">Retour vers le formulaire de pyramide</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>