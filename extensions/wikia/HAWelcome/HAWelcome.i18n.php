<?php
/** Internationalization file for /extensions/wikia/HAWelcome/HAWelcome extension. */
$messages = [];

$messages['en'] = [
	'welcome-user' => '@latest',
	'welcome-bot' => '@bot',
	'welcome-enabled' => 'page-user message-anon message-user',
	'welcome-user-page' => '==About me==

\'\'This is your user page. Please edit this page to tell the community about yourself!\'\'

==My contributions==

* [[Special:Contributions/$1|User contributions]]

==My favorite pages==

* Add links to your favorite pages on the wiki here!
* Favorite page #2
* Favorite page #3',
	'welcome-message-user' => 'Hi, welcome to {{SITENAME}}! Thanks for your edit to the [[:$1]] page.

Please leave a message on [[$2|my talk page]] if I can help with anything! $3',
	'welcome-message-anon' => 'Hi, welcome to {{SITENAME}}! Thanks for your edit to the [[:$1]] page.

\'\'\'[[Special:Userlogin|Please sign in and create a user name]]\'\'\'.
It is an easy way to keep track of your contributions and helps you communicate with the rest of the community.

Please leave a message on [[$2|my talk page]] if I can help with anything! $3',
	'welcome-message-log' => 'welcoming new contributor',
	'welcome-message-user-staff' => '==Welcome==

Hi,

Welcome to {{SITENAME}} and thank you for your edit to the [[:$1]] page. If you need help, start by checking out our [[Help:Contents|help pages]]. Visit [[w:c:community|Community Central]] to stay informed with our [[w:c:community:Blog:Wikia_Staff_Blog|staff blog]], ask questions on our [[w:c:community:Special:Forum|community forum]], participate in our [[w:c:community:Help:Webinars|webinar series]], or chat live with fellow Wikians. Happy editing! $3',
	'welcome-message-anon-staff' => '==Welcome==

Hi,

Welcome to {{SITENAME}} and thank you for your edit to the [[:$1]] page. We encourage all contributors to [[Special:UserLogin|create a user name]], so you can keep track of your contributions, access more Wikia features and get to know the rest of the {{SITENAME}} community.

If you need help, check out our [[Help:Contents|help pages]] first and then visit [[w:c:community|Community Central]] to learn more. Happy editing! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|help forum]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Hi, welcome to {{SITENAME}}! Thanks for your edit to the [[:$1]] page.

Please leave me a message if I can help with anything!',
	'welcome-message-wall-user-staff' => 'Hi,

Welcome to {{SITENAME}} and thank you for your edit to the [[:$1]] page. If you need help, start by checking out our [[Help:Contents|help pages]]. Visit [[w:c:community|Community Central]] to stay informed with our [[w:c:community:Blog:Wikia_Staff_Blog|staff blog]], ask questions on our [[w:c:community:Special:Forum|community forum]], participate in our [[w:c:community:Help:Webinars|webinar series]], or chat live with fellow Wikians. Happy editing!',
	'welcome-message-wall-anon' => 'Hi, welcome to {{SITENAME}}! Thanks for your edit to the [[:$1]] page.

\'\'\'[[Special:Userlogin|Please sign in and create a user name]]\'\'\'. It\'s an easy way to keep track of your contributions and helps you communicate with the rest of the community.

Please leave me a message if I can help with anything!',
	'welcome-message-wall-anon-staff' => 'Hi,
Welcome to {{SITENAME}} and thank you for your edit to the [[:$1]] page. We encourage all contributors to [[Special:UserLogin|create a user name]], so you can keep track of your contributions, access more Wikia features and get to know the rest of the {{SITENAME}} community.

If you need help, check out our [[Help:Contents|help pages]] first and then visit [[w:c:community|Community Central]] to learn more. Happy editing!',
	'welcome-description' => 'Sends a welcome message to users after their first edits',
	'right-welcomeexempt' => 'Flags user as exempt from welcome tool messages',
];

$messages['qqq'] = [
	'welcome-user-page' => 'Parameters:
* $1 - the name of the user whose page the base layout is being added to',
	'welcome-message-user-staff' => 'Please translate the link texts but leave the link addresses untranslated. Wikia administrators will localise the link addresses when the localized hubs of the wikis are available.',
	'welcome-message-anon-staff' => 'Please translate the link texts but leave the link addresses untranslated. Wikia administrators will localise the link addresses when the localized hubs of the wikis are available.',
	'welcome-message-wall-user' => '$1 is the name of the page the user edited that tirggered the welcome',
	'welcome-message-wall-user-staff' => '$1 is the name of the page edited to trigger the welcome',
	'welcome-message-wall-anon' => '$1 is the name of the page the user edited that tirggered the welcome.

$2 is the talk page of the last admin who edited in the wiki.

$3 is the name of the last admin who edited in the wiki.',
	'welcome-message-wall-anon-staff' => '$1 is the name of the page the user edited that triggered the welcome.

Please translate the link texts but leave the link addresses untranslated. Wikia administrators will localise the link addresses when the localized hubs of the wikis are available.',
	'welcome-description' => 'The description of the extension displayed on the Special:Version page.',
];

$messages['ar'] = [
	'welcome-user-page' => '== معلومات عني ==

\'\'هذه هي صفحة المستخدم الخاصة بك. الرجاء تحرير هذه الصفحة لكي تعرف بنفسك! \'\'
== مساهماتي ==

* [[Special:Contributions/$1|مساهمات المستخدم]]

== قائمة صفحاتي المفضلة ==

* قم بإضافة وصلات صفحاتك المفضلة في هذه الويكي هنا!
* الصفحة المفضلة #2
* الصفحة المفضلة #3',
	'welcome-message-user' => 'أهلاً، مرحبًا بك في {{SITENAME}}! شكرًا لتعديلك صفحة [[:$1]].

اترك رسالة على [[$2|صفحة نقاشي]] إن أردت مساعدتي لأي شيء! $3',
	'welcome-message-anon' => 'أهلاً، مرحبًا في {{SITENAME}}! شكرًا لتعديلك لصفحة [[:$1]].

\'\'\'[[Special:Userlogin|رجاءً سجل دخولك وأنشئ حسابًا]]\'\'\'
إنها طريقة سهلة لتتبع مساهماتك وستساعدك على التواصل بباقي المجتمع.

رجاءً اترك لي رسالة على [[$2|صفحة نقاشي]] إن أردت مساعدتي بأي شيء! $3',
	'welcome-message-log' => 'ترحيب بمساهم جديد',
	'welcome-message-user-staff' => '==مرحبا==

مرحبا،

مرحبًا بك في {{SITENAME}} وشكرًا على تعديلك لصفحة [[:$1]]. إن احتجت المساعدة، ابدأ بتصفح [[Help:Contents|صفحات مساعدتنا]]. قم بزيارة [[w:c:community|المجتمع المركزي]] لتظل على علم [[w:c:community:Blog:Wikia_Staff_Blog|بفريق عمل المدونات]]، يمكنك الاستفسار على [[w:c:community:Special:Forum|منتدى المجتمع]]، وشاركنا [[w:c:community:Help:Webinars|نقاشاتنا على الإنترنت]]، أو دردش مع الويكيين الزملاء. تحرير سعيد! $3',
	'welcome-message-anon-staff' => '==مرحبا==

مرحبًا،

مرحبًا بك في {{SITENAME}} وشكرًا لتحريرك صفحة [[:$1]]. إننا نشجع كل المساهمين على [[Special:UserLogin|إنشاء الحسابات]]، حتى تستطيع تتبع مساهماتك، والوصول إلى خصائص ويكيا أكثر ومعرفة باقي مجتمع {{SITENAME}}.

إن احتجت المساعدة، تصفح [[Help:Contents|صفحات المساعدة]] أولاً ثم قم بزيارة [[w:c:community|المجتمع المركزي]] لمعرفة المزيد. تحرير سعيد! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|منتدى المساعدة]] | [[w:sblog|المدونة]])</small>',
	'hawelcomeedit' => 'تعديل رسالة الترحيب',
	'welcome-message-wall-user' => 'مرحبًا بك في {{SITENAME}}! شكرًا لتحريرك صفحة [[:$1]].

اترك لي رسالة إن أردت مساعدتي بأي شيء!',
	'welcome-message-wall-user-staff' => 'مرحبا،

مرحبًا بك في {{SITENAME}} وشكرًا على تعديلك لصفحة [[:$1]]. إن احتجت المساعدة، ابدأ بتصفح [[Help:Contents|صفحات مساعدتنا]]. قم بزيارة [[w:c:community|المجتمع المركزي]] لتظل على علم [[w:c:community:Blog:Wikia_Staff_Blog|بفريق عمل المدونات]]، يمكنك الاستفسار على [[w:c:community:Special:Forum|منتدى المجتمع]]، وشاركنا [[w:c:community:Help:Webinars|نقاشاتنا على الإنترنت]]، أو دردش مع الويكيين الزملاء. تحرير سعيد!',
	'welcome-message-wall-anon' => 'مرحبًا بك في {{SITENAME}}! شكرًا لتحريرك لصفحة [[:$1]].

\'\'\'[[Special:Userlogin|رجاءً سجل دخولك أو أنشئ حسابًا]]\'\'\'
إنها طريقة سهلة لتقوم بتتبع مساهماتك وسوف تساعدك على التواصل بباقي المجتمع.

الرجاء إرسال رسالة إليَّ إن أردت مساعدتي بأي شيء!',
	'welcome-message-wall-anon-staff' => 'مرحبًا بك في {{SITENAME}} وشكرًا لتحريرك صفحة [[:$1]]. إننا نشجع كل المساهمين على [[Special:UserLogin|إنشاء الحسابات]]، حتى تستطيع تتبع مساهماتك، والوصول إلى خصائص ويكيا أكثر ومعرفة باقي مجتمع {{SITENAME}}.

إن احتجت المساعدة، تصفح [[Help:Contents|صفحات المساعدة]] أولاً ثم قم بزيارة [[w:c:community|المجتمع المركزي]] لمعرفة المزيد. تحرير سعيد!',
	'welcome-description' => 'أرسل رسالة ترحيب إلى المستخدمين بعد تعديلاتهم الأولى',
];

$messages['br'] = [
	'welcome-user-page' => '==Diwar ma fenn ==

\'War ho pajenn implijer emaoc\'h. Kemmit, mar plij, ho pajenn evit en em ginnig d\'ar gumuniezh !\'\'

==Ma degasadennoù==

* [[Special:Contributions/$1|Degasadennoù an implijer]]

==Ar pajennoù plijetañ ==

* Ouzhpennañ liammoù d\'ar pajennoù plijetañ  war ar wiki amañ!
* Pajennoù plijetañ #2
* Pajennoù plijetañ #3',
	'welcome-message-user' => 'Demat, Degemer mat war {{SITENAME}} ! Trugarez da vezañ kemmet [[:$1]].

Gallout a rit lezel ur gemennadenn war ma fajenn V [[$2|kaozeal]] ma c\'hallan sikour ac\'hanoc\'h d\'ober tra pe dra ! $3',
	'welcome-message-anon' => 'Demat, degemer mat war {{SITENAME}}. Trugarez evit ho tegasadennoù er pajenn [[:$1]].

\'\'\'[[Special:Userlogin|Mar plij kevreit pe krouit ur gont]]\'\'\'. Un doare aes eo evit derc\'hel ur roud eus ho tegasadennoù hag aesaat a ra ar c\'hehentiñ gant peurest ar gumuniezh.

Arabat kaout aon kas din ur gemenadenn war [[$2|ma fajenn kaozeadenn]] ma c\'hellan sikour ac\'hanoc\'h evit tra pe dra ! $3',
	'welcome-message-log' => 'Degemer un implijer nevez',
	'welcome-message-user-staff' => '==Degemer mat==

Demat, Degemer mat war {{SITENAME}} Ho trugarekaat a reomp da vezañ kemmet ar bajenn [[:$1]].

M\'ho peus ezhomm skoazell ha ma n\'eus merour ebet amañ e c\'hallit gweladenniñ [[wikia:Forum:Community Central Forum|foromoù Wiki Kreiz ar Gumuniezh]] $3',
	'welcome-message-anon-staff' => '==Degemer mat ! ==

Demat, Degemer mat war {{SITENAME}}; Trugarez da vezañ kemmet ar bajenn [[:$1]].

\'\'\'[[Special:Userlogin|Please sign in and create a user name]]\'\'\'. Un doare aes eo evit mirout roudoù eus ho labourioù hag evel-se e c\'hallot mont e darempred gant ar peurrest eus ar gumuniezh.

M\'ho peus ezhomm skoazell ha ma n\'eus merour ebet amañ e c\'hallit gweladenniñ ar [[wikia:Forum:Community Central Forum|foromoù Kreiz ar Gumuniezh]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|forom skoazellañ]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Demat, Degemer mat war {{SITENAME}} ! Trugarez da vezañ kemmet [[:$1]].

Gallout a rit lezel ur gemennadenn din ma c\'hallan sikour ac\'hanoc\'h d\'ober tra pe dra !',
	'welcome-description' => 'Kas ur gemennadenn degemer mat d\'an implijerien goude o aozadennoù kentañ',
];

