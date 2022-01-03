<a href="<?php echo BASE_URL; ?>home/add">Adicionar Produto</a>

<hr>

<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço Unitário</th>
    <th>Preço Compra</th>
    <th>Quantidade</th>
    <th>Ações</th>
  </tr>
  <?php foreach ($products_list as $product): ?>
    <tr>
      <td><?php echo $product['id']; ?></td>
      <td><?php echo $product['name']; ?></td>
      <td>R$ <?php echo number_format($product['price'], 2, ",", "."); ?></td>
      <td>R$ <?php echo number_format($product['cust_price'], 2, ",", "."); ?></td>
      <td><?php echo $product['quantity']; ?></td>
      <td>
        <a href="<?php echo BASE_URL; ?>products/edit/<?php echo $product['id']; ?>">[Editar]</a>
        <a href="<?php echo BASE_URL; ?>products/delete/<?php echo $product['id']; ?>">[Excluir]</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>