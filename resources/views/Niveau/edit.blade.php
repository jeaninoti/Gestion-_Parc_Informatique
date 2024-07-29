@extends('layouts.userApp')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="header">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span><span class="sr-only"><i class="pe-7s-close-circle"></i></span>
                            </button>
                            <strong>Whoops!</strong> Il y eu des problemes avec votre entree.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="content">
    <form action="{{ route('niveau.update', $niveau->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="mat_nom">{{ __('Nom') }}</label>
                    <input type="text" name="nom" class="form-control" value="{{ $niveau->nom }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="mat_model">{{ __('Description') }}</label>
                    <input type="text" name="description" class="form-control" value="{{ $niveau->description }}">
                </div>
            </div>
        </div>
        <div class="btn-toolbar">
            <input type="submit" id="btnCancel" class="btn btn-info btn-fill pull-right" value="{{ __('Modifier') }}">
            <a href="{{ route('niveau.index') }}" id="btnSubmit" class="btn btn-info btn-fill pull-right">{{ __('Annuler') }}</a>
        </div>
        <div class="clearfix"></div>
    </form>
</div>
    </div>
@endsection
