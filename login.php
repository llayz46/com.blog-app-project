<?php
  require_once 'lib/menu.php';
  require_once 'templates/header.php';
?>

<h1>Se connecter</h1>
<form method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">Adresse email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <input type="submit" class="btn btn-primary" value="Se connecter">
</form>

<?php
  require_once 'templates/footer.php';
?>