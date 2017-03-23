<?php
class menuSystem
{

    public function __construct()
    {

    }
    //菜單瀏覽頁面顯示
    public function menuShow()
    {
        $loader = new \Twig_Loader_Filesystem('view');
        $twig = new \Twig_Environment($loader);
        $aaa = 'Hello World';
        echo $twig->render('restMenuInsertV.php', $aaa);

    }
    //新增餐廳&菜單頁面顯示
    public function restMenuInsertShow()
    {

    }
    //菜單修改頁面顯示
    public function menuUpdateShow()
    {

    }
    //餐廳&菜單資料新增
    public function restMenuInsert()
    {

    }
    //菜單資料修改
    public function menuUpdate()
    {

    }
    //菜單資料刪除
    public function menuDel()
    {

    }

}