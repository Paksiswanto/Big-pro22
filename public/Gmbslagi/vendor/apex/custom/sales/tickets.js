var options = {
  chart: {
    height: 232,
    type: 'donut',
  },
  labels: ['New', 'Resolved', 'Pending'],
  series: [60000, 45000, 15000],
  legend: {
    position: 'bottom',
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 2,
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
  document.querySelector("#tickets"),
  options
);
chart.render();