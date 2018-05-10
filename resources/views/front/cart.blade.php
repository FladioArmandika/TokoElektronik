@extends('front.template.head')


@section('content')
  <div class="container-fluid">
    <h4 class="font-weight-bold my-4"><i class="ti-shopping-cart"></i>&ensp;KERANJANG BELANJA</h4>
    <div class="row">
      <div class="col-md-8">

        <div class="card box-shadow">
          <div class="card-header">
            Daftar Barang
          </div>
            <ul class="list-group">
              @php($ongkir = 0)
              @if(Session::has('keranjang'))
                @foreach($listProduk as $produk)
                  <li class="list-group-item ">
                    <!-- <div>
                      <h6 class="my-0">
                        {{ $produk['item']['nama_produk'] }}
                      </h6>
                      <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">Rp{{$produk['item']['harga']}}</span> -->
                    <div class="row">
                      <div class="col-md-2">
                        <img src="https://placeimg.com/500/500/tech" alt="" height="100%" width="100%">
                      </div>
                      <div class="col-md-7">
                        <h6 class="my-1">
                          <a target="_blank" href="{{ route('customer.produk.view', ['idproduk' => $produk['item']['produk_id']  ]) }}">{{ $produk['item']['nama_produk'] }}</a>
                        </h6>
                        <small class="text-muted">{{$produk['qty']}} x {{$produk['item']['harga']}}</small>
                      </div>
                      <div class="col-md-3">
                        <a href="#" class="pull-right btn-sm btn btn-danger" style="margin-top:-5px;margin-right:-10px;">x</a>
                        <a href="#" class=" pull-right mr-3">Rp.&ensp;{{ number_format($produk['item']['harga'] * $produk['qty'], 0,'.','.')  }}</a>
                      </div>
                    </div>
                  </li>
                  @php($ongkir = $ongkir + 25000)
                @endforeach
              @else

              @endif

            </ul>
        </div>

      </div>
      <div class="col-md-4">
        <div class="card box-shadow">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <span class="mr-auto">Ongkos Kirim</span>
                <span class="pull-right">Rp.&ensp;{{ number_format($ongkir, 0, '.','.') }}</span>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-12">
                <span class="mr-auto">Harga Barang</span>
                <span class="pull-right">
                  @if( Session::has('keranjang') )
                    Rp.&ensp;{{ number_format($totalHarga, 0, '.','.') }}
                  @else
                    @php($totalHarga = 0)
                    Rp.&ensp;0
                  @endif
                </span>
              </div>
            </div>
            <hr>
            <div class="row mt-2">
              <div class="col-md-12">
                @php($totalbelanja = $totalHarga + $ongkir)
                <span class="mr-auto">Total</span>
                <span class="pull-right">
                  @if( Session::has('keranjang') )
                    Rp.&ensp;{{ number_format($totalbelanja, 0, '.','.') }}
                  @else
                    Rp.&ensp;0
                  @endif
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="card box-shadow mt-3">
          <div class="card-body">
            <form class="" action="{{ route('customer.checkout') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="totalharga" value="{{ $totalHarga }}">
            <input type="hidden" name="ongkir" value="{{ $ongkir }}">
            <input type="hidden" name="barang" value="{{ $totalbelanja }}">
            <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">

            <div class="">
              <div class="form-group">
                <label>
                  <div class="mr-auto">
                    Alamat
                  </div>
                </label>
                <textarea id="taAlamat" name="alamat" rows="3" cols="80" class="form-control" disabled>{{ Auth::user()->alamat }}</textarea>
              </div>
              <div class="form-group ">
                <a id="btEditAlamat" class="btn btn-primary btn-sm"><i class="ti-pencil" ></i>&ensp;Ubah Alamat</a>
                <a id="submitAlamat" class="btn btn-primary btn-sm"><i class="ti-check" ></i>&ensp;Selesai</a>
              </div>
              <div class="form-group">
                <label>Jasa Pengiriman</label>
                <div class="form-check">
                  <input value="JNE" class="form-check-input" type="radio" name="kurir" id="radioJNE"  checked>
                  <label class="form-check-label" for="radioJNE">
                    JNE
                  </label>
                </div>
                <div class="form-check">
                  <input value="J&T" class="form-check-input" type="radio" name="kurir" id="radioJNT" >
                  <label class="form-check-label" for="radioJNT">
                    J&T
                  </label>
                </div>
              </div>
              <button type="button" name="button" data-toggle="modal" data-target="#modalMetodePembayaran" class="btn btn-outline-primary">
                <i class="ti-credit-card"></i>&ensp;Pilih Metode Pembayaran
              </button>
            </div>
          </div>
        </div>
        <br>

      </div>
    </div>
  </div>



  <!--////////////////////////////////////////////-->
  <!--//////////////////   MODAL   ///////////////-->
  <!--////////////////////////////////////////////-->
  <div class="modal fade" id="modalMetodePembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Metode Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="pembayaran" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Transfer Bank</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="pembayaran" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="pembayaran" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="form-group">
          <label for="cc-name">Nama</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" name="bank_name" required>
          <small class="text-muted">Nama Lengkap pada rekening</small>
          <div class="invalid-feedback">
            Harap masukan nama
          </div>
        </div>
        <div class="form-group">
          <label for="cc-number">No Rekening</label>
          <input type="text" class="form-control" id="cc-number" placeholder="" name="bank_no" required>
          <div class="invalid-feedback">
            Masukan No Rekening
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button class="btn btn-primary" type="submit">CHECKOUT</button>
      </div>
    </div>
  </div>
</div>

</form>

@endsection
