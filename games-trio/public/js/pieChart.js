
fetch("./public/js/pie.json")
    .then((response) => response.json())
    .then((json) => {
        var cc = document.getElementById("pieChart").getContext("2d");
        var pie = Object.entries(json);

        var chart = {
            type: "pie",
            data: {
                labels: [],
                datasets: [{
                    label: "",
                    data: [],
                    backgroundColor:['red','blue'],
                    hoverBackroundColor: ""
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Average Sex",
                    fontsize: 20,
                    padding: 10
                },
                legend: {
                    display: true
                },
                scales: {
                    xAxes: [{}]
                }
            }
        };


        for (var i = 0; i < pie.length; i++) {
            chart.data.labels.push(pie[i][0]);
            chart.data.datasets[0].data.push(pie[i][1]);
        }

        newChart = new Chart(cc, chart);
    });