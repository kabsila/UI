YUI.add('aui-ace-autocomplete-plugin', function (A, NAME) {

var Plugin = A.Plugin;

function ACListPlugin(config) {
	if (!config.render && config.render !== false) {
		config.render = true;
	}

	ACListPlugin.superclass.constructor.apply(this, arguments);
}

A.extend(ACListPlugin, A.AceEditor.AutoCompleteList, {}, {
	CSS_PREFIX: 'ace-autocomplete',
	NAME      : 'ace-autocomplete-plugin',
	NS        : 'ace-autocomplete-plugin'
});

Plugin.AceAutoComplete = ACListPlugin;
Plugin.AceAutoCompleteList = ACListPlugin;

}, '2.0.0pr5', {"requires": ["aui-ace-autocomplete-list", "plugin"]});
