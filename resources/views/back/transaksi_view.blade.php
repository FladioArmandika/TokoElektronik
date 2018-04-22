@extends('back.template.top')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="card">
        <div class="header">

        </div>

        <div class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Transaksi ID : {{ $transaksi->transaksi_id}}</label>
                  </div>
                  <div class="form-group">
                    <label>
                      Pembeli : <a href="{{ route('admin.customer.view', ['idCustomer' => $transaksi->customer->id] ) }}">
                      {{ $transaksi->customer->name }}</a>
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tanggal : {{ $transaksi->tanggal }}</label>
                  </div>
                </div>
              </div>

              <div class="well">
                <div class="form-group">
                  <label>Alamat : {{ $transaksi->alamat->alamat}} </label>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Kecamatan : {{ $transaksi->alamat->kecamatan}} </label>
                    </div>
                    <div class="form-group">
                      <label>Kota : {{ $transaksi->alamat->kota}} </label>
                    </div>
                    <div class="form-group">
                      <label>Provinsi : {{ $transaksi->alamat->provinsi}} </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Kode Pos : {{ $transaksi->alamat->kode_post}} </label>
                    </div>
                    <div class="form-group">
                      <label>No Hp : {{ $transaksi->alamat->no_hp}} </label>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-info"><i class="ti-printer"></i>&emsp;Cetak Alamat</a>
            </div>
            <div class="col-md-6">
              <button class="btn btn-sm"><i class="ti-credit-card"></i>&ensp;Dibayar</button>
              <i class="ti-arrow-right"></i>
              <button class="btn btn-sm"><i class="ti-truck"></i>&ensp;Dikirim</button>
              <i class="ti-arrow-right"></i>
              <button class="btn btn-sm"><i class="ti-package"></i>&ensp;Diterima</button>
              <i class="ti-arrow-right"></i>
              <button class="btn btn-sm"><i class="ti-check"></i>&ensp;Selesai</button>
              <hr>

              <div class="form-group">
                <label>Harga Produk : &emsp;&emsp;{{ $transaksi->harga_produk}}</label>
              </div>
              <div class="form-group">
                <label>Biaya Pengiriman : &emsp;&emsp;{{ $transaksi->harga_ongkir}}</label>
              </div>
              <div class="form-group">
                <label>Total Belanja : &emsp;&emsp;{{ $transaksi->harga_total}}</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card">
        <div class="content table-full-width table-responsive">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <th>No</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>QTY</th>
                <th>TOTAL BERAT</th>
                <th>TOTAL</th>
              </thead>
              @php ($i = 1)
              @foreach ($listProduk as $produk)
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $produk->produk->nama_produk}}</td>
                  <td>{{ $produk->produk->harga }}</td>
                  <td>{{ $produk->kuantitas }}</td>
                  <td>{{ $produk->total_berat }} kg</td>
                  <td>{{ $produk->harga_total }}</td>
                </tr>
                @php ($i = $i + 1)
              @endforeach

            </table>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection
