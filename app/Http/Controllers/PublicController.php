<?php

namespace App\Http\Controllers;

use App\Mail\Request;

class PublicController extends Controller
{
    public function index()
    {
        $popular = file_get_contents(public_path('images/popular.svg'));
        $clients = collect(\File::allFiles(public_path('images/clients')))
            ->map(function ($value) {
                /** @var \SplFileInfo $value */
                return str_replace('\\', '/', str_replace(public_path(), '', $value->getPathname()));
            })
            ->unique();
        $reviews = collect(\File::allFiles(public_path('images/reviews')))
            ->map(function ($value) {
                /** @var \SplFileInfo $value */
                return str_replace('\\', '/', str_replace(public_path(), '', $value->getPathname()));
            })
            ->unique();
        $work = collect(\File::allFiles(public_path('images/work')))
            ->map(function ($value) {
                /** @var \SplFileInfo $value */
                return str_replace('\\', '/', str_replace(public_path(), '', $value->getPathname()));
            })
            ->unique();
        return view('index', [
            'popular' => strtr($popular, $this->location->popular),
            'clients' => $clients,
            'reviews' => $reviews,
            'work' => $work,
        ]);
    }

    public function order()
    {
        $data = \Request::validate([
            'name' => 'string',
            'phone' => 'required',
            'email' => 'email',
        ]);
        \Mail::to($this->location->email)
            ->send(new Request('Заказ картины', $data['name'], $data['phone'], $data['email'], \Request::ip(), $this->location->name));
        if (!\Mail::failures()) {
            return response()->json(['result' => true]);
        }
        return abort(500, implode(', ', \Mail::failures()));
    }

    public function franch()
    {
        $data = \Request::validate([
            'name' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'city' => 'required',
        ]);
        $result = \Mail::to('dudina-anna@yandex.ru')
            ->send(new Request('Запрос на франшизу', $data['name'], $data['phone'], $data['email'], \Request::ip(), $data['city']));
        if ($result) {
            return response()->json(['result' => $result]);
        }
        return abort(500);
    }
}
