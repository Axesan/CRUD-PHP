





<!-- 

    ATTENTION LE HEAD QUE JE VIEN DE METTRE N'EST PAS LA MANIERE LA PLUS OPTIMISER LE MIEUX ET DE CREE UN FICHER EX : "head.php" puis rappeler se fichier dans les fichiers concerner.

-->

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<!-- FORMULAIRE JOUTER UN UTILISATEUR -->

<form class="card container mt-5 col-sm-4 p-3" action="update.php" method="post">
    <h4>Mettez à jour votre utilisateurs N° <strong class='text-info'><?php echo $_POST['id_users_update'] ?></strong></h4>
    <a href="/">Retour</a>
    <input value="<?php echo $_POST['id_users_update'] ?>" name="id_update" type="hidden" class="form-control" />
    <hr>
  

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nom *</span>
        <input value="<?php echo $_POST['nom_users_update'] ?>" name="nom_update" type="text" class="form-control" required />
    </div>


   

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Prénom *</span>
        <input value="<?php echo $_POST['prenom_users_update'] ?>" name="prenom_update" type="text" class="form-control" required />
    </div>


    

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Profession *</span>
        <input value="<?php echo $_POST['profession_users_update'] ?>" name="profession_update" type="text" class="form-control" required/>
    </div>


    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Ville *</span>
        <input value="<?php echo $_POST['ville_users_update'] ?>" name="ville_update" type="text" class="form-control" required />
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Code-Postal *</span>
        <input value="<?php echo $_POST['cp_users_update'] ?>" name="cp_update" type="text" class="form-control" required/>
    </div>
    <hr>

    <button name="envoyer_update" type="submit" class="btn btn-secondary">Modifier</button>

</form>

<!-- FORMULAIRE JOUTER UN UTILISATEUR -->