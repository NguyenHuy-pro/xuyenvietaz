<?php

namespace App\Http\Controllers\User\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index($userId = null)
    {
        $userAccess = 'article';
        return view('user.article.index', compact('userAccess'));
    }
}
