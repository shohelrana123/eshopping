<?php
$query_result = $obj_app->select_all_published_category_info();
?>


<div class="footer-w3l">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h4>About </h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <div class="social-icon">
                    <a href="https://www.facebook.com/"><i class="icon"></i></a>
                    <a href="https://twitter.com/"><i class="icon1"></i></a>
                    <a href="https://plus.google.com/"><i class="icon2"></i></a>
                    <a href="https://www.linkedin.com/"><i class="icon3"></i></a>
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>My Account</h4>
                <ul>
                    <li><a href="checkout.php">Checkout</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php"> Create Account </a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Information</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php while ($category_info = mysqli_fetch_assoc($query_result)) { ?>
                        <li class="dropdown"><a href="category.php?id=<?php echo $category_info['category_id']; ?>"><?php echo $category_info['category_name']; ?></a></li>
                    <?php } ?>
                    <li><a href="mail.php">Mail Us</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid foot">
                <h4>Contacts</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://www.google.com/maps/place/Green+Rd,+Dhaka+1215,+Bangladesh/@23.7577447,90.3878099,17z/data=!4m13!1m7!3m6!1s0x3755b8a4e835af69:0xde01112b89413b85!2sGreen+Rd,+Dhaka+1215,+Bangladesh!3b1!8m2!3d23.7577447!4d90.3899986!3m4!1s0x3755b8a4e835af69:0xde01112b89413b85!8m2!3d23.7577447!4d90.3899986?hl=en-US">Green Road,Framgate,Dhaka</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">++8801744938741</a></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:shohel.rana2661@gmail.com">shohel.rana2661@gmail.com</a></li>

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!---footer--->
<!--copy-->
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>&copy; 2016 New Shop . All rights reserved | Design by <a href="http://w3layouts.com">Md.Shohel Rana</a></p>
        </div>
        <div class="copy-right">
            <img src="assets/front_end/images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--copy-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="assets/front_end/images/p5.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="assets/front_end/images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="assets/front_end/images/p7.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="assets/front_end/images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="assets/front_end/images/p10.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="assets/front_end/images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="assets/front_end/images/p12.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="assets/front_end/images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

