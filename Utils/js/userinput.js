export function openThisWeb(){
    var okno = window.prompt("Podaj strone docelowa ( bez https:// ) :");
    window.open("https://" + okno);
}

function reload(){
    window.reload();
}