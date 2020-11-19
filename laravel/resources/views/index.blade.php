@extends('layouts/cuadro')

@section('main')
  @auth
    {{-- si esta registrado --}}
      <section id="home-section" class="hero">
		      <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12  ftco-animate text-center">
	              <h1 class="mb-2">Maxikiosco Mayorista</h1>
	              <h2 class="subheading mb-4">provedor integral para kioscos y almacenes</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
        @auth
            <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
              <div class="overlay"></div>
              <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                  <div class="col-sm-12 ftco-animate text-center">
                    <h1 class="mb-2">Nuevos combos</h1>
                    <h2 class="subheading mb-4">Mira los nuevos productos!</h2>
                    <p><a href="#" class="btn btn-primary">View Details</a></p>
                  </div>

                </div>
              </div>
            </div>
        @else
    	      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
    	      	<div class="overlay"></div>
    	        <div class="container">
    	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

    	            <div class="col-sm-12 ftco-animate text-center">
    	              <h1 class="mb-2">Registrate ya y obten puntos</h1>
    	              <h2 class="subheading mb-4">Registrate aqui y obten los mejores dewscuentos</h2>
    	              <p><a href="#" class="btn btn-primary">View Details</a></p>
    	            </div>

    	          </div>
    	        </div>
    	      </div>
        @endauth
	    </div>
      </section>
@else
      <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">Maxikiosco Mayorista</h1>
	              <h2 class="subheading mb-4">provedor integral para kioscos y almacenes</h2>
                <p><a href="#" class="btn btn-primary">View Details</a></p>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">Registrate ya y obten puntos</h1>
	              <h2 class="subheading mb-4">Registrate aqui y obten los mejores dewscuentos</h2>
                <p><a href="#" class="btn btn-primary">View Details</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
      </section>
@endauth

