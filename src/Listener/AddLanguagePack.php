<?php

namespace PersianFla\Persian\Listener;

use Flarum\Event\ConfigureLocales;
use Illuminate\Contracts\Events\Dispatcher;

class AddLanguagePack
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureLocales::class, [$this, 'addLanguage']);
    }

    public function addLanguage(ConfigureLocales $event)
    {
        $event->loadLanguagePackFrom(__DIR__.'/../..');
    }
}
