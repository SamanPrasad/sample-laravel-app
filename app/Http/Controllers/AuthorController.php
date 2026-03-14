<?php

namespace App\Http\Controllers;

use App\Jobs\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function create(string $name, string $type)
    {
        Author::dispatch($name)->onQueue($type);
        return "Done!";
    }
}
