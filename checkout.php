
<!DOCTYPE HTML>
<html lang="en">
    
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Culinary Cove</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!-- lodaer  -->
        <div class="loader-wrap">
            <div class="loader-item">
                <div class="cd-loader-layer" data-frame="25">
                    <div class="loader-layer"></div>
                </div>
                <span class="loader"></span>
            </div>
        </div>
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">
            <!-- header  -->
            <?php include 'includes/header.php'; ?>
            <!--header end -->	
            <!-- wrapper  -->	
            <div id="wrapper">
                <!-- content  -->	
                <div class="content">
                    <!--  section  -->  
                    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/7.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h4>Order food with home delivery</h4>
                                <h2>Checkout Process</h2>
                                <div class="dots-separator fl-wrap"><span></span></div>
                            </div>
                        </div>
                        <div class="hero-section-scroll">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                        </div>
                        <div class="brush-dec"></div>
                    </section>
                    <!--  section  end-->  
                    <!--  section  -->   
                    <section class="hidden-section">
                        <div class="container">
                            <!-- CHECKOUT TABLE -->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="check-out_wrap fl-wrap">
                                        <h4 class="cart-title">Your Information</h4>
                                        <?php
                                            $customerId = $_SESSION['SESSION_ID'];
                                            $sql = "SELECT * FROM customers WHERE customer_id='$customerId';";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {

                                        ?>
                                        <form  class="custom-form" action="handle-checkout.php" method="post">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" name="name"   placeholder="Your Name *" value="<?php echo $row['name'];?>" disabled/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  name="email"   placeholder="Email Address *" value="<?php echo $row['username']; ?>" disabled/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  name="phone"  placeholder="Phone *" value="" required/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  name="address"   placeholder="Address  *" value="" required/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <!-- <input type="text"  name="country"   placeholder="Country  *" value=""/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  name="code"   placeholder="Postal code*" value=""/>
                                                    </div> -->
                                                    <!-- <div class="col-sm-12">
                                                        <h4 class="cart-title">Payment method</h4>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" placeholder="" value="Cardholder's Name"/>                                                  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" placeholder="Card Number" value=""/> 
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" placeholder="MM" value=""/>                                                  
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" placeholder="YY" value=""/>                                                  
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <input type="password" placeholder="***" value=""/> 
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p style="padding-top:20px; text-align: left; font-size: 10px">*Three digits number on the back of your card</p>
                                                    </div> -->
                                                </div>
                                                <!-- <textarea name="comments"  id="comments" cols="30" rows="3" placeholder="Addtional Notes"></textarea> -->
                                                <div class="clearfix"></div>
                                                <button type="submit" class="btn color-bg">Confirm Order<i class="fal fa-long-arrow-right"></i></button>
                                            </fieldset>
                                        </form>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- CART TOTALS  -->
                                    <?php 
        
                                        $customerId = $_SESSION['SESSION_ID'];


                                        $sql = "SELECT orders.order_id, orders.quantity, products.product_name, products.product_price, products.image
                                        FROM orders
                                        INNER JOIN products ON orders.product_id=products.product_id
                                        WHERE status='pending' AND customer_id='$customerId';";
                                        $result = mysqli_query($conn, $sql);
                                        $totalAmount = 0;
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $totalAmount = $totalAmount + $row['quantity']*($row['product_price'] );

                                            }
                                        }

                                    ?>

                                    <div class="cart-totals dark-bg fl-wrap">
                                        <h3>Cart totals</h3>
                                        <table class="total-table">
                                            <tbody>
                                                <tr>
                                                    <th>Cart Subtotal:</th>
                                                    <td><?php echo $totalAmount?></td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping Total:</th>
                                                    <td>Rs. 200</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td><?php echo $totalAmount + 200;?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- <button type="submit" class="cart-totals_btn color-bg"><a href="process-order.php" style="text-decoration.php">Proceed to Checkout</a></button> -->
                                    </div>
                                    <!-- /CART TOTALS  -->                              
                                </div>
                            </div>
                            <!-- /CHECKOUT TABLE -->
                        </div>
                        <div class="section-bg">
                            <div class="bg"  data-bg="images/bg/dec/section-bg.png"></div>
                        </div>
                    </section>
                    <!--  section end  -->  
                    <div class="brush-dec2 brush-dec_bottom"></div>
                </div>
                <!-- content end  -->
                <!-- footer -->
            <div class="height-emulator fl-wrap"></div>
                <?php include 'includes/footer.php' ?>
                <!-- footer end-->                                
            </div>
            <!-- wrapper end -->
            <!-- reservation-modal-wrap-->          
            <div class="reservation-modal-wrap">
                <div class="reserv-overlay crm">
                    <div class="cd-reserv-overlay-layer" data-frame="25">
                        <div class="reserv-overlay-layer"></div>
                    </div>
                </div>
                <div class="reservation-modal-container bot-element">
                    <div class="reservation-modal-item fl-wrap">
                        <div class="close-reservation-modal crm"><i class="fal fa-times"></i></div>
                        <div class="reservation-bg"></div>
                        <div class="section-title">
                            <h4>Don't forget to book a table</h4>
                            <h2>Table Reservations</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="reservation-wrap">
                            <div id="reserv-message"></div>
                            <form  class="custom-form" action="https://restabook.kwst.net/light/php/reservation.php" name="reservationform" id="reservationform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="email" id="email" placeholder="Email Address *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="phone" id="phone" placeholder="Phone *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="fl-wrap">
                                                <select name="numperson" id="persons" data-placeholder="Persons" class="chosen-select no-search-select">
                                                    <option data-display="Persons">Any</option>
                                                    <option value="1">1 Person</option>
                                                    <option value="2">2 People</option>
                                                    <option value="3">3 People</option>
                                                    <option value="4">4 People</option>
                                                    <option value="5">5 People</option>
                                                    <option value="Banquet">Banquet</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-6">
                                            <div class="date-container2 fl-wrap">
                                                <input type="text" placeholder="Date" id="res_date"     name="resdate"   value=""/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="fl-wrap">
                                                <select name="restime" id="resrv-time" data-placeholder="Time" class="chosen-select no-search-select">
                                                    <option data-display="Time">Any</option>
                                                    <option value="10:00am">10:00 am</option>
                                                    <option value="11:00am">11:00 am</option>
                                                    <option value="12:00pm">12:00 pm</option>
                                                    <option value="1:00pm">1:00 pm</option>
                                                    <option value="2:00pm">2:00 pm</option>
                                                    <option value="3:00pm">3:00 pm</option>
                                                    <option value="4:00pm">4:00 pm</option>
                                                    <option value="5:00pm">5:00 pm</option>
                                                    <option value="6:00pm">6:00 pm</option>
                                                    <option value="7:00pm">7:00 pm</option>
                                                    <option value="8:00pm">8:00 pm</option>
                                                    <option value="9:00pm">9:00 pm</option>
                                                    <option value="10:00pm">10:00 pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea name="comments"    cols="30" rows="3" placeholder="Your Message:"></textarea>
                                    <div class="clearfix"></div>
                                    <button class="btn color-bg" id="reservation-submit">Reserve Table  <i class="fal fa-long-arrow-right"></i></button>
                                </fieldset>
                            </form>
                        </div>
                        <!-- reservation-wrap end-->
                    </div>
                </div>
            </div>
            <!-- reservation-modal-wrap end--> 
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->                                                    
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
    </body>

</html>