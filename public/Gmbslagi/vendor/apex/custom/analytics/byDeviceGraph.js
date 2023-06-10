var options = {
  chart: {
    height: 310,
    type: 'donut',
  },
  labels: ['Desktop', 'Tablet', 'Mobile'],
  series: [60000, 45000, 15000],
  legend: {
    position: 'bottom',
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 8,
    colors: ['#ffffff'],
  },
  colors: ['#5957b1', '#f26861', '#a2a2a2'],
  tooltip: {
    y: {
      formatter: function(val) {
        return  "$" + val
      }
    }
  },
}
var chart = new ApexCharts(
  document.querySelector("#byDevice"),
  options
);
chart.render();