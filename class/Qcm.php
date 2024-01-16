<?php

class Qcm { // je crée ma classe
    private $questions = []; // dans mon QCM j'ai un tableau de question
    private $db;


    public function __construct($db){
       $this->db = $db;
    }

    public function addQuestion(question $question) { // je crée une méthode ou j'ajoute des question dans mon tableau
        $this->questions[] = $question; // dans le tableau du QCM je viens donner la valeurs $question à toute les question du tableau pour les rappeler plus tard
    }
    public function generate() { // je crée une méthode qui permet de générer les questions et réponse
        foreach ($this->questions as $index => $question) { //je créee une boucle foreach / j'associe questions à $index pour l'agrementer apres
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
    
    public function getQuestion(){
        $request = $this->db->query("SELECT question FROM question");
        $allQuestions = $request->fetchAll();
        var_dump($allQuestions);
        return $allQuestions;
    }
    
    private function hydrate(array $request) {
foreach ($request as $question) {
    $newQuestion = new Question($question);
    $this->questions[] = $newQuestion;

    foreach ($request as $answer) {
        $newAnswer = new Answer($answer);
        $this->answer = $newAnswer;
}

    }
}
    public function getAnswer() {
        $request = $this->db->query("SELECT answer FROM answer");
        $allAnswer = $request->fetchAll();
    }

}



?>