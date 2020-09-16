@extends('layout.template')

@section('title', 'Detail Berita Corona')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/detailBerita.css')}}">
@endsection

@section('berita' , 'aktif')

@section('home'   , 'sliding-underline')
@section('info'   , 'sliding-underline')
@section('about'  , 'sliding-underline')
@section('report' , 'sliding-underline')
@section('container')

<div class="jumbotron bg-berita"></div>

<div class=" content mb-5 ml-auto mr-auto ">

    <div class="row">
      @csrf
        <div class="col-md-8">
            <h1 class="ml-3">{{ @$konten->Judul }}</h1>
            <span class="ml-3 mb-3 tanggal">{{ @$konten->Tanggal }}</span>
            <img src="{{ asset('/assets/image/'.$konten->file)}}" class="container mt-2" alt="...">
            <p class="ml-3 mt-2 isi-berita">{{ @$konten->Isi }}</p><br>
            <span  class="ml-3">{{ @$konten->Pengirim }}</span>
        </div>

        <div class="col-md-4 ">
          <h5 class="font-weight-bold">BERITA TERBARU</h5>
          @foreach($berita as $daftarBerita)
            <div class="card card-side mb-3 mt-2">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{asset('/assets/image/'.$daftarBerita->file) }}" class="card-img" height="123"  alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <div class="h6">{{ $daftarBerita->Judul }}</div>
                      <span class="tanggal"><small>{{ $daftarBerita->Tanggal }}</small></span>
                    </div>
                  </div>
                </div>
            </div>
          @endforeach
        </div>
    </div> 
</div>

<footer>
    <div class="container">
        <div class="row copyright">
            <p class="font-weight-bold "><i class=" far fa-copyright "></i> 2020 COVID19-INFO | All Rights Reserved </p>
        </div>
    </div>
</footer>

@endsection


@section('script')
    <script src="{{ URL::asset('/js/detailBerita.js')}}"></script>
@endsection

