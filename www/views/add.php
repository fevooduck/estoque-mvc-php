<h1>Adicionar produto</h1>

<form action="" method="post">
    <div class="form-group">
        <label for="name">Nome do Produto</label>
        <input type="text" name="name" id="name" class="form-control" required />
    </div>
    <div class="form-group">
        <label for="price">Preço Venda</label>
        <input type="text" name="price" id="price" class="form-control" required />
    </div>
    <div class="form-group">
        <label for="cust_price">Custo</label>
        <input type="text" name="cust_price" id="cust_price" class="form-control" required />
    </div>
    <div class="form-group">
        <label for="quantity">Quantidade</label>
        <input type="text" name="quantity" id="quantity" class="form-control" required />
    </div>
    <div class="form-group">
        <label for="min_quantity">Quantidade Mínima</label>
        <input type="text" name="min_quantity" id="min_quantity" class="form-control"  required />
    </div>
    <button type="submit" class="btn btn-primary">Adicionar Produto</button>
</form>
