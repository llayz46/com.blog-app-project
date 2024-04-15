<?php 
if ($article['image'] === null) {
  $imagePath = PATH_ASSETS_IMAGES.'default-article.jpg';
} else {
  $imagePath = PATH_UPLOADS_ARTICLES.htmlentities($article['image']);
}
?>

<div class="col-md-4 my-2 d-flex">
  <div class="card">
    <img src="<?=$imagePath?>" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column">
      <h5 class="card-title"><?=htmlentities($article['title'])?></h5>
      <p class="card-text"><?=htmlentities($article['content'])?></p>
      <div class="mt-auto">
        <a href="actualite.php?id=<?=htmlentities($key)?>" class="btn btn-primary">Lire la suite</a>
      </div>
    </div>
  </div>
</div>