<?php include 'database/database-helper.php'; ?>

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
                        <div class="bg par-elem "  data-bg="images/bg/10.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h4>Enjoy your time in our restaurant with pleasure.</h4>
                                <h2>Discover Our Menu</h2>
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
                    <section class="hidden-section" data-scrollax-parent="true" id="sec2">
                        <div class="container">
                            <div class="gallery_filter-button btn">Show Filters <i class="fal fa-long-arrow-down"></i></div>
                            <!-- gallery-filters -->
                            <div class="gallery-filters gth">
                                <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><span>01.</span>All Dishes</a>
                                <a href="#" class="gallery-filter " data-filter=".starter"><span>02.</span>Starter</a>
                                <a href="#" class="gallery-filter" data-filter=".desserts"><span>03.</span>Desserts</a>
                                <a href="#" class="gallery-filter" data-filter=".seafood"><span>04.</span>Sea Food</a>
                                <a href="#" class="gallery-filter" data-filter=".drinks"><span>05.</span>Drinks</a>
                            </div>
                            <!-- gallery-filters end-->
                            <?php 
                                $sql = "SELECT * FROM products";
                                $result = $conn->query($sql);
                            
                            ?>

                            <!-- gallery start -->
                            <div class="gallery-items grid-big-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                                <!-- gallery-item-->
                            <?php 
                                // LOOP TILL END OF DATA
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                            ?>
                                <div class="gallery-item  <?php echo $row['category'];?>">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/1.jpg" class="box-media-zoom popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/1.jpg" alt="">
                                    </div>
                            
                                    <div class="grid-item-details">
                                        <h3><?php echo $row['product_name'];?></h3>
                                        <p><?php echo $row['description'];?></p>
                                        <div class="grid-item_price">
                                            <span>Rs. <?php echo $row['product_price'];?></span>
                                            <form action="handle-cart.php" method="post"></form>
                                            <div class="add_cart"><button style="background-color: transparent; border: none;" type="submit" name="id" value ="<?php echo $row['product_id'];?>">Add To Cart</button></div>
                                        </div>
                                    </div>
                                </div>

                            <?php
                                    }
                                }
                            ?>
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <!-- <div class="gallery-item seafood">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/2.jpg" class="box-media-zoom popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/2.jpg" alt="">
                                    </div>
                                    <div class="grid-item-details">
                                        <h3>Fish pie</h3>
                                        <p>Our tender, juicy filet paired with a steamed tempor lobster tail. </p>
                                        <div class="grid-item_price">
                                            <span>$62</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <!-- <div class="gallery-item drinks">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/3.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/3.jpg"    alt="">
                                    </div>
                                    <div class="grid-item-details">
                                        <h3>Victoria's Filet Mignon <span>Chef selection</span></h3>
                                        <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur nec nunc.</p>
                                        <div class="grid-item_price">
                                            <span>$18</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <!-- <div class="gallery-item">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/4.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/4.jpg"    alt="">
                                    </div>
                                    <div class="grid-item-details">
                                        <h3>Prime Cuts of Beef</h3>
                                        <p>Granny help you treat yourself with a empor scelerisque different meal everyday.</p>
                                        <div class="grid-item_price">
                                            <span>$31</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <!-- <div class="gallery-item starter">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/5.jpg"    alt="">
                                    </div>
                                    <div class="grid-item-details">
                                        <h3>Miso chicken <span>Sale -20%</span></h3>
                                        <p>Seasoned with an herb crust, served with au empor scelerisque jus and handcarved to order. </p>
                                        <div class="grid-item_price">
                                            <span>$67</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <!-- <div class="gallery-item drinks desserts">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/10.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/10.jpg"    alt="">
                                    </div>
                                    <div class="grid-item-details">
                                        <h3>Salmon Riverland</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                        <div class="grid-item_price">
                                            <span>$22</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                <!-- <div class="gallery-item seafood starter">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/7.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/7.jpg"    alt="">
                                    </div>
                                    <div class="grid-item-details">
                                        <h3>Slow-Roasted Prime Rib</h3>
                                        <p>Seasoned with an herb crust, served with au jus and handcarved to order,  crust, served  .</p>
                                        <div class="grid-item_price">
                                            <span>$44</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- gallery-item end-->	
                                <!-- gallery-item-->
                                <!-- <div class="gallery-item desserts">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/8.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/8.jpg"    alt="">
                                    </div>
                                    <div class="grid-item-details">
                                        <h3>Meatball tagliatelle <span>Sale -10%</span></h3>
                                        <p>Granny help you treat yourself with a empor scelerisque different meal everyday.</p>
                                        <div class="grid-item_price">
                                            <span>$39</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- gallery-item end-->	
                                <!-- gallery-item-->
                                <!-- <div class="gallery-item starter">
                                    <div class="grid-item-holder hov_zoom">
                                        <a href="images/menu/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        <img  src="images/menu/9.jpg"    alt="">
                                    </div>
                                    <div class="grid-item-details">
                                        <h3>Fried Potatoes</h3>
                                        <p>Our tender, juicy filet paired with a steamed tempor lobster tail.</p>
                                        <div class="grid-item_price">
                                            <span>$12</span>
                                            <div class="add_cart">Add To Cart</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- gallery-item end-->                                                        
                            </div>
                            <!-- gallery end -->                                
                            <div class="clearfix"></div>
                            <div class="bold-separator bold-separator_dark"><span></span></div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn  ">Download menu in PDF<i class="fal fa-long-arrow-right"></i></a>                                      
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
                                    <textarea name="comments"  id="comments" cols="30" rows="3" placeholder="Your Message:"></textarea>
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