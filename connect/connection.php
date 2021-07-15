<?php

class Database{  
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "myweb";

    function connect(){
        $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        return $connection;
    }

    function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if (!$result){
            return false;
        }else{
            $data = false;
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function save($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if (!$result){
            return false;
        }else{
            return true;
        }
    }
}

// $DB = new Database();

// $query = "select * from users";
// $data = $DB->read($query);

// echo "<pre>";
// print_r($data);
// echo "</pre>";


//  -------->>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<--------------  \\
// $host = "localhost";
// $username = "root";
// $password = "";
// $db = "myweb";

// $connection = mysqli_connect($host, $username, $password, $db);

// $first_name = "Waseem";
// $last_name = "Akhter";

// ---->>>> for write
// $query = "insert into users (first_name, last_name) values ('$first_name', '$last_name')";
// $DB = new Database();
// $save = $DB->save($query);
// echo $save;



// mysqli_query($connection, $query);

// echo mysqli_error($connection);

// ---->> For read
// $query = "select * from users";

// $result = mysqli_query($connection, $query);

// while($row = mysqli_fetch_assoc($result)){
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
// }

?>