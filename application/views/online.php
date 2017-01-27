
    <form method="POST" action="main/online" enctype="multipart/form-data">
    <table align="center" style="border:3px solid green;border-radius:5px; width:820px;padding-left:50px; ">
           <tr><td><h1 align="center"> <font color="navy" size=6>ভর্তির আবেদনপত্র</font></h1></td></tr>
            <tr>
                <td>
                    <fieldset style="padding:20px;">
                    <legend>প্রোগ্রাম ইনফরমেশন</legend>
                    <table>
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">প্রোগ্রাম:</td>
                            <td colspan="2"> <input type="text" readonly="true" name="program_name" size="25" value="ডিপ্লোমা-ইন-ইঞ্জিনিয়ারিং">

                            </td>
							<br>
                            <td style="color:green;font-size:17px;text-align:right;">টেকনোলজজি:</td>
                            <td colspan="2" > <select name="tech_name">

                            <option value="আর্কিটেকচার টেকনোলজি">আর্কিটেকচার টেকনোলজি</option>
                            <option value="অটোমোবাইল টেকনোলজি">অটোমোবাইল টেকনোলজি</option>
                            <option>সিভিল টেকনোলজি</option>
                            <option>কম্পিউটার টেকনোলজি</option>
                            <option>ইলেকট্রিক্যাল টেকনোলজি</option>
                            <option>ইলেকট্রনিক্স টেকনোলজি</option>
                            <option>গ্রাফিক ডিজাইন</option>
                            <option>গার্মেন্টস ডিজাইন এন্ড প্যাটার্ন মেকিং</option>
                            <option>মেরিন টেকনোলজজি</option>
                            <option>মেকানিক্যাল টেকনোলজি</option>
                            <option>রেফ্রিজারেশন এন্ড এয়ারকন্ডিশনিং</option>
                            <option>শীপ বিল্ডিং টেকনোলজি</option>
                            <option>টেলিকমিউনিকেশন টেকনোলজি</option>
                            <option>টেক্সটাইল টেকনোলজি</option>

                            </select>

                            </td>

                        </tr>
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">সেসন:</td>
                            <td align="left"><input type="text"  readonly="true" name="std_session" value="২০১৬-২০১৭"></td> <td></td> <td style="color:green;font-size:17px;text-align:right;">একাডেমিক বর্ষ:</td>
                            <td><input type="text"  readonly="true" name="std_acad_year" value="2016"></td>
                            
                            
                            <td style="color:green;font-size:17px;text-align:right;">&nbsp;&nbsp;ক্যাম্পাস:</td><td><select name="campus_name">

                            <option value="ঢাকা">ঢাকা</option>
                            <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                            <option value="রংপুর">রংপুর</option>
                            <option value="লক্ষীপুর">লক্ষীপুর</option>
                            
                            </select></td>
                            
                            
                        </tr>

                    </table>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td>
                    <fieldset>
                    <legend>ব্যাক্তিগত ইনফরমেশন</legend>
                    <table>
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">প্রার্থীর নাম:</td>
                            <td colspan="2" align="left"><input type="text" size="50" required name="std_name" placeholder="মো: মাহফুজ আলম"></td>
                        </tr>
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">প্রার্থীর ফটো(৩৮X৩৮):</td>
                            <td align="left"><input type="file" required name="std_picture"></td>

                            <td style="color:green;font-size:17px;text-align:right;">প্রার্থীর স্বাক্ষর (৩০X১৫):</td>
                            <td align="left"><input type="file" required name="std_signature"></td>

                        </tr>

                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">মোবাইল ফোন:</td>
                            <td align="left"><input type="text" size="30" required name="std_phone" placeholder="01716277326"></td> <td style="color:green;font-size:17px;text-align:right;">ইমেইল আই ডি:</td>
                            <td colspan="2" width="200" align="left"><input type="text" size="35"  name="std_email" placeholder="sipi_ac@yahoo.com"></td>
                        </tr>

                        <tr>

                        </tr>
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">জেন্ডার:</td>
                            <td align="left">
                                <input  type="radio" value="male" name="gender" >Male<input type="radio" name="gender" value="female">Female
                            </td> <td style="color:green;font-size:17px;text-align:right;">রক্তের গ্রুপ:</td>
                            <td align="left"><input size="20" type="text" name="std_blood_group" placeholder="Example B+"></td>
                        </tr>
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">জন্ম তারিখ:</td>
                            <td align="left"><input type="text" size="30" required name="std_birth_date" placeholder="২৮-০৬-১৯৯৫"></td>
                        </tr>
                        <!--
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">Place Of Birth:</td>
                            <td><input type="text"  required name="std_birth_palce" placeholder="Enter Place Name"></td>
                        </tr>
                        -->
                        <tr>

                        </tr>
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">জাতীয়তা:</td>
                            <td align="left"><input type="text" size="30" required name="std_nationality" placeholder="বাংলাদেশী"></td><td style="color:green;font-size:17px;text-align:right;">ধর্ম:</td>
                            <td align="left"><input type="text"  required name="std_religion" placeholder="ইসলাম"></td>
                        </tr>
                        <tr>

                        </tr>
                        <!--
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">Marital Status:</td>
                            <td>
                                <div class="INPUTTEXT" style="text-align:left;"><input type="radio" value="married" name="married" >Married<input type="radio" name="unmarried" value="2">Unmarried</div>
                            </td>
                        </tr>
                        -->
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">মুক্তিযোদ্ধা পরিবার:</td>
                            <td align="left">
                                <input type="radio" value="yes" name="freedom" >Yes<input type="radio" name="freedom" value="no">No
                            </td>

                             <td style="color:green;font-size:17px;text-align:right;">উপজাতি:</td>
                            <td align="left">
                                <input type="radio" value="yes" name="tribe" >Yes<input type="radio" name="tribe" value="no">No
                            </td>
                        </tr>

                    </table>
                    </fieldset>
                </td>
            </tr>


            <tr>
                <td>
                    <fieldset>
                    <legend>ফ্যামিলি এন্ড কন্ট্যাক্ট ইনফরমেশন</legend>
                    <table>
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">পিতার নাম:</td>
                            <td><input type="text" size="50" required name="std_father_name" placeholder="মো: আফতাব উদ্দিন"></td>
                        </tr>
                        
                         <tr>
                            <td style="color:green;font-size:17px;text-align:right;">মাতার নাম:</td>
                            <td><input type="text" size="50" required name="std_mother_name" placeholder="আমেনা বেগম"></td>
                        </tr>
                       
                        <tr>
                            <td style="color:green;font-size:17px;text-align:right;">স্থায়ী ঠিকানা:</td>
                            <td align="left"><textarea name='std_per_adds' rows=5 cols=30></textarea></td>
                             <td style="color:green;font-size:17px;text-align:right;">বর্তমান ঠিকানা:</td>
                            <td align="left"><textarea name='std_pre_adds' rows=5 cols=30></textarea></td>
                        </tr>

                    </table>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                <fieldset>
                 <legend>অভিভাবক(পিতামাতার অবর্তমানে)</legend>
                    <table class="aca_table" style="width:742px;">
                         <tr><td style="color:green;font-size:17px;text-align:right;">নাম:</td> <td align="left"><input type="text" style="width:550px;" required name="std_gurd_name"></td></tr>
                         <tr>
                             <td style="color:green;font-size:17px;text-align:right;">মোবাইল:</td><td align="left"><input type="text" required name="imm_gurd_phone" style="width:150px;"> <font style="color:green;font-size:17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ই-মেইল:</font> <input type="text" name="imm_guard_email" style="width:300px;"></td>
                         </tr>
                         <tr>
                            <td style="width:150px;color:green;font-size:17px;text-align:right;">ঠিকানা:</td><td align="left"><input type="text" style="width:550px;" name="imm_guard_address"></td>
                        </tr>
                    </table>
                </fieldset>
                </td>
            </tr>

            <tr>
                <td>
                   <fieldset>
                    <legend>এস. এস. সি ইনফরমেশন</legend>
                    <table class="aca_table">
                        <tr><td style="color:green;">পরীক্ষার নাম</td><td style="color:green;">বিভাগ</td><td style="color:green;">বিদ্যালয়ের নাম </td> <td style="color:green;"> বোর্ড</td><td style="color:green;">রোল নং </td><td style="color:green;">রেজি নং</td><td style="color:green;">পাসের সন</td><td style="color:green;">জিপিএ</td></tr>
                        <tr><td><select name="std_exam1"><option>এস.এস.সি</option> <option>এস.এস.সি(ভোক)</option> <option>এস.এস.সি (দাখিল)</option> <option>এস.এস.সি (উন্মুক্ত)</option><option>অন্যান্য</option></select></td><td><select name="ssc_trade"><option>ব্যাবসায় শিক্ষা</option> <option>মানবিক</option> <option>বিজ্ঞান</option> <option>অন্যান্য</option></select></td> <td><input type="text" style="width:200px;" required name="ssc_school"></td></td> <td><input type="text" style="width:80px;" required name="ssc_board"></td><td><input style="width:80px;" type="text" required name="ssc_roll"></td><td><input style="width:80px;" type="text" required name="ssc_reg"></td><td><input style="width:80px;" type="text" required name="ssc_year"></td><td><input style="width:50px;" type="text" required name="ssc_gpa"></td></tr>
                     </table>
                   </fieldset>
                </td>
            </tr>

                   <!--  </table>

                    </fieldset>
                </td>

            </tr> -->


            <tr><td style="color:green;font-size:17px;text-align:justify;"><input type="CHECKBOX" require>আমি এই মর্মে অঙ্গীকার করছি যে, ভর্তি হওয়ার সুযোগ পেলে আমি অত্র প্রতিষ্ঠান এবং বাংলাদেশ কারিগরি শিক্ষাবোর্ডের যাবতীয় আইনকানুন মেনে চলব এবং কোন অবস্থাতেই অত্র শিক্ষাপ্রতিষ্ঠান, বাংলাদেশ কারিগরি শিক্ষাবোর্ড এবং দেশের আইনের পরিপন্থি কোন কাজে লিপ্ত হব না। </td></tr>
            <tr><td align="center"><input type="Submit"  value="সাবমিট" style="padding:8px;"></td></tr>

        </table>


        </form>
 