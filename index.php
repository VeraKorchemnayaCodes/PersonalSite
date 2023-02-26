<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vera Korchemnaya's Perfolio</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div class="scroll-container">

    <header>
      <p class="logo">Vera Korchemnaya</p>

      <nav>
        <ul class="nav-list">
          <li><a class="about" href="#about">About</a></li>
          <li><a class="project" href="#project">Projects</a></li>
          <li><a class="resume" href="#resume">Resume</a></li>
        </ul>
      </nav>

      <a class="contact btn-contact" href="#contact"><button>Contact</button></a>
    </header>

    <section class="home">

      <main>
        <h1>My Perfolio</h1>
      </main>

      <div>
        <object data="images/home/arrow-down.svg" width="50" height="50"></object>
      </div>
    </section>

    <section class="about slide-background" id="about">
      <div class="grid-container">
        <div class="grid-item grid-item-photo">
          <img src="images/about/portrait.jpg" alt="Picture of Me">
        </div>
        <div class="grid-item grid-item-1">
          <h2><b>EDUCATION</b></h2>
          <hr>
          <h3><b>Eastern Washington University | GPA: 3.96</b></h3>
          <h3><i>Bachelor of Computer Science</i></h3>
          <ul>
            <li><b>Favorite Courses: </b> Data Structures, Computer Engineering, Databases, Web App Development</li>
            <li><b>Graduation:</b> June 2023</li>
          </ul>
        </div>
        <div class="grid-item grid-item-2">
          <h2><b>SKILLS</b></h2>
          <hr>
          <ul>
            <li>Experience creating <b>PHP</b> projects using the <b>Laravel framework</b></li>
            <li><b>Java</b> problem solving</li>
            <li>Knowledge in creating a website from start to finish using <b> HTML5, CSS3 and JavaScript</b></li>
            <li>Familiar with the <b> Agile Framework</b> and its principles</li>
            <li>Knowledge of supporting skills: <b>MySQL, Visual Studio Code, Eclipse, GitHub,
                Unix</b></li>
          </ul>
        </div>
        <div class="grid-item grid-item-3">
          <h2><b>MY MISSION</b></h2>
          <hr>

          <p>My mission is to never stop learning new skills and developing myself in order to better serve others
            and to transform the
            world
            with software.</p>
        </div>
      </div>

    </section>



    <section class="project slide-background" id="project">
      <div class="grid-container">

        <div class="grid-item grid-item-1">
          <h2><b>PERSONAL WEBSITE</b></h2>
          <hr>
          <ul>
            <li>Gained experience with <b>DOM manipulation</b> and working with <b>JavaScript</b></li>
            <li>Learned a lot about <b>CSS3 grid and animations</b></li>
            <li>Form submission</li>
            <li>Worked with <b>AWS</b> to launch my website to the world</li>
          </ul>
        </div>
        <div class="grid-item grid-item-sidebar">
          <h2>SEE MY CODE</h2>
          <a href="https://github.com/VeraKorchemnaya/ResumeProjects" target="blank"><img src="images/projects/new-tab.png" alt="GitHub Link"></a>

        </div>

        <div class="grid-item grid-item-2">
          <h2><b>COMIC BOOK COLLECTION APP</b></h2>
          <hr>
          <ul>
            <li>Used the <b>Laravel Framework</b> to create a <b>CRUD project</b> by setting up resourceful controllers
              and views</li>
            <li>Utilized <b>template layouts</b> for cohesion and to follow the <b>DRY principle</b></li>
            <li>Implemented <b>success / information messages</b> and <b>data validation</b> for creating / editing
              entries</li>
            <li>Created a <b>database seeder</b> with the help of an <b>external library</b></li>
          </ul>
        </div>
        <div class="grid-item grid-item-3">
          <h2>LARAVEL PROJECT AND EXTERNAL DATA</h2>
          <hr>
          <ul>
            <li>Set up a <b>database</b> in Laravel by creating a <b>migration</b> and an <b>Eloquent Model</b></li>
            <li>Created a <b>PHP</b> program to insert data from an <b>API</b> directly <b>into the database</b></li>
          </ul>
        </div>
        <div class="grid-item grid-item-4">
          <h2>MORTGAGE CALCULATOR</h2>
          <hr>
          <ul>
            <li>Created <b>interactive user interface</b> and collected input data using a <b>HTML form</b></li>
            <li>Used the data to calculate <b>monthly mortagage</b> and print an <b>amortization schedule</b> using
              <b>PHP</b>
            </li>
          </ul>
        </div>
      </div>
    </section>



    <section class="resume slide-background" id="resume">
      <article class="frame-container">
        <iframe src="resources/resume.pdf" frameborder="0"></iframe>
      </article>
    </section>



    <section class="contact slide-background" id="contact">

      <div class="grid-container">
        <form action="contact.php" method="POST">
          <div class="grid-item">
            <input type="text" name="name-company" placeholder="Name / Company *" required>
          </div>

          <div class="grid-item">
            <input type="email" name="cookie" placeholder="Email *" required>
          </div>

          <div class="grid-item">
            <textarea name="message" name="message" placeholder="Message"></textarea>
          </div>

          <div class="grid-item grid-item-send">
            <button id="send" type="submit" name="submit">SEND</button>
          </div>
        </form>
      </div>

      <footer>
        <ul>
          <a href="https://app.joinhandshake.com/users/17597183" target="blank">
            <img src="images/footer/handshake.png" alt="Handshake">
          </a>

          <a href="https://app.joinhandshake.com/users/17597183" target="blank">
            <li>Handshake</li>
          </a>

          <img src="images/footer/mail.png" alt="Email">
          <li>vkorchemnaya@ewu.edu</li>

          <a href="https://www.linkedin.com/in/vera-korchemnaya/" target="blank">
            <img src="images/footer/linkedIn.png" alt="LinkedIn">
          </a>
          <a href="https://www.linkedin.com/in/vera-korchemnaya/" target="blank">
            <li>LinkedIn</li>
          </a>
        </ul>


      </footer>
    </section>

  </div>


  <script src="script.js"></script>
</body>

</html>