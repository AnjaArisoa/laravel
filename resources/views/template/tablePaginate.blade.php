

@include('template.dashboard')
<form action="{{route('general.traitementCsv')}}" method="get">
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>idFilm</th>
                                                <th>nomFilm</th>

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
                                    {{$film->links('pagination::bootstrap-5')}}
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="Submit" class="btn mb-1 btn-primary">Exporter Csv</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


