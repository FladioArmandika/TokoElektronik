@extends('front.template.head')

@section('content')
  <div class="container">
    <div class="jumbotron box-shadow">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="card box-shadow">
          <div class="card-header">
            <i class="ti-tag"></i>&ensp;Kategori
          </div>
          <ul class="list-group list-group-flush">
            @php( $nokategori = 1)
            @foreach($listKategori as $kategori)
            <a href="{{ route('customer.produk.bycategory',
            ['idKategori' => $kategori->produk_kategori_id ]) }}" class="list-group-item list-group-item-action">

              @if( $nokategori == 1)
                <img src="{{ URL::asset('images/icon/icon_office1.png') }}" alt="" class="" height="25px">&ensp;&ensp;&ensp;{{ $kategori->nama }}
              @elseif( $nokategori == 2)
                <img src="{{ URL::asset('images/icon/icon_headphone1.png') }}" alt="" class="" height="25px">&ensp;&ensp;&ensp;{{ $kategori->nama }}
              @elseif( $nokategori == 3)
                <img src="{{ URL::asset('images/icon/icon_fotografi1.png') }}" alt="" class="" height="25px">&ensp;&ensp;&ensp;{{ $kategori->nama }}
              @elseif( $nokategori == 4)
                <img src="{{ URL::asset('images/icon/icon_household1.png') }}" alt="" class="" height="25px">&ensp;&ensp;&ensp;{{ $kategori->nama }}
              @elseif( $nokategori == 5)
                <img src="{{ URL::asset('images/icon/icon_tv1.png') }}" alt="" class="" height="25px">&ensp;&ensp;&ensp;{{ $kategori->nama }}
              @endif

            </a>
              @php( $nokategori = $nokategori + 1)
            @endforeach
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          @foreach($listProduk as $produk)
          <div class="col-md-4">
            <a href="{{ route('customer.produk.view', ['idProduk' => $produk->produk_id] ) }}">
              <div class="card box-shadow">
                <img src="https://placeimg.com/480/480/tech" alt="" height="100%" width="100%" class="card-img-top">
                <div class="card-body">
                  <span class="card-title font-weight-bold">{{ str_limit($produk->nama_produk,$limit = 20, $end = '...') }}</span>
                  <br>
                  <a href="" class="card-text"><small>{{ $produk->kategori->nama }}</small></a>
                </div>
                <div class="card-footer">
                  <button href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalCheckout">BELI</button>
                  <div class="btn-group dropdown ">
                    <a href="{{ route('customer.produk.addtocart', [ 'idProduk' => $produk->produk_id]) }}" class="btn btn-sm btn-outline-secondary">
                      <i class="ti-shopping-cart"></i>
                    </a>
                    <div class="dropdown-menu bg-secondary" style="padding:10px;">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input-group ">
                            <div class="input-group-prepend">
                              <button class="btn btn-secondary" type="button">-</button>
                            </div>
                            <input type="text" name="" value="1" class="form-control">
                            <div class="input-group-append">
                              <button class="btn btn-secondary" type="button">+</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </a>
          </div>

          @if( !Auth::guest() )
          <!-- MODAL -->
          <div class="modal fade" tabindex="-1" role="dialog" id="modalCheckout">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Pembelian</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-3">
                          <img src="https://placeimg.com/480/480/tech" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-5">
                          <h6 class="my-1">
                            <a target="_blank" href="{{ route('customer.produk.view', ['idproduk' => $produk['item']['produk_id']  ]) }}">{{ $produk->nama_produk }}</a>
                          </h6>
                          <small class="text-muted">{{$produk->kategori->nama}}</small>
                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-3">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <button class="btn btn-secondary" type="button">-</button>
                            </div>
                            <input type="text" name="" value="1" class="form-control pull-right">
                            <div class="input-group-append">
                              <button class="btn btn-secondary" type="button">+</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <label>Alamat pembeli</label>
                          <div class="">
                            <div class="form-group">
                              <textarea id="taAlamat" name="alamat" rows="3" cols="80" class="form-control" disabled>{{ Auth::user()->alamat }}</textarea>
                            </div>
                            <a id="btEditAlamat" class="btn btn-primary btn-sm"><i class="ti-pencil" ></i>&ensp;Ubah Alamat</a>
                            <a id="submitAlamat" class="btn btn-primary btn-sm"><i class="ti-check" ></i>&ensp;Selesai</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-primary">Checkout</button>
                </div>
              </div>
            </div>
          </div>
          @endif



          @endforeach
        </div>
        {{ $listProduk->links() }}
      </div>
    </div>
  </div>



@endsection
