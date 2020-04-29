<?php

namespace App\View\Components;

use App\Category;
use App\Post;
use Illuminate\View\Component;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar',[
            'categories'=> Category::with('posts')->get(),
            'latest' => Post::take(5)->latest('created_at')->get()
        ]);
    }
}