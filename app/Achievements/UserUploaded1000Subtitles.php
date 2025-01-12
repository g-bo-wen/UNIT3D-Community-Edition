<?php

namespace App\Achievements;

use Gstt\Achievements\Achievement;

class UserUploaded1000Subtitles extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'UserUploaded1000Subtitles';

    /*
     * A small description for the achievement
     */
    public $description = 'You have made 1000 subtitle uploads!';

    /*
    * The amount of "points" this user need to obtain in order to complete this achievement
    */
    public $points = 1000;
}
