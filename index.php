<?php include_once('header.php');?>

    <!-- Teaser start -->

    <section id="teaser">

      <div class="container">

        <div class="row">

          <div class="col-md-7 col-xs-12 pull-right">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides start -->

              <div class="carousel-inner">

                <div class="item active">

                  <h1 class="title">Your dream car is one click away

                      <!-- <span class="subtitle">Plan your trip now</span> --></h1>

                      <div class="car-img">

                        <img src="img/car2.png" class="img-responsive" alt="car1">
                    </div>

                  </div>

                  <div class="item">
                       <h1 class="title"> GET 15% OFF ON ALL LUXURY CARS

                    <!-- <span class="subtitle">Treat yourself in Noida</span> --></h1>

                    <div class="car-img">

                      <img src="img/car33.png" class="img-responsive" alt="car1">


                      </div>

                    </div>

                    <div class="item">

                    <h1 class="title"> Experience the luxury

                      <!-- <span class="subtitle">Plan your trip now</span> --></h1>

                      <div class="car-img">

                        <img src="img/car1.png" class="img-responsive" alt="car1">

                      </div>

                    </div>

                  </div>

                  <!-- Wrapper for slides end -->



                  <!-- Slider Controls start -->

                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                  </a>

                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right"></span>

                  </a>

                  <!-- Slider Controls end -->

                </div>

              </div>

              <div class="col-md-5 col-xs-12 pull-left">

                <div class="reservation-form-shadow">



                  <form action="checkout.php" method="post" id="car-select-form">



                    <div class="alert alert-danger hidden" id="car-select-form-msg">

                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                      <strong>Note:</strong> All fields required!

                    </div>

                    <!-- ride select start -->

                    <div class="styled-select-car">

                      <select name="ride-select" id="ride-select">

                        <option value="">Select your ride type</option>

                        <!-- <option value="img/1.png">BMW Z4</option> -->

                        <option>Self Drive</option>
                        <option>Chauffeur Driven</option>

                      </select>
                      <input type="hidden" name="car_name" id="SelectedCar">
                    </div>

                    <!-- Car select end -->

                    <!-- Car select start -->

                    <div class="styled-select-car">
                      <select name="car-select" id="car-select">
                        
                      </select>
                    </div>



                    <!-- Car select end -->



                    <!-- Pick-up location start -->

                    <div class="location">

                      <div class="input-group pick-up">

                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Pick-up</span>

                        <input type="text" name="pick-up-location" id="pick-up-location" class="form-control autocomplete-location" value="New Delhi" placeholder="New Delhi"  autocomplete="off" readonly>

                      </div>

                      <!-- Pick-up location end -->
