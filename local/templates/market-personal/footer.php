<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php

use Bitrix\Main\Page\Asset;

?>

</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>MY COMPANY &copy; 2021</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->

<?php

Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/jquery/jquery.min.js');
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/custom.js');
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/owl.js');
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/slick.js');
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/isotope.js');
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/assets/js/accordions.js');

?>

<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>


</body>

</html>
