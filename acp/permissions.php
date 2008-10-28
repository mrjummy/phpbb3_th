<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.0.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_permissions [English]
*
* @package language
* @version $Id: permissions.php,v 1.38 2007/10/08 14:38:26 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>การอนุญาต ถูกแบ่งออกเป็นส่วนย่อยๆและถูกจับกลุ่มเป็น 4 กลุ่มใหญ่ๆ ได้แก่:</p>

		<h2>Global Permissions</h2>
		<p>กลุ่มนี้จะใช้ควบคุมการเข้าถึงในระดับบนสุดและมีผลกับทั้งบอร์ด ส่วนย่อยจะถูกแบ่งออกเป็น การอนุญาตของผู้ใช้ ของกลุ่ม ของผู้ดูแลระบบและของผู้จัดการบอร์ด</p>

		<h2>Forum Based Permissions</h2>
		<p>กลุ่มนี้จะใช้ควบคุมการเข้าถึงในระดับบอร์ดส่วนย่อยจะถูกแบ่งออกเป็น การอนุญาตบอร์ด, ผู้จัดการบอร์ดบอร์ด, ผู้ใช้บอร์ดและกลุ่มของบอร์ด</p>

		<h2>Permission Roles</h2>
		<p>กลุ่มนี้จะใช้สร้างชุดของการอนุญาตที่แตกต่างกัน สำหรับการอนุญาตแต่ละแบบ สามารถนำไปใช้ในแบบ บทบาท-based บทบาทเริ่มต้นควรครอบคลุมการดูแลบอร์ดใหญ่และเล็ก คุณสามารถการเพิ่ม แก้ไข ลบ บทบาทตามแต่ที่เห็นสมควร</p>

		<h2>Permission Masks</h2>
		<p>กลุ่มนี้จะใช้ดูผลของการอนุญาตที่กำหนดให้ผู้ใช้ ผู้จัดการบอร์ด (ทั้ง LocalและGlobal) , ผู้ดูแลระบบ หรือ Forum</p>
	
		<br />

		<p>สำหรับข้อมูลเพิ่มเติมในการตั้งค่าและการจัดการการอนุญาตบนบอร์ด phpBB3 กรุณาดูที่ <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapter 1.5 of our Quick Start Guide</a>.</p>
	',

	'ACL_NEVER'				=> 'ไม่ได้',
	'ACL_SET'				=> 'กำหนดสิทธิ์การใช้งาน',
	'ACL_SET_EXPLAIN'		=> 'กฎการอนุญาตอ้างอิงกับระบบ <samp>YES</samp>/<samp>NO</samp> สำหรับผู้ใช้หรือกลุ่ม จะมีผลเหนือกว่าค่าที่กำหนดให้ในตอนแรก ถ้าคุณไม่ได้ต้องการกำหนดค่าให้กับตัวเลือก ให้เลือก<samp>NO</samp>ถ้ามีค่าที่กำหนดไว้แล้วที่อื่น ค่านั้นจะถูกใช้ก่อน นอกนั้นจะถือว่าเป็น <samp>NEVER</samp> ทุกออบเจคที่ถูกเลือก (ด้วย checkbox ข้างหน้ามัน) จะคัดลอกการอนุญาตที่คุณกำหนด',
	'ACL_SETTING'			=> 'ตั้งค่า',

	'ACL_TYPE_A_'			=> 'ผู้ดูแลระบบ การอนุญาต',
	'ACL_TYPE_F_'			=> 'การอนุญาตของบอร์ด',
	'ACL_TYPE_M_'			=> 'Moderative การอนุญาต',
	'ACL_TYPE_U_'			=> 'การอนุญาตผู้ใช้',

	'ACL_TYPE_GLOBAL_A_'	=> 'การอนุญาตของผู้ดูแลระบบ',
	'ACL_TYPE_GLOBAL_U_'	=> 'การอนุญาตผู้ใช้',
	'ACL_TYPE_GLOBAL_M_'	=> 'การอนุญาต ของ Global Moderator',
	'ACL_TYPE_LOCAL_M_'		=> 'การอนุญาต ของ Moderator',
	'ACL_TYPE_LOCAL_F_'		=> 'การอนุญาตบอร์ด',
	
	'ACL_NO'				=> 'ไม่',
	'ACL_VIEW'				=> 'กำลังดูการอนุญาต',
	'ACL_VIEW_EXPLAIN'		=> 'คุณสามารถดูผลของการอนุญาต ที่ให้ user/group มี รูปสี่เหลี่ยมจัตุรัสสีแดง บ่งบอกว่าให้ user/group ไม่มีการอนุญาต รูปสี่เหลี่ยมจัตุรัสสีเขียวให้ user/group มีการอนุญาต',
	'ACL_YES'				=> 'ใช่',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'คุณสามารถกำหนดการอนุญาตของผู้ดูแลระบบให้กับผู้ใช้หรือกลุ่ม ผู้ใช้ทุกคนที่มีสิทธิ์การดูแลระบบจะสามารถดูแป้นควบคุมผู้ดูแลระบบได้',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'คุณสามารถกำหนดให้ผู้ใช้และกลุ่ม เป็น Moderators  ในการกำหนดการเข้าถึงของผู้ใช้ กำหนดการอนุญาตทั้งหมดของผู้จัดการบอร์ดหรือผู้ดูแลระบบ โปรดใช้หน้าที่เหมาะสมในการกำหนด',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'คุณสามารถปรับแต่งผู้ใช้กลุ่มให้สามารถเข้าถึงบอร์ด ที่ต้องการได้ ในการกำหนดผู้จัดการหรือผู้ดูแลระบบ โปรดใช้หน้าที่เหมาะสมในการกำหนด',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'คุณสามารถกำหนดผู้จัดการบอร์ดทั้งหมด การอนุญาตผู้ใช้หรือกลุ่ม ผู้จัดการบอร์ดทั้งหมดนี้จะเหมือนผู้จัดการบอร์ดธรรมดาเพียงแต่ว่าจะเข้าถึงได้ทุกบอร์ดในบอร์ด',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'คุณสามารถกำหนด การอนุญาตของบอร์ดให้กับกลุ่ม',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'คุณสามารถกำหนดการอนุญาตทั้งหมดให้กับกลุ่ม - การอนุญาตผู้ใช้, การอนุญาตผู้จัดการบอร์ดทั้งหมด และการอนุญาตผู้ดูแลระบบ การอนุญาตผู้ใช้จะรวมความสามารถต่างๆเช่นการใช้ภาพประจำตัว, การส่งข้อความส่วนตัวและอื่นๆ การอนุญาตผู้จัดการบอร์ด เช่น การอนุมัติโพส, การจัดการกระทู้, การจัดการการแบนและอื่นๆ การอนุญาตผู้ดูแลระบบ เช่น ปรับแต่งการอนุญาต, กำหนด custom BBCodes, จัดการบอร์ด และอื่นๆ การอนุญาตผู้ใช้แต่ละคนควรจะเปลี่ยนในกรณีที่จำเป็นเท่านั้น วิธีที่แนะนำคือการนำผู้ใช้ใส่ในกลุ่มและกำหนดการอนุญาตโดยกลุ่ม',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'คุณสามารถจัดการบทบาทสำหรับการอนุญาตการดูแลระบบ บทบาทคือการอนุญาตที่มีผลบังคับใช้, ถ้าคุณเปลี่ยนบทบาท สมาชิกในบทบาทนั้นก็จะเปลี่ยนตามด้วย',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'คุณสามารถจัดการบทบาทสำหรับการอนุญาตการดูแลบอร์ด บทบาทคือการอนุญาตที่มีผลบังคับใช้, ถ้าคุณเปลี่ยนบทบาท สมาชิกในบทบาทนั้นก็จะเปลี่ยนตามด้วย',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'คุณสามารถจัดการบทบาทสำหรับการอนุญาตการดูแลจัดการบอร์ด บทบาทคือการอนุญาตที่มีผลบังคับใช้, ถ้าคุณเปลี่ยนบทบาท สมาชิกในบทบาทนั้นก็จะเปลี่ยนตามด้วย',
	'ACP_USER_ROLES_EXPLAIN'					=> 'คุณสามารถจัดการบทบาทสำหรับการอนุญาตผู้ใช้ บทบาทคือการอนุญาตที่มีผลบังคับใช้, ถ้าคุณเปลี่ยนบทบาท สมาชิกในบทบาทนั้นก็จะเปลี่ยนตามด้วย',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'คุณสามารถกำหนด การอนุญาตของบอร์ดให้กับผู้ใช้',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'คุณสามารถกำหนดการอนุญาตทั้งหมดให้กับกลุ่ม - การอนุญาตผู้ใช้, การอนุญาตผู้จัดการบอร์ดทั้งหมด และการอนุญาตผู้ดูแลระบบ การอนุญาตผู้ใช้จะรวมความสามารถต่างๆเช่นการใช้ภาพประจำตัว, การส่งข้อความส่วนตัวและอื่นๆ การอนุญาตผู้จัดการบอร์ด เช่น การอนุมัติโพส, การจัดการกระทู้, การจัดการการแบนและอื่นๆ การอนุญาตผู้ดูแลระบบ เช่น ปรับแต่งการอนุญาต, กำหนด custom BBCodes, จัดการบอร์ดและอื่นๆ การอนุญาตผู้ใช้แต่ละคนควรจะเปลี่ยนในกรณีที่จำเป็นเท่านั้น วิธีที่แนะนำคือการนำผู้ใช้ใส่ในกลุ่มและกำหนดการอนุญาตโดยกลุ่ม',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'คุณสามารถดูผลการอนุญาตการดูแลระบบที่กำหนดให้กับ ผู้ใช้/กลุ่ม ที่เลือก',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'คุณสามารถดูผลการอนุญาตการดูแลจัดการบอร์ดที่กำหนดให้กับ ผู้ใช้/กลุ่ม ที่เลือก',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'คุณสามารถดูการอนุญาตบอร์ดที่กำหนดให้กับ ผู้ใช้/กลุ่มและบอร์ด ที่เลือก',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'คุณสามารถดูการอนุญาตการจัดการของบอร์ดที่กำหนดให้กับ ผู้ใช้/กลุ่มและบอร์ด ที่เลือก',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'คุณสามารถดูผลการอนุญาตผู้ใช้ ที่กำหนดให้กับ ผู้ใช้/กลุ่ม ที่เลือก',

	'ADD_GROUPS'				=> 'เพิ่มกลุ่ม',
	'ADD_PERMISSIONS'			=> 'เพิ่ม การอนุญาต',
	'ADD_USERS'					=> 'เพิ่ม ผู้ใช้',
	'ADVANCED_PERMISSIONS'		=> 'การอนุญาตขั้นสูง',
	'ALL_GROUPS'				=> 'เลือกกลุ่มทั้งหมด',
	'ALL_NEVER'					=> 'ทั้งหมด <samp>NEVER</samp>',
	'ALL_NO'					=> 'ทั้งหมด <samp>NO</samp>',
	'ALL_USERS'					=> 'เลือกผู้ใช้ทั้งหมด',
	'ALL_YES'					=> 'ทั้งหมด <samp>YES</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'ใช้การอนุญาตทั้งหมด',
	'APPLY_PERMISSIONS'			=> 'ใช้การอนุญาต',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'การอนุญาตและบทบาทที่กำหนดสำหรับรายการนี้จะมีผลกับรายการนี้และรายการที่ถูกเลือกทั้งหมด',
	'AUTH_UPDATED'				=> 'อัดเดดการอนุญาตเรียบร้อยแล้ว',

	'CREATE_ROLE'				=> 'สร้างบทบาท',
	'CREATE_ROLE_FROM'			=> 'Use settings from…',
	'CUSTOM'					=> 'Custom…',

	'DEFAULT'					=> 'Default',
	'DELETE_ROLE'				=> 'บทบาทเริ่มต้น',
	'DELETE_ROLE_CONFIRM'		=> 'คุณแน่ใจที่จะลบบทบาท? รายการที่เป็นสมาชิกของบทบาทนี้จะเสียการอนุญาตไป',
	'DISPLAY_ROLE_ITEMS'		=> 'ดูรายการนี้โดยใช้บทบาท',

	'EDIT_PERMISSIONS'			=> 'แก้ไขการอนุญาต',
	'EDIT_ROLE'					=> 'แก้ไขบทบาท',

	'GROUPS_NOT_ASSIGNED'		=> 'ไม่มีกลุ่มที่กำหนดบทบาทนี้',

	'LOOK_UP_GROUP'				=> 'Look up กลุ่มผู้ใช้',
	'LOOK_UP_USER'				=> 'Look up ผู้ใช้',

	'MANAGE_GROUPS'		=> 'จัดการกลุ่ม',
	'MANAGE_USERS'		=> 'จัดการผู้ใช้',

	'NO_AUTH_SETTING_FOUND'		=> 'ยังไม่มีการกำหนดการอนุญาต',
	'NO_ROLE_ASSIGNED'			=> 'ไ่ม่มีบทบาท กำหนด…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'การตั้งค่าบทบาทนี้ ไม่ได้เปลี่ยนการอนุญาตทางด้านขวามือ ถ้าคุณต้องการที่จะไม่ตั้งค่าหรือลบการอนุญาตทั้งหมด คุณควรใช้  “All <samp>NO</samp>” link.',
	'NO_ROLE_AVAILABLE'			=> 'ไม่มีบทบาท',
	'NO_ROLE_NAME_SPECIFIED'	=> 'กรุณาใส่ชื่อบทบาท',
	'NO_ROLE_SELECTED'			=> 'หาบทบาทไม่พบ',
	'NO_USER_GROUP_SELECTED'	=> 'คุณยังไม่ได้เลือกผู้ใช้หรือกลุ่มใดเลย',

	'ONLY_FORUM_DEFINED'	=> 'คุณเพียงแค่กำหนดบอร์ด เท่านั้น คุณยังต้องกำหนดผุ้ใช้หรือกลุ่มอย่างน้อยหนึ่งอันด้วย',

	'PERMISSION_APPLIED_TO_ALL'		=> 'การอนุญาตและบทบาท จะถูกนำไปใช้กับออบเจคที่ถูกเลือกด้วย',
	'PLUS_SUBFORUMS'				=> '+บอร์ดย่อย',

	'REMOVE_PERMISSIONS'			=> 'ลบการอนุญาต',
	'REMOVE_ROLE'					=> 'ลบบทบาท',
	'RESULTING_PERMISSION'			=> 'Resulting การอนุญาต',
	'ROLE'							=> 'บทบาท',
	'ROLE_ADD_SUCCESS'				=> 'เพิ่มบทบาทสำเร็จ',
	'ROLE_ASSIGNED_TO'				=> 'กำหนดผู้ใช้ / กลุ่ม เป็น %s',
	'ROLE_DELETED'					=> 'ลบบทบาทสำเร็จ',
	'ROLE_DESCRIPTION'				=> 'คำอธิบายบทบาท',

	'ROLE_ADMIN_FORUM'			=> 'Forum Admin',
	'ROLE_ADMIN_FULL'			=> 'Full Admin',
	'ROLE_ADMIN_STANDARD'		=> 'Standard Admin',
	'ROLE_ADMIN_USERGROUP'		=> 'ผู้ใช้และกลุ่ม Admin',
	'ROLE_FORUM_BOT'			=> 'Bot Access',
	'ROLE_FORUM_FULL'			=> 'Full Access',
	'ROLE_FORUM_LIMITED'		=> 'Limited Access',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Limited Access + Polls',
	'ROLE_FORUM_NOACCESS'		=> 'No Access',
	'ROLE_FORUM_ONQUEUE'		=> 'On Moderation Queue',
	'ROLE_FORUM_POLLS'			=> 'Access + Polls',
	'ROLE_FORUM_READONLY'		=> 'Read Only Access',
	'ROLE_FORUM_STANDARD'		=> 'Standard Access',
	'ROLE_MOD_FULL'				=> 'Full Moderator',
	'ROLE_MOD_QUEUE'			=> 'Queue Moderator',
	'ROLE_MOD_SIMPLE'			=> 'Simple Moderator',
	'ROLE_MOD_STANDARD'			=> 'Standard Moderator',
	'ROLE_USER_FULL'			=> 'All Features',
	'ROLE_USER_LIMITED'			=> 'Limited Features',
	'ROLE_USER_NOAVATAR'		=> 'ไม่มีรูปภาพประจำตัว',
	'ROLE_USER_NOPM'			=> 'ไม่มีข้อความส่วนตัว',
	'ROLE_USER_STANDARD'		=> 'Standard Features',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'สามารถเข้าถึงการจัดการบอร์ด จัดการบอร์ด และการตั้งค่าอนุญาตบอร์ด',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'มีความสามารถเข้าถึงฟังก์ชันการดูแลระบบบอร์ดทั้งหมด<br /> ไม่แนะนำให้ใช้',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'มีความสามารถเข้าถึงฟังก์ชันการดูแลระบบส่วนใหญ่แต่ไม่สามารถใช้เครื่องมือของเซิร์ฟเวอร์หรือระบบได้',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'สามารถจัดการกลุ่มและผู้ใช้ เปลี่ยนการตั้งค่าการอนุญาต, การจัดการแบนและจัดการการจัดอันดับ',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'บทบาทนี้เหมาะกับ bot และ search spiders.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'สามารถใช้ features ทั้งหมด, รวมทั้งการโพสประกาศและ stickies. สามารถละเลย flood limit ได้ด้วย<br /> ไม่แนะนำสำหรับผู้ใช้ทั่วไป',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'สามารถใช้ features บางประการ, แต่ไม่สามารถแนบไฟล์หรือใช้โพสไอคอน',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'จำกัดการเข้าถึงแบบสำรวจแต่สามารถสร้างแบบสำรวจได้',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'ไม่สามารถเห็นหรือเข้าถึงบอร์ด',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'สามารถใช้ features ส่วนใหญ่ได้ รวมทั้งไฟล์แนบ, แต่การใช้โพสและกระทู้ต้องได้รับการอนุมัติจากผู้จัดการบอร์ดก่อน',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'เทียบเท่าสิทธิ์ปกติแต่สามารถสร้างแบบสำรวจได้',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'สามารถอ่านบอร์ด ได้แต่ไม่สามารถสร้างกระทู้หรือตอบโพสได้',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'สามารถใช้ features รวมทั้ง ไฟล์แนบและลบกระทู้ตนเอง แต่ไม่สามารถล็อกกระทู้ตัวเองได้ และสามารถสร้างแบบสำรวจ',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'สามารถใช้ moderating features ทั้งหมด รวมทั้งการแบน',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'สามารถใช้ Moderation Queue เพื่อตรวจสอบและแก้ไขโพสเท่านั้น',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'สามารถใช้สิทธิ์พื้นฐานของกระทู้เท่านั้น ไม่สามารถ ส่งการเตือนหรือใช้ moderation queue',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'สามารถใช้เครื่องมือ moderating ส่วนใหญ่ได้ แต่ ไม่สามารถแบนผู้ใช้ หรือ เปลี่ยนผู้โพส',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'สามารถใช้ features ที่มีได้ทั้งหมด สำหรับผู้ใช้ รวมทั้งการเปลี่ยนชื่อผู้ใช้หรือละเลย flood limit<br /> ไม่แนะนำ',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'สามารถใช้บาง feature ของ ผู้ใช้ ไม่อนุญาตให้ใช้ไฟล์แนบ e-mails หรือ instant messages',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'มีการใช้ feature ที่จำกัดและอนุญาตให้ใช้ ภาพประจำตัว',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'มีการใช้ feature ที่จำกัดและไม่อนุญาตให้ใช้ ข้อความส่วนตัว',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'สามารถใช้ features ส่วนใหญ่แต่ไม่ทั้งหมด เช่น ไม่สามารถเปลี่ยนชื่อผู้ใช้หรือละเลย flood limit',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'คุณสามารถกรอกคำอธิบายสั้นๆ ว่าบทบาทนี้ทำอะไรบ้างและมีไว้เพื่ออะไร ข้อความที่คุณกรอกจะแสดงในหน้าจอการอนุญาตด้วย',
	'ROLE_DESCRIPTION_LONG'			=> 'คำอธิบายบทบาทยาวเกินไป จำกัดอยู่ที่ 4000 ตัวอักษร',
	'ROLE_DETAILS'					=> 'รายละเอียดบทบาท',
	'ROLE_EDIT_SUCCESS'				=> 'แก้ไขบทบาทสำเร็จ ',
	'ROLE_NAME'						=> 'ชื่อบทบาท',
	'ROLE_NAME_ALREADY_EXIST'		=> 'ชื่อบทบาท <strong>%s</strong> มีอยู่แล้ว',
	'ROLE_NOT_ASSIGNED'				=> 'บทบาทยังไม่ถูกกำหนด',

	'SELECTED_FORUM_NOT_EXIST'		=> 'บอร์ดที่เลือกไม่มีอยู่จริง',
	'SELECTED_GROUP_NOT_EXIST'		=> 'group(s)ที่เลือกไม่มีอยู่จริง',
	'SELECTED_USER_NOT_EXIST'		=> 'user(s)ที่เลือกไม่มีอยู่จริง',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'บอร์ดที่คุณเลือกที่นี่จะรวมเอาบอร์ดย่อยทั้งหมดเข้าไปในการเลือกนี้ด้วย',
	'SELECT_ROLE'					=> 'เลือก บทบาท…',
	'SELECT_TYPE'					=> 'เลือก ประเภท',
	'SET_PERMISSIONS'				=> 'ตั้งค่าการอนุญาต',
	'SET_ROLE_PERMISSIONS'			=> 'ตั้งค่าการอนุญาตบทบาท',
	'SET_USERS_PERMISSIONS'			=> 'ตั้งค่าการอนุญาตผู้ใช้',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'ตั้งค่าการอนุญาตผู้ใช้บอร์ด',
	
	'TRACE_DEFAULT'					=> 'By default every permission is <samp>NO</samp> (unset). So the permission can be overwritten by other settings.',
	'TRACE_FOR'						=> 'Trace for',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'การอนุญาตของกลุ่มนี้ถูกตั้งค่าเป็น <samp>NEVER</samp> ',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'การอนุญาตของกลุ่มสำหรับบอร์ดนี้ถูกตั้งค่าเป็น <samp>NEVER</samp>',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'การอนุญาตของกลุ่มนี้ถูกตั้งค่าเป็น <samp>NEVER</samp> ซึ่งกลายเป็นค่ารวมใหม่ เพราะว่ามันยังไม่เคยถูกตั้งค่ามาก่อน (ตั้งค่าเป็น <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'การอนุญาตของกลุ่มนี้ถูกตั้งค่าเป็น <samp>NEVER</samp> ซึ่งกลายเป็นค่ารวมใหม่ เพราะว่ามันยังไม่เคยถูกตั้งค่ามาก่อน (ตั้งค่าเป็น <samp>NO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'การอนุญาตของกลุ่มนี้ถูกตั้งค่าเป็น <samp>NEVER</samp> ซึ่งทับค่า <samp>YES</samp> ทั้งหมดให้เป็น <samp>NEVER</samp> สำหรับผู้ใช้นี้',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'การอนุญาตของกลุ่มสำหรับบอร์ดนี้ถูกตั้งค่าเป็น <samp>NEVER</samp> ซึ่งทับค่า <samp>YES</samp> ทั้งหมดให้เป็น <samp>NEVER</samp> สำหรับผู้ใช้นี้',
	'TRACE_GROUP_NO'				=> 'การอนุญาตเป็น <samp>NO</samp> สำหรับกลุ่มนี้ค่าเก่าจะถูกเก็บไว้',
	'TRACE_GROUP_NO_LOCAL'			=> 'การอนุญาตเป็น <samp>NO</samp> สำหรับกลุ่มนี้ในบอร์ดค่าเก่าจะถูกเก็บไว้',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'การอนุญาตของกลุ่มนี้ถูกตั้งค่าเป็น <samp>YES</samp> แต่ค่าทั้งหมดที่เป็น <samp>NEVER</samp> ไม่สามารถทับได้',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'การอนุญาตของกลุ่มสำหรับบอร์ด นี้ถูกตั้งค่าเป็น <samp>YES</samp> แต่ค่าทั้งหมดที่เป็น <samp>NEVER</samp> ไม่สามารถทับได้',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'การอนุญาตของกลุ่มนี้ถูกตั้งค่าเป็น <samp>YES</samp> ซึ่งกลายเป็นค่ารวมใหม่ เพราะว่ามันยังไม่เคยถูกตั้งค่ามาก่อน (ตั้งค่าเป็น <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'การอนุญาตของกลุ่มสำหรับบอร์ด นี้ถูกตั้งค่าเป็น <samp>YES</samp> ซึ่งกลายเป็นค่ารวมใหม่ เพราะว่ามันยังไม่เคยถูกตั้งค่ามาก่อน (ตั้งค่าเป็น <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'การอนุญาตของกลุ่มนี้ถูกตั้งค่าเป็น <samp>YES</samp>และ การอนุญาตทั้งหมดเป็น <samp>YES</samp> ดังนั้นค่าทั้งหมดจึงถูกเก็บไว้',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'การอนุญาตของกลุ่มสำหรับบอร์ด นี้ถูกตั้งค่าเป็น <samp>YES</samp>และการอนุญาตทั้งหมดเป็น<samp>YES</samp>ดังนั้นค่าทั้งหมดจึงถูกเก็บไว้',
	'TRACE_PERMISSION'				=> 'Trace permission - %s',
	'TRACE_RESULT'					=> 'Trace result',
	'TRACE_SETTING'					=> 'Trace setting',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'The forum independent user permission evaluates to <samp>YES</samp> but the total permission is already set to <samp>YES</samp>, so the total result is kept. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'The forum independent user permission evaluates to <samp>YES</samp> which overwrites the current local result <samp>NEVER</samp>. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'The forum independent user permission evaluates to <samp>NEVER</samp> which doesn’t influence the local permission. %sTrace global permission%s',

	'TRACE_USER_FOUNDER'					=> 'ผู้ใช้เป็นประเภทผู้ก่อตั้ง, ดังนั้นสิทธิ์ผู้ดูแลระบบจึงถูกตั้งค่าเป็น <samp>YES</samp> โดยค่าเริ่มต้น',
	'TRACE_USER_KEPT'						=> 'การอนุญาตผู้ใช้เป็น <samp>NO</samp> ค่าเก่าจะถูกเก็บไว้.',
	'TRACE_USER_KEPT_LOCAL'					=> 'การอนุญาตผู้ใช้ สำหรับบอร์ดนี้เป็น <samp>NO</samp> ค่าเก่าจะถูกเก็บไว้.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'การอนุญาตผู้ใช้เป็น <samp>NEVER</samp>และค่าทั้งหมดถูกตั้งค่าเป็น <samp>NEVER</samp>ดังนั้นไม่มีการเปลี่ยนแปลง',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'การอนุญาตผู้ใช้ สำหรับบอร์ด นี้เป็น <samp>NEVER</samp>และค่าทั้งหมดถูกตั้งค่าเป็น <samp>NEVER</samp>ดังนั้นไม่มีการเปลี่ยนแปลง',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'การอนุญาตผู้ใช้เป็น <samp>NEVER</samp> ซึ่งกลายเป็นค่าทั้งหมดเพราะว่าถูกตั้งค่าเป็น NO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'การอนุญาตผู้ใช้ สำหรับบอร์ดนี้เป็น <samp>NEVER</samp> ซึ่งกลายเป็นค่าทั้งหมดเพราะว่าถูกตั้งค่าเป็น NO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'การอนุญาตผู้ใช้เป็น <samp>NEVER</samp>และทับค่าเก่าที่เป็น <samp>YES</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'การอนุญาตผู้ใช้ สำหรับบอร์ดนี้เป็น <samp>NEVER</samp>และทับค่าเก่าที่เป็น <samp>YES</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'การอนุญาตผู้ใช้เป็น <samp>NO</samp>และค่าทั้งหมดเคยตั้งค่าเป็น NO ดังนั้นค่าเริ่มต้นคือ <samp>NEVER</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'การอนุญาตผู้ใช้ สำหรับบอร์ดนี้เป็น <samp>NO</samp>และค่าทั้งหมดเคยตั้งค่าเป็น NO ดังนั้นค่าเริ่มต้นคือ <samp>NEVER</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'การอนุญาตผู้ใช้เป็น <samp>YES</samp> แต่ค่าทั้งหมดเป็น <samp>NEVER</samp> ไม่สามารถเปลี่ยนได้',
		'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'การอนุญาตผู้ใช้ สำหรับบอร์ดนี้เป็น <samp>YES</samp> แต่ค่าทั้งหมดเป็น <samp>NEVER</samp> ไม่สามารถเปลี่ยนได้',
	'TRACE_USER_YES_TOTAL_NO'				=> 'การอนุญาตผู้ใช้เป็น <samp>YES</samp> ซึ่งกลายเป็นค่าทั้งหมดเพราะว่าถูกตั้งค่าเป็น <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'การอนุญาตผู้ใช้ สำหรับบอร์ดนี้เป็น set to <samp>YES</samp> ซึ่งกลายเป็นค่าทั้งหมดเพราะว่าถูกตั้งค่าเป็น <samp>NO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'การอนุญาตผู้ใช้เป็น  <samp>YES</samp> และค่าทั้งหมดถูกตั้งค่าเป็น <samp>YES</samp>, ดังนั้นไม่มีการเปลี่ยนแปลง',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'The user’s permission for this forum is set to <samp>YES</samp> and the total value is set to <samp>YES</samp>, so nothing is changed.',
	'TRACE_WHO'								=> 'Who',
	'TRACE_TOTAL'							=> 'รวม',

	'USERS_NOT_ASSIGNED'			=> 'ไม่มีผู้ใช้กำหนดบทบาทนี้',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'สมาชิกตามนี้จะถูกกำหนด ให้อยู่ในกลุ่ม',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'is a member of the following user defined groups',

	'VIEW_ASSIGNED_ITEMS'	=> 'เปิดดูรายการนี้',
	'VIEW_LOCAL_PERMS'		=> 'การอนุญาต Local ',
	'VIEW_GLOBAL_PERMS'		=> 'การอนุญาต Global',
	'VIEW_PERMISSIONS'		=> 'ดูการอนุญาต',

	'WRONG_PERMISSION_TYPE'				=> 'เลือกการอนุญาตผิดประเภท',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'การตั้งค่าการอนุญาตอยู่ในรูปแบบที่ผิด, phpBB ไม่สามารถประมวลผลได้',
));

?>