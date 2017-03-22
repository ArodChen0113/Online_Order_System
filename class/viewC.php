<?php
class viewScreenShow
{

    public function __construct()
    {

    }
    //新增餐廳&菜單頁面顯示
    public function restMenuInsertView($view)
    {
        include ("view/{$view}.php");
    }
    //餐廳選擇器顯示
    public function restChooseView($view)
    {
        include ("view/{$view}.php");
    }
    //餐廳管理畫面顯示
    public function restManageView($view)
    {
        include ("view/{$view}.php");
    }
    //餐廳分類管理頁面顯示
    public function restKindManageView($view)
    {
        include ("view/{$view}.php");
    }
    //菜單瀏覽頁面顯示
    public function menuView($view)
    {
        include ("view/{$view}.php");
    }
    //菜單修改頁面顯示
    public function menuUpdateView($view)
    {
        include ("view/{$view}.php");
    }
    //訂購單頁面顯示
    public function purchaseView($view)
    {
        include ("view/{$view}.php");
    }
    //訂購單細節控制顯示
    public function purchaseDetailView($view)
    {
        include ("view/{$view}.php");
    }
    //訂購單管理頁面顯示
    public function purchaseManageView($view)
    {
        include ("view/{$view}.php");
    }
    //訂購單修改頁面顯示
    public function purchaseUpdateView($view)
    {
        include ("view/{$view}.php");
    }//訂單管理頁面顯示
    public function orderManageView($view)
    {
        include ("view/{$view}.php");
    }
    
}