<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2024 Bitrix
 */

use Bitrix\Main;
use Bitrix\Main\Session\Legacy\HealerEarlySessionStart;
use Bitrix\Main\DI\ServiceLocator;

require_once __DIR__ . "/start.php";

$application = Main\HttpApplication::getInstance();
$application->initializeExtendedKernel([
	"get" => $_GET,
	"post" => $_POST,
	"files" => $_FILES,
	"cookie" => $_COOKIE,
	"server" => $_SERVER,
	"env" => $_ENV
]);

if (class_exists('\Dev\Main\Migrator\ModuleUpdater'))
{
	\Dev\Main\Migrator\ModuleUpdater::checkUpdates('main', __DIR__);
}

if (!Main\ModuleManager::isModuleInstalled('bitrix24'))
{
	// wwall rules
	(new Main\Security\W\WWall)->handle();

	$application->addBackgroundJob([
		Main\Security\W\WWall::class, 'refreshRules'
	]);

	// vendor security notifications
	$application->addBackgroundJob([
		Main\Security\Notifications\VendorNotifier::class, 'refreshNotifications'
	]);
}

if (defined('SITE_ID'))
{
	define('LANG', SITE_ID);
}

$context = $application->getContext();
$context->initializeCulture(defined('LANG') ? LANG : null, defined('LANGUAGE_ID') ? LANGUAGE_ID : null);

// needs to be after culture initialization
$application->start();

// Register main's services
ServiceLocator::getInstance()->registerByModuleSettings('main');

// constants for compatibility
$culture = $context->getCulture();
define('SITE_CHARSET', $culture->getCharset());
define('FORMAT_DATE', $culture->getFormatDate());
define('FORMAT_DATETIME', $culture->getFormatDatetime());
define('LANG_CHARSET', SITE_CHARSET);

$site = $context->getSiteObject();
if (!defined('LANG'))
{
	define('LANG', ($site ? $site->getLid() : $context->getLanguage()));
}
define('SITE_DIR', ($site ? $site->getDir() : ''));
if (!defined('SITE_SERVER_NAME'))
{
	define('SITE_SERVER_NAME', ($site ? $site->getServerName() : ''));
}
define('LANG_DIR', SITE_DIR);

if (!defined('LANGUAGE_ID'))
{
	define('LANGUAGE_ID', $context->getLanguage());
}
define('LANG_ADMIN_LID', LANGUAGE_ID);

if (!defined('SITE_ID'))
{
	define('SITE_ID', LANG);
}

/** @global $lang */
$lang = $context->getLanguage();

//define global application object
$GLOBALS["APPLICATION"] = new CMain;

if (!defined("POST_FORM_ACTION_URI"))
{
	define("POST_FORM_ACTION_URI", htmlspecialcharsbx(GetRequestUri()));
}

$GLOBALS["MESS"] = [];
$GLOBALS["ALL_LANG_FILES"] = [];
IncludeModuleLangFile(__DIR__."/tools.php");
IncludeModuleLangFile(__FILE__);

error_reporting(COption::GetOptionInt("main", "error_reporting", E_COMPILE_ERROR | E_ERROR | E_CORE_ERROR | E_PARSE) & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING & ~E_NOTICE);

if (!defined("BX_COMP_MANAGED_CACHE") && COption::GetOptionString("main", "component_managed_cache_on", "Y") != "N")
{
	define("BX_COMP_MANAGED_CACHE", true);
}

// global functions
require_once __DIR__ . "/filter_tools.php";

