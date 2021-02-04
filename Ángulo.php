<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ángulo</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            text-decoration: none;
        }
    
        @font-face {
            src: url('Fuentes/MavenPro-Regular.ttf');
            font-family: MavenPro-Regular;
        }
    
        body {
            font-family: MavenPro-Regular;
            background-color: #FDFDF6;
        }
    
        nav {
            height: 80px;
            background-color: #6DFDD7;
        }
    
        @font-face {
            src: url('Fuentes/PermanentMarker-Regular.ttf');
            font-family: PermanentMarker-Regular;
        }
    
        nav .logo {
            color: #05CE7E;
            font-family: PermanentMarker-Regular;
            text-shadow: 3px 5px darkcyan;
            font-size: 50px;
            line-height: 70px;
            padding-left: 40px;
        }
    
        nav ul {
            float: right;
            margin-right: 35px;
        }
    
        nav ul li {
            display: inline-block;
        }
    
        @font-face {
            src: url('Fuentes/NotoSansSC-Medium.otf');
            font-family: NotoSansSC-Medium;
        }
    
        nav ul li a {
            color: darkcyan;
            padding: 0 15px;
            display: block;
            line-height: 80px;
            font-size: 20px;
            background: #6DFDD7;
            transition: .4s;
            font-weight: bold;
            font-family: NotoSansSC-Medium;
        }
    
        nav ul li a:hover,
        nav ul li a.activar {
            color: #05CE7E;
        }
    
        nav ul li:hover>ul {
            top: 80px;
            opacity: 1;
            visibility: visible;
            transition: .3s linear;
        }
    
        nav ul ul {
            position: absolute;
            top: 50px;
            border-top: 3px solid darkcyan;
            opacity: 0;
            visibility: hidden;
            list-style: none;
        }
    
        nav ul ul li {
            width: 200px;
            display: list-item;
            position: relative;
            border: 1px darkcyan solid;
            border-top: none;
        }
    
        nav ul ul li a {
            line-height: 50px;
        }
    
        nav ul ul ul {
            border-top: none;
        }
    
        nav ul ul ul li {
            position: relative;
            top: -81px;
            left: 200px;
            border: 1px darkcyan solid;
        }
    
        .blank {
            background-color: white;
            height: 25px;
        }
    
        @font-face {
            src: url('Fuentes/NotoSansSC-Medium.otf');
            font-family: NotoSansSC-Medium;
        }
    
        @font-face {
            src: url('Fuentes/NotoSansSC-Medium.otf');
            font-family: NotoSansSC-Medium;
        }
    
        h1 {
            text-align: center;
            font-size: 45px;
            padding-top: 25px;
            margin: 0px;
            font-family: NotoSansSC-Medium;
        }
        p {
            text-align: center;
            font-size: 20px;
            padding-top: 25px;
            margin: 0px;
            font-family: NotoSansSC-Medium;
        }
        img {
            height: 80px;
            margin-left: 600px;
            box-shadow: 30px 30px 15px #F4EEDD;
            border: 1px solid #F4EEDD;
        }

        img:hover {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }
         h2 {
            text-align: center;
            font-size: 30px;
            padding: 20px;
            margin: auto;
            font-family: NotoSansSC-Medium;
        }

        form {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            margin-left: 0px;
        }

        form p input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }

        form p .bot {
            background-color: #05CE7E;
            font-family: NotoSansSC-Medium;
            border-radius: 5px;
            margin-left: 0px;
            border: 1px solid #FDFDF6;
            padding: 10px;
            box-shadow: inset 2px 2px 4px rgba(120, 120, 120, .4), inset -3px -3px 3px rgba(255, 255, 255, .4);
            font-size: 20px;
        }

        form p .bot:hover {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }
    </style>
</head>
<body>
    <body>
        <nav>
            <ul>
                <li><a href="Cálculo.html">Inicio</a></li>
                <li><a href="Longitud.php">Longitud</a></li>
                <li><a href="Ángulo.php">Ángulo</a></li>
            </ul>
        </nav><br>
        <h1>Ángulo entre dos vectores</h1>
        <p>El ángulo entre dos vectores se puede calcular aplicando la ley de los cosenos y se determina con la siguiente fórmula:</p><br><br>
        <img src="Ángulo.png" alt=""><br>
        
        
    <h2>Cálculo ángulo</h2>
    <form action="Cal_áng.php" target="_self" method="POST">
        <p>U*V  <input type="number" name="ps" step="any" required></p>
        <p>||U||*||V||  <input type="number" name="ps1" step="any" required></p>
        <p><input class="bot" type="submit" name="calcular" value="Calcular"></p>
    </form>
    </body>
</body>
</html>