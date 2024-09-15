let result, a, b;

result = (a + b < 4 ) ? 'below': 'over';

function arrayDiff(firstArray, secondArray) {
  let i,j;
  let elementIndex = -1;
  for (i=0; i < secondArray.length; i++) {
    for (j = 0; j < firstArray.length; j++) {
      elementIndex = firstArray.indexOf(secondArray[i]);
      if ( elementIndex != -1 ) {
        firstArray.splice(elementIndex, 1);
      }
      //console.debug({'secondArrayI': secondArray[i], 'elementIndex' : elementIndex, 'j': j, 'count': count});
    }
  }
  return firstArray;
}
// best solution
function arrayDiff2(a, b) {
  return a.filer(e => !b.includes(e));
}
console.log(arrayDiff([1,2],[1]));
console.log(arrayDiff([1,2,2,2,3],[2]));
console.log(arrayDiff([1,2,2,2,3],[2]));
