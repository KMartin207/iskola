<?php include "db.php"; ?>

<section id="store" class="card">
    <h3>Save Your Parking Spot</h3>
    <form method="post">
      <input type="number" name="place" placeholder="Parking Place Number" required>
      <input type="text" name="card_id" placeholder="Card ID" required>
      <button type="submit" name="save">Save</button>
    </form>
    <?php
      if(isset($_POST['save'])){
          insertParking($_POST['place'], $_POST['card_id']);
          echo "<p class='success'>✅ Parking spot saved!</p>";
      }
    ?>
  </section>