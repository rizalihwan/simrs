@extends('layouts.app')
@section('title', 'DataPoli')
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
                                <b class="modal-title" id="exampleModalLongTitle" style="font-size: 20px;">Tambah Poliklinik</b>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    <div class="modal-body">
                        {{-- This FORM ACTION PLUS DATA --}}
                        <form action="{{ route('poli.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="tex1">Nama Poliklinik :</label>
                                <input type="text" name="nama_poli" placeholder="nama poliklinik" class="form-control" id="tex1" aria-describedby="emailHelp" required>
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
						<th>Nama Poliklinik</th>
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
                        <td>{{ $row->nama_poli }}</td>
                        <td>
                            <form action="{{ route('poli.delete', $row->id) }}" method="post">
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
