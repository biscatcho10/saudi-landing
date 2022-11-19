<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Modules\Frontend\Entities\ContactRequest;
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
        $references = ContactRequest::pluck('reference_num')->toArray();

        return new ContactRequest([
            "exhibition" => "NPE Ex Riyadh 2022",
            "name" => $row[0],
            "nationality" => $row[3],
            "email" => $row[1],
            "phone_number" => $row[2],
            "profession" => $row[4],
            "reference_num" => $this->makeReference($references),
            "reason_id" => $this->reason($row[6]),
            "attended" => 0
        ]);
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

    protected function reason($reason)
    {
        dd($reason);
        return Reason::where('reason', $reason)->first()->id;
    }
}


//   0 => "Name"
//   1 => "Email"
//   2 => "Phone"
//   3 => "Nationality"
//   4 => "Profession"
//   5 => "Reference Number"
//   6 => "From Where"
//   7 => "Attending"
