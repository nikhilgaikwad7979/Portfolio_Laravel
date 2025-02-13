<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="/style">
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        <style>
            * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(50deg,rgb(0, 0, 0),#343434); 
    /* background:#ffffff; */
    color: #cacaca;
    /* padding: 20px; */
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 50px;
    /* background-color: #000000; */
    /* background: linear-gradient(50deg, #043f39,#017c4b); */
    background: transparent;
    position: relative;
}

.logo {
    font-size: 20px;
    color: #00ff99;
}

.logo:hover{
    color: #ffffff;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.menu-toggle {
    display: none;
    font-size: 30px;
    background-color: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
}

.nav-links {
    display: flex;
    align-items: center;
    margin-left: 40px;
}

.nav-links ul {
    list-style: none;
    display: flex;
    gap: 20px;
}
.Nav_Logo{
    display: flex;
}
.nav-links ul li a {
    color: #cacaca;
    text-decoration: none;
    /* font-weight: bold; */
}


nav ul li a:hover {
    color: #00ff99;
}

.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
}

.hero-content {
    max-width: 50%;
}

.hero h1 {
    font-size: 48px;
    line-height: 1.2;
    color: #ffffff;
}

.hero hr {
    width: 80px;
    height: 5px;
    background-color: #00ff99;
    border: none;
    margin: 20px 0;
}

.hero p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 30px;
}

.info {
    display: flex;
    gap: 30px;
}

.info div {
    text-align: center;
}

.info h2 {
    font-size: 36px;
    margin-bottom: 5px;
}

.hero-image img {
    max-width: 400px;
    border-radius: 10px;
}

.skills-section {
    padding: 40px 0;
    color: #00ff99;
}

.skills-section h2{
    text-align: center;
}

.section-heading {
    font-size: 28px;
    margin-bottom: 20px;
    color: #00ff99;
    transition: transform 0.3s; 
    text-align: center;
}

.section-heading:hover{
    color: white;
    font-size:30px; 
    
}

.skills-container {
    display: flex;
    flex-wrap: wrap; 
    justify-content: center; 
    gap: 20px; 
}

.skill-box {
    display: flex;
    flex-wrap: wrap; 
    padding: 15px;
    width: 300px;  
    height: 190px; 
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px; 
    background-color: rgba(255, 255, 255, 0.1); 
    border-radius: 10px; 
    transition: transform 0.3s; 
    position: relative; 
}

.skill-box:hover {
    transform: scale(1.05);  /* Slightly increase the size on hover */
}

.skill-box .floating-text {
    position: absolute;
    bottom: 20px;  /* Position it at the bottom of the box */
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
    color: #ffffff;
    padding: 8px 12px;
    border-radius: 5px;
    opacity: 0;  /* Initially hidden */
    transition: opacity 0.3s, transform 0.3s;
    pointer-events: none;  /* Prevent interaction with the floating text */
}

.skill-box:hover .floating-text {
    opacity: 1;
    transform: translateX(-50%) translateY(-10px);  /* Move it slightly up when visible */
}

.skill-image {
    display: flex;
    flex-wrap: wrap; 
    width: 40px;  
    height: 40px; 
    object-fit: contain; 
    margin: 5px;
}

.education-section {
    text-align: center;
    padding: 40px 0;
}

.section-heading {
    font-size: 2rem;
    margin-bottom: 1.5rem;
    text-align: left;
    color: #00ff99;
}

/* Qualifications Section */
#qualifications {
    padding: 50px 0;
    text-align: center;
}
.qualification-section h2{
    text-align: center;
}

.qualification-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 30px;
}

.qualification-box {
    background-color: rgba(255, 255, 255, 0.1);  /* Green box */
    color: #d5d5d5;
    padding: 30px;
    border-radius: 20px;
    width: 80%;
    max-width: 600px;
    text-align: center;
    position: relative;
    opacity: 0;
    transition: all 1s ease-in-out;
}

.qualification-box:hover{
    border-radius: 10pxs;
}

.qualification-box h3 {
    margin: 0;
    font-size: 18px;
    color: #ffffff; /* White text */
    font-weight: normal;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

h3 .date {
    margin-left: auto;
    font-size: 1rem;
}
h3 .date {
    font-size: 1rem;          
    color: #ffffff;          
    margin-left: 10px;       
    font-weight: normal;      
}

.qualification-box p {
    margin: 5px 0 0;
    font-size: 15px;
    color: #cacaca; /* Light gray text */
    text-align: left;
}


.qualification-box .collegeName{
    /* I'll do it later */
}

/* Animation from left and right */
.qualification-box.left {
    transform: translateX(-100vw);
}

.qualification-box.right {
    transform: translateX(100vw);
}

.qualification-box.appear {
    transform: translateX(0);
    opacity: 1;
}
 /* Projects Section */
.projects-section {
    padding: 50px 20px;
    color: #f1f1f1;
}

.projects-section .section-heading{
    text-align: center;
}

.project-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 20px;
}

