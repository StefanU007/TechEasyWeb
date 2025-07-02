<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('subject', 'New Order Notification')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            background-color: #f7f8fa;
            font-family: 'Inter', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333333;
            line-height: 1.6;
            padding: 40px 20px;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }
            .content-padding {
                padding: 20px !important;
            }
            .button {
                width: 100% !important;
                display: block !important;
                box-sizing: border-box;
            }
            .header-text {
                font-size: 20px !important;
            }
            .paragraph-text {
                font-size: 15px !important;
            }
            .header-strip-cell {
                padding: 15px 20px !important;
            }
        }
    </style>
</head>
<body>
    <center style="width: 100%; background-color: #f7f8fa;">
        <div style="display: none; font-size: 1px; color: #f7f8fa; line-height: 1px; font-family: 'Inter', 'Helvetica Neue', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
            New website order received. Review the details.
        </div>

        <table class="email-container" style="width: 100%; max-width: 600px; margin: auto; background: #ffffff; border-radius: 12px; border: 1px solid #e0e0e0; box-shadow: 0 6px 20px rgba(0,0,0,0.05);" role="presentation" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td class="header-strip-cell" style="background-color: #3e50a117; padding: 20px 32px; text-align: center;">
                    <img
                        src="{{ asset('assets/images/logo.png') }}"
                        alt="EasyWebTech Logo"
                        width="auto"
                        height="50"
                        style="display: block; margin: auto; max-width: 100%; height: auto;"
                    />
                </td>
            </tr>
            <tr>
                <td style="padding: 32px; padding-bottom: 24px;" class="content-padding">
                    @yield('content')
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
