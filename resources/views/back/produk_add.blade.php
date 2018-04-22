@extends('back.template.top')

@section('content')

<div class="container-fluid">
    <div class="row hidden-xs">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="{{ route('admin.produk') }}">Produk</a></li>
          <li class="active">
            Tambah Produk
          </li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card card-user">
          <div class="content">
            <img src="https://placeimg.com/250/250/tech" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <!-- <div class="header">
              <h4 class="title">Ubah Produk</h4>
          </div> -->
          <div class="content">
            <form class="" action="{{ route('admin.produk.add') }}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <input name="nama_produk" value="" class="form-control border-input" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control border-input" name="kategori_id">
                      @foreach($listKategori as $kategori)
                        <option value="{{ $kategori->produk_kategori_sub_id }}">{{ $kategori->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Berat</label>
                    <div class="input-group border-input">
                      <input type="number" name="berat" class="form-control border-input" aria-describedby="kg-tag" style="text-align:right;">
                      <span class="input-group-addon" id="kg-tag">Kg</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Harga</label>
                    <div class="input-group border-input">
                      <span class="input-group-addon" id="rupiah-tag">Rp.</span>
                      <input type="number" name="harga" class="form-control border-input" aria-describedby="rupiah-tag" style="text-align:right;">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control border-input" style="text-align:right;">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" rows="10"class="form-control border-input"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <!-- <small>Latest Update on <b></b> </small> -->
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" name="button" class="btn btn-info pull-right" ><i class="ti-plus"></i> TAMBAH</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>


@endsection
