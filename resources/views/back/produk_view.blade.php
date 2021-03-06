@extends('back.template.top')

@section('content')

<div class="container-fluid">
    <div class="row hidden-xs">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="{{ route('admin.produk') }}">Produk</a></li>
          <li class="active">
            {{ $produk->nama_produk }}
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
            <form class="" action="index.html" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <input name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control border-input" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control border-input" name="produk_kategori_sub">
                      @foreach($listKategori as $kategori)
                        <option value="[object Object]">{{ $kategori->nama }}</option>
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
                      <input type="number" name="" value="{{ $produk->berat }}" class="form-control border-input" aria-describedby="kg-tag" style="text-align:right;">
                      <span class="input-group-addon" id="kg-tag">Kg</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Harga</label>
                    <div class="input-group border-input">
                      <span class="input-group-addon" id="rupiah-tag">Rp.</span>
                      <input type="number" name="" value="{{ $produk->harga }}" class="form-control border-input" aria-describedby="rupiah-tag" style="text-align:right;">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="" value="{{ $produk->stok }}" class="form-control border-input" style="text-align:right;">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="Deskripsi" rows="10"class="form-control border-input">{{ $produk->deskripsi }}
                    </textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <small>Latest Update on <b>{{ $produk->tgl_update }}</b> </small>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="button" name="button" class="btn btn-info pull-right" ><i class="ti-pencil"></i> UPDATE</button>
                  <button type="button" name="button" class="btn btn-danger pull-right" style="margin-right:10px;"><i class="ti-trash"></i> DELETE</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>
@endsection
