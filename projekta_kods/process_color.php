<?php
session_start();
require_once 'connection.php'; 
require_once 'Offer.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['newColor']) && isset($_POST['colorPrice']) && isset($_POST['offerID']) && isset($_FILES['colorImage'])) {
        $newColor = $_POST['newColor'];
        $colorPrice = $_POST['colorPrice'];
        $offerID = $_POST['offerID'];
        
        $imageFileName = $_FILES['colorImage']['name'];
        $imageFilePath = '../autosalons/img/' . $imageFileName;
        
        move_uploaded_file($_FILES['colorImage']['tmp_name'], $imageFilePath);

        $offer = new Offer();

        $offer->addColor($offerID, $newColor, $colorPrice, $imageFilePath);

        header('Location: offerPage.php?offerID=' . $offerID);
        exit;
    } else {
        echo "Invalid data.";
    }
} else {
    echo "Invalid request.";
}

?>
