<?php

namespace PersianFla\Persian\Listener;

use Flarum\Event\DiscussionWillBeSaved;
use Illuminate\Contracts\Events\Dispatcher;
use PersianFla\Persian\Util\Str;

class FixDiscussionSlug
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(DiscussionWillBeSaved::class, [$this, 'fixSlug']);
    }

    public function fixSlug(DiscussionWillBeSaved $event)
    {
        $event->discussion->slug = Str::slug($event->discussion->title);
    }
}
