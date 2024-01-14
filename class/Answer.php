<?php
include_once("./Qcm.php"); // j'inculue le fichier QCM pour les relié
include_once("./Question.php"); // j'inculue le fichier Question.php pour les relié


class Answer {      //je crée ma classe

    const BONNE_REPONSE = true;    // je crée une constante qui ne change jamais (bonne réponse et je lui donne la valeur "vrai")

    private $text;  
    private $correct;
// je lui donne du propriéter (une réponse est un text et peut etre correct)

public function __construct($text, $correct = false) { 
// je crée une méthode construct avec les paramétres $text, $correct en lui donnant pour valeur par défaut "false"
//ce qui signifie que si ce paramètre n'est pas fourni lors de la création de l'objet, la réponse sera par défaut considérée comme incorrecte.

$this->text = $text; //traduction / Answer = (Reponse) la variable text devient $text
$this->correct = $correct; //traduction / Answer = (Reponse) la variable correct devient correct

}
public function getText() { //je crée une méthode et j'utilise (get) get est utilisée pour obtenir la valeur de la propriété 
    return $this->text; // cette instruction renvoie la valeur actuelle de la propriété "text" de l'objet en cours
}
public function isCorrect() { // je crée une méthode qui dit que la réponse est correct
    return $this->correct; // cette instruction renvoie la valeur actuelle de la propriété "correct" de l'objet en cours
}
}


?>