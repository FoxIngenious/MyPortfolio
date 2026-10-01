<?php
header('Content-Type: application/json; charset=utf-8');

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    $response['message'] = 'Méthode non autorisée.';
    echo json_encode($response);
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $subject === '' || $message === '') {
    $response['message'] = 'Tous les champs sont obligatoires.';
    echo json_encode($response);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Adresse e-mail invalide.';
    echo json_encode($response);
    exit;
}

$to = 'jacksoncamilledoringa@gmail.com';
$mailSubject = 'Contact Portfolio - ' . mb_substr($subject, 0, 100);

$headers = [
    'From: ' . $name . ' <' . $email . '>',
    'Reply-To: ' . $email,
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=utf-8',
];

$body = "Nom : " . $name . "\n"
      . "Email : " . $email . "\n"
      . "Sujet : " . $subject . "\n\n"
      . "Message :\n" . $message . "\n";

$sent = @mail($to, $mailSubject, $body, implode("\r\n", $headers));

if ($sent) {
    $response['success'] = true;
    $response['message'] = 'Votre message a bien été envoyé. Merci !';
} else {
    $response['message'] = "Échec de l'envoi. Réessayez plus tard ou écrivez-moi directement à "
        . $to . '.';
}

echo json_encode($response);
