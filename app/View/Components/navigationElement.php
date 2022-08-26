<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class navigationElement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $categories;
    public $count;

    public function __construct()
    {
      $cat =  Category::all();
      $this->categories = $cat;
      $this->count = $this->getCartObjectCount();

    }
    public function getCartObjectCount(){
        $count = 0;
        $cart = session()->get('cart');
        if ($cart) {
            $count = count($cart);
        }
        return $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      return view('components.navigationElement');
    }
}
