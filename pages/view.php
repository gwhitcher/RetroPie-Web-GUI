<?php
if(!empty($_GET['system'])) { $folder = trim($_GET['system'], "/"); } else { $folder = ''; };
$dir = BASE_DIR.'/'.$folder;
$scan_dir = scandir($dir);
$files = array_diff($scan_dir, array('.', '..', 'Thumbs.db'));
?>
<div class="row">
    <div class="col-md-10">
        <h1 class="page-header"><?php echo strtoupper($_GET['system']); ?></h1>
    </div>
    <div class="col-md-2 cog-list">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo BASE_URL; ?>/add.php?folder=<?php echo $folder; ?>">Add File</a></li>
        </ul>
    </div>
</div>
<div class="table-responsive">
    <table
            class="table table-striped table-hover"
            id="table"
            data-pagination="false"
            data-search="true"
            data-show-toggle="false"
            data-toolbar=".toolbar"
    >
        <thead>
        <tr>
            <th scope="col" data-field="id" data-sortable="true">#</th>
            <th scope="col" data-field="title" data-sortable="true">Title</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count = 1;
        foreach($files as $file) {
            $file_parts = pathinfo($dir.'/'.$file);
            if (!empty($file_parts['extension'])) {
                echo '<tr>';
                echo '<td>'.$count.'</td>';
                echo '<td>'.$file.'</td>';
                echo '<td><a class="confirm btn btn-danger" href="'.BASE_URL.'/delete.php?folder='.$folder.'&file='.$file.'">Delete</a></td>';
                echo '</tr>';
                $count++;
            }
        }
        ?>
        </tbody>
    </table>
</div>