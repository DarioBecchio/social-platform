<?php



$connection = new mysqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);

if ($connection && $connection -> connect_error) {
    echo "Connection failed: " . $connection->connect_error;
    die;
}

var_dump($connection);

$sql = "SELECT * FROM `posts`";

$result = $connection->query($sql);
var_dump($result);


?>


<?php 
include __DIR__ . '/layout/head.php';

?>

   

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Welcome to our Social Platform</h1>
      <p class="lead">Connect with friends, share updates, and explore new connections.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Sign Up</a>
      <a class="btn btn-secondary btn-lg" href="#" role="button">Login</a>
    </div>
  </div>

  
</body>
<?php
include __DIR__ . '/layout/footer.php';
?>
</html>