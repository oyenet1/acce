<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Airmail Progress</title>
  <style type="text/css">
  /* -------------------------------------
    GLOBAL
  ------------------------------------- */
  * {
    margin:0;
    padding:0;
    font-family: Helvetica, Arial, sans-serif;
  }

  img {
    max-width: 100%;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
  }
  .image-fix {
    display:block;
  }
  .collapse {
    margin:0;
    padding:0;
  }
  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%!important;
    height: 100%;
    text-align: center;
    color: #747474;
    background-color: #ffffff;
  }
  h1,h2,h3,h4,h5,h6 {
    font-family: Helvetica, Arial, sans-serif;
    line-height: 1.1;
  }
  h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
    font-size: 60%;
    line-height: 0;
    text-transform: none;
  }

  h1 {
    font-weight:200;
    font-size: 44px;
  }
  h2 {
    font-weight:200;
    font-size: 32px;
    margin-bottom: 14px;
  }
  h3 {
    font-weight:500;
    font-size: 27px;
  }
  h4 {
    font-weight:500;
    font-size: 23px;
  }
  h5 {
    font-weight:900;
    font-size: 17px;
  }
  h6 {
    font-weight:900;
    font-size: 14px;
    text-transform: uppercase;
  }

  .collapse {
    margin: 0 !important;
  }

  td, div {
    font-family: Helvetica, Arial, sans-serif;
    text-align: center;
  }

  p, ul {
    margin-bottom: 10px;
    font-weight: normal;
    font-size:14px;
    line-height:1.6;
  }
  p.lead {
    font-size:17px;
  }
  p.last {
    margin-bottom:0px;
  }

  ul li {
    margin-left:5px;
    list-style-position: inside;
  }

  a {
    color: #747474;
    text-decoration: none;
  }

  a img {
    border: none;
  }

  /* -------------------------------------
      ELEMENTS
  ------------------------------------- */


  table.head-wrap {
    width: 100%;
    margin: 0 auto;
    background-color: #f9f8f8;
    border-bottom: 1px solid #d8d8d8;
  }

  .head-wrap * {
    margin: 0;
    padding: 0;
  }

  .header-background {
    background: repeat-x url(https://www.filepicker.io/api/file/wUGKTIOZTDqV2oJx5NCh) left bottom;
  }


  .header {
    height: 42px;
  }
  .header .content {
    padding: 0;
  }
  .header .brand {
    font-size: 16px;
    line-height: 42px;
    font-weight: bold;
  }
  .header .brand a {
    color: #464646;
  }





  table.body-wrap {
    width: 505px;
    margin: 0 auto;
    background-color: #ffffff;
  }


  .soapbox .soapbox-title {
    font-size: 30px;
    color: #464646;
    padding-top: 25px;
    padding-bottom: 28px;
  }

  .content .status {
    width: 90%;
  }

  .status {
    border-collapse: collapse;
    margin-left: 15px;
    color: #656565;
  }
  .status .status-cell {
    border: 1px solid #b3b3b3;
    height: 50px;
    font-size: 16px;
    line-height: 23px;
  }
  .status .status-cell.success,
  .status .status-cell.active {
    height: 65px;
  }
  .status .status-cell.success {
    background: #f2ffeb;
    color: #51da42;
    font-size: 15px;
  }
  .status .status-cell.active {
    background: #fffde0;
    width: 135px;
  }
  .status .status-image {
    vertical-align: text-bottom;
  }


  .body .body-padded,
  .body .body-padding {
    padding-top: 34px;
  }
  .body .body-padding {
    width: 41px;
  }
  .body-padded,
  .body-title {
    text-align: left;
  }
  .body .body-title {
    font-weight: bold;
    font-size: 17px;
    color: #464646;
  }
  .body .body-text .body-text-cell {
    text-align: left;
    font-size: 14px;
    line-height: 1.6;
    padding: 9px 0 17px;
  }
  .body .body-signature-block .body-signature-cell {
    padding: 25px 0 30px;
    text-align: left;
  }
  .body .body-signature {
    font-family: "Comic Sans MS", Textile, cursive;
    font-weight: bold;
  }



  .footer-wrap {
    width: 100%;
    margin: 0 auto;
    clear: both !important;
    background-color: #e5e5e5;
    border-top: 1px solid #b3b3b3;
    font-size: 12px;
    color: #656565;
    line-height: 30px;
  }
  .footer-wrap td {
    padding: 14px 0;
  }
  .footer-wrap td .content {
    padding: 0;
  }
  .footer-wrap td .footer-lead {
    font-size: 14px;
  }
  .footer-wrap td .footer-lead a {
    font-size: 14px;
    font-weight: bold;
    color: #535353;
  }
  .footer-wrap td a {
    font-size: 12px;
    color: #656565;
  }
  .footer-wrap td a.last {
    margin-right: 0;
  }
  .footer-wrap .footer-group {
    display: inline-block;
  }



  /* ---------------------------------------------------
      RESPONSIVENESS
  ------------------------------------------------------ */

  /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
  .container {
    display: block !important;
    max-width: 505px !important;
    clear: both !important;
  }

  /* This should also be a block element, so that it will fill 100% of the .container */
  .content {
    padding: 0;
    max-width: 505px;
    margin: 0 auto;
    display: block;
  }

  /* Let's make sure tables in the content area are 100% wide */
  .content table {
    width: 100%;
  }


  /* Be sure to place a .clear element after each set of columns, just to be safe */
  .clear {
    display: block;
    clear: both;
  }

  table.full-width-gmail-android {
    width: 100% !important;
  }

</style>
<style type="text/css" media="only screen">


  /* -------------------------------------------
      PHONE
      For clients that support media queries.
      Nothing fancy.
  -------------------------------------------- */
  @media only screen {

    table[class="head-wrap"],
    table[class="body-wrap"],
    table[class*="footer-wrap"] {
      width: 100% !important;
    }

    td[class*="container"] {
      margin: 0 auto !important;
    }
  }

  @media only screen and (max-width: 505px) {

    *[class*="w320"] {
      width: 320px !important;
    }

    table[class="status"] td[class*="status-cell"],
    table[class="status"] td[class*="status-cell"].active {
      display: block !important;
      width: auto !important;
      height: auto !important;
      padding: 15px !important;
      font-size: 18px !important;
    }

  }
  </style>
</head>

<body bgcolor="#ffffff">
<div align="center">
<table class="head-wrap w320 full-width-gmail-android" style="height: 46px;" border="0" cellspacing="0" cellpadding="0" bgcolor="#f9f8f8">
<tbody>
<tr style="height: 46px;">
<td style="height: 46px; width: 1063px;" valign="top" bgcolor="#ffffff" height="8"><img src="https://www.acce-abuja.com.ng/image/logo.png" alt="al-ansar school logo" width="887" height="196" /></td>
</tr>
</tbody>
</table>
<table class="body-wrap w320">
<tbody>
<tr>
<td>&nbsp;</td>
<td class="container">
<div class="content">
<table cellspacing="0">
<tbody>
<tr>
<td align="left"><br />
<table class="body" style="width: 505px;">
<tbody>
<tr>
<td class="body-padding" style="width: 41px;">&nbsp;</td>
<td class="body-padded" style="width: 423px;">
<div class="body-title">Dear Administrator,</div>
<table class="body-text" style="width: 423px;">
<tbody>
<tr>
<td class="body-text-cell" style="width: 423px;">
<p>Someone just sent a message to you via our contact page.</p>
<p>click the button below to check</p>
</td>
</tr>
</tbody>
</table>
<div><a style="background-color: #41cc00; background-image: url('https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7'); border: 1px solid #407429; border-radius: 4px; color: #ffffff; display: inline-block; font-family: sans-serif; font-size: 17px; font-weight: bold; line-height: 38px; text-align: center; text-decoration: none; width: 210px; -webkit-text-size-adjust: none; mso-hide: all;" title="Contact" href="https://www.acce-abuja.com.ng/messages" target="_blank" rel="noopener">&nbsp;Click here</a></div>
<table class="body-signature-block">
<tbody>
<tr>
<td class="body-signature-cell">
<p>Kindly reply,</p>
<p class="body-signature">ACCE-ABUJA IT-DEPARTMENT</p>
</td>
</tr>
</tbody>
</table>
</td>
<td class="body-padding" style="width: 41px;">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<table class="footer-wrap w320 full-width-gmail-android" bgcolor="#e5e5e5">
<tbody>
<tr>
<td>
<div class="content footer-lead"><a href="https://www.acce-abuja.com.ng"><strong>Get in touch</strong></a> if you have any questions or feedback</div>
</td>
</tr>
</tbody>
</table>
<table class="footer-wrap w320 full-width-gmail-android" bgcolor="#e5e5e5">
<tbody>
<tr>
<td>
<div class="content"><a href="mailto:it@acce-abuja.com.ng" target="_blank" rel="noopener">Contact It Department</a>&nbsp;&nbsp;|&nbsp;&nbsp; <span class="footer-group"> <a href="https://www.facebook.com/acceabuja" target="_blank" rel="noopener">Facebook</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="https://www.youtube.com/channel/UCC4qrHra0XKQcH5ThorYJeA">Youtube</a> &nbsp;</span></div>
</td>
</tr>
</tbody>
</table>
</div>
</body>
</html>