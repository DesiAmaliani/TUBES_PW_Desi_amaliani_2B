@extends('layouts.app')

@section('content')
<h4>{{ $anggota->nama }}</h4>
<p>{{ $anggota->anggota }}</p>
<a href="{{ route('anggota.index') }}" class="btn btn-default">Kembali</a>
@endsection