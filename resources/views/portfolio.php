<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Google Fonts - Roboto Condensed -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- Google Fonts - Roboto Slab and Raleway for Cards -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <style>
      :root {
          --primary-color: #c8a45c; /* Gold */
          --secondary-color: #a35638; /* Kinda Biege Red */
          --accent-color: #7d8c5c; /* kinda green */
          --light-bg: #f5f0e1; /* Light beige */
          --dark-bg: #2c2418; /* Dark brown */
          --light-text: #4a3c2a; /* Dark beige/brown */
          --dark-text: #f5f0e1; /* Light beige */
          --light-card: #ebe3d5; /* Slightly darker beige */
          --dark-card: #3a3024; /* Slightly lighter dark brown */
          --transition: all 0.3s ease;
          --border-pattern: 8px solid transparent;
          --border-image: repeating-linear-gradient(45deg, var(--primary-color) 0, var(--primary-color) 10px, transparent 0, transparent 20px) 8;
      }

      body {
          font-family: 'Roboto Condensed', sans-serif;
          background-color: var(--light-bg);
          color: var(--light-text);
          transition: var(--transition);
          scroll-behavior: smooth;
          padding-top: 56px;
          background-image: url("https://www.transparenttextures.com/patterns/papyrus.png");
      }

      body.dark-mode {
          background-color: var(--dark-bg);
          color: var(--dark-text);
          background-image: url("https://www.transparenttextures.com/patterns/papyrus-dark.png");
      }

      .navbar {
          backdrop-filter: blur(10px);
          background-color: rgba(245, 240, 225, 0.9);
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          transition: var(--transition);
          border-bottom: 2px solid var(--primary-color);
      }

      .dark-mode .navbar {
          background-color: rgba(44, 36, 24, 0.9);
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
          border-bottom: 2px solid var(--primary-color);
      }

      .navbar-brand {
          font-weight: 700;
          color: var(--primary-color);
          text-transform: uppercase;
          letter-spacing: 2px;
      }

      /* Wave animation for navbar brand */
      .wave-text {
          display: inline-block;
      }

      .wave-text span {
          display: inline-block;
          animation: wave-animation 2.5s infinite ease-in-out;
      }

      .wave-text span:nth-child(1) { animation-delay: 0.0s; }
      .wave-text span:nth-child(2) { animation-delay: 0.1s; }
      .wave-text span:nth-child(3) { animation-delay: 0.2s; }
      .wave-text span:nth-child(4) { animation-delay: 0.3s; }
      .wave-text span:nth-child(5) { animation-delay: 0.4s; }
      .wave-text span:nth-child(6) { animation-delay: 0.5s; }
      .wave-text span:nth-child(7) { animation-delay: 0.6s; }
      .wave-text span:nth-child(8) { animation-delay: 0.7s; }

      @keyframes wave-animation {
          0%, 100% {
              transform: translateY(0);
          }
          25% {
              transform: translateY(-6px);
          }
          50% {
              transform: translateY(0);
          }
          75% {
              transform: translateY(6px);
          }
      }

      /* Navigation hover animation */
      .nav-link {
        padding: 10px 20px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.5s;
        z-index: 1;
        position: relative;
      }

      .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-top: 2px solid var(--primary-color);
        border-bottom: 2px solid var(--primary-color);
        transform: scaleY(2);
        opacity: 0;
        transition: 0.3s;
      }

      .nav-link::after {
        content: '';
        position: absolute;
        top: 2px;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--primary-color);
        transform: scale(0);
        opacity: 0;
        transition: 0.3s;
        z-index: -1;
      }

      .nav-link:hover {
        color: var(--dark-bg) !important;
      }

      .dark-mode .nav-link:hover {
        color: var(--light-bg) !important;
      }

      .nav-link:hover::before {
        transform: scaleY(1);
        opacity: 1;
      }

      .nav-link:hover::after {
        transform: scaleY(1);
        opacity: 1;
      }

      .nav-link:after {
        display: none;
      }
      
      .nav-link.active {
        color: var(--primary-color) !important;
      }
      
      .nav-link.active::before,
      .nav-link.active::after {
        display: none;
      }

      section {
          padding: 100px 0;
          position: relative;
      }

      section::before {
          content: '';
          position: absolute;
          top: 0;
          left: 50%;
          transform: translateX(-50%);
          width: 80%;
          height: 1px;
          background: linear-gradient(to right, transparent, var(--primary-color), transparent);
      }

      .section-title {
          margin-bottom: 50px;
          position: relative;
          display: inline-block;
          text-transform: uppercase;
          letter-spacing: 3px;
          color: var(--secondary-color);
          font-weight: 700;
      }

      .dark-mode .section-title {
          color: var(--primary-color);
      }

      .section-title {
        position: relative;
        overflow: hidden;
        display: inline-block;
      }

      .section-title::before {
        content: "⚜";
        margin-right: 15px;
        color: var(--primary-color);
        opacity: 0;
        animation: titleSymbolFadeIn 1.5s forwards;
      }

      .section-title {
        background: linear-gradient(
          to right,
          var(--secondary-color) 20%,
          var(--primary-color) 40%,
          var(--primary-color) 60%,
          var(--secondary-color) 80%
        );
        background-size: 200% auto;
        color: transparent !important;
        -webkit-background-clip: text;
        background-clip: text;
        animation: shimmerTitle 4s linear infinite;
      }

      .dark-mode .section-title {
        background: linear-gradient(
          to right,
          var(--primary-color) 20%,
          var(--dark-text) 40%,
          var(--dark-text) 60%,
          var(--primary-color) 80%
        );
        background-size: 200% auto;
        color: transparent !important;
        -webkit-background-clip: text;
        background-clip: text;
      }

      @keyframes shimmerTitle {
        0% {
          background-position: 0% center;
        }
        100% {
          background-position: 200% center;
        }
      }

      @keyframes titleSymbolFadeIn {
        0% {
          opacity: 0;
          transform: translateX(-20px);
        }
        100% {
          opacity: 1;
          transform: translateX(0);
        }
      }

      .section-title:after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        background: var(--primary-color);
        bottom: -10px;
        left: 0;
        animation: expandLine 1.5s forwards;
      }

      @keyframes expandLine {
        0% {
          width: 0;
        }
        100% {
          width: 60%;
        }
      }

      /* Letter hover animation for hero heading */
      .animated-heading {
        display: inline-block;
      }

      .animated-heading span {
        display: inline-block;
        transition: transform 0.3s ease, color 0.3s ease;
        cursor: default;
      }

      .animated-heading span:hover {
        transform: translateY(-10px);
        color: var(--primary-color);
      }

      /* Hero Section */
      #home {
          background: linear-gradient(135deg, rgba(200, 164, 92, 0.1) 0%, rgba(163, 86, 56, 0.1) 100%);
          min-height: 100vh;
          display: flex;
          align-items: center;
      }

      .hero-content h1 {
          font-size: 3.5rem;
          font-weight: 700;
          margin-bottom: 20px;
          text-transform: uppercase;
          letter-spacing: 2px;
      }

      .hero-content p {
          font-size: 1.2rem;
          margin-bottom: 30px;
          font-weight: 300;
      }

      .hero-img {
          border-radius: 0;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
          transition: var(--transition);
          max-width: 100%;
          height: auto;
          border: 8px solid var(--primary-color);
      }

      .dark-mode .hero-img {
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      }

      .btn-custom {
          background: var(--primary-color);
          color: var(--dark-bg);
          border: none;
          padding: 12px 30px;
          border-radius: 0;
          font-weight: 600;
          transition: var(--transition);
          text-transform: uppercase;
          letter-spacing: 1px;
      }

      .btn-custom:hover {
          background: var(--secondary-color);
          color: var(--light-bg);
          transform: translateY(-3px);
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      }

      /* About Section */
      .card {
          border-radius: 0;
          border: none;
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
          transition: var(--transition);
          background-color: var(--light-card);
          margin-bottom: 30px;
          border-top: 3px solid var(--primary-color);
      }

      .dark-mode .card {
          background-color: var(--dark-card);
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
          color: var(--dark-text);
          border-top: 3px solid var(--primary-color);
      }

      .dark-mode h1, 
      .dark-mode h2, 
      .dark-mode h3, 
      .dark-mode h4, 
      .dark-mode h5, 
      .dark-mode h6,
      .dark-mode p,
      .dark-mode .timeline-item,
      .dark-mode .project-content,
      .dark-mode .skill-name {
          color: var(--dark-text);
      }

      .card:hover {
          transform: translateY(-10px);
          box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      }

      .dark-mode .card:hover {
          box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      }

      .timeline {
          position: relative;
          padding-left: 30px;
      }

      .timeline:before {
          content: '';
          position: absolute;
          left: 0;
          top: 0;
          width: 2px;
          height: 100%;
          background: var(--primary-color);
      }

      .timeline-item {
          position: relative;
          margin-bottom: 30px;
      }

      .timeline-item:before {
          content: '';
          position: absolute;
          left: -34px;
          top: 0;
          width: 10px;
          height: 10px;
          border-radius: 0;
          background: var(--primary-color);
          transform: rotate(45deg);
      }

      .timeline-date {
          font-weight: 600;
          color: var(--primary-color);
          margin-bottom: 5px;
      }

      /* Skills Section */

      /* Contact Section */
      .contact-form .form-control {
          border-radius: 0;
          padding: 12px 15px;
          margin-bottom: 20px;
          border: 1px solid var(--primary-color);
          background-color: var(--light-card);
          color: var(--light-text);
          transition: var(--transition);
          font-family: 'Roboto Condensed', sans-serif;
      }

      .dark-mode .contact-form .form-control {
          background-color: var(--dark-card);
          color: var(--dark-text) !important;
          border: 1px solid var(--primary-color);
      }
      
      .dark-mode .contact-form .form-control::placeholder {
          color: rgba(245, 240, 225, 0.7);
      }

      /* Footer */
      footer {
          background-color: var(--light-card);
          padding: 30px 0;
          text-align: center;
          transition: var(--transition);
          border-top: 2px solid var(--primary-color);
      }

      .dark-mode footer {
          background-color: var(--dark-card);
          color: var(--dark-text);
          border-top: 2px solid var(--primary-color);
      }

      /* Dark Mode buttons */
      .theme-toggle {
          cursor: pointer;
          width: 45px;
          height: 25px;
          background-color: rgba(200, 164, 92, 0.2);
          border-radius: 0;
          position: relative;
          transition: var(--transition);
          border: 1px solid var(--primary-color);
      }

      .theme-toggle:before {
          content: '';
          position: absolute;
          width: 21px;
          height: 21px;
          border-radius: 0;
          top: 1px;
          left: 1px;
          background-color: var(--primary-color);
          transition: var(--transition);
      }

      .dark-mode .theme-toggle {
          background-color: var(--dark-card);
      }

      .dark-mode .theme-toggle:before {
          transform: translateX(20px);
      }

      /* Animations */
      @keyframes fadeInUp {
          from {
              opacity: 0;
              transform: translateY(20px);
          }
          to {
              opacity: 1;
              transform: translateY(0);
          }
      }

      .animate {
          animation: fadeInUp 0.6s ease-out;
      }

      /* Greek column decorations */
      .column-decoration {
          position: relative;
          padding: 20px;
      }

      .column-decoration::before,
      .column-decoration::after {
          content: "☥";
          font-size: 24px;
          color: var(--primary-color);
          position: absolute;
          top: 0;
      }

      .column-decoration::before {
          left: 0;
      }

      .column-decoration::after {
          right: 0;
      }

      @media (max-width: 991px) {
          .hero-content h1 {
              font-size: 2.5rem;
          }
          .hero-img {
              margin-top: 30px;
          }
      }

      @media (max-width: 767px) {
          section {
              padding: 70px 0;
          }
          .hero-content h1 {
              font-size: 2rem;
          }
      }
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#home">
    <span class="wave-text">
        <span>A</span><span>e</span><span>l</span><span>l</span><span>o</span><span>r</span><span>e</span><span>n</span>
    </span>
