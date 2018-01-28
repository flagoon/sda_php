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
     *
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
     * This function gets a string and removes all spaces/forbidden characters, and changes all fonts to lower.
     *
     * @param string $title title of the movie to change to URL.
     *
     * @return string
     */
    public function convertTitleToUrl(string $title): string
    {
        return mb_strtolower(preg_replace(['([^\w\s])m', '([\s])m'], ['', '-'], $title));
    }


    /**
     * This function extracts file names from HTML. It returns regex groups in second array.
     *
     * @param string $html html text we get from website.
     *
     * @return array
     */
    public function extractFileNamesFromHTML(string $html): array
    {
        $regexArray = [];
        preg_match_all('/href="([0-9]+)\.jpg"/', $html, $regexArray);
        return $regexArray[1];
    }
}