<!-- 


                      <a class="different-drop-off" href="#">Need a different drop-off location?</a>


 -->
                      <!-- Drop-off location start -->

                      <div class="input-group drop-off">

                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Drop-off</span>

                        <input type="text" name="drop-off-location" id="drop-off-location" class="form-control autocomplete-location" placeholder="Enter a City or Airport"  autocomplete="off">

                      </div>

                    </div>

                    <!-- Drop-off location end -->



                    <!-- Pick-up date/time start -->

                    <div class="datetime pick-up">

                      <div class="">
                      	<!-- date pull-left -->
                        <div class="input-group">

                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Pick-up</span>

                          <!-- <input type="text" readonly="true" name="pick-up-date" id="pick-up-date" class="form-control datepicker" placeholder="mm/dd/yyyy"> -->
                          <input type='text' name="pick-up-date" class="form-control" id='datetimepicker6' placeholder="Pick Up date" /  autocomplete="off">

                        </div>

                      </div>

                      <div class="clearfix"></div>

                    </div>

                    <!-- Pick-up date/time end -->

                    <!-- Drop-off date/time start -->

                    <div class="datetime drop-off">

                      <div class="">
                      	<!-- date pull-left -->
                        <div class="input-group">

                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Drop-off</span>

                          <input type='text' name="drop-off-date"  class="form-control" id='datetimepicker7' placeholder="Drop off date"/  autocomplete="off">

                        </div>

                      </div>

                      <div class="clearfix"></div>

                    </div>

                    <!-- Drop-off date/time end -->
                    <input type="hidden" name="totalHours" id="total-hours" value="">


                    <input type="submit" class="submit" name="submit" value="continue car reservation" id="checkoutModalLabel">

                  </form>



                </div>

              </div>



            </div>

          </div>

        </section>

        <div class="arrow-down"></div>

        <!-- Teaser end -->







        <!-- Services start -->

        <section id="services" class="container">

          <div class="row">

            <div class="col-md-12 title">

              <h2>Customer Services</h2>

              <span class="underline">&nbsp;</span>

            </div>



            <!-- Service Box start -->

            <div class="col-md-6">

              <div class="service-box wow fadeInLeft" data-wow-offset="100">

                <div class="service-icon">+</div>

                <h3 class="service-title"> As per client’s requirement</h3>

                <div class="clearfix"></div>

                <p class="service-content">Competitively priced and can be selected as per client’s requirement, Experience the freedom of exploring the entire area of your town.</p>

              </div>

            </div>

            <!-- Service Box end -->



            <!-- Service Box start -->

            <div class="col-md-6">

              <div class="service-box wow fadeInRight" data-wow-offset="100">

                <div class="service-icon">+</div>

                <h3 class="service-title"> No Hidden Charges</h3>

                <div class="clearfix"></div>

                <p class="service-content">We believe an unforgettable drive doesn’t have to be expensive that’s why we deliver the experience of a life time at a fraction of cost.</p>

              </div>

            </div>

            <!-- Service Box end -->



            <!-- Service Box start -->

            <div class="col-md-6">

              <div class="service-box wow fadeInLeft" data-wow-offset="100">

                <div class="service-icon">+</div>

                <h3 class="service-title"> Comfort and Convenience </h3>

                <div class="clearfix"></div>

                <p class="service-content">The cabin is outfitted with top comforts and amenities. Heated and cooled front seats help maintain the right temperature while covering the miles.  </p>

              </div>

            </div>

            <!-- Service Box end -->



            <!-- Service Box start -->

            <div class="col-md-6">

              <div class="service-box wow fadeInRight" data-wow-offset="100">

                <div class="service-icon">+</div>

                <h3 class="service-title">Play It Safe</h3>

                <div class="clearfix"></div>

                <p class="service-content">Luxury cars have long been considered among the safest rides on the road, These cars are equipped with a number of features to keep occupants protected.</p>

              </div>

            </div>

            <!-- Service Box end -->



          </div>

        </section>

        <!-- Services end -->







        <!-- Newsletter start -->

        <section id="newsletter" class="wow slideInLeft" data-wow-offset="300">

          <div class="container">

            <div class="row">

              <div class="col-md-12"><div class="alert hidden" id="newsletter-form-msg"></div></div>

              <div class="col-md-5 col-xs-12">

                <h2 class="title">Sign up for amazing offers

                  <span class="subtitle">exclusive access for offers and promotions</span></h2>

                </div>

                <div class="col-md-7">

                  <div class="newsletter-form pull-left">

                    <!-- <form method="post" name="newsletter-form" > -->

                      

                      <div class="input-group newsletter">

                        <input type="email" name="newsletterEmail" class="form-control" placeholder="Enter your Email Address">

                        <span class="input-group-btn">

                          <input class="btn btn-default button newsletterbtn" type="submit"  value="submit">

                        </span>
                      </div>
                      <span class="email-comment" style="margin-top: 9px;display: block;"></span>
                    <!-- </form> -->

                  </div>

                  <div class="social-icons pull-right">

                    <ul>

                      <li><a class="facebook" href="https://www.facebook.com/GO-CARZY-480264796047989/?ref=search&__tn__=%2Cd%2CP-R&eid=ARDSSO7Ngw9LaacIqJP5WxR2Jta8bmVweKeqzOJJ9ZwO8b0IO0z61hhLn55KIHYsLl8edlJQbYEMPjP2" target="_blank"><img src="facebook.png" style="height: 58px;background-color: #fff;border-radius: 18px;"></a></li>

                      <!-- <li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li> -->

                      <li><a class="twitter" href="https://www.instagram.com/go_carzy/?hl=en" target="_blank"><img src="instagram.png" style="height: 58px;background-color: #fff;border-radius: 18px;"></a></li>

                    </ul>

                  </div>

                  <div class="clearfix"></div>

                </div>

              </div>

            </div>

          </section>

          <!-- Newsletter end -->







          <!-- Vehicles start -->

          <section id="vehicles" class="container">

            <div class="row">

              <div class="col-md-12">

                <h2 class="title wow fadeInDown" data-wow-offset="200">Vehicle Models - <span class="subtitle">Our Rental Fleet at a Glance</span></h2>

              </div>



              <!-- Vehicle nav start -->

              <div class="col-md-3 vehicle-nav-row wow fadeInUp" data-wow-offset="100">

                <div id="vehicle-nav-container">

                  <ul class="vehicle-nav">

                      <!-- <li class="active"><a href="#vehicle-1">BMW Z4</a><span class="active">&nbsp;</span></li> -->
                      <li><a href="#vehicle-11">Ford Mustang GT</a><span class="active">&nbsp;</span></li>
                      <li class="active"><a href="#vehicle-2">Audi A3</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-7">Audi A4</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-9">Audi A6</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-3">Audi Q7</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-8">Jaguar XF</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-4">Mercedes CLA</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-5">Limousine</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-10">BMW 7 series</a><span class="active">&nbsp;</span></li>
                      <li><a href="#vehicle-6">Toyota Fortuner</a><span class="active">&nbsp;</span></li>
                     
                      
                    

                  </ul>

                </div>



                  <div class="vehicle-nav-control">

                      <a class="vehicle-nav-scroll" data-direction="up" href="#"><i class="fa fa-chevron-up"></i></a>

                      <a class="vehicle-nav-scroll" data-direction="down" href="#"><i class="fa fa-chevron-down"></i></a>

                  </div>



              </div>

              <!-- Vehicle nav end -->

              <!-- Vehicle 2 data start -->

              <div class="vehicle-data" id="vehicle-11">

                <div class="col-md-6" data-wow-offset="200">

                  <div class="vehicle-img">

                    <img class="img-responsive" src="img/10.jpg" alt="Vehicle">

                  </div>

                </div>

                <div class="col-md-3" data-wow-offset="200">

                  <div class="vehicle-price">&#8377; 5750 <span class="info">/ Hour Ownward</span></div>

                  <table class="table vehicle-features">

                   

                    <tr>

                      <td>Doors</td>

                      <td>4</td>

                    </tr>

                    <tr>

                      <td>Seats</td>

                      <td>4</td>

                    </tr>

                    <tr>

                      <td>Driven</td>

                      <td>Chauffeur</td>

                    </tr>

                    <tr>

                      <td>Transmission</td>

                      <td>Automatic</td>

                    </tr>

                    <tr>

                      <td>Air conditioning</td>

                      <td>Yes</td>

                    </tr>

                    <tr>

                      <td>Minimum age</td>

                      <td>18 years</td>

                    </tr>
                    <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>

                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                </div>

              </div>

              <!-- Vehicle 2 data end -->
              <!-- Vehicle 2 data start -->

              <div class="vehicle-data" id="vehicle-2">

                <div class="col-md-6" data-wow-offset="200">

                  <div class="vehicle-img">

                    <img class="img-responsive" src="img/a6.jpg" alt="Vehicle">

                  </div>

                </div>

                <div class="col-md-3" data-wow-offset="200">

                  <div class="vehicle-price">&#8377; 3719 <span class="info">/ Hour Ownward</span></div>

                  <table class="table vehicle-features">

                   

                    <tr>

                      <td>Doors</td>

                      <td>4</td>

                    </tr>

                    <tr>

                      <td>Seats</td>

                      <td>5</td>

                    </tr>

                    <tr>

                      <td>Driven</td>

                      <td>Self / Chauffeur</td>

                    </tr>

                    <tr>

                      <td>Transmission</td>

                      <td>Automatic</td>

                    </tr>

                    <tr>

                      <td>Air conditioning</td>

                      <td>Yes</td>

                    </tr>

                    <tr>

                      <td>Minimum age</td>

                      <td>18 years</td>

                    </tr>
                    <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>

                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                </div>

              </div>

              <!-- Vehicle 2 data end -->



              <!-- Vehicle 3 data start -->

              <div class="vehicle-data" id="vehicle-3">

                <div class="col-md-6" data-wow-offset="200">

                  <div class="vehicle-img">

                    <img class="img-responsive" src="img/q7.jpg" alt="Vehicle">

                  </div>

                </div>

                <div class="col-md-3" data-wow-offset="200">

                  <div class="vehicle-price">&#8377; 2449 <span class="info">/ Hour</span></div>

                  <table class="table vehicle-features">

                    <tr>

                      <td>Doors</td>

                      <td>4</td>

                    </tr>

                    <tr>

                      <td>Seats</td>

                      <td>5</td>

                    </tr>

                    <tr>

                      <td>Driven</td>

                      <td>Chauffeur</td>

                    </tr>

                    <tr>

                      <td>Transmission</td>

                      <td>Automatic</td>

                    </tr>

                    <tr>

                      <td>Air conditioning</td>

                      <td>Yes</td>

                    </tr>

                    <tr>

                      <td>Minimum age</td>

                      <td>18 years</td>

                    </tr>
                   <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>

                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                </div>

              </div>

              <!-- Vehicle 3 data end -->



              <!-- Vehicle 4 data start -->

              <div class="vehicle-data" id="vehicle-4">

                <div class="col-md-6" data-wow-offset="200">

                  <div class="vehicle-img">

                    <img class="img-responsive" src="img/4.png" alt="Vehicle">

                  </div>

                </div>

                <div class="col-md-3" data-wow-offset="200">

                  <div class="vehicle-price">&#8377; 1589 <span class="info">/ Hour</span></div>

                  <table class="table vehicle-features">


                    <tr>

                      <td>Doors</td>

                      <td>4</td>

                    </tr>

                    <tr>

                      <td>Seats</td>

                      <td>5</td>

                    </tr>

                    <tr>

                      <td>Driven</td>

                      <td>Chauffeur</td>

                    </tr>

                    <tr>

                      <td>Transmission</td>

                      <td>Automatic</td>

                    </tr>

                    <tr>

                      <td>Air conditioning</td>

                      <td>Yes</td>

                    </tr>

                    <tr>

                      <td>Minimum age</td>

                      <td>18 years</td>

                    </tr> 
                    <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                </div>

              </div>

              <!-- Vehicle 4 data end -->



              <!-- Vehicle 5 data start -->

              <div class="vehicle-data" id="vehicle-5">

                <div class="col-md-6" data-wow-offset="200">

                  <div class="vehicle-img">

                    <img class="img-responsive" src="img/lomousin.jpg" alt="Vehicle">

                  </div>

                </div>

                <div class="col-md-3" data-wow-offset="200">

                  <div class="vehicle-price">&#8377; 2589<span class="info">/ Hour</span></div>

                  <table class="table vehicle-features">


                    <tr>

                      <td>Doors</td>

                      <td>4</td>

                    </tr>

                    <tr>

                      <td>Seats</td>

                      <td>7</td>

                    </tr>

                    <tr>

                      <td>Driven</td>

                      <td>Chauffeur</td>

                    </tr>

                    <tr>

                      <td>Transmission</td>

                      <td>Automatic</td>

                    </tr>

                    <tr>

                      <td>Air conditioning</td>

                      <td>Yes</td>

                    </tr>

                    <tr>

                      <td>Minimum age</td>

                      <td>18 years</td>

                    </tr>
                     <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>

                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                </div>

              </div>

              <!-- Vehicle 5 data end -->



              <!-- Vehicle 6 data start -->

              <div class="vehicle-data" id="vehicle-6">

                <div class="col-md-6" data-wow-offset="200">

                  <div class="vehicle-img">

                    <img class="img-responsive" src="img/6.jpg" alt="Vehicle">

                  </div>

                </div>

                <div class="col-md-3" data-wow-offset="200">

                  <div class="vehicle-price">&#8377; 799 <span class="info">/ Hour Ownward</span></div>

                  <table class="table vehicle-features">


                    <tr>

                      <td>Doors</td>

                      <td>4</td>

                    </tr>

                    <tr>

                      <td>Seats</td>

                      <td>5</td>

                    </tr>

                    <tr>

                      <td>Driven</td>

                      <td>Self / Chauffeur</td>

                    </tr>

                    <tr>

                      <td>Transmission</td>

                      <td>Automatic</td>

                    </tr>

                    <tr>

                      <td>Air conditioning</td>

                      <td>Yes</td>

                    </tr>

                    <tr>

                      <td>Minimum age</td>

                      <td>18 years</td>

                    </tr>
                     <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                </div>

              </div>

              <!-- Vehicle 6 data end -->



                <!-- Vehicle 7 data start -->

                <div class="vehicle-data" id="vehicle-7">

                    <div class="col-md-6" data-wow-offset="200">

                        <div class="vehicle-img">

                            <img class="img-responsive" src="img/a4.jpg" alt="Vehicle">

                        </div>

                    </div>

                    <div class="col-md-3" data-wow-offset="200">

                        <div class="vehicle-price">&#8377; 1299 <span class="info">/ Hour</span></div>

                        <table class="table vehicle-features">

                          

                            <tr>

                                <td>Doors</td>

                                <td>4</td>

                            </tr>

                            <tr>

                                <td>Seats</td>

                                <td>7</td>

                            </tr>

                            <tr>

                                <td>Driven</td>

                                <td>Chauffeur</td>

                            </tr>

                            <tr>

                                <td>Transmission</td>

                                <td>Automatic</td>

                            </tr>

                            <tr>

                                <td>Air conditioning</td>

                                <td>Yes</td>

                            </tr>

                            <tr>

                                <td>Minimum age</td>

                                <td>18 years</td>

                            </tr>
                            
                         <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>

                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                    </div>

                </div>

                <!-- Vehicle 7 data end -->



                <!-- Vehicle 8 data start -->

                <div class="vehicle-data" id="vehicle-8">

                    <div class="col-md-6" data-wow-offset="200">

                        <div class="vehicle-img">

                            <img class="img-responsive" src="img/8.jpg" alt="Vehicle">

                        </div>

                    </div>

                    <div class="col-md-3" data-wow-offset="200">

                        <div class="vehicle-price">&#8377; 3569 <span class="info">/ Hour Ownward</span></div>

                        <table class="table vehicle-features">

                        

                            <tr>

                                <td>Doors</td>

                                <td>4</td>

                            </tr>

                            <tr>

                                <td>Seats</td>

                                <td>5</td>

                            </tr>

                            <tr>

                                <td>Driven</td>

                                <td>Self / Chauffeur</td>

                            </tr>

                            <tr>

                                <td>Transmission</td>

                                <td>Automatic</td>

                            </tr>

                            <tr>

                                <td>Air conditioning</td>

                                <td>Yes</td>

                            </tr>

                            <tr>

                                <td>Minimum age</td>

                                <td>18 years</td>

                            </tr>

                         <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>

                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                    </div>

                </div>

                <!-- Vehicle 8 data end -->



                <!-- Vehicle 9 data start -->

                <div class="vehicle-data" id="vehicle-9">

                    <div class="col-md-6" data-wow-offset="200">

                        <div class="vehicle-img">

                            <img class="img-responsive" src="img/9.jpg" alt="Vehicle">

                        </div>

                    </div>

                    <div class="col-md-3" data-wow-offset="200">

                        <div class="vehicle-price">&#8377; 2499 <span class="info">/ Hour Ownward</span></div>

                        <table class="table vehicle-features">


                            <tr>

                                <td>Doors</td>

                                <td>4</td>

                            </tr>

                            <tr>

                                <td>Seats</td>

                                <td>5</td>

                            </tr>

                            <tr>

                                <td>Driven</td>

                                <td>Self / Chauffeur</td>

                            </tr>

                            <tr>

                                <td>Transmission</td>

                                <td>Automatic</td>

                            </tr>

                            <tr>

                                <td>Air conditioning</td>

                                <td>Yes</td>

                            </tr>

                            <tr>

                                <td>Minimum age</td>

                                <td>18 years</td>

                            </tr>

                         <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>

                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                    </div>

                </div>

                <!-- Vehicle 9 data end -->



                <!-- Vehicle 10 data start -->

                <div class="vehicle-data" id="vehicle-10">

                    <div class="col-md-6" data-wow-offset="200">

                        <div class="vehicle-img">

                            <img class="img-responsive" src="img/3.jpg" alt="Vehicle">

                        </div>

                    </div>

                    <div class="col-md-3" data-wow-offset="200">

                        <div class="vehicle-price">&#8377; 1689 <span class="info">/ Hour Ownward</span></div>

                        <table class="table vehicle-features">

                       

                            <tr>

                                <td>Doors</td>

                                <td>4</td>

                            </tr>

                            <tr>

                                <td>Seats</td>

                                <td>5</td>

                            </tr>

                            <tr>

                                <td>Driven</td>

                                <td>Self / Chauffeur</td>

                            </tr>

                            <tr>

                                <td>Transmission</td>

                                <td>Automatic</td>

                            </tr>

                            <tr>

                                <td>Air conditioning</td>

                                <td>Yes</td>

                            </tr>

                            <tr>

                                <td>Minimum age</td>

                                <td>18 years</td>

                            </tr>

                         <tr>
                    <td>Minimum Hour</td>
                     <td>8 Hour</td>
                   </tr></table>

                        <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon glyphicon-calendar"></span> Reserve now</a>

                    </div>

                </div>

            </div>

          </section>

          <!-- Vehicles end -->







          <!-- Reviews start -->

          <section id="reviews" class="container wow fadeInUp">

            <div class="row text-center">

              <div class="col-md-12 stars">

                <span class="glyphicon glyphicon-star"></span>

                <span class="glyphicon glyphicon-star"></span>

                <span class="glyphicon glyphicon-star big"></span>

                <span class="glyphicon glyphicon-star"></span>

                <span class="glyphicon glyphicon-star"></span>

              </div>

              <div class="col-md-10 col-md-offset-1">

                <div id="reviews-carousel" class="carousel slide carousel-fade" data-ride="carousel">

                  <div class="carousel-inner">



                    <!-- Review item 1 start -->

                    <div class="item active">

                      <div class="review">

                        This rental was the best rental experience ever!  extremely friendly staff, I was handed the keys and rest was luxury.

                      </div>

                      <div class="author">

                        – ANKIT KHANNA

                      </div>

                    </div>

                    <!-- Review item 1 end -->



                    <!-- Review item 2 start -->

                    <div class="item">

                      <div class="review">

                       We loved our car! It was perfect for our meetings and impressed everyone. I prefer go carzy as one of the best luxury car rental company in india...

                     </div>

                     <div class="author">

                      – ABOOD HASSAN

                    </div>

                  </div>

                  <!-- Review item 2 end -->



                  <!-- Review item 3 start -->

                  <div class="item">

                    <div class="review">

                     I took mustang for my college farewell,Best thing about GOCARZY is that it is budget friendly for college students.


                    </div>

                    <div class="author">

                      – BHARAT SINGH

                    </div>

                  </div>

                  <!-- Review item 3 end -->



                </div>



                <!-- Review Nav start -->

                <ol class="carousel-indicators">

                  <li data-target="#reviews-carousel" data-slide-to="0" class="active"></li>

                  <li data-target="#reviews-carousel" data-slide-to="1"></li>

                  <li data-target="#reviews-carousel" data-slide-to="2"></li>

                </ol>

                <!-- Review Nav end -->



              </div>

            </div>

          </div>

        </section>

        <!-- Reviews end -->







        <!-- Locations start -->

        <section id="locations">

          <div class="container location-select-container wow bounceInDown" data-wow-offset="200">

            <div class="row">

              <div class="col-md-8 col-md-offset-2">

                <div class="location-select">

                  <div class="row">

                    <div class="col-md-6">

                      <h2>Car Rental Locations</h2>

                    </div>

                    <div class="col-md-6">

                      <div class="styled-select-location">

                        <select id="location-map-select"></select>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="arrow-down-location">&nbsp;</div>

          </div>

          <div class="map wow bounceInUp" data-wow-offset="100"><!-- map by gmap3 --></div>

        </section>

        <!-- Locations end -->







        <!-- Information start -->

        <section id="information" class="container">



          <!-- Single photo start -->

          <div class="row wow fadeInLeft" data-wow-offset="100">

            <div class="col-md-6 col-xs-12 pull-right">

              <img src="img/info-img.jpg" alt="Info Img" class="img-responsive">

            </div>

            <div class="col-md-6 pull-left">

              <h2 class="title">Quality Guaranteed</h2>

              <!-- <h3 class="subtitle">Here is an example with one single photo displayed on the right.</h3> -->

              <p style="text-align: justify;">Luxury cars in exquisite condition are available for hiring, luxury cars aren’t just about the looks. Their engine capabilities are as good as they are aesthetically, they are incredibly advanced and capable of automatic transmission with overdrive. From a range of stylish interiors to quilted comfortable leather seats. </p>

              <a href="#" class="btn">Book Now</a>

             <!--  <a href="#" class="btn btn-gray">Buy this theme</a> -->

            </div>

          </div>

          <!-- Single photo end -->




        </section>

        <!-- Information end -->


<?php
include_once('footer.php');
?>