<br>
		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-6">
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="productos-container">
                        <a href="#">
                          <img src="/images/2.jpg" class="img-fluid" alt="Producto 04">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productos-container">
                        <a href="#">
                          <img src="/images/3.jpg" class="img-fluid" alt="Producto 04">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productos-container">
                        <a href="#">
                          <img src="/images/4.jpg" class="img-fluid" alt="Producto 04">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productos-container">
                        <a href="#">
                          <img src="/images/5.jpg" class="img-fluid" alt="Producto 04">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productos-container">
                        <a href="#">
                          <img src="/images/6.jpg" class="img-fluid" alt="Producto 04">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="productos-container">
                        <a href="#">
                          <img src="/images/7.jpg" class="img-fluid" alt="Producto 04">
                        </a>
                    </div>
                </div>

            </div>
					</div>


				</div>
			</div>
		</section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Promos</span>
            <h2 class="mb-4">Nuestras promos y combos!</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @auth

            <section class="ftco-section">
            	<div class="container">
        				<div class="row justify-content-center mb-3 pb-3">
                  <div class="col-md-12 heading-section text-center ftco-animate">
                  	<span class="subheading">Favoritos</span>
                    <h2 class="mb-4">Tus productos favoritos!</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                  </div>
                </div>
            	</div>
            	<div class="container">
            		<div class="row">
            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
            					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
            						<span class="status">30%</span>
            						<div class="overlay"></div>
            					</a>
            					<div class="text py-3 pb-4 px-3 text-center">
            						<h3><a href="#">Bell Pepper</a></h3>
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
        		    					</div>
        	    					</div>
        	    					<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex">
        	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								<span><i class="ion-ios-menu"></i></span>
        	    							</a>
        	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-cart"></i></span>
        	    							</a>
        	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
        	    								<span><i class="ion-ios-heart"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
            					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
            						<div class="overlay"></div>
            					</a>
            					<div class="text py-3 pb-4 px-3 text-center">
            						<h3><a href="#">Strawberry</a></h3>
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span>$120.00</span></p>
        		    					</div>
        	    					</div>
            						<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex">
        	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								<span><i class="ion-ios-menu"></i></span>
        	    							</a>
        	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-cart"></i></span>
        	    							</a>
        	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
        	    								<span><i class="ion-ios-heart"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
            					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
        	    					<div class="overlay"></div>
        	    				</a>
            					<div class="text py-3 pb-4 px-3 text-center">
            						<h3><a href="#">Green Beans</a></h3>
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span>$120.00</span></p>
        		    					</div>
        	    					</div>
            						<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex">
        	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								<span><i class="ion-ios-menu"></i></span>
        	    							</a>
        	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-cart"></i></span>
        	    							</a>
        	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
        	    								<span><i class="ion-ios-heart"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
            					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
            						<div class="overlay"></div>
            					</a>
            					<div class="text py-3 pb-4 px-3 text-center">
            						<h3><a href="#">Purple Cabbage</a></h3>
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span>$120.00</span></p>
        		    					</div>
        	    					</div>
            						<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex">
        	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								<span><i class="ion-ios-menu"></i></span>
        	    							</a>
        	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-cart"></i></span>
        	    							</a>
        	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
        	    								<span><i class="ion-ios-heart"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>


            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
            					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-5.jpg" alt="Colorlib Template">
            						<span class="status">30%</span>
            						<div class="overlay"></div>
            					</a>
            					<div class="text py-3 pb-4 px-3 text-center">
            						<h3><a href="#">Tomatoe</a></h3>
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
        		    					</div>
        	    					</div>
        	    					<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex">
        	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								<span><i class="ion-ios-menu"></i></span>
        	    							</a>
        	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-cart"></i></span>
        	    							</a>
        	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
        	    								<span><i class="ion-ios-heart"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
            					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-6.jpg" alt="Colorlib Template">
            						<div class="overlay"></div>
            					</a>
            					<div class="text py-3 pb-4 px-3 text-center">
            						<h3><a href="#">Brocolli</a></h3>
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span>$120.00</span></p>
        		    					</div>
        	    					</div>
            						<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex">
        	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								<span><i class="ion-ios-menu"></i></span>
        	    							</a>
        	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-cart"></i></span>
        	    							</a>
        	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
        	    								<span><i class="ion-ios-heart"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
            					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-7.jpg" alt="Colorlib Template">
        	    					<div class="overlay"></div>
        	    				</a>
            					<div class="text py-3 pb-4 px-3 text-center">
            						<h3><a href="#">Carrots</a></h3>
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span>$120.00</span></p>
        		    					</div>
        	    					</div>
            						<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex">
        	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								<span><i class="ion-ios-menu"></i></span>
        	    							</a>
        	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-cart"></i></span>
        	    							</a>
        	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
        	    								<span><i class="ion-ios-heart"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
            					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-8.jpg" alt="Colorlib Template">
            						<div class="overlay"></div>
            					</a>
            					<div class="text py-3 pb-4 px-3 text-center">
            						<h3><a href="#">Fruit Juice</a></h3>
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span>$120.00</span></p>
        		    					</div>
        	    					</div>
            						<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex">
        	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								<span><i class="ion-ios-menu"></i></span>
        	    							</a>
        	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-cart"></i></span>
        	    							</a>
        	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
        	    								<span><i class="ion-ios-heart"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </section>
    @else
    @endauth


    <hr>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Envio sin cargo</h3>
                <span>Con una orden superior a $1500</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Siempre a tiempo</h3>
                <span>Pedidos entregados a tiempo</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Super calidad</h3>
                <span>Productos directo de fabrica</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Atencion al cliente</h3>
                <span>Llama y solucionaremos tu problema</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 margintop-sm">
                    <h3>Buscas comenzar tu kiosco? <b class="candy">Maxikiosco Mayorista</b> <b> es lo que necesitás!</b></h3>
                    <p class="sm-head">
                    <span class="fa fa-location-arrow"></span>
                    Oficina Central
                  </p>
                  <p>Diego Laure 219 - Ezeiza</p>

                  <p class="sm-head">
                    <span class="fa fa-phone"></span>
                    Telefono
                  </p>
                  <p>
                    4232-6745 <br>

                  </p>

                  <p class="sm-head">
                    <span class="fa fa-envelope"></span>
                    Email
                  </p>
                  <p>
                    lala@gmail.com
                  </p>
                </div>
                <div class="col-md-6 margintop-sm">
                    <div class="row">
                      <form class="row" action="" method="post">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="" value="" name="email" placeholder="Email">
                                <p>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Nombre de empresa">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" id="" placeholder="Celular (optional)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="" class="btn btn-primary full-width">Contactanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
