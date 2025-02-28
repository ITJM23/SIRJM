<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="John Mark Tolentino - IT Specialist and Programmer. Explore my portfolio, projects, and contact details.">
    <meta name="keywords" content="IT Specialist, Programmer, Web Developer, Portfolio">
    <meta name="author" content="John Mark Tolentino">
    <title>John Mark Tolentino | Portfolio</title>
    
    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts (Optimized) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        /* Header Styling */
        .header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 50px 20px;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 4px solid white;
            animation: bounceIn 1.5s;
        }

        /* Section Styling */
        .container {
            margin-top: 40px;
        }

        .section-title {
            border-left: 5px solid #2a5298;
            padding-left: 15px;
            margin-bottom: 20px;
            font-weight: 600;
            animation: slideInLeft 1s ease-in-out;
        }

        .contact-info a {
            text-decoration: none;
            color: #2a5298;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .contact-info a:hover {
            color: #1e3c72;
        }

        /* Social Icons */
        .social-icons a {
            margin: 0 8px;
            font-size: 22px;
            color: white;
            transition: color 0.3s, transform 0.3s;
        }

        .social-icons a:hover {
            color: #ffd700;
            transform: scale(1.2);
        }

        /* Footer */
        .footer {
            background-color: #2a5298;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes bounceIn {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes slideInLeft {
            from { transform: translateX(-100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-img {
                width: 120px;
                height: 120px;
            }

            .section-title {
                font-size: 1.2rem;
            }

            .social-icons a {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <img src="profile.jpg" alt="John Mark Tolentino" class="profile-img" loading="lazy">
        <h1 class="mt-2">John Mark Tolentino</h1>
        <p>IT Specialist | Programmer</p>
        <div class="social-icons">
            <a href="https://github.com/ITJM23/ITJM23" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/john-mark-tolentino-8757b0246/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/the.great.great.jm" target="_blank" aria-label="Twitter"><i class="fab fa-facebook"></i></a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <section>
            <h2 class="section-title">About Me</h2>
            <p>Experienced IT Specialist and Programmer with expertise in IT support, system troubleshooting, infrastructure optimization, and software development. Passionate about leveraging technology to solve real-world problems.</p>
        </section>

        <section>
            <h2 class="section-title">Contact</h2>
            <p class="contact-info"><i class="fa fa-envelope"></i> <a href="mailto:tolentinojohnmark999@gmail.com">tolentinojohnmark999@gmail.com</a></p>
        </section>

        <section>
    <h2 class="section-title">Work Experience</h2>
    <div class="accordion" id="workExperienceAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#job1">
                    IT Specialist / Programmer - TSUKIDEN ELECTRIC (June 2023 - Present)
                </button>
            </h2>
            <div id="job1" class="accordion-collapse collapse show" data-bs-parent="#workExperienceAccordion">
                <div class="accordion-body">
                    <ul>
                        <li>Developed and optimized in-house <strong>web-based</strong> and <strong>desktop applications</strong> using <strong>PHP, JavaScript, C#, and SQL</strong>.</li>
                        <li>Designed and maintained <strong>relational databases (SQL Server, MySQL)</strong>, ensuring data integrity and efficient query performance.</li>
                        <li>Managed <strong>Windows Server</strong>, performing regular updates, security patches.</li>
                        <li>Resolved <strong>network configuration issues</strong>.</li>
                        <li>Implemented <strong>automation scripts</strong> to improve IT operations and reduce manual workload.</li>
                        <li>Provided <strong>IT support</strong> for hardware, software, and infrastructure troubleshooting.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#job2">
                    Web Developer / Administrator - MCC CONSULTING (May 2021 - Feb 2023)
                </button>
            </h2>
            <div id="job2" class="accordion-collapse collapse" data-bs-parent="#workExperienceAccordion">
                <div class="accordion-body">
                    <ul>
                        <li>Designed and developed <strong>responsive, SEO-optimized WordPress websites</strong> using <strong>HTML, CSS, Bootstrap, and JavaScript</strong>.</li>
                        <li>Configured and maintained <strong>web hosting environments</strong>, ensuring uptime and performance optimization.</li>
                        <li>Integrated <strong>SQL database solutions</strong> for dynamic content management and efficient data retrieval.</li>
                        <li>Implemented <strong>security best practices</strong>, including firewall configurations and SSL certificate management.</li>
                        <li>Managed <strong>Linux-based web servers</strong> and automated routine maintenance tasks.</li>
                        <li>Used <strong>data analytics tools (Google Analytics, Power BI)</strong> to monitor website traffic and improve UX.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



        <section>
    <h2 class="section-title">My Skills</h2>
    <div class="row">
        <div class="col-md-6">
            <h3 class="sub-title">Programming & Development</h3>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-code"></i> PHP, JavaScript, Python, C#, HTML, CSS, Bootstrap</li>
                <li class="list-group-item"><i class="fa fa-database"></i> SQL/MySQL Database Administration</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3 class="sub-title">IT & Infrastructure</h3>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-windows"></i> Windows Server Management</li>
                <li class="list-group-item"><i class="fa fa-network-wired"></i> Network Configuration</li>
                <li class="list-group-item"><i class="fa fa-cloud"></i> Cloud Computing (AWS, Azure, Google Cloud)</li>
                <li class="list-group-item"><i class="fa fa-terminal"></i> Linux Administration</li>
                <li class="list-group-item"><i class="fa fa-key"></i> VPN Setup & Security</li>
            </ul>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <h3 class="sub-title">Data & Analytics</h3>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-chart-bar"></i> Power BI Tools</li>
                <li class="list-group-item"><i class="fa fa-database"></i> Data Warehousing & ETL</li>
                <li class="list-group-item"><i class="fa fa-brain"></i> Machine Learning & AI Basics</li>
                <li class="list-group-item"><i class="fa fa-file-excel"></i> Excel Automation & Data Analysis</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3 class="sub-title">Other Skills</h3>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-user-cog"></i> IT Support & Troubleshooting</li>
                <li class="list-group-item"><i class="fa fa-globe"></i> Web Hosting & Domain Management</li>
                <li class="list-group-item"><i class="fa fa-pencil-ruler"></i> UI/UX Design Principles</li>
                <li class="list-group-item"><i class="fa fa-project-diagram"></i> Project Management & Agile Methodologies</li>
            </ul>
        </div>
    </div>
</section>


    </div>


    

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 John Mark Tolentino | IT Specialist & Programmer</p>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
