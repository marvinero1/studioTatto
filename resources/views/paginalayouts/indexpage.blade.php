@extends('paginalayouts.mainpage')

@section('content')
<div data-scroll='1' class="full_width">
    <!--Services area start here-->
    <section class="services-area section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading-one">
                            <h2><span>01</span> Nuestros Mejores Servicios</h2>
                            <p>Ofrecer servicios y productos de excelente calidad. Con un personal capacitado para dar soluciones integrales que generen bienestar, compromiso y trabajo en equipo.</p>
                            <a href="https://wa.me/+59169538869/?text=Hola%20Quisiera%20%20cotizar%20tus%20servicios%20y/o%20Productos";" class="btn2"><span>Mas Información</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pd-0">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="service-list wow animated fadeIn" data-wow-duration="0.5s">
                                <figure>
                                    <img src="images/services/1.jpg" alt="Tattooing" />
                                    <a>Tattoo</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="service-list wow animated fadeIn" data-wow-duration="1s">
                                <figure>
                                    <img src="images/services/2.jpg" alt="Piercing" />
                                    <a>Piercing</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-list wow animated fadeIn" data-wow-duration="0.5s">
                            <figure>
                                <img src="images/services/3.jpg" alt="Modificaciones"/>
                                <a>Modifcaciones</a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-list wow animated fadeIn" data-wow-duration="1s">
                            <figure>
                                <img src="images/services/4.jpg" alt="Diseño" />
                                <a>Diseño de Tatto</a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-list wow animated fadeIn" data-wow-duration="1.5s">
                            <figure>
                                <img src="images/services/5.jpg" alt="Realismo" />
                                <a>Realismo</a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-list wow animated fadeIn" data-wow-duration="2s">
                            <figure>
                                <img src="images/services/6.jpg" alt="" />
                                <a>Team</a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services area end here-->
</div>
<div data-scroll='2' class="full_width">
    <!--About area start here-->
    <section class="about-area bg-img section jarallax af">
        <div class="container">
            <div class="row">
                <div class="about-img col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="/images/carusel.jpeg" alt="" /></div>
                        <div class="tab-pane" id="pic-2"><img src="images/about/2.jpg" alt="" /></div>
                        <div class="tab-pane" id="pic-3"><img src="images/about/3.jpg" alt="" /></div>
                        <div class="tab-pane" id="pic-4"><img src="images/about/4.jpg" alt="" /></div>
                        <div class="tab-pane" id="pic-5"><img src="images/about/5.jpg" alt="" /></div>
                    </div>
                    <ul class="about-thumbnail list-inline nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/about/1.jpg" alt="" /></a></li>
                        <li><a data-target="#pic-2" data-toggle="tab"><img src="images/about/2.jpg" alt="" /></a></li>
                        <li><a data-target="#pic-3" data-toggle="tab"><img src="images/about/3.jpg" alt="" /></a></li>
                        <li><a data-target="#pic-4" data-toggle="tab"><img src="images/about/4.jpg" alt="" /></a></li>
                        <li><a data-target="#pic-5" data-toggle="tab"><img src="images/about/5.jpg" alt="" /></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-con text-right">
                        <div class="section-heading-five">
                            <h2>About My Studio <span>02</span></h2>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi
                                accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor.</p>
                        </div>
                        <div class="con">
                            <h3>We Work Seens <span>1996</span></h3>
                            <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit.</p>
                            <img src="images/about/1.png" alt="" />
                            <a href="#">~ by Akshay Handge</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About area end here-->
