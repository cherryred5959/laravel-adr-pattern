<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Http\Responders\WelcomeResponder;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

/**
 * Class WelcomeAction
 * @package App\Http\Actions
 */
class WelcomeAction
{
    /**
     * @var WelcomeResponder
     */
    private $responder;

    /**
     * WelcomeAction constructor.
     * @param WelcomeResponder $responder
     */
    public function __construct(WelcomeResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * @return JsonResponse|View
     */
    public function __invoke()
    {
        return $this->responder->send();
    }
}
