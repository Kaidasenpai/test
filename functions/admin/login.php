<?php
require_once('../shade/core/config.php');
if (!empty($_SESSION['admin_pass']) && $_SESSION['admin_pass'] == ADMIN_PASS) {
    header("Location: index.php");
    die;return;
}

if (!empty($_POST['supersecretpass'])) {
    if ($_POST['supersecretpass'] == ADMIN_PASS) {
        $_SESSION['admin_pass'] = $_POST['supersecretpass'];
        header("Location: index.php");
        die;return;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Panel - Login</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/css/mdb.dark.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

<form class="form-signin" method="post" action="/admin/login.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/user.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Admin Panel</h1>
  </div>

  <div class="form-label-group">
    <input type="password" name="supersecretpass" class="form-control" placeholder="Password" required>
    <label for="supersecretpass">Password</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>

  <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
</body>
</html>
