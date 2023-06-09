<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $exception)
    {
        if (!$request->wantsJson())
            return parent::render($request, $exception);

        if ($exception instanceof AuthorizationException || $exception instanceof  UnauthorizedHttpException) {
            return response(
                ["status" => "error", "errors" => ["messages" => ["401Unauthorized or " . $exception->getMessage() . " or expired. You need torelogin."]]],401);
        }

        if ($exception instanceof NotFoundHttpException) {
            return response(
                ["status" => "error", "errors" => ["messages" => ["404 Notfound"]]],404);
        }
        return parent::render($request, $exception);    }
}
