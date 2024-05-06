@include('template.dashboard')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line chart with area</h4>
                                <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{asset('plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>
    <script >
        let donne = {!! json_encode($donne) !!};
        let lab = donne.map(d=>d.label);
        let don = donne.map(d=>d.donne);
        new Chartist.Line('#chart-with-area', {
            labels: lab,
            series: [don]
        }, {
            low: 0,
            showArea: true,
            plugins: [
            Chartist.plugins.tooltip()
            ]
        });
    </script>
