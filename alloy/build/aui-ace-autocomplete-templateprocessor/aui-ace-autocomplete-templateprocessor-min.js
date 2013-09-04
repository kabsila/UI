YUI.add("aui-ace-autocomplete-templateprocessor",function(e,t){var n=e.Lang,r=e.Array,i=e.Object,s=e.AceEditor.AutoCompleteBase,o=".",u="",a="directives",f="fillMode",l="host",c="Method",h="variables",p=0,d=1,v=1,m=-1,g=0,y="aui-ace-autocomplete-templateprocessor",b=e.Base.create(y,e.Base,[],{getResults:function(e,t,n){var r=this,i,s,o,u,f;f=e.type,f===p?(o=r.get(a),i=e.content.toLowerCase(),i.length&&(s=r.get(l),o=s._filterResults(i,o)),t(o)):f===d&&(u=r._getVariableMatches(e.content),t(u))},getSuggestion:function(e,t){var n=this,r,i,a,c,h;return a=t||u,t&&(r=n.get(l).get(f),c=e.type,r===s.FILL_MODE_INSERT?c===p?e.content&&t.indexOf(e.content)===0&&(a=t.substring(e.content.length)):c===d&&(h=e.content.split(o),i=h[h.length-1],i&&t.indexOf(i)===0&&(a=t.substring(i.length))):c===d&&(h=e.content.split(o),h[h.length-1]=t,a=h.join(o))),a},_isLastToken:function(e,t){return e===t.length-1},_getTokenType:function(e){var t=m;return n.isString(e)&&(e.length?t=g:t=v),t},_getVariableMatches:function(e){var t=this,n,s,u,a,f,p,d,m,y,b,w,E,S,x,T;y=[],s=t.get(h),b={},n=s.variables;if(e){E=e.split(o),p=E[E.length-1];for(a=0;a<E.length;a++){w=E[a],S=t._getTokenType(w);if(S===v)a===0?n={}:b=n;else if(S===g){f=t._isLastToken(a,E);if(f){b=n;break}d=w.indexOf("("),d!==-1&&(w=w.substring(0,d)),x=n[w];if(!x){if(f){b=n;break}b={};break}a===0?T=x.type:T=x.returnType,n=s.types[T]||{}}}}else b=s.variables;return y=i.keys(b),m=y.sort(),p&&(u=t.get(l),m=u._filterResults(p,m)),m.length&&(m=r.map(m,function(e,t){var n,i;return i=b[e],i.type===c?(n=r.map(i.argumentTypes,function(e,t){var n=e.split(".");return n[n.length-1]}),e+"("+n.join(", ")+")"):e})),m},_setRegexValue:function(t){var r=e.AttributeCore.INVALID_VALUE;return n.isString(t)?r=new RegExp(t):t instanceof RegExp&&(r=t),r}},{NAME:y,NS:y,ATTRS:{directives:{validator:n.isArray},host:{validator:n.isObject},variables:{validator:n.isObject}}});e.AceEditor.TemplateProcessor=b},"2.0.0pr5",{requires:["aui-ace-autocomplete-base"]});