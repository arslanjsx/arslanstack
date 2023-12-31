<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Muhammad Arslan</title>
  <meta name="description" content="Full Stack PHP and Laravel Developer" />

  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet" />
</head>

<body onload="year();">
  <header class="header">
    <div class="header__content">
      <div class="header__logo-container">
        <div class="header__logo-img-cont">
          <img src="{{ asset('assets/jpeg/arslan.jpeg') }}" alt="Muhammad Arslan Logo Image" class="header__logo-img" />
        </div>
        <span class="header__logo-sub">Muhammad Arslan</span>
      </div>
      <div class="header__main">
        <ul class="header__links">
          <li class="header__link-wrapper">
            <a href="/" class="header__link"> Home </a>
          </li>
          <li class="header__link-wrapper">
            <a href="#about" class="header__link">About </a>
          </li>
          <li class="header__link-wrapper">
            <a href="#projects" class="header__link">
              Projects
            </a>
          </li>
          <li class="header__link-wrapper">
            <a href="#contact" class="header__link"> Contact </a>
          </li>
        </ul>
        <div class="header__main-ham-menu-cont">
          <img src="{{ asset('assets/svg/ham-menu.svg') }}" alt="hamburger menu" class="header__main-ham-menu" />
          <img src="{{ asset('assets/svg/ham-menu-close.svg') }}" alt="hamburger menu close" class="header__main-ham-menu-close d-none" />
        </div>
      </div>
    </div>
    <div class="header__sm-menu">
      <div class="header__sm-menu-content">
        <ul class="header__sm-menu-links">
          <li class="header__sm-menu-link">
            <a href="/"> Home </a>
          </li>

          <li class="header__sm-menu-link">
            <a href="#about"> About </a>
          </li>

          <li class="header__sm-menu-link">
            <a href="#projects"> Projects </a>
          </li>

          <li class="header__sm-menu-link">
            <a href="#contact"> Contact </a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  
  <section class="home-hero">
    <div class="home-hero__content">
      <h1 class="heading-primary">Hey, I'm Muhammad Arslan</h1>
      <div class="home-hero__info">
        <p class="text-primary">
          A PHP & Laravel Web Developer building modern and scalable web applications that lead to startup success and rapid turn arounds.
        </p>
      </div>
      <div class="home-hero__cta">
        <a href="{{ asset('pdf/resume.pdf') }}" download class="btn btn--bg">Resume</a>
      </div>
    </div>
    <div class="home-hero__socials">
      <div class="home-hero__social">
        <a href="https://www.linkedin.com/in/arslanstack" target="_blank" class="home-hero__social-icon-link">
          <img src="{{ asset('assets/png/linkedin-ico.png') }}" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
      <div class="home-hero__social">
        <a href="https://github.com/arslanstack" target="_blank" class="home-hero__social-icon-link">
          <img src="{{ asset('assets/png/github-ico.png') }}" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
      <div class="home-hero__social">
        <a href="https://twitter.com/arslanstack" target="_blank" class="home-hero__social-icon-link">
          <img src="{{ asset('assets/png/twitter-ico.png') }}" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
      <!-- <div class="home-hero__social">
        <a href="#" class="home-hero__social-icon-link">
          <img src="./assets/png/yt-ico.png" alt="icon" class="home-hero__social-icon" />
        </a>
      </div> -->
      <div class="home-hero__social">
        <a href="https://www.instagram.com/arslanstack/" target="_blank" class="home-hero__social-icon-link home-hero__social-icon-link--bd-none">
          <img src="{{ asset('assets/png/insta-ico.png') }}" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
    </div>
    <div class="home-hero__mouse-scroll-cont">
      <div class="mouse"></div>
    </div>
  </section>
  <section id="about" class="about sec-pad">
    <div class="main-container">
      <h2 class="heading heading-sec heading-sec__mb-med">
        <span class="heading-sec__main">About Me</span>
        <span class="heading-sec__sub">
          Here you will find more information about me, what I do, and my current skills mostly in terms of programming and technology
        </span>
      </h2>
      <div class="about__content">
        <div class="about__content-main">
          <h3 class="about__content-title">Get to know me!</h3>
          <div class="about__content-details">
            <p class="about__content-details-para">
              Hey! It's
              <strong>Muhammad Arslan</strong>
              and I'm a <strong> Backend Web Developer </strong> located in
              Pakistan. I've done
              <strong> remote </strong>
              projects for agencies, provided services for startups, and collaborated
              with talented people to create
              <strong>digital products </strong>
              for both business and consumer use.
            </p>
            <p class="about__content-details-para">
              I'm a bit of a code junky. Over the years, I've worked on
              scores of web apps in different industries and
              verticals. Feel free to
              <strong>message</strong> me here.
            </p>
          </div>
          <a href="https://wa.me/message/UKIGVLMW3CK2L1" target="_blank" style="background-color: #7843e9 !important" class="btn btn--med btn--theme dynamicBgClr">Contact</a>
        </div>
        <div class="about__content-skills">
          <h3 class="about__content-title">My Skills</h3>
          <div class="skills">
            <div class="skills__skill">HTML</div>
            <div class="skills__skill">CSS</div>
            <div class="skills__skill">Bootstrap</div>
            <div class="skills__skill">JavaScript</div>
            <div class="skills__skill">React</div>
            <div class="skills__skill">React Native</div>
            <div class="skills__skill">PHP</div>
            <div class="skills__skill">MySQL</div>
            <div class="skills__skill">Laravel</div>
            <div class="skills__skill">GIT</div>
            <div class="skills__skill">Stripe</div>
            <div class="skills__skill">Paypal</div>
            <div class="skills__skill">REST APIs</div>
            <div class="skills__skill">AWS</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="projects" class="projects sec-pad">
    <div class="main-container">
      <h2 class="heading heading-sec heading-sec__mb-bg">
        <span class="heading-sec__main">Projects</span>
        <span class="heading-sec__sub">
          Here you will find some of the personal and clients projects that I created with each project's details and live perview.
        </span>
      </h2>

      <div class="projects__content">
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="./assets/jpeg/helix.jpg" alt="Software Screenshot" class="projects__row-img" loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Helix HRM/CRM</h3>
            <p class="projects__row-content-desc">
              Helix is a combination of HRM and CRM. It is a complete solution for managing your employees and clients. We developed this application in Laravel and Bootstrap. This application had multiple payment gateways integrated, A Chat Support system with ticket generation and Stripe integrated.
            </p>
            <a href="https://crm.bzbeetech.com/" class="btn btn--med btn--theme dynamicBgClr" target="_blank">Visit Now</a>
          </div>
        </div>
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="{{ asset('assets/jpeg/mockup1.jpg') }}" alt="Software Screenshot" class="projects__row-img" loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Open AI SASS Application</h3>
            <p class="projects__row-content-desc">
              Text and image content generation web application with integration of gpt-3 and midjourney API. Developed in React JS and Laravel, this application had payment gateways integrated and Google Auth implemented.
            </p>
            <a href="https://gpt3static.netlify.app/" class="btn btn--med btn--theme dynamicBgClr" target="_blank">VISIT NOW</a>
          </div>
        </div>
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="{{ asset('assets/jpeg/mockup2.jpg') }}" alt="Software Screenshot" class="projects__row-img" loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Boris Jankovsky Portfolio and Blog</h3>
            <p class="projects__row-content-desc">
              Our client is a national level athelete and a financial mediator now turned into a part time blogger and influencer. We developed a portfolio and blog website for him. Website had multiple subscription plans, payment gateways integrated, a CMS and role based authentication implemented.
            </p>
            <a href="https://www.borisjankovsky.sk/" class="btn btn--med btn--theme dynamicBgClr" target="_blank">Visit Now</a>
          </div>
        </div>
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="{{ asset('assets/jpeg/inbox.jpg') }}" alt="Software Screenshot" class="projects__row-img" loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Inbox Score Companion</h3>
            <p class="projects__row-content-desc">
              Inbox Score is a marketing tool developed to help businesses assess their email marketing and cold-emailing performance. With multiple REST APIs integrated into the system, this application had a lot of features and functionalities. We developed this application in Laravel and React JS.
            </p>
            <a href="https://inbox.bzbeetech.com/" class="btn btn--med btn--theme dynamicBgClr" target="_blank">Visit Now</a>
          </div>
        </div>
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="{{ asset('assets/jpeg/gym.jpg') }}" alt="Software Screenshot" class="projects__row-img" loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Fitness over API</h3>
            <p class="projects__row-content-desc">
              A legacy application aimed to deliver live excercise tutorials to the users over API. We developed this application in Laravel and Bootstrap 3.
            </p>
            <a href="https://frontenddemos.netlify.app/health%20&%20fitness/bzbee-health&fitness-template-4/dist/" class="btn btn--med btn--theme dynamicBgClr" target="_blank">Visit Now</a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section id="contact" class="contact sec-pad dynamicBg">
    <div class="main-container">
      <h2 class="heading heading-sec heading-sec__mb-med">
        <span class="heading-sec__main heading-sec__main--lt">Contact</span>
        <span class="heading-sec__sub heading-sec__sub--lt">
          Feel free to Contact me by submitting the form below and I will get back to you as soon as possible
        </span>
      </h2>
      <div class="contact__form-container">
        <form action="{{route('contact.store')}}" method="POST" id="contactForm" class="contact__form">
          @csrf
          <div class="contact__form-field">
            <label class="contact__form-label" for="name">Name</label>
            <input required placeholder="Enter Your Name" type="text" class="contact__form-input" name="name" id="name" />
          </div>
          <div class="contact__form-field">
            <label class="contact__form-label" for="email">Email</label>
            <input required placeholder="Enter Your Email" type="text" class="contact__form-input" name="email" id="email" />
          </div>
          <div class="contact__form-field">
            <label class="contact__form-label" for="message">Message</label>
            <textarea required cols="30" rows="10" class="contact__form-input" placeholder="Enter Your Message" name="message" id="message"></textarea>
          </div>
          <button class="btn btn--theme contact__btn g-recaptcha" type="submit" data-sitekey="6LfY-ecoAAAAABjAhm7IenForR3gRsKLrJqitePY" data-callback='onSubmit' data-action='submit'>
            Contact Now
          </button>
        </form>
      </div>
    </div>
  </section>
  
  <footer class="main-footer">
    <div class="main-container">
      <div class="main-footer__upper">
        <div class="main-footer__row main-footer__row-1">
          <h2 class="heading heading-sm main-footer__heading-sm">
            <span>Socials</span>
          </h2>
          <div class="main-footer__social-cont">
            <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/arslanstack">
              <img class="main-footer__icon" src="{{ asset('assets/png/linkedin-ico.png') }}" alt="icon" />
            </a>
            <a target="_blank" rel="noreferrer" href="https://github.com/arslanstack">
              <img class="main-footer__icon" src="{{ asset('assets/png/github-ico.png') }}" alt="icon" />
            </a>
            <a target="_blank" rel="noreferrer" href="https://twitter.com/arslanstack">
              <img class="main-footer__icon" src="{{ asset('assets/png/twitter-ico.png') }}" alt="icon" />
            </a>
            <!-- <a target="_blank" rel="noreferrer" href="#">
    <img class="main-footer__icon" src="{{ asset('assets/png/yt-ico.png') }}" alt="icon" />
</a> -->
            <a target="_blank" rel="noreferrer" href="https://www.instagram.com/arslanstack/">
              <img class="main-footer__icon main-footer__icon--mr-none" src="{{ asset('assets/png/insta-ico.png') }}" alt="icon" />
            </a>

          </div>
        </div>
        <div class="main-footer__row main-footer__row-2">
          <h4 class="heading heading-sm text-lt">Muhammad Arslan</h4>
          <p class="main-footer__short-desc">
            A PHP & Laravel Web Developer building modern and scalable web applications that lead to startup success and rapid turn arounds.
          </p>
        </div>
      </div>

      <!-- If you give me some credit or shoutout here by linking to my website, then it will be a big thing for me and will help me a lot :) -->
      <div class="main-footer__lower">
        &copy; Copyright <span id="year"></span>. Made by
        <a rel="noreferrer" target="_blank" href="https://github.com/arslanstack">Muhammad Arslan</a>
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/index.js') }}"></script>
  <script>
    function onSubmit(token) {
      document.getElementById("contactForm").submit();
    }

    function year() {
      document.getElementById("year").innerHTML = new Date().getFullYear();
    }
  </script>
</body>

</html>