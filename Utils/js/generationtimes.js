const timerStart = Date.now();
$(document).ready(function() {
    console.log("Time until ready: ", Date.now()-timerStart);
});
export var pageloadtime = $(window).load(function() {
    //console.log("Time until everything loaded: ", Date.now()-timerStart);
    if (typeof pageloadtime === 'function'){
        document.write(Date.now() - timerStart);
    }
    return pageloadtime.toString();
});