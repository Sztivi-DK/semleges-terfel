<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private function layout($page): string
    {
    return view('parts/begin')
        . view($page)
        . view('parts/end');
    }
    public function home(): string
    {
        return $this->layout('pages/mainboard');
    }
    public function old(): string
    {
        return $this->layout('pages/histories');
    }
    public function szobo(): string
    {
        return $this->layout('pages/szobo');
    }
    public function nb_one(): string
    {
        return $this->layout('pages/nb_one');
    }
}
