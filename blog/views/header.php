<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= ROOT ?>">Blog</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>articles">Articles</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
            </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php foreach($params['tags'] as $tag): ?>
            <li><a class="dropdown-item" href="<?= ROOT ?>categorie/<?= htmlspecialchars($tag->id) ?>"><?= htmlspecialchars($tag->nom) ?></a></li>
        <?php endforeach ?>
        </ul>
        </li>
    </ul>
    <?php if(!isset($_SESSION['auth'])): ?>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>inscription">Inscription</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>connexion">Se connecter</a>
            </li>
        </ul>
    <?php endif ?>
    <?php if(isset($_SESSION['auth'])): ?>
        <ul class="navbar-nav ml-auto">
            <?php if($_SESSION['auth'] === '1337'): ?>
                <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>admin">Admin</a>
                </li>
            <?php endif ?>
            <?php if($_SESSION['auth'] === '42'): ?>
                <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>admin/creer-article">Créer un article</a>
                </li>
            <?php endif ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>profil/<?= htmlspecialchars($_SESSION['id']) ?>">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>logout">Se deconnecter</a>
            </li>
        </ul>
    <?php endif ?>
</nav>
