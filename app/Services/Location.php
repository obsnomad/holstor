<?php

namespace App\Services;

class Location
{
    public $id;
    public $code;
    public $name;
    public $nameForm;
    public $phone = '+7 (4722) 37-12-32';
    public $email = 'holstor@yandex.ru, holstor31@gmail.com, a.pravotorov@gmail.com, dudina-anna@yandex.ru';
    public $vk = 'holstore';
    public $instagram = 'holstor31';
    public $address = 'Богдана Хмельницкого просп., 137, Белгород, Белгородская обл., 308010';
    public $coords = [50.632629, 36.570918];
    public $url;
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
    public $schedule = 'ежедневно с 10:00 до 22:00';
    public $seo;
    protected $data;

    public function __construct($data)
    {
        $this->data = (array)$data;
        foreach ([
                     'id',
                     'code',
                     'name',
                     'phone',
                     'email',
                     'vk',
                     'instagram',
                     'address',
                     'coords',
                     'prices',
                     'schedule',
                 ] as $key) {
            $this->$key = $this->getValue($key);
        }
        $this->nameForm = $this->getValue('nameForm') ?: $this->name;
        $this->url = str_replace(env('APP_DOMAIN'), $this->code . '.' . env('APP_DOMAIN'), \Request::fullUrl());
        $this->popular = array_replace($this->popular, (array)$this->getValue('popular'));
        foreach ($this->prices as $type => &$prices) {
            $items = [];
            foreach ($prices as $size => $price) {
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
        $this->seo = nl2br($this->getValue('seo'));
    }

    private function getValue($key, $default = true)
    {
        $value = null;
        if ($this->data && key_exists($key, $this->data)) {
            $value = $this->data[$key];
        }
        if ($default) {
            return !is_null($value) ? $value : $this->$key;
        }
        return null;
    }
}
