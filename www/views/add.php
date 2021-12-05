<h1>Adicionar produto</h1>

<form action="" method="post">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" class="form-control" />
    </div>
    <div class="form-group">
        <label for="description">Descrição</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Preço</label>
        <input type="text" name="price" id="price" class="form-control" />
    </div>
    <div class="form-group">
        <label for="category">Categoria</label>
        <select name="category" id="category" class="form-control">
            <option value="">Selecione</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Imagem</label>
        <input type="file" name="image" id="image" class="form-control" />
    </div>
    <input type="submit" value="Adicionar" class="btn btn-primary" />
</form>