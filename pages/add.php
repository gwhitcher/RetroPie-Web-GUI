<?php
if(empty($_GET['folder'])) {
    header('Location: '.BASE_URL);
} else {
    $folder = trim($_GET['folder'], "/");
}
if(!empty($_POST['submit'])) {
    //Vars
    $dir = BASE_DIR.'/'.$folder;
    $file = $_FILES['file_upload'];
    move_uploaded_file($file['tmp_name'], $dir.'/'.$file['name']);
    header('Location: '.BASE_URL.'/view.php?system='.$folder);
}
?>
<h1 class="page-header">Add file to <?php echo strtoupper($folder); ?></h1>

<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>/add.php?folder=<?php echo $folder; ?>">

    <div class="mb-3">
        <label for="formFile" class="form-label">File Upload</label>
        <input class="form-control" type="file" id="file_upload" name="file_upload">
    </div>

    <div class="form-group">
        <input class="btn btn-sm btn-secondary" type="submit" name="submit" id="submit" value="Submit" />
    </div>
</form>