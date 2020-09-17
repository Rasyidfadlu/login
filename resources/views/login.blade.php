@extends('layout.template')

@section('title', 'Login')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/login.css')}}">
@endsection

@section('home'  , 'sliding-underline')
@section('berita', 'sliding-underline')
@section('info'  , 'sliding-underline')
@section('report', 'sliding-underline')
@section('about' , 'sliding-underline')

@section('container')

    <div class="content">
        <div class="row no-gutters">
            <!--<div class="col-md-6 bgKiri">
                <img class="bg-login" src="{{ URL::asset('/assets/image/login.gif')}}" alt="">
            </div>-->
            <div class="col-md-6 formKanan">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="login">
                        <div class="h2 judul-login font-weight-bold text-center mb-5">LOGIN ADMIN</div>
                        <div class=" input-group mb-4 ml-auto mr-auto">
                             <div class="input-group-prepend ">
                                 <span class="input-group-text" id="basic-addon2">
                                     <i class="fas fa-envelope"></i>
                                 </span>
                             </div>
                             <input type=" text " name="email" class=" form-control scr " placeholder=" Email " aria-label=" Recipient 's email" aria-describedby="basic-addon2">
                         </div>
                         <div class=" input-group mb-5 ml-auto mr-auto">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon2">
                                      <i class="fas fa-lock"></i>
                                 </span>
                             </div>
                             <input type="password" name="password" class=" form-control scr  " placeholder=" Password " aria-label=" Recipient 's username" aria-describedby="basic-addon2">
                         </div>
                         <button class="btn tombol-login font-weight-bold text-center mb-5">LOGIN</button>
                    </div>
                </form>
                <div class="h6 font-weight-bold text-center">Don't have account ? <a class="text-decoration-none register" href="{{url('/register')}}">Register</a></div>
            </div>
        </div>
    </div>
 
@endsection

@section('script')
    <script src="{{ URL::asset('/js/login.js')}}"></script>
@endsection