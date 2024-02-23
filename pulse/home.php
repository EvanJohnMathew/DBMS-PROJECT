<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PulsePoint Pro</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>


    <!-- header -->
    <header class="header bg-blue">
        <nav class="navbar bg-blue">
            <div class="container flex">
                <a href="home.php" class="navbar-brand">
                    <img src="images/logooo1.png" alt="site logo" style="width: 90px; height: auto;">

                </a>
                <button type="button" class="navbar-show-btn">
                    <img src = "images/ham-menu-icon.png">
                </button>

                <div class="navbar-collapse bg-white">
                    <button type="button" class="navbar-hide-btn">
                        <img src = "images/close-icon.png">
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Departments</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="search-bar">
                        <form>
                            <div class="search-bar-box flex">
                                <span class="search-icon flex">
                                    <img src = "images/search-icon-dark.png">
                                </span>
                                <input type="search" class="search-control" placeholder="Search here">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="header-inner text-white text-center">
            <div class="container grid">
                <div class="header-inner-left">
                    <h1>your most trusted<br> <span>health partner</span></h1>
                    <p class="lead">the best match services for you</p>
                    <p class="text text-md">PulsePointPro.com stands as a beacon of innovation, dedicated to shaping the future of healthcare management, fostering operational excellence, and ultimately, improving patient outcomes.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-white">Learn More</a>
                        <a href="index.php" class="btn btn-light-blue">Sign In</a>
                    </div>
                </div>
                <div class="header-inner-right">
                    <img src="images/header.png">
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <main>
        <!-- about section -->
        <section id="about" class="about py">
            <div class="about-inner">
                <div class="container grid">
                    <div class="about-left text-center">
                        <div class="section-head">
                            <h2>About Us</h2>
                            <div class="border-line"></div>
                        </div>
                        <p class="text text-lg">PulsePointPro.com is a dynamic platform dedicated to revolutionizing healthcare management. At the forefront of innovation, it serves as a comprehensive hub catering to the intricate needs of modern healthcare facilities. With
                            a focus on efficiency, precision, and informed decision-making, PulsePointPro.com offers a suite of tools, insights, and resources tailored for healthcare administrators, enabling them to streamline operations, optimize resource
                            allocation, and enhance patient care.</p>
                        <a href="#" class="btn btn-white">Learn More</a>
                    </div>
                    <div class="about-right flex">
                        <div class="img">
                            <img src="images/about-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- banner one -->
        <section id="banner-one" class="banner-one text-center">
            <div class="container text-white">
                <blockquote class="lead"><i class="fas fa-quote-left"></i> When you are young and healthy, it never occurs to you that in a single second your whole life could change. <i class="fas fa-quote-right"></i></blockquote>
                <small class="text text-sm">- Anonim Nano</small>
            </div>
        </section>
        <!-- end of banner one -->

        <!-- services section -->
        <section id="services" class="services py">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="lead">The Best Doctor gives the least medicines</h2>
                    <p class="text text-lg">A perfect way to show your hospital services</p>
                    <div class="line-art flex">
                        <div></div>
                        <img src="images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class="services-inner text-center grid">
                    <article class="service-item">
                        <div class="icon">
                            <img src="images/service-icon-1.png">
                        </div>
                        <h3>Cardio Monitoring</h3>
                        <p class="text text-sm">Cardio Monitoring within PulsePoint Pro offers a range of features tailored to support healthcare providers in effectively managing and monitoring cardiovascular health. This includes real-time tracking of vital signs such as heart
                            rate, blood pressure, and oxygen saturation levels, enabling clinicians to promptly identify any deviations from baseline parameters.</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="images/service-icon-2.png">
                        </div>
                        <h3>Medical Treatment</h3>
                        <p class="text text-sm">Within PulsePoint Pro's Medical Treatment module, healthcare providers gain access to a centralized platform for efficiently managing all aspects of patient treatment plans. This includes the collaborative development of personalized
                            treatment plans tailored to individual patient needs, incorporating medical history, diagnosis, and specific healthcare requirements.</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="images/service-icon-3.png">
                        </div>
                        <h3>Emergency Help</h3>
                        <p class="text text-sm">PulsePoint Pro Healthcare Management integrates an Emergency Help feature designed to optimize emergency response processes and elevate patient outcomes during critical situations. This functionality ensures rapid alerting of emergency
                            incidents, enabling healthcare providers to promptly notify designated response teams and emergency services. Such swift notifications minimize response times, ultimately enhancing patient survival rates in critical scenarios.
                        </p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="images/service-icon-4.png">
                        </div>
                        <h3>First Aid</h3>
                        <p class="text text-sm">The First Aid functionality within PulsePoint Pro serves as a valuable resource for guiding users through essential life-saving techniques and procedures. It provides step-by-step instructions and visual demonstrations on how to
                            respond effectively to a wide range of medical emergencies, including cardiac arrest, choking, severe bleeding, and other critical incidents.</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- banner two section -->
        <section id="banner-two" class="banner-two text-center">
            <div class="container grid">
                <div class="banner-two-left">
                    <img src="images/macbookcvr1.png">
                </div>
                <div class="banner-two-right">
                    <p class="lead text-white">When you are young and healthy, it never occurs to you that in a single second your whole life could change.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-white">Learn More</a>
                        <a href="index.php" class="btn btn-light-blue">Sign In</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of banner two section -->

        <!-- doctors section -->
        <section id="doc-panel" class="doc-panel py">
            <div class="container">
                <div class="section-head">
                    <h2>Our Doctor Panel</h2>
                </div>

                <div class="doc-panel-inner grid">
                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="images/doc-1.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">samuel goe</p>
                                <p class="text-lg">Medicine</p>
                            </div>
                        </div>
                    </div>

                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="images/doc-2.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">elizabeth ira</p>
                                <p class="text-lg">Cardiology</p>
                            </div>
                        </div>
                    </div>

                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="images/doc-3.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">tanya collins</p>
                                <p class="text-lg">Orthodontist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of doctors section -->

        <!-- package services section -->
        <section id="package-service" class="package-service py text-center">
            <div class="container">
                <div class="package-service-head text-white">
                    <h2>Package Service</h2>
                    <p class="text text-lg">Best service package for you</p>
                </div>
                <div class="package-service-inner grid">
                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <h3>Regular Case</h3>
                        <p class="text text-sm">The Regular Case feature within PulsePoint Pro serves as a central hub for healthcare providers to document, track, and manage routine patient cases across various specialties and healthcare settings. This feature encompasses a
                            wide range of clinical scenarios, including routine check-ups, follow-up appointments, preventive screenings, and minor medical procedures.</p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>

                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <i class="fas fa-calendar-alt fa-2x"></i>
                        </div>
                        <h3>Serious Case</h3>
                        <p class="text text-sm">The Serious Case feature within PulsePoint Pro serves as a critical component for healthcare providers to address high-acuity patient encounters and complex medical situations. This feature encompasses a wide spectrum of urgent
                            and emergent conditions, including cardiac arrest, trauma, acute respiratory distress, and other life-threatening emergencies.</p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>

                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <i class="fas fa-comments fa-2x"></i>
                        </div>
                        <h3>Emergency Case</h3>
                        <p class="text text-sm">The Emergency Case functionality within PulsePoint Pro serves as a pivotal tool for healthcare providers to address urgent and life-threatening situations effectively. This feature encompasses a wide range of medical emergencies,
                            including cardiac arrest, stroke, severe trauma, respiratory distress, and other acute conditions requiring immediate intervention.</p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of package services section -->

        <!-- posts section -->
        <section id="posts" class="posts py">
            <div class="container">
                <div class="section-head">
                    <h2>Latest Post</h2>
                </div>
                <div class="posts-inner grid">
                    <article class="post-item bg-white">
                        <div class="img">
                            <img src="images/post-1.jpg">
                        </div>
                        <div class="content">
                            <h4>Inspiring stories of person and family centered care during a global pandemic.</h4>
                            <p class="text text-sm">Within its digital corridors, stories of unwavering dedication and person-centered care unfold, showcasing the remarkable resilience of healthcare providers and the transformative impact of technology.</p>
                            <p class="text text-sm">In the dynamic realm of healthcare management, PulsePoint Pro emerges as the beacon of hope and innovation amidst a global pandemic.</p>
                            <div class="info flex">
                                <small class="text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class="text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class="post-item bg-white">
                        <div class="img">
                            <img src="images/post-2.jpg">
                        </div>
                        <div class="content">
                            <h4>A Tale of Resilience: Overcoming Adversity with PulsePoint Pro.</h4>
                            <p class="text text-sm">In this captivating narrative, delve into the inspiring journey of Sarah, a young athlete whose life takes an unexpected turn when she's diagnosed with a rare neurological disorder.</p>
                            <p class="text text-sm">Despite the initial shock and uncertainty, Sarah finds hope and strength in the unwavering support of her medical team, who harness the power of PulsePoint Pro to craft a personalized treatment plan tailored to her unique needs.</p>
                            <div class="info flex">
                                <small class="text text-sm"><i class = "fas fa-clock"></i> June 23, 2023</small>
                                <small class="text text-sm"><i class = "fas fa-comment"></i> 8 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class="post-item bg-white">
                        <div class="img">
                            <img src="images/post-3.jpg">
                        </div>
                        <div class="content">
                            <h4>The Miracle of Connectivity: Transforming Pediatric Care with PulsePoint Pro.</h4>
                            <p class="text text-sm">Step into the world of pediatric medicine and witness the remarkable journey of Emily, a spirited young girl battling a complex congenital heart condition.</p>
                            <p class="text text-sm">As Emily undergoes a series of intricate surgeries and intensive treatments, her medical team relies on the advanced capabilities of PulsePoint Pro to orchestrate her care with precision and compassion.</p>
                            <div class="info flex">
                                <small class="text text-sm"><i class = "fas fa-clock"></i> January 15, 2022</small>
                                <small class="text text-sm"><i class = "fas fa-comment"></i> 15 comments</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of posts section -->

        <!-- contact section -->
        <section id="contact" class="contact py">
            <div class="container grid">
                <div class="contact-left">
                    <img src="images/dococ.png">
                </div>
                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead">Contact Us</h3>
                        <p class="text text-md">For more information, Please Contact us through the following</p>
                    </div>
                    <form>
                        <div class="form-element">
                            <input type="text" name="name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-element">
                            <input type="email" mane="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="form-element">
                            <<input type="text" rows="5" name="messages" placeholder="Your Message" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="message" class="btn btn-white btn-submit">
                            <i class = "fas fa-arrow-right"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
    </main>

    <!-- footer  -->
    <footer id="footer" class="footer text-center">
        <div class="container">
            <div class="footer-inner text-white py grid">
                <div class="footer-item">
                    <h3 class="footer-head">about us</h3>
                    <div class="icon">
                        <img src="images/logooo1.png">
                    </div>
                    <p class="text text-md">PulsePoint Pro is a comprehensive website that offers valuable resources and information related to heart health, including articles, tips, and tools for managing cardiovascular wellness. It provides users with up-to-date information
                        on various aspects of heart health, such as exercise, nutrition, stress management, and medical treatments. </p>
                    <address>
                        PulsePointPro LTD<br>
                        Bengaluru, Karnataka<br>
                        Koramangala, 560029<br>
                        INDIA
                    </address>
                </div>

                <div class="footer-item">
                    <h3 class="footer-head">tags</h3>
                    <ul class="tags-list flex">
                        <li>medical care</li>
                        <li>emergency</li>
                        <li>therapy</li>
                        <li>surgery</li>
                        <li>medication</li>
                        <li>nurse</li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h3 class="footer-head">Quick Links</h3>
                    <ul>
                        <li><a href="#" class="text-white">Our Services</a></li>
                        <li><a href="#" class="text-white">Our Plan</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-white">Appointment Schedule</a></li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h3 class="footer-head">REACH US OUT ON</h3>
                    <p class="text text-md">Make sure to reach PulsePointPro through our verified Phone Number and email.</p>
                    <i class="fas fa-envelope"></i>
                    <span>contactpulsepointpro@gmail.com</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>+91 2496873109</span>
                    </li>
                    </ul>
                </div>
            </div>

            <div class="footer-links">
                <ul class="flex">
                    <li>
                        <a href="#" class="text-white flex"> <i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#" class="text-white flex"> <i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="text-white flex"> <i class="fab fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end of footer  -->


    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>