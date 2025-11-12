const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

function playRound(player1, player2) {
  if (player1 === player2) {
    return "It's a tie!";
  } else if (
    (player1 === "rock" && player2 === "scissors") ||
    (player1 === "paper" && player2 === "rock") ||
    (player1 === "scissors" && player2 === "paper")
  ) {
    return "Player 1 wins!";
  } else {
    return "Player 2 wins!";
  }
}

rl.question("Player 1, choose rock, paper, or scissors: ", function(answer1) {
  const player1 = answer1.trim().toLowerCase();
  rl.question("Player 2, choose rock, paper, or scissors: ", function(answer2) {
    const player2 = answer2.trim().toLowerCase();

    console.log(`Player 1: ${player1}`);
    console.log(`Player 2: ${player2}`);
    console.log(playRound(player1, player2));

    rl.close();
  });
});