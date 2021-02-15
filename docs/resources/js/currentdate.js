var currentdate = new Date();
export var dataczas = currentdate.getMonth()
    + "/" + currentdate.getFullYear() + " @ "
    + currentdate.getHours() + ":"
    + currentdate.getMinutes();
console.log("Today is: "+dataczas);

module.exports = dataczas;