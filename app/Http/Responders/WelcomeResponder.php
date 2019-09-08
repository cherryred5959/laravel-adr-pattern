<?php

declare(strict_types=1);

namespace App\Http\Responders;

use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

/**
 * Class WelcomeResponder
 * @package App\Http\Responders
 */
class WelcomeResponder
{
    /**
     * @return View|JsonResponse
     */
    public function send()
    {
        if (request()->wantsJson()) {
            return response()->json(['Hello, World']);
        }

        return view('welcome');
    }
}
