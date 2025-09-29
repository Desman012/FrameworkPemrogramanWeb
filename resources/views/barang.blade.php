@extends('utama')
@section('judul-menu')
<p>Ini adalah tampilan dari judul menu memek dengan id: {{$isi_data}}</p>

@if($isi_data > 20)
    <p>Isi data lebih dari 20</p>
@elseif($isi_data > 15)
    <p>Isi data lebih dari 15</p>
@endif
@section('isi-menu')
<p>Ini isi dari section isi menu</p>
@endsection