<?php include("inc/connect.php") ?>
<?php include("inc/post.php") ?>
<?php include("inc/top_head.php") ?>
</head>
<body>
    <?php include("inc/sidebar.php") ?>

    <div id="main">
        <?php include("inc/header.php") ?>

        <div id="offices">
            <div class="offices-header">
                <h2>Our Offices</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="office-card col-lg-4 col-sm-6">
                        <img class="card-img" src="img/offices/cambridge.jpg" alt="Cambridge Office">
                        <a class="card-link" href="#"></a>
                        <div class="card-body">
                            <h3>Cambridge Office</h3>
                            <p>Unit 1.31,<br>
                               St John's Innovation Centre,<br>
                               Cowley Road, Milton,<br>
                               Cambridge,<br>
                               CB4 0WS</p>
                            <a class="office-number" href="#">01223 37 57 72</a>
                            <a class="btn purple-card" href="#">View More</a>
                        </div>
                    </div>
                    <div class="office-card col-lg-4 col-sm-6">
                        <img class="card-img" src="img/offices/wymondham.jpg" alt="Wymondham Office">
                        <a class="card-link" href="#"></a>
                        <div class="card-body">
                            <h3>Wymondham Office</h3>
                            <p>Unit 15,<br>
                               Penfold Drive,<br>
                               Gateway 11 Business Park,<br>
                               Wymondham, Norfolk,<br>
                               NR18 0WZ</p>
                            <a class="office-number" href="#">01603 70 40 20</a>
                            <a class="btn purple-card" href="#">View More</a>
                        </div>
                    </div>
                    <div class="office-card col-lg-4 col-sm-6 card3">
                        <img class="card-img" src="img/offices/yarmouth-2.jpg" alt="Great Yarmouth Office">
                        <a class="card-link" href="#"></a>
                        <div class="card-body">
                            <h3>Great Yarmouth Office</h3>
                            <p>Suite F23,<br>
                               Beacon Innovation Centre,<br>
                               Beacon Park, Gorleston,<br>
                               Great Yarmouth, Norfolk,<br>
                               NR31 7RA</p>
                            <a class="office-number" href="#">01493 60 32 04</a>
                            <a class="btn purple-card" href="#">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="form-container">
            <form method="post" id="contact-form">
                    <div class="input-group">
   
                        <div class="label-input">
                            <label for="name" class="mandatory">Your Name</label>
                            <input type="text" class="form-input" id="name" name="name">
                        </div>

                        <div class="label-input">
                            <label for="company-name">Company Name</label>
                            <input type="text" class="form-input" id="company-name" name="company-name">
                        </div>

                    </div>

                    <div class="input-group">
                        <div class="label-input">
                            <label for="email" class="mandatory">Your Email</label>
                            <input type="email" class="form-input" id="email" name="email">
                        </div>

                        <div class="label-input">
                            <label for="telephone" class="mandatory">Your Telephone Number</label>
                            <input type="text" class="form-input" id="telephone" name="telephone">
                        </div>  

                    </div>

                    <div class="label-input">
                        <label for="subject" class="mandatory">Subject</label>
                        <input type="text" class="form-input" id="message-subject" name="subject">
                    </div>
                    
                <div class="label-input">
                    <label for="message" class="mandatory">Message</label>
                    <textarea  class="form-input" id="message" name="message"></textarea>
                </div>

                <div class="check-wrapper">
                    <input type="checkbox" id="marketing-info" value="marketing-info" 
                    name="signup-form"><label for="marketing-info">Please tick this box 
                        if you wish to receive marketing information from us. Please see 
                        our <a href="#">Privacy Policy</a>  for more information on how we 
                        keep your data safe.</label>
                </div>

                <button class="btn contact-submit" type="submit" name="submit" value="submit">SEND ENQUIRY</button>
            </form>
        </div>
    </div>

<?php include("inc/footer.php") ?>

<?php include("inc/scripts.php") ?>

<?php include("inc/bottom_foot.php") ?>
