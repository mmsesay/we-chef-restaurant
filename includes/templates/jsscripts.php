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
        $('.modal').modal({
            startingTop: '10%'
        });

        $('.classic_link').addClass('.active');
        $('.sides').hide();
        $('.veggie').hide();
        $('.drinks').hide();
        $('.deserts').hide();

        $('.classic_link').click(function(){
            $('.classic').show();
            $('.classic_link').addClass('.active');
            $('.sides').hide();
            $('.veggie').hide();
            $('.drinks').hide();
            $('.deserts').hide();
        }
        );

        $('.sides_link').click(function(){
            $('.sides').show();
            $('.sides_link').addClass('.active');
            $('.classic').hide();
            $('.veggie').hide();
            $('.drinks').hide();
            $('.deserts').hide();
            }
        );

        $('.veggi_link').click(function(){
            $('.veggie').show();
            $('.veggi_link').addClass('.active');
            $('.classic').hide();
            $('.sides').hide();
            $('.drinks').hide();
            $('.deserts').hide();
            }
        );

        $('.drinks_link').click(function(){
            $('.drinks').show();
            $('.drinks_link').addClass('.active');
            $('.sides').hide();
            $('.classic').hide();
            $('.veggie').hide();
            $('.deserts').hide();
            }
        );

        $('.desert_link').click(function(){
            $('.deserts').show();
            $('.desert_link').addClass('.active');
            $('.sides').hide();
            $('.classic').hide();
            $('.veggie').hide();
            $('.drinks').hide();
            }
        );

    });
</script>