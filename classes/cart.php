<?php

require_once 'db_connect.php';

class Cart extends Db_Connect {

    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }

    public function add_to_cart($data) {
        $product_id = $data['product_id'];
        $sql = "SELECT product_name, product_price, product_image FROM tbl_product WHERE product_id = '$product_id' ";
        $query_result = mysqli_query($this->link, $sql);
        $product_info = mysqli_fetch_assoc($query_result);
        $session_id = session_id();
        $sql = "INSERT INTO tbl_temp_cart (session_id, product_id, product_name, product_price, product_quantity, product_image) VALUES ('$session_id', '$product_id', '$product_info[product_name]', '$product_info[product_price]','$data[product_quantity]', '$product_info[product_image]')";
        mysqli_query($this->link, $sql);
        header('Location: cart.php');
    }

    public function select_cart_product_by_session_id() {
        $session_id = session_id();
        $sql = "SELECT * FROM tbl_temp_cart WHERE session_id = '$session_id' ";
        if (mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

    public function update_cart_product($data) {
        $session_id = session_id();
        if ($data['product_quantity'] >= 1) {
            $sql = "UPDATE tbl_temp_cart SET product_quantity = '$data[product_quantity]' WHERE session_id = '$session_id' AND product_id = '$data[product_id]' ";
            if (mysqli_query($this->link, $sql)) {
                $message = "Product info update successfully";
                return $message;
            } else {
                die('Query problem' . mysqli_error($this->link));
            }
        } else {
            $message = 'Somssa ki. Quantity negative dissen kare.....';
            return $message;
        }
    }

    public function delete_cart_product($product_id) {
        $session_id = session_id();
        $sql = "DELETE FROM tbl_temp_cart WHERE session_id = '$session_id' AND product_id = '$product_id' ";
        if (mysqli_query($this->link, $sql)) {
            $message = "Product info delete successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->link));
        }
    }

}
