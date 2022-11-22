<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .user_details {
            background-image: url('https://www.citypng.com/public/uploads/preview/hd-black-round-certified-stamp-with-check-mark-png-31623328616e1abvjld6c.png');
            background-repeat: no-repeat;
            background-position: 180px 30px;
            background-size: 80px;
        }

        p{
            font-size: 10px;
        }
    </style>
</head>

<body>
    <div class="" style="width: 300px; margin: 0px auto">
        <table width="60%" style="" border="3px" cellspacing="0px">
            <tr>
                <td width="15%" style="text-align: center;border-bottom-color:#000000;background-color:#ce920d;">
                    <img src="{{ asset('front/images/logo.png') }}" style="width: 50px; height:50px;" />
                </td>
                <td width="85%" style="text-align: center; border-bottom-color:#000000;background-color:#ce920d;" >
                    <p><u>IDENTITY CARD</u></p>
                    <p style="color:#d53419; font-size:12px;"><b>BAR COUNCIL OF PUNJAB & HARYANA</b></p>
                    <span style="color: #524949;">(Under Advocates Act, 1981)</span>
                </td>
            </tr>
            <tr>
                <td width="20%" style="text-align: center; border-right-color:#fff;border-left-color:#000; border-bottom-color:#fff;">
                    <img src="{{ asset('front/profile_signs/'. $user->profile_pic) }}" width=""/>
                </td>
                <td width="80%" style="border-right-color:black;border-collapse:collapse; border-spacing:0px; cell-margin:0px; padding:0px">
                    <table width="100%" class="user_details" cellspacing="0px" cellpadding="0px" style="border-right-color:black;border-collapse:collapse; border-spacing:0px; cell-margin:0px;">
                        <tr>
                            <td width="35%">
                                <p>NAME</p>
                            </td>
                            <td width="5%">:</td>
                            <td width="60%">
                                <p>Dishant</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Enrolment No</p>
                            </td>
                            <td width="5%">:</td>
                            <td>
                                <p>PH/7148/2022</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>F. Name</p>
                            </td>
                            <td width="5%">:</td>
                            <td>
                                <p>BHIM CHAND</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>DOB</p>
                            </td>
                            <td width="5%">:</td>
                            <td>
                                <p>08-08-1988</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: baseline;">
                                <p>Address</p>
                            </td>
                            <td width="5%">:</td>
                            <td>
                                <p>H NO 1278 CHATTARGARH PATTI SIRSA</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td width="33.3%" style="text-align: center; border-top-color:#fff;">
                    <p><img src="{{ asset('front/images/logo.png') }}" style="width: 50px; height:50px;" /></p>
                    <p>Valid Upto</p>
                    <p>25-10-2024</p>
                </td>
                <td width="33.3%" style="text-align: center;border-top-color:#fff;">
                    <p>
                        <img src="{{ asset('front/images/logo.png') }}" style="width: 50px; height:50px;" />
                    </p>
                    <p>Holder Sign</p>
                </td>
                <td width="33.3%" style="text-align: center;border-top-color:#fff;">
                    <p>
                        <img src="{{ asset('front/images/logo.png') }}" style="width: 50px; height:50px;" />
                    </p>
                    <p>(Gurtej Singh Grewal)</p>
                    <p>Hony. Secretary</p>
                </td>
            </tr>
        </table>

        {{-- <table width="60%" >
            <tr>
                <td width="20%" style="text-align: center; border-right-color:#fff;border-left-color:#000; border-bottom-color:#fff;">
                    <img src="{{ asset('front/images/logo.png') }}" width=""/>
                </td>
                <td width="80%" style="border-right-color:black;">
                    <table width="100%" class="user_details">
                        <tr>
                            <td width="35%">
                                <p>NAME</p>
                            </td>
                            <td width="5%">:</td>
                            <td width="60%">
                                <p>Dishant</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Enrolment No</p>
                            </td>
                            <td width="5%">:</td>
                            <td>
                                <p>PH/7148/2022</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>F. Name</p>
                            </td>
                            <td width="5%">:</td>
                            <td>
                                <p>BHIM CHAND</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>DOB</p>
                            </td>
                            <td width="5%">:</td>
                            <td>
                                <p>08-08-1988</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: baseline;">
                                <p>Address</p>
                            </td>
                            <td width="5%">:</td>
                            <td>
                                <p>H NO 1278 CHATTARGARH PATTI SIRSA</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table> --}}
{{-- 
        <table width="60%"  border="3px">
            <tr>
                <td width="33.3%" style="text-align: center; border-top-color:#fff;">
                    <p><img src="{{ asset('front/images/logo.png') }}" style="width: 50px; height:50px;" /></p>
                    <p>Valid Upto</p>
                    <p>25-10-2024</p>
                </td>
                <td style="text-align: center;border-top-color:#fff;">
                    <p>
                        <img src="{{ asset('front/images/logo.png') }}" style="width: 50px; height:50px;" />
                    </p>
                    <p>Holder Sign</p>
                </td>
                <td style="text-align: center;border-top-color:#fff;">
                    <p>
                        <img src="{{ asset('front/images/logo.png') }}" style="width: 50px; height:50px;" />
                    </p>
                    <p>(Gurtej Singh Grewal)</p>
                    <p>Hony. Secretary</p>
                </td>
            </tr>
        </table> --}}

        <br>
        <br>
        <br>

        <!-- back-side -->
        <table width="100%" cellspacing="0px" style="" class="user_details">
            <tr>
                <td>
                    <p class="back_margin_0 after font_weight">I. Card No</p>
                </td>
                <td>
                    <p class="back_margin_0 padding_0 font_weight">N-7148-2022</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="back_margin_0 after font_weight">Date of Issue</p>
                </td>
                <td>
                    <p class="back_margin_0 padding_0 font_weight">19-11-2022</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="back_margin_0 after font_weight">Phone No.</p>
                </td>
                <td>
                    <p class="back_margin_0 padding_0 font_weight">1234567890</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="back_margin_0 after  font_weight">Prepared By</p>
                </td>
                <td>
                    <p class="back_margin_0"><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW1r6pM0ufI8Bdwfp4C19f11_TCqzWZ2zYAaFtJ-KATPq0CtryEjz7kdvZA84bs5a1XDI&usqp=CAU"
                            width="80px"></p>
                    <p class="back_margin_0 padding_0 font_weight" style="">Jaipal Singh</p>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="back_border_bottom1">
                    <p class="back_border_bottom margin_0"></p>

                    <p class="back_margin_1 font_weight"
                        style="font-size: 12px; text-decoration: underline; margin-top: 10px; font-style: italic;">If
                        found be
                        returned to :</p>
                    <h3 class="back_margin_1 bottom_heading" style="font-size: 18px;">BAR COUNCIL OF PUNJAB & HARYANA
                    </h3>
                    <p class="back_margin_1 font_weight" style="font-size: 12px; margin-bottom: 20px;">Law Bhawan,
                        Dakshin Marg, Sector 37-A, Chandigarh Phone: 0172-2688519</p>
                </td>
            </tr>
        </table>

    </div>

</body>

</html>
