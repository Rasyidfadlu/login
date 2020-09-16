@extends('layout.template')

@section('title', 'Info Corona')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/info.css')}}">
@endsection

@section('info' , 'aktif')

@section('home'  , 'sliding-underline')
@section('berita', 'sliding-underline')
@section('hospital'  , 'sliding-underline')
@section('report', 'sliding-underline')

@section('container')
	<div class="content">
		<div class="pic col-md-12">
			<img class="img-fluid" src="{{ URL::asset('/assets/image/infoCovid.jpg')}}" alt="">
		</div>
	</div>
	
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-3">
					<div class="bg-danger box text-white">
						<div class="row">
							<div class="col-md-6">
								<h5 >Positif</h5>
								<h3 class="font-weight-bold" id="terdampak">Loading...</h3>
								<h5>Orang</h5>
							</div>
							<div class="col-md-4">
								<img src="{{ URL::asset('/assets/img/sad.svg')}}" style="width: 100px;">
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<div class="bg-info box text-white">
						<div class="row">
							<div class="col-md-6">
								<h5>Meninggal</h5>
								<h3 class="font-weight-bold" id="mati">Loading...</h3>
								<h5>Orang</h5>
							</div>
							<div class="col-md-4">
								<img src="{{ URL::asset('/assets/img/cry.svg')}}" style="width: 100px;">
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<div class="bg-success box text-white">
						<div class="row">
							<div class="col-md-6">
								<h5>Sembuh</h5>
								<h3 class="font-weight-bold" id="sembuh">Loading...</h3>
								<h5>Orang</h5>
							</div>
							<div class="col-md-4">
								<img src="{{ URL::asset('/assets/img/happy.svg')}}" style="width: 100px;">
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="col-md-12" style="height: 500px;">
						{!! $chart->container() !!}
						{!! $chart->script() !!}
					</div>
				</div>

				<div class="col-md-12">
					<div class="bg-primary box text-white">
						<div class="row">
							<div class="col-md-10">
								@foreach($dataindo as $info)
								<h2 class="pt-3 pb-2 font-weight-bold">{{ $info['name'] }}</h2>
								<h5 id="data-id">
									<div class="row no-gutters">
										<div class="col-md-2">Positif</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9">{{ $info['positif'] }}</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Meninggal</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9">{{ $info['meninggal'] }}</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Sembuh</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9">{{ $info['sembuh'] }}</div>
									</div>
								</h5>
								@endforeach
							</div>
							<div class="col-md-2">
								<img src="{{ URL::asset('/assets/img/indonesia.svg')}}" style="width: 150px;">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<div class="bg-primary box text-white">
						<div class="row">
							<div class="col-md-10">
								<h2 class="pt-3 pb-2 font-weight-bold">China</h2>
								<h5 id="data-id">
									<div class="row no-gutters">
										<div class="col-md-2">Positif</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="cinapos">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Meninggal</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="cinamat">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Sembuh</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="cinasem">Wait...</div>
									</div>
								</h5>
							</div>
							<div class="col-md-2">
								<img src="{{ URL::asset('/assets/image/flag-cina.png')}}" style="width: 150px;">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<div class="bg-primary box text-white">
						<div class="row">
							<div class="col-md-10">
								<h2 class="pt-3 pb-2 font-weight-bold">Amerika Serikat</h2>
								<h5 id="data-id">
									<div class="row no-gutters">
										<div class="col-md-2">Positif</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="usapos">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Meninggal</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="usamat">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Sembuh</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="usasem">Wait...</div>
									</div>
								</h5>
							</div>
							<div class="col-md-2">
								<img src="{{ URL::asset('/assets/image/flag-amerika.png')}}" style="width: 230px; margin-left: -35px;">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<div class="bg-primary box text-white">
						<div class="row">
							<div class="col-md-10">
								<h2 class="pt-3 pb-2 font-weight-bold">Italia</h2>
								<h5 id="data-id">
									<div class="row no-gutters">
										<div class="col-md-2">Positif</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="italpo">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Meninggal</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="italmat">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Sembuh</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="italsem">Wait...</div>
									</div>
								</h5>
							</div>
							<div class="col-md-2">
								<img src="{{ URL::asset('/assets/image/flag-italia.png')}}" style="width: 150px;">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<div class="bg-primary box text-white">
						<div class="row">
							<div class="col-md-10">
								<h2 class="pt-3 pb-2 font-weight-bold">Brazil</h2>
								<h5 id="data-id">
									<div class="row no-gutters">
										<div class="col-md-2">Positif</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="brapo">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Meninggal</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="bramat">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Sembuh</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="brasem">Wait...</div>
									</div>
								</h5>
							</div>
							<div class="col-md-2">
								<img src="{{ URL::asset('/assets/image/flag-brazil.png')}}" style="width: 150px;">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 mt-3">
					<div class="bg-primary box text-white">
						<div class="row">
							<div class="col-md-10">
								<h2 class="pt-3 pb-2 font-weight-bold">Turki</h2>
								<h5 id="data-id">
									<div class="row no-gutters">
										<div class="col-md-2">Positif</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="turkpo">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Meninggal</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="turkmat">Wait...</div>
									</div>
									<div class="row no-gutters">
										<div class="col-md-2">Sembuh</div>
										<div class="col-md-1">:</div>
										<div class="col-md-9" id="turksem">Wait...</div>
									</div>
								</h5>
							</div>
							<div class="col-md-2">
								<img src="{{ URL::asset('/assets/image/flag-turki.png')}}" style="width: 150px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    <footer>
        <div class="container">
            <div class="row copyright">
                <p class="font-weight-bold "><i class=" far fa-copyright "></i> 2020 COVID19-INFO | SMKN 4 BANDUNG </p>
            </div>
        </div>
    </footer>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<script type="text/javascript">
	$(document).ready(function(){

		semuaData();
		dataNegara();

		function dataNegara(){
			$.ajax({
				url : 'https://coronavirus-19-api.herokuapp.com/countries',
				success : function(data){
					try{
						var json = data;
						var html = [];

						if(json.length > 0){
							var i;
							for(i=0; i<json.length; i++){
								var dataNegara = json[i];
								var namaNegara = dataNegara.country;

								if (namaNegara == 'China') {
									var kasus = dataNegara.cases;
									var mati = dataNegara.deaths;
									var sembuh = dataNegara.recovered;

									$('#cinapos').html(kasus);
									$('#cinamat').html(mati);
									$('#cinasem').html(sembuh);
								}
								else if(namaNegara == 'USA') {
									var kasus = dataNegara.cases;
									var mati = dataNegara.deaths;
									var sembuh = dataNegara.recovered;

									$('#usapos').html(kasus);
									$('#usamat').html(mati);
									$('#usasem').html(sembuh);
								}
								else if(namaNegara == 'Italy') {
									var kasus = dataNegara.cases;
									var mati = dataNegara.deaths;
									var sembuh = dataNegara.recovered;

									$('#italpo').html(kasus);
									$('#italmat').html(mati);
									$('#italsem').html(sembuh);
								}
								else if(namaNegara == 'Brazil') {
									var kasus = dataNegara.cases;
									var mati = dataNegara.deaths;
									var sembuh = dataNegara.recovered;

									$('#brapo').html(kasus);
									$('#bramat').html(mati);
									$('#brasem').html(sembuh);
								}
								else if(namaNegara == 'Turkey') {
									var kasus = dataNegara.cases;
									var mati = dataNegara.deaths;
									var sembuh = dataNegara.recovered;

									$('#turkpo').html(kasus);
									$('#turkmat').html(mati);
									$('#turksem').html(sembuh);
								}

							}
						}
					}catch{

					}
				}
			});
		}

		function semuaData(){
			$.ajax({
				url : 'https://coronavirus-19-api.herokuapp.com/all',
				success : function(data){
					try{
						var json = data;
						var kasus = data.cases;
						var meninggal = data.deaths;
						var sembuh = data.recovered;

						$('#terdampak').html(kasus);
						$('#mati').html(meninggal);
						$('#sembuh').html(sembuh);
					}catch{
						alert('Error');
					}
				}
			});
		}
	});
</script>
@endsection

