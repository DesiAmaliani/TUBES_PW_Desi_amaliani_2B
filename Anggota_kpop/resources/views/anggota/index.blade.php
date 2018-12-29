@extends('layouts.app')

@section('content')
    <h1 align="center" style="font-family: Novelty">Data Anggota K-POP</h1>
    <a href="{{ route('anggota.create') }}" class="btn btn-primary btn-sm">Tambah</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm" style="font-family: Display;">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Anggota</th>
            <th>Posisi</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($anggotas as $anggota)
                <tr>
                    <td>{{ $anggota->id }}</td>
                    <td><a href="{{ route('anggota.show', $anggota->id) }}">{{ $anggota->nama }}</a></td>
                    <td><a href="{{ route('anggota.show', $anggota->id) }}">{{ $anggota->anggota }}</a></td>
                    <td><a href="{{ route('anggota.show', $anggota->id) }}">{{ $anggota->posisi }}</a></td>
                    <td>
                        <form action="{{ route('anggota.destroy', $anggota->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection