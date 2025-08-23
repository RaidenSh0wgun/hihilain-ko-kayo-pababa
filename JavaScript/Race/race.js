function raceday() {
    const runners = [
        { name: "Nahida", age: 18 },
        { name: "Raiden Ei", age: 25 },
        { name: "Hu tao", age: 19 },
        { name: "Yae Miko", age: 25 }
    ];

    runners.forEach(runner => {
        let raceNumber = Math.floor(Math.random() * 1000);
        let startTime;

        if (runner.age >= 18) {
            raceNumber += 1000;
            startTime = "9:30 am";
        } else {
            startTime = "12:00 pm";
        }

        console.log(
            `${runner.name} (Age: ${runner.age}) - Race Number: ${raceNumber}, Start Time: ${startTime}`
        );
    });
}

raceday();