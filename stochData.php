<?php
// Vérifier si des données ont été envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs du formulaire
    $temperatureExt = $_POST["temperatureExt"];
    $humiditeExt = $_POST["humiditeExt"];

    // Vérifier si les données sont valides (vous pouvez ajouter des validations supplémentaires si nécessaire)

    // Stocker les données dans un fichier CSV (par exemple)
    $data = array($temperatureExt, $humiditeExt);
    $file = fopen("data.csv", "a");
    fputcsv($file, $data);
    fclose($file);
echo '<div id="gauge" class="200x160px"></div>';
        echo $temperatureExt;
} else {
    // Répondre avec un message d'erreur si aucune donnée n'a été reçue
    http_response_code(400);
    echo "Erreur : Aucune donnée reçue.";
}
?>
