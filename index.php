<?php include("inc/connect.php") ?>
<?php include("inc/post.php") ?>
<?php include("inc/news_cards.php") ?>
<?php include("inc/top_head.php") ?>       
</head>
<body>       
<!-- <div class="wrapper"> -->

    <!-- Sidebar Nav -->
    <?php include("inc/sidebar.php") ?>

    <div id="main" style="left: 0px;">
        <div id="content">
            <?php include("inc/header.php") ?>

            <!-- Main Content Here -->
            <!-- Banner section -->
            <div id="banner">
                <h1>The East Of England's Leading Technology Company</h1>
                <p>Performance-driven digital and technology service with 
                    complete transparency.</p>
            </div>

            
            <!-- Service card section -->
            <div id="services">
                <div id="service-heading">
                    <h1><strong>Our Services</strong></h1>
                    <a class="view-all" href="#">
                        View all
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="container">
                    <div class="row row-eq-height">
                        <div class="col-md-4">
                            <a class=" card-link bs-hover" href="#">
                                <!-- Icon here -->
                                <div class="icon-circle bs">
                                    <img class="bs-icon-service" src="img/icons/grid.ico">
                                </div>
                                <h2>Bespoke Software</h2>
                                <p>Tailored software solutions to improve business productivity and online profits.</p>
                                <div class="br-row1"></div>
                                <div class="btn bs">Read More</div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="card-link is-hover" href="#">
                                <!-- Icon here -->
                                <div class="icon-circle is">
                                    <i class="fa-solid fa-desktop"></i>
                                </div>
                                <h2 id="m-is">IT Support</h2>
                                <p>Remotely managed IT services that is catered to your businesses, adds value &amp; reduces costs.</p>                          
                                <div class="btn is">Read More</div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="card-link dm-hover" href="#">
                                <!-- Icon here -->
                                <div class="icon-circle dm">
                                    <i class="fa-solid fa-chart-simple"></i>
                                </div>
                                <h2>Digital Marketing</h2>
                                <p>Driven brand awareness &amp; ROI through creative digital marketing campaigns.</p>
                                <div class="br-row1"></div>
                                <div class="btn dm">Read More</div>
                            </a>  
                        </div>
                    
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a class="card-link ts-hover" href="#">
                                <!-- Icon here -->
                                <div class="icon-circle ts">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <h2>Telecoms Services</h2>
                                <p>Stay connected with bespoke telecoms solutions when you need it most.</p>
                                <div id="br-ts"></div>
                                <div class="btn ts" href="#">Read More</div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a class="card-link wd-hover" href="#">
                                <!-- Icon here -->
                                <div class="icon-circle wd">
                                    <i class="fa-solid fa-code"></i>
                                </div>
                                <h2 id="m-wd">Web Design</h2>
                                <p>User-centric design for businesses looking to make a lasting impression.</p>
                                <div class="br-row2" id="br-wd"></div>
                                <div class="btn wd" href="#">Read More</div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a class="card-link cs-hover" href="#">
                                <!-- Icon here -->
                                <div class="icon-circle cs">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <h2 id="m-cs">Cyber Security</h2>
                                <p>Ensuring your online business stays secure 24/7 365 days of the year.</p>
                                <div class="br-row2" id="br-cs"></div>
                                <div class="btn cs" href="#">Read More</div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <a class="card-link dt-hover" href="#">
                                <!-- Icon here -->
                                <div class="icon-circle dt">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <h2>Developer Training</h2>
                                <p>Have you considered a career in web development but you aren&rsquo;t sure where to start?</p>
                                <div class="btn dt" href="#">Read More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partners carousel section -->
            <div id="partners">
            <!-- Maybe use an owl carousel -->
            </div>
            <!-- Welcome section -->
            <div id="welcome">
                <div class="grid">
                    <div class="column">
                        <h2 class="h2-welcome"><strong>Welcome To Netmatters</strong></h2>
                        <p>
                            <strong>Netmatters is a leading <a href="#">Bespoke Software</a>
                                , <a href="#">IT Support</a>, and <a href="#">Digital Marketing</a>
                                company based in the East of England with offices in 
                                <a href="#">Cambridge</a>, <a href="#">Wymondham</a>, and 
                                <a href="#">Great Yarmouth</a>.
                            </strong>
                        </p>
                        <p>We aren't tied into contracts with third-party providers, 
                            so you know that our recommendations for your business are 
                            based purely with one benefit in mind: to help improve your 
                            business with the most appropriate solutions.</p>
                        <p>We pride ourselves on being an ethical business and have a 
                            unique business offering and cost model that ensures you get 
                            the most from our relationship in an upfront manner.
                        </p>
                        <div><a href="#" class="btn welcome-read">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a></div>
                    </div>
                    <div class="column">
                        <h2><strong>What Our Clients Think</strong></h2>
                        <div class="icons">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="quote"><strong><em>Great service. Took the reigns and did all the leg work for us. 
                            Ensured we were happy with our website and made all changes 
                            necessary as and when asked to do so.</em></strong></p>
                        <p class="quote-author">Oliver King - SEA Scaffolding</p>
                        <div class="buttons-wrapper">
                            <a href="#" class="btn google-btn">
                                Google Reviews
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="#" class="btn trustpilot-btn">
                                Trustpilot Reviews
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News cards section -->
            <div id="news">
                <div class="news-header">
                    <h2><strong>Latest News</strong></h2>
                    <h3><a href="#">View All<i class="fa-solid fa-arrow-right"></i></a></h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="card-news col-lg-4 col-sm-6 news1">
                            <a class="news-link <?= $result[0]['newsColour'] ?>-card" href="#"><strong><?= $result[0]['newsLink'] ?></strong></a>
                            <img class="card-img" src="<?= $result[0]['newsImage'] ?>" alt="">
                            <a class="card-link" href="#"></a>
                            <div class="card-body">
                                <h3><?= $result[0]['newsHeader'] ?></h3>
                                <p><?= $result[0]['newsText'] ?></p>
                                <a class="btn <?= $result[0]['newsColour'] ?>-card" href="#">Read More</a>
                                <div class="newscard-footer">
                                    <img id="netm-icon" src="img\news\netmatters-ltd-VXAv.webp" alt="">
                                    <!-- <p> -->
                                        <strong>Posted by Netmatters</strong>
                                        <br>
                                        "24th August 2022"
                                    <!-- </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-news col-lg-4 col-sm-6 news2">
                            <a class="news-link <?= $result[1]['newsColour'] ?>-card" href="#"><strong><?= $result[1]['newsLink'] ?></strong></a>
                            <img class="card-img" src="<?= $result[1]['newsImage'] ?>" alt="">
                            <a class="card-link" href="#"></a>
                            <div class="card-body">
                                <h3><?= $result[1]['newsHeader'] ?></h3>
                                <p><?= $result[1]['newsText'] ?></p>
                                <a class="btn <?= $result[1]['newsColour'] ?>-card" href="#">Read More</a>
                                <div class="newscard-footer">
                                    <img id="netm-icon" src="img\news\netmatters-ltd-VXAv.webp" alt="Netmatters">
                                    <strong>Posted by Netmatters</strong>
                                    <br>
                                    "24th August 2022"
                                </div>
                            </div>
                        </div>
                        <div class="card-news col-lg-4 col-sm-6 card3">
                            <a class="news-link <?= $result[2]['newsColour'] ?>-card" href="#"><strong><?= $result[2]['newsLink'] ?></strong></a>
                            <img class="card-img" src="<?= $result[2]['newsImage'] ?>" alt="">
                            <a class="card-link" href="#"></a>
                            <div class="card-body">
                                <h3><?= $result[2]['newsHeader'] ?></h3>
                                <p><?= $result[2]['newsText'] ?></p>
                                <a class="btn <?= $result[2]['newsColour'] ?>-card" href="#">Read More</a>
                                <div class="newscard-footer">
                                    <img id="netm-icon" src="img\news\netmatters-ltd-VXAv.webp" alt="Netmatters">
                                    <strong>Posted by Netmatters</strong>
                                    <br>
                                    "24th August 2022"
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Associates section -->
            <div id="associates">
                <div class="associate">
                    <div class="desc-popup"></div>
                    <a href="#">
                        <img src="img\associates\home-gZQR.png" alt="Busseys">
                    </a>
                </div>
                <div class="associate">
                    <div class="desc-popup"></div>
                    <a href="#">
                        <img src="img\associates\home-MjHw.png" alt="Busseys">
                    </a>
                </div>
                <div class="associate">
                    <div class="desc-popup"></div>
                    <a href="#">
                        <img src="img\associates\home-ukEL.png" alt="Busseys">
                    </a>
                </div>
                <div class="associate">
                    <div class="desc-popup"></div>
                    <a href="#">
                        <img src="img\associates\home-kGn4.png" alt="Busseys">
                    </a>
                </div>
            </div>
        
    <!-- Footer -->
    <?php include("inc/footer.php") ?>
    <!-- </div> -->
<!-- </div> -->
 
<?php include("inc/scripts.php") ?>

<?php include("inc/bottom_foot.php") ?>