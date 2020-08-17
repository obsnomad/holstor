<?php

namespace App\Services;

class Location
{
    public $id;
    public $code;
    public $name;
    public $nameForm;
    public $phone = '+7 (4722) 37-12-32';
    public $email = [
        'dudina-anna@yandex.ru',
    ];
    public $vk = 'holstore';
    public $widgetId;
    public $instagram = 'holstor31';
    public $address = 'Богдана Хмельницкого просп., 137, Белгород, Белгородская обл., 308010';
    public $coords = [50.632629, 36.570918];
    public $url;
    public $popular = [
        '{size1}' => '40x60',
        '{size2}' => '50x70',
        '{size3}' => '60x60',
        '{size4}' => '60x80',
        '{price1}' => '1890р.', // 40x60
        '{price2}' => '2390р.', // 50x70
        '{price3}' => '2390p.', // 60x60
        '{price4}' => '2690р.', // 60x80
        '{oldPrice1}' => '2000',
        '{oldPrice2}' => '3000',
        '{oldPrice3}' => '4000',
        '{oldPrice4}' => '5000',
    ];
    public $prices = [
        'rectangle' => [
            '30x40' => '1490',
            '40x60' => '1890',
            '50x70!' => '2390',
            '60x80' => '2690',
        ],
        'square' => [
            '40x40' => '1590',
            '50x50' => '1890',
            '60x60!' => '2390',
        ],
        'panorama' => [
            '30x90' => '-',
            '40x120' => '-',
        ],
    ];
    public $schedule = 'ежедневно с 10:00 до 22:00';
    public $seo;
    protected $data;

    public function __construct($data = null)
    {
        $this->data = (array)$data;
        foreach ([
                     'id',
                     'code',
                     'name',
                     'phone',
                     'email',
                     'vk',
                     'widgetId',
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
                    'price' => $price != '-' ? "$price р." : 'по запросу',
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
