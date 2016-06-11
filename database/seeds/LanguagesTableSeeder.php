<?php

use App\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('language')->delete();

        $language = new Language();
        $language->name = 'English';
        $language->lang_code = 'en';
        $language->icon = 'icon_flag_gb.gif';
        $language->save();

        $language = new Language();
        $language->name = 'Српски';
        $language->lang_code = 'sr';
        $language->icon = 'icon_flag_sr.gif';
        $language->save();

        $language = new Language();
        $language->name = 'Bosanski';
        $language->lang_code = 'bs';
        $language->icon = 'icon_flag_bs.gif';
        $language->save();
    }
}
