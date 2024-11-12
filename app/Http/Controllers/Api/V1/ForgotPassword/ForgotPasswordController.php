<?php

namespace App\Http\Controllers\Api\V1\ForgotPassword;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\ForgotPassword\ForgotPasswordRepository;

class ForgotPasswordController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected ForgotPasswordRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return $this->repository->sendResetLinkEmail($request);
    }
}
