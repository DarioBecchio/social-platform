<?php require_once './helpers/db.php'; 

$query = "SELECT `posts`.`user_id`, `users`.`username`, 
SUM(CASE WHEN `likes`.`post_id` IS NOT NULL THEN 1 ELSE 0 END) AS `total_likes_received`
FROM `posts`
LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id`
LEFT JOIN `users` ON `posts`.`user_id` = `users`.`id`
GROUP BY `posts`.`user_id`, `users`.`username`
ORDER BY `total_likes_received` DESC";

$result = $connection->query($query);



/*while ( $row = $result->fetch_assoc() ) {
 

  ['username' => $name, 'total_likes_received' => $likes] = $row;
  
   //var_dump($name,$likes);
  
};*/

include __DIR__ . '/layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Utenti</title>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Top users</h1>
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Username</th>
          <th scope="col">Totale likes</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) :
            ['username' => $name, 'total_likes_received' => $likes] = $row;?>
            <tr>        
              <td><?=$name?></td>
              <td><?=$likes?></td>
            </tr>
        <?php endwhile;?>
      </tbody>
    </table>
</div>
</body> 
<?php
include __DIR__ . '/layout/footer.php';
?>
</html>
