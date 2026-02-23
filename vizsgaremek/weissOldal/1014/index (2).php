<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Smart Parking - Weiss Parkoló</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <nav class="navbar">
    <h1>🚗 Weiss Parkoló</h1>
    <ul>
      <li><a href="./?p=" class="<?php echo (!isset($_GET['p']) || $_GET['p'] == '') ? 'active' : ''; ?>">Parkolás mentése</a></li>
      <li><a href="./?p=getparknum" class="<?php echo (isset($_GET['p']) && $_GET['p'] == 'getparknum') ? 'active' : ''; ?>">Autó keresése</a></li>
    </ul>
  </nav>

  <div class="container">
    <?php
    $p = $_GET['p'] ?? "";

    if ($p === "") {
      echo '
      <section id="store" class="card">
        <h3>Mentsd el a parkolóhelyed</h3>
        <form method="post" autocomplete="off">
          <label for="card_id">Felhasználónév 
            <span class="tooltip" tabindex="0" aria-label="Add meg a felhasználóneved a parkolóhely mentéséhez">i
              <span class="tooltiptext">Add meg a felhasználóneved a parkolóhely mentéséhez</span>
            </span>
          </label>
          <input type="text" id="card_id" name="card_id" placeholder="Felhasználónév" required />
          <label for="place">Parkolóhely száma</label>
          <input type="number" id="place" name="place" placeholder="Parkolóhely száma" required />
          <button type="submit" name="save">Mentés</button>
        </form>';

      if (isset($_POST["save"])) {
          insertParking($_POST["place"], $_POST["card_id"]);
          echo "<p class='success'>✅ Parkolóhely elmentve!</p>";
      }

      echo '</section>';
    }

    if ($p === "getparknum") {
      echo '
      <section id="find" class="card">
        <h3>Találd meg az autód</h3>
        <form method="post" autocomplete="off">
          <label for="card_lookup">Felhasználónév 
            <span class="tooltip" tabindex="0" aria-label="Add meg a felhasználóneved a parkolás kereséséhez">i
              <span class="tooltiptext">Add meg a felhasználóneved a parkolás kereséséhez</span>
            </span>
          </label>
          <input type="text" id="card_lookup" name="card_lookup" placeholder="Add meg a felhasználóneved" required />
          <button type="submit" name="find">Keresés</button>
        </form>';

      if (isset($_POST['find'])) {
          $parking = getActiveParkingByCard($_POST['card_lookup']);
          if ($parking) {
              $start = new DateTime($parking['start_time']);
              $now = new DateTime();
              $diff = $start->diff($now);
              $hours = max(1, ($diff->days * 24) + $diff->h + ($diff->i > 0 ? 1 : 0));
              $price = $hours * 1000;

              echo "<p class='success'>🚘 Az autód a helyén van: <b>" . htmlspecialchars($parking["place"]) . "</b></p>";
              echo "<p>⏰ Parkolás kezdete: " . htmlspecialchars($parking["start_time"]) . "</p>";
              echo "<p>💰 Jelenlegi díj: <b>" . number_format($price, 0, ',', ' ') . " Ft</b></p>";

              echo "<form method='post' autocomplete='off'>
                      <input type='hidden' name='card_action' value='" . htmlspecialchars($_POST["card_lookup"]) . "' />
                      <div class='button-group'>
                        <button type='submit' name='stay'>Még mindig parkolok</button>
                        <button type='submit' name='leave'>Elhagytam a parkolót</button>
                      </div>
                    </form>";
          } else {
              echo "<p class='error'>❌ Nem találtunk ezzel a kártyával aktív parkolást.</p>";
          }
      }

      if (isset($_POST["leave"])) {
          $price = archiveParking($_POST["card_action"]);
          echo "<p class='success'>✅ Elhagytad a parkolót. Fizetendő összeg: <b>" . number_format($price, 0, ',', ' ') . " Ft</b></p>";
      }

      if (isset($_POST["stay"])) {
          echo "<p class='info'>ℹ️ Még mindig parkolsz. Vigyázz a kártyára!</p>";
      }

      echo '</section>';
    }
    ?>
  </div>
</body>
</html>