/*ZDUyZmZMzRjYmYyYzBjYjIwODA0ODY2ZTE2OTc2NDRlNWNjZTQ=*/$GLOBALS['_____410497204']= array(base64_decode('R'.'2V0TW9kdWxlR'.'XZlbnRz'),base64_decode(''.'R'.'XhlY3'.'V0'.'Z'.'U1vZHVsZUV2Z'.'W50'.'RXg'.'='),base64_decode('V3JpdGVG'.'aW'.'5hbE1lc3NhZ2'.'U='));$GLOBALS['____1816703457']= array(base64_decode('ZGVmaW'.'5l'),base64_decode('Y'.'mFzZTY0'.'X2'.'R'.'l'.'Y29kZ'.'Q=='),base64_decode('dW5zZXJpYWxpemU='),base64_decode('aXNfYXJyYXk='),base64_decode('a'.'W'.'5fYXJy'.'YX'.'k='),base64_decode('c2V'.'yaWFsaXpl'),base64_decode('YmFzZ'.'TY0X2Vu'.'Y29kZQ=='),base64_decode('bWt0aW1l'),base64_decode('ZG'.'F0Z'.'Q='.'='),base64_decode('ZGF'.'0'.'Z'.'Q=='),base64_decode('c3RybGVu'),base64_decode('b'.'W'.'t0aW1l'),base64_decode('ZGF0ZQ=='),base64_decode('Z'.'GF'.'0Z'.'Q'.'=='),base64_decode('b'.'W'.'V'.'0aG9k'.'X2'.'V4aXN0'.'cw'.'=='),base64_decode('Y2FsbF91c2VyX2'.'Z1bmNf'.'Y'.'XJy'.'YX'.'k='),base64_decode('c3RybGVu'),base64_decode(''.'c2VyaWFsa'.'Xpl'),base64_decode('Ym'.'F'.'z'.'ZTY0X2'.'V'.'uY29k'.'Z'.'Q=='),base64_decode('c3RybGVu'),base64_decode('aXNfYXJyYXk'.'='),base64_decode('c2VyaW'.'FsaXpl'),base64_decode('Ym'.'FzZTY0X2V'.'uY29kZQ='.'='),base64_decode('c'.'2VyaWF'.'saX'.'pl'),base64_decode('Y'.'mFzZTY0X2VuY'.'29kZQ'.'=='),base64_decode('aXN'.'fYX'.'JyYXk='),base64_decode('aX'.'NfYXJyYXk='),base64_decode('aW5'.'fYXJyYXk='),base64_decode(''.'aW5fYX'.'JyYXk'.'='),base64_decode(''.'bWt0aW1l'),base64_decode('ZGF0ZQ'.'='.'='),base64_decode('ZG'.'F0ZQ'.'=='),base64_decode('ZGF0ZQ'.'=='),base64_decode('bWt'.'0aW1l'),base64_decode('ZGF'.'0'.'ZQ='.'='),base64_decode('ZGF'.'0ZQ=='),base64_decode('aW5fYXJ'.'yYXk='),base64_decode('c2VyaWF'.'saXpl'),base64_decode(''.'Ym'.'FzZ'.'T'.'Y0X2VuY29'.'k'.'ZQ=='),base64_decode('aW50'.'dmFs'),base64_decode('dG'.'ltZQ=='),base64_decode('ZmlsZV9leGl'.'zdHM='),base64_decode('c3'.'RyX'.'3'.'JlcGx'.'hY2U='),base64_decode('Y'.'2'.'xhc3'.'NfZXhpc3Rz'),base64_decode(''.'ZGVm'.'aW5l'),base64_decode('c3'.'RycmV2'),base64_decode('c3RydG91c'.'HBlcg=='),base64_decode('c3'.'By'.'a'.'W50Zg='.'='),base64_decode('c3'.'ByaW5'.'0Zg=='),base64_decode('c3'.'Vic3R'.'y'),base64_decode('c3'.'RycmV2'),base64_decode('Ym'.'Fz'.'ZT'.'Y'.'0X2RlY'.'29kZQ'.'=='),base64_decode('c3V'.'ic'.'3Ry'),base64_decode('c3'.'Ryb'.'GVu'),base64_decode('c3'.'RybGVu'),base64_decode('Y2hy'),base64_decode('b3Jk'),base64_decode('b3Jk'),base64_decode('bW'.'t'.'0'.'aW1l'),base64_decode('aW50dm'.'Fs'),base64_decode('aW50d'.'m'.'Fs'),base64_decode('a'.'W'.'5'.'0dmF'.'s'),base64_decode('a3Nvc'.'nQ'.'='),base64_decode('c3Vic3'.'Ry'),base64_decode('aW'.'1wbG9'.'kZQ=='),base64_decode('ZGV'.'maW5'.'lZA=='),base64_decode(''.'YmFzZTY0X2RlY29kZQ=='),base64_decode('Y29uc'.'3RhbnQ='),base64_decode(''.'c3RycmV2'),base64_decode(''.'c'.'3ByaW50'.'Zg=='),base64_decode('c3'.'RybGVu'),base64_decode('c'.'3RybGV'.'u'),base64_decode('Y2'.'hy'),base64_decode('b3J'.'k'),base64_decode('b3Jk'),base64_decode(''.'b'.'Wt'.'0aW1l'),base64_decode('aW50'.'d'.'mFs'),base64_decode('a'.'W5'.'0d'.'m'.'Fs'),base64_decode('aW50dmFs'),base64_decode('c3Vi'.'c3Ry'),base64_decode('c3Vi'.'c3Ry'),base64_decode('ZGVmaW5lZ'.'A=='),base64_decode('c3'.'RycmV2'),base64_decode('c'.'3Ryd'.'G91c'.'HBlcg='.'='),base64_decode('dGl'.'tZQ=='),base64_decode('bWt'.'0aW1l'),base64_decode(''.'bW'.'t0aW1'.'l'),base64_decode('ZGF0ZQ=='),base64_decode('ZGF0ZQ='.'='),base64_decode(''.'Z'.'GVmaW'.'5'.'l'),base64_decode('ZGVmaW5l'));if(!function_exists(__NAMESPACE__.'\\___2097192994')){function ___2097192994($_220403803){static $_911070584= false; if($_911070584 == false) $_911070584=array('S'.'U5U'.'U'.'kFORVRfRU'.'RJ'.'V'.'ElP'.'Tg==','WQ==','bWFpbg='.'=','fmNwZl9tYXBfdmFsd'.'WU'.'=','','',''.'YWxsb3dl'.'ZF9jbG'.'F'.'z'.'c'.'2Vz',''.'ZQ==','Zg='.'=','ZQ==',''.'Rg='.'=','WA'.'==','Zg==','bWFpbg==','fmN'.'wZl9tY'.'XBfdmFsdWU=','UG9ydGFs',''.'Rg'.'==','Z'.'Q==','Z'.'Q==','W'.'A==','Rg==','RA'.'==','R'.'A==','b'.'Q='.'=','Z'.'A==','WQ==','Zg'.'='.'=','Z'.'g==',''.'Zg='.'=',''.'Zg==',''.'UG9'.'yd'.'GFs','Rg==','ZQ==','ZQ==',''.'WA==','Rg==','RA==','RA'.'==','b'.'Q==','Z'.'A='.'=',''.'WQ'.'==','b'.'WFpbg==','T'.'24=',''.'U2V0dGluZ3'.'ND'.'aGFu'.'Z2U'.'=','Zg'.'==','Zg'.'==','Z'.'g==',''.'Z'.'g==','bWFpbg'.'==','f'.'mNwZl9tYXBfdmFsd'.'WU=','ZQ'.'==','ZQ'.'==','RA'.'==','ZQ='.'=','ZQ==','Zg'.'==','Zg==','Zg==','Z'.'Q==',''.'bWF'.'pbg==','fmN'.'wZ'.'l9tYXBfd'.'mFsd'.'WU=','ZQ==','Zg'.'='.'=','Zg='.'=','Zg='.'=','Zg='.'=','bWFpbg==',''.'fmN'.'wZl9tYXBfdmFsdWU=',''.'ZQ==','Zg==',''.'UG9y'.'dGFs','UG9ydGFs','ZQ='.'=',''.'ZQ==','U'.'G9'.'ydGF'.'s','Rg'.'==','WA='.'=','Rg='.'=','RA'.'==','ZQ==','Z'.'Q'.'='.'=','RA'.'==',''.'bQ==','ZA='.'=','WQ==',''.'ZQ==','WA==','ZQ'.'==','Rg='.'=','ZQ==',''.'R'.'A==','Zg==','Z'.'Q==','RA==','Z'.'Q'.'='.'=','bQ==','ZA==','W'.'Q==','Zg='.'=','Zg==','Zg'.'==','Z'.'g==','Zg'.'==','Zg==','Zg'.'==','Zg'.'==','bWFpbg='.'=','fmNw'.'Zl9tY'.'XBfdmFsdWU=','ZQ==','ZQ'.'='.'=','UG9ydGFs','Rg'.'==','WA'.'==','VFl'.'QRQ==','REFURQ'.'==','RkVBVFVSRVM=',''.'RVhQSV'.'JFRA==','VFlQRQ='.'=','RA==','VFJ'.'Z'.'X'.'0RBWVNf'.'Q09VTlQ=','REFUR'.'Q==',''.'VFJZX0RB'.'WV'.'NfQ'.'09VTlQ'.'=','RVhQSVJFR'.'A==','RkV'.'BVF'.'VSRVM=','Zg==','Z'.'g='.'=',''.'RE9D'.'VU1FT'.'l'.'RfU'.'k9PVA'.'==',''.'L'.'2J'.'pdHJpe'.'C9tb2R1bGV'.'zLw'.'==','L2l'.'uc3Rh'.'bGwv'.'aW5kZX'.'gucGhw','Lg==','X'.'w==','c2VhcmNo','Tg==','','','QUNUSVZF','WQ==','c29'.'jaW'.'Fs'.'b'.'m'.'V0d29yaw==','Y'.'Wxs'.'b3'.'d'.'fZnJpZWxk'.'cw'.'==','WQ==',''.'SUQ=','c'.'29jaW'.'Fs'.'bmV0d2'.'9yaw'.'='.'=',''.'YWxsb3df'.'Z'.'nJpZWxkc'.'w==','SU'.'Q'.'=','c29j'.'aWFsbmV0d29yaw==',''.'Y'.'Wxsb3d'.'fZnJpZW'.'xk'.'cw='.'=','Tg='.'=','','','QU'.'NU'.'SV'.'ZF','WQ='.'=','c29j'.'a'.'WFsb'.'mV0d29ya'.'w='.'=','Y'.'Wxsb3'.'dfb'.'Wljcm9ibG9n'.'X3'.'VzZXI'.'=','WQ==','SUQ'.'=','c2'.'9'.'jaWFsbmV0'.'d29yaw==','YWxsb3'.'dfbW'.'ljcm'.'9'.'ib'.'G'.'9nX3VzZXI'.'=','S'.'U'.'Q=','c29'.'jaW'.'Fs'.'bmV0'.'d'.'2'.'9yaw='.'=','YWx'.'sb3d'.'fbWljc'.'m9'.'ibG9nX3Vz'.'Z'.'XI=',''.'c29j'.'aW'.'FsbmV0'.'d'.'2'.'9'.'y'.'a'.'w==','Y'.'Wxsb3d'.'fbWl'.'jcm9'.'ibG9nX'.'2dy'.'b3Vw','WQ==','SUQ'.'=','c29jaWFs'.'bmV0'.'d29ya'.'w==','YWxs'.'b3df'.'bW'.'l'.'jc'.'m9ibG9nX2dyb3Vw','SU'.'Q=','c29jaW'.'Fs'.'b'.'m'.'V0d2'.'9yaw'.'='.'=','YW'.'xsb'.'3'.'dfbWl'.'jcm9'.'i'.'b'.'G'.'9nX2dyb'.'3Vw','Tg==','','','QU'.'N'.'USVZF','WQ'.'==','c29j'.'aWF'.'s'.'b'.'mV0'.'d29y'.'aw='.'=','YWxsb3df'.'ZmlsZXNfdX'.'Nlcg='.'=','W'.'Q==','S'.'UQ'.'=',''.'c2'.'9jaW'.'F'.'sbmV0d'.'29y'.'aw==','YWxsb3'.'d'.'f'.'Zml'.'s'.'ZXNfdXN'.'lc'.'g==','S'.'UQ=',''.'c'.'29j'.'aWFsb'.'mV0d29y'.'a'.'w==','YWxsb3dfZmlsZ'.'XNfd'.'XN'.'lc'.'g==','Tg'.'='.'=','','','QU'.'NUSVZF',''.'WQ'.'==','c29jaWFsbm'.'V0'.'d'.'29yaw='.'=','YWx'.'sb'.'3dfYmxvZ'.'191c2Vy','WQ==',''.'SU'.'Q=','c2'.'9ja'.'W'.'Fsbm'.'V0'.'d2'.'9yaw==',''.'Y'.'Wxsb3dfY'.'mxvZ1'.'91c'.'2'.'Vy',''.'SUQ=','c29j'.'aW'.'Fsb'.'mV0d29yaw==','YWxsb3dfY'.'mx'.'v'.'Z191c2Vy',''.'Tg==','','','QU'.'N'.'U'.'SV'.'ZF','WQ==','c29jaWF'.'sbmV'.'0'.'d'.'29yaw==','YWxs'.'b3d'.'fc'.'Ghv'.'dG'.'9fdXNlcg==','WQ='.'=','SUQ=',''.'c'.'29'.'jaWFsbmV0d2'.'9yaw==','YWx'.'sb'.'3dfcGh'.'vd'.'G9fdXNl'.'cg==','SU'.'Q=','c29jaWFsbmV0d2'.'9yaw==','YWxsb'.'3'.'d'.'fc'.'G'.'h'.'vdG9'.'fdX'.'Nlcg==','Tg==','','',''.'QU'.'NUSVZF','WQ'.'==','c29jaWF'.'s'.'bmV0d2'.'9yaw'.'==','Y'.'Wxsb'.'3df'.'Zm9ydW'.'1'.'fdXNlc'.'g='.'=',''.'WQ==',''.'SUQ=','c2'.'9jaWFsbm'.'V0'.'d'.'29y'.'aw='.'=',''.'Y'.'Wxs'.'b3dfZm'.'9ydW1fdXN'.'lcg==','S'.'UQ=','c29j'.'aWFsbmV'.'0'.'d29yaw==',''.'YWxsb'.'3dfZm9yd'.'W1fdXNlcg==',''.'Tg==','','','QUN'.'U'.'SVZ'.'F','WQ'.'='.'=','c29'.'jaW'.'Fs'.'bmV0d29'.'yaw==',''.'YWxsb3dfdGF'.'za3NfdXN'.'lcg='.'=',''.'WQ==',''.'SUQ=','c29jaWF'.'sbmV0d2'.'9ya'.'w==','YWx'.'s'.'b3dfdGF'.'za'.'3NfdXNlc'.'g==','SUQ=','c29j'.'aWFs'.'bmV0d'.'29yaw='.'=','YWx'.'sb3dfdGFza3NfdX'.'Nl'.'c'.'g='.'=','c29jaWF'.'sbmV0d29yaw'.'='.'=',''.'YWxsb'.'3dfdGFza3'.'NfZ3JvdXA=',''.'W'.'Q==','S'.'UQ=','c'.'29jaWF'.'sbmV0d29yaw==','YWx'.'sb'.'3dfdGFza'.'3NfZ3JvdXA=',''.'S'.'U'.'Q=','c29j'.'aWFs'.'bmV0d'.'29ya'.'w'.'==','YWxsb3dfdGFza3NfZ'.'3Jv'.'d'.'XA=','d'.'GF'.'za3M=','Tg==','','','QUNU'.'SV'.'ZF','WQ'.'==','c29j'.'aWFsbmV0d29y'.'aw'.'==','YW'.'xsb3dfY2Fs'.'Z'.'W5kYXJfdX'.'Nlcg==','W'.'Q='.'=','SUQ=','c29'.'jaWFsbmV0d29y'.'aw==','YWxsb3dfY2FsZW5kYX'.'JfdXNl'.'cg==',''.'S'.'UQ'.'=','c2'.'9j'.'aWFsbm'.'V0d29yaw==','YWxs'.'b3'.'df'.'Y2Fs'.'ZW'.'5kY'.'XJfdXNlcg'.'==','c29'.'jaWFs'.'bmV0d29yaw==','YWxsb'.'3dfY2FsZW5kYXJ'.'fZ'.'3'.'Jvd'.'XA'.'=','WQ==','SUQ=','c2'.'9j'.'a'.'WFsbmV'.'0d2'.'9ya'.'w==','YWxsb3dfY2'.'FsZW5'.'kYX'.'J'.'fZ3JvdXA=','SUQ=','c2'.'9'.'j'.'a'.'WFsbmV0d29yaw==','YW'.'xsb3dfY2Fs'.'ZW5kYXJf'.'Z3J'.'vdXA=','QUNUSVZF','WQ==','Tg==','ZX'.'h0cm'.'F'.'uZX'.'Q'.'=',''.'aWJsb2Nr','T2'.'5BZnRlcklCbG9ja'.'0VsZW1lbnRVc'.'GRhdGU'.'=',''.'aW50'.'cmF'.'uZX'.'Q'.'=',''.'Q'.'0l'.'udHJh'.'bmV0R'.'XZlbnR'.'IYW5kbGVy'.'c'.'w==',''.'U1B'.'SZW'.'dpc3Rl'.'clVwZGF'.'0ZWRJd'.'GVt','Q0ludHJ'.'hbmV0U'.'2hhcm'.'Vwb2lud'.'D'.'o'.'6Q'.'WdlbnRM'.'aXN0'.'cy'.'gpOw'.'==','aW50cmFuZXQ=','Tg='.'=','Q'.'0l'.'udHJhbmV0U2hhcmVwb'.'2lu'.'d'.'Do6Q'.'Wdl'.'bnRRd'.'WV1'.'ZSg'.'pOw==','a'.'W50cmF'.'uZX'.'Q'.'=',''.'T'.'g==','Q0lud'.'H'.'Jhbm'.'V'.'0U2hhcmVw'.'b2lu'.'dDo6QWdlbn'.'RV'.'c'.'GRhd'.'GUo'.'KTs=','aW5'.'0c'.'mFuZX'.'Q=','Tg==','a'.'WJsb2Nr','T25BZnR'.'l'.'c'.'klCbG'.'9'.'ja0VsZW1lb'.'nRBZG'.'Q'.'=','aW'.'50cmFuZ'.'XQ=','Q0lud'.'HJ'.'hbmV0RX'.'Zlb'.'nR'.'IYW'.'5kbGVycw==','U'.'1BSZW'.'dpc3R'.'lclVwZG'.'F'.'0ZWRJdG'.'Vt','a'.'WJsb'.'2Nr','T'.'25BZnRlcklC'.'bG9'.'ja0VsZW1lbnRVc'.'GR'.'hdGU=','a'.'W5'.'0cm'.'F'.'uZXQ=','Q0lud'.'HJhbmV0'.'RXZlbnRI'.'YW5kbGV'.'y'.'cw==',''.'U1'.'BS'.'ZW'.'d'.'pc3R'.'lcl'.'V'.'wZ'.'GF0Z'.'WR'.'Jd'.'GVt','Q'.'0ludH'.'JhbmV0U2hhcmVwb2'.'lu'.'dDo6QWdl'.'bnRM'.'aXN'.'0cy'.'gpOw==','aW50cmFuZXQ=','Q0ludHJhbm'.'V0U2'.'hhcmVwb'.'2'.'l'.'udDo6QWdlb'.'nRRd'.'WV1ZSgpOw==',''.'aW50cmF'.'uZXQ=','Q'.'0l'.'udHJhbmV0'.'U2hhc'.'mVwb2ludDo6QW'.'dlbnRVcGRhdG'.'UoKTs=',''.'aW50'.'cmFuZ'.'XQ'.'=','Y3'.'Jt','bW'.'Fpbg==','T25CZWZv'.'c'.'mVQcm9sb2c=','bWFpbg==','Q1'.'dpemFyZFN'.'vbF'.'Bh'.'b'.'mVsSW50cm'.'FuZXQ'.'=','U2hvd1B'.'hbmVs','L21vZ'.'HVsZXMvaW50c'.'mFuZXQ'.'vcGFu'.'ZWx'.'fYn'.'V0'.'d'.'G'.'9u'.'L'.'nBo'.'cA==',''.'ZXhw'.'a'.'XJlX21lc'.'3My',''.'bm9p'.'dG'.'lk'.'ZV9'.'0aW1'.'pbGVtaXQ=',''.'WQ==','ZHJpbl9w'.'Z'.'XJnb2tj','JTA'.'xMH'.'MK','RUV'.'Y'.'UElS','bWFpbg'.'='.'=',''.'JXM'.'lcw==','YWRt','aG'.'Ryb3dzc2E=','YWRtaW4=','bW9k'.'dWxlcw==','ZGVmaW'.'5lLnBo'.'cA==','bWFpb'.'g==','Yml'.'0cml4','UkhTSVRFRVg=','SDR1N'.'jd'.'maHc'.'4'.'N'.'1ZoeXR'.'vcw==','','dGh'.'S','N0h5cjEyS'.'Hd5'.'M'.'HJG'.'cg'.'='.'=','V'.'F9TVEV'.'BTA'.'==','aHR0cHM'.'6L'.'y'.'9iaX'.'R'.'ya'.'X'.'hz'.'b2Z0LmN'.'vb'.'S9iaX'.'RyaXgvYn'.'MucG'.'h'.'w','T0xE','UElSRURBV'.'EVT',''.'R'.'E9DVU1FTlR'.'fUk'.'9PVA==',''.'L'.'w='.'=','Lw==','V'.'EVNUE'.'9SQVJZX0NBQ0hF','V'.'E'.'VNUE9SQVJ'.'ZX0NBQ0hF','','T0'.'5'.'fT0Q=','J'.'XM'.'lcw==','X0'.'9V'.'Ul9CV'.'VM=',''.'U0lU','RUR'.'BVEVNQVBFUg==','bm9pd'.'G'.'lkZV90aW1pbGVt'.'aXQ=','bQ==',''.'ZA==','WQ='.'=','U0N'.'SSV'.'BU'.'X'.'0'.'5'.'BTUU=','L2JpdH'.'JpeC9'.'jb3Vwb25fYWN0aXZ'.'hdGlvbi5wa'.'HA=','U0NSSVBUX05BTUU=','L2Jp'.'d'.'H'.'Jpe'.'C9z'.'ZXJ2'.'aWNlc'.'y9t'.'YWluL2'.'FqYXgu'.'cGhw','L2Jpd'.'HJpeC9jb3'.'Vw'.'b2'.'5fYWN0aXZhdGlvbi'.'5'.'w'.'aHA=','U'.'2l0ZUV4'.'cGl'.'yZURh'.'d'.'G'.'U=');return base64_decode($_911070584[$_220403803]);}};$GLOBALS['____1816703457'][0](___2097192994(0), ___2097192994(1));class CBXFeatures{ private static $_480278710= 30; private static $_1456692036= array( "Portal" => array( "CompanyCalendar", "CompanyPhoto", "CompanyVideo", "CompanyCareer", "StaffChanges", "StaffAbsence", "CommonDocuments", "MeetingRoomBookingSystem", "Wiki", "Learning", "Vote", "WebLink", "Subscribe", "Friends", "PersonalFiles", "PersonalBlog", "PersonalPhoto", "PersonalForum", "Blog", "Forum", "Gallery", "Board", "MicroBlog", "WebMessenger",), "Communications" => array( "Tasks", "Calendar", "Workgroups", "Jabber", "VideoConference", "Extranet", "SMTP", "Requests", "DAV", "intranet_sharepoint", "timeman", "Idea", "Meeting", "EventList", "Salary", "XDImport",), "Enterprise" => array( "BizProc", "Lists", "Support", "Analytics", "crm", "Controller", "LdapUnlimitedUsers",), "Holding" => array( "Cluster", "MultiSites",),); private static $_1488861601= null; private static $_1573122339= null; private static function __195241406(){ if(self::$_1488861601 === null){ self::$_1488861601= array(); foreach(self::$_1456692036 as $_844552712 => $_456842808){ foreach($_456842808 as $_1206066015) self::$_1488861601[$_1206066015]= $_844552712;}} if(self::$_1573122339 === null){ self::$_1573122339= array(); $_760889863= COption::GetOptionString(___2097192994(2), ___2097192994(3), ___2097192994(4)); if($_760889863 != ___2097192994(5)){ $_760889863= $GLOBALS['____1816703457'][1]($_760889863); $_760889863= $GLOBALS['____1816703457'][2]($_760889863,[___2097192994(6) => false]); if($GLOBALS['____1816703457'][3]($_760889863)){ self::$_1573122339= $_760889863;}} if(empty(self::$_1573122339)){ self::$_1573122339= array(___2097192994(7) => array(), ___2097192994(8) => array());}}} public static function InitiateEditionsSettings($_207894507){ self::__195241406(); $_36606444= array(); foreach(self::$_1456692036 as $_844552712 => $_456842808){ $_1576343950= $GLOBALS['____1816703457'][4]($_844552712, $_207894507); self::$_1573122339[___2097192994(9)][$_844552712]=($_1576343950? array(___2097192994(10)): array(___2097192994(11))); foreach($_456842808 as $_1206066015){ self::$_1573122339[___2097192994(12)][$_1206066015]= $_1576343950; if(!$_1576343950) $_36606444[]= array($_1206066015, false);}} $_596747974= $GLOBALS['____1816703457'][5](self::$_1573122339); $_596747974= $GLOBALS['____1816703457'][6]($_596747974); COption::SetOptionString(___2097192994(13), ___2097192994(14), $_596747974); foreach($_36606444 as $_1795527435) self::__385856($_1795527435[(1144/2-572)], $_1795527435[round(0+0.2+0.2+0.2+0.2+0.2)]);} public static function IsFeatureEnabled($_1206066015){ if($_1206066015 == '') return true; self::__195241406(); if(!isset(self::$_1488861601[$_1206066015])) return true; if(self::$_1488861601[$_1206066015] == ___2097192994(15)) $_1819490765= array(___2097192994(16)); elseif(isset(self::$_1573122339[___2097192994(17)][self::$_1488861601[$_1206066015]])) $_1819490765= self::$_1573122339[___2097192994(18)][self::$_1488861601[$_1206066015]]; else $_1819490765= array(___2097192994(19)); if($_1819490765[min(150,0,50)] != ___2097192994(20) && $_1819490765[(1256/2-628)] != ___2097192994(21)){ return false;} elseif($_1819490765[(812-2*406)] == ___2097192994(22)){ if($_1819490765[round(0+1)]< $GLOBALS['____1816703457'][7](min(54,0,18),(1312/2-656), min(200,0,66.666666666667), Date(___2097192994(23)), $GLOBALS['____1816703457'][8](___2097192994(24))- self::$_480278710, $GLOBALS['____1816703457'][9](___2097192994(25)))){ if(!isset($_1819490765[round(0+0.4+0.4+0.4+0.4+0.4)]) ||!$_1819490765[round(0+1+1)]) self::__1586921354(self::$_1488861601[$_1206066015]); return false;}} return!isset(self::$_1573122339[___2097192994(26)][$_1206066015]) || self::$_1573122339[___2097192994(27)][$_1206066015];} public static function IsFeatureInstalled($_1206066015){ if($GLOBALS['____1816703457'][10]($_1206066015) <= 0) return true; self::__195241406(); return(isset(self::$_1573122339[___2097192994(28)][$_1206066015]) && self::$_1573122339[___2097192994(29)][$_1206066015]);} public static function IsFeatureEditable($_1206066015){ if($_1206066015 == '') return true; self::__195241406(); if(!isset(self::$_1488861601[$_1206066015])) return true; if(self::$_1488861601[$_1206066015] == ___2097192994(30)) $_1819490765= array(___2097192994(31)); elseif(isset(self::$_1573122339[___2097192994(32)][self::$_1488861601[$_1206066015]])) $_1819490765= self::$_1573122339[___2097192994(33)][self::$_1488861601[$_1206066015]]; else $_1819490765= array(___2097192994(34)); if($_1819490765[(185*2-370)] != ___2097192994(35) && $_1819490765[(1144/2-572)] != ___2097192994(36)){ return false;} elseif($_1819490765[(134*2-268)] == ___2097192994(37)){ if($_1819490765[round(0+0.2+0.2+0.2+0.2+0.2)]< $GLOBALS['____1816703457'][11]((964-2*482),(1468/2-734), min(218,0,72.666666666667), Date(___2097192994(38)), $GLOBALS['____1816703457'][12](___2097192994(39))- self::$_480278710, $GLOBALS['____1816703457'][13](___2097192994(40)))){ if(!isset($_1819490765[round(0+1+1)]) ||!$_1819490765[round(0+1+1)]) self::__1586921354(self::$_1488861601[$_1206066015]); return false;}} return true;} private static function __385856($_1206066015, $_783885258){ if($GLOBALS['____1816703457'][14]("CBXFeatures", "On".$_1206066015."SettingsChange")) $GLOBALS['____1816703457'][15](array("CBXFeatures", "On".$_1206066015."SettingsChange"), array($_1206066015, $_783885258)); $_1041518139= $GLOBALS['_____410497204'][0](___2097192994(41), ___2097192994(42).$_1206066015.___2097192994(43)); while($_1832051865= $_1041518139->Fetch()) $GLOBALS['_____410497204'][1]($_1832051865, array($_1206066015, $_783885258));} public static function SetFeatureEnabled($_1206066015, $_783885258= true, $_1015619516= true){ if($GLOBALS['____1816703457'][16]($_1206066015) <= 0) return; if(!self::IsFeatureEditable($_1206066015)) $_783885258= false; $_783885258= (bool)$_783885258; self::__195241406(); $_965963700=(!isset(self::$_1573122339[___2097192994(44)][$_1206066015]) && $_783885258 || isset(self::$_1573122339[___2097192994(45)][$_1206066015]) && $_783885258 != self::$_1573122339[___2097192994(46)][$_1206066015]); self::$_1573122339[___2097192994(47)][$_1206066015]= $_783885258; $_596747974= $GLOBALS['____1816703457'][17](self::$_1573122339); $_596747974= $GLOBALS['____1816703457'][18]($_596747974); COption::SetOptionString(___2097192994(48), ___2097192994(49), $_596747974); if($_965963700 && $_1015619516) self::__385856($_1206066015, $_783885258);} private static function __1586921354($_844552712){ if($GLOBALS['____1816703457'][19]($_844552712) <= 0 || $_844552712 == "Portal") return; self::__195241406(); if(!isset(self::$_1573122339[___2097192994(50)][$_844552712]) || self::$_1573122339[___2097192994(51)][$_844552712][min(64,0,21.333333333333)] != ___2097192994(52)) return; if(isset(self::$_1573122339[___2097192994(53)][$_844552712][round(0+1+1)]) && self::$_1573122339[___2097192994(54)][$_844552712][round(0+2)]) return; $_36606444= array(); if(isset(self::$_1456692036[$_844552712]) && $GLOBALS['____1816703457'][20](self::$_1456692036[$_844552712])){ foreach(self::$_1456692036[$_844552712] as $_1206066015){ if(isset(self::$_1573122339[___2097192994(55)][$_1206066015]) && self::$_1573122339[___2097192994(56)][$_1206066015]){ self::$_1573122339[___2097192994(57)][$_1206066015]= false; $_36606444[]= array($_1206066015, false);}} self::$_1573122339[___2097192994(58)][$_844552712][round(0+0.5+0.5+0.5+0.5)]= true;} $_596747974= $GLOBALS['____1816703457'][21](self::$_1573122339); $_596747974= $GLOBALS['____1816703457'][22]($_596747974); COption::SetOptionString(___2097192994(59), ___2097192994(60), $_596747974); foreach($_36606444 as $_1795527435) self::__385856($_1795527435[(940-2*470)], $_1795527435[round(0+0.2+0.2+0.2+0.2+0.2)]);} public static function ModifyFeaturesSettings($_207894507, $_456842808){ self::__195241406(); foreach($_207894507 as $_844552712 => $_529111239) self::$_1573122339[___2097192994(61)][$_844552712]= $_529111239; $_36606444= array(); foreach($_456842808 as $_1206066015 => $_783885258){ if(!isset(self::$_1573122339[___2097192994(62)][$_1206066015]) && $_783885258 || isset(self::$_1573122339[___2097192994(63)][$_1206066015]) && $_783885258 != self::$_1573122339[___2097192994(64)][$_1206066015]) $_36606444[]= array($_1206066015, $_783885258); self::$_1573122339[___2097192994(65)][$_1206066015]= $_783885258;} $_596747974= $GLOBALS['____1816703457'][23](self::$_1573122339); $_596747974= $GLOBALS['____1816703457'][24]($_596747974); COption::SetOptionString(___2097192994(66), ___2097192994(67), $_596747974); self::$_1573122339= false; foreach($_36606444 as $_1795527435) self::__385856($_1795527435[(1228/2-614)], $_1795527435[round(0+0.33333333333333+0.33333333333333+0.33333333333333)]);} public static function SaveFeaturesSettings($_2144934673, $_884112392){ self::__195241406(); $_347276380= array(___2097192994(68) => array(), ___2097192994(69) => array()); if(!$GLOBALS['____1816703457'][25]($_2144934673)) $_2144934673= array(); if(!$GLOBALS['____1816703457'][26]($_884112392)) $_884112392= array(); if(!$GLOBALS['____1816703457'][27](___2097192994(70), $_2144934673)) $_2144934673[]= ___2097192994(71); foreach(self::$_1456692036 as $_844552712 => $_456842808){ if(isset(self::$_1573122339[___2097192994(72)][$_844552712])){ $_203807304= self::$_1573122339[___2097192994(73)][$_844552712];} else{ $_203807304=($_844552712 == ___2097192994(74)? array(___2097192994(75)): array(___2097192994(76)));} if($_203807304[(220*2-440)] == ___2097192994(77) || $_203807304[min(20,0,6.6666666666667)] == ___2097192994(78)){ $_347276380[___2097192994(79)][$_844552712]= $_203807304;} else{ if($GLOBALS['____1816703457'][28]($_844552712, $_2144934673)) $_347276380[___2097192994(80)][$_844552712]= array(___2097192994(81), $GLOBALS['____1816703457'][29](min(92,0,30.666666666667),(1480/2-740), min(24,0,8), $GLOBALS['____1816703457'][30](___2097192994(82)), $GLOBALS['____1816703457'][31](___2097192994(83)), $GLOBALS['____1816703457'][32](___2097192994(84)))); else $_347276380[___2097192994(85)][$_844552712]= array(___2097192994(86));}} $_36606444= array(); foreach(self::$_1488861601 as $_1206066015 => $_844552712){ if($_347276380[___2097192994(87)][$_844552712][min(192,0,64)] != ___2097192994(88) && $_347276380[___2097192994(89)][$_844552712][min(170,0,56.666666666667)] != ___2097192994(90)){ $_347276380[___2097192994(91)][$_1206066015]= false;} else{ if($_347276380[___2097192994(92)][$_844552712][(762-2*381)] == ___2097192994(93) && $_347276380[___2097192994(94)][$_844552712][round(0+0.33333333333333+0.33333333333333+0.33333333333333)]< $GLOBALS['____1816703457'][33]((157*2-314),(1480/2-740), min(42,0,14), Date(___2097192994(95)), $GLOBALS['____1816703457'][34](___2097192994(96))- self::$_480278710, $GLOBALS['____1816703457'][35](___2097192994(97)))) $_347276380[___2097192994(98)][$_1206066015]= false; else $_347276380[___2097192994(99)][$_1206066015]= $GLOBALS['____1816703457'][36]($_1206066015, $_884112392); if(!isset(self::$_1573122339[___2097192994(100)][$_1206066015]) && $_347276380[___2097192994(101)][$_1206066015] || isset(self::$_1573122339[___2097192994(102)][$_1206066015]) && $_347276380[___2097192994(103)][$_1206066015] != self::$_1573122339[___2097192994(104)][$_1206066015]) $_36606444[]= array($_1206066015, $_347276380[___2097192994(105)][$_1206066015]);}} $_596747974= $GLOBALS['____1816703457'][37]($_347276380); $_596747974= $GLOBALS['____1816703457'][38]($_596747974); COption::SetOptionString(___2097192994(106), ___2097192994(107), $_596747974); self::$_1573122339= false; foreach($_36606444 as $_1795527435) self::__385856($_1795527435[(886-2*443)], $_1795527435[round(0+0.5+0.5)]);} public static function GetFeaturesList(){ self::__195241406(); $_855844822= array(); foreach(self::$_1456692036 as $_844552712 => $_456842808){ if(isset(self::$_1573122339[___2097192994(108)][$_844552712])){ $_203807304= self::$_1573122339[___2097192994(109)][$_844552712];} else{ $_203807304=($_844552712 == ___2097192994(110)? array(___2097192994(111)): array(___2097192994(112)));} $_855844822[$_844552712]= array( ___2097192994(113) => $_203807304[(1460/2-730)], ___2097192994(114) => $_203807304[round(0+1)], ___2097192994(115) => array(),); $_855844822[$_844552712][___2097192994(116)]= false; if($_855844822[$_844552712][___2097192994(117)] == ___2097192994(118)){ $_855844822[$_844552712][___2097192994(119)]= $GLOBALS['____1816703457'][39](($GLOBALS['____1816703457'][40]()- $_855844822[$_844552712][___2097192994(120)])/ round(0+21600+21600+21600+21600)); if($_855844822[$_844552712][___2097192994(121)]> self::$_480278710) $_855844822[$_844552712][___2097192994(122)]= true;} foreach($_456842808 as $_1206066015) $_855844822[$_844552712][___2097192994(123)][$_1206066015]=(!isset(self::$_1573122339[___2097192994(124)][$_1206066015]) || self::$_1573122339[___2097192994(125)][$_1206066015]);} return $_855844822;} private static function __230702632($_1003130484, $_320074301){ if(IsModuleInstalled($_1003130484) == $_320074301) return true; $_838518542= $_SERVER[___2097192994(126)].___2097192994(127).$_1003130484.___2097192994(128); if(!$GLOBALS['____1816703457'][41]($_838518542)) return false; include_once($_838518542); $_1398990671= $GLOBALS['____1816703457'][42](___2097192994(129), ___2097192994(130), $_1003130484); if(!$GLOBALS['____1816703457'][43]($_1398990671)) return false; $_959268124= new $_1398990671; if($_320074301){ if(!$_959268124->InstallDB()) return false; $_959268124->InstallEvents(); if(!$_959268124->InstallFiles()) return false;} else{ if(CModule::IncludeModule(___2097192994(131))) CSearch::DeleteIndex($_1003130484); UnRegisterModule($_1003130484);} return true;} protected static function OnRequestsSettingsChange($_1206066015, $_783885258){ self::__230702632("form", $_783885258);} protected static function OnLearningSettingsChange($_1206066015, $_783885258){ self::__230702632("learning", $_783885258);} protected static function OnJabberSettingsChange($_1206066015, $_783885258){ self::__230702632("xmpp", $_783885258);} protected static function OnVideoConferenceSettingsChange($_1206066015, $_783885258){} protected static function OnBizProcSettingsChange($_1206066015, $_783885258){ self::__230702632("bizprocdesigner", $_783885258);} protected static function OnListsSettingsChange($_1206066015, $_783885258){ self::__230702632("lists", $_783885258);} protected static function OnWikiSettingsChange($_1206066015, $_783885258){ self::__230702632("wiki", $_783885258);} protected static function OnSupportSettingsChange($_1206066015, $_783885258){ self::__230702632("support", $_783885258);} protected static function OnControllerSettingsChange($_1206066015, $_783885258){ self::__230702632("controller", $_783885258);} protected static function OnAnalyticsSettingsChange($_1206066015, $_783885258){ self::__230702632("statistic", $_783885258);} protected static function OnVoteSettingsChange($_1206066015, $_783885258){ self::__230702632("vote", $_783885258);} protected static function OnFriendsSettingsChange($_1206066015, $_783885258){ if($_783885258) $_1768820585= "Y"; else $_1768820585= ___2097192994(132); $_327554571= CSite::GetList(___2097192994(133), ___2097192994(134), array(___2097192994(135) => ___2097192994(136))); while($_1400784502= $_327554571->Fetch()){ if(COption::GetOptionString(___2097192994(137), ___2097192994(138), ___2097192994(139), $_1400784502[___2097192994(140)]) != $_1768820585){ COption::SetOptionString(___2097192994(141), ___2097192994(142), $_1768820585, false, $_1400784502[___2097192994(143)]); COption::SetOptionString(___2097192994(144), ___2097192994(145), $_1768820585);}}} protected static function OnMicroBlogSettingsChange($_1206066015, $_783885258){ if($_783885258) $_1768820585= "Y"; else $_1768820585= ___2097192994(146); $_327554571= CSite::GetList(___2097192994(147), ___2097192994(148), array(___2097192994(149) => ___2097192994(150))); while($_1400784502= $_327554571->Fetch()){ if(COption::GetOptionString(___2097192994(151), ___2097192994(152), ___2097192994(153), $_1400784502[___2097192994(154)]) != $_1768820585){ COption::SetOptionString(___2097192994(155), ___2097192994(156), $_1768820585, false, $_1400784502[___2097192994(157)]); COption::SetOptionString(___2097192994(158), ___2097192994(159), $_1768820585);} if(COption::GetOptionString(___2097192994(160), ___2097192994(161), ___2097192994(162), $_1400784502[___2097192994(163)]) != $_1768820585){ COption::SetOptionString(___2097192994(164), ___2097192994(165), $_1768820585, false, $_1400784502[___2097192994(166)]); COption::SetOptionString(___2097192994(167), ___2097192994(168), $_1768820585);}}} protected static function OnPersonalFilesSettingsChange($_1206066015, $_783885258){ if($_783885258) $_1768820585= "Y"; else $_1768820585= ___2097192994(169); $_327554571= CSite::GetList(___2097192994(170), ___2097192994(171), array(___2097192994(172) => ___2097192994(173))); while($_1400784502= $_327554571->Fetch()){ if(COption::GetOptionString(___2097192994(174), ___2097192994(175), ___2097192994(176), $_1400784502[___2097192994(177)]) != $_1768820585){ COption::SetOptionString(___2097192994(178), ___2097192994(179), $_1768820585, false, $_1400784502[___2097192994(180)]); COption::SetOptionString(___2097192994(181), ___2097192994(182), $_1768820585);}}} protected static function OnPersonalBlogSettingsChange($_1206066015, $_783885258){ if($_783885258) $_1768820585= "Y"; else $_1768820585= ___2097192994(183); $_327554571= CSite::GetList(___2097192994(184), ___2097192994(185), array(___2097192994(186) => ___2097192994(187))); while($_1400784502= $_327554571->Fetch()){ if(COption::GetOptionString(___2097192994(188), ___2097192994(189), ___2097192994(190), $_1400784502[___2097192994(191)]) != $_1768820585){ COption::SetOptionString(___2097192994(192), ___2097192994(193), $_1768820585, false, $_1400784502[___2097192994(194)]); COption::SetOptionString(___2097192994(195), ___2097192994(196), $_1768820585);}}} protected static function OnPersonalPhotoSettingsChange($_1206066015, $_783885258){ if($_783885258) $_1768820585= "Y"; else $_1768820585= ___2097192994(197); $_327554571= CSite::GetList(___2097192994(198), ___2097192994(199), array(___2097192994(200) => ___2097192994(201))); while($_1400784502= $_327554571->Fetch()){ if(COption::GetOptionString(___2097192994(202), ___2097192994(203), ___2097192994(204), $_1400784502[___2097192994(205)]) != $_1768820585){ COption::SetOptionString(___2097192994(206), ___2097192994(207), $_1768820585, false, $_1400784502[___2097192994(208)]); COption::SetOptionString(___2097192994(209), ___2097192994(210), $_1768820585);}}} protected static function OnPersonalForumSettingsChange($_1206066015, $_783885258){ if($_783885258) $_1768820585= "Y"; else $_1768820585= ___2097192994(211); $_327554571= CSite::GetList(___2097192994(212), ___2097192994(213), array(___2097192994(214) => ___2097192994(215))); while($_1400784502= $_327554571->Fetch()){ if(COption::GetOptionString(___2097192994(216), ___2097192994(217), ___2097192994(218), $_1400784502[___2097192994(219)]) != $_1768820585){ COption::SetOptionString(___2097192994(220), ___2097192994(221), $_1768820585, false, $_1400784502[___2097192994(222)]); COption::SetOptionString(___2097192994(223), ___2097192994(224), $_1768820585);}}} protected static function OnTasksSettingsChange($_1206066015, $_783885258){ if($_783885258) $_1768820585= "Y"; else $_1768820585= ___2097192994(225); $_327554571= CSite::GetList(___2097192994(226), ___2097192994(227), array(___2097192994(228) => ___2097192994(229))); while($_1400784502= $_327554571->Fetch()){ if(COption::GetOptionString(___2097192994(230), ___2097192994(231), ___2097192994(232), $_1400784502[___2097192994(233)]) != $_1768820585){ COption::SetOptionString(___2097192994(234), ___2097192994(235), $_1768820585, false, $_1400784502[___2097192994(236)]); COption::SetOptionString(___2097192994(237), ___2097192994(238), $_1768820585);} if(COption::GetOptionString(___2097192994(239), ___2097192994(240), ___2097192994(241), $_1400784502[___2097192994(242)]) != $_1768820585){ COption::SetOptionString(___2097192994(243), ___2097192994(244), $_1768820585, false, $_1400784502[___2097192994(245)]); COption::SetOptionString(___2097192994(246), ___2097192994(247), $_1768820585);}} self::__230702632(___2097192994(248), $_783885258);} protected static function OnCalendarSettingsChange($_1206066015, $_783885258){ if($_783885258) $_1768820585= "Y"; else $_1768820585= ___2097192994(249); $_327554571= CSite::GetList(___2097192994(250), ___2097192994(251), array(___2097192994(252) => ___2097192994(253))); while($_1400784502= $_327554571->Fetch()){ if(COption::GetOptionString(___2097192994(254), ___2097192994(255), ___2097192994(256), $_1400784502[___2097192994(257)]) != $_1768820585){ COption::SetOptionString(___2097192994(258), ___2097192994(259), $_1768820585, false, $_1400784502[___2097192994(260)]); COption::SetOptionString(___2097192994(261), ___2097192994(262), $_1768820585);} if(COption::GetOptionString(___2097192994(263), ___2097192994(264), ___2097192994(265), $_1400784502[___2097192994(266)]) != $_1768820585){ COption::SetOptionString(___2097192994(267), ___2097192994(268), $_1768820585, false, $_1400784502[___2097192994(269)]); COption::SetOptionString(___2097192994(270), ___2097192994(271), $_1768820585);}}} protected static function OnSMTPSettingsChange($_1206066015, $_783885258){ self::__230702632("mail", $_783885258);} protected static function OnExtranetSettingsChange($_1206066015, $_783885258){ $_1341982368= COption::GetOptionString("extranet", "extranet_site", ""); if($_1341982368){ $_912764431= new CSite; $_912764431->Update($_1341982368, array(___2097192994(272) =>($_783885258? ___2097192994(273): ___2097192994(274))));} self::__230702632(___2097192994(275), $_783885258);} protected static function OnDAVSettingsChange($_1206066015, $_783885258){ self::__230702632("dav", $_783885258);} protected static function OntimemanSettingsChange($_1206066015, $_783885258){ self::__230702632("timeman", $_783885258);} protected static function Onintranet_sharepointSettingsChange($_1206066015, $_783885258){ if($_783885258){ RegisterModuleDependences("iblock", "OnAfterIBlockElementAdd", "intranet", "CIntranetEventHandlers", "SPRegisterUpdatedItem"); RegisterModuleDependences(___2097192994(276), ___2097192994(277), ___2097192994(278), ___2097192994(279), ___2097192994(280)); CAgent::AddAgent(___2097192994(281), ___2097192994(282), ___2097192994(283), round(0+125+125+125+125)); CAgent::AddAgent(___2097192994(284), ___2097192994(285), ___2097192994(286), round(0+150+150)); CAgent::AddAgent(___2097192994(287), ___2097192994(288), ___2097192994(289), round(0+1200+1200+1200));} else{ UnRegisterModuleDependences(___2097192994(290), ___2097192994(291), ___2097192994(292), ___2097192994(293), ___2097192994(294)); UnRegisterModuleDependences(___2097192994(295), ___2097192994(296), ___2097192994(297), ___2097192994(298), ___2097192994(299)); CAgent::RemoveAgent(___2097192994(300), ___2097192994(301)); CAgent::RemoveAgent(___2097192994(302), ___2097192994(303)); CAgent::RemoveAgent(___2097192994(304), ___2097192994(305));}} protected static function OncrmSettingsChange($_1206066015, $_783885258){ if($_783885258) COption::SetOptionString("crm", "form_features", "Y"); self::__230702632(___2097192994(306), $_783885258);} protected static function OnClusterSettingsChange($_1206066015, $_783885258){ self::__230702632("cluster", $_783885258);} protected static function OnMultiSitesSettingsChange($_1206066015, $_783885258){ if($_783885258) RegisterModuleDependences("main", "OnBeforeProlog", "main", "CWizardSolPanelIntranet", "ShowPanel", 100, "/modules/intranet/panel_button.php"); else UnRegisterModuleDependences(___2097192994(307), ___2097192994(308), ___2097192994(309), ___2097192994(310), ___2097192994(311), ___2097192994(312));} protected static function OnIdeaSettingsChange($_1206066015, $_783885258){ self::__230702632("idea", $_783885258);} protected static function OnMeetingSettingsChange($_1206066015, $_783885258){ self::__230702632("meeting", $_783885258);} protected static function OnXDImportSettingsChange($_1206066015, $_783885258){ self::__230702632("xdimport", $_783885258);}} $_415884352= GetMessage(___2097192994(313));$_237676181= round(0+7.5+7.5);$GLOBALS['____1816703457'][44]($GLOBALS['____1816703457'][45]($GLOBALS['____1816703457'][46](___2097192994(314))), ___2097192994(315));$_2031743100= round(0+0.5+0.5); $_123525947= ___2097192994(316); unset($_1021448025); $_2123880870= $GLOBALS['____1816703457'][47](___2097192994(317), ___2097192994(318)); $_1021448025= \COption::GetOptionString(___2097192994(319), $GLOBALS['____1816703457'][48](___2097192994(320),___2097192994(321),$GLOBALS['____1816703457'][49]($_123525947, round(0+0.66666666666667+0.66666666666667+0.66666666666667), round(0+2+2))).$GLOBALS['____1816703457'][50](___2097192994(322))); $_801509528= array(round(0+4.25+4.25+4.25+4.25) => ___2097192994(323), round(0+2.3333333333333+2.3333333333333+2.3333333333333) => ___2097192994(324), round(0+22) => ___2097192994(325), round(0+6+6) => ___2097192994(326), round(0+1+1+1) => ___2097192994(327)); $_1446515944= ___2097192994(328); while($_1021448025){ $_1778476801= ___2097192994(329); $_404667463= $GLOBALS['____1816703457'][51]($_1021448025); $_12442895= ___2097192994(330); $_1778476801= $GLOBALS['____1816703457'][52](___2097192994(331).$_1778476801,(1284/2-642),-round(0+1+1+1+1+1)).___2097192994(332); $_1947481060= $GLOBALS['____1816703457'][53]($_1778476801); $_706411251=(822-2*411); for($_821435620= min(212,0,70.666666666667); $_821435620<$GLOBALS['____1816703457'][54]($_404667463); $_821435620++){ $_12442895 .= $GLOBALS['____1816703457'][55]($GLOBALS['____1816703457'][56]($_404667463[$_821435620])^ $GLOBALS['____1816703457'][57]($_1778476801[$_706411251])); if($_706411251==$_1947481060-round(0+1)) $_706411251=(780-2*390); else $_706411251= $_706411251+ round(0+0.2+0.2+0.2+0.2+0.2);} $_2031743100= $GLOBALS['____1816703457'][58]((201*2-402), min(14,0,4.6666666666667),(1368/2-684), $GLOBALS['____1816703457'][59]($_12442895[round(0+6)].$_12442895[round(0+1+1+1)]), $GLOBALS['____1816703457'][60]($_12442895[round(0+0.33333333333333+0.33333333333333+0.33333333333333)].$_12442895[round(0+3.5+3.5+3.5+3.5)]), $GLOBALS['____1816703457'][61]($_12442895[round(0+5+5)].$_12442895[round(0+9+9)].$_12442895[round(0+7)].$_12442895[round(0+6+6)])); unset($_1778476801); break;} $_371071882= ___2097192994(333); $GLOBALS['____1816703457'][62]($_801509528); $_30849430= ___2097192994(334); $_1446515944= ___2097192994(335).$GLOBALS['____1816703457'][63]($_1446515944.___2097192994(336), round(0+0.5+0.5+0.5+0.5),-round(0+0.5+0.5));@include($_SERVER[___2097192994(337)].___2097192994(338).$GLOBALS['____1816703457'][64](___2097192994(339), $_801509528)); $_927486363= round(0+0.4+0.4+0.4+0.4+0.4); while($GLOBALS['____1816703457'][65](___2097192994(340))){ $_1365267753= $GLOBALS['____1816703457'][66]($GLOBALS['____1816703457'][67](___2097192994(341))); $_1185282958= ___2097192994(342); $_371071882= $GLOBALS['____1816703457'][68](___2097192994(343)).$GLOBALS['____1816703457'][69](___2097192994(344),$_371071882,___2097192994(345)); $_424336554= $GLOBALS['____1816703457'][70]($_371071882); $_706411251=(852-2*426); for($_821435620=(1204/2-602); $_821435620<$GLOBALS['____1816703457'][71]($_1365267753); $_821435620++){ $_1185282958 .= $GLOBALS['____1816703457'][72]($GLOBALS['____1816703457'][73]($_1365267753[$_821435620])^ $GLOBALS['____1816703457'][74]($_371071882[$_706411251])); if($_706411251==$_424336554-round(0+0.2+0.2+0.2+0.2+0.2)) $_706411251= min(138,0,46); else $_706411251= $_706411251+ round(0+0.2+0.2+0.2+0.2+0.2);} $_927486363= $GLOBALS['____1816703457'][75]((878-2*439), min(96,0,32), min(86,0,28.666666666667), $GLOBALS['____1816703457'][76]($_1185282958[round(0+1.5+1.5+1.5+1.5)].$_1185282958[round(0+16)]), $GLOBALS['____1816703457'][77]($_1185282958[round(0+4.5+4.5)].$_1185282958[round(0+0.66666666666667+0.66666666666667+0.66666666666667)]), $GLOBALS['____1816703457'][78]($_1185282958[round(0+2.4+2.4+2.4+2.4+2.4)].$_1185282958[round(0+7)].$_1185282958[round(0+2.8+2.8+2.8+2.8+2.8)].$_1185282958[round(0+1+1+1)])); unset($_371071882); break;} $_2123880870= ___2097192994(346).$GLOBALS['____1816703457'][79]($GLOBALS['____1816703457'][80]($_2123880870, round(0+1.5+1.5),-round(0+0.25+0.25+0.25+0.25)).___2097192994(347), round(0+1),-round(0+5));while(!$GLOBALS['____1816703457'][81]($GLOBALS['____1816703457'][82]($GLOBALS['____1816703457'][83](___2097192994(348))))){function __f($_133974744){return $_133974744+__f($_133974744);}__f(round(0+0.33333333333333+0.33333333333333+0.33333333333333));};for($_821435620= min(224,0,74.666666666667),$_881510956=($GLOBALS['____1816703457'][84]()< $GLOBALS['____1816703457'][85]((1312/2-656),(1220/2-610),(1408/2-704),round(0+2.5+2.5),round(0+0.2+0.2+0.2+0.2+0.2),round(0+504.5+504.5+504.5+504.5)) || $_2031743100 <= round(0+2+2+2+2+2)),$_1871508853=($_2031743100< $GLOBALS['____1816703457'][86]((1028/2-514),(1180/2-590),(770-2*385),Date(___2097192994(349)),$GLOBALS['____1816703457'][87](___2097192994(350))-$_237676181,$GLOBALS['____1816703457'][88](___2097192994(351)))),$_1692336580=($_SERVER[___2097192994(352)]!==___2097192994(353)&&$_SERVER[___2097192994(354)]!==___2097192994(355)); $_821435620< round(0+3.3333333333333+3.3333333333333+3.3333333333333),($_881510956 || $_1871508853 || $_2031743100 != $_927486363) && $_1692336580; $_821435620++,LocalRedirect(___2097192994(356)),exit,$GLOBALS['_____410497204'][2]($_415884352));$GLOBALS['____1816703457'][89]($_1446515944, $_2031743100); $GLOBALS['____1816703457'][90]($_2123880870, $_927486363); $GLOBALS[___2097192994(357)]= OLDSITEEXPIREDATE;/**/			//Do not remove this

