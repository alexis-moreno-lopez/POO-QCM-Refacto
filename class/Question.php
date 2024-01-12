<?php
include_once("./Qcm.php");
include_once("./Answer.php");

class Question { // je crée une classe Question
    private $questionText; // je crée des proppriéter que peut comporter ma classe question comme le text de ma question
    private $answers = []; // ma classe question comporte des réponses
    private $explications; // ma classe question comporte des explications

    public function __construct($questionText) {// je crée une méthode construct avec le paramétres $questionText
    $this->questionText = $questionText; // questionText devient la variable $questionText avec la valeur qui lui est donner
    }

}

// class Question {
//     private $questionText;
//     private $answers = [];
//     private $explications;

//     public function __construct($questionText) {
//         $this->questionText = $questionText;
//     }

//     public function addAnswer(Answer $answer) {
//         $this->answers[] = $answer;
//     }

//     public function setExplications($explications) {
//         $this->explications = $explications;
//     }

//     public function getQuestionText() {
//         return $this->questionText;
//     }

//     public function getAnswers() {
//         return $this->answers;
//     }

//     public function getExplications() {
//         return $this->explications;
//     }
// }
// $qcm = new Qcm();
// $question1 = new Question('POO signifie :');
// $question1->addAnswer(new Answer('Php Orienté Objet'));
// $question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil'));
// $question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::BONNE_REPONSE));
// $question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));
// $question1->setExplications('Sans commentaires si vous avez eu faux :-°');
// $qcm->addQuestion($question1);
// $qcm->generate();

?>