.project {
    background-color: #1c1c1c;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.project:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.project img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 20px;
}

.project h3 {
    color: #ffffff; /* Theme green */
    margin-bottom: 10px;
    font-weight: normal;
    font-size: 15px;
}

.view-more {
    text-align: center;
    margin-top: 20px;
}

.viewMore{
    font-size: 14px;
    color: #ffffff;
    text-decoration: none;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}
.viewMore:hover {
    background-color: #ffffff;
    color: #000000;
}

.github-link {
    display: inline-block;
    margin-top: 10px;
    font-size: 1rem;
    color: #00FF66; /* Green color for the link */
    text-decoration: none;
    border: 1px solid #00FF66;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.github-link[data-github="none"] {
    color: #FF6666; /* Red color for the message */
    border: none;
    background: none;
}

.github-link:hover {
    background-color: #00FF66; /* Green background on hover */
    color: #000000; /* Black text on hover */
}


@media screen and (max-width: 768px) {
    .menu-toggle {
        display: block;
    }

    .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #000000;
        z-index: 100;
    }

    .nav-links ul {
        flex-direction: column;
        gap: 10px;
        padding: 15px;
    }

    .nav-links ul li a {
        padding: 10px 15px;
        display: block;
        text-align: left;
    }

    .nav-links.show {
        display: flex;
    }
    .hero {
        flex-direction: column;
        text-align: center;
    }

    .hero-content {
        max-width: 100%;
    }

    .hero-image img {
        max-width: 100%;
        margin-top: 30px;
    }
    .Nav_Logo{
        display:grid;
    }

    .section-heading {
        font-size: 24px; /* Slightly reduce the heading size */
    }
    .qualification-card {
        width: 90%; /* Cards take up 90% of the screen width */
        margin: 20px auto; /* Center the cards */
        padding: 20px;
        font-size: 1rem; /* Reduce font size */
    }

    .qualification-section h3 {
        font-size: 1.2rem; /* Adjust heading size */
    }

    .qualification-section p {
        font-size: 0.9rem; /* Adjust paragraph size */
    }

    /* Remove horizontal sliding effect for mobile, use vertical slide-in instead */
    .qualification-card {
        transform: translateY(100%); /* Slide in from the bottom */
    }
    .project-grid {
        grid-template-columns: 1fr;
    }
}
.contact-section {
    max-width: 600px;
    margin: 0 auto;
    padding: 40px 20px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  .contact-section h1 {
    text-align: center;
    color: #fff;
    margin-bottom: 30px;
  }
  
/* Form Styling */
#contactForm {
    display: flex;
    flex-direction: column;
}
  
#contactForm label {
    color: #ddd;
    margin-bottom: 5px;
}
  
  #contactForm input[type="text"],
  #contactForm input[type="email"],
  #contactForm input[type="tel"],
  #contactForm textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 4px;
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 16px;
  }
  
  #contactForm textarea {
    resize: vertical;
    min-height: 100px;
  }
  

#contactForm button 
{
    padding: 12px 20px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 4px;
    font-size: 16px;
}

#contactForm button::before{
    content: '';
    background: linear-gradient(45deg, #000000, #48ff00, #00ffdd);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 4px;
}

#contactForm button:active {
    color: #000
}

#contactForm button:active:after {
    background-color: rgba(255, 255, 255, 0.659);
    color: #000000;
}

#contactForm button:hover:before {
    opacity: 1;
}
#contactForm button:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 4px;
}
@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

.footer {
    background-color: #222;
    color: #fff;
    padding: 2rem 0;
    margin-top: 2rem;
    margin-left: 0rem;
}
  
.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
  
.social-links {
    margin-bottom: 1rem;
}
  
.social-links a {
    display: inline-block;
    margin: 0 0.5rem;
}
  
.social-logo {
    width: 30px;
    height: 30px;
    transition: transform 0.3s ease;
}
  
.social-logo:hover {
    transform: scale(1.1);
}
  
.footer-links {
    margin-bottom: 1rem;
}
  
.footer-links a {
    color: #ddd;
    text-decoration: none;
    margin: 0 0.5rem;
    transition: color 0.3s ease;
}
  
.footer-links a:hover {
    color: #fff;
}
  
  .copyright {
    font-size: 0.9rem;
    color: #999;
  }
  
  
@media (max-width: 1200px) {
    .project-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 columns on medium screens */
    }
}

