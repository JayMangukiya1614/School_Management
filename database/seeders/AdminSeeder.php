<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admin_s')->insert([
            [
                'First_Name' => "Jay",
                'Last_Name' => "Mangukiya",
                'Mobile_Nomber' => "9737520270",
                'Education' => "Undergraduate",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Gender' => "Male",
                'City' => "Bombay",
                'E_mail' => "JayMangukiya1614@gmail.com",
                'Password' => Hash::make("123456")
            ],

            [
                'First_Name' => "Kishan",
                'Last_Name' => "Parkhiya",
                'Mobile_Nomber' => "9313443788",
                'Education' => "Undergraduate",
                'Address' => "167 vrkshmani simada",
                'Gender' => "Male",
                'City' => "Bombay",
                'E_mail' => "kishan@gmail.com",
                'Password' => Hash::make("123456")
            ],

        ]);
        DB::table('student_r_s')->insert([
            [
                'ST_ID' => "ST0001",
                'First_Name' => "Jay ",
                'Middle_Name' => "Dhirubhai",
                'Last_Name' => "Mangukiya",
                'MobileNo' => "9737520270",
                'Gender' => "Male",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "10th",
                'Year' => "2022",
                'E_mail' => "JayMangukiya1614@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],

            [
                'ST_ID' => "ST0002",
                'First_Name' => "Kishan ",
                'Middle_Name' => "Maheshbhai",
                'Last_Name' => "Parakhiya",
                'MobileNo' => "9313443788",
                'Gender' => "Male",
                'Address' => "167 vrkshmani simada",
                'Class' => "10th",
                'Year' => "2022",
                'E_mail' => "kishan@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2020-09-20"
            ],


            [
                'ST_ID' => "ST0003",
                'First_Name' => "Krupali ",
                'Middle_Name' => "Mathukiya",
                'Last_Name' => "Praffulbhai",
                'MobileNo' => "7434039039",
                'Gender' => "Female",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "10th",
                'Year' => "2022",
                'E_mail' => "krupali@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],

            [
                'ST_ID' => "ST0004",
                'First_Name' => "Jency ",
                'Middle_Name' => "Jayshukhbhai",
                'Last_Name' => "Kachdiya",
                'MobileNo' => "9737520270",
                'Gender' => "Female",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "12th Com",
                'Year' => "2023",
                'E_mail' => "jency@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],


        

            [
                'ST_ID' => "ST0005",
                'First_Name' => "nayan ",
                'Middle_Name' => "bhratbhai",
                'Last_Name' => "ratanpara",
                'MobileNo' => "9016659270",
                'Gender' => "Male",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "12th Com",
                'Year' => "2023",
                'E_mail' => "nayan@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],
            [
                'ST_ID' => "ST0006",
                'First_Name' => "dharmik ",
                'Middle_Name' => "damjibhai",
                'Last_Name' => "mangukiya",
                'MobileNo' => "9016659270",
                'Gender' => "Male",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "12th Com",
                'Year' => "2023",
                'E_mail' => "nayan@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],
            [
                'ST_ID' => "ST0007",
                'First_Name' => "manthan ",
                'Middle_Name' => "ashvinbhai",
                'Last_Name' => "dhudhtra",
                'MobileNo' => "9016659270",
                'Gender' => "Male",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "12th Com",
                'Year' => "2023",
                'E_mail' => "nayan@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],
            [
                'ST_ID' => "ST0008",
                'First_Name' => "jeet ",
                'Middle_Name' => "sureshbhai",
                'Last_Name' => "patoliya",
                'MobileNo' => "9016659270",
                'Gender' => "Male",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "12th Com",
                'Year' => "2023",
                'E_mail' => "nayan@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],
            [
                'ST_ID' => "ST0009",
                'First_Name' => "hitesh",
                'Middle_Name' => "rangeetbhai",
                'Last_Name' => "baraiya",
                'MobileNo' => "9016659270",
                'Gender' => "Male",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "12th Com",
                'Year' => "2023",
                'E_mail' => "nayan@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],

            [
                'ST_ID' => "ST0010",
                'First_Name' => "mayank",
                'Middle_Name' => "rameshbhai",
                'Last_Name' => "dhameliya",
                'MobileNo' => "9016659270",
                'Gender' => "Male",
                'Address' => "110 Ishvarnagar Sitanagr Road Surat",
                'Class' => "12th Com",
                'Year' => "2023",
                'E_mail' => "nayan@gmail.com",
                'Religion' => "Hindu",
                'Date_Of_Birth' => "2003-01-04"
            ],

        ]);
        DB::table('classms')->insert([
            ['Class' => "8th"],
            ['Class' => "9th"],
            ['Class' => "10th"],
            ['Class' => "11th Sci"],
            ['Class' => "11th Com"],
            ['Class' => "12th Sci"],
            ['Class' => "12th Com"],


        ]);
        DB::table('yearms')->insert([
            ['Year' => "2020"],
            ['Year' => "2021"],
            ['Year' => "2022"],
            ['Year' => "2023"],



        ]);
        DB::table('subjectms')->insert([
            ['Subject' => "Gujrati"],
            ['Subject' => "English"],
            ['Subject' => "Maths"],
            ['Subject' => "Hindi"],
            ['Subject' => "Social Science"],
            ['Subject' => "Science"],
            ['Subject' => "Sanskrut"],
            ['Subject' => "Computer"],
            ['Subject' => "Account"],
            ['Subject' => "Stat"],
            ['Subject' => "Eco"],
            ['Subject' => "B.A"],
            ['Subject' => "S.P"],
            ['Subject' => "Chemistry"],
            ['Subject' => "Physics"],
            ['Subject' => "Biology"],
        ]);

        // id ST0001 marks entry 

        DB::table('marks_e_s')->insert([
            [
                'Student_Id' => "ST0001",
                'Student_Name' => "Jay Mangukiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Gujrati",
                'Student_Grade' => "A",
                'Total_Marks' => "100",
                'Obtain_Marks' => "90"
            ],

            [
                'Student_Id' => "ST0001",
                'Student_Name' => "Jay Mangukiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "English",
                'Student_Grade' => "B+",
                'Total_Marks' => "100",
                'Obtain_Marks' => "76"
            ],

            [
                'Student_Id' => "ST0001",
                'Student_Name' => "Jay Mangukiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Maths",
                'Student_Grade' => "A+",
                'Total_Marks' => "100",
                'Obtain_Marks' => "100"
            ],

            [
                'Student_Id' => "ST0001",
                'Student_Name' => "Jay Mangukiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Hindi",
                'Student_Grade' => "A",
                'Total_Marks' => "100",
                'Obtain_Marks' => "85"
            ],

            [
                'Student_Id' => "ST0001",
                'Student_Name' => "Jay Mangukiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Socail Science",
                'Student_Grade' => "A+",
                'Total_Marks' => "100",
                'Obtain_Marks' => "94"
            ],

            [
                'Student_Id' => "ST0001",
                'Student_Name' => "Jay Mangukiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Science",
                'Student_Grade' => "A",
                'Total_Marks' => "100",
                'Obtain_Marks' => "87"
            ],

            [
                'Student_Id' => "ST0001",
                'Student_Name' => "Jay Mangukiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Computer",
                'Student_Grade' => "A+",
                'Total_Marks' => "50",
                'Obtain_Marks' => "50"
            ],

            // end marks id ST0001 

            // start ST0002 marks entry 

            [
                'Student_Id' => "ST0002",
                'Student_Name' => "Kishan Parakhiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Gujrati",
                'Student_Grade' => "A",
                'Total_Marks' => "100",
                'Obtain_Marks' => "90"
            ],


            [
                'Student_Id' => "ST0002",
                'Student_Name' => "Kishan Parakhiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "English",
                'Student_Grade' => "B",
                'Total_Marks' => "100",
                'Obtain_Marks' => "70"
            ],

            [
                'Student_Id' => "ST0002",
                'Student_Name' => "Kishan Parakhiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Maths",
                'Student_Grade' => "A",
                'Total_Marks' => "100",
                'Obtain_Marks' => "90"
            ],


            [
                'Student_Id' => "ST0002",
                'Student_Name' => "Kishan Parakhiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Science",
                'Student_Grade' => "A",
                'Total_Marks' => "100",
                'Obtain_Marks' => "85"
            ],

            [
                'Student_Id' => "ST0002",
                'Student_Name' => "Kishan Parakhiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Socail Science",
                'Student_Grade' => "A+",
                'Total_Marks' => "100",
                'Obtain_Marks' => "95"
            ],

            [
                'Student_Id' => "ST0002",
                'Student_Name' => "Kishan Parakhiya",
                'Student_Class' => "10th",
                'Student_Year' => "2022",
                'Student_Subject' => "Sanskrut",
                'Student_Grade' => "A",
                'Total_Marks' => "100",
                'Obtain_Marks' => "82"
            ],






        ]);
        DB::table('markgrades')->insert([
            [
                'Grade' => "A+",
                'Star_Mark' => "100",
                'End_Mark' => "91",
                'Remark' => "Excellent"
            ],

            [
                'Grade' => "A",
                'Star_Mark' => "90",
                'End_Mark' => "81",
                'Remark' => "Excellent"
            ],

            [
                'Grade' => "B+",
                'Star_Mark' => "80",
                'End_Mark' => "71",
                'Remark' => "Excellent"
            ],

            [
                'Grade' => "B",
                'Star_Mark' => "70",
                'End_Mark' => "61",
                'Remark' => "Excellent"
            ],

            [
                'Grade' => "C+",
                'Star_Mark' => "60",
                'End_Mark' => "51",
                'Remark' => "Excellent"
            ],

            [
                'Grade' => "c",
                'Star_Mark' => "50",
                'End_Mark' => "41",
                'Remark' => "Excellent"
            ],

            [
                'Grade' => "D",
                'Star_Mark' => "40",
                'End_Mark' => "36",
                'Remark' => "Pass"
            ],

            [
                'Grade' => "--",
                'Star_Mark' => "35",
                'End_Mark' => "00",
                'Remark' => "Fail"
            ],

        ]);
        // student reg 

        DB::table('s_sregs')->insert([
            [
                'Student_ID' => "ST0001 ",
                'First_Name' => "Mangukiya Jay Dhirubhai",
    
                'E_mail' => "JayMangukiya1614@gmail.com",
                'Mobile_No' => "9737520270",
                'Password' => Hash::make("123456")
            ],
            [
                'Student_ID' => "ST0002 ",
                'First_Name' => "Parkhiya Kishan Maheshbhai",
                'E_mail' => "kishan@gmail.com",
                'Mobile_No' => "9313443788",
                'Password' => Hash::make("123456")
            ]


        ]);
    }
}
