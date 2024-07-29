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
                    <a class="btn btn-primary btn-fill" href="{{route('bureau.create')}}"><i class="fa fa-plus-circle"></i>{{__('Ajouter une nouvel bureau')}}</a>
                    <form class="form-inline my-2 my-lg-0 pull-right" action="" method="get" role="search">
                        <input class="form-control mr-sm-2" type="search" name="term" placeholder="{{ __('Chercher un Bureau') }}" aria-label="Search">
                        <button class="btn btn-info btn-fill my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="content table-responsive table-full-width center-block">
                    <table class="table table-hover table-striped">
                        <thead>
                        <th>{{ __('Id')}}</th>
                        <th>{{ __('Numero')}}</th>
                        <th>{{ __('Niveau')}}</th>
                        <th>{{ __('actions')}}</th>
                        </thead>
                        <tbody>
                            @php
                                $it = 1;
                            @endphp
                            @foreach ($bureaux as $bureau)
                                <tr>
                                    <td>{{ $it }}</td>
                                    <td>{{ $bureau->numero }}</td>
                                    <td>
                                        @foreach ($niveaux as $niveau)
                                            @if ($niveau->id == $bureau->niveau_id)
                                                {{ $niveau->nom }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a class="btn" href=""><i class="fa fa-eye" style="color: #000000;"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn" href=""><i class="fa fa-edit" style="color: #000000;"></i></a>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn"><i class="fa fa-trash" style="color: #000000;"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                    $it++;
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