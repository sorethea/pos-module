<?php

namespace Modules\Pos\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies =[

    ];
    public function register()
    {
        $this->registerPolicies();
        parent::register();
    }
}
