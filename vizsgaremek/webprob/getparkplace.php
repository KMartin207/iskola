<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Parking System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>🚗 Parking System</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="find.php">Find Car</a>
      <a href="admin.php">Admin</a>
    </nav>
  </header>

  <main>
    <section id="find" class="card">
      <h3>Find Your Car</h3>
      <form method="post">
        <input type="text" name="card_lookup" placeholder="Enter Your Card ID" required>
        <button type="submit" name="find">Find</button>
      </form>

      <?php
        if(isset($_POST['find'])){
            $parking = getActiveParkingByCard($_POST['card_lookup']);
            if($parking){
                $start = new DateTime($parking['start_time']);
                $now = new DateTime();
                $diff = $start->diff($now);
                $hours = max(1, ($diff->days * 24) + $diff->h + ($diff->i > 0 ? 1 : 0));
                $price = $hours * 1000;

                echo "<p class='success'>🚘 Your car is in spot <b>{$parking['place']}</b></p>";
                echo "<p>⏰ Parked since: {$parking['start_time']}</p>";
                echo "<p>💰 Current Fee: <b>$price Ft</b></p>";

                echo "<form method='post'>
                          <input type='hidden' name='card_action' value='{$_POST['card_lookup']}'>
                          <button type='submit' name='stay'>I am still parked</button>
                          <button type='submit' name='leave'>I left the parking</button>
                      </form>";
            } else {
                echo "<p class='error'>❌ No active parking found for this card.</p>";
            }
        }

        if(isset($_POST['leave'])){
            $price = archiveParking($_POST['card_action']);
            echo "<p class='success'>✅ You have left the parking. Final fee: <b>$price Ft</b></p>";
        }

        if(isset($_POST['stay'])){
            echo "<p class='info'>ℹ️ You are still parked. Keep the card safe!</p>";
        }
      ?>
    </section>
  </main>

  <footer>
    <p>© 2025 Parking System</p>
  </footer>
</body>
</html>
