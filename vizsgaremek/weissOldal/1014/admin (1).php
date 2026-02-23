<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Admin - Parking System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar admin">
    <h1>Admin Dashboard</h1>
    <a href="index.php">Back to Site</a>
  </nav>

  <section class="card">
    <h3>Active Parkings</h3>
    <table>
      <tr><th>ID</th><th>Place</th><th>Card ID</th><th>Start Time</th></tr>
      <?php
        foreach(getAllActive() as $row){
            echo "<tr><td>{$row['id']}</td><td>{$row['place']}</td><td>{$row['card_id']}</td><td>{$row['start_time']}</td></tr>";
        }
      ?>
    </table>
  </section>

  <section class="card">
    <h3>Archived Parkings</h3>
    <table>
      <tr><th>ID</th><th>Place</th><th>Card ID</th><th>Start</th><th>End</th><th>Total Fee</th></tr>
      <?php
        foreach(getAllArchive() as $row){
            echo "<tr><td>{$row['id']}</td><td>{$row['place']}</td><td>{$row['card_id']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}</td><td>{$row['total_price']} Ft</td></tr>";
        }
      ?>
    </table>
  </section>
</body>
</html>
