@extends('layout/templateAdmin')

@section('title', 'Table Berita')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/beritaAdmin.css')}}">
    
@endsection
    
@section('container')

<section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold judul text-center mt-5">CONTACT US</h1>
                    <hr class="line">
                </div>
            </div>
        </div>
            <div class="row w-75 ml-auto mr-auto">
                <div class="col-md-6 bgKiri">
                   <img src="{{ URL::asset('/assets/image/login.gif')}}" width="400" height="400" alt="">
                </div>
                <div class="col-md-6 pt-4 formKanan">
                    <form action="{{ url('about') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nama" class="form-input font-weight-bold " placeholder="YOUR NAME">
                        </div>
                        <div class="form-group mt-4">
                            <input type="email" name="email" class="form-input font-weight-bold " placeholder="YOUR E-MAIL ADDRESS">
                        </div>
                        <div class="form-group mt-4">
                            <input type="tel" name="phone" class="form-input font-weight-bold " placeholder="YOUR NUMBER PHONE">
                        </div>
                        <div class="form-group mt-4">
                            <textarea class="form-input font-weight-bold" name="message" placeholder="YOUR MESSAGE"></textarea>
                        </div>
                        <button type="submit" class="btn tombol font-weight-bold mb-3">SEND</button>
                    </form>
                </div>
            </div>
    </section>