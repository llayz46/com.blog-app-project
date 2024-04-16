<?php
function getArticles(PDO $pdo, INT $limit = null): array {
  $sql = 'SELECT * FROM articles ORDER BY id DESC';

  if ($limit) {
    $sql .= " LIMIT :limit";
  }

  $query = $pdo->prepare($sql);

  if ($limit) {
    $query->bindValue(':limit', $limit, PDO::PARAM_INT);
  }

  $query->execute();
  $articles = $query->fetchAll(PDO::FETCH_ASSOC);

  return $articles;
}

function getArticleById(PDO $pdo, INT $id): array|bool {
  $sql = 'SELECT * FROM articles WHERE id = :id';

  $query = $pdo->prepare($sql);

  $query->bindValue(':id', $id, PDO::PARAM_INT);

  $query->execute();
  $articles = $query->fetch(PDO::FETCH_ASSOC);

  return $articles;
}

function getArticleImage(string|null $image):string {
  if ($image === null) {
    return $imagePath = PATH_ASSETS_IMAGES.'default-article.jpg';
  } else {
    return $imagePath = PATH_UPLOADS_ARTICLES.htmlentities($image);
  }
}