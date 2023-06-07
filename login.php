<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h2>Bejelentkezés</h2>
  <div class="signup-form-form">
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="uid" placeholder="Felhasználó/Email...">
      <input type="password" name="pwd" placeholder="Jelszó...">
      <button type="submit" name="submit">Sign up</button>
    </form>
  </div>
  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Töltse ki az összes mezőt!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Felhasználó/Jelszó hibás!</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
