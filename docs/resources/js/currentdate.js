let currentdate = new Date();
let datetime = currentdate.getMonth()
    + "/" + currentdate.getFullYear() + " @ "
    + currentdate.getHours() + ":"
    + currentdate.getMinutes();
console.log("Today is: "+datetime);

module.exports = datetime;