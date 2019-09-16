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
                        <h3 class="box-title">Modifier promotion d'un produit</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('promotions.update', $promotion->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="pourcentage">Pourcentage</label>
                                <input value="{{ $promotion->pourcentage }}" type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <label for="prixfinal">prix final</label>
                                <input value="{{ $promotion->prixfinal }}" type="text" class="form-control" name="prixfinal" id="prixfinal" placeholder="Prix final">
                            </div>

                            <div class="form-group">
                                <label for="datedebut">Date début</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input value="{{ $promotion->datedebut }}" type="text" class="form-control pull-right" id="datedebut">
                                </div>

                                <div class="form-group">
                                    <label for="datefin">Date fin</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input value="{{ $promotion->datefin }}" type="text" class="form-control pull-right" id="datefin">
                                    </div>


                           <!-- <div class="form-group">
                                <label for="station">Station</label>
                                <input value="{{ $promotion->station->nom }}" type="text" class="form-control" name="nom" id="station" placeholder="Station">
                            </div>-->
                                    <div class="form-group">
                                        <label>Station</label>
                                        <select class="form-control select2" style="width: 100%;" name="station_id" id="station_id">
                                            @foreach(App\Station::all() as $station)
                                                <option value="{{$station->id}}">{{$station->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                            <div class="form-group">
                                <label for="product">Produit</label>
                                <input value="{{ $promotion->product->nom }}" type="text" class="form-control" name="nom" id="product" placeholder="Produit">
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