<?php require './helpers/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Utenti</title>
</head>
<body>


<?php

$query = "SELECT `posts` . `user_id`, `users` . `username`, SUM(CASE WHEN `likes` . `post_id` IS NOT NULL THEN 1 ELSE 0 END) AS `total_likes_received`
FROM `posts`
LEFT JOIN likes ON `posts` . `id` = `likes` . `post_id`
GROUP BY `posts` . `user_id`
ORDER BY `total_likes_received` DESC;";
$result = $connection->query($query);
var_dump($result);


while ( $row = $result->fetch_assoc() ) {
  echo "<p>{$row['users.username']} </p>";
}
echo "<hr>";
?>

</body>
</html>