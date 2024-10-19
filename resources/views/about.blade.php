<!-- resources/views/about.blade.php -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - About me</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <input type="checkbox" id="check">
    <section>
        <div class="navbar">
            <div class="logo"><span>ꓘ</span>D</div>
            <ol class="mainmenu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}" class="active">About me</a></li>
                <li><a href="{{ url('/content') }}">Portfolio</a></li>
                <li><a href="{{ url('/contact') }}">Contact me</a></li>
            </ol>
            <label for="check" class="fa-solid fa-bars"></label>
        </div>

        <div class="aboutme" id="aboutme">
            <div class="aboutme-container container grid">
                <div class="fullname">
                    <h4>Hello, I am</h4>
                    <h1><span>Karylle Mora </span>Dollesin</h1>
                </div>
                <h2 class="aboutme-title">PROFILE <span>SUMMARY</span></h2>
                <div class="aboutinfo">
                    <p>I'm a junior IT student 
                    eager to explore the world of technology 
                    and discover what I'm really good at. I love learning new things 
                    and I'm always excited to try out the latest tech stuff.</p>
                </div>

                <div class="careergoal">
                    <div class="careergoal_item">
                        <h2 class="careergoal-title">CAREER <span>GOALS</span></h2>
                        <div class="careerinfo">
                            <p>In the future, I want to find a job in IT 
                                where I can use my skills to make a difference. 
                                Whether it's creating cool apps, 
                                keeping computers safe from bad guys, or working with data, 
                                I'm excited to see where my tech journey takes me. 
                                My goal is to keep learning and growing so 
                                I can become the best tech person I can be! </p>
                        </div>
                    </div>
                </div>
                <div class="personalinfo">
                    <div class="persIn-title">
                        <h2>PERSONAL <span>INFORMATION </span></h2>
                    </div>
                    <div class="mypersonInfo">
                        <p><strong>Age: </strong>20 years old</p>
                        <p><strong>Birthday: </strong>October 31, 2003</p>
                        <p><strong>Email: </strong>dollesinkarylle@gmail.com</p>
                        <p><strong>Address: </strong>Abuyog, Sorsogon City</p>
                        <p><strong>Status: </strong>Single</p>
                        <p><strong>Contact Number: </strong>09380405669</p>
                    </div>
                </div>

                <div class="educinfo">
                    <div class="educ-title">
                        <h2>EDUCATION <span>BACKGROUND </span></h2>
                    </div>
                    <div class="myeducInfo">
                        <h3>Bachelor's Degree in Information Technology</h3>
                        <p><strong>Institution: </strong>Bicol University</p>
                        <p><strong>Location: </strong>Legazpi City, Albay</p>
                        <p><strong>Current Status: </strong>Junior</p>
                    </div>

                    <div class="myeducInfo">
                        <h3>High School Diploma</h3>
                        <p><strong>School: </strong>Abuyog National High School</p>
                        <p><strong>Location: </strong>Abuyog, Sorsogon City</p>
                        <p><strong>Year of Graduation: </strong>2022</p>
                    </div>

                    <div class="myeducInfo">
                        <h3>Elementary Education</h3>
                        <p><strong>School: </strong>Abuyog National High School</p>
                        <p><strong>Location: </strong>Abuyog, Sorsogon City</p>
                        <p><strong>Year of Graduation: </strong>2016</p>
                    </div>
                </div>

                <div class="skillsSection">
                    <div class="languages">
                        <h2>LANGUAGE <span>PROFICIENCY</span></h2>
                        <div class="subject">C</div>
                        <div class="progress_bar">
                            <div class="progress_line" value="75%" style="max-width: 75%"></div>
                        </div>
                    </div>
                    <div class="languages">
                        <div class="subject">JAVA</div>
                        <div class="progress_bar">
                            <div class="progress_line" value="70%" style="max-width: 70%"></div>
                        </div>
                    </div>
                    <div class="languages">
                        <div class="subject">HTML & CSS</div>
                        <div class="progress_bar">
                            <div class="progress_line" value="85%" style="max-width: 85%"></div>
                        </div>
                    </div>
                    <div class="languages">
                        <div class="subject">JAVASCRIPT</div>
                        <div class="progress_bar">
                            <div class="progress_line" value="50%" style="max-width: 50%"></div>
                        </div>
                    </div>

                    <div class="interest_skills">
                        <div class="skills-text">
                            <h2>SKILLS <span>& INTEREST</span></h2>
                        </div>
                        <div class="interSkills-content">
                            <div class="box">
                                <img src="{{ asset('images/1.png') }}">
                                <h3>Web Development</h3>
                                <div class="read-more-container">
                                    <p>Crafting engaging and user-friendly websites.
                                        <span class="read-more-text">
                                            It is not just a skill nor interest for me; it's my passion. Throughout my course, 
                                            I've found myself drawn more towards web development over game or software development. 
                                            I take pride in creating websites that not only look great but also allow me to grow further, 
                                            providing seamless navigation and an exceptional user experience.
                                        </span>
                                    </p>
                                    <span class="read-more-btn">Read More</span>
                                </div>
                            </div>

                            <div class="box">
                                <img src="{{ asset('images/2.png') }}">
                                <h3>Creative Design</h3>
                                <div class="read-more-container">
                                    <p>Creates visually stunning and intuitive designs.
                                        <span class="read-more-text">
                                            This aspect is particularly fascinating for me as it allows me to showcase my creativity 
                                            and attention to detail. I take pride in crafting designs that captivate and engage users, 
                                            whether it's through websites, graphics, or other creative mediums.
                                        </span>
                                    </p>
                                    <span class="read-more-btn">Read More</span>
                                </div>
                            </div>

                            <div class="box">
                                <img src="{{ asset('images/4.png') }}">
                                <h3>Data Management</h3>
                                <div class="read-more-container">
                                    <p>Enjoys the intricacies of data management processes.
                                        <span class="read-more-text">
                                            Delving into the complexities of organizing, analyzing, 
                                            and optimizing data is where I find genuine interest and enjoyment.
                                        </span>
                                    </p>
                                    <span class="read-more-btn">Read More</span>
                                </div>
                            </div>
                        </div>
                        <script src="{{ asset('js/aboutmeJs.js') }}"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


