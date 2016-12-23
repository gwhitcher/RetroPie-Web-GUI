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
    $percent_friendly = number_format( $percent * 100, 2 );
    return $percent_friendly;
}
function get_server_memory_usage(){
    $free = shell_exec('free');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2]/$mem[1]*100;
    $memory_usage = round($memory_usage,2);
    return $memory_usage;
}
function get_server_memory_total() {
    $free = shell_exec('free -t -b');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    return $mem[1];
}
function get_server_memory_free() {
    $free = shell_exec('free -t -b');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    return $mem[3];
}
function get_server_cpu_usage_cores() {
    $loads = sys_getloadavg();
    $core_nums = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));
    $load = round($loads[0]/($core_nums + 1)*100, 2);
    return $load;
}