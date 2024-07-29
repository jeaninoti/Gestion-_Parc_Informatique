@extends('layouts.userApp')

@section('content')
   
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
                    <form action="{{route('bureau.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Numero') }}</label>
                                    <input type="text" name="numero" class="form-control">
                                </div>
                            </div>
                             <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{ __('Niveaux_Etage') }}</label>
                                    <select class="form-control" name="niveau_id">
                                        @foreach($niveaux as $niveau)
                                            <option value="{{ $niveau->id }}">{{ $niveau->nom }}</option>
                                        @endforeach
                                    </select>
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
