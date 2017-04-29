<?php

use craft\elements\Entry;
use craft\helpers\UrlHelper;

return [
    'endpoints' => [
		'eat/<slug:{slug}>.json' => function($slug) {
		    return [
		        'criteria' => [
		            'section' => 'eat',
		            'slug' => $slug
		        ],
		        'one' => true,
		        'transformer' => function(craft\elements\Entry $entry) {
		            return [
		                'title' => $entry->title,
		                'faviconUrl' => $entry->faviconUrl,
		                'touchIconUrl' => $entry->touchIconUrl
		            ];
		        },
		    ];
		},
    ]
];
