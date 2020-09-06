@extends('layouts.app')
@section('title', 'EditData')
@section('content')
<!-- INPUT SIZING -->
<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
                    <div class="panel">
						<div class="panel-heading">
							<label class="panel-title">Update Data</label>
						</div>
						<div class="panel-body">
                            <form action="{{ route('pasien.update', $data->id_pasien) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="texet">Nomor Rawat :</label>
                                    <input type="text" name="no_rawat" value="{{ $data->no_rawat }}" class="form-control" id="texet" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                    <label for="tex1">Nama Pasien :</label>
                                    <input type="text" name="nama_pasien" value="{{ $data->nama_pasien }}" class="form-control" id="tex1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                    <label for="tex2">Umur :</label>
                                    <input type="number" name="umur" value="{{ $data->umur }}" class="form-control" id="tex2" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin :</label>
                                    <select class="form-control" name="jk" id="jk">
                                        <option value="Laki-Laki" @if($data->jk == 'Laki-Laki') selected @endif>Laki - Laki</option>
                                        <option value="Perempuan" @if($data->jk == 'Perempuan') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pt">Poliklinik Tujuan :</label>
                                    <select class="form-control" name="poli" id="pt">
                                        @foreach ($get_poli as $get_name)
                                            <option value="{{ $get_name->nama_poli }}">{{ $get_name->nama_poli }}</option>
                                        @endforeach
                                        <option value="{{ $data->poli }}" selected>{{ $data->poli }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tex5">Nama Penanggung Jawab(PJ) :</label>
                                    <input type="text" name="nama_pj" value="{{ $data->nama_pj }}" class="form-control" id="tex5" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                    <label for="tex3">Alamat Penanggung Jawab(PJ) :</label>
                                    <textarea class="form-control" name="alamat_pj" id="tex3" placeholder="your location..." rows="4" required>{{ $data->alamat_pj }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tex4">No. Telepon Penanggung Jawab(PJ) :</label>
                                    <input type="number" name="no_telp_pj" value="{{ $data->no_telp_pj }}" class="form-control" id="tex4" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                    <label for="dpj">Dokter Penanggung Jawab(PJ) :</label>
                                    <select class="form-control" name="dokter_pj" id="dpj">
                                        @foreach ($get_dokter as $get_name)
                                            <option value="{{ $get_name->nama_dokter }}">{{ $get_name->nama_dokter }}</option>
                                        @endforeach
                                        <option value="{{ $data->dokter_pj }}" selected>{{ $data->dokter_pj }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jb">Jenis Bayar :</label>
                                    <select class="form-control" name="jenis_bayar" id="jb">
                                        <option value="Cash" @if($data->jenis_bayar == 'Cash') selected @endif>Cash</option>
                                        <option value="BPJS" @if($data->jenis_bayar == 'BPJS') selected @endif>BPJS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cm">Cara Masuk :</label>
                                    <select class="form-control" name="cara_masuk" id="cm">
                                        <option value="Rawat-Jalan" @if($data->cara_masuk == 'Rawat-Jalan') selected @endif>Rawat-Jalan</option>
                                        <option value="Rawat-Inap" @if($data->cara_masuk == 'Rawat-Inap') selected @endif>Rawat-Inap</option>
                                    </select>
                                </div>
                                <a href="{{ route('pasien.index') }}" class="btn btn-danger" data-dismiss="modal">Back</a>
                                <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Update</button>
                            </form>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END INPUT SIZING -->
@endsection
