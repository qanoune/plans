<?php

return [

    /*
     * The model which handles the plans tables.
     */

    'models' => [

        'plan' => \Qanoune\Plans\Models\PlanModel::class,
        'subscription' => \Qanoune\Plans\Models\PlanSubscriptionModel::class,
        'feature' => \Qanoune\Plans\Models\PlanFeatureModel::class,
        'usage' => \Qanoune\Plans\Models\PlanSubscriptionUsageModel::class,

        'stripeCustomer' => \Qanoune\Plans\Models\StripeCustomerModel::class,

    ],

];
