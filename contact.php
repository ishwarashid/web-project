<?php include 'includes/variables.php'; ?>

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
                    <section class=" no-padding dark-bg hidden-section">
                        <div class="map-container">
                            <div id="singleMap">
                                
                            <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d54450.04818372682!2d74.441384!3d31.4656646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391909965d7dbc43%3A0x20587eba0002ce84!2sCaprinos%20Pizza%20DHA%20Raya%2C%20Lahore!5e0!3m2!1sen!2s!4v1702124481774!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="scrollContorl"></div>
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d54450.04818372682!2d74.441384!3d31.4656646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391909965d7dbc43%3A0x20587eba0002ce84!2sCaprinos%20Pizza%20DHA%20Raya%2C%20Lahore!5e0!3m2!1sen!2s!4v1702124481774!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            
                        </div>
                        <!-- map-view-wrap --> 
                        <div class="map-view-wrap">
                            <div class="container">
                                <div class="map-view-wrap_item">
                                    <div class="contact-details">
                                        <h4>Contacts Details</h4>
                                        <ul>
                                            <li><span><i class="fal fa-map-marked-alt"></i> Adress :</span> <a href="#">
                                                <?php echo $_GLOBAL["ADDRESS"] ?>

                                            </a></li>
                                            <li><span><i class="fal fa-phone-rotary"></i> Phone :</span> <a href="#">
                                                <?php echo $_GLOBAL["PHONE"] ?>

                                            </a></li>
                                            <li><span><i class="fal fa-mailbox"></i> Mail :</span> <a href="#">
                                                <?php echo $_GLOBAL["EMAIL"] ?>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--map-view-wrap end --> 
                        <div class="brush-dec"></div>
                    </section>
                    <!--  section  -->   
                    <section class="hidden-section big-padding con-sec" data-scrollax-parent="true" id="sec3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="section-title text-align_left">
                                        <h2>Get in touch</h2>
                                        <div class="dots-separator fl-wrap"><span></span></div>
                                    </div>
                                    <div class="text-block ">
                                        <p>Have a question, a suggestion, or just want to say hello? We'd love to hear from you! There are various ways to reach out to u
                                        </p>
                                    </div>
                                    <div class="contactform-wrap">
                                        <div id="message"></div>
                                        <form  class="custom-form" action="https://restabook.kwst.net/light/php/contact.php" name="contactform" id="contactform">
                                            <fieldset>
                                            <div id="message2"></div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" name="name" id="name2" placeholder="Your Name *" value=""/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  name="email" id="email2" placeholder="Email Address *" value=""/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text"  name="phone" id="phone2" placeholder="Phone *" value=""/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class=" fl-wrap">
                                                            <select name="subject" id="subject2" class="chosen-select no-search-select">
                                                                <option data-display="Subject">Any</option>
                                                                <option value="Upcoming Events">Upcoming Events </option>
                                                                <option value="Book table">Book table</option>
                                                                <option value="Banquet">Banquet</option>
                                                                <option value="Banquet">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <textarea name="comments"  id="comments2" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                <div class="clearfix"></div>
                                                <button class="btn float-btn flat-btn color-bg" id="submit_cnt">Send Message <i class="fal fa-long-arrow-right"></i></button>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="section-dec sec-dec_top"></div>
                                </div>
                                <div class="col-md-5">
                                    <div class="column-text_inside fl-wrap dark-bg" >
                                        <div class="column-text">
                                            <div class="section-title">
                                                <h4>Call For Reservations</h4>
                                                <h2>Opening Hours</h2>
                                                <div class="dots-separator fl-wrap"><span></span></div>
                                            </div>
                                            <div class="work-time fl-wrap">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h3>Sunday to Tuesday</h3>
                                                        <div class="hours">
                                                            09:00<br>
                                                            22:00
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3>Friday to Saturday</h3>
                                                        <div class="hours">
                                                            11:00<br>
                                                            19:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="bold-separator"><span></span></div>
                                            <div class="big-number"><a href="#"><?php echo $_GLOBAL["PHONE"]; ?></a></div>
                                        </div>
                                        <div class="illustration_bg">
                                            <div class="bg"  data-bg="images/bg/dec/6.png"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        <script  src="https://maps.google.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo"></script>           
        <script  src="js/jquery.min.js"></script>
        <script  src="js/plugins.js"></script>
        <script  src="js/scripts.js"></script>
    </body>

</html>