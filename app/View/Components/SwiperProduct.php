<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SwiperProduct extends Component
{
    public $title;
    public $data;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $data)
    {
        $this->title = $title;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = $this->data;
        return view('components.swiper-product', compact('data'));
    }
}
