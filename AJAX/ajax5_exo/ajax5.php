<?php
require_once ('init.inc.php');

$resultat = $pdo -> query("DELETE FROM employes WHERE prenom = '$_POST[personne]'");
$tab = array();
$tab['monresultat'] = '';

$resultat = $pdo -> query("SELECT * FROM employes");

$tab['monresultat'] .= '<select name="personne" id="personne">';
        while($employes = $resultat->fetch(PDO::FETCH_ASSOC)){
            $tab['monresultat'] .= '<option>'  . $employes['prenom'] . '</option>';
        }

$tab['monresultat'] .= '</select>';

echo json_encode($tab);

?>
