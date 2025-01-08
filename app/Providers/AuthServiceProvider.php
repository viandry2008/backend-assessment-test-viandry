<?php

namespace App\Providers;

use App\Models\DebitCard;
use App\Models\DebitCardTransaction;
use App\Policies\DebitCardPolicy as PoliciesDebitCardPolicy;
use App\Policies\DebitCardTransactionPolicy as PoliciesDebitCardTransactionPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        DebitCard::class => PoliciesDebitCardPolicy::class,
        DebitCardTransaction::class => PoliciesDebitCardTransactionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}
