export var logCiticalError = function(){
    var severity = "Critical error";
    console.log("Level: "+severity);
}

export var logError = function(){
    var severity = "Error";
    console.log("Level: "+severity);
}

export var logWarn = function(){
    var severity = "Warning";
    console.log("Level: "+severity);
}

export var logInfo = function(){
    var severity = "Info";
    console.log("Level: "+severity);
}

// Math.js specific messages
export var logDigitsMisMatch = function(){
    var severity = "Critical error";
    var msg = "A cannot be greater than B"
    console.log("Level: "+severity+" || "+msg);
}