
<div id="left" class="column">
  <div class="block">
    <h1>Menu</h1>
    <ul id="navigation">
      <?php if(descobrirUser()=="admin"){ ?>
        <li class="color"><a href="alterar_pass_e.php">Alterar palavra passe</a></li>
      <li><a href="index_forum.php">Fórum</a></li>
      <li class="color"><a href="messages.php">Mensagens</a></li>
      <li><a href="ver_estudantes_e.php">Ver Estudantes</a></li>
      <li  class="color"><a href="#">Ver Professores</a></li>
      <li><a href="#">Ver Prof. Saúde</a></li>
      <li class="color"><a href="#">Os Meus Artigos</a></li>
      <li ><a href="registo_view.php">Adicionar utilizador</a></li>
        <?php }else if(descobrirUser()=="estudante"){?>
          <li class="color"><a href="meu_perfil_e.php">Perfil</a></li>
          <li><a href="index_forum.php">Fórum</a></li>
          <li class="color"><a href="messages.php">Mensagens</a></li>
          <li><a href="ver_estudantes_e.php">Ver Estudantes</a></li>
          <li  class="color"><a href="#">Ver Professores</a></li>
          <li><a href="#">Ver Prof. Saúde</a></li>
          <li class="color"><a href="#">Os Meus Artigos</a></li>
          <?php }else{?>
            <li class="color"><a href="meu_perfil_e.php">Perfil</a></li>
            <li><a href="index_forum.php">Fórum</a></li>
            <li class="color"><a href="messages.php">Mensagens</a></li>
            <li><a href="ver_estudantes_e.php">Ver Estudantes</a></li>
            <li  class="color"><a href="#">Ver Professores</a></li>
            <li><a href="#">Ver Prof. Saúde</a></li>
            <li class="color"><a href="#">Os Meus Artigos</a></li>
            <li ><a href="registo_view.php">Adicionar utilizador</a></li>
        <?php }; ?>
    </ul>
  </div>
</div>

<?php if(descobrirUser()=="estudante"){?>
<div id="right" class="column">
  <ul id="navigation">
    <li class="color"><a href="registar_peso.php">Registar Peso</a></li>
    <li><a href="registar_hora_exerc.php">Registar nº horas de exercício</a></li>
    <li class="color"><a href="calcular_imc.php">Calcular IMC</a></li>
    <li><a href="meus_dados.php?">Os Meus Dados</a></li>
  </ul>
  <a><img src="images/utilizadoresativos.gif" alt="" width="237" height="260" /></a><br />
</div>
<?php }; ?>
