 <?php

function print_memory()
{
    /* Currently used memory */
    $mem_usage = memory_get_usage();
    /* Peak memory usage */
    $mem_peak  = memory_get_peak_usage();
    echo '<br>';
    echo 'The script is now using: <strong>' . round($mem_usage / 1024) . 'KB</strong> of memory.<br>';
    echo 'Peak usage: <strong>' . round($mem_peak / 1024) . 'KB</strong> of memory.<br><br>';
} 

function print_runtime()
{
    $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    
    echo "Process Time: {$time}";
}

?> 
