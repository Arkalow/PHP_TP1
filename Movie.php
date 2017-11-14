<?php
class Movie
{
    private $name = "Nom";
    private $description = "description";
    private $duration = 120;
    private $author = "author";
    
    public function getName()
    {
        return $this->name;    
    }
    public function setName($name = "")
    {
        $this->name = $name;    
    }
}

$movie = new Movie;

echo $movie->getName() . "<br />";
$movie->setName("Taxi 3");
echo $movie->getName() . "<br />";

