</div>
<!--End Fluid Container -->


<footer class="text-center" id="footer">
    &copy; Copyright 2016 Root Cave Ecommerce
</footer>


<script>
    $(window).scroll(function(){
        var vscroll= $(this).scrollTop();
        $('#logotext').css({
            "transform":"translate(0px,"+vscroll/2+"px)"
        });

        var vscroll= $(this).scrollTop();
        $('#back-flower').css({
            "transform":"translate("+vscroll/5+"px,-"+vscroll/12+"px)"
        });

        var vscroll= $(this).scrollTop();
        $('#fore-flower').css({
            "transform":"translate(0px,-"+vscroll/2+"px)"
        });
    });
</script>
</body>
</html>
