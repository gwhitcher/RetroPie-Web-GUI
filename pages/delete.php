<?php
if(empty($_GET['folder']) OR empty($_GET['file'])) {
    header('Location: '.BASE_URL);
} else {
    $folder = $_GET['folder'];
    $file = $_GET['file'];
    $dir = BASE_DIR;
    $file_dir = $dir.'/'.$folder.'/'.$file;
    unlink($file_dir);
    header('Location: '.BASE_URL.'/view.php?system='.$folder);
}