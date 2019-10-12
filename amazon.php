
<?php
header('Content-type: video/mp4');

$id= "" .$_GET['id'];
$json = @file_get_contents("https://www.amazon.com/drive/v1/shares/".$id."?resourceVersion=V2&ContentType=JSON");
$obj = json_decode($json);
$nodo= $obj->nodeInfo->id;
$json = @file_get_contents("https://www.amazon.com/drive/v1/nodes/".$nodo."/children?resourceVersion=V2&tempLink=true&shareId=".$id);
$obj = json_decode($json);
$link = $obj->data[0]->tempLink;
readfile($link);
?>
