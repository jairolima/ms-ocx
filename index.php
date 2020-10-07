<?php
    define('COMP', 'inc/components/');
    define('GLOB', 'inc/global/');
?>

<!-- Global fonts -->
<link rel="stylesheet" href="assets/fonts/dotzFonts.css">

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>TRX</title>

    <style>
        .header {
            background: white;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            height: 100px;
            justify-content: space-around;
            padding: 30px;
            text-align: center;
        }

        body {
            color: #222;
            font-family: 'Inter';
            margin: 0;
            padding-bottom: 10vh;
        }

        .container {
            margin: 0 auto;
            max-width: 1170px;
        }

        h1 {
            font-size: 46px;
            font-family: 'AmsiPro';
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        h2 {
            color: #002157;
            margin-bottom: 18px;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        ul .item {
            font-size: 15px;
            margin-bottom: 8px;
        }

        ul .item > a {
            color: #656868;
            display: inline-block;
            font-size: 18px;
            margin: 6px 0;
            text-decoration: none;
        }

        ul .item > small {
            color: #00458C;
            display: block;
            font-size: 12px;
            line-height: 19px;
        }
        
    </style>
</head>
<body>
    <div class="header">
        <img src="./assets/media/logo_Dotz.png" alt="logo Dotz">
    </div>

    <div class="container">
        <h1>Sitemap | Dotz</h1>
        <br>
        <ul>
            <li><h2>Home</h2></li>
            <ul>
                <li class="item">
                    <a href="./pages/home.php">Home</a>
                </li>
            </ul>
        </ul>

        <br>
        <br>
        <ul>
            <li><h2>Guides</h2></li>
            <ul>
                <li class="item"><a href="./pages/components.php">Componentes</a></li>
                <li class="item"><a href="./assets/fonts/demo.html">Tipografia</a></li>
                <li class="item"><a href="./assets/icons/demo.html">Iconografia</a></li>
            </ul>
        </ul>
    </div>

</body>
</html>