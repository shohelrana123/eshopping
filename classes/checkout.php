<?php

require_once 'db_connect.php';

class Checkout extends Db_Connect {

    //put your code here
    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }

    public function save_customer_info($data) {
        $sql = "INSERT INTO tbl_customer (first_name,last_name,email_address,password,address,phone_number) VALUES ('$data[first_name]','$data[last_name]','$data[email_address]','$data[password]','$data[address]','$data[phone_number]')";
        if (mysqli_query($this->link, $sql)) {
            $customer_id = mysqli_insert_id($this->link);
            $_SESSION['customer_name'] = $data['first_name'] . ' ' . $data['last_name'];
            $_SESSION['customer_id'] = $customer_id;
            header('Location: shipping.php');
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function select_customer_info_by_id($customer_id) {
        $sql = "SELECT * FROM tbl_customer WHERE customer_id = '$customer_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function customer_logout() {
        unset($_SESSION['customer_name']);
        unset($_SESSION['customer_id']);
        
        header('Location: index.php');
    }

}
