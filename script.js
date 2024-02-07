// Fonction pour initialiser les jauges et les informations de statut
window.onload = function () {
    // Initialisation de la jauge pour la température extérieure
    var gaugeExt = new JustGage({
        id: "gaugeExt",
        value: 0,
        min: -10,
        max: 45,
        title: "Température extérieure",
        label: "°C"
    });

    // Fonction pour mettre à jour les informations de statut
    function updateStatusIndicators(statusReg, statusRecy) {
        document.getElementById('status-regime-value').innerText = statusReg;
        document.getElementById('status-recyclage-value').innerText = statusRecy;
        // Ajoutez d'autres mises à jour d'indicateurs de statut si nécessaire
    }

    // Simulation de la mise à jour des données de température et de statut
    setInterval(function () {
        // Simulation des données de température
        var temperatureExt = Math.floor(Math.random() * (45 - (-10) + 1) + (-10)); // Température extérieure aléatoire entre -10 et 45 °C
        gaugeExt.refresh(temperatureExt); // Actualisation de la jauge de température extérieure

        // Simulation des données de statut
        var statusReg = Math.random() < 0.5 ? "En marche" : "Arrêté"; // Statut du régime aléatoire
        var statusRecy = Math.random() < 0.5 ? "Actif" : "Inactif"; // Statut de recyclage aléatoire

        updateStatusIndicators(statusReg, statusRecy); // Actualisation des indicateurs de statut
    }, 5000); // Actualisation toutes les 5 secondes
};