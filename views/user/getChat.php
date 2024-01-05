<?php

require_once '../../vendor/autoload.php';
use App\dao\ResponseDAO;

if (isset($_GET['recepteur_id'])) {
    $recepteurId = $_GET['recepteur_id'];

    $receptorName = ResponseDAO::getReceptorName($recepteurId);

    $messages = ResponseDAO::getResponsesByRecepteurId($recepteurId);

    $responseData = [
        'messages' => $messages['messages'], 
        'responses' => $messages['responses'],
        'receptorName' => $receptorName,
    ];

    echo json_encode($responseData);
} else {
    echo json_encode(['error' => 'Recepteur ID not provided']);
}

?>
