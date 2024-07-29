@extends('layouts.userApp')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="header">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span><span class="sr-only"><i class="pe-7s-close-circle"></i></span>
                            </button>
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <a class="btn btn-info btn-fill" href="{{route('Departement.create')}}"><i class="fa fa-plus-circle"></i>{{__('Ajouter une nouvel Departement')}}</a>
                      <form class="form-inline my-2 my-lg-0 pull-right" action="{{ route('Departement.index') }}" method="get" role="search">
                        <input class="form-control mr-sm-2" type="search" name="term" placeholder="{{ __('Chercher le Departement') }}" aria-label="Search">
                        <button class="btn btn-info btn-fill my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="content table-responsive table-full-width center-block">
                    <table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Nom') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
    </thead>
    <tbody>
      @php
            $count = 1;
        @endphp
        @foreach ($Departements as $Departement)
        <tr>
            <td> {{ $count }}</td>
            <td>{{ $Departement->nom }}</td>
            <td>
    <a class="btn" href="{{ route('Departement.show', $Departement->id) }}">
        <i class="fa fa-eye" style="color: #000000;"></i>
    </a>
    <a class="btn" href="{{ route('Departement.edit', $Departement->id) }}">
        <i class="fa fa-edit" style="color: #000000;"></i>
    </a>
    <form action="{{ route('Departement.destroy',$Departement->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn">
            <i class="fa fa-trash" style="color: #000000;"></i>
        </button>
    </form>
</td>
        </tr>
           @php
            $count++;
        @endphp

        @endforeach
    </tbody>
</table>
                </div>
            </div>
            <div class="d-flex justify-content-center">
            
            </div>
        </div>
    </div>
@endsection
