<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 28.01.18
 * Time: 10:23
 */

namespace Flagoon;

/**
 * This class holds CONSTANTS for using it in the project. Normal
 * usage Config::NAME_OF_CONST.
 */
class Config
{
    /**
     * @var string for logs for shots.
     */
    public const SHOTS_LOG_FILE = "./logs/shotsLog.txt";
    /**
     * @var string for directory for shots.
     */
    public const SHOTS_SAVE_DIR = "./resources/shots/";
    /**
     * @var string location from where we get shots.
     */
    public const SHOTS_URL = "https://cytaty.eu/img/sda/shots/";
    /**
     * @var string for logs for posters.
     */
    public const POSTER_LOG_FILE = "./logs/shotsLog.txt";
    /**
     * @var string for directory for posters.
     */
    public const POSTERS_SAVE_DIR = "./resources/posters/";
    /**
     * @var string location from where we get posters.
     */
    public const POSTERS_URL = "https://cytaty.eu/img/sda/posters/";
    /**
     * @var string[] holds titles of movies.
     */
    public const TITLES_ARRAY = [
        "Pirates of the Caribbean: Dead Men Tell No Tales",
        "Rings",
        "Blade Runner 2049",
        "Thor",
        "Get Out",
        "Star Wars the Last Jedi",
        "Okja",
        "London has Fallen",
        "The Legend of Tarzan",
        "The Founder",
        "Captain America Civil War",
        "Spectre"
    ];
}
