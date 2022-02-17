<?php 



try {
    $id_update = $_POST['id_update'];

    $update_nom = $_POST['nom_update'];
    $update_prenom = $_POST['prenom_update'] ;
    $update_profession = $_POST['profession_update'];
    $update_ville = $_POST['ville_update'] ;
    $update_code_postal = $_POST['cp_update'] ;

    // Connexion à la base de données	
    $dsn = 'mysql:dbname=crud;host=127.0.0.1';
    $user = 'root';
    $password = 'root';
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
 
    // Formulaire de contact
    if(isset($_POST['envoyer_update'])){
        // On prepare notre requétes
        $req = $pdo -> prepare("UPDATE `users` SET `nom`= '$update_nom', `prenom` = '$update_prenom' , `profession`='$update_profession' , `ville`='$update_ville' , `code_postal`='$update_code_postal' WHERE id = $id_update");
        $req->execute();
        // Redirection 
        header('Location: /');
        
    }

} catch (Exception $e) {
    echo " ERREUR VEUILLEZ CONTACTEZ LADMIN ".$e;
}