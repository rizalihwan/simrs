@extends('layouts.app')
@section('title', 'DataPengguna')
@section('content')

<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
        <!-- OVERVIEW -->
		<div class="panel panel-headline">
             {{-- Validate value --}}
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
                                <b class="modal-title" id="exampleModalLongTitle" style="font-size: 20px;">Tambah Pengguna</b>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    <div class="modal-body">
                        {{-- This FORM ACTION PLUS DATA --}}
                        <form action="{{ route('pengguna.create') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="tex1">Nama :</label>
                                <input type="text" name="nama" class="form-control" id="tex1" aria-describedby="emailHelp" required>
                            </div>
                            <input type="hidden" name="role" value="pengguna">
                            <div class="form-group">
                                <label for="tex2">Username :</label>
                                <input type="text" name="username" class="form-control" id="tex2" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="text3">Password :</label>
                                <input type="password" name="password" class="form-control" id="text3" aria-describedby="emailHelp" required>
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
                                <label for="tex4">Agama :</label>
                                <input type="text" name="agama" class="form-control" id="tex4" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="tex5">No. Telepon :</label>
                                <input type="number" name="no_telp" class="form-control" id="tex5" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="tex6">Alamat :</label>
								<textarea class="form-control" name="alamat" id="tex6" placeholder="your location..." rows="4" required></textarea>
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
						<th>Nama</th>
						<th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
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
                        <th>{{ $Number++ . '.' }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jk }}</td>
                        <td>{{ $row->agama }}</td>
                        <td>{{ $row->no_telp }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>
                            <form action="{{ route('pengguna.delete', $row->id) }}" method="post">
                                @method('DELETE')
                                    @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
					</tr>
                </tbody>
                @endforeach
                @else
                <tr>
                    <td colspan="7" class="red bold" align="center">{{"Empty Data!"}}</td>
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
@endsection
