<?php
function get_int_symbol($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= (1 << (10 * $pow));
    return round($bytes, $precision) . ' ' . $units[$pow];
}
function get_int($bytes) {
    $exp = floor(log($bytes)/log(1024));
    return sprintf('%.2f', ($bytes/pow(1024, floor($exp))));
}
function get_percent($int1, $int2) {
    $percent = $int1/$int2;
    return number_format( $percent * 100, 2 );
}
function get_server_memory_total() {
    $mem[1] = 0;
    $free = shell_exec('free -t -b');
    if(!empty($free)) {
        $free = trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem, 'strlen');
        $mem = array_values($mem);
    }
    return $mem[1];
}
function get_server_memory_usage() {
    $mem[2] = 0;
    $free = shell_exec('free -t -b');
    if(!empty($free)) {
        $free = trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem, 'strlen');
        $mem = array_values($mem);
    }
    return $mem[2];
}
function get_server_memory_free() {
    $mem[3] = 0;
    $free = shell_exec('free -t -b');
    if(!empty($free)) {
        $free = trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem, 'strlen');
        $mem = array_values($mem);
    }
    return $mem[3];
}
function get_server_cpu_usage_cores() {
    if (function_exists('sys_getloadavg')) {
        $loads = sys_getloadavg();
        $core_nums = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));
        $load = round($loads[0]/($core_nums + 1)*100, 2);
    } else {
        $load = 0;
    }
    return $load;
}