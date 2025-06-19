<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DomainStoreRequest;
use App\Models\Domain;

class DomainController extends Controller {

    public function index() {
        $domains = Domain::orderby('id', 'desc')->paginate();
        return view('admin.domain.index')->with('domains', $domains);
    }

    public function create() {
        return view('admin.domain.create');
    }

    public function store(DomainStoreRequest $request) {
        try {
            Domain::create($request->except('_token'));
            return to_route('admin.domain.index')->with('success', 'Domain created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
