@extends('layouts/cuadro')

@section('main')

  <?php $total = 0; $subtotal = 0 ; $count = 0 ; ?>

    {{-- <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="">
      <h3>Carrito de {{Auth::user()->name}}</h3>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table table-hover">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Producto</th>
						        <th>Precio</th>
						        <th>Cantidad</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
                  @foreach ($productos as $producto)
                    <form class="row" action="" method="post" enctype="multipart/form-data">
                      @csrf
                        @if ($producto->id_user == (Auth::user()->id))
                          @if ($producto->getNoProduct() == 0)
                            @continue
                          @endif
                          @if ($producto->deleteit == 1)
                            @continue
                          @endif
                          @if ($producto->buyit == 1)
                            @continue
                          @endif
                          <?php $count = $count + 1 ; ?>
        						      <tr class="text-center">
        						        <td><a href="/carrito/{{$producto->id}}"><span class="btn btn-danger"><i class="ion-ios-close"></i></span></a></td>
                            {{-- eliminar --}}

                            @if ($producto->avatar)
                              <td class="image-prod"><div class=""><img class="cart-img" src="/storage/{{$producto->avatar}}" alt="Colorlib Template">
                              </div></td>
                            @else
                              <td class="image-prod"><div class=""><img class="cart-img" src="/images/defaut.jpg" alt="Colorlib Template">
                              </div></td>
                            @endif

        						        <td class="product-name">
        						        	<h3>{{$producto->getProductName()}}</h3>
        						        	{{-- <p>{{$producto->getProductDescripcion()}}</p> --}}
        						        </td>

        						        <td class="price">${{$producto->price}}</td>

        						        <td class="quantity">
                              <div class="d-flex justify-content-around">
                                <a  href="/carrito/menos/{{$producto->id}}"><span class="btn btn-dark"><i class="ion-ios-remove"></i></span></a>
                                <h3>{{$producto->quantity}}</h3>
        					             	{{-- <input type="text" name="quantity" class="quantity form-control input-number" value="{{$producto->quantity}}" width="20px" readonly> --}}
                                <a  href="/carrito/mas/{{$producto->id}}"><span class="btn btn-dark"><i class="ion-ios-add"></i></span></a>
        					          	</div>
        					          </td>

                            <?php $subtotal = ($producto->quantity*$producto->price); ?>
                            <?php $total = $subtotal + $total; ?>

        						        <td class="total">${{$subtotal}}</td>
        						      </tr><!-- END TR-->
                        @endif
                    </form>
                  @endforeach
                  @if ($count >= 1)
                  @else
                    <td class="image-prod">
                      <div class="row justify-content-around">
                        <h1>No tiene productos en su carrito</h1>
                        <h3>Comprar productos:</h3>
                        <a href="/productos" class="btn btn-black py-3 px-5 ">Productos</a>
                      </div>
                    </td>
                  @endif
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
      </div>
    </section>

    <section>
      <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make a payment</div>
                <a href="/comprobante">Comprar</a>
                <div class="card-body">
                    <form action="{{ route('pay') }}" method="POST" id="paymentForm">
                        @csrf

                        <div class="row">
                            <div class="col-auto">
                                <label>How much you want to pay?</label>
                                <input
                                    type="number"
                                    min="5"
                                    step="0.01"
                                    class="form-control"
                                    name="value"
                                    value="{{ mt_rand(500, 100000) / 100 }}"
                                    required
                                >
                                <small class="form-text text-muted">
                                    Use values with up to two decimal positions, using dot "."
                                </small>
                            </div>
                            <div class="col-auto">
                                <label>Currency</label>
                                <select class="custom-select" name="currency" required>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->iso }}">
                                            {{ strtoupper($currency->iso) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Select the desired payment platform:</label>
                                <div class="form-group" id="toggler">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        @foreach ($paymentPlatforms as $paymentPlatform)
                                            <label
                                                class="btn btn-outline-secondary rounded m-2 p-1"
                                                data-target="#{{ $paymentPlatform->name }}Collapse"
                                                data-toggle="collapse"
                                            >
                                                <input
                                                    type="radio"
                                                    name="payment_platform"
                                                    value="{{ $paymentPlatform->id }}"
                                                    required
                                                >
                                                <img class="img-thumbnail" src="{{ asset($paymentPlatform->image) }}">
                                            </label>
                                        @endforeach
                                    </div>
                                    @foreach ($paymentPlatforms as $paymentPlatform)
                                        <div
                                            id="{{ $paymentPlatform->name }}Collapse"
                                            class="collapse"
                                            data-parent="#toggler"
                                        >
                                            @includeIf('components.' . strtolower($paymentPlatform->name) . '-collapse')
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-primary btn-lg">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </section>





  @endsection
