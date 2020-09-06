@extends('layouts.app')
@section('title', 'DataPasien')
@section('content')

<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
        {{-- Validate Value --}}
            @if ($message = Session::get('succes'))
                <div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<i class="fa fa-check-circle"></i> {{ $message }}
				</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err . '!' }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        {{-- table --}}
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>NamaPasien</th>
                        <th>Umur</th>
                        <th>Jk</th>
                        <th>Nama(PJ)</th>
                        <th>Alamat(PJ) </th>
                        <th>No.Telp(PJ) </th>
                        <th>Dokter(PJ) </th>
                        <th>JenisBayar</th>
                        <th>CaraMasuk</th>
                        <th colspan="2">Action</th>
					</tr>
                </thead>
                @php
                    $Number = 1;
                @endphp
                @if (count($data) > 0)
                @foreach ($data as $row)
				<tbody>
					<tr align="center">
                        <td>{{ $Number++ . '.' }}</td>
                        <td>{{ $row->nama_pasien }}</td>
                        <td>{{ $row->umur }}</td>
                        <td>{{ $row->jk }}</td>
                        <td>{{ $row->nama_pj }}</td>
                        <td>{{ $row->alamat_pj }}</td>
                        <td>{{ $row->no_telp_pj }}</td>
                        <td>{{ 'Dr. '. $row->dokter_pj }}</td>
                        <td>{{ $row->jenis_bayar }}</td>
                        <td>{{ $row->cara_masuk }}</td>
                        <td>
                            <form action="{{ route('pasien.destroy', $row->id_pasien) }}" method="post">
                                @method('DELETE')
                                    @csrf
                                <button type="submit" style="margin-left: -30px;" class="btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
					</tr>
                </tbody>
                @endforeach
                @else
                <tr>
                    <td colspan="11" class="red bold" align="center">{{"Empty Data!"}}</td>
                </tr>
                @endif
			</table>
        </div>
       {{-- End Table --}}
    </div>
</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT -->
@endsection
