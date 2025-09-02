<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Student_Last_Name');
            $table->string('Last');
            $table->string('Midle');
            $table->string('Home_address');
            $table->string('City');
            $table->string('State');
            $table->string('Zip_Code');
            $table->string('Student_Email_Address')->unique();
            $table->string('Student_Home_Phone');
            $table->string('date_of_birth');
            $table->string('Gender');
            $table->string('Place_pf_Birth_City_state');
            $table->string('Country');
            // Mother/Guardian Information
            $table->string('Mother_Guardian_Last_Name');
            $table->string('Mother_First_Name');
            $table->string('Mother_Address');
            $table->string('Mother_Home_Phone');
            $table->string('Mother_Cell_Phone');
            $table->string('Mother_Email');
            $table->string('Mother_Place_of_Employment'); 
            $table->string('Mother_Work_Phone');
            // Father/Guardian Information
            $table->string('Father_Guardian_Last_Name');
            $table->string('Father_First_Name');
            $table->string('Father_Address');
            $table->string('Father_Home_Phone');
            $table->string('Father_Cell_Phone');
            $table->string('Father_Email');
            $table->string('Father_Place_of_Employment');
            $table->string('Father_Work_Phone');
            // Automated Message Preferences
            $table->string('Best_Phone_Number_for_automated_call');
            $table->string('Best_Email_for_Automated_email');
            // Military Family Status
            $table->enum('militry_family_status',['active_duty', 'veteran', 'uniformed_service_member'])->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
