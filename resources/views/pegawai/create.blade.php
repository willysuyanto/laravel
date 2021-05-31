@extends('layout.mainlayout')
@section('inikonten')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="col-md-12">
            <!-- /.card -->
             <!-- general form elements -->
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <!-- form start -->
              <form action="{{route('pegawai.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control @if($errors->has('nip')) is-invalid @endif" id="exampleInputEmail1" name="nip" placeholder="Masukkan NIP">
                    @if(@$errors->has('nip'))
                      <div class="invalid-feedback">NIP Tidak Boleh Kosong</div>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="jabatan" placeholder="Masukkan Jabatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gaji</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="gaji" placeholder="Masukkan Gaji">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection