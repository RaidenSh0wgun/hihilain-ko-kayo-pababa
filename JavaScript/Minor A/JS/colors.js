const readline = require("readline");

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function isValidColor(color) {
    // Expanded list of valid colors
    const validColors = ['red', 'green', 'blue', 'yellow', 'white'];
    return validColors.includes(color.toLowerCase());
}

function mixColors(color1, color2) {
    const c1 = color1.toLowerCase();
    const c2 = color2.toLowerCase();
    
    if (!isValidColor(c1) || !isValidColor(c2)) {
        return 'No Data';
    }
    
    if (c1 === c2) {
        return c1.charAt(0).toUpperCase() + c1.slice(1);
    }
    
    // Original 3 mixes
    if ((c1 === 'red' && c2 === 'blue') || (c1 === 'blue' && c2 === 'red')) {
        return 'Magenta';
    }
    if ((c1 === 'blue' && c2 === 'green') || (c1 === 'green' && c2 === 'blue')) {
        return 'Cyan';
    }
    if ((c1 === 'green' && c2 === 'red') || (c1 === 'red' && c2 === 'green')) {
        return 'Yellow';
    }

    if ((c1 === 'red' && c2 === 'yellow') || (c1 === 'yellow' && c2 === 'red')) {
        return 'Orange';
    }
    if ((c1 === 'blue' && c2 === 'red') || (c1 === 'red' && c2 === 'blue')) {
        return 'Purple';
    }
    if ((c1 === 'red' && c2 === 'white') || (c1 === 'white' && c2 === 'red')) {
        return 'Pink';
    }
    
    return 'No Data';
}

function colorMixer() {
    rl.question("Enter color 1: ", (color1) => {
        rl.question("Enter color 2: ", (color2) => {
            const result = mixColors(color1, color2);

            if (result === "No Data") {
                console.log(`${color1.toLowerCase()} + ${color2.toLowerCase()} = ${result}`);
            } else {
                console.log(`${color1.toUpperCase()} + ${color2.toUpperCase()} = ${result}`);
            }

            rl.close();
        });
    });
}

colorMixer();

