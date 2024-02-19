import $ from 'jquery';
import ApexCharts from 'apexcharts'

visitors();

function visitors() {
    const options = {
        series: [
          {
            name: "Total Visits",
            data: [50, 20, 23, 12, 45, 21, 34, 23],
          },
        ],
      
        chart: {
          type: "area",
          height: 350,
          zoom: {
            enabled: true,
          },
        },
        dataLabels: {
          enabled: true,
        },
        stroke: {
          curve: "smooth",
        },
        title: {
          text: "Site Visitors",
          align: "left",
        },
        subtitle: {
          text: "Number of visits per month",
          align: "left",
        },
        labels: [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
        ],
        
        legend: {
          horizontalAlign: "right",
        },
        colors: ["#38bdf8"],
        dropShadow: {
            enabled: true,
            top: 0,
            left: 0,
            blur: 3,
            opacity: 0.5
          }
    };
      
    const chart = new ApexCharts(document.querySelector("#performance-chart"), options);
    chart.render();
}