$messages['ca'] = [
	'welcome-user-page' => '==Sobre mi==

\'\'Aquesta es la teva pàgina d\'usuari. Edita-la per parlar sobre tu a la comunitat!

==Les meves contribucions==

* [[Special:Contributions/$1|Contribucions de l\'usuari]]

==Les meves pàgines preferides==

* Afegeix aquí enllaços cap a les teves pàgines preferides d\'aquest wiki!
* Pàgina preferida #2
* Pàgina preferida #3',
	'welcome-message-user' => 'Hola, benvingut/da a {{SITENAME}}! Moltes gràcies per la teva edició a [[:$1]].

Si us plau, deixa un missatge a la [[$2|meva discussió]] si et puc ajudar en alguna cosa! $3',
	'welcome-message-anon' => 'Hola, benvingut/da a {{SITENAME}}! Moltes gràcies per la teva edició a [[:$1]].

Per què no et \'\'\'[[Special:Userlogin|crees un compte i t\'identifiques?]]\'\'\' D\'aquesta manera serà molt més fàcil saber quines pàgines has editat i se t\'atribuirà la teva feina; a més, et serà molt més fàcil comunicar-te amb la resta de comunitat.

Si us plau, deixa un missatge a la [[$2|meva discussió]] si et puc ajudar en alguna cosa! $3',
	'welcome-message-log' => 'Benvinguda',
	'welcome-message-user-staff' => '== Benvingut ==
Hola, benvingut a {{SITENAME}}! Gràcies per editar a la pàgina [[:$1]].

Si necessites ajuda, dóna un cop d\'ull a les nostres [[Help:Contents|pàgines d\'ajuda]]. Visita la [[w:c:community|Comunitat Central]] per estar informat del nostre [[w:c:community:Blog:Wikia_Staff_Blog|blog de l\'Staff]], fes preguntes al nostre [[w:c:community:Special:Forum|fòrum comunitari]], participa a les nostres [[w:c:community:Help:Webinars|sèries web]], o xateja amb els teus amics de Wikia. Que t\'ho passis bé editant! $3',
	'welcome-message-anon-staff' => '== Benvingut ==
Hola, benvingut a {{SITENAME}}. Gràcies per editar a la pàgina [[:$1]].

Recomanem a tots els col·laboradors que [[Special:UserLogin|es registrin i creïn un compte]]. Així podràs mantenir un registre de les teves contribucions, accedir a més característiques de Wikia i podràs conèixer la resta de la comunitat de {{SITENAME}}.

Si necessites ajuda, visita primer les nostres [[Help:Contents|pàgines d\'ajuda]] i després la [[w:c:community|Central de la comunitat]] per saber més. Que t\'ho passis bé editant! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|fòrums d\'ajuda]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Hola, benvingut/da a {{SITENAME}}! Moltes gràcies per la teva edició a [[:$1]].

Si us plau, si tens algun dubte deixa un missatge al meu mur i t\'intentaré ajudar.',
	'welcome-message-wall-user-staff' => 'Hola, benvingut/da a {{SITENAME}}! Moltes gràcies per la teva edició a [[:$1]].

Visita la [[w:c:ca|Comunitat Central]] per a mantenir-te informat amb el nostre [[w:c:ca:Blog:Actualitzacions_tècniques|blog del personal]], fes preguntes al nostre [[w:c:ca:Special:Forum|fòrum de la comunitat]], participa a les nostres [[w:c:community:Help:Webinars|sèries web]], o conversa en directe amb els teus amics de Wikia. Que et diverteixis!',
	'welcome-message-wall-anon' => 'Hola, benvingut/da a {{SITENAME}}! Moltes gràcies per la teva edició a [[:$1]].

Per què no et \'\'\'[[Special:Userlogin|crees un compte i t\'identifiques?]]\'\'\' D\'aquesta manera serà molt més fàcil saber quines pàgines has editat i se t\'atribuirà la teva feina; a més, et serà molt més fàcil comunicar-te amb la resta de comunitat.

Si us plau, deixa un missatge al meu mur si et puc ajudar en alguna cosa!',
	'welcome-message-wall-anon-staff' => 'Hola,

Benvingut a {{SITENAME}} i gràcies per la teva edició a la pàgina [[:$1]]!

Per què no et \'\'\'[[Special:UserLogin|crees un compte d\'usuari i t\'identifiques]]\'\'\'?, D\'aquesta manera serà molt més fàcil saber quines pàgines has editat i atribuir-te la feina, podràs accedir a moltes funcionalitats de Wikia i donar-te a conèixer a la comunitat de {{SITENAME}}.

Si necessites ajuda, fes un cop d\'ull primer a les nostres [[Help:Contents|pàgines d\'ajuda]] i després visita la [[w:c:community|Comunitat Central]] per aprendre\'n més. Que et diverteixis!',
	'welcome-description' => 'Envia un missatge de benvinguda als usuaris després de la seva primera edició',
];

$messages['cs'] = [
	'welcome-user-page' => '==O mně==

\'\'Toto je Vaše uživatelská stránka. Upravte ji, aby o Vás komunita věděla!\'\'

==Mé příspěvky==

* [[Special:Contributions/{{PAGENAME}}|Příspěvky uživatele]]

==Mé oblíbené stránky==

* Přidejte sem odkazy na své oblíbené stránky
* Odkaz #2
* Odkaz #3',
	'welcome-message-user' => 'Vítejte na {{SITENAME}}! Děkujeme za Vaší úpravu stránky [[:$1]].

Prosím nechejte vzkaz na [[$2|mé diskuzní stránce]], pokud potřebujete s čímkoliv pomoci! $3',
	'welcome-message-anon' => 'Vítejte na {{SITENAME}}! Děkujeme za Vaší úpravu stránky [[:$1]].

\'\'\'[[Special:Userlogin|Prosím, zaregistrujte se]]\'\'\'.
Je to snadný způsob, jak sledovat své příspěvky a komunikovat s komunitou.

Prosím nechejte vzkaz na [[$2|mé diskuzní stránce]], pokud potřebujete s čímkoliv pomoci! $3',
	'welcome-message-log' => 'přivítání nového přispěvatele',
	'welcome-message-user-staff' => '==Vítejte==

Vítejte na {{SITENAME}}! Děkujeme za Vaší úpravu stránky [[:$1]].

Pokud potřebujete pomoci a nejsou zde žádní administrátoři, můžete navštívit [[wikia:Forum:Community Central Forum|fórum na Community
Central Wiki]] $3',
	'welcome-message-anon-staff' => '==Vítejte==

Vítejte na {{SITENAME}}! Děkujeme za Vaší úpravu stránky [[:$1]].

\'\'\'[[Special:UserLogin|Prosím, zaregistrujte se]]\'\'\'.
Je to snadný způsob, jak sledovat své příspěvky a komunikovat s komunitou.

Pokud potřebujete pomoci a nejsou zde žádní administrátoři, můžete navštívit [[wikia:Forum:Community Central Forum|fórum na Community
Central Wiki]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|fórum podpory]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
];

$messages['de'] = [
	'welcome-user-page' => '== Über mich ==

\'\'Dies ist deine Benutzerseite. Hier kannst du anderen etwas über dich verraten!\'\'

== Meine Beiträge ==

* [[Special:Contributions/$1|Benutzerbeiträge]]

== Meine beliebtesten Seiten ==

* Hier kannst du Links zu deinen beliebtesten Seiten im Wiki hinzufügen!
* Link auf zweite beliebte Seite
* Link auf dritte beliebte Seite',
	'welcome-message-user' => 'Hi, {{SITENAME}} freut sich, dass du zu uns gestoßen bist! Danke für deine Bearbeitung auf der Seite [[:$1]].

Falls du irgendwelche Hilfe brauchen solltest, kannst du mir gerne eine Nachricht auf [[$2|meiner Diskussionsseite]] hinterlassen! $3',
	'welcome-message-anon' => 'Hi, {{SITENAME}} freut sich, dass du zu uns gestoßen bist! Danke für deine Bearbeitung auf der Seite [[:$1]].

\'\'\'[[Special:Userlogin|Bitte lege dir ein Benutzerkonto an]]\'\'\'. So kannst du ganz einfach deine Beiträge im Überblick behalten und dich besser mit dem Rest der Community verständigen.

Falls du irgendwelche Hilfe brauchen solltest, kannst du mir gerne eine Nachricht auf [[$2|meiner Diskussionsseite]] hinterlassen! $3

----
PS: Mit diesem Benutzerkonto kannst du in jedem Wiki bei [[w:c:de|Wikia]] aktiv sein - du brauchst dich nicht nochmal neu anmelden.',
	'welcome-message-log' => 'Begrüßung eines neuen Autors',
	'welcome-message-user-staff' => '==Willkommen==

Hi, Willkommen bei {{SITENAME}}! Danke für deine Bearbeitung auf der Seite [[:$1]].

Wenn du Hilfe brauchst, und kein Admin von hier in der Nähe ist, möchtest du vielleicht das [[w:c:de.community:Forum:Übersicht|deutschsprachige Wikia-Forum]] besuchen. Falls du an Neuigkeiten rund um Wikia interessiert bist, wirf doch einen Blick in das [[w:c:de.community:Blog:Wikia_Deutschland_News|Wikia Deutschland Blog]]. $3',
	'welcome-message-anon-staff' => '==Willkommen==

Hi, Willkommen bei {{SITENAME}}! Danke für deine Bearbeitung auf der Seite [[:$1]].

\'\'\'[[Special:Userlogin|Bitte lege dir ein Benutzerkonto an]]\'\'\'. So kannst du ganz einfach deine Beiträge im Überblick behalten und dich besser mit dem Rest der Community verständigen.

Wenn du Hilfe brauchst, und kein Admin von hier in der Nähe ist, möchtest du vielleicht das [[w:c:de.community:Forum:Übersicht|deutschsprachige Wikia-Forum]] besuchen. Falls du an Neuigkeiten rund um Wikia interessiert bist, wirf doch einen Blick in das [[w:c:de.community:Blog:Wikia_Deutschland_News|Wikia Deutschland Blog]]. $3

----
PS: Mit diesem Benutzerkonto kannst du in jedem Wiki bei [[w:c:de|Wikia]] aktiv sein - du brauchst dich nicht nochmal neu anmelden.',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|Hilfe]] | [[w:sblog|Blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Hi, Willkommen im {{SITENAME}}! Danke für deine Bearbeitung auf der Seite [[:$1]]. 

Viel Spaß im Wiki! Falls ich dir irgendwie helfen kann, hinterlass mir einfach eine Nachricht.',
	'welcome-message-wall-user-staff' => 'Hi, Willkommen im {{SITENAME}}! Danke für deine Bearbeitung auf der Seite [[:$1]].

Falls du Hilfe brauchst und keine aktiven Admins im Wiki findest, kannst du auch unser [[w:c:de.community:Spezial:Forum|Forum in der Community Deutschland]] besuchen. Wenn du an aktuellen Informationen rund um Wikia interessiert bist, dann solltest du das [[w:c:de.community:Blog:Wikia_Deutschland_News|Wikia Deutschland News-Blog]] lesen.

Viel Spaß im Wiki!',
	'welcome-message-wall-anon' => 'Hi, Willkommen im {{SITENAME}}! Danke für deine Bearbeitung auf der Seite [[:$1]].

\'\'\'[[Special:Userlogin|Bitte melde dich an und erstelle ein Benutzerkonto]]\'\'\'. So kannst du ganz einfach einen Überblick über deine Beiträge behalten und es hilft sehr dabei, mit dem Rest der Community zu kommunizieren.

Viel Spaß im Wiki! Falls ich dir irgendwie helfen kann, hinterlass mir einfach eine Nachricht.',
	'welcome-message-wall-anon-staff' => 'Hallo und willkommen auf {{SITENAME}}! Danke für deine Bearbeitung auf der Seite [[:$1]].

Wir fänden es gut, wenn du [[Special:UserLogin|dir ein Benutzerkonto anlegst]]. So kannst du ganz einfach deine Beiträge im Überblick behalten, hast mehr Funktionen zur Verfügung und bist für den Rest der Wiki-Gemeinschaft erkennbar.

Falls du Hilfe brauchst, schau dir zuerst die [[Hilfe:Übersicht|Hilfe-Seiten]] an und besuche [[w:c:de.community|die deutsche Wikia-Community]], um mehr zu erfahren. Viel Spaß noch!',
	'welcome-description' => 'Sendet eine Willkommensnachricht an Benutzer nach ihren ersten Bearbeitungen',
];

$messages['de-formal'] = [
	'welcome-user-page' => '== Über mich ==

\'\'Dies ist Ihre Benutzerseite. Hier können Sie anderen etwas über sich verraten!\'\'

== Meine Beiträge ==

* [[Special:Contributions/$1|Benutzerbeiträge]]

== Meine beliebtesten Seiten ==

* Hier können Sie Links zu Ihren beliebtesten Seiten im Wiki hinzufügen!
* Link auf zweite beliebte Seite
* Link auf dritte beliebte Seite',
	'welcome-message-user' => 'Guten Tag, {{SITENAME}} freut sich, dass Sie zu uns gestoßen sind! Danke für Ihre Bearbeitung auf der Seite [[:$1]].

Falls Sie irgendwelche Hilfe brauchen sollten, können Sie mir gerne eine Nachricht auf [[$2|meiner Diskussionsseite]] hinterlassen! $3',
	'welcome-message-anon' => 'Guten Tag, Willkommen bei {{SITENAME}}! Danke für Ihre Bearbeitung auf der Seite [[:$1]].

\'\'\'[[Special:Userlogin|Bitte legen Sie sich ein Benutzerkonto an]]\'\'\'. So können Sie ganz einfach Ihre Beiträge im Überblick behalten und sich besser mit dem Rest der Gemeinschaft verständigen.

Falls Sie irgendwelche Hilfe brauchen, können Sie mir gerne eine Nachricht auf [[$2|meiner Diskussionsseite]] hinterlassen! $3',
	'welcome-message-user-staff' => '==Willkommen==

Guten Tag, Willkommen bei {{SITENAME}}! Danke für Ihre Bearbeitung auf der Seite [[:$1]].

Wenn Sie Hilfe brauchen, und kein Admin von hier in der Nähe ist, möchten Sie vielleicht
die [[wikia:Forum:Community Central Forum|Foren des Community Zentralwikis]] besuchen $3',
	'welcome-message-anon-staff' => '==Willkommen==

Guten Tag, Willkommen bei {{SITENAME}}! Danke für Ihre Bearbeitung der Seite „[[:$1]]“.

\'\'\'[[Special:UserLogin|Bitte legen Sie sich ein Benutzerkonto an]]\'\'\'. So können Sie ganz einfach Ihre Beiträge im Überblick behalten und sich besser mit dem Rest der Gemeinschaft verständigen.

Wenn Sie Hilfe brauchen, und kein Admin von hier in der Nähe ist, möchten Sie vielleicht die [[wikia:Forum:Community Central Forum|Foren des Community Zentralwikis]] besuchen $3',
];

$messages['diq'] = [
	'welcome-message-log' => 'Cıkerdoğê newey rê xeyrvatış',
	'hawelcomeedit' => 'HAXeyrAmeyVurnayış',
	'welcome-message-wall-anon' => 'Merheba, Şıma xeyr ameyê {{SITENAME}}! pela [[:$1]] vurnayê deye şıma rê teşekur kemê.

\'\'\'[[Special:Userlogin|Şıma ra recay ma dekewe sita yana xorê jew nameyê karberiyo newe  vırazê]]\'\'\'. Şıma eno hesaba şenê merdumana irtibat kewê u iştıraxin bıkerê deye tewr rehat ju raya.

Persiyayışa pêron rê ez şımarê peşti dana!',
];

$messages['es'] = [
	'welcome-user-page' => '==Sobre mí==

\'\'Esta es tu página de usuario. ¡Edítala para hablar sobre ti a la comunidad!\'\'

==Mis contribuciones==

* [[Special:Contributions/$1|Contribuciones del usuario]]

==Mis páginas favoritas==

* ¡Añade aquí los vínculos a las páginas favoritas del wiki!
* Página favorita #2
* Página favorita #3',
	'welcome-message-user' => '¡Hola, bienvenid{{<includeonly>safesubst:</includeonly>GENDER:{{<includeonly>safesubst:</includeonly>#titleparts:{{<includeonly>safesubst:</includeonly>PAGENAME}}|1}}|o|a|o(a)}} a {{SITENAME}}! Muchas gracias por tu edición en [[:$1]].

¡Por favor, deja un mensaje en [[$2|mi discusión]] si quieres que te ayude con cualquier cosa! $3',
	'welcome-message-anon' => '¡Hola, bienvenido(a) a {{SITENAME}}! Muchas gracias por tu edición en [[:$1]]. 

¿Por qué no \'\'\'[[Special:Userlogin|te creas una cuenta y te identificas?]]\'\'\'. De esta forma será mucho más fácil saber qué páginas has editado y se te atribuirá tu trabajo en el wiki, además te será de ayuda a la hora de comunicarte con el resto de la comunidad.

Por favor, si tienes alguna duda, no seas tímido, deja un mensaje en [[$2|mi discusión]] para ver si puedo ayudarte con cualquier cosa. $3',
	'welcome-message-log' => 'Bienvenida',
	'welcome-message-user-staff' => '==Bienvenido==

Hola, ¡bienvenido a {{SITENAME}}! Gracias por editar la página [[:$1]].

Si necesitas ayuda y no hay administradores locales aquí, quizás quieras visitar los [[w:c:comunidad:Foro:Índice|foros de la Comunidad de Wikia en español]]. $3',
	'welcome-message-anon-staff' => '==Bienvenido==

Hola, bienvenido a {{SITENAME}}. Gracias por editar la página [[:$1]].

\'\'\'[[Special:Userlogin|Por favor regístrese y cree un nombre de usuario]]\'\'\'. Es una forma sencilla de mantener un registro de sus contribuciones y para ayudar a comunicarnos con el resto de la comunidad.

Si necesita ayuda y no hay administradores locales aquí, quizás quiera visitar los [[w:c:comunidad:Foro:Índice|foros de la Comunidad de Wikia en español]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|foro de ayuda]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HaWelcomeEdit',
	'welcome-message-wall-user' => 'Hola, ¡bienvenido a {{SITENAME}}! Gracias por tu edición en la página $1.

Por favor, ¡déjame un mensaje si puedo ayudarte con cualquier cosa!',
	'welcome-message-wall-user-staff' => '¡Hola, bienvenido a {{SITENAME}}! Gracias por tu edición en la página $1.

Si necesitas ayuda, y no hay ningún administrador local por aquí, podrías querer visitar los [[w:c:comunidad:Foro:Índice|foros de la Central de Wikia en español]]. También podrías estar interesado en revisar nuestro [[w:c:comunidad:Blog:Noticias_de_Wikia|blog del staff]] para estar al tanto de las últimas novedades y noticias sobre Wikia.

No olvides que puedes contactar con el staff de Wikia a través de [[especial:contactar]] y te atenderemos directamente por email.

¡Diviértete!',
	'welcome-message-wall-anon' => '¡Hola, bienvenido a {{SITENAME}}! Gracias por tu edición en la página $1.

\'\'\'[[Special:Userlogin|Por favor, identifícate o crea una nueva cuenta de usuario]]\'\'\'. Es una forma fácil de mantener un registro de todas tus contribuciones y te ayudará a comunicarte con el resto de la comunidad.

Por favor, ¡déjame un mensaje si puedo ayudarte con cualquier cosa!',
	'welcome-message-wall-anon-staff' => 'Hola, ¡bienvenido a {{SITENAME}}! Gracias por tu edición en la página [[:$1]].

\'\'\'[[Special:Userlogin|Por favor, identifícate o crea una nueva cuenta de usuario]]\'\'\'. Es una forma fácil de mantener un registro de tus contribuciones y te ayudará a comunicarte con el resto de la comunidad.

No olvides que puedes contactar con el staff de Wikia a través de [[especial:contactar]] y te atenderemos directamente por email.

Por favor, déjame un mensaje si puedo ayudarte con cualquier cosa.',
	'welcome-description' => 'Envía un mensaje a todos los usuarios después de realizar su primera edición.',
];

$messages['et'] = [
	'welcome-user-page' => '== Minust ==
"See on sinu kasutaja lehekülg. Palun kirjuta siia leheküljele endast, et tutvustada ennast kogukonnale! "
== Minu kaastööd ==
* [[Special:Contributions/$1|Kasutaja kaastööd]]
== Lemmik leheküljed ==
* Lisa  viki lemmik lehekülje lingid siia!
 * lemmik lehekülg # 2
 * lemmik lehekülg # 3',
];

$messages['fa'] = [
	'welcome-user-page' => '[[File:Placeholder|thumb|300px]]
==دربارۀ من==
\'\'
این صفحۀ کاربری شما است. لطفا این صفحه را ویرایش کنید و کمی دربارۀ خودتان به دیگر کاربران بگویید!\'\'

==مشارکت‌های من==

* [[Special:Contributions/{{PAGENAME}}|مشارکت‌های کاربر]]

==صفحات محبوب من==

*پیوند صفحه‌های محبوب خود را در اینجا قرار دهید!
* صفحۀ محبوب #۲
* صفحۀ محبوب #۳',
	'welcome-message-user' => '==خوش‌آمدید==
سلام، به {{SITENAME}} خوش‌آمدید! متشکر از ویرایش شما در صفحۀ [[:$1]].

اگر کمکی نیاز داشتید می‌توانید در [[$2|صفحۀ بحثم]] از من بپرسید.  $3',
	'welcome-message-anon' => 'سلام، به {{SITENAME}} خوش‌آمدید. متشکر از ویرایش شما در صفحۀ [[:$1]].

لطفا \'\'\'[[Special:Userlogin|حساب کاربری ایجاد کنید و وارد سیستم شوید]]\'\'\'. این کار به شما کمک می‌کند که ویرایش‌های خود را نگهداری کنید و به راحتی با دیگر کاربران در ارتباط باشید.

اگر سوالی داشتید می‌توانید از من در [[$2|صفحۀ بحثم]] بپرسید! $3',
	'welcome-message-log' => 'خوش‌آمدگویی کاربر جدید',
];

$messages['fi'] = [
	'welcome-user-page' => '==Tietoa minusta==

\'\'Tämä on käyttäjäsivusi. Muokkaa tätä sivua ja kerro yhteisölle itsestäsi!\'\'

==Omat muokkaukset==

* [[Special:Contributions/$1|Käyttäjän muokkaukset]]

==Omat suosikkisivut==

* Lisää linkki suosikkisivuillesi tässä wikissä tähän.
* Suosikkisivu #2
* Suosikkisivu #3',
	'welcome-message-user' => 'Hei ja tervetuloa sivustolle {{SITENAME}}! Kiitos, että muokkasit sivua [[:$1]].

Jos vain jotenkin voin auttaa, niin laita viesti [[$2|keskustelusivulleni]]! $3',
	'welcome-message-anon' => 'Hei ja tervetuloa sivustolle {{SITENAME}}! Kiitos, että muokkasit sivua [[:$1]].

\'\'\'[[Special:Userlogin|Kirjaudu sisään tai luo tunnus]]\'\'\'. Se on helppo tapa pitää kirjaa omista muokkauksistasi ja helpottaa sinua kommunikoimaan yhteisössä.

Jos vain jotenkin voin auttaa, niin laita viesti [[$2|keskustelusivulleni]]! $3',
	'welcome-message-log' => 'tervetuloa uusi muokkaaja',
	'welcome-message-user-staff' => '==Tervetuloa==

Hei,

Tervetuloa sivustolle {{SITENAME}}. Kiitos, että muokkasit sivua [[:$1]]. Jos tarvitset apua, aloita katsomalla meidän [[Help:Contents|ohjesivujamme]]. Käy [[w:c:community|Community Centralissa]] pysyäksesi ajan tasalla [[w:c:community:Blog:Wikia_Staff_Blog|henkilökunnan blogista]], kysyäksesi kysymyksiä meidän [[w:c:community:Special:Forum|yhteisöfoorumeillamme]], osallistuaksesi [[w:c:community:Help:Webinars|webinaarisarjoihimme]], tai keskustellaksesi muiden wikialaisten kanssa. Iloisia muokkaamisia! $3',
	'welcome-message-anon-staff' => '== Tervetuloa ==

Hei,

Tervetuloa sivustolle {{SITENAME}} ja kiitos, että muokkasit sivua [[:$1]]. Suosittelemme kaikille osallistujille [[Toiminnot:Kirjaudu_sisään|käyttäjätunnuksen luomista]] jotta voisit helpommin pitää lukua muokkauksistasi, päästä käsiksi useampiin Wikia-ominaisuuksiin sekä tutustua tämän wikin yhteisöön.

Mikäli tarvitset apua, tutustu ensin [[Ohje:Sisällöt|ohjesivuihin]] ja vieraile sitten [[w:c:yhteiso|Yhteisöwikissä]] saadaksesi lisätietoja. Mukavaa muokkaamista! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:c:yhteiso:foorumi|foorumi]] | [[w:c:yhteiso:wblogi|blogi]])</small>',
	'welcome-message-wall-user' => 'Hei, tervetuloa sivustolle {{SITENAME}}! Kiitos muokkauksestasi sivulle [[:$1]].

Voit jättää minulle vapaasti viestiä, jos sinulle tulee vastaan ongelmia!',
	'welcome-description' => 'Lähettää tervetuloviestin ensimmäisen muokkasensa tehneille käyttäjille',
];

$messages['fo'] = [
	'welcome-message-user' => 'Hey, vælkomin til {{SITENAME}}! Takk fyri tína rætting til [[:$1]] síðuna.

Skriva eini boð á [[$2|mínari kjaksíðu]] um eg kann hjálpa tær við nøkrum! $3',
	'welcome-message-log' => 'bjóða nýggjum redaktørum vælkomnum',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Hey, vælkomin til {{SITENAME}}! Takk fyri tína rætting til [[:$1]] síðuna.

Skriva mær eini boð um eg kann hjálpa tær við nøkrum!',
	'welcome-description' => 'Sendir eina vælkomuheilsan til brúkarar eftir teirra fyrstu rættingar',
];

$messages['fr'] = [
	'welcome-user-page' => '== Sur moi ==

\'\'Ceci est votre page utilisateur. Vous pouvez y ajouter des informations vous concernant !\'\'

== Mes contributions ==

* [[Special:Contributions/$1|Mes contributions]]

== Mes pages préférées ==

* Vous pouvez placer ici des liens vers vos pages préférées du wiki !
* Lien vers la page #2
* Lien vers la page #3',
	'welcome-message-user' => 'Bonjour et bienvenue sur {{SITENAME}} ! Merci d\'avoir modifié la page [[:$1]].

N’hésite pas à laisser un message sur ma [[$2|page de discussion]] si je peux t’aider pour quoi que ce soit ! $3',
	'welcome-message-anon' => 'Bonjour et bienvenue sur {{SITENAME}} ! Merci d’avoir modifié la page [[:$1]].

\'\'\'[[Special:Userlogin|Enregistre-toi et crée un compte utilisateur]]\'\'\'. C’est un moyen simple de garder une trace de tes contributions et faciliter la communication avec le reste de la communauté.

N’hésite pas à laisser un message sur [[$2|ma page de discussion]] si je peux t’aider pour quoi que ce soit ! $3',
	'welcome-message-log' => 'accueil nouveau contributeur',
	'welcome-message-user-staff' => '==Bienvenue==
Bonjour et bienvenue sur {{SITENAME}} ! Merci d’avoir modifié la page [[:$1]]. Si tu as besoin d\'aide, consulte nos [[Aide:Contenu|pages d\'aide]] ou contacte un [[Special:Listusers/sysop|administrateur du wikia]]. S\'il n\'y a pas d\'administrateur actif ici, rends-toi sur le [[w:fr:Accueil|Centre des communautés]] et consulte le [[w:fr:Special:Forum|forum]].

Tu peux aussi consulter le blog « [[w:fr:Blog:Actualité Wikia|Actualité Wikia]] » pour rester informé des dernières nouvelles et derniers évènements sur Wikia.

Tous ces liens sont un bon moyen de commencer à explorer Wikia.

Bonnes modifications ! $3',
	'welcome-message-anon-staff' => 'Bonjour et bienvenue sur {{SITENAME}} ! Merci d’avoir modifié la page [[:$1]].

Nous encourageons tous les contributeurs à [[Special:UserLogin|créer un compte utilisateur]], tu peux ainsi garder un suivi de tes contributions, accéder à plus de fonctionnalités de Wikia et connaître le reste de la communauté.

Si tu as besoin d\'aide, consulte nos [[Aide:Contenu|pages d\'aide]] ou contacte un [[Special:ListUsers/sysop|administrateur ici]]. Si aucun administrateur n\'est actif, visite le [[w:fr:Accueil|Centre des communautés]] et consulte le [[w:fr:Special:Forum|forum]].

Bonnes modifications ! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|forum d’aide]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Bonjour et bienvenue sur {{SITENAME}} ! Merci d’avoir modifié la page [[:$1]].

Tu peux me laisser un message si je peux t’aider pour quoi que ce soit !',
	'welcome-message-wall-user-staff' => 'Bonjour et bienvenue sur {{SITENAME}} ! Merci d’avoir modifié la page [[:$1]]. Si tu as besoin d\'aide, consulte nos [[Aide:Contenu|pages d\'aide]] ou contacte un [[Special:Listusers/sysop|administrateur du wikia]]. S\'il n\'y a pas d\'administrateur actif ici, rends-toi sur le [[w:fr:Accueil|Centre des communautés]] et consulte le [[w:fr:Special:Forum|forum]].

Tu peux aussi consulter le blog « [[w:fr:Blog:Actualité Wikia|Actualité Wikia]] » pour rester informé des dernières nouvelles et derniers évènements sur Wikia.

Tous ces liens sont un bon moyen de commencer à explorer Wikia.

Bonnes modifications !',
	'welcome-message-wall-anon' => 'Bonjour et bienvenue sur {{SITENAME}} ! Merci d’avoir modifié la page [[:$1]].

\'\'\'[[Special:Userlogin|Enregistre-toi et crée un compte utilisateur]]\'\'\'. C’est un moyen simple de garder une trace de tes contributions et faciliter la communication avec le reste de la communauté.

Tu peux me laisser un message si je peux t’aider pour quoi que ce soit !',
	'welcome-message-wall-anon-staff' => 'Bonjour et bienvenue sur {{SITENAME}} ! Merci d’avoir modifié la page [[:$1]].

Nous encourageons tous les contributeurs à se [[Special:UserLogin|créer un compte utilisateur]], tu peux ainsi garder un suivi de tes contributions, accéder à plus de fonctionnalités de Wikia et connaître le reste de la communauté.

Si tu as besoin d\'aide, consulte nos [[Aide:Contenu|pages d\'aide]] ou contacte un [[Special:ListUsers/sysop|administrateur ici]]. Si aucun administrateur n\'est actif, visite le [[w:fr:Accueil|Centre des communautés]] et consulte le [[w:fr:Forum|forum]].

Bonnes modifications !',
	'welcome-description' => 'Envoie un message d’accueil aux utilisateurs après leurs premières modifications',
];

