<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $guarded = [];

    public static function getSorted($columns = ['*']) {
        $participants = (new static)->newQuery()->get(
            is_array($columns) ? $columns : func_get_args()
        );

        $sorted = new \stdClass();
        $sorted->groomsmenC = [];
        $sorted->groomsmenS = [];
        $sorted->parentsC = [];
        $sorted->parentsS = [];
        $sorted->siblingsC = [];
        $sorted->siblingsS = [];
        $sorted->officiants = [];
        $sorted->bouncers = [];
        $sorted->rings = [];
        $sorted->flowers = [];
        $sorted->photographers = [];
        $sorted->planners = [];
        $sorted->caterers = [];

        foreach ($participants as $participant) {
            switch ($participant->role) {
                case 'groomsman':
                    if ($participant->groom === "Selby") {
                        array_push($sorted->groomsmenS, $participant);
                    } else {
                        array_push($sorted->groomsmenC, $participant);
                    }
                    break;

                case 'parent':
                    if ($participant->groom === "Selby") {
                        array_push($sorted->parentsS, $participant);
                    } else {
                        array_push($sorted->parentsC, $participant);
                    }
                    break;

                case 'sibling':
                    if ($participant->groom === "Selby") {
                        array_push($sorted->siblingsS, $participant);
                    } else {
                        array_push($sorted->siblingsC, $participant);
                    }
                    break;

                case 'officiant':
                    array_push($sorted->officiants, $participant);
                    break;

                case 'bouncer':
                    array_push($sorted->bouncers, $participant);
                    break;
                case 'ring':
                    array_push($sorted->rings, $participant);
                    break;

                case 'flower':
                    array_push($sorted->flowers, $participant);
                    break;
                case 'photographer':
                    array_push($sorted->photographers, $participant);
                    break;

                case 'planner':
                    array_push($sorted->planners, $participant);
                    break;

                default:
                    array_push($sorted->caterers, $participant);
                    break;
            }
        }

        return $sorted;

    }
}
