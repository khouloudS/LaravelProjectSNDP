@extends('layouts.main')

@section('content')

    <section class="content">
        <div class="row">

            <!-- left column -->
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Détails promotion</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa  fa-building-o margin-r-5"></i> Pourcentage</strong>

                        <p class="text-muted">
                            {{ $promotion->pourcentage }}
                        </p>

                        <hr>

                        <strong><i class="fa  fa-usd margin-r-5"></i> Prix final</strong>

                        <p class="text-muted">
                            {{ $promotion->prixfinal }}
                        </p>
                        <hr>

                        <strong><i class="fa  fa-calendar-check-o margin-r-5"></i> Date début</strong>

                        <p class="text-muted">
                            {{ $promotion->datedebut }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-calendar-times-o margin-r-5"></i> Date fin</strong>

                        <p class="text-muted">
                            {{ $promotion->datefin }}
                        </p>

                        <hr>

                        <strong><i class="fa  fa-map-o margin-r-5"></i> Station</strong>

                        <p class="text-muted">
                            {{ $promotion->station->nom }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Produit</strong>

                        <p class="text-muted">
                            {{ $promotion->product->nom }}
                        </p>

                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </section>

@endsection