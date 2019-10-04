 b@extends('layouts.app')

@section('content')
 
<html>
    <head>
        <title>Kategori Artikel</title>
    </head>
    <body>
        <table Border="1">
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Users Id</td>
                <td>Create</td>
            </tr>
            @foreach($listKategoriArtikel as $item)
            <tr>
                <td>{!! $item->id !!}</td>
                <td>{!! $item->nama !!}</td>
                <td>{!! $item->users_id !!}</td>
                <td>{!! $item->created_at !!}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
@endsection