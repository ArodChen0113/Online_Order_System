<?php
use Pux\Mux;

$mux = new Mux;

$mux->add('/', array('controller\orderSystem','purchaseShow'));
$mux->add('/menu', array('controller\menuSystem','menuShow'));
$mux->add('/menuUpdate', array('controller\menuSystem','menuUpdateShow'));
$mux->add('/restMenuInsert', array('controller\menuSystem','restMenuInsertShow'));
$mux->add('/restManage', array('controller\restaurantSystem','restManageShow'));
$mux->add('/restChoose', array('controller\restaurantC','restChooseShow'));
$mux->add('/restKindManage', array('controller\restKindC','restKindManageShow'));
$mux->add('/purchaseManage', array('controller\orderC','purchaseManageShow'));
$mux->add('/purchaseUpdate', array('controller\orderC','purchaseUpdateShow'));
$mux->sort(); //模糊網址辨識最相似值

return $mux;

