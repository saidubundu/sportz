<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('frontend.includes.categoryTable', function ($view){
            $categories = Category::with(['posts' => function($query){
                $query->published();
            }])->orderBy('name', 'asc')->simplePaginate(4);

            return $view->with('categories', $categories);
        });

        view()->composer('frontend.includes.blogPopular', function ($view){
            $popularPost = Post::published()->popular()->take(4)->get();

            return $view->with('popularPost', $popularPost);
        });

        view()->composer('frontend.includes.indexPopular', function ($view){
            $latestPost = Post::published()->popular()->take(2)->get();

            return $view->with('latestPost', $latestPost);
        });

        view()->composer('frontend.includes.footerPopular', function ($view){
            $latestPost = Post::published()->popular()->take(2)->get();

            return $view->with('latestPost', $latestPost);
        });
    }
}
