<?php
//echo $data['title'].' loading';
//var_dump($data['customer']);
foreach($data['customer'] as $customer)
{
    echo 'Informatiom : name => '.$customer->name.'<br>';
    echo 'Informatiom : email => '.$customer->email.'<br>';
    echo 'Informatiom : pass => '.$customer->pass.'<br>';
}

?>