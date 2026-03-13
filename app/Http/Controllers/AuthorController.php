<?php

namespace App\Http\Controllers;

use App\Jobs\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function create(string $name)
    {
        Author::dispatch($name);
        return "Done";
    }
}
