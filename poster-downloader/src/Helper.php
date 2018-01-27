<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 27.01.18
 * Time: 10:02
 */
declare(strict_types=1);

class Helper
{
    public function clearImgFolder(string $folder):void
    {
        $files = glob('./src/' . $folder . '/*');
        foreach($files as $file) {
            if(is_file($file)) {
                unlink($file);
            };
        }
    }

    public function removeSpaces(string $title): string
    {
        return mb_strtolower(preg_replace(['([^\w\s])m', '([\s])m'], ['', '-'], $title));
    }

}