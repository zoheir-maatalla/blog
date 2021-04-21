<h1>Creer un article</h1>

<form action="<?= ROOT ?>admin/creer-article" method="post">
    <div class="form-group">
        <label for="articles">Article</label>
        <textarea name="articles" id="articles" rows="8" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="id_categorie">Catégorie de l'article</label>
        <select multiple class="form-control" id="id_categorie" name="id_categorie">
            <?php foreach($params['tags'] as $tag): ?>
                <option value="<?= htmlspecialchars($tag->id) ?>"><?= htmlspecialchars($tag->nom) ?></option>
            <?php endforeach ?>          
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
