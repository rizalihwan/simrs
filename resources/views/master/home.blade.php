@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
				<div class="panel panel-headline">
					<div class="panel-heading">
						<h3 class="panel-title">{{ date('d-M-Y') }}</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<div class="metric">
									<span class="icon"><span style="color: white;" class="lnr lnr-user"></span></span>
								<p>
									<em class="title-graphic blue">Data Pengguna</em><br>
									<span style="font-size: 35px;" class="title bold">{{ $data }}</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                <p>
                                    <em class="title-graphic green">Data Pasien</em><br>
                                    <span style="font-size: 35px;" class="title bold">{{ $data2 }}</span>
                                </p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								    <span class="icon"><i class="fa fa-eye"></i></span>
								<p>
									<em class="title-graphic red">Data Dokter</em><br>
									<span style="font-size: 35px;" class="title bold">{{ $data3 }}</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								    <span class="icon"><i class="fa fa-bar-chart"></i></span>
								<p>
									<em class="title-graphic yellow">Data Keempat</em><br>
									<span style="font-size: 35px;" class="title bold">min</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
<!-- END MAIN CONTENT -->
@endsection
