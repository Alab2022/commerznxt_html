// var data = {
//     datasets: [{
//         data: [
//             11,
//             16,
//             7,
//             3,
//             14
//         ],
//         backgroundColor: [
//             "#FF6384",
//             "#4BC0C0",
//             "#FFCE56",
//             "#E7E9ED",
//             "#36A2EB"
//         ],
//         label: 'My dataset' // for legend
//     }],
//     labels: [
//         "Red",
//         "Green",
//         "Yellow",
//         "Grey",
//         "Blue"
//     ]
// };

// var pieOptions = {
//   doughnutlabel: {
//     labels: [{
//       text: '550',
//       font: {
//         size: 20,
//         weight: 'bold'
//       }
//     }, {
//       text: 'total'
//     }]
//   },
//   events: false,
//   animation: {
//     duration: 500,
//     easing: "easeOutQuart",
//     onComplete: function () {
//       var ctx = this.chart.ctx;
//       ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
//       ctx.textAlign = 'center';
//       ctx.textBaseline = 'bottom';

//       this.data.datasets.forEach(function (dataset) {

//         for (var i = 0; i < dataset.data.length; i++) {
//           var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
//               total = dataset._meta[Object.keys(dataset._meta)[0]].total,
//               mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius)/2,
//               start_angle = model.startAngle,
//               end_angle = model.endAngle,
//               mid_angle = start_angle + (end_angle - start_angle)/2;

//           var x = mid_radius * Math.cos(mid_angle);
//           var y = mid_radius * Math.sin(mid_angle);

//           ctx.font = "30px Arial";
//           ctx.fillStyle = '#fff';
//           if (i == 3){ // Darker text color for lighter background
//             ctx.fillStyle = '#444';
//           }
//           var percent = String(Math.round(dataset.data[i]/total*100)) + "%";
//           // var count = dataset.data[i];
//           ctx.fillText(dataset.data[i], model.x + x, model.y + y);
//           // Display percent in another line, line break doesn't work for fillText
//           ctx.fillText(percent, model.x + x, model.y + y + 15);
//         }
//       });               
//     }
//   }
// };

// var pieChartCanvas = $("#pieChart");
// var pieChart = new Chart(pieChartCanvas, {
//   type: 'doughnut', // or doughnut
//   data: data,
//   options: pieOptions
// });

FusionCharts.ready(function(){
  var chartObj = new FusionCharts({
type: 'doughnut2d',
renderAt: 'chart-container',
width: '400',
height: '400',
dataFormat: 'json',
dataSource: {
    "chart": {
        "caption": "Split of Revenue by Product Categories",
        "subCaption": "Last year",
        "numberPrefix": "$",
        "bgColor": "#ffffff",
        "startingAngle": "310",
        "showLegend": "1",
        "defaultCenterLabel": "Total revenue: $64.08K",
        "centerLabel": "Revenue from $label: $value",
        "centerLabelBold": "1",
        "showTooltip": "0",
        "decimals": "0",
        "theme": "fusion",
        "valuePosition":"inside"
    },
    "data": [{
        "label": "Food",
        "value": "28504"
    }, {
        "label": "Apparels",
        "value": "14633"
    }, {
        "label": "Electronics",
        "value": "10507"
    }, {
        "label": "Household",
        "value": "4910"
    }]
}
}
);
  chartObj.render();
});