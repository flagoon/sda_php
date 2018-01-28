<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 10:02
 */
declare(strict_types=1);
namespace Flagoon;

/**
 * This class holds various methods to use in the projects.
 */
class Helper
{
    /**
     * Function clearing folders from files.
     * @param string $folder path to folder to delete.
     */
    public function clearFolder(string $folder):void
    {
        $files = glob($folder . "/*");
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            };
        }
    }

    /**
     * This function get's a string and remove all spaces/forbidden characters, and change all fonts to lower.
     * @param string $title
     * @return string that is sanitize, without spaces and forbiden characters, also with all fonts to lower.
     */
    public function sanitizeTitles(string $title): string
    {
        return mb_strtolower(preg_replace(['([^\w\s])m', '([\s])m'], ['', '-'], $title));
    }
}
