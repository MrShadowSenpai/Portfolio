<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Khaledev - home</title>
    <meta name="description" content="This is the home page of my portfolio website.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./../../assets/css/general.css">
    <link rel="stylesheet" href="./../../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body>
    <?php include './../../compenents/header.php'; ?>

    <div id="section_1">
        <!-- particles.js container -->
        <div id="particles-js" class="fixed"></div>

        <div id="home-text-description">
            <p>My name is Khaled, <br>
                Nice to meet you !</p>
            <p>console.log(“Hello world”);</p>
        </div>
        <div id="home-scroll-indicator">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="scroll-indicator-pc">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M12 9V7M12 21C8.68629 21 6 18.3137 6 15V9C6 5.68629 8.68629 3 12 3C15.3137 3 18 5.68629 18 9V15C18 18.3137 15.3137 21 12 21Z"
                        stroke="#FF33EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
            <svg fill="#FF33EB" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="scroll-indicator-mobile">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M6,17a5.944,5.944,0,0,1,1.2-3.6,1,1,0,1,1,1.6,1.2,4,4,0,1,0,6.4,0,1,1,0,1,1,1.6-1.2A5.944,5.944,0,0,1,18,17,6,6,0,0,1,6,17Zm6,1a1,1,0,0,0,1-1V4.414l2.293,2.293a1,1,0,0,0,1.414-1.414l-4-4a1,1,0,0,0-1.414,0l-4,4A1,1,0,1,0,8.707,6.707L11,4.414V17A1,1,0,0,0,12,18Z">
                    </path>
                </g>
            </svg>
            <p>Scroll to learn more about me...</p>
        </div>
    </div>
    <div id="section_2" class="flex justify-center align-center">
        <img src="./../../assets/img/khaled.jpg" alt="">
        <div id="section_2_text" class="width-40">
            <h2>Who am I ?</h2>
            <p>My name is Khaled, I am a web developer and I am passionate about programming. I am currently a
                student at the IUT of Angoulême (University of Poitiers) in MMI (multimedia and internet
                professions). I am a very curious person and I like to learn new things. I am also a fan of video
                games. Sociability is something I really enjoy and I like to meet new people. I am also passionate
                about music and enjoy listening to music while I am at work, it allows me to concentrate. I am an
                extremely motivated person and I enjoy working hard to achieve my goals. In addition to being very
                organized, I like to plan my work in advance. I am also a very responsible person and I like to take
                care of my responsibilities. My reliability is very high and I enjoy being there when I’m needed.
                I’m also a very honest person and I like to tell the truth. I want to respect others and be
                respectful of myself. I am also a very patient person and I like to take my time to do things right.
                I am also a very positive person and I like to see the good side of things. I am also a very
                optimistic person and I like to believe that everything will be fine. I am also a very determined
                person and I like to achieve my goals. I am also a very ambitious person and I like to aim high. I
                am also a very confident person and I like to believe in myself. I am also a very independent person
                and I like to do things by myself. I am also a very adaptable person and I like to adapt to new
                situations. I am also a very flexible person and I like to change my plans if necessary. I am also a
                very resourceful person and I like to find solutions to problems. P.S : I love my wife !</p>
            <a href="./../../assets/file/cv.pdf" download="CV[Alkardosh_Khaled]" target="_blank"
                class="buttons-links">Show CV</a>
        </div>
    </div>

    <div id="section_3" class="flex flex-direction-column justify-center align-center">
        <h2>Skills</h2>
        <div class="cards flex flex-warp justify-center">
            <div class="card">
                <img src="./../../assets/img/icons-javascript.png" alt="javascript">
                <p>Javascript</p>
            </div>
            <div class="card">
                <img src="./../../assets/img/php-icon.png" alt="php">
                <p>PHP</p>
            </div>
            <div class="card">
                <img src="./../../assets/img/csharp-icon.png" alt="Csharp">
                <p>C#</p>
            </div>
            <!-- More cards here -->
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/unreal-engine-icon-white.png" alt="Unreal Engine">
                <p>Unreal Engine</p>
            </div>
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/unity-icon.png" alt="Unity 3D/2D">
                <p>Unity 3D</p>
            </div>
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/html-icon.png" alt="HTML 5">
                <p>HTML 5</p>
            </div>
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/css-3-logo.png" alt="CSS 3">
                <p>CSS 3</p>
            </div>
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/pfsense-icon.jpg" alt="PfSense">
                <p>PfSense</p>
            </div>
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/networking-icon.jpg" alt="Networking">
                <p>Networking</p>
            </div>
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/sql-icon.jpg" alt="SQL">
                <p>SQL</p>
            </div>
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/adobe-photoshop-logo.png" alt="PhotoShop">
                <p>PhotoShop</p>
            </div>
            <div class="card show-card" data-visible="false">
                <img src="./../../assets/img/Adobe_Illustrator_CC_icon.png" alt="Illustrator">
                <p>Illustrator</p>
            </div>


        </div>
        <button type="button" class="buttons" id="skills-button">Show More Skills</button>
    </div>

    <div id="section_4" class="flex flex-direction-column justify-center align-center">
        <h2>Contact Me</h2>
        <form action="./../redirection/send-message.php" method="post"
            class="flex flex-direction-column justify-center align-center width-45 contact-form" style="gap: 10px;">
            <input type="text" name="fname" id="fname" placeholder="First name" class="form-inputs" required>
            <input type="text" name="sname" id="Sname" placeholder="Second name" class="form-inputs" required>
            <input type="email" name="email" id="email" placeholder="Email" class="form-inputs" autocomplete="on"
                required>
            <input type="text" name="subject" id="subject" placeholder="subject" class="form-inputs" required>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="form-inputs"
                required></textarea>
            <button type="submit" class="buttons">Send</button>
    </div>

    <?php include './../../compenents/footer.php'; ?>
    <!-- particles.js -->
    <script src="./../../assets/js/particles.min.js"></script>
    <!-- stats.js lib -->
    <script src="./../../assets/js/particule.js"></script>
    <script src="./../../assets/js/app.js"></script>
    <script src="./../../assets/js/navbar.js"></script>
    <script src="./../../assets/js/skills.js"></script>
    <script src="https://kit.fontawesome.com/620fc58eba.js" crossorigin="anonymous"></script>
    </script>
</body>

</html>