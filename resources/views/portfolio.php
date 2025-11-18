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

      /* Add hover pause effect */
      .wave-text:hover span {
          animation-play-state: paused;
      }

      .dark-mode .navbar-brand {
          color: var(--primary-color);
      }

      .nav-link {
          color: var(--light-text);
          margin: 0 10px;
          position: relative;
          font-weight: 500;
          text-transform: uppercase;
          letter-spacing: 1px;
      }

      .dark-mode .nav-link {
          color: var(--dark-text);
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
      .skill-item {
          margin-bottom: 25px;
      }

      .skill-name {
          font-weight: 600;
          margin-bottom: 10px;
          display: flex;
          justify-content: space-between;
      }

      .progress {
          height: 10px;
          border-radius: 0;
          background-color: rgba(200, 164, 92, 0.1);
      }

      .progress-bar {
          background-color: var(--primary-color);
          border-radius: 0;
      }

      .skill-badge {
          display: inline-block;
          padding: 8px 15px;
          margin: 5px;
          background-color: rgba(200, 164, 92, 0.1);
          color: var(--primary-color);
          border-radius: 0;
          font-weight: 500;
          transition: var(--transition);
          border: 1px solid var(--primary-color);
      }

      .dark-mode .skill-badge {
          background-color: rgba(200, 164, 92, 0.2);
      }

      .skill-badge:hover {
          background-color: var(--primary-color);
          color: var(--light-bg);
          transform: translateY(-3px);
      }

      .cards {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 0 auto;
      }

      .card__like {
        width: 18px;
        fill: var(--primary-color);
      }

      .card__clock {
        width: 15px;
        vertical-align: middle;
        fill: var(--primary-color);
      }

      .card__time {
        font-size: 12px;
        color: var(--primary-color);
        vertical-align: middle;
        margin-left: 5px;
      }

      .card__clock-info {
        float: right;
      }

      .card__img {
        visibility: hidden;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 235px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
      }

      .card__info-hover {
        position: absolute;
        padding: 16px;
        width: 100%;
        opacity: 0;
        top: 0;
        z-index: 3;
      }

      .card__img--hover {
        transition: 0.2s all ease-out;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        position: absolute;
        height: 235px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        top: 0;
      }

      .project-card {
        margin: 0 15px 30px;
        transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
        background-color: #fff;
        width: calc(33.3% - 30px);
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 13px 10px -7px rgba(0, 0, 0,0.1);
      }

      .dark-mode .project-card {
        background-color: var(--dark-card);
      }

      .project-card:hover {
        box-shadow: 0px 30px 18px -8px rgba(0, 0, 0,0.1);
        transform: scale(1.10, 1.10);
      }

      .card__info {
        z-index: 2;
        background-color: #fff;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
        padding: 16px 24px 24px 24px;
      }

      .dark-mode .card__info {
        background-color: var(--dark-card);
        color: var(--dark-text);
      }

      .card__category {
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 2px;
        font-weight: 500;
        color: var(--primary-color);
      }

      .card__title {
        margin-top: 5px;
        margin-bottom: 10px;
        font-family: 'Roboto Slab', serif;
        color: var(--light-text);
      }

      .dark-mode .card__title {
        color: var(--dark-text);
      }

      .card__by {
        font-size: 12px;
        font-family: 'Raleway', sans-serif;
        font-weight: 500;
        color: var(--light-text);
      }

      .dark-mode .card__by {
        color: var(--dark-text);
      }

      .card__author {
        font-weight: 600;
        text-decoration: none;
        color: var(--primary-color);
      }

      .project-card:hover .card__img--hover {
        height: 100%;
        opacity: 0.3;
      }

      .project-card:hover .card__info {
        background-color: transparent;
        position: relative;
      }

      .project-card:hover .card__info-hover {
        opacity: 1;
      }

      @media (max-width: 991px) {
        .project-card {
          width: calc(50% - 30px);
        }
      }

      @media (max-width: 767px) {
        .project-card {
          width: calc(100% - 30px);
        }
      }

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

      .contact-form .form-control:focus {
          box-shadow: none;
          border-color: var(--secondary-color);
      }

      /* Social Icons with Hover Effect */
      .social-icons {
          display: flex;
          padding: 0;
          margin-top: 30px;
          justify-content: center;
      }

      .social-icons li {
          list-style: none;
          margin: 0 10px;
      }

      .social-icons li a {
          width: 60px;
          height: 60px;
          background-color: var(--light-card);
          text-align: center;
          line-height: 60px;
          font-size: 24px;
          margin: 0 5px;
          display: block;
          border-radius: 0;
          position: relative;
          overflow: hidden;
          border: 2px solid var(--primary-color);
          z-index: 1;
          transition: var(--transition);
      }

      .dark-mode .social-icons li a {
          background-color: var(--dark-card);
          border: 2px solid var(--primary-color);
      }

      .social-icons li a .icon {
          position: relative;
          color: var(--primary-color);
          transition: .5s;
          z-index: 3;
      }

      .dark-mode .social-icons li a .icon {
          color: var(--primary-color);
      }

      .social-icons li a:hover .icon {
          color: var(--light-bg);
          transform: rotateY(360deg);
      }

      .social-icons li a:before {
          content: "";
          position: absolute;
          top: 100%;
          left: 0;
          width: 100%;
          height: 100%;
          transition: .5s;
          z-index: 2;
      }

      .social-icons li a:hover:before {
          top: 0;
      }

      .social-icons li:nth-child(1) a:before {
          background: var(--primary-color);
      }

      .social-icons li:nth-child(2) a:before {
          background: var(--primary-color);
      }

      .social-icons li:nth-child(3) a:before {
          background: var(--primary-color);
      }

      .social-icons li:nth-child(4) a:before {
          background: var(--primary-color);
      }

      .social-icons li:nth-child(5) a:before {
          background: var(--primary-color);
      }

      @media (max-width: 767px) {
          .social-icons li a {
              width: 50px;
              height: 50px;
              line-height: 50px;
              font-size: 20px;
          }
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
          <div class="row">
              <div class="col-lg-6 animate">
                  <div class="card p-4">
                      <h3>My Background</h3>
                      <p>I am a 3rd-year Computer Science student with an interest in software engineering, particularly in adaptability and flexibility. </p>
                      <p>I am working on a Home cook application project and have also explored other project ideas like "Friend Group Decision Picker" app (Spin the wheel) </p>
                  </div>
              </div>
              <div class="col-lg-6 animate">
                  <div class="card p-4">
                      <h3>My Journey</h3>
                      <div class="timeline">
                          <div class="timeline-item">
                              <div class="timeline-date">2025 - Present</div>
                              <h4>College student at City College of Angeles</h4>
                              <p>I am a Third-year Computer Science student</p>
                          </div>
                          <div class="timeline-item">
                              <div class="timeline-date">2023</div>
                              <h4>Graduated from Angeles City National Trade School</h4>
                              <p>TECHNICAL VOCATIONAL LIVELIHOOD (TVL) Information and Communication Technology.</p>
                              <p>With High Honors</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Skills Section -->
  <section id="skills">
      <div class="container">
          <h2 class="section-title">My Skills</h2>
          <div class="row">
              <div class="col-lg-6 animate">
                  <h3>Technical Skills</h3>
                  <div class="skill-item">
                      <div class="skill-name">
                          <span>JavaScript</span>
                          <span>35%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
                  <div class="skill-item">
                      <div class="skill-name">
                          <span>C</span>
                          <span>70%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
                  <div class="skill-item">
                      <div class="skill-name">
                          <span>Python</span>
                          <span>85%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
                  <div class="skill-item">
                      <div class="skill-name">
                          <span>HTML/CSS</span>
                          <span>65%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
                  <div class="skill-item">
                      <div class="skill-name">
                          <span>Java</span>
                          <span>50%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 animate">
                  <h3>Soft Skills</h3>
                  <div class="skill-badges">
                      <span class="skill-badge">Problem Solving</span>
                      <span class="skill-badge">Team Leadership</span>
                      <span class="skill-badge">Communication</span>
                      <span class="skill-badge">Time Management</span>
                      <span class="skill-badge">Adaptability</span>
                      <span class="skill-badge">Strategic Thinking</span>
                      <span class="skill-badge">Leadership</span>
                      <span class="skill-badge">Creativity</span>
                      <span class="skill-badge">Collaboration</span>
                      <span class="skill-badge">Project Management</span>
                  </div>
                  <h3 class="mt-4">Other Technologies</h3>
                  <div class="skill-badges">
                      <span class="skill-badge">MySQL</span>
                      <span class="skill-badge">ENetworking</span>
                      <span class="skill-badge">Content Creation</span>
                      <span class="skill-badge">Web & UI/UX Design</span>
                      <span class="skill-badge">3D Printing & CAD Design</span>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Projects Section -->
  <section id="projects">
      <div class="container">
          <h2 class="section-title">My Projects</h2>
          <div class="cards">
              <article class="project-card">
                  <div class="card__info-hover">
                      <svg class="card__like" viewBox="0 0 24 24">
                          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                      </svg>
                      <div class="card__clock-info">
                          <svg class="card__clock" viewBox="0 0 24 24">
                              <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                          </svg>
                          <span class="card__time">5 hours</span>
                      </div>
                  </div>
                  <div class="card__img"></div>
                  <a href="#" class="card_link">
                      <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-5.fna.fbcdn.net/v/t1.15752-9/487404993_1693706551222654_6132342923487865166_n.png?_nc_cat=105&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGx4jIb_d-6CBmA4I5kIqJoAvZtAVd6u1oC9m0BV3q7WsqzI0oF4KMUEuLeGSCdw82fYkfn4VnAMhFZNkbRWtF7&_nc_ohc=IbLXwPAMuZMQ7kNvwEH2d6Q&_nc_oc=Adk__FPleL8hbU81CckhIx48IMZ-fHgtbM1KHA_Kra4h03Z4X-tUC3jTmY5MuSrnlHw&_nc_zt=23&_nc_ht=scontent.fcrk1-5.fna&oh=03_Q7cD1wEDFlwW84SZEUJt23NhBkmGrVuMnZOMvBNdWSkAxd-Fhg&oe=68176372')"></div>
                  </a>
                  <div class="card__info">
                      <span class="card__category">Figma</span>
                      <h3 class="card__title">Home Cook</h3>
                      <span class="card__by">by <a href="#" class="card__author" title="author">Aelloren</a></span>
                  </div>
              </article>
              
              <article class="project-card">
                  <div class="card__info-hover">
                      <svg class="card__like" viewBox="0 0 24 24">
                          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                      </svg>
                      <div class="card__clock-info">
                          <svg class="card__clock" viewBox="0 0 24 24">
                              <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                          </svg>
                          <span class="card__time">30 hours</span>
                      </div>
                  </div>
                  <div class="card__img"></div>
                  <a href="#" class="card_link">
                      <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/488264143_630040399945490_6278627892477885151_n.png?_nc_cat=109&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeF09hn7SSMsCmyy9o-0vW4MTyzjMSE8A9lPLOMxITwD2eciwRGLdr4kDl94VoeyQgdl0m1y7UWMH92fr6LPrCrJ&_nc_ohc=f1nON0ty-vsQ7kNvwGjkd-u&_nc_oc=AdlLuZaIQS5_Fop3BrLYUPS6771TltmC_Fi3mQvKyj4rYLJgE0ZKFPF7GEi5tkXpJdY&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&oh=03_Q7cD1wHSLNIRCkDSyKI0LCEnPxUyjF1e65vLqofdjHjLv9eFsw&oe=681766FD')"></div>
                  </a>
                  <div class="card__info">
                      <span class="card__category">Android Studio</span>
                      <h3 class="card__title">Decide and Go</h3>
                      <span class="card__by">by <a href="#" class="card__author" title="author">Aelloren</a></span>
                  </div>
              </article>
              
              <article class="project-card">
                  <div class="card__info-hover">
                      <svg class="card__like" viewBox="0 0 24 24">
                          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                      </svg>
                      <div class="card__clock-info">
                          <svg class="card__clock" viewBox="0 0 24 24">
                              <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                          </svg>
                          <span class="card__time">50 min</span>
                      </div>
                  </div>
                  <div class="card__img"></div>
                  <a href="#" class="card_link">
                      <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.15752-9/487068238_3947225105524175_828917601720312967_n.png?stp=dst-png_s1080x2048&_nc_cat=108&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGd_TTKBQaHo76eDNFmkJMwc-UtmSvtH-Nz5S2ZK-0f47sbSPjFyXWApiwaKSvnDsHOC6S8h84pwjUHM0LLgYdp&_nc_ohc=ZW4cBPCV7rgQ7kNvwGdGE8L&_nc_oc=AdlaknyUR8WQpCzDbzFng8I5P1DKgMj-IgP7hJl1QaSt_zOyh-3z6-z2FuwnZqswfx4&_nc_zt=23&_nc_ht=scontent.fcrk1-1.fna&oh=03_Q7cD1wFJzn-hkDIju1VmlrYgwk7Nv8yTmRZOWMoaKTZ1B9ZHGw&oe=6817666A')"></div>
                  </a>
                  <div class="card__info">
                      <span class="card__category">Photoshop Adobe</span>
                      <h3 class="card__title">Branding CounT</h3>
                      <span class="card__by">by <a href="#" class="card__author" title="author">Aelloren</a></span>
                  </div>
              </article>

              <article class="project-card">
                <div class="card__info-hover">
                    <svg class="card__like" viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                    <div class="card__clock-info">
                        <svg class="card__clock" viewBox="0 0 24 24">
                            <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                        </svg>
                        <span class="card__time">30 min</span>
                    </div>
                </div>
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/475359514_1270961454205525_5980374344210270099_n.png?stp=dst-png_s2048x2048&_nc_cat=109&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGQku92zges6c8-5em_BTOmh_sjIifvdoSH-yMiJ-92hD8BKLXxepWCEb_pAQflzYwrLbFPgOR3jnEL-RiA3Kri&_nc_ohc=24OQYE7rgn4Q7kNvwGcOX1T&_nc_oc=AdlNwR4wLorwFCk7PknemyWSvbSOrXLBDGBCq9ulrCi1A3Qh1b3GTQMOTrkFxarZ_UQ&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&oh=03_Q7cD1wH5rjokZp2-x6bsWiXtnQfIZWhkPXZ2AnIeISmvHdIJ6A&oe=68176E83')"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">Photoshop Adobe</span>
                    <h3 class="card__title">Love Letter</h3>
                    <span class="card__by">by <a href="#" class="card__author" title="author">Aelloren</a></span>
                </div>
            </article>

            <article class="project-card">
                <div class="card__info-hover">
                    <svg class="card__like" viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                    <div class="card__clock-info">
                        <svg class="card__clock" viewBox="0 0 24 24">
                            <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                        </svg>
                        <span class="card__time">30 min</span>
                    </div>
                </div>
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/487563064_1386090526071416_9033876423591663111_n.png?stp=dst-png_p480x480&_nc_cat=111&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeEJiDeyjB44PWU1ocj13RqzdPFA6AjSZ9Z08UDoCNJn1iMDjXenufdbZadew3EQYYhoWoAVi_cduyooQJr2o7Hv&_nc_ohc=uGPxk5f04ecQ7kNvwE4Q9WG&_nc_oc=AdlZ9-hVQFRkmccaMQD3lbK-RqOONAOv9obg9eEAa8x0_hOgtnDSKBquV1WYcQyjed4&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcrk1-4.fna&oh=03_Q7cD1wF167pWGFWKmA-7kv9vpLxf_oBbSmbSiDC9apIr9hczwg&oe=68176876')"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">Figma</span>
                    <h3 class="card__title">Style Guide</h3>
                    <span class="card__by">by <a href="#" class="card__author" title="author">Aelloren</a></span>
                </div>
            </article>
              
          </div>
      </div>
  </section>

   <!-- Memories Section -->
   <section id="projects">
    <div class="container">
        <h2 class="section-title">My Memories</h2>
        <div class="cards">
            <article class="project-card">
                <div class="card__info-hover">
                    <svg class="card__like" viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                </div>
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-5.fna.fbcdn.net/v/t1.15752-9/486569703_1358679715333540_1009478648308291375_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=104&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeHOhELWyS3fR7SX-ADcog3vzCmbrvV1sAzMKZuu9XWwDL63EmZVHfk_ew4nidSFKNSS8t4WwVn3MPi2itAUWEms&_nc_ohc=oNNZjmI1O4sQ7kNvwESnq_I&_nc_oc=AdmhGmPZ6ZpQWLF7d8wpjjwqF89g9UuFANEhFUoVv8iwxYnIBJB83ToGOhYrx7cHAiU&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcrk1-5.fna&oh=03_Q7cD1wE-yp2dlDkbxbxEhhd7wmBDdt9ekiuM14KAotCn_5GoOg&oe=68175CE6')"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">Grade 12</span>
                    <h3 class="card__title">Open House</h3>
                    <span class="card__by">Cards out and hang out</span>
                </div>
            </article>
            <article class="project-card">
                <div class="card__info-hover">
                    <svg class="card__like" viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                </div>
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-5.fna.fbcdn.net/v/t1.15752-9/488076421_1183102253545028_1148476471281887871_n.jpg?stp=dst-jpg_s480x480_tt6&_nc_cat=104&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeFzi8wJOVkIx2Xa5xMP2LIEGR349SLYOIsZHfj1Itg4i4r8MX8FPPbp7EBbh4VNBmfc0P-4iS0ZtSDxLhUiZE7Q&_nc_ohc=JJFFXzflpUgQ7kNvwGhfw0h&_nc_oc=AdnxGgMnqlpVg9DqZSCAHFAdgrzL-mgAZP-971bm5YZZh1zq0WCnuzhfiT3OmqSsafQ&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcrk1-5.fna&oh=03_Q7cD1wHVXLP0R8ujAaRpXhdIn5NMuHkqxdO4DR3IY_lmrGizXw&oe=681777B5')"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">Grade 12</span>
                    <h3 class="card__title">Street dance</h3>
                    <span class="card__by">In Grade 12, we had a street dance performance that was exhausting but fun. I loved the choreography, and me and my friends had a great time making memories together.</span>
                </div>
            </article>
            
            <article class="project-card">
                <div class="card__info-hover">
                    <svg class="card__like" viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                </div>
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.15752-9/486485995_1231380481739731_842613982125710112_n.jpg?stp=dst-jpg_s480x480_tt6&_nc_cat=107&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeHX2Ve2vDwbMn-0OE9w3T3DRupNlhz1hzdG6k2WHPWHN898QySPpSyYPKIk5joRJHZ1rWc3EviCholTJjVYTY1M&_nc_ohc=KueGXsIvWsMQ7kNvwEj2f3o&_nc_oc=AdlUN2SISnS4tip6-ztM68TgnTTT4fzkQFq4AnnQAHxwsErFc6iPz4jHoP78sPFyMYY&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcrk1-1.fna&oh=03_Q7cD1wH5J6KtO3HHc7Uh4KUARvKbupveg0e1GlL-YBGbtwfzOA&oe=681742BF')"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">Grade 12</span>
                    <h3 class="card__title">Gradutaion Day</h3>
                    <span class="card__by">Last day huhuhu</span>
                </div>
            </article>

            <article class="project-card">
                <div class="card__info-hover">
                    <svg class="card__like" viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                </div>
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-3.fna.fbcdn.net/v/t1.15752-9/486634803_1549298872637459_3268274651181422743_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=100&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeFcRB_XdlAJbtgCJnf8ePIn12qwpoH-3AbXarCmgf7cBm7phgUbsXVjl2lXe4M34zckH6dOAPQGzNHDVHM5Zo_K&_nc_ohc=23aYkeuHQ-MQ7kNvwGThcbv&_nc_oc=AdmNlIaPmuFSa7rzQpi1KJFrVL3nsu2Du18X3KPymRfiHCKk5oW_QFx33fxfeFeZOXc&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcrk1-3.fna&oh=03_Q7cD1wFECh7-WQ-aGK4-JRxkW7JYiX2kXLTZBauf_5e59GuPFg&oe=68176EE7')"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">1st Year</span>
                    <h3 class="card__title">Friends</h3>
                    <span class="card__by">My freshmen friends</span>
                </div>
            </article>

            <article class="project-card">
                <div class="card__info-hover">
                    <svg class="card__like" viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                </div>
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-5.fna.fbcdn.net/v/t1.15752-9/488620658_1240967604122511_8408913868998250010_n.jpg?stp=dst-jpg_s480x480_tt6&_nc_cat=103&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeELyWVjoQIHFfgfvzgzuxIeRaVXjCvHMERFpVeMK8cwRP4ud28Cd6xvNy0gPm6uGrodge6XGyTwYmeb_8SNeeZ6&_nc_ohc=amuXFgM0_WgQ7kNvwFN8zn5&_nc_oc=Adnbfzg65QyrU2fFCvtNlmGrGFnyJj9mPc_rGfqGIFgjINe9IU1DksevRfULuHwIHmI&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcrk1-5.fna&oh=03_Q7cD1wGHOs-6LZ3AxkadGlBgbsQ1MTrYevkVTubgmBhxA-gmww&oe=68174565')"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">1st Year</span>
                    <h3 class="card__title">C102 & C105 Closing</h3>
                    <span class="card__by">First closing in college</span>
                </div>
            </article>

            <article class="project-card">
                <div class="card__info-hover">
                    <svg class="card__like" viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                </div>
                <div class="card__img"></div>
                <a href="#" class="card_link">
                    <div class="card__img--hover" style="background-image: url('https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.15752-9/488923339_678021274673089_6733554354901482130_n.jpg?stp=dst-jpg_p480x480_tt6&_nc_cat=107&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeF7uHdOvNp2KqsYvg8gPGNUu6v9x9vI0IW7q_3H28jQhe3rdXbF3jp59SuzUBJEHIQu7ODzoKYuJ8XDjWcFZMNk&_nc_ohc=pbfHN5AoV3IQ7kNvwFz2Raa&_nc_oc=AdkBuOHTU3na3sAdSXzdT_fS4x9M-1tss_u-RL9hKjnN9MiheM-Nb5us7fX9Srusv5Y&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fcrk1-1.fna&oh=03_Q7cD1wHQXCIbbuIcPePEOj__klr5y_xdXg6_NsdajSLZbbed-g&oe=681761EC')"></div>
                </a>
                <div class="card__info">
                    <span class="card__category">Cousins</span>
                    <h3 class="card__title">Roller skate</h3>
                    <span class="card__by">Fun hang out with injuries</span>
                </div>
            </article>
            
        </div>
    </div>
</section>


  <!-- Contact Section -->
  <section id="contact">
      <div class="container">
          <h2 class="section-title">Send a Message</h2>
          <div class="row">
              <div class="col-lg-6 animate">
                  <div class="card p-4">
                      <h3>Contact Form</h3>
                      <form class="contact-form" id="contactForm">
                          <div class="form-group">
                              <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                              <div class="invalid-feedback">Please enter your name.</div>
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                              <div class="invalid-feedback">Please enter a valid email address.</div>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                              <div class="invalid-feedback">Please enter a subject.</div>
                          </div>
                          <div class="form-group">
                              <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                              <div class="invalid-feedback">Please enter your message.</div>
                          </div>
                          <button type="submit" class="btn btn-custom">Send Message</button>
                      </form>
                  </div>
              </div>
              <div class="col-lg-6 animate">
                  <div class="card p-4">
                      <h3>Contact Information</h3>
                      <p><i class="bi bi-geo-alt-fill me-2" style="color: var(--primary-color);"></i> Porac, Pampanga</p>
                      <p><i class="bi bi-envelope-fill me-2" style="color: var(--primary-color);"></i> marianoaelloren@gmail.com</a></p>
                      <p><i class="bi bi-telephone-fill me-2" style="color: var(--primary-color);"></i> (+63) 456-7890-123</p>
                      <h3 class="mt-4">Connect With Me</h3>
                      <ul class="social-icons">
                          <li>
                              <a href="#" target="_blank">
                                  <i class="fab fa-facebook-f icon"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#" target="_blank">
                                  <i class="fab fa-twitter icon"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#" target="_blank">
                                  <i class="fab fa-linkedin-in icon"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#" target="_blank">
                                  <i class="fab fa-github icon"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#" target="_blank">
                                  <i class="fab fa-instagram icon"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
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

      const contactForm = document.getElementById('contactForm');
      if (contactForm) {
          contactForm.addEventListener('submit', function(e) {
              e.preventDefault();
              
              let isValid = true;
              const formElements = this.elements;
              
              for (let i = 0; i < formElements.length; i++) {
                  if (formElements[i].hasAttribute('required') && !formElements[i].value.trim()) {
                      formElements[i].classList.add('is-invalid');
                      isValid = false;
                  } else if (formElements[i].type === 'email' && formElements[i].value.trim()) {
                      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                      if (!emailPattern.test(formElements[i].value.trim())) {
                          formElements[i].classList.add('is-invalid');
                          isValid = false;
                      } else {
                          formElements[i].classList.remove('is-invalid');
                      }
                  } else {
                      formElements[i].classList.remove('is-invalid');
                  }
              }
              
              if (isValid) {
                  alert('Message sent successfully!');
                  this.reset();
              }
          });
      }

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