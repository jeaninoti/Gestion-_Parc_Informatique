@extends('layouts.userApp')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="row center-block">
                    <div class="col-md-6 col-md-offset-1">
                        <a class="btn btn-neutral" style="color: #000000;" href=""><i class="fa fa-link"></i>{{ __('Ajouter une Equipement dans une Bureau') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="header">
                    <a class="btn btn-info btn-fill" href="{{route('equipement.index')}}">Retour</a>
                </div>
                <div class="content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span><span class="sr-only"><i class="pe-7s-close-circle"></i></span>
                            </button>
                            <strong>Whoops!</strong> Il y a eu des problèmes avec votre entrée.<br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('categorie.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Nom') }}</label>
                                    <input type="text" name="nom" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Marque ') }}</label>
                                     <select name="Marque " class="form-control">
                                        <option value="HP">{{ __('HP') }}</option>
                                        <option value="DELL">{{ __('DELL') }}</option>
                                        <option value="Lenovo">{{ __('Lenovo') }}</option>
                                        <option value="Asus">{{ __('Asus') }}</option>
                                        <option value="Acer">{{ __('Acer') }}</option>
                                        <option value="Autres">{{ __('Autres') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Designation ') }}</label>
                                    <input type="text" name="designation " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('numero_serie ') }}</label>
                                    <input type="text" name="numero_serie " class="form-control">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('specification_technique ') }}</label>
                                    <input type="text" name="specification_technique " class="form-control">
                                </div>
                                
                            </div>
                            
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('systeme_exploitation ') }}</label>
                                     <select name="systeme_exploitation " class="form-control">
                        
                                        <optgroup label="Windows">
                                        <option value="windows10">{{ __('windows 11') }}</option>
                                        <option value="windows10">{{ __('windows 10') }}</option>
                                        <option value="windows10">{{ __('windows 8 ') }}</option>
                                             </optgroup>
                                        <option value="Lunix">{{ __('Lunix') }}</option>
                                        <option value="MacOs">{{ __('MacOs') }}</option>
                                        <option value="VMware">{{ __('VMware') }}</option>
                                        
                                    </select>
                                </div>
                                
                            </div>


                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('antivirus  ') }}</label>
                                    <input type="text" name="antivirus  " class="form-control">
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Categorie  ') }}</label>
                                    <input type="text" name="Categorie  " class="form-control">
                                </div>
                                
                            </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Bureau') }}</label>
                                    <input type="text" name="Bureau  " class="form-control">
                                </div>
                                
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Departement') }}</label>
                                    <input type="text" name="Departement  " class="form-control">
                                </div>
                                
                            </div>


                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Personne') }}</label>
                                    <input type="text" name="Personne  " class="form-control">
                                </div>
                                
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('date_inventaire ') }}</label>
                                    <input type="text" name="date_inventaire   " class="form-control">
                                </div>
                                
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('date_affectation ') }}</label>
                                    <input type="text" name="date_affectation  " class="form-control">
                                </div>
                                
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Etat_Materiel ') }}</label>
                                     <select name="etat " class="form-control">
                                        <option value="EN BON ETAT">{{ __('EN BON ETAT') }}</option>
                                        <option value="EN MAUVAIS ETAT">{{ __('EN MAUVAIS ETAT') }}</option>
                                        <option value="EN REPARATION">{{ __('EN REPARATION') }}</option>
                                        <option value="HORS SERVICE">{{ __('HORS SERVICE') }}</option>
                                      
                                    </select>
                                </div>
                                
                            </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('DURETE') }}</label>
                                    <select name="etat " class="form-control">
                                        <option value="ENCIEN">{{ __('ENCIEN') }}</option>
                                        <option value="NOUVEAU">{{ __('NOUVEAU') }}</option>
                                        
                                      
                                    </select>
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