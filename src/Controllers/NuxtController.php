<?php

namespace Pallares\LaravelNuxt\Controllers;

use Illuminate\Http\Request;

class NuxtController
{
    public function __invoke(Request $request)
    {
        // If the request expects JSON, it means that
        // someone sent a request to an invalid route.
        if ($request->expectsJson()) {
            abort(404);
        }

        // In production, this will display the precompiled nuxt page.
        // In development, this will fetch and display the page from the nuxt's dev server.
        return file_get_contents(config('nuxt.page'));
    }
}
