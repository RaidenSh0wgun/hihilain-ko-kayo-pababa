let secretMessage = ['Learning','is','not','about','what','you','get','easily','the','first','time,','it','is','about','what','you','can','figure','out.', '-2015','Chris','Pine','learn','JavaScript'];

let toReplace = ["get", "easily", "the", "first", "time,",];
let newValue = "know,";

let result = [];
for (let i = 0; i < secretMessage.length; i++) {
  if (toReplace.includes(secretMessage[i])) {
    if (result[result.length - 1] !== newValue) {
      result.push(newValue);
    }
  } else {
    result.push(secretMessage[i]);
  }
}
console.log(result.join(" "));