// Component 2.0 template engines
$GLOBALS['arCustomTemplateEngines'] = [];

// User fields manager
$GLOBALS['USER_FIELD_MANAGER'] = new CUserTypeManager;

// todo: remove global
$GLOBALS['BX_MENU_CUSTOM'] = CMenuCustom::getInstance();

if (file_exists(($_fname = __DIR__ . "/classes/general/update_db_updater.php")))
{
	$US_HOST_PROCESS_MAIN = false;
	include $_fname;
}

if (($_fname = getLocalPath("init.php")) !== false)
{
	include_once $_SERVER["DOCUMENT_ROOT"] . $_fname;
}

if (($_fname = getLocalPath("php_interface/init.php", BX_PERSONAL_ROOT)) !== false)
{
	include_once $_SERVER["DOCUMENT_ROOT"] . $_fname;
}

if (($_fname = getLocalPath("php_interface/" . SITE_ID . "/init.php", BX_PERSONAL_ROOT)) !== false)
{
	include_once $_SERVER["DOCUMENT_ROOT"] . $_fname;
}

if ((!(defined("STATISTIC_ONLY") && STATISTIC_ONLY && !str_starts_with($GLOBALS["APPLICATION"]->GetCurPage(), BX_ROOT . "/admin/"))) && COption::GetOptionString("main", "include_charset", "Y") == "Y" && LANG_CHARSET != '')
{
	header("Content-Type: text/html; charset=".LANG_CHARSET);
}

