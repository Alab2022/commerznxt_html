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


/**
 * Create a constructor for sparklines that takes some sensible defaults and merges in the individual
 * chart options. This function is also available from the jQuery plugin as $(element).highcharts('SparkLine').
 */
 Highcharts.SparkLine = function (a, b, c) {
    const hasRenderToArg = typeof a === 'string' || a.nodeName;
    let options = arguments[hasRenderToArg ? 1 : 0];
    const defaultOptions = {
      chart: {
        renderTo: (options.chart && options.chart.renderTo) || (hasRenderToArg && a),
        backgroundColor: null,
        borderWidth: 0,
        type: 'area',
        margin: [2, 0, 2, 0],
        width: 120,
        height: 20,
        style: {
          overflow: 'visible'
        },
        // small optimalization, saves 1-2 ms each sparkline
        skipClone: true
      },
      title: {
        text: ''
      },
      credits: {
        enabled: false
      },
      xAxis: {
        labels: {
          enabled: false
        },
        title: {
          text: null
        },
        startOnTick: false,
        endOnTick: false,
        tickPositions: []
      },
      yAxis: {
        endOnTick: false,
        startOnTick: false,
        labels: {
          enabled: false
        },
        title: {
          text: null
        },
        tickPositions: [0]
      },
      legend: {
        enabled: false
      },
      tooltip: {
        hideDelay: 0,
        outside: true,
        shared: true
      },
      plotOptions: {
        series: {
          animation: false,
          lineWidth: 1,
          shadow: false,
          states: {
            hover: {
              lineWidth: 1
            }
          },
          marker: {
            radius: 1,
            states: {
              hover: {
                radius: 2
              }
            }
          },
          fillOpacity: 0.25
        },
        column: {
          negativeColor: '#910000',
          borderColor: 'silver'
        }
      }
    };
  
    options = Highcharts.merge(defaultOptions, options);
  
    return hasRenderToArg ?
      new Highcharts.Chart(a, options, c) :
      new Highcharts.Chart(options, b);
  };
  
  const start = +new Date(),
    tds = Array.from(document.querySelectorAll('td[data-sparkline]')),
    fullLen = tds.length;
  
  let n = 0;
  
  // Creating 153 sparkline charts is quite fast in modern browsers, but IE8 and mobile
  // can take some seconds, so we split the input into chunks and apply them in timeouts
  // in order avoid locking up the browser process and allow interaction.
  function doChunk() {
    const time = +new Date(),
      len = tds.length;
  
    for (let i = 0; i < len; i += 1) {
      const td = tds[i];
      const stringdata = td.dataset.sparkline;
      const arr = stringdata.split('; ');
      const data = arr[0].split(', ').map(parseFloat);
      const chart = {};
  
      if (arr[1]) {
        chart.type = arr[1];
      }
  
      Highcharts.SparkLine(td, {
        series: [{
          data: data,
          pointStart: 1
        }],
        tooltip: {
          headerFormat: '<span style="font-size: 10px">' + td.parentElement.querySelector('th').innerText + ', Q{point.x}:</span><br/>',
          pointFormat: '<b>{point.y}.000</b> USD'
        },
        chart: chart
      });
  
      n += 1;
  
      // If the process takes too much time, run a timeout to allow interaction with the browser
      if (new Date() - time > 500) {
        tds.splice(0, i + 1);
        setTimeout(doChunk, 0);
        break;
      }
  
      // Print a feedback on the performance
      if (n === fullLen) {
        document.getElementById('result').innerHTML = 'Generated ' + fullLen + ' sparklines in ' + (new Date() - start) + ' ms';
      }
    }
  }
  doChunk();
  