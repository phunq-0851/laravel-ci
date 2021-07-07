<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;
use App\Events\DiscountEvent;

class DiscountController extends Controller
{
    public function create(Request $request)
    {
      $discount = new Discount;
      $discount->content = $request->content;
      $discount->title = $request->title;
      $discount->save();
      // dd($request->all());
      echo "casca";
      event(new DiscountEvent($discount));

      return redirect('/');
    }
}
