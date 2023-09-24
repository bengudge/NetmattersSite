<header class="header-down">
    <!-- Topmost header -->
    <div class="inner">
        <a class="logo" href="index.php">
            <img src="img/logo.webp" alt="Netmatters logo">
        </a>
        <a class="btn support" href="#">
            <i class="fa-solid fa-computer-mouse"></i>
            Support
        </a>
        <a class="btn contact" href="contacts.php">
            <i class="fa-solid fa-paper-plane"></i>
            Contact
        </a>
        <!-- Search form -->
        <div class="search-form-container">
            <form method="GET" action="#" accept-charset="UTF-8" class="search-form">
                <input type="text" class="searchbar" placeholder="Search..." 
                id="search-query" name="words">
                <button type="submit" id="search-submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        
        <button type="button" id="sidebarOpen" class="btn burger-menu openbtn" onclick="openNav()">
            <i class="fas fa-bars"></i>
        </button>
        <button type="button" id="closebtn" class="btn burger-menu closebtn" onclick="closeNav()">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <!-- <a href="javascript:void(0)" id="closebtn" onclick="closeNav()">&times;</a> -->
        <!-- <a class="btn-sidebar" href="#" target="_blank"></a> -->

        <div id="search-form-container-mobile">
            <form method="GET" action="#" accept-charset="UTF-8" class="search-form">
                <input type="text" class="searchbar" placeholder="Search..." 
                id="search-query" name="words">
                <button type="submit" id="search-submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

    </div>
    
    <?php include("inc/navbar.php") ?>
</header>

