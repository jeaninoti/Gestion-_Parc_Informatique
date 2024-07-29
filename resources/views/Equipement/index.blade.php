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
                  
                    <a class="btn btn-info btn-fill" href="{{route('equipement.create')}}"><i class="fa fa-plus-circle"></i>{{__('Ajouter un equipement')}}</a>
                      <form class="form-inline my-2 my-lg-0 pull-right" action="{{ route('equipement.index') }}" method="get" role="search">
                        <input class="form-control mr-sm-2" type="search" name="term" placeholder="{{ __('Chercher le categorie') }}" aria-label="Search">
                        <button class="btn btn-info btn-fill my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="content table-responsive table-full-width " >
                    <table class="table table-hover table-striped" style='width:100%'>

        <thead class="thead thead-dark" >
                            <th>{{ __('Nm') }}</th>
                            <th>{{ __('Mrq') }}</th>
                            <th>{{ __('Desgnt') }}</th>
                            <th>{{ __('no') }}</th>
                            <th>{{ __('spcfic_T') }}</th>
                            <th>{{ __('systm_expl') }}</th>
                            <th>{{ __('antvrs') }}</th>
                            <th>{{ __(' Ctg') }}</th>
                            <th>{{ __(' Brea') }}</th>
                            <th>{{ __(' Deprt') }}</th>
                            <th>{{ __(' Prs') }}</th>
                            <th>{{ __('dt_invt') }}</th>
                            <th>{{ __('dt_aff') }}</th>
                            <th>{{ __(' etat') }}</th>
                            <th>{{ __(' ancien') }}</th>
                            <th>{{ __('Actions') }}</th>
                            
                        </thead>

    
    <tbody>
                            @foreach($equipements as $equipement)
                                <tr>
                                    <td>{{ $equipement ->nom }}</td>
                                    <td>{{$equipement ->marque }}</td>
                                    <td>{{$equipement ->designation }}</td>
                                    <td>{{$equipement ->numero_serie }}</td>
                                    <td>{{$equipement ->specification_technique }}</td>
                                    <td>{{$equipement ->systeme_exploitation }}</td>
                                    <td>{{$equipement ->antivirus }}</td>
                                    <td>{{$equipement ->Categorie }}</td>
                                    <td>{{$equipement ->Bureau }}</td>
                                    <td>{{$equipement ->Departement }}</td>
                                    <td>{{$equipement ->Personne }}</td>
                                    <td>{{$equipement ->date_inventaire }}</td>
                                    <td>{{$equipement ->date_affectation }}</td>
                                    <td>{{$equipement ->etat }}</td>
                                    <td>{{$equipement ->ancien }}</td>
                                    <td>{{$equipement ->created_at }}</td>
                                    <td>
                                        @if($equipements ->updated_at != null)
                                            {{ $equipements ->updated_at }}
                                        @else
                                            {{ __('pas encore modifie') }}
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn" href="{{ route('equipement.edit', $equipement->id) }}">
                                            <i class="fa fa-edit" style="color: #000000"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('equipement.destroy', $equipement->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn" type="submit">
                                                <i class="fa fa-trash" style="color: #000000"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
</table>
</div>
            </div>
            <div class="d-flex justify-content-center">
            
            </div>
        </div>
    </div>
    
                </div>
@endsection
