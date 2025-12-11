<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aelloren | Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
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
      }

      body {
          font-family: 'Roboto Condensed', sans-serif;
          background-color: var(--light-bg);
          color: var(--light-text);
          transition: var(--transition);
          scroll-behavior: smooth;
          padding-top: 56px;
          background-image: url("https://www.transparenttextures.com/patterns/papyrus.png");
          overflow-x: hidden; 
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
          0%, 100% { transform: translateY(0); }
          25% { transform: translateY(-6px); }
          50% { transform: translateY(0); }
          75% { transform: translateY(6px); }
      }

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

      .nav-link:hover { color: var(--dark-bg) !important; }
      .dark-mode .nav-link:hover { color: var(--light-bg) !important; }
      .nav-link:hover::before { transform: scaleY(1); opacity: 1; }
      .nav-link:hover::after { transform: scaleY(1); opacity: 1; }
      .nav-link.active { color: var(--primary-color) !important; }
      .nav-link.active::before, .nav-link.active::after { display: none; }

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
          z-index: 2;
      }

      .section-title {
          margin-bottom: 50px;
          position: relative;
          display: inline-block;
          text-transform: uppercase;
          letter-spacing: 3px;
          color: var(--secondary-color);
          font-weight: 700;
          overflow: hidden;
          background: linear-gradient(to right, var(--secondary-color) 20%, var(--primary-color) 40%, var(--primary-color) 60%, var(--secondary-color) 80%);
          background-size: 200% auto;
          color: transparent !important;
          -webkit-background-clip: text;
          background-clip: text;
          animation: shimmerTitle 4s linear infinite;
      }

      .dark-mode .section-title {
          color: var(--primary-color);
          background: linear-gradient(to right, var(--primary-color) 20%, var(--dark-text) 40%, var(--dark-text) 60%, var(--primary-color) 80%);
          background-size: 200% auto;
          -webkit-background-clip: text;
          background-clip: text;
      }

      .section-title::before {
        content: "⚜";
        margin-right: 15px;
        color: var(--primary-color);
        opacity: 0;
        animation: titleSymbolFadeIn 1.5s forwards;
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

      @keyframes shimmerTitle {
        0% { background-position: 0% center; }
        100% { background-position: 200% center; }
      }
      @keyframes titleSymbolFadeIn {
        0% { opacity: 0; transform: translateX(-20px); }
        100% { opacity: 1; transform: translateX(0); }
      }
      @keyframes expandLine {
        0% { width: 0; }
        100% { width: 60%; }
      }

      .animated-heading { display: inline-block; }
      .animated-heading span {
        display: inline-block;
        transition: transform 0.3s ease, color 0.3s ease;
        cursor: default;
      }
      .animated-heading span:hover {
        transform: translateY(-10px);
        color: var(--primary-color);
      }

      /* --- HERO SECTION --- */
      #home {
          min-height: 100vh;
          display: flex;
          align-items: center;
          position: relative;
          overflow: hidden; 
      }
      
      /* SQUARES CANVAS (Bottom Layer) */
      #squares-canvas {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 0; /* Background */
          border: none;
          display: block;
      }
      
      /* Curved Loop Animation (Middle Layer) */
      .curved-loop-jacket {
          position: absolute;
          top: 0;
          left: 0;
          min-height: 100vh;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          z-index: 1; /* Above Squares, below Content */
          opacity: 1;
          pointer-events: none; /* Let clicks pass through */
      }

      .curved-loop-svg {
          width: 100%;
          aspect-ratio: 100 / 12; 
          overflow: visible;
          display: block;
          font-size: 6rem;
          font-weight: 700;
          text-transform: uppercase;
          line-height: 1;
          
          fill: #8B5E3C; 
          opacity: 0.5;

          user-select: none;
          -moz-user-select: none;
          -webkit-user-select: none;
      }

      /* Hero Content (Top Layer) */
      #home .container {
          position: relative;
          z-index: 10; /* Top Layer */
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

      .hero-img-wrapper { position: relative; }
      .hero-img {
          border-radius: 0;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
          transition: var(--transition);
          max-width: 100%;
          height: auto;
          border: 8px solid var(--primary-color);
          position: relative; 
          z-index: 11;
      }
      .dark-mode .hero-img { box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); }

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
          display: inline-flex;
          align-items: center;
          justify-content: center;
      }
      .btn-custom:hover {
          background: var(--secondary-color);
          color: var(--light-bg);
          transform: translateY(-3px);
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      }

      .btn-outline-custom {
          background: transparent;
          color: var(--secondary-color); 
          border: 2px solid var(--secondary-color); 
          padding: 12px 30px;
          border-radius: 0;
          font-weight: 600;
          transition: var(--transition);
          text-transform: uppercase;
          letter-spacing: 1px;
          text-decoration: none;
          display: inline-flex;
          align-items: center;
          justify-content: center;
      }
      .btn-outline-custom:hover {
          background: var(--secondary-color);
          border-color: var(--secondary-color);
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
      .dark-mode h1, .dark-mode h2, .dark-mode h3, .dark-mode h4, .dark-mode h5, .dark-mode h6,
      .dark-mode p, .dark-mode .timeline-item, .dark-mode .project-content, .dark-mode .skill-name {
          color: var(--dark-text);
      }
      .card:hover {
          transform: translateY(-10px);
          box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      }
      .dark-mode .card:hover { box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3); }

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
      .dark-mode .contact-form .form-control::placeholder { color: rgba(245, 240, 225, 0.7); }

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
      .dark-mode .theme-toggle { background-color: var(--dark-card); }
      .dark-mode .theme-toggle:before { transform: translateX(20px); }

      /* Animations */
      @keyframes fadeInUp {
          from { opacity: 0; transform: translateY(20px); }
          to { opacity: 1; transform: translateY(0); }
      }
      .animate { animation: fadeInUp 0.6s ease-out; }

      .column-decoration {
          position: relative;
          padding: 20px;
      }
      .column-decoration::before, .column-decoration::after {
          content: "☥";
          font-size: 24px;
          color: var(--primary-color);
          position: absolute;
          top: 0;
      }
      .column-decoration::before { left: 0; }
      .column-decoration::after { right: 0; }

      /* Tech Stack Loop Styles */
      .logo-loop-container {
          overflow: hidden;
          padding: 30px 0;
          background-color: var(--light-card);
          position: relative;
          white-space: nowrap;
          border-top: 1px solid var(--primary-color);
          border-bottom: 1px solid var(--primary-color);
          margin-top: 40px;
      }
      .dark-mode .logo-loop-container { background-color: var(--dark-card); }

      .fade-overlay {
          position: absolute;
          top: 0;
          bottom: 0;
          width: 100px;
          z-index: 2;
          pointer-events: none;
      }
      .fade-left { left: 0; background: linear-gradient(to right, var(--light-bg), transparent); }
      .fade-right { right: 0; background: linear-gradient(to left, var(--light-bg), transparent); }
      .dark-mode .fade-left { background: linear-gradient(to right, var(--dark-bg), transparent); }
      .dark-mode .fade-right { background: linear-gradient(to left, var(--dark-bg), transparent); }

      .logo-track {
          display: inline-block;
          animation: 35s slide infinite linear; 
      }
      .logo-loop-container:hover .logo-track { animation-play-state: paused; }
      @keyframes slide {
          from { transform: translateX(0); }
          to { transform: translateX(-33.33%); } 
      }
      .logo-slide { display: inline-block; }

      .tech-item {
          display: inline-flex;
          align-items: center;
          margin: 0 40px;
          color: var(--secondary-color);
          font-weight: 700;
          font-size: 1.5rem;
          opacity: 0.7;
          transition: var(--transition);
      }
      .dark-mode .tech-item { color: var(--primary-color); }
      .tech-item:hover {
          opacity: 1;
          transform: scale(1.1); 
          color: var(--primary-color);
      }
      .tech-item i, .tech-item svg {
          font-size: 2rem;
          margin-right: 10px;
          height: 32px;
          width: 32px;
      }

      /* Social Media Buttons */
      .social-btn {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 45px;
          height: 45px;
          border-radius: 50%;
          border: 2px solid var(--secondary-color);
          color: var(--secondary-color);
          font-size: 1.3rem;
          transition: all 0.3s ease;
          text-decoration: none;
          background-color: transparent;
      }
      .social-btn:hover {
          background-color: var(--secondary-color);
          color: var(--light-bg);
          transform: translateY(-5px);
          box-shadow: 0 5px 15px rgba(163, 86, 56, 0.3);
      }
      body.dark-mode .social-btn {
          border-color: var(--primary-color);
          color: var(--primary-color);
      }
      body.dark-mode .social-btn:hover {
          background-color: var(--primary-color);
          color: var(--dark-bg);
          box-shadow: 0 5px 15px rgba(200, 164, 92, 0.4);
      }

      /* Project Button Styles (Custom) */
      .project-btn {
          border: 2px solid var(--primary-color) !important; /* Gold Border */
          color: var(--light-text) !important;
          background-color: transparent;
          border-radius: 0;
          text-transform: uppercase;
          letter-spacing: 1px;
          font-weight: 600;
          transition: all 0.3s ease;
      }
      .project-btn:hover {
          background-color: var(--primary-color) !important; /* Gold BG */
          color: var(--light-bg) !important; /* Light Text */
          transform: translateY(-3px);
      }

      /* Specific Dark Mode Overrides */
      body.dark-mode #home .hero-content p,
      body.dark-mode #home .hero-content {
          color: var(--secondary-color) !important;
      }
      body.dark-mode #about .col-6 .card h6,
      body.dark-mode #about .col-6 .card p {
          color: #ffffff !important;
      }
      body.dark-mode #about .col-6 .card i {
          color: var(--primary-color) !important;
      }
      /* Dark mode projects handled by specific class .project-btn above, 
         but ensuring overrides just in case */
      body.dark-mode #projects .project-btn {
          color: #ffffff !important;
      }
      body.dark-mode #projects .project-btn:hover {
          background-color: var(--secondary-color) !important;
          border-color: var(--secondary-color) !important;
      }
      
      /* Specific overrides for the Social Loop to remove borders/backgrounds */
      .social-loop-container {
        border-top: none !important;
        border-bottom: none !important;
        background-color: transparent !important;
        margin-top: 20px !important;
      }
      .social-loop-container .social-btn { margin: 0 15px; }

      @media (max-width: 991px) {
          .hero-content h1 { font-size: 2.5rem; }
          .hero-img { margin-top: 30px; }
      }
      @media (max-width: 767px) {
          section { padding: 70px 0; }
          .hero-content h1 { font-size: 2rem; }
          .fade-overlay { width: 50px; }
          .tech-item { margin: 0 20px; font-size: 1.2rem; }
      }
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
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
              <ul class="navbar-nav ms-auto align-items-center">
                  <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                  <li class="nav-item"><a class="nav-link" href="#achievements">Achievements</a></li>
                  <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                  <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                  
                  <li class="nav-item ms-3"><div class="theme-toggle" id="theme-toggle"></div></li>
                  
                  <li class="nav-item ms-3">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-custom" style="padding: 6px 15px; font-size: 0.85rem; border-radius: 4px;">Logout</button>
                    </form>
                  </li>

              </ul>
          </div>
      </div>
  </nav>

  <div class="modal fade" id="clothingModal" tabindex="-1" aria-labelledby="clothingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content" style="background-color: var(--light-card); border: 2px solid var(--primary-color);">
        <div class="modal-header" style="border-bottom: 1px solid var(--primary-color);">
          <h5 class="modal-title" id="clothingModalLabel" style="color: var(--secondary-color);">Clothing Brand Design</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <img src="Images/Mariano_Poster_1.png" class="img-fluid" alt="Full Design">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="homeCookModal" tabindex="-1" aria-labelledby="homeCookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content" style="background-color: var(--light-card); border: 2px solid var(--primary-color);">
        <div class="modal-header" style="border-bottom: 1px solid var(--primary-color);">
          <h5 class="modal-title" id="homeCookModalLabel" style="color: var(--secondary-color);">Home Cook App Design</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <img src="Images/Letter - 1.png" class="img-fluid mb-3" alt="Design Letter 1" style="width: 100%;">
          <img src="Images/Letter - 2.png" class="img-fluid" alt="Design Letter 2" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="cert1Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: var(--light-card); border: 2px solid var(--primary-color);">
        <div class="modal-header" style="border-bottom: 1px solid var(--primary-color);">
            <h5 class="modal-title" style="color: var(--secondary-color);">Cisco Certificate I</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-0">
            <img src="Images/First certificate.png" class="img-fluid" alt="Cisco Certificate 1 Full Size">
        </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="cert2Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: var(--light-card); border: 2px solid var(--primary-color);">
        <div class="modal-header" style="border-bottom: 1px solid var(--primary-color);">
            <h5 class="modal-title" style="color: var(--secondary-color);">Cisco Certificate II</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-0">
            <img src="Images/Second certificate.png" class="img-fluid" alt="Cisco Certificate 2 Full Size">
        </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="mlbbModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: var(--light-card); border: 2px solid var(--primary-color);">
        <div class="modal-header" style="border-bottom: 1px solid var(--primary-color);">
            <h5 class="modal-title" style="color: var(--secondary-color);">MLBB Achievement</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center p-0">
            <img src="Images/MLBB.png" class="img-fluid" alt="MLBB Full Size">
        </div>
        </div>
    </div>
    </div>

  <section id="home">
      <canvas id="squares-canvas"></canvas>
      
      <div class="curved-loop-jacket" id="curved-loop-container">
          <svg class="curved-loop-svg" viewBox="0 0 1440 120">
              <path id="curve-path" fill="none" stroke="transparent" />
              <text>
                  <textPath id="curve-text-path" href="#curve-path" startOffset="0">
                      </textPath>
              </text>
          </svg>
      </div>

      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 animate">
                  <div class="hero-content column-decoration">
                      <h1 class="animated-heading">
                        <span>H</span><span>e</span><span>l</span><span>l</span><span>o</span><span>,</span><span> </span>
                        <span>I</span><span>'</span><span>m</span><span> </span>
                        <span style="color: var(--primary-color);">A</span><span style="color: var(--primary-color);">e</span><span style="color: var(--primary-color);">l</span><span style="color: var(--primary-color);">l</span><span style="color: var(--primary-color);">o</span><span style="color: var(--primary-color);">r</span><span style="color: var(--primary-color);">e</span><span style="color: var(--primary-color);">n</span>
                      </h1>
                      <p>Newbie programmer</p>
                      <div class="d-flex flex-wrap gap-3">
                          <a href="#contact" class="btn btn-custom">Send a Message</a>
                          <a href="AellorenCV.pdf" class="btn btn-outline-custom" download>Download CV</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 animate">
                  <div class="hero-img-wrapper">
                    <img src="Images/Aelloren.jpg" alt="Photo" class="hero-img img-fluid">
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section id="about">
      <div class="container">
          <h2 class="section-title mb-5">About Me</h2>
          <div class="row align-items-stretch">
              <div class="col-lg-6 mb-4 mb-lg-0 animate d-flex flex-column">
                  <div class="card p-4 flex-grow-1">
                      <h4 class="mb-3" style="color: var(--secondary-color);">Who I Am</h4>
                      <p class="lead" style="font-weight: 500;">I am Aelloren, 20 years old.</p>
                      <p>My life is a balance of fun, stress, and relaxation. I love spending my time caring for my <strong>19 pets</strong>, hanging out with friends online.</p>
                      <p class="mb-0">When I'm at home, you'll usually find me listening to music—whether I'm cleaning, cooking, reading, or taking a bath. It sets the vibe for everything I do.</p>
                  </div>
                  
                  <h5 class="text-center mt-4 mb-2" style="color: var(--secondary-color); letter-spacing: 2px; font-weight: 700;">CONNECT WITH ME</h5>

                  <div class="logo-loop-container social-loop-container mt-2" style="border: none; padding: 10px 0; background: transparent;">
                      <div class="fade-overlay fade-left"></div>
                      <div class="fade-overlay fade-right"></div>
                      <div class="logo-track" style="animation-duration: 20s;">
                          <div class="logo-slide">
                              <a href="https://www.instagram.com/sick.6six/" target="_blank" class="social-btn mx-3" title="Instagram"><i class="bi bi-instagram"></i></a>
                              <a href="https://x.com/AlienFranks" target="_blank" class="social-btn mx-3" title="X"><i class="bi bi-twitter-x"></i></a>
                              <a href="https://www.facebook.com/sickooooo" target="_blank" class="social-btn mx-3" title="Facebook"><i class="bi bi-facebook"></i></a>
                              <a href="https://github.com/sickoooo" target="_blank" class="social-btn mx-3" title="GitHub"><i class="bi bi-github"></i></a>
                              <a href="https://discord.com/users/869434885553664081" target="_blank" class="social-btn mx-3" title="Discord"><i class="bi bi-discord"></i></a>
                          </div>
                          <div class="logo-slide">
                              <a href="https://www.instagram.com/sick.6six/" target="_blank" class="social-btn mx-3" title="Instagram"><i class="bi bi-instagram"></i></a>
                              <a href="https://x.com/AlienFranks" target="_blank" class="social-btn mx-3" title="X"><i class="bi bi-twitter-x"></i></a>
                              <a href="https://www.facebook.com/sickooooo" target="_blank" class="social-btn mx-3" title="Facebook"><i class="bi bi-facebook"></i></a>
                              <a href="https://github.com/sickoooo" target="_blank" class="social-btn mx-3" title="GitHub"><i class="bi bi-github"></i></a>
                              <a href="https://discord.com/users/869434885553664081" target="_blank" class="social-btn mx-3" title="Discord"><i class="bi bi-discord"></i></a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 animate">
                  <div class="row g-3 h-100"> 
                      <div class="col-6">
                          <div class="card p-3 text-center h-100 justify-content-center align-items-center">
                              <i class="fas fa-paw fa-2x mb-2" style="color: var(--primary-color);"></i>
                              <h6 class="fw-bold">Pet Lover</h6>
                              <p class="small text-muted mb-0">Caring for 19 pets</p>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="card p-3 text-center h-100 justify-content-center align-items-center">
                              <i class="fas fa-gamepad fa-2x mb-2" style="color: var(--primary-color);"></i>
                              <h6 class="fw-bold">Gamer</h6>
                              <p class="small text-muted mb-0">Online w/ friends</p>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="card p-3 text-center h-100 justify-content-center align-items-center">
                              <i class="fas fa-moon fa-2x mb-2" style="color: var(--primary-color);"></i>
                              <h6 class="fw-bold">Night Owl</h6>
                              <p class="small text-muted mb-0">Midnight adventures</p>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="card p-3 text-center h-100 justify-content-center align-items-center">
                              <i class="fas fa-music fa-2x mb-2" style="color: var(--primary-color);"></i>
                              <h6 class="fw-bold">Music</h6>
                              <p class="small text-muted mb-0">I Love musics</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section id="achievements">
      <div class="container">
          <h2 class="section-title mb-5">Achievements</h2>
          <div class="row text-center">
              <div class="col-md-4 mb-4 animate">
                  <div class="achievement-box p-3 h-100">
                      <div class="img-wrapper mb-3 position-relative" style="border: 2px solid var(--primary-color); padding: 5px; background: var(--light-card); cursor: pointer; transition: transform 0.3s;" data-bs-toggle="modal" data-bs-target="#cert1Modal" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                          <img src="Images/First certificate.png" alt="Cisco Certificate 1" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                          <div class="position-absolute top-50 start-50 translate-middle text-white" style="pointer-events: none; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                              <i class="fas fa-search-plus fa-lg opacity-50"></i>
                          </div>
                      </div>
                      <h5 class="fw-bold" style="color: var(--secondary-color);">Cisco Certificate I</h5>
                      <p class="small text-muted mb-0">Successfully completed the Cisco networking requirements and training.</p>
                  </div>
              </div>

              <div class="col-md-4 mb-4 animate">
                   <div class="achievement-box p-3 h-100">
                      <div class="img-wrapper mb-3 position-relative" style="border: 2px solid var(--primary-color); padding: 5px; background: var(--light-card); cursor: pointer; transition: transform 0.3s;" data-bs-toggle="modal" data-bs-target="#cert2Modal" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                          <img src="Images/Second certificate.png" alt="Cisco Certificate 2" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                          <div class="position-absolute top-50 start-50 translate-middle text-white" style="pointer-events: none; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                              <i class="fas fa-search-plus fa-lg opacity-50"></i>
                          </div>
                      </div>
                      <h5 class="fw-bold" style="color: var(--secondary-color);">Cisco Certificate II</h5>
                      <p class="small text-muted mb-0">Advanced certification in Cisco Network technologies.</p>
                  </div>
              </div>

              <div class="col-md-4 mb-4 animate">
                  <div class="achievement-box p-3 h-100">
                      <div class="img-wrapper mb-3 position-relative" style="border: 2px solid var(--primary-color); padding: 5px; background: var(--light-card); cursor: pointer; transition: transform 0.3s;" data-bs-toggle="modal" data-bs-target="#mlbbModal" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                          <img src="Images/MLBB.png" alt="MLBB Achievement" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                          <div class="position-absolute top-50 start-50 translate-middle text-white" style="pointer-events: none; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                              <i class="fas fa-search-plus fa-lg opacity-50"></i>
                          </div>
                      </div>
                      <h5 class="fw-bold" style="color: var(--secondary-color);">MLBB Tournament</h5>
                      <p class="small text-muted mb-0">Software Day (SFD) Champion in Mobile Legends: Bang Bang.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section id="skills">
      <div class="container">
          <h2 class="section-title mb-5">My Skills</h2>
          <div class="row">
              <div class="col-md-6 mb-4 animate">
                  <div class="card p-4 h-100">
                      <h3 class="mb-4" style="color: var(--secondary-color);">Technical</h3>
                      
                      <div class="mb-3">
                          <div class="d-flex justify-content-between">
                              <span class="fw-bold">HTML & CSS</span>
                              <span>90%</span>
                          </div>
                          <div class="progress" style="height: 8px; background-color: rgba(200, 164, 92, 0.2); border-radius: 0;">
                              <div class="progress-bar" role="progressbar" style="width: 90%; background-color: var(--primary-color);" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>

                      <div class="mb-3">
                          <div class="d-flex justify-content-between">
                              <span class="fw-bold">JavaScript / PHP</span>
                              <span>75%</span>
                          </div>
                          <div class="progress" style="height: 8px; background-color: rgba(200, 164, 92, 0.2); border-radius: 0;">
                              <div class="progress-bar" role="progressbar" style="width: 75%; background-color: var(--primary-color);" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>

                      <div class="mb-3">
                          <div class="d-flex justify-content-between">
                              <span class="fw-bold">Database (MySQL)</span>
                              <span>80%</span>
                          </div>
                          <div class="progress" style="height: 8px; background-color: rgba(200, 164, 92, 0.2); border-radius: 0;">
                              <div class="progress-bar" role="progressbar" style="width: 80%; background-color: var(--primary-color);" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>

                      <div class="mb-3">
                          <div class="d-flex justify-content-between">
                              <span class="fw-bold">Figma (Wireframes & Prototype)</span>
                              <span>60%</span>
                          </div>
                          <div class="progress" style="height: 8px; background-color: rgba(200, 164, 92, 0.2); border-radius: 0;">
                              <div class="progress-bar" role="progressbar" style="width: 60%; background-color: var(--primary-color);" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>

                      <div class="mb-3">
                          <div class="d-flex justify-content-between">
                              <span class="fw-bold">Cisco</span>
                              <span>40%</span>
                          </div>
                          <div class="progress" style="height: 8px; background-color: rgba(200, 164, 92, 0.2); border-radius: 0;">
                              <div class="progress-bar" role="progressbar" style="width: 40%; background-color: var(--primary-color);" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>

                      <div class="mb-3">
                          <div class="d-flex justify-content-between">
                              <span class="fw-bold">Java</span>
                              <span>30%</span>
                          </div>
                          <div class="progress" style="height: 8px; background-color: rgba(200, 164, 92, 0.2); border-radius: 0;">
                              <div class="progress-bar" role="progressbar" style="width: 30%; background-color: var(--primary-color);" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>

                      <div class="mb-3">
                          <div class="d-flex justify-content-between">
                              <span class="fw-bold">C</span>
                              <span>30%</span>
                          </div>
                          <div class="progress" style="height: 8px; background-color: rgba(200, 164, 92, 0.2); border-radius: 0;">
                              <div class="progress-bar" role="progressbar" style="width: 30%; background-color: var(--primary-color);" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 mb-4 animate">
                  <div class="card p-4 h-100">
                      <h3 class="mb-4" style="color: var(--secondary-color);">Soft Skills</h3>
                      <div class="row text-center">
                          <div class="col-6 mb-3">
                              <i class="fas fa-users fa-2x mb-2" style="color: var(--primary-color);"></i>
                              <h5>Teamwork</h5>
                              <p class="small">Great at collaborating in online games and group projects.</p>
                          </div>
                          <div class="col-6 mb-3">
                              <i class="fas fa-clock fa-2x mb-2" style="color: var(--primary-color);"></i>
                              <h5>Time Management</h5>
                              <p class="small">Balancing pet care, studies, house choirs, and social life effectively.</p>
                          </div>
                          <div class="col-6 mb-3">
                              <i class="fas fa-lightbulb fa-2x mb-2" style="color: var(--primary-color);"></i>
                              <h5>Creativity</h5>
                              <p class="small">Designing layouts.</p>
                          </div>
                          <div class="col-6 mb-3">
                              <i class="fas fa-paw fa-2x mb-2" style="color: var(--primary-color);"></i>
                              <h5>Pet Care</h5>
                              <p class="small">Expertise in managing and caring for multiple animals.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="tech-stack-wrapper mt-4 animate">
                <h4 class="text-center mb-4" style="color: var(--secondary-color); letter-spacing: 2px;">TECHNOLOGIES I USE</h4>
                
                <div class="logo-loop-container">
                    <div class="fade-overlay fade-left"></div>
                    <div class="fade-overlay fade-right"></div>
                    <div class="logo-track" style="animation-duration: 35s;">
                        <div class="logo-slide">
                            <div class="tech-item"><i class="fab fa-react"></i> <span>React</span></div>
                            <div class="tech-item">
                                <svg viewBox="0 0 128 128" fill="currentColor"><path d="M1.5 63.9C1.4 34.3 25.3 10.5 55.4 10.3c30.2-.2 54.8 23.6 55 53.7.2 30.1-23.7 54.7-53.7 54.9C26.7 119 2.7 95 1.5 63.9zm13.7.2c-.2 22.3 17.8 40.7 40.2 40.9 22.2.1 40.6-17.7 40.8-39.9.2-22.3-17.7-40.7-40-40.9-22.5-.2-40.8 17.9-41 39.9zm27.8-19.1h15v4.5h-5.2v25.2h-4.6V49.5h-5.2v-4.5zm27.3 22.7c-.5-3-2.6-4.6-5.8-4.6-3.2 0-4.5 1.5-4.5 3.6 0 2.4 2.1 3.5 6.1 4.5 5.5 1.4 8.6 4.1 8.6 9 0 5.8-4.8 9.3-10.7 9.3-6.6 0-11-3.6-11.4-9.6l4.2-.6c.3 4 2.9 6.2 7.2 6.2 3.6 0 5.9-1.5 5.9-5.1 0-2.6-2.2-4-5.9-4.9-5.3-1.3-8.8-3.9-8.8-8.7 0-5.3 4.2-8.7 10-8.7 5.2 0 9.7 2.6 10.3 8l-4.1.7z"/></svg>
                                <span>TypeScript</span>
                            </div>
                            <div class="tech-item">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>
                                <span>Tailwind</span>
                            </div>
                            <div class="tech-item"><i class="fab fa-bootstrap"></i> <span>Bootstrap</span></div>
                            <div class="tech-item"><i class="fab fa-laravel"></i> <span>Laravel</span></div>
                            <div class="tech-item">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5.46 14.45c-1.35.53-3.67 1.16-5.46.29-.9.44-2.25.9-3.87.52 0 0-1.59-.44-.92-1.74.2-.39 2.06.09 2.6.04.42-.56 1.16-1.56 1.59-2.3-1.07-1.39-2.22-3.69-.93-5.29.56-.7 1.59-.97 2.45-.48.29-1.83 2.06-2.79 3.73-2.15.8.31 1.27.99 1.25 1.63 1.21.36 2.2 1.19 1.96 2.62-.21 1.26-1.35 1.94-2.19 2.07-.36 1.77-1.34 3.74-3.09 4.86.82.26 1.99.23 2.88-.07z"/></svg>
                                <span>MySQL</span>
                            </div>
                            <div class="tech-item"><i class="fab fa-github"></i> <span>GitHub</span></div>
                            <div class="tech-item">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29l-9.46 8.63-4.12-3.128a.999.999 0 0 0-1.245.09L.325 7.26a1 1 0 0 0-.098 1.42l5.12 5.32L.227 19.32a1 1 0 0 0 .098 1.42l1.354 1.16a.999.999 0 0 0 1.245.09l4.12-3.128 9.46 8.63a1.492 1.492 0 0 0 1.704.29l4.94-2.377A1.5 1.5 0 0 0 24 24.06V2.588c0-.802-.63-1.44-1.29-1.44a1.493 1.493 0 0 0-.44.14zM16.5 16.5L7.5 12l9-4.5v9z"/></svg>
                                <span>VS Code</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
  </section>

  <section id="projects">
      <div class="container">
          <h2 class="section-title mb-5">My Projects</h2>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 animate">
                  <div class="card h-100">
                      <img src="Images/Mariano_Poster_1.png" class="card-img-top" alt="Mariano Poster" style="height: 200px; object-fit: cover;">
                      <div class="card-body">
                          <h5 class="card-title fw-bold">Clothing brand design</h5>
                          <p class="card-text">A clothing brand design concept featuring modern streetwear aesthetics, cohesive visual identity, and a clean, versatile logo.</p>
                          <a href="#" class="btn project-btn btn-sm" data-bs-toggle="modal" data-bs-target="#clothingModal">View Design</a>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4 animate">
                  <div class="card h-100">
                      <img src="Images/Home - Trending Page.png" class="card-img-top" alt="Trending Page" style="height: 200px; object-fit: cover;">
                      <div class="card-body">
                          <h5 class="card-title fw-bold">Air bnb prototype app</h5>
                          <p class="card-text">An Airbnb-style booking app mockup for short-term stays, featuring property listings, detailed accommodation pages, and a streamlined reservation flow.</p>
                          <a href="https://www.figma.com/proto/RN2jESgXkslAo3c7bvrxjt/Webprog-AirBNB?node-id=33-2134&t=9tN2WgTfVqfWN3ZB-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=33%3A2134" target="_blank" class="btn project-btn btn-sm">View Demo</a>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4 animate">
                  <div class="card h-100">
                      <img src="Images/Home.png" class="card-img-top" alt="Home Page" style="height: 200px; object-fit: cover;">
                      <div class="card-body">
                          <h5 class="card-title fw-bold">Home cook app</h5>
                          <p class="card-text">A home-cooking app mockup that connects users with homemade meals, featuring dish browsing, and cook profiles.</p>
                          <div class="d-flex gap-2">
                              <a href="https://www.figma.com/proto/r8I5Yw3hRFpqmD1Tfk5qvF/HCOMINT--Real-?node-id=1-37&t=ulh2BvHeRvkOfrWl-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=1%3A2&show-proto-sidebar=1" target="_blank" class="btn project-btn btn-sm">View Demo</a>
                              <a href="#" class="btn project-btn btn-sm" data-bs-toggle="modal" data-bs-target="#homeCookModal">View Design</a>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
  </section>

  <section id="contact">
      <div class="container">
          <h2 class="section-title mb-5">Send a Message</h2>
          <div class="row">
              <div class="col-lg-8 mx-auto animate">
                  <form class="contact-form">
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Your Name">
                          </div>
                          <div class="col-md-6">
                              <input type="email" class="form-control" placeholder="Your Email">
                          </div>
                      </div>
                      <input type="text" class="form-control" placeholder="Subject">
                      <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                      <button type="submit" class="btn btn-custom w-100">Send Message</button>
                  </form>
              </div>
          </div>
      </div>
  </section>

  <footer>
      <div class="container">
          <p>&copy; <span id="currentYear"></span> DISCLAIMER: No Copyright Infringement Intended. For Educational Purposes only.</p>
      </div>
  </footer>

  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
      // General Scripts
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

      // --- SQUARES BACKGROUND LOGIC (Vanilla JS Port) ---
      function initSquares() {
        const canvas = document.getElementById('squares-canvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        
        // CONFIG MATCHING YOUR REQUEST
        const config = {
            speed: 0.27,
            squareSize: 40,
            direction: 'diagonal',
            borderColor: '#ffffff', // User requested white borders
            hoverFillColor: '#222222' // User requested dark hover
        };

        let gridOffset = { x: 0, y: 0 };
        let hoveredSquare = null;
        let animationId;
        let numSquaresX, numSquaresY;

        const resizeCanvas = () => {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
            numSquaresX = Math.ceil(canvas.width / config.squareSize) + 1;
            numSquaresY = Math.ceil(canvas.height / config.squareSize) + 1;
        };

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        const drawGrid = () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            const startX = Math.floor(gridOffset.x / config.squareSize) * config.squareSize;
            const startY = Math.floor(gridOffset.y / config.squareSize) * config.squareSize;

            ctx.lineWidth = 1;

            for (let x = startX; x < canvas.width + config.squareSize; x += config.squareSize) {
                for (let y = startY; y < canvas.height + config.squareSize; y += config.squareSize) {
                    const squareX = x - (gridOffset.x % config.squareSize);
                    const squareY = y - (gridOffset.y % config.squareSize);

                    if (hoveredSquare && 
                        Math.floor((x - startX) / config.squareSize) === hoveredSquare.x &&
                        Math.floor((y - startY) / config.squareSize) === hoveredSquare.y) {
                        
                        ctx.fillStyle = config.hoverFillColor;
                        ctx.fillRect(squareX, squareY, config.squareSize, config.squareSize);
                    }

                    ctx.strokeStyle = config.borderColor;
                    ctx.strokeRect(squareX, squareY, config.squareSize, config.squareSize);
                }
            }

            // Radial Gradient Mask (Fade to Background Color)
            const gradient = ctx.createRadialGradient(
                canvas.width / 2, canvas.height / 2, 0,
                canvas.width / 2, canvas.height / 2, Math.sqrt(canvas.width**2 + canvas.height**2) / 2
            );
            
            // Dynamically get current background color for seamless fading
            const computedStyle = getComputedStyle(document.body);
            const bgColor = computedStyle.backgroundColor || '#f5f0e1';
            
            gradient.addColorStop(0, 'rgba(0, 0, 0, 0)'); // Center Transparent
            gradient.addColorStop(1, bgColor); // Edges Solid Background

            ctx.fillStyle = gradient;
            ctx.fillRect(0, 0, canvas.width, canvas.height);
        };

        const updateAnimation = () => {
            const effectiveSpeed = Math.max(config.speed, 0.1);
            switch (config.direction) {
                case 'right':
                    gridOffset.x = (gridOffset.x - effectiveSpeed + config.squareSize) % config.squareSize;
                    break;
                case 'left':
                    gridOffset.x = (gridOffset.x + effectiveSpeed + config.squareSize) % config.squareSize;
                    break;
                case 'up':
                    gridOffset.y = (gridOffset.y + effectiveSpeed + config.squareSize) % config.squareSize;
                    break;
                case 'down':
                    gridOffset.y = (gridOffset.y - effectiveSpeed + config.squareSize) % config.squareSize;
                    break;
                case 'diagonal':
                    gridOffset.x = (gridOffset.x - effectiveSpeed + config.squareSize) % config.squareSize;
                    gridOffset.y = (gridOffset.y - effectiveSpeed + config.squareSize) % config.squareSize;
                    break;
            }

            drawGrid();
            animationId = requestAnimationFrame(updateAnimation);
        };

        const handleMouseMove = (event) => {
            const rect = canvas.getBoundingClientRect();
            const mouseX = event.clientX - rect.left;
            const mouseY = event.clientY - rect.top;

            const startX = Math.floor(gridOffset.x / config.squareSize) * config.squareSize;
            const startY = Math.floor(gridOffset.y / config.squareSize) * config.squareSize;

            const hoveredSquareX = Math.floor((mouseX + gridOffset.x - startX) / config.squareSize);
            const hoveredSquareY = Math.floor((mouseY + gridOffset.y - startY) / config.squareSize);

            if (!hoveredSquare || hoveredSquare.x !== hoveredSquareX || hoveredSquare.y !== hoveredSquareY) {
                hoveredSquare = { x: hoveredSquareX, y: hoveredSquareY };
            }
        };

        const handleMouseLeave = () => {
            hoveredSquare = null;
        };

        canvas.addEventListener('mousemove', handleMouseMove);
        canvas.addEventListener('mouseleave', handleMouseLeave);

        animationId = requestAnimationFrame(updateAnimation);
      }

      // --- CURVED LOOP ANIMATION LOGIC (Preserved) ---
      (function initCurvedLoop() {
          const marqueeText = "Aelloren ★ Mariano ★ Aelloren ★ Mariano ★ Aelloren ★ Mariano ★ ";
          const speed = 2;
          const curveAmount = 400; 
          const interactive = true;
          
          const jacket = document.getElementById('curved-loop-container');
          const path = document.getElementById('curve-path');
          const textPath = document.getElementById('curve-text-path');
          
          if(!jacket || !path || !textPath) return;

          // Set the path d attribute dynamically
          const pathD = `M-100,40 Q500,${40 + curveAmount} 1540,40`;
          path.setAttribute('d', pathD);

          // Measure text width 
          const svg = jacket.querySelector('svg');
          const tempText = document.createElementNS("http://www.w3.org/2000/svg", "text");
          tempText.textContent = marqueeText;
          tempText.style.visibility = 'hidden';
          tempText.style.position = 'absolute';
          svg.appendChild(tempText);
          const spacing = tempText.getComputedTextLength();
          svg.removeChild(tempText);

          // Repeat text logic
          let totalText = marqueeText;
          if (spacing > 0) {
              const repeatCount = Math.ceil(1800 / spacing) + 2;
              totalText = new Array(repeatCount).fill(marqueeText).join('');
          }
          textPath.textContent = totalText;

          // Animation Logic
          let offset = -spacing; // Start offset
          textPath.setAttribute('startOffset', offset + 'px');

          let isDragging = false;
          let lastX = 0;
          let velocity = 0;
          let direction = 'left';
          
          let animationFrame;

          function step() {
              if (!isDragging) {
                  const delta = direction === 'right' ? speed : -speed;
                  let newOffset = offset + delta;

                  const wrapPoint = spacing;
                  if (newOffset <= -wrapPoint) newOffset += wrapPoint;
                  if (newOffset > 0) newOffset -= wrapPoint;

                  offset = newOffset;
                  textPath.setAttribute('startOffset', offset + 'px');
              }
              animationFrame = requestAnimationFrame(step);
          }
          
          step();

          if (interactive) {
              jacket.addEventListener('pointerdown', (e) => {
                  isDragging = true;
                  lastX = e.clientX;
                  velocity = 0;
                  jacket.style.cursor = 'grabbing';
                  e.target.setPointerCapture(e.pointerId);
              });

              jacket.addEventListener('pointermove', (e) => {
                  if (!isDragging) return;
                  const dx = e.clientX - lastX;
                  lastX = e.clientX;
                  velocity = dx;

                  let newOffset = offset + dx;
                  const wrapPoint = spacing;
                  if (newOffset <= -wrapPoint) newOffset += wrapPoint;
                  if (newOffset > 0) newOffset -= wrapPoint;

                  offset = newOffset;
                  textPath.setAttribute('startOffset', offset + 'px');
              });

              const endDrag = () => {
                  if (!isDragging) return;
                  isDragging = false;
                  direction = velocity > 0 ? 'right' : 'left';
                  jacket.style.cursor = 'grab';
              };

              jacket.addEventListener('pointerup', endDrag);
              jacket.addEventListener('pointerleave', endDrag);
              
              jacket.style.cursor = 'grab';
          }
      })();

      // Initialize
      document.addEventListener('DOMContentLoaded', () => {
        initSquares();
      });

  </script>
</body>
</html>