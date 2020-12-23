<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class vehicle{
        protected $model;
        protected $brand;
        protected $price;
        function __construct($model,$brand,$price)
        {
            $this->model=$model;
            $this->brand=$brand;
            $this->price=$price;
          
        }
        function printDetails()
        {
            echo "Vehicle Detail <br>";
            echo $this->model."<br>";
            echo $this->brand."<br>";
            echo $this->price."<br>";
            
        }
           abstract function getMilage();
           abstract function showAccesories();
    }
    class Bike extends vehicle
    {
        public $accessories;
       public $colour;
       function __construct($model,$brand,$price,$accessories,$color)
    {
       parent::__construct($model,$brand,$price);
        $this->accessories=$accessories;
        $this->colour=$color;
    }
    
function getMilage()
    {
       echo "Average: 60Km/hr"."<br>";
    }
    function showAccesories()
    {
        foreach($this->accessories as $val)
        {
            echo "accessories:" ,$val,"<br>";
          
        }

    }
    }
class Car extends vehicle
    {
        
       public $type;
       function __construct($model,$brand,$price,$accessories,$type)
    {
       parent::__construct($model,$brand,$price);
        $this->accessories=$accessories;
        $this->type=$type;
     
    }

    function getMilage()
    
    {
      echo "Average:70km/hr"."<br>";
    }
    function showAccesories()
    {
        foreach($this->accessories as $val)
        {
            echo "accessories:" ,$val,"<br>";
          
        }

    }
}
switch($vehicle){
    case "Bike":
$b=new Bike("A","Pulser",60000,array("Helmate","Gloves"),"black");
$b->printDetails();
$b->showAccesories();
$b->getMilage();
break;

case "Car":
$c=new Car("B","Honda",500000,array("Seat", "Covers","Foot Mats"),"AC");
$c->printDetails();
$c->showAccesories();
 $c->getMilage();
 break;
 default:
 echo "Please select vehicle";
    
}   
    
    ?>
</body>
</html>