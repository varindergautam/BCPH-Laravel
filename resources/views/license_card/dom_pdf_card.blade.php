@php
        $path = asset('images/signatures/');
        $bcph_stamp = '';
        $hony_secretary = '';
        $prepared_by = '';
        $background_logo = '';

        if(@$signature) {
            $bcph_stamp = "<img src=".$path . '/' . $signature->bcph_stamp. " width='100px'>";
            $hony_secretary = "<img src=".$path . '/' . $signature->hony_secretary. " width='100px'>";
            $prepared_by = "<img src=".$path . '/' . $signature->prepared_by. " width='100px'>";
            $background_logo = "<img src=".$path . '/' . $signature->background_logo. " width='100px'>";
        }
    @endphp

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
      background-image: url({!! $path . '/' . $signature->background_logo !!});
      background-repeat: no-repeat;
      background-position: 180px 30px;
      background-size: 80px;
    }

    p {
      font-size: 14px;
    }

    h3 {
      color: #d53419;
    }

    table {
      border-collapse: collapse;
    }

    .margin_0 {
      margin: 0;
    }

    .border_left {
      border-left: 0;
    }

    .border_right {
      border-right: 0;
    }

    .border_bottom {
      border-bottom: 0;
    }

    .border_top {
      border-top: 0;
    }

    .after:after {
      content: ":";
      position: absolute;
      left: 49%;
    }

    .img_border {
      border: 2px solid;
    }

    .padding {
      padding: 15px 5px;
    }

    .table_border_color {
      border: 5px solid;
      border-color: #9e5625;
    }

    .table_border_top {
      border-top-width: 0;
    }

    .table_border_bottom {
      border-bottom-width: 0;
    }

    /* back-side */
    .back_margin_0 {
      margin: 0;
      margin-left: 100px;
      /* text-align: center; */
    }

    .back_margin_1 {
      margin: 0;
      text-align: center;
      /* margin-left: 90px; */
      /* text-align: center; */
    }

    .back_border_bottom {
      margin: 0px auto;
      width: 50%;
      border-bottom: 2px solid black;
      margin-top: 30px;
    }

    .bottom_heading{
      color: #000;;
    }
  </style>
</head>

<body>
    
  <div class="" style="width: 500px; margin: 0px auto">
    <table width="100%" border="1px" style="border-bottom: 0" bgcolor="#ce920d" class="table_border_color">
      <tr>
        <td width="15%" style="border-right: 0; text-align: center" class="table_border_bottom">
          <img src="{{ asset('front/images/logo.png') }}" width="50px" />
        </td>
        <td width="85%" style="text-align: center" class="border_left table_border_bottom">
          <p class="margin_0"><ins>IDENTITY CARD</ins></p>
          <h3 class="margin_0">BAR COUNCIL OF PUNJAB & HARYANA</h3>
          <p class="margin_0" style="color: #524949;">(Under Advocates Act, 1981)</p>
        </td>
      </tr>
    </table>
    <table width="100%" border="1px" class="table_border_color table_border_top table_border_bottom"
      style="border-top-width: 5px;">
      <tr>
        <td width="20%" style="text-align: center" class="border_right padding table_border_bottom">
          <img src="{{ asset('front/images/logo.png') }}" class="table_border_color" />
        </td>
        <td width="70%" class="border_left padding table_border_bottom" style="">
          <table width="100%" class="user_details" >
            <tr>
              <td width="35%" style="border:0">
                <p class="margin_0 after">NAME</p>
              </td>
              <td style="border:0">
                <p class="margin_0">Dishant</p>
              </td>
            </tr>
            <tr>
              <td style="border:0">
                <p class="margin_0 after">Enrolment No</p>
              </td>
              <td style="border:0">
                <p class="margin_0">PH/7148/2022</p>
              </td>
            </tr>
            <tr>
              <td style="border:0">
                <p class="margin_0 after">F. Name</p>
              </td>
              <td style="border:0">
                <p class="margin_0 after">BHIM CHAND</p>
              </td>
            </tr>
            <tr>
              <td style="border:0">
                <p class="margin_0 after">DOB</p>
              </td>
              <td style="border:0">
                <p class="margin_0">08-08-1988</p>
              </td>
            </tr>
            <tr>
              <td style="vertical-align: baseline;border:0">
                <p class="margin_0 after">Address</p>
              </td>
              <td style="border:0">
                <p class="margin_0">H NO 1278 CHATTARGARH PATTI SIRSA</p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <table width="100%" border="1px" class="table_border_color table_border_top " style="text-align: center">
      <tr>
        <td width="35%" class="table_border_top border_right">
            {!! $bcph_stamp !!}
          <p class="margin_0">Valid Upto</p>
          <p class="margin_0">25-10-2024</p>
        </td>
        <td class="border_left table_border_top border_right">
          <p class="margin_0">
            <img
              src="{{ asset('front/images/logo.png') }}"
              width="80px">
          </p>
          <p class="margin_0">Holder Sign</p>
        </td>
        <td class="table_border_top border_left">
          <p class="margin_0">{!! $hony_secretary !!}</p>
          <p class="margin_0">(Gurtej Singh Grewal)</p>
          <p class="margin_0">Hony. Secretary</p>
        </td>
      </tr>
    </table>

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
          <td style="vertical-align: baseline;">
            <p class="back_margin_0 after  font_weight">Prepared By</p>
          </td>
          <td>
            <p class="back_margin_0">{!! $prepared_by !!}</p>
            <p class="back_margin_0 padding_0 font_weight" style="">Jaipal Singh</p>
          </td>
        </tr>

        <tr>
          <td colspan="2" class="back_border_bottom1">
            <p class="back_border_bottom margin_0"></p>

            <p class="back_margin_1 font_weight"
              style="font-size: 12px; text-decoration: underline; margin-top: 10px; font-style: italic;">If found be
              returned to :</p>
            <h3 class="back_margin_1 bottom_heading" style="font-size: 18px;">BAR COUNCIL OF PUNJAB & HARYANA</h3>
            <p class="back_margin_1 font_weight" style="font-size: 12px; margin-bottom: 20px;">Law Bhawan, Dakshin Marg, Sector 37-A, Chandigarh Phone: 0172-2688519</p>
          </td>
        </tr>
    </table>

  </div>

</body>

</html>