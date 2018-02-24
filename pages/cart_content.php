<?php
$message = '';
require_once 'classes/cart.php';
$obj_cart = new Cart();

if (isset($_POST['btn'])) {
    $message = $obj_cart->update_cart_product($_POST);
}

if(isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $product_id = $_GET['id'];
       $message = $obj_cart->delete_cart_product($product_id);
    }
}

$query_result = $obj_cart->select_cart_product_by_session_id();
?>
<hr/>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-info">My Shopping Cart</h3>
        <h3 class="text-center text-info"><?php echo $message; ?></h3>
    </div>
</div>

<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div>
                    <table class="table table-hover">
                        <tr style="border: 1px solid">
                            <th>SL NO</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; $sum = 0;
                        while ($cart_product_info = mysqli_fetch_assoc($query_result)) { ?>
                            <tr style="border: 1px solid">
                                <td style="border: 1px solid"><?php echo $i; ?></td>
                                <td style="border: 1px solid"><?php echo $cart_product_info['product_name']; ?></td>
                                <td style="border: 1px solid"><img src="assets/<?php echo $cart_product_info['product_image']; ?>" height="100" width="100"></td>
                                <td style="border: 1px solid"><?php echo $cart_product_info['product_price']; ?></td>
                                <td style="border: 1px solid">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="number" name="product_quantity" value="<?php echo $cart_product_info['product_quantity']; ?>" >
                                            <input type="hidden" name="product_id" value="<?php echo $cart_product_info['product_id']; ?>" >
                                            <input type="submit" name="btn" value="Update">
                                        </div>
                                    </form>
                                </td>
                                <td style="border: 1px solid"><?php
                                    $item_total = $cart_product_info['product_price'] * $cart_product_info['product_quantity'];
                                    echo 'BDT' . '  ' . $item_total;
                                    ?></td>
                                <td style="border: 1px solid">
                                    <a href="?status=delete&&id=<?php echo $cart_product_info['product_id']; ?>">Delete</a>
                                </td>
                            </tr>
                         <?php $i++;  $sum = $sum+$item_total; } ?>
                    </table>
                </div>
                <div>
                    <table class="table table-bordered pull-right" style="width: 40%;">
                        <tr>
                            <td>Sub Total</td>
                            <td> BDT 
                                <?php echo $sum;?>
                            </td>
                        </tr>
                        <tr>
                            <td>Vat Total</td>
                            <td>BDT 
                                <?php 
                                    $vat = ($sum*15)/100;
                                    echo $vat;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Grand Total</td>
                            <td>BDT 
                                <?php 
                                    $grand_total= $sum + $vat;
                                    echo $grand_total;
                                ?>
                            </td>
                        </tr>
                    </table>
                </div><hr><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <div>
                    <?php if(isset($_SESSION['customer_id'])) { ?>
                    <a href="shipping.php" class="btn btn-primary pull-right">Checkout</a>
                    <?php } else { ?>
                     <a href="checkout.php" class="btn btn-primary pull-right">Checkout</a>
                    <?php } ?>
                    <a href="index.php" class="btn btn-primary">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>