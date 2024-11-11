<?php
require_once('config.php');

$buscar = false;
$valor = "";
if (isset($_GET['valorBusca'])) {
  $buscar = true;
  if ($_GET['valorBusca'] != "") {
    $valor = $_GET['valorBusca'];
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clínica Veterinária</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
  <form id="area-busca" action="index.php" method="get">
    <input type="text" name="valorBusca" placeholder="Informe nome do animal">
    <button>Buscar</button>
  </form>
  <section id="resultados">

    <?php
    if ($buscar) {
      $AnimalView = new AnimalView();
      if ($valor == "") {
        $AnimalView->ExibirTodosAnimais();
      } else {
        $AnimalView->BuscarPeloNome($valor);
      }

    }
    ?>

  </section>
</body>

</html>