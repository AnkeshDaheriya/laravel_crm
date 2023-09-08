@extends('layouts.web_header')
@section('content')
<div class="hero-area3">
<div class="home3-shapes">
<img src="{{asset('/assets/img/home-3/line-shape-home-3.svg')}}" alt class="wave-line">
<img src="{{asset('/assets/img/home-3/line-shape-2home-3.svg')}}" alt class="wave">
</div>
<div class="swiper hero-slider-3">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide1 swiper-slide-cover"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="hero-content-layout3">
<img src="{{asset('/assets/img/home-3/slider-badge1.png')}}" alt class="trade-mark">
<span data-swiper-parallax="-100">Welcome To our</span>
<h1>CREATIVE BRANDING IT AGENCY.</h1>
<div class="btn-manager">
<a href="contact.html">Contact Maneger<i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="slide2 swiper-slide-cover"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="hero-content-layout3">
<img src="{{asset('/assets/img/home-3/slider-badge1.png')}}" alt class="trade-mark">
<span data-swiper-parallax="-100">Welcome To our</span>
<h1>CREATIVE Mordern IT AGENCY.</h1>
<div class="btn-manager">
<a href="contact.html">Contact Maneger<i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="slider-navigations">
<div class="swiper-button-next-c">
<svg width="29" height="13" viewBox="0 0 29 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.99994 11.5454L6.99994 6.5L6.99994 1.45465C6.99994 1.28062 6.79308 1.18962 6.6648 1.30721L0.999939 6.5L6.6648 11.6928C6.79308 11.8104 6.99994 11.7194 6.99994 11.5454Z" fill="white" />
<path d="M28 7C28.2761 7 28.5 6.77614 28.5 6.5C28.5 6.22386 28.2761 6 28 6L28 7ZM6.6648 11.6928L7.00266 11.3242L7.00266 11.3242L6.6648 11.6928ZM0.999939 6.5L0.662077 6.13142L0.259993 6.5L0.662077 6.86857L0.999939 6.5ZM6.6648 1.30721L6.32694 0.938636L6.32694 0.938637L6.6648 1.30721ZM28 6L6.99994 6L6.99994 7L28 7L28 6ZM6.49994 6.5L6.49994 11.5454L7.49994 11.5454L7.49994 6.5L6.49994 6.5ZM7.00266 11.3242L1.3378 6.13142L0.662077 6.86857L6.32694 12.0614L7.00266 11.3242ZM1.3378 6.86857L7.00266 1.67579L6.32694 0.938637L0.662077 6.13142L1.3378 6.86857ZM6.49994 1.45465L6.49994 6.5L7.49994 6.5L7.49994 1.45465L6.49994 1.45465ZM7.00266 1.67579C6.81024 1.85217 6.49994 1.71568 6.49994 1.45465L7.49994 1.45465C7.49994 0.845571 6.77592 0.527073 6.32694 0.938636L7.00266 1.67579ZM6.49994 11.5454C6.49994 11.2843 6.81024 11.1478 7.00266 11.3242L6.32693 12.0614C6.77592 12.4729 7.49994 12.1544 7.49994 11.5454L6.49994 11.5454Z" fill="white" />
</svg>
</div>
<div class="swiper-button-prev-c">
<svg width="29" height="13" viewBox="0 0 29 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22.0001 1.45465L22.0001 6.5L22.0001 11.5454C22.0001 11.7194 22.207 11.8104 22.3353 11.6928L28.0001 6.5L22.3353 1.30722C22.207 1.18963 22.0001 1.28063 22.0001 1.45465Z" fill="white" />
<path d="M1.00006 6C0.723918 6 0.50006 6.22386 0.50006 6.5C0.50006 6.77614 0.723918 7 1.00006 7L1.00006 6ZM22.3353 1.30722L21.9974 1.67579L21.9974 1.6758L22.3353 1.30722ZM28.0001 6.5L28.338 6.86858L28.7401 6.5L28.338 6.13143L28.0001 6.5ZM22.3353 11.6928L22.6731 12.0614L22.6731 12.0614L22.3353 11.6928ZM1.00006 7L22.0001 7L22.0001 6L1.00006 6L1.00006 7ZM22.5001 6.5L22.5001 1.45465L21.5001 1.45465L21.5001 6.5L22.5001 6.5ZM21.9974 1.6758L27.6623 6.86858L28.338 6.13143L22.6731 0.938643L21.9974 1.6758ZM27.6623 6.13143L21.9974 11.3242L22.6731 12.0614L28.338 6.86858L27.6623 6.13143ZM22.5001 11.5454L22.5001 6.5L21.5001 6.5L21.5001 11.5454L22.5001 11.5454ZM21.9974 11.3242C22.1898 11.1478 22.5001 11.2843 22.5001 11.5454L21.5001 11.5454C21.5001 12.1544 22.2241 12.4729 22.6731 12.0614L21.9974 11.3242ZM22.5001 1.45465C22.5001 1.71568 22.1898 1.85219 21.9974 1.67579L22.6731 0.938645C22.2241 0.527071 21.5001 0.845583 21.5001 1.45465L22.5001 1.45465Z" fill="white" />
</svg>
</div>
</div>
</div>
</div>
<div class="circle">
<a href="#about"></a>
</div>
</div>


