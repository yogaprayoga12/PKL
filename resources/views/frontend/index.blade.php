<!-- 
PROJECT: Medic | Medical HTML Template
VERSION: 1.0.0
AUTHOR: Themefisher
WEBSITE: https://themefisher.com
-->

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Medical HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Medical HTML Template v1.0">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animation/animate.min.css">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">
  <!-- timePicker -->
  <link rel="stylesheet" href="plugins/timePicker/timePicker.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">

  

<!--header top-->
<div class="header-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="top-left text-center text-md-left">
          <h6 class="text-white">Update terakhir : {{ $tanggal }}</h6>
        </div>
      </div>
      <div class="col-md-6">
        <div class="top-right text-center text-md-right">
          <ul class="social-links">
            <li>
              <a href="https://themefisher.com/" aria-label="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="https://themefisher.com/" aria-label="twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://themefisher.com/" aria-label="google-plus">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li>
              <a href="https://themefisher.com/" aria-label="instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://themefisher.com/" aria-label="pinterest">
                <i class="fab fa-pinterest-p"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-4 col-lg-3">
        <div class="logo">
          <a href="index.html">
            <img loading="lazy" class="img-fluid" src="images/logo.png" alt="logo">
          </a>
        </div>
      </div>
      <div class="col-xl-8 col-lg-9">
        <div class="right-side">
          <ul class="contact-info pl-0 mb-4 mb-md-0">
            <li class="item text-left">
              <div class="icon-box">
                <i class="far fa-envelope"></i>
              </div>
              <strong>Email</strong>
              <br>
              <a href="mailto:info@medic.com">
                <span>unggul@medic.com</span>
              </a>
            </li>
            <li class="item text-left">
              <div class="icon-box">
                <i class="fas fa-phone"></i>
              </div>
              <strong>Call Now</strong>
              <br>
              <span>+(62)8961700794</span>
            </li>
          </ul>
          <div class="link-btn text-center text-lg-right">
            <a href="contact.html" class="btn-style-one">Appoinment</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Header Upper-->


<!--Main Header-->

<!--End Main Header -->

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
  <!-- Slider Item -->
  <div class="slider-item slide1" style="background-image:url(images/slider/slider-bg-1.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content style text-center">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">Our Best Surgeons</h2>
            <p class="tag-text mb-4" data-animation-in="slideInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sunt animi sequi ratione quod at earum. <br> Quis quos officiis numquam!</p>
            <a href="about.html" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2">explore</a>
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Item -->
  <div class="slider-item" style="background-image:url(images/slider/slider-bg-2.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start-->
          <div class="content style text-center">
            <h2 class="text-white" data-animation-in="slideInRight">We Care About Your Health</h2>
            <p class="tag-text mb-4" data-animation-in="slideInRight" data-duration-in="0.6">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <a href="about.html" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2">about us</a>
          </div>
          <!-- Slide Content End-->
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Item -->
  <div class="slider-item" style="background-image:url(images/slider/slider-bg-3.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content text-center style">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">Best Medical Services</h2>
            <p class="tag-text mb-4" data-animation-in="slideInLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, <br>eius pariatur minus itaque nostrum.</p>
            <a href="about.html" class="btn btn-main btn-white" data-animation-in="slideInRight"  data-duration-in="1.2">shop now</a>
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
	<div class="card bg-danger img-card box-primary-shadow">
	 <div class="card-body">
	  <div class="d-flex">
	   <div class="text-white">
		<p class="text-white mb-0">TOTAL POSITIF</p>
    
		<h2 class="mb-0 number-font"> <?php echo $posglobal['value'] ?> </h2>
    
		<p class="text-white mb-0">ORANG</p>
	   </div>
	   <div class="ml-auto"> <img src="{{asset('assets/img/sad-u6e.png')}}" width="50" height="50" alt="Positif"> </div>
	  </div>
	 </div>
	</div>
   </div><!-- COL END -->
	  
   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
	<div class="card bg-success img-card box-secondary-shadow">
	 <div class="card-body">
	  <div class="d-flex">
	   <div class="text-white">
		<p class="text-white mb-0">TOTAL SEMBUH</p>
		<h2 class="mb-0 number-font"><?php echo $semglobal['value'] ?></h2>
		<p class="text-white mb-0">ORANG</p>
	   </div>
	   <div class="ml-auto"> <img src="{{asset('assets/img/happy-ipM.png')}}" width="50" height="50" alt="Positif"> </div>
	  </div>
	 </div>
	</div>
   </div><!-- COL END -->
   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
	<div class="card  bg-warning img-card box-success-shadow">
	 <div class="card-body">
	  <div class="d-flex">
	   <div class="text-white">
		<p class="text-white mb-0">TOTAL MENINGGAL</p>
		<h2 class="mb-0 number-font"><?php echo $menglobal['value'] ?></h2>
		<p class="text-white mb-0">ORANG</p>
	   </div>
	   <div class="ml-auto"> <img src="{{asset('assets/img/emoji-LWx.png')}}" width="50" height="50" alt="Positif"> </div>
	  </div>
	 </div>
	</div>
   </div><!-- COL END -->
   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
	<div class="card  bg-info img-card box-success-shadow">
	 <div class="card-body">
	  <div class="d-flex">
	   <div class="text-white">
		<h2 class="text-white mb-0">INDONESIA</h2>
		<h4 class="mb-0 number-font text-white"><b>{{$positif}}</b> POSITIF, <b>{{$sembuh}}</b> SEMBUH, <b>{{$meninggal}}</b>MENINGGAL</h4>
	   </div>
	   <div class="ml-auto"> <img src="{{asset('assets/img/indonesia-PZq.png')}}" width="50" height="50" alt="Positif"> </div>
	  </div>
	 </div>
	</div>
   </div><!-- COL END -->	  
    </div>
  </div>
