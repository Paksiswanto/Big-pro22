//chart yang ke 1 yang 2 bar 1 line
var options = {
    chart: {
        height: 350,
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
    colors: ['#5957b1', '#2b86f5', '#95c5ff'],
    series: [
      {
        name: 'Masukan',
        type: 'column',
        data: [21.1, 23, 33.1, 34, 44.1, 44.9, 56.5, 58.5]
      },
      {
        name: "Pengeluaran",
        type: 'column',
        data: [10, 19, 27, 26, 34, 35, 40, 38]
      },
      {
        name: "Keuntungan",
        type: 'line',
        data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
      },
    ],
    markers: {
      shape: 'circle',
      size: 6
    },
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
        }
      },
      {
        seriesName: 'Column A',
        show: false
      },
      {
        opposite: true,
        seriesName: 'Line C',
        axisTicks: {
          show: true
        },
        axisBorder: {
          show: true,
        }
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

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
  //chart ke 2 yang 2 bar
  var options = {
    chart: {
        height: 350,
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
        name: 'Pendapatan',
        type: 'column',
        data: [21.1, 23, 33.1, 34, 44.1, 44.9, 56.5, 58.5]
      },
      {
        name: "Biaya",
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
        series: [100, 127, 0],
        labels: ["Rp.1M-Beli Web", "1,27M-Lainnya", "Rp.0-bulanan"],
        colors: ["#5957b1", "#2b86f5", "#63a9ff"],
        legend: {
            horizontalAlign: "left",
            offsetX: -5
        }
    };

    var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
    chart3.render();




   // Ambil elemen progres bar dan elemen teks jumlah hutang dan sisa hutang
    const debtProgressBar = document.getElementById('debtProgressBar');
    const debtAmountText = document.getElementById('debtAmount');
    const remainingDebtAmountText = document.getElementById('remainingDebtAmount');
    const paidDebtAmountText = document.getElementById('paidDebtAmount');

    // Ambil elemen progres bar dan elemen teks jumlah piutang dan sisa piutang
    const receivableProgressBar = document.getElementById('receivableProgressBar');
    const receivableAmountText = document.getElementById('receivableAmount');
    const remainingReceivableAmountText = document.getElementById('remainingReceivableAmount');
    const paidReceivableAmountText = document.getElementById('paidReceivableAmount');

    let totalDebt = 0; // Jumlah total hutang
    let remainingDebt = 0; // Sisa hutang
    let paidDebt = 0; // Jumlah hutang yang telah dibayar

    let totalReceivable = 0; // Jumlah total piutang
    let remainingReceivable = 0; // Sisa piutang
    let paidReceivable = 0; // Jumlah piutang yang telah diterima

    // Fungsi untuk mengatur progres bar dan jumlah hutang
    function setDebtProgressBar() {
      const progressPercentage = (remainingDebt / totalDebt) * 100;
      debtProgressBar.style.width = `${progressPercentage}%`;
      debtAmountText.innerText = `Total Hutang: $${totalDebt}`;
      remainingDebtAmountText.innerText = `Sisa Hutang: $${remainingDebt}`;
      paidDebtAmountText.innerText = `Telah Dibayar: $${paidDebt}`;
    }

    // Fungsi untuk mengatur progres bar dan jumlah piutang
    function setReceivableProgressBar() {
      const progressPercentage = (remainingReceivable / totalReceivable) * 100;
      receivableProgressBar.style.width = `${progressPercentage}%`;
      receivableAmountText.innerText = `Total Piutang: $${totalReceivable}`;
      remainingReceivableAmountText.innerText = `Sisa Piutang: $${remainingReceivable}`;
      paidReceivableAmountText.innerText = `Telah Diterima: $${paidReceivable}`;
    }

    // Fungsi untuk memperbarui nilai hutang dan pembaruan tampilan
    function updateDebt(total, remaining) {
      totalDebt = total;
      remainingDebt = remaining;
      setDebtProgressBar();
    }

    // Fungsi untuk memperbarui nilai piutang dan pembaruan tampilan
    function updateReceivable(total, remaining) {
      totalReceivable = total;
      remainingReceivable = remaining;
      setReceivableProgressBar();
    }

    // Fungsi untuk memperbarui jumlah hutang yang telah dibayar
    function updatePaidDebt(amount) {
      paidDebt = amount;
      paidDebtAmountText.innerText = `Telah Dibayar: $${paidDebt}`;
    }

    // Fungsi untuk memperbarui jumlah piutang yang telah diterima
    function updatePaidReceivable(amount) {
      paidReceivable = amount;
      paidReceivableAmountText.innerText = `Telah Diterima: $${paidReceivable}`;
    }

    // Fungsi untuk membayar hutang
    function payDebt(amount) {
      if (amount <= remainingDebt) {
        remainingDebt -= amount;
        updatePaidDebt(paidDebt + amount);
        setDebtProgressBar();
      } else {
        console.log("Pembayaran melebihi sisa hutang.");
      }
    }

    // Fungsi untuk menerima piutang
    function receiveReceivable(amount) {
      if (amount <= remainingReceivable) {
        remainingReceivable -= amount;
        updatePaidReceivable(paidReceivable + amount);
        setReceivableProgressBar();
      } else {
        console.log("Penerimaan melebihi sisa piutang.");
      }
    }

    // Contoh pemanggilan untuk memperbarui nilai dan pembaruan tampilan
    updateDebt(500, 300);
    updateReceivable(1000, 500);

    // Contoh pemanggilan untuk membayar hutang sejumlah $200
    payDebt(200);

    // Contoh pemanggilan untuk menerima piutang sejumlah $300
    receiveReceivable(300);
