
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori berita</div>

                <div class="card-body">
                    <a href="{!! route('kategori_berita.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>Id</td>
                            <td>User Id</td>
                            <td>Nama</td>
                            <td>Create_at</td>
                            <td>Update_at</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listkategoriberita as $kategori)
                        <tr>
                            <td>{!!$kategori->id!!}</td>
                            <td>{!!$kategori->users_id!!}</td>
                            <td>{!!$kategori->nama!!}</td>
                            <td>{!!$kategori->created_at!!}</td>
                            <td>{!!$kategori->updated_at!!}</td>
                            <td>
                                <a href="{!! route('kategori_berita.show', [$kategori->id]) !!}" class="btn btn-sm btn-success">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