</section>

<!--about section-->
<div class="card-header ">
  &nbsp;
    <section class="showcase">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <div class="card border border-info">
          <section id="kasusindonesia" class="kasusindonesia"><center>
            <div class="card-header">Data Kasus Corona Virus Berdasarkan NEGARA</div></center>
            <div class="card-body ">
              <div style="height:600px;overflow:auto;margin-right:15px;">
              <table class="table table-striped">
					   <thead>
											  <tr>
												  <th>NO.</th>
												  <th>NEGARA</th>
												  <th>POSITIF</th>
												  <th>SEMBUH</th>
												  <th>MENINGGAL</th>
											  </tr>
										  </thead>
										  <tbody>
                        @php
                        $no = 1;
                      @endphp
                        @foreach($dunia as $data)
                            <tr>     
                              <th>{{$no++ }}</th>
                              <th> <?php echo $data['attributes']['Country_Region'] ?></th>
                              <th> <?php echo number_format($data['attributes']['Confirmed']) ?></th>
                              <th><?php echo number_format($data['attributes']['Recovered'])?></th>
                              <th><?php echo number_format($data['attributes']['Deaths'])?></th>
                            </tr>
                          @endforeach
               
								   </tbody>
								   </table>
  
  
					   </div>
					 </div>
	
	</div>
</section>
<!--End about section-->
<br>   

<div class="card-header ">
&nbsp;
  <section class="showcase">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="card border border-info">
        <section id="kasusindonesia" class="kasusindonesia"><center>
          <div class="card-header ">Data Kasus Corona Virus Berdasarkan Provinsi</div></center>
          <div class="card-body">
            <div style="height:600px;overflow:auto;margin-right:15px;">
            <table class="table table-striped">
              <thead>
                <th>No</th>
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
              </thead>
              <tbody>
              @php $no=1; @endphp
                                            @foreach($tampil as $tmp)
                                   
                                        <tr>
                                            <th>{{$no++ }}</th>
                                            <th>{{$tmp->nama_provinsi}}</th>
                                            <th>{{number_format($tmp->Positif)}}</th>
                                            <th>{{number_format($tmp->Sembuh)}}</th>
                                            <th>{{number_format($tmp->Meninggal)}}</th>
                                        </tr>
                @endforeach
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    
  </section>
<!--Start about us area-->
<section class="service-tab-section section">
  <div class="outer-box clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Nav tabs -->
          <div class="tabs mb-5">
            <ul class="nav nav-tabs justify-content-center" id="aboutTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="dormitory-tab" data-toggle="tab" href="#dormitory" role="tab" aria-controls="dormitory" aria-selected="true">dormitory</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="orthopedic-tab" data-toggle="tab" href="#orthopedic" role="tab" aria-controls="orthopedic" aria-selected="false">orthopedic</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="sonogram-tab" data-toggle="tab" href="#sonogram" role="tab" aria-controls="sonogram" aria-selected="false">sonogram</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="x-ray-tab" data-toggle="tab" href="#x-ray" role="tab" aria-controls="x-ray" aria-selected="false">x-ray</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="diagnostic-tab" data-toggle="tab" href="#diagnostic" role="tab" aria-controls="diagnostic" aria-selected="false">diagnostic</a>
              </li>
            </ul>
          </div>
          <!--Start single tab content-->
          <div class="tab-content" id="aboutTab">
            <div class="service-box tab-pane fade show active" id="dormitory">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-one.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>dormitory</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added. then a
                        dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added. then a dental
                        prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="orthopedic">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-two.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>orthopedic</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="sonogram">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-three.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>sonogram</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="x-ray">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-four.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>x-ray</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="diagnostic">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="images/services/service-five.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>diagnostic</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End about us area-->

<!--Service Section-->
<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Provided
        <span>Services</span>
      </h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
        fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="items-container">
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/1.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Dormitory</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/2.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Germs Protection</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/3.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Psycology</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/1.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Dormitory</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/2.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Germs Protection</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="images/gallery/3.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Psycology</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Service Section-->

