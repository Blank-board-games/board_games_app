<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function delete($id) {
    $subscription = Subscription::where('id', $id)->first();
    $subscription->delete();

    Session::flash('message_subscription_del', "Subscription deleted succesfully!");
    return redirect()->back();
  }

  public function add()
  {
    $sub_email = $_POST['subscribe'];
    $subscription = Subscription::create([
      'email' => $sub_email
    ]);

    Session::flash('message_subscription_add', "Subscribed succesfully!");
    return redirect()->back();
  }
}
