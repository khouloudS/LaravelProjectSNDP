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
                        <strong><i class="fa fa-book margin-r-5"></i> CIN</strong>

                        <p class="text-muted">
                            {{ $customer->cin}}
                        </p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Nom</strong>

                        <p class="text-muted">
                            {{ $customer->nom }}
                        </p>
                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Prénom</strong>

                        <p class="text-muted">
                            {{ $customer->prenom }}
                        </p>

                        <hr>

                        <strong><i class="fa  fa-phone margin-r-5"></i> Phone</strong>

                        <p class="text-muted">
                            {{ $customer->phone }}
                        </p>

                        <hr>


                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </section>

@endsection