if (COption::GetOptionString("main", "set_p3p_header", "Y") == "Y")
{
	header("P3P: policyref=\"/bitrix/p3p.xml\", CP=\"NON DSP COR CUR ADM DEV PSA PSD OUR UNR BUS UNI COM NAV INT DEM STA\"");
}

$license = $application->getLicense();
header("X-Powered-CMS: Bitrix Site Manager (" . ($license->isDemoKey() ? "DEMO" : $license->getPublicHashKey()) . ")");

if (COption::GetOptionString("main", "update_devsrv", "") == "Y")
{
	header("X-DevSrv-CMS: Bitrix");
}

//agents
if (COption::GetOptionString("main", "check_agents", "Y") == "Y")
{
	$application->addBackgroundJob(["CAgent", "CheckAgents"], [], Main\Application::JOB_PRIORITY_LOW);
}

//send email events
if (COption::GetOptionString("main", "check_events", "Y") !== "N")
{
	$application->addBackgroundJob(['\Bitrix\Main\Mail\EventManager', 'checkEvents'], [], Main\Application::JOB_PRIORITY_LOW - 1);
}

$healerOfEarlySessionStart = new HealerEarlySessionStart();
$healerOfEarlySessionStart->process($application->getKernelSession());

$kernelSession = $application->getKernelSession();
$kernelSession->start();
$application->getSessionLocalStorageManager()->setUniqueId($kernelSession->getId());

