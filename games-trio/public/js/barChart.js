
    var delete1 = null;
    fetch("./public/js/visitors.json")
    .then((response) => response.json())
    .then((json) => {
    var bar = document.getElementById("myChart").getContext("2d");
    var jarr = Object.entries(json);


    var chartt = {
    type: "bar",
    data: {
    labels: [],
    datasets: [{
    label: "",
    data: [],
    backgroundColor: "orange",
    hoverBackroundColor: "orange"
        }]
    },
    options: {
    title: {
    display: true,
    text: "Daily Visitors",
    fontsize: 15,
    padding: 25
    },
    legend: {
    display: true
    },
    scales: {
    xAxes: [{}]
        }
    }
};

    for (var i = 0; i < (jarr.length); i++) {
    chartt.data.labels.push(jarr[i][0]);
    chartt.data.datasets[0].data.push(jarr[i][1]);
    }

    delete1  = new Chart(bar, chartt);

});
    function filterData() {
    fetch("./public/js/visitors.json")
        .then((response) => response.json())
        .then((json) => {
            var filtbar = document.getElementById("myChart").getContext("2d");
            var jsarr = Object.entries(json);

            var startDate = document.getElementById('start_date').value;
            var endDate = document.getElementById('end_date').value;
            const f1  =  startDate.split('.');
            const f2 =   endDate.split('.');

            var filterDate = [];

            var start = new Date(startDate);
            var daay1 = start.getDate();
            var month1 = start.getMonth() + 1;
            start = start.getFullYear() + '.' + month1  + '.' + daay1;

            var  endd = new Date(endDate);
            var daay2 = endd.getDate();
            var month2 = endd.getMonth() + 1;
            endd = endd.getFullYear() + '.' + month2   + '.' + daay2;


            start = new Date(start);
            endd = new Date(endd);
            for (var i = 0; i < (jsarr.length - 1); i++) {
                const check = new Date(jsarr[i][0].split('.').reverse().join('-'));
                if (check.valueOf() >= start.valueOf() && check.valueOf()  <= endd.valueOf()){
                    filterDate.push(jsarr[i]);
                }

            }

            var crt = {
                type: "bar",
                data: {
                    labels: [],
                    datasets: [{
                        label: "",
                        data: [],
                        backgroundColor: "orange",
                        hoverBackroundColor: "orange"
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Daily Visitors",
                        fontsize: 15,
                        padding: 25
                    },
                    legend: {
                        display: true
                    },
                    scales: {
                        xAxes: [{}]
                    }
                }
            };
            for (var i = 0; i < (filterDate.length); i++) {
                crt.data.labels.push(filterDate[i][0]);
                crt.data.datasets[0].data.push(filterDate[i][1]);
            }
            if (delete1 != null ) {
                delete1.destroy();
            }
            delete1  = new Chart(filtbar, crt);
        });
}
