<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\User; // Replace with your actual User model

class StudentsImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            $name = $row[0];    //(0 for Name)
            $email = $row[1];   //(1 for Email)
            $phone = $row[2];   //(2 for Phone)

            User::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
            ]);
        }
    }
}
