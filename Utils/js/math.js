export var a = Math.random() * 10;
export var b = Math.random() * 10;
export var suma = 0;
export var retr = 0;
export var res = 0;
export var divide = 0;


export var addition = function (){
    return suma = a + b;
}

export var retraction = function() {
    if (a < b){
        retr = b - a;
        console.log(retr);
    } else if ((a > b) || (a = b)){
        const err = require('Utils/js/projectLoggerUtility');
        err.logDigitsMisMatch()
    }
}

export var multiplication = function () {
    return res = a * b;
}

export var division = function () {
    var l = require('Utils/js/projectLoggerUtility');

    if ((a < 0) || (b < 0)){
        console.log(l.logDivisionByZeroError());
    } else if ((a > 0) || (b > 0)){
        divide = b / a;
        console.log(divide);
    }
}