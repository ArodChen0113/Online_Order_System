<?php
class Db
{
    public function __construct()
    {

    }
    //資料庫連線
    function connectDb($host, $user, $pwd, $dbname)
    {

    }
    //SQL搜尋函式(指定欄位)
    function select($field,$table,$query)
    {

    }
    //SQL搜尋函式(全部欄位)
    function selectAll($table,$query)
    {

    }
    //SQL新增函式
    function insert($table,$query1,$query2)
    {

    }
    //SQL修改函式
    function update($table,$query1,$query2)
    {

    }
    //SQL刪除函式
    function delete($table,$query)
    {

    }
    //SQL query陣列化
    function fetchArray()
    {

    }
    //圖片上傳
    public function newImg($tmpname, $imgname, $username)
    {

    }
}