@extends('layouts.app');
@section('title','Edit Hardware')
@section('content')
<h1>Hardware Edit</h1>
<form action="{{ route('hardwares.update',$hardware->id) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Hardware</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_hardware" value="{{ $hardware->nama_hardware }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Spesifikasi</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="spesifikasi" value="{{ $hardware->spesifikasi }}">
    </div>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kategori_id" value="{{ $hardware->kategori_id }}" hidden>
    <button type="submit" class="btn btn-primary">EDIT DATA HARDWARE</button>
  </form>
@endsection