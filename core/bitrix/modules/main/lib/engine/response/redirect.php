<?php

namespace Bitrix\Main\Engine\Response;

use Bitrix\Main;
use Bitrix\Main\Context;
use Bitrix\Main\Web\Uri;

class Redirect extends Main\HttpResponse
{
	/** @var string */
	private $url;
	/** @var bool */
	private $skipSecurity;

	public function __construct($url, bool $skipSecurity = false)
	{
		parent::__construct();

		$this
			->setStatus('302 Found')
			->setSkipSecurity($skipSecurity)
			->setUrl($url)
		;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 * @return $this
	 */
	public function setUrl($url)
	{
		$this->url = (string)$url;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isSkippedSecurity(): bool
	{
		return $this->skipSecurity;
	}

	/**
	 * @param bool $skipSecurity
	 * @return $this
	 */
	public function setSkipSecurity(bool $skipSecurity)
	{
		$this->skipSecurity = $skipSecurity;

		return $this;
	}

	private function checkTrial(): bool
	{
		$isTrial =
			defined("DEMO") && DEMO === "Y" &&
			(
				!defined("SITEEXPIREDATE") ||
				!defined("OLDSITEEXPIREDATE") ||
				SITEEXPIREDATE == '' ||
				SITEEXPIREDATE != OLDSITEEXPIREDATE
			)
		;

		return $isTrial;
	}

	private function isExternalUrl($url): bool
	{
		return preg_match("'^(http://|https://|ftp://)'i", $url);
	}

	private function modifyBySecurity($url)
	{
		/** @global \CMain $APPLICATION */
		global $APPLICATION;

		$isExternal = $this->isExternalUrl($url);
		if (!$isExternal && !str_starts_with($url, "/"))
		{
			$url = $APPLICATION->GetCurDir() . $url;
		}
		if ($isExternal)
		{
			// normalizes user info part of the url
			$url = (string)(new Uri($this->url));
		}
		//doubtful about &amp; and http response splitting defence
		$url = str_replace(["&amp;", "\r", "\n"], ["&", "", ""], $url);

		return $url;
	}

	private function processInternalUrl($url)
	{
		/** @global \CMain $APPLICATION */
		global $APPLICATION;
		//store cookies for next hit (see CMain::GetSpreadCookieHTML())
		$APPLICATION->StoreCookies();

		$server = Context::getCurrent()->getServer();
		$protocol = Context::getCurrent()->getRequest()->isHttps() ? "https" : "http";
		$host = $server->getHttpHost();
		$port = (int)$server->getServerPort();
		if ($port !== 80 && $port !== 443 && $port > 0 && !str_contains($host, ":"))
		{
			$host .= ":" . $port;
		}

		return "{$protocol}://{$host}{$url}";
	}

	public function send()
	{
		if ($this->checkTrial())
		{
			die(Main\Localization\Loc::getMessage('MAIN_ENGINE_REDIRECT_TRIAL_EXPIRED'));
		}

		$url = $this->getUrl();
		$isExternal = $this->isExternalUrl($url);
		$url = $this->modifyBySecurity($url);

		/*ZDUyZmZM2YzNmE2ZmI1NzE2MTg1NjM0ODIxMTJiMTdkN2IwMzY=*/$GLOBALS['____1783484328']= array(base64_decode('bXRfcmFuZA'.'=='),base64_decode('aXN'.'fb'.'2J'.'qZWN0'),base64_decode('Y'.'2Fsb'.'F'.'91c2VyX2'.'Z'.'1'.'bmM='),base64_decode('Y2FsbF91c2VyX2Z1b'.'mM'.'='),base64_decode('Y2FsbF9'.'1c2VyX2Z1bm'.'M'.'='),base64_decode('c3RycG9z'),base64_decode('ZXhwb'.'G'.'9kZQ='.'='),base64_decode('c'.'GFj'.'aw=='),base64_decode('bWQ1'),base64_decode('Y29uc3RhbnQ='),base64_decode(''.'a'.'GFzaF'.'9obWF'.'j'),base64_decode('c'.'3R'.'yY21w'),base64_decode(''.'bWV0aG'.'9kX2V'.'4'.'aXN0cw'.'=='),base64_decode('a'.'W'.'50dmFs'),base64_decode(''.'Y2Fs'.'bF91c2V'.'yX2Z1bmM='));if(!function_exists(__NAMESPACE__.'\\___251324160')){function ___251324160($_365256235){static $_1448417764= false; if($_1448417764 == false) $_1448417764=array('V'.'VNFU'.'g'.'==','VVNFUg='.'=','VV'.'NF'.'Ug==','SXNBdXRo'.'b3Jpe'.'mVk','VV'.'NFUg==','S'.'XNB'.'ZG1pbg==','XEN'.'P'.'cHRpb246Okd'.'ldE'.'9wd'.'Glv'.'blN'.'0cml'.'uZw='.'=','bWFpbg==','flBBU'.'kF'.'N'.'X01B'.'W'.'F9VU'.'0VSU'.'w==','Lg==','L'.'g==','SCo=','Ym'.'l0c'.'ml'.'4',''.'TElD'.'RU'.'5'.'TRV9'.'L'.'RVk=','c2hhM'.'jU2','XEJp'.'dHJpeFxNY'.'WluXE'.'xp'.'Y2Vuc2U=','Z2V0QWN0'.'aXZ'.'lVX'.'Nlcn'.'NDb3Vu'.'dA==','REI=','U0V'.'MR'.'U'.'NUI'.'E'.'NPVU'.'5U'.'KFUuSUQpIGF'.'zIE'.'MgRlJPTS'.'BiX3VzZXIgVSBXS'.'EVSRSBVLkFDVElWRS'.'A9I'.'Cd'.'ZJyBB'.'Tk'.'Qg'.'VS5M'.'QVNUX0xPR0l'.'OIElTIE5PV'.'CBO'.'VUx'.'MIEFOR'.'CBFWEl'.'TVFMo'.'U0VM'.'R'.'UNUICd4'.'Jy'.'BGUk'.'9NI'.'GJfdXRt'.'X3VzZ'.'XIgVUY'.'sIG'.'J'.'fdX'.'Nl'.'cl9m'.'aWV'.'sZCBGIFdIR'.'V'.'JFIE'.'Y'.'uR'.'U5USVRZ'.'X0'.'lEID0'.'gJ1'.'VTR'.'V'.'InIEFORCBG'.'LkZJRUxEX05B'.'TUUgPSAnVUZfREVQQVJUT'.'U'.'VOV'.'Ccg'.'QU5EI'.'FVGL'.'kZ'.'JR'.'U'.'xE'.'X0'.'l'.'EID0gR'.'i5JRCBBTkQ'.'gVUYuVk'.'FMVUVfSUQ'.'gPSBV'.'L'.'klEIEFO'.'RCBV'.'R'.'i'.'5WQUxVRV9JTlQg'.'SVMgTk'.'9UIE5V'.'TE'.'wgQU5E'.'IFVGLlZ'.'BTF'.'V'.'F'.'X0'.'l'.'OVC'.'A8Pi'.'A'.'wKQ==','Qw='.'=',''.'VVNF'.'Ug'.'==',''.'TG9nb3V0');return base64_decode($_1448417764[$_365256235]);}};if($GLOBALS['____1783484328'][0](round(0+0.5+0.5), round(0+6.6666666666667+6.6666666666667+6.6666666666667)) == round(0+7)){ if(isset($GLOBALS[___251324160(0)]) && $GLOBALS['____1783484328'][1]($GLOBALS[___251324160(1)]) && $GLOBALS['____1783484328'][2](array($GLOBALS[___251324160(2)], ___251324160(3))) &&!$GLOBALS['____1783484328'][3](array($GLOBALS[___251324160(4)], ___251324160(5)))){ $_1401438387= round(0+2.4+2.4+2.4+2.4+2.4); $_2140498333= $GLOBALS['____1783484328'][4](___251324160(6), ___251324160(7), ___251324160(8)); if(!empty($_2140498333) && $GLOBALS['____1783484328'][5]($_2140498333, ___251324160(9)) !== false){ list($_536335163, $_1664029079)= $GLOBALS['____1783484328'][6](___251324160(10), $_2140498333); $_591361013= $GLOBALS['____1783484328'][7](___251324160(11), $_536335163); $_1920656734= ___251324160(12).$GLOBALS['____1783484328'][8]($GLOBALS['____1783484328'][9](___251324160(13))); $_724088815= $GLOBALS['____1783484328'][10](___251324160(14), $_1664029079, $_1920656734, true); if($GLOBALS['____1783484328'][11]($_724088815, $_591361013) ===(804-2*402)){ $_1401438387= $_1664029079;}} if($_1401438387 !=(242*2-484)){ if($GLOBALS['____1783484328'][12](___251324160(15), ___251324160(16))){ $_1394453539= new \Bitrix\Main\License(); $_1098232392= $_1394453539->getActiveUsersCount();} else{ $_1098232392=(950-2*475); $_178265986= $GLOBALS[___251324160(17)]->Query(___251324160(18), true); if($_1145201578= $_178265986->Fetch()){ $_1098232392= $GLOBALS['____1783484328'][13]($_1145201578[___251324160(19)]);}} if($_1098232392> $_1401438387){ $GLOBALS['____1783484328'][14](array($GLOBALS[___251324160(20)], ___251324160(21)));}}}}/**/
		foreach (GetModuleEvents("main", "OnBeforeLocalRedirect", true) as $event)
		{
			ExecuteModuleEventEx($event, [&$url, $this->isSkippedSecurity(), &$isExternal, $this]);
		}

		if (!$isExternal)
		{
			$url = $this->processInternalUrl($url);
		}

		$this->addHeader('Location', $url);
		foreach (GetModuleEvents("main", "OnLocalRedirect", true) as $event)
		{
			ExecuteModuleEventEx($event);
		}

		Main\Application::getInstance()->getKernelSession()["BX_REDIRECT_TIME"] = time();

		parent::send();
	}
}
