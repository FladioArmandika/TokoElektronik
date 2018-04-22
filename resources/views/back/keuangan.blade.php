@extends('back.template.top')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="content">
          <div class="row">
            <div class="col-md-2">
              <small>Harian</small>
              <p>Rp.22.82.000</p>
            </div>
            <div class="col-md-3">
              <small>Mingguan</small>
              <p class="text-info"><i class="ti-arrow-up"></i>&emsp;Rp.192.000.000</p>
            </div>
            <div class="col-md-7">
              <a href="#" class="btn btn-info pull-right"><i class="ti-printer"></i>&emsp;CETAK LAPORAN</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Statistics -->
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <span class="title">Penjualan</span>
        </div>
        <div class="content">
          <div id="chartHours" class="ct-chart"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- TABEL -->
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <span class="title">TRANSAKSI</span>
        </div>
        <div class="content table-full-width table-responsive">
          <table class="table table-striped">
            <thead>
              <th>NO</th>
              <th>TANGGAL</th>
              <th>TOTAL</th>
            </thead>
            <tbody>
              <td></td>
              <td></td>
              <td></td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
