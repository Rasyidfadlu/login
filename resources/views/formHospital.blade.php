@extends('layout/templateAdmin')

@section('title', 'Form Rumah Sakit')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/formHospital.css')}}">
@endsection
    
@section('container')

<?php

$action = 'input';
$title = '  <i class="fas fa-plus-square ml-4"></i> INPUT RUJUKAN';

if (!empty($rujuk)){

$action = 'edit';
$title = ' <i class=" fas fa-edit ml-4 "></i> EDIT RUJUKAN';

}
?>

<div class="col-md-10 content">
    <h1 class="judul mt-2 ml-2 text-dark"> <?= $title ?> </h1>
    <hr class="line">

    <div class="card border-dark ml-auto mr-auto" ">
        <div class="card-body border" >
            <a class="text-decoration-none" href="{{ url('/hospitalAdmin') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="border-form  ml-auto mr-auto p-4">

        <form action="{{ url('hospitalAdmin', @$rujuk->id) }}" method="post" enctype="multipart/form-data">
            <div class="row no-gutters">
                <div class="col-md-6">
                    @csrf
                    @if(!empty($rujuk))
                        @method('PATCH')
                    @endif
                    <div class="form-group">
                        <label for="">Nama Rumah Sakit</label>
                        <input type="text" class="form-control" name="nm_rumahsakit" value="{{ old('nm_rumahsakit', @$rujuk->nm_rumahsakit) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Tingkat Rujukan</label>
                        <input type="text" class="form-control" name="Tingkat_rujukan" value="{{ old('Tingkat_rujukan',@$rujuk->Tingkat_rujukan)}} ">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="Alamat">{{old('Alamat', @$rujuk->Alamat)}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">SAVE</button>
                </div>
            
                <div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <input type="file" name="file" id="chooseFile" class="form-control-file add " >
                                <?php if ($action == "edit") { ?>
                                    <img id="preview" class="img-edit"  src="{{asset('assets/image/'.$rujuk->file)}}" alt="" width="258" height="258">
                                    <input type="hidden" name="file" id="chooseFile" class="form-control-file " value="{{old('file', $rujuk->file)}}">
                                <?php } ?>
                                <div class="box ml-auto mr-auto">
                                    <img id="preview" src="{{asset('assets/image/no-image.jpg')}}" alt="" width="258" height="258">
                                </div>

                                {{-- <div class="box ml-auto mr-auto mb-3">
                                    <img id="preview" src="{{asset('/assets/image/no-image.jpg')}}" alt="" width="358" height="358">
                                </div>
                                <input type="file" name="file" id="chooseFile" class="form-control-file"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection

@section('script')
    <script src="{{ URL::asset('/js/formHospital.js')}}"></script>
@endsection


