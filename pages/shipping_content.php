<?php
    if(isset($_POST['btn'])) {
        $obj_checkout->save_customer_info($_POST);
    }
    
    $customer_id = $_SESSION['customer_id'];
    $query_result = $obj_checkout->select_customer_info_by_id($customer_id);
    $customer_info = mysqli_fetch_assoc($query_result);
    
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center text-success">Hello <?php echo $_SESSION['customer_name']; ?>. You have to give us product shipping information to  complete your check out process. If your billing address & shipping address are same then just press on Save Shipping Info button Thanks !.</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center text-success">Your shipping information here</h3>
                <hr/>
                <form class="form-horizontal" action="" method="post"> 
                    <div class="form-group">
                        <label class="control-label col-lg-3">Full Name</label>
                        <div class="col-lg-9">
                            <input type="text" name="full_name" value="<?php echo $customer_info['first_name'].' '.$customer_info['last_name']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Email Address</label>
                        <div class="col-lg-9">
                            <input type="email" name="email_address" value="<?php echo $customer_info['email_address']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Address</label>
                        <div class="col-lg-9">
                            <textarea name="address" class="form-control" rows="8"><?php echo $customer_info['address']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3">Phone Number</label>
                        <div class="col-lg-9">
                            <input type="number" name="phone_number" value="<?php echo $customer_info['phone_number']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Save Shipping Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

