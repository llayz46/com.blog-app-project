<?php
require_once 'lib/article.php';
require_once 'lib/menu.php';

$id = $_GET['id'];
$article = $articles[$id];

$mainMenu['actualite.php'] = ['head_title' => $article['title'], 'meta' => substr($article['content'], 0, 250), 'exclude' => true];

require_once 'templates/header.php';
?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="<?=$article['image']?>" class="d-block mx-lg-auto img-fluid" alt="Logo" width="700" height="500" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$article['title']?></h1>
    <p class="lead"><?=$article['content']?></p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
    </div>
  </div>
</div>

<?php
require_once 'templates/footer.php';
?>