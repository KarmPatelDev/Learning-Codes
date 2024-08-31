<?php

// wakeup invoked with unserialize method
// it is use for database connection

class abc{
    public $name = "Karm Patel";
    public $course = "PHP";
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect();
    }

    public function __sleep(){
        mysqli_close($conn);
        return array("name");
    }

    public function __wakeup(){
       $this->conn = mysqli_connect();
       echo "This is wakeup Method";
    }
}

$test = new abc();
$test_arr = serialize($test);
$test_unarr = unserialize($test_arr);

echo "<pre>";
print_r($test_unarr);
echo "</pre>";

?>