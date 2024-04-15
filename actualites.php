<?php
  require_once 'lib/config.php';
  require_once 'lib/pdo.php';
  require_once 'lib/article.php';
  require_once 'lib/menu.php';
  require_once 'templates/header.php';

  $articles = getArticles($pdo);
?>

<h1>Actualités</h1>

<div class="row text-center">
  <?php foreach($articles as $key => $article) {
    require 'templates/article_part.php';
  } ?>
</div>

<?php
  require_once 'templates/footer.php';
?>