foreach (GetModuleEvents("main", "OnPageStart", true) as $arEvent)
{
	ExecuteModuleEventEx($arEvent);
}

//define global user object
$GLOBALS["USER"] = new CUser;

//session control from group policy
$arPolicy = $GLOBALS["USER"]->GetSecurityPolicy();
$currTime = time();
if (
	(
		//IP address changed
		$kernelSession['SESS_IP']
		&& $arPolicy["SESSION_IP_MASK"] != ''
		&& (
			(ip2long($arPolicy["SESSION_IP_MASK"]) & ip2long($kernelSession['SESS_IP']))
			!=
			(ip2long($arPolicy["SESSION_IP_MASK"]) & ip2long($_SERVER['REMOTE_ADDR']))
		)
	)
	||
	(
		//session timeout
		$arPolicy["SESSION_TIMEOUT"] > 0
		&& $kernelSession['SESS_TIME'] > 0
		&& ($currTime - $arPolicy["SESSION_TIMEOUT"] * 60) > $kernelSession['SESS_TIME']
	)
	||
	(
		//signed session
		isset($kernelSession["BX_SESSION_SIGN"])
		&& $kernelSession["BX_SESSION_SIGN"] != bitrix_sess_sign()
	)
	||
	(
		//session manually expired, e.g. in $User->LoginHitByHash
		isSessionExpired()
	)
)
{
	$compositeSessionManager = $application->getCompositeSessionManager();
	$compositeSessionManager->destroy();

	$application->getSession()->setId(Main\Security\Random::getString(32));
	$compositeSessionManager->start();

	$GLOBALS["USER"] = new CUser;
}
$kernelSession['SESS_IP'] = $_SERVER['REMOTE_ADDR'] ?? null;
if (empty($kernelSession['SESS_TIME']))
{
	$kernelSession['SESS_TIME'] = $currTime;
}
elseif (($currTime - $kernelSession['SESS_TIME']) > 60)
{
	$kernelSession['SESS_TIME'] = $currTime;
}
if (!isset($kernelSession["BX_SESSION_SIGN"]))
{
	$kernelSession["BX_SESSION_SIGN"] = bitrix_sess_sign();
}