$messages['gl'] = [
	'welcome-user-page' => '==Sobre min==

\'\'Esta é a túa páxina de usuario. Edita esta páxina para contarlles aos demais o que queiras acerca de ti!\'\'

==As miñas contribucións==

* [[Special:Contributions/$1|Contribucións de usuario]]

==As miñas páxinas favoritas==

* Engade aquí as ligazóns cara ás túas páxinas preferidas deste wiki!
* Páxina favorita nº2
* Páxina favorita nº3',
	'welcome-message-user' => 'Ola, dámosche a benvida a {{SITENAME}}! Grazas pola túa edición na páxina "[[:$1]]".

Por favor, deixa unha mensaxe [[$2|na miña páxina de conversa]] se necesitas axuda con algunha cousa! $3',
	'welcome-message-anon' => 'Ola, dámosche a benvida a {{SITENAME}}! Grazas pola túa edición na páxina "[[:$1]]".

\'\'\'Por favor, [[Special:Userlogin|rexístrate e crea unha conta de usuario]]\'\'\'.
É un xeito doado de manter baixo control as túas achegas e axuda á comunicación co resto da comunidade.

Por favor, deixa unha mensaxe [[$2|na miña páxina de conversa]] se necesitas axuda con algunha cousa! $3',
	'welcome-message-log' => 'benvida ao novo colaborador',
	'welcome-message-user-staff' => '==Reciba a nosa benvida==

Boas:

Dámoslle a benvida a {{SITENAME}} e agradecemos a súa edición na páxina "[[:$1]]". Se necesita axuda, empece consultando as [[Help:Contents|páxinas de axuda]]. Visite a [[w:c:community|central da comunidade]] para informarse a través do [[w:c:community:Blog:Wikia_Staff_Blog|blogue do persoal]], facer preguntas no noso [[w:c:community:Special:Forum|foro comunitario]], participar na nosa [[w:c:community:Help:Webinars|serie webinar]] ou conversar en tempo real con outros compañeiros de Wikia. Páseo ben! $3',
	'welcome-message-anon-staff' => '==Reciba a nosa benvida==

Boas:

Dámoslle a benvida a {{SITENAME}} e agradecemos a súa edición na páxina "[[:$1]]". Animamos a todos os colaboradores a [[Special:UserLogin|crear unha conta de usuario]], un xeito doado de manter baixo control as súas achegas, acceder a máis características de Wikia e axudar a darse a coñecer no resto da comunidade de {{SITENAME}}.

Se necesita axuda, consulte as [[Help:Contents|páxinas de axuda]] e logo visite a [[w:c:community|central da comunidade]] para aprender máis cousas. Páseo ben! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|foro de axuda]] | [[w:sblog|blogue]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Ola, dámosche a benvida a {{SITENAME}}! Grazas pola túa edición na páxina "[[:$1]]".

Por favor, déixame unha mensaxe se necesitas axuda con algunha cousa!',
	'welcome-message-wall-user-staff' => 'Boas:

Dámoslle a benvida a {{SITENAME}} e agradecemos a súa edición na páxina "[[:$1]]". Se necesita axuda, empece consultando as [[Help:Contents|páxinas de axuda]]. Visite a [[w:c:community|central da comunidade]] para informarse a través do [[w:c:community:Blog:Wikia_Staff_Blog|blogue do persoal]], facer preguntas no noso [[w:c:community:Special:Forum|foro comunitario]], participar na nosa [[w:c:community:Help:Webinars|serie webinar]] ou conversar en tempo real con outros compañeiros de Wikia. Páseo ben!',
	'welcome-message-wall-anon' => 'Ola, dámosche a benvida a {{SITENAME}}! Grazas pola túa edición na páxina "[[:$1]]".

\'\'\'Por favor, [[Special:Userlogin|rexístrate e crea unha conta de usuario]]\'\'\'. É un xeito doado de manter baixo control as túas achegas e axuda á comunicación co resto da comunidade.

Por favor, déixame unha mensaxe se queres que che axude con algunha cousa!',
	'welcome-message-wall-anon-staff' => 'Boas:

Dámoslle a benvida a {{SITENAME}} e agradecemos a súa edición na páxina "[[:$1]]". Animamos a todos os colaboradores a [[Special:UserLogin|crear unha conta de usuario]], un xeito doado de manter baixo control as súas achegas, acceder a máis características de Wikia e axudar a darse a coñecer no resto da comunidade de {{SITENAME}}.

Se necesita axuda, consulte as [[Help:Contents|páxinas de axuda]] e logo visite a [[w:c:community|central da comunidade]] para aprender máis cousas. Páseo ben!',
	'welcome-description' => 'Envía unha mensaxe de benvida aos usuarios despois das súas primeiras edicións',
];

$messages['he'] = [
	'welcome-user-page' => '==עליי==
\'\'זה דף המשתמש שלך. כדאי לערוך דף זה כדי שמשתמשים אחרים יוכלו לדעת עליך יותר!\'\'

==התרומות שלי==
*[[Special:Contributions/$1|העריכות שלך]]

==הדפים האהובים עליי==
* הוסף כאן קישור לדפים האהובים עליך או דפים שיצרת.
* [[דף אהוב שני]]
* [[דף אהוב שלישי]]',
	'welcome-message-user' => 'שלום, ברוך הבא ל{{SITENAME}}. תודה על תרומתך בדף [[:$1]].

במידה ואתה זקוק לעזרה כלשהי, אנא השאר הודעה ב[[$2|דף השיחה שלי]], $3',
	'welcome-message-anon' => 'שלום, ברוך הבא ל{{SITENAME}}. תודה על תרומתך בדף [[:$1]].

\'\'\'[[מיוחד:התחברות לחשבון|רצוי להרשם לאתר וליצור משתמש]]\'\'\'. הרשמות היא דרך נוחה לעקוב אחרי עריכות ועוזרת לך לתקשר עם שאר הקהילה.

במידה ואתה זקוק לעזרה כלשהי, אנא השאר הודעה ב[[$2|דף השיחה שלי]], $3',
	'welcome-message-log' => 'ברך משתמש חדש',
];

$messages['hu'] = [
	'welcome-user-page' => '== Magamról ==

\'\'Ez a felhasználólapod. Kérlek szerkeszd ezt a lapot és írj magadról a közösségnek!\'\'

== Közreműködéseim  ==

* [[Special:Contributions/$1|Felhasználó közreműködései]]

== Kedvenc lapjaim ==

* Adj meg hivatkozásokat a kedvenc wiki lapjaidra!
* Második kedvenc lap
* Harmadik kedvenc lap',
	'welcome-message-user' => 'Szia, üdvözlünk a(z) {{SITENAME}} wikin! Köszönjük a(z) [[:$1]] lapon tett szerkesztésedet.

Kérlek hagyj üzenetet a [[$2|vitalapomon]], ha segíthetek valamiben. $3',
	'welcome-message-anon' => 'Szia, üdvözlünk a(z) {{SITENAME}} wikin! Köszönjük a(z) [[:$1]] lapon tett szerkesztésedet.

\'\'\'[[Special:Userlogin|Kérlek regisztrálj egy felhasználónevet és jelentkezz be.]]\'\'\'. Így könnyen tudod majd követni a  szerkesztéseidet, és segít a közösséggel való kommunikációban.

Kérlek hagyj üzenetet a [[$2|vitalapomon]], ha segíthetek valamiben. $3',
	'welcome-message-log' => 'új közreműködő üdvözlése',
	'welcome-message-user-staff' => '== Üdvözlet ==

Szia, üdvözlünk a(z) {{SITENAME}} wikin! Köszönjük a(z) [[:$1]] lapon tett szerkesztésedet.

Ha segítségre van szükséged, és nincsenek helyi adminisztrátorok, látogasd meg a [[wikia:Forum:Community Central Forum|Community Central Wiki fórumait]] $3',
	'welcome-message-anon-staff' => '== Üdvözlet ==

Szia, üdvözlünk a(z) {{SITENAME}} wikin! Köszönjük a(z) [[:$1]] lapon tett szerkesztésedet.

\'\'\'[[Special:Userlogin|Kérlek regisztrálj egy felhasználónevet, és jelentkezz be.]]\'\'\'. Így könnyen tudod majd követni a  szerkesztéseidet, és segít a közösséggel való kommunikációban.

Ha segítségre van szükséged, és nincsenek helyi adminisztrátorok, látogasd meg a [[wikia:Forum:Community Central Forum|Community Central Wiki fórumait]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|segítségkérési fórum]] | [[w:sblog|blog]])</small>',
	'welcome-message-wall-user' => 'Szia, üdvözlünk a(z) {{SITENAME}} wikin! Köszönjük a(z) [[:$1]] lapon végzett szerkesztésedet.

Kérlek, hagyj nekem üzenetet, ha segíthetek valamiben.',
	'welcome-message-wall-user-staff' => 'Szia, üdvözlünk a(z) {{SITENAME}} wikin! Köszönjük a(z) [[:$1]] lapon végzett szerkesztésedet.

Ha segítségre van szükséged, és nincsenek itt helyi adminisztrátorok, meglátogathatod [[wikia:Forum:Community Central Forum|a Community Central fórumait]]. Megtekintheted a [[w:c:community:Blog:Wikia_Staff_Blog|személyzeti]] blogot is, hogy naprakész maradj a Wikia friss híreivel és eseményeivel kapcsolatban.

Jó szerkesztést!',
];

$messages['ia'] = [
	'welcome-user-page' => '==A proposito de me==

\'\'Iste es tu pagina de usator. Modifica le pagina pro presentar te al communitate!\'\'

==Mi contributiones==

* [[Special:Contributions/$1|Contributiones de iste usator]]

==Mi paginas favorite==

* Adde ligamines a tu paginas favorite in iste wiki!
* Pagina favorite no. 2
* Pagina favorite no. 3',
	'welcome-message-user' => 'Salute, benvenite a {{SITENAME}}! Gratias pro tu contribution al pagina [[:$1]].

Non hesita de lassar un message in [[$2|mi pagina de discussion]] si io pote adjutar te con alcun cosa! $3',
	'welcome-message-anon' => 'Salute, benvenite a {{SITENAME}}! Gratias pro tu contribution al pagina [[:$1]].

\'\'\'[[Special:Userlogin|Per favor aperi un session o crea un conto]]\'\'\'. Isto permitte sequer tu contributiones e facilita le communication con le resto del communitate.

Non hesita de lassar un message in [[$2|mi pagina de discussion]] si io pote adjutar te con alcun cosa! $3',
	'welcome-message-log' => 'dava le benvenita a un nove contributor',
	'welcome-message-user-staff' => '
==Benvenite==

Salute, benvenite a {{SITENAME}}! Gratias pro tu modification del pagina [[:$1]].

Si tu ha besonio de adjuta, e il ha nulle administratores local hic, nos suggere
visitar le [[wikia:Forum:Community Central Forum|foros in le wiki Community
Central]] $3',
	'welcome-message-anon-staff' => '==Benvenite==

Salute, benvenite a {{SITENAME}}. Gratias pro tu modification del pagina [[:$1]].

\'\'\'[[Special:Userlogin|Per favor crea un conto e aperi un session]]\'\'\'. Es un modo facile de tener tracia de tu contributiones e te adjuta a communicar con le resto del communitate.

Si tu ha besonio de adjuta, e il ha nulle administratores local hic, nos suggere visitar le [[wikia:Forum:Community Central Forum|foros in le wiki Community Central]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|foro de adjuta]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Salute, benvenite a {{SITENAME}}! Gratias pro tu contribution al pagina [[:$1]].

Non hesita de lassar me un message si io pote adjutar te con alcun cosa!',
	'welcome-message-wall-user-staff' => 'Salute, benvenite a {{SITENAME}}! Gratias pro tu contribution al pagina [[:$1]].

Si tu ha besonio de adjuta, e il non ha administratores local hic, tu pote visitar le [[wikia:Forum:Community Central Forum|foros in le wiki Community Central]]. Tu pote equalmente leger [[w:c:community:Blog:Wikia_Staff_Blog|le blog de nostre personal]] pro tener te al currente con le ultime novas e eventos in tote Wikia.

Bon redaction!',
	'welcome-message-wall-anon' => 'Salute, benvenite a {{SITENAME}}! Gratias pro tu contribution al pagina [[:$1]].

\'\'\'[[Special:Userlogin|Per favor aperi un session o crea un conto]]\'\'\'. Isto permitte sequer tu contributiones e facilita le communication con le resto del communitate.

Non hesita de lassar un message si io pote adjutar te con alcun cosa!',
	'welcome-message-wall-anon-staff' => 'Salute, benvenite a {{SITENAME}}! Gratias pro tu contribution al pagina [[:$1]].

\'\'\'[[Special:Userlogin|Per favor aperi un session o crea un conto]]\'\'\'. Isto permitte sequer tu contributiones e facilita le communication con le resto del communitate.

Non hesita de lassar un message si io pote adjutar te con alcun cosa!',
];

$messages['id'] = [
	'welcome-user-page' => '== Tentang saya == 

\'\'Ini adalah halaman pengguna Anda. Silakan sunting halaman ini untuk memberitahu komunitas tentang diri Anda!\'\' 

== Kontribusi saya ==

* [[Special:Contributions/$1|Kontribusi pengguna]]

== Halaman kesukaan == 

* Tambahkan pranala ke halaman kesukaan Anda pada wiki di sini! 
* Halaman kesukaan #2 
* Halaman kesukaan #3',
	'welcome-message-user' => 'Hi, selamat datang di {{SITENAME}}! Terima kasih untuk suntingan anda dihalaman [[:$1]]. 

Silakan tinggalkan pesan di [[$2|Pembicaraan halaman saya]] jika saya dapat membantu! $3',
	'welcome-message-anon' => 'Hai, selamat datang di {{SITENAME}}! Terima kasih atas suntingan Anda pada halaman [[:$1]].

\'\'\'[[Special:Userlogin|Silakan masuk log dan membuat nama pengguna]]\'\'\'.
Ini adalah cara yang mudah untuk melacak kontribusi Anda dan membantu Anda berkomunikasi dengan komunitas.

Silakan tinggalkan pesan pada [[$2|halaman pembicaraan saya]] jika saya dapat membantu dengan hal apapun! $3',
	'welcome-message-anon-staff' => '==Selamat datang==

Hai,

Selamat datang ke {{SITENAME}} dan terima kasih atas suntingan Anda pada halaman [[:$1]]. Kami mendorong semua kontributor untuk [[Special:UserLogin|membuat nama pengguna]], sehingga Anda dapat melacak kontribusi Anda, mengakses lebih banyak fitur Wikia, dan dapat mengetahui seluruh komunitas {{SITENAME}}.

Jika Anda membutuhkan bantuan, pertama lihatlah [[Help:Contents|halaman bantuan]] kami dan kemudian mengunjungi [[w:c:community|Pusat Komunitas]] untuk mempelajari lebih lanjut. Selamat menyunting! $3',
	'welcome-message-wall-user' => 'Hai, selamat datang di {{SITENAME}}! Terima kasih atas suntingan Anda pada halaman [[:$1]].

Silakan meninggalkan pesan jika saya dapat membantu dalam hal apapun!',
	'welcome-message-wall-anon-staff' => 'Hai,

Selamat datang ke {{SITENAME}} dan terima kasih atas suntingan Anda pada halaman [[:$1]]. Kami mendorong semua kontributor untuk [[Special:UserLogin|membuat nama pengguna]], sehingga Anda dapat melacak kontribusi Anda, mengakses lebih banyak fitur Wikia, dan dapat mengetahui seluruh komunitas {{SITENAME}}.

Jika Anda membutuhkan bantuan, pertama lihatlah [[Help:Contents|halaman bantuan]] kami dan kemudian mengunjungi [[w:c:community|Pusat Komunitas]] untuk mempelajari lebih lanjut. Selamat menyunting!',
];

