<?php 
$imagePath = getArticleImage($article['image']);
?>

<div class="col-md-4 my-2 d-flex">
  <div class="card">
    <img src="<?=$imagePath?>" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column">
      <h5 class="card-title"><?=htmlentities($article['title'])?></h5>
      <p class="card-text"><?=htmlentities(substr($article['content'], 0, 100))?></p>
      <div class="mt-auto">
        <?php if ($_SERVER['SCRIPT_NAME'] === '/admin/index.php') { ?>
        <?php } else { ?>
          <a href="actualite.php?id=<?=$article['id']?>" class="btn btn-primary">Lire la suite</a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>