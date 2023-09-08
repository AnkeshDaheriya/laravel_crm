@extends('layouts.web_header')
@section('content')
<section class="hero-area">
<div class="swiper hero-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="hero-content-wrapper">
<div class="hero-content-wrap">
<div class="hero-content-img">
<img src="{{asset('/assets/img/hero-slider-1.jpg')}}" alt>
</div>
<div class="hero-content">
<h2>Creative</h2>
<h1>Best solution for your <span>Business.</span></h1>
<p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla an Duis a orci nunc. Suspendisse ac convallis sapien, quis commodosani libero. Donec nec dui luctus, pellentesque lacus sed, mollis leo.</p>
<a href="about.html" class="about-btn">About us</a>
<a href="project-details.html" class="work-btn">How we work</a>
<div class="slider-num">
<span>01</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="hero-content-wrapper">
<div class="hero-content-wrap">
<div class="hero-content-img">
<img src="{{asset('/assets/img/hero-slider-2.png')}}" alt>
</div>
<div class="hero-content">
<h2>Creative</h2>
<h1>Best solution for your <span>Finances.</span></h1>
<p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla an Duis a orci nunc. Suspendisse ac convallis sapien, quis commodosani libero. Donec nec dui luctus, pellentesque lacus sed, mollis leo.</p>
<a href="about.html" class="about-btn">About us</a>
<a href="project-details.html" class="work-btn">How we work</a>
<div class="slider-num">
<span>02</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="hero-content-wrapper">
<div class="hero-content-wrap">
<div class="hero-content-img">
<img src="{{asset('/assets/img/hero-slider-3.png')}}" alt>
</div>
<div class="hero-content">
<h2>Creative</h2>
<h1>Best solution for your <span>Markets.</span></h1>
<p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla an Duis a orci nunc. Suspendisse ac convallis sapien, quis commodosani libero. Donec nec dui luctus, pellentesque lacus sed, mollis leo.</p>
<a href="about.html" class="about-btn">About us</a>
<a href="project-details.html" class="work-btn">How we work</a>
<div class="slider-num">
<span>03</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-pagination"></div>
</div>
<div class="social-media">
<ul class="social-list">
<li><a href="https://www.facebook.com/">Facebook</a></li>
<li><a href="https://www.instagram.com/">instagram</a></li>
<li><a href="https://www.linkedin.com/">Linked in</a></li>
</ul>
</div>
</section>