<!--team section-->
<section class="team-section section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Our Expert
        <span>Doctors</span>
      </h3>
      <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
        <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <img loading="lazy" src="images/team/doctor-2.jpg" alt="doctor" class="img-fluid">
          <div class="contents text-center">
            <h4>Dr. Robert Barrethion</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
            <a href="appointment.html" class="btn btn-main">Book Appointment</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <img loading="lazy" src="images/team/doctor-lab-3.jpg" alt="doctor" class="img-fluid">
          <div class="contents text-center">
            <h4>Dr. Marry Lou</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
            <a href="appointment.html" class="btn btn-main">Book Appointment</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <img loading="lazy" src="images/team/event-2.jpg" alt="doctor" class="img-fluid">
          <div class="contents text-center">
            <h4>Dr. Sansa Stark</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
            <a href="appointment.html" class="btn btn-main">Book Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End team section-->

<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>What Our
            <span>Patients Says</span>
          </h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="testimonial-carousel">
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/1.png" alt="">
                </figure>
              </div>
              <h6>Adam Rose</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/2.png" alt="">
                </figure>
              </div>
              <h6>David Warner</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/3.png" alt="">
                </figure>
              </div>
              <h6>Amy Adams</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/1.png" alt="">
                </figure>
              </div>
              <h6>Adam Rose</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/2.png" alt="">
                </figure>
              </div>
              <h6>David Warner</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/3.png" alt="">
                </figure>
              </div>
              <h6>Amy Adams</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/1.png" alt="">
                </figure>
              </div>
              <h6>Adam Rose</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/2.png" alt="">
                </figure>
              </div>
              <h6>David Warner</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img loading="lazy" src="images/testimonials/3.png" alt="">
                </figure>
              </div>
              <h6>Amy Adams</h6>
              <p class="mb-0">Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End testimonial-section-->

<!-- Contact Section -->
<section class="appoinment-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="accordion-section">
  <div class="section-title">
    <h3>FAQ</h3>
  </div>
  <div class="accordion-holder">
    <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h4 class="card-title">
            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Why Should I choose Medical Health
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              What are the Centre’s visiting hours?
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              How many visitors are allowed?
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="col-lg-6">
        <div class="contact-area pl-0 pl-lg-5">
  <div class="section-title">
    <h3>Request
      <span>Appointment</span>
    </h3>
  </div>
  <form name="contact_form" class="default-form contact-form" action="!#" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="Name" placeholder="Name" required="">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="Email" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <select class="form-control" name="subject">
            <option>Departments</option>
            <option>Diagnostic</option>
            <option>Psychological</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="Phone" placeholder="Phone" required="">
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="Date" placeholder="Date" required="" id="datepicker" autocomplete="off">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="form-group">
          <select class="form-control" name="subject">
            <option>Doctor</option>
            <option>Diagnostic</option>
            <option>Psychological</option>
          </select>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn-style-one">submit now</button>
        </div>
      </div>
    </div>
  </form>
</div>
      </div>
    </div>                    
  </div>
</section>
<!-- End Contact Section -->

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img loading="lazy" class="img-fluid" src="images/logo-2.png" alt="medic">
                </a>
              </figure>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
            <ul class="location-link">
              <li class="item">
                <i class="fas fa-map-marker-alt"></i>
                <p>Modamba, NY 80021, United States</p>
              </li>
              <li class="item">
                <i class="far fa-envelope" aria-hidden="true"></i>
                <a href="mailto:support@medic.com">
                  <p>support@medic.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fas fa-phone" aria-hidden="true"></i>
                <p>(88017) +123 4567</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li class="list-inline-item"><a href="https://facebook.com/themefisher" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/themefisher" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="https://instagram.com/themefisher" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="https://github.com/themefisher" aria-label="github"><i class="fab fa-github"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
          <h2>Services</h2>
          <ul class="menu-link">
            <li>
              <a href="service.html">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
            </li>
            <li>
              <a href="service.html">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
            </li>
            <li>
              <a href="service.html">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
            </li>
            <li>
              <a href="service.html">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
            </li>
            <li>
              <a href="service.html">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-7">
          <div class="social-links">
            <h2>Recent Posts</h2>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left mr-3">
                    <a href="blog-details.html">
                      <img loading="lazy" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h5><a href="blog-details.html">A lesson adip isicing</a></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left mr-3">
                    <a href="blog-details.html">
                      <img loading="lazy" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h5><a href="blog-details.html">How to make an event</a></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2021. Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
  <i class="fa fa-angle-up"></i>
</div>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>


<!-- jquery -->
<script src="plugins/jquery.min.js"></script>
<!-- bootstrap -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js" defer></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/gmap.js" defer></script>

<!-- jquery-ui -->
<script src="plugins/jquery-ui/jquery-ui.js" defer></script>
<!-- timePicker -->
<script src="plugins/timePicker/timePicker.js" defer></script>

<!-- script js -->
<script src="js/script.js"></script>
</body>

</html>
