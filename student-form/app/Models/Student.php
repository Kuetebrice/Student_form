<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'Student_Last_Name',
        'Last',
        'Midle',
        'Home_address',
        'City',
        'State',
        'Zip_Code',
        'Student_Email_Address',
        'Student_Home_Phone',
        'date_of_birth',
        'Gender',
        'Place_pf_Birth_City_state',
        'Country',
        'Mother_Guardian_Last_Name',
        'Mother_First_Name',
        'Mother_Address',
        'Mother_Home_Phone',
        'Mother_Cell_Phone',
        'Mother_Email',
        'Mother_Place_of_Employment',
        'Mother_Work_Phone',
        'Father_Guardian_Last_Name',
        'Father_First_Name',
        'Father_Address',
        'Father_Home_Phone',
        'Father_Cell_Phone',
        'Father_Email',
        'Father_Place_of_Employment',
        'Father_Work_Phone',
        'Best_Phone_Number_for_automated_call',
        'Best_Email_for_Automated_email',
    ];
}
