<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LanguagesSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::Now();

        DB::table('languages')->insert([
            [
                'code' => 'en',
                'php_locale_code' => 'en_US',
                'language' => 'English',
                'order' => 1,
                'rtl' => false,
                'active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'es',
                'php_locale_code' => 'es_ES',
                'language' => 'Spanish',
                'order' => 2,
                'rtl' => false,
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'fa',
                'php_locale_code' => 'fa_IR',
                'language' => 'Persian',
                'order' => 3,
                'rtl' => true,
                'active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'bn',
                'php_locale_code' => 'bn_BD',
                'language' => 'Bangla (Bangali)',
                'order' => 4,
                'rtl' => false,
                'active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'ar',
                'php_locale_code' => 'ar_AE',
                'language' => 'Arabic',
                'order' => 100,
                'rtl' => true,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'zh',
                'php_locale_code' => 'zh_CN',
                'language' => 'Chinese',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'hi',
                'php_locale_code' => 'hi_IN',
                'language' => 'Hindi',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'da',
                'php_locale_code' => 'da_DK',
                'language' => 'Danish',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'de',
                'php_locale_code' => 'de_DE',
                'language' => 'German',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'el',
                'php_locale_code' => 'el_GR',
                'language' => 'Greek',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'fr',
                'php_locale_code' => 'fr_FR',
                'language' => 'French',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'he',
                'php_locale_code' => 'he_IL',
                'language' => 'Hebrew',
                'order' => 100,
                'rtl' => true,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'nl',
                'php_locale_code' => 'nl_NL',
                'language' => 'Dutch',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'no',
                'php_locale_code' => 'no_NO',
                'language' => 'Norwegian',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'pt',
                'php_locale_code' => 'pt',
                'language' => 'Portuguese',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'pt_PT',
                'php_locale_code' => 'pt_PT',
                'language' => 'Portuguese',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'ru',
                'php_locale_code' => 'ru_RU',
                'language' => 'Russian',
                'order' => 100,
                'rtl' => 1,
                'active' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'sv',
                'php_locale_code' => 'sv_SE',
                'language' => 'Swedish',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'th',
                'php_locale_code' => 'th_TH',
                'language' => 'Thai',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'tr',
                'php_locale_code' => 'tr_TR',
                'language' => 'Turkish',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'id',
                'php_locale_code' => 'id_ID',
                'language' => 'Indonesian',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'vi',
                'php_locale_code' => 'vi_VN',
                'language' => 'Vietnamese',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ], [
                'code' => 'uk',
                'php_locale_code' => 'uk_UA',
                'language' => 'Ukrainian',
                'order' => 100,
                'rtl' => false,
                'active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
