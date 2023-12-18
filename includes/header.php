<?php error_reporting(0); ?> 

<?php 
include 'database/database-helper.php';
include 'variables.php'; 
?>
<header class="main-header">
                <!-- header-top  -->
                <div class="header-top">
                    <div class="container">
                        <div class="header-top_contacts"><a href="#"><span>Call now: </span><?php echo $_GLOBAL["PHONE"]; ?></a><a href="#"><span>Write: </span><?php echo $_GLOBAL["EMAIL"] ?></a></div>
                    </div>
                </div>
                <!--header-top end -->
                <!-- header-inner -->
                <div class="header-inner  fl-wrap">
                    <div class="container">
                        <div class="header-container fl-wrap">
                            <a href="index.php" class="logo-holder"><img src="images/logo1.png" alt=""></a>
                            <?php session_start(); if(isset($_SESSION['SESSION_ID'])){ ?>
                                <a href="handle-userlogout.php" class="show-reserv_button show-rb"><span>Logout</span> <i class="fal fa-bookmark"></i></a>
                            <?php }?>
                                <a href="login.php" class="show-reserv_button show-rb"><span>Login</span> <i class="fal fa-bookmark"></i></a>
                                
                                <?php 

                                    $customerId = $_SESSION['SESSION_ID'];
                                    $sql = "SELECT * FROM orders WHERE status='pending' AND customer_id='$customerId'";
                                    $result = mysqli_query($conn, $sql);
                                    $totalItems = 0;
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $totalItems = $totalItems + $row['quantity'];
                                            
                                        }
                                    }

                                ?>

                            <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count"><?php echo $totalItems;?></span><span class="header-tooltip">Your Cart</span></div>
                            <!-- nav-button-wrap-->
                            <div class="nav-button-wrap">
                                <div class="nav-button">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <!-- nav-button-wrap end-->
                            <!--  navigation -->
                            <div class="nav-holder main-menu">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.php" class="act-link">Home</a>
                                    
                                        </li>
                                        <li>
                                            <a href="menu.php">Menu</a>
                                        </li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="blog.php">News</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- navigation  end -->                        
                            <!-- header-cart_wrap  -->
                            <div class="header-cart_wrap novis_cart">
                                <div class="header-cart_title">Your Cart <span><?php echo $totalItems;?></span></div>
                                <div class="header-cart_wrap_container fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="widget-posts fl-wrap">
                                            <ol>

                                            <?php 

                                                $sql = "SELECT orders.order_id, orders.quantity, products.product_name, products.product_price, products.image
                                                FROM orders
                                                INNER JOIN products ON orders.product_id=products.product_id
                                                WHERE status='pending' AND customer_id='$customerId'";
                                                $result = mysqli_query($conn, $sql);
                                                $totalAmount = 0;
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                                    while($row = mysqli_fetch_assoc($result)) {
                            
                                            ?>
                                                <li class="clearfix">
                                                    <a href="#"  class="widget-posts-img"><img src="./admin-panel/<?php echo $row['image'];?>" class="respimg" alt=""></a>
                                                    <div class="widget-posts-descr">
                                                        <a href="#" title=""><?php echo $row['product_name'];?></a>
                                                        <div class="widget-posts-descr_calc clearfix"><?php echo $row['quantity'];?> <span>x</span>Rs. <?php echo $row['product_price'];?></div>
                                                    </div>
                                                    <div class="clear-cart_button"><a href="remove-cart.php?id=<?php echo $row['order_id'];?>" style="text-decoration: none;"><i class="fal fa-times"></i></a></div>
                                                </li>
                                            <?php
                                                        $totalAmount = $totalAmount + $row['quantity']*($row['product_price'] );

                                                    }
                                                }
                                            ?>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart_wrap_total fl-wrap">
                                    <div class="header-cart_wrap_total_item">Subtotal : <span>Rs. <?php echo $totalAmount;?></span></div>
                                </div>
                                <div class="header-cart_wrap_footer fl-wrap">
                                    <a href="cart.php"> View Cart</a>
                                    <a href="checkout.php">  Checkout</a>
                                </div>
                            </div>
                            <!-- header-cart_wrap end  -->
                            <!-- share-wrapper -->
                            <div class="share-wrapper isShare">
                                <div class="share-container fl-wrap"></div>
                            </div>
                            <!-- share-wrapper-end -->
                        </div>
                    </div>
                </div>
                <!-- header-inner end  -->
            </header>