            <?php
             include 'BanglaDate.php'; 
             

            $time = time();
            $Bdate = BDdate($time);
            echo 'বাংলা তারিখ  : '.$Bdate.'<br><br>' ;

            date_default_timezone_set("Asia/Dhaka");
            $currentDate = date(" l, F j, Y"); //l = full day name , F= full month , j = date without leading zero , Y = full year
              echo 'English Date with dayname : '."$currentDate".'<br><br>';
            $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
                'May','June','July','August','September','October','November','December','Saturday','Sunday',
                'Monday','Tuesday','Wednesday','Thursday','Friday');
            $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
                'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার'
            );
            $convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
            echo 'English date convert into bangla Date : '."$convertedDATE".', ';


            ?>