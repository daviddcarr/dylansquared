<?php

namespace App\Nova\Metrics;

use Illuminate\Http\Request;
use Laravel\Nova\Metrics\Value;
use App\Rsvp;

class TotalGuests extends Value
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function calculate(Request $request)
    {
        $rsvps = Rsvp::get();
        $totalGuests = count($rsvps);

        foreach ($rsvps as $rsvp) {
            if ($rsvp->guest == 'yes') {
                $totalGuests++;
            }
            if ($rsvp->num_of_children > 0) {
                $totalGuests = $totalGuests + $rsvp->num_of_children;
            }
        }

        return $this->result($totalGuests);
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [];
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'total-guests';
    }
}
