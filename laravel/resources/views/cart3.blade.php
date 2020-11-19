@extends('layouts/cuadro')

@section('main')

  <?php $total = 0; $subtotal = 0 ; $count = 0 ; ?>

    <div class="">
      <h3>Comprobantes de {{Auth::user()->name}}</h3>
      {{-- <h3>Comprobante N°</h3> --}}
      {{-- <h3>Comprobante N°{{$comprobante->n_comprobante}}</h3> --}}
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table table-hover">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>N°Comprobante</th>
						        <th>CUIT</th>
						        <th>Estado</th>
                    <th>Medio de pago</th>
						        <th>Total</th>
                    <th>Fecha</th>
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
        						        <td class="product-name">
        						        	<h3>{{$producto->getProductName()}}</h3>
        						        	{{-- <p>{{$producto->getProductDescripcion()}}</p> --}}
        						        </td>

        						        <td class="price">${{$producto->price}}</td>

        						        <td class="quantity">
                              <div class="d-flex justify-content-around">
                                <h3>{{$producto->quantity}}</h3>
        					          	</div>
        					          </td>

                            <?php $subtotal = ($producto->quantity*$producto->price); ?>
                            <?php $total = $subtotal + $total; ?>

        						        <td class="total">${{$subtotal}}</td>
        						      </tr><!-- END TR-->
                        @endif
                    </form>
                  @endforeach
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
      </div>
    </section>

    <section class="ftco-section ftco-cart">
      <div class="card-body">
        <div class="row">
          <div class="col-auto">
            <label>Anular compra</label>
            <a href="#">Anular</a>
          </div>
          <div class="col-auto">
            <label>Imprimir PDF</label>
            <a href="#">PDF</a>
          </div>
        </div>
      </div>
		</section>





  @endsection
