<?php

use Illuminate\Contracts\Events\Dispatcher;
use PersianFla\Persian\Listener;

return function (Dispatcher $events) {
    $events->subscribe(Listener\AddLanguagePack::class);
    $events->subscribe(Listener\FixDiscussionSlug::class);
};
