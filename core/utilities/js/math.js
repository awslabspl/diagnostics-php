export class Math {

    addition = function (){
        var a = Math.prototype.floor(Math.prototype.random() * 10);
        var b = Math.prototype.floor(Math.prototype.random() * 10);
        var suma = a + b;
        return suma;
    }

    retraction = function() {
        var a = Math.prototype.floor(Math.prototype.random() * 10);
        var b = Math.prototype.floor(Math.prototype.random() * 10);

        if (a < b){
            var retr = b - a;
            console.log(retr);
        } else if ((a > b) || (a = b)){
            const err = require('projectLoggerUtility');
            err.logDigitsMisMatch()
        }
    }

    multiplication = function () {
        var a = Math.prototype.floor(Math.prototype.random() * 10);
        var b = Math.prototype.floor(Math.prototype.random() * 10);
        var res = a * b;
        return res;
    }

    division = function () {
        var a = Math.prototype.floor(Math.prototype.random() * 10);
        var b = Math.prototype.floor(Math.prototype.random() * 10);
        var l = require('projectLoggerUtility');
        var res = 0;

        if ((a < 0) || (b < 0)){
            console.log(l.logDivisionByZeroError());
        } else if ((a > 0) || (b > 0)){
            res = b / a;
            console.log(res);
        }
    }
}