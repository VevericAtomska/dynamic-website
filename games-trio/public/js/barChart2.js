var delete2 = null;
fetch("./public/js/monthlyVisitors.json")
    .then((response) => response.json())
    .then((json) => {
        var cr = document.getElementById("myChart2").getContext("2d");
        var jdat = Object.entries(json);

        var dat = {
            type: "bar",
            data: {
                labels: [],
                datasets: [{
                    label: "",
                    data: [],
                    backgroundColor: "yellow",
                    hoverBackroundColor: "yellow"
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Monthly Visitors",
                    fontsize: 20,
                    padding: 15
                },
                legend: {
                    display: true
                },
                scales: {
                    xAxes: [{}]
                }
            }
        };


        for (var i = 0; i < (jdat.length); i++) {
            dat.data.labels.push(jdat[i][0]);
            dat.data.datasets[0].data.push(jdat[i][1]);
        }

        delete2  = new Chart(cr, dat);
    });
