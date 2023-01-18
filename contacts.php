<?php include("inc/connect.php") ?>
<?php include("inc/post.php") ?>
<?php include("inc/top_head.php") ?>
</head>
<body>
    <?php include("inc/sidebar.php") ?>

    <div id="main">
        <?php include("inc/header.php") ?>


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
