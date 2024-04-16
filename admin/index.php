<?php 
  require_once 'templates/header.php';
  require_once __DIR__ . '../../lib/pdo.php';
  require_once __DIR__ . '../../lib/article.php';

  $articles = getArticles($pdo, HOME_LIMIT_ARTICLES);
?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="/assets/images/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="Logo" width="700" height="500" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold lh-1 mb-3">Admin Dashboard</h1>
    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <a href="../index.php" class="btn btn-primary btn-lg px-4 me-md-2">Accueil</a>
    </div>
  </div>
</div>

<h2 class="display-6 fw-semibold">Les dernières nouveautés</h2>
<div class="row text-center">
  <?php foreach($articles as $key => $article) {
    require __DIR__ . '../../templates/article_part.php';
  } ?>
</div>

<?php 
  require_once 'templates/footer.php';
?>