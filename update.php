<?php
$currentVersion = "1.0";  // Current version of your application
$latestVersion = "1.1";   // Latest version available

if ($latestVersion > $currentVersion) {
    $updateInfo = array(
        'version' => $latestVersion,
        'download_url' => 'https://github.com/emr0913/my-note-app-updates/releases/tag/latest',
        'changelog' => 'test'
    );

    echo json_encode($updateInfo);
} else {
    echo "No update available.";
}
?>
