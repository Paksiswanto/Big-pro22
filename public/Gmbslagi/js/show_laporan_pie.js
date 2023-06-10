 // Chart 3: Pie
     // Chart 3: Pie
     var options3 = {
        chart: {
            height: 300,
            type: "donut",
            toolbar: {
              show: true,
              tools: {
                download: true,
                selection: false,
                zoom: false,
                zoomin: false,
                zoomout: false,
                pan: false,
                reset: false
              },
              exportMenu: {
                csv: false,
                png: false,
                svg: false,
                jpeg: false,
                pdf: false,
                customItems: [{
                  title: 'Download',
                  iconClass: 'fas fa-download',
                  onclick: function () {
                    // Logika yang dijalankan saat opsi "Download" diklik
                    console.log('Download clicked');
                  }
                }]
              }
            }
          },
        series: [44, 55, 13, 33, 20],
        labels: ["Apple", "Mango", "Orange", "Banana", "Pineapple"],
        colors: ["#5957b1", "#2b86f5", "#63a9ff", "#95c5ff", "#c6e0ff"],
        legend: {
            horizontalAlign: "left",
            offsetX: -5
        }
    };

    var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
    chart3.render();

  //chart ke 2 yang 2 bar
  var options = {
    chart: {
        height: 300,
        type: "line",
        toolbar: {
          show: true,
          tools: {
            download: true,
            selection: false,
            zoom: false,
            zoomin: false,
            zoomout: false,
            pan: false,
            reset: false
          },
          exportMenu: {
            csv: false,
            png: false,
            svg: false,
            jpeg: false,
            pdf: false,
            customItems: [{
              title: 'Download',
              iconClass: 'fas fa-download',
              onclick: function () {
                // Logika yang dijalankan saat opsi "Download" diklik
                console.log('Download clicked');
              }
            }]
          }
        }
      },
    dataLabels: {
      enabled: false
    },
    colors: ['#5957b1', '#2b86f5'],
    series: [

      {
        name: 'Column A',
        type: 'column',
        data: [21.1, 23, 33.1, 34, 44.1, 44.9, 56.5, 58.5]
      },
      {
        name: "Column B",
        type: 'column',
        data: [10, 19, 27, 26, 34, 35, 40, 38]
      },
    ],
    stroke: {
      width: [4, 4, 4]
    },
    plotOptions: {
      bar: {
        columnWidth: "20%"
      }
    },
    xaxis: {
      categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016]
    },
    yaxis: [
      {
        seriesName: 'Column A',
        axisTicks: {
          show: true
        },
        axisBorder: {
          show: true,
        },
        title: {
          text: "Columns"
        }
      },
      {
        seriesName: 'Column A',
        show: false
      }
    ],
    tooltip: {
      shared: false,
      intersect: true,
      x: {
        show: false
      }
    },
    legend: {
      horizontalAlign: "left",
      offsetX: 40
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);

  chart.render();



  new TomSelect('#ex-caret-position',{
	plugins: ['caret_position','input_autogrow'],
});
