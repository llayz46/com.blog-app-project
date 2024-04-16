<?php
require_once __DIR__ . '/../../lib/config.php';
require_once __DIR__ . '/../../lib/session.php';
require_once __DIR__ . '/../../lib/menu.php';
$currentPage = basename($_SERVER['SCRIPT_FILENAME']);

adminOnly();
?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$adminMenu[$currentPage]['head_title']?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/override-bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

  <div class="d-flex min-vh-100">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
      <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto ps-3 text-white text-decoration-none">
        <i class="bi bi-menu-button pe-none me-2"></i>
        <span class="fs-4">Menu</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <?php foreach($adminMenu as $key => $menuItem) { ?>
        <li class="nav-item">
          <a href="<?=$key?>" class="nav-link text-white <?php if ($currentPage === $key) { echo 'active'; } ?>" aria-current="page">
            <i class="<?=$menuItem['icon']?> bi pe-none me-2"></i>
            <?=$menuItem['menu_title']?>
          </a>
        </li>
        <?php } ?>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://avatars.githubusercontent.com/u/53374170?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong><?=$_SESSION['user']['first_name']?></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
          <li><a class="dropdown-item" href="../../logout.php">Déconnexion</a></li>
        </ul>
      </div>
    </div>

    <main class="d-flex flex-column px-4">