@extends('layouts.main')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des client</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="products-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Cin</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($customers as $customer)

                    <tr>
                        <td>{{ $customer->cin }}</td>
                        <td>{{ $customer->nom }}</td>
                        <td>{{ $customer->prenom }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-primary">Afficher</a>

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
