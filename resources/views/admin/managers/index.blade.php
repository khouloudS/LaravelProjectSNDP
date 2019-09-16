@extends('layouts.main')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des gérants</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="products-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Phone</th>
                    <th>Identifiant</th>
                    <th>Mot de passe</th>
                    <th>Station</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($managers as $manager)

                    <tr>
                        <td>{{ $manager->nom }}</td>
                        <td>{{ $manager->prenom }}</td>
                        <td>{{ $manager->adresse }}</td>
                        <td>{{ $manager->phone }}</td>
                        <td>{{ $manager->login }}</td>
                        <td>{{ $manager->passe }}</td>
                        <td>{{ $manager->station->nom }}</td>
                        <td>
                            <a href="{{ route('managers.show', $manager->id) }}" class="btn btn-primary">Afficher</a>
                            <a href="{{ route('managers.edit', $manager->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('managers.delete', $manager->id) }}" class="btn btn-danger">Supprimer</a>
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
