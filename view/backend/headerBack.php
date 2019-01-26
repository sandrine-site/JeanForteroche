<header>
    <nav>
        <h1>Accés rapides</h1>
        <a class="btn btn-primary" href="http://localhost/Projet4/index.php" role="button">
            <h3>Chapitre</h3> <i class="far fa-edit"></i>
        </a>
        <a class="btn btn-primary" href="http://localhost/Projet4/index.php?action=<?='AllComments'?>&&message=" role="button">
            <h3>Commentaires</h3><i class="fas fa-list-ul"></i>
        </a>
        <a class="btn btn-primary" href="http://localhost/Projet4/index.php?action=
<?='Adminpw'?>&&message=" role="button">
            <h3> Mot de passe</h3><i class="fas fa-key"></i>
        </a>
        <a class="btn btn-primary" href="http://localhost/Projet4/index.php" role="button">
            <h3>Quiter</h3> <i class="fas fa-sign-out-alt"></i>
        </a>
        <div class="warning">
            <?php
                      if (isset($message)){
                     echo ($message);
                      }
                      ?>
        </div>
    </nav>

</header>
