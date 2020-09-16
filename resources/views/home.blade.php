@extends('layout.template')

@section('title', 'Home')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/home.css')}}">
@endsection

@section('home', 'aktif')

@section('info'  , 'sliding-underline')
@section('berita', 'sliding-underline')
@section('hospital', 'sliding-underline')
@section('about' , 'sliding-underline')

@section('container')
    
<div class="content">
   <img class="bg-home" src="{{ URL::asset('/assets/image/home.jpg')}}" alt="">
    <div class="artikel">
      <span class="judul">CORONA VIRUS</span>
      <p class="konten mt-4 mb-4">Corona Virus adalah penyakit infeksi menular yang disebabkan oleh novel coronavirus atau virus corona jenis baru yang menyerang sistem pernapasan. Penyakit ini disebabkan karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</p>
      <a href="{{url('/info')}}"><button class="btn btn-covid">INFO COVID</button></a>
    </div>
</div>

@endsection

@section('script')
    <script src="{{ URL::asset('/js/home.js')}}"></script>
@endsection
   
   