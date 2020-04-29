<?php

namespace App\View\Components;

use App\Post;
use Illuminate\View\Component;

class featurePosts extends Component
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
        return view('components.feature_posts',[
            'feature_posts' => $this->feature_posts()
        ]);
    }

    public function feature_posts()
    {
        return Post::with('category')->latest('updated_at')->take(6)->get();
    }
}