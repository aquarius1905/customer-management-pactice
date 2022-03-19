<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '佐藤　太郎',
            'furigana' => 'サトウ　タロウ','email' => 'taro_sato@sample.com','postcode' => '1000005','address' => '東京都千代田区丸の内１－２－３　ABCビル５F','tel' => '09012345678','birthday' => '1974-01-01','sex' => '男','inquiry' => 'テスト１'];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '鈴木　祐子','furigana' => 'スズキ　ユウコ','email' => 'yuko_suzuki@sample.com','postcode' => '1010044','address' => '東京都千代田区鍛冶町２－３－４　鍛治町ビル７F','tel' => '09023456789','birthday' => '1978-12-16','sex' => '女','inquiry' => 'テスト２'
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '高橋　次郎','furigana' => 'タカハシ　ジロウ','email' => 'jiro_takahashi@sample.com','postcode' => '1000006','address' => '東京都千代田区有楽町３－４－５　有楽町ビル１０F','tel' => '09034567890','birthday' => '1980-03-06','sex' => '男','inquiry' => 'テスト３'
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '小林　浩','furigana' => 'コバヤシ　ヒロシ','email' => 'hiroshi_kobayashi@sample.com','postcode' => '1030027','address' => '東京都中央区日本橋５－５－５　○○マンション303号室','tel' => '09011112222','birthday' => '1965-07-31','sex' => '男','inquiry' => 'テスト４'
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '田中　直子','furigana' => 'タナカ　ナオコ','email' => 'naoko_tanaka@sample.com','postcode' => '1100011','address' => '東京都台東区三ノ輪５－７－６','tel' => '09087654321','birthday' => '1977-09-25','sex' => '女','inquiry' => 'テスト５'
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '木村　彩','furigana' => 'キムラ　アヤ','email' => 'aya_kimura@sample.com','postcode' => '1120003','address' => '東京都文京区春日９－１－３','tel' => '09033334444','birthday' => '1984-10-28','sex' => '女','inquiry' => 'テスト６'
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '山本　孝','furigana' => 'ヤマモト　タカシ','email' => 'takashi_yamamoto@sample.com','postcode' => '1030013','address' => '東京都中央区日本橋人形町３－１－３','tel' => '09033669911','birthday' => '1958-02-18','sex' => '男','inquiry' => 'テスト７'
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '伊藤　武','furigana' => 'イトウ　タケシ','email' => 'takeshi_ito@sample.com','postcode' => '1040061','address' => '東京都中央区銀座８－８－８','tel' => '09014146666','birthday' => '1985-12-13','sex' => '男','inquiry' => 'テスト８'
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '清水　一郎','furigana' => 'シミズ　イチロウ','email' => 'ichiro_shimizu@sample.com','postcode' => '1060041','address' => '東京都港区麻布台６ー５ー９ エスポワール麻布台','tel' => '09056789123','birthday' => '1993-05-29','sex' => '男','inquiry' => 'テスト９'
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '中村　陽子','furigana' => 'ナカムラ　ヨウコ','email' => 'yoko_nakamura@sample.com','postcode' => '1010042','address' => '東京都千代田区神田東松下町１－１－２','tel' => '09078912345','birthday' => '1982-08-29','sex' => '女','inquiry' => 'テスト１０'
        ];
        DB::table('customers')->insert($param);
    }
}