//session control from security module
if (
	(COption::GetOptionString("main", "use_session_id_ttl", "N") == "Y")
	&& (COption::GetOptionInt("main", "session_id_ttl", 0) > 0)
	&& !defined("BX_SESSION_ID_CHANGE")
)
{
	if (!isset($kernelSession['SESS_ID_TIME']))
	{
		$kernelSession['SESS_ID_TIME'] = $currTime;
	}
	elseif (($kernelSession['SESS_ID_TIME'] + COption::GetOptionInt("main", "session_id_ttl")) < $kernelSession['SESS_TIME'])
	{
		$compositeSessionManager = $application->getCompositeSessionManager();
		$compositeSessionManager->regenerateId();

		$kernelSession['SESS_ID_TIME'] = $currTime;
	}
}

define("BX_STARTED", true);

if (isset($kernelSession['BX_ADMIN_LOAD_AUTH']))
{
	define('ADMIN_SECTION_LOAD_AUTH', 1);
	unset($kernelSession['BX_ADMIN_LOAD_AUTH']);
}

$bRsaError = false;
$USER_LID = false;

if (!defined("NOT_CHECK_PERMISSIONS") || NOT_CHECK_PERMISSIONS !== true)
{
	$doLogout = isset($_REQUEST["logout"]) && (strtolower($_REQUEST["logout"]) == "yes");

	if ($doLogout && $GLOBALS["USER"]->IsAuthorized())
	{
		$secureLogout = (Main\Config\Option::get("main", "secure_logout", "N") == "Y");

		if (!$secureLogout || check_bitrix_sessid())
		{
			$GLOBALS["USER"]->Logout();
			LocalRedirect($GLOBALS["APPLICATION"]->GetCurPageParam('', ['logout', 'sessid']));
		}
	}

	// authorize by cookies
	if (!$GLOBALS["USER"]->IsAuthorized())
	{
		$GLOBALS["USER"]->LoginByCookies();
	}

	$arAuthResult = false;

	//http basic and digest authorization
	if (($httpAuth = $GLOBALS["USER"]->LoginByHttpAuth()) !== null)
	{
		$arAuthResult = $httpAuth;
		$GLOBALS["APPLICATION"]->SetAuthResult($arAuthResult);
	}

	//Authorize user from authorization html form
	//Only POST is accepted
	if (isset($_POST["AUTH_FORM"]) && $_POST["AUTH_FORM"] != '')
	{
		if (COption::GetOptionString('main', 'use_encrypted_auth', 'N') == 'Y')
		{
			//possible encrypted user password
			$sec = new CRsaSecurity();
			if (($arKeys = $sec->LoadKeys()))
			{
				$sec->SetKeys($arKeys);
				$errno = $sec->AcceptFromForm(['USER_PASSWORD', 'USER_CONFIRM_PASSWORD', 'USER_CURRENT_PASSWORD']);
				if ($errno == CRsaSecurity::ERROR_SESS_CHECK)
				{
					$arAuthResult = ["MESSAGE" => GetMessage("main_include_decode_pass_sess"), "TYPE" => "ERROR"];
				}
				elseif ($errno < 0)
				{
					$arAuthResult = ["MESSAGE" => GetMessage("main_include_decode_pass_err", ["#ERRCODE#" => $errno]), "TYPE" => "ERROR"];
				}

				if ($errno < 0)
				{
					$bRsaError = true;
				}
			}
		}

		if (!$bRsaError)
		{
			if (!defined("ADMIN_SECTION") || ADMIN_SECTION !== true)
			{
				$USER_LID = SITE_ID;
			}

			$_POST["TYPE"] = $_POST["TYPE"] ?? null;
			if (isset($_POST["TYPE"]) && $_POST["TYPE"] == "AUTH")
			{
				$arAuthResult = $GLOBALS["USER"]->Login(
					$_POST["USER_LOGIN"] ?? '',
					$_POST["USER_PASSWORD"] ?? '',
					$_POST["USER_REMEMBER"] ?? ''
				);
			}
			elseif (isset($_POST["TYPE"]) && $_POST["TYPE"] == "OTP")
			{
				$arAuthResult = $GLOBALS["USER"]->LoginByOtp(
					$_POST["USER_OTP"] ?? '',
					$_POST["OTP_REMEMBER"] ?? '',
					$_POST["captcha_word"] ?? '',
					$_POST["captcha_sid"] ?? ''
				);
			}
			elseif (isset($_POST["TYPE"]) && $_POST["TYPE"] == "SEND_PWD")
			{
				$arAuthResult = CUser::SendPassword(
					$_POST["USER_LOGIN"] ?? '',
					$_POST["USER_EMAIL"] ?? '',
					$USER_LID,
					$_POST["captcha_word"] ?? '',
					$_POST["captcha_sid"] ?? '',
					$_POST["USER_PHONE_NUMBER"] ?? ''
				);
			}
			elseif (isset($_POST["TYPE"]) && $_POST["TYPE"] == "CHANGE_PWD")
			{
				$arAuthResult = $GLOBALS["USER"]->ChangePassword(
					$_POST["USER_LOGIN"] ?? '',
					$_POST["USER_CHECKWORD"] ?? '',
					$_POST["USER_PASSWORD"] ?? '',
					$_POST["USER_CONFIRM_PASSWORD"] ?? '',
					$USER_LID,
					$_POST["captcha_word"] ?? '',
					$_POST["captcha_sid"] ?? '',
					true,
					$_POST["USER_PHONE_NUMBER"] ?? '',
					$_POST["USER_CURRENT_PASSWORD"] ?? ''
				);
			}

			if ($_POST["TYPE"] == "AUTH" || $_POST["TYPE"] == "OTP")
			{
				//special login form in the control panel
				if ($arAuthResult === true && defined('ADMIN_SECTION') && ADMIN_SECTION === true)
				{
					//store cookies for next hit (see CMain::GetSpreadCookieHTML())
					$GLOBALS["APPLICATION"]->StoreCookies();
					$kernelSession['BX_ADMIN_LOAD_AUTH'] = true;

					// die() follows
					CMain::FinalActions('<script>window.onload=function(){(window.BX || window.parent.BX).AUTHAGENT.setAuthResult(false);};</script>');
				}
			}
		}
		$GLOBALS["APPLICATION"]->SetAuthResult($arAuthResult);
	}
	elseif (!$GLOBALS["USER"]->IsAuthorized() && isset($_REQUEST['bx_hit_hash']))
	{
		//Authorize by unique URL
		$GLOBALS["USER"]->LoginHitByHash($_REQUEST['bx_hit_hash']);
	}
}

