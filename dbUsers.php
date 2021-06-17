<?php

class usersDB {
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "greeny";
    public $conn;
    
    function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    
        if ($this->conn -> connect_error) {
            die("Connection failed: " . $this->conn -> connect_error);
        }
    }
    
    function readUser() {
        $sql = "SELECT * FROM user_table";
        $result = $this->conn->query($sql);
    
        return $result;
    }

    function daftarUser($email, $passwd) {
        $email = strtolower(stripslashes($email));
        $passwd = $this->conn -> real_escape_string($passwd);

        if($passwd === '' or $email === '') {
            echo "<script>
                    alert('email atau password tidak boleh kosong!');
                </script>";
        } else {
            $passwd = password_hash($passwd, PASSWORD_DEFAULT);
            $sql = "SELECT email FROM user_table WHERE email = '$email'";
            $result = $this->conn->query($sql);
            
            if($result->num_rows > 0) {
                echo "<script>
                        alert('email sudah terdaftar!');
                    </script>";
                echo "<script> setTimeout(function() { window.open('register.php','_self') }, 100) </script>";
            } else {
                $sql = "INSERT INTO user_table (email, password)
                VALUES ('$email', '$passwd')";
        
                if ($this->conn->query($sql) === TRUE) {
                    echo "<script>
                        alert('Berhasil terdaftar!');
                    </script>";
                } else {
                    echo "<script>
                        alert('$this->conn->error');
                    </script>";
                }
            }
        }
    }
    
    function loginUser($email, $password, $error = false) {

        if(isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];
            
            $sql = "SELECT eamil FROM user_tabele WHERE id = $email";
            $result = $this->conn->query($sql);

            $row = $result->fetch_assoc();
        
            if($token === hash('sha256', $row['email'])) {
                $_SESSION['login'] = true;
            }
        }
        
        if (isset($_SESSION["login"])) {
            header("Location: home.php");
            exit;
        }
        
        if(isset($_POST["login"])) {
        
            $email = $_POST["email"];
            $passwd = $_POST["passwd"];
            
            $sql = "SELECT * FROM user_table WHERE email = '$email'";
            $result = $this->conn->query($sql);
        
            //cek email
            if($result->num_rows > 0) {
        
                //cek password
                $row = $result->fetch_assoc();
                if (password_verify($password, $row["password"])) {
                    //set session
                    $_SESSION["login"] = true;
        
                    //buat cookies
                    setcookie('token', hash('sha256', $row['email']), time()+(60*8000));

                    $error = false;
                    
                    header("Location: home.php");
                    exit;
                }
            }
        
            $error = true;
            if($error === true) {
                echo "<script>
                      alert('email atau password salah!');
                    </script>";
              }
        }
    }
}

$db = new usersDB();
#$db->insertData('', 'username', 'password')

?>