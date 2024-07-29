@extends('layouts.userApp')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="row center-block">
                    <div class="col-md-6 col-md-offset-1">
                        <a class="btn btn-neutral" style="color: #000000;" href=""><i class="fa fa-link"></i>{{ __('Ajouter un Nom Niveau.') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="header">
                    <a class="btn btn-info btn-fill" href="{{route('bureau.index')}}">Retour</a>
                </div>
                <div class="content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span><span class="sr-only"><i class="pe-7s-close-circle"></i></span>
                            </button>
                            <strong>Whoops!</strong> Il y a eu des problemes avec votre entree.<br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('niveau.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Nom') }}</label>
                                    <input type="text" name="nom" class="form-control">
                                </div>
                            </div>
                             <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Description') }}</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                            </div>
                            
                        </div>

                
                        </div>
                        </div>
                    
                        <input type="submit" class="btn btn-info btn-fill pull-right" value="{{ __('Ajouter') }}">
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
