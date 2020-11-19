@extends('layouts/cuadro')

@section('main')

    <div class="">
      <h3>Comprobantes de {{Auth::user()->name}}</h3>
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
						        <th>Total</th>
                    <th>Medio de pago</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Anular</th>
                    <th>PDF</th>
						      </tr>
						    </thead>
						    <tbody>
                  {{-- @foreach ($comprobantes as $comprobante) --}}
                    <form class="row" action="" method="post" enctype="multipart/form-data">
                      @csrf
                        <tr class="text-center">
        						        <td class="voucher-name">
        						        	{{-- <h3>N°{{$comprobante->n_comprobante}}</h3> --}}
                              <h3>N° 000 0000000</h3>
        						        </td>
        						        {{-- <td class="cuit">{{$comprobante->cuit}}</td> --}}
                            <td class="cuit">20382539371</td>

                            {{-- <td class="total">${{$comprobante->total}}</td> --}}
                            <td class="total">$1000</td>


                            {{-- <td class="method">{{$comprobante->method}}</td> --}}
                            <td class="method">Mercado Pago</td>

                            {{-- <td class="date">{{$comprobante->created_at}}</td> --}}
                            <td class="date">22/7/2020</td>

                            <td class="status">
                              <div class="d-flex justify-content-around">
                                {{-- <h3>{{$comprobante->estado}}</h3> --}}
                                <h3>OK</h3>
                              </div>
                            </td>

                            {{-- <td><a href="/comprobantes/{{$comprobante->id}}"><span class="btn btn-danger"><i class="ion-ios-close"></i></span></a></td> --}}
                            <td><a href=""><span class="btn btn-danger"><i class="ion-ios-close"></i></span></a></td>

                            {{-- <td><a href="/comprobantes/pdf/{{$comprobante->id}}"><span class="btn btn-danger"><i class="ion-ios-pdf"></i></span></a></td> --}}
                            <td><a href="/comprobanteb"><span class="btn btn-danger"><i class="ion-ios-see"></i></span></a></td>
                            <td><a href="{{route('print')}}"><span class="btn btn-danger"><i class="ion-ios-download"></i></span></a></td>

        						      </tr><!-- END TR-->
                    </form>
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
