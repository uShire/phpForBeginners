<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>

<h1>Recommended Books</h1>

<?php
$books = [
  [
    'name'          => 'Do Android Dream of Electric Sheep',
    'author'        => 'Philip K. Dick',
    'releaseYear'  => 1968,
    'purchaseUrl'   => 'http://youtube.com'
  ],
  [
    'name'          => 'Project Hail Mary',
    'author'        => 'Andy Weir',
    'releaseYear'  => 2021,
    'purchaseUrl'   => 'http://slack.com'
  ],
  [
    'name'          => 'The Martian',
    'author'        => 'Andy Weir',
    'releaseYear'  => 2011,
    'purchaseUrl'   => 'http://spotify.com'
  ],

];

function filterByAuthor(){
  foreach ($books as $book)
}
?>

<ul>
  <?php foreach ($books as $book):?>
    <?php if ($book['author'] === "Andy Weir"):?>
    <li>
      <a href="<?= $book['purchaseUrl'] ?>">
      <?= $book['name'];?> (<?= $book['releaseYear']?>) - By (<?= $book['author']?>)
      </a>
    </li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>
<p><?= filterByAuthor()?></p>

</body>
</html>