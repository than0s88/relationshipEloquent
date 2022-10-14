<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ChildrenFilter extends ApiFilter {

    protected $safeParms = [
        'guardianId' => ['eq'],
        'schoolId' => ['eq'],
        'firstName' => ['eq'],
        'lastName' => ['eq'],
        'gender' => ['eq'],
        'birthDate' => ['eq'],
    ];

    protected $columnMap = [
        'guardianId' => 'guardian_id',
        'schoolId' => 'school_id',
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
