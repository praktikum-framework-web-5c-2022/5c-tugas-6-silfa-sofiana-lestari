@extends('layouts.app')
@section('title','Komputeria')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($all_kategori as $item)    
        <div class="col-md-6 mt-3">
            <h3>{{ $item->jenis_perangkat }}</h3>
            <ol class="list-group list-group-numbered">
            @foreach ($item->hardwares as $hd)
            <form action="{{ route('hardwares.destroy',$hd->id) }}" method="POST">
                @csrf
                @method('DELETE')
            <li class="list-group-item d-flex justify-content-start align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{ $hd->nama_hardware }}
                </div>
                    <span style="white-space: nowrap; text-overflow: ellipsis;">{{ $hd->spesifikasi }}</span>
                </div>
                <div class="tombol">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <a href="{{ route('hardwares.edit',$hd->id) }}" class="btn btn-primary">Edit</a>
                </div>
                </li>
            </form>
            @endforeach
        </ol>
        </div>
        @endforeach   
        </div>
</div>    
@endsection