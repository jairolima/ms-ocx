<?php
include "../_config.php";

// entrega selecionada
$cartEmpty = (isset($_GET['cartEmpty'])) ? true : false;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>TRX - Home</title>

    <!-- GLOBAL -->
    <?php include GLOB . "viewport_main.php"; ?>
    <?php include GLOB . "css_main.php"; ?>
    <?php include GLOB . "js_main.php"; ?>

</head>

<body style="opacity: 0">

    <div id="page" class="container">

        <!-- Header -->
        <header id="headerBar" class="page-row">
            <?php include WIDGET . "Header Custom/instances/Header Custom/template.php"; ?>
            <?php include WIDGET . "Collection Navigation Custom/instances/Collection Navigation Custom/template.php"; ?>
            <?php include WIDGET . "Banner Carousel Custom/instances/Banner Carousel Custom/template.php"; ?>
        </header>

        <!-- Main -->
        <main class="page-row page-row-expanded">
            <div id="main">
                <div class="row">

                    <?php include WIDGET . "Banner Simple Custom/instances/Single Banner Middle Custom/template.php"; ?>

                </div>
            </div>
        </main>

    </div>


    <!-- JS -->
    <script src="<?php echo (WIDGET . "Header Custom/script.js") ?>"></script>
    <script src="<?php echo (WIDGET . "Collection Navigation Custom/script.js") ?>"></script>
    <script src="<?php echo (WIDGET . "Banner Carousel Custom/script.js") ?>"></script>



    <!-- if cart is empty -->
    <?php if ($cartEmpty) { ?>
        <script>
            $(function() {
                $('.header-cart .crt-number').text('0')
                $('.header-cart .crt-box:not(.crt-empty)').remove()
            })
        </script>
    <?php } ?>

    <!-- if cart not empty -->
    <?php if (!$cartEmpty) { ?>
        <script>
            $(function() {
                $('.header-cart .crt-number').text('2')
                $('.header-cart .crt-box.crt-empty').remove()
            })
        </script>
    <?php } ?>

</body>

</html>