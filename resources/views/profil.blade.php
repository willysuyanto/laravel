@extends('layouts.mainlayout')

@section('judul-halaman')
Blade Laravel | Profil
@endsection

@section('kontennya')
<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Ini Adalah Profil</h1>
        <p class="lead text-muted">Selamat Datang</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

</main>
@endsection