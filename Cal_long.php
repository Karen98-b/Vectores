<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Longitud</title>
    <style>
        *{
    margin: auto;
    padding: 0%;
    text-decoration: none;
}
@font-face{
    src: url('Fuentes/MavenPro-Regular.ttf');
    font-family: MavenPro-Regular;}
body{
    font-family: MavenPro-Regular;
    background-color: #FDFDF6;
    font-size: 50px;
    text-align: center;
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
        <?php 
    
    $V1= $_POST['ps'];
    $V2= $_POST['ps1'];
    $CON= 2;
    $exp1= pow ($V1,$CON);
    $exp2= pow ($V2,$CON);
    $sum= ($exp1 + $exp2);
    $rai= sqrt ( $sum );

    
    
    echo "Longitud del vector <br><br>".$rai;
    
?>

</body>
</html>