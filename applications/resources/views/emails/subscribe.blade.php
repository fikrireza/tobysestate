<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Toby's Estate Indonesia</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <style>
    @font-face {
        font-family: 'andadaregular';
        src: url('http://normi.co.id/tobysestate/fonts/andada-regular-webfont.woff2') format('woff2'),
              url('http://normi.co.id/tobysestate/fonts/andada-regular-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;

    }

    * { margin: 0; padding: 0; }

    html {
      font-family: 'andadaregular';
      -webkit-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
    }

    body {
      margin: 0;
      background: #fff;
      overflow-x: hidden;
      font-family: 'andadaregular';
    }
    </style>

</head>

<body>

	<section>

    <div class="container-fluid container-email">
		Dear {{ $data[0]['name'] }},
      <table width="546px;">
        <tr>
          <td><img src="http://normi.co.id/tobysestate/img/head-email.png" /></td>
        </tr>
        <tr>
          <td><a href="https://www.instagram.com/tobysestateid/"><img src="http://normi.co.id/tobysestate/img/body-email.png" /></a></td>
        </tr>
        <tr height="50px" valign="middle">
          <td valign="middle" align="center"><font style="font-family:andadaregular;font-size:14px;">Welcome to our coffee community - you are going to learn a lot about coffee with us.</font></td>
        </tr>
		<tr height="30px" valign="middle">
			<td><font style="font-family:andadaregular;font-size:12px;">We love coffee. We live coffee every minute of every day and from time to time we'll open up our world and share with you our new Single Origins, the latest brew methods, gadgets and events.</font></td>
		</tr>
		<tr height="50px" valign="bottom">
			<td  align="left"><font style="font-family:andadaregular;font-size:12px;">Cheers,</font></td>
		</tr>
		<tr height="30px" valign="bottom">
			<td><font style="font-family:andadaregular;font-size:12px;">Toby's Estate Indonesia</font></td>
		</tr>
        <tr height="190px" valign="190px" valign="bottom">
          <td align="center"><font style="font-family:andadaregular;font-size:10px;">© 2016 Toby's Estate Indonesia all rights reserved</font></td>
        </tr>
      </table>
    </div>

  </section>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery.js')}}"></script>
  <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</body>

</html>
