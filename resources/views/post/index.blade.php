@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-center align-middle">
                    <a href="/post/create" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    @foreach($post as $row)
                    <div class="card">
                        <div class="card-body">
                            {{$row->title}}
                            <br>
                            {{$row->content}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