$messages['it'] = [
	'welcome-user-page' => '==Qualcosa su di me==

\'\'Questa è la tua pagina utente. Modifica liberamente questa pagina per farti conoscere dalla comunità!\'\'

==I miei contributi==

* [[Special:Contributions/$1|Contributi utente]]

==Le mie pagine preferite==

* Aggiungi i collegamenti alle tue pagine preferite su questo wiki!
* Pagina preferita n.2
* Pagina preferita n.3',
	'welcome-message-user' => '== Benvenuto ==
Ciao $4, benvenuto su {{SITENAME}}! Grazie per la tua modifica sulla pagina [[:$1]].

Lascia un messaggio sulla [[$2|pagina delle mie discussioni]], se posso esserti utile per qualunque problema! $3',
	'welcome-message-anon' => '== Benvenuto ==
Ciao, benvenuto su {{SITENAME}}. Grazie per la tua modifica sulla pagina [[:$1]].

\'\'\'[[Special:Userlogin|Se lo desideri, puoi registrarti con il tuo nome utente]]\'\'\'. È un modo facile e comodo per tenere traccia delle tue collaborazioni e ti aiuta nelle comunicazioni con il resto della community.

Lascia un messaggio sulla [[$2|pagina delle mie discussioni]], se posso esserti utile per qualunque problema! $3',
	'welcome-message-log' => 'Benvenuto a un nuovo collaboratore',
	'welcome-message-user-staff' => '== Benvenuto ==

Ciao, benvenuto su \'\'\'{{SITENAME}}\'\'\'! Grazie per la tua modifica nella pagina \'\'\'"$1"\'\'\'.

Se ricevi questo messaggio, è probabile allora che {{SITENAME}} sia inattiva o non abbia amministratori attivi. Questo significa che qui hanno bisogno di te! Controlla le [[Special:Recentchanges|ultime modifiche]] o la [[Special:Listusers|lista utenti]] per vedere chi è ancora attivo e prova ad offrire il tuo aiuto, oppure contribuisci direttamente alla wiki. Se raggiungerai i requisiti potrai fare richiesta d\'adozione della wiki su [[w:it:Wiki della Community:Richieste di adozione|questa pagina]].

Se hai bisogno di aiuto, innanzitutto consulta le nostre [[w:c:it.community:Aiuto:Contenuti|pagine di aiuto]]. Visita inoltre la [[w:c:it.community|Wiki della Community]] per tenerti informato tramite il [[w:it:Blog:Blog ufficiale di Wikia Italia|blog ufficiale di Wikia Italia]], fare domande nel [[w:it:Special:Forum|forum]] o chattare con gli altri utenti.<br>
Buon editing! $3',
	'welcome-message-anon-staff' => '==Benvenuto==

Ciao, benvenuto/a su {{SITENAME}}.
Grazie per la tua modifica alla pagina [[:$1]].

\'\'\'[[Special:UserLogin|Se vuoi, puoi registrarti ed usare un nome utente]]\'\'\'.
E\' un modo semplice per tenere traccia dei tuoi contributi e per aiutarti a comunicare con il resto della community.

Se hai bisogno di aiuto e non ci sono amministratori disponibili, visita i [[w:c:it.community:Special:Forum|forum sul wiki centrale della Community]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|forum di supporto]] | [[w:sblog|blog]])</small>',
	'welcome-message-wall-user' => 'Ciao, benvenuto su {{SITENAME}}! Grazie per la tua modifica nella pagina [[:$1]].

Lasciami un messaggio se hai bisogno di aiuto!',
	'welcome-message-wall-user-staff' => 'Ciao, benvenuto su \'\'\'{{SITENAME}}\'\'\'! Grazie per la tua modifica nella pagina \'\'\'"$1"\'\'\'.

Se ricevi questo messaggio, è probabile allora che {{SITENAME}} sia inattiva o non abbia amministratori attivi. Questo significa che qui hanno bisogno di te! Controlla le [[Special:Recentchanges|ultime modifiche]] o la [[Special:Listusers|lista utenti]] per vedere chi è ancora attivo e prova ad offrire il tuo aiuto, oppure contribuisci direttamente alla wiki. Se raggiungerai i requisiti potrai fare richiesta d\'adozione della wiki su [[w:it:Wiki della Community:Richieste di adozione|questa pagina]].

Se hai bisogno di aiuto, innanzitutto consulta le nostre [[w:c:it.community:Aiuto:Contenuti|pagine di aiuto]]. Visita inoltre la [[w:c:it.community|Wiki della Community]] per tenerti informato tramite il [[w:it:Blog:Blog ufficiale di Wikia Italia|blog ufficiale di Wikia Italia]], fare domande nel [[w:it:Special:Forum|forum]] o chattare con gli altri utenti.<br>
Buon editing!',
];

$messages['ja'] = [
	'welcome-user-page' => '==自己紹介==

\'\'\'ここはあなたの利用者ページです。このページを編集してあなた自身のことをみんなに伝えましょう!\'\'\'

==投稿記録==

* [[Special:Contributions/$1|利用者の投稿記録]]

==お気に入りページ==

* ウィキのお気に入りのページへのリンクをここに追加してください!
* お気に入りページ2
* お気に入りページ3',
	'welcome-message-user' => '== ようこそ ==
こんにちは、{{SITENAME}} へようこそ！! \'\'\'$1\'\'\' ページへの編集ありがとうございます。

もし、何か手伝えることがありましたら、お気軽に[[$2|私のトークページ]]までメッセージをお寄せください！ $3',
	'welcome-message-anon' => '== ようこそ ==
こんにちは、{{SITENAME}}へようこそ！ [[:$1]]のご編集、ありがとうございます。

もしまだアカウントをお持ちでなければ、ぜひ[[Special:Userlogin|アカウントを取得]]してみてください。他のユーザーとのコミュニケーションがとりやすくなり、アカウントユーザーだけが利用できる機能もたくさんあります。

もし何か手伝いできることがありましたら、お気軽に[[$2|私のトークページ]]にてメッセージを残してくださいね！$3',
	'welcome-message-log' => 'ウィキアへようこそ！',
	'welcome-message-user-staff' => '== ようこそ ==
こんにちは、{{SITENAME}} へようこそ！ [[:$1]]のページをご編集いただき、ありがとうございます。ご不明なことがございましたら、ぜひ[[ヘルプ:コンテンツ|ヘルプページ]]をご覧ください。[[w:c:ja.community|コミュニティセントラル]]では、最新のニュースや今ウィキアで起きている出来事をチェックしていただけます。また、[[w:ja:Special:Forum:|フォーラム]]にて、スタッフや他のユーザーに交流しながら、分からないことを質問してみましょう！

それではどうぞウィキアでの編集をお楽しみください！',
	'welcome-message-anon-staff' => '== ようこそ ==

こんにちは、{{SITENAME}} へようこそ。[[:$1]] をご編集いただきありがとうございます。

\'\'\'[[Special:Userlogin|ユーザー名を作成]]すると、自分の投稿の履歴を確認することができ、また他のコミュニティとのコミュニケーションに役立ちます。

もしご不明な点がある場合には、[[w:c:ja.community:ヘルプ:コンテンツ|ヘルプページ]]をご覧いただくか、[[Special:Listusers/sysop|コミュニティのアドミン]] (管理者)にお問い合わせください。もしアクティブなアドミンがいない場合は、[[w:c:ja.community|コミュニティセントラル]]の[[w:c:ja.community:特別:Forum|フォーラム]]をご覧ください。

英語版では、スタッフや他のウィキア編集者とチャットができる[[w:c:community:Webinars|ウェビナー]]を開催することがありますので、よろしければご参加ください。[[w:c:ja.community:ブログ:ウィキアスタッフブログ|スタッフブログ]]でもウィキアに関する最新のニュースや出来事をご紹介しています。最後に、[[w:c:video:Wikia Video Library|ビデオライブラリ]] をご覧いただくと、特別にライセンスされたビデオをあなたのウィキアコミュニティに加えることができます。

こちらのリンクはすべてウィキアを楽しんでいただくために役立てていただけるものです。

それではどうぞ編集をお楽しみください！',
];

$messages['ko'] = [
	'welcome-user-page' => '==저에 대해서==

이 문서는 당신의 사용자 문서입니다. 이 단락에 당신에 대해 소개하는 글을 남겨보세요.

==기여 내역==

* [[특수기능:기여/$1|기여 내역]]

==관심 있는 문서 목록==

* 여기에 관심 있는 문서들을 링크로 추가해보세요.
* 2번째 관심 문서
* 3번째 관심 문서',
	'welcome-message-user' => '$4님, 안녕하세요.&nbsp;{{SITENAME}}에 오신 것을 환영합니다! [[:$1]] 문서를 편집해주셔서 감사드립니다. 만약 도움이 필요하시다면 [[$2|제 사용자 토론 문서]]에 메시지를 남겨주세요.&nbsp;$3',
	'welcome-message-anon' => '안녕하세요. {{SITENAME}}에 오신 것을 환영합니다. [[:$1]] 문서를 편집해주셔서 감사드립니다. \'\'\'[[Special:Userlogin|먼저 계정을 만드셔서 활동하시는 것을 권해드립니다.]]\'\'\' 이는 당신의 기여를 쉽게 추적하고 다른 사용자분들과 쉽게 소통할 수 있는 좋은 방법입니다. 만약 도움이 필요하시다면 [[$2|제 사용자 토론 문서]]에 메시지를 남겨주세요.&nbsp;$3',
	'welcome-message-log' => '새 기여자 환영하기',
	'welcome-message-wall-user' => '안녕하세요. {{SITENAME}}에 오신 것을 환영합니다! [[:$1]] 문서를 편집해주셔서 감사드립니다.

만약 도움이 필요하시다면 제 담벼락에 메시지를 남겨주세요.',
	'welcome-message-wall-anon' => '안녕하세요. {{SITENAME}}에 오신 것을 환영합니다. $1 문서를 편집해주셔서 감사드립니다.

\'\'\'[[Special:Userlogin|먼저 계정을 만드셔서 활동하시는 것을 권해드립니다.]]\'\'\' 이는 당신의 기여를 쉽게 추적하고 다른 사용자분들과 쉽게 소통할 수 있는 좋은 방법입니다.

만약 도움이 필요하시다면 제 담벼락에 메시지를 남겨주세요.',
];

$messages['ku-latn'] = [
	'hawelcomeedit' => 'HAWelcomeEdit',
];

$messages['lb'] = [
	'welcome-message-log' => 'Begréissung vun engem neien Auteur',
	'hawelcomeedit' => 'HAWelcomeEdit',
];

$messages['mk'] = [
	'welcome-user-page' => '==За мене==

\'\'Ова е вашата корисничка страница. Уредете ја со тоа што ќе напишете некои нешта за себе, за да ве запознае заедницата!\'\'

==Мои придонеси==

* [[Special:Contributions/$1|Придонеси на корисникот]]

==Мои омилени страници==

* Тука на викиво додајте врски до вашите омилени страници!
* Омилена страница бр. 2
* Омилена страница бр. 3',
	'welcome-message-user' => 'Здраво и добре дојдовте на {{SITENAME}}! Ви благодариме за вашето уредување на страницата [[:$1]].

Оставете ми порака на [[$2|мојата страница за разговор]] ако ви треба било каква помош! $3',
	'welcome-message-anon' => 'Здраво и добре дојдовте на {{SITENAME}}! Ви благодариме за вашето уредување на страницата [[:$1]].

\'\'\'[[Special:Userlogin|Најавете се и создајте корисничко име]]\'\'\'. Ова е лесен начин на следење на вашите придонеси и ви овозможува да комуницирате со другите учесници во заедницата.

Оставете ми порака на [[$2|мојата страница за разговор]] ако ви треба било каква помош! $3',
	'welcome-message-log' => 'добредојде за нов учесник',
	'welcome-message-user-staff' => '==Добредојдовте==

Здраво и добредојдовте на {{SITENAME}}! Ви благодариме за вашето уредување на страницата [[:$1]].

Ако ви треба помош, а нема локални администратори, ви препорачуваме да ги посетите [[wikia:Forum:Community Central Forum|форумите на Центарот на Заедницата]] $3',
	'welcome-message-anon-staff' => '==Добредојдовте==

Здраво и добредојдовте на {{SITENAME}}. Ви благодариме за вашето уредување на страницата [[:$1]].

\'\'\'[[Special:Userlogin|Најавете се и создајте корисничко име]]\'\'\'. Вака лесно ќе можеме да ги следиме вашите придонеси, а воедно ја олеснува и вашата комуникација со останатите членови на заедницата.

Ако ви треба помош, а нема локални администратори, ви препорачуваме да ги посетите [[wikia:Forum:Community Central Forum|форумите на Центарот на Заедницата]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|форум за помош]] | [[w:sblog|блог]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Здраво и добре дојдовте на {{SITENAME}}! Ви благодариме за вашето уредување на страницата [[:$1]].

Оставете ми порака на ако ви треба било каква помош!',
	'welcome-message-wall-user-staff' => 'Здраво и добредојдовте на {{SITENAME}}! Ви благодариме за вашето уредување на страницата [[:$1]].

Доколку ви треба помош, а нема локални администратори, посетете ги [[wikia:Forum:Community Central Forum|форумите на Центарот на заедницата]]. Најнови вести и настани ќе најдете на [[w:c:community:Blog:Wikia_Staff_Blog|Блогот на персоналот]] на Викија.

Ви посакуваме среќно уредување!',
	'welcome-message-wall-anon' => 'Здраво и добре дојдовте на {{SITENAME}}! Ви благодариме за вашето уредување на страницата [[:$1]].

\'\'\'[[Special:Userlogin|Најавете се и создајте корисничко име]]\'\'\'. Ова е лесен начин на следење на вашите придонеси и ви овозможува да комуницирате со другите учесници во заедницата.

Оставете ми порака на ако ви треба било каква помош!',
	'welcome-message-wall-anon-staff' => 'Здраво и добредојдовте на {{SITENAME}}! Ви благодариме за вашето уредување на страницата [[:$1]].

\'\'\'[[Special:Userlogin|Најавете се и создајте корисничко име]]\'\'\'. Ова е лесен начин на следење на вашите придонеси и ви овозможува да комуницирате со другите учесници во заедницата.

Оставете ми порака на ако ви треба било каква помош!',
	'welcome-description' => 'Испраќа порака за добредојде на корисниците откако ќе го направат првото уредување.',
];

$messages['ms'] = [
	'welcome-user-page' => '==Tentang saya==

\'\'Inilah laman pengguna anda. Sila sunting laman ini untuk memperkenalkan diri anda kepada seluruh komuniti!\'\'

==Sumbangan saya==

* [[Special:Contributions/$1|Sumbangan pengguna]]

==Laman kegemaran saya==

* Bubuh pautan ke laman-lama kegemaran anda dalam wiki ini di sini!
* Laman kegemaran #2
* Laman kegemaran #3',
	'welcome-message-user' => 'Selamat datang ke {{SITENAME}}! Terima kasih kerana menyunting laman [[:$1]].

Sila tinggalkan pesanan di [[$2|laman perbincangan saya]] sekiranya anda perlukan bantuan saya! $3',
	'welcome-message-anon' => 'Selamat datang ke {{SITENAME}}! Terima kasih kerana menyunting laman [[:$1]].

\'\'\'[[Special:Userlogin|Sila log masuk dan cipta nama pengguna anda]]\'\'\'.
Dengan ini, anda mudah menjejaki sumbangan anda serta berkomunikasi dengan seluruh komuniti.

Sila tinggalkan pesanan di [[$2|laman perbincangan saya]] jika anda memerlukan bantuan saya! $3',
	'welcome-message-log' => 'menyambut penyumbang baru',
	'welcome-message-user-staff' => '==Selamat datang==

Selamat sejahtera,

Selamat datang ke {{SITENAME}} dan terima kasih kerana menyunting halaman [[:$1]]. Jika anda memerlukan bantuan, sila baca [[Help:Contents|halaman bantuan]] kami terlebih dahulu. Kunjungi [[w:c:community|Community Central]] untuk mengikuti perkembangan melalui [[w:c:community:Blog:Wikia_Staff_Blog|blog kakitangan]], mengemukakan soalan di [[w:c:community:Special:Forum|forum]], menyertai [[w:c:community:Help:Webinars|siri webinar]], atau bersembang secara langsung dengan ahli-ahli Wikia yang lain. Selamat menyunting! $3',
	'welcome-message-anon-staff' => '==Selamat datang==

Selamat sejahtera,

Selamat datang ke {{SITENAME}} dan terima kasih kerana menyunting halaman [[:$1]]. Kami menggalakkan semua penyumbang untuk [[Special:UserLogin|membuat nama pengguna]] supaya anda dapat mengikuti sumbangan anda, mengakses lebih banyak ciri Wikia serta berkenalan dengan ahli-ahli komuniti {{SITENAME}} yang lain.

Jika anda memerlukan bantuan, sila baca [[Help:Contents|halaman bantuan]] kami terlebih dahulu, kemudian kunjungi [[w:c:community|Community Central]] untuk keterangan lanjut. Selamat menyunting! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|forum bantuan]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Selamat datang ke {{SITENAME}}! Terima kasih kerana menyunting laman [[:$1]].

Sila tinggalkan pesanan sekiranya anda memerlukan bantuan saya!',
	'welcome-message-wall-user-staff' => 'Selamat sejahtera,

Selamat datang ke {{SITENAME}} dan terima kasih kerana menyunting halaman [[:$1]]. Jika anda memerlukan bantuan, sila baca [[Help:Contents|halaman bantuan]] kami terlebih dahulu. Kunjungi [[w:c:community|Community Central]] untuk mengikuti perkembangan melalui [[w:c:community:Blog:Wikia_Staff_Blog|blog kakitangan]], mengemukakan soalan di [[w:c:community:Special:Forum|forum]], menyertai [[w:c:community:Help:Webinars|siri webinar]], atau bersembang secara langsung dengan ahli-ahli Wikia yang lain. Selamat menyunting!',
	'welcome-message-wall-anon' => 'Selamat datang ke {{SITENAME}}! Terima kasih kerana menyunting laman [[:$1]].

\'\'\'[[Special:Userlogin|Sila log masuk dan cipta nama pengguna anda]]\'\'\'. Dengan ini, anda mudah menjejaki sumbangan anda serta berkomunikasi dengan seluruh komuniti.

