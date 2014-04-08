var x = [-7,-7,-7,-16,-55,-1000, -1];
var high_num = x[0];
for(var i = 0; i < x.length; i++){
    if(x[i] > high_num){
     high_num = x[i];   
    }
}
console.log(high_num);
