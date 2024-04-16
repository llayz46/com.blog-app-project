<?php
require_once 'lib/config.php';
require_once 'lib/pdo.php';
require_once 'lib/article.php';
require_once 'lib/menu.php';

$mainMenu['actualite.php'] = ['head_title' => 'Article introuvable', 'meta' =>substr('Article introuvable', 0, 250), 'exclude' => true];

$error = false;

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $article = getArticleById($pdo, $id);

  if ($article) {
    $imagePath = getArticleImage($article['image']);
    $mainMenu['actualite.php'] = ['head_title' => htmlentities($article['title']), 'meta' => htmlentities(substr($article['content'], 0, 250)), 'exclude' => true];
  } else {
    $error = true;
  }
} else {
  $error = true;
}


require_once 'templates/header.php';

if (!$error) { ?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="<?=$imagePath?>" class="d-block mx-lg-auto img-fluid" alt="Logo" width="700" height="500" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$article['title']?></h1>
    <p class="lead"><?=htmlentities($article['content'])?></p>
  </div>
</div>

<?php } else { ?>
  <h1>Article introuvable</h1>
<?php }

require_once 'templates/footer.php';
?>