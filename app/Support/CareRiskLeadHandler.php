<?php
namespace App\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
final class CareRiskLeadHandler {
 public static function submit(Request $request, bool $english) {
  $recipient=config('carerisk-leads.email');
  if (!config('carerisk-leads.enabled') || !filter_var($recipient, FILTER_VALIDATE_EMAIL))
   return back()->with('lead_error', 'Contact form is not configured.');
  $key='care-lead:'.hash('sha256',(string)$request->ip());
  if (RateLimiter::tooManyAttempts($key, 4))
   return back()->with('lead_error','Too many requests. Please try again later.');
  RateLimiter::hit($key,3600);
  $d=$request->validate([
   'name'=>['required','string','max:120'],
   'email'=>['required','email','max:190'],
   'organization'=>['required','string','max:160'],
   'role'=>['nullable','string','max:120'],
   'message'=>['nullable','string','max:1500'],
   'website'=>['nullable','max:0'],
   'privacy_ack'=>['accepted'],
  ]);
  $body="New CareRisk pilot inquiry\nName: {$d['name']}\nEmail: {$d['email']}\nOrganization: {$d['organization']}\nRole: ".($d['role']??'')."\nMessage: ".($d['message']??'');
  try {
   Mail::raw($body, function($mail) use($recipient,$d) {
    $mail->to($recipient)->subject('CareRisk pilot inquiry')->replyTo($d['email'],$d['name']);
   });
  } catch (\Throwable $e) {
   report($e);
   return back()->with('lead_error','Mail delivery failed. Please try again later.');
  }
  return back()->with('lead_success',true);
 }
}
