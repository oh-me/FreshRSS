<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'about' => array(
		'_' => 'אודות',
		'agpl3' => '<a href="https://www.gnu.org/licenses/agpl-3.0.html">AGPL 3</a>',	// IGNORE
		'bugs_reports' => 'דיווח באגים',
		'credits' => 'קרדיטים',
		'credits_content' => 'מאפייני עיצוב מסויימים הגיעו מ <a href="http://twitter.github.io/bootstrap/">Bootstrap</a> אף על פי ש FreshRSS אינו משתמש בתשתית הזו. <a href="https://git.gnome.org/browse/gnome-icon-theme-symbolic">סמלילים</a> הגיעו מ <a href="https://www.gnome.org/"> פרוייקט GNOME </a>. <em>Open Sans</em> הגופן police נוצר על ידי <a href="https://www.google.com/webfonts/specimen/Open+Sans">Steve Matteson</a>. Favicons נאספים בעזרת <a href="https://getfavicon.appspot.com/">getFavicon API</a>. FreshRSS מבוסס על <a href="https://framagit.org/marienfressinaud/MINZ">Minz</a>, תשתית PHP.',
		'freshrss_description' => 'FreshRSS הוא קורא RSS לאחסון עצמי בדומה ל <a href="http://tontof.net/kriss/feed/">Kriss Feed</a> או <a href="https://github.com/LeedRSS/Leed">Leed</a>. אינו צורך משאבים רבים, וקל לתפעול אך בו בזמן חזק וניתן להתאמה.',
		'github' => '<a href="https://github.com/FreshRSS/FreshRSS/issues">בגיטהאב</a>',
		'license' => 'רישיון',
		'project_website' => 'אתר',
		'title' => 'אודות',
		'version' => 'גרסה',
	),
	'feed' => array(
		'add' => 'ניתן להוסיף הזנות חדשות.',
		'empty' => 'אין מאמר להצגה.',
		'rss_of' => 'הזנת RSS של %s',
		'title' => 'הזנה ראשית',
		'title_fav' => 'מועדפים',
		'title_global' => 'תצוגה גלובלית',
	),
	'log' => array(
		'_' => 'לוגים',
		'clear' => 'ניקוי הלוגים',
		'empty' => 'קובץ הלוג ריק',
		'title' => 'לוגים',
	),
	'menu' => array(
		'about' => 'אודות FreshRSS',
		'before_one_day' => 'אתמול',
		'before_one_week' => 'לפני שבוע',
		'bookmark_query' => 'Bookmark current query',	// TODO
		'favorites' => 'מועדפים (%s)',
		'global_view' => 'תצוגה גלובלית',
		'main_stream' => 'הזנה ראשית',
		'mark_all_read' => 'סימון הכל כנקרא',
		'mark_cat_read' => 'סימון קטגוריה כנקראה',
		'mark_feed_read' => 'סימון הזנה כנקראה',
		'mark_selection_unread' => 'Mark selection as unread',	// TODO
		'newer_first' => 'חדשים בראש',
		'non-starred' => 'הצגת הכל פרט למועדפים',
		'normal_view' => 'תצוגה רגילה',
		'older_first' => 'ישנים יותר בראש',
		'queries' => 'שאילתות',
		'read' => 'הצגת נקראו בלבד',
		'reader_view' => 'תצוגת קריאה',
		'rss_view' => 'הזנת RSS',
		'search_short' => 'חיפוש',
		'starred' => 'הצגת מועדפים בלבד',
		'stats' => 'סטטיסטיקות',
		'subscription' => 'ניהול הרשמות',
		'tags' => 'My labels',	// TODO
		'unread' => 'הצגת מאמרים שלא נקראו בלבד',
	),
	'share' => 'שיתוף',
	'tag' => array(
		'related' => 'תגיות קשורות',
	),
	'tos' => array(
		'title' => 'Terms of Service',	// TODO
	),
);
