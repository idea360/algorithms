x = [12312, 123125456456, 1, 23, 444, 55, 12, 32, 10, 69];
var smallestIndex = null;
var tempSwap = null;

for (var i = 0; i < x.length - 1; i++){
    smallestIndex = i;
    for(var j = i + 1; j < x.length; j++){
        if(x[j] < x[smallestIndex]){
            smallestIndex = j;
        }
    }
    tempSwap = x[smallestIndex];
    x[smallestIndex] = x[i];
    x[i] = tempSwap;
}

print(x);
