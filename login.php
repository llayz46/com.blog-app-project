<?php
  require_once 'lib/config.php';
  require_once 'lib/menu.php';
  require_once 'lib/pdo.php';
  require_once 'lib/user.php';
  require_once 'templates/header.php';

  $errors= [];

  if (isset($_POST['loginUser'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = verifyUserLoginPassword($pdo, $email, $password);

    if ($user) {
      session_regenerate_id(true);
      $_SESSION['user'] = $user;

      if ($user['role'] === 'user') {
        header('Location: index.php');
      } elseif ($user['role'] === 'admin') {
        header('Location: admin/index.php');
      }
    } else {
      $errors[] = 'Email ou mot de passe incorrect';
    }
  }

?>

<h1>Se connecter</h1>

<?php foreach ($errors as $error) { ?>
  <div class="alert alert-danger" role="alert">
    <?=$error?>
  </div>
<?php } ?>

<form method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">Adresse email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <input type="submit" class="btn btn-primary" name="loginUser" value="Se connecter">
</form>

<?php
  require_once 'templates/footer.php';
?>