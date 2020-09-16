@extends('layout.template')

@section('title', 'Hospital')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/hospital.css')}}">
@endsection

@section('hospital', 'aktif')

@section('home'  , 'sliding-underline')
@section('info'  , 'sliding-underline')
@section('berita', 'sliding-underline')
@section('report', 'sliding-underline')
@section('about' , 'sliding-underline')

@section('container')

<div class="jumbotron">
    <h1 class="font-weight-bold hospital">HOSPITAL</h1>
    <i class="fa fa-plus fa-3x" aria-hidden="true"></i>
</div>

<div class="row no-gutters wadah ml-auto mr-auto">
    <div class="col-md-6">
        <h3 class="font-weight-bold ml-2">RUMAH SAKIT RUJUKAN COVID-19</h3>
    </div>
    <div class="col-md-6 pr-2">
        <form action="{{ url('/hospital/search')}}" method="GET">
            <div class=" input-group mb-2 w-50 float-right ">
                <input type=" text " name="search" class=" form-control cari" placeholder=" Search " value="{{ old('search') }}" aria-label=" Recipient 's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="submit" class="input-group-text" id="basic-addon2">
                        <a class="text-decoration-none text-secondary" href=""><i
                                class="fas fa-search"></i></a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<hr class="garis">


<div class="row wadah  ml-auto mr-auto">
    @foreach($rujuk  as $data)
    <div class="col-md-6 mt-4">
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/image/'.$data['file']) }}" width="200" height="200" alt="">
                </div>
                <div class="col-md-8">
                   <h4 class="font-weight-bold mt-2">{{ $data['nm_rumahsakit'] }}</h4>
                   <div class="lokasi">
                    <i class="fas fa-map-marker-alt"></i>
                    {{ $data['Alamat'] }}
                    <div class="h6 mt-4">Tingkat Rujukan  :</div>
                    <div class="font-weight-bold">{{ $data['Tingkat_rujukan'] }}</div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $rujuk->appends(Request::all())->links() }}
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
    <script src="{{ URL::asset('/js/hospital.js')}}"></script>
@endsection
   