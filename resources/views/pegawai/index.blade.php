@extends('layout.mainlayout')
@section('inikonten')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Data</a>
                <a href="pegawai/export" class="btn btn-primary">Export Excel</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($pegawai as $pgw)
                    <tr>
                      <td>{{$pgw->nip}}</td>
                      <td>{{$pgw->nama}}</td>
                      <td>{{$pgw->jabatan}}</td>
                      <td>{{$pgw->gaji}}</td>
                      <td>
                        <form action="{{ route('pegawai.destroy', $pgw->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <a href="" class="btn btn-info btn-sm">Lihat</a>
                          <a href="{{ route('pegawai.edit', $pgw->id) }}" class="btn btn-sm btn-primary">Edit</a>
                          <input type="submit" class="btn btn-danger btn-sm" value="Hapus">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection