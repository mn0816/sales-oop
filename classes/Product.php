<?php 
include 'connection.php';
class User extends Connection {

    public function register($request){
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = password_hash($request['password'],PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name,last_name,username,password) VALUES ('$first_name','$last_name','$username','$password')";

        if($this->conn->query($sql)){
            header('location: ../views/login.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }
    public function login($request){
        $username = $request['username'];
        $password = $request['password'];

        $sql =  "SELECT * FROM users WHERE username = '$username'";

        if($result = $this->conn->query($sql)){
            if($result->num_rows  == 1){
                // something
                    $user = $result->fetch_assoc();

                    if(password_verify($password,$user['password'])){
                        session_start();

                        $_SESSION['username'] = $user['username'];
                        $_SESSION['id'] = $user['id'];

                        header('location:../views/dashboard.php');
                        exit;
                    }else{
                        die("ERROR: password dont match");
                    }
            }else{
                die("ERROR: username dont match");
            }
        }
    }


public function getAllproducts($id){
    $sql = "SELECT id, product_name, price, quantity FROM products";

    if($result = $this->conn->query($sql)){
        return $result;
    }else{
        die('error of retrieving all users' .$this->conn->error);
    }
}



public function delete($id){
    $sql = "DELETE FROM users WHERE id = $id";
    if($this->conn->query($sql)){
        session_destroy();
        header('location: ../views/login.php');
        exit;

    }else{
        die("ERROR: ". $this->conn->error);
    }

}
}
