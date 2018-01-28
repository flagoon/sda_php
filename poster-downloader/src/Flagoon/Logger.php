<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 28.01.18
 * Time: 09:10
 */
declare(strict_types=1);
namespace Flagoon;

class Logger
{
    // $logFile string path to file that holds logs.
    private $logFile;

    /**
     * Assign a path to $logFile to show where to keep logs.
     * @param string $logFile
     */
    public function __construct(string $logFile)
    {
        $this->logFile = $logFile;
    }

    /**
     * This function adds to log file new log.
     * @param string $loggerContent
     */
    public function addToLog(string $loggerContent)
    {
        $date = new \DateTime();
        file_put_contents(
            $this->logFile,
            $date->format('Y-m-d H:i:s.u')
            . ' ' . $loggerContent .
            PHP_EOL,
            FILE_APPEND
        );
    }
}
