<!DOCTYPE html>
<html>

<head>
    <title> <?php echo get_bloginfo("name"); ?> </title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css? <?php echo wp_date('Y-m-d-H-i-s'); ?>" />
</head>

<body id="body-top">

    <?php get_header(); ?>

    <div class="content">
        <section class="hero-section">
            <div class="hero-container">
                <div class="hero-picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subhero_home.jpg" alt="hero-image">
                    <div class="hero-picture-background"></div>
                </div>
                <div class="hero-text-area">
                    <div class="hero-text-container">
                        <strong class="hero-context">
                            Providing businesses like yours with the funding you need, when you need it.<span class="hero-super">
                                <a href="#sitewide-disclosure">1</a>
                            </span>
                        </strong>
                        <div class="hero-button">
                            <a>Request a Free Quote</a>
                        </div>
                        <div class="hero-question">QUESTIONS?</div>
                        <div class="hero-phone">CALL <a>855-326-3564</a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rating-section">
            <div class="rating-title">
                One of the most important considerations for your business lending needs is choosing a partner you can trust.
            </div>
            <div class="rating-context">
                At Mulligan Funding, aside from providing fast access to business funding*, we strive to provide a customer service experience that is seamless, transparent and allows you to feel confident choosing us to fulfill your capital needs.
            </div>
            <div class="rating-picture-container">
                <a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blue-seal-bbb.png" alt="BBB-seal">
                </a>
                <a class="trustpilot-rating">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trustpilot.png" alt="trustpilot-rating">
                </a>
            </div>
        </section>

        <section class="partner-section">
            <b class="partner-title">
                We're here to be a long-term partner for your business.
            </b>
            <div class="partner-subtitle">
                As a partner, we are here to guide you and your business towards growth and success. The first step is determining which funding option is best for your business.
            </div>
            <div class="partner-content-container">
                <div class="partner-button-grid">
                    <button class="first-button selected" onclick="firstButtonClick()">
                        <span class="button-no">01.</span> Working Capital Loans
                    </button>
                    <button class="second-button" onclick="secondButtonClick()">
                        <span class="button-no">02.</span> Business Term Loan
                    </button>
                </div>
                <div class="partner-slider-container">
                    <div class="first-slide">
                        <div class="slide-text">
                            <div class="slider-number">
                                01
                            </div>
                            <div class="slider-title">
                                Working Capital Loans
                            </div>
                            <div class="slider-context">
                                Working Capital Loans are Mulligan Funding's most popular financial products. Get the funds you need in as soon as the day after approval and complete the program in a matter of months*. Precise terms are customized to your business situation.
                                <br>
                                <br>
                                Read on for information on our terms, requirements and approval process.
                            </div>
                            <a>
                                <div class="slider-link">
                                    Learn More ➔
                                </div>
                            </a>
                        </div>
                        <div class="slider-picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pic_1.jpeg" alt="slider-picture">
                        </div>
                    </div>

                    <div class="second-slide second-slide-hidden">
                        <div class="slide-text">
                            <div class="slider-number">
                                02
                            </div>
                            <div class="slider-title">
                                Business Term Loan
                            </div>
                            <div class="slider-context">
                                Larger dollar amounts, or in cases where your business situation requires more time to work through the program, are often a fit for a Business Term Loan package.
                                <br>
                                <br>
                                Read on for information on our terms, requirements and approval process.
                            </div>
                            <a>
                                <div class="slider-link">
                                    Learn More ➔
                                </div>
                            </a>
                        </div>
                        <div class="slider-picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider_pic_2.jpg" alt="slider-picture">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="pros-section">
            <div class="pros-picture">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MCA_Open.jpg" alt="picture">
            </div>
            <div class="pros-text-container">
                <h1 class="pros-title">
                    Why fund through Mulligan Funding?
                </h1>
                <div class="pros-context">
                    Mulligan Funding is a nationwide provider of business funding in all 50 states, plus D.C.
                </div>
                <div class="pros-grid">
                    <div class="pros-subgrid">
                        <div class="pros-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Fast-Approval.svg" alt="icon ">
                        </div>
                        <div class="pros-text">
                            <b>Fast Approval</b> in as soon as a few hours*
                        </div>
                    </div>
                    <div class="pros-subgrid">
                        <div class="pros-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Average-Lending.svg" alt="icon ">
                        </div>
                        <div class="pros-text">
                            <b>Average Lending</b> of 6%-12% of your current revenue
                        </div>
                    </div>
                    <div class="pros-subgrid">
                        <div class="pros-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Funding.svg" alt="icon ">
                        </div>
                        <div class="pros-text">
                            <b>Funding</b> as soon as the business day after approval*
                        </div>
                    </div>
                    <div class="pros-subgrid">
                        <div class="pros-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Terms.svg" alt="icon ">
                        </div>
                        <div class="pros-text">
                            <b>Terms</b> from 3 to 24 months
                        </div>
                    </div>
                    <div class="pros-subgrid">
                        <div class="pros-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Loan-Amount.svg" alt="icon ">
                        </div>
                        <div class="pros-text">
                            <b>Loan amount</b> up to $2,000,000
                        </div>
                    </div>
                    <div class="pros-subgrid">
                        <div class="pros-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seamless.svg" alt="icon ">
                        </div>
                        <div class="pros-text">
                            <b>Seamless</b> NEW: With our <a class="pros-link">online loan checkout</a>, you can now access, review, and finalize your loan information in one place online.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="qualify-section">
            <div class="qualify-container">
                <div class="qualify-title">
                    How do I qualify for a business loan through Mulligan Funding?
                </div>
                <div class="qualify-grid">
                    <div class="special-qualify-grid-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Annual-Revenue.svg" alt="icon ">
                        <div class="qualify-grid-item-title">
                            Annual Revenue
                        </div>
                        <div class="qualify-grid-item-context">
                            At least $120,000 in annualized business revenue *
                        </div>
                        <div class="qualify-grid-item-footnote">
                            * Over the previous 12 months
                        </div>
                    </div>
                    <div class="qualify-grid-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Time-in-Business.svg" alt="icon ">
                        <div class="qualify-grid-item-title">
                            Time in Business
                        </div>
                        <div class="qualify-grid-item-context">
                            At least 6 months
                        </div>
                    </div>
                    <div class="qualify-grid-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Financial-History.svg" alt="icon ">
                        <div class="qualify-grid-item-title">
                            Financial History
                        </div>
                        <div class="qualify-grid-item-context">
                            No more than one daily debit loan, and free from open bankruptcies
                        </div>
                    </div>
                </div>
                <div class="qualify-footer">
                    <div class="qualify-footer-text">
                        If you fit these qualifications, our loan advisors would love to speak with you to answer any questions you have about your business loan options.
                    </div>
                    <div class="qualify-footer-quote">
                        <a class="qualify-button">
                            Request Free Quote
                        </a>
                        <div class="qualify-phone">
                            Or call us at <a class="qualify-phone-link">855-326-3564</a> to speak with a loan advisor.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="contact-left-wrap">
                <div class="contact-left-container">
                    <b class="contact-title">
                        Additional
                        <br>
                        Questions?
                    </b>
                    <div class="contact-context-warp">
                        <div class="contact-context">
                            For more information, contact one of our friendly and knowledgeable financing experts today. Give us a call today at:
                        </div>
                        <b class="contact-phone">
                            855-326-3564
                        </b>
                    </div>
                    <span class="vertical-text">CALL US NOW!</span>
                    <div class="small_orange_m">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/small_orange_m.png" alt="icon ">
                    </div>
                    <div class="middle_blue_m">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/middle_blue_m.png" alt="icon ">
                    </div>
                    <div class="big_white_m">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/big_white_m.png" alt="icon ">
                    </div>
                </div>
            </div>

            <div class="contact-right-wrap">
                <div class="contact-right-container">
                    <b class="contact-form-title">
                        Contact Us
                    </b>
                    <div class="contact-form-context">
                        If you’d like <b>us to call you</b>,
                        <br>
                        just complete this short form
                    </div>
                    <div class="contact-form-grid">
                        <div class="contact-form-item">
                            <input type="text" placeholder="First Name*" size="35">
                        </div>
                        <div class="contact-form-item">
                            <input type="text" placeholder="Last Name*" size="35">
                        </div>
                        <div class="contact-form-item">
                            <input type="text" placeholder="Company Name*" size="35">
                        </div>
                        <div class="contact-form-item">
                            <input type="text" placeholder="Email Address*" size="35">
                        </div>
                        <div class="contact-form-item">
                            <input type="text" placeholder="Phone*" size="35">
                        </div>
                    </div>
                    <div class="contact-policy">
                        <div>
                            By clicking "Submit" you agree to our
                        </div>
                        <a class="contact-link">privacy policy</a>.

                    </div>
                    <div class="contact-form-button">
                        <input type="submit" value="SUBMIT">
                    </div>
                </div>
            </div>
        </section>

    </div>


    <?php get_footer(); ?>


    <script>
        const firstButton = document.querySelector(".first-button");
        const secondButton = document.querySelector(".second-button");
        const firstSlide = document.querySelector(".first-slide");
        const secondSlide = document.querySelector(".second-slide");

        const firstButtonClick = () => {
            firstButton.classList.add("selected");
            secondButton.classList.remove("selected");
            firstSlide.classList.remove("first-slide-hidden");
            secondSlide.classList.add("second-slide-hidden");
        }

        const secondButtonClick = () => {
            firstButton.classList.remove("selected");
            secondButton.classList.add("selected");
            firstSlide.classList.add("first-slide-hidden");
            secondSlide.classList.remove("second-slide-hidden");
        }
    </script>
</body>

</html>