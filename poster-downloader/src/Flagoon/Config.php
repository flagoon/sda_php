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
    public const SHOTS_LOG_FILE = "./logs/postersLog.txt";
    public const SHOTS_SAVE_DIR = "./resources/shots/";
    public const SHOTS_URL = "https://cytaty.eu/img/sda/shots/";

    public const POSTER_LOG_FILE = "./logs/shotsLog.txt";
    public const POSTERS_SAVE_DIR = "./resources/posters/";
    public const POSTERS_URL = "https://cytaty.eu/img/sda/posters/";

    public const TITLES_ARRAY = [
        "Pirates of the Caribbean: Dead Men Tell No Talse",
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
