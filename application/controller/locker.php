<?php

class Locker extends Controller
{

    public function administrarlocker()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/locker/administrarlocker.php';
        require APP . 'view/_templates/footer.php';
    }

}
?>
