@include('template.dashboard')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie chart with custom labels</h4>
                                <div id="pie-chart" class="ct-chart ct-golden-section"></div>
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
        var data = {
            labels: ['Bananas', 'Apples', 'Grapes','rrr'],
            series: [15, 15, 40,5]
        };

        var options = {
            labelInterpolationFnc: function(value) {
            return value[0]
            }
        };

        var responsiveOptions = [
            ['screen and (min-width: 640px)', {
            chartPadding: 30,
            labelOffset: 100,
            labelDirection: 'explode',
            labelInterpolationFnc: function(value) {
                return value;
            }
            }],
            ['screen and (min-width: 1024px)', {
            labelOffset: 80,
            chartPadding: 20
            }]
        ];

        new Chartist.Pie('#pie-chart', data, options, responsiveOptions);
    </script>
