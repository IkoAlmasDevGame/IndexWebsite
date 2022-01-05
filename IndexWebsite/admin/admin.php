<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kuis dengan JavaScript</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index_login.php?pesan=belum_login");
	}
	?>
    <a href="../connect/logout.php" onClick="return confirm ('Apakah Anda Yakin ingin logout ?')">LOGOUT</a>
    <div id="container">
        <div id="start">Kuis dimulai!</div>
        <div id="quiz" style="display: none">
            <div id="question"></div>
            <div id="choices">
                <div class="choice" id="A" onclick="checkAnswer('A')"></div>
                <div class="choice" id="B" onclick="checkAnswer('B')"></div>
                <div class="choice" id="C" onclick="checkAnswer('C')"></div>
            </div>
            <div id="timer">
                <div id="counter"></div>
                <div id="btimeGauge"></div>
                <div id="timeGauge"></div>
            </div>
            <div id="progress"></div>
        </div>
        <div id="scoreContainer" style="display: none"></div>
    </div>
    <script src="../admin/game/quiz.js"></script>
</body>
<style>
    body{
    font-size: 20px;
    font-family: monospace;
    background-color: pink;
}
#container{
    margin : 20px auto;
   background-color: #2c3e50;
    height: 300px;
    width : 700px;
    border-radius: 5px;
    box-shadow: 0px 5px 15px 0px;
    position: relative;
}
#start{
    font-size: 1.5em;
    font-weight: bolder;
    word-break: break-all;
    width:250px;
    height:50px;
    border : 2px solid lightgrey;
    text-align: center;
    cursor: pointer;
    position: absolute;
    left:230px;
    top:50px;
    color : lightgrey;
}
#start:hover{
    border: 3px solid lightseagreen;
    color : lightseagreen;
}
#question{
    width:500px;
    height : 125px;
    position: absolute;
    right:0;
    top:0;
}
#question p{
    margin : 0;
    padding : 15px;
    font-size: 1.25em;
    color:#fff;
}
#choices{
    width : 480px;
    position: absolute;
    right : 0;
    top : 125px;
    padding : 10px;
    color:#fff;
}
.choice{
    display: inline-block;
    width : 135px;
    text-align: center;
    border : 1px solid grey;
    border-radius: 5px;
    cursor: pointer;
    padding : 5px;
}
.choice:hover{
    border : 2px solid grey;
    font-weight: bold;
}
#timer{
    position: absolute;
    height : 100px;
    width : 200px;
    bottom : 0px;
    text-align: center;
}
#counter{
    font-size: 3em;
}
#btimeGauge{
    width : 150px;
    height : 10px;
    border-radius: 10px;
    background-color: lightgray;
    margin-left : 25px;
}
#timeGauge{
    height : 10px;
    border-radius: 10px;
    background-color: mediumseagreen;
    margin-top : -10px;
    margin-left : 25px;
}
#progress{
    width : 500px;
    position: absolute;
    bottom : 0px;
    right : 0px;
    padding:5px;
    text-align: right;
}
.prog{
    width : 25px;
    height : 25px;
    border: 1px solid #000;
    display: inline-block;
    border-radius: 50%;
    margin-left : 5px;
    margin-right : 5px;
}
#scoreContainer{
    margin : 20px auto;
    background-color: white;
    opacity: 0.8;
    height: 300px;
    width : 700px;
    border-radius: 5px;
    box-shadow: 0px 5px 15px 0px;
    position: relative;
    display: none;
}
#scoreContainer img{
    position: absolute;
    top:100px;
    left:325px;
}
#scoreContainer p{
    position: absolute;
    display: block;
    width : 59px;
    height :59px;
    top:130px;
    left:325px;
    font-size: 1.5em;
    font-weight: bold;
    text-align: center;
}
</style>
</html>