<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Contact;
use Session;
use Image;
use File;
use View;

class ContactsController extends Controller
{
    public function __construct()
    {
        //parent::__construct();
    }

    public function index()
    {
        $contacts = Contact::orderBy('id', 'DESC')->get();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Contact::$rules);

        $data = $request->all();

        try {
            $contact = Contact::create($data);
            Session::flash('flash_message', 'Contact updated');
        } catch (Exception $e) {
            Session::flash('flash_message', 'Error occured');
        }
        return redirect('contacts');
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, Contact::$rules);

        $data = $request->all();
        $contact = Contact::findOrFail($id);
        
        try {
           $contact->update($data);
           Session::flash('flash_message', 'Contact updated');
        } catch (Exception $e) {
            Session::flash('flash_message', 'Error occured');
        }
        
        return redirect('contacts');
    }

    public function destroy($id)
    {
        try {
            Contact::destroy($id);
            Session::flash('flash_message', 'Contact deleted');
        } catch (Exception $e) {
            Session::flash('flash_message', 'Error deleting contact');
        }

        return redirect('contacts');
    }
}