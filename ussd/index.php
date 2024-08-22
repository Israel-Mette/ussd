<?php
//renvoyer la réponse à l'API
header('content-type: text/plain');

//lire la variable de publication pour l'API
$sessionId = $_POST['sessionId'];
$networkCode = $_POST['networkCode'];
$serviceCode = $_POST['serviceCode'];
$phoneNumber = ltrim($_POST['phoneNumber']);
$text = $_POST['text'];

//vérifiez si le texte est vide pour démarrer une nouvelle session
if ($text == "") {
    $response = "CON Language Frameworks: \n1. Java \n2. Python \n3. PHP \n4. JavaScript";

} else {
    //diviser le texte pour regrouper les entrées de l'utilisateur
    $textArray = explode('*', $text);

    switch ($textArray[0]) {
        case "1":
            $response = "END Java Frameworks \n1. SpringBoot\n2. Apache Struts";
            break;
        case "2":
            $response = "END Pyhton Frameworks \n1. Flask\n2. Django\n3. PyTorch";
            break;
        case "3":
            $response = "END PHP Frameworks \n1. Laravel\n2. Symfony\n3. CodeIgniter";
            break;
        case "4":
            $response = "END JavaScript Frameworks \n1. NodeJS\n2. ReactJS\n3. TypeScript";
            break;
        default:
            $response = "END Invalid input";
            break;
    }
}

echo $response;
?>