YUI.add("aui-ace-autocomplete-list",function(e,t){var n=e.Lang,r=e.Array,i=e.Node,s=e.Do,o=e.getClassName,u="data-index",a=".",f="",l="ace-autocomplete-list",c=" ",h="addSuggestion",p="click",d="container",v="contentBox",m="cursorChange",g="cursorOut",y="empty",b="entry",w="entrySelected",E="highlighted",S="insertText",x="list",T="listNode",N="loading",C="loadingMessage",k="match",L="mouseenter",A="mouseleave",O="next",M="offsetHeight",_="previous",D="region",P="removeText",H="results",H="results",B="resultsChange",j="resultsError",F="selected",I="showLoadingMessage",q="visible",R="visibleChange",U="xy",z="ace-autocomplete",W=o(z,b),X=o(z,b,d),V=o(z,b,d,E),$=o(z,b,y),J=o(z,b,N),K=o(z,b,N),Q=o(z,H),G=a+X,Y=G+a+F,Z=Y+c+a+W,et="<div></div>",tt=40,nt=35,rt=34,it=33,st=36,ot=38,ut=5,at=20,ft=e.Base.create(l,e.Overlay,[e.AceEditor.AutoCompleteBase,e.WidgetAutohide],{bindUI:function(){var e=this;e.on(h,e.hide,e),e.on(m,e._onCursorChange,e),e.on(g,e.hide,e),e.on(S,e._onInsertText,e),e.on(k,e._onMatch,e),e.on(P,e._onRemoveText,e),e.on(B,e._onResultsChange,e),e.on(j,e._setEmptyResults,e),e.on(I,e._onShowLoadingMessage,e),e.on(R,e._onVisibleChange,e)},renderUI:function(){var e=this,t;t=e.get(T),t||(t=e._createListNode()),t.delegate(p,e._handleResultListClick,G,e),t.delegate(L,e._onMouseEnter,G,e),t.delegate(A,e._onMouseLeave,G),e._autoCompleteResultsList=t},_createListNode:function(){var t=this,n;return n=e.Node.create(t.TPL_LIST),t.get(v).append(n),n},_getEntriesPerPage:function(){var e=this,t,n,r,i;return r=e._entriesPerPage,r||(t=e._autoCompleteResultsList,i=t.one(G).get(M),n=t.get(M),r=Math.floor(n/i),e._entriesPerPage=r),r},_getSelectedEntry:function(){var e=this,t,n;return n=e._autoCompleteResultsList.one(Z),n&&(t=n.text()),t},_handleArrows:function(e){var t=this,n,r,i,o,u,a;e===ot?n=_:e===tt&&(n=O);if(n)return r=t._autoCompleteResultsList,a=r.one(Y),a&&(i=a[n](G),i&&(a.removeClass(F),i.addClass(F),u=r.get(D),o=i.get(D),n===_?o.top<u.top?i.scrollIntoView(!0):o.top>u.bottom&&i.scrollIntoView():o.top+o.height>u.bottom?i.scrollIntoView():o.top+o.height<u.top&&i.scrollIntoView(!0))),new s.Halt(null)},_handleKey:function(e,t,n){var r=this,i;if(r.get(q))if(n===ot||n===tt)i=r._handleArrows(n);else if(n===it||n===rt)i=r._handlePageUpDown(n);else if(n===nt||n===st)i=r._handleStartEnd(n);return i},_handlePageUpDown:function(e){var t=this,r,i,o,a,l,c,h,p;return r=t._autoCompleteResultsList,i=t._getEntriesPerPage(),c=r.one(Y),h=n.toInt(c.attr(u)),p=f,l=!1,e===it?(a=h-i,l=!0):e===rt&&(a=h+i,p=":last-child"),o=r.one(G+"["+u+'="'+a+'"]'),o||(o=r.one(G+p)),c!==o&&(c.removeClass(F),o.addClass(F),o.scrollIntoView(l)),new s.Halt(null)},_handleResultListClick:function(e){var t=this,n,r,i;r=e.currentTarget,i=t._autoCompleteResultsList.one(Y),r!==i&&(i.removeClass(F),r.addClass(F)),n=r.text(),t._addSuggestion(n),t.fire(w,{content:n})},_handleStartEnd:function(e){var t=this,n,r,i,o;return i=!1,n=t._autoCompleteResultsList,e===nt?r=n.one(G+":last-child"):e===st&&(r=n.one(G),i=!0),o=n.one(Y),r!==o&&(o.removeClass(F),r.addClass(F),r.scrollIntoView(i)),new s.Halt(null)},_onCursorChange:function(e){var t=this;t.get(q)||e.preventDefault()},_onInsertText:function(e){var t=this;e.startRow!==e.endRow&&t.get(q)&&t.hide()},_onMatch:function(e){var t=this,n,r,i;i=t.get(q),r=t._autoCompleteResultsList.hasChildNodes(),e.match?r?i||(n=e.coords,t.set(U,[n.pageX+ut,n.pageY+at]),t.show()):i&&t.hide():i&&t.hide()},_onMouseEnter:function(e){e.currentTarget.addClass(V)},_onMouseLeave:function(e){e.currentTarget.removeClass(V)},_onRemoveText:function(e){var t=this;t.get(q)&&t.hide()},_onResultsChange:function(e){var t=this,s,o,u,a,f;s=t._autoCompleteResultsList,s.empty(),a=e.newVal,o=t.TPL_ENTRY,f=i.create(et),r.each(a,function(e,t){f.appendChild(n.sub(o,{index:t,value:e}))}),s.setHTML(f.getHTML()),u=s.one(G),u&&u.addClass(F)},_onShowLoadingMessage:function(e){var t=this,r;r=t._autoCompleteResultsList,r.empty(),r.appendChild(n.sub(t.TPL_LOADING,{label:t.get(C)})),t.get(q)||t.show()},_onVisibleChange:function(e){var t=this;e.newVal?t._overwriteCommands():t._removeAutoCompleteCommands()},_setEmptyResults:function(){var e=this;e.set(H,[])},TPL_ENTRY:'<li class="'+X+'" data-index="{index}">'+'<span class="'+W+'">{value}</span>'+"</li>",TPL_LIST:'<ul class="'+Q+'"/>',TPL_LOADING:'<li class="'+X+'">'+'<span class="icon-loading '+J+'">{label}</span>'+"</li>",TPL_RESULTS_EMPTY:'<li class="'+X+'">'+'<span class="'+$+'">{label}</span>'+"</li>"},{NAME:l,NS:l,ATTRS:{host:{validator:n.isObject},listNode:{value:null},loadingMessage:{validator:n.isString,value:"Loading"},results:{validator:n.isArray},selectedEntry:{getter:"_getSelectedEntry"},strings:{validator:n.isObject,value:{emptyMessage:"No suggestions"}}},CSS_PREFIX:z,HTML_PARSER:{listNode:a+Q}});e.AceEditor.AutoCompleteList=ft,e.AceEditor.AutoComplete=ft},"2.0.0pr5",{requires:["aui-ace-autocomplete-base","overlay","widget-autohide"],skinnable:!0});
