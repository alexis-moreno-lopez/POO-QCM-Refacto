<?php



$qcm = new Qcm(); // je crée le QCM
$question1 = new Question('POO signifie :'); // je crée une question
$question1->addAnswer(new Answer('Php Orienté Objet')); // j'ajoute une possible réponse correct
$question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil')); // j'ajoute une 2ème réponse possiblement correct
$question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::BONNE_REPONSE)); // j'ajoute la réponse correct
$question1->addAnswer(new Answer('Papillon Onirique Ostentatoire')); // j'ajoute une 3ème réponse possiblement correct
$question1->setExplications('Sans commentaires si vous avez eu faux :-°'); // j'ajoute l'explication
$qcm->addQuestion($question1); // j'appel ma question
$qcm->generate(); // et j'appel le générateur qui permet de générer tt le quizz





















?>