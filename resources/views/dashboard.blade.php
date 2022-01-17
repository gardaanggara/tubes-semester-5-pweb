@extends('template')
@section('content')
<title>SI Pengelolaan Tilang</title>

<div class="card">
  <div class="card-header">
     <h3 class="card-title">Tambah Data Pelanggar Terbaru</h3>
  </div>
      <!-- /.card-header -->
      <form action="{{ route('dashboard.store') }}" method="post">
        {{ csrf_field() }}
      <div class="card-body">
       

            <div class="form-group {{ $errors->has('terdakwa') ? ' has-error' : '' }}">
              <label class="control-label">Terdakwa</label>  
              <input type="text" name="terdakwa" class="form-control"  required>
              @if ($errors->has('terdakwa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('terdakwa') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="form-group {{ $errors->has('tilang') ? ' has-error' : '' }}">
              <label class="control-label">Jenis Pelanggaran</label>  
              <input type="text" name="tilang" class="form-control"  required>
              @if ($errors->has('tilang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tilang') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="form-group {{ $errors->has('denda') ? ' has-error' : '' }}">
              <label class="control-label">denda</label>  
              <input type="text" name="denda" class="form-control"  required>
              @if ($errors->has('denda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('denda') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
              <label class="control-label">lokasi</label>  
              <input type="text" name="lokasi" class="form-control"  required>
              @if ($errors->has('lokasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
              <label class="control-label">tanggal</label>  
              <input type="date" name="tanggal" class="form-control"  required>
              @if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
              <label class="control-label">keterangan</label>  
              <input type="text" name="keterangan" class="form-control"  required>
              @if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
              <button class="btn btn-primary mt-3">Tambah</button>
            </div>
          </div>
      </div>
</form>
<div class="card">
  <div class="card-header">
     <h3 class="card-title">Data Pelanggar Terbaru</h3>
  </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
<!--             <th>User ID (untuk user yang menilang)</th> -->
            <th>Jenis Pelanggaran</th>
            <th>Terdakwa</th>
            <th>Denda</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
          </tr>
          </thead>
          <tbody>
            @php $no = 1; @endphp
            @foreach($tilang as $data)
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->terdakwa }}</td>
              <td>{{ $data->tilang }}</td>
              <td>{{ $data->denda }}</td>
              <td>{{ $data->lokasi }}</td>
              <td>{{ $data->tanggal }}</td>
              <td>{{ $data->keterangan }}</td> 
          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>No</th>
<!--             <th>User ID (untuk user yang menilang)</th> -->
            <th>Jenis Pelanggaran</th>
            <th>Terdakwa</th>
            <th>Denda</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

@endsection
@section('script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection