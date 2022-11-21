<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Modules\Frontend\Entities\ContactRequest;
use Laraeast\LaravelSettings\Facades\Settings;
use Mail;
use Modules\Frontend\Emails\RequestMail;
use Modules\HowKnow\Entities\Reason;

class ContactsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if($row[1] != "Email")
        {
            $references = ContactRequest::pluck('reference_num')->toArray();

            $contact = ContactRequest::create([
                "exhibition" => "NPE Ex Riyadh 2022",
                "name" => $row[0],
                "nationality" => $row[3],
                "email" => $row[1],
                "phone_number" => $row[2],
                "profession" => $row[4],
                "reference_num" => $this->makeReference($references),
                "reason_id" => 1,
                "attended" => 0
            ]);

            // send mail
            $this->sendEmail($contact->name, $contact->email, $contact->reference_num);
            return $contact;
        }
    }


    protected function makeReference($references)
    {
        $ref_num = rand(1000000, 9999999);

        if (!in_array($ref_num, $references)) {
            return $ref_num;
        } else {
            $this->makeReference($references);
        }
    }


    public function sendEmail($name, $email, $code)
    {
        $email_template = Settings::get('mail_message');
        $email_template = str_replace('{user_name}', $name, $email_template);

        $details = [
            'subject' => Settings::get('mail_subject'),
            'body' => $email_template,
            'actionText' => env('APP_NAME'),
            'actionURL' => url('/'),
            'code' => $code
        ];

        Mail::to($email)->send(new RequestMail($details));
    }
}


//   0 => "Name"
//   1 => "Email"
//   2 => "Phone"
//   3 => "Nationality"
//   4 => "Profession"
//   5 => "Reference Number"
