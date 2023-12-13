<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire JSON</title>
</head>
<body>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecter les données du formulaire
    $nom = $_POST["nom"];
    $nomUsage= $_POST["nomUsage"];
    $prenom = $_POST["prenom"];
    $sexe = $_POST["sexe"];
    $nationalite = $_POST["nationalite"];   
    $dateNaissance = $_POST["date_naissance"];
    $departementNaissance = $_POST["departementNaissance"];
    $communeNaissance = $_POST["communeNaissance"];
    $nir = $_POST["nir"];
    $regimeSocial = $_POST["regimeSocial"];
    $handicap = isset($_POST["choix"]) ? ($_POST["choix"] === "true") : false;
    
    $email = $_POST["email"];


    // Créer un tableau associatif avec les données
    $donnees = array(
        "cerfa" => array(
            "employeur" => array(),
            "apprenti" => array(
                "nom" => $nom,
                "nomusage" => $nomUsage,
                "prenom" => $prenom,
                "sexe" => $sexe,
                "nationalite" => $nationalite,
                "date_naissance" => $dateNaissance,
                "departementNaissance" => $departementNaissance,
                "communeNaissance" => $communeNaissance,
                "nir" => $nir,
                "regimeSocial" => $regimeSocial,
                "handicap" => $handicap,
                
                "email" => $email,
            ),
            "maitre1" => array(),
        ),
    );

    // Convertir le tableau en format JSON
    $json = json_encode($donnees, JSON_PRETTY_PRINT);

    // Afficher le résultat JSON
    echo "<h2>Données JSON:</h2>";
    echo "<pre>$json</pre>";

    // URL de l'API
    $apiUrl = "https://www.cfadock.fr/v1/dossiers";

    // Configuration de la requête cURL
    $ch = curl_init($apiUrl);

    // Configuration des options cURL
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Permet de suivre les redirections

    // URL de redirection
    $redirectUrl = "https://exemple.com/nouvelle-page";

    // Exécution de la requête
    $response = curl_exec($ch);

    // Récupération des informations de la requête cURL
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    $redirectUrlAfterFollow = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

    // Vérification des erreurs
    if (curl_errno($ch)) {
        echo 'Erreur cURL : ' . curl_error($ch);
    }

    // Fermeture de la session cURL
    curl_close($ch);

    // Affichage des informations de l'en-tête
    echo "Code HTTP : " . $httpCode . "<br>";
    echo "Type de contenu : " . $contentType . "<br>";
    echo "URL de redirection (après suivi) : " . $redirectUrlAfterFollow . "<br>";


    // Affichage du corps de la réponse
    echo "<h2>Corps de la réponse : </h2>" . $response;
}
?>

<h2>Formulaire Apprenti</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nom">Nom : (maximum 80 caractères)</label>
    <input type="text" name="nom" maxlength="80" required><br>

    <label for="nom">Nom d'usage : (maximum 80 caractères)</label>
    <input type="text" name="nomUsage" maxlength="80"><br>

    <label for="prenom">Prénom : (maximum 80 caractères)</label>
    <input type="text" name="prenom" maxlength="80" required><br>

    <label for="sexe">Sexe :</label>
    <label>
            <input type="radio" name="sexe" value="M"> Homme
        </label>
        <label>
            <input type="radio" name="sexe" value="F"> Femme
        </label><br>

    <label for="nationalite">Nationalité :</label>
    <select name="nationalite" id="nationalite">
        <option value="0">Séléctionner</option>
        <option value="1">1 : Française</option>
        <option value="2">2 : Union Européenne</option>
        <option value="3">3 : Etranger hors Union Européenne</option>
    </select><br>

    <label for="date_naissance">Date de Naissance :</label>
    <input type="date" name="date_naissance" required><br>

    <label for="departementNaissance">Département de naissance : (Numéros de département)</label>
    <input type="text" name="departementNaissance" maxlength="3" minlenght="1" pattern="^[0-9]{1,3}$" required><br>

    <label for="communeNaissance">Commune de Naissance : (maximum 80 caractère)</label>
    <input type="text" name="communeNaissance" maxlength="80" required><br>
    
    <label for="nir">nir :</label>
    <input type="text" name="nir" maxlengrh="15" minlength="13" pattern="^[0-9]{6}[0-9AB]([0-9]{6}|[0-9]{8})$" required><br>
    
    <label for="regimeSocial">Regime Social :</label>
    <select name="regimeSocial" id="regimeSocial">
        <option value="0">Séléctionner</option>
        <option value="1">1 : MSA</option>
        <option value="2">2 : URSSAF</option>
    </select><br>
    
    <label for="handicap">Handicap :
        <label>
            <input type="radio" name="choix" value="true"> Oui
        </label>
        <label>
            <input type="radio" name="choix" value="false"> Non
        </label>

    </label><br>
    
    <label for="email">Email :</label>
    <input type="email" name="email" maxlength="80" required><br>

    <input type="submit" value="Soumettre">
</form>
<!--
<script>
    // Redirection automatique après un certain délai (par exemple, 3 secondes)
    setTimeout(function() {
        window.location.href = "<?php //echo $redirectUrlAfterFollow; ?>";
    }, 3000); // 3000 millisecondes (3 secondes)
</script>
-->