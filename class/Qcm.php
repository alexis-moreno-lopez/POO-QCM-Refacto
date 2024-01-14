<?php
include_once("./Question.php");
include_once("./Answer.php");

class Qcm { // je crée ma classe
    private $questions = []; // dans mon QCM j'ai un tableau de question

    public function addQuestion(question $question) { // je crée une méthode ou j'ajoute des question dans mon tableau
        $this->questions[] = $question; // dans le tableau du QCM je viens donner la valeurs $question à toute les question du tableau pour les rappeler plus tard
    }
    public function generate() { // je crée une méthode qui permet de générer les questions et réponse
        foreach ($this->questions as $index => $question) { //je créee une boucle foreach / les question de mon QCM seront appeler par la variable $question dans mon index 
            echo "Question " . ($index + 1) . ":" . $question->getQuestionText() . "<br>"; // je donne + 1 à $index pour que dans mon QCM à partir de la première question elle soit numéroter
           // je viens récupérer la question  / question n°1 : "qui est la ?"
        $answers = $question->getAnswers(); // Cette méthode est supposée retourner les réponses associées à la question.
        foreach ($answers as $answer) { // je crée une boucle foreach $answers: C'est le tableau sur lequel la boucle foreach itère. Dans votre cas, il s'agit probablement du tableau contenant les réponses associées à la question.
 // $answer: C'est une variable qui prend la valeur de chaque élément du tableau à chaque itération de la boucle. Dans chaque itération, $answer contient une réponse spécifique de la liste des réponses.
            echo "- " . $answer->getText(); // je viens récupérer la réponse / "brigite"
            if ($answer->isCorect()) { // si la réponse est correct, je echo "Bonne réponse
                echo " (Bonne réponse)";
            }
            echo "<br>"; // passage à la ligne
        }
        echo "Eplication: " . $question->getExplications() . "<br><br>";} // suite à la réponse je echo une explications associé
    }
}



?>