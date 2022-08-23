<?php

namespace App\View\Components;

use Illuminate\View\Component;

class itemCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imageSrc;
    public $title;
    public $price; 
    public $oldPrice;

    public function __construct($imageSrc, $title, $price, $oldPrice=NULL)
    {
        $this->imageSrc = $imageSrc;
        $this->title = $title;
        $this->price = $price; 
        $this->oldPrice = $oldPrice;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item-card');
    }
}
