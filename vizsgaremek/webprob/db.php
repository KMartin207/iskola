
<?php
function connectDB() {
    $host = "localhost";
    $user = "lbzhvkxw_martin";
    $pass = "ProParkingDatabase";
    $db   = "lbzhvkxw_parking_db";

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("DB Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function insertParking($place, $cardId) {
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO active_parking (place, card_id) VALUES (?, ?)");
    $stmt->bind_param("is", $place, $cardId);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

function getActiveParkingByCard($cardId) {
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM active_parking WHERE card_id = ?");
    $stmt->bind_param("s", $cardId);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $result;
}

function archiveParking($cardId) {
    $conn = connectDB();
    // Lekérjük a parkolót
    $stmt = $conn->prepare("SELECT * FROM active_parking WHERE card_id = ?");
    $stmt->bind_param("s", $cardId);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if ($res) {
        $start = new DateTime($res['start_time']);
        $end   = new DateTime();
        $diff  = $start->diff($end);
        $hours = max(1, ($diff->days * 24) + $diff->h + ($diff->i > 0 ? 1 : 0)); 
        $price = $hours * 1000;

        // Archiválás
        $stmt = $conn->prepare("INSERT INTO archive_parking (place, card_id, start_time, end_time, total_price) VALUES (?, ?, ?, ?, ?)");
        $startStr = $res['start_time'];
        $endStr   = $end->format("Y-m-d H:i:s");
        $stmt->bind_param("isssi", $res['place'], $res['card_id'], $startStr, $endStr, $price);
        $stmt->execute();
        $stmt->close();

        // Törlés az aktívból
        $stmt = $conn->prepare("DELETE FROM active_parking WHERE card_id = ?");
        $stmt->bind_param("s", $cardId);
        $stmt->execute();
        $stmt->close();

        $conn->close();
        return $price;
    }
    $conn->close();
    return null;
}

function getAllActive() {
    $conn = connectDB();
    $res = $conn->query("SELECT * FROM active_parking");
    $rows = [];
    while($row = $res->fetch_assoc()) $rows[] = $row;
    $conn->close();
    return $rows;
}

function getAllArchive() {
    $conn = connectDB();
    $res = $conn->query("SELECT * FROM archive_parking");
    $rows = [];
    while($row = $res->fetch_assoc()) $rows[] = $row;
    $conn->close();
    return $rows;
}
?>

