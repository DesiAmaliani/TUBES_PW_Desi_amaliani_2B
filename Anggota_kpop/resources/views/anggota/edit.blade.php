@extends('layouts.app')

@section('content')
<h4>Ubah Anggota</h4>
<form action="{{ route('anggota.update', $anggota->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $anggota->nama }}">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('anggota') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Anggota</label>
        <input type="text" class="form-control" name="anggota" placeholder="Anggota" value="{{ $anggota->anggota }}">
        @if ($errors->has('anggota'))
            <span class="help-block">{{ $errors->first('anggota') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('posisi') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Posisi</label>
        <input type="text" class="form-control" name="posisi" placeholder="Posisi" value="{{ $anggota->posisi }}">
        @if ($errors->has('posisi'))
            <span class="help-block">{{ $errors->first('posisi') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('anggota.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection