<hr>

<form action="" method="get">
  <input type="text" name="busca" id="busca" placeholder="Pesquisar" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:""; ?>" />
</form>

<hr>

<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço Unitário</th>
    <th>Preço Compra</th>
    <th>Quantidade</th>
    <th>Quantidade mínima</th>
    <th>Ações</th>
  </tr>
  <?php foreach ($products_list as $product): ?>
    <tr>
      <td><?php echo $product['id']; ?></td>
      <td><?php echo $product['name']; ?></td>
      <td>R$ <?php echo number_format($product['price'], 2, ",", "."); ?></td>
      <td>R$ <?php echo number_format($product['cust_price'], 2, ",", "."); ?></td>
      <td><?php echo $product['quantity']; ?></td>
      <td><?php echo $product['min_quantity']; ?></td>
      <td>
        <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $product['id']; ?>">[Editar]</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<script type="text/javascript">
  document.querySelector('#busca').focus();
</script>