@extends('template')
@section('content')
<title>SI Pengelolaan Tilang</title>

<div class="card">
  <div class="card-header">
     <h3 class="card-title">Edit Data Pelanggar</h3>
  </div>
      <!-- /.card-header -->
      <form action="{{ route('dashboard.update',$tilang->id) }}" method="post">
        {{ csrf_field() }}
      <div class="card-body">
      	<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			<input type="hidden" name="id" value="{{ request()->get('id') }}">
            <div class="form-group {{ $errors->has('terdakwa') ? ' has-error' : '' }}">
			  			<label class="control-label">terdakwa</label>	
			  			<input type="text" name="terdakwa" class="form-control" value="{{ $tilang->terdakwa }}"  required>
			  			@if ($errors->has('terdakwa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('terdakwa') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tilang') ? ' has-error' : '' }}">
			  			<label class="control-label">tilang</label>	
			  			<input type="text" name="tilang" class="form-control" value="{{ $tilang->tilang }}"  required>
			  			@if ($errors->has('tilang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tilang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('denda') ? ' has-error' : '' }}">
			  			<label class="control-label">denda</label>	
			  			<input type="number" name="denda" class="form-control" value="{{ $tilang->denda }}"  required>
			  			@if ($errors->has('denda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('denda') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal tilang</label>	
			  			<input type="text" name="lokasi" class="form-control" value="{{ $tilang->lokasi }}"  required>
			  			@if ($errors->has('lokasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal </label>	
			  			<input type="date" name="tanggal" class="form-control" value="{{ $tilang->tanggal }}"  required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="keterangan" class="form-control" value="{{ $tilang->keterangan }}"  required>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
			 		</div>

			 		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
          </div>
      </div>
</form>

@endsection