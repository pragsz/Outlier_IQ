<?php

$c1_jsonData=file_get_contents("https://api.thingspeak.com/channels/2475344/feeds.json?results=2");

$c2_jsonData=file_get_contents("https://api.thingspeak.com/channels/2475348/feeds.json?results=2");

$c1_data = json_decode($c1_jsonData, true);
$c2_data = json_decode($c2_jsonData, true);

// Accessing data within the "feeds" key
$feeds_c1 = $c1_data['feeds'];
$feeds_c2 = $c2_data['feeds'];



if($feeds_c1[0]['field1']==0){
$d1="red";
}
else{
    $d1="green";
}
if($feeds_c1[0]['field3']==0){
    $d2="red";
}
else{
    $d2="green";
}
if($feeds_c1[0]['field5']==0){
    $d3="red";
}
else{
    $d3="green";
}
if($feeds_c2[0]['field1']==0){
    $d4="red";
}
else{
    $d4="green";
}
if($feeds_c2[0]['field3']==0){
    $d5="red";
}
else{
    $d5="green";
}
if($feeds_c2[0]['field5']==0){
    $d6="red";
}
else{
    $d6="green";
}

?>

<table>
    <tr>
        <td>
            D01&nbsp;
        </td>
        <td>
            D02&nbsp;
        </td>
        <td>
            D03&nbsp;
        </td>
        <td>
            D04&nbsp;
        </td>
        <td>
            D05&nbsp;
        </td>
        <td>
            D06
        </td>
    </tr>
    <tr>
        <td style="background-color: <?php echo $d1 ?>">

        </td>
        <td style="background-color: <?php echo $d2 ?>">

        </td>
        <td style="background-color: <?php echo $d3 ?>">

        </td>
        <td style="background-color: <?php echo $d4 ?>">

        </td>
        <td style="background-color: <?php echo $d5 ?>">

        </td>
        <td style="background-color: <?php echo $d6 ?>">

        </td>
    </tr>
</table>
