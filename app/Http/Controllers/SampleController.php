<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sampleテキストです";

        // 参照
        $records = DB::connection('mysql')->select("select * from users");
        $id = $records[0]->id;
    

        //追加
        //$insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'test3@test.com','test3','test33')");
        //dd($insertResult);

        // 削除
        $deleteResult = DB::connection("mysql")->delete("delete from users where id = 2");
        dd($deleteResult);


        return view("top/index" , [ "sampleValue" => $sampleValue ]);

    }
}