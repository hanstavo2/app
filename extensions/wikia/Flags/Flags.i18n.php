<?php
/**
 * Flags message file
 */

$messages = [];

/**
 * English (en)
 */
$messages['en'] = [
	'flags-description' => 'Flags are per article information for reader or editors that describe the content or action required',
	'flags-edit-form-more-info' => 'More info >',
	'flags-edit-modal-cancel-button-text' => 'Cancel',
	'flags-edit-modal-close-button-text' => 'Close',
	'flags-edit-modal-done-button-text' => 'Done',
	'flags-edit-modal-no-flags-on-community' => 'This community doesn\'t have any flags set up. [[Help:Flags|Learn more about flags]] or [[Special:Flags|define the flags for this community]].',
	'flags-edit-modal-title' => 'Flags',
	'flags-edit-modal-exception' => "Unfortunately, we are not able to display this due to the following error:\n\n\n\n$1\n\n\n\nThis error has already been reported to the technical team. Please feel free to use [[Special:Contact]] to get in contact with Wikia support team if you continue to see this issue.",
	'flags-edit-modal-post-exception' => "Unfortunately, we are not able to complete the process due to the following error:\n\n\n\n$1\n\n\n\nThis error has already been reported to the technical team. Please feel free to use [[Special:Contact]] to get in contact with Wikia support team if you continue to see this issue.",
	'log-name-flags' => 'Flags log',
	'logentry-flags-flag-added' => '$1 added flag \'$4\' to page $3',
	'logentry-flags-flag-removed' => '$1 removed flag \'$4\' from page $3'
];

/**
 * Message documentation
 */
$messages['qqq'] = [
	'flags-description' => '{{desc}}',
	'flags-edit-form-more-info' => 'A link that is displayed next to a checkbox in the edit form of Flags. It links to a template used by the flag that it is next to.',
	'flags-edit-modal-cancel-button-text' => 'Text on the button that closes flags edit modal and ignores changes.',
	'flags-edit-modal-close-button-text' => 'Text on the button that closes flags edit modal.',
	'flags-edit-modal-done-button-text' => 'Text on the button that submits changes done to flags.',
	'flags-edit-modal-no-flags-on-community' => 'Message on modal appearing when there are no flags types defined on the wiki.',
	'flags-edit-modal-title' => 'Title of the form for editing flags displayed on headline of modal containing the form.',
	'flags-edit-modal-exception' => 'A message shown in the modal instead of an edit form if an error makes it impossible to display it. $1 is a text of the error.',
	'flags-edit-modal-post-exception' => 'A message shown in a banner notification if posting of edit forms fails due to an error. $1 is a text of the error.',
	'log-name-flags' => 'Name of log type displayed on Special:Log',
	'logentry-flags-flag-added' => 'Message used for generating log entry on Special:Log with info about added flag
		$1 info about user that added a flag passed as a generated link to user page
		$2 plain user name of user that added a flag
		$3 link to modified page
		$4 name of flag added',
	'logentry-flags-flag-removed' => 'Same as logentry-flags-flag-added message but concerns removal'
];

/**
 * Polish (pl)
 */
$messages['pl'] = [
	'flags-edit-form-more-info' => 'Więcej informacji >',
	'flags-edit-modal-cancel-button-text' => 'Anuluj',
	'flags-edit-modal-close-button-text' => 'Zamknij',
	'flags-edit-modal-done-button-text' => 'Gotowe',
	'flags-edit-modal-no-flags-on-community' => 'Ta społeczność nie ma zdefiniowanych żadnych flag. [[Help:Flags|Dowiedz się więcej o flagach]] or [[Special:Flags|zdefiniuj flagi dla tej społeczności]].',
	'flags-edit-modal-title' => 'Flagi',
];
