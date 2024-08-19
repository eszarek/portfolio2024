<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <link rel="image_src" href="images/icon.png" />
    <title>Erinn Szarek, Developer and Designer!</title>



    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- aos css link -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">



    <!-- custom css file link  -->

    <script src="https://cdn.jsdelivr.net/npm/github-repo-cards@1.0.9/app.js" defer></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/background.css">

</head>



<body>
    <!-- Dynamic Errors -->

    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '
      <div class="message" data-aos="zoom-out">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
        }
    }

    ?>
    <!-- header section starts  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="follow">
            <a href="https://www.linkedin.com/in/erinnszarek/" class="fab fa-linkedin"></a>
            <a href="https://github.com/eszarek" class="fab fa-github"></a>
        </div>

    </header>


    <section class="home" id="home">
        <div id="hex">
            <!-- PARTICLES -->
            <canvas id="particles"></canvas>

            <!-- HEXAGON GRID -->
            <div id="hexagonGrid"></div>

        </div>

        <div class="image" data-aos="fade-right" style="  z-index: 1;">
            <img class="avatar" src="images/Erinn_Szarek.jpg" alt="Erinn Szarek">
        </div>

        <div class="content" style="  z-index: 1;">
            <h3 data-aos="fade-up">Erinn Szarek</h3>
            <span data-aos="fade-up">Developer and Designer</span>
            <p data-aos="fade-up">Full-stack Web and Software Developer with industry experience in
                front-end design motivated by accessibility.</p>
            <a data-aos="fade-up" href="#about" class="btn">about me</a>
        </div>
    </section>
    <!-- about section starts  -->
    <section class="about" id="about">
        <div class="about" id="about">

            <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

            <div class="biography">

                <p data-aos="fade-up">Experienced Web Developer and Digital Project Coordinator with a strong background
                    in full-stack
                    development, front-end design, and project management. Skilled in PHP, Laravel, C#,
                    HTML/CSS/JavaScript,
                    with database experience in SQL, PGSQL, and MariaDB. Proficient in using Linux and Git for effective
                    version control
                    and system management.
                </p>

                <div class="bio">
                    <h3 data-aos="zoom-in"> <span>name : </span> Erinn Szarek </h3>
                    <h3 data-aos="zoom-in"> <span>email : </span> erinnszarek@gmail.com </h3>
                    <h3 data-aos="zoom-in"> <span>address : </span> Raleigh, NC </h3>
                    <h3 data-aos="zoom-in"> <span>phone : </span> (843)333-5797 </h3>
                    <h3 data-aos="zoom-in"> <span>experience : </span> 3 years </h3>
                </div>



                <a href="file/resume.pdf" class="btn" data-aos="fade-up">download resume</a>

            </div>
            <!-- Skill section  -->



        </div>
        <div class="edu-exp" data-aos="fade-up">

            <h1 class="heading" data-aos="fade-up"> <span>Skills</span> </h1>

            <div class="row">

                <div class="box-container">

                    <h3 class="title" data-aos="fade-right">Front End</h3>

                    <div class="box" data-aos="fade-right">

                        <h3>HTML</h3>
                    </div>

                    <div class="box" data-aos="fade-right">

                        <h3> CSS</h3>
                    </div>

                    <div class="box" data-aos="fade-right">

                        <h3>JavaScript</h3>

                    </div>
                    <div class="box" data-aos="fade-right">

                        <h3>Bootstrap</h3>

                    </div>
                    <div class="box" data-aos="fade-left">

                        <h3>Design Software</h3>
                        <p>Adobe Suite, Figma, Mockup</p>

                    </div>

                </div>

                <div class="box-container">

                    <h3 class="title" data-aos="fade-left">Back End</h3>

                    <div class="box" data-aos="fade-left">

                        <h3>C#/.NET</h3>

                    </div>

                    <div class="box" data-aos="fade-left">

                        <h3>PHP</h3>

                    </div>

                    <div class="box" data-aos="fade-left">

                        <h3>Python</h3>

                    </div>

                    <div class="box" data-aos="fade-left">

                        <h3>Java</h3>

                    </div>

                    <div class="box" data-aos="fade-left">

                        <h3>MySQL</h3>

                    </div>

                </div>

            </div>

        </div>


