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
    public function setMovieDetails($Title)
    {
        $this->Title =$Title;
    }

    public function getMovieDetails()
    {
       return $this->Title;
    }

    //Static properties and methods
    public static $voteAge = 18;

    public static function setVoteAge($newAge)
    {
        SELF::$voteAge =$newAge;
    }
    //pass static function static to non static function
    public  function getVoteAge()
    {
        return SELF::$voteAge;
    }
    
    public function __destruct()
    {
        echo "End of Connection";
    }


  
  
}
$m =new Movies('1234','Yeni');
echo $m->Movie_id.''.$m->Title ."<br/>";

//Calling functions in class
$m->setMovieDetails('Ken 123').'<br/>';
echo $m->getMovieDetails().'<br/>';

//Accessing static methods and properties
echo Movies::$voteAge;
Movies::setVoteAge(20);


echo Movies::$voteAge(20);
echo Movies::$VoteAge();
$m->getVoteAge();