var data = [
    ['eu', 12],
    ['oc', 3],
    ['af', 2],
    ['as', 3],
    ['na', 15],
    ['sa', 8]
];

Highcharts.mapChart('container', {
    chart: {
        map: 'custom/world-continents'
    },

    

    series: [{
        data: data,
        name: '',
        states: {
            hover: {
                color: '#FFDE65'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});
