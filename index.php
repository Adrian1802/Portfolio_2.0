<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="./assets/scripts/main.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>
<body>

    <header id="home" class="home">
        <div class="main-container">
            <div class="navigation-container">
                <div class="icon-container">
                    <img class="icon" src="assets/images/headers-logo.png" alt="logo">
                    <h3>Portfolio</h3>
                </div>
                <nav class="nav-bar">
                    <a href="#home" class="nav-link">Home</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#skills" class="nav-link">Skills</a>
                    <a href="#my-works" class="nav-link">My Works</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </nav>
                <button class="hamburger-btn">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </button>
            </div>
            <section class="content-container">
                <div class="main-content">
                    <h1>MELCHOR ADRIAN <br>LIBARNES</h1>
                    <h2 class="sub-name">Website Developer</h2>
                    <p class="intro-about">
                        Turn your ideas into digital reality, refine your errors, and achieve excellence one script at a time. As a student in web development, your efforts today will pave the way for tomorrow’s innovations.
                    </p>
                    <div class="social-media">
                        <ul>
                            <li><a href="https://www.facebook.com/melchoradrian.libarnes"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://github.com/Adrian1802"><i class="fab fa-github"></i></a></li>
                            <li><a href="https://www.instagram.com/adriansenrabil?igsh=MWZ2NGJ1b2JnMWZqYQ=="><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <a href="#contact" class="contact-button">Contact Me</a>
                    </div>
                </div>
                <div class="profile-container">
                    <img class="profile" src="./assets/images/pic2.png" alt="piclogo">
                </div>
            </section>
        </div>
    </header>

    <section id="about" class="about">
        <div class="about-container">
            <div class="about-logo">
                <img class="about-me-piclogo" src="assets/images/pic1.png" alt="">
            </div>

            <div class="about-content">
                <div class="aboutme-container">
                    <p class="aboutmetxt">About Me</p>
                    <hr class="about-line">
                </div>
                <h3 class="about-me-intro">Hello 🖐 I am <span><b>Melchor Adrian Libarnes</b></span> <br>
                    <span><b>Software Developer</b></span> 💻
                </h3>

                <p>
                    I am <span class="typing-text"></span>, currently pursuing my education at Cavite State University in Bacoor City. My journey in web development began with a fascination for creating innovative designs that blend functionality with aesthetic appeal. This passion drives me to delve deep into the world of web technologies, where I constantly seek to refine my skills and explore new trends.
                </p>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div>
            <div class="tech-stack-container">
                <p>Tech Stack</p>
                <hr class="tech-stack-line">
            </div>
            <div class="skill-container">
                <div class="skill-group">
                    <!-- Left Group -->
                    <div class="skill">
                        <div class="skill-name">HTML</div>
                        <div class="skill-bar">
                            <div class="skill-percent" per="90%" style="max-width: 90%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-name">CSS</div>
                        <div class="skill-bar">
                            <div class="skill-percent" per="70%" style="max-width: 70%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-name">C#</div>
                        <div class="skill-bar">
                            <div class="skill-percent" per="80%" style="max-width: 80%;"></div>
                        </div>
                    </div>
                </div>
                <div class="skill-group">
                    <!-- Right Group -->
                    <div class="skill">
                        <div class="skill-name">SQL</div>
                        <div class="skill-bar">
                            <div class="skill-percent" per="65%" style="max-width: 65%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-name">JAVA</div>
                        <div class="skill-bar">
                            <div class="skill-percent" per="90%" style="max-width: 90%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-name">JAVASCRIPT</div>
                        <div class="skill-bar">
                            <div class="skill-percent" per="20%" style="max-width: 20%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="my-works" class="my-works">
        <div class="title-container">
            <h1 class="txt-skills">My Projects</h1>
            <div class="line"></div>
        </div>
        <div class="proj-container">
            <div class="project">
                <img class="pic" src="assets/images/BrewCulture.jpeg" alt="Roblox Clone" onclick="openModal(this.src)">
                <div class="title">Brew Culture</div>
            </div>
            <div class="project">
                <img class="pic" src="assets/images/Inventory.jpeg" alt="Inventory Management System" onclick="openModal(this.src)">
                <div class="title">Inventory Management System</div>
            </div>
            <div class="project">
                <img class="pic" src="assets/images/LMS.jpeg" alt="Facebook Clone" onclick="openModal(this.src)">
                <div class="title">Learning Management System</div>
            </div>
            <div class="project">
                <img class="pic" src="assets/images/Milkywaysips.jpeg" alt="Scheduler App" onclick="openModal(this.src)">
                <div class="title">Milky Way Sips</div>
            </div>
            <div class="project">
                <img class="pic" src="assets/images/SSG-System.png" alt="Scheduler App" onclick="openModal(this.src)">
                <div class="title">Web-based SSG System</div>
            </div>
            <div class="project">
                <img class="pic" src="assets/images/Eccomerce.png" alt="Scheduler App" onclick="openModal(this.src)">
                <div class="title">E-Commerce System</div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="title-container">
            <h2>Contact Me</h2>
            <div class="line"></div>
        </div>
        <div class="contact-form">
            <form action="mailto:your@email.com" method="post">
                <div class="form-group">
                    <input class="input-box" type="text" id="name" name="name" required placeholder="Name">
                </div>
                <div class="form-group">
                    <input class="input-box" type="email" id="email" name="email" required placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="input-box" type="text" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="input-box" id="message" name="message" required placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <script src="./assets/scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</body>
</html>
