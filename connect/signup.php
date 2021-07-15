<?php

class Signup{

    private $error = "";

    public function evaluate($data){
        foreach($data as $key => $value){
            if(empty($value)){
                $this->error = "fill the empty spaces! <br>";
            }

            if($key == "email"){
                if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)){
                    $this->error = $this->error . "invalid email address! <br>";
                }
            }

            if($key == "first_name"){
                if(is_numeric($value)){
                    $this->error = $this->error . "first name can't be a number! <br>";
                }
                
                if(strstr($value, " ")){
                    $this->error = $this->error . "first name can't have space! <br>";
                }
            }

            if($key == "last_name"){
                if(is_numeric($value)){
                    $this->error = $this->error . "last name can't be a number! <br>";
                }

                if(strstr($value, " ")){
                    $this->error = $this->error . "last name can't have space! <br>";
                }
            }

            if($key == "phone"){
                if(!is_numeric($value)){
                    $this->error = $this->error . "phone can't be a alphabates! <br>";
                }
            }

            // if($key == "password" && $key == "password2"){
            //         if("password" === "password2"){
            //             $this->error = $this->error . "Password not matched! <br>";
            //     }
            // }
        }
        if($this->error == ""){
            // no error
            $this->create_user($data);
        }else{
            return $this->error;
        }
    }

    public function create_user($data){
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
        $email = $data['email'];
        $phone = $data['phone'];
        $password = $data['password'];
        $userid = $this->create_userid();
        $url_address = strtolower($first_name) . '.' . strtolower($last_name) . "." . $phone;
        $query = "insert into users (userid, first_name, last_name, email, phone, password, url_address )
                  values ('$userid', '$first_name', '$last_name', '$email', '$phone', '$password', '$url_address')";
        // echo $query;
        $DB = new Database();
        $DB->save($query);
    }
    
    private function create_userid(){
        $length = rand(4,19);
        $number = "";
        for($i = 0; $i < $length; $i++){
            $new_rand = rand(0,9);
            $number = $number . $new_rand;
        }
        return $number;
    }

}
            
?>