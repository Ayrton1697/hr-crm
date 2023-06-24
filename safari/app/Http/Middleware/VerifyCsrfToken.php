<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'http://localhost/safari_group/safari/public/job_postings/create',
        'http://localhost/safari_group/safari/public/job_postings/edit/21',
        'http://localhost/safari_group/safari/public/dashboard/status_search',
        'http://localhost/safari_group/safari/public/dashboard/status_search_2'
    ];
}
