<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="date=no">
<meta name="format-detection" content="address=no">
<meta name="format-detection" content="email=no">
<title></title>
<link href="https://fonts.googleapis.com/css?family=Lora:400,400italic,700" rel="stylesheet" type="text/css">
<style type="text/css">
/**
 * Commerce
 * oroian.ro/responsive-transactional-emails
 * Last Modified: 01/02/2016
**/
/* Reset */
body { Margin: 0; padding: 0; min-width: 100%; }
a, #outlook a { display: inline-block; }
a, a span { text-decoration: none; }
img { line-height: 1; outline: none; border: 0; text-decoration: none; -ms-interpolation-mode: bicubic; mso-line-height-rule: exactly; }
table { border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
td { padding: 0; }
/* Email preview text */
.email_summary { display:none; font-size:1px; line-height:1px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; }
/* Typography */
.font_default, h1, h2, h3, h4, h5, h6, p, a { font-family: 'Helvetica Neue LT Std' !important; /* this is used for email clients that don't support webfonts */ }
small { font-size: 100%; }
.font_default, p { font-size: 16px; /* default text size */ }
p { line-height: 23px; Margin-top: 16px; Margin-bottom: 24px; }
h1, h2, h3, h4, h5, h6 { Margin-left: 0; Margin-right: 0; Margin-top: 16px; Margin-bottom: 8px; padding: 0; }
h1 {
	font-size: 32px;
	line-height: 40px;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 4px;
}
h1 small {
	font-size: 18px;
	line-height: 1;
	font-weight: normal;
}
h2 {
	font-size: 16px;
	line-height: 24px;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 2px;
}
h2 small {
	font-size: 12px;
	line-height: 1;
	font-weight: normal;
}
h2 span { text-decoration: line-through; }
h2 .amount { text-decoration: none; }
h2 ins { text-decoration: none; }
h3 {
	font-size: 22px;
	line-height: 30px;
	font-weight: normal;
}
h3 small {
	font-size: 14px;
	line-height: 1;
	font-weight: normal;
}
h4 {
	font-size: 19px;
	line-height: 28px;
	font-weight: normal;
}
h5 {
	font-size: 14px;
	line-height: 20px;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 1px;
}
h5 small {
	font-size: 10px;
	line-height: 18px;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 2px;
}
h6 {
	font-size: 30px;
	line-height: 34px;
	font-weight: bold;
}
h6 small {
	font-size: 16px;
	line-height: 1;
	font-weight: normal;
}
.primary_btn td,
.secondary_btn td {
	font-size: 19px;
	line-height: 28px;
	mso-line-height-rule: exactly;
}
.primary_btn a,
.secondary_btn a {
	font-weight: bold;
}
/* Grid */
.row, .col-1, .col-13, .col-2, .col-3 {
	display: inline-block;
	width: 100%;
	vertical-align: top;
	text-align: center;
}
.col-1 { max-width: 200px; }
.col-2 { max-width: 300px; }
.col-13 { max-width: 400px; }
.col-3, .row { max-width: 600px; }
.row { margin: 0 auto; }
.column {
	width: 100%;
	vertical-align: top;
}
.column_cell {
	padding: 32px 16px;
	text-align: center;
	vertical-align: top;
}
.col-bottom-0 .column_cell { padding-bottom: 0; }
.col-top-0 .column_cell { padding-top: 0; }
/* Content Blocks */
.header_cell, .jumbotron_cell, .content_cell, .footer_cell {
	font-size: 0 !important;
	text-align: center;
}
/* Header */
.header_cell img {
	max-width: 144px;
	height: auto;
}
/* Footer */
.footer_cell { border-top: 1px solid; }
.footer_cell p { Margin: 16px 0; }
.footer_cell .column_cell { padding: 16px; }
/* Jumbotron */
.jumbotron_image, .jumbotron_image_2, .jumbotron_image_3, .jumbotron_image_4, .jumbotron_image_5, .jumbotron_image_6 {
	background-repeat: no-repeat;
	background-position: 50% 0;
	background-size: 100% auto;
}
/* Content */
.billing_information {
	padding-top: 16px;
	padding-bottom: 8px;
}
.billing_information .column_cell {
	padding-top: 0;
	padding-bottom: 0;
}
/* Buttons */
.primary_btn,
.secondary_btn {
	clear: both;
	margin: 0 auto;
}
.primary_btn td,
.secondary_btn td {
	text-align: center;
	vertical-align: middle;
	padding: 10px 32px;
	-webkit-border-radius: 60px;
	border-radius: 60px;
}
.primary_btn a,
.primary_btn span,
.secondary_btn a,
.secondary_btn span {
	text-align: center;
	display: block;
}
/* Icon Holder + Rules */
.icon_holder, .hruler {
	width: 62px;
	margin-left: auto;
	margin-right: auto;
	clear: both;
}
.icon_holder { width: 48px; }
.hspace, .hruler_cell {
	font-size: 0;
	height: 8px;
	overflow: hidden;
}
.hruler_cell {
	height: 4px;
	line-height: 4px;
}
.icon_cell {
  font-size: 0;
  line-height: 1;
  -webkit-border-radius: 80px;
  border-radius: 80px;
  padding: 8px;
  height: 48px;
  border: 2px solid;
}
/* Product Row */
.product_row { padding: 24px 0; }
.product_row .column_cell { padding: 8px 16px; }
.image_thumb img {
	-webkit-border-radius: 4px;
	border-radius: 4px;
}
.product_row .col-13 .column_cell { text-align: left; }
.jumbotron_cell .col-13 .column_cell { text-align: center; }
.content .product_row, .content .order_total { border-top: 1px solid; }
.product_row h6 { Margin-top: 0; }
.product_row p {
	Margin-top: 8px;
	Margin-bottom: 8px;
}
.order_total_right .column_cell { text-align: right; }
.order_total p { Margin: 8px 0; }
.order_total h2 { Margin: 8px 0; }
/* Responsive Images */
.image_responsive img {
	width: 100%;
	height: auto;
	max-width: 264px;
}
.image_responsive_2 {
	padding-top: 0;
	padding-bottom: 0;
}
.image_responsive_2 img {
	width: 100%;
	height: auto;
	max-width: 568px;
}
.image_responsive_3 img {
	width: 100%;
	height: auto;
	max-width: 368px;
}
/* Colors */
body,
.email_body,
.header_cell,
.content_cell,
.footer_cell {
	background-color: #ffffff;
}
.jumbotron_cell {
	background-color: rgba(255, 255, 255, 0);
}
.primary_btn td,
.icon_primary .icon_cell,
.hruler_primary .hruler_cell {
	background-color: {{ $color }};
}
.hruler_secondary .hruler_cell,
.content_cell .secondary_btn td {
	background-color: {{ $color }};
}
.jumbotron_cell .secondary_btn td {
	background-color: #ffffff;
}

.billing_information, .order_total {
	background-color: rgba(255, 255, 255, 0);
}
.jumbotron_cell,
.jumbotron_cell a,
.jumbotron_cell h1,
.jumbotron_cell h2,
.jumbotron_cell h3,
.jumbotron_cell h4,
.jumbotron_cell .column_cell,
.jumbotron_cell .stat_label {
	color: {{ $color }};
}
.primary_btn a,
.primary_btn span,
.content_cell .primary_btn a,
.content_cell .primary_btn span,
.content_cell .secondary_btn a,
.content_cell .secondary_btn span {
	color: #ffffff;
}
.content_cell h1,
.content_cell h2,
.content_cell h3,
.content_cell h4,
.content_cell h4 a,
.content_cell .stat_label,
.content_cell h2 span {
	color: #4e5558;
}
.header_cell .column_cell,
.content_cell .column_cell {
	color: {{ $color }};
}
h5,
h6,
.jumbotron_cell .secondary_btn a,
.jumbotron_cell .secondary_btn span,
.content_cell a,
.content_cell a span,
.header_cell a,
.header_cell a span,
.amount, .content_cell h2 .amount {
	color: {{ $color }};
}
.footer_cell .column_cell, .footer_cell a, .footer_cell a span, .content h4 span, .content h3 span {
	color: #afb0b1;
}
.jumbotron_cell .icon_secondary .icon_cell {
	border-color: {{ $color }};
}
.icon_primary .icon_cell {
	border-color: {{ $color }};
}
.content_cell .icon_secondary .icon_cell, .footer_cell, .content .product_row, .content .order_total {
	border-color: rgba(255, 255, 255, 0);
}
/* Responsive */
@media screen {
  h1, h2, h3, h4, h5, h6, p, a, .font_default {
	  font-family: 'Helvetica Neue LT Std' !important;  /* web font */
  }
  .primary_btn td, .secondary_btn td {
	  padding: 0 !important;
  }
  .primary_btn a, .secondary_btn a {
	  font-size: 18px !important;
	  line-height: 26px !important;
	  padding: 9px 32px !important;
  }
}
@media screen and (min-width: 631px) and (max-width: 769px) {
.col-1, .col-2 {
	float: left !important;
}
.col-1 {
	width: 200px !important;
}
.col-2 {
	width: 300px !important;
}
}
@media screen and (max-width: 630px) {
  .jumbotron_cell {
	  background-size: cover !important;
  }
  .row, .col-1, .col-13, .col-2, .col-3 {
	  max-width: 100% !important;
  }
}
</style>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="margin: 0;padding: 0;min-width: 100%;background-color: #ffffff;">
  <div class="email_summary" style="display: none;font-size: 1px;line-height: 1px;max-height: 0px;max-width: 0px;opacity: 0;overflow: hidden;"></div><!-- /.email_summary -->
  <div class="email_body" style="background-color: #ffffff;">
      <table class="header" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
        <tbody>
            <tr>
                <td class="header_cell" align="center" valign="top" style="padding: 0;text-align: center;background-color: #ffffff;font-size: 0 !important;">
                        <!--[if (gte mso 9)|(IE)]>
                        <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align: top;">
                            <tbody>
                                <tr>
                                    <td width="600" align="center" valign="top">
                        <![endif]-->
                        <div class="row" style="display: inline-block;width: 100%;vertical-align: top;text-align: center;max-width: 600px;margin: 0 auto;">
                            <!--[if (gte mso 9)|(IE)]>
                            <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align: top;">
                                <tbody>
                                    <tr>
                                        <td width="600" align="center" valign="top">
                            <![endif]-->
                            <div class="col-3" style="display: inline-block;width: 100%;vertical-align: top;text-align: center;max-width: 600px;">
                                    <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;vertical-align: top;">
                                        <tbody>
                                            <tr>
																							@if (strlen($logo)>=1)
																								<td class="column_cell font_default" align="center" valign="top" style="padding: 32px 16px;font-family: 'Helvetica Neue LT Std' !important;font-size: 16px;text-align: center;vertical-align: top;color: {{ $color }};"><a href="#" style="display: inline-block;text-decoration: none;font-family: 'Helvetica Neue LT Std' !important;color: {{ $color }};"><img src="{{ $logo }}" alt="{{$nombre_empresa}}" style="line-height: 1;outline: none;border: 0;text-decoration: none;-ms-interpolation-mode: bicubic;mso-line-height-rule: exactly;max-height: 120px;height: auto;"></a></td><!-- /.column_cell -->
																								@else
																									<td class="column_cell font_default" align="center" valign="top" style="padding: 32px 16px;font-family: 'Helvetica Neue LT Std' !important;font-size: 16px;text-align: center;vertical-align: top;color: {{ $color }};"><a href="#" style="display: inline-block;text-decoration: none;font-family: 'Helvetica Neue LT Std' !important;color: {{ $color }};"><img src="{{url('assets_template_extra/images/default-logo.png')}}" alt="{{$nombre_empresa}}" style="line-height: 1;outline: none;border: 0;text-decoration: none;-ms-interpolation-mode: bicubic;mso-line-height-rule: exactly;max-height: 120px;height: auto;"></a></td><!-- /.column_cell -->
																							@endif
                                            </tr>
                                        </tbody>
                                    </table><!-- /.column -->
                            </div><!-- /.col-3 -->
                            <!--[if (gte mso 9)|(IE)]>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <![endif]-->
                        </div><!-- /.row -->
                        <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <![endif]-->
                </td><!-- /.header_cell -->
            </tr>
        </tbody>
      </table><!-- /.header -->
      <table class="jumbotron" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
        <tbody>
          <tr>
            <td class="jumbotron_cell jumbotron_image" align="center" valign="top" style="padding: 0;text-align: center;background-repeat: no-repeat;background-position: 50% 0;background-size: 100% auto;background-color: rgba(255, 255, 255, 0);color: {{ $color }};font-size: 0 !important;">
                <!--[if (gte mso 9)|(IE)]>
                <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align: top;">
                  <tbody>
                    <tr>
                      <td width="600" align="center" valign="top">
                <![endif]-->
                <div class="row" style="display: inline-block;width: 100%;vertical-align: top;text-align: center;max-width: 600px;margin: 0 auto;">
                  <!--[if (gte mso 9)|(IE)]>
                  <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align: top;">
                    <tbody>
                      <tr>
                        <td width="600" align="center" valign="top">
                  <![endif]-->
                  <div class="col-3" style="display: inline-block;width: 100%;vertical-align: top;text-align: center;max-width: 600px;">
                    <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;vertical-align: top;">
                      <tbody>
                        <tr>
                          <td class="column_cell font_default" align="center" valign="top" style="padding: 32px 16px;font-family: 'Helvetica Neue LT Std' !important;font-size: 16px;text-align: center;vertical-align: top;color: {{ $color }};">
                            <table class="icon_holder icon_primary" width="80" border="0" align="center" cellpadding="0" cellspacing="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 48px;margin-left: auto;margin-right: auto;clear: both;">
                              <tbody>
                                <tr>
                                  <td class="hspace" style="padding: 0;font-size: 0;height: 8px;overflow: hidden;">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="icon_cell" style="padding: 8px;font-size: 0;line-height: 1;-webkit-border-radius: 80px;border-radius: 80px;height: 48px;border: 2px solid;background-color: {{ $color }};border-color: {{ $color }};"><img src="http://181.40.66.123/assets/images/email.png" width="48" height="48" alt="" style="line-height: 1;outline: none;border: 0;text-decoration: none;-ms-interpolation-mode: bicubic;mso-line-height-rule: exactly;"></td>
                                </tr>
                                <tr>
                                  <td class="hspace" style="padding: 0;font-size: 0;height: 8px;overflow: hidden;">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table><!-- /.icon_holder:icon_primary -->
                            <h1 style="font-family: 'Helvetica Neue LT Std' !important;margin-left: 0;margin-right: 0;margin-top: 16px;margin-bottom: 8px;padding: 0;font-size: 32px;line-height: 40px;font-weight: bold;text-transform: uppercase;letter-spacing: 4px;color: {{ $color }};">Contacto con {{$nombre_empresa}}</h1>
                            <p style="font-family: 'Helvetica Neue LT Std' !important;font-size: 16px;line-height: 23px;margin-top: 16px;margin-bottom: 24px;"><em>{{$mensaje}}</em></p>
                            <table class="hruler hruler_primary" width="80" border="0" align="center" cellpadding="0" cellspacing="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 62px;margin-left: auto;margin-right: auto;clear: both;">
                              <tbody>
                                <tr>
                                  <td class="hspace" style="padding: 0;font-size: 0;height: 8px;overflow: hidden;">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="hruler_cell" style="padding: 0;font-size: 0;height: 4px;overflow: hidden;line-height: 4px;background-color: {{ $color }};">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="hspace" style="padding: 0;font-size: 0;height: 8px;overflow: hidden;">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table><!-- /.hruler:hruler_primary -->

                          </td><!-- /.column_cell -->
                        </tr>
                      </tbody>
                    </table><!-- /.column -->
                  </div><!-- /.col-3 -->
                  <!--[if (gte mso 9)|(IE)]>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <![endif]-->
                </div><!-- /.row -->
                <!--[if (gte mso 9)|(IE)]>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <![endif]-->
            </td><!-- /.jumbotron_cell -->
          </tr>
        </tbody>
      </table><!-- /.jumbotron -->
      <table class="content" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
        <tbody>
          <tr>
            <td class="content_cell billing_information" align="center" valign="top" style="padding: 0;text-align: center;padding-top: 16px;padding-bottom: 8px;background-color: rgba(255, 255, 255, 0);font-size: 0 !important;">
                <!--[if (gte mso 9)|(IE)]>
                <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align: top;">
                  <tbody>
                    <tr>
                      <td width="600" align="center" valign="top">
                <![endif]-->
                <div class="row" style="display: inline-block;width: 100%;vertical-align: top;text-align: center;max-width: 600px;margin: 0 auto;">
                  <!--[if (gte mso 9)|(IE)]>
                  <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align: top;">
                    <tbody>
                      <tr>
                        <td width="300" align="center" valign="top">
                  <![endif]-->

                  <!--[if (gte mso 9)|(IE)]>
                      </td>
                      <td width="300" align="center" valign="top">
                  <![endif]-->
                  <div  style="display: inline-block;width: 100%;vertical-align: top;text-align: center;max-width: 300px;">
                    <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;vertical-align: top;">
                      <tbody>
                        <tr>
                          <td class="column_cell font_default" align="center" valign="top" style="padding: 32px 16px;font-family: 'Helvetica Neue LT Std' !important;font-size: 16px;text-align: center;vertical-align: top;padding-top: 0;padding-bottom: 0;color: {{ $color }};">
                            <h2 style="font-family: 'Helvetica Neue LT Std' !important;margin-left: 0;margin-right: 0;margin-top: 16px;margin-bottom: 8px;padding: 0;font-size: 16px;line-height: 24px;font-weight: bold;text-transform: uppercase;letter-spacing: 2px;color: #4e5558;">Datos de Contacto</h2>
                            <table class="hruler hruler_secondary" width="80" border="0" align="center" cellpadding="0" cellspacing="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 62px;margin-left: auto;margin-right: auto;clear: both;">
                              <tbody>
                                <tr>
                                  <td class="hspace" style="padding: 0;font-size: 0;height: 8px;overflow: hidden;">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="hruler_cell" style="padding: 0;font-size: 0;height: 4px;overflow: hidden;line-height: 4px;background-color: {{ $color }};">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table><!-- /.hruler:hruler_secondary -->
                            <p style="font-family: 'Helvetica Neue LT Std' !important;font-size: 16px;line-height: 23px;margin-top: 16px;margin-bottom: 24px;">
															{{ $nombre }}<br>
															{{ $email }}<br>
															{{ $telefono }}<br>
														</p>
                          </td><!-- /.column_cell -->
                        </tr>
                      </tbody>
                    </table><!-- /.column -->
                  </div><!-- /.col-2 -->
                  <!--[if (gte mso 9)|(IE)]>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <![endif]-->
                </div><!-- /.row -->
                <!--[if (gte mso 9)|(IE)]>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <![endif]-->
            </td><!-- /.content_cell:billing_information -->
          </tr>
        </tbody>
      </table><!-- /.content -->




      <table class="footer" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;">
        <tbody>
          <tr>
            <td class="footer_cell product_row" align="center" valign="top" style="padding: 24px 0;text-align: center;border-top: 1px solid;background-color: #ffffff;border-color: rgba(255, 255, 255, 0);font-size: 0 !important;">
                <!--[if (gte mso 9)|(IE)]>
                <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align: top;">
                  <tbody>
                    <tr>
                      <td width="600" align="center" valign="top">
                <![endif]-->
                <div class="row" style="display: inline-block;width: 100%;vertical-align: top;text-align: center;max-width: 600px;margin: 0 auto;">
                  <!--[if (gte mso 9)|(IE)]>
                  <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="vertical-align: top;">
                    <tbody>
                      <tr>
                        <td width="600" align="center" valign="top">
                  <![endif]-->
                  <div class="col-3" style="display: inline-block;width: 100%;vertical-align: top;text-align: center;max-width: 600px;">
                    <table class="column" width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;width: 100%;vertical-align: top;">
                      <tbody>
                        <tr>
                          <td class="column_cell font_default" align="center" valign="top" style="padding: 8px 16px;font-family: 'Helvetica Neue LT Std' !important;font-size: 16px;text-align: center;vertical-align: top;color: #afb0b1;">

                            <p style="font-family: 'Helvetica Neue LT Std' !important;font-size: 16px;line-height: 23px;margin-top: 8px;margin-bottom: 8px;margin: 16px 0;"><a href="http://www.porta.com.py" target="_blank" style="display: inline-block;text-decoration: none;font-family: 'Helvetica Neue LT Std' !important;color: #afb0b1;"><span style="text-decoration: none;color: #afb0b1;">
                             <br />Asunci&oacute;n - Paraguay</p>
                          </td><!-- /.column_cell -->
                        </tr>
                      </tbody>
                    </table><!-- /.column -->
                  </div><!-- /.col-3 -->
                  <!--[if (gte mso 9)|(IE)]>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <![endif]-->
                </div><!-- /.row -->
                <!--[if (gte mso 9)|(IE)]>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <![endif]-->
            </td><!-- /.footer_cell -->
          </tr>
        </tbody>
      </table><!-- /.footer -->
  </div><!-- /.email_body -->
</body>
</html>
