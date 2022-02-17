<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD-PHP</title>
</head>

<body>
    <!-- ON INITIALISE NOTRE CLASS Pour l'affichage de nos données dans   -->
    <?php 
        // Lien vers notre class
        include 'DB.class.php';
        $db = new DB();
        // On selectionne la table à afficher . 
        $users = $db->getRows("users");   
    ?>

    <div class="container">

        <div class="row">
            <!-- Title -->   
            <div class="p-2 text-center">
                <h1>CRUD-AXESAN</h1>
                <p class='text-danger'>Projets réaliser le 16/02/2022</p>
                <hr>
            </div>
            <!-- EO Title -->

            <div class="col-lg-8">

                <!-- Contenue -->
                <table class="table p-5">

                    <thead>
                        <tr>

                            <th scope="col">IDENTIFIANTS</th>
                            <th scope="col">NOM</th>
                            <th scope="col">PRENOM</th>
                            <th scope="col">PROFESSION</th>
                            <th scope="col">Ville</th>
                            <th scope="col"> CP </th>
                            <th scope="col"> Actions </th>

                        </tr>
                    </thead>

                    <!-- AFFICHAGE DE NOS DONNEE A PARTIR D'une boucle foreach -->
                    <tbody>

                      <?php foreach($users as $user ) { ?>
                        <tr>

                            <th scope="row"> <?php echo $user['id'] ?></th>
                            <td><?php echo $user['nom']?></td>
                            <td><?php echo $user['prenom']?></td>
                            <td><?php echo $user['profession']?></td>
                            <td><?php echo $user['ville']  ?></td>
                            <td><?php echo $user['code_postal']  ?></td>
                            <!-- Actions  -->
                            <td class="text-center">
                                <!-- UPDATE -->

                                <form action="./update/form_update.php" method="post">
                                    <button type="submit" class="btn btn-sm btn-outline-info m-1">Mettre à jour</button>
                                    <input name="id_users_update" type="hidden" value="<?php echo $user['id']?>">
                                    <input name="nom_users_update" type="hidden" value="<?php echo $user['nom']?>">
                                    <input name="prenom_users_update" type="hidden"
                                        value="<?php echo $user['prenom']?>">
                                    <input name="ville_users_update" type="hidden" value="<?php echo $user['ville']?>">
                                    <input name="cp_users_update" type="hidden"
                                        value="<?php echo $user['code_postal']?>">
                                    <input name="profession_users_update" type="hidden"
                                        value="<?php echo $user['profession']?>">
                                </form>


                                <!-- DELETE -->

                                <form action="delete.php" method="post">
                                    <input name="id_users" type="hidden" value="<?php echo $user['id']?>">
                                    <button name="delete_users" type="submit"
                                        class="btn btn-sm btn-danger">Supprimer</button>
                                </form>
                            </td>
                            <!-- EO Actions  -->
                        </tr>
                      <?php } ?>

                    </tbody>

                </table>
                <!-- EO Contenue -->

            </div><!-- EO LG-4 -->

            <div class="col-lg-4">
                <!-- FORMULAIRE AJOUTER UN UTILISATEUR -->
                <form class="card  p-4" action="create.php" method="post">
                    <h2>Ajouter un utilisateur</h2>
                    <hr>
                    <!-- Input Nom  -->

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nom *</span>
                        <input name="nom" type="text" class="form-control" />
                    </div>


                    <!-- Input prenom  -->

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Prénom *</span>
                        <input name="prenom" type="text" class="form-control" />
                    </div>


                    <!-- Input Profession  -->

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Profession *</span>
                        <input name="profession" type="text" class="form-control" />
                    </div>
                   
                     <!-- Input VILLE  -->

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Ville *</span>
                        <input name="ville" type="text" class="form-control" />
                    </div>
                    
                    <!-- Input CP  -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Code-Postal *</span>
                        <input name="cp" type="text" class="form-control" />
                    </div>
                    <hr>

                    <button name="envoyer" type="submit" class="btn btn-secondary">Ajouter</button>

                </form>
                <!-- FORMULAIRE JOUTER UN UTILISATEUR -->

            </div><!-- EO LG-4 -->

        </div><!-- EO ROW -->

    </div><!-- EO CONTAINER -->


</body>

</html>