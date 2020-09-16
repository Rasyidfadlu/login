@extends('layout/templateAdmin')

@section('title', 'Table Berita')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/beritaAdmin.css')}}">
@endsection
    
@section('container')

<div class="col-md-10 content">
    <h1 class="judul mt-2 ml-2 text-dark"><i class="fas fa-newspaper ml-4"></i> BERITA
    <a class="btn btn-outline-dark tombol" href="{{url('/beritaAdmin/create')}}">
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
                <th>Judul</th>
                <th>Pengirim</th>
                <th>Tanggal</th>
                <th class="berita">Berita</th>
                <th class="aksi">Action</th>
			</tr>
		</thead>
        <tbody>
            @foreach ($berita as $row)
			<tr>
                <td>{{ $loop->iteration }}</td>     
                <td> <img src="{{asset('assets/image/'.$row->file)}}" alt="" width="100" height="100"> </td>
                <td>{{ $row->Judul }}</td>
                <td>{{ $row->Pengirim}}</td>
                <td>{{ $row->Tanggal}}</td>
                <td class="isi_berita">
                    <div class="scroll">
                        {{ $row->Isi }}
                    </div>
                </td>
                <td style="border-right: none;">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ url('/beritaAdmin/' . $row->id . '/edit') }}" class="btn btn-success">
                                <i class="far fa-edit font-weight-bold text-white"></i>
                            </a>
                        </div>
                        <div class="col-md-6">              
                            <form action="{{ url('/beritaAdmin',$row->id) }}" method="POST">
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
    <script src="{{ URL::asset('/js/beritaAdmin.js')}}"></script>
@endsection