</div>
<div data-scroll='3' class="full_width">
    <!--Price plan area start here-->
    <section class="price-plan-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-three">
                        <h2><span>03</span> Our Pricing Plans</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem.</p>
                    </div>
                    <div class="plan-nav">
                        <ul role="tablist">
                            <li role="presentation" class="active wow animated fadeIn" data-wow-duration="1s"><a href="#Mods" role="tab" data-toggle="tab">Piercings & Mods</a></li>
                            <li role="presentation" class="wow animated fadeIn" data-wow-duration="1.5s"><a href="#Design" role="tab" data-toggle="tab">Tattoo Design</a></li>
                            <li role="presentation" class="wow animated fadeIn" data-wow-duration="1.5s"><a href="#Merch" role="tab" data-toggle="tab">Jewelry & Merch</a></li>
                            <li role="presentation" class="wow animated fadeIn" data-wow-duration="1.5s"><a href="#modifications" role="tab" data-toggle="tab">Tattoo modifications</a></li>
                            <li role="presentation" class="wow animated fadeIn" data-wow-duration="1.5s"><a href="#Permanent" role="tab" data-toggle="tab">Permanent Make-Up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="plan-content">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="Mods">
                                <div class="form-head">Tattoo Design</div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Tribal Tattoos .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Religious Tattoos .................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$55</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Stonework Style ..................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$59</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Cartoon Tattoos...................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$39</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Lettering & Ambigrams .......</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$99</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Design">
                                <div class="form-head">Tattoo Design</div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>3d Tattoo .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Merch">
                                <div class="form-head">Tattoo Design</div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Back Ink.....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Hand Tattoo.....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Skin Art .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="modifications">
                                <div class="form-head">Tattoo Design</div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Arm Tattoo .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Foot Tattoo .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Back Tattoo .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Realism Tattoo.....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3> LEG TATTOOS.....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Permanent">
                                <div class="form-head">Tattoo Design</div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Body Tattoos .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Flower Tattos .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Godesh Tattoos .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Scar Tattoos .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                                <div class="price-list">
                                    <div class="con">
                                        <h3>Eyebrow Tattoo .....................</h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                                    </div>
                                    <div class="price">
                                        <span>$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Price plan area end here-->
    <!--Counter area start here-->
    <section class="count-area bg-img jarallax af">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="count-list list-1">
                        <div class="count-num wow animated fadeIn" data-wow-duration="0.5s">
                            <span class="count">510</span>
                            <span>+</span>
                        </div>
                        <h4>Tattoos</h4>
                    </div>
                    <div class="count-list list-2">
                        <div class="count-num wow animated fadeIn" data-wow-duration="1s">
                            <span class="count">125</span>
                            <span>+</span>
                        </div>
                        <h4>Piercing</h4>
                    </div>
                    <div class="count-list list-3">
                        <div class="count-num wow animated fadeIn" data-wow-duration="1.5s">
                            <span class="count">30</span>
                            <span>+</span>
                        </div>
                        <h4>Modificaciones</h4>
                    </div>
                    <div class="count-list list-4">
                        <div class="count-num wow animated fadeIn" data-wow-duration="2s">
                            <span class="count">8</span>
                            <span>+</span>
                        </div>
                        <h4>Numeor de Premios</h4>
                    </div>
                    <div class="count-list list-5">
                        <div class="count-num wow animated fadeIn" data-wow-duration="2.5s">
                            <span class="count">400</span>
                            <span>+</span>
                        </div>
                        <h4>Clientes Felices! </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter area end here-->
