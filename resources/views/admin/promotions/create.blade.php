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
                        <h3 class="box-title">Nouvelle promotion</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('promotions.store', $product->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="pourcentage">Pourcentage</label>
                                <input type="text" class="form-control" name="pourcentage" id="pourcentage" placeholder="Pourcentage">
                            </div>


                            <div class="form-group">
                                <label for="datedebut">Date début</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control pull-right" name="datedebut" id="datedebut">
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="datefin">Date fin</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" name="datefin" id="datefin">
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