<?php

return [

    /**
     * In production, the SPA page will be located in the filesystem.
     *
     * In development, the SPA page will be on an external server. This
     * page will be passed as an environment variable (NUXT_URL).
     */
    'page' => env('NUXT_URL', public_path('_nuxt/index.html')),

];
