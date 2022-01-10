<h1>Relatório</h1>

<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Quantidade mínima</th>
    <th>Diferença</th>
    <th>Ações</th>
  </tr>
  <?php foreach ($list as $product): ?>
    <tr>
      <td><?php echo $product['id']; ?></td>
      <td><?php echo $product['name']; ?></td>
      <td><?php echo $product['quantity']; ?></td>
      <td><?php echo $product['min_quantity']; ?></td>
      <td><?php echo floatval($product['min_quantity']) - floatval($product['quantity']); ?></td>
      <td>
        <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $product['id']; ?>">[Editar]</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<script type="text/javascript">
  window.print();
</script>