Sila tinggalkan pesanan sekiranya anda memerlukan bantuan saya!',
	'welcome-message-wall-anon-staff' => 'Selamat sejahtera,

Selamat datang ke {{SITENAME}} dan terima kasih kerana menyunting halaman [[:$1]]. Kami menggalakkan semua penyumbang untuk [[Special:UserLogin|membuat nama pengguna]] supaya anda dapat mengikuti sumbangan anda, mengakses lebih banyak ciri Wikia serta berkenalan dengan ahli-ahli komuniti {{SITENAME}} yang lain.

Jika anda memerlukan bantuan, sila baca [[Help:Contents|halaman bantuan]] kami terlebih dahulu, kemudian kunjungi [[w:c:community|Community Central]] untuk keterangan lanjut. Selamat menyunting!',
	'welcome-description' => 'Menghantar pesanan alu-aluan kepada pengguna selepas suntingan sulungnya',
];

$messages['nb'] = [
	'welcome-user-page' => '==Om meg==

\'\'Dette er brukersiden din. Vennligst rediger denne siden for å fortelle fellesskapet om deg selv!\'\'

==Mine bidrag==

* [[Special:Contributions/$1|Brukerbidrag]]

==Mine favorittsider==

* Legg til lenker til dine favorittsider på wikien her!
* Favorittside #2
* Favorittside #3',
	'welcome-message-user' => 'Hei, velkommen til {{SITENAME}}! Takk for bidraget til siden [[:$1]].

Vennligst legg igjen en melding på [[$2|diskusjonssiden min]] om du trenger hjelp til noe! $3',
	'welcome-message-anon' => 'Hei, velkommen til {{SITENAME}}! Takk for ditt bidrag til siden [[:$1]].

\'\'\'[[Special:Userlogin|Vennligst logg inn og opprett et brukernavn]]\'\'\'. Det er en enkel måte å holde oversikt over dine bidrag og hjelper deg med å kommunisere med resten av fellesskapet.

Vennligst legg igjen en melding på [[$2|diskusjonssiden min]] om du trenger hjelp til noe! $3',
	'welcome-message-log' => 'ønsker ny bidragsyter velkommen',
	'welcome-message-user-staff' => '
== Velkommen ==

Hei, velkommen til {{SITENAME}}. Takk for at du har redigert [[:$1]]-siden.

Hvis du trenger hjelp, og det ikke er noen lokale administratorer her, vil
du kanskjebesøke [[wikia:Forum:Community Central Forum|forumene på Community
Central Wiki]] $3',
	'welcome-message-anon-staff' => '== Velkommen ==

Hei, velkommen til {{SITENAME}}. Takk for at du har redigert [[:$1]]-siden.

\'\'\'[[Special:Userlogin|Registrer deg og opprett et brukernavn]]\'\'\'. Det er en enkel måte å holde styring på bidragene dine og hjelper deg med å kommunisere med resten av fellesskapet.

Hvis du trenger hjelp og det ikke er noen lokale administratorer her vil du kanskje besøke [[wikia:Forum:Community Central Forum|forumene på Community Central Wiki]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|hjelpeforum]] | [[w:sblog|blogg]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Hei, velkommen til {{SITENAME}}! Takk for at du redigerte siden [[:$1]].

Vennligst legg igjen en beskjed hvis jeg kan hjelpe deg med noe!',
	'welcome-message-wall-user-staff' => 'Hei, velkommen til {{SITENAME}}! Takk for at du redigerte siden [[:$1]].

Hvis du trenger hjelp, og det ikke er noen lokale administratorer her, vil du kanskje besøke [[wikia:Forum:Community Central Forum|forumene på Fellesskapssentral-wikien]]. Du kan også sjekke [[w:c:community:Blog:Wikia_Staff_Blog|ledelsesbloggen vår]] for å holde deg oppdatert med de siste nyhetene og hendelsene innenfor Wikia.

Gledelig redigering!',
	'welcome-message-wall-anon' => 'Hei, velkommen til {{SITENAME}}! Takk for at du redigerte siden [[:$1]].

\'\'\'[[Special:Userlogin|Vennligst logg inn og opprett et brukernavn]]\'\'\'. Det er en enkel måte å holde oversikt over bidragene dine og hjelper deg med å kommunisere med resten av fellesskapet.

Vennligst legg igjen en beskjed hvis jeg kan hjelpe deg med noe!',
	'welcome-message-wall-anon-staff' => 'Hei, velkommen til {{SITENAME}}! Takk for at du redigerte siden [[:$1]].

\'\'\'[[Special:Userlogin|Vennligst logg inn og opprett et brukernavn]]\'\'\'. Det er en enkel måte å holde oversikt over bidragene dine og hjelper deg med å kommunisere med resten av fellesskapet.

Vennligst legg igjen en beskjed hvis jeg kan hjelpe deg med noe!',
	'welcome-description' => 'Sender en velkomstbeskjed til brukere etter deres første redigering',
];

