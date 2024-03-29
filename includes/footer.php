<?php include 'includes/variables.php'; ?>
                <footer class="fl-wrap dark-bg fixed-footer">
                    <div class="container">
                        <div class="footer-top fl-wrap">
                            <a href="index.php" class="footer-logo"><img src="images/logoo2.png" alt=""></a>
                            <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div>
                            <div class="footer-social">
                                <span class="footer-social-title">Follow us :</span>
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap fl-wrap">
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">About us</div>
                                        <div class="footer-widget-content">
                                            <p>
                                            At Culinary Cove, we pride ourselves on delivering an exquisite culinary experience that tantalizes the senses and brings people together through the love of food. Nestled in Lahore, our restaurant is more than just a place to dine; it's a celebration of flavors, cultures, and the joy of dining.
                                            </p>
                                            <a href="about.php" class="footer-widget-content-link">Read more</a>                                                    	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Contact info  </div>
                                        <div class="footer-widget-content">
                                            <div class="footer-contacts footer-box fl-wrap">
                                                <ul>
                                                    <li><span>Call :</span><a href="#"><?php echo $_GLOBAL["PHONE"] ?></a></li>
                                                    <li><span>Write  :</span><a href="#"><?php echo $_GLOBAL["EMAIL"] ?></a></li>
                                                    <li><span>Find Us : </span><a href="#"><?php echo $_GLOBAL["ADDRESS"] ?></a></li>
                                                </ul>
                                            </div>
                                            <a href="contacts.php" class="footer-widget-content-link">Get in Touch</a>                                                    	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form fl-wrap">
                                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe" class="fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->
                        <div class="footer-bottom fl-wrap">
                            <div class="copyright">&#169; Culinary Cove <?php echo date("Y") ?> . All rights reserved.
                            <br>
                            Developed By Ishwa under the Supervision of Sir Jamil.
                            </div>
                            
                            <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
                        </div>
                    </div>
                </footer>