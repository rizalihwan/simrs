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
                            <form action="{{ route('dokter.update', $data->id_dokter) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <em>Nama :</em>
                                    <input type="text" name="nama_dokter" value="{{ $data->nama_dokter }}" class="form-control" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                    <em>Umur :</em>
                                    <input type="number" name="umur" value="{{ $data->umur }}" class="form-control" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                    <em>Jenis kelamin :</em>
                                    <select class="form-control" name="jk">
                                        <option value="Laki-Laki" @if($data->jk == 'Laki-Laki') selected @endif>Laki - Laki</option>
                                        <option value="Perempuan" @if($data->jk == 'Perempuan') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <em>Alamat :</em>
                                    <textarea class="form-control" name="alamat" placeholder="textarea" rows="4" required>{{ $data->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <em>No. Telepon :</em>
                                    <input type="number" name="no_telp" value="{{ $data->no_telp }}" class="form-control" aria-describedby="emailHelp" required>
                                </div>
                                <a href="{{ route('dokter.index') }}" class="btn btn-danger" data-dismiss="modal">Back</a>
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
