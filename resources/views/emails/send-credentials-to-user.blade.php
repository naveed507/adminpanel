<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="x-apple-disable-message-reformatting" />

    <title>User Credentials</title>


</head>

<body style="margin: 0; padding: 0; background: #eeeeee">
    <div
        style="
        display: none;
        font-size: 1px;
        line-height: 1px;
        max-height: 0px;
        max-width: 0px;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        font-family: sans-serif;
      ">
    </div>

    <div
        style="
        display: none;
        font-size: 1px;
        line-height: 1px;
        max-height: 0px;
        max-width: 0px;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        font-family: sans-serif;
      ">
        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>

    <center>
        <div
            style="
          width: 100%;
          max-width: 600px;
          background: #ffffff;
          padding: 30px 20px;
          text-align: left;
          font-family: 'Arial', sans-serif;
        ">
            <!--[if mso]>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" bgcolor="#ffffff">
      <tr>
      <td align="left" valign="top" style="font-family: 'Arial', sans-serif; padding:20px;">
      <![endif]-->

            <a href="http://devdigital.exdnow.com/ppg-crda-web-portal/login" target="_blank">
                <img src="http://devdigital.exdnow.com/ppg-crda-web-portal/images/logo/ppg.png" width="200"
                    height="50" style="display: block; margin-bottom: 30px" />
            </a>

            <h1
                style="
            font-size: 16px;
            line-height: 22px;
            font-weight: normal;
            color: #333333;
          ">
                Dear {{ $user['name'] }},
            </h1>

            <img src="http://placehold.it/50x1/ff0000/ff0000" width="50" height="1"
                style="display: block; margin-bottom: 30px" />

            <p
                style="
            font-size: 16px;
            line-height: 24px;
            color: #666666;
            margin-bottom: 30px;
          ">
                We are delighted to welcome you to PPG-CRDA! As a new user, we want to
                provide you with the necessary account credentials to access our
                platform and make the most of our services. Please find below your
                account details:
            </p>
            <p
                style="
            font-size: 16px;
            line-height: 24px;
            color: #666666;
            margin-bottom: 30px;
          ">
                Password: {{ $user['plain_password'] }}
            </p>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td bgcolor="#556270" style="padding: 12px 26px 12px 26px; border-radius: 4px"
                                    align="center">
                                    <a href="http://devdigital.exdnow.com/ppg-crda-web-portal/login" target="_blank"
                                        style="
                        font-family: 'Arial', sans-serif;
                        font-size: 16px;
                        font-weight: bold;
                        color: #ffffff;
                        text-decoration: none;
                        display: inline-block;
                      ">
                                        Go To Login Page
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="100%" height="30">&nbsp;</td>
                </tr>
            </table>
            <p
                style="
            font-size: 16px;
            line-height: 24px;
            color: #666666;
            margin-bottom: 30px;
          ">
                We encourage you to explore the platform and take advantage of our
                extensive resources. If you have any questions, concerns, or require
                assistance, our dedicated support team is here to help. You can reach
                us by email at admin.crda@popularpipesgroup.com.
            </p>

            <hr
                style="
            border: none;
            height: 1px;
            color: #dddddd;
            background: #dddddd;
            width: 100%;
            margin-bottom: 20px;
          " />

            <p
                style="
            font-size: 12px;
            line-height: 18px;
            color: #999999;
            margin-bottom: 10px;
          ">
                &copy; Copyright 2023
                <a href="http://devdigital.exdnow.com/ppg-crda-web-portal/login" target="_blank"
                    style="
              font-size: 12px;
              line-height: 18px;
              color: #666666;
              font-weight: bold;
            ">
                    PPG-CRDA</a>, All Rights Reserved.
            </p>

            <!--[if mso | IE]>
      </td>
      </tr>
      </table>
      <![endif]-->
        </div>
    </center>
</body>

</html>
