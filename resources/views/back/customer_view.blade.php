@extends('back.template.top')

@section('content')

<div class="container-fluid">
    <div class="row hidden-xs">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="{{ route('admin.produk') }}">Produk</a></li>
          <li class="active">
            {{ $customer->name }}
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
          <div class="content">

          </div>
        </div>
      </div>
    </div>

</div>
@endsection
