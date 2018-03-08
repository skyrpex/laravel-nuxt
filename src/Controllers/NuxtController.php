<?php

namespace Pallares\LaravelNuxt\Controllers;

use Illuminate\Http\Request;

class NuxtController
{
    /**
     * Handle the SPA request.
     */
    public function __invoke(Request $request) : string
    {
        // If the request expects JSON, it means that
        // someone sent a request to an invalid route.
        if ($request->expectsJson()) {
            abort(404);
        }

        return $this->renderNuxtPage();
    }

    /**
     * Render the Nuxt page.
     */
    protected function renderNuxtPage() : string
    {
        // In production, this will display the precompiled nuxt page.
        // In development, this will fetch and display the page from the nuxt's dev server.
        return file_get_contents(config('nuxt.page'));
    }
}
