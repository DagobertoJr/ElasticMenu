<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>MaterialKenjs</title>
<link href="https://innozone.com.br/material-kenjs/elasticmenu.min.css?v=<?php echo date("YmdHms");?>" rel="stylesheet" type="text/css"/>
<style type="text/css">
    .left{
        float: left;
        margin-right: 10px;
    }    
</style> 
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="elasticmenu.min.js?v=<?php echo 2 * date("YmdHms");?>" type="text/javascript"></script>
<Script>    
$(function(){
    $("#vertical").elasticMenu({
        direction : "vertical",
        background : "#311b92",
        color : "white"
    });
    $("#horizontal").elasticMenu({
        direction : "horizontal",
        background : "#ec407a",
        color : "white"
    });
});
</script>
</head>
<body>
<h1>ElasticMenu.js</h1>    
<div style="width: 400px; margin: auto; position: relative;">
    <ul id="vertical" class="elastic-menu">
        <li class=""><a href="#"><i class="material-icons left">account_balance</i>Saldo Bancário</a></li>
        <li class=""><a href=""><i class="material-icons left">android</i>Android</a></li>
        <li class=""><a href=""><i class="material-icons left">bug_report</i>Reportar BUG</a></li>
        <li class=""><a href=""><i class="material-icons left">card_giftcard</i>Cartão presente</a></li>
        <li class="active"><a href=""><i class="material-icons left">gavel</i>Jurídico</a></li>
        <li class=""><a href=""><i class="material-icons left">pan_tool</i>Qualquer coisa</a></li>
    </ul>
</div>
<div style="width: 100%; position: relative;">
    <ul id="horizontal" class="elastic-menu">
        <li class="active"><a href="#"><i class="material-icons left">account_balance</i>Saldo</a></li>
        <li class=""><a href=""><i class="material-icons left">android</i>Android</a></li>
        <li class=""><a href=""><i class="material-icons left">bug_report</i>BUG</a></li>
        <li class=""><a href=""><i class="material-icons left">card_giftcard</i>Presente</a></li>
    </ul>
</div>
<div style="clear: both;"></div>
</body>
</html>
