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
                        <h3 class="box-title">Modifier produit</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('products.update', $product->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input value="{{ $product->nom }}" type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <label for="categorie">Categorie</label>
                                <input value="{{ $product->categorie }}" type="text" class="form-control" name="categorie" id="categorie" placeholder="Categorie">
                            </div>

                            <div class="form-group">
                                <label for="marque">Marque</label>
                                <input value="{{ $product->marque }}" type="text" class="form-control" name="marque" id="marque" placeholder="Marque">
                            </div>

                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <input value="{{ $product->prix }}" type="text" class="form-control" name="prix" id="prix" placeholder="Prix">
                            </div>

                            <div class="form-group">
                                <label for="quantite">quantite</label>
                                <input value="{{ $product->quantite }}" type="text" class="form-control" name="quantite" id="quantite" placeholder="Quantite">
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