<section class="service-area sec-pad">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-4 col-xl-4">
<div class="title">
<span>what we do</span>
<h2>we work performed for client happy.</h2>
<div class="cmn-btn">
<a href="services.html">view all services</a>
</div>
</div>
</div>
<div class="col-md-12 col-lg-8 col-xl-8">
<div class="row g-4">
<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
<div class="single-service">
<span class="count">01</span>
<div class="service-icon">
<i><img src="{{asset('/assets/img/icons/service-icon-1.png')}}" alt></i>
</div>
<div class="service-content">
<h4>web design</h4>
<p>Fusce ornare mauris nisi, id fringilla turpis vehicula justo lectus, ultricies nec sem</p>
<a href="services.html">read more<i><img src="{{asset('/assets/img/icons/arrow-circle.png')}}" alt></i></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
<div class="single-service">
<span class="count">02</span>
<div class="service-icon">
<i><img src="{{asset('/assets/img/icons/service-icon-2.png')}}" alt></i>
</div>
<div class="service-content">
<h4>App design</h4>
<p>Maecenas ut est in ante imperdiet laoreet eu quis vehicula justo elit Phasellus Door</p>
<a href="service-details.html">read more<i><img src="{{asset('/assets/img/icons/arrow-circle.png')}}" alt></i></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
<div class="single-service">
<span class="count">03</span>
<div class="service-icon">
<i><img src="{{asset('/assets/img/icons/service-icon-3.png')}}" alt></i>
</div>
<div class="service-content">
<h4>Developing</h4>
<p>Etiam eu ullamcorper ipsum. Pellentesque eu ipsum luctus libero euismod</p>
<a href="service-details.html">read more<i><img src="{{asset('/assets/img/icons/arrow-circle.png')}}" alt></i></a>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
<div class="single-service">
<span class="count">04</span>
<div class="service-icon">
<i><img src="{{asset('/assets/img/icons/service-icon-4.png')}}" alt></i>
</div>
<div class="service-content">
<h4>Graphic design</h4>
<p>Quisque in massa nunc. Etiam blandit tortor nisl, auctor vulputate felis convallis at.</p>
<a href="service-details.html">read more<i><img src="{{asset('/assets/img/icons/arrow-circle.png')}}" alt></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="about-area sec-mar">
<div class="container">
<div class="row">
<div class="col-lg-6 col-xl-6">
<div class="about-left">
<div class="title black">
<span>About us</span>
<h2 class="mb-15">Direction with our company.</h2>
</div>
<p>Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. Classe aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ei Donec lacinia placerat felis non aliquam.Integer purus odio.</p>
<div class="our-mission">
<div class="msn-icon">
<i><img src="{{asset('/assets/img/icons/mission-icon.png')}}" alt></i>
</div>
<div class="msn-content">
<h5>Our Mission</h5>
<p>Integer purus odio, placerat nec rhoni olor Class online and video.</p>
</div>
<div class="cto">
<img src="{{asset('/assets/img/ctoFounder.png')}}" alt>
</div>
</div>
<div class="cmn-btn">
<a href="about.html">About more</a>
</div>
</div>
</div>
<div class="col-lg-6 col-xl-6">
<div class="about-right">
<div class="group-images">
<img src="{{asset('/assets/img/about-bottom.jpg')}}" alt>
<div class="about-top">
<img src="{{asset('/assets/img/about-top.png')}}" alt>
</div>
<div class="about-skills">
<div class="signle-skill">
<div class="progress-bar-circle" data-percent="90" data-duration="1000"></div>
<div class="skill-content">
<h6>web</h6>
<p>Clean Design</p>
</div>
</div>
<div class="signle-skill xsm">
<div class="progress-bar-circle" data-percent="85" data-duration="1000"></div>
<div class="skill-content">
<h6>App</h6>
<p>Developing</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="features-count">
<div class="row">
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
<div class="single-count">
<i><img src="{{asset('/assets/img/icons/count-1.png')}}" alt></i>
<div class="counter">
<span class="odometer">150</span><sup>+</sup>
</div>
<p>Project Completed</p>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
<div class="single-count">
<i><img src="{{asset('/assets/img/icons/count-2.png')}}" alt></i>
<div class="counter">
<span class="odometer">250</span><sup>+</sup>
</div>
<p>Satisfied Clients</p>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
<div class="single-count">
<i><img src="{{asset('/assets/img/icons/count-3.png')}}" alt></i>
<div class="counter">
<span class="odometer">150</span><sup>+</sup>
</div>
<p>Expert Teams</p>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
<div class="single-count xsm">
<i><img src="{{asset('/assets/img/icons/count-4.png')}}" alt></i>
<div class="counter">
<span class="odometer">28</span><sup>+</sup>
</div>
<p>Win Awards</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="our-partner">
<div class="container-fluid g-0 overflow-hidden">
<div class="row align-items-center g-0">
<div class="col-12 col-xl-6">
<div class="newsletter">
<div class="subscribes">
<span>Get In Touch</span>
<h1>Subscribe Our</h1>
<h2>Newsletter</h2>
<div class="subscribe-form">
<form action="#" method="post">
<input type="email" name="email" placeholder="Type Your Email">
<input type="submit" value="Connect">
</form>
</div>
</div>
</div>
</div>
<div class="col-12 col-xl-6">
<div class="our-clients">
<div class="row align-items-center">
<div class="col-md-6 col-lg-4 col-xl-6">
<div class="title">
<span>Our partner</span>
<h2>Join our Finibus community.</h2>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-1.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-2.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-3.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-4.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-5.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-6.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-7.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-8.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-9.png')}}" alt>
<div class="client-hover">
<span>www.example.org</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
<div class="single-client">
<img src="{{asset('/assets/img/partner-icons/partner-10.png')}}" alt>
<div class="client-hover">
<span>www.example.com</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="portfolio-area sec-mar-top">
<div class="container">
<div class="row">
<div class="col-12 col-lg-7 col-xl-5">
<div class="title black">
<span>Case Study</span>
<h2>A diversified resilient portfolio.</h2>
</div>
</div>
</div>
</div>
<div class="swiper portfolio-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="single-portfolio">
<div class="portfolio-data">
<a href="#"><img src="{{asset('/assets/img/portfolio/portfolio-1.jpg')}}" alt></a>
</div>
<div class="portfolio-inner">
<span>Template</span>
<h4>Creative Agency</h4>
<div class="portfolio-hover">
<a href="project-details.html" class="case-btn">Case Study</a>
<a data-lightbox="image1" href="/assets/img/portfolio/portfolio-1.jpg"><i class="fas fa-search"></i></a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="single-portfolio">
<div class="portfolio-data">
<a href="#"><img src="{{asset('/assets/img/portfolio/portfolio-2.jpg')}}" alt></a>
</div>
<div class="portfolio-inner">
<span>UI Kit</span>
<h4>E-Shop Ecommerce</h4>
<div class="portfolio-hover">
<a href="project-details.html" class="case-btn">Case Study</a>
<a data-lightbox="image1" href="/assets/img/portfolio/portfolio-2.jpg"><i class="fas fa-search"></i></a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="single-portfolio">
<div class="portfolio-data">
<a href="#"><img src="{{asset('/assets/img/portfolio/portfolio-3.jpg')}}" alt></a>
</div>
<div class="portfolio-inner">
<span>Software</span>
<h4>Desktop Mockup</h4>
<div class="portfolio-hover">
<a href="project-details.html" class="case-btn">Case Study</a>
<a data-lightbox="image1" href="/assets/img/portfolio/portfolio-3.jpg"><i class="fas fa-search"></i></a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="single-portfolio">
<div class="portfolio-data">
<a href="#"><img src="{{asset('/assets/img/portfolio/portfolio-4.jpg')}}" alt></a>
</div>
<div class="portfolio-inner">
<span>Graphic</span>
<h4>Art Deco Cocktails</h4>
<div class="portfolio-hover">
<a href="project-details.html" class="case-btn">Case Study</a>
<a data-lightbox="image1" href="/assets/img/portfolio/portfolio-4.jpg"><i class="fas fa-search"></i></a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="single-portfolio">
<div class="portfolio-data">
<a href="#"><img src="{{asset('/assets/img/portfolio/portfolio-5.jpg')}}" alt></a>
</div>
<div class="portfolio-inner">
<span>App</span>
<h4>Mobile Crypto Wallet</h4>
<div class="portfolio-hover">
<a href="project-details.html" class="case-btn">Case Study</a>
<a data-lightbox="image1" href="/assets/img/portfolio/portfolio-5.jpg"><i class="fas fa-search"></i></a>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="single-portfolio">
<div class="portfolio-data">
<a href="#"><img src="{{asset('/assets/img/portfolio/portfolio-3.jpg')}}" alt></a>
</div>
<div class="portfolio-inner">
<span>Template</span>
<h4>Creative Agency</h4>
<div class="portfolio-hover">
<a href="project-details.html" class="case-btn">Case Study</a>
<a data-lightbox="image1" href="/assets/img/portfolio/portfolio-3.jpg"><i class="fas fa-search"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>
</div>
</div>


