@extends('layout/templateAdmin')

@section('title', 'Table Hospital')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/hospitalAdmin.css')}}">
@endsection
    
@section('container')

<div class="col-md-10 content">
    <h1 class="judul mt-2 ml-2 text-dark"><i class="fas fa-hospital ml-4"></i> HOSPITAL
    <a class="btn btn-outline-dark tombol" href="{{url('/hospitalAdmin/create')}}">
       <h4 class="d-inline">
           <i class="fas fa-plus"></i>
       </h4> 
    </a>
    </h1>
    <hr class="line">
<div class="wadah  mb-5">
    <table class="table display table-color ml-auto mr-auto table-bordered text-dark " id="myTable">
		<thead>
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th style="width: 150px;">Nama Rumah Sakit</th>
                <th>Alamat</th>
                <th style="width: 130px;">Tingkat Rujukan</th>
                <th class="aksi">Action</th>
            </tr>
		</thead>
		<tbody>
        @foreach ($rujuk as $row)
			<tr>
                <td>{{ $loop->iteration }}</td>     
                <td><img src="{{asset('assets/image/'.$row->file)}}" alt="" width="100" height="100"></td>
                <td>{{ $row->nm_rumahsakit }}</td>
                <td>{{ $row->Alamat }}</td>
                <td>{{ $row->Tingkat_rujukan }}</td>
                <td style="border-right: none;">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ url('/hospitalAdmin/' . $row->id . '/edit') }}" class="btn btn-success">
                                <i class="far fa-edit font-weight-bold text-white"></i>
                            </a>
                        </div>
                        <div class="col-md-6">              
                            <form action="{{ url('/hospitalAdmin',$row->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash text-white"></i></button>
                            </form>
                        </div>
                    </div>
                </td>            
            </tr>
        @endforeach
		</tbody>
    </table>
</div>
</div>

@endsection

@section('script')
    <script src="{{ URL::asset('/js/hospitalAdmin.js')}}"></script>
@endsection


