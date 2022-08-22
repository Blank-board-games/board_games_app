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
    public $discount;

    public function __construct($imageSrc, $title, $price, $discount=NULL)
    {
        $this->imageSrc = $imageSrc;
        $this->itemtitle = $title;
        $this->price = $price; 
        $this->discount = $discount;
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
