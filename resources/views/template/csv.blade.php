@include('template.dashboard')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulaire</h4>
                        <div class="basic-form">
                            <form action="{{route('general.traitementCsv')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Fichier</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" placeholder="File...."name="csv_file">
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn mb-1 btn-primary">Telecharger</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
