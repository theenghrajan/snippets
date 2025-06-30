<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2/18/2019
 * Time: 10:40
 */
?>

<div style="background-color:transparent;">
    <div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #525252;"
         class="block-grid three-up ">
        <div style="border-collapse: collapse;display: table;width: 100%;background-color:#525252;">
            <!--[if (mso)|(IE)]>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="background-color:transparent;" align="center">
                        <table cellpadding="0" cellspacing="0" border="0" style="width: 600px;">
                            <tr class="layout-full-width" style="background-color:#525252;"><![endif]-->

            <!--[if (mso)|(IE)]>
            <td align="center" width="200"
                style=" width:200px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                valign="top"><![endif]-->
            <div class="col num4"
                 style="max-width: 320px;min-width: 200px;display: table-cell;vertical-align: top;">
                <div style="background-color: transparent; width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                        <!--<![endif]-->
                        <div align="center"
                             style="padding-right: 0px; padding-left: 0px; padding-bottom: 0px;" class="">
                            <div style="line-height:15px;font-size:1px">&#160;</div>
                            <div style="display: table; max-width:131px;">
                                <!--[if (mso)|(IE)]>
                                <table width="131" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td style="border-collapse:collapse; padding-right: 0px; padding-left: 0px; padding-bottom: 0px;"
                                            align="center">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                                   style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:131px;">
                                                <tr>
                                                    <td width="32" style="width:32px; padding-right: 5px;"
                                                        valign="top"><![endif]-->
                                <?php include('social-links.php') ?>
                                <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                            </div>
                        </div>

                        <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                </div>
            </div>
            <!--[if (mso)|(IE)]></td>
            <td align="center" width="200"
                style=" width:200px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                valign="top"><![endif]-->
            <div class="col num4"
                 style="max-width: 320px;min-width: 200px;display: table-cell;vertical-align: top;">
                <div style="background-color: transparent; width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                        <!--<![endif]-->


                        <div class="">
                            <!--[if mso]>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="padding-right: 0px; padding-left: 0px; padding-top: 20px; padding-bottom: 0px;">
                            <![endif]-->
                            <div style="color:#a8bf6f;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:120%; padding-right: 0px; padding-left: 0px; padding-top: 20px; padding-bottom: 0px;">
                                <div style="font-size:12px;line-height:14px;color:#a8bf6f;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;text-align:left;">
                                    <p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center">
                                                    <span style="color: rgb(255, 255, 255); font-size: 12px; line-height: 14px;"><span
                                                                style="font-size: 12px; line-height: 14px; color: rgb(168, 191, 111);">Tel.:</span> <?php echo CONFIG['phone']; ?></span><br>
                                    </p></div>
                            </div>
                            <!--[if mso]></td></tr></table><![endif]-->
                        </div>

                        <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                </div>
            </div>
            <!--[if (mso)|(IE)]></td>
            <td align="center" width="200"
                style=" width:200px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;"
                valign="top"><![endif]-->
            <div class="col num4"
                 style="max-width: 320px;min-width: 200px;display: table-cell;vertical-align: top;">
                <div style="background-color: transparent; width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                        <!--<![endif]-->

                        <div class="">
                            <?php
                            if (!empty(CONFIG['site_email'])):
                                ?>
                                <!--[if mso]>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td style="padding-right: 0px; padding-left: 0px; padding-top: 20px; padding-bottom: 0px;">
                                <![endif]-->
                                <div style="color:#a8bf6f;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;line-height:120%; padding-right: 0px; padding-left: 0px; padding-top: 20px; padding-bottom: 0px;">
                                    <div style="font-size:12px;line-height:14px;color:#a8bf6f;font-family:'Montserrat', 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;text-align:left;">
                                        <p style="margin: 0;font-size: 12px;line-height: 14px;text-align: center">
                                            Email <span><a href=""
                                                           style="color: rgb(255, 255, 255); font-size: 12px; line-height: 14px;"><?php echo CONFIG['site_email']; ?></a></span>
                                        </p></div>
                                </div>
                                <!--[if mso]></td></tr></table><![endif]-->
                            <?php
                            endif;
                            ?>
                        </div>

                        <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                </div>
            </div>
            <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
    </div>
</div>

