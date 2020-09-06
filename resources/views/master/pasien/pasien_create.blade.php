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
            <div class="col-10">
            {{-- Modal Button --}}
                <button type="button" style="margin: 10px 0 0 7px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus-square"></i> Tambah Data </button>
            <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <b class="modal-title" id="exampleModalLongTitle" style="font-size: 20px;">Daftar Pasien</b>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    <div class="modal-body">
                        {{-- This FORM ACTION PLUS DATA --}}
                        <form action="{{ route('pasien.create') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="texet">Nomor Rawat :</label>
                                <input type="text" name="no_rawat" class="form-control" placeholder="nama pasien" id="texet" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="tex1">Nama Pasien :</label>
                                <input type="text" name="nama_pasien" class="form-control" placeholder="nama pasien" id="tex1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="tex2">Umur :</label>
                                <input type="number" name="umur" placeholder="umur pasien" class="form-control" id="tex2" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin :</label>
                                <select class="form-control" name="jk" id="jk">
                                    <option disabled selected>Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pt">Poliklinik Tujuan :</label>
                                <select class="form-control" name="poli" id="pt">
                                    <option disabled selected>poliklinik tujuan</option>
                                    @foreach ($get_poli as $name_poli)
                                        <option value="{{ $name_poli->nama_poli }}">{{ $name_poli->nama_poli }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tex5">Nama Penanggung Jawab(PJ) :</label>
                                <input type="text" name="nama_pj" placeholder="nama penanggung jawab" class="form-control" id="tex5" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="tex3">Alamat Penanggung Jawab(PJ) :</label>
								<textarea class="form-control" name="alamat_pj" id="tex3" placeholder="alamat penanggung jawab" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tex4">No. Telepon Penanggung Jawab(PJ) :</label>
                                <input type="number" name="no_telp_pj" placeholder="no telepon penanggung jawab" class="form-control" id="tex4" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="dpj">Dokter Penanggung Jawab(PJ) :</label>
                                <select class="form-control" name="dokter_pj" id="dpj">
                                    <option disabled selected>dokter penanggung jawab</option>
                                    @foreach ($get_dokter as $name_dokter)
                                        <option value="{{ $name_dokter->nama_dokter }}">{{ $name_dokter->nama_dokter }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jb">Jenis Bayar :</label>
                                <select class="form-control" name="jenis_bayar" id="jb">
                                    <option disabled selected>jenis bayar</option>
                                    <option value="Cash">Cash</option>
                                    <option value="BPJS">BPJS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cm">Cara Masuk :</label>
                                <select class="form-control" name="cara_masuk" id="cm">
                                    <option disabled selected>cara masuk</option>
                                    <option value="Rawat-Jalan">Rawat-Jalan</option>
                                    <option value="Rawat-Inap">Rawat-Inap</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal --}}
        {{-- table --}}
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
                        <th>#</th>
                        <th>Nomor Rawat</th>
						<th>Nama Pasien</th>
                        <th>Action</th>
					</tr>
                </thead>
                @php
                    $Number = 1;
                @endphp
                @if (count($data) > 0)
                @foreach ($data as $row)
				<tbody>
					<tr>
                        <td>{{ $Number++ . '.' }}</td>
                        <td>{{ $row->no_rawat }}</td>
                        <td>{{ $row->nama_pasien }}</td>
                        <td>
                            <a href="{{ route('pasien.detail', $row->id_pasien) }}" class="btn btn-success"><img src="{{ asset('img/see.png') }}" width="15px"></a>
                            <a href="{{ route('pasien.edit', $row->id_pasien) }}" class="btn btn-warning"><span class="lnr lnr-pencil"></span></a>
                            <form action="{{ route('pasien.destroy', $row->id_pasien) }}" method="post">
                                @method('DELETE')
                                    @csrf
                                <button type="submit" class="btn btn-danger delete-button" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash-o"></i></button>
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
