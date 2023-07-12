<?
function getTitle($arrayItems,$currentItem)
{
    $title="";
    foreach($arrayItems as $key=>$value)
    {
        if($key==$currentItem)
        {
            $title=$value;
            break;
        }
    }
    return $title;
}
?>