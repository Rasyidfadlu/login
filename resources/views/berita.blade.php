@extends('layout.template')

@section('title', 'Berita Corona')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/berita.css')}}">
@endsection

@section('berita' , 'aktif')

@section('home'   , 'sliding-underline')
@section('info'   , 'sliding-underline')
@section('hospital'  , 'sliding-underline')
@section('report' , 'sliding-underline')

@section('container')

<div class="jumbotron bg-berita"></div>

<div class="content mb-5">
  <form action="{{ url('/berita/search')}}" method="GET">
    <div class="input-group mb-3 ml-auto mr-auto">
      <input type="text" class="form-control" name="search" placeholder="Search Covid-19 News"  value="{{ old('search') }}" aria-label="Username" aria-describedby="basic-addon1">
      <div class="input-group-append">
        <button type="submit" class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </form>
  <div class="row no-gutters ml-auto mr-auto">
  @foreach ($konten as $news)
    <div class="col-md-4 mt-4">
      <div class="card ml-auto mr-auto" style="width: 25rem; height: 27rem;">
        <img src="{{ asset('assets/image/'.$news['file']) }}" class="card-img-top"  height="200" alt="...">
        <div class="card-body">
          <span class="mb-2 tanggal">{{ $news['Tanggal'] }}</span>
          <h5 class="card-title font-weight-bold">{{ $news['Judul'] }}</h5>
          <a href="{{url('/berita/' . $news->id . '/detail')}}" class="btn btn-warna">DETAIL BERITA</a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
  {{ $konten->appends(Request::all())->links() }}
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
    <script src="{{ URL::asset('/js/berita.js')}}"></script>
@endsection

