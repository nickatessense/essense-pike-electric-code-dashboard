<div class="essense-partners-chart">
<div id='<?php echo $chart_slug; ?>' class='bar-chart'></div>
</div>

<script type="text/javascript">

window.addEventListener('load', function() { // wait untill highcharts is loaded from footer
	

	// Create the chart
Highcharts.chart('<?php echo $chart_slug ; ?>', {
    chart: {
        type: 'column'
    },
    title: {
        text: '<?php echo $chart_title ; ?>'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: '',
        },
        tickInterval: 20,
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.0f}%'
            }
        }
    },
    tooltip: {
        pointFormat: '<span>{point.y:.0f}% </span>'
    },

    series: [
        {
            name: "<?php echo $chart_title ; ?>",
            color: '#6DBD68',
            data: [ <?php echo "$data"; ?> ]
        }
    ],
});

});
</script>