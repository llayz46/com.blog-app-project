<?php 
require_once 'templates/header.php';
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/pdo.php';
require_once __DIR__ .'/../lib/article.php';

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$articles = getArticles($pdo, ADMIN_ITEMS_PER_PAGE, $page);
?>

<h1 class="mt-3">Liste des articles</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $article) { ?>
    <tr>
      <th scope="row"><?=$article['id']?></th>
      <td><?=$article['title']?></td>
      <td>Modifier | Supprimer</td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php 
require_once 'templates/footer.php';
?>