<?php
// Modified by xcession

/**
*
* acp_attachments [Thai]
*
* @package language
* @version $Id: attachments.php 8555 2008-05-15 14:10:11Z Kellanved $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this อนุญาตs
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'คุณสามารถปรับแต่งการตั้งค่าหลักสำหรับไฟล์แนบและกลุ่มประเภทพิเศษที่เกี่ยวข้องได้ที่นี่',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'คุณสามารถเพิ่ม ลบ แก้ไขหรือทำให้ไม่สามารถใช้กลุ่มเสริมได้ ตัวเลือกนอกเหนือจากนี้จะเป็นการกำหนดกลุ่มประเภทพิเศษ เปลี่ยนกลไกการดาวน์โหลดและกำหนดอัพโหลดไอคอนซึ่งจะแสดงข้างหน้าไฟล์แนบที่เป็นของกลุ่ม',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'คุณสามารถจัดการ extensions ของคุณ. หากต้องการทำให้ extensions ใช้งานได้ โปรดอ้างอิงแป้นการจัดการกลุ่ม extension เราแนะนำเป็นอย่างยิ่งที่จะไม่อนุญาต scripting extensions (เช่น <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, และอื่นๆ…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'คุณสามารถมองเห็นไฟล์แนบที่ไม่มีเจ้าของได้ สาเหตุส่วนใหญ่มาจากการที่ผู้ใช้อัพโหลดไฟล์แล้ว แต่ไม่ได้ทำการโพสจริง คุณสามารถลบไฟล์หรือแนบไฟล์เข้ากับโพสที่มีอยู่ได้ การแนบไฟล์เข้ากับโพสต้องการโพส ID ที่ถูกต้อง คุณต้องระบุ ID ด้วยตนเอง เพื่อทำการกำหนดการอัพโหลดไฟล์แนบเข้ากับโพสที่คุณเลือก',
	'ADD_EXTENSION'						=> 'เพิ่ม extension',
	'ADD_EXTENSION_GROUP'				=> 'เพิ่มกลุ่ม extension',
	'ADMIN_UPLOAD_ERROR'				=> 'เกิดความผิดพลาดขณะทำการแนบไฟล์: “%s”.',
	'ALLOWED_FORUMS'					=> 'forums ที่อนุญาต',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'สามารถโพส extensions ที่กำหนดไว้ใน forums ที่เลือก',
	'ALLOWED_IN_PM_POST'				=> 'อนุญาต',
	'ALLOW_ATTACHMENTS'					=> 'อนุญาตให้ไฟล์แนบ',
	'ALLOW_ALL_FORUMS'					=> 'อนุญาตบอร์ดทั้งหมด',
	'ALLOW_IN_PM'						=> 'อนุญาตแบบข้อความส่วนตัว',
	'ALLOW_PM_ATTACHMENTS'				=> 'อนุญาตให้แนบไฟล์ในข้อความส่วนตัว',
	'ALLOW_SELECTED_FORUMS'				=> 'เฉพาะบอร์ดที่เลือกข้างล่างนี้เท่านั้น',
	'ASSIGNED_EXTENSIONS'				=> 'ชนิดไฟล์ที่กำหนดไว้',
	'ASSIGNED_GROUP'					=> 'กลุ่มของชนิดไฟล์ที่กำหนดไว้',
	'ATTACH_EXTENSIONS_URL'				=> 'ชนิดไฟล์',
	'ATTACH_EXT_GROUPS_URL'				=> 'กลุ่มของชนิดไฟล์',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'ขนาดไฟล์ใหญ่ที่สุด',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'ขนาดไฟล์ใหญที่, กับ 0 ที่ไม่จำกัด',
	'ATTACH_MAX_PM_FILESIZE'			=> 'ขนาดไฟล์ข้อความที่ใหญ่ที่สุด',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'ขนาด drive ที่ว่างมากที่สุดต่อผู้ใช้หนึ่งคนสำหรับไฟล์แนบข้อความส่วนตัว, กับ 0 ที่ไม่จำกัด',
	'ATTACH_ORPHAN_URL'					=> 'ไฟล์แนบที่ไม่มีเจ้าของ',
	'ATTACH_POST_ID'					=> 'โพส ID',
	'ATTACH_QUOTA'						=> 'โควต้าไฟล์แนบทั้งหมด',
	'ATTACH_QUOTA_EXPLAIN'				=> 'ขนาด drive ที่ว่างมากที่สุดต่อทั้งบอร์ด , กับ 0 ที่ไม่จำกัด',
	'ATTACH_TO_POST'					=> 'แนบไฟล์กับโพส',

	'CAT_FLASH_FILES'			=> 'Flash files',
	'CAT_IMAGES'				=> 'Images',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime media files',
	'CAT_RM_FILES'				=> 'RealMedia media files',
	'CAT_WM_FILES'				=> 'Windows Media media files',
	'CHECK_CONTENT'				=> 'เช็ค attachment files',
	'CHECK_CONTENT_EXPLAIN'		=> 'Some browsers can be tricked to assume an incorrect mimetype for uploaded files. This option ensures that such files likely to cause this are rejected.',
	'CREATE_GROUP'				=> 'สร้างกลุ่มใหม่',
	'CREATE_THUMBNAIL'			=> 'ไฟล์แนบ',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'สร้างภาพขนาดเล็กในทุกสถานการณ์ที่เป็นไปได้',

	'DEFINE_ALLOWED_IPS'			=> 'นิยาม IPs/hostnames ที่อนุญาต',
	'DEFINE_DISALLOWED_IPS'			=> 'นิยาม IPs/hostnames ที่ไม่อนุญาต',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'เพื่อกำหนดหลาย IPs หรือ hostnames ที่แตกต่างกัน ระบุแต่ละรายการโดยแยกบรรทัดกัน. เพื่อระบุช่วงของ IP addresses ให้แยกตัวเริ่มและตัวสิ้นสุดด้วย hyphen (-), เพื่อกำหนด wildcard ให้ใช้ “*”',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'คุณสามารถลบ IP addresses หลายๆตัวได้ในครั้งเดียวโดยการใช้ เมาส์และคีย์บอร์ด. IPs ที่ถูกแยกออก จะมีพื้นหลังสีน้ำเงิน',
	'DISPLAY_INLINED'				=> 'แสดงภาพในบรรทัดเดียว',
	'DISPLAY_INLINED_EXPLAIN'		=> 'ถ้าตั้งค่าเป็น No image ไฟล์แนบจะแสดงเป็นลิงค์แทน',
	'DISPLAY_ORDER'					=> 'ลำดับการแสดงไฟล์แนบ',
	'DISPLAY_ORDER_EXPLAIN'			=> 'แสดงลำดับไฟล์แนบตามเวลา',
	
	'EDIT_EXTENSION_GROUP'			=> 'แก้ไขกลุ่ม extension',
	'EXCLUDE_ENTERED_IP'			=> 'ทำให้อันนี้ใช้ได้ เพื่อเอา IP/hostname ที่ระบุออก',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'เอา IP ออกจาก IPs/hostnames ที่อนุญาต',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'เอา IP ออกจาก IPs/hostnames ที่ไม่อนุญาต',
	'EXTENSIONS_UPDATED'			=> 'ชนิดไฟล์อัพเดทสำเร็จ',
	'EXTENSION_EXIST'				=> 'มีชนิดไฟล์ %s อยู่แล้ว',
	'EXTENSION_GROUP'				=> 'กลุ่มของชนิดไฟล์',
	'EXTENSION_GROUPS'				=> 'กลุ่มของชนิดไฟล์หลายกลุ่ม',
	'EXTENSION_GROUP_DELETED'		=> 'ลบกลุ่มชนิดไฟล์สำเร็จ',
	'EXTENSION_GROUP_EXIST'			=> 'มีกลุ่มชนิดไฟล์ %s อยู่แล้ว',

	'GO_TO_EXTENSIONS'		=> 'ไปที่หน้าจอการจัดการชนิดไฟล์แนป',
	'GROUP_NAME'			=> 'ชื่อกลุ่ม',

	'IMAGE_LINK_SIZE'			=> 'Image link dimensions',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'แสดงภาพไฟล์แนบเป็นลิงค์ข้อความบรรทัดเดียวเมื่อไฟล์ใหญ่กว่าที่กำหนด. หากไม่ใช้ค่านี้, ให้ตั้งค่าเป็น 0px by 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick path',
	'IMAGICK_PATH_EXPLAIN'		=> 'เส้นทางสมบูรณ์ของ imagemagick convert application, e.g. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'จำนวนไฟล์แนบมากที่สุดสำหรับหนึ่งโพส',
	'MAX_ATTACHMENTS_PM'			=> 'จำนวนไฟล์แนบมากที่สุดสำหรับหนึ่งข้อความ',
	'MAX_EXTGROUP_FILESIZE'			=> 'ขนาดไฟล์ใหญ่ที่สุด',
	'MAX_IMAGE_SIZE'				=> 'Maximum image dimensions',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'ขนาดไฟล์แนบรูปภาพที่ใหญ่ที่สุด. ตั้งค่า 0px by 0px เมื่อไม่ต้องการใช้',
	'MAX_THUMB_WIDTH'				=> 'ขนาดความกว้างของภาพขนาดเล็กที่กว้างที่สุดในหน่วยพิกเซล',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'ภาพขนาดเล็กที่สร้างขึ้นจะกว้างไม่เกินความกว้างที่ตั้งค่าไว้ที่นี่',
	'MIN_THUMB_FILESIZE'			=> 'ขนาดไฟล์ภาพนาดเล็กที่น้อยที่สุด',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'อย่าสร้างภาพขนาดเล็กที่มีขนาดเล็กกว่าที่กำหนดนี้',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'อนุญาตในโพสเท่านั้น',
	'NOT_ALLOWED_IN_PM_POST'	=> 'ไม่อนุญาต',
	'NOT_ASSIGNED'				=> 'ไม่กำหนด',
	'NO_EXT_GROUP'				=> 'ไม่มี',
	'NO_EXT_GROUP_NAME'			=> 'ไม่มีการระบุชื่อกลุ่ม',
	'NO_EXT_GROUP_SPECIFIED'	=> 'ไม่มีการระบุชื่อกลุ่มชนิดไฟล์',
	'NO_FILE_CAT'				=> 'ไม่มี',
	'NO_IMAGE'					=> 'ไม่มีรูปภาพ',
	'NO_THUMBNAIL_SUPPORT'		=> 'การรองรับภาพขนาดเล็กถูกทำให้ใช้ไม่ได้. ไม่พบส่วนประกอบที่จำเป็นไม่ว่าจะเป็น GD extension หรือ imagemagick.',
	'NO_UPLOAD_DIR'				=> 'อัพโหลดไดเรกทอรีที่ระบุไม่มีอยู่จริง',
	'NO_WRITE_UPLOAD'			=> 'อัพโหลดไดเรกทอรีที่ระบุไม่สามารถเขียนทับได้ โปรดปรับเปลี่ยนการอนุญาตเพื่อให้เวบเซิร์ฟเวอร์สามารถเขียนทับได้',

	'ONLY_ALLOWED_IN_PM'	=> 'อนุญาตในข้อความส่วนตัวเท่านั้น',
	'ORDER_ALLOW_DENY'		=> 'อนุญาต',
	'ORDER_DENY_ALLOW'		=> 'ไม่อนุญาต',

	'REMOVE_ALLOWED_IPS'		=> 'ลบหรือรวม IPs/hostnames <em>ที่อนุญาต</em> ',
	'REMOVE_DISALLOWED_IPS'		=> 'ลบหรือรวม IPs/hostnames <em>ที่ไม่อนุญาต</em> ',

	'SEARCH_IMAGICK'				=> 'ค้นหา Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'รายการ อนุญาต/ไม่อนุญาต',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'เปลี่ยนพฤติกรรมเมื่อใช้ Secure ดาวน์โหลดสำหรับรายการ อนุญาต/ไม่อนุญาตใน <strong>whitelist</strong> (อนุญาต) หรือ <strong>blacklist</strong> (ไม่อนุญาต).',
	'SECURE_DOWNLOADS'				=> 'ใช้ secure ดาวน์โหลด',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'การใช้ตัวเลือกนี้, การดาวน์โหลดจะถูกจำกัดให้ IP’s/hostnames ที่คุณระบุเท่านั้น',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Secure ดาวน์โหลดไม่ถูกใช้ การตั้งค่าด้านล่างจะถูกใช้เมื่อมีการตั้งค่าเป็น Secure ดาวน์โหลด',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'อัพเดทรายการ IP สำเร็จ',
	'SECURE_EMPTY_REFERRER'			=> 'อนุญาตให้ referrer ไม่มีได้',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Secure ดาวน์โหลด อ้างอิงตาม referrers. คุณต้องการที่จะอนุญาต ดาวน์โหลด สำหรับพวกที่ไม่มี referrer?',
	'SETTINGS_CAT_IMAGES'			=> 'ตั้งค่าประเภทภาพ',
	'SPECIAL_CATEGORY'				=> 'Special category',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Special categories differ between the way presented within posts.',
	'SUCCESSFULLY_UPLOADED'			=> 'อัพโหลดสำเร็จ',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'เพิ่มกลุ่ม Extension สำเร็จ',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'อัพเดทกลุ่ม Extension สำเร็จ',

	'UPLOADING_FILES'				=> 'กำลังอัพโหลดไฟล์',
	'UPLOADING_FILE_TO'				=> 'กำลังอัพโหลดไฟล์ “%1$s” ในโพสหมายเลข %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'คุณไม่ได้รับการอนุญาตให้อัพโหลดไฟล์ใน forum “%s”.',
	'UPLOAD_DIR'					=> 'อัพโหลดไดเรกทอรี',
	'UPLOAD_DIR_EXPLAIN'			=> 'เส้นทางที่เก็บไฟล์แนบ. หากมีการเปลี่ยนไดเรกทอรี่ขณะที่มีการอัพโหลดไฟล์แนบ คุณต้องคัดลอกไฟล์ไปยังที่ใหม่ด้วยตนเอง',
	'UPLOAD_ICON'					=> 'อัพโหลดไอคอน',
	'UPLOAD_NOT_DIR'				=> 'ที่อัพโหลดที่ระบุไม่เป็นไดเรกทอรี',
));

?>