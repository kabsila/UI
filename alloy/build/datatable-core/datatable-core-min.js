YUI.add("datatable-core",function(e,t){var n=e.Attribute.INVALID_VALUE,r=e.Lang,i=r.isFunction,s=r.isObject,o=r.isArray,u=r.isString,a=r.isNumber,f=e.Array,l=e.Object.keys,c;c=e.namespace("DataTable").Core=function(){},c.ATTRS={columns:{validator:o,setter:"_setColumns",getter:"_getColumns"},recordType:{getter:"_getRecordType",setter:"_setRecordType"},data:{valueFn:"_initData",setter:"_setData",lazyAdd:!1},recordset:{setter:"_setRecordset",getter:"_getRecordset",lazyAdd:!1},columnset:{setter:"_setColumnset",getter:"_getColumnset",lazyAdd:!1}},e.mix(c.prototype,{getColumn:function(e){var t,n,r,i,u;s(e)&&!o(e)?t=e:t=this.get("columns."+e);if(t)return t;n=this.get("columns");if(a(e)||o(e)){e=f(e),u=n;for(r=0,i=e.length-1;u&&r<i;++r)u=u[e[r]]&&u[e[r]].children;return u&&u[e[r]]||null}return null},getRecord:function(e){var t=this.data.getById(e)||this.data.getByClientId(e);return t||(a(e)&&(t=this.data.item(e)),!t&&this.view&&this.view.getRecord&&(t=this.view.getRecord.apply(this.view,arguments))),t||null},_allowAdHocAttrs:!0,_afterColumnsChange:function(e){this._setColumnMap(e.newVal)},_afterDataChange:function(e){var t=e.newVal;this.data=e.newVal,!this.get("columns")&&t.size()&&this._initColumns()},_afterRecordTypeChange:function(e){var t=this.data.toJSON();this.data.model=e.newVal,this.data.reset(t),!this.get("columns")&&t&&(t.length?this._initColumns():this.set("columns",l(e.newVal.ATTRS)))},_createRecordClass:function(t){var n,r,i;if(o(t)){n={};for(r=0,i=t.length;r<i;++r)n[t[r]]={}}else s(t)&&(n=t);return e.Base.create("record",e.Model,[],null,{ATTRS:n})},destructor:function(){(new e.EventHandle(e.Object.values(this._eventHandles))).detach()},_getColumns:function(e,t){return t.length>8?this._columnMap:e},_getColumnset:function(e,t){return this.get(t.replace(/^columnset/,"columns"))},_getRecordType:function(e){return e||this.data&&this.data.model},_initColumns:function(){var e=this.get("columns")||[],t;!e.length&&this.data.size()&&(t=this.data.item(0),t.toJSON&&(t=t.toJSON()),this.set("columns",l(t))),this._setColumnMap(e)},_initCoreEvents:function(){this._eventHandles.coreAttrChanges=this.after({columnsChange:e.bind("_afterColumnsChange",this),recordTypeChange:e.bind("_afterRecordTypeChange",this),dataChange:e.bind("_afterDataChange",this)})},_initData:function(){var t=this.get("recordType"),n=new e.ModelList;return t&&(n.model=t),n},_initDataProperty:function(t){var n;this.data||(n=this.get("recordType"),t&&t.each&&t.toJSON?(this.data=t,n&&(this.data.model=n)):(this.data=new e.ModelList,n&&(this.data.model=n)),this.data.addTarget(this))},initializer:function(e){var t=e.data,n=e.columns,r;this._initDataProperty(t),n||(r=(e.recordType||e.data===this.data)&&this.get("recordType"),r?n=l(r.ATTRS):o(t)&&t.length&&(n=l(t[0])),n&&this.set("columns",n)),this._initColumns(),this._eventHandles={},this._initCoreEvents()},_setColumnMap:function(e){function n(e){var r,i,s,o;for(r=0,i=e.length;r<i;++r)s=e[r],o=s.key,o&&!t[o]&&(t[o]=s),t[s._id]=s,s.children&&n(s.children)}var t={};n(e),this._columnMap=t},_setColumns:function(t){function f(e){var t={},n,u,l;r.push(e),i.push(t);for(n in e)e.hasOwnProperty(n)&&(u=e[n],o(u)?t[n]=u.slice():s(u,!0)?(l=a(u,r),t[n]=l===-1?f(u):i[l]):t[n]=e[n]);return t}function l(e){return e=e.replace(/\s+/,"-"),n[e]?e+=n[e]++:n[e]=1,e}function c(t,n){var r=[],i,s,a,h;for(i=0,s=t.length;i<s;++i)r[i]=a=u(t[i])?{key:t[i]}:f(t[i]),h=e.stamp(a),a.id||(a.id=h),a.field&&(a.name=a.field),n?a._parent=n:delete a._parent,a._id=l(a.name||a.key||a.id),o(a.children)&&(a.children=c(a.children,a));return r}var n={},r=[],i=[],a=e.Array.indexOf;return t&&c(t)},_setColumnset:function(e){return this.set("columns",e),o(e)?e:n},_setData:function(e){e===null&&(e=[]);if(o(e))this._initDataProperty(),this.data.reset(e,{silent:!0}),e=this.data;else if(!e||!e.each||!e.toJSON)e=n;return e},_setRecordset:function(t){var n;return t&&e.Recordset&&t instanceof e.Recordset&&(n=[],t.each(function(e){n.push(e.get("data"))}),t=n),this.set("data",t),t},_setRecordType:function(e){var t;return i(e)&&e.prototype.toJSON&&e.prototype.setAttrs?t=e:s(e)&&(t=this._createRecordClass(e)),t||n}})},"patched-dev-3.x",{requires:["escape","model-list","node-event-delegate"]});