$messages['nl'] = [
	'welcome-user-page' => '==Over mij==

\'\'Dit is uw gebruikerspagina. Bewerk deze pagina en vertel de gemeenschap iets over uzelf\'\'

==Mijn bijdragen==

* [[Special:Contributions/$1|Uw eigen bijdragen]]

==Mijn favoriete pagina\'s==

* Voeg hier koppelingen toe naar uw favoriete pagina\'s op deze wiki!
* Favoriete pagina #2
* Favoriete pagina #3',
	'welcome-message-user' => '== Welkom ==
Hoi, welkom bij {{SITENAME}}! Bedankt voor je bewerking van de pagina [[:$1]].

Laat gerust een bericht achter op [[$2|mijn overlegpagina]] als ik je ergens mee kan helpen! $3',
	'welcome-message-anon' => 'Hoi, welkom bij {{SITENAME}}. Dank je wel voor je werk aan de pagina [[:$1]].

\'\'\'[[Special:Userlogin|Maak alsjeblieft een gebruiker aan of meld je aan]]\'\'\'.
Het is een eenvoudige manier om je bijdragen te volgen en helpt je bij het onderhouden van contacten met de rest van de gemeenschap.

Laat alsjeblieft een bericht achter op [[$2|mijn overleg pagina]] als ik je ergens mee kan helpen! $3',
	'welcome-message-log' => 'Verwelkomen van nieuwe bijdrager',
	'welcome-message-user-staff' => '==Welkom==

Hoi, Welkom bij {{SITENAME}}! Dank je wel voor je bewerking aan de pagina [[:$1]].

Als je hulp zoekt en er zijn geen lokale beheerders, ga dan naar de [[w:Forum:Index|forums op de Centrale Gemeenschapswiki]] $3',
	'welcome-message-anon-staff' => '==Welkom==

Hoi! Welkom bij {{SITENAME}}. Dank je wel voor je bewerking aan de pagina [[:$1]].

\'\'\'[[Special:UserLogin|Meld je alsjeblieft aan of maak een gebruiker aan]]\'\'\'. Zo kan je eenvoudig je bewerkingen bijhouden en contact houden met de andere leden van de gemeenschap.

Als je hulp zoekt en er zijn geen lokale beheerders, ga dan naar de [[MediaWiki:Forum:Community Central Forum|forums op de Centrale Gemeenschapswiki]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|forum voor hulp]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HA Welkom bewerken',
	'welcome-message-wall-user' => 'Hallo en welkom bij {{SITENAME}}! Dank u wel voor uw bewerking aan de pagina [[:$1]].

Laat een bericht voor me achter als ik ergens mee kan helpen.',
	'welcome-message-wall-user-staff' => 'Hallo,

Welkom bij {{SITENAME}} en dank u wel voor het bewerken van de [[:$1]] pagina. Als u hulp nodig heeft, begin dan met het bekijken van onze [[Help:Contents|help pagina\'s]]. Bezoek [[w:c:community|de centrale gemeenschap]] om op de hoogte te blijven van onze [[w:c:community:Blog:Wikia_Staff_Blog|medewerkers blog]], stel uw vragen op ons [[w:c:community:Special:Forum|gemeenschapsforum]], neem deel aan onze [[w:c:community:Help:Webinars|webinar series]], of chat live met mede Wikianen. Veel plezier met bewerken!',
	'welcome-message-wall-anon' => 'Hallo, welkom bij {{SITENAME}}. Dank u wel voor uw werk aan de pagina [[:$1]].

\'\'\'[[Special:Userlogin|Maak een gebruiker aan of meld u aan]]\'\'\'.
Het is een eenvoudige manier om uw bijdragen te volgen en helpt u bij het onderhouden van contacten met de rest van de gemeenschap.

Laat een bericht achter als ik u ergens mee kan helpen!',
	'welcome-message-wall-anon-staff' => 'Hallo,
Welkom bij {{SITENAME}} en dank u wel voor uw bewerking van de [[:$1]] pagina. We raden alle mensen die bijdragen aan om [[Special:UserLogin|om een gebruikersnaam aan te maken]], zodat u uw bijdragen kunt bijhouden, toegang heeft tot meer Wikia mogelijkheden en de rest van de {{SITENAME}} gemeenschap leert kennen.

Als u hulp nodig heeft, bekijk dan eerst onze [[Help:Contents|help pagina\'s]] en bezoek dan [[w:c:community|de centrale gemeenschap]] om meer te weten te komen. Veel plezier met bewerken!',
	'welcome-description' => 'Stuurt een welkomstbericht aan gebruikers na hun eerste bewerkingen',
];

$messages['nl-informal'] = [
	'welcome-user-page' => '==Over mij==
\'\'Dit is je gebruikerspagina. Bewerk deze pagina en vertel de gemeenschap iets over jezelf\'\'

==Mijn bijdragen==
* [[Special:Contributions/$1|Je eigen bijdragen]]

==Mijn favoriete pagina\'s==
* Voeg hier koppelingen toe naar je favoriete pagina\'s op deze wiki!
* Favoriete pagina #2
* Favoriete pagina #3',
	'welcome-message-user' => 'Hoi, welkom bij {{SITENAME}}! Bedankt voor je bewerking van de pagina [[:$1]].

Laat gerust een bericht achter op [[$2|mijn overlegpagina]] als ik je ergens mee kan helpen! $3',
	'welcome-message-anon' => 'Hoi, welkom bij {{SITENAME}}. Dank je wel voor je werk aan de pagina [[:$1]].

\'\'\'[[Special:Userlogin|Maak een gebruiker aan of meld je aan]]\'\'\'.
Het is een eenvoudige manier om je bijdragen te volgen en helpt je bij het onderhouden van contacten met de rest van de gemeenschap.

Laat een bericht achter op [[$2|mijn overleg pagina]] als ik je ergens mee kan helpen! $3',
	'welcome-message-user-staff' => '==Welkom==

Hoi! Welkom bij {{SITENAME}}. Dank je wel voor je bewerking aan de pagina [[:$1]].

Als je hulp zoekt en er zijn geen lokale beheerders, ga dan naar de [[wikia:Forum:Community Central Forum|forums op de Centrale Gemeenschapswiki]] $3',
	'welcome-message-anon-staff' => '==Welkom==

Hoi! Welkom bij {{SITENAME}}. Dank je wel voor je bewerking aan de pagina [[:$1]].

\'\'\'[[Special:UserLogin|Meld je alsjeblieft aan of maak een gebruiker aan]]\'\'\'. Zo kan je eenvoudig je bewerkingen bijhouden en contact houden met de andere leden van de gemeenschap.

Als je hulp zoekt en er zijn geen lokale beheerders, ga dan naar de [[wikia:Forum:Community Central Forum|forums op de Centrale Gemeenschapswiki]] $3',
];

$messages['oc'] = [
	'welcome-user-page' => '==A prepaus de ieu==

Aquò\'s vòstra vòstra pagina d\'utilizaire. I podètz apondre d\'entresenhas que vos concernisson !

==Mas contribucions==

* [[Special:Contributions/$1|Mas contribucions]]

==Mas paginas preferidas==

* Podètz plaçar aicí de ligams cap a vòstras paginas preferidas del wiki !
* Ligam cap a la pagina #2
* Ligam cap a la pagina #3',
	'welcome-message-user' => 'Bonjorn, benvenguda sus {{SITENAME}} ! Mercés d\'aver modificada la pagina [[:$1]].

Podètz daissar un messatge sus ma pagina de [[$2|discussion]] se vos pòdi ajudar per qué que siá ! $3',
	'welcome-message-anon' => 'Bonjorn, benvenguda sus {{SITENAME}}. Mercés per vòstra contribucion a la pagina [[:$1]].

\'\'\'Mercés de vos [[Special:Userlogin|connectar o de crear un compte]]\'\'\'. Es un mejan simple de gardar una traça de vòstras contribucions e aquò facilita la comunicacion amb la rèsta de la comunautat.

Trantalhetz pas a daissar un messatge sus [[$2|ma pagina de discussion]] se vos pòdi ajudar per qué que siá ! $3',
	'welcome-message-log' => 'Aculhir un novèl utilizaire',
	'welcome-message-user-staff' => '== Benvenguda ==
Bonjorn

Benvenguda sus {{SITENAME}} e mercé d\'aver modificada la pagina [[:$1]].

S\'avètz besonh d\'ajuda, començatz per consultar nòstras [[Help:Contents|paginas d’ajuda]]. Visitatz lo [[w:c:community|centre de la comunautat]] per demorar assabentat via lo [[w:c:community:Blog:Wikia_Staff_Blog|blog de nòstra equipa]], pausatz vòstras questions sus nòstre [[w:c:community:Special:Forum|forum de comunautat]], participatz a nòstras [[w:c:community:Help:Webinars|serias de webinar]], o discutissètz en dirècte amb d’autres Wikians. Bonas modificacions! $3',
	'welcome-message-anon-staff' => '== Benvenguda ==

Bonjorn,

Benvenguda sus {{SITENAME}} e mercé d\'aver modificat la pagina [[:$1]]. Encoratjam totes los contributors a [[Special:UserLogin|crear un nom d\'utilizaire]]\'\'\' per tal de gardar la traça de vòstras contribucions, d\'accedir a mai de foncionalitats de Wikia e connéisser la rèsta de la comunautat de {{SITENAME}}.

S\'avètz besonh d\'ajuda e, podètz visitar primièr nòstras [[Help:Contents|paginas d’ajuda]], puèi, visitatz lo [[w:c:community|centre de la comunautat]] per ne saber mai. Bonas modificacions! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|forum d’ajuda]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Bonjorn, benvenguda sus {{SITENAME}} ! Mercés d\'aver modificat la pagina [[:$1]].

Daissatz-me un messatge se vos pòdi ajudar per qué que siá !',
	'welcome-message-wall-user-staff' => '== Benvenguda ==
Bonjorn

Benvenguda sus {{SITENAME}} e mercé d\'aver modificada la pagina [[:$1]].

S\'avètz besonh d\'ajuda, començatz per consultar nòstras [[Help:Contents|paginas d’ajuda]]. Visitatz lo [[w:c:community|centre de la comunautat]] per demorar assabentat via lo [[w:c:community:Blog:Wikia_Staff_Blog|blog de nòstra equipa]], pausatz vòstras questions sus nòstre [[w:c:community:Special:Forum|forum de comunautat]], participatz a nòstras [[w:c:community:Help:Webinars|serias de webinar]], o discutissètz en dirècte amb d’autres Wikians. Bonas modificacions!',
	'welcome-message-wall-anon' => 'Bonjorn, benvenguda sus {{SITENAME}}. Mercés per vòstra contribucion a la pagina [[:$1]].

\'\'\'Mercés de vos [[Special:Userlogin|connectar o de crear un compte]]\'\'\'. Es un mejan simple de gardar una traça de vòstras contribucions e aquò facilita la comunicacion amb la rèsta de la comunautat.

Trantalhetz pas a daissar un messatge se vos pòdi ajudar per qué que siá !',
	'welcome-message-wall-anon-staff' => 'Bonjorn,

Benvenguda sus {{SITENAME}} e mercé d\'aver modificat la pagina [[:$1]]. Encoratjam totes los contributors a [[Special:UserLogin|crear un nom d\'utilizaire]]\'\'\' per tal de gardar la traça de vòstras contribucions, d\'accedir a mai de foncionalitats de Wikia e connéisser la rèsta de la comunautat de {{SITENAME}}.

S\'avètz besonh d\'ajuda e, podètz visitar primièr nòstras [[Help:Contents|paginas d’ajuda]], puèi, visitatz lo [[w:c:community|centre de la comunautat]] per ne saber mai. Bonas modificacions!',
	'welcome-description' => 'Manda un messatge d’acuèlh als utilizaires aprèp lors primièras modificacions',
];

$messages['pl'] = [
	'welcome-user-page' => '== O mnie ==
\'\'To Twoja strona użytkownika. Edytuj ją i powiedz społeczności coś o sobie!\'\'

== Moje edycje ==
* [[Special:Contributions/$1|Edycje]]

== Moje ulubione strony ==
* Dodaj tu linki do swoich ulubionych stron!
* Drugi link.
* I trzeci.',
	'welcome-message-user' => '==Witaj==
Witaj na {{SITENAME}}. Dzięki za dokonanie pierwszej edycji.

Zostaw wiadomość na [[$2|mojej stronie dyskusji]], gdyby potrzebna była Ci jakakolwiek pomoc. $3',
	'welcome-message-anon' => '==Witaj==
Witaj na {{SITENAME}}. Dzięki za dokonanie pierwszej edycji.

Proszę, [[Special:UserLogin|załóż konto]]. Ułatwi Ci to kontakt ze społecznością projektu i sprawi, że wszystkie Twoje edycje będą trzymane w jednym miejscu.

Zostaw wiadomość na [[$2|mojej stronie dyskusji]], gdyby potrzebna była Ci jakakolwiek pomoc. $3',
	'welcome-message-log' => 'powitanie',
	'welcome-message-user-staff' => '== Witaj ==
Hej, witaj na {{SITENAME}} i dzięki za Twoją edycję na stronie [[:$1]].

Wygląda na to, że [[Specjalna:Administratorzy|lokalna administracja]] jest nieaktywna. Jeśli potrzebujesz pomocy zerknij na [[Pomoc:Zawartość|strony pomocy]].

Możesz też odwiedzić [[w:c:spolecznosc:Centrum Społeczności|Centrum Społeczności]] gdzie znajdziesz blog z [[w:c:spolecznosc:Blog:Wikia_News|nowościami]] oraz zasięgniesz pomocy na [http://spolecznosc.wikia.com/wiki/Specjalna:Chat?useskin=wikia czacie] albo [[w:c:spolecznosc:Specjalna:Forum|forum dyskusyjnym]].

Miłego edytowania! $3',
	'welcome-message-anon-staff' => '== Witaj ==
Hej, witaj na {{SITENAME}} i dzięki za Twoją edycję na stronie [[:$1]].

Zalecamy \'\'\'[[Special:UserLogin|utworzenie konta]]\'\'\' co pozwoli Ci na śledzenie swojego wkładu, udostępni wiele funkcji dostępnych na Wikii oraz umożliwi poznanie lokalnej społeczności.

Wygląda na to, że [[Specjalna:Administratorzy|lokalna administracja]] jest nieaktywna. Jeśli potrzebujesz pomocy zerknij na [[Pomoc:Zawartość|strony pomocy]].

Możesz też odwiedzić [[w:c:spolecznosc:Centrum Społeczności|Centrum Społeczności]] gdzie znajdziesz blog z [[w:c:spolecznosc:Blog:Wikia_News|nowościami]] oraz zasięgniesz pomocy na [http://spolecznosc.wikia.com/wiki/Specjalna:Chat?useskin=wikia czacie] albo [[w:c:spolecznosc:Specjalna:Forum|forum dyskusyjnym]].

Miłego edytowania! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|forum pomocy]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Witaj na {{SITENAME}}. Dzięki za dokonanie pierwszej edycji.

Zostaw wiadomość, gdyby potrzebna była Ci jakakolwiek pomoc.',
	'welcome-message-wall-user-staff' => 'Hej, witaj na {{SITENAME}} i dzięki za Twoją edycję na stronie [[:$1]].

Wygląda na to, że [[Specjalna:Administratorzy|lokalna administracja]] jest nieaktywna. Jeśli potrzebujesz pomocy zerknij na [[Pomoc:Zawartość|strony pomocy]].

Możesz też odwiedzić [[w:c:spolecznosc:Centrum Społeczności|Centrum Społeczności]] gdzie znajdziesz blog z [[w:c:spolecznosc:Blog:Wikia_News|nowościami]] oraz zasięgniesz pomocy na [http://spolecznosc.wikia.com/wiki/Specjalna:Chat?useskin=wikia czacie] albo [[w:c:spolecznosc:Specjalna:Forum|forum dyskusyjnym]].

Miłego edytowania!',
	'welcome-message-wall-anon' => 'Witaj na {{SITENAME}}. Dzięki za dokonanie pierwszej edycji.

Proszę, [[Special:UserLogin|załóż konto]]. Ułatwi Ci to kontakt ze społecznością projektu i sprawi, że wszystkie Twoje edycje będą trzymane w jednym miejscu.

Zostaw wiadomość, gdyby potrzebna była Ci jakakolwiek pomoc.',
	'welcome-message-wall-anon-staff' => 'Hej, witaj na {{SITENAME}} i dzięki za Twoją edycję na stronie [[:$1]].

Zalecamy \'\'\'[[Special:UserLogin|utworzenie konta]]\'\'\' co pozwoli Ci na śledzenie swojego wkładu, udostępni wiele funkcji dostępnych na Wikii oraz umożliwi poznanie lokalnej społeczności.

Wygląda na to, że [[Specjalna:Administratorzy|lokalna administracja]] jest nieaktywna. Jeśli potrzebujesz pomocy zerknij na [[Pomoc:Zawartość|strony pomocy]].

Możesz też odwiedzić [[w:c:spolecznosc:Centrum Społeczności|Centrum Społeczności]] gdzie znajdziesz blog z [[w:c:spolecznosc:Blog:Wikia_News|nowościami]] oraz zasięgniesz pomocy na [http://spolecznosc.wikia.com/wiki/Specjalna:Chat?useskin=wikia czacie] albo [[w:c:spolecznosc:Specjalna:Forum|forum dyskusyjnym]].

Miłego edytowania!',
	'welcome-description' => 'Wysyła wiadomość powitalną dla użytkowników po ich pierwszej edycji.',
];

$messages['pms'] = [
	'welcome-user-page' => '==A propòsit ëd mi==

\'\'Costa-sì a l\'é soa pàgina utent. Për piasì ch\'a modìfica sta pàgina-sì për parlé ëd chiel a la comunità!\'\'

==Mie contribussion==

 [[Special:Contributions/$1|Contribussion ëd l\'utent]]

==Mie pàgine preferìe==

* Ch\'a gionta ambelessì j\'anliure a soe pàgine preferìe dzora a la wiki!
* Pàgina preferìa #2
* Pàgina preferìa #3',
	'welcome-message-user' => 'Cerea, bin ëvnù a {{SITENAME}}! Mersì për soe modìfiche a la pàgina [[:$1]].

Për piasì ch\'a lassa un mëssagi dzora a [[$2|mia pàgina ëd discussion]] se i peuss giuté con cheicòs! $3',
	'welcome-message-anon' => 'Cerea, bin ëvnù su {{SITENAME}}! Mersì për soa modìfica a la pàgina [[:$1]].

\'\'\'[[Special:Userlogin|Per piasì ch\'a intra e ch\'a crea un nòm utent]]\'\'\'. A l\'é na manera belfé ëd manten-e na marca ëd soe contribussion e a lo giuta a comuniché con ël rest ëd la comunità.

Për piasì ch\'a lassa un mëssagi su [[$2|mia pàgina ëd discussion]] s\'i peuss giuté con cheicòs! $3',
	'welcome-message-log' => 'bin ëvnù a un neuv contribudor',
	'welcome-message-user-staff' => '==Bin ëvnù==

Cerea, bin ëvnù su {{SITENAME}}! Mersì për soa modìfica a la pàgina [[:$1]].

S\'a l\'has dabzògn d\'agiut, e a-i é gnun aministrator locaj ambelessì, a peul 
visité le [[wikia:Forum:Community Central Forum|piasse dla Wiki Sentral ëd la Comunità]] $3',
	'welcome-message-anon-staff' => '==Bin ëvnù==

Cerea, bin ëvnù su {{SITENAME}}! Mersì për soa modìfica a la pàgina [[:$1]].

\'\'\'[[Special:Userlogin|Për piasì ch\'a intra e ch\'a crea un nòm utent]]\'\'\'. A l\'é na manera bel fé ëd ten-e trassa ëd soe contribussion e a-j giuta a comuniché con ël rest ëd la comunità.

S\'a l\'has dabzògn d\'agiut, e a-i é gnun aministrator locaj ambelessì, a peul visité le [[wikia:Forum:Community Central Forum|piasse ëd la Wiki Sentral ëd la Comunità]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|piassa d\'agiut]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Cerea, bin ëvnù su {{SITENAME}}! Mersì për soe modìfiche a la pàgina [[:$1]].

Për piasì ch\'am lassa un mëssagi se i peuss giuté con cheicòs!',
	'welcome-message-wall-user-staff' => 'Cerea,

Bin ëvnù su {{SITENAME}} e mersì për soa modìfica a la pàgina [[:$1]]. S\'a l\'ha damanca d\'agiut, ch\'a ancamin-a an dasend n\'ociada a nòstre [[Help:Contents|pàgine d\'agiut]]. Ch\'a vìsita la [[w:c:community|Sentral dla Comunità]] për ten-se anformà con nòstr [[w:c:community:Blog:Wikia_Staff_Blog|ëscartari d\'anformassion]], ch\'a ciama dle chestion an s\'nòstra [[w:c:community:Special:Forum|piassa dla comunità]], ch\'a partìssipa a la nòstra [[w:c:community:Help:Webinars|serie ëd seminari an sl\'aragnà]], o ch\'a ciaciara dal viv con dj\'amis Wikian. Bon-e modìfiche!',
	'welcome-message-wall-anon' => 'Cerea, bin ëvnù su {{SITENAME}}! Mersì për soa modìfica a la pàgina [[:$1]].

\'\'\'[[Special:Userlogin|Per piasì ch\'a intra ant ël sistema e ch\'a crea në stranòm]]\'\'\'. A l\'é na manera sempia ëd manten-e na marca ëd soe contribussion e a lo giuta a comuniché con ël rest ëd la comunità.

Për piasì ch\'am lassa un mëssagi s\'i peuss giuté con cheicòs!',
	'welcome-message-wall-anon-staff' => 'Cerea,

Bin ëvnù su {{SITENAME}} e mersì për soa modìfica a la pàgina [[:$1]]. I ancoragioma tuti ij contributor a [[Special:UserLogin|creé në stranòm]], parèj a peul ten-e ël cont ëd soe contribussion, acede a d\'àutre caraterìstiche ëd Wikia e conòsse ël rest ëd la comunità ëd {{SITENAME}}.

S\'a l\'ha damanca d\'agiut, ch\'a daga për prima còsa n\'ociada a nòstra [[Help:Contents|pàgina d\'agiut]] e peui ch\'a vìsita la [[w:c:community|Sentral dla comunità]] për amprende ëd pi. Bon-e modìfiche!',
];

$messages['ps'] = [
	'welcome-user-page' => '==زما په اړه==

\'\'دا ستاسې کارن مخ دی. لطفاً دا مخ سم کړۍ او د دې ځای ټولنې ته د ځان په اړه مالومات ورکړۍ!\'\'

==زما ونډې==

* [[Special:Contributions/$1|کارن ونډې]]

==زما خواپوري مخونه==

* دلته د همدې ويکي د خواپورو مخونو تړنې مو ورگډې کړۍ!
* خواپوری مخ #2
* خواپوری مخ #3',
];

$messages['pt'] = [
	'welcome-user-page' => '== Sobre mim ==
\'\'Esta é a tua página de utilizador. Por favor, edita esta página para contar mais sobre ti para a comunidade!\'\'

== As minhas contribuições ==
* [[Special:Contributions/$1|Contribuições deste utilizador]]

== As minhas páginas preferidas ==
* Adiciona links para as tuas páginas favoritas deste wiki!
* Página preferida #2
* Página preferida #3',
	'welcome-message-user' => 'Olá, bem-vindo(a) à {{SITENAME}}! Obrigado pela tua edição na página [[:$1]].

Por favor, deixa uma mensagem na [[$2|minha página de discussão]] se eu posso ajudar-te nalguma coisa! $3',
	'welcome-message-anon' => 'Olá, bem-vindo(a) a {{SITENAME}}! Muito obrigado pela sua edição em [[:$1]]. 

Porque não \'\'\'[[Special:Userlogin|criar uma conta]]\'\'\'? É uma maneira mais fácil de saber onde você editou e de se comunicar com o resto da comunidade. 

Por favor, se você tiver alguma dúvida, sinta-se à vontade para deixar uma mensagem no [[$2|meu mural de mensagens]]! $3',
	'welcome-message-log' => 'boas-vindas a novo colaborador',
	'welcome-message-user-staff' => '==Bem-vindo(a)==

Olá,

Bem-vindo(a) à {{SITENAME}} e obrigado pela tua edição na página [[:$1]]. Se necessitares de ajuda, começa por visitar as nossas [[Help:Contents|páginas de ajuda]]. Visita a [[w:c:community|Central da Comunidade]] para te manteres informado sobre o nosso [[w:c:community:Blog:Wikia_Staff_Blog|blog da equipa]], faz perguntas no  nosso [[w:c:community:Special:Forum|fórum da comunidade]], participa na nossa [[w:c:community:Help:Webinars|série webinar]], ou conversa ao vivo com outros Wikianos. Boas edições! $3',
	'welcome-message-anon-staff' => 'Olá, bem-vindo(a) à {{SITENAME}}! Muito obrigado pela tua edição em [[:$1]]. 

Porque não \'\'\'[[Special:Userlogin|crias uma conta e te identificas]]\'\'\'?  Desta forma será muito máis fácil saber as páginas que tu editaste e o trabalho será atribuido a ti na wiki, alem do mais será de grande ajuda na hora de comunicar-te com o resto da comunidade.

Se necessitas de ajuda e não encontras administradores locais, talvez queiras visitar os [[wikia:Forum:Community Central Forum|fóruns na Wiki Community Central]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|fórum de ajuda]] | [[w:sblog|blogue]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Olá, bem-vindo(a) à {{SITENAME}}! Obrigado pela tua edição na página [[:$1]].

Deixa-me uma mensagem se precisares de ajuda com qualquer coisa!',
	'welcome-message-wall-user-staff' => 'Olá!

Bem-vindo à {{SITENAME}} e obrigado pela tua edição na página [[:$1]]. Se precisas de ajuda, começa por verificar as nossas [[páginas de ajuda: Contents|páginas de ajuda]]. Visita a [[w:c:community|Comunidade Central]] para manter-te informado com o nosso [[w:c:community:Blog:Wikia_Staff_Blog|blog do staff]], fazer perguntas no nosso [[w:c:community:Special:Forum|fórum da comunidade]], participar na nossa [[w:c:community:Help:Webinars|série webinar]], ou ir ao chat em vivo com outros utilizadores de Wikia. Boas contribuições!',
	'welcome-message-wall-anon' => 'Olá, bem-vindo(a) à {{SITENAME}}! Muito obrigado pela tua edição na página [[:$1]]. 

Porque não \'\'\'[[Special:Userlogin|crias uma conta e te identificas]]\'\'\'?  Desta forma será muito mais fácil manter um registo das páginas que editaste e o trabalho será atribuído a ti na wiki, e além disso, ajuda a comunicar com o resto da comunidade.

Se tiveres alguma dúvida, deixa-me uma mensagem caso eu possa ajudar com alguma coisa.',
	'welcome-message-wall-anon-staff' => 'Ola, bem-vindo à {{SITENAME}} e obrigado pela tua edição na página [[:$1]]. Nós encorajamos todos os contribuintes para [[Special:UserLogin|criar um nome de utilizador]], então vais poder manter o controlo das tuas contribuições, acessar aos recursos de Wikia e conhecer o resto da comunidade {{SITENAME}}.
!!
Se precisas de ajuda, primeiro olha as nossas [[Help:Contents|páginas de ajuda]] e depois visita a [[w:c:community|Comunidade Central]] para obter mais informações. Boas contribuições!',
	'welcome-description' => 'Envia uma mensagem de boas-vindas para utilizadores depois das suas primeiras edições',
];

$messages['pt-br'] = [
	'welcome-user-page' => '== Sobre mim ==

\'\'Essa é sua página de usuário. Por favor, edite esta página e conte a comunidade algo sobre você!\'\'

== Minhas contribuições ==

* [[Special:Contributions/$1|Contribuições deste usuário]]

== Minhas páginas favoritas ==

* Adicione links para as suas páginas favoritas nesta wiki!
* Página favorita #2
* Página favorita #3',
	'welcome-message-user' => 'Olá, bem vindo(a) a {{SITENAME}}! Obrigada por sua edição em [[:$1]].

Estamos felizes que voce tenha criado uma conta.  Há muito que fazer na Wikirespostas, aquí estão as recomendações das coisas que voce pode fazer:

* Buscar perguntas [[Especial:Categorias|por categorias]].
* Visitar o [[Forum:Index|Forum de WikiRespostas]].
* [[Especial:Randomincategory/Perguntas_sem_respostas|Responder perguntas]]  que ainda não tem respostas.
* Ver as [[Especial:Páginas_novas|ultimas perguntas]] que foram feitas na WikiRespostas.

Por favor, se tiver alguma duvida, sinta-se a vontade para deixar uma mensagem em [[$2|minha discussão]] para ver se posso ajudar em alguma coisa. $3',
	'welcome-message-anon' => 'Ola, benvindo(a) a {{SITENAME}}! Muito obrigado por sua edição em [[:$1]]. 

Porque não \'\'\'[[Special:Userlogin|cria uma conta e se identifica]]\'\'\'?  Desta forma será muito máis fácil saber qué páginas voce editou e o trabalho será atribuido a voce na wiki, alem do mais será de grande ajuda na hora de se comunicar com o resto da comunidade.

Por favor, se tiver alguma duvida, sinta-se a vontade para deixar uma mensagem em [[$2|minha pagina de discussão]] para ver se posso te ajudar com alguma coisa $3',
	'welcome-message-log' => 'recebendo um novo contribuidor',
	'welcome-message-user-staff' => '==Bem-vindo(a)==

Olá, bem-vindo(a) à {{SITENAME}}! Obrigado pela sua edição da página [[:$1]].

Se você necessita de ajuda e não encontra administradores locais, talvez
queira visitar os [[wikia:Forum:Community Central Forum|fóruns na
Wiki Community Central]] $3',
	'welcome-message-anon-staff' => '==Bem-vindo(a)==

Olá, bem-vindo(a) à {{SITENAME}}! Obrigado pela sua edição da página [[:$1]].

\'\'\'[[Special:UserLogin|Por favor, registre-se e crie uma conta de usuário]]\'\'\'. É uma forma fácil de registrar as suas contribuições e facilita a comunicação com os demais usuários.

Se você necessita de ajuda e não encontra administradores locais, talvez queira visitar os [[wikia:Forum:Community Central Forum|fóruns na Wiki Community Central]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|fórum de ajuda]] | [[w:sblog|blogue]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Olá, bem-vindo a {{SITENAME}}! Obrigado pela sua edição na página [[:$1]].

Por favor, se tiver dúvidas, deixe uma mensagem no meu mural para que eu possa te ajudar em algo!',
	'welcome-message-wall-user-staff' => 'Olá, bem-vindo a {{SITENAME}}! Obrigado pela sua edição na página [[:$1]].

Se precisar de ajuda e não encontrar nenhum administrador local por aqui, você poderá visitar os [[wikia:Forum:Community Central Forum|os fóruns na Comunidade Central da Wikia]]. Você pode também verificar o nosso [[w:c:community:Blog:Wikia_Staff_Blog|Blog da Staff]] para manter-se atualizado com as últimas notícias e eventos sobre a Wikia.

Divirta-se com as edições!',
	'welcome-message-wall-anon' => 'Olá, bem-vindo a {{SITENAME}}! Obrigado pela sua edição na página [[:$1]].

\'\'\'[[Special:Userlogin|Por favor, crie uma conta e identifique-se]]\'\'\'. É uma maneira fácil para acompanhar suas contribuições e ajuda você a se comunicar com o resto da Comunidade.

Por favor, deixe-me uma mensagem se eu puder te ajudar com qualquer coisa!',
	'welcome-message-wall-anon-staff' => 'Olá, bem-vindo a {{SITENAME}}! Obrigado pela sua edição na página [[:$1]].

\'\'\'[[Special:Userlogin|Por favor, crie uma conta e identifique-se]]\'\'\'. É uma maneira fácil para acompanhar suas contribuições e ajuda você a se comunicar com o resto da Comunidade.

Por favor, deixe-me uma mensagem se eu puder te ajudar com qualquer coisa!',
	'welcome-description' => 'Envie uma mensagem de boas-vindas para usuários depois das suas primeiras edições',
];

$messages['roa-tara'] = [
	'welcome-message-log' => 'Bovègne a le condrebbutore nuève',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|forum d\'aijute]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-description' => 'Manne \'nu messàgge de bovègne a le utinde apprisse ca onne fatte \'u prime cangiamende',
];

$messages['ru'] = [
	'welcome-user-page' => '== Обо мне ==

\'\'Это ваша страница участника. Пожалуйста, отредактируйте эту страницу, расскажите о себе!\'\'

== Мой вклад ==

* [[Special:Contributions/$1|Вклад участника]]

== Мои избранные страницы ==

* Добавьте сюда ссылки на ваши любимые вики-страницы!
* Избранная страница №2
* Избранная страница №3',
	'welcome-message-user' => 'Здравствуйте, добро пожаловать на {{SITENAME}}! Спасибо за вашу правку на странице [[:$1]].

Пожалуйста, оставьте сообщение на [[$2|моей странице обсуждения]], если я могу чем-нибудь помочь! $3',
	'welcome-message-anon' => 'Привет, добро пожаловать на {{SITENAME}}! Спасибо за вашу правку на странице [[:$1]].

\'\'\'[[Special:Userlogin|Пожалуйста, представьтесь системе, создайте учётную запись]]\'\'\'. Это позволит легко следить за вашими изменениями, позволит вам общаться с другими членами сообщества.

Пожалуйста, оставьте сообщение на [[$2|моей странице обсуждения]], если я могу чем-то помочь! $3',
	'welcome-message-log' => 'приветствие нового автора',
	'welcome-message-user-staff' => '== Добро пожаловать ==
Привет, добро пожаловать на сайт {{SITENAME}}! Спасибо за ваше исправление на странице [[:$1]].

Если вам нужна помощь, начните со [[Help:Contents|справочных страниц]]. Посетите [[w:c:community|центральное сообщество]], чтоб быть в курсе нашего  [[w:c:community:Blog:Wikia_Staff_Blog|блога]], задавайте вопросы на  [[w:c:community:Special:Forum|форуме]], участвуйте в [[w:c:community:Help:Webinars|сериях вебинаров]] или общайтесь вживую с вики-товарищами. Удачных правок! $3',
	'welcome-message-anon-staff' => '== Добро пожаловать ==

Привет, добро пожаловать на сайт {{SITENAME}}! Спасибо за ваше исправление на странице [[:$1]]. Мы призываем всех участников [[Special:UserLogin|создавать учётные записи]], чтоб вы могли следить за своими исправлениями, иметь доступ к дополнительным возможностям и узнать остальных членов сообщества {{SITENAME}}.

Если вам нужна помощь, сначала проверьте [[Help:Contents|справочные страницы]], а затем посетите [[w:c:community|центральное сообщество]], чтоб узнать больше. Удачных правок! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|справочный форум]] | [[w:sblog|блог]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Здравствуйте, добро пожаловать на {{SITENAME}}! Спасибо за вашу правку на странице [[:$1]].

Пожалуйста, оставьте мне сообщение, если я могу вам чем-нибудь помочь.

Также, если вам нужна помощь:
* Посетите [[Справка:Содержание|страницы Справки]], где есть ответы на большинство простых вопросов.
* Изучите справочные видео-курсы в [[w:c:ru.community:Университет_Викия|Университете Викия]]
* Прочтите [[w:c:ru.community|последние записи в блогах]], чтобы узнать о новых возможностях и обновлениях Викия.

Счастливого редактирования!',
	'welcome-message-wall-user-staff' => 'Здравствуйте. Добро пожаловать на {{SITENAME}}! Спасибо за вашу правку на странице [[:$1]].

Администраторы данной вики отсутствуют, поэтому если вам нужна помощь:
* Посетите [[Справка:Содержание|страницы Справки]], где есть ответы на большинство простых вопросов.
* Изучите справочные видео-курсы в [[w:c:ru.community:Университет_Викия|Университете Викия]]
* Прочтите [[w:c:ru.community|последние записи в блогах]], чтобы узнать о новых возможностях и обновлениях Викия.
* [[w:c:ru.community:Служебная:Forum|Наш Форум]] всегда открыт для вас. На нём вы можете задать любой вопрос и получить ответ на него от опытных участников разных википроектов. 

Счастливого редактирования!',
	'welcome-message-wall-anon' => 'Здравствуйте, добро пожаловать на {{SITENAME}}! Спасибо за правку на странице $1.

\'\'\'[[Special:Userlogin|Пожалуйста, зарегистрируйтесь и создайте учётную запись]]\'\'\'. Так будет проще следить за собственным вкладом в вики и общаться с другими участниками вики-сообщества.

Пожалуйста, оставьте мне сообщение, если я могу вам чем-нибудь помочь.',
	'welcome-message-wall-anon-staff' => 'Здравствуйте, добро пожаловать на {{SITENAME}}! Спасибо за правку на странице [[:$1]].

\'\'\'[[Special:Userlogin|Пожалуйста, зарегистрируйтесь и создайте учётную запись]]\'\'\'. Так будет проще следить за собственным вкладом в вики и общаться с другими участниками вики-сообщества.

Пожалуйста, оставьте мне сообщение, если я могу вам чем-нибудь помочь.',
	'welcome-description' => 'Отправляет сообщение с приветствием пользователям после их первых правок',
];

$messages['sr-ec'] = [
	'welcome-user-page' => '== О мени ==

\'\'Ово је ваша корисничка страница. Измените је да бисте рекли нешто о себи!\'\'

== Прилози ==

* [[Special:Contributions/{{PAGENAME}}|Прилози корисника]]

== Омиљене странице ==

* Додаје везе до ваших омиљених страница на викији!
* Омиљена страница #2
* Омиљена страница #3',
	'welcome-message-user' => 'Здраво и добро дошли на {{SITENAME}}! Хвала вам на измени на [[:$1]] страници.

Оставите коментар на [[$2|страници за разговор]] ако вам икако могу помоћи! $3',
	'welcome-message-anon' => 'Здраво и добро дошли на {{SITENAME}}! Хвала вам на измени на [[:$1]] страници.

\'\'\'[[Special:Userlogin|Пријавите се и направите корисничко име]]\'\'\'.
То је најлакши начин да приступите својим доприносима и комуницирате с остатком заједнице.

Оставите коментар на [[$2|страници за разговор]] ако вам икако могу помоћи! $3',
	'welcome-message-log' => 'добродошлица за новог корисника',
	'welcome-message-user-staff' => '== Добродошлица ==

Здраво и добро дошли на {{SITENAME}}! Хвала вам на измени на [[:$1]] страници.

Ако вам буде затребала помоћ а не нађете администратора, посетите [[wikia:Forum:Community Central Forum|форум на Централној вики заједници]] $3',
	'welcome-message-anon-staff' => '== Добродошлица ==

Здраво и добро дошли на {{SITENAME}}.
Хвала вам на измени на [[:$1]] страници.

\'\'\'[[Special:UserLogin|Пријавите се и направите корисничко име]]\'\'\'.
То је најлакши начин да приступите својим доприносима и комуницирате с остатком заједнице.

Ако вам буде затребала помоћ а не нађете администратора, посетите [[wikia:Forum:Community Central Forum|форум на Централној вики заједници]] $3',
];

$messages['sv'] = [
	'welcome-user-page' => '==Om mig==

\'\'Detta är din användarsida. Redigera den här sidan för att berätta för gemenskapen om dig själv!\'\'

==Mina bidrag==

* [[Special:Contributions/$1|Användarbidrag]]

==Mina favoritsidor==

* Lägg till länkar till dina favoritsidor på wikin här!
* Favoritsida #2
* Favoritsida #3',
	'welcome-message-user' => '== Välkommen ==
Hej $4, välkommen till {{SITENAME}}! Tack för din ändring till [[:$1]] sidan.

Lämna ett meddelande på [[$2|min diskussionssida]] om jag kan hjälpa till med något! $3',
	'welcome-message-anon' => '== Välkommen ==
Hej, välkommen till {{SITENAME}}. Tack för din ändring till [[:$1]] sidan.

\'\'\'[[:Special:UserLogin|Logga in och skapa ett användarnamn]]\'\'\'. Det är ett enkelt sätt att hålla koll på era inlägg och hjälper dig att kommunicera med resten av gemenskapet.

Lämna ett meddelande på [[$2|min diskussionssida]] om jag kan hjälpa till med något! $3',
	'welcome-message-log' => 'välkomna nya bidragsgivare',
	'welcome-message-user-staff' => '==Välkommen==

Hej, välkommen till {{SITENAME}}! Tack för ditt registera till [[:$1]] sidan.

Om du behöver hjälp, och det finns inga lokala administratörer här kanske du vill besöka [[wikia:Forum:Community Central Forum|forumen på Community Central Wiki]] $3',
	'welcome-message-anon-staff' => '==Välkommen==

Hej, välkommen till {{SITENAME}}. Tack för ditt redigera till [[:$1]] sidan.

\'\'\'[[Special:Userlogin|Logga in och skapa ett användarnamn]]\'\'\'. Det är ett enkelt sätt att hålla koll på era inlägg och hjälper dig att kommunicera med resten av gemenskapet.

Om du behöver hjälp, och det finns inga lokala administratörer här kanske du vill besöka [[wikia:Forum:Community Central Forum|forumen på Community Central Wiki]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|hjälpforum]] | [[w:sblog|blogg]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Hej, välkommen till {{SITENAME}}! Tack för din redigering på sidan [[:$1]].

Lämna ett meddelande på min diskussionssida om jag kan hjälpa till med något!',
	'welcome-message-wall-user-staff' => 'Hej!

Välkommen till {{SITENAME}} och tack för din redigering på sidan [[:$1]].

Om du behöver hjälp kan du börja med att gå in på [[Help:Contents|help pages]]. Besök [[w:c:community|gemenskapscentralen]] för att bli informerad med vår [[w:c:community:Blog:Wikia_Staff_Blog|personals blogg]], ställ frågor på vårt [[w:c:community:Special:Forum|gemenskapsforum]], delta i våra [[w:c:community:Help:Webinars|webbkonferenser]] eller chatta direkt med andra Wikianer. Lycka till med redigeringen!',
	'welcome-message-wall-anon' => 'Hej, välkommen till {{SITENAME}}! Tack för din redigering på sidan [[:$1]].

\'\'\'[[Special:Userlogin|Var god logga in och skapa ett användarnamn]]\'\'\'. Det är ett enkelt sätt att hålla koll på dina bidrag and hjälper dig att kommunicera med resten av gemenskapen.

Lämna mig ett meddelande om jag kan hjälpa till med något!',
	'welcome-message-wall-anon-staff' => 'Hej!
Välkommen till {{SITENAME}} och tack för din redigering på sidan [[:$1]]. Vi uppmuntrar alla bidragsgivare att [[Special:UserLogin|skapa ett användarnamn]] så du kan hålla reda på alla dina bidrag, få tillgång till fler Wikia-funktioner och lära känna resten av gemenskapen på {{SITENAME}}.

Om du behöver hjälp kan du börja med att kolla på våra [[Help:Contents|hjälpsidor]] och sedan besöka [[w:c:community|Gemenskapscentralen]] för att läsa mer. Lycka till med redigeringen!',
	'welcome-description' => 'Skickar ett välkomstmeddelande till användare efter deras första redigering',
];

$messages['te'] = [
	'welcome-user-page' => '==నా గురించి==

\'\'ఇది మీ వాడుకరి పేజీ. ఈ పేజీలో మార్పుచేర్పులు చేసి, మీగురించి సముదాయానికి చెప్పండి!\'\'

==నా మార్పుచేర్పులు==

* [[Special:Contributions/$1|వాడుకరి మార్పుచేర్పులు]]

==నా అభిమాన పేజీలు==

* వికీలోని మీ అభిమాన పేజీల లింకులను ఇక్కడ చేర్చండి!
* అభిమాన పేజీ #2
* అభిమాన పేజీ #3',
	'welcome-message-user' => 'హలో, {{SITENAME}} కు స్వాగతం! [[:$1]] పేజీలో మీరు చేసిన మార్పుకు నెనరులు.

నేనేమైనా సాయపడగలననుకుంటే [[$2|నా చర్చాపేజీలో]] సందేశం పెట్టండి! $3',
	'welcome-message-anon' => '{{SITENAME}} కు స్వాగతం! [[:$1]] పేజీలో మీరు చేసిన మార్పులకు నెనరులు.

\'\'\'[[Special:Userlogin|లాగినై ఓ వాడుకరి పేరును సృష్టించుకోండి]]\'\'\'.
మీ రచనలను గమనిస్తూ ఉండేందుకు అది సులువైన మార్గం. సముదాయంతో మాట్లాడేందుకు కూడా అది పనికొస్తుంది.

నా సాయమేదైనా కావలిస్తే [[$2|నా చర్చా పేజీలో]] సందేశం పెట్టండి! $3',
	'welcome-message-log' => 'కొత్త సమర్పకుని స్వాగతించడం',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|సహాయ వేదిక]] | [[w:sblog|బ్లాగు]])</small>',
	'welcome-message-wall-user' => 'హలో, {{SITENAME}} కు స్వాగతం! [[:$1]] పేజీలో మీరు చేసిన మార్పుకు నెనరులు.

నేనేమైనా సాయపడగలననుకుంటే నాకో సందేశం పెట్టండి!',
	'welcome-description' => 'వాడుకరులు తమ మొదటి మార్పు చెయ్యగానే వారికి స్వాగత సందేశం పంపిస్తుంది',
];

$messages['th'] = [
	'welcome-user-page' => '==เกี่ยวกับฉัน==

\'\'นี่เป็นหน้าผู้ใช้ของคุณ. กรุณาแก้ไขหน้านี้เพื่อบอกให้ชุมชนรู้เรื่องเกี่ยวกับตัวคุณ!\'\'

== ผลงานของฉัน==
* [[Special:Contributions/{{PAGENAME}}|ผลงานของผู้ใช้]]

==หน้าโปรดของฉัน==

* เพิ่มการเชื่อมโยงไปยังหน้าโปรดบนวิกิ นี้!
* หน้ารายการโปรด #2
* หน้ารายการโปรด #3',
	'welcome-message-user' => 'สวัสดี, ยินดีต้อนรับสู่ {{SITENAME}}! ขอบคุณสำหรับการแก้ไขหน้า [[:$1]]

กรุณาฝากข้อความบน [[$2|หน้าพูดคุยของฉัน]] ถ้าฉันสามารถช่วยบางเรื่องได้! $3',
	'welcome-message-anon' => 'สวัสดี, ยินดีต้อนรับสู่ {{SITENAME}}!n ขอบคุณสำหรับการแก้ไขหน้า [[:$1]]

\'\'\'[[Special:Userlogin|กรุณาเข้าสู่ระบบและสร้างชื่อผู้ใช้]]\'\'\'
มันเป็นทางที่ง่ายในการติดตามผลงานของคุณและให้ความช่วยเหลือการติดต่อกับบุคคลที่เหลือนบนชุมชน

กรุณาฝากข้อความบน [[$2|หน้าพูดคุยของฉัน]] ถ้าฉันสามารถช่วยบางเรื่องได้! $3',
	'welcome-message-log' => 'พร้อมรับผู้ร่วมงานใหม่',
	'welcome-message-user-staff' => '==ยินดีต้อนรับ==

สวัสดี, ยินดีต้อนรับสู่ {{SITENAME}}! ขอบคุณสำหรับการแก้ไขหน้า [[:$1]]

ถ้าคุณต้องการให้ช่วย, และไม่มีผู้ดูแลที่นี่ คุณอาจจำเป็นต้องไปที่เยี่ยมชม [[wikia:Forum:Community Central Forum|ฟอรั่มบนศูนย์กลางชุมชนวิกิ]] $3',
	'welcome-message-anon-staff' => '==ยินดีต้อนรับ==

สวัสดี, ยินดีต้อนรับสู่ {{SITENAME}}
ขอบคุณสำหรับการแก้ไขหน้า [[:$1]]

\'\'\'[[Special:UserLogin|กรุณาเข้าสู่ระบบและสร้างชื่อผู้ใช้]]\'\'\'
มันเป็นทางที่ง่ายในการติดตามผลงานของคุณและให้ความช่วยเหลือการติดต่อกับบุคคลที่เหลือนบนชุมชน

ถ้าคุณต้องการให้ช่วย และไม่มีผู้ดูแลที่นี่ คุณอาจจำเป็นต้องไปที่เยี่ยมชม [[wikia:Forum:Community Central Forum|ฟอรั่มบนศูนย์กลางชุมชนวิกิ]] $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|กระดานช่วยเหลือ]] | [[w:sblog|บล๊อก]])</small>',
	'hawelcomeedit' => 'ยินดีต้อนรับสู่ HA',
];

$messages['tl'] = [
	'welcome-user-page' => '==Patungkol sa akin==

\'\'Ito ang iyong pahina ng tagagamit. Paki baguhin ang pahinang ito upang makapagsabi sa pamayanan ng hinggil sa sarili mo!\'\'

==Mga ambag ko==

* [[Special:Contributions/$1|User contributions|Mga ambag ng tagagamit]]

==Mga paborito kong pahina==

* Nagdaragdag dito ng mga kawing sa iyong paboritong mga pahina sa wiki!
* Paboritong pahina #2
* Paboritong pahina #3',
	'welcome-message-user' => 'Kumusta, maligayang pagdating sa {{SITENAME}}! Salamat sa pamamatnugot mo sa pahinang [[:$1]].

Mangyaring mag-iwan ng isang mensahe sa [[$2|pahina ko ng usapan]] kung makakatulong ako sa anumang bagay! $3',
	'welcome-message-anon' => 'Kumusta, maligayang pagdating sa {{SITENAME}}! Salamat sa pamamatnugot mo sa pahinang [[:$1]].

\'\'\'[[Special:Userlogin|Mangyaring lumagda at lumikha ng isang pangalan ng tagagamit]]\'\'\'. Isa itong madaling paraan upang masubaybayan ang mga ambag mo at makatutulong sa iyong makipag-ugnayan sa iba pang nasa pamayanan.

Mangyaring mag-iwan ng isang mensahe sa [[$2|pahina ko ng talakayan]] kung makakatulong ako sa anumang bagay! $3',
	'welcome-message-log' => 'maligayang binabati ang bagong tagaambag',
	'welcome-message-user-staff' => '==Maligayang pagdating==

Kumusta, maligayang pagdating sa {{SITENAME}}! Salamat sa pamamatnugot mo sa pahinang [[:$1]].

Kung kailangan mo ng tulong, at walang katutubong mga tagapangasiwa dito, maaaring naisin mong
dalawin ang [[wikia:Forum:Community Central Forum|mga poro sa Wiki ng Pangunahing Pamayanan]] $3',
	'welcome-message-anon-staff' => '==Maligayang pagdating==

Kumusta, maligayang pagdating sa {{SITENAME}}! Salamat sa pamamatnugot mo sa pahinang [[:$1]].

\'\'\'[[Special:Userlogin|Mangyaring lumagda o lumikha ng isang pangalan ng tagagamit]]\'\'\'. Isa itong maginhawang paraan upang masubaybayan ang mga ambag mo at makakatulong sa pakikipag-ugnayan mo sa iba pang mga nasa pamayanan.

Kung kailangan mo ng tulong, at walang katutubong mga tagapangasiwa dito, maaaring naisin mong
dalawin ang [[wikia:Forum:Community Central Forum|mga poro sa Wiki ng Pangunahing Pamayanan]] $3',
	'staffsig-text' => ' [[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|poro ng tulong]] | [[w:sblog|blog]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Kumusta, maligayang pagdating sa {{SITENAME}}! Salamat sa pamamatnugot mo sa pahina ng [[:$1]].

Mangyaring iwanan ako ng isang mensahe kung makakatulong ako sa anumang bagay!',
	'welcome-message-wall-user-staff' => 'Hoy, maligayang pagdating sa {{SITENAME}}! Salamat sa binago mo sa pahina ng [[:$1]].

Kung kailangan mo ng tulong, at walang katutubong mga tagapangasiwa rito, maaaring naisin mong dalawin ang [[wikia:Forum:Community Central Forum|mga porum na nasa Lunduyang Wiki ng Pamayanan]]. Maaari mo ring tingnan at suriin ang aming [[w:c:community:Blog:Wikia_Staff_Blog|blog ng Tauhan]] upang manatiling nakakaalam sa pinakahuling mga balita at mga kaganapan sa paligid ng Wikia.

Maligayang pamamatnugot!',
	'welcome-message-wall-anon' => 'Kumusta, maligayang pagdating sa {{SITENAME}}! Salamat sa pamamatnugot mo sa pahina ng [[:$1]].

\'\'\'[[Special:Userlogin|Paki lumagda at lumikha ng isang pangalan ng tagagamit]]\'\'\'. Isa itong madaling paraan upang masubaybayan ang mga ambag mo at makatutulong sa iyong makipag-ugnayan sa iba pang nasa pamayanan.

Mangyaring iwanan ako ng isang mensahe kung makakatulong ako sa anumang bagay!',
	'welcome-message-wall-anon-staff' => 'Kumusta, maligayang pagdating sa {{SITENAME}}! Salamat sa pamamatnugot mo sa pahina ng [[:$1]].

\'\'\'[[Special:Userlogin|Paki lumagda at lumikha ng isang pangalan ng tagagamit]]\'\'\'. Isa itong madaling paraan upang masubaybayan ang mga ambag mo at makatutulong sa iyong makipag-ugnayan sa iba pang nasa pamayanan.

Paki iwanan ako ng isang mensahe kung makakatulong ako sa anumang bagay!',
];

$messages['tr'] = [
	'welcome-user-page' => '== Hakkımda ==

\'\'Bu kullanıcı sayfanızdır. Kendinizi topluluğa tanıtmak için bu sayfayı düzenleyin!\'\'

== Katkılarım ==

* [[Special:Contributions/$1|Kullanıcı katkıları]]

== Favori sayfalarım ==

* Buraya sevdiğiniz wiki sayfalarını ekleyin!
* Favori sayfası #2
* Favori sayfası #3',
];

$messages['tt-cyrl'] = [
	'welcome-user-page' => '==Минем турыда==

\'\'Бу сезнең кулланучы сәхифәсе. Зинһар, аны төзәтегез һәм үзегез турында сөйләгезf!\'\'

==Mинем кертем==

* [[Special:Contributions/$1|Кулланучы кертеме]]
== Минем сайланган  мәкаләләрем==

* Яраткан вики-мәкаләләрегезгә сылтаманы монда өстәгез
* Сайланган мәкалә #2
* Сайланган мәкалә #3',
];

$messages['uk'] = [
	'welcome-user-page' => '==Про мене==

\'\'Це ваша сторінка користувача. Будь ласка, відредагуйте її, розповівши спільноті про себе.\'\'

==Мій внесок==

* [[Special:Contributions/$1|Внесок користувача]]

==Мої улюблені сторінки==

* Додайте тут посилання на свої улюблені сторінки у вікі!
* Улюблена сторінка №2
* Улюблена сторінка №3',
	'welcome-message-user' => 'Привіт, ласкаво просимо на {{SITENAME}}! Дякуємо за редагування сторінки [[:$1]].

Будь ласка, [[$2|повідомте мене]], якщо я можу чим-небудь допомогти! $3',
	'welcome-message-anon' => 'Вітаю, ласкаво просимо на {{SITENAME}}! Дякую за редагування сторінки [[:$1]].

\'\'\'[[Special:Userlogin|Увійдіть до системи або зареєструйтеся]]\'\'\'.
Це допоможе вам легко стежити за змінами на сторінках та спілкуватися з іншими учасниками спільноти.

Будь ласка, [[$2|повідомте мене]], якщо я можу чимось допомогти! $3',
	'welcome-message-log' => 'привітання нового користувача',
	'welcome-message-user-staff' => '==Вітання==

Привіт!

Ласкаво просимо на {{SITENAME}}! Дякуємо за редагування сторінки [[:$1]].
Якщо вам потрібна допомога, то для початку перегляньте [[Help:Contents|довідку]]. Відвідайте [[w:c:community|Центральну Спільноту]], щоб бути в курсі останніх подій на  [[w:c:community:Blog:Wikia_Staff_Blog|блозі співробітників]], задавайте питання на нашому [[w:c:community:Special:Forum|форумі спільноти]], візьміть участь у [[w:c:community:Help:Webinars|серіях вебінарів]] або спілкуйтеся в чаті з іншими учасниками.

Творчих успіхів! $3',
	'welcome-message-anon-staff' => '==Привіт==

Ласкаво просимо на {{SITENAME}}! Дякуємо за редагування сторінки [[:$1]].

Рекомендуємо вам [[Special:UserLogin|зареєструватися на сайті]], щоб слідкувати за змінами на сторінках та спілкуватися з іншими учасниками {{SITENAME}}.

Якщо вам потрібна допомога, то перегляньте [[Help:Contents|довідку]], а потім відвідайте [[w:c:community|Центральну Спільноту]], щоб дізнатися більше.

Творчих успіхів! $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|форум допомоги]] | [[w:sblog|блог]])</small>',
	'hawelcomeedit' => 'HAWelcomeEdit',
	'welcome-message-wall-user' => 'Вітаємо вас на {{SITENAME}}! Дякуємо за ваші редагування на сторінці [[:$1]].

