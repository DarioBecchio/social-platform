<?php

include __DIR__ . '/layout/header.php';

?>
<style>
  body{
    height: 100vh;
  }
</style>
<style>
    .jumbotron {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
      color: white;
      padding: 4rem 2rem;
      border-radius: 0.5rem;
      height: 100vh;
    }

    .jumbotron .display-4 {
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .jumbotron .lead {
      font-size: 1.25rem;
      margin-bottom: 1.5rem;
    }

    .jumbotron .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .jumbotron .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
    }

    .jumbotron .btn {
      margin-right: 0.5rem;
      transition: transform 0.2s ease-in-out;
    }

    .jumbotron .btn:hover {
      transform: scale(1.05);
    }

    @media (max-width: 576px) {
      .jumbotron {
        padding: 2rem 1rem;
      }
    }
  </style>
</head>
<body>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1 class="display-4">Welcome to our Social Platform</h1>
      <p class="lead">Connect with friends, share updates, and explore new connections.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Sign Up</a>
      <a class="btn btn-secondary btn-lg" href="#" role="button">Login</a>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<?php
include __DIR__ . '/layout/footer.php';
?>
</html>
