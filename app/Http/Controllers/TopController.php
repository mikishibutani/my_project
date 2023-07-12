<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB 接続用 class

class TopController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sampleテキストです";

        //参照
        $records = DB::connection('mysql')->select("select * from items");
        $name = $records[0] -> name;

        //追加
        //$insertResult = DB::connection("mysql")->insert("insert into items (id,name,price) values (null,'メロン',2000)");

        //更新
        //$updateResult = DB::connection("mysql")->update("update items set price = 600 where name = 'hana'");

        //削除
        $deleteResult = DB::connection("mysql")->delete("delete from items where name = 'hana'");
        dd($deleteResult);


        return view("top/index" , ["sampleValue" => $sampleValue]);
    }
}