<?php

/**
 * Class Home
 */
class Maintain extends Controller
{
    /**
     * PAGE: artworks
     * This method handles what happens when you move to http://yourproject/home/artworks
     */
    public function artworks()
    {
        ob_start();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/maintain/artworks_page.php';
        require APP . 'view/_templates/footer_secondary.php';
        $buffer=ob_get_contents();
        ob_end_clean();

        $buffer=str_replace("%TITLE%","Maintain Artworks",$buffer);
        echo $buffer;
    }

    /**
     * PAGE: artists
     * This method handles what happens when you move to http://yourproject/home/artists
     */
    public function artists()
    {
        ob_start();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/maintain/artists_page.php';
        require APP . 'view/_templates/footer_secondary.php';
        $buffer=ob_get_contents();
        ob_end_clean();

        $buffer=str_replace("%TITLE%","Maintain Artists",$buffer);
        echo $buffer;
    }

    public function museums()
    {
        ob_start();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/maintain/museums_page.php';
        require APP . 'view/_templates/footer_secondary.php';
        $buffer=ob_get_contents();
        ob_end_clean();

        $buffer=str_replace("%TITLE%","Maintain Museums",$buffer);
        echo $buffer;
    }
}
