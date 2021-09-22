<?php
/**
 * The class for managing analytics Highcharts in the frontend
 */

if ( !class_exists('highcharts') ){

class HighCharts{

    public $chart_count = 0;

    /**
     * 
     * Function for displaying highchart bar chart in frontend
     * 
     * @param string $chart_title
     * @param array $data - array of arrays with single key and value
     * @param string $data_type - optional, for formatting
     * eg: [ [dataName => data], [ dataName2 => data2], [ dataName3 => data3] ]
     * 
     */
    function displayBarChart($chart_title, $data_count, $data_type=''){

        $data='';
        for($i = 0; $i < $data_count; $i++){
            $random_num = rand(1,100);
            $data .= "{name: 'data_name_$i',y: $random_num},";
        }

        $this->chart_count = $this->chart_count + 1;

        $chart_slug = sanitize_title($chart_title) .'-'.$this->chart_count;

        include get_template_directory() . '/includes/templates/template-bar-chart.php';  

    }

    /**
     * 
     * Function for displaying highchart pie chart in frontend
     * 
     * @param string $chart_title
     * @param array $data - array of arrays with single key and value
     * eg: [ [dataName => data], [ dataName2 => data2], [ dataName3 => data3] ]
     * 
     */
    function displayPieChart($chart_title, $data, $data_type=''){

        $chart_slug = sanitize_title($chart_title);

        //$highcharts_data = $this->generateHighChartsData($data);

        //include ESSENSE_PARTNERS_ANALYTICS_PATH . '/includes/template-pie-chart.php';  

    }

    /**
     * Temp Code used to generate Spider Charts
     * @param string $chartslug - Takes a slug which must be unique  
     * @param array $data - an array of key value pairs, where the key represents the name of the data and value is the num amount
     */
    function generateSpiderChart($chart_slug, $highcharts_data){

        $js_data = '[';
        $categories = '[';
        foreach($highcharts_data as $name => $data){   
            $js_data .= "{ name: '$data[name]', y: $data[value]},";
            $categories .= "'$data[name]',"; 
        }
        $js_data .= ']';
        $categories .= ']';

        include get_template_directory() . '/includes/templates/template-spider-chart.php';  
    }

    /**
     * Temp Code used to generate Line Charts
     * @param string $chartslug - Takes a slug which must be unique  
     * @param array $data - an array of key value pairs, where the key represents the name of the data and value is the num amount
     * @param string $data_format - used to format data in charts, accepts: 'time' 
     * @param string $color - used to specify line color, accepts: 'blue' or 'green' 
     */
    function generateLineChart($chart_slug, $highcharts_data, $data_format = null, $color = 'blue'){

        $js_data = '[';
        $categories = '[';
        foreach($highcharts_data as $name => $data){   
            $js_data .= "{ name: '$name', y: $data},";
            $categories .= "'$name',"; 
        }
        $js_data .= ']';
        $categories .= ']';

        include get_template_directory() . '/includes/templates/template-line-chart.php';  
    }

    function generateSampleData(){
        $highcharts_data = '';
        for($i = 0; $i < 5; $i++){
            $random_num = rand(1, 100);
            $highcharts_data .= "{name:\"data_$i\", y:$random_num},";
        }
    }

    /**
     * 
     * Takes an array of key and values, 
     * and converts the key and values intro highchart data object
     * 
     * key will be the data name and value will be the associated data
     * 
     */
    function generateHighChartsData($data){
        $highcharts_data = [];

        if (!empty($data) && count($data) > 0) {
            foreach($data as $name => $value){
                if ( is_array($value) ) {
                    foreach($value as $data_name => $data_value){

                        if ( !isset( $highcharts_data[$name] ) ) {
                            $highcharts_data[$name] = "{name:\"$data_name\", y:$data_value},";
                        }else{
                            $highcharts_data[$name] .= "{name:\"$data_name\", y:$data_value},";
                        }
                    }
                }else{
                    if ( !isset( $highcharts_data[0] ) ) {
                        $highcharts_data[0] = "{name:\"$name\", y:$value},";
                    }else{
                        $highcharts_data[0] .= "{name:\"$name\", y:$value},";
                    }
                }
            }
        }

        // Cleaning up data
        foreach($highcharts_data as $key => $value){
            // Removing line breaks because they break highcharts js code
            $highcharts_data[$key] = preg_replace( "/\r|\n/", "", $highcharts_data[$key] );
            $highcharts_data[$key] = str_replace( "&#038;", "&", $highcharts_data[$key] );
        }

        return $highcharts_data;
    }

}
}