/*
  Descending Order
  https://www.codewars.com/kata/5467e4d82edf8bbf40000155/javascript
*/


function (integer) {
 return parseInt(Array.from(String(integer)).sort((a,b) => b-a).join('')); 
}