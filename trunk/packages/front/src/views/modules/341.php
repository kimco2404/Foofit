<div class="type-341">
    <div class="container training">
        <div class="container brochure">
            <div class="row">
                <!--BROCHURE-->
                <div class="magazine-viewport">
                    <div class="container">
                        <div class="magazine">
                            <!-- Next button -->
                            <div ignore="1" class="next-button"></div>
                            <!-- Previous button -->
                            <div ignore="1" class="previous-button"></div>
                        </div>
                    </div>
                </div>
                <div class="flipbook-viewport" style="background:url('');">
                    <div class="container_mag">
                        <div class="flipbook">
                            <div style="background-image:url(front/images/iTDCcatalog_print1.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print2.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print3.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print4.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print5.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print6.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print7.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print8.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print9.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print10.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print11.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print12.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print13.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print14.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print15.jpg)"></div>
                            <div style="background-image:url(front/images/iTDCcatalog_print16.jpg)"></div>
                        </div>
                    </div>
                </div>                
            </div>
            <!--/END BROCHURE-->
        </div>
    </div>
</div>
<script>
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
</script>