<div id="about" class="about-area3 sec-pad-top">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="fini-about-imgs">
<div class="fini-img-left">
<img class="fini-about-shape-1" src="{{asset('/assets/img/home-3/about/about-circle-line.png')}}" alt>
<img class="fini-about-1" src="{{asset('/assets/img/home-3/about/about-1.jpg')}}" alt>
<img class="fini-about-2" src="{{asset('/assets/img/home-3/about/about-2.jpg')}}" alt>
</div>
<div class="fini-img-right">
<img class="fini-about-shape-2" src="{{asset('/assets/img/home-3/about/about-dot.png')}}" alt>
<img class="fini-about-3" src="{{asset('/assets/img/home-3/about/about-3.jpg')}}" alt>
<img class="fini-about-4" src="{{asset('/assets/img/home-3/about/about-4.jpg')}}" alt>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="fini-about-content">
<span>About us</span>
<h2>We drive experiences for brands with purpose.</h2>
<p>Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. Classe aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ei Donec lacinia placerat felis non aliquam.Integer purus odio.aliquam.Integer purus odio torquent Praesent nec neque.</p>
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
<div class="cmn-btn-layout3">
<a href="about.html">About more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="services-area3 sec-mar">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="sec-title-layout3">
<span>SERVICE LIST</span>
<h2>What We’re Offering</h2>
<p>Mauris tincidunt sed tellus vitae sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
</div>
</div>
<div class="row g-4">
<div class="col-md-6 col-lg-4">
<div class="fini-service border">
<span>01</span>
<div class="fini-icon">
<i><img src="{{asset('/assets/img/home-3/icons/service-icon-1.png')}}" alt></i>
</div>
<h4>Modern Website Design</h4>
<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.</p>
<a href="service-details.html">Read more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="fini-service">
<span>02</span>
<div class="fini-icon">
<i><img src="{{asset('/assets/img/home-3/icons/service-icon-2.jpg')}}" alt></i>
</div>
<h4>Consectetur notted adipisicing</h4>
<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.</p>
<a href="service-details.html">Read more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="fini-service border">
<span>03</span>
<div class="fini-icon">
<i><img src="{{asset('/assets/img/home-3/icons/service-icon-3.png')}}" alt></i>
</div>
<h4>Notted adipisicing elit sed</h4>
<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.</p>
<a href="service-details.html">Read more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="fini-service">
<span>04</span>
<div class="fini-icon">
<i><img src="{{asset('/assets/img/home-3/icons/service-icon-4.png')}}" alt></i>
</div>
<h4>Quisque placerat lacus </h4>
<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.</p>
<a href="service-details.html">Read more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="fini-service border">
<span>05</span>
<div class="fini-icon">
<i><img src="{{asset('/assets/img/home-3/icons/service-icon-5.png')}}" alt></i>
</div>
<h4>Digital consulting business</h4>
<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.</p>
<a href="service-details.html">Read more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="fini-service">
<span>06</span>
<div class="fini-icon">
<i><img src="{{asset('/assets/img/home-3/icons/service-icon-6.png')}}" alt></i>
</div>
<h4>Tincidunt tellus vitae</h4>
<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do.</p>
<a href="service-details.html">Read more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>