</div>
{{-- <div data-scroll='4' class="full_width">
    <!--Gallery area start here-->
    <section class="gallery-area section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading w-50 floatright">
                        <div class="section-heading-two">
                            <h2>Our Work Gallery <span>04</span></h2>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem.</p>
                        </div>
                    </div>
                    <div class="gallery-nav filter filter-demo">

                         <ul class="list-inline" id="filter">
                      <li><a class="active" data-group="all"><span></span>All</a></li>
                      <li><a data-group="business"><span></span>TATTOO DESIGN</a></li>
                      <li><a data-group="website"><span></span> PIERCING</a></li>
                      <li><a data-group="logo"> <span></span>MAKE-UP </a></li>
                      <li><a data-group="business"><span></span> JEWELRY & MERCH </a></li>
                  </ul>
                    </div>
                </div>
                <div class="portfolio-area ptb-100">
              <div class="container">
                <div class="portfolio-filter clearfix text-center">

                </div>
                <div class="row three-column">
                  <div id="gridWrapper" class="clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "website", "logo"]'>
                      <div class="portfolio-thumb">

                        <div class="gc_filter_cont_overlay_wrapper">
                                    <img src="images/gallery/1.jpg" class="zoom image img-responsive" alt="service_img"/>
                                    <div class="gc_filter_cont_overlay">
                                        <div class="gc_filter_text"><a href="images/gallery/1.jpg"><i class="fa fa-search"></i></a></div>
                                    </div>
                                </div>

                      </div><!-- /.portfolio-thumb -->
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                      <div class="portfolio-thumb">
                                <div class="gc_filter_cont_overlay_wrapper">
                                    <img src="images/gallery/2.jpg" class="zoom image img-responsive" alt="service_img"/>
                                    <div class="gc_filter_cont_overlay">
                                        <div class="gc_filter_text"><a href="images/gallery/2.jpg"><i class="fa fa-search"></i></a></div>
                                    </div>
                                </div>

                      </div><!-- /.portfolio-thumb -->
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "logo", "photoshop"]'>
                      <div class="portfolio-thumb">
                        <div class="gc_filter_cont_overlay_wrapper">
                                    <img src="images/gallery/3.jpg" class="zoom image img-responsive" alt="service_img"/>
                                    <div class="gc_filter_cont_overlay">
                                        <div class="gc_filter_text"><a href="images/gallery/3.jpg"><i class="fa fa-search"></i></a></div>
                                    </div>
                                </div>

                      </div><!-- /.portfolio-thumb -->
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "logo", "website", "business"]'>
                      <div class="portfolio-thumb">

                       <div class="gc_filter_cont_overlay_wrapper">
                                    <img src="images/gallery/4.jpg" class="zoom image img-responsive" alt="service_img"/>
                                    <div class="gc_filter_cont_overlay">
                                        <div class="gc_filter_text"><a href="images/gallery/4.jpg"><i class="fa fa-search"></i></a></div>
                                    </div>
                                </div>

                      </div><!-- /.portfolio-thumb -->
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "photoshop"]'>
                      <div class="portfolio-thumb">
                        <div class="gc_filter_cont_overlay_wrapper">
                                    <img src="images/gallery/5.jpg" class="zoom image img-responsive" alt="service_img"/>
                                    <div class="gc_filter_cont_overlay">
                                        <div class="gc_filter_text"><a href="images/gallery/5.jpg"><i class="fa fa-search"></i></a></div>
                                    </div>
                                </div>

                      </div><!-- /.portfolio-thumb -->
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "business", "website", "logo"]'>
                      <div class="portfolio-thumb">
                        <div class="gc_filter_cont_overlay_wrapper">
                                    <img src="images/gallery/6.jpg" class="zoom image img-responsive" alt="service_img"/>
                                    <div class="gc_filter_cont_overlay">
                                        <div class="gc_filter_text"><a href="images/gallery/6.jpg"><i class="fa fa-search"></i></a></div>
                                    </div>
                                </div>
                      </div><!-- /.portfolio-thumb -->
                    </div>



                  </div><!--/#gridWrapper-->
                </div><!-- /.row -->

              </div> <!-- /.container -->
            </div> <!--/.portfolio-area-->
            </div>
        </div>
    </section>
    <!--Gallery area end here-->