Будь ласка, залишіть мені повідомлення, якщо я можу вам допомогти!',
	'welcome-message-wall-user-staff' => 'Вітаємо вас на {{SITENAME}}! Дякуємо за ваші редагування на сторінці [[:$1]].

Якщо вам потрібна допомгоа, а місцеві адміністратори відсутні, вы можете відвідати [[wikia:Forum:Community Central Forum|Форум на Центральній вікі]]. Також, ви можете перевірити наш [[w:c:community:Blog:Wikia_Staff_Blog|Staff blog]] щоб бути в курсі останніх новин на Вікія.

Щасливого редагування!',
	'welcome-message-wall-anon' => 'Вітаю, ласкаво просимо до {{SITENAME}}! Дякуємо за редагування сторінки [[:$1]].

\'\'\'[[Special:Userlogin|Увійдіть до системи або зареєструйтеся]]\'\'\'.
Це допоможе вам легко стежити за змінами на сторінках та спілкуватися з іншими учасниками спільноти.

Будь ласка, повідомте мене, якщо я можу чимось допомогти!',
	'welcome-message-wall-anon-staff' => 'Привіт, ласкаво просимо на {{SITENAME}}! Дякуємо за редагування сторінки [[:$1]].

Рекомендуємо вам [[Special:UserLogin|зареєструватися на сайті]], щоб слідкувати за змінами на сторінках та спілкуватися з іншими учасниками {{SITENAME}}.

