<?php
$people = [
    ["Taro","25歳","men"],
    ["Jiro","20歳","men"],
    ["hanako","16歳","women"]
];

foreach ($people as $person){
    echo $person[0] . "(" . $person[1] . $person[2] . ")";
    echo "<br />";
}