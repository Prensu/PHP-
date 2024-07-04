<?php 
class person{
    public $name;
    public $age;
    
    //construtor method to initialize properties
    public function __construct($name,$age)
    {
        $this ->name =$name;
        $this ->age =$age;
    }
    
    public function displayinfo()
    {
        echo "Name:".$this-> name."\n";
        echo "Age:".$this-> age ."\n";
        
    }
}

//create an object of Person Class
$person1= new person("prensu dangol",30);
echo"Person1 display information"."\n";
$person1 -> displayinfo();

$person2=new person("Khokana Lalitpur",45);
echo"Person2 display information"."\n";
$person2 -> displayinfo();

?>