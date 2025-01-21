<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function artikal_list()
    {
        return view('main.admin_panel.article_list');
    }

    public function dockument_list()
    {
        return view('main.admin_panel.article_list');
    }

    public function rekomend_list()
    {
        return view('main.admin_panel.article_list');
    }
    
}
