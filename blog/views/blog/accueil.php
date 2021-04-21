<h1>Accueil</h1>

<?php foreach($params['posts'] as $post): ?>
    <div class="card mb-3">
        <div class="card-body">
            <div>
                <?php foreach($post->getTags() as $tag): ?>
                    <span class="badge badge-success">
                        <a class="text-white" href="<?= ROOT ?>categorie/<?= $tag->id_categorie ?>">
                            <?= $tag->nom ?>
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
