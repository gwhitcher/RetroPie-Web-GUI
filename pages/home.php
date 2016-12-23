<?php
//Disk Free
$df = disk_free_space("/");
$disk_space_free = get_int_symbol($df);

//Disk Total
$dt = disk_total_space("/");
$disk_space_total = get_int_symbol($dt);

//Disk Progress Bar
$get_ds_percent = get_percent($df, $dt);
$disk_available = 100 - $get_ds_percent;

//Memory
$memory_usage = get_server_memory_usage();
$memory_total = get_int_symbol(get_server_memory_total());
$memory_free = get_int_symbol(get_server_memory_free());
$memory_available = 100 - $memory_usage;

//CPU
$cpu_usage = get_server_cpu_usage_cores();
$cpu_available = 100 - $cpu_usage;
?>

<h1 class="page-header">Welcome</h1>

<div class="row">
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-9">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> Disk Space</h3>
                    </div>
                    <div class="col-sm-3">
                        <label class="label label-default"><?php echo $disk_available; ?>% Available</label>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $get_ds_percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $get_ds_percent; ?>%;">
                        <?php echo $get_ds_percent; ?>%
                    </div>
                </div>
                <strong>Free Space:</strong> <?php echo $disk_space_free; ?>
                <br />
                <strong>Total Space:</strong> <?php echo $disk_space_total; ?>
            </div>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-9">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> Memory</h3>
                    </div>
                    <div class="col-sm-3">
                        <label class="label label-default"><?php echo $memory_available; ?>% Available</label>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $memory_usage; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $memory_usage; ?>%;">
                        <?php echo $memory_usage; ?>%
                    </div>
                </div>
                <strong>Free Memory:</strong> <?php echo $memory_free; ?>
                <br />
                <strong>Total Memory:</strong> <?php echo $memory_total; ?>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-9">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> CPU</h3>
                    </div>
                    <div class="col-sm-3">
                        <label class="label label-default"><?php echo $cpu_available; ?>% Available</label>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $cpu_usage; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $cpu_usage; ?>%;">
                        <?php echo $cpu_usage; ?>%
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>