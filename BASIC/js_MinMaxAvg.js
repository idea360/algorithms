var x = [1, 5, 10, 1, -3, -6, 123];
var min = x[0];
var max = x[0];
var sum = 0;

for(var i =0; i < x.length; i++){
    //max
    if(x[i] > max){
        max = x[i];
    }
    if(x[i] < min){
        min = x[i];
    }
    sum+=x[i];
}

console.log("Min Val is" + min);
console.log("Max Val is:" + max);
console.log("Sum is: " + sum);
