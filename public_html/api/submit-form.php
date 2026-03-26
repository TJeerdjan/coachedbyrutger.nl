<?php
/**
 * Universal Contact Form Handler — Direct-Online
 * Works for all clients. Place alongside db.php on each client site.
 * Falls back to local JSON storage if database is unavailable.
 */

header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Only POST requests are allowed"]);
    exit;
}

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if (strpos($contentType, 'application/json') !== false) {
    $input = json_decode(file_get_contents('php://input'), true) ?? [];
} else {
    $input = $_POST;
}

$api_key  = trim($input['api_key'] ?? '');
$naam     = trim($input['naam'] ?? '');
$email    = trim($input['email'] ?? '');
$telefoon = trim($input['telefoon'] ?? '');
$bericht  = trim($input['bericht'] ?? '');

if ($naam === '' || $email === '') {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Vul alle verplichte velden in (naam, email)"]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Ongeldig e-mailadres"]);
    exit;
}

$db_success = false;

// Try database connection
try {
    $conn = new mysqli("localhost", "u455592622_DO_admin", "+4XgXT&TrKT", "u455592622_Direct_online");

    if (!$conn->connect_error && $api_key !== '') {
        $stmt = $conn->prepare("SELECT id FROM klanten_DO WHERE api_key = ? LIMIT 1");
        if ($stmt) {
            $stmt->bind_param("s", $api_key);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $klant = $result->fetch_assoc();
                $client_id = (int)$klant['id'];

                $stmt2 = $conn->prepare("INSERT INTO formulieren_DO (client_id, naam, email, telefoon, bericht) VALUES (?, ?, ?, ?, ?)");
                if ($stmt2) {
                    $stmt2->bind_param("issss", $client_id, $naam, $email, $telefoon, $bericht);
                    $db_success = $stmt2->execute();
                }
            }
        }
        $conn->close();
    }
} catch (Exception $e) {
    // Database not available, will use fallback
}

// Fallback: save to local JSON file
if (!$db_success) {
    $submissions_file = __DIR__ . '/submissions.json';
    $submissions = [];
    if (file_exists($submissions_file)) {
        $existing = file_get_contents($submissions_file);
        $submissions = json_decode($existing, true) ?? [];
    }
    $submissions[] = [
        'naam' => $naam,
        'email' => $email,
        'telefoon' => $telefoon,
        'bericht' => $bericht,
        'datum' => date('Y-m-d H:i:s'),
        'bron' => 'lokale_fallback'
    ];
    file_put_contents($submissions_file, json_encode($submissions, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}


if ($saved) {
    header("Location: /?form=success#kennismaking");
    exit;
} else {
    error_log("Form error: could not save anywhere");
    header("Location: /?form=error#kennismaking");
    exit;
}
?>
