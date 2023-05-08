<?php
// Verifica se o idioma foi definido pelo usuário, caso contrário, usa o idioma do navegador.
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

// Inclui o arquivo de idioma correspondente com base no idioma selecionado.
switch ($lang) {
    case "pt":
        include "lang.pt.php";
        break;
    case "fr":
        include "lang.fr.php";
        break;
    default:
        include "lang.en.php";
}

// Define o título da página com base no arquivo de idioma carregado.
$page_title = $lang['PAGE_TITLE'];

// Exibe o contedo da página com base no arquivo de idioma carregado.
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="background-image">
  <div class="menu">
    <a href="#"><?php echo $lang['MENU_PEERING']; ?></a>
    <a href="https://www.peeringdb.com/net/XXX">PeeringDB</a>
    <a href="https://ibakerserver.pt/looking-glass/">Looking Glass</a>
    <a href="https://ibakerserver.pt"><?php echo $lang['MENU_ASSOCIATION']; ?></a>
  </div>

  <h1><?php echo $lang['PAGE_TITLE']; ?></h1>

  <p class="description"><?php echo $lang['PAGE_DESCRIPTION']; ?></p>

  <footer>
    <p><?php echo $lang['COPYRIGHT']; ?> <?php echo date('Y'); ?>. <?php echo $lang['ALL_RIGHTS_RESERVED']; ?></p>
  </footer>
</body>
</html>
