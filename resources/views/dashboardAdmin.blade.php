@extends('layout/templateAdmin')

@section('title', 'Dashboard')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/dashboardAdmin.css')}}">
@endsection
    
@section('container')

<div class="jumbotron">
    <h1 class="display-4 text-white">Hello, {{ Auth::user()->name ?? ''}}!</h1>
    <p class="lead text-white">Selamat Datang di Website Admin Pemantauan Covid-19</p>
    <hr class="my-4">
    <div class="card card-covid">
        <div class="row no-gutters">
            <div class="col-md-10 text-white">
                <h2 class="font-weight-bold">Indonesia</h2>
                @foreach($data as $info)
                    <div class="row no-gutters">
                        <div class="col-md-2">Positif</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-8">{{ $info['positif'] }}</div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-2">Meninggal</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-8">{{ $info['meninggal'] }}</div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-2">Sembuh</div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-8">{{ $info['sembuh'] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-2">
                <img src="{{ URL::asset('/assets/img/indonesia.svg')}}" style="width: 130px;">
            </div>
        </div>
    </div>
    
    <div class="row text-white">
        <div class="col-md-4">     
            <div class="card kartu" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-newspaper "></i>
                    </div>
                    <h5 class="card-title">JUMLAH BERITA</h5>
                    <div class="display-4 font-weight-bold"> {{ $berita = \App\Berita::count() }} </div>
                </div>
                <div class="card-footer">
                    <a class="text-decoration-none text-white" href="{{url('/beritaAdmin')}}">
                        <p class="card-text text-white">Lihat Detail <i
                                class="fas fa-angle-double-right ml-2"></i>
                        </p>
                     </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card kartu" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-hospital "></i>
                    </div>
                    <h5 class="card-title">JUMLAH HOSPITAL</h5>
                    <div class="display-4 font-weight-bold">{{ $rujuk = \App\Rujuk::count() }}</div>
                </div>
                <div class="card-footer">
                    <a class="text-decoration-none text-white" href="{{url('/hospitalAdmin')}}">
                        <p class="card-text text-white">Lihat Detail <i
                                class="fas fa-angle-double-right ml-2"></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card kartu" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-envelope "></i>
                    </div>
                    <h5 class="card-title">JUMLAH PESAN</h5>
                    <div class="display-4 font-weight-bold">{{ $pesan = \App\Pesan::count() }}</div>
                </div>
                <div class="card-footer">
                    <a class="text-decoration-none text-white" href="{{url('/pesan')}}">
                        <p class="card-text text-white">Lihat Detail <i
                                class="fas fa-angle-double-right ml-2"></i>
                        </p>
                    </a>
                </div>
            </div>       
        </div>
    </div>
  </div>

@endsection

@section('script')
    <script href="{{ URL::asset('/js/dashboardAdmin.js')}}"></script>
@endsection