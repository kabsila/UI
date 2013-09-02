YUI.add("aui-datatable-edit",function(e,t){var n=e.Lang,r=e.Array,i=n.isArray,s=n.isBoolean,o=n.isFunction,u=n.isObject,a=n.isString,f=n.isValue,l=n.String,c=e.DataType,h=function(t){return t instanceof e.BaseCellEditor},p=e.WidgetStdMod,d=e.getClassName,v="activeCell",m="add",g="addOption",y="baseCellEditor",b="boundingBox",w="calendar",E="cancel",S="cell",x="celleditor",T="checkboxCellEditor",N="checked",C="click",k="contentBox",L="data",A="datatable",O="dateCellEditor",M="dd",_="delete",D="disk",P="dotted",H="dropDownCellEditor",B="edit",j="editEvent",F="editOptions",I="editable",q="editor",R="element",U="elementName",z="grip",W="handle",X="hide",V="hideOnSave",$="icon",J="initEdit",K="initToolbar",Q="initValidator",G="input",Y="inputFormatter",Z="key",et="label",tt="link",nt="mousedown",rt="multiple",t="name",it="only",st="option",ot="options",ut="optionsCellEditor",at="outputFormatter",ft="pencil",lt="radioCellEditor",ct="read",ht="readOnly",pt="remove",dt="render",vt="rendered",mt="return",gt="row",yt="save",bt="selected",wt="selectedAttrName",Et="showToolbar",St="submit",xt="textAreaCellEditor",Tt="textCellEditor",Nt="toolbar",Ct="unescapeValue",kt="validator",Lt="value",At="vertical",Ot="visible",Mt="wrapper",_t="zIndex",Dt=",",Pt=".",Ht="",Bt="\n",jt=" ",Ft=/<br\s*\/?>/gi,It=/[\r\n]/g,qt=d(x,B),Rt=d(x,B,m,st),Ut=d(x,B,M,W),zt=d(x,B,_,st),Wt=d(x,B,X,st),Xt=d(x,B,G,t),Vt=d(x,B,G,Lt),$t=d(x,B,et),Jt=d(x,B,tt),Kt=d(x,B,st,gt),Qt=d(x,R),Gt=d(x,st),Yt=d(A,I),Zt=d($),en=d($,z,P,At),tn="<br/>",nn=function(){};nn.NAME="dataTableCellEditorSupport",nn.EDITOR_ZINDEX=9999,nn.ATTRS={editEvent:{setter:"_setEditEvent",validator:a,value:C}},e.mix(nn.prototype,{initializer:function(){var e=this,t=e.get(j);e.CLASS_NAMES_CELL_EDITOR_SUPPORT={cell:e.getClassName(S),readOnly:e.getClassName(ct,it)},e.after(dt,e._afterCellEditorSupportRender),e.delegate(t,e._onEditCell,Pt+e.CLASS_NAMES_CELL_EDITOR_SUPPORT.cell,e)},getEditor:function(e,t){var n=this,r=t.editor,i=e.get(q);return r===!1||i===!1?null:i||r},_afterCellEditorSupportRender:function(){var t=this;t._syncModelsReadOnlyUI(),t.body.after(e.bind(t._syncModelsReadOnlyUI,t),t.body,dt)},_onEditCell:function(t){var n=this,r=n.get(v),i=t.alignNode||r,s=n.getColumn(i),o=n.getRecord(i),u=n.getEditor(o,s);h(u)&&!o.get(ht)&&(u.get(vt)||(u.on({visibleChange:e.bind(n._onEditorVisibleChange,n),save:e.bind(n._onEditorSave,n)}),u.set(_t,nn.EDITOR_ZINDEX),u.render()),u.set(Lt,o.get(s.key)),u.show().move(i.getXY()))},_onEditorSave:function(e){var t=this,n=e.currentTarget,r=t.getActiveColumn(),i=t.getActiveRecord();n.set(Lt,e.newVal),t.set(v,t.get(v)),i.set(r.key,e.newVal),t.highlight&&t.highlight.clear()},_onEditorVisibleChange:function(e){var t=this,n=e.currentTarget;e.newVal&&n._syncFocus()},_syncModelReadOnlyUI:function(e){var t=this,n=t.getRow(e);n.toggleClass(t.CLASS_NAMES_CELL_EDITOR_SUPPORT[ht],e.get(ht)===!0)},_syncModelsReadOnlyUI:function(){var e=this;e.get(L).each(function(t){e._syncModelReadOnlyUI(t)})},getCellEditor:function(){return this.getEditor.apply(this,arguments)},getRecordColumnValue:function(e,t){return e.get(t.key)}}),e.DataTable.CellEditorSupport=nn,e.Base.mix(e.DataTable,[nn]);var rn=e.Component.create({NAME:y,ATTRS:{editable:{value:!1,validator:s},elementName:{value:Lt,validator:a},footerContent:{value:Ht},hideOnSave:{value:!0,validator:s},inputFormatter:{value:function(e){return a(e)&&(e=e.replace(It,tn)),e}},outputFormatter:{value:function(e){var t=this;return a(e)&&(t.get(Ct)&&(e=l.unescapeEntities(e)),e=e.replace(Ft,Bt)),e}},showToolbar:{value:!0,validator:s},strings:{value:{edit:"Edit",save:"Save",cancel:"Cancel"}},tabIndex:{value:1},toolbar:{setter:"_setToolbar",validator:u,value:null},unescapeValue:{value:!0,validator:s},validator:{setter:"_setValidator",validator:u,value:null},value:{value:Ht},visible:{value:!1}},EXTENDS:e.Overlay,UI_ATTRS:[I,Et,Lt],prototype:{CONTENT_TEMPLATE:"<form></form>",ELEMENT_TEMPLATE:null,elements:null,validator:null,_hDocMouseDownEv:null,initializer:function(e){var t=this;t._initEvents()},destructor:function(){var e=this,t=e._hDocMouseDownEv,n=e.toolbar,r=e.validator;t&&t.detach(),n&&n.destroy(),r&&r.destroy()},bindUI:function(){var t=this;t.get(b).on(Z,e.bind(t._onEscKey,t),"down:27")},formatValue:function(e,t){var n=this;return o(e)&&(t=e.call(n,t)),t},getValue:function(){var e=this;return e.formatValue(e.get(Y),e.getElementsValue())},_initEvents:function(){var t=this;t.publish({cancel:{defaultFn:t._defCancelFn},initEdit:{defaultFn:t._defInitEditFn,fireOnce:!0},initValidator:{defaultFn:t._defInitValidatorFn,fireOnce:!0},initToolbar:{defaultFn:t._defInitToolbarFn,fireOnce:!0},save:{defaultFn:t._defSaveFn}}),t.after({render:t._afterRender,visibleChange:e.debounce(t._debounceVisibleChange,350,t)}),t.on({"form-validator:submit":e.bind(t._onSubmit,t)})},_afterRender:function(){var e=this;e._handleInitValidatorEvent(),e._handleInitToolbarEvent()},_defCancelFn:function(e){var t=this;t.hide()},_defInitValidatorFn:function(t){var n=this;n.validator=new e.FormValidator(n.get(kt))},_defInitToolbarFn:function(t){var n=this,r=n.get(I);n.toolbar=(new e.Toolbar(n.get(Nt))).render(n.footerNode),r&&n._uiSetEditable(r)},_defSaveFn:function(e){var t=this;t.get(V)&&t.hide()},_debounceVisibleChange:function(t){var n=this,r=n._hDocMouseDownEv;t.newVal?r||(n._hDocMouseDownEv=e.getDoc().on(nt,e.bind(n._onDocMouseDownExt,n))):r&&(r.detach(),n._hDocMouseDownEv=null)},_handleCancelEvent:function(){var e=this;e.fire(E)},_handleEditEvent:function(){var e=this;e.fire(B)},_handleInitEditEvent:function(){var e=this;e.get(vt)&&this.fire(J)},_handleInitValidatorEvent:function(){var e=this;e.get(vt)&&this.fire(Q)},_handleInitToolbarEvent:function(){var e=this;e.get(vt)&&e.get(Et)&&this.fire(K)},_handleSaveEvent:function(){var e=this;e.validator.hasErrors()||e.fire(yt,{newVal:e.getValue(),prevVal:e.get(Lt)})},_onDocMouseDownExt:function(e){var t=this,n=t.get(b);n.contains(e.target)||t.set(Ot,!1)},_onEscKey:function(e){var t=this;t.hide()},
_onSubmit:function(e){var t=this,n=e.validator;n&&n.formEvent.halt()},_setToolbar:function(t){var n=this,r=n.getStrings();return e.merge({activeState:!1,children:[[{on:{click:e.bind(n._handleSaveEvent,n)},label:r[yt],icon:"icon-ok-sign"},{on:{click:e.bind(n._handleCancelEvent,n)},label:r[E]}]]},t)},_setValidator:function(t){var n=this;return e.merge({boundingBox:n.get(k),bubbleTargets:n},t)},_uiSetShowToolbar:function(e){var t=this,n=t.footerNode;e?n.show():n.hide(),t._handleInitToolbarEvent()},getElementsValue:function(){var e=this,t=e.elements;return t?t.get(Lt):Ht},renderUI:function(){var t=this;t.ELEMENT_TEMPLATE&&(t.elements=e.Node.create(t.ELEMENT_TEMPLATE),t._syncElementsName(),t.setStdModContent(p.BODY,t.elements))},_defInitEditFn:function(e){},_syncElementsFocus:function(){var e=this;e.elements.selectText()},_syncElementsName:function(){var e=this;e.elements.setAttribute(t,e.get(U))},_syncFocus:function(){var t=this;e.later(0,t,t._syncElementsFocus)},_uiSetEditable:function(t){var n=this,r=n.toolbar;n.get(vt)&&r&&(t?r.add([{icon:"icon-edit",label:n.getString(B),on:{click:e.bind(n._handleEditEvent,n)}}],1):r.remove(1))},_uiSetValue:function(e){var t=this,n=t.elements;n&&n.val(t.formatValue(t.get(at),e))}}});e.BaseCellEditor=rn;var sn=e.Component.create({NAME:ut,ATTRS:{inputFormatter:{value:null},options:{setter:"_setOptions",value:{},validator:u},outputFormatter:{value:null},selectedAttrName:{value:bt,validator:a},strings:{value:{add:"Add",cancel:"Cancel",addOption:"Add option",edit:"Edit options",editOptions:"Edit option(s)",name:"Name",remove:"Remove",save:"Save",stopEditing:"Stop editing",value:"Value"}}},EXTENDS:e.BaseCellEditor,UI_ATTRS:[ot],prototype:{EDIT_TEMPLATE:'<div class="'+qt+'"></div>',EDIT_OPTION_ROW_TEMPLATE:'<div class="'+Kt+'">'+'<span class="'+[Ut,Zt,en].join(jt)+'"></span>'+'<input class="'+Xt+'" size="7" placeholder="{titleName}" title="{titleName}" type="text" value="{valueName}" /> '+'<input class="'+Vt+'" size="7" placeholder="{titleValue}" title="{titleValue}" type="text" value="{valueValue}" /> '+'<a class="'+[Jt,zt].join(jt)+'" href="javascript:void(0);">{remove}</a> '+"</div>",EDIT_ADD_LINK_TEMPLATE:'<a class="'+[Jt,Rt].join(jt)+'" href="javascript:void(0);">{addOption}</a> ',EDIT_LABEL_TEMPLATE:'<div class="'+$t+'">{editOptions}</div>',editContainer:null,editSortable:null,options:null,initializer:function(){var e=this;e.on(B,e._onEditEvent),e.on(yt,e._onSave),e.after(K,e._afterInitToolbar)},addNewOption:function(t,n){var r=this,i=r.editContainer.one(Pt+Rt),s=e.Node.create(r._createEditOption(t||Ht,n||Ht));i.placeBefore(s),s.one(G).focus()},removeOption:function(e){e.remove()},saveOptions:function(){var e=this,t=e.editContainer;if(t){var n=t.all(Pt+Xt),r=t.all(Pt+Vt),i={};n.each(function(e,t){var n=e.val(),s=r.item(t).val();n&&s&&(i[s]=n)}),e.set(ot,i),e._uiSetValue(e.get(Lt)),e.toggleEdit()}},toggleEdit:function(){var e=this;e.editContainer.toggle()},_createOptions:function(t){var r=this,i=r.elements,s=[],o=[],u=r.OPTION_TEMPLATE,a=r.OPTION_WRAPPER;e.each(t,function(t,r){var i={id:e.guid(),label:t,name:r,value:r};u&&s.push(n.sub(u,i)),a&&o.push(n.sub(a,i))});var f=e.NodeList.create(s.join(Ht)),l=e.NodeList.create(o.join(Ht));l.size()?(l.each(function(e,t){e.prepend(f.item(t))}),i.setContent(l)):i.setContent(f),r.options=f},_createEditBuffer:function(){var t=this,r=t.getStrings(),i=[];return i.push(n.sub(t.EDIT_LABEL_TEMPLATE,{editOptions:r[F]})),e.each(t.get(ot),function(e,n){i.push(t._createEditOption(e,n))}),i.push(n.sub(t.EDIT_ADD_LINK_TEMPLATE,{addOption:r[g]})),i.join(Ht)},_createEditOption:function(e,r){var i=this,s=i.getStrings();return n.sub(i.EDIT_OPTION_ROW_TEMPLATE,{remove:s[pt],titleName:s[t],titleValue:s[Lt],valueName:e,valueValue:r})},_defInitEditFn:function(t){var n=this,r=e.Node.create(n.EDIT_TEMPLATE);r.delegate("click",e.bind(n._onEditLinkClickEvent,n),Pt+Jt),r.delegate("keydown",e.bind(n._onEditKeyEvent,n),G),n.editContainer=r,n.setStdModContent(p.BODY,r.hide(),p.AFTER),n.editSortable=(new e.Sortable({container:r,handles:[Pt+Ut],nodes:Pt+Kt,opacity:".3"})).delegate.dd.plug(e.Plugin.DDConstrained,{constrain:r,stickY:!0}),n._syncEditOptionsUI()},_getSelectedOptions:function(){var t=this,n=[];return t.options.each(function(e){e.get(t.get(wt))&&n.push(e)}),e.all(n)},_onEditEvent:function(e){var t=this;t._handleInitEditEvent(),t.toggleEdit(),t._syncEditOptionsUI()},_onEditLinkClickEvent:function(e){var t=this,n=e.currentTarget;n.test(Pt+Rt)?t.addNewOption():n.test(Pt+Wt)?t.toggleEdit():n.test(Pt+zt)&&t.removeOption(n.ancestor(Pt+Kt)),e.halt()},_onEditKeyEvent:function(e){var t=this,n=e.currentTarget;if(e.isKey(mt)){var r=n.next(G);r?r.selectText():t.addNewOption(),e.halt()}},_onSave:function(e){var t=this;t.saveOptions()},_setOptions:function(e){var t={};return i(e)?r.each(e,function(e){t[e]=e}):u(e)&&(t=e),t},_syncEditOptionsUI:function(){var e=this;e.editContainer.setContent(e._createEditBuffer())},_uiSetOptions:function(e){var t=this;t._createOptions(e),t._uiSetValue(t.get(Lt)),t._syncElementsName()},_uiSetValue:function(e){var t=this,s=t.options;return s&&s.size()&&(s.set(t.get(wt),!1),f(e)&&(i(e)||(e=String(e).split(Dt)),r.each(e,function(e){s.filter('[value="'+n.trim(e)+'"]').set(t.get(wt),!0)}))),e}}});e.BaseOptionsCellEditor=sn;var on=e.Component.create({NAME:Tt,EXTENDS:e.BaseCellEditor,prototype:{ELEMENT_TEMPLATE:'<input autocomplete="off" class="'+Qt+'" type="text" />'}});e.TextCellEditor=on;var un=e.Component.create({NAME:xt,EXTENDS:e.BaseCellEditor,prototype:{ELEMENT_TEMPLATE:'<textarea class="'+Qt+'"></textarea>'}});e.TextAreaCellEditor=un;var an=e.Component.create({NAME:H,ATTRS:{multiple:{value:!1,validator:s}},EXTENDS:e.BaseOptionsCellEditor,UI_ATTRS:[rt],prototype:{ELEMENT_TEMPLATE:'<select class="'+Qt+'"></select>',OPTION_TEMPLATE:'<option value="{value}">{label}</option>',getElementsValue:function(){var e=this;return e.get(rt)?e._getSelectedOptions().get(Lt):e.elements.get(Lt)},_syncElementsFocus:function(){var e=this;e.
elements.focus()},_uiSetMultiple:function(e){var t=this,n=t.elements;e?n.setAttribute(rt,rt):n.removeAttribute(rt)}}});e.DropDownCellEditor=an;var fn=e.Component.create({NAME:T,ATTRS:{selectedAttrName:{value:N}},EXTENDS:e.BaseOptionsCellEditor,prototype:{ELEMENT_TEMPLATE:'<div class="'+Qt+'"></div>',OPTION_TEMPLATE:'<input class="'+Gt+'" id="{id}" name="{name}" type="checkbox" value="{value}"/>',OPTION_WRAPPER:'<label class="checkbox" for="{id}"> {label}</label>',getElementsValue:function(){var e=this;return e._getSelectedOptions().get(Lt)},_syncElementsFocus:function(){var e=this,t=e.options;t&&t.size()&&t.item(0).focus()},_syncElementsName:function(){var e=this,n=e.options;n&&n.setAttribute(t,e.get(U))}}});e.CheckboxCellEditor=fn;var ln=e.Component.create({NAME:lt,EXTENDS:e.CheckboxCellEditor,prototype:{OPTION_TEMPLATE:'<input class="field-input-choice" id="{id}" name="{name}" type="radio" value="{value}"/>',OPTION_WRAPPER:'<label class="radio" for="{id}"> {label}</label>',getElementsValue:function(){var e=this;return e._getSelectedOptions().get(Lt)[0]}}});e.RadioCellEditor=ln;var cn=e.Component.create({NAME:O,EXTENDS:e.BaseCellEditor,ATTRS:{bodyContent:{value:Ht},calendar:{setter:"_setCalendar",validator:u,value:null},dateFormat:{value:"%D",validator:a},inputFormatter:{value:function(e){var t=this,n=[];return r.each(e,function(e,r){n.push(t.formatDate(e).toString())}),n}},outputFormatter:{value:function(e){var t=this,n=[];return r.each(e,function(e,t){n.push(c.Date.parse(e))}),n}}},prototype:{ELEMENT_TEMPLATE:'<input class="'+Qt+'" type="hidden" />',initializer:function(){var t=this;t.after("calendar:dateClick",e.bind(t._afterDateSelect,t))},getElementsValue:function(){var e=this;return e.calendar.get("selectedDates")},formatDate:function(e){var t=this,n=t.get("dateFormat"),r=t.get("locale");return c.Date.format(e,{format:n,locale:r})},_afterDateSelect:function(e){var t=this,n=t.calendar.get("selectedDates");t.elements.val(r.invoke(n,"getTime").join(Dt))},_afterRender:function(){var t=this;e.DateCellEditor.superclass._afterRender.apply(t,arguments),t.calendar=(new e.Calendar(t.get(w))).render(t.bodyNode)},_setCalendar:function(t){var n=this;return e.merge({bubbleTargets:n},t)},_uiSetValue:function(e){var t=this,n=t.calendar,r;n&&(i(e)||(e=[e]),r=t.formatValue(t.get(at),e),n._clearSelection(),n.set("date",r[0]),n.selectDates(r))}}});e.DateCellEditor=cn},"2.0.0pr5",{requires:["datatable-base","calendar","overlay","sortable","aui-datatype","aui-toolbar","aui-form-validator","aui-datatable-core"],skinnable:!0});