@media (max-width: 900px) {
    .project-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on smaller screens */
    }
}

@media (max-width: 600px) {
    .project-grid {
        grid-template-columns: 1fr; /* 1 column on very small screens */
    }
    .contact-section {
        width: 90%;
    }
    .footer-content {
        padding: 0 1rem;
    }
}

nav ul li a:hover {
    color: #00ff99;
}
        </style>
        @endif
        <script>
            const roles = ["Software Developer", "Web Developer", "Android Developer", "PHP Developer", "Laravel Developer"];
let currentRoleIndex = 0;
let currentTextIndex = 0;
let isDeleting = false;

function typeEffect() {
    const textElement = document.getElementById('dynamic-text');
    const currentRole = roles[currentRoleIndex];
    
    if (isDeleting) {
        textElement.innerHTML = currentRole.substring(0, currentTextIndex--) + '_';
        if (currentTextIndex < 0) {
            isDeleting = false;
            currentRoleIndex = (currentRoleIndex + 1) % roles.length;
        }
    } else {
        textElement.innerHTML = currentRole.substring(0, currentTextIndex++) + '_';
        if (currentTextIndex > currentRole.length) {
            isDeleting = true;
        }
    }

    setTimeout(typeEffect, isDeleting ? 200 : 300);
}

document.addEventListener("DOMContentLoaded", function() {
    typeEffect();
});

document.addEventListener("DOMContentLoaded", function() {
    typeEffect();

    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    menuToggle.addEventListener('click', function() {
        navLinks.classList.toggle('show');
    });
});

const boxes = document.querySelectorAll('.qualification-box');

window.addEventListener('scroll', checkBoxes);

function checkBoxes() {
    const triggerBottom = window.innerHeight * 0.8;

    boxes.forEach(box => {
        const boxTop = box.getBoundingClientRect().top;

        if (boxTop < triggerBottom) {
            box.classList.add('appear');
        } else {
            box.classList.remove('appear');
        }
    });
}

document.querySelectorAll('.github-link').forEach(function(link) {
    if (link.getAttribute('data-github') === 'none') {
        link.innerHTML = 'Currently working on it'; // Change the link text
        link.removeAttribute('href'); // Remove the href to make it non-clickable
    }
});

