/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	//turn on while editing stuff
	config.extraAllowedContent = '*(*)';
	config.allowedContent = true;

	//comment out when edting source code
	// config.removePlugins = 'sourcearea';
	config.removeButtons = 'Font';


	// Your existing settings (like config.extraAllowedContent) should remain here.

	// 1. Prevent automatic filling of empty blocks (like <p> or <div>)
	config.fillEmptyBlocks = false;

	// 2. Prevent conversion of double spaces into &nbsp; + space
	config.basicEntities = false;

	// 3. Disable the automatic insertion of &nbsp; when the Tab key is pressed
	config.tabSpaces = 0;

	// 4. If you are pasting content, this removes hidden garbage from Word
	config.pasteFromWordRemoveFontStyles = true;
	config.pasteFromWordPromptCleanup = true;

	// Use this setting with caution. It gives you more control but can lead to
	// "loose text" if you're not careful with your HTML structure.
	config.autoParagraph = false;
};
