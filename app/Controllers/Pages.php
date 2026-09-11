<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private function layout($page): string
        {
        return view('layout/begin')
            . view($page)
            . view('layout/aside')
            . view('layout/end');
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
    public function article(): string
        {
            return view('layout/begin')
                . view('pages/article')
                . view('layout/end');
        }
}
