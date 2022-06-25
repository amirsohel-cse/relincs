<?php

use App\Models\hubbulletin;
use App\Models\HubMedia;
use App\Models\Hubs;
use App\Models\HubWall;
use App\Models\User;

function loadingState($key, $title)
{
    $loadingSpinner = '
        <div wire:loading wire:target="' . $key . '" wire:key="' . $key . '"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> loading</div>
        <div wire:loading.remove wire:target="' . $key . '" wire:key="' . $key . '">' . $title . '</div>
    ';

    return $loadingSpinner;
}

function loadingStateWithText($key, $title)
{
    $loadingSpinner = '
        <div wire:loading wire:target="' . $key . '" wire:key="' . $key . '"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></div> ' . $title . '
    ';

    return $loadingSpinner;
}

function loadingStateWithProcess($key, $title)
{
    $loadingSpinner = '
        <div wire:loading wire:target="' . $key . '" wire:key="' . $key . '"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></div>
        <span wire:loading wire:target="' . $key . '" wire:key="' . $key . '">Processing</span>
        <div wire:loading.remove wire:target="' . $key . '" wire:key="' . $key . '">' . $title . '</div>
    ';

    return $loadingSpinner;
}

function totalHubs($user_id)
{
    $hubs = Hubs::where('user_id', $user_id)->get()->count();

    return $hubs;
}

function user($user_id)
{
    $user = User::where('id', $user_id)->first();

    return $user;
}

function hubMedia($hub_id)
{
    $media = HubMedia::where('hubs_id', $hub_id)->get();

    return $media;
}


function hubWalls($hub_id)
{
    $walls = HubWall::where('hubs_id', $hub_id)->get();

    return $walls;
}


function hubBulletins($hub_id)
{
    $bulletin = hubbulletin::where('hubs_id', $hub_id)->get();

    return $bulletin;
}