<section class="why-choose-us sec-mar">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-6 col-xl-6">
<div class="title black">
<span>Why Choose Finibus</span>
<h2 class="mb-15">success is just around the next online corner</h2>
</div>
<div class="video-demo">
<img src="{{asset('/assets/img/play-video.jpg')}}" alt>
<div class="play-btn">
<a class="popup-video" href="https://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fas fa-play"></i> Play now</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-6">
<div class="valuable-skills">
<img src="{{asset('/assets/img/valuable-skill.jpg')}}" alt>
<div class="signle-bar">
<h6>Web Design</h6>
<div id="bar1" class="barfiller">
<span class="tip"></span>
<span class="fill" data-percentage="90"></span>
</div>
</div>
<div class="signle-bar">
<h6>App Development</h6>
<div id="bar2" class="barfiller">
<span class="tip"></span>
<span class="fill" data-percentage="98"></span>
</div>
</div>
<div class="signle-bar">
<h6>Backend</h6>
<div id="bar3" class="barfiller">
<span class="tip"></span>
<span class="fill" data-percentage="80"></span>
</div>
</div>
<div class="signle-bar">
<h6>Video Animation</h6>
<div id="bar4" class="barfiller">
<span class="tip"></span>
<span class="fill" data-percentage="85"></span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="testimonial-area">
<div class="container">
<div class="row">
<div class="col-12">
<div class="swiper testimonial-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="testimonial-content">
<div class="quote">
<i class="fas fa-quote-left"></i>
</div>
<div class="client-info">
<div class="client-pic">
<img src="{{asset('/assets/img/client.jpg')}}" alt>
</div>
<div class="client-details">
<h4>Savannah Nguyen</h4>
<span>Executive CEO</span>
</div>
</div>
<p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor odio, aliquam vitae noday backowner condimentum this fire ongon then only on <i class="fas fa-quote-right"></i></p>
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-content">
<div class="quote">
<i class="fas fa-quote-left"></i>
</div>
<div class="client-info">
<div class="client-pic">
<img src="{{asset('/assets/img/client-2.jpg')}}" alt>
</div>
<div class="client-details">
<h4>Nailong Jeso</h4>
<span>CTO Founder</span>
</div>
</div>
<p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor odio, aliquam vitae noday backowner condimentum this fire ongon then only on <i class="fas fa-quote-right"></i></p>
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-content">
<div class="quote">
<i class="fas fa-quote-left"></i>
</div>
<div class="client-info">
<div class="client-pic">
<img src="{{asset('/assets/img/client-3.jpg')}}" alt>
</div>
<div class="client-details">
<h4>Gautam Yamni</h4>
<span>Designer Head</span>
</div>
</div>
<p><i class="fas fa-quote-left"></i> Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus. Mauris vitae faucibus libero. Curabitur eu convallis purus. Nunc accumsan diam in arcu pellentesque sagittis. Curabitur dolor odio, aliquam vitae noday backowner condimentum this fire ongon then only on <i class="fas fa-quote-right"></i></p>
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
</div>
</div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>
</div>
</div>
</div>
</div>
</section>


