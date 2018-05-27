<?php

namespace Sijad\Persian\Listener;

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
        $event->loadLanguagePackFrom(__DIR__.'/../../fa_IR/');
    }
}
