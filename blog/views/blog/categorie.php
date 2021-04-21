<h1><?= htmlspecialchars($params['tag']->nom) ?></h1>

<?php foreach($params['tag']->getPosts() as $post): ?>
    <div class="card mb-3">
        <div class="card-body">
            <a><a href="<?= ROOT ?>articles/<?= $post->id ?>"><?= $post->articles ?></a></a>
        </div>
    </div>
<?php endforeach ?>
