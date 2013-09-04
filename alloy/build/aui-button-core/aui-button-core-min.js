YUI.add("aui-button-core",function(e,t){var n=e.Lang,r=n.isArray,i=n.isNumber,s=n.isString,o=n.isUndefined,u="active",a="boundingBox",f="btn",l="btngroup",c="className",h="disabled",p="group",d="i",v="icon",m="iconAlign",g="iconElement",y="label",b="left",w="primary",E="right",S="syncUI",x="togglebtn",T="checkbox",N="type",C="visible",k="widgetConstructor",L=e.getClassName,A={BUTTON:L(f),BUTTON_GROUP:L(f,p),DISABLED:L(h),LABEL:L(y),PRIMARY:L(f,w),SELECTED:L(u),TOGGLE:L(x)},O=function(){};O.ATTRS={icon:{},iconElement:{valueFn:function(){var t=this;return e.Node.create(t.ICON_TEMPLATE)}},iconAlign:{value:b,validator:s},primary:{value:!1}},O.HTML_PARSER={iconElement:d},O.prototype={ICON_TEMPLATE:"<i></i>",iconElement:null,initializer:function(){var e=this;e.after(e.syncButtonExtUI,e,S),e.after({iconChange:e._afterIconChange,iconAlignChange:e._afterIconAlignChange,primaryChange:e._afterPrimaryChange})},syncButtonExtUI:function(){var e=this;e._uiSetIcon(e.get(v)),e._uiSetPrimary(e.get(w))},_afterIconChange:function(e){var t=this;t._uiSetIcon(e.newVal)},_afterIconAlignChange:function(e){var t=this;t._uiSetIconAlign(e.newVal)},_afterPrimaryChange:function(e){var t=this;t._uiSetPrimary(e.newVal)},_uiSetPrimary:function(e){var t=this;t.get(a).toggleClass(A.PRIMARY,e)},_uiSetIcon:function(e){var t=this;if(!e)return;var n=t.get(g);n.set(c,e),t._uiSetIconAlign(t.get(m))},_uiSetIconAlign:function(t){var n=this;e.Button.syncIconUI(n.get(a),n.get(g),t)}};var M=e.ButtonCore;M.CLASS_NAMES=A,M.prototype._uiSetLabel=function(e){return function(t){var n=this,r=n.getNode();if(t!==""||r.one("."+M.CLASS_NAMES.LABEL))return e.apply(n,arguments)}}(M.prototype._uiSetLabel);var _=e.Button;_.NAME=f,_.CSS_PREFIX=A.BUTTON,_.CLASS_NAMES=A,e.Button=e.Base.create(_.NAME,_,[O,e.WidgetCssClass,e.WidgetToggle],{},{CSS_PREFIX:A.BUTTON,getWidgetLazyConstructorFromNodeData:function(e){var t=this,n=e.getData(k)||{};return n.boundingBox=e,n.render=!0,n},hasWidgetLazyConstructorData:function(e){return e.getData(k)!==undefined},setWidgetLazyConstructorNodeData:function(e,t){e.setData(k,t)},syncIconUI:function(t,n,r){var i=this,s=e.config.doc.createTextNode(" "),o=0;r===E&&(o=null),t.insert(s,o),t.insert(n,o)}});var D=e.ToggleButton;D.NAME=x,D.CSS_PREFIX=A.TOGGLE,D.CLASS_NAMES=A,e.ToggleButton=e.Base.create(D.NAME,D,[O,e.WidgetCssClass],{},{});var P=e.ButtonGroup;P.NAME=l,P.CSS_PREFIX=A.BUTTON_GROUP,P.CLASS_NAMES=A,e.mix(P.prototype,{CONTENT_TEMPLATE:null,item:function(t){var n=this,r=n.getButtons().item(t),i=e.Widget.getByNode(r);return e.instanceOf(i,_)?i:r},renderUI:function(){var t=this;t.getButtons().each(function(t){!t.button&&!e.instanceOf(e.Widget.getByNode(t),e.Button)&&(e.Button.hasWidgetLazyConstructorData(t)?(new e.Button(e.Button.getWidgetLazyConstructorFromNodeData(t)),e.Button.setWidgetLazyConstructorNodeData(t,null)):t.plug(e.Plugin.Button))})},select:function(e){var t=this;return t.toggleSelect(e,!0)},toggleSelect:function(t,n){var s=this,u=s.get(N),a=s.getButtons();o(t)&&(t=a.getDOMNodes()),r(t)||(t=e.Array(t)),e.Array.each(t,function(t){i(t)&&(t=a.item(t)),t=e.one(t);if(u===T)if(t.hasClass(e.ButtonGroup.CLASS_NAMES.SELECTED)){if(n===!0)return}else if(n===!1)return;s._handleClick({target:t})})},unselect:function(e){var t=this;return t.toggleSelect(e,!1)}},!0)},"2.0.0pr5",{requires:["button","button-group","button-plugin","aui-component","aui-widget-cssclass","aui-widget-toggle"]});