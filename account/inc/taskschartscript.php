<script>
    var p1 = <?= $percent_completed; ?>;
    var p2 = <?= $percent_pending; ?>;
    var p3 = <?= $percent_overdue; ?>;
    var options = {
        series: [44, 55, 67, 83],
        chart: { height: 300, type: "radialBar" },
        plotOptions: { radialBar: { hollow: { margin: 10, size: "55%", background: "transparent" }, dataLabels: { name: { fontSize: "18px" }, value: { fontSize: "16px", color: "#50649c" }, total: { show: !0 } }, track: { show: !0 } } },
        colors: ["#7680ff", "#80e6e6", "#7ebcff"],
        stroke: { lineCap: "round" },
        series: [p1, p2, p3],
        labels: ["Completed", "Active", "Overdue"],
        legend: { show: !0, floating: !0, position: "left", offsetX: -10, offsetY: 0 },
        legend: { show: !0, position: "bottom" },
        responsive: [{ breakpoint: 480, options: { legend: { show: !0, floating: !0, position: "left", offsetX: 10, offsetY: 0 } } }],
    },
    chart = new ApexCharts(document.querySelector("#task_status"), options);
    chart.render();

</script>