class Math {

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
}