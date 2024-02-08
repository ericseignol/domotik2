<?php
// Vérifier si des données ont été envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs du formulaire
    $temperature = $_POST["temperature"];
    $humidite = $_POST["humidite"];

    // Vérifier si les données sont valides (vous pouvez ajouter des validations supplémentaires si nécessaire)

    // Stocker les données dans un fichier CSV (par exemple)
    $data = array($temperature, $humidite);
    $file = fopen("data.csv", "a");
    fputcsv($file, $data);
    fclose($file);

    // Répondre avec un message de succès
    echo "Données reçues avec succès !";
} else {
    // Répondre avec un message d'erreur si aucune donnée n'a été reçue
    http_response_code(400);
    echo "Erreur : Aucune donnée reçue.";
}
?>
