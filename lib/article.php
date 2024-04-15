<?php

$articles = [
  [
    'title' => 'PHP vs Python',
    'content' => 'PHPLorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nemo, optio distinctio explicabo vitae ut cum deserunt adipisci aperiam! Iusto, explicabo laudantium laboriosam architecto repellendus voluptates, illo commodi repellat ullam aspernatur quaerat deleniti molestias! Assumenda ipsum qui facere ad itaque quis quibusdam veniam dolor laborum inventore tempore quaerat aspernatur odio officiis esse cumque, voluptas repellat asperiores totam?',
    'image' => '/uploads/articles/1-php-vs-python.jpg',
  ],
  [
    'title' => 'JavaScript vs TypeScript',
    'content' => 'JSvsTS Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nemo, optio distinctio explicabo vitae ut cum deserunt adipisci aperiam! Iusto, explicabo laudantium laboriosam architecto repellendus voluptates, illo commodi repellat ullam aspernatur quaerat deleniti molestias! Assumenda ipsum qui facere ad itaque quis quibusdam veniam dolor laborum inventore tempore quaerat aspernatur odio officiis esse cumque, voluptas repellat asperiores totam?',
    'image' => '/uploads/articles/2-react-vs-react-native.jpg',
  ],
  [
    'title' => 'DevOps',
    'content' => 'DEVOPSSS Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nemo, optio distinctio explicabo vitae ut cum deserunt adipisci aperiam! Iusto, explicabo laudantium laboriosam architecto repellendus voluptates, illo commodi repellat ullam aspernatur quaerat deleniti molestias! Assumenda ipsum qui facere ad itaque quis quibusdam veniam dolor laborum inventore tempore quaerat aspernatur odio officiis esse cumque, voluptas repellat asperiores totam?',
    'image' => '/uploads/articles/3-devops.png',
  ],
];

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