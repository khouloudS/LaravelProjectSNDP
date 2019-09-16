@extends('layouts.main')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des promotions</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="products-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix inital</th>
                    <th>Pourcentage</th>
                    <th>Prix final</th>
                    <th>Station</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($promotions as $promotion)
                    <tr>
                        <td>{{ $promotion->product->nom }}</td>
                        <td>{{ $promotion->product->prix }}</td>
                        <td>{{ $promotion->pourcentage }}</td>
                        <td>{{ $promotion->prixfinal }}</td>
                        <td>{{ $promotion->station->nom }}</td>
                        <td>
                            <a href="{{ route('promotions.show', $promotion->id) }}" class="btn btn-primary">Afficher</a>
                            <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('promotions.delete', $promotion->id) }}" class="btn btn-danger">Supprimer</a>
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
