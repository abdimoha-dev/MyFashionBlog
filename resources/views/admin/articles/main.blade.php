@extends('layouts.app')
@section('content')
    <a href="article" class="btn btn-success" style="float: right" role="button">Add New Blog Post</a>

    <table class="table table-condensed">
        <thead>
        <tr>
            <th>ID</th>
            <th>BLOG TITTLE</th>
            <th>VIEW</th>
            <th>EDIT BLOG</th>
            <th>DELETE BLOG</th>
        </tr>
        </thead>
        <tbody>
        @if(count($articles) > 0)
            @foreach ($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td><a href="#!" class="btn btn-secondary" role="button">View This Blog</a></td>
                    <td><a href="#!" class="btn btn-primary" role="button">Edit Blog</a></td>
                    <td><a href="#!" class="btn btn-danger" role="button">Delete Blog</a></td>
                    <td></td>

                </tr>
            @endforeach
        @else
            <tr>
                <td col="12">
                    <div class="alert alert-danger">
                        There are no marching records
                    </div>
                </td>
            </tr>
        @endif
        </tbody>
    </table>

@endsection