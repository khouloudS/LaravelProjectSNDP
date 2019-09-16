@extends('layouts.main')

@section('content')

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modifier gerant</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('managers.update', $manager->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input value="{{ $manager->nom }}" type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input value="{{ $manager->prenom }}" type="text" class="form-control" name="prenom" id="prenom" placeholder="Categorie">
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input value="{{ $manager->adresse }}" type="text" class="form-control" name="adresse" id="adresse" placeholder="Marque">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input value="{{ $manager->phone }}" type="text" class="form-control" name="Phone" id="phone" placeholder="Prix">
                            </div>
                            <div class="form-group">
                                <label for="login">Identifiant</label>
                                <input  value="{{ $manager->login }}" type="text" class="form-control" name="login" id="login" placeholder="Identifiant">
                            </div>

                            <div class="form-group">
                                <label for="passe">Mot de passe</label>
                                <input  value="{{ $manager->passe }}" type="text" class="form-control" name="passe" id="passe" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <label>Station</label>
                                <select class="form-control select2" style="width: 100%;" name="station_id" id="station_id">
                                    @foreach(App\Station::all() as $station)
                                        <option value="{{$station->id}}">{{$station->nom}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Confirmer</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->

            </div>
        </div>
    </section>



@endsection