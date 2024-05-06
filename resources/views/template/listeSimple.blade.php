

    @include('template.dashboard')
    <form action="{{route('general.traitementPdf')}}" method="get">
            <div class="content-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /# column -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>Table Bordered</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>idFilm</th>
                                                    <th>nomProduit</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $film as $f )
                                                <tr>

                                                    <td>{{$f->idfilm}}</td>
                                                    <td>{{$f->nomfilm}}</td>

                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="Submit" class="btn mb-1 btn-primary">Exporter Pdf</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
            </div>
        </div>
    </form>