</div> --}}
<div data-scroll='5' class="full_width">
    <!--Product area start here-->
    <section class="product-area section bg-img jarallax af">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-heading-four">
                        <h2><span>05</span> Our Product Shop</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-md-offset-1">
                    <div class="product-heading wow animated fadeIn" data-wow-duration="2s">
                        <div class="con pro_shop_select">
                            <select>
                                <option>All Categories</option>
                                <option>Tattoo</option>
                                <option>Circular</option>
                            </select>
                            <a href="#" class="btn2"><span>Visit Our Shop</span></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div class="product-slider">
                        @foreach($producto as $productos)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pro-list">
                                <figure><img src="/{{ $productos->imagen }}" alt="" style="height: 317px;" /></figure>
                                <div class="content">
                                    <div class="price">
                                        <span>Bs. {{ $productos->precio }}</span>
                                    </div>
                                    {{-- <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> --}}
                                    <h3>{{ $productos->nombre_producto }}</h3>
                                    <p>Marca: <span><strong>{{ $productos->marca }}</strong></span></p>

                                    <a href="https://wa.me/+59169538869/?text=Hola%20Quisiera%20%20cotizar%20tus%20servicios%20y/o%20Productos";" class="btn4"><span>Consultar</span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product area end here-->
    <!--Banner area start here-->
    {{-- <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="subscribe-con wow animated fadeInLeft" data-wow-duration="1.5s">
                        <h2>subscribe our newsletter !</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="form-area">
                        <form>
                            <input type="email" placeholder="Email Address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Banner area end here-->
</div>
<div data-scroll='6' class="full_width">
    <!--Team area start here-->
    <section class="team-area section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-two">
                        <h2>Equipo Idóneo, Apto y Habil <span></span></h2>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aacenean sollicitudin,<br> lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem.</p>
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($artistas as $artistass)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="team-list">
                        <figure>
                            <img style="height: 42% !important" src="/{{ $artistass->imagen }}" alt="{{ $artistass->nombre }}"
                            width="100%" >
                            <div class="content">
                                <h3>{{ $artistass->nombre_artista }}</h3>
                                <span>{{ $artistass->rol }}</span>
                                <ul class="list-inline">
                                    <li><a href="{{ $artistass->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $artistass->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{ $artistass->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><?php
                                        $whatsapp = $artistass->whatsapp;
                                        $whatsapp_url = "https://wa.me/".$whatsapp."?text=Hola%20Quisiera%20%20cotizar%20tus%20servicios%20y/o%20Productos";
                                        // echo $whatsapp_url;
                                        ?>
                                        <a href="{{ $whatsapp_url }}"
                                        target="_blank"><i class="fa fa-whatsapp"></i></a></li>

                                    <li><?php
                                        $telegram = $artistass->telegram;
                                        $telegram_url = "https://telegram.me/".$telegram;
                                        //  echo $telegram_url;
                                        ?>
                                        <a href="{{ $telegram_url }}"
                                        target="_blank"><i class="fa fa-telegram"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!--Team area end here-->


    <!--Testimonial area start here-->
    <section class="testimonial-area section bg-img jarallax af">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-four">
                        <h2 class="mr-0"><span>07</span> Nuestros Clientes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonial-slider">
                        @foreach($blog as $blogs)
                            <div class="testimonial-list">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <p>{{ $blogs->detalle }}</p>
                                        <a href="#">~ De: <span>{{ $blogs->nombre_cliente }}</span></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <figure><img src="/{{ $blogs->imagen }}" alt="{{ $blogs->nombre_cliente }}" /></figure>
                                </div>
                            </div>
                        @endforeach           
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial area end here-->
</div>
<div data-scroll='7' class="full_width">
    <!--Appointment area start here-->
    {{-- <section class="appointment-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="app-form wow animated pulse" data-wow-duration="1.5s">
                        <div class="form-head">Contact Form</div>
                        <form>
                            <fieldset><input type="text" name="full_name" placeholder="Full Name*" class="require"></fieldset>
                            <fieldset><input type="text" name="email" placeholder="Email*" class="require" data-valid="email" data-error="Email should be valid."></fieldset>
                            <fieldset><input type="text" name="contact_no" placeholder="Phone*" class="require"></fieldset>
                            <fieldset>
                                <div class="w-50 pd-r10 floatleft"><input type="text" name="date" placeholder="mm/dd/yy" class="require"><span><i class="fa fa-calendar-o"></i></span></div>
                                <div class="w-50 pd-l10 floatleft">
                                <input type="text" name="time" placeholder="--:-- --" class="require">
                                <span><i class="fa fa-clock-o"></i></span></div>
                            </fieldset>
                            <fieldset><textarea rows="5" name="message" placeholder="Message" class="require"></textarea></fieldset>
                            <div class="response"></div>
                            <button type="button" class="submitForm btn3" ><span>Send a Message</span></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-heading-two">
                        <h2>Book An appointment <span>08</span></h2>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem.</p>
                    </div>
                    <div class="con-info">
                        <div class="info-list">
                            <div class="info-con">
                                <span>121 King Street, Melbourne</span>
                                <span>Victoria 3000, Australia</span>
                            </div>
                            <div class="info-ico wow animated zoomIn" data-wow-duration="1s"><span><i class="fa fa-map-marker"></i></span></div>
                        </div>
                        <div class="info-list">
                            <div class="info-con">
                                <span>+ 112 - 123 - 456 - 789</span>
                                <span>+ 113 - 987 - 654 - 321</span>
                            </div>
                            <div class="info-ico  wow animated zoomIn" data-wow-duration="1s"><span><i class="fa fa-phone"></i></span></div>
                        </div>
                        <div class="info-list responsive_contact">
                            <div class="info-con">
                                <span>book.tattoo@example.com</span>
                                <span>shop.tattoo@example.com</span>
                            </div>
                            <div class="info-ico wow animated zoomIn" data-wow-duration="1s"><span><i class="fa fa-envelope"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Appointment area end here-->

    <!--Google map-->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                   <div id='map'></div>
                </div>
            </div>
        </div>
    </div>
    <!--Google map end-->
</div>
<div data-scroll='8' class="full_width">
    <!--Video area start here-->
    <section class="video-banner bg-img jarallax af">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    {{-- <div class="videos-content">
                        <div class="left-con">
                            <h2>Welcome to Our Video Tour</h2>
                        </div>
                        <div class="right-con">
                            <h2>See Our Best Work !</h2>
                        </div>
                        <div class="video-link wow animated zoomIn" data-wow-duration="1.5s">
                            <a href="https://www.facebook.com/watch/?v=375669767139137" class="video-play-icon"><img src="images/icons/play.png" alt=""/></a>
                        </div>
                    </div> --}}
                    <div class="left-con text-center">
                        <h2>!Disfruta del Video¡</h2>
                    </div><br>
                    <div class="text-center">
                        <video width="50%" height="auto" controls style="width: 50%;height: auto;">
                            <source src="/images/videoFijo/presentacion.mp4">
                        </video> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video area end here-->
    <!--Blog area start here-->
    <section class="blog-area section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-heading-three">
                        <h2><span>09</span> Nuestros ultimos eventos junto Al Baul de recuerdos</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>
                    </div>
                </div>
                {{-- <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-md-offset-1">
                    <div class="product-heading wow animated fadeIn" data-wow-duration="2.5s">
                        <div class="con">
                            <select>
                                <option>All Categories</option>
                                <option>Tattoo</option>
                                <option>Circular</option>
                            </select>
                            <a href="#" class="btn5"><span>Visit Our Shop</span></a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    @foreach($evento as $eventos)
                        <div class="blog-list">
                            <figure><img src="/{{ $eventos->imagen }}" alt="{{ $eventos->titulo }}" /></figure>
                            <div class="content">
                                <h3><a>{{ $eventos->titulo }}</a></h3>
                                <ul class="list-inline">
                                    <li>By {{ $eventos->posteador }}</li>
                                    <li>{{ date('M-d, Y', strtotime($eventos->fecha))}}</li>
                                </ul>
                                <p>{{ $eventos->detalle }}</p>
                                {{-- <a href="blog.html">Read More >></a> --}}
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="blog-list">
                        <figure><img src="images/blog/4.jpg" alt="" /></figure>
                        <div class="content">
                            <h3><a href="#">SIMPLE SHAPES</a></h3>
                            <ul class="list-inline">
                                <li>By Admin</li>
                                <li>July 29, 2018</li>
                            </ul>
                            <p>Sollicitudin, lorem quis bibe u auctor, nisi elit nat ipsu, nec sagittis sem ni id elit.</p>
                            <a href="blog.html">Read More >></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
