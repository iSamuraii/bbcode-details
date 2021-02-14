<?php

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less')
        ->js(__DIR__.'/js/dist/forum.js'),

    (new Extend\Formatter())
        ->configure(function (Configurator $configurator) {
            $configurator->BBCodes->addCustom(
                '[SPOILER title={TEXT1;optional}]{TEXT2}[/SPOILER]',
                '<details><summary>{TEXT1}</summary><div>{TEXT2}</div></details>'
            );
        }),
];
