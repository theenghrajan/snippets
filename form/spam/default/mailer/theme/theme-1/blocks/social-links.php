<?php
/**
 * Created by PhpStorm.
 * User: XperSona
 * Date: 3/21/2019
 * Time: 21:59
 */
if (!empty(CONFIG['link_facebook'])):
    ?>
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32"
           height="32"
           style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 5px">
        <tbody>
        <tr style="vertical-align: top">
            <td align="left" valign="middle"
                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                <a href="<?php echo CONFIG['link_facebook']?>" title="Facebook"
                   target="_blank">
                    <img src="<?php echo CONFIG['site_url']; ?>/mailer/theme/theme-1/images/facebook@2x.png"
                         alt="Facebook"
                         title="Facebook" width="32"
                         style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                </a>
                <div style="line-height:5px;font-size:1px">&#160;</div>
            </td>
        </tr>
        </tbody>
    </table>

<?php
endif;
?>
<!--[if (mso)|(IE)]></td>
<td width="32" style="width:32px; padding-right: 5px;" valign="top">
<![endif]-->
<?php
if (!empty(CONFIG['link_twitter'])):
    ?>

    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32"
           height="32"
           style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 5px">
        <tbody>
        <tr style="vertical-align: top">
            <td align="left" valign="middle"
                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                <a href="<?php echo CONFIG['link_twitter']?>" title="Twitter" target="_blank">
                    <img src="<?php echo CONFIG['site_url']; ?>/mailer/theme/theme-1/images/twitter@2x.png"
                         alt="Twitter"
                         title="Twitter" width="32"
                         style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                </a>
                <div style="line-height:5px;font-size:1px">&#160;</div>
            </td>
        </tr>
        </tbody>
    </table>

<?php
endif;
?>
<!--[if (mso)|(IE)]></td>
<td width="32" style="width:32px; padding-right: 0;" valign="top">
<![endif]-->
<?php
if (!empty(CONFIG['link_instagram'])):
    ?>
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32"
           height="32"
           style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;Margin-right: 0">
        <tbody>
        <tr style="vertical-align: top">
            <td align="left" valign="middle"
                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                <a href="<?php echo CONFIG['link_instagram']?>" title="Instagram"
                   target="_blank">
                    <img src="<?php echo CONFIG['site_url']; ?>/mailer/theme/theme-1/images/instagram@2x.png"
                         alt="Instagram"
                         title="Instagram" width="32"
                         style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                </a>
                <div style="line-height:5px;font-size:1px">&#160;</div>
            </td>
        </tr>
        </tbody>
    </table>
<?php
endif;
?>
