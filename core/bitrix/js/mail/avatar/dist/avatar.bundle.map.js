{"version":3,"sources":["avatar.bundle.js"],"names":["this","BX","exports","main_core","_templateObject","_createForOfIteratorHelper","o","allowArrayLike","it","Symbol","iterator","Array","isArray","_unsupportedIterableToArray","length","i","F","s","n","done","value","e","_e","f","TypeError","normalCompletion","didErr","err","call","step","next","_e2","minLen","_arrayLikeToArray","Object","prototype","toString","slice","constructor","name","from","test","arr","len","arr2","Avatar","babelHelpers","classCallCheck","createClass","key","stringToHashCode","string","hashCode","charCodeAt","alignChannelRangeColor","chanelCode","Math","ceil","hashToColor","hash","maxIntensityAllChannels","minIntensityAllChannels","differenceCoefficientForGrayDetection","r","g","b","contrastRatioForPastelColors","contrastRatioForDarkColors","channelReductionCoefficientIfGray","channels","sort","a","color","substr","toUpperCase","stringToColor","getInitials","email","replace","names","split","initials","substring","getAvatarData","config","arguments","undefined","fullName","abbreviation","build","size","whiteList","Set","has","data","avatar","Tag","render","taggedTemplateLiteral","style","backgroundColor","replaceElementWithAvatar","object","parent","parentNode","insertBefore","removeChild","replaceTagsWithAvatars","className","elements","document","getElementsByClassName","_iterator","_step","element","getAttribute","Mail"],"mappings":"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","file":"avatar.bundle.map.js"}