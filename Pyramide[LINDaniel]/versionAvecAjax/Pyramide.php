<?php
function afficherPyramide()
{
    try {
        if (isset($_POST['etage']) && $_POST['etage'] != NULL) {
            if ($_POST['etage'] > 0) {
                $nbEtageEnCours = 1;
                for ($etage = 0; $etage < $_POST['etage']; $etage++) {
                    $res = "<span class='m-1'>";
                    $espace = $_POST['etage'] - $nbEtageEnCours;
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
        echo $e;
    }
}

echo afficherPyramide();
?>