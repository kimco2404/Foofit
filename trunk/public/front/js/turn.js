var oTurn = $(".flipbook").turn({
    width: 960,
    height: 338,
    elevation: 50,
    gradients: true,
    autoCenter: true,
    next: true
});

$("#prev").click(function (e) {
    e.preventDefault();
    oTurn.turn("previous");
});

$("#next").click(function (e) {
    e.preventDefault();
    oTurn.turn("next");
});
