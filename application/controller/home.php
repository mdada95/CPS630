<?php

/**
 * Class Home
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index 
     */
    public function index()
    {
        ob_start();
	    // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
	    $buffer=ob_get_contents();
	    ob_end_clean();

	    $buffer=str_replace("%TITLE%","HomePage",$buffer);
	    echo $buffer;
    }

}
