<?php 
header('Access-Control-Allow-Origin: *');
if(isset($_GET["symbol"]))
{
    $sym=$_GET["symbol"];
    $link="http://dev.markitondemand.com/MODApis/Api/v2/Lookup/json?input=".$sym;
    $json = file_get_contents($link);
    echo $json;
}
else if(isset($_GET["input"]))
{
    $sam=$_GET["input"];
 $link="http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=".$sam;
    $json = file_get_contents($link);
    echo $json;
}
else if(isset($_GET["xyz"]))
{
   $sim=$_GET["xyz"]; 
$link="http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters={'Normalized':false,'NumberOfDays':1095,'DataPeriod':'Day','Elements':[{'Symbol':'".$sim."','Type':'price','Params':['ohlc']}]}";
    $json = file_get_contents($link);
    echo $json;

}
else if(isset($_GET["new"]))
{
     $som=$_GET["new"]; 
$link="http://ajax.googleapis.com/ajax/services/search/news?v=1.0&q=".$som."&userip=68.181.195.44";
    $json = file_get_contents($link);
    echo $json;
}
else
{
    echo "Not Correct";
}
?>