Якщо вам потрібна допомога, перегляньте [[Help:Contents|довідку]], а також відвідайте [[w:c:community|Центральну Спільноту]], щоб дізнатися більше.

Творчих успіхів!',
	'welcome-description' => 'Надсилає привітальне повідомлення новим користувачам після їхнього першого редагування на вікі',
];

$messages['ur'] = [
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff> </staff> <small>([[w:forums|معاونت چوپال]] | [[w:sblog|blog]])</small>',
];

$messages['vi'] = [
	'welcome-user-page' => '==Giới thiệu thành viên==
\'\'Đây là trang thành viên của bạn. Xin vui lòng viết và sửa đổi trang này để cho cộng đồng biết một chút về bạn!\'\'

==Đóng góp==
* [[Special:Contributions/$1|Đóng góp của tôi]]

==Bài viết ưa thích==
* Liên kết bài viết trên wiki mà bạn thích tại đây!
* trang thứ 2
* trang thứ 3',
	'welcome-message-user' => 'Chào, hoan nghênh bạn đến {{SITENAME}}! Cảm ơn bạn đã sửa đổi trang [[:$1]].

Xin vui lòng để lại tin nhắn vào [[$2|trang thảo luận]] của tôi nếu bạn cần trợ giúp về bất cứ điều gì! $3',
	'welcome-message-anon' => 'Chào bạn, hoan nghênh bạn đến {{SITENAME}}! Cảm ơn bạn đã sửa đổi trang [[:$1]].

\'\'\'[[Special:Userlogin|Xin hãy đăng ký và tạo tài khoản mới]]\'\'\'.

Đó là cách dễ dàng để giữ lại những đóng góp của bạn và giúp bạn giao tiếp với cộng đồng.

Xin vui lòng để lại tin nhắn vào [[$2|trang thảo luận]] của tôi nếu bạn cần trợ giúp về bất cứ điều gì! $3',
	'welcome-message-log' => 'Chào mừng thành viên mới',
	'welcome-message-user-staff' => '==Hoan nghênh==

Xin chào,

Hoan nghênh vì bạn đã đến thăm {{SITENAME}}! Cảm ơn bạn đã sửa đổi trang [[:$1]]. Wiki hiện nay không có bảo quản viên, vì thế nên nếu bạn cần trợ giúp, xin hãy bắt đầu vào [[Help:Mục lục|trang trợ giúp]] hoặc có lẽ bạn sẽ cần đến [[w:vi:Special:Forum|Diễn đàn Cộng đồng wikia]]. Bạn cũng có thể xem qua [[w:vi:Blog:Trang chủ|blog cộng đồng]] của chúng tôi để cập nhật với những tin tức và sự kiện hoặc tham gia tán gẫu với những Wikian khác. Biên tập vui vẻ! $3',
	'welcome-message-anon-staff' => '==Xin chào==

Chào bạn

Hoan nghênh bạn đến với {{SITENAME}}! Cảm ơn bạn đã sửa đổi trang [[:$1]].

\'\'\'[[Special:UserLogin|Xin bạn đăng kí và tạo tài khoản mới]]\'\'\'.

Đó là cách dễ dàng để giữ lại những đóng góp của bạn và giúp bạn giao tiếp với cộng đồng.

Wiki hiện nay không có bảo quản viên, vì thế nên nếu bạn cần giúp đỡ, bạn có thể vào [[Help:Mục lục|trang trợ giúp]] hoặc có lẽ bạn sẽ cần đến [[w:vi:Trang Chính|Cộng đồng Wikia tiếng Việt]].

Biên tập vui vẻ! $3',
	'staffsig-text' => '<noinclude>[[w:forums|help forum]][[w:sblog|blog]]</noinclude>[[{{ns:user}}:$1|$2]]<staff /> <small>(<a href="http://congdong.wikia.com/wiki/Special:Forum">diễn đàn trợ giúp</a> | <a href="http://congdong.wikia.com/wiki/Blog:Trang_chủ">blog</a> | <a href="http://congdong.wikia.com/wiki/Trang_Chính">Cộng đồng Wikia tiếng Việt</a>)</small>',
	'hawelcomeedit' => 'Sửa đổi thông điệp chào đón',
	'welcome-message-wall-user' => 'Chào bạn, hoan nghênh bạn đến {{SITENAME}}! Cảm ơn sửa đổi của bạn tại trang [[:$1]].

Xin vui lòng để lại cho tôi một tin nhắn nếu tôi có thể giúp với bất cứ điều gì!',
	'welcome-message-wall-user-staff' => 'Chào bạn, hoan nghênh bạn đến {{SITENAME}}! Cảm ơn bạn đã sửa đổi trang [[:$1]].

Wiki hiện nay không có bảo quản viên, vì thế nên nếu bạn cần trợ giúp, có lẽ bạn sẽ cần đến [[w:vi:Special:Forum|Diễn đàn Cộng đồng Wikia]] trên [[wikia:vi:Trang Chính|Cộng đồng Wikia tiếng Việt]]. Bạn cũng có thể xem qua [[w:vi:Blog:Trang chủ|blog cộng đồng]] của chúng tôi để cập nhật với những tin tức và sự kiện mới nhất xung quanh Wikia hoặc tham gia tán gẫu với các Wikian khác.

Biên tập vui vẻ!',
	'welcome-message-wall-anon' => 'Chào bạn, hoan nghênh bạn đến với {{SITENAME}}! Cảm ơn bạn đã sửa đổi trang [[:$1]].

\'\'\'[[Special:Userlogin|Xin hãy đăng ký và tạo tài khoản mới]]\'\'\'. Đó là cách dễ dàng để giữ lại những đóng góp của bạn và giúp bạn giao tiếp với cộng đồng.

Xin vui lòng để lại tin nhắn cho tôi nếu bạn cần sự trợ giúp về bất cứ điều gì!',
	'welcome-message-wall-anon-staff' => 'Chào bạn, hoan nghênh bạn đến với {{SITENAME}}! Cảm ơn bạn đã sửa đổi trang [[:$1]].

\'\'\'[[Special:UserLogin|Xin hãy đăng kí tài khoản mới]]\'\'\'. Đó là cách dễ dàng để giữ lại những đóng góp của bạn và giúp bạn giao tiếp với cộng đồng. Ngoài ra còn giúp bạn che giấu và không để địa chỉ IP của bạn. Ngoài ra còn rất nhiều điều đang chờ đón bạn khi tạo tài khoản mới

Wiki hiện nay không có bảo quản viên, vì thế nên nếu bạn cần trợ giúp, bạn có thể vào [[Help:Mục lục|trang trợ giúp]] hoặc bạn cần đến [[w:vi:Trang Chính|Cộng đồng Wikia tiếng Việt]].

Biên tập vui vẻ!',
	'welcome-description' => 'Gửi thư chào đón cho người dùng sau khi có một sửa đổi đầu tiên của họ',
];

$messages['zh-hans'] = [
	'welcome-user-page' => '==关于我==

\'\'这是您的用户页面。请编辑本页向整个社区介绍您！\'\'

==我的贡献==

* [[Special:Contributions/$1|用户贡献]]

==我喜爱的页面==

* 在此为您喜爱的页面添加链接！
* 喜爱的页面 #2
* 喜爱的页面 #3',
	'welcome-message-user' => '嗨，欢迎来到{{SITENAME}}！ 感谢您对[[:$1]]页面的编辑。

请在[[$2|我的讨论页]]处留言，如果我能帮助您什么事情的话！$3',
	'welcome-message-anon' => '您好，欢迎来到{{SITENAME}}！感谢您编辑[[:$1]]页面。

\'\'\'[[Special:Userlogin|建议您登录并创建一个用户名]]\'\'\'。
这样会更方便来追踪您的贡献和帮助您与社区其他成员进行沟通。

如果有我可以帮忙的地方，请在[[$2|我的讨论页]]留言！$3',
	'welcome-message-log' => '欢迎新贡献者',
	'welcome-message-user-staff' => '==欢迎==

嗨！欢迎来到{{SITENAME}}，感谢您在页面[[:$1]]的编辑。如果你需要帮助，请访问我们的[[Help:Contents|帮助页面]]。另外可以访问[[w:c:zh.community|社群中心]]，通过[[w:c:zh.community:博客:博客帖子|职员博客]]留下您的信息，或在[[w:c:zh.community:Special:Forum|社区论坛]]提问，或参与Wikia上的维基人聊天。祝编辑愉快！
$3',
	'welcome-message-anon-staff' => '==欢迎==

嗨！

欢迎来到{{SITENAME}}，感谢您对页面[[:$1]]的编辑。我们鼓励所有贡献者[[Special:UserLogin|创建用户名]]，这样您就可以跟踪您的贡献，访问更多Wikia功能并与{{SITENAME}}其他社群成员保持亲近。

如果您需要帮助，请先访问[[Help:Contents|帮助页面]]，然后访问[[w:c:zh.community|社区中心]]以了解更多。祝编辑愉快！$3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /><small>（[[w:forums|帮助论坛]] | [[w:sblog|博客]]）</small>',
	'hawelcomeedit' => 'HA欢迎编辑',
	'welcome-message-wall-user' => '嗨，欢迎来到{{SITENAME}}！ 感谢您协助编辑[[:$1]]页。

如果我能帮忙做些什么，请给我留言！',
	'welcome-message-wall-user-staff' => '嗨！

欢迎来到{{SITENAME}}，感谢您对页面[[:$1]]的编辑。如果您需要帮助，请从访问[[Help:Contents|帮助页面]]开始。访问[[w:c:community|社群中心]]以评论我们的[[w:c:zh.community:博客:博客帖子|职员博客]]，在[[w:c:zh.community:Special:Forum|社区中心论坛]]提问问题，或与其他维基人聊天。祝编辑愉快！',
	'welcome-message-wall-anon' => '嗨！欢迎来到{{SITENAME}}，感谢您对页面[[:$1]]的编辑。

\'\'\'[[Special:Userlogin|请登录并创建用户名]]\'\'\'。这是您跟踪您的贡献和帮助了解其他社群成员的最好方式。

如果我能帮助您什么请留下信息！',
	'welcome-message-wall-anon-staff' => '嗨！欢迎来到{{SITENAME}}，感谢您对页面[[:$1]]的编辑。我们鼓励所有贡献者[[Special:UserLogin|创建用户名]]，这样您就可以跟踪您的贡献，访问更多Wikia功能并与{{SITENAME}}其他社群成员保持亲近。

如果您需要帮助，请先访问[[Help:Contents|帮助页面]]，然后访问[[w:c:zh.community|社群中心]]以了解更多。祝编辑愉快！',
	'welcome-description' => '在用户初次贡献后发一条欢迎消息给他们',
];

$messages['zh-hant'] = [
	'welcome-user-page' => '==關於我==

\'\'這是您的使用者頁面。請編輯本頁向整個社群介紹您自己！\'\'

==我的貢獻==

* [[Special:Contributions/$1|使用者貢獻]]

==我最愛的頁面==

* 在此為您喜愛的頁面增加連結！
* 最愛的頁面 #2
* 最愛的頁面 #3',
	'welcome-message-user' => 'Hi，歡迎來到{{SITENAME}}！ 感謝您對[[:$1]]頁面的編輯。

如果我能幫助您的話，請在[[$2|我的討論頁]]留言。$3',
	'welcome-message-anon' => '嗨，歡迎來到{{SITENAME}}！感謝您編輯[[:$1]]頁面。

\'\'\'[[Special:Userlogin|建議您登錄登創建一個用戶名]]\'\'\'。
這是用來保持跟蹤您貢獻和幫助您與其他社群成員溝通的很好方式。

如果我能幫忙請在[[$2|我的討論頁]]留言！$3',
	'welcome-message-log' => '歡迎新參與者',
	'welcome-message-user-staff' => '==歡迎==

您好：

歡迎來到{{SITENAME}}並感謝您編輯[[:$1]]。如果您需要幫助，可以參見[[Help:Contents|幫助頁面]]、訪問 [[w:c:zh.community|社區中心]]、看我們的[[w:c:zh.community:博客:博客帖子|職員部落格]]，在 [[w:c:zh.community:Special:Forum|社區中心論壇]]上發問，或與Wikia參與者線上聊天。祝編輯愉快。 $3',
	'welcome-message-anon-staff' => '==歡迎==

您好：

歡迎來到{{SITENAME}}並感謝您編輯[[:$1]]。我們鼓勵所有的參與者[[Special:UserLogin|註冊一個帳號]]，這樣您能更方便記錄您的貢獻、使用更多Wikia的功能，並認識更多{{SITENAME}}社群參與者。


如果您需要幫助，可以參見[[Help:Contents|幫助頁面]]、訪問 [[w:c:zh.community|社區中心]]。祝編輯愉快。 $3',
	'staffsig-text' => '[[{{ns:user}}:$1|$2]]<staff /> <small>([[w:forums|論壇求助]] | [[w:sblog|部落格]])</small>',
	'hawelcomeedit' => '歡迎工具編輯',
	'welcome-message-wall-user' => 'Hi，歡迎來到{{SITENAME}}！ 感謝您協助編輯[[:$1]]。

如果我能提供幫助，請留言給我！',
	'welcome-message-wall-user-staff' => '您好：

歡迎來到{{SITENAME}}並感謝您編輯[[:$1]]。如果您需要幫助，可以參見[[Help:Contents|幫助頁面]]、訪問 [[w:c:zh.community|社區中心]]、看我們的[[w:c:zh.community:博客:博客帖子|職員部落格]]，在 [[w:c:zh.community:Special:Forum|社區中心論壇]]上發問，或與Wikia參與者線上聊天。祝編輯愉快。',
	'welcome-message-wall-anon' => '您好，歡迎來到{{SITENAME}}！感謝您編輯了[[:$1]]。

建議您\'\'\'[[Special:Userlogin|登入創建一個帳號]]\'\'\'。這樣您可以更容易記錄您的貢獻，並有助於和社區中的其他人交流。

如果我能協助您，請留言給我。',
	'welcome-message-wall-anon-staff' => '==歡迎==

您好：

歡迎來到{{SITENAME}}並感謝您編輯[[:$1]]。我們鼓勵所有的參與者[[Special:UserLogin|註冊一個帳號]]，這樣您能更方便記錄您的貢獻、使用更多Wikia的功能，並認識更多{{SITENAME}}社群的人。


如果您需要幫助，可以參見[[Help:Contents|幫助頁面]]、訪問 [[w:c:zh.community|社區中心]]。祝編輯愉快。',
	'welcome-description' => '在用戶初次貢獻後發給他們歡迎訊息',
];

