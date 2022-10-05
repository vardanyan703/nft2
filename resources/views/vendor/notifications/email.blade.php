<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800;900&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Circe';
            src: url('fonts/Circe-Light.eot');
            src: local('Circe Light'), local('Circe-Light'),
            url('fonts/Circe-Light.eot?#iefix') format('embedded-opentype'),
            url('fonts/Circe-Light.woff2') format('woff2'),
            url('fonts/Circe-Light.woff') format('woff'),
            url('fonts/Circe-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Circe Extra';
            src: url('fonts/Circe-ExtraBold.eot');
            src: local('Circe Extra Bold'), local('Circe-ExtraBold'),
            url('fonts/Circe-ExtraBold.eot?#iefix') format('embedded-opentype'),
            url('fonts/Circe-ExtraBold.woff2') format('woff2'),
            url('fonts/Circe-ExtraBold.woff') format('woff'),
            url('fonts/Circe-ExtraBold.ttf') format('truetype');
            font-weight: 800;
            font-style: normal;
        }

        @font-face {
            font-family: 'Circe';
            src: url('fonts/Circe-Thin.eot');
            src: local('Circe Thin'), local('Circe-Thin'),
            url('fonts/Circe-Thin.eot?#iefix') format('embedded-opentype'),
            url('fonts/Circe-Thin.woff2') format('woff2'),
            url('fonts/Circe-Thin.woff') format('woff'),
            url('fonts/Circe-Thin.ttf') format('truetype');
            font-weight: 100;
            font-style: normal;
        }

        @font-face {
            font-family: 'Circe';
            src: url('fonts/Circe-Regular.eot');
            src: local('Circe'), local('Circe-Regular'),
            url('fonts/Circe-Regular.eot?#iefix') format('embedded-opentype'),
            url('fonts/Circe-Regular.woff2') format('woff2'),
            url('fonts/Circe-Regular.woff') format('woff'),
            url('fonts/Circe-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Circe';
            src: url('fonts/Circe-Bold.eot');
            src: local('Circe Bold'), local('Circe-Bold'),
            url('fonts/Circe-Bold.eot?#iefix') format('embedded-opentype'),
            url('fonts/Circe-Bold.woff2') format('woff2'),
            url('fonts/Circe-Bold.woff') format('woff'),
            url('fonts/Circe-Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }
        .social-list a{
            transition: 0.3s;
        }
        .social-list a:hover{
            background-color: #FFDC40;
        }
    </style>
</head>
<body style="margin: 0;padding: 0;font-family: 'Circe',sans-serif;">

<div style="padding:0!important;margin:0 auto!important;display:block!important;min-width:100%!important;width:100%!important;background:#ffffff">
    <center>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0;padding:0;width:100%;height:100%"
               bgcolor="#ffffff">
            <tbody>
            <tr>
                <td style="margin:0;padding:0;width:100%;height:100%" align="center" valign="top">
                    <table width="600" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td style="max-width:600px;width:600px;min-width:600px;font-size:0pt;line-height:0pt;padding:0;margin:0;font-weight:normal">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #2C2E3C;">
                                    <tbody>
                                    <tr style="padding: 0 22px;">
                                        <td>
                                            <a href="{{ asset('/') }}" style="display: block;padding: 20px 0 21px 22px;">
                                                <img src="{{ asset('/images/icon1.png') }}" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ $actionUrl }}"
                                               style="padding: 21px 22px 21px 0;text-decoration: none; display: block; font-family: 'Montserrat', sans-serif;font-weight: 900;font-size: 16px;line-height: 100%;text-align: right;text-transform: uppercase;color: #FFFFFF;">
                                                Password reset
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 556px;margin: 0 auto;">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p style="font-weight: 400;font-size: 16px;line-height: 150%;display: flex;align-items: center;color: #20232B; margin: 50px auto 18px;">
                                                Hey!
                                                <br>
                                                You recently initiated a password reset for your NFT Grower account. To do so, simply click on
                                                the button below.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ $actionUrl }}"
                                               style="font-family: 'Montserrat',sans-serif;font-style: normal;font-weight: 800;font-size: 16px;line-height: 100%;display:block;text-transform: uppercase;color: #20232B;max-width: 229px;background: #FFDC40;margin: 0 0 36px;padding: 22px 34px;box-sizing: border-box;text-decoration: none;">Reset
                                                password</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-weight: 400;font-size: 16px;line-height: 150%;color: #20232B; margin: 0 auto 40px;">
                                                If you did not request this change, please contact our <a href="mailto:help@nftgrower.io"
                                                                                                          style="font-weight: 600; color: #128EFF;">Support
                                                    Team</a> (сап тим подчеркнуто как ссылка) immediately.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-weight: 400;font-size: 16px;line-height: 150%;color: #20232B; margin: 0 auto 30px;">
                                                Stay ahead,
                                                <br>
                                                The NFT Grower Team
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-weight: 700;font-size: 16px;line-height: 150%;color: #20232B;opacity: 0.4; margin: 0 auto 33px;">
                                                This is an automated message, please do not reply.
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <p style="background: #D9D9D9; height: 1px;width: 100%;"></p>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="max-width: 556px;font-weight: 400;font-size: 16px;line-height: 150%;display: flex;align-items: center;color: #20232B; margin: 35px auto 8px;">
                                                If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into
                                                your web browser:
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ $displayableActionUrl }}"
                                               style="max-width: 556px;width: 100%; font-weight: 700;font-size: 16px;line-height: 150%;text-decoration-line: underline;color: #128EFF;word-wrap: break-word;display:block;margin: 0 auto 35px;">
                                                {{ $displayableActionUrl }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="background: #D9D9D9; height: 1px;width: 100%;"></p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 556px; margin: 0 auto;">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p style="margin: 30px auto 20px; font-family: 'Montserrat',sans-serif;font-style: normal;font-weight: 900;font-size: 16px;line-height: 100%; text-transform: uppercase;color: #2C2E3C;">
                                                Stay connected!
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="social-list">
                                                <a href="https://t.me/nftgrower"
                                                   style="margin-right: 3px; box-sizing: border-box; display:inline-flex;align-items:center;justify-content:center; width: 36px;height: 36px;border-radius: 50%;border: 2px solid #FFDC40;">
                                                    <img src="{{ asset('images/icon2.png') }}" idth="20" height="20" alt="">
                                                </a>
                                                <a href="https://t.me/nftgrowerchat"
                                                   style="margin: 0 3px; box-sizing: border-box; display:inline-flex;align-items:center;justify-content:center; width: 36px;height: 36px;border-radius: 50%;border: 2px solid #FFDC40;">
                                                    <img src="{{ asset('images/icon3.png') }}" idth="20" height="20" alt="">
                                                </a>
                                                <a href="https://twitter.com/nftgrower_io"
                                                   style="margin-left: 3px; box-sizing: border-box; display:inline-flex;align-items:center;justify-content:center; width: 36px;height: 36px;border-radius: 50%;border: 2px solid #FFDC40;">
                                                    <img src="{{ asset('images/icon4.png') }}" idth="20" height="20" alt="">
                                                </a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="
font-weight: 400;
font-size: 16px;
line-height: 150%;

color: #20232B;
">
                                                Copyright © 2022 by NFT Grower. All rights reserved.
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </center>
</div>
</body>
</html>
