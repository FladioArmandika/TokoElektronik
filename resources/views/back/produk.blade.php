@extends('back.template.top')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="header">
              <div class="row">
                <div class="col-md-4">
                  <div class="input-group">
                      <input type="text" class="form-control border-input" placeholder="Cari Produk">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="ti-search"></i></button>
                      </span>
                  </div>
                </div>
                <div class="col-md-8">
                  <a href="{{ route('admin.produk.add.view') }}" type="button" name="button" class="btn btn-info pull-right">TAMBAH PRODUK</a>
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
                      <th>NO</th>
                    	<th>NAMA</th>
                    	<th>KATEGORI</th>
                    	<th>STOK</th>
                    	<th>HARGA</th>
                      <th>ACTION</th>
                    </thead>
                    <tbody>
                        <!-- <tr>
                        	<td>1</td>
                        	<td>Dakota Rice</td>
                        	<td>$36,738</td>
                        	<td>Niger</td>
                        	<td>Oud-Turnhout</td>
                        </tr> -->
                        @php ($i = 1)
                        @foreach ($listProduk as $produk)
                          <tr>
                            <td>{{ $i }}</td>
                          	<td>{{ $produk->nama_produk }}</td>
                          	<td>{{ $produk->kategori->nama }}</td>
                          	<td>{{ $produk->stok }}</td>
                          	<td>{{ $produk->harga }}</td>
                            <td>
                              <a href="{{ route('admin.produk.view', ['idProduk' => $produk->produk_id] )}}" class="btn btn-info"><i class="ti-more"></i></a>
                              <a class="btn btn-danger"><i class="ti-trash"></i></a>
                            </td>
                          </tr>
                          @php ($i = $i + 1)


                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
