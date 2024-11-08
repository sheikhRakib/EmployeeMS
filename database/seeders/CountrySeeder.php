<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        $countries = [
            [
                "name" => "Argentina",
                "iso3" => "ARG",
                "iso2" => "AR",
                "phone_code" => "54",
                "currency" => "ARS",
                "currency_symbol" => "$",
                "flag" => "🇦🇷",
            ], [
                "name" => "Australia",
                "iso3" => "AUS",
                "iso2" => "AU",
                "phone_code" => "61",
                "currency" => "AUD",
                "currency_symbol" => "$",
                "flag" => "🇦🇺",
            ], [
                "name" => "Austria",
                "iso3" => "AUT",
                "iso2" => "AT",
                "phone_code" => "43",
                "currency" => "EUR",
                "currency_symbol" => "€",
                "flag" => "🇦🇹",
            ], [
                "name" => "Azerbaijan",
                "iso3" => "AZE",
                "iso2" => "AZ",
                "phone_code" => "994",
                "currency" => "AZN",
                "currency_symbol" => "m",
                "flag" => "🇦🇿",
            ], [
                "name" => "Bahrain",
                "iso3" => "BHR",
                "iso2" => "BH",
                "phone_code" => "973",
                "currency" => "BHD",
                "currency_symbol" => ".د.ب",
                "flag" => "🇧🇭",
            ], [
                "name" => "Bangladesh",
                "iso3" => "BGD",
                "iso2" => "BD",
                "phone_code" => "880",
                "currency" => "BDT",
                "currency_symbol" => "৳",
                "flag" => "🇧🇩",
            ], [
                "name" => "Belgium",
                "iso3" => "BEL",
                "iso2" => "BE",
                "phone_code" => "32",
                "currency" => "EUR",
                "currency_symbol" => "€",
                "flag" => "🇧🇪",
            ], [
                "name" => "Bhutan",
                "iso3" => "BTN",
                "iso2" => "BT",
                "phone_code" => "975",
                "currency" => "BTN",
                "currency_symbol" => "Nu.",
                "flag" => "🇧🇹",
            ], [
                "name" => "Brazil",
                "iso3" => "BRA",
                "iso2" => "BR",
                "phone_code" => "55",
                "currency" => "BRL",
                "currency_symbol" => "R$",
                "flag" => "🇧🇷",
            ], [
                "name" => "Canada",
                "iso3" => "CAN",
                "iso2" => "CA",
                "phone_code" => "1",
                "currency" => "CAD",
                "currency_symbol" => "$",
                "flag" => "🇨🇦",
            ], [
                "name" => "China",
                "iso3" => "CHN",
                "iso2" => "CN",
                "phone_code" => "86",
                "currency" => "CNY",
                "currency_symbol" => "¥",
                "flag" => "🇨🇳",
            ], [
                "name" => "Colombia",
                "iso3" => "COL",
                "iso2" => "CO",
                "phone_code" => "57",
                "currency" => "COP",
                "currency_symbol" => "$",
                "flag" => "🇨🇴",
            ], [
                "name" => "Cuba",
                "iso3" => "CUB",
                "iso2" => "CU",
                "phone_code" => "53",
                "currency" => "CUP",
                "currency_symbol" => "$",
                "flag" => "🇨🇺",
            ], [
                "name" => "Egypt",
                "iso3" => "EGY",
                "iso2" => "EG",
                "phone_code" => "20",
                "currency" => "EGP",
                "currency_symbol" => "ج.م",
                "flag" => "🇪🇬",
            ], [
                "name" => "El Salvador",
                "iso3" => "SLV",
                "iso2" => "SV",
                "phone_code" => "503",
                "currency" => "USD",
                "currency_symbol" => "$",
                "flag" => "🇸🇻",
            ], [
                "name" => "Pakistan",
                "iso3" => "PAK",
                "iso2" => "PK",
                "phone_code" => "92",
                "currency" => "PKR",
                "currency_symbol" => "₨",
                "flag" => "🇵🇰",
            ], [
                "name" => "Russia",
                "iso3" => "RUS",
                "iso2" => "RU",
                "phone_code" => "7",
                "currency" => "RUB",
                "currency_symbol" => "₽",
                "flag" => "🇷🇺",
            ], [
                "name" => "Singapore",
                "iso3" => "SGP",
                "iso2" => "SG",
                "phone_code" => "65",
                "currency" => "SGD",
                "currency_symbol" => "$",
                "flag" => "🇸🇬",
            ], [
                "name" => "Turkiye",
                "iso3" => "TUR",
                "iso2" => "TR",
                "phone_code" => "90",
                "currency" => "TRY",
                "currency_symbol" => "₺",
                "flag" => "🇹🇷",
            ], [
                "name" => "United Kingdom",
                "iso3" => "GBR",
                "iso2" => "GB",
                "phone_code" => "44",
                "currency" => "GBP",
                "currency_symbol" => "£",
                "flag" => "🇬🇧",
            ], [
                "name" => "United States",
                "iso3" => "USA",
                "iso2" => "US",
                "phone_code" => "1",
                "currency" => "USD",
                "currency_symbol" => "$",
                "flag" => "🇺🇸",
            ]
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
