<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 28.01.18
 * Time: 13:53
 */

namespace Flagoon;

/**
 * This class is responsible for downloading files. You have to specify what
 * kind of type of file you are downloding: poster/shot.
 */
class FileDownloader
{
    /**
     * This variable holds the type of downloaded image. Decides where to put files,
     * and from where it download.
     *
     * @var string $imgType
     */
    private $imgType;

    public function __construct(string $imgType)
    {
        $this->imgType = $imgType;
    }

    /**
     * This function download the file and save it in correct folder.
     *
     * @param int $fileNumber
     */
    public function downloadJpg(int $fileNumber): void
    {
        $helper = new Helper();

        if ($this->imgType === 'poster') {
            $url = Config::POSTERS_URL;
            $dir = Config::POSTERS_SAVE_DIR;
        } else {
            $url = Config::SHOTS_URL;
            $dir = Config::SHOTS_SAVE_DIR;
        }

        $file = file_get_contents($url . $fileNumber . '.jpg');
        file_put_contents($dir
            . $helper->convertTitleToUrl(Config::TITLES_ARRAY[$fileNumber - 1])
            . '.jpg', $file);
    }
}
