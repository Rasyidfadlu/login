@extends('layout/templateAdmin')

@section('title', 'Table Berita')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/beritaAdmin.css')}}">
@endsection
    
@section('container')

<div class="col-md-10 content">
    <h1 class="judul mt-2 ml-2 text-dark"><i class="fas fa-envelope ml-4"></i> PESAN
    </h1>
    <hr class="line">
<div class="wadah  mb-5">
    <table class="table display table-color ml-auto mr-auto table-bordered text-dark " id="myTable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
                <th>E-Mail</th>
                <th>No Telephone</th>
                <th style="width: 350px">Pesan</th>
                <th class="aksi">Action</th>
			</tr>
		</thead>
        <tbody>
            @foreach($pesan as $row)
			<tr>
                <td>{{ $loop->iteration }}</td>     
                <td>{{ $row->nama }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->phone }}</td>
                <td class="pesan">{{ $row->message }}</td>
                <td style="border-right: none;">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{url('https://mail.google.com')}}" class="btn btn-success">
                                <i class="far fa-reply font-weight-bold text-white"></i>
                            </a>
                        </div>
                        <div class="col-md-6">              
                            <form action="{{ url('pesan', $row->id) }}" method="POST">
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


