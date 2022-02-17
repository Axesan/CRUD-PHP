
<!-- 

    Utilisation de PDO 
    Nouvelle maniere de ce connecter a une base de données 
    
 -->

<?php 
try {
    
    // Connexion à la base de données	
    $dsn = 'mysql:dbname=crud;host=127.0.0.1';
    $user = 'root';
    $password = 'root';
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    
    //Contien l'id de l'utilisateur a supprimer 
    $id_users = $_POST['id_users']; 
    // Formulaire de contact
    if(isset($_POST['delete_users'])){
        // On prepare notre requétes
        $req = $pdo -> prepare("DELETE FROM `users` WHERE `id` = $id_users");
        $req->execute();
        // Redirection 
        header('Location: /');
        
    }

} catch (Exception $e) {
    echo " ERREUR VEUILLEZ CONTACTEZ LADMIN "+$e;
}
    	




