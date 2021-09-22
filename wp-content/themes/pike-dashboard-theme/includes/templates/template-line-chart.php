 <div id="<?php echo $chart_slug; ?>"></div>


<script type="text/javascript">
    window.addEventListener('load', function(){

        let series_data = <?php echo $js_data; ?>;
        let categories = <?php echo $categories; ?>;

        Highcharts.chart('<?php echo $chart_slug; ?>', {
            chart: {
                spacing: 0,
                margin: [30,30,30,70],
                backgroundColor: 'transparent',
                height: '50%',
            },
            title: {
                text: "",
            },
            xAxis:{
                categories: categories,
            },
            yAxis : {
                title : {
                    text : ''
                },
                offset:10,
                gridLineColor: 'rgba(0,0,0,0.1)',
                gridLineWidth: 1,
                tickPixelInterval: 50,
                <?php if ($data_format == 'time') { ?>
                labels: {
                    formatter: function(){
                        return new Date(this.value * 1000).toISOString().substr(11, 8);;
                    }
                }
                <?php } ?>
            },
            legend:{
                enabled: false,
            },
            plotOptions: {
                series: {
                    pointPlacement: 'on',
                }
            },
            tooltip:{
                backgroundColor: '#002a39',
                style: {
                    color: '#fff',
                },
                <?php if ($data_format == 'time') { ?>
                formatter: function(){
                    return new Date(this.y * 1000).toISOString().substr(11, 8);;
                },
                <?php }else{ ?>

                    formatter: function(){
                        return this.y;
                    },

                <?php } ?>
            },
            series: [
                {
                    name: '',
                    data: series_data,
                    type : "area",
                    <?php
                        if ($color == 'green') {
                            echo "color: 'rgba(109, 189, 104, 1)',";
                        }else{
                            echo "color: 'rgba(64, 177, 229,1)',";
                        }
                    ?>
                    
                    fillColor : {
                      linearGradient : [0, 0, 0, 300],
                      stops : [

                        <?php if ($color == 'green') {
                            echo "[0, 'rgba(109, 189, 104, 1)'],
                            [.7, 'rgba(255, 255, 255, 0.1)'],
                            [1, 'rgba(255, 255, 255, 0)']";
                        }else{
                            echo "[0, 'rgba(64, 177, 229,1)'],
                            [.7, 'rgba(255, 255, 255, 0.1)'],
                            [1, 'rgba(255, 255, 255, 0)']";
                        } ?>
                      ]
                    },
                }
            ],
        });
    });
</script>