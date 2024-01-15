<?php

class Question { // je crée une classe Question
    private $questionText; // je crée des proppriéter que peut comporter ma classe question comme le text de ma question
    private $answers = []; // ma classe question comporte des réponses dans un tableaux
    private $explications; // ma classe question comporte des explications

    public function __construct($questionText) {// je crée une méthode construct avec le paramétres $questionText
    $this->questionText = $questionText; // questionText devient la variable $questionText avec la valeur qui lui est donner
    }
    public function addAnswer(Answer $answer) { // je crée une méthode ou j'ajoute une réponse
        $this->answers[] = $answer; // j'ajoute la réponse au tableaux réponse
    }
    public function setExplications($explications) { // je crée une méthode ou j'envoie une éxplication à la question 
        $this->explications = $explications; // je donne la valeur explications à la variable "$explications"
    }
public function getQuestionText() { // je crée une méthode ou je récupére le texte associé à une question.
    return $this->questionText; // La méthode retourne la valeur de la propriété $questionsText de l'objet courant ($this).
}
    public function getAnswers() { // je crée une méthode ou je récupére la réponse.
        return $this->answers; // La méthode retourne la valeur de la propriété $answers de l'objet courant ($this).
    }
    public function getExplications() {  // je crée une méthode ou je récupére l'explication
         return $this->explications; // La méthode retourne la valeur de la propriété $Eplications de l'objet courant ($this).
   }
}

?>