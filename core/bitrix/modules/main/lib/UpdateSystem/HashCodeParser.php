<? namespace Bitrix\Main\UpdateSystem;$GLOBALS['____181854587']= array(base64_decode('YmFz'.'Z'.'TY'.'0'.'X2Rl'.'Y'.'29'.'k'.'ZQ=='),base64_decode('dW5zZXJp'.'YWxp'.'em'.'U'.'='),base64_decode('b3B'.'lbnNz'.'bF92'.'ZXJp'.'Znk'.'='),base64_decode('dW'.'5zZ'.'XJpY'.'WxpemU='));if(!function_exists(__NAMESPACE__.'\\___1484824974')){function ___1484824974($_1426689140){static $_1845460730= false; if($_1845460730 == false) $_1845460730=array('Y'.'Wx'.'sb3d'.'lZF9jbG'.'Fzc2Vz','aW5mbw==','c2'.'l'.'nbmF'.'0dXJl','c'.'2hhMjU2V2l0a'.'FJT'.'QUVuY3J5cH'.'Rpb24=','a'.'W5m'.'b'.'w='.'=','YWxsb'.'3dl'.'ZF9jbGFzc2Vz','RXJyb3'.'IgdmVyaWZ5IG9wZW5zc2'.'wgW0hDU'.'F'.'AwMV0'.'=','LS0tLS1CRUd'.'J'.'T'.'iB'.'QVUJM'.'SUMg'.'S'.'0'.'VZ'.'LS0tLS0'.'KT'.'Ul'.'JQklqQU5CZ2txaGt'.'pRzl3'.'MEJBUUV'.'GQUFPQ'.'0FR'.'OE'.'FNSU'.'lC'.'Q2dLQ0FR'.'RUE2'.'aGN4SX'.'FpaX'.'R'.'VWlJ'.'Nd1lpd'.'Wt'.'TVQp'.'oOXhh'.'N'.'WZFRFls'.'Y'.'2NiVz'.'N2'.'ajhB'.'dmEzNXZLcV'.'ZON'.'GlCOXRxQ1g3'.'alU4Nn'.'FBY'.'TJ2M'.'zdt'.'Yl'.'RGNnB'.'jW'.'TZ'.'IR1'.'BBa'.'FJGCm'.'Jwb'.'n'.'dYT1'.'k3WU'.'d4QjFuU0'.'t'.'adkUr'.'a'.'kFSYmlMTE'.'JnWjFj'.'RzZaMGR1dT'.'VpM'.'VhocElS'.'TDFjTj'.'BI'.'aDVmZX'.'pwalhD'.'Nk8K'.'WXhZc'.'TBuVG'.'9I'.'VGp5UmIxeWN6d3R'.'taVJ'.'3'.'WXF1ZF'.'hn'.'L'.'3hXeHBwcXdGMHRVbGQzUUJ'.'yM2k2OEI'.'4'.'anFN'.'bS'.'tUam'.'RlQ'.'Qp1L2'.'ZnM'.'UowSkd0UjQveks'.'0RzdZSk5'.'2a'.'G1'.'1'.'aHJSR2t'.'5Q'.'VFWMFRWdTVMRXVnU3hqQXBS'.'bUlK'.'UU'.'5IUU1L'.'MEV'.'oOT'.'N3C'.'k1ab0ZvU'.'HA'.'5U'.'2dKN0dh'.'R'.'lU4a3pTK'.'0'.'V'.'R'.'Y250WX'.'hiMU5IVUpVSXZ'.'U'.'ZG'.'l1UlVl'.'RktseV'.'RkeE'.'l'.'ySDZ'.'DTC8vYXBNSDMKRnd'.'JREFRQUIKL'.'S0t'.'L'.'S1F'.'TkQg'.'UF'.'VCTElDIEtFWS0t'.'LS0t');return base64_decode($_1845460730[$_1426689140]);}}; use Bitrix\Main\Application; use Bitrix\Main\Security\Cipher; use Bitrix\Main\Security\SecurityException; class HashCodeParser{ private string $_1430385329; public function __construct(string $_1430385329){ $this->_1430385329= $_1430385329;}  public function parse(){ $_1292002117= $GLOBALS['____181854587'][0]($this->_1430385329); $_1292002117= $GLOBALS['____181854587'][1]($_1292002117,[___1484824974(0) => false]); if($GLOBALS['____181854587'][2]($_1292002117[___1484824974(1)], $_1292002117[___1484824974(2)], $this->__746733196(), ___1484824974(3)) == round(0+0.33333333333333+0.33333333333333+0.33333333333333)){ $_1255088319= Application::getInstance()->getLicense()->getHashLicenseKey(); $_585826651= new Cipher(); $_2085415524= $_585826651->decrypt($_1292002117[___1484824974(4)], $_1255088319); return $GLOBALS['____181854587'][3]($_2085415524,[___1484824974(5) => false]);} throw new SecurityException(___1484824974(6));} private function __746733196(): string{ return ___1484824974(7);}}?>