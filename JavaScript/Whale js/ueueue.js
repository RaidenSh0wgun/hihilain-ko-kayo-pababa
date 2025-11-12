let input = "turpentine and turtles";
let vowels = ['a', 'e', 'i', 'o', 'u'];
let resultArray = [];

for (let i = 0; i < 20; i++) {
  let currentLetter = input[i] ;

  if (vowels.includes(currentLetter)) {
    if (currentLetter === 'e' || currentLetter === 'u') {
      resultArray.push(currentLetter, currentLetter);
    } else {
      resultArray.push(currentLetter);
    }
  }
}

console.log(resultArray.join('').toUpperCase());