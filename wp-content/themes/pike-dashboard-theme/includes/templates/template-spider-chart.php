<div class="essense-partners-chart">
<div id='<?php echo $chart_slug; ?>' class='spider-chart'></div>
</div>


<script type="text/javascript">
    window.addEventListener('load', function() {
        
        let highchart_data = <?php echo json_encode($highcharts_data); ?>;

        let series_data = <?php echo $js_data; ?>;

        let categories = <?php echo $categories; ?>;

        Highcharts.chart('<?php echo $chart_slug; ?>', {
            chart: {
                polar: true,
                type: 'area',
                margin: 50
            },
            title: {text: ''},
            xAxis: {
                categories: categories,
                 labels: {
                    useHTML: true,
                    formatter(){
                        if ( highchart_data[this.value] ) {
                            let temp_data = highchart_data[this.value];

                            let returnFormat = '<div class="spider-chart-data">';
                            returnFormat += '<span class="spider-chart-name">'+temp_data.name+'</span>';
                            returnFormat += '<span class="spider-chart-value">'+temp_data.value+'</span>';

                            if (temp_data['tooltip'].length > 0) {
                                returnFormat += '<div class="tooltip">';
                                returnFormat += '<img src="<?php echo get_template_directory_uri() . '/assets/images/question-circle.svg'?>">';
                                returnFormat += '<div class="tooltip-text"><p>'+temp_data['tooltip']+'</p></div>';
                                returnFormat += "</div>";


                            }

                            returnFormat += '<div>';

                            return returnFormat;
                        }
                   },
                },
                tickmarkPlacement: 'on',
                lineWidth: 0
            },
            yAxis: {
                gridLineInterpolation: 'polygon',
                gridLineColor: 'lightgrey',
                lineWidth: 1,
                tickInterval: 25,
                labels:{
                    enabled: false,
                },
                 plotLines: [{
                    color: '#002a39',
                    width: 2,
                    value: 100,
                    zIndex: 2,
                }]
            },
            tooltip: {
                enabled:false,
                // shared: true,
                // pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
            },
            legend: {
               enabled: false,
            },
            series: [
                {
                    name: '',
                    data: series_data,
                    pointPlacement: 'on',
                    color: 'rgba(64, 177, 229,1)',
                    fillColor: 'rgba(64, 177, 229,.1)',
                }
            ],
        });

    })
</script>