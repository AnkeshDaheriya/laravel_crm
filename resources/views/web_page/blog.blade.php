
@extends('layouts.web_header')
@section('content')
<section class="breadcrumbs">
<div class="container">
<div class="row">
<div class="col-12">
<div class="breadcrumb-wrapper">
<h1>Blog</h1>
<ul>
<li><a href="{{('/')}}">Home</a></li>
<li>Blog</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<section class="blog-news sec-mar">
<div class="container">
<div class="blog-wrapper">
<div class="row">
<div class="col-md-6 col-lg-4 col-xl-4">
<div class="sidebar-search">
<form action="#" method="post">
<input type="text" name="search" placeholder="Search Here">
<button type="submit"><i class="bi bi-search"></i></button>
</form>
</div>
<div class="sidebar-widget">
<h4>Services</h4>
<ul class="service-list">
<li><a href="services.html"><i><img src="./assets/img/icons/dash-circle-icon.svg" alt></i>Web Design <span>(15)</span></a></li>
<li><a href="services.html"><i><img src="./assets/img/icons/dash-circle-icon.svg" alt></i>Apps Development <span>(18)</span></a></li>
<li><a href="services.html"><i><img src="./assets/img/icons/dash-circle-icon.svg" alt></i>Software Development <span>(21)</span></a></li>
<li><a href="services.html"><i><img src="./assets/img/icons/dash-circle-icon.svg" alt></i>Motion Graphics <span>(25)</span></a></li>
<li><a href="services.html"><i><img src="./assets/img/icons/dash-circle-icon.svg" alt></i>UI/UX Design <span>(29)</span></a></li>
<li><a href="services.html"><i><img src="./assets/img/icons/dash-circle-icon.svg" alt></i>Graphic Design <span>(31)</span></a></li>
</ul>
</div>
<div class="sidebar-widget">
<h4>Newest Post</h4>
<div class="widget-cnt">
<div class="wi">
<a href="{{('blog_details')}}"><img src="./assets/img/post/widget-post-1.jpg" alt></a>
</div>
<div class="wc">
<h6><a href="{{('blog_details')}}">Etiam vel diam volutpa pellentesque.</a></h6>
<span class="post-date">05 January, 2022</span>
</div>
</div>
<div class="widget-cnt">
<div class="wi">
<a href="{{('blog_details')}}"><img src="./assets/img/post/widget-post-2.jpg" alt></a>
</div>
<div class="wc">
<h6><a href="{{('blog_details')}}">malesuada sapien and Donec sed.</a></h6>
<span class="post-date">05 January, 2022</span>
</div>
</div>
<div class="widget-cnt">
<div class="wi">
<a href="{{('blog_details')}}"><img src="./assets/img/post/widget-post-3.jpg" alt></a>
</div>
<div class="wc">
<h6><a href="{{('blog_details')}}">Fusce ornare dapibus ultricies.</a></h6>
<span class="post-date">05 January, 2022</span>
</div>
</div>
</div>
<div class="sidebar-widget">
<h4>Popular tag</h4>
<ul class="tag-list">
<li><a href="#">Website</a></li>
<li><a href="#">Web Design</a></li>
<li><a href="#">Development</a></li>
<li><a href="#">Graphic Design</a></li>
<li><a href="#">Graphic</a></li>
<li><a href="#">UI/UX Design</a></li>
<li><a href="#">Activities</a></li>
<li><a href="#">Software Design</a></li>
<li><a href="#">3d Design</a></li>
</ul>
</div>
<div class="widget-banner">
<img src="./assets/img/widget-banner.jpg" alt>
<div class="banner-content">
<div class="banner-inner">
<h2>About Your Next Project.</h2>
<div class="cmn-btn">
<a href="{{('contact')}}">Contact Us</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-8 col-xl-8">
<div class="row g-4">
<div class="col-12 col-lg-6 col-xl-6">
<div class="signle-news">
<div class="tag">
<a href="#">Web Design</a>
</div>
<div class="post-img">
<a href="{{('blog_details')}}"><img src="./assets/img/post/post-1.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="./assets/img/author/author-1.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Alen Jodge</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="{{('blog_details')}}">Donec a porttitor phari sod tellus Nunc quis erosn.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="{{('blog_details')}}">View details</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-6">
<div class="signle-news">
<div class="tag">
<a href="#">App Design</a>
</div>
<div class="post-img">
<a href="{{('blog_details')}}"><img src="./assets/img/post/post-2.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="./assets/img/author/author-2.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Kan kuli</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="{{('blog_details')}}">Sed vel nibh ut ligula enim blandit finibus vita.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="{{('blog_details')}}">View details</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-6">
<div class="signle-news">
<div class="tag">
<a href="#">Software</a>
</div>
<div class="post-img">
<a href="{{('blog_details')}}"><img src="./assets/img/post/post-3.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="./assets/img/author/author-3.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Zela han</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="{{('blog_details')}}">Suspendisse vel congue maante In dictum nisl vel.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="{{('blog_details')}}">View details</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-6">
<div class="signle-news">
<div class="tag">
<a href="#">UI/UX Design</a>
</div>
<div class="post-img">
<a href="{{('blog_details')}}"><img src="./assets/img/post/post-4.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="./assets/img/author/author-4.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Mrs Lukas</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="{{('blog_details')}}">Morbi quis mi sed sem ant ullamco rutrum eget.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="{{('blog_details')}}">View details</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-6">
<div class="signle-news">
<div class="tag">
<a href="#">Development</a>
</div>
<div class="post-img">
<a href="{{('blog_details')}}"><img src="./assets/img/post/post-5.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="./assets/img/author/author-5.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Nela son</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="{{('blog_details')}}">Fusce ornare dapibus mitou ultricies pellentesque.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="{{('blog_details')}}">View details</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-6">
<div class="signle-news">
<div class="tag">
<a href="#">Graphic Design</a>
</div>
<div class="post-img">
<a href="{{('blog_details')}}"><img src="./assets/img/post/post-6.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="./assets/img/author/authoe-6.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Kog fong</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="{{('blog_details')}}">erat vehicula gravida Seden tincidunt tortor.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="{{('blog_details')}}">View details</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-6">
<div class="signle-news">
<div class="tag">
<a href="#">3D Design</a>
</div>
<div class="post-img">
<a href="{{('blog_details')}}"><img src="./assets/img/post/post-7.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="./assets/img/author/author-7.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Jedso lan</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="{{('blog_details')}}">Nulla vitae volutpat lacusin Sed nec dui et Don.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="{{('blog_details')}}">View details</a>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-6">
<div class="signle-news">
<div class="tag">
<a href="#">Motion Graphic</a>
</div>
<div class="post-img">
<a href="{{('blog_details')}}"><img src="./assets/img/post/post-8.jpg" alt></a>
</div>
<div class="news-content">
<div class="author">
<div class="author-pic">
<img src="./assets/img/author/author-1.jpg" alt>
</div>
<div class="author-info">
<h5>Posted by, Alen Mag</h5>
<span>05 January, 2022</span>
</div>
</div>
<h3><a href="{{('blog_details')}}">Praesent eget mi eget vitae mauris lacinia.</a></h3>
<p>Aptent taciti sociosqu ad litora torquent pi himenaeos. Praesent nec neque at dolor ti venenatis consectetur eu quis ex.</p>
<div class="view-btn">
<a href="{{('blog_details')}}">View details</a>
</div>
</div>
</div>
</div>
</div>
<nav>
<ul class="pagination">
<li><a href="#"><i class="bi bi-arrow-left-short"></i></a></li>
<li class="active"><a href="#">01</a></li>
<li><a href="#">02</a></li>
<li><a href="#">03</a></li>
<li><a href="#"><i class="bi bi-arrow-right-short"></i></a></li>
</ul>
</nav>
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
<a href="{{('contact')}}">Get In Touch</a>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
