/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'en';
	config.filebrowserBrowseUrl = 'https://thenikki.000webhostapp.com/admin/ckfinder/ckfinder.html';
 
	config.filebrowserImageBrowseUrl = 'https://thenikki.000webhostapp.com/admin/ckfinder/ckfinder.html?type=Images';
	 
	config.filebrowserFlashBrowseUrl = 'https://thenikki.000webhostapp.com/admin/ckfinder/ckfinder.html?type=Flash';
	 
	config.filebrowserUploadUrl = 'https://thenikki.000webhostapp.com/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	 
	config.filebrowserImageUploadUrl = 'https://thenikki.000webhostapp.com/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	 
	config.filebrowserFlashUploadUrl = 'https://thenikki.000webhostapp.com/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	config.extraPlugins = 'oembed';
	// config.extraPlugins = 'uploadfile';
	// config.extraPlugins = 'zsmanager';
	// config.extraPlugins = 'autoembed';
	// config.extraPlugins = 'embed';
	// config.uiColor = '#AADC6E';
};
