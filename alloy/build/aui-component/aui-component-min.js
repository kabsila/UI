YUI.add("aui-component",function(e,t){var n=e.Lang,r=e.Array,i=function(e,t){return(e||[]).concat(t||[])},s="component",o={},u=" ",a=e.config.win.Object.prototype.constructor,f=e.ClassNameManager,l=f.getClassName,c=e.Widget.getClassName,h=e.getClassName,p=h("hide"),d=e.Base.create(s,e.Widget,[e.WidgetCssClass,e.WidgetToggle],{initializer:function(e){var t=this;t._originalConfig=e,t._setRender(e),o[t.get("id")]=t},clone:function(t){var n=this;return t=t||{},t.id=t.id||e.guid(),e.mix(t,n._originalConfig),new n.constructor(t)},_uiSetVisible:function(e){var t=this,n=d.superclass._uiSetVisible;n&&n.apply(t,arguments);var r=t.get("hideClass");if(r!==!1){var i=t.get("boundingBox");i.toggleClass(r||p,!e)}},_renderBoxClassNames:function(){var e=this,t=e.get("boundingBox")._node,n=e.get("contentBox")._node,i=t.className,s=n.className,o=i?i.split(u):[],a=s?s.split(u):[],f=e._getClasses(),p=f.length,d=p-4,v,m;o.push(c());for(var g=p-3;g>=0;g--)v=f[g],m=String(v.NAME).toLowerCase(),o.push(v.CSS_PREFIX||l(m)),g<=d&&(m=m,a.push(h(m,"content")));a.push(e.getClassName("content")),t===n?s=r.dedupe(a.concat(o)).join(u):(t.className=r.dedupe(o).join(u),s=r.dedupe(a).join(u)),n.className=s},_renderInteraction:function(e,t){var n=this;n.render(t);var r=n._renderHandles;for(var i=r.length-1;i>=0;i--){var s=r.pop();s.detach()}},_setRender:function(t){var r=this,i=t&&t.render;if(i&&i.constructor===a){var s=i.eventType||"mousemove",o=i.parentNode,u=i.selector||o;if(u){r._renderHandles=[];var f=r._renderHandles;n.isArray(s)||(s=[s]);var l=e.rbind(r._renderInteraction,r,o),c=e.one(u);for(var h=s.length-1;h>=0;h--)f[h]=c.once(s[h],l);delete t.render}}}},{ATTRS:{useARIA:{writeOnce:!0,value:!1,validator:n.isBoolean},hideClass:{value:p},render:{value:!1,writeOnce:!0}}});d._INSTANCES=o,d.getById=function(e){return o[e]};var v=e.Widget.prototype._UI_ATTRS;d._applyCssPrefix=function(t){return t&&t.NAME&&!("CSS_PREFIX"in t)&&(t.CSS_PREFIX=e.getClassName(String(t.NAME).toLowerCase())),t},d.create=function(t){t=t||{};var r=t.EXTENDS||e.Component,s=t.constructor;e.Object.owns(t,"constructor")||(s=function(){s.superclass.constructor.apply(this,arguments)});var o=t.prototype;if(o)if(t.UI_ATTRS||t.BIND_UI_ATTRS||t.SYNC_UI_ATTRS){var u=i(t.BIND_UI_ATTRS,t.UI_ATTRS),a=i(t.SYNC_UI_ATTRS,t.UI_ATTRS),f=r.prototype,l=f&&f._UI_ATTRS||v;u=i(l.BIND,u),a=i(l.SYNC,a);var c=o._UI_ATTRS;c||(c=o._UI_ATTRS={}),u.length&&(c.BIND=u),a.length&&(c.SYNC=a)}var h=t.AUGMENTS;return h&&!n.isArray(h)&&(h=[h]),e.mix(s,t),delete s.prototype,e.extend(s,r,o),h&&(s=e.Base.build(t.NAME,s,h,{dynamic:!1})),d._applyCssPrefix(s),s},d.CSS_PREFIX=h("component");var m=e.Base;d.build=function(){var e=m.build.apply(m,arguments);return d._applyCssPrefix(e),e},e.Component=d},"2.0.0pr5",{requires:["aui-classnamemanager","aui-widget-cssclass","aui-widget-toggle","base-build","widget-base"]});
