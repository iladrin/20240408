<?php

const LOG_LEVEL_DEBUG = 'debug';
const LOG_LEVEL_INFO = 'info';
const LOG_LEVEL_NOTICE = 'notice';
const LOG_LEVEL_WARNING = 'warning';
const LOG_LEVEL_ERROR = 'error';
const LOG_LEVEL_CRITICAL = 'critical';
const LOG_LEVEL_ALERT = 'alert';
const LOG_LEVEL_EMERGENCY = 'emergency';

function writeLog(string $message, string $level = 'debug'): void
{
    $time = date('Y-m-d H:i:s');
    $message = "[{$time}] {$level}: {$message}\n";

    file_put_contents('../logs/log.txt', $message, FILE_APPEND);
}
