<?php
    echo '<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <a href="index.php" class="logo">
                    <img src="assets/images/logo-sm-light.png" alt="" class="logo-small">
                    <img src="assets/images/logo-light.png" alt="" class="logo-large">
                </a>
            </div>

            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">

                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>

            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="index.php"><i class="mdi mdi-home"></i>Dashboard</a>
                    </li>

                    <li class="has-submenu active">
                        <a href="index.php"><i class="mdi mdi-account-multiple-outline"></i>Referendum Costituzionale</a>
                    </li>

                    <li class="has-submenu">
                        <a href="regionali/index.php"><i class="mdi mdi-table-edit"></i>Elezioni Regionali</a>
                    </li>

                    <li class="has-submenu">
                        <a href="comunali/index.php"><i class="mdi mdi-clipboard-account"></i>Elezioni Comunali</a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>';