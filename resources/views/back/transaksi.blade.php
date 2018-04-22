@extends('back.template.top')

@section('content')

<style media="screen">
  td {
    vertical-align:top !important;
  }
</style>


<div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
            <div class="header">
              <div class="row">
                <div class="col-md-4">
                  <div class="input-group">
                      <input type="text" class="form-control border-input" placeholder="Cari Transaksi">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="ti-search"></i></button>
                      </span>
                  </div>
                </div>
                <div class="col-md-8">
                  <button data-toggle="modal" data-target="#riwayatTransaksi" name="button" class="btn btn-default pull-right">RIWAYAT TRANSAKSI</button>
                </div>
              </div>

            </div>

            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                      <th>NO</th>
                    	<th>TANGGAL</th>
                    	<th>CUSTOMER</th>
                    	<th>TOTAL</th>
                      <th>ACTION</th>
                    </thead>
                    <tbody>
                        @php ($i = 1)

                        @foreach ($listTransaksiKirim as $transaksiKirim)
                          <tr >
                            <td>{{ $i }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaksiKirim->tanggal)->format('d/m/Y')}}</td>
                            <!-- <td>{{ $transaksiKirim->tanggal }}</td> -->
                          	<td>
                              <a href="{{ route('admin.customer.view', ['idCustomer' => $transaksiKirim->customer_id] )}}">
                                {{ $transaksiKirim->customer->name }}
                              </a>
                            </td>
                          	<td>
                              <i class="ti-wallet"></i>&ensp;&ensp;{{ $transaksiKirim->harga_total }} <br>
                            </td>
                            <td>
                              <button data-toggle="modal" data-target="#inputResi" name="button" class="btn btn-info">INPUT RESI</button>
                              <a href="{{ route('admin.transaksi.view', ['idTransaksi' => $transaksiKirim->transaksi_id] )}}" class="btn btn-info"><i class="ti-more"></i></a>
                              <!-- <a class="btn btn-danger"><i class="ti-trash"></i></a> -->
                            </td>
                          </tr>
                          @php ($i = $i + 1)


                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
            <div class="header">
              <div class="row">
                <div class="col-md-12">
                  <h4 class="title">Waiting For Submit</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12" style="margin-top:20px;">

                </div>
              </div>
            </div>

            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    	<th>TANGGAL</th>
                    	<th>TRANSAKSI</th>
                      <th></th>
                    </thead>
                    <tbody>
                        @foreach ($listTransaksiBayar as $transaksiBayar)
                          <tr >
                            <td>{{ $transaksiBayar->tanggal }}</td>
                          	<td>
                              Id : {{ $transaksiBayar->transaksi_id }}
                              Customer : <a href="{{ route('admin.customer.view', ['idCustomer' => $transaksiBayar->customer_id] )}}">
                                {{ $transaksiBayar->customer->name }}
                              </a>
                            </td>
                            <td>
                              <a href="{{ route('admin.transaksi.view', ['idTransaksi' => $transaksiBayar->transaksi_id] )}}" class="btn btn-info"><i class="ti-more"></i></a>
                              <!-- <a class="btn btn-danger"><i class="ti-trash"></i></a> -->
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
      </div>
    </div>
</div>


@endsection


<!-- MODAL INPUT RESI -->
<div class="modal fade" id="inputResi" tabindex="-1" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Input Resi</h4>
      </div>
      <div class="modal-body">
        
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <input type="text" name="no_resi" value="" class="form-control border-input" placeholder="Masukan Resi">
          </div>
          <div class="form-group">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                JNE
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                J&T
              </label>
            </div>
          </div>
          <button type="submit" name="button" class="btn btn-info">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>

</div>
<!-- MODAL TABEL TRANSKASI -->
<div class="modal fade" id="riwayatTransaksi" tabindex="-1" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Riwayat Transaksi</h4>
      </div>
      <div class="modal-body">
				<table class="table table-striped">
						<thead>
							<th>NO</th>
							<th>TANGGAL</th>
							<th>CUSTOMER</th>
							<th>TOTAL</th>
							<th>PENGIRIMAN</th>
							<th>ACTION</th>
						</thead>
						<tbody>
								@php ($i = 1)

								@foreach ($listTransaksi as $transaksi)
									<tr >
										<td>{{ $i }}</td>
										<td>{{ $transaksi->tanggal }}</td>
										<td>
											<a href="{{ route('admin.customer.view', ['idCustomer' => $transaksi->customer_id] )}}">
												{{ $transaksi->customer->name }}
											</a>
										</td>
										<td>
											<i class="ti-wallet"></i>&ensp;&ensp;{{ $transaksi->harga_total }} <br>
											<i class="ti-bag"></i>&ensp;&ensp;{{ $transaksi->harga_produk }} <br>
											<i class="ti-truck"></i>&ensp;&ensp;{{ $transaksi->harga_ongkir }} <br>
										</td>
										<td>
											{{ $transaksi->jasa_pengiriman }} <br>
											{{ $transaksi->no_resi }}
										</td>
										<td>
											<a href="{{ route('admin.produk.view', ['idProduk' => $transaksi->transaksi_id] )}}" class="btn btn-info"><i class="ti-more"></i></a>
											<a class="btn btn-danger"><i class="ti-trash"></i></a>
										</td>
									</tr>
									@php ($i = $i + 1)


								@endforeach

						</tbody>
				</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
