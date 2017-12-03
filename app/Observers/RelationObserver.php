<?php

namespace App\Observers;

use App\Campaign;
use App\Models\Character;
use App\Models\CharacterRelation;
use App\Models\Relation;
use App\Traits\RelationTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class RelationObserver
{
    public function creating(Relation $relation)
    {
        $relation->campaign_id = Session::get('campaign_id');
    }

    public function created(Relation $relation)
    {
        if (request()->has('two_way')) {
            // Make sure we're not creating an infinite loop
            $data = [
                'owner_id' => $relation->target_id,
                'target_id' => $relation->owner_id,
                'campaign_id' => $relation->campaign_id,
                'relation' => $relation->relation,
                'is_private' => $relation->is_private,
            ];
            $reverse = Relation::where($data)->first();
            if (empty($reverse)) {
                // Create reverse
                $r = new Relation();
                $r->create($data);
            }
        }
    }
}