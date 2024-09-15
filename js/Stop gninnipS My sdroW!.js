/* Stop gninnipS My sdroW!
https://www.codewars.com/kata/5264d2b162488dc400000001/javascript
*/
const prueba = 'This is a test';
const stringTest1 = "Hey fellow warriors";
const stringTest2 = "This is another test";

function katawithMap(string) {
  return string.split(/\s+/).map(e => (e.length > 4)? Array.from(e).reverse().join(''): e).join(' ');
}
console.log(katawithMap(prueba), katawithMap(stringTest1), katawithMap(stringTest2));