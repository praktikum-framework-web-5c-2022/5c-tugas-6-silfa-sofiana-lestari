@extends('layouts.app');
@section('title','Input Hardware')
@section('content')
<h1>Input Hardware</h1>
<div class="row">
    <div class="col-md-8">
        <form action="{{ route('hardwares.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Hardware</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_hardware">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Spesifikasi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="spesifikasi">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example" name="kategori_id">
                    @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->jenis_perangkat }}</option>
                    @endforeach
                  </select>
              </div>
            <button type="submit" class="btn btn-primary">INPUT HARDWARE BARU</button>
          </form>
    </div>
</div>
@endsection