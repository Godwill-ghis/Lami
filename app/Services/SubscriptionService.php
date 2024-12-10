<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\DurationUnit;
use App\Enums\UserPlan;
use App\Models\Subscription;
use App\Models\User;
use App\Models\UserSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SubscriptionService
{
    protected $subscriptionName = null;
    protected $isActive = false;
    protected $limitUsed = 0;
    protected $durationUnit;
    protected $subscription;
    protected $startDate;
    protected $endDate = null;

    protected function setSubscriptionName($request)
    {
        match ((int)$request->input('plan')) {
            UserPlan::BASIC->value => $this->subscriptionName = UserPlan::BASIC->name,
            UserPlan::PREMIUM->value => $this->subscriptionName = UserPlan::PREMIUM->name,
            UserPlan::FREE->value => $this->subscriptionName = UserPlan::FREE->name
        };
    }

    protected function setSubscription()
    {
        if ($this->subscriptionName !== null) {

            $this->subscription = Subscription::where('name', $this->subscriptionName)->first();
        }
        return;
    }

    protected function setStartAndEndDate()
    {
        $this->startDate = Carbon::today();

        match ($this->durationUnit) {
            DurationUnit::MONTH->value => $this->endDate = $this->startDate->addMonth(),
            DurationUnit::YEAR->value => $this->endDate = $this->startDate->addYear(),
        };
    }

    protected function setDurationUnit()
    {
        $this->durationUnit = $this->subscription->duration_unit;
    }

    public function subscribeUser(Request $request, User $user)
    {

        if ((int)$request->input('plan') === UserPlan::FREE->value) {
            $isActive = true;
        }

        $this->setSubscriptionName($request);
        $this->setSubscription();

        if (! $this->subscription) {
            return redirect()->route('auth.register');
        }

        $this->setDurationUnit();
        $this->setStartAndEndDate();


        $subscription = UserSubscription::create(
            [
                'user_id' => $user->id,
                'subscription_id' => $this->subscription->id,
                'is_active' => $this->isActive,
                'limit_used' => $this->limitUsed,
                'start_date' => $this->startDate,
                'end_date' => $this->endDate
            ]
        );

        return ['subscriptionName' => $this->subscriptionName, 'subscription' => $subscription];
    }
}
