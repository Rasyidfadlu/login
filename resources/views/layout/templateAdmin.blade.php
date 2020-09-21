<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="{{ URL::asset('/assets/DataTables/Bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('/assets/DataTables/datatables.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('/assets/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        .dropdown-menu {
        background-color: #939799;
        }
    </style>

@yield('style')


</head>
<body>
    <div class="row no-gutters">
        <div class=" col-md-2 side">
            <ul class=" nav flex-column navs">
                <li class=" nav-item bg-color mb-3 ">
                    <a class=" navbar-brand nav-link text-white text-decoration-none" href="">
                        <h4>ERP-SOLVINDO</h4>
                    </a>
                </li>
                <li class=" nav-item pb-3 mb-2 profil ">
                    <div class="row no-gutters">
                        <div class="col-md-4"> 
                            <i class="fas fa-cog fa-3x ml-2 fa-spin fa-fw"></i>
                        </div>
                        <div class="col-md-8 mr-auto">
                            <i class="fas fa-cog fa-spin fa-fw"></i>
                    
                                <a class=" nav-link text-white ml-2" style="margin-top: -11px;">{{ Auth::user()->name ?? ''}}</a>
                            </h6>
                        </div>
                    </div>
                </li>

               
            
                <li class=" nav-item mb-2 pt-2 pb-2 sliding-underline">
            
                        <i class=" fas fa-tachometer-alt nav-icon la la-group text-white ml-4 " style=" font-size: 145%; "></i><a class=" nav-link d-inline text-white " href="{{url('/dashboardAdmin')}}">DASHBOARD</a>
                </li>  
                <li class="nav-item  mb-2 pt-2 pb-2 sliding-underline dropdown">
                    <i class="fa fa-user-circle text-white ml-4" aria-hidden="true" style="font-size: 145%; "></i><a  id="tombol" class="nav-link dropdown collapsible-header  d-inline text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">SALES AND MARKETING</a>
                    <div id="box" class=" collapsible-body">
                        <ul>
                            <li>

                                <li class="dropdown-item fas fa-folder  text-white waves-effect" id="tombol2" style="font-size: 125%;">Aktifasi Customer</li>
                                    <div id="box2">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 125%; margin-left: 10px;" class="text-white waves-effect" href="/beritaAdmin/create">
                                                Entri Data Prospek
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 125%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                Prospek Data
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 125%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                Proses Instalasi
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                <li class="dropdown-item text-white waves-effect fas fa-folder" style="font-size: 125%;" id="tombol3" href="#">Data Management</li>
                                    <div id="box3">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 125%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                Data Customer Aktif
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 125%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                Dismantle Customer
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                <li class="dropdown-item text-white waves-effect fas fa-folder" style="font-size: 125%;" id="tombol4" href="#">Perubahan Data Customer</li>
                                    <div id="box4">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 125%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                Upgrade/Dowgrade
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 125%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                Proses Dismatle
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 125%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                Relokasi
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                <li class="dropdown-item text-white waves-effect fas fa-folder" style="font-size: 125%;" id="tombol5" href="/beritaAdmin/create">Partner/ISP</li>
                                    <div id="box5">
                                        <ul>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                Add New ISP/Paartner
                                                </a>
                                            </li>
                                            <li class="">
                                                <a style="font-size: 115%; margin-left: 10px;" class="text-white waves-effect" href="#">
                                                ISP/Partner Lists
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-users text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('#')}}">SALES & ADMIN</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-cubes text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('#')}}">ASSET & INVENTORY</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-desktop text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('#')}}">N O C</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fa fa-credit-card text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('#')}}">FINANCE</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-industry text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('#')}}">ANALISIS INVESTASI</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-user-plus text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('#')}}">HUMAN RESOURCE</a>
                </li>
                <li class="nav-item mb-2 mt-2 pt-2 sliding-underline">
            
                        <i class="fas fa-cogs text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('#')}}">OPERATION</a>
                </li>
                <li class="nav-item mb-2 mb-2 mt-2 pt-2 profil pb-2 sliding-underline">
            
                        <i class="fas fa-envelope text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{url('/pesan')}}">PESAN</a>
                </li>
                <li class="nav-item pt-2 pb-2 mt-2  sliding-underline">
            
                        <i class="fas fa-sign-out-alt text-white ml-4 " style="font-size: 145%; "></i><a class="nav-link d-inline text-white " href="{{ route('logout') }}">LOGOUT</a>
                </li>
                <li class=" nav-item pt-2 pb-2 mt-2 ">
                
                </li>
            </ul>
        </div>
        
        @yield('container')

    <script src="{{URL::asset('/assets/DataTables/jQuery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('/assets/DataTables/Bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/assets/DataTables/datatables.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{URL::asset('/assets/DataTables/jQuery/jquery-3.3.1.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    @yield('script')

</body>
</html>