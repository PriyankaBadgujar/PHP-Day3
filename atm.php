
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    abstract class Account{
        public $name;
        public $address;
        public $balance;
        function __construct($name,$address,$balance)
        {
            $this->name=$name;
            $this->adress=$address;
            $this->balance=$balance;
        }
       
        function printDetails(){
            echo "<h2>All Bank Account Details<br></h2>";
            echo "Name: ",$this->name."<br>";
            echo "Address: ",$this->adress."<br>";
            echo "Balance: ",$this->balance."<br>";
            
        }
        abstract  function deposit($amount);
        abstract function withdraw($amount);
        

        function getBalance()
         {
            return $this->balance;
        }
        }
        class Current extends Account{
           
            function deposit($amount){
                
                if($amount <= 0){
                    return;
                }
                  echo "<h2>Enter how much money you want to deposit= $amount<br></h2>";
                  $this->balance = $this->getBalance() + $amount;
                  echo "<h4>Total Balance: ",$this->balance,"<br></h4>";

            }
            function withdraw($amount){
                echo "<h2>Enter how much money you want to withdraw: ",$amount,"<br></h2>";
                if($this->balance>$amount)
                {
               $this->balance = $this->getBalance() - $amount;
             echo "<h4>Available balance:$this->balance</h4>";
                }
                else{
                    echo "Insufficient balance";
                }
               
            }
            
           
        }

        class Saving extends Account{
           
            function deposit($amount){
             if($amount <= 0){
                    return;
                }
                  echo "<h2>Enter how much money you want to deposit= $amount<br></h2>";
                  $this->balance = $this->getBalance() + ($amount);
                  echo "<h4>Total Balance: ",$this->balance,"<br></h4>";

            }
            function withdraw($amount){
                $intrest=5/100;
                echo "<h2>Enter how much money you want to withdraw: ",$amount,"<br></h2>";
                if($amount<100){
                    echo "<h4>withdraw amount should greater than 100 rs<br></h4>";
                }
               else if($this->balance>$amount)
                {
                      $this->balance = $this->getBalance() - ($amount);
                      echo "<h4>Available balance: $this->balance</h4>";
                }
                else{
                    echo "Insufficient balance";
                }
               
            }
            
           
        }
         
         
       
        $curent=new current("Priyanka","Pune",40000.508);
        $curent->printDetails();
        $curent->deposit(200);
        $curent->withdraw(5000);

        
        $saving=new Saving("Ajay","Mumbai",6000.567);
        $saving->printDetails();
        $saving->deposit(500);
        $saving->withdraw(100);
   
   
   ?>
</body>
</html>
