<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title>Admin - Parking System</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: "Segoe UI", Tahoma, sans-serif;
      margin: 0;
      background: #f3f5fa;
      color: #333;
    }

    /* ===== NAVBAR ===== */
    .navbar.admin {
      background: linear-gradient(135deg, #3f51b5, #673ab7);
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .navbar.admin h1 {
      font-size: 1.6rem;
      font-weight: bold;
      margin: 0;
    }

    .navbar.admin a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      background: rgba(255, 255, 255, 0.15);
      padding: 8px 14px;
      border-radius: 8px;
      transition: 0.3s;
    }

    .navbar.admin a:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    /* ===== LAYOUT ===== */
    .container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 25px;
      max-width: 1400px;
      margin: 30px auto;
      padding: 0 20px;
    }

    .card {
      background: white;
      padding: 20px 25px;
      border-radius: 14px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.08);
      animation: fadeIn 0.6s ease;
    }

    .card h3 {
      margin-bottom: 15px;
      font-size: 1.3rem;
      color: #3f51b5;
      border-left: 5px solid #673ab7;
      padding-left: 10px;
    }

    /* ===== TABLE ===== */
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.95rem;
    }

    table th, table td {
      padding: 12px 14px;
      text-align: left;
    }

    table th {
      background: #673ab7;
      color: white;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 0.85rem;
      letter-spacing: 0.5px;
    }

    table tr:nth-child(even) {
      background: #f9f9ff;
    }

    table tr:hover {
      background: #ede7f6;
      transition: background 0.3s ease;
    }

    /* ===== ANIM ===== */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(15px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ===== Responsive ===== */
    @media(max-width: 900px) {
      .container {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar admin">
    <h1>Admin Dashboard</h1>
    <a href="index.php">Vissza a főoldalra</a>
  </nav>

  <div class="container">
    <section class="card">
      <h3>Active Parkings</h3>
      <table>
        <tr><th>ID</th><th>Place</th><th>Card ID</th><th>Start Time</th></tr>
        <?php
          foreach(getAllActive() as $row){
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>{$row['place']}</td>
                      <td>{$row['card_id']}</td>
                      <td>{$row['start_time']}</td>
                    </tr>";
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
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>{$row['place']}</td>
                      <td>{$row['card_id']}</td>
                      <td>{$row['start_time']}</td>
                      <td>{$row['end_time']}</td>
                      <td>{$row['total_price']} Ft</td>
                    </tr>";
          }
        ?>
      </table>
    </section>
  </div>
</body>
</html>
