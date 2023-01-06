<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function about_us()
    {
        return view('web.about-us');
    }
    public function services()
    {
        $services = __('response.services');
        return view('web.services', compact('services'));
    }
    public function service($id)
    {

        $results = __('response.services');
        foreach ($results as $key => $value) {
            $service =  (object)$value;
            if ($id == $key) {
                return view('web.service', compact('service','id'));
            }
        }
        return redirect()->route('web.index');
    }

    public function service_more($service, $id)
    {
        $results = __('response.services');
        foreach ($results as $key => $value) {
            $data =  (object)$value;
            if ($key == $service) {
                foreach($data->lists as $key1 => $value1){
                    $item =  (object)$value1;
                    if ($key1 == $id) {
                        return view('web.service-more', compact('item'));
                    }
                }
            }
        }
        return redirect()->route('web.index');
    }
    public function contact_us()
    {
        return view('web.contact-us');
    }
    public function contact_us_store(Request $request)
    {
        $request->validate([
            'name' => "required",
            'phone' => "required",
            'email' => "nullable",
            'message' => "required",
        ]);
        DB::beginTransaction();
        $contact = ContactUs::create($request->except('_token'));
        DB::commit();
        return redirect()->back()->with('success', 'Thank you for contact us, our agent will contact you soon.');
    }
    public function subscriber(Request $request)
    {
        $request->validate([
            'email' => "nullable",
        ]);
        DB::beginTransaction();
        $contact = Subscriber::create($request->except('_token'));
        DB::commit();
        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter.');
    }

    public function terms_conditions()
    {
        return redirect()->route('web.coming.soon');
    }
    public function privacy_policy()
    {
        return redirect()->route('web.coming.soon');
    }
    public function faq()
    {
        return redirect()->route('web.coming.soon');
    }
    public function gallery()
    {
        return redirect()->route('web.coming.soon');

    }
    public function coming_soon(){
        return view('layouts.coming-soon');
    }
    public function branding_events($id)
    {
        $results = __('response.branding_events.events');
        foreach ($results as $key => $value) {
            $item =  (object)$value;
            if ($id == $key) {
                return view('web.branding-event', compact('item'));
            }
        }
        return redirect()->route('web.index');
    }
}
