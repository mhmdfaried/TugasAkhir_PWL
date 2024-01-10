<?php
session_start();

// Hapus semua session
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    // Read the JSON log file
    $file = '../../json/log.json';
    $logData = json_decode(file_get_contents($file), true);

    // Find the entry for the user who is logging out based on the user's ID
    foreach ($logData as &$entry) {
        if ($entry['id'] == $_SESSION['user_id']) {
            $entry['status'] = 'Logout';
            $entry['tanggal_logout'] = date('Y-m-d H:i:s'); // Add logout timestamp
            break;
        }
    }

    // Save the updated log data back to the JSON file
    file_put_contents($file, json_encode($logData, JSON_PRETTY_PRINT));
}


// Redirect ke halaman login atau halaman lain yang sesuai
echo "<script>window.location='../../login.php';</script>";
$_SESSION['status'] = "logout";
$_SESSION['logged_in'] = false;
session_destroy();
exit();
?>