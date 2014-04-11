x = [12,33,531,5,1,23,4,785,12345,11135];
var temp = null;

for (i = x.length - 1; i >= 0; i--){
    for(j = 0; j < i; j++){
        if(x[i] < x[j]){
            temp = x[i];
            x[i] = x[j];
            x[j] = temp;
        }
    }
}

console.log(x);
