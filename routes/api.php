<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route :: prefix('v1') -> group(function() {

    Route :: get('/projects', [ProjectController :: class, 'projectIndex']);
});
