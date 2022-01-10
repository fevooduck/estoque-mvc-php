<h1>Editar produto</h1>

<form action="" method="post">
    <div class="form-group">
        <label for="name">Nome do Produto</label>
        <input type="text" name="name" id="name" value="<?php echo $info['name']; ?>" class="form-control" required />
    </div>
    <div class="form-group">
        <label for="price">Preço Venda</label>
        <input type="text" name="price" id="price" value="<?php echo $info['price']; ?>"  class="form-control" required />
    </div>
    <div class="form-group">
        <label for="cust_price">Custo</label>
        <input type="text" name="cust_price" id="cust_price" value="<?php echo $info['cust_price']; ?>"  class="form-control" required />
    </div>
    <div class="form-group">
        <label for="quantity">Quantidade</label>
        <input type="text" name="quantity" id="quantity" value="<?php echo $info['quantity']; ?>"  class="form-control" required />
    </div>
    <div class="form-group">
        <label for="min_quantity">Quantidade Mínima</label>
        <input type="text" name="min_quantity" id="min_quantity" value="<?php echo $info['min_quantity']; ?>"  class="form-control"  required />
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
