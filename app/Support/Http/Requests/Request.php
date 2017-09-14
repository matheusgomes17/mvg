<?php

namespace MVG\Support\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Abstract Class Request
 * @package MVG\Support\Http\Requests
 */
abstract class Request extends FormRequest
{
    /**
     * @var string
     */
    protected $error = '';

    /**
     * @return $this
     */
    public function forbiddenResponse()
    {
        if (empty($error)) {
            $this->error = trans('auth.general_error');
        }

        return redirect()->back()->withErrors($this->error);
    }
}