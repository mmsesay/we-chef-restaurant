<!-- js scripts -->
<script src="public_files/js/jquery-3.3.1.min.js"></script>
<script src="public_files/js/materialize.min.js"></script>
<script src="public_files/js/wow.min.js"></script>

<script>
    $(function(){
        new WOW().init();
        $('.sidenav').sidenav({
            edge: 'right'
        });
        $('.pushpin-demon-nav').pushpin();
        $('.tooltipped').tooltip();
        $('.parallax').parallax();

    });
</script>