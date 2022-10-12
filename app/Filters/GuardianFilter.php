<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class GuardianFilter extends ApiFilter {

    protected $safeParms = [
        'firstName' => ['eq'],
        'lastName' => ['eq'],
        'gender' => ['eq'],
        'birthdate' => ['eq'],
    ];

    protected $columnMap = [
        'firstName' => 'first_name',
        'lastName' => 'last_name',
        'birthDate' => 'birth_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];


}
