@extends('front.template.head')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="padding: 20px 20px !important;">
          <div class="content">
            <div class="row">
              <div class="col-md-6">
                <img src="https://placeimg.com/480/480/tech" alt="" class="img-responsive">
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <h3>{{ $produk->nama_produk }}</h3>
                </div>
                <div class="row well">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Berat : {{ $produk->berat }} kg</label>
                    </div>
                    <div class="form-group">
                      <label>Stok : {{ $produk->stok }}</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <a href="#" class="btn btn-primary">Tambah Ke Keranjang</a>
                  <a href="#" class="btn btn-primary">Beli</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
