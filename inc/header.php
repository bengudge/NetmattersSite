<!-- Sidebar is a work in progress   -->
<!-- <nav id="sidebar" class="active">
    <div class="sidebar-header">
        <h3>jQueryScript</h3>
    </div>
    <ul class="lisst-unstyled components">
        <p>My Nav</p>
        <li class="active">
            <a href="#foodSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">DropDown MENU</a>
            <ul class="collapse lisst-unstyled" id="foodSubmenu">
                <li><a href="#">jQuery</a></li>
                <li><a href="#">Script</a></li>
                <li><a href="#">Net</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
    </ul>
</nav> -->

<div id="content">
<!-- <a href="https://www.jqueryscript.net/tags.php?/Navigation/">Navigation</a> Toggler -->
    <!-- <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-dark">
                <i class="fas fa-bars"></i>
        </button>
        </div>
    </nav> -->

    <div class="sticky-smart-header">
        <header>
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
                
                <button type="button" id="sidebarCollapse" class="btn burger-menu openbtn" onclick="openNav()">
                    <i class="fas fa-bars"></i>
                </button>
                <!-- <a class="btn-sidebar" href="#" target="_blank"></a> -->
            </div>
        </header>

        <!-- Navigation section with dropdown menus -->
        <div id="nav-wrapper">
            <nav>
                <ul>
                    <li id="nav-software">
                        <a href="#">
                            <img class="bs-icon" src="img/icons/grid.ico">
                            <small>Besboke</small>
                            Software
                        </a>
                    </li>
                    <li id="nav-support">
                        <a href="#">
                            <i class="fa-solid fa-desktop is-icon"></i>
                            <small>IT</small>
                            Support
                        </a>
                    </li>
                    <li id="nav-marketing">
                        <a href="#">
                            <i class="fa-solid fa-chart-simple dm-icon"></i>
                            <small>Digital</small>
                            Marketing
                        </a>
                    </li>
                    <li id="nav-telecoms">
                        <a href="#">
                            <i class="fa-solid fa-phone ts-icon"></i>
                            <small>Telecoms</small>
                            Services
                        </a>
                    </li>
                    <li id="nav-web-design">
                        <a href="#">
                            <i class="fa-solid fa-code wd-icon"></i>
                            <small>Web</small>
                            Design
                        </a>
                    </li>
                    <li id="nav-security">
                        <a href="#">
                            <i class="fa-solid fa-shield-halved cs-icon"></i>
                            <small>Cyber</small>
                            Security
                        </a>
                    </li>
                    <li id="nav-developer">
                        <a href="#">
                            <i class="fa-solid fa-graduation-cap dc-icon"></i>
                            <small>Developer</small>
                            Course
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>