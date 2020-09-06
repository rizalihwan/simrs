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
                                <label class="panel-title">Detail Pasien</label>
                                <hr style="border: 2px solid gray;">
                                    <a href="{{ route('pasien.index') }}" class="btn btn-danger" style="position: absolute; right: 0; top: 0;" data-dismiss="modal">Back</a>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="texet">Nomor Rawat :</label>
                                    <input type="text" name="no_rawat" value="{{ $data->no_rawat }}" class="form-control" id="texet" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tex1">Nama Pasien :</label>
                                    <input type="text" name="nama_pasien" value="{{ $data->nama_pasien }}" class="form-control" id="tex1" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tex2">Umur :</label>
                                    <input type="text" name="umur" value="{{ $data->umur . ' Tahun'}}" class="form-control" id="tex2" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin :</label>
                                    <input type="text" name="umur" value="{{ $data->jk }}" class="form-control" id="jk" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="pt">Poliklinik Tujuan :</label>
                                    <input type="text" name="nama_pj" value="{{ $data->poli }}" class="form-control" id="pt" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tex5">Nama Penanggung Jawab(PJ) :</label>
                                    <input type="text" name="nama_pj" value="{{ $data->nama_pj }}" class="form-control" id="tex5" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tex3">Alamat Penanggung Jawab(PJ) :</label>
                                    <textarea class="form-control" name="alamat_pj" id="tex3" placeholder="your location..." rows="4" readonly>{{ $data->alamat_pj }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tex4">No. Telepon Penanggung Jawab(PJ) :</label>
                                    <input type="text" name="no_telp_pj" value="{{ $data->no_telp_pj }}" class="form-control" id="tex4" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="dpj">Dokter Penanggung Jawab(PJ) :</label>
                                    <input type="text" name="no_telp_pj" value="{{ $data->dokter_pj }}" class="form-control" id="dpj" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jb">Jenis Bayar :</label>
                                    <input type="text" name="no_telp_pj" value="{{ $data->jenis_bayar }}" class="form-control" id="jb" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="cm">Cara Masuk :</label>
                                    <input type="text" name="no_telp_pj" value="{{ $data->cara_masuk }}" class="form-control" id="cm" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END INPUT SIZING -->
@endsection
