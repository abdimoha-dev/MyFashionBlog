@extends('layouts.app')
@section('content')

{{--{{$schools->name}}{{$schools->location}}{{$schools->address}}{{$schools->no_of_classes}}{{$schools->no_of_teachers}}{{$schools->no_of_students}}<br/><br/>--}}
<table class="table table-condensed">
    <thead>
    <tr>
        <th>Tittle/th>
        <th>content</th>
    </tr>
    </thead>
    <tbody>
    @if(count($articles) > 0)
    @foreach ($articles as $article)
    <tr>
        <td>{{$article->title}}</td>
        <td>{{$article->contents}}</td>
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