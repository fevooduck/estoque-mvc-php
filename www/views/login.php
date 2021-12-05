<form action="" method="post">
  <label for="username">Usuário:</label>
  <input type="email" name="email" placeholder="Digite seu e-mail" />
  <label for="password">Senha:</label>
  <input type="password" name="pass" placeholder="Digite sua senha" id="password" />
  <button type="submit">Entrar</button>
</form>

<?php if(!empty($msg)) : ?>
  <div class="msg">
    <?php echo $msg; ?>
  </div>
<?php endif; ?>