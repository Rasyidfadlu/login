@extends('layout.template')

@section('title', 'Register')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/register.css')}}">
@endsection

@section('home'  , 'sliding-underline')
@section('info'  , 'sliding-underline')
@section('berita', 'sliding-underline')
@section('report', 'sliding-underline')
@section('about' , 'sliding-underline')

@section('container')

    <div class="content">
        <div class="row no-gutters">
            <div class="col-md-6 bgKiri">
                <img class="bg-login" src="{{ URL::asset('/assets/image/login.gif')}}" alt="">
            </div>
            <div class="col-md-6 formKanan">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="register">
                        <div class="h2 judul-register font-weight-bold text-center mb-5">REGISTER ADMIN</div>
                        <div class=" input-group mb-4 ml-auto mr-auto">
                            <div class="input-group-prepend ">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="fas fa-user-circle"></i>
                                </span>
                            </div>
                            <input type=" text " name="name" class=" form-control scr {{ $errors->has('name') ? 'is-invalid' : ''}}" value="{{ old('name') }}" placeholder=" Your Name " aria-label=" Recipient 's fullname" aria-describedby="basic-addon2">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                         <div class=" input-group mb-4 ml-auto mr-auto">
                            <div class="input-group-prepend ">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type=" email " name="email" class=" form-control scr {{ $errors->has('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" placeholder=" E-Mail" aria-label=" Recipient 's email" aria-describedby="basic-addon2">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class=" input-group mb-4 ml-auto mr-auto">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon2">
                                      <i class="fas fa-unlock"></i>
                                 </span>
                             </div>
                             <input type="password" name="password" class=" form-control scr {{ $errors->has('password') ? 'is-invalid' : ''}}  " placeholder=" Password " aria-label=" Recipient 's password" aria-describedby="basic-addon2">
                             @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                         </div>
                         <div class=" input-group mb-5 ml-auto mr-auto">
                             <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon2">
                                      <i class="fas fa-lock"></i>
                                 </span>
                             </div>
                             <input type="password" name="password_confirmation" class=" form-control scr {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}  " placeholder=" Confirm Password " aria-label=" Recipient 's password" aria-describedby="basic-addon2">
                             @if($errors->has('password_confirmation'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            @endif
                         </div>
                         <button class="btn tombol-register font-weight-bold text-center mb-5">REGISTER</button>
                    </div>
                </form>
                <div class="h6 font-weight-bold text-center">Have account ?
                    <a class="text-decoration-none login" href="{{ url('/login') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
 
@endsection

@section('script')
    <script src="{{ URL::asset('/js/register.js')}}"></script>
@endsection