</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#achievements">Achievements</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#skills">Skills</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#projects">Projects</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item ms-3">
                      <div class="theme-toggle" id="theme-toggle"></div>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!-- Hero Section -->
  <section id="home">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 animate">
                  <div class="hero-content column-decoration">
                      <h1 class="animated-heading">
                        <span>H</span><span>e</span><span>l</span><span>l</span><span>o</span><span>,</span><span> </span>
                        <span>I</span><span>'</span><span>m</span><span> </span>
                        <span style="color: var(--primary-color);">A</span><span style="color: var(--primary-color);">e</span><span style="color: var(--primary-color);">l</span><span style="color: var(--primary-color);">l</span><span style="color: var(--primary-color);">o</span><span style="color: var(--primary-color);">r</span><span style="color: var(--primary-color);">e</span><span style="color: var(--primary-color);">n</span>
                      </h1>
                      <p>I am Aelloren, 19, and I love spending my time with my 19 pets, going shopping, hanging out with friends or sneaking out with my sister every midnight to get snacks, playing online games with friends. I also love listening to music when I'm doing stuff like cleaning, cooking, doing activities, reading, or when I'm taking a bath.  </p>
                      <a href="#contact" class="btn btn-custom">Send a Message</a>
                  </div>
              </div>
              <div class="col-lg-6 animate">
                  <img src="Images/aello.png" alt="Photo" class="hero-img img-fluid">
              </div>
          </div>
      </div>
  </section>

  <!-- About Section -->
  <section id="achievements">
      <div class="container">
          <h2 class="section-title">Achievements</h2>
  </section>

  <!-- Skills Section -->
  <section id="skills">
      <div class="container">
          <h2 class="section-title">My Skills</h2>
  </section>

  <!-- Projects Section -->
  <section id="projects">
      <div class="container">
          <h2 class="section-title">My Projects</h2>
  </section>

   <!-- Memories Section -->
   <section id="projects">
    <div class="container">
        <h2 class="section-title">My Memories</h2>
