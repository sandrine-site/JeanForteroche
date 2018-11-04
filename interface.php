<!DOCTYPE html>



<html lang="fr">
<head>
    <title>Site de Jean Forteroche</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styleInterface.css" lang="fr" /> 
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    
</head>
<body>
    <h2>Bienvenue dans l'interface d'administration de votre site ici vous pouvez:</h2>
    <h2> Créer ou éditer un billet ou modérer les avis laissés par les internautes</h2>
    <div id="soustitre">
        <p>Désirez-vous créer ou éditer un billet ou moderer les avis ?</p>
    </div>
    <form>
        <div id="formulaire">
            <div class="choix">
                <input type="radio" name="billet" value="create" id="create"/>
                <label for="create">Créer</label>
            </div>
            <div class="choix">
                <input type="radio" name="billet" value="edit" id="edit" />
                <label for="edit">Editer</label>
                <p>Pour éditer un billet existant veuillez entrer les réferences du billet (date de création).</p>
                <input type="date" name="date" placeholder="jj/mm/AAAA"/>
            </div>
            <div class="choix">
                <input type="radio" name="billet" value="moderate" id="moderate" />
                <label for="moderate">Modérer</label>
                <p>Veuillez entrer les dates de début et fin de modération.</p>
                <div id=date>
                    <label for="dateDepart">Du:</label>
                    <input type="date" name="dateDepart" placeholder="jj/mm/AAAA"/>
                </div>
                <div id=date>
                    <label for="dateFin">au:</label>
                    <input type="date" name="dateFin" placeholder="jj/mm/AAAA"/>
                </div>
            </div>  
        </div>  
        <input type="submit" value="Envoyé"/>
    </form>
</body>
</html>
    
