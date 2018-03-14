<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function index() {
        $popular = file_get_contents(public_path('images/popular.svg'));
        $clients = collect(\File::allFiles(public_path('images/clients')))
            ->map(function($value) {
                /** @var \SplFileInfo $value */
                return str_replace('\\', '/', str_replace(public_path(), '', $value->getPathname()));
            })
            ->unique();
        $reviews = collect(\File::allFiles(public_path('images/reviews')))
            ->map(function($value) {
                /** @var \SplFileInfo $value */
                return str_replace('\\', '/', str_replace(public_path(), '', $value->getPathname()));
            })
            ->unique();
        $work = collect(\File::allFiles(public_path('images/work')))
            ->map(function($value) {
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

    public function request() {
        dd(\Request::all());
    }
}
