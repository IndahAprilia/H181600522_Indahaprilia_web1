@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Pengumuman</div>

                <div class="card-body">
                <table border="1">
        <tr>
            <td>Judul</td>
            <td>Isi</td>
            <td>Users Id</td>
            <td>Create</td>
            <td>Kategori Pengumuman Id</td>
        </tr>

        @foreach($listPengumuman as $item)

        <tr>
            <td>{!! $item->judul !!}</td>
            <td>{!! $item->isi !!}</td>
            <td>{!! $item->users_id !!}</td>
            <td>{!! $item->created_at->format('d/m/y H:i:s') !!}</td>
            <td>{!! $item->kategori_pengumuman_id !!}</td>
        </tr>
        @endforeach    
        </table>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection