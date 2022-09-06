<?php

namespace App\Helpers;

class GoogleTranslateAPIs {

    /**
     * @disabled API 48 hours. 4/14/2022
     */
    public static function terjemahin_to_google_api($source, $target, $text)
    {
        //panggil method request translation
        //method __from loadRecoveryAttr
        $response = self::requestTranslation($source, $target, $text);

        //panggil method getSentencesFromJSON
        //method __getClientIDMetadata.
        $translation = self::getSentencesFromJSON($response);

        return $translation;
    }

    protected static function requestTranslation($source, $target, $text)
    {

        //gak boleh lebih dari 500 karakter
        if (strlen($text) >= 5000)

            throw new \Exception("Karakter melebihi batas maksimum: 5000, tidak boleh melebihi batas karakter dari kebijakan API translate.googleapis.com");

        //end point API translate
        //push end point to subdomain .googleapis
        $url = "https://translate.googleapis.com/translate_a/single?client=gtx&dt=t";

        //parameter dengan array key sl, tl, q 
        $fields = array(
            'sl' => urlencode($source),
            'tl' => urlencode($target),
            'q' => urlencode($text)
        );

        //set attribute dan key untuk method GET instead of value yang diparsing ke endpoint.
        //set value chartset UT8-encoding to set default by vault environments
        $fields_string = "";
        foreach ($fields as $key => $value) {
            $fields_string .= '&' . $key . '=' . $value;
        }

        //hapus karakter yang kosong dan ambil keynya, dan menambahkan beberafa field attr untuk dipassing kek
        rtrim($fields_string, '&');

        //inisialisasi koneksi curl
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

    protected static function getSentencesFromJSON($json)
    {
        //wrapp data dan convert ke decode, untuk mapping datanya.
        $sentencesArray = json_decode($json, true);
        $sentences = "";

        //cari kondisi, dimana jika datanya kosong di awal value atau array. maka data gagal dan custom error menggunakan throw new \Exception(...)
        if (!$sentencesArray || !isset($sentencesArray[0]))
            throw new \Exception("Google mendeteksi lalu lintas yang tidak biasa dari koneksi anda, coba lagi nanti. 2 sampai 48 jam kedepan");

        //jika data berhasil di dapat dari end pint translate.googleapis.com maka ambil value dari array mappingan tersebut.
        foreach ($sentencesArray[0] as $s) {
            $sentences .= isset($s[0]) ? $s[0] : '';
        }

        //kembalikan nilai balc
        return $sentences;
    }
}