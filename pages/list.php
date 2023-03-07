<h1 class="page-header">Consoles</h1>

<?php
$dir = BASE_DIR;
if(is_dir($dir)) {
    $scan_dir = scandir($dir);
    $files = array_diff($scan_dir, array('.', '..', 'Thumbs.db'));
    echo '<div class="row">';
    foreach($files as $file) {
        $file_parts = pathinfo($dir.'/'.$file);
        if (empty($file_parts['extension'])) {
            ?>
            <div class="col-sm-4 mb-4">
                <div class="card card-body text-center">
                    <a href="<?php echo BASE_URL; ?>/view.php?system=<?php echo $file; ?>">
                        <img class="img-fluid" src="<?php echo BASE_URL; ?>/img/systems/<?php echo $file; ?>.jpg" alt="<?php echo $file; ?>"/>
                        <span class="text-uppercase fw-bold h1"><?php echo $file; ?></span>
                    </a>
                </div>
            </div>
            <?php
        }
    }
    echo '</div>';
}