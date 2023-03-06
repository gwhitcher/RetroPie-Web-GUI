<div class="row">
    <div class="col-md-10">
        <h1 class="page-header">List</h1>
    </div>
    <div class="col-md-2 cog-list">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
        <ul class="dropdown-menu">
            <li>
                <a href="<?php echo BASE_URL; ?>/folder.php">Add Folder</a>
            </li>
        </ul>
    </div>
</div>

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
