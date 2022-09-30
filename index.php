<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>portfolio Mohammed Ali</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!----CSS link-nav----->
    <link rel="stylesheet" href="navbar//navbar.css">
    <!----CSS link-style----->
    <link rel="stylesheet" href="css/style.css">
    <!----CSS link-switcher----->
    <link rel="stylesheet" href="css/style-switcher.css">
    <!----CSS responsive----->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@internetarchive/icon-email@1.3.2/email.svg">
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <!----dewault color skin----->
    <link rel="stylesheet" href="skin/color.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <?php
        require_once './navbar/navbar.php';
        $nav = new Pagenav();
    ?>
    <script src="./js//main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="dark">
    <?php
        $nav->getNavbarHead("");
    ?>
    <!-- Home section start -->
    <section class="home-section section active" id="home">
        <!-- Home section start -->

        <div class="container" id="Hierme">
            <div class="row full-screen align-items-center">
                <div class="home-text">
                    <p>Hello</p>
                    <h2>I'm Mohammed</h2>
                    <h1>Web Developer</h1>
                    <a href="#aboutme" class="link-item btn-1 outer-shadow hover-in-shadow">More About Me</a>
                </div>
                <div class="home-img">
                    <div class="img-box inner-shadow">
                        <img src="./img/My-pic.png" class="outer-shadow" alt="profile-pic">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home section end -->
    <!-- about section start -->
    <section class="about-section section" id="aboutme">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-headig="main info">About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <div class="img-box inner-shadow" >
                        <img src="./img//My-pic.png" class="outer-shadow" alt="profile-pic">
                    </div>
                    <!-- social links start -->
                    <div class="social-links">
                        <a href="https://www.facebook.com/MohammedAlii996" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/mohammedali96/" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/MohammedAlii96" class="outer-shadow hover-in-shadow"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/mohammed-ali-110bb7177/"
                            class="outer-shadow hover-in-shadow"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <!-- Social Link end-->
                </div>
                <div class="about-info" >
                    <p><span>HI! My name is Mohammed Ali.I am a Web Developer And web Disaner</span>
                        I have a lot of experience with HTML and CSS, I also have experience with Javascript, PHP and
                        Database,
                        that's because I used to be on a software course and software course at codecademy.com
                        I study ICT-Software developer (level 4) at the ROC of Amsterdam in southeast. I am in the 1st
                        grade.</p>
                    <p>After level 4, I want to continue my studies towards computer science at HBO.
                        I currently work at the Media Markt in the Smartbare department.</p>
                    </p>
                    <a href="CV.pdf" class="btn-1 outer-shadow hover-in-shadow">Download CV</a>
                    <a href="#contact" class="link-item btn-1 outer-shadow hover-in-shadow">Hier Me</a>
                </div>
            </div>
        </div>
        <!-- about tabs start-->
        <div class="row">
            <div class="about-tabs">
                <span class="tab-item outer-shadow active" data-target=".skills">skills</span>
                <span class="tab-item" data-target=".education">education</span>
                <span class="tab-item" data-target=".courses">courses</span>
            </div>
        </div>
        <!-- about tabs end-->
        <!-- skills start-->
        <div class="row">
            <div class="skills tab-content active">
                <div class="row">
                    <!-- skill item start -->
                    <div class="skill-item">
                        <p>HTML</p>
                        <div class="progress inner-shadow">
                            <div class="progress-bar" style="width:calc(75% - 14px)">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <!-- skill item end -->
                    <!-- skill item start -->
                    <div class="skill-item">
                        <p>Javascript</p>
                        <div class="progress inner-shadow">
                            <div class="progress-bar15" style="width:calc(15% - -14px)">
                                <span>15%</span>
                            </div>
                        </div>
                    </div>
                    <!--skills item end-->
                    <!-- skill item start -->
                    <div class="skill-item">
                        <p>CSS</p>
                        <div class="progress inner-shadow">
                            <div class="progress-bar" style="width:calc(75% - 14px)">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <!-- skill item end -->
                    <!-- skill item start -->
                    <div class="skill-item">
                        <p>PHP</p>
                        <div class="progress inner-shadow">
                            <div class="progress-bar15" style="width:calc(15% - -20px)">
                                <span>15%</span>
                            </div>
                        </div>
                    </div>
                    <!-- skill item end -->
                    <!-- skill item start -->
                    <div class="skill-item">
                        <p>Database</p>
                        <div class="progress inner-shadow">
                            <div class="progress-bar50" style="width:calc(50% - -20px)">
                                <span>50%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- skill item end -->
        <!-- education start -->
        <div class="row">
            <div class="education tab-content">
                <div class="row">
                    <div class="timeline">
                        <div class="row">
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-graduation-cap icon"></i>
                                    <span>2021-heden </span>
                                    <h3>Software developer</h3>
                                    <h4>ROC van Amsterdam, zuidoost</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-graduation-cap icon"></i>
                                    <span>2020-2021</span>
                                    <h3>ICT Support</h3>
                                    <h4>ROC van Amsterdam, Hilversum</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-graduation-cap icon"></i>
                                    <span>2018-2019</span>
                                    <h3>Verkoop-Retail</h3>
                                    <h4>Horizon collega, Hoorn</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-graduation-cap icon"></i>
                                    <span>2011-2012</span>
                                    <h3>ICT Informatica</h3>
                                    <h4>Syrië, Aleppo</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- education end -->
        <!-- COURSES start -->
        <div class="row">
            <div class="courses tab-content">
                <div class="row">
                    <div class="timeline">
                        <div class="row">
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>Sep. 2021 </span>
                                    <h3>PHP Beginner</h3>
                                    <h4>Bit Academy</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>nov. 2021 </span>
                                    <h3>JavaScript Intro</h3>
                                    <h4>Bit Academy</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>nov. 2021</span>
                                    <h3>HTML/CSS Beginner</h3>
                                    <h4>Bit Academy</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>nov. 2021</span>
                                    <h3>HTML/CSS Advanced</h3>
                                    <h4>Bit Academy</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>nov. 2021</span>
                                    <h3>Databases Beginner</h3>
                                    <h4>Bit Academy</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>dec. 2021</span>
                                    <h3>PHP Novice</h3>
                                    <h4>Bit Academy</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>dec. 2021</span>
                                    <h3>HTML/CSS</h3>
                                    <h4>Codeacademy</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>2011 - 2012</span>
                                    <h3>ICT Informatic</h3>
                                    <h4>Syrië, Aleppo</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fa fa-certificate icon"></i>
                                    <span>2010-2010</span>
                                    <h3>Hardware</h3>
                                    <h4>Syrië, Aleppo</h4>
                                </div>
                            </div>
                            <!--timeline item end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COURSES end -->
        </div>
        <!-- Skill  end-->
        </div>
    </section>
    <!-- about section end -->
    <!-- services section start-->
    <section class="service-section section" id="service">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-headig="Services">What i do</h2>
                </div>
            </div>
            <div class="row">
                <!-- service item start-->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <h3>Responsive design</h3>
                        <p>streeft naar een optimale webervaring voor een breed scala aan apparaten
                            (van desktop computerschermen tot mobiele telefoons).Het ontwerp van een responsive
                            website
                            schaalt mee met de afmetingen van een scherm,
                        </p>
                    </div>
                </div>
                <!-- service item end-->
                <!-- service item start-->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h3>Web design</h3>
                        <p> creating the design and layout of a website or web pages. It and can mean working on
                            a
                            brand
                            new
                            website or updating an already existing site.
                        </p>
                    </div>
                </div>
                <!-- service item end-->
                <!-- service item start-->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3>Graphic design</h3>
                        <p>create everything from posters and billboards to packaging, logos and marketing
                            materials.
                        </p>
                    </div>
                </div>
                <!-- service item end-->
                <!-- service item start-->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fa fa-code"></i>
                        </div>
                        <h3>clean code</h3>
                        <p>i'm writing code so that other can understand what this code is exampel i Use
                            descriptive
                            names.
                        </p>
                    </div>
                </div>
                <!-- service item end-->
            </div>
        </div>
    </section>
    <!-- services section end-->
    <!-- contact section start -->
    <div class="container" id="contact">
        <div class="row">
            <div class="section-title">
                <h2 data-headig="contact">Get In Touch</h2>
            </div>
        </div>
    </div>
    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="img/img-01.png" alt="IMG">
            </div>
            <form class="contact1-form validate-form">
                <div class="wrap-input1 validate-input" class="btn-1 outer-shadow hover-in-shadow"
                    data-validate="Name is required">
                    <input class="input1" type="text" name="name" placeholder="Name">
                    <span class="shadow-input1"></span>
                </div>
                <div class="wrap-input1 validate-input" class="btn-1 outer-shadow hover-in-shadow"
                    data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="email" placeholder="Email">
                    <span class="shadow-input1"></span>
                </div>
                <div class="wrap-input1 validate-input" class="btn-1 outer-shadow hover-in-shadow"
                    data-validate="Subject is required">
                    <input class="input1" type="text" name="subject" placeholder="Subject">
                    <span class="shadow-input1"></span>
                </div>
                <div class="wrap-input1 validate-input" class="btn-1 outer-shadow hover-in-shadow"
                    data-validate="Message is required">
                    <textarea class="input1" name="message" placeholder="Message"></textarea>
                    <span class="shadow-input1"></span>
                </div>
                <div class="row">
                    <div class="submit-btn">
                        <button type="submit" value="Submit" class="btn-1 outer-shadow hover-in-shadow">Send
                            Message</button>
                    </div>
                </div>
            </form>
            </form>
        </div>
    </div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <!--===============================================================================================-->
    <script src="js/navbar.js"></script>
    <script src="js/main.js"></script>

</body>

</html>