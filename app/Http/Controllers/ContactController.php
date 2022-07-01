<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function review_check(Request $request){
        $valid = $request->validate([
            'NorN' => 'required|min:4|max:30',
            'ContEmail' => 'required|min:4|max:100',
            'Subject',
            'message'=> 'required|min:15|max:500',
        ]);

        $review= new ContactModel();
        $review->NorN = $request->input('NorN');
        $review->ContEmail = $request->input('ContEmail');
        $review->Subject = $request->input('Subject');
        $review->message = $request->input('message');

        $review->save();
        return redirect()->route('/', app()->getLocale());
    }

}
