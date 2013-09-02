YUI.add("aui-hsva-palette-modal",function(e,t){var n=e.Array,r=e.Widget,i=e.Lang,s=e.getClassName,o=s("hsv-palette-modal"),t="hsv-palette-modal",u="",a=e.Base.create(t,e.Modal,[e.WidgetCssClass,e.WidgetToggle],{initializer:function(){var e=this;e.after("render",e._renderHSVAPalette,e),e.on("selectedChange",e._onSelectionChange,e)},_getSelected:function(){var e=this;return e._hsvPalette.get("selected")},_onSelectionChange:function(e){var t=this;e.src!==r.UI_SRC&&t._hsvPalette.set("selected",e.newVal)},_renderHSVAPalette:function(){var t=this,n,i,s,u,a;i=t.get("contentBox"),u=t.get("hsv"),a=u.alpha,s=e.HSVPalette,a&&(s=e.HSVAPalette),i.addClass(o),n=t.getStdModNode(e.WidgetStdMod.BODY),t._hsvPalette=(new s(u)).render(n),t.get("centered")&&t.align(),t._hsvPalette.after("selectedChange",function(e){t.set("selected",e.newVal,{src:r.UI_SRC})})}},{ATTRS:{hsv:{validator:i.isObject,value:{alpha:!1}},selected:{getter:"_getSelected",validator:i.isString,value:u}},CSS_PREFIX:s(t),NAME:t,NS:t});e.HSVAPaletteModal=a},"2.0.0pr5",{requires:["aui-hsva-palette","aui-modal"],skinnable:!0});
