let currentdate = new Date();
let datetime = currentdate.getMonth().toPrecision(2)
    + "/" + currentdate.getFullYear() + " @ "
    + currentdate.getHours() + ":"
    + currentdate.getMinutes();
console.log(datetime);