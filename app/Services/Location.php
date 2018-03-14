<?php

namespace App\Services;

class Location
{
    public $id;
    public $code;
    public $name;
    public $phone;
    public $email;
    public $vk = 'holstore';
    public $instagram = 'holstor31';
    public $popular = [
        '{size1}' => '40x60',
        '{size2}' => '50x70',
        '{size3}' => '60x60',
        '{size4}' => '60x80',
        '{price1}' => '1690р.',
        '{price2}' => '2190р.',
        '{price3}' => '2490р.',
        '{price4}' => '2690р.',
        '{oldPrice1}' => '2000',
        '{oldPrice2}' => '3000',
        '{oldPrice3}' => '4000',
        '{oldPrice4}' => '5000',
    ];
    public $prices = [
        'rectangle' => [
            '30x40' => '1190',
            '40x60' => '1690',
            '50x70!' => '2190',
            '60x80' => '2690',
            '80x120' => '3990',
        ],
        'square' => [
            '30x30' => '990',
            '40x40' => '1390',
            '50x50' => '1790',
            '60x60!' => '2190',
            '75x75' => '2690',
            '100x100' => '3990',
        ],
        'panorama' => [
            '30x90' => '2190',
            '40x120' => '2690',
        ],
    ];

    public function __construct($id = null, $code = null, $name = null, $phone = null, $email = null,
                                $vk = null, $instagram = null,
                                $popular = null, $prices = null)
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->vk = !is_null($vk) ? $vk : $this->vk;
        $this->instagram = !is_null($instagram) ? $instagram : $this->instagram;
        $this->url = str_replace(env('APP_DOMAIN'), $code . '.' . env('APP_DOMAIN'), \Request::fullUrl());
        $this->popular = array_replace($this->popular, (array)$popular);
        $this->prices = !is_null($prices) ? $prices : $this->prices;
        foreach($this->prices as $type => &$prices) {
            $items = [];
            foreach($prices as $size => $price) {
                $items[] = (object)[
                    'size' => str_replace(['!', 'x'], ['', ' x '], $size) . ' см',
                    'hit' => substr($size, -1) == '!',
                    'price' => "$price р.",
                ];
            }
            $prices = (object)[
                'name' => strtr($type, [
                    'rectangle' => 'Прямоугольные',
                    'square' => 'Квадратные',
                    'panorama' => 'Панорамные',
                ]),
                'items' => $items,
            ];
        }
        unset($prices);
    }
}