<div class="feature-counter">
<div class="container">
<div class="row g-4">
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
<div class="count-layout3">
<i><img src="{{asset('/assets/img/icons/count-1.png')}}" alt></i>
<div class="counter">
<span class="odometer">150</span><sup>+</sup>
</div>
<p>Project Completed</p>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
<div class="count-layout3">
<i><img src="{{asset('/assets/img/icons/count-2.png')}}" alt></i>
<div class="counter">
<span class="odometer">250</span><sup>+</sup>
</div>
<p>Satisfied Clients</p>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
<div class="count-layout3">
<i><img src="{{asset('/assets/img/icons/count-3.png')}}" alt></i>
<div class="counter">
<span class="odometer">150</span><sup>+</sup>
</div>
<p>Expert Teams</p>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
<div class="count-layout3">
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


<div class="project-area3 sec-mar-top">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="sec-title-layout3">
<span>RECENT PROJECT</span>
<h2>Work Showcase</h2>
<p>Mauris tincidunt sed tellus vitae sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<ul class="project-item-menu">
<li class="active" data-filter="*">All</li>
<li data-filter=".brand">BRANDING</li>
<li data-filter=".photography">PHOTOGRAPHY</li>
<li data-filter=".web">WEB DESIGN</li>
<li data-filter=".app">APP DESIGN</li>
</ul>
</div>
</div>
<div class="row g-4 project-grid">
<div class="col-md-6 col-lg-4 project-grid-item brand app">
<div class="project-item">
<img src="{{asset('/assets/img/home-3/project/project-item-1.jpg')}}" alt>
<a class="image-popup" href="{{asset('assets/img/home-3/project/project-item-1.jpg')}}"><i class="bi bi-arrow-right"></i></a>
<div class="project-item-inner">
<h4>Proin dolor augue, tincidunt nec fermentum in.</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 project-grid-item photography web">
<div class="project-item">
<img src="{{asset('/assets/img/home-3/project/project-item-2.jpg')}}" alt>
<a class="image-popup" href="{{asset('assets/img/home-3/project/project-item-2.jpg')}}"><i class="bi bi-arrow-right"></i></a>
<div class="project-item-inner">
<h4>Proin dolor augue, tincidunt nec fermentum in.</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 project-grid-item web brand">
<div class="project-item">
<img src="{{asset('/assets/img/home-3/project/project-item-3.jpg')}}" alt>
<a class="image-popup" href="{{asset('assets/img/home-3/project/project-item-3.jpg')}}"><i class="bi bi-arrow-right"></i></a>
<div class="project-item-inner">
<h4>Proin dolor augue, tincidunt nec fermentum in.</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 project-grid-item app photography">
<div class="project-item">
<img src="{{asset('/assets/img/home-3/project/project-item-5.jpg')}}" alt>
<a class="image-popup" href="{{asset('assets/img/home-3/project/project-item-5.jpg')}}"><i class="bi bi-arrow-right"></i></a>
<div class="project-item-inner">
<h4>Proin dolor augue, tincidunt nec fermentum in.</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 project-grid-item photography brand">
<div class="project-item">
<img src="{{asset('/assets/img/home-3/project/project-item-6.jpg')}}" alt>
<a class="image-popup" href="{{asset('assets/img/home-3/project/project-item-6.jpg')}}"><i class="bi bi-arrow-right"></i></a>
<div class="project-item-inner">
<h4>Proin dolor augue, tincidunt nec fermentum in.</h4>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 project-grid-item brand web">
<div class="project-item">
<img src="{{asset('/assets/img/home-3/project/project-item-4.jpg')}}" alt>
<a class="image-popup" href="{{asset('assets/img/home-3/project/project-item-4.jpg')}}"><i class="bi bi-arrow-right"></i></a>
<div class="project-item-inner">
<h4>Proin dolor augue, tincidunt nec fermentum in.</h4>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="testimonial-area3 sec-mar">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="sec-title-layout3">
<span>TESTIMONIAL</span>
<h2>What Client Say</h2>
<p>Mauris tincidunt sed tellus vitae sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
</div>
</div>
<div class="swiper testimonial2-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="single-slide">
<div class="reviewer-thumb">
<img src="{{asset('/assets/img/home-3/testimonial/reviewer-1.jpg')}}" alt>
</div>
<h4>Savannah Nguyen</h4>
<span>Executive CEO</span>
<p>Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus.</p>
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
<div class="single-slide">
<div class="reviewer-thumb">
<img src="{{asset('/assets/img/home-3/testimonial/reviewer-2.jpg')}}" alt>
</div>
<h4>Salmon Koer</h4>
<span>Chairman</span>
<p>Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus.</p>
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
<div class="single-slide">
<div class="reviewer-thumb">
<img src="{{asset('/assets/img/home-3/testimonial/reviewer-3.jpg')}}" alt>
</div>
<h4>Kemeron Gue</h4>
<span>Executive director</span>
<p>Curabitur magna nisi, egestas quis est in, finibus pulvinar ipsum. Nunc sit amet odio interdum, maximus dolor quis, ullamcorper lectus.</p>
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
<div class="swiper-pagination"></div>
</div>
</div>
</div>


