export var a = Math.prototype.floor(Math.prototype.random() * 10);
export var b = Math.prototype.floor(Math.prototype.random() * 10);

export var addition = function (){
    var suma = a + b;
    return suma;
}

export var retraction = function() {
    if (a < b){
        var retr = b - a;
        console.log(retr);
    } else if ((a > b) || (a = b)){
        const err = require('projectLoggerUtility');
        err.logDigitsMisMatch()
    }
}

export var multiplication = function () {
    var res = a * b;
    return res;
}

export var division = function () {
    var l = require('projectLoggerUtility');
    var res = 0;

    if ((a < 0) || (b < 0)){
        console.log(l.logDivisionByZeroError());
    } else if ((a > 0) || (b > 0)){
        res = b / a;
        console.log(res);
    }
}