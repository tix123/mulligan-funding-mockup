<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="header-wrap">
        <div class="header-container">
            <div>
                <a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mf_logo.png" alt="logo">
                </a>
            </div>

            <div class="nav-bar">
                <div class="nav-item">
                    <a>
                        BUSINESS LOANS
                        <span class="down-arrow"> ⌵ </span>
                    </a>
                    <div class="drop-menu">
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1_1.png" alt="icon">
                            </div>
                            Working Capital Loans
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1_2.png" alt="icon">
                            </div>
                            Small Business Term Loans
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1_3.png" alt="icon">
                            </div>
                            Renewal
                        </a>
                    </div>
                </div>

                <div class="nav-item">
                    <a>
                        RESOURCES
                        <span class="down-arrow"> ⌵ </span>
                    </a>
                    <div class="drop-menu">
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2_1.png" alt="icon">
                            </div>
                            FAQ
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2_2.png" alt="icon">
                            </div>
                            Business Ebook
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2_3.png" alt="icon">
                            </div>
                            Blog
                        </a>
                    </div>
                </div>

                <div class="nav-item">
                    <a>
                        COMPANY
                        <span class="down-arrow"> ⌵ </span>
                    </a>
                    <div class="drop-menu">
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_1.png" alt="icon">
                            </div>
                            About Us
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_2.png" alt="icon">
                            </div>
                            Customer Stories
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_3.png" alt="icon">
                            </div>
                            Press
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_4.png" alt="icon">
                            </div>
                            Careers
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_5.png" alt="icon">
                            </div>
                            Contact Us
                        </a>
                    </div>
                </div>

                <div class="nav-item">
                    <a>
                        PARTNERS
                        <span class="down-arrow"> ⌵ </span>
                    </a>
                    <div class="drop-menu">
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4_1.png" alt="icon">
                            </div>
                            ISO
                        </a>
                        <a class="drop-menu-item">
                            <div class="drop-menu-item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4_2.png" alt="icon">
                            </div>
                            Affiliate
                        </a>

                    </div>
                </div>

                <div class="header-phone">
                    <a>
                        855-326-3564
                    </a>
                </div>

                <div class="header-sign-in">
                    <a>
                        SIGN IN
                    </a>
                </div>

                <div class="header-button">
                    <a>REQUEST QUOTE</a>
                </div>

            </div>

            <button class="phone-size-menu-open" onclick="phoneSizeNavBarOpen()">
                MENU
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_icon.svg" alt="icon">
            </button>

            <div class="phone-size-nav-bar">
                <a>
                    <div class="phone-size-header-phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone_icon.svg" alt="icon">
                        855-326-3564
                    </div>
                </a>
                
                <button class="phone-size-menu-close" onclick="phoneSizeNavBarClose()">
                    MENU
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_icon.svg" alt="icon">
                </button>

                <div class="phone-size-header-button">
                    <a>REQUEST QUOTE</a>
                </div>

                <div class="phone-size-header-sign-in">
                    <a>
                        SIGN IN
                    </a>
                </div>

                <button class="phone-size-nav-item business-loan-button" onclick="businessLoanMenuControl()">
                    BUSINESS LOANS
                    <span class="down-arrow"> ⌵ </span>
                </button>
                <div class="phone-size-drop-menu business-loan-menu">
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1_1.png" alt="icon">
                        </div>
                        Working Capital Loans
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1_2.png" alt="icon">
                        </div>
                        Small Business Term Loans
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1_3.png" alt="icon">
                        </div>
                        Renewal
                    </a>
                </div>

                <button class="phone-size-nav-item resources-button" onclick="resourcesMenuControl()">
                    RESOURCES
                    <span class="down-arrow"> ⌵ </span>
                </button>
                <div class="phone-size-drop-menu resources-menu">
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2_1.png" alt="icon">
                        </div>
                        FAQ
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2_2.png" alt="icon">
                        </div>
                        Business Ebook
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2_3.png" alt="icon">
                        </div>
                        Blog
                    </a>
                </div>

                <button class="phone-size-nav-item company-button" onclick="companyMenuControl()">
                    COMPANY
                    <span class="down-arrow"> ⌵ </span>
                </button>
                <div class="phone-size-drop-menu company-menu">
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_1.png" alt="icon">
                        </div>
                        About Us
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_2.png" alt="icon">
                        </div>
                        Customer Stories
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_3.png" alt="icon">
                        </div>
                        Press
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_4.png" alt="icon">
                        </div>
                        Careers
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3_5.png" alt="icon">
                        </div>
                        Contact Us
                    </a>
                </div>


                <button class="phone-size-nav-item partners-button" onclick="partnersMenuControl()">
                    PARTNERS
                    <span class="down-arrow"> ⌵ </span>
                </button>
                <div class="phone-size-drop-menu partners-menu">
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4_1.png" alt="icon">
                        </div>
                        ISO
                    </a>
                    <a class="drop-menu-item">
                        <div class="drop-menu-item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4_2.png" alt="icon">
                        </div>
                        Affiliate
                    </a>

                </div>

            </div>


        </div>
    </div>

    <script>
        // Control phone size menu
        const phoneSizeNavBar = document.querySelector(".phone-size-nav-bar");

        const phoneSizeNavBarOpen = () => {
            phoneSizeNavBar.classList.add("menu-open");
            phoneSizeNavBar.classList.remove("menu-close");
        }

        const phoneSizeNavBarClose = () => {
            phoneSizeNavBar.classList.remove("menu-open");
            phoneSizeNavBar.classList.add("menu-close");
        }

        // Control business loan button
        const businessLoanButton = document.querySelector(".business-loan-button");
        const businessLoanMenu = document.querySelector(".business-loan-menu");

        const businessLoanMenuControl = () => {
            businessLoanButton.classList.toggle("touched");
            businessLoanMenu.classList.toggle("display");
        }

        // Control resources button
        const resourcesButton = document.querySelector(".resources-button");
        const resourcesMenu = document.querySelector(".resources-menu");

        const resourcesMenuControl = () => {
            resourcesButton.classList.toggle("touched");
            resourcesMenu.classList.toggle("display");
        }

        // Control company button
        const companyButton = document.querySelector(".company-button");
        const companyMenu = document.querySelector(".company-menu");

        const companyMenuControl = () => {
            companyButton.classList.toggle("touched");
            companyMenu.classList.toggle("display");
        }

        // Control partners button
        const partnersButton = document.querySelector(".partners-button");
        const partnersMenu = document.querySelector(".partners-menu");

        const partnersMenuControl = () => {
            partnersButton.classList.toggle("touched");
            partnersMenu.classList.toggle("display");
        }
    </script>

</body>

</html>