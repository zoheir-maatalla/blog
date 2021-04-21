<h1>Modifier un article</h1>

<form action="<?= ROOT ?>admin/edit/<?= htmlspecialchars($params['post']->id) ?>" method="post">
    <div class="form-group">
        <label for="articles">Article</label>
        <textarea name="articles" id="articles" rows="8" class="form-control"
        ><?= htmlspecialchars($params['post']->articles) ?></textarea>
    </div>
    <div class="form-group">
        <label for="id_categorie">Catégorie de l'article</label>
        <select multiple class="form-control" id="id_categorie" name="id_categorie">
            <?php foreach($params['tags'] as $tag): ?>
                <option value="<?= htmlspecialchars($tag->id) ?>"
                    <?php if($tag->id === $params['post']->id_categorie): ?>
                        selected
                    <?php endif ?>
                    ><?= htmlspecialchars($tag->nom) ?>
                </option>
            <?php endforeach ?>          
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
</form>
