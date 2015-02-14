<?php if(!defined('IN_GS')){die('You cannot load this file directly!');} // Security Check
/**
 * German (DE) Language File for GetSimple Blog
 * 
 * Last modified: 14 February 2015 - Version 3.3.2
 * Compiled by: nok3s (Nico)
 */
$i18n = array(
  'LANGUAGE_CODE'     => 'de_DE',               // ISO Language Code string
  'DATE_FORMAT'       => 'm/d/Y h:i:s a',       // Primary date format
  'DATE_DISPLAY'      => 'F jS, Y',             // Date format for front-end display
  'DATE_ARCHPRE'      => 'F Y',                 // Date format for Archive Pre-Title
	'PLUGIN_TITLE' 			=> "GetSimple Blog",
	'PLUGIN_DESC' 			=> "A simple and easy to use blog/news feed for GetSimple.",
	'PLUGIN_SIDE' 			=> "Blog Manager",
	'WRITE_OK' 				=> "File Successfully Written",
	'EDIT_OK' 				=> "File Successfully Edited",
	'POST_DELETED' 			=> "Post Successfully Deleted",
	'POST_DELETED_ERROR' 	=> "Post Could Not Be Deleted!",
	'CATDELETED' 			=> "Category Successfully Deleted",
	'CATCREATED'       		=> "Category Successfully Created",
	'HELP' 					=> ">Help",
	'ALL_FAQ' 				=> ">All Posts",
	'POST_SLUG'				=> "Slug/URL",
	'POST_TAGS'				=> "Tags (separate tags with commas)",
	'POST_DATE'				=> "Publish date (mm/dd/yyyy) and time (hh:mm:ss pm)",
	'POST_PRIVATE'			=> "Post is private",
	'POST_OPTIONS'			=> "Post Option",
	'POST_CATEGORY'			=> "Assign This Post To A Category",
	'SAVE_POST'				=> "Save Post",
	'CANCEL'				=> "Cancel",
	'DELETE'				=> "Delete",
	'OR'					=> "Or",
	'PAGE_URL'				=> "Page to display blog posts",
	'EXCERPT_LENGTH'		=> "Length of excerpt (characters):",
	'LANGUAGE'				=> "Language",
	'POSTS_PER_PAGE'		=> "&num; of posts per page",
	'RECENT_POSTS'			=> "&num; of recent posts",
	'EXCERPT_OPTION'		=> "Posts format on posts page",
	'EXCERPT'				=> "Excerpt",
	'PRETTY_URLS'			=> "Use pretty urls",
	'PRETTY_URLS_PARA'		=> "If Yes, you will have to edit your .htaccess file after saving settings",
	'SAVE_SETTINGS'			=> "Save Settings",
	'BLOG_SETTINGS'			=> "Blog Settings",
	'FULL_TEXT'				=> "Full Text",
	'RSS_IMPORTER'			=> "Enable RSS Auto Importer",
	'RSS_IMPORTER_PASS'		=> "Auto Importer Password (anything)",
	'YES'					=> "Yes",
	'NO'					=> "No",
	'NO_POSTS'				=> "No Posts",
	'OLDER_POSTS'			=> "Older Posts",
	'NEWER_POSTS'			=> "Newer Posts",
	'ALL_CATEOGIRES'		=> "View All Categories",
	'SEARCH'				=> "Search Blog",
	'FOUND'					=> "The following posts have been found:",
	'NOT_FOUND'				=> "Sorry, no posts were found.",
	'CATEGORIES' 			=> "Categories",
	'VIEW_ALL' 				=> "View All",
	'VIEW' 					=> "View",
	'ADD_P' 				=> "Add New Post",
	'EDIT_CONTENT' 			=> "Edit Content: ",
	'EDIT' 					=> "Edit ",
	'POST' 					=> "Post",
	'DEL_CONTENT' 			=> "Delete Content", 
	'QUESTIONS' 			=> "Posts",
	'TITLE' 				=> "Title", 
	'CHOOSECAT' 			=> "Choose Category...",
	'ADD_CONTENT' 			=> "Add Content",
	'MANAGECAT' 			=> "Manage Categories",
	'ADD_NCAT' 				=> "Add New Category",
	'ADD_CAT' 				=> "Add Category", 
	'CAT_TITLE' 			=> "Category Title...", 
	'DEL_CAT1' 				=> "Delete Category: ",
	'DEL_CAT2' 				=> "?? This Will Delete ALL* content In The Category As Well!",
	'CONTENT' 				=> "content",
	'YR_CATNAME' 			=> "Your Category Name",
	'HELP' 					=> "Help", 
	'SETTINGS' 				=> "Settings", 
	'RSS_FEEDS' 			=> "RSS Feeds", 
	'CATEGORIES' 			=> "Categories", 
	'CREATE_POST' 			=> "Create Post", 
	'MANAGE_POSTS' 			=> "Posts", 
	'CATEGORY_ADDED' 		=> "Successfully Added Category", 
	'CATEGORY_ERROR' 		=> "Category Could Not Be Saved", 
	'FEED_ADDED' 			=> "Successfully Added RSS Feed", 
	'FEED_ERROR' 			=> "RSS Feed Could Not Be Saved", 
	'FEED_DELETED' 			=> "Successfully Deleted Feed", 
	'FEED_DELETE_ERROR' 	=> "Feed Could Not Be Deleted", 
	'AUTO_IMPORTER_TITLE' 	=> "RSS Feed Auto Importer Cronjob Setup", 
	'AUTO_IMPORTER_DESC' 	=> "You should be able to setup cronjobs through your web hosting admin interface. This plugin assume you know how. The below snippet is what your cron job should look like this.", 
	'ADD_FEED' 				=> "Add RSS Feed", 
	'MANAGE_FEEDS' 			=> "Add &amp; Manage RSS Feeds", 
	'ADD_NEW_FEED' 			=> "Add New RSS Feed", 
	'BLOG_CATEGORY' 		=> "Blog Category", 
	'CATEGORY_NAME' 		=> "Category Name", 
	'ADD_CATEGORY' 			=> "Add Category", 
	'MANAGE_CATEGORIES' 	=> "Add &amp; Manage Categories", 
	'RSS_FEED' 				=> "RSS Feed", 
	'FEED_CATEGORY' 		=> "RSS Feed Category", 
	'DELETE_FEED' 			=> "Delete Feed", 
	'TAGS' 					=> "Tags", 
	'DISPLAY_TAGS_UNDER_POST' => "Display tags under post?", 
	'POST_ADDED' 			=> "Successfully Saved Post", 
	'POST_ERROR' 			=> "Post Could Not Be Saved", 
	'HELP_CATEGORIES' 		=> "Display blog categories", 
	'HELP_SEARCH' 			=> "Display blog search bar", 
	'HELP_ARCHIVES' 		=> "Display blog archives", 
	'HELP_RECENT' 			=> "Show your blog's most recent posts", 
	'HELP_RECENT_2' 		=> "This function has 4 <strong>optional</strong> available parameters", 
	'HELP_RECENT_3' 		=> "Usage Example (display excerpt, default excerpt length, display thumbnail and display read more link)", 
	'RSS_TITLE' 			=> "RSS Feed Title", 
	'RSS_DESCRIPTION' 		=> "RSS Feed Description", 
	'RSS_LOCATION' 			=> "Below is your blog's RSS feed", 
	'POST_THUMBNAIL' 		=> "Enable Post Thumbnail", 
	//Added version 1.0.2 
	'NO_POSTS' 		=> "There are no posts found", 
	'CLICK_TO_CREATE' 		=> "Click Here To Create One", 
	'PAGE_TITLE' 			=> "Page Title", 
	'DATE' 					=> "Date", 
	'FRONT_END_FUNCTIONS' 	=> "Front End Functions", 
	'READ_FULL_ARTICLE' 	=> "Read The Full Article", // Used for rss feed importer
	'GO_BACK' 				=> "Go back to the previous page", 
	//Error/Success Messages  (_construct())
	'DATA_BLOG_DIR' 		=> "data/blog Directory Successfully Created", 
	'DATA_FILE_ERROR' 		=> "File could not be written!", 
	'DATA_BLOG_DIR_ERR' 	=> "The data/blog_posts folder could not be created!", 
	'DATA_BLOG_DIR_ERR_HINT' => "You are going to have to create this directory yourself for the plugin to work properly", 
	'DATA_BLOG_CATEGORIES' 	=> "data/other/blog_categories.xml File Successfully Created", 
	'DATA_BLOG_CATEGORIES_ERR' => "data/other/blog_categories.xml file could not be created!", 
	'DATA_BLOG_RSS' 		=> "data/other/blog_rss.xml File Successfully Created", 
	'DATA_BLOG_RSS_ERR' 	=> "The data/other/blog_rss.xml file could not be created!",
	//ADDED VERSION 1.1 
	'DISPLAY_DISQUS_COMMENTS' => "Display Disqus comments",
	'DISPLAY_DISQUS_COUNT' 	=> "Display Disqus comment count",
	'DISQUS_SHORTNAME' 	=> "Disqus Shortname",
	'SOCIAL_SETTINGS' 	=> "Social Settings",
	'RSS_FILE_SETTINGS' 	=> "Your Blog's RSS Feed Settings",
	'ENABLE_ADD_THIS' 	=> "Enable AddThis tool",
	'ENABLE_SHARE_THIS' 	=> "Enable ShareThis tool",
	'SHARE_THIS_ID' 	=> "ShareThis ID",
	'ADD_THIS_ID' 	=> "AddThis ID",
	'AD_TITLE' 	=> "Advertisement Settings",
	'AD_DATA' 	=> "Advertisement Code",
	'DISPLAY_ALL_POSTS_AD_TOP' 	=> "Enable all posts top ad",
	'DISPLAY_ALL_POSTS_AD_BOTTOM' 	=> "Enable all posts bottom ad",
	'DISPLAY_POST_AD_TOP' 	=> "Enable individual post top ad",
	'DISPLAY_POST_AD_BOTTOM' 	=> "Enable individual post bottom ad",
	//ADDED VERSION 1.1.1
	'POST_THUMBNAIL' => "Display Posts Thumbnails",
	'POST_THUMBNAIL_LABEL' => "Upload Thumbnail",
	'DISPLAY_DATE' => "Display Post Date",
	'PREVIOUS_PAGE_TEXT' => "\"Previous Blog Page\" Text",
	'NEXT_PAGE_TEXT' => "\"Next Blog Page\" Text",
	'POST_THUMBNAIL_LABEL' => "Upload Thumbnail",
	//ADDED VERSION 1.1.4
	'CSS_SETTINGS' => 'CSS Settings',
	'DISPLAY_CSS' => 'Display CSS',
	'CSS_CODE' => 'CSS Code',
	'HTACCESS_HEADLINE' => 'Pretty URLs',
	'CSS_POST_CONTAINER_HINT' => 'wrapper around each post. from title to end of content',
	'CSS_POST_CONTENT_HINT' => 'includes the post content and thumbnail',
	//ADDED VERSION 1.1.5
	'RSS_FEED_NUM_POSTS' => '&num; of posts in RSS feed',
	'CSS_SETTINGS' => 'CSS Settings',
	//ADDED VERSION 1.1.6
	'RSS_FEED' => 'RSS Feed',
	'DYNAMIC_RSS_LOCATION' => 'Dynamic RSS Feed Location (Generates RSS feed on the fly)',
	//ADDED VERSION 1.2
	'CUSTOM_FIELDS' => 'Custom Fields',
	//CUSTOM FIELDS ADDED v2.0+
	'MANAGE' => 'Manage',
	'CHECKBOX' => "Check box", 
  'CUSTOMFIELDS_DESCR' => "This plugin allows you to specify custom fields which are displayed when you edit a page.", 
  'CUSTOMFIELDS_TITLE' => "Custom Fields", 
  'CUSTOMFIELDS_VIEW' => "Configure Custom Fields", 
  'DEFAULT_VALUE' => "Default value", 
  'DROPDOWN_BOX' => "Drop-down box", 
  'GET_CUSTOM_FIELD_DESCR' => "will display the corresponding field value for the current page", 
  'LABEL' => "Label", 
  'LONG_TEXT_FIELD' => "Long text field", 
  'NAME' => "Name", 
  'RETURN_CUSTOM_FIELD_DESCR' => "will return the field value for further processing", 
  'SAVE' => "Save Custom Fields", 
  'SAVE_FAILURE' => "The custom fields could not be saved.", 
  'SAVE_INVALID' => "The following field names are reserved: ", 
  'SAVE_SUCCESS' => "The custom fields have been successfully saved.", 
  'TEXT_FIELD' => "Text field",
  'TYPE' => "Type", 
  'UNDO_FAILURE' => "The custom fields could not be restored.", 
  'UNDO_SUCCESS' => "The custom fields have been successfully restored.",
  'USAGE_DESCR' => "Below you can configure the custom fields. Drag the rows to reorder the fields. Deleting fields does not remove the field values from the pages. The default value is the initial value for new pages.", 
  'WYSIWYG_EDITOR' => "WYSIWYG editor", 
  'FUNCTIONS_DESCR' => "These fields can be accessed in your themes:", 
  'ADD' => "Add new field", 
  'VIEW_HIERARCHICAL' => 'Hierarchical', 
  'VIEW_TITLE' => 'By Title', 
  'FILTER' => 'Filter', 
  'BROWSE_IMAGES' => "Browse", 
  'IMAGE' => "Image", 
  'BROWSE_PAGES' => "Browse", 
  'LINK' => "Link",
  'ORGANIZE' => "Organize",
  'BLOG_PAGE' => "Blog Page Layout",
  'BLOG_PAGE_WARNING' => "Only if \"Use Custom Blog Page Layout\" is enabled",
  'DISPLAY_BLOG_PAGE_HELP' => "Click here for tips and tricks for custom blog pages",
  'USE_CUSTOM_BLOG_PAGE' => 'Use Custom Blog Page Layout',
  'BLOG_PAGE_ADD_THIS' => 'addThis Tool',
  'BLOG_PAGE_POST' => 'post',
  'BLOG_PAGE_TAG' => 'tag',
  'BLOG_PAGE_PAGE' => 'page',
  'BLOG_PAGE_ARCHIVE' => 'archive',
  'BLOG_PAGE_CATEGORY' => 'category',
  'BLOG_PAGE_AVAILABLE_AREAS' => 'Available Areas',
  'BLOG_PAGE_URL_EX_LABEL' => 'ex (get url of post)',
  'BLOG_PAGE_GET_URL_TO_AREAS' => 'Get URL To Blog Areas',
  'BLOG_PAGE_SHARE_THIS' => 'ShareThis Tool',
  'BLOG_PAGE_DISQUS_COMMENTS' => 'Disqus Comments',
  'BLOG_PAGE_CREATE_EXCERPT' => 'Create Excerpt',
  'BLOG_PAGE_CREATE_EXCERPT_DESC' => 'This will create an excerpt of specified length. The $excerpt_length variable would need to be an integer and is the length of the excerpt.',
  'BLOG_PAGE_DECODE_CONTENT' => 'Decode Content',
  'BLOG_PAGE_ADD_DATA_LABEL' => 'Echos add data defined on settings page',
  'BLOG_PAGE_FORMAT_DATA_DESC' => 'You pass it the the data straight from the data object and it will format it.',
  'BLOG_PAGE_FORMAT_DATE_LABEL' => 'Format Date',
  'BLOG_PAGE_AVAILABLE_FUNCTIONS' => 'Available Functions &amp; Helpers:',
  'BLOG_PAGE_DESC_LINE_3' => 'So to access a custom field you can do something like below',
  'BLOG_PAGE_DESC_LINE_2' => 'It will behave as if coding it directly into the plugin itself. The post data is passed via an object.',
  'BLOG_PAGE_DESC_LINE_1' => 'You are able to use html, php, xml and js in this textarea.',
  'BLOG_PAGE_DESC_TITLE' => 'Custom Blog Page Help',
  'CUSTOM_FIELDS_OPTIONS_AREA' => 'Options Area',
  'OPTIONS_AREA_DESCRP'		=> '(Options custom fields will be displayed in the "Post Options" section)',
  'CUSTOM_FIELDS_MAIN_AREA'	=> 'Main Area',
  'MAIN_AREA_DESCRP'			=> '(Main custom fields will be under the "Post Options" section)',
  //END CUSTOM FIELDS
  //Added Version 2.0
  'BLOG_CREATE_EDIT_NO_TITLE' => 'A "Post Title" is required to add a blog post',
  'BLOG_RETURN_TO_PREVIOUS_PAGE' => 'Return To Post',
  'DISPLAY_READ_MORE_LINK' => 'Display "Read More" link',
  'READ_MORE_LINK_TEXT' => '"Read More" Link Text',
  'DISPLAY_POST_COUNT_ARCHIVES' => 'Display Post Count In Archives',
  'BLOG_PAGE_RECOM' => 'It is recommended you view the show_blog_post() function in plugins/blog/inc/frontEndFunctions.php to see how best to implement a custom blog page.',
  'BLOG_PRETTY_NOTICE' => 'You need to turn on pretty urls in GetSimple before instructions will show here',
  'POST_DESCRIPTION' => 'Show post excerpt in meta description',
	// Added Version 3.0
	'NO_CATEGORIES' => 'No Categories Available!',
	'NO_ARCHIVES' => 'Nothing in the Archives!',
	'ARCHIVE_PRETITLE' => 'Blog Archive: ',
	'CATEGORY_PRETITLE' => 'Blog Category: ',
	'MANAGE_TITLE' => 'Blog Posts',
	'MANAGE_DESC' => 'View and manage existing blog posts.',
	'CREATE_TITLE' => 'Create New Post',
	'CREATE_DESC' => 'Create a new post to add to the blog. This uses the same editor as pages do, and therefore the same functions.',
	'CATEGORIES_TITLE' => 'Blog Categories',
	'CATEGORIES_DESC' => 'View and manage Categories for your blog posts.',
	'RSSFEEDS_TITLE' => 'RSS Feeds',
	'RSSFEEDS_DESC' => 'Add and manage RSS Feeds to import into your blog.',
	'CUSTF_TITLE' => 'Custom Fields',
	'CUSTF_DESC' => 'Create and manage custom fields for your blog posts.',
	'SETTINGS_TITLE' => 'Settings',
	'SETTINGS_DESC' => 'Manage the settings for your blog.',
	'HELP_TITLE' => 'Help Center',
	'HELP_DESC' => 'The first point of call when you need help with your blog.',
	// Added Version 3.1
	'VERSION_NOMESSAGE' => 'No message has been set! This is a problem.',
	'VERSION_NORESPONSE' => 'Could not get a response from the Extend API server.',
	'VERSION_NOFUNCTION' => 'The function "file_get_contents" does not exist in your PHP environment.',
	'VERSION_UPDATEAVAILABLE' => 'An update is available!',
	'VERSION_UPTODATE' => 'GS Blog is up to date!',
	'VERSION_BETA' => 'You are currently using a Beta version of this plugin.',
	'VERSION_FAILEDCOMPARE' => 'Failed to compare versions during update check!',
	'VERSION_APIFAIL' => 'The check with the Extend API was not successful.',
	'VERSION_INTERNALERROR' => 'An internal update check error has occurred!',
	'VERSION_CHECKFORUPDATE' => 'Check for update',
	'UPDATE_TITLE' => 'Plugin Updates',
	'UPDATE_DESC' => 'Check for the latest updates to the plugin.',
	'PLUGIN_LONG_TITLE' => 'GetSimple Blog',
	'DOWNLOAD' => 'Download',
	// Added Version 3.1.1
	'VERSION_UPDATESTATUS' => 'Update Status',
	'VERSION_CURRENTVER' => 'Current Version',
	'VERSION_LATESTVER' => 'Latest Version',
  // Added Version 3.2.0
  'BY' => 'by',
  'ON' => 'on',
  'IN' => 'in',
  'CUSTOM_FIELDS_BUTTON' => 'Custom Fields',
  'NEW_POST_BUTTON' => 'Create Post',
  'SOCIAL_BUTTON' => 'Social',
  'ADVERTISEMENT_BUTTON' => 'Advertisement',
  'CUSTOMIZE_BUTTON' => 'Customization',
  'SETTINGS_BUTTON' => 'Settings',
  'DISPLAY_POST_AUTHOR' => 'Show Post Author',
  'DEFAULT_AUTHOR' => 'Default Author',
  'DISPLAY_POST_CATEGORY' => 'Show Post Category',
  'VIEW_HTACCESS' => 'View what your site\'s .htaccess should be!',
  'CUSTOMIZE_HEADER' => 'Blog Customization',
  'CUSTOM_PAGE_LAYOUT_HEADER' => 'Customize Page Layout',
  'CUSTOM_CSS_CLASS' => 'Customize CSS Classes',
  'VIEW_AVAILABLE_CLASSES' => 'Click here to view available classes and ids',
  'AVAILABLE_CLASSES' => 'Available Classes and IDs',
  'CSS_SEARCH_FORM_HINT' => 'ID of search form',
  'EXAMPLE_POST_HEADER' => 'Below is an example of a single blog post',
  'ADVERTISEMENT_HEADER' => 'Advertisement Settings',
  'SOCIAL_HEADER' => 'Social Settings',
  'RSS_SETTINGS_HEADER' => 'RSS Auto-Importer Settings',
  'MAIN_SETTINGS_BUTTON' => 'Main Settings',
  'RSS_CONTENT_DESCRIPTION' => 'Include RSS Content or Summary',
  'RSS_CONTENT' => 'RSS Content (If Available)',
  'RSS_DESCRIPTION' => 'Summary (with link-back)',
  'RSS_HEADER' => 'RSS Auto-Importer',
  'UPLOAD_THUMBNAIL' => 'Upload Thumbnail',
  'UPLOAD_ENABLE_JAVASCRIPT' => 'Please enable JavaScript to use the file uploader!',
  'MANAGE_POSTS_BUTTON' => 'Manage Posts',
  'CATEGORIES_BUTTON' => 'Categories',
  'UPDATE_BUTTON' => 'Update Check',
  'HELP_BUTTON' => 'Help',
  'BLOG_TAB_BUTTON' => 'B<em>l</em>og',
  'VERSION_STATUS' => "Plugin Version Status",
  'VERSION_STATUS_DESC' => "Ensure you're running the latest version of the GS Blog plugin so that you can benefit from the latest features.",
  // Added Version 3.2.1
  'MANAGE_POSTS_DESC' => 'Edit existing posts or create new posts. The table below shows posts that currently exist.',
  'SETTINGS_MAIN_DESC' => 'Manage the settings for your blog. These are the main settings for the blog.',
  'SETTINGS_CUSTOMIZE_DESC' => 'Use these settings to customize the look and layout of your blog. You can create custom layouts or add CSS to modify the look.',
  'SETTINGS_ADVERTISEMENT_DESC' => 'Monetize your blog by adding you Advertisement code here and choosing where to show you Ads.',
  'SETTINGS_SOCIAL_DESC' => 'Add one of these social tools to your blog to enable commenting.',
  'SETTINGS_RSS_DESC' => 'Choose your settings for the RSS Auto-Importer. The Auto-Importer can import either the full content of feeds or a summary with a link back to the original article.',
  'SETTINGS_FEED_DESC' => 'The RSS Auto-Importer will import and create posts from RSS feeds on other websites. This is useful if you want to manage this blog with content from another blog that you run.',
  'SETTINGS_CATEGORY_DESC' => 'Add or Edit categories to assign your posts to.',
  // Added in Version 3.3.0
  'SETTINGS_SAVE_OK' => 'Successfully saved settings!',
  'SETTINGS_SAVE_ERROR' => 'Could not save your settings!',
  'AUTO_IMPORTER' => 'Auto-Importer',
  'HTACCESS_1' => 'blocks direct access to the XML files - they hold all the data!',
  'HTACCESS_2' => 'Usually RewriteBase is just \'/\', but replace it with your subdirectory path',
  'HTACCESS_3' => 'IMPORTANT -> if your site is located in subfolder you need to change this to reflect (eg: /subfolder/)',
  'ADDED' => 'Added',
  // Added in Version 3.3.1
  'HIDDEN_FIELD' => 'Hidden Field',
);
