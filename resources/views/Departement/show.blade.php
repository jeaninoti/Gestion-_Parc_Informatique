@extends('layouts.userApp')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="header">
                <a class="btn btn-info btn-fill" href="{{ route('Departement.index') }}">Retour</a>
                <a class="btn btn-info btn-fill" href="{{ route('Departement.edit', $Departement->id) }}">Modifer</a>
            </div>
            <div class="content">
                <form>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ __('Model') }}</label>
                                <input type="text" class="form-control" value="{{ $Departement->nom }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      
        
                
                    </div>
        
                        
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
