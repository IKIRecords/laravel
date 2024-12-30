<?php

namespace App\Providers;

use App\Filament\Resources\CategoryResource;
use Filament\PluginServiceProvider;
use Illuminate\Support\ServiceProvider;
App\Providers\FilamentServiceProvider::class;

class FilamentServiceProvider extends PluginServiceProvider

{
    public function register(): void
    {
        parent::register();
        \Filament\Resources\Resource::registerResources([
            CategoryResource::class,
        ]);
    }
}
