@extends('template')
@section('content')
<title>SI Pengelolaan Tilang</title>
<div class="card">
  <div class="card-header">
     <h3 class="card-title">Data Pelanggar Terbaru</h3>
  </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>User ID (untuk user yang menilang)</th>
            <th>Jenis Pelanggaran</th>
            <th>Terdakwa</th>
            <th>Denda</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>5.5</td>
            <td>A</td>
            <td>X</td>
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.0
            </td>
            <td>Win 95+</td>
            <td>5</td>
            <td>C</td>
            <td>5.5</td>
            <td>A</td>            
          </tr>
          <tr>
            <td>Trident</td>
            <td>Internet
              Explorer 5.5
            </td>
            <td>Win 95+</td>
            <td>5.5</td>
            <td>A</td>
            <td>5.5</td>
            <td>A</td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>User ID (untuk user yang menilang)</th>
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