@extends('layouts.main')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des produits</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="products-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)

                    <tr>
                        <td>{{ $product->nom }}</td>
                        <td>{{ $product->categorie }}</td>
                        <td>{{ $product->marque }}</td>
                        <td>{{ $product->prix }}</td>
                        <td>{{ $product->quantite }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Afficher</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
                <tfoot>

                </tfoot>
            </table>

        </div>
    </div>

@endsection

@section('js')

    <script src="{{ asset('theme/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script>
        $('#products-table').DataTable();
    </script>

@endsection
