<?php

class usersDonateDB {
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

    function readDonate() {
        $token = $_COOKIE['token'];
        $sql = "SELECT * FROM user_table";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $target = $row["email"];
              $hased = hash('sha256', $target);
              if($token === $hased) {
                $user = $target;
                break;
              }
            }
        }

        $sql = "SELECT * FROM `user_donation` where email='$user'";

        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["no_transaksi"] . "</td><td>" . "Rp" . $row["donate_amount"] . "</td><td>" . $row["pay_method"] . "</td></tr>";
            }
        }
    }

    function tambahData($jumlah, $pay_method) {

        if($jumlah === '') {
            echo "<script>
                    alert('Donasi tidak boleh kosong!');
                </script>";
        } else {

            $token = $_COOKIE['token'];
            $sql = "SELECT * FROM user_table";
            $result = $this->conn->query($sql);
    
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $target = $row["email"];
                  $hased = hash('sha256', $target);
                  if($token === $hased) {
                    $user = $target;
                    break;
                  }
                }
              }
    
            $sql = "INSERT INTO user_donation (no_transaksi, email, donate_amount, pay_method) VALUES ('', '$user', '$jumlah', '$pay_method')";
    
            if ($this->conn->query($sql) === TRUE) {
                echo "<script>
                    alert('Berhasil donasi!');
                </script>";
            } else {
                echo "<script>
                    alert('$this->conn->error');
                </script>";
            }
        }
    }
}

$dbData = new usersDonateDB();
?>