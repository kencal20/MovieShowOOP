<?php
//class is a blupint for templates
//Class has products and methods
class Movies
{
    //properties / features of class & accessibility(private,public, protected)
    public $Movie_id = 'ABC';
    public $Title;
    public $Duration;

    public function __construct($Movie_id,$Title)
    {
     $this->Movie_id = $Movie_id;
     $this->$Title = $Title;
        
    }
    public function __destruct()
    {
        echo "End of Connection";
    }

    public function setMovieDetails($Title)
    {
        $this->Title =$Title;
    }

    public function getMovieDetails($Title)
    {
       return $this->Title;
    }
  
  
}
$m =new Movies('1234','Yeni');
echo $m->Movie_id.''.$m->Title ."<br/>";

//Calling functions in class
$m->setMovieDetails('Ken 123').'<br/>';
echo $m->getMovieDetails($Title).'<br/>';


?>