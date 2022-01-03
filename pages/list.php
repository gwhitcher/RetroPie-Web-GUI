<h1 class="page-header">List</h1>
<?php
$dir = BASE_DIR;
if(is_dir($dir)) {
    $scan_dir = scandir($dir);
    $files = array_diff($scan_dir, array('.', '..', 'Thumbs.db'));
    echo '<ul class="list-inline">';
    foreach($files as $file) {
        $file_parts = pathinfo($dir.'/'.$file);
        if (empty($file_parts['extension'])) {
            echo '<li class="text-center system-title"><a href="'.BASE_URL.'/view.php?system='.$file.'"><img class="img-responsive" src="'.BASE_URL.'/img/systems/'.$file.'.jpg"/>'.$file.'</a></li>';
        }
    }
    echo '</ul>';
}
