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
                        <h3 class="box-title">Nouveau gérant</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('managers.store') }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
                            </div>

                            <div class="form-group">
                                <label for="prix">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <label for="login">Identifiant</label>
                                <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant">
                            </div>

                            <div class="form-group">
                                <label for="passe">Mot de passe</label>
                                <input type="text" class="form-control" name="passe" id="passe" placeholder="Mot de passe">
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