@extends('layouts.main')

@section('content')

    <section class="content">
        <div class="row">

            <!-- left column -->
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Détails gérant</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-pencil margin-r-5"></i> Nom</strong>

                        <p class="text-muted">
                            {{ $manager->nom}}
                        </p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Prénom</strong>

                        <p class="text-muted">
                            {{ $manager->prenom }}
                        </p>
                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Adresse</strong>

                        <p class="text-muted">
                            {{ $manager->adresse }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

                        <p class="text-muted">
                            {{ $manager->phone }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> Identifiant</strong>

                        <p class="text-muted">
                            {{ $manager->login }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> Mot de passe</strong>

                        <p class="text-muted">
                            {{ $manager->passe }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-o margin-r-5"></i> Station</strong>

                        <p class="text-muted">
                            {{ $manager->station->nom }}
                        </p>

                        <hr>


                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </section>

@endsection