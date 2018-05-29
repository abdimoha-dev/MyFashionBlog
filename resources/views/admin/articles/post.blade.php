@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            {!! Form::open(['url'=>'article', 'role' =>'form']) !!}
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contents" class="col-md-4 col-form-label text-md-right">{{ __('Content')  }}</label>

                                <div class="col-md-6">
                                    <textarea id="contents" class="form-control{{ $errors->has('contents') ? ' is-invalid' : '' }}" name="contents" rows="1 0"></textarea>

                                    @if ($errors->has('contents'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contents') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Publish') }}
                                    </button>
                                </div>
                            </div>
                      {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
