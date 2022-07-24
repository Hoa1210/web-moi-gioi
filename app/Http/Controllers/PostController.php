<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    private object $model;

    public function __construct()
    {
        $this->model = Post::query();
    }

    public function index() : LengthAwarePaginator{
        return $this->model->paginate();
    }
}
