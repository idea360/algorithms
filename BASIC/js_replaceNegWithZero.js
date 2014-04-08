var x = [1, 5, 10, 1, -3, -6, 123];

for(var i =0; i < x.length; i++){
    if(x[i] < 0){
        x[i] = 0;
    }
}

console.log(x);