document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);
    var jsonData = {};
    formData.forEach((value, key) => {jsonData[key] = value});

    fetch('https://script.google.com/macros/s/AKfycbzrk_1n1CivGSTxGC1XUQNtXqvjmbkiD8ZVjHpZF88qOMt1v1hH5Od_iICquB1sdIA/exec', {
        method: 'POST',
        mode: 'no-cors',
        cache: 'no-cache',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(jsonData)
    })
    .then(response => {
        alert('Form submitted successfully!');
        this.reset();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});
        </script>
      
    </head>
    <body >
    <header>
        <nav>
            <div class="Nav_Logo">
                <div class="logo">Nikhil</div>
                <button class="menu-toggle" id="menu-toggle">&#9776;</button>
                <div class="nav-links" id="nav-links">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#Skills">Skills</a></li>
                        <li><a href="#qualifications">Qualification</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content" id="home">
            <h1>Hi, I am Nikhil, <br><span id="dynamic-text">Full Stack  Developer</span>.</h1>
            <hr>
            <p>
                    I am pursuing a Bachelor's degree in Computer Science from Swami Ramanand Teerth Marathwada University with a strong passion for software development. I am proficient in HTML, CSS, JavaScript, C, C++, Java, Python, and .NET. I aim to leverage my coding skills and knowledge to become a proficient developer. I have demonstrated my abilities by securing the runner-up position in a state-level coding competition organized by Lions Group at Dayanand College, Latur.
            </p>
            <div class="info">
                <div>
                    <!-- <h2>Aspiring Engineer</h2> -->
                    <!-- <p>Fresher</p> -->
                </div>
                <div>
                    <h2>5+</h2>
                    <p>Projects Completed</p>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="img/user.jpg" alt="nick">
        </div>
    </section>
    <section class="skills-section" id="Skills">
        <h2 class="section-heading">Skills</h2>
        <div class="skills-container">
            <div class="skill-box">
                <div class="floating-text">C,C++,HTML,CSS,JS,Java,C#,.Net,Python</div>
                <img src="imag/user.jpg" alt="Frontend Skills" class="skill-image">
                <img src="images/CPlus.png" alt="Frontend Skills" class="skill-image">
                <img src="images/HTML.png" alt="Frontend Skills" class="skill-image">
                <img src="images/CSS.png" alt="Frontend Skills" class="skill-image">
                <img src="images/JS.png" alt="Frontend Skills" class="skill-image">
                <img src="images/Java.png" alt="Frontend Skills" class="skill-image">
                <img src="images/CSharp.png" alt="Frontend Skills" class="skill-image">
                <img src="images/dotnet-logo.png" alt="Frontend Skills" class="skill-image">
                <img src="images/Python.png" alt="Frontend Skills" class="skill-image">
            </div>
            <div class="skill-box">
                <div class="floating-text">MS-SQL,MySQL</div>
                <img src="images/MSSQL.png" alt="Backend Skills" class="skill-image">
                <img src="images/logo-mysql.png"alt="Backend Skilss" class="skill-image">
            </div>
            <div class="skill-box">
                <div class="floating-text">Communication Skills, Leadership</div>
                <img src="images/Communication.png" alt="Other Skills" class="skill-image">
            </div>
        </div>
    </section>
    <section id="qualifications" class="qualification-section">
        <h2 class="section-heading">Qualifications</h2>
        <div class="qualification-container">
            <div class="qualification-box left">
                <h3>Bachelor's Degree in Computer Science <span class="date">2022-Present</span></h3>
                <p>Swami Ramanand Teerth Marathwada University</p>
                <p class="collegeName">College of Computer Science and Information Technology</p>
            </div>
            <div class="qualification-box right">
                <h3>HSC <span class="date">2018-2021</span></h3>
                <p>Maharashtra State Board of Higher Secondary Education</p>
                <p class="collegeName">Dayanand Science College, Latur</p>
            </div>
            <div class="qualification-box left">
                <h3>SSC <span class="date">2008-2018</span></h3>
                <p>Maharashtra State Board of Secondary Education</p>
                <p class="collegeName">Baswannappa Wale English School, Latur</p>
            </div>
        </div>
    </section>
    <section class="projects-section" id="projects">
        <h2 class="section-heading">Projects</h2>
        <div class="project-grid">
            <div class="project">
                <img src="images\Project_Photos\Podcast.jpg" alt="Project 1">
                <h3>Pod-Chat - Web App using Flask Python </h3>
                <a href="#" class="github-link" data-github="none" target="_blank">View on GitHub</a>
            </div>
            <div class="project">
                <img src="images/Project_Photos/ToDoApp.png" alt="Project 2">
                <h3>To Do List - JavaScript</h3>
                <a href="https://github.com/nikhilgaikwad7979/To-Do-List-using-HTML-CSS-JavaScript-/tree/main" data-github="available" class="github-link" target="_blank">View on GitHub</a>
            </div>
            <div class="project">
                <img src="images/Project_Photos/FlamesCalculator.jpeg" alt="Project 3">
                <h3>Flames Calculator - Python</h3>
                <a href="https://mysahi.org/free-resources/projects/flames-calculator" data-github="available" class="github-link" target="_blank">View on Site</a>
            </div>
            <div class="project">
                <img src="images/Project_Photos/BillingSystem.jpeg" alt="Project 4">
                <h3>Retailer Billing System - C#.Net</h3>
                <a href="https://github.com/yourusername/project2" data-github="none" 
                class="github-link" target="_blank">View on GitHub</a>
            </div>
            <div class="project">
                <img src="images/Project_Photos/WeatherApp.webp" alt="Project 4">
                <h3>Weather App using Flask Python</h3>
                <a href="https://github.com/nikhilgaikwad7979/Weather-Web-App" data-github="available" 
                class="github-link" target="_blank">View on GitHub</a>
            </div>
        </div>
        <div class="view-more"><a href="https://github.com/nikhilgaikwad7979" class="viewMore">View More</a></div>
        
    </section>
    <section class="contact-section" id="contact">

        <h1>Get in Touch</h1>
        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="contact">Contact:</label>
            <input type="tel" id="contact" name="contact">

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>      
    </section>

    <footer class="footer">
    <div class="footer-content text-center">
        <div class="social-links">
            <a href="https://www.linkedin.com/in/#" target="_blank" rel="noopener noreferrer" class="me-3">
                <i class="bi bi-linkedin fs-3"></i>
            </a>
            <a href="https://www.instagram.com/#" target="_blank" rel="noopener noreferrer" class="me-3">
                <i class="bi bi-instagram fs-3"></i>
            </a>
            <a href="https://www.hackerrank.com/profile/#" target="_blank" rel="noopener noreferrer" class="me-3">
                <i class="bi bi-code-square fs-3"></i>
            </a>
            <a href="https://github.com/nikhilgaikwad7979" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-github fs-3"></i>
            </a>
        </div>
        <div class="copyright mt-3">
            &copy; 2024 Nikhil Gaikwad. All rights reserved.
        </div>
    </div>
</footer>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <script src="script.js"></script>
    </body>
</html>
