<?php
require_once "database.php";
class user_login extends DatabaseLogin {
    public function login($username, $password){
        $username = str_replace("'","''",$username);
        $sql = "SELECT * FROM `users` where `username` = '$username' and status = 1";    

        if($result = $this->conn->query($sql)){
            if ($result){
                $return_arr = array();
                while($row = $result->fetch_assoc()){
                    $passwordHash = $row['password'];
                    if (password_verify($password, $passwordHash)){
                        $return_arr[] = array("userid" => $row['id'],
                                    "username" => $row['username'],
                                    "fullname" => $row['fullname'],
                                    "email" => $row['email'],
                                    "number" => $row['number'],
                                );
                    }
                }
                return $return_arr;
                exit;
            }
            
        } else {
            die("Error retrieving all users: " . $this->conn->error);
        }
    }

    public function register($fullname, $password, $username, $email,  $number){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users`(`fullname`, `email`, `number`, `username`, `password`) 
                VALUES ('$fullname','$email','$number','$username','$password')";

        // EXECUTE THE QUERY
        if($this->conn->query($sql)){
            // REDIRECT
            $last_id = $this->conn->insert_id; 
            return $last_id;   // go to index.php of views folder
            exit;                           // same as die()
        } else {
            die("Error creating user: " . $this->conn->error);
            return $this->conn->error;
        }
    }

    public function activateaccount($id){
        $user_name = str_replace("'","''",$user_name);
        $sql = "UPDATE users set status = 1 WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return true;
            exit;
        } 
    }

    public function checkIfExisting($user_name){
        $user_name = str_replace("'","''",$user_name);
        $sql = "SELECT * FROM users WHERE username = '$user_name'";

        if($result = $this->conn->query($sql)){
            // expecting one row only
            $row = $result->num_rows;
            return $row > 0;
            exit;
        }
        
    }
    public function changePassword($email, $password){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users set password = '$password' WHERE email = '$email'";

        if($result = $this->conn->query($sql)){
            return true;
            exit;
        }
        
    }

    public function getacount(){
        $return_arr["userid"] = "";
        $return_arr["username"] = "";
        $return_arr["fullname"] = "";
        $return_arr["email"] = "";
        $return_arr["number"] = "";
        
        if (!isset($_SESSION)){ session_start(); }
        $uid = isset($_SESSION["acount_user_id"]) ? $_SESSION["acount_user_id"] : 0;
        $sql = "SELECT * FROM `users` where `id` = $uid";    
        
        if($result = $this->conn->query($sql)){
            while($row = $result->fetch_assoc()){
                $return_arr["userid"] = $row['id'];
                $return_arr["username"] = $row['username'];
                $return_arr["fullname"] = $row['fullname'];
                $return_arr["email"] = $row['email'];
                $return_arr["number"] = $row['number'];
            }
            return $return_arr;
            exit;           
        } else {
            die("Error retrieving all users: " . $this->conn->error);
        }   
    }
}

?>