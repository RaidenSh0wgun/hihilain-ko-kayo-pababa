const random = Math.floor(Math.random() * 3);

const getRandEvent = () => {
    if (random === 0) {
      return 'Marathon';
    } else if (random === 1) {
      return 'Triathlon';
    } else if (random === 2) {
      return 'Pentathlon';
    }
  };
 
  const getTrainingDays = event => {
    if (event === 'Marathon') {
      return 50;
    } else if (event === 'Triathlon') {
      return 100;
    } else if (event === 'Pentathlon') {
      return 200;
    }
  };

  const logEvent = (event, name) => {
    console.log(`${name}'s event is: ${event}`);
  };

  const logTime =  (days, name) => {
    console.log(`${name}'s time to train is: ${days} days`);
  };
  
  const event = getRandEvent();
  const days = getTrainingDays(event);
  const name = 'Nala';
  logEvent(event, name);
  logTime(days, name);