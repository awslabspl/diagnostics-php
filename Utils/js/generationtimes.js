const timerStart = Date.now();
$(document).ready(function() {
    console.log("Time until ready: ", Date.now()-timerStart);
});
var pageloadtime = $(window).load(function() {
    //console.log("Time until everything loaded: ", Date.now()-timerStart);
    document.write(Date.now() - timerStart);
});