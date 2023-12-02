<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>

 body{

    background-color:#DDFDF4;
    font-family: 'Poppins';
 }
.container{
    background-color:#fff;
    margin-top:50px;
    margin-bottom:50px;
    border-radius:10px;
    
}

.header {
    padding: 50px;
    background-color: #203f8b;
    color: #fff;
    /* background-image: url('{{ asset('images/23-1201-011701439081.jpg') }}'); */
    background-image: linear-gradient(to right, #203f8b, #3498db);
    background-size: cover; 
    background-position: center; 
    border-radius-top:10px;
    margin-top: 0px;
    margin-left: -15px;
    margin-right: -15px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    /* backdrop-filter: blur(10px); */
    /* opacity: 0.8; */
}


.h3{
  font-weight:600;
}

    .name{
      font-size:40px;
      font-weight:600;
    }

    .subname{
      line-height: 1.5;
      margin: 0;
      padding-left:5px;
    }

/* about section */

.about-section {
    /* background-color: #f8f9fa;  */
    padding: 20px;
    border-radius: 8px; 
}

.about-section h2 {
    color: #000;
    padding-bottom:10px;
}

.text-secondary {
    color: #000000;
    font-weight:600;
}

/* Optional: Add some spacing between items */
.row {
    margin-bottom: 10px;
}

.pb-1 {
    margin-bottom: 5px;
    
}

/* experience section */


.timeline {
    list-style-type: none;
    padding: 0;
}

.timeline-card {
    position: relative;
    margin-bottom: 20px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.timeline-card:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 1px;
    width: 15px; 
    height: 2px; 
    background-color: #007bff; 
    transform: translateY(-50%);
    z-index: 1;
}

.timeline-card:after {
    content: "";
    position: absolute;
    top: 50%;
    left: 16px; 
    width: 0;
    height: 0;
    border-top: 6px solid transparent; 
    border-bottom: 6px solid transparent; 
    border-left: 10px solid #007bff; 
    transform: translateY(-50%);
    z-index: 2;
}

.card-body {
    position: relative;
    z-index: 2;
    padding: 30px; 
    border-left: 3px solid blue;
}

.timeline-card .h5 {
    margin-bottom: 10px;
    font-size:20px;
    font-weight:600;
}

.timeline-card .text-muted {
    color: #000000;
    margin-bottom: 10px;
}

/* contact form */

.col-md-7 {
      width: 50%;
      background-color: #fff;
      padding: 20px;
      margin-left: 30px;
      margin-right: 100px;
    }

    .my-2 {
      margin-bottom: 20px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    .row {
      display: flex;
      /* justify-content: space-between; */
      margin-bottom: 15px;
    }

    input {
      width: 50%;
      padding: 10px;
      box-sizing: border-box;
      background-color:#f8f9fa;
      border: 3px #f8f9fa;
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    input[name="name"] {
      margin-right: 4%;
    }

    textarea {
    width: 106%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 15px;
    margin-left: -15px;
    background-color:#f8f9fa;
    border: 3px #f8f9fa;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    button {
      width: 40%;
      background-color:#203f8b ;
      color: #fff;
      border: none;
      padding: 10px;
      cursor: pointer;
      margin-left: -15px;
      border-radius: 30px;
      text-decoration: none;
    }

    .headerbutton {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  border: 2px solid #3498db;
  color: #3498db;
  background-color: #fff;
  border-radius: 30px;
  transition: background-color 0.3s, color 0.3s, border-color 0.3s;
}

.headerbutton:hover {
  background-color: #3498db;
  color: #fff;
  border-color: #fff;
  text-decoration: none;
}

    .images {
      border: 8px solid #C1CDBC;
      margin-bottom: -240px; 
      width: 225px;
      height: 225px;
      object-fit: cover;  
      object-position: center;
}

</style>
<body>
<div class="container">
   
 <div class="header">
    <div class="row">
    <div class="col-md-4">
    <img src="{{ asset('images/23-1201-011701436867.png') }}" class="images" alt="Image Description">
   </div>
    <div class="col-md-6">
    <h2 class="name" data-aos="fade-left" data-aos-delay="0">Vinith Kumar R</h2>
    <h4 class="subname" data-aos-delay="100">Web Developer</h4>
    <a href="{{ asset('images/23-1201-011701439796.pdf') }}" class="headerbutton" style="margin-top: 16px; margin-left: 5px;" download>Download CV</a>
    </div>
</div>
</div>

<div class="about-section pt-4 px-3 px-lg-4 mt-1">
    <div class="row">
        <div class="col-md-6">
            <h2 class="h3 mb-3">About Me</h2>
            <p style="text-align: justify;">Experienced Web Developer with 3+ years of expertise in designing and creating websites. Proficient in both front-end and back-end development, adept at integrating PHP functionalities for an enhanced and dynamic website experience. Skilled in Laravel framework, ensuring efficient and robust web applications.</p>
        </div>
        <div class="col-md-5 offset-md-1 " style="padding-top: 70px; padding-left:80px;">
            <div class="row1 mt-2">
                <div class="col-sm-4">
                    <div class="pb-1">Email:-</div>
                </div>
                <div class="col-sm-8">
                    <div class="pb-1 text-secondary">vinithkathir@gmail.com.com</div>
                </div>
                <div class="col-sm-4">
                    <div class="pb-1">Phone:-</div>
                </div>
                <div class="col-sm-8">
                    <div class="pb-1 text-secondary">+91 8667209479</div>
                </div>
                <div class="col-sm-4">
                    <div class="pb-1">Place:-</div>
                </div>
                <div class="col-sm-8">
                    <div class="pb-1 text-secondary">Kumbakonam</div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-bottom:20px;">

  <div class="skills-section px-3 px-lg-4">
    <h2 class="h3 mb-3" style="margin-bottom:30px;">Professional Skills</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-2"><span>HTML , CSS & JavaScript</span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span>Wordpress</span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span>PHP</span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span>LARAVEL</span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-2"><span>REACT</span>
          <div class="progress my-1">
            <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span>AWS</span>
          <div class="progress my-1">
            <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span>SEO</span>
          <div class="progress my-1">
            <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-2"><span>GOOGLE ADS</span>
          <div class="progress my-1">
            <div class="progress-bar bg-success" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top:20px;">

  <div class="work-experience-section px-3 px-lg-4">
    <h2 class="h3 mb-4" style="margin-bottom:30px;">Work Experience</h2>
    <div class="timeline">
      <div class="timeline-card">
        <div class="card-body">
          <div class="h5 mb-1">Web Developer</div>
           <div class="text-muted text-small mb-2">QR Solutions Pvt Ltd, Trichy.</div>
          <div class="text-muted text-small mb-2">Jan, 2021 - Nov,2023</div>
         <ul>
    <li>Designed and developed websites, crafting wireframes and interactive prototypes with proficiency in front-end technologies and PHP coding.</li>
    <li>Employed React to enhance user interfaces, effectively conveying design concepts and eliciting feedback from clients and development teams.</li>
    <li>Demonstrated excellent proficiency in utilizing HTML, CSS, JavaScript, jQuery, Bootstrap & React JS to design and develop effective online stores.</li>
    <li>Successfully implemented SSL certificates on websites, ensuring secure and encrypted connections for users.</li>
    <li>Integrated Web Forms with Salesforce, streamlining data capture processes and improving customer relationship management.</li>
    <li>Demonstrated familiarity with AWS infrastructure, including AWS EC2, Elastic Beanstalk, and Lambda functions & Route 53, as part of project requirements for deploying scalable and resilient applications efficiently.</li>
    <li>Employed secure integration of third-party RESTful APIs, enhancing app functionality with error handling, rate limiting, and thorough testing.</li>
    <li>Lead the creation of successful PPC and Google AdWords campaigns, seamlessly integrating them with new website builds to drive targeted traffic and improve conversions.</li>
    <li>Optimized websites for enhanced usability, SEO, speed, and accessibility, ensuring a user-friendly experience, high search engine rankings, fast loading times, and accessibility compliance.</li>
    <li>Proficient in using debugging tools like Firebug, Chrome inspector, etc., to identify and resolve issues related to website design and functionality.</li>
    <li>Efficiently managed day-to-day incoming work requests related to web design and development projects, ensuring timely completion and client satisfaction.</li>
</ul>

        </div>
      </div>
      <div class="timeline-card">
        <div class="card-body">
          <div class="h5 mb-1">Wordpress Developer<span class="text-muted h6"> Freelancer</span></div>
          <div class="text-muted text-small mb-2">Jan, 2020 - DEC, 2020</div>
          <ul>
    <li>Strong knowledge of HTML and CSS</li>
    <li>Familiarity and strong experience with CMS platforms, specifically WordPress</li>
    <li>Optimize existing online content for design best practices, SEO best practices, and performance</li>
    <li>Creating posters and infographics using Canva and PostMyWall tool</li>
    <li>Excellent knowledge of Google Search Console, Google Analytics, Ahref, and Google AdWords</li>
    <li>Commit to constantly improving skills and staying current on developments and trends in the industry</li>
    <li>Monitor uptime, hosting, domain, and databases to ensure the site is performing at maximum capacity</li>
    <li>Development expertise with custom post types, custom fields, plugins, and themes for high-traffic WordPress sites</li>
</ul>

        </div>
      </div>
    </div>
  </div>

  <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top:20px;">

  <div class="page-break"></div>
  <div class="education-section px-3 px-lg-4 pb-4">
    <h2 class="h3 mb-4">Education</h2>
    <div class="timeline">
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">Bachelor of Information Technology</div>
          <div class="text-muted text-small mb-2">AVC College of Eingeneering</div>
          <div class="text-muted text-small mb-2">2015 - 2019</div>
           </div>
      </div>
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">Higher secondary School</div>
          <div class="text-muted text-small mb-2">KGS Higher Secondary School</div>
          <div class="text-muted text-small mb-2">2013 - 2015</div>
        </div>
      </div>
    </div>
  </div>

  <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top:20px;">

  <div class="contant-section px-3 px-lg-4 pb-4" id="contact">
    <h2 class="h3 text mb-3" style="color:#000; font-weight:600;margin-top:30px;margin-left:20px;">Contact</h2>
    <div class="row">
        <div class="col-md-7 d-print-none">
            <div class="my-2">
                <form action="{{url('resumedata')}}" method="POST">
                @csrf 
                  <div class="row">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                  </div>
                    <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>

                    <button type="submit">Send</button>
                </form>
            </div>
        </div>

        <div class="col">
            <div class="mt-2">
                <h3 class="h6">Native Place</h3>
                <div class="pb-2 text-secondary">Kumbakonam</div>
                <h3 class="h6">Phone</h3>
                <div class="pb-2 text-secondary">+91 8667209479</div>
                <h3 class="h6">Email</h3>
                <div class="pb-2 text-secondary">vinithkathir@gmail.com</div>
            </div>
        </div>
    </div>
   </div>

 </div>
                  <div style="text-align:center;">
                  <h5>© My Resume. All rights reserved.</h5>
                  <h5>Designed by Vinith</h5>
                  </div>
</div>

</body>
</html>