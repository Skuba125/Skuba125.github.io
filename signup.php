<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h2>Regisztráció</h2>
  <div class="signup-form-form">
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="name" placeholder="Teljes név...">
      <input type="text" name="email" placeholder="Email...">
      <input type="text" name="uid" placeholder="Felhasználónév...">
      <input type="password" name="pwd" placeholder="Jelszó...">
      <input type="password" name="pwdrepeat" placeholder="Jelszo ismént...">
      <button type="submit" name="submit">Regiisztráció</button>
    </form>
  </div>
  <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Válasszon normális felhasznűló nevet!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Válasszon normális email cimet!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Jelszavak nem eggyeznek!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Valami nem sikerült!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Felhasználó már használatban van!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>Sikeres regisztráció!</p>";
      }
    }
  ?>
</section>

<?php
  include_once 'footer.php';
?>
