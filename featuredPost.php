<?php
require_once 'models/Post.php';
require_once 'models/Media.php';
require_once './helpers/db.php';

$joinSql = '
SELECT
m.id AS media_id,
m.type AS media_type,
m.path AS media_path
FROM
media_post mp
JOIN
medias m ON mp.media_id = m.id
WHERE
mp.post_id=?
';

$post_id = 1;
$query = $connection->prepare($joinSql);
$query->bind_param('i', $post_id);
$query->execute();
$result = $query->get_result();
$media_post1 = $result->fetch_all(MYSQLI_ASSOC);

$media1 = array();
foreach ($media_post1 as $media) {
  if ($media['media_type'] === 'photo') {
    $media1[] = new Image($media['media_id'], $media['media_type'], $media['media_path']);
  }
  if ($media['media_type'] === 'video') {
    $media1[] = new Video($media['media_id'], $media['media_type'], $media['media_path']);
  }
  // $media1 = ($media['media_type'] === 'image') ? new Image($media['media_id'], $media['media_type'], $media['media_path']) : new Video($media['media_id'], $media['media_type'], $media['media_path']);
}

$post_id = 2;
$query = $connection->prepare($joinSql);
$query->bind_param('i', $post_id);
$query->execute();
$result = $query->get_result();
$media_post2 = $result->fetch_all(MYSQLI_ASSOC);

$media2 = array();
foreach ($media_post2 as $media) {
  if ($media['media_type'] === 'photo') {
    $media2[] = new Image($media['media_id'], $media['media_type'], $media['media_path']);
  }
  if ($media['media_type'] === 'video') {
    $media2[] = new Video($media['media_id'], $media['media_type'], $media['media_path']);
  }
  
}

$post_id = 3;
$query = $connection->prepare($joinSql);
$query->bind_param('i', $post_id);
$query->execute();
$result = $query->get_result();
$media_post3 = $result->fetch_all(MYSQLI_ASSOC);

$media3 = array();
foreach ($media_post3 as $media) {
  if ($media['media_type'] === 'photo') {
    $media3[] = new Image($media['media_id'], $media['media_type'], $media['media_path']);
  }
  if ($media['media_type'] === 'video') {
    $media3[] = new Video($media['media_id'], $media['media_type'], $media['media_path']);
  }
  // $media1 = ($media['media_type'] === 'image') ? new Image($media['media_id'], $media['media_type'], $media['media_path']) : new Video($media['media_id'], $media['media_type'], $media['media_path']);
}


$post = new Post('1', 'Vacanze al mare 2022', ['mare', 'spiaggia' , 'paesaggi'], ...$media1);
$post2 = new Post('2', 'Le città che ho visitato', ['città' , 'arte'], ...$media2);
$post3 = new Post('3', 'Passeggiate in montagna 2023', ['montagna', 'natura'], ...$media3);
$featuredPosts = [];
array_push($featuredPosts, $post, $post2, $post3);
//var_dump($featuredPosts);
include __DIR__ . '/layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
  <style>
    li{
      list-style: none;     
    }

    a{
      text-decoration: none;
    }

    img{
      width: 100%;
    }

    video{
      width: 100%;
    }
  </style>
</head>
<body>
  <section>
    <div class="container my-5">
      <div class="row">
        <?php foreach ($featuredPosts as $post) { ?>
          <div class="col-4 mb-4">
            
              <div class="card container">
                <article id="<?= $post->getId(); ?>">
                  <h3><?= $post->getTitle(); ?></h3>
                  <div class="card-image-top d-flex row">
                    <?php foreach ($post->getMedia() as $media) { ?>
                      <div class="col-4"><?= $media->display() ?></div>                
                    <?php } ?>
                  </div>            
                    
                  <ul class="tags">
                      <?php foreach ($post->getTags() as $tag) { ?>
                        <li><?= $tag ?></li>
                      <?php } ?>
                  </ul>
                </article>    
              </div>
             
          </div>
          <?php } ?>
      </div>
      
    </div>
    
      
  </section>
</body>

</html>

<?php
include './layout/footer.php';
?>