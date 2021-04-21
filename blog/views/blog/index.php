<h1>Les articles</h1>

<?php if(isset($_GET['success'])): ?>
  <div class="alert alert-success">Vous êtes connecté!</div>
<?php endif ?>

<?php foreach($params['posts'] as $post): ?>
    <div class="card mb-3">
        <div class="card-body">
            <div>
                <?php foreach($post->getTags() as $tag): ?>
                    <span class="badge badge-success">
                        <a class="text-white" href="<?= ROOT ?>categorie/<?= htmlspecialchars($tag->id_categorie) ?>">
                            <?= htmlspecialchars($tag->nom) ?>
                        </a>
                    </span>
                <?php endforeach ?>
            </div>
            <small class="text-info">Publié le <?= $post->getCreatedAt() ?></small>
            <p><?= $post->getExcerpt() ?></p>
            <?= $post->getButton() ?>
        </div>
    </div>
<?php endforeach ?>
<nav>
    <ul class="pagination">
        <li class="page-item <?= ($params['currentPage'] === 1) ? "disabled" : "" ?>">
            <a href="./articles?page=<?= $params['currentPage'] - 1 ?>" class="page-link">Précédente</a>
        </li>
        <?php for($page=1; $page<=$params['pages']; $page++): ?>
            <li class="page-item <?= ($params['currentPage'] == $page) ? "active" : "" ?>">
                <a href="./articles?page=<?= $page ?>" class="page-link"><?= $page ?></a>
            </li>
        <?php endfor ?>
        <li class="page-item <?= ($params['currentPage'] === $params['pages']) ? "disabled" : "" ?>">
            <a href="./articles?page=<?= $params['currentPage'] + 1 ?>" class="page-link">Suivante</a>
        </li>
    </ul>
</nav>
