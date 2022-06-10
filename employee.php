<?php
require_once DIR . '/vendor/autoload.php';
?>
<?php
class Employee {
   public $name;
   public $lastname;
   public $salary;
   public function __construct($name,$lastname,$salary){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->salary = $salary;
  }
   public function vypis () {
        echo "Výpis: ".$this->name." ".$this->lastname." ".$this->salary;
    }
}
?>
