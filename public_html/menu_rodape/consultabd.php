<?php 
$sql_menu = "SELECT $id, apelido, idtexto FROM menu_rodape";

$result_menu = mysqli_query($conexao, $sql_menu);
while($menu = mysqli_fetch_assoc($result_menu)){
  $menu_idtexto = $menu['idtexto'];
  $array_apelidoMenu[] = $menu['apelido'];
  $array_idiomaMenu[] = $menu[$id];
}

for ($i = 0; $i < $menu_idtexto ; $i++) {
  $menu_apelido = $array_apelidoMenu[$i];
  $menu_idioma = $array_idiomaMenu[$i];

  $$menu_apelido = $menu_idioma;
}
?>