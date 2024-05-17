<?php
require_once 'models/Post.php';
require_once 'models/Media.php';
require_once './helpers/db.php';

//creiamo 2 oggetti di classe Media

/* 
SELECT medias.* 
FROM medias 
JOIN media_Post ON medias.id = media_post.media_id 
WHERE media_Post.post_id = 1 AND medias.type = 'photo';

SELECT medias.* 
FROM medias 
JOIN media_Post ON medias.id = media_post.media_id 
WHERE media_Post.post_id = 1 AND medias.type = 'video';


*/



$image = new Media('1', 'photo' , 'http://example.com/photo.jpg');
$video = new Media('2', 'video', 'http://example.com/photo.jpg');

$imgsql = "SELECT medias.* FROM medias JOIN media_Post ON medias.id = media_post.media_id WHERE media_Post.post_id = 1 AND medias.type = 'photo'";

//craiamo 2 post con 1 media ciascuno

$post = new Post('1', 'Vacanze 2024' , 'Summer holiday', $image);

$post2 = new Post('2', 'Vacanze 2022' , $video);

$post3 = new Post('3', 'Vacanze 2022' , $image,$video);

//var_dump($post);
//echo($post->getTitle());

$sql = "SELECT * FROM `posts`;";
$result = $connection->query($sql);

$featuredPosts = array();

while ( $row = $result->fetch_assoc()) {
  $tags = str_replace('["', '', $row['tags']);
  $tags = str_replace('"]', '', $tags);
  $featuredPosts[] = new Post($row['id'], $row['title'], explode(", ", $tags));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<?php
include './layout/header.php';
?>
<body>
    <section>
      <?php foreach ($featuredPosts as $post) {?>
          <article id="<?= $post->getId(); ?>">
            <h3><?= $post->getTitle(); ?></h3>
            <ul class="tags">
              <?php foreach ($post->getTags() as $tag) { ?>
                <li><?= $tag ?></li>
              <?php } ?>
            </ul>
          </article>
      <?php } ?>
    </section>
</body>
</html>

<?php
include './layout/footer.php';
?>