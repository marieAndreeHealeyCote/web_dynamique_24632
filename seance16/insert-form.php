<?php

// $prenom = $_POST['prenom'];
// $courriel = $_POST['courriel'];
// $mdp = $_POST['mpd'];

foreach($_POST as $key=>$value){
     $$key=$value;
}


echo $naissance;

?>