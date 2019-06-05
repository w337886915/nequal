<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\Administrator\ContactRequest;

class ContactController extends Controller
{

    public function __construct()
    {
        static::$activeNavId = 'website.company.contact';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Contact $contact)
    {
        $this->authorize('index',$contact);

        $contacts = $contact->recent()->paginate(20);

        return backend_view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Contact $contact)
    {
        $this->authorize('create',$contact);

        return backend_view('contact.create_and_edit', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request, Contact $contact)
    {
        $this->authorize('create', $contact);

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', '添加成功.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $this->authorize('update', $contact);

        return backend_view('contact.create_and_edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        $this->authorize('update', $contact);

        $contact->update($request->all());

        return $this->redirect('contacts.index')->with('success', '更新成功.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $this->authorize('destroy', $contact);

        $contact->delete();

        return $this->redirect()->with('success', '删除成功.');
    }
}