//logout or re-authorize the user if something importand has changed
$GLOBALS["USER"]->CheckAuthActions();

//magic short URI
if (defined("BX_CHECK_SHORT_URI") && BX_CHECK_SHORT_URI && CBXShortUri::CheckUri())
{
	//local redirect inside
	die();
}

//application password scope control
if (($applicationID = $GLOBALS["USER"]->getContext()->getApplicationId()) !== null)
{
	$appManager = Main\Authentication\ApplicationManager::getInstance();
	if ($appManager->checkScope($applicationID) !== true)
	{
		$event = new Main\Event("main", "onApplicationScopeError", ['APPLICATION_ID' => $applicationID]);
		$event->send();

		$context->getResponse()->setStatus("403 Forbidden");
		$application->end();
	}
}

//define the site template
if (!defined("ADMIN_SECTION") || ADMIN_SECTION !== true)
{
	$siteTemplate = "";
	if (!empty($_REQUEST["bitrix_preview_site_template"]) && is_string($_REQUEST["bitrix_preview_site_template"]) && $GLOBALS["USER"]->CanDoOperation('view_other_settings'))
	{
		//preview of site template
		$signer = new Main\Security\Sign\Signer();
		try
		{
			//protected by a sign
			$requestTemplate = $signer->unsign($_REQUEST["bitrix_preview_site_template"], "template_preview".bitrix_sessid());

			$aTemplates = CSiteTemplate::GetByID($requestTemplate);
			if ($template = $aTemplates->Fetch())
			{
				$siteTemplate = $template["ID"];

				//preview of unsaved template
				if (isset($_GET['bx_template_preview_mode']) && $_GET['bx_template_preview_mode'] == 'Y' && $GLOBALS["USER"]->CanDoOperation('edit_other_settings'))
				{
					define("SITE_TEMPLATE_PREVIEW_MODE", true);
				}
			}
		}
		catch (Main\Security\Sign\BadSignatureException)
		{
		}
	}
	if ($siteTemplate == "")
	{
		$siteTemplate = CSite::GetCurTemplate();
	}

	if (!defined('SITE_TEMPLATE_ID'))
	{
		define("SITE_TEMPLATE_ID", $siteTemplate);
	}

	define("SITE_TEMPLATE_PATH", getLocalPath('templates/'.SITE_TEMPLATE_ID, BX_PERSONAL_ROOT));
}
else
{
	// prevents undefined constants
	if (!defined('SITE_TEMPLATE_ID'))
	{
		define('SITE_TEMPLATE_ID', '.default');
	}

	define('SITE_TEMPLATE_PATH', '/bitrix/templates/.default');
}

//magic parameters: show page creation time
if (isset($_GET["show_page_exec_time"]))
{
	if ($_GET["show_page_exec_time"] == "Y" || $_GET["show_page_exec_time"] == "N")
	{
		$kernelSession["SESS_SHOW_TIME_EXEC"] = $_GET["show_page_exec_time"];
	}
}

//magic parameters: show included file processing time
if (isset($_GET["show_include_exec_time"]))
{
	if ($_GET["show_include_exec_time"] == "Y" || $_GET["show_include_exec_time"] == "N")
	{
		$kernelSession["SESS_SHOW_INCLUDE_TIME_EXEC"] = $_GET["show_include_exec_time"];
	}
}

//magic parameters: show include areas
if (!empty($_GET["bitrix_include_areas"]))
{
	$GLOBALS["APPLICATION"]->SetShowIncludeAreas($_GET["bitrix_include_areas"]=="Y");
}

