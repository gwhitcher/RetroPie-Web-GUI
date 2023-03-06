<?php
//Disk Free
$df = disk_free_space("/");
$disk_space_free = get_int_symbol($df);

//Disk Total
$dt = disk_total_space("/");
$disk_space_total = get_int_symbol($dt);

//Disk Used
$du = $dt - $df;
$disk_used = get_int_symbol($du);

//Disk Progress Bar
$get_ds_percent = get_percent($du, $dt);
$disk_available = 100 - $get_ds_percent;

//Memory
$mu = get_server_memory_usage();
$memory_usage = get_int_symbol($mu);
$mt = get_server_memory_total();
$memory_total = get_int_symbol($mt);
$mf = get_server_memory_free();
$memory_free = get_int_symbol($mf);
$get_mem_percent = get_percent($mu, $mt);
$memory_available = 100 - $get_mem_percent;


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
                <strong>Used Space:</strong> <?php echo $disk_used; ?>
                <br />
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
                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $get_mem_percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $get_mem_percent; ?>%;">
                        <?php echo $get_mem_percent; ?>%
                    </div>
                </div>
                <strong>Memory Used:</strong> <?php echo $memory_usage; ?>
                <br />
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