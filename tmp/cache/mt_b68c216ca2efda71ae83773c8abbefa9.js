// define cmsms_tiny object
var cmsms_tiny = {};

// this is the actual tinymce initialization
tinymce.init({
    selector: 'textarea.MicroTiny',
    language: 'de',
    cmsms_tiny: cmsms_tiny = {
        schema: 'html5',
        base_url : 'https://www.ls.haw-hamburg.de/~FTZMGT/',
        resize : true,
        statusbar : true,
        menubar : true,
        filepicker_title : 'Dateiauswahl',
        filepicker_url : 'https://www.ls.haw-hamburg.de/~FTZMGT/admin/moduleinterface.php?mact=FilePicker,m1_,filepicker,0&__c=9abc04e53fcd7b92c73&showtemplate=false&field=',
        filebrowser_title : 'Datei auswählen',
        linker_text : 'Link zur CMS-Made-Simple-Seite',
        linker_title : 'Einen Verweis auf eine CMS-Seite erstellen',
        linker_image : 'https://www.ls.haw-hamburg.de/~FTZMGT/modules/MicroTiny/lib/images/cmsmslink.gif',
        linker_url : 'https://www.ls.haw-hamburg.de/~FTZMGT/admin/moduleinterface.php?mact=MicroTiny,m1_,linker,0&__c=9abc04e53fcd7b92c73&showtemplate=false',
        linker_autocomplete_url : 'https://www.ls.haw-hamburg.de/~FTZMGT/admin/moduleinterface.php?mact=MicroTiny,m1_,ajax_getpages,0&__c=9abc04e53fcd7b92c73&showtemplate=false',
	mailto_text : 'Create a mail link',
	mailto_title : 'Create a mail image',
	mailto_image : 'https://www.ls.haw-hamburg.de/~FTZMGT/modules/MicroTiny/lib/images/mailto.gif',
        prompt_page : 'Seitentitel eingeben',
        prompt_page_info : 'This is an auto complete field. Begin by typing a few characters of the desired page alias, menu text, or title. Any matching items will be displayed in a list.',
        prompt_alias : 'Ausgewähltes Seiten-Alias',
        prompt_alias_info : 'Dieses Feld ist nur lesbar',
        prompt_text : 'anzuzeigender Text',
        prompt_class : 'class-Attribut',
        prompt_rel : 'rel-Attribut',
        prompt_target : 'Ziel',
        prompt_insertmailto : 'Insert/edit a mail link',
        prompt_email : 'Email address',
        prompt_anchortext : 'Anchor text',
        prompt_linktext : 'Link Text',
        tab_general : 'Allgemein',
        tab_advanced : 'Erweitert',
        target_none : 'None',
        target_new_window : 'Neues Fenster',
        loading_info : 'lädt…'
    },
    document_base_url: cmsms_tiny.base_url,
    relative_urls: true,
    image_title: true,
    mysamplesetting: 'foobar',
    menubar: cmsms_tiny.menubar,
    statusbar: cmsms_tiny.statusbar,
    resize: cmsms_tiny.resize,
    removed_menuitems: 'newdocument',
    browser_spellcheck: true,
    // smarty logic stuff
    image_advtab: true,
    toolbar: 'undo redo | cut copy paste | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify indent outdent | bullist numlist | anchor link mailto unlink cmsms_linker | image ',
    plugins: ['tabfocus hr paste autolink link lists mailto cmsms_linker charmap anchor searchreplace wordcount code fullscreen insertdatetime  media image cmsms_filepicker '],
    // callback functions
    urlconverter_callback: function(url, elm, onsave, name) {
        var self = this;
        var settings = self.settings;

        if (!settings.convert_urls || ( elm && elm.nodeName == 'LINK' ) || url.indexOf('file:') === 0 || url.length === 0) {
            return url;
        }

        // fix entities in cms_selflink urls.
        if (url.indexOf('cms_selflink') != -1) {
            decodeURI(url);
            url = url.replace('%20', ' ');
            return url;
        }
        // Convert to relative
        if (settings.relative_urls) {
            return self.documentBaseURI.toRelative(url);
        }
        // Convert to absolute
        url = self.documentBaseURI.toAbsolute(url, settings.remove_script_host);

        return url;
    },
    setup: function(editor) {
        editor.addMenuItem('mailto',{
           text: cmsms_tiny.prompt_insertmailto,
           cmd:  'mailto',
           context: 'insert',
        })
        editor.on('change', function(e) {
            $(document).trigger('cmsms_formchange');
        });
    },
    paste_as_text: true,
});
