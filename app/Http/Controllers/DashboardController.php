<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class DashboardController extends Controller
{
    public function get(Request $request){
        $bookCount = Book::totalBooks();
        $userCount = User::totalUsers();
        return view('admin.dashboard', compact(['bookCount','userCount']));
    }
}
