YUI.add("aui-widget-cssclass",function(e,t){function s(){}var n="boundingBox",r="contentBox",i="cssClassChange";s.ATTRS={cssClass:{}},s.CSS_CLASS_CONTENT_SUFFIX="-content",s.prototype={initializer:function(e){var t=this;t._uiSetCssClass(e.cssClass),t.after(i,t._afterCssClassChange)},_afterCssClassChange:function(e){var t=this,i;i=e.prevVal,i&&(t.get(n).removeClass(i),t.get(r).removeClass(i+s.CSS_CLASS_CONTENT_SUFFIX)),t._uiSetCssClass(e.newVal)},_uiSetCssClass:function(e){var t=this;e&&(t.get(n).addClass(e),t.get(r).addClass(e+s.CSS_CLASS_CONTENT_SUFFIX))}},e.WidgetCssClass=s},"2.0.0pr5",{requires:["widget-base"]});
