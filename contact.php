<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Hcinterior - Creative Interior Designer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <?php include 'header.php';?>
                  <!--  content -->
                  <div class="content">
                        <!--  section  -->
                        <section class="parallax-section header-section" data-scrollax-parent="true">
                            <div class="bg"  data-bg="images/bg/4.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                            <div class="overlay"></div>
                            <div class="container big-container">
                                <div class="section-title">
                                    <h3>Contact Details</h3>
                                    <div class="separator trsp-separator"></div>
                                    <h2>Get In Touch <br> with us</h2>
                                    <p>Curabitur bibendum mi sed rhoncus aliquet. Nulla blandit porttitor justo, at posuere sem accumsan nec.</p>
                                    <a href="#sec1" class="custom-scroll-link sect-scroll-link"><i class="fa fa-long-arrow-down"></i> <span>scroll down</span></a>
                                </div>
                            </div>
                        </section>
                        <!--  section  end-->
                        <!--  section  -->
                        <section >
                            <div class="container">
                                <div class="contact-details-wrap fl-wrap" id="sec1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="small-sec-title">
                                                <h3>Contact details :</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="contact-details fl-wrap">
                                                <div class="row border-dec">
                                                    <div class="col-md-6">
                                                        <h4><span>01.</span>Office in New York</h4>
                                                        <ul>
                                                            <li><span>Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                                            <li><span>Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                                            <li><span>Phone :</span><a href="#">+7(111)123456789</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4><span>02.</span>Work Hours</h4>
                                                        <ul>
                                                            <li><span>Monday - Friday : </span> 08h.00 - 17h.30</li>
                                                            <li><span>Saturday: </span> 08h.00 - 12h.00 </li>
                                                            <li><span>Sunday :</span> Off work </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="map-box">
                                    <div  id="map-canvas"></div>
                                </div>
                                <div class="contact-details-wrap fl-wrap">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="small-sec-title">
                                                <h3>Get in Touch  : </h3>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <!-- contact form -->
                                            <div class="contact-form-holder fl-wrap">
                                                <div id="contact-form">
                                                    <div id="message"></div>
                                                    <form method="post" action="" name="contactform" id="contactform">
                                                        <input name="name" type="text" id="name"  onClick="this.select()" value="Name" >
                                                        <input name="email" type="text" id="email" onClick="this.select()" value="E-mail" >
												        <input type="text"  name="phone" id="phone" onClick="this.select()" value="Phone" /> 
                                                        <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                                        <div class="verify-wrap">
                                                            <span class="verify-text"> How many gnomes were in the story about the "Snow-white" ?</span> 
                                                            <input name="verify" type="text" id="verify" onClick="this.select()" value="0" >
                                                        </div>
                                                        <button type="submit"  id="submit"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span>Send Message </span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- contact form  end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  partcile-dec  -->
                            <div class="partcile-dec" data-parcount="200"></div>
                            <!--  partcile-dec  end-->
                        </section>
                        <!--  section  end-->
                        <!--  social-wrap  -->
                        <div class="social-wrap fl-wrap">
                            <ul>
                                <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div>
                        <!--  social-wrap  end-->
                    </div>
                    <!-- content end -->
        <?php include 'footer.php';?>
