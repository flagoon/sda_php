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
    // as I have multiple logs I need to give different paths to them.
    private $logFile;

    public function __construct(string $logFile)
    {
        $this->logFile = $logFile;
    }

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
