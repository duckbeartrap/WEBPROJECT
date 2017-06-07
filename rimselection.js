$(document).ready(function(){
    $("#opt1").click(function(){
        $("#rims").css("background","url('./SALECARS/RIMS/<?php echo $_GET['modelname']."rims1";?>.png')");
        $("#rimsval").val('<?php echo $_GET['modelname']."rims1";?>');
        $("#finalprice").html('<?php $finprice =$_GET['price'] + 2000;  echo "$".$finprice; ?>');
        $("#orderprice").val('<?php echo $finprice;?>');
    });
    $("#opt2").click(function(){
        $("#rims").css("background","url('./SALECARS/RIMS/<?php echo $_GET['modelname']."rims2";?>.png')");
        $("#rimsval").val('<?php echo $_GET['modelname']."rims2";?>');
        $("#finalprice").html('<?php $finprice =$_GET['price'] + 2500;  echo "$".$finprice; ?>');
    });
    $("#opt3").click(function(){
        $("#rims").css("background","");
        $("#rimsval").val('standard');
        $("#finalprice").html('<?php $finprice =$_GET['price'];  echo "$".$finprice; ?>');
    });
});