<div class="news-articale">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="sec-title-layout3">
<span>OUR BLOG</span>
<h2>NEWS & ARTICLES</h2>
<p>Mauris tincidunt sed tellus vitae sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
</div>
</div>
<div class="row g-4">
<div class="col-lg-6">
<div class="single-articale">
<div class="articale-thumb">
<a href="blog_details.html"><img src="{{asset('/assets/img/home-3/articale/articale-1.jpg')}}" alt></a>
</div>
<div class="articale-content">
<h4><a href="blog_details.html">David Droga Still Has Faith in Online Advertising</a></h4>
<p>Duis sed odio sit amet nibh vulputa cursus a sit amet mauris.</p>
<a href="blog_details.html">Read more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single-articale">
<div class="articale-thumb">
<a href="blog_details.html"><img src="{{asset('/assets/img/home-3/articale/articale-1.jpg')}}" alt></a>
</div>
<div class="articale-content">
<h4><a href="blog_details.html">Kelso Muja Still Has Faith in Online Advertising</a></h4>
<p>Duis sed odio sit amet nibh vulputa cursus a sit amet mauris.</p>
<a href="blog_details.html">Read more<i class="bi bi-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="clients-area sec-mar">
<div class="container">
<div class="client-thumbnails">
<div class="client-thumb">
<img src="{{asset('/assets/img/home-3/client/client-1.png')}}" alt>
</div>
<div class="client-thumb">
<img src="{{asset('/assets/img/home-3/client/client-2.png')}}" alt>
</div>
<div class="client-thumb">
<img src="{{asset('/assets/img/home-3/client/client-3.png')}}" alt>
</div>
<div class="client-thumb">
<img src="{{asset('/assets/img/home-3/client/client-4.png')}}" alt>
</div>
<div class="client-thumb">
<img src="{{asset('/assets/img/home-3/client/client-5.png')}}" alt>
</div>
</div>
</div>
</div>


@endsection