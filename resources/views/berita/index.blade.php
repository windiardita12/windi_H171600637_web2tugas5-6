@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>

                <div class="card-body">
                    <a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>Id</td>
                            <td>Judul</td>
                            <td>Isi</td>
                            <td>User Id</td>
                            <td>Create</td>
                            <td>Update</td>
                            <td>Kategori</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listberita as $berita)
                        <tr>
                            <td>{!!$artikel->id!!}</td>
                            <td>{!!$artikel->judul!!}</td>
                            <td>{!!$artikel->isi!!}</td>
                            <td>{!!$artikel->users_id!!}</td>
                            <td>{!!$artikel->created_at!!}</td>
                            <td>{!!$artikel->updated_at!!}</td>
                            <td>{!!$artikel->kategori_berita_id!!}</td>
                            <td>
                                <a href="{!! route('berita.show', [$berita->id]) !!}" class="btn btn-sm btn-success">
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
 