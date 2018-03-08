<?php

namespace Pallares\LaravelNuxt\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NuxtController extends Controller
{
    /**
     * Handle the SPA request.
     *
     * @param Request $request
     * @return string
     */
    public function __invoke(Request $request)
    {
        // If the request expects JSON, it means that
        // someone sent a request to an invalid route.
        if (($request->ajax() && ! $request->pjax()) || $request->wantsJson()) {
            abort(404);
        }

        return $this->renderNuxtPage();
    }

    /**
     * Render the Nuxt page.
     *
     * @return string
     */
    protected function renderNuxtPage()
    {
        // In production, this will display the precompiled nuxt page.
        // In development, this will fetch and display the page from the nuxt's dev server.
        return file_get_contents(config('nuxt.page'));
    }
}
