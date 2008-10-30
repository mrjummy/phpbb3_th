<?php
// Modified by xcession

/**
*
* acp_email [Thai]
*
* @package language
* @version $Id: email.php 8479 2008-03-29 00:22:48Z naderman $
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
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'คุณสามารถส่ง e-mail ข้อความไปหาผู้ใช้ทั้งหมดของคุณหรือผู้ใช้ทั้งหมดของกลุ่มที่ระบุ <strong>ที่ตัวเลือกการส่งเมลแบบแมสเป็น enabled</strong> ค่าเริ่มต้นคือผู้รับจำนวน 50 คน  ถ้าคุณส่ง e-mail เป็นกลุ่มใหญ่คุณควรจะรอ คุณไม่ควรที่จะหยุดตอนที่ยังส่งไม่เสร็จ เป็นเรื่องปกติที่การส่งจำนวนมากจะใช้เวลานาน  คุณจะได้รับการแจ้งเมื่อการส่งสำเร็จ',
	'ALL_USERS'						=> 'ผู้ใช้ทุกคน',

	'COMPOSE'				=> 'สร้างข้อความ',

	'EMAIL_SEND_ERROR'		=> 'มีความผิดพลาดขณะส่ง e-mail โปรดตรวจสอบ %sError log%s สำหรับรายละเอียด',
	'EMAIL_SENT'			=> 'ส่งข้อความแล้ว',
	'EMAIL_SENT_QUEUE'		=> 'ข้อความถูกจัดลำดับเพื่อรอการส่ง',

	'LOG_SESSION'			=> 'Log mail session to critical log',

	'SEND_IMMEDIATELY'		=> 'ส่งทันที',
	'SEND_TO_GROUP'			=> 'ส่งให้กลุ่ม',
	'SEND_TO_USERS'			=> 'ส่งให้ผู้ใช้',
	'SEND_TO_USERS_EXPLAIN'	=> 'กรอกชื่อที่นี่จะทับกลุ่มใดๆที่เลือกด้านบน กรอกชื่อผู้ใช้แต่ละคน คนละบรรทัด',
	
	'MAIL_HIGH_PRIORITY'	=> 'สูง',
	'MAIL_LOW_PRIORITY'		=> 'ต่ำ',
	'MAIL_NORMAL_PRIORITY'	=> 'ปกติ',
	'MAIL_PRIORITY'			=> 'ลำดับความสำคัญของเมล',
	'MASS_MESSAGE'			=> 'ข้อความของคุณ',
	'MASS_MESSAGE_EXPLAIN'	=> 'คุณสามารถกรอกได้เฉพาะข้อความธรรมดาเท่านั้น พวก markup จะถูกนำออกตอนส่ง',
	
	'NO_EMAIL_MESSAGE'		=> 'คุณต้องกรอกข้อความ.',
	'NO_EMAIL_SUBJECT'		=> 'คุณต้องระบุหัวเรื่องสำหรับข้อความของคุณ',
));

?>