<section class="latest-news sec-mar">
<div class="container">
<div class="row gx-4">
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="signle-news">
<div class="tag">
<a href="#">Web Design</a>
</div>
<div class="post-img">
<a href="blog_details.html"><img src="{{asset('/assets/img/post/post-1.jpg')}}" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="{{asset('/assets/img/author/author-1.jpg')}}" alt>
</div>
<div class="author-info">
<h5>Posted by, Alen Jodge</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="blog_details.html">Donec a porttitor phari sod tellus Nunc quis erosn.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="blog_details.html">View details</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="signle-news">
<div class="tag">
<a href="#">Software</a>
</div>
<div class="post-img">
<a href="blog_details.html"><img src="{{asset('/assets/img/post/post-2.jpg')}}" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="{{asset('/assets/img/author/author-2.jpg')}}" alt>
</div>
<div class="author-info">
<h5>Posted by, Kim karden</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="blog_details.html">Mekusa a porttitor phari sod tellus algo quis ksro.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="blog_details.html">View details</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="title black">
<span>Blog</span>
<h2>Latest news And Article modern design.</h2>
<div class="cmn-btn">
<a href="blog.html">View All Blog</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="lets-talk sec-pad">
<div class="container">
<div class="row align-items-center">
<div class="col-md-9 col-lg-8 col-xl-7">
<div class="title special">
<span>Let’s Talk</span>
<h2>About Your Next <br><b>Project</b> Your Mind</h2>
</div>
</div>
<div class="col-md-3 col-lg-4 col-xl-5 text-end">
<div class="getin-touch">
<div class="cmn-btn">
<a href="contact.html">Get In Touch</a>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
