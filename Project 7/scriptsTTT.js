var turn = "x";

document.addEventListener("click", play());

function play(loc){
    $("#" + turn + loc).css("visibility", "visible");
    $("#back" + loc).prop("onclick", null).off("click");
    if(turn == "x"){
        turn = "o";
    }else{
        turn = "x";
    }
}

function reset(){
    $(".xo").css("visibility", "hidden");
    turn = "x";
}
