
<?php
include 'class.movie.php';
//inherit movie class 
class Show extends Movies
{
    public $show_Id = "ASDC";
    public $venue;
    public $dateTime;

    public function display_shows()
    {
        return $this->Title . '' . $this->show_Id;
    }

    public function Movie_showDetails($id,$venue,$dt)
    {
        $this->show_Id =$id;
        $this->venue=$venue;
        $this->dateTime=$dt;

        return '<br/>'.$this->getMovieDetails().' '.$this->show_Id.' '.$this->venue.' '.$this->$dt;
    }
}
$sh = new Show('123', 'DBC');
echo $sh->display_shows();
echo $sh->Movie_showDetails(001,'GTA','20-10-2012').'<br/>';


?>