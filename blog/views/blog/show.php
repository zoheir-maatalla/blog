<div>
    <?php foreach($params['post']->getTags() as $tag): ?>
        <span class="badge badge-info"><?= htmlspecialchars($tag->nom) ?></span>
    <?php endforeach ?>
</div>
<p><?= htmlspecialchars($params['post']->articles) ?></p>

<form action="<?= ROOT ?>articles/<?= htmlspecialchars($params['post']->id) ?>" method="post" class="mb-5">
    <div class="form-group">
        <label for="commentaire">Commentaire:</label>
        <textarea name="commentaire" id="commentaire" rows="3" class="form-control"></textarea>
    </div>
    <div class="ml-auto"> 
        <button type="submit" class="btn btn-primary">Ajouter un commentaire</button>
    </div>
</form>

<?php foreach($params['post']->getComments() as $comment): ?>
    <div class="card mb-3">
        <div class="card-body">
            <small class="text-info">Publié le <?= htmlspecialchars($comment->getCreatedAt()) ?> par <?= htmlspecialchars($comment->login) ?></small>
            <p><?= htmlspecialchars($comment->commentaire) ?></p>
        </div>
    </div>
<?php endforeach ?>

<a href="../" class="btn btn-secondary">Retour</a>
