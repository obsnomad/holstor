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
            new Location([
                'id' => 31,
                'code' => 'belgorod',
                'name' => 'Белгород',
                'nameForm' => 'Белгороде',
                'email' => 'dudina-anna@yandex.ru',
                'vk' => 'holstor31',
                'widgetId' => '30987685',
                'address' => 'Белгород, просп. Богдана Хмельницкого, 137Т, ТРЦ «Мега ГРИНН», 1 этаж, возле магазина Летуаль',
                'popular' => [
                    '{price1}' => '1390р.', // 40x60
                    '{price2}' => '1890р.', // 50x70
                    '{price3}' => '1890p.', // 60x60
                    '{price4}' => '1990р.', // 60x80
                ],
                'prices' => [
                    'rectangle' => [
                        '20x30' => '690',
                        '30x40' => '890',
                        '40x60' => '1390',
                        '50x70!' => '1890',
                        '60x80' => '1990',
                        '80x120' => '2990',
                    ],
                    'square' => [
                        '20x20' => '590',
                        '30x30' => '790',
                        '40x40' => '990',
                        '50x50' => '1390',
                        '60x60!' => '1890',
                        '100x100' => '3990',
                    ],
                    'panorama' => [
                        '30x90' => '1490',
                        '40x120' => '1990',
                    ],
                ],
                'seo' => 'Печать фото в Белгороде становится настоящим трендом и набирает популярность с невероятной скоростью. Это вовсе не удивительно, ведь красивый портрет в необычном стиле идеально украсит спальню, гостиную, кабинет или офис. Но фотография на обычной бумаге не сравнится с вау-эффектом от настоящей печати на холсте. Современное оборудование позволяет производить картины по фото на холсте, сделанном из натурального хлопка. В магазине «Холстор» полноценную картину с любым изображением вы сможете забрать уже на следующий день после оформления заказа в любое удобное время.

Теперь не нужно заказывать печать на холсте в интернете и ждать около недели картину по почте. Ваша картина будет изготовлена в Белгороде на местном производстве. Доброжелательные продавцы подскажут наиболее удачный размер для будущей картины и посоветуют эффектный стиль для вашего фото на холсте.

Вы давно подбираете идеальную картину для своего дома? Печать на холсте - легкий и доступный способ решить этот вопрос! «Холстор» превратит любое изображение или фотографию в картину, достойную стать экспонатом галереи. На выбор представлено больше разнообразие размеров, стилей обработки, оформления багетными рамками и покрытий защитным лаком. С «Холстор» купить картины в Белгороде стало как никогда просто!',
            ]),
            new Location([
                'id' => 'oskol',
                'code' => 'oskol',
                'name' => 'Старый Оскол',
                'nameForm' => 'Старом Осколе',
                'email' => 'dudina-anna@yandex.ru',
                'coords' => false,
                'popular' => [
                    '{price1}' => '1390р.',
                    '{price2}' => '1690р.',
                    '{price3}' => '1690p.',
                    '{price4}' => '1990р.',
                ],
                'prices' => [
                    'rectangle' => [
                        '20x30' => '690',
                        '30x40' => '890',
                        '40x60' => '1390',
                        '50x70!' => '1690',
                        '60x80' => '1990',
                        '80x120' => '2990',
                    ],
                    'square' => [
                        '20x20' => '590',
                        '30x30' => '790',
                        '40x40' => '990',
                        '50x50' => '1390',
                        '60x60!' => '1690',
                        '100x100' => '3990',
                    ],
                    'panorama' => [
                        '30x90' => '1490',
                        '40x120' => '1990',
                    ],
                ],
                'seo' => 'Печать фото на холсте - новинка, которая радует всех любителей прекрасного. Личной фотографией, напечатанной на настоящем холсте, который натянут на подрамник, можно украсить дизайн квартиры или подарить близкому человеку. Сделать заказ раньше можно было только через интернет. Получить картину заказчик мог только по почте или курьером, дождавшись нужное количество времени. Теперь заветное желание исполнить гораздо проще, ведь точка по приему и выдаче заказов работает прямо в Старом Осколе.

Холст изготовят непосредственно в городе, на собственном производстве. Стоимость заказа будет включать перенос фотографии на холст с помощью широкоформатной печати, натяжка холста на подрамник из дерева, подготовка крепления для стены и защитная упаковка. Дополнительными опциями является дизайнерская обработка фотографии в различных стилях. Также есть возможность покрытия картины лаком и текстурным гелем, обрамления багетом и упаковки в праздничную бумагу.

Печать на холсте делает фотографию гораздо праздничнее и наряднее. Фактура хлопка создает интересный эффект, благодаря которому картиной можно наслаждаться часами напролет. Особенно оригинальным вариантом является печать обработанной фотографии. Обработка делает фото более похожим на картину и приятно удивляет обладателя, который привык видеть свое обычное фото. Такой подарок станет необычным сюрпризом и поразит всех гостей торжества.',
            ]),
            new Location([
                'id' => 36,
                'code' => 'voronezh',
                'name' => 'Воронеж',
                'nameForm' => 'Воронеже',
                'phone' => '+7 (900) 933-15-44',
                'email' => 'dudina-anna@yandex.ru',
                'vk' => 'holstor36',
                'widgetId' => '136115481',
                'address' => 'Воронеж, Московский просп., 129/1, ТРЦ «Московский проспект», 2 этаж',
                'coords' => [51.717993, 39.178539],
                'popular' => [
                    '{price1}' => '1890р.', // 40x60
                    '{price2}' => '2390р.', // 50x70
                    '{price3}' => '2390p.', // 60x60
                    '{price4}' => '2890р.', // 60x80
                ],
                'prices' => [
                    'rectangle' => [
                        '20x30' => '1190',
                        '30x40' => '1390',
                        '40x60' => '1890',
                        '50x70!' => '2390',
                        '60x80' => '2890',
                        '70x100' => '3690',
                        '80x90' => '3690',
                        '80x120' => '4390',
                    ],
                    'square' => [
                        '20x20' => '1090',
                        '30x30' => '1290',
                        '40x40' => '1690',
                        '50x50' => '1890',
                        '60x60!' => '2390',
                        '70x70' => '2890',
                        '100x100' => '4590',
                    ],
                    'panorama' => [
                        '30x90' => '1890',
                        '40x120' => '2790',
                    ],
                ],
                'seo' => 'Где заказать печать фото в Воронеже, наверное, знает каждый житель города. Для этого есть масса фотосалонов и онлайн-сервисов, которые перенесут любое изображение на бумагу. Бумажные фотографии приятно разглядывать и вспоминать радостные моменты.

Но что делать, если хочется украсить любимой фотографией домашний интерьер, чтобы она идеально вписалась в дизайн и смотрелась роскошно? Предлагаем вам печать фото на холсте! Благодаря современным технологиям теперь возможно перенести любое изображение на настоящий хлопковый холст, превратив фотографию в настоящую картину.

Печать на холсте может стать также идеальным вариантом для подарка. Даже человек, у которого уже все есть, непременно удивится, увидев себя и своих родных на красивой картине. Печать на холсте значительно выигрывает у картины, нарисованной руками художника. Такой портрет в точности передаст уникальную внешность человека и не исказит черты лица. При этом печать занимает короткое время и очень экономна.

Теперь возможность быстро заказать качественные картины в Воронеже стала реальностью!',
            ]),
            new Location([
                'id' => 46,
                'code' => 'kursk',
                'name' => 'Курск',
                'nameForm' => 'Курске',
                'email' => 'dudina-anna@yandex.ru',
                'coords' => false,
                'popular' => [
                    '{price1}' => '1390р.',
                    '{price2}' => '1690р.',
                    '{price3}' => '1690p.',
                    '{price4}' => '1990р.',
                ],
                'prices' => [
                    'rectangle' => [
                        '20x30' => '690',
                        '30x40' => '890',
                        '40x60' => '1390',
                        '50x70!' => '1690',
                        '60x80' => '1990',
                        '80x120' => '2990',
                    ],
                    'square' => [
                        '20x20' => '590',
                        '30x30' => '790',
                        '40x40' => '990',
                        '50x50' => '1390',
                        '60x60!' => '1690',
                        '100x100' => '3990',
                    ],
                    'panorama' => [
                        '30x90' => '1490',
                        '40x120' => '1990',
                    ],
                ],
            ]),
            new Location([
                'id' => 57,
                'code' => 'orel',
                'name' => 'Орел',
                'nameForm' => 'Орле',
                'phone' => '+7 (919) 282-83-33',
                'email' => 'dudina-anna@yandex.ru',
                'vk' => 'holstor57',
                'coords' => false,
                'popular' => [
                    '{price1}' => '1390р.',
                    '{price2}' => '1690р.',
                    '{price3}' => '1690p.',
                    '{price4}' => '1990р.',
                ],
                'prices' => [
                    'rectangle' => [
                        '20x30' => '690',
                        '30x40' => '890',
                        '40x60' => '1390',
                        '50x70!' => '1690',
                        '60x80' => '1990',
                        '80x120' => '2990',
                    ],
                    'square' => [
                        '20x20' => '590',
                        '30x30' => '790',
                        '40x40' => '990',
                        '50x50' => '1390',
                        '60x60!' => '1690',
                        '100x100' => '3990',
                    ],
                    'panorama' => [
                        '30x90' => '1490',
                        '40x120' => '1990',
                    ],
                ],
            ]),
            new Location([
                'id' => 92,
                'code' => 'sevastopol',
                'name' => 'Севастополь',
                'nameForm' => 'Севастополе',
                'phone' => '+7 (978) 258-87-33',
                'email' => 'holstor92@gmail.com',
                'vk' => 'pechat_foto_na_holste_sevastopol',
                'instagram' => 'holstor_sevastopol',
                'coords' => false,
                'popular' => [
                    '{price1}' => '1690р.',
                    '{price2}' => '2190р.',
                    '{price3}' => '2190р.',
                    '{price4}' => '2690р.',
                ],
                'prices' => [
                    'rectangle' => [
                        '30x40' => '1190',
                        '40x60!' => '1690',
                        '50x70!' => '2190',
                        '60x80' => '2690',
                        '80x120' => '3990',
                    ],
                    'square' => [
                        '30x30' => '990',
                        '40x40!' => '1390',
                        '50x50!' => '1790',
                        '60x60' => '2190',
                        '100x100' => '3990',
                    ],
                    'panorama' => [
                        '30x90' => '2190',
                        '40x120' => '2690',
                    ],
                ],
            ]),
            new Location([
                'id' => 23,
                'code' => 'sochi',
                'name' => 'Сочи',
                'phone' => '+7 (918) 915-30-36',
                'email' => 'sochi@holstor.ru',
                'vk' => 'club137140403',
                'coords' => false,
                'popular' => [
                    '{price1}' => '1690р.',
                    '{price2}' => '2190р.',
                    '{price3}' => '2190р.',
                    '{price4}' => '2690р.',
                ],
                'prices' => [
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
                ],
            ]),
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

    public static function getCurrent()
    {
        $current = \Request::cookie('location');
        $locations = self::getList();
        if (!$locations->offsetExists($current)) {
            return new Location();
        }
        return $locations[$current];
    }
}
