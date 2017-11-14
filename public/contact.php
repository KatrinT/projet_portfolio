<?php

require_once __DIR__.'/../inc/config.php';

if (!empty($_POST)){
print_r($_POST);
$curl = new Curl\Curl(); // création de l'objet

$curl->post('https://www.google.com/recaptcha/api/siteverify', array(
    'secret' => '6LenijgUAAAAALviCFHo6eR6pOVfh_ShLMt0Z-9T',
    'response' => $_POST['g-recaptcha-response'],
));
var_dump($curl->response);
$content = json_decode($curl->response, true);
print_r($content);
exit;
}

require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/contact.php';
require_once __DIR__.'/../view/footer.php';


 ?>