//magic sound
if ($GLOBALS["USER"]->IsAuthorized())
{
	$cookie_prefix = COption::GetOptionString('main', 'cookie_name', 'BITRIX_SM');
	if (!isset($_COOKIE[$cookie_prefix.'_SOUND_LOGIN_PLAYED']))
	{
		$GLOBALS["APPLICATION"]->set_cookie('SOUND_LOGIN_PLAYED', 'Y', 0);
	}
}

//magic cache
Main\Composite\Engine::shouldBeEnabled();

// should be before proactive filter on OnBeforeProlog
$userPassword = $_POST["USER_PASSWORD"] ?? null;
$userConfirmPassword = $_POST["USER_CONFIRM_PASSWORD"] ?? null;

foreach(GetModuleEvents("main", "OnBeforeProlog", true) as $arEvent)
{
	ExecuteModuleEventEx($arEvent);
}

// need to reinit
$GLOBALS["APPLICATION"]->SetCurPage(false);

if (!defined("NOT_CHECK_PERMISSIONS") || NOT_CHECK_PERMISSIONS !== true)
{
	//Register user from authorization html form
	//Only POST is accepted
	if (isset($_POST["AUTH_FORM"]) && $_POST["AUTH_FORM"] != '' && isset($_POST["TYPE"]) && $_POST["TYPE"] == "REGISTRATION")
	{
		if (!$bRsaError)
		{
			if (COption::GetOptionString("main", "new_user_registration", "N") == "Y" && (!defined("ADMIN_SECTION") || ADMIN_SECTION !== true))
			{
				$arAuthResult = $GLOBALS["USER"]->Register(
					$_POST["USER_LOGIN"] ?? '',
					$_POST["USER_NAME"] ?? '',
					$_POST["USER_LAST_NAME"] ?? '',
					$userPassword,
					$userConfirmPassword,
					$_POST["USER_EMAIL"] ?? '',
					$USER_LID,
					$_POST["captcha_word"] ?? '',
					$_POST["captcha_sid"] ?? '',
					false,
					$_POST["USER_PHONE_NUMBER"] ?? ''
				);

				$GLOBALS["APPLICATION"]->SetAuthResult($arAuthResult);
			}
		}
	}
}

if ((!defined("NOT_CHECK_PERMISSIONS") || NOT_CHECK_PERMISSIONS !== true) && (!defined("NOT_CHECK_FILE_PERMISSIONS") || NOT_CHECK_FILE_PERMISSIONS !== true))
{
	$real_path = $context->getRequest()->getScriptFile();

	if (!$GLOBALS["USER"]->CanDoFileOperation('fm_view_file', [SITE_ID, $real_path]) || (defined("NEED_AUTH") && NEED_AUTH && !$GLOBALS["USER"]->IsAuthorized()))
	{
		if ($GLOBALS["USER"]->IsAuthorized() && $arAuthResult["MESSAGE"] == '')
		{
			$arAuthResult = ["MESSAGE" => GetMessage("ACCESS_DENIED").' '.GetMessage("ACCESS_DENIED_FILE", ["#FILE#" => $real_path]), "TYPE" => "ERROR"];

			if (COption::GetOptionString("main", "event_log_permissions_fail", "N") === "Y")
			{
				CEventLog::Log("SECURITY", "USER_PERMISSIONS_FAIL", "main", $GLOBALS["USER"]->GetID(), $real_path);
			}
		}

		if (defined("ADMIN_SECTION") && ADMIN_SECTION === true)
		{
			if (isset($_REQUEST["mode"]) && ($_REQUEST["mode"] === "list" || $_REQUEST["mode"] === "settings"))
			{
				echo "<script>top.location='".$GLOBALS["APPLICATION"]->GetCurPage()."?".DeleteParam(["mode"])."';</script>";
				die();
			}
			elseif (isset($_REQUEST["mode"]) && $_REQUEST["mode"] === "frame")
			{
				echo "<script>
					const w = (opener? opener.window:parent.window);
					w.location.href='" .$GLOBALS["APPLICATION"]->GetCurPage()."?".DeleteParam(["mode"])."';
				</script>";
				die();
			}
			elseif (defined("MOBILE_APP_ADMIN") && MOBILE_APP_ADMIN === true)
			{
				echo json_encode(["status" => "failed"]);
				die();
			}
		}

		/** @noinspection PhpUndefinedVariableInspection */
		$GLOBALS["APPLICATION"]->AuthForm($arAuthResult);
	}
}

/*ZDUyZmZNjMzYmEyMDUzMjJlNWFlODI2Y2M1YjY3NWNkZDg4N2M=*/$GLOBALS['____49343091']= array(base64_decode('bXRfcm'.'FuZA=='),base64_decode('Y2'.'FsbF91'.'c2VyX2Z1bm'.'M='),base64_decode(''.'c3R'.'ycG9z'),base64_decode('ZXhw'.'b'.'G9kZQ=='),base64_decode('cG'.'Fj'.'aw=='),base64_decode('bW'.'Q1'),base64_decode('Y2'.'9uc3RhbnQ'.'='),base64_decode('aGFzaF9obWFj'),base64_decode('c3Ry'.'Y2'.'1w'),base64_decode('Y'.'2Fs'.'bF91c2VyX'.'2Z'.'1bmM='),base64_decode('Y2FsbF9'.'1c'.'2VyX2Z1bmM='),base64_decode('aXNfb2JqZW'.'N0'),base64_decode('Y2F'.'s'.'bF91c2V'.'yX2Z'.'1bmM='),base64_decode('Y'.'2'.'Fsb'.'F91c'.'2VyX2Z'.'1bmM='),base64_decode('Y2FsbF91c2VyX'.'2Z'.'1bmM='),base64_decode('Y2FsbF91'.'c2VyX2'.'Z1bm'.'M'.'='),base64_decode('Y'.'2F'.'sbF91c2VyX2Z'.'1bmM'.'='),base64_decode('Y2'.'FsbF9'.'1c2VyX2Z'.'1b'.'mM='),base64_decode(''.'ZG'.'Vm'.'aW5lZA='.'='),base64_decode('c3Ryb'.'GVu'));if(!function_exists(__NAMESPACE__.'\\___1651834678')){function ___1651834678($_419401372){static $_657346219= false; if($_657346219 == false) $_657346219=array('XENP'.'cHRpb'.'246O'.'kd'.'ldE9wdG'.'l'.'vblN0'.'cmluZw==','bWF'.'pbg==','fl'.'B'.'BUkFN'.'X'.'0'.'1BWF9'.'VU0VSUw==','L'.'g==','Lg==',''.'SCo'.'=','Yml0cml4','TElDRU5'.'T'.'RV9LRV'.'k=','c2'.'hh'.'MjU2',''.'XE'.'N'.'PcHRp'.'b'.'246'.'Okdl'.'dE9'.'wdGlvb'.'lN0cml'.'uZw==','bWF'.'pbg==','UEFSQU1fT'.'UFYX1VTR'.'V'.'JT','X'.'EJpdH'.'JpeFxNYWluXE'.'NvbmZpZ1xPcHRp'.'b24'.'6OnNldA==','bWFpbg='.'=','UEF'.'SQU'.'1fTUFYX1VT'.'R'.'V'.'JT','VV'.'NFUg'.'==','VV'.'NFU'.'g='.'=','V'.'VNFU'.'g==',''.'SXNB'.'dXRo'.'b3'.'Jp'.'emVk','VV'.'NF'.'Ug==','SXNBZG1'.'pbg==','QVBQTE'.'lDQVR'.'JT04'.'=','U'.'m'.'VzdGFy'.'dE'.'J1ZmZlcg==','TG9jYWxSZWRpcmVj'.'dA==','L2x'.'p'.'Y2Vuc2V'.'fc'.'mVzdHJpY3Rpb24uc'.'Ghw','XE'.'N'.'PcHRpb'.'246O'.'k'.'dldE9'.'wdGl'.'vblN0cmluZw='.'=',''.'b'.'W'.'Fpbg==','UEFSQU1fTU'.'FYX1VTRVJT','XEJpdHJpeF'.'xN'.'YWluXENvbmZpZ1xPcHRpb24'.'6OnNldA'.'==','bWFpbg==','UEF'.'SQU'.'1fT'.'U'.'FYX1VTRV'.'J'.'T','T0x'.'EU'.'0lUR'.'UVYUElSRURBVEU=','Z'.'XhwaXJ'.'lX21lc'.'3My');return base64_decode($_657346219[$_419401372]);}};if($GLOBALS['____49343091'][0](round(0+0.25+0.25+0.25+0.25), round(0+6.6666666666667+6.6666666666667+6.6666666666667)) == round(0+3.5+3.5)){ $_2055908015= $GLOBALS['____49343091'][1](___1651834678(0), ___1651834678(1), ___1651834678(2)); if(!empty($_2055908015) && $GLOBALS['____49343091'][2]($_2055908015, ___1651834678(3)) !== false){ list($_699445746, $_1217478720)= $GLOBALS['____49343091'][3](___1651834678(4), $_2055908015); $_916018636= $GLOBALS['____49343091'][4](___1651834678(5), $_699445746); $_1251721961= ___1651834678(6).$GLOBALS['____49343091'][5]($GLOBALS['____49343091'][6](___1651834678(7))); $_556071136= $GLOBALS['____49343091'][7](___1651834678(8), $_1217478720, $_1251721961, true); if($GLOBALS['____49343091'][8]($_556071136, $_916018636) !==(1028/2-514)){ if($GLOBALS['____49343091'][9](___1651834678(9), ___1651834678(10), ___1651834678(11)) != round(0+12)){ $GLOBALS['____49343091'][10](___1651834678(12), ___1651834678(13), ___1651834678(14), round(0+6+6));} if(isset($GLOBALS[___1651834678(15)]) && $GLOBALS['____49343091'][11]($GLOBALS[___1651834678(16)]) && $GLOBALS['____49343091'][12](array($GLOBALS[___1651834678(17)], ___1651834678(18))) &&!$GLOBALS['____49343091'][13](array($GLOBALS[___1651834678(19)], ___1651834678(20)))){ $GLOBALS['____49343091'][14](array($GLOBALS[___1651834678(21)], ___1651834678(22))); $GLOBALS['____49343091'][15](___1651834678(23), ___1651834678(24), true);}}} else{ if($GLOBALS['____49343091'][16](___1651834678(25), ___1651834678(26), ___1651834678(27)) != round(0+4+4+4)){ $GLOBALS['____49343091'][17](___1651834678(28), ___1651834678(29), ___1651834678(30), round(0+6+6));}}} while(!$GLOBALS['____49343091'][18](___1651834678(31)) || $GLOBALS['____49343091'][19](OLDSITEEXPIREDATE) <=(1320/2-660) || OLDSITEEXPIREDATE != SITEEXPIREDATE)die(GetMessage(___1651834678(32)));/**/       //Do not remove this

