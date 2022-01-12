var getAPI = fetch("https://test-laravel-cube.herokuapp.com/api/get_users")
    .then((response) => response.json())
    .then((data) => {
        var username = [];
        var count = Array.from(Array(data.length).keys());
        count.fill(100, 0, data.length);
        data.forEach((data) => {
            username.push(data["name"]);
            const email = data["email"];
        });
        var options = {
            chart: {
                type: "bar",
            },
            plotOptions: {
                bar: {
                    distributed: true,
                },
            },
            series: [
                {
                    name: "sales",
                    data: count,
                },
            ],
            xaxis: {
                categories: username,
            },
        };
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    });
