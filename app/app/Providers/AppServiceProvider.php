<?php

namespace App\Providers;

use App\Lib\Modules\StoredImageOne;
use App\Lib\Modules\StoredImageTwo;
use Illuminate\Support\Facades\URL;
use App\Lib\Modules\StoredImageFour;
use Illuminate\Pagination\Paginator;
use App\Lib\Modules\StoredImageThree;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Lib\Modules\StoredSingleComponent;
use App\Lib\Modules\CloneCollectionDesignPlan;
use App\Lib\Repositories\CollectionPlannerInterface;
use App\Lib\Repositories\StoredDocumentOneInterface;
use App\Lib\Repositories\StoredDocumentTWOInterface;
use App\Lib\Repositories\StoredDocumentFOURInterface;
use App\Lib\Repositories\StoredDocumentTHREEInterface;
use App\Lib\Repositories\StoredSingleDocumentInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        URL::forceScheme('https');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Schema::defaultStringLength(191);
        if(env('APP_ENV') !== 'local') {
            $this->app['request']->server->set('HTTPS', true);
        }

        $this->app->bind(
            StoredDocumentOneInterface::class,
            StoredImageOne::class
        );

        $this->app->bind(
            StoredDocumentTWOInterface::class,
            StoredImageTwo::class
        );

        $this->app->bind(
            StoredDocumentTHREEInterface::class,
            StoredImageThree::class
        );

        $this->app->bind(
            StoredDocumentFOURInterface::class,
            StoredImageFour::class
        );

        $this->app->bind(
            StoredSingleDocumentInterface::class,
            StoredSingleComponent::class
        );

        $this->app->bind(
            CollectionPlannerInterface::class,
            CloneCollectionDesignPlan::class
        );
    }
}