</section>


  <!-- Contact Section -->
  <section id="contact">
      <div class="container">
          <h2 class="section-title">Send a Message</h2>
  </section>

  <footer>
      <div class="container">
          <p>&copy; <span id="currentYear"></span> DISCLAIMER: No Copyright Infringement Intended. For Educational Purposes only.</p>
      </div>
  </footer>

  <!-- Bootstrap JS -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom JS -->
  <script>
      document.getElementById('currentYear').textContent = new Date().getFullYear();

      const themeToggle = document.getElementById('theme-toggle');
      const body = document.body;

      const savedTheme = localStorage.getItem('theme');
      if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          body.classList.add('dark-mode');
      }

      themeToggle.addEventListener('click', () => {
          body.classList.toggle('dark-mode');
          const theme = body.classList.contains('dark-mode') ? 'dark' : 'light';
          localStorage.setItem('theme', theme);
      });

      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function(e) {
              e.preventDefault();
              const targetId = this.getAttribute('href');
              const targetElement = document.querySelector(targetId);
              
              if (targetElement) {
                  window.scrollTo({
                      top: targetElement.offsetTop - 60,
                      behavior: 'smooth'
                  });
              }
          });
      });
      const animateElements = document.querySelectorAll('.animate');
      
      function checkIfInView() {
          const windowHeight = window.innerHeight;
          const windowTopPosition = window.scrollY;
          const windowBottomPosition = windowTopPosition + windowHeight;
          
          animateElements.forEach(element => {
              const elementHeight = element.offsetHeight;
              const elementTopPosition = element.offsetTop;
              const elementBottomPosition = elementTopPosition + elementHeight;
              
              if (
                  (elementBottomPosition >= windowTopPosition) &&
                  (elementTopPosition <= windowBottomPosition)
              ) {
                  element.style.opacity = '1';
                  element.style.transform = 'translateY(0)';
              }
          });
      }
      
      animateElements.forEach(element => {
          element.style.opacity = '0';
          element.style.transform = 'translateY(20px)';
          element.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
      });
      
      window.addEventListener('load', checkIfInView);
      window.addEventListener('scroll', checkIfInView);
      window.addEventListener('resize', checkIfInView);

      const sections = document.querySelectorAll('section');
      const navLinks = document.querySelectorAll('.nav-link');

      window.addEventListener('scroll', () => {
          let current = '';

          sections.forEach( section => {
              const sectionTop = section.offsetTop;
              const sectionHeight = section.clientHeight;
              if(pageYOffset >= (sectionTop - 60)){
                  current = section.getAttribute('id');
              }
          })

          navLinks.forEach( link => {
              link.classList.remove('active');
              if(link.getAttribute('href').includes(current)){
                  link.classList.add('active');
              }
          })
      })
      
      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }

      function handleSectionTitleScroll() {
        const sectionTitles = document.querySelectorAll('.section-title');
        
        sectionTitles.forEach(title => {
          if (isInViewport(title) && !title.classList.contains('animated')) {
            title.style.animation = 'none';
            
            title.offsetHeight;
            
            title.style.animation = 'shimmerTitle 4s linear infinite';
            
            title.classList.add('animated');
          }
        });
      }

      window.addEventListener('scroll', handleSectionTitleScroll);
      
      window.addEventListener('load', handleSectionTitleScroll);

      const updateLetterColors = () => {
        const isDarkMode = document.body.classList.contains('dark-mode');
        const nameLetters = document.querySelectorAll('.animated-heading span[style*="color"]');
        
        nameLetters.forEach(letter => {
          letter.style.color = 'var(--primary-color)';
        });
      };

      window.addEventListener('load', updateLetterColors);
      themeToggle.addEventListener('click', updateLetterColors);
  </script>
</body>
</html>