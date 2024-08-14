<?
$aMenuLinks = Array(
	Array(
		"Переговорные", 
		"/services/index.php", 
		Array("/services/res_c.php"), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('MeetingRoomBookingSystem')" 
	),
	Array(
		"Планерки и собрания", 
		"/services/meeting/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Meeting')" 
	),
	Array(
		"Списки", 
		"/services/lists/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Lists')" 
	),
	Array(
		"Контакт-центр", 
		"/services/contact_center/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Журнал изменений", 
		"/services/event_list.php", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('EventList')" 
	),
	Array(
		"Зарплата и отпуск", 
		"/services/salary/", 
		Array(), 
		Array(), 
		"LANGUAGE_ID == 'ru' && CBXFeatures::IsFeatureEnabled('Salary')" 
	),
	Array(
		"Телефония", 
		"/services/telephony/", 
		Array(), 
		Array(), 
		"CModule::IncludeModule(\"voximplant\") && SITE_TEMPLATE_ID !== \"bitrix24\" && Bitrix\\Voximplant\\Security\\Helper::isMainMenuEnabled()" 
	),
	Array(
		"Есть Идея?", 
		"/services/idea/", 
		Array(), 
		Array(), 
		"CBXFeatures::IsFeatureEnabled('Idea')" 
	)
);
?>