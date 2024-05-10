<?php
require_once 'models/Post.php';
require_once 'models/Media.php';

//creiamo 2 oggetti di classe Media

$image = new Media('1', 'photo' , 'http://example.com/photo.jpg');
$video = new Media('2', 'video', 'http://example.com/photo.jpg');

//craiamo 2 post con 1 media ciascuno

$post = new Post('1', 'Vacanze 2024' , 'Summer holiday', $image);

$post2 = new Post('2', 'Vacanze 2022' , $video);

$post3 = new Post('3', 'Vacanze 2022' , $image,$video);

var_dump($post);
echo($post->getTitle());