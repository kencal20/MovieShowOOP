
<?php

//inherit movie class 
class Show extends Movies
{

    public $show_Id;
    public $venue;
    public $dateTime;

    public function display_shows()
    {
        return $this->Title.''.$this->show_Id;
    }

}


?>