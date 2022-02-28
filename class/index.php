

<?php
class Person{
    public $name;
    public $age;
    public $height; 

  //create method
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getHeight(){
        return $this->height;
    }


    }
  //create object and return the value
    $person1 = new Person();
    $person1->setName("John");
    $person1->setAge(20);
    $person1->setHeight(5.5);
 
  
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $fname = $_POST['fname'];
            $number = $_POST['number'];
          
            if($fname == $person1->getName()&& $number == $person1->getAge()){
                echo "Height: ".$person1->getHeight()."<br>";
  
            }
            else{
                echo "not match";
            }
        }
    
    

?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="index.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <label for="lname"></label><br>
  <input type="text" id="" name="number"><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>







