<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-auto">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Blog</h5>

        <p>
        lisez pour vivre commentez
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Blog</h5>

        <ul class="list-unstyled mb-0">
            <li>
                <a href="<?= ROOT ?>" class="text-dark">Accueil</a>
            </li>
            <li>
                <a href="<?= ROOT ?>articles" class="text-dark">Articles</a>
            </li>
            <?php if(!isset($_SESSION['auth'])): ?>
                <li>
                 <a class="text-dark" href="<?= ROOT ?>inscription">S' inscrire</a>
                </li>
                <li>
                 <a class="text-dark" href="<?= ROOT ?>connexion">Se connecter</a>
                </li>
            <?php endif ?>
            <?php if(isset($_SESSION['auth'])): ?>
                <li class="nav-item">
                    <a class="text-dark" href="<?= ROOT ?>profil/<?= htmlspecialchars($_SESSION['id']) ?>">Profil</a>
                </li>
            <?php endif ?>

        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">CATEGORIES</h5>

        <ul class="list-unstyled">
            <?php foreach($params['tags'] as $tag): ?>
            <li>
                <a href="<?= ROOT ?>categorie/<?= htmlspecialchars($tag->id) ?>" class="text-dark"><?= htmlspecialchars($tag->nom) ?></a>
            </li>
            <?php endforeach ?>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

