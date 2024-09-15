/*

  Replace with Alphabet Position
  https://www.codewars.com/kata/546f922b54af40e1e90001da/train/javascript
*/
const testString1 = "The sunset sets at twelve o' clock.";
const testString2 = "The narwhal bacons at midnight.";

function alphabetPosition(text) {
  const alphabet = 'abcdefghijklmnopqrstuvwxyz';

  return Array.from(text.toLowerCase()).map((e) => 
    alphabet.indexOf(e) != -1?String(alphabet.indexOf(e)+1):false).filter(Boolean).join(' ');
}

console.log(alphabetPosition(testString1));