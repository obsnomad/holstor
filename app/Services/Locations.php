<?php

namespace App\Services;

use Illuminate\Support\Collection;

class Locations
{
    /**
     * @return Collection|Location[]
     */
    public static function getList()
    {
        return collect([
            new Location(31, 'belgorod', 'Белгород', '+7 (4722) 37-12-32',
                'holstor@yandex.ru, holstor31@gmail.com, a.pravotorov@gmail.com, dudina-anna@yandex.ru',
                'holstor31'),
            new Location('oskol', 'oskol', 'Старый Оскол', '+7 (4722) 37-12-32',
                'oskol@holstor.ru, a.pravotorov@gmail.com, dudina-anna@yandex.ru'),
            new Location(36, 'voronezh', 'Воронеж', '+7 (900) 933-15-44',
                'voronezh@holstor.ru, a.pravotorov@gmail.com, dudina-anna@yandex.ru',
                'holstor36', null, [
                '{price1}' => '1790р.',
                '{price2}' => '2290р.',
                '{price3}' => '2690р.',
                '{price4}' => '2790р.',
            ]),
            new Location(46, 'kursk', 'Курск', '+7 (4722) 37-12-32',
                'kursk@holstor.ru, a.pravotorov@gmail.com, zakaz@holstor.ru, g9192821888@gmail.com, dudina-anna@yandex.ru'),
            new Location(57, 'orel', 'Орел', '+7 (4722) 37-12-32',
                'zakaz@holstor.ru, dudina-anna@yandex.ru'),
            new Location(92, 'sevastopol', 'Севастополь', '+7 (4722) 37-12-32',
                'holstor92@gmail.com'),
            new Location(23, 'sochi', 'Сочи', '+7 (4722) 37-12-32',
                'sochi@holstor.ru'),
        ])->keyBy('code');
    }

    /**
     * @param string $type unfixed/fixed/all
     * @return Collection|Location[]
     */
    public static function getCodesList($type = 'unfixed')
    {
        return self::getList()
            ->keyBy('id')
            ->map(function ($location) use ($type) {
                if (
                    $type == 'unfixed' && $location->id == $location->code
                    || $type == 'fixed' && $location->id != $location->code
                ) {
                    return null;
                }
                return $location->code;
            })
            ->filter();
    }

    public static function getCurrent() {
        $current = \Request::cookie('location');
        $locations = self::getList();
        if(!$locations->offsetExists($current)) {
            return new Location();
        }
        return $locations[$current];
    }
}
