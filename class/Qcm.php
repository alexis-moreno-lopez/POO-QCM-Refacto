<?php
include_once("./Question.php");
include_once("./Answer.php");


// class Qcm {
//     private $questions = [];

//     public function addQuestion(Question $question) {
//         $this->questions[] = $question;
//     }

//     public function generate() {
//         foreach ($this->questions as $index => $question) {
//             echo "Question " . ($index + 1) . ": " . $question->getQuestionText() . "<br>";
//             $answers = $question->getAnswers();
//             foreach ($answers as $answer) {
//                 echo "- " . $answer->getText();
//                 if ($answer->isCorrect()) {
//                     echo " (Bonne réponse)";
//                 }
//                 echo "<br>";
//             }
//             echo "Explication: " . $question->getExplications() . "<br><br>";
//         }
//     }
// }



?>