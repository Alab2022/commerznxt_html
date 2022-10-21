// Data retrieved from https://www.ssb.no/statbank/table/10467/
var chart = Highcharts.chart('chartcon', {

    chart: {
      type: 'column'
    },
  
    title: {
      text: ''
    },
  
    subtitle: {
      text: 'Resize the frame or click buttons to change appearance'
    },
  
    legend: {
      align: 'right',
      verticalAlign: 'middle',
      layout: 'vertical'
    },
  
    xAxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
      labels: {
        x: -10,
        rotation: -45,
      }
    },
  
    yAxis: {
      allowDecimals: false,
      title: {
        text: 'Amount'
      }
    },
  
    series: [{
      name: '2021',
      data: [38, 51, 34, 38, 51, 38, 51, 38],
      dataLabels: {
        enabled: true,
        rotation: -90,
        color: '#FFFFFF',
        align: 'right',
        format: '{point.y:.1f}', // one decimal
        y: 10, // 10 pixels down from the top
        style: {
          fontSize: '13px',
          fontFamily: 'Verdana, sans-serif'
        }
      },
      colors : ['#63719C'],
    }, {
      name: '2022',
      data: [31, 26, 27, 31, 26, 31, 26, 31],
      dataLabels: {
        enabled: true,
        rotation: -90,
        color: '#FFFFFF',
        align: 'right',
        format: '{point.y:.1f}', // one decimal
        y: 10, // 10 pixels down from the top
        style: {
          fontSize: '13px',
          fontFamily: 'Verdana, sans-serif'
        }
      },
      colors : ['#FC8B2A'],
    }],
    plotOptions: {
        column: {
         colorByPoint: true,

        }
      },
      
  
    responsive: {
      rules: [{
        condition: {
          maxWidth: 360
        },
        chartOptions: {
          legend: {
            align: 'center',
            verticalAlign: 'bottom',
            layout: 'horizontal'
          },
          yAxis: {
            labels: {
              align: 'left',
              x: 0,
              y: 0
            },
            title: {
              text: null
            }
          },
          subtitle: {
            text: null
          },
          credits: {
            enabled: false
          }
        }
      }]
    }
  });
  
//   document.getElementById('small').addEventListener('click', function () {
//     chart.setSize(400);
//   });
  
//   document.getElementById('large').addEventListener('click', function () {
//     chart.setSize(600);
//   });
  
//   document.getElementById('auto').addEventListener('click', function () {
//     chart.setSize(null);
//   });