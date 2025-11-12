class DistanceCalculator {
    constructor(x1, y1) {
        this.x1 = x1;
        this.y1 = y1;
    }

    calculate(x2, y2) {
        const deltaX = x2 - this.x1;
        const deltaY = y2 - this.y1;
        const distance = Math.sqrt(deltaX ** 2 + deltaY ** 2);
        return distance.toFixed(1);
    }
}

const distanceFromOrigin = new DistanceCalculator(0, 0);
const distanceFromPoint = new DistanceCalculator(5, 5);

console.log(`From (0,0) to (30,5): ${distanceFromOrigin.calculate(30, 5)}`);
console.log(`From (0,0) to (8,8): ${distanceFromOrigin.calculate(8, 8)}`);
console.log(`From (0,0) to (-5,-10): ${distanceFromOrigin.calculate(-5, -10)}`);

console.log(`From (5,5) to (10,2): ${distanceFromPoint.calculate(10, 2)}`);
console.log(`From (5,5) to (0,1): ${distanceFromPoint.calculate(0, 1)}`);
console.log(`From (5,5) to (-90,-1): ${distanceFromPoint.calculate(-90, -1)}`);
