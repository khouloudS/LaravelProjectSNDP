@extends('layouts.main')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('promotions.create', $product->id) }}" class="btn btn-success">Ajouter une promotion</a>
            </div>

            <!-- left column -->
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Détails produit</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-pencil margin-r-5"></i> Nom</strong>

                        <p class="text-muted">
                            {{ $product->nom }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-list margin-r-5"></i> Catégorie</strong>

                        <p class="text-muted">
                            {{ $product->categorie }}
                        </p>
                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Marque</strong>

                        <p class="text-muted">
                            {{ $product->marque }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-usd margin-r-5"></i> Prix</strong>

                        <p class="text-muted">
                            {{ $product->prix }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Quantité</strong>

                        <p class="text-muted">
                            {{ $product->quantite }}
                        </p>

                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </section>

@endsection