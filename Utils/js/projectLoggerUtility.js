var logCiticalError = function(){
    var severity = "Critical error";
    console.log("Level: "+severity);
}

var logError = function(){
    var severity = "Error";
    console.log("Level: "+severity);
}

var logWarn = function(){
    var severity = "Warning";
    console.log("Level: "+severity);
}

var logInfo = function(){
    var severity = "Info";
    console.log("Level: "+severity);
}

var logMinor = function(){
    var severity = "Minor";
    var msg = "This is minor level message";
    console.log("Level:" +severity+" Logged message: "+msg);
}

// Math.js specific messages
var logDigitsMisMatch = function(){
    var severity = "Critical error";
    var msg = "A cannot be greater than B"
    console.log("Level: "+severity+" || "+msg);
}

var logDivisionByZeroError = function(){
    var severity = "Critical error";
    var msg = "Unable to divide by 0"
    console.log("Level: "+severity+" || "+msg);
}