

<!-- 

    ATTENTION LE HEAD QUE JE VIEN DE METTRE N'EST PAS LA MANIERE LA PLUS OPTIMISER LE MIEUX ET DE CREE UN FICHER EX : "head.php" puis rappeler se fichier dans les fichiers concerner.

-->

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<?php 
    // Declaration de ma class 
    include 'DB.class.php';

    $db = new DB();

    // Si le formulaire et submit alors :
    if(isset($_POST['envoyer'])) {
        // Tu m'insere dans la base de données . 
        $notification = null;
            $data = array(
            // 'nom_de_colonne => Données formulaire
            'nom' => $_POST["nom"],
            'prenom' => $_POST["prenom"],
            'profession' => $_POST["profession"],
            'ville' => $_POST['ville'],
            'code_postal' => $_POST['cp'],
            
            );
           
            // Notre fonction 'insert' attend 2 parametres en 1.le nom de la table 2.les données saisie dans le formulaire
            $insert = $db->insert('users', $data);
           
       
            }
?>
    <!--  Déclaration de la variable notification qui est  null -->
    <div class="alert alert-success container mt-5">
        <?php echo $notification = "Utilisateur ajouter avec succés" ?> <hr> <a class="text-success" href="/">Retourner sur le site</a>
    </div>