<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

<link rel="stylesheet" href="{{ URL::asset('/assets/DataTables/Bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('/assets/DataTables/datatables.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('/assets/fontawesome/css/all.min.css')}}">

@yield('style')

</head>
<body>
    <div class="row no-gutters">
        <div class=" col-md-2 side">
            <ul class=" nav flex-column navs">
                <li class=" nav-item bg-color mb-3 ">
                    <a class=" navbar-brand nav-link text-white text-decoration-none" href="">
                        <h4>COVID - INFO</h4>
                    </a>
                </li>
                <li class=" nav-item pb-3 mb-2 profil ">
                    <div class="row no-gutters">
                        <div class="col-md-4"> 
                            <i class="fas fa-cog fa-3x ml-2 fa-spin fa-fw"></i>
                        </div>
                        <div class="col-md-8 mr-auto">
                            <i class="fas fa-cog fa-spin fa-fw"></i>
                            <h6>
                                <a class=" nav-link text-white ml-2" style="margin-top: -11px;">{{ Auth::user()->name ?? ''}}</a>
                            </h6>
                        </div>
                    </div>
                </li>
                <li class=" nav-item mb-2 pt-2 pb-2 sliding-underline">
                    <h6>
                        <i class=" fas fa-tachometer-alt text-white ml-4 " style=" font-size: 145%; "></i><a class=" nav-link d-inline text-white " href="{{url('/dashboardAdmin')}}">DASHBOARD</a>
                    </h6>
                </li>
                <li class="nav-item mt-1 pt-1 sliding-underline">
                    <h6>
                        <i class="fas fa-newspaper text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('/beritaAdmin')}}">BERITA</a>
                    </h6>
                </li>
                <li class="nav-item mt-1 pt-3 sliding-underline">
                    <h6>
                        <i class="fas fa-hospital text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('/hospitalAdmin')}}">HOSPITAL</a>
                    </h6>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 profil pb-2 sliding-underline">
                    <h6>
                        <i class="fas fa-envelope text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('/pesan')}}">PESAN</a>
                    </h6>
                </li>
                <li class="nav-item pt-2 pb-2 mt-2  sliding-underline">
                    <h6>
                        <i class="fas fa-sign-out-alt text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{ route('logout') }}">LOGOUT</a>
                    </h6>
                </li>
                <li class=" nav-item pt-2 pb-2 mt-2 " ">
                    <h6>

                    </h6>
                </li>
            </ul>
        </div>

        @yield('container')

    <script src="{{URL::asset('/assets/DataTables/jQuery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('/assets/DataTables/Bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/assets/DataTables/datatables.min.js')}}"></script>
    @yield('script')

</body>
</html>