<!-- Education and Experience section -->

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span>Education & Experience</span> </h1>
            <div class="box-container" id="merit">
                <i class="fas fa-external-link"></i> <a data-aos="fade-up" href="https://meritpages.com/Erinnszarek"
                    target="_blank" rel="noopener noreferrer" class="btn">Academic Awards</a>
            </div>
            <div class="row">
                        <!-- Experience skills section -->
                        <div class="column"></div>


                <div class="box-container column">
        <!-- Experience section -->

                    <h3 class="title" data-aos="fade-right">Education</h3>

                    <div class="sleeve-left" data-aos="fade-right">
                        <div class="sleeve-header">
                            <span>( 2021 &#8211 2023 )</span>
                            <h3>B.S. Information Systems and Graphic Design</h3>
                            <h4> Coastal Carolina University</h4>
                        </div>
                        <p>As a graduate of Coastal Carolina University's ABET accredited Bachelor of Science in
                            Information
                            Systems program, I have acquired a solid understanding of the fundamental principles and
                            practical applications of information technology. With a focus on real-world scenarios and
                            hands-on experience, I am well-equipped to excel in a variety of roles in the field of
                            information systems.Consistently achieving Dean's List recognition throughout my academic
                            journey is a testament to my hard work and academic achievement.</p>
                            <span class="insert-left" >
                            <ul>
                                <li>Laravel</li>
                                <li>CSS</li>
                                <li>JQuery</li>
                            </ul>
                        </span>
                        </div>

                    <div class="sleeve-left" data-aos="fade-right">
                        <span>( 2017 &#8211 2019 )</span>
                        <h3> M.S. Applied Clinical Counseling Psychology</h3>
                        <h4> Francis Marion University</h4>
                        <p>My Master's degree in Clinical/Counseling Psychology from
                            Francis Marion University has equipped me with essential soft skills for a programming
                            career,
                            including communication, problem-solving, critical thinking, and cultural sensitivity. These
                            skills make me a valuable asset to any programming team.</p>
                    </div>

                    <div class="sleeve-left" data-aos="fade-right">
                        <span>( 2013 &#8211 2016 )</span>
                        <h3>B.S. Psychology</h3>
                        <p>I am proud to have earned a spot on the Dean's List every semester of my academic career,
                            demonstrating my commitment to academic excellence and dedication to achieving my goals.</p>
                    </div>

                </div>
                <!-- Education -->
                <div class="box-container column">

                    <h3 class="title" data-aos="fade-left">Experience</h3>

                    <div class="sleeve " data-aos="fade-left">
                        <div class="sleeve-header">
                            <h2>Full Stack Engineer</h2>
                            <h3>Xchive Business Intelligence, Inc.</h3>
                            <span>( 2023-2024 )</span>
                        </div>
                        <ul>
                            <li>Spearheaded the development of a Laravel-based provisioning platform for Managed Service
                                Providers, aimed at automating service deployment and management.</li>
                            <li>Employed Adobe suites and Vue.js to create an intuitive and interactive user experience,
                                enhancing user engagement and operational efficiency.</li>
                            <li>Designed and implemented key features such as task automation, real-time notifications,
                                and third-party service integration, contributing to a 40% reduction in manual tasks for
                                MSPs.</li>
                            <li>Successfully modernized the UI of a large Business Intelligence application. Improved
                                user experience, and ensured compliance with current design standards and accessibility
                                requirements, resulting in increased user satisfaction and adoption.</li>
                            <li>Planned and executed the upgrade of Bootstrap framework versions across all BI products,
                                ensuring compatibility and minimizing disruption to existing functionalities.</li>
                        </ul>
                        <span class="insert" >
                            <ul>
                                <li>Laravel</li>
                                <li>CSS</li>
                                <li>JQuery</li>
                                <li>PHP</li>
                                <li>PGSQL</li>
                            </ul>
                        </span>
                    </div>

                    <div class="sleeve" data-aos="fade-left">
                        <div class="sleeve-header">
                            <h2>Student Affairs Website and Design Assistant</h2>
                            <h3>Coastal Carolina University</h3>
                            <span>( 2021 - 2023  )</span>
                        </div>
                        
                        <ul>
                            <li> Led website development projects, transforming mockups into functional
                                web pages using HTML, CSS, and Bootstrap.</li>
                            <li>Optimized website flow for ease of use and implemented
                                SEO best practices to enhance accessibility.</li>
                            <li>Utilized Photoshop, Illustrator, and InDesign to design
                                and execute visually appealing front-end website designs.</li>
                            <li>Gathered and analyzed design and development requirements from various departments
                                within Student Affairs to ensure seamless communication and project success.</li>
                        </ul>
                        <span class="insert" >
                            <p>Details about experience</p>
                        </span>
                    </div>

                    <div class="sleeve" data-aos="fade-left">
                        <div class="sleeve-header">
                            <h2>Licensed Mental Health Counselor</h2>
                            <h3>Coastal Carolina University</h3>
                            <span>( 2020 - 2021 )</span>
                        </div>
                        <p>Used advanced counseling skills and evidence-based practices to establish goals and treatment
                            plans with patients.
                            Guided clients in effective therapeutic exercises integrated from Cognitive Behavior Therapy
                            and Dialectical Behavior Therapy (DBT).
                            Created and implemented additional website design to enhance user experience and increase
                            accessability.</p>
                        <span class="insert" >
                            <p>Details about experience</p>
                        </span>
                    </div>



                </div>

                <!-- education slideout -->
                <div class="column"></div>


            </div>

        </div>

    </section>

    <!-- about section ends -->
    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fa-brands fa-html5"></i>
                <h3>web development</h3>

            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>Website Design & Redesign</h3>

            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-palette"></i>
                <h3>Graphic Design</h3>

            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-code"></i>
                <h3>backend development</h3>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-file-code"></i>
                <h3>API Applications</h3>

            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-database"></i>
                <h3>Database Operation</h3>

            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- portfolio section starts  -->
    <section class="portfolio" id="portfolio">
        <!-- Credit: https://github.com/fedeperin/github-repo-cards -->
        &nbsp;
        <div class="projects" data-aos="fade-up">
            <h1 class="heading"> <span>Projects</span> </h1>
            <section class="github-repo-cards" data-user="eszarek" data-background="#ffffff" data-target-blank="true">
            </section>
        </div>
    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box"
                    required>
            </div>
            <input data-aos="fade-up" type="tel" name="number" placeholder="enter your number" class="box" required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30"
                rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
        </form>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>(843)333-5797</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>erinnszarek@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Raleigh, NC</p>
            </div>

        </div>

    </section>


    <!-- contact section ends -->

    <div class="credit"> &copy; copyright @
        <?php echo date('Y'); ?> by <span>Erinn Szarek</span>
    </div>

    <script>
        window.onload = function () {
            // Load AOS and jQuery first
            loadScript('https://code.jquery.com/jquery-3.6.0.min.js', function () {
                loadScript('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', function () {
                    // Initialize AOS after it's loaded
                    AOS.init({
                        duration: 800,
                        delay: 300
                    });

                    // Wait 2 seconds before showing the message
                    setTimeout(function () {


                        // Dynamically load additional scripts
                        loadScript('js/bkg.js', function () {
                            loadScript('js/script.js');
                        });

                        // jQuery script to handle button click
                        $('#classButton').click(function () {
                            $('#myDIV').slideToggle('slow', function () {
                                console.log("SlideToggle complete");
                            });
                        });
                    });
                });
            });
        };

        function loadScript(src, callback) {
            var script = document.createElement('script');
            script.src = src;
            script.onload = function () {
                console.log(src + ' loaded successfully.');
                if (callback) callback();
            };
            script.onerror = function () {
                console.error('Error loading script: ' + src);
            };
            document.head.appendChild(script);
        }
    </script>

</body>


</html>