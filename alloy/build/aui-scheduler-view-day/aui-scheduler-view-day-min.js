YUI.add("aui-scheduler-view-day",function(e,t){var n=e.Lang,r=n.isBoolean,i=n.isFunction,s=n.isNumber,o=n.isObject,u=n.isString,a=e.DataType.DateMath,f=e.WidgetStdMod,l="a",c=",",h=".",p="",d="%",v=" ",m="data-colnumber",g="scheduler-view",y="scheduler-view-day",b=e.cached(function(){var t=e.config.doc,n=t.createElement("div"),r=t.getElementsByTagName("body")[0],i=.1;return r&&(n.style.cssText="position:absolute;visibility:hidden;overflow:scroll;width:20px;",n.appendChild(t.createElement("p")).style.height="1px",r.insertBefore(n,r.firstChild),i=n.offsetWidth-n.clientWidth,r.removeChild(n)),i},null,.1),w=function(e,t){return function(n){var r=n.all(e);return r.size()>=t?r:null}},E=function(e,t){return Math.round(e/t)*t},S=function(e){return parseFloat(e)||0},x="activeColumn",T="activeView",N="allDay",C="boundingBox",k="col",L="colDaysNode",A="colHeaderDaysNode",O="colblank",M="coldata",_="colday",D="colgrid",P="colspan",H="coltime",B="columnData",j="columnDayHeader",F="columnShims",I="columnTime",q="container",R="creationStartDate",U="date",z="viewDate",W="day",X="days",V="delegateConfig",$="disabled",J="division",K="dotted",Q="draggingEvent",G="duration",Y="endDate",Z="eventPlaceholder",et="eventRecorder",tt="eventWidth",nt="filterFn",rt="first",it="grid",st="gridContainer",ot="grip",ut="hd",at="header",ft="headerDateFormatter",lt="headerTableNode",ct="headerView",ht="headerViewConfig",pt="headerViewLabelNode",dt="height",vt="horizontal",mt="host",gt="hourHeight",yt="icon",bt="isoTime",wt="label",Et="left",St="locale",xt="marginRight",Tt="marker",Nt="markercell",Ct="markercellsNode",kt="markers",Lt="markersNode",At="node",Ot="offsetHeight",Mt="pad",_t="parentNode",Dt="proxy",Pt="px",Ht="region",Bt="resizer",jt="resizerNode",Ft="resizing",It="right",qt="scheduler",Rt="scheduler-event",Ut="shim",zt="startDate",Wt="startXY",Xt="strings",Vt="table",$t="tableNode",Jt="time",Kt="timesNode",Qt="today",Gt="top",Yt="view",Zt="visible",en="width",tn="data",nn=e.getClassName,rn=nn(yt),sn=nn(g,Vt,tn),on=nn(Rt),un=nn(Rt,$),an=nn(Rt,Dt),fn=nn(qt,Qt),ln=nn(qt,Qt,ut),cn=nn(g,M),hn=nn(g,D),pn=nn(g,it),dn=nn(g,it,q),vn=nn(g,W,at,k),mn=nn(g,W,at,W),gn=nn(g,W,at,W,rt),yn=nn(g,W,at,W,Mt,It),bn=nn(g,W,at,Vt),wn=nn(g,W,at,Yt,wt),En=nn(g,yt,ot,vt),Sn=nn(g,Tt,J),xn=nn(g,Nt),Tn=nn(g,kt),Nn=nn(g,W,Bt),Cn=nn(g,W,Bt,yt),kn=nn(g,W,Vt),Ln=nn(g,W,Vt,k),An=nn(g,W,Vt,k,Ut),On=nn(g,W,Vt,O),Mn=nn(g,W,Vt,_),_n=nn(g,W,Vt,H),Dn=nn(g,W,Vt,Jt),Pn='<div class="'+Nn+'">'+'<div class="'+[En,Cn].join(v)+'"></div>'+"</div>",Hn='<div class="'+xn+'">'+'<div class="'+Sn+'"></div>'+"</div>",Bn='<span class="'+wn+'">{label}</span>',jn='<table cellspacing="0" cellpadding="0" class="'+kn+'">'+"<tbody>"+'<tr class="'+hn+'" height="1">'+'<td height="0" class="'+[Ln,On].join(v)+'"></td>'+'<td class="'+dn+'" colspan="1">'+'<div class="'+pn+'">'+'<div class="'+Tn+'"></div>'+"</div>"+"</td>"+"</tr>"+'<tr class="'+cn+'">'+'<td class="'+[Ln,_n].join(v)+'"></td>'+"</tr>"+"</tbody>"+"</table>",Fn='<td class="'+[Ln,Mn].join(v)+'" data-colnumber="{colNumber}">'+'<div class="'+An+'"></div>'+"</td>",In='<div class="'+Dn+'">{hour}</div>',qn='<table cellspacing="0" cellpadding="0" class="'+bn+'">'+"<tbody>"+'<tr class="'+vn+'"></tr>'+"</tbody>"+"</table>",Rn='<th class="'+mn+'" data-colnumber="{colNumber}"><a href="#">&nbsp;</a></th>',Un='<td class="'+[mn,gn].join(v)+'"></td>',zn='<th class="'+[mn,yn].join(v)+'">&nbsp;</th>',Wn=e.Component.create({NAME:y,ATTRS:{bodyContent:{value:p},days:{value:1,validator:s},delegateConfig:{value:{},setter:function(t){var n=this;return e.merge({dragConfig:{useShim:!1},bubbleTargets:n,container:n.get(C),nodes:h+on,invalid:"input, select, button, a, textarea, "+h+un},t||{})},validator:o},eventWidth:{value:95,validator:s},filterFn:{value:function(e){return e.getHoursDuration()<=24&&!e.get(N)}},headerDateFormatter:{value:function(t){var n=this,r=n.get(qt);return e.DataType.Date.format(t,{format:"%d %A",locale:r.get(St)})},validator:u},headerView:{value:!0,validator:r},headerViewConfig:{setter:function(t){var n=this;return e.merge({displayDaysInterval:1,displayRows:6,filterFn:function(e){return e.getHoursDuration()>24||e.get(N)},height:"auto",visible:!0},t||{})},value:{}},hourHeight:{value:52,validator:s},name:{value:W},navigationDateFormatter:{value:function(t){var n=this,r=n.get(qt);return e.DataType.Date.format(t,{format:"%A, %B %d, %Y",locale:r.get(St)})},validator:i},strings:{value:{allDay:"All day"}},headerTableNode:{valueFn:function(){return e.Node.create(qn)}},headerViewLabelNode:{valueFn:function(){var t=this,r=t.get(Xt);return e.Node.create(n.sub(Bn,{label:r[N]}))}},resizerNode:{valueFn:function(){return e.Node.create(Pn)}},tableNode:{valueFn:function(){return e.Node.create(jn)}},colDaysNode:{valueFn:"_valueColDaysNode"},colHeaderDaysNode:{valueFn:"_valueColHeaderDaysNode"},markercellsNode:{valueFn:"_valueMarkercellsNode"},timesNode:{valueFn:"_valueTimesNode"}},HTML_PARSER:{colDaysNode:w(h+Mn,1),colHeaderDaysNode:w(h+mn,2),headerTableNode:h+bn,headerViewLabelNode:h+wn,markercellsNode:w(h+xn,24),resizerNode:h+Nn,tableNode:h+kn,timesNode:w(h+Dn,24)},EXTENDS:e.SchedulerView,prototype:{initializer:function(){var t=this;t[L]=t.get(L),t[A]=t.get(A),t[lt]=t.get(lt),t[Ct]=t.get(Ct),t[jt]=t.get(jt),t[$t]=t.get($t),t[Kt]=t.get(Kt),t[x]=null,t[B]=t[$t].one(h+cn),t[j]=t.headerTableNode.one(h+vn),t[F]=t[L].all(h+An),t[I]=t[$t].one(h+_n),t[st]=t[$t].one(h+dn),t[Lt]=t[$t].one(h+Tn),t.get(ct)&&(t[ct]=new e.SchedulerTableView(t.get(ht)))},renderUI:function(){var e=this;e[I].setContent(e[Kt]),e[Lt].setContent(e[Ct]),e[L].appendTo(e[B]),e[A].appendTo(e[j]),e[ct]&&(e[ct].set(qt,e.get(qt)),e[ct].render())},bindUI:function(){var t=this;t[lt].delegate("click",e.bind(t._onClickDaysHeader,t),h+mn),t[B].delegate("mousedown",e.bind(t._onMouseDownTableCol,t),h+Ln),t[B].delegate("mouseenter",e.bind(t._onMouseEnterEvent,t),h+on),t[B].delegate("mouseleave",e.bind(t._onMouseLeaveEvent,t),h+on),t[B].delegate("mousemove",e.bind(t._onMouseMoveTableCol
,t),h+Mn),t[B].delegate("mouseup",e.bind(t._onMouseUpTableCol,t),h+Ln),t.on("drag:end",t._onEventDragEnd),t.on("drag:start",t._onEventDragStart),t.on("drag:tickAlignY",t._dragTickAlignY),t.on("schedulerChange",t._onSchedulerChange),t.after("drag:align",t._afterDragAlign)},syncUI:function(){var e=this;Wn.superclass.syncUI.apply(this,arguments),e[st].attr(P,e.get(X)),e._setupDragDrop()},syncStdContent:function(){var t=this;t.setStdModContent(f.BODY,t[$t].getDOM());var n=e.NodeList.create(t[lt]);t[ct]&&(n.push(t[ct].get(C)),n.push(t.get(pt))),t.setStdModContent(f.HEADER,n)},calculateEventHeight:function(e){var t=this,n=t.get(gt);return Math.max(e*(n/60),n/2)},calculateTop:function(e){var t=this;return(e.getHours()*60+e.getMinutes()+e.getSeconds()/60)*(t.get(gt)/60)},getNextDate:function(){var e=this,t=e.get(qt).get(z);return a.toLastHour(a.add(t,a.DAY,1))},getPrevDate:function(){var e=this,t=e.get(qt).get(z);return a.toMidnight(a.subtract(t,a.DAY,1))},getColumnByDate:function(e){var t=this;return t[L].item(t.getDateDaysOffset(e))},getColumnShimByDate:function(e){var t=this;return t[F].item(t.getDateDaysOffset(e))},getDateByColumn:function(e){var t=this,n=a.safeClearTime(t.get(qt).get(z));return a.add(n,a.DAY,e)},getDateDaysOffset:function(e){var t=this,n=a.safeClearTime(t.get(qt).get(z));return a.getDayOffset(a.safeClearTime(e),n)},getYCoordTime:function(e){var t=this,n=t.get(gt),r=S((e/n).toFixed(2)),i=Math.floor(r*100%100*.6),s=Math.floor(r);return[s,i,0]},plotEvent:function(e){var t=this,n=e.get(At);n.size()<2&&e.addPaddingNode();var r=e.get(At).item(0),i=e.get(At).item(1),s=t.getColumnShimByDate(e.get(Y)),o=t.getColumnShimByDate(e.get(zt));o?(o.append(r),e.get(Zt)&&r.show()):r.hide(),s?s.compareTo(o)||e.isDayBoundaryEvent()?i.hide():(s.append(i),e.get(Zt)&&i.show()):i.hide(),e.syncUI(),t.syncEventTopUI(e),t.syncEventHeightUI(e)},plotEvents:function(){var t=this,n=t.get(qt),r=t.get(nt);t[F].each(function(i,s){var o=n.getEventsByDay(t.getDateByColumn(s),!0),u=[];i.empty(),e.Array.each(o,function(e){r.apply(t,[e])&&(t.plotEvent(e),u.push(e))}),t.syncEventsIntersectionUI(u)}),t.get(ct)&&t.syncHeaderViewUI()},syncColumnsUI:function(){var e=this;e[L].each(function(t,n){var r=e.getDateByColumn(n);t.toggleClass(fn,a.isToday(r))})},syncDaysHeaderUI:function(){var e=this,t=e.get(qt).get(z),n=e.get(ft),r=e.get(St);e[A].all(l).each(function(r,i){var s=a.add(t,a.DAY,i);r.toggleClass(ln,a.isToday(s)),r.html(n.call(e,s))})},syncEventsIntersectionUI:function(t){var n=this,r=n.get(tt);n.get(qt).flushEvents(),e.Array.each(t,function(i){var s=n.findEventIntersections(i,t),o=s.length,u=r/o;e.Array.each(s,function(e,t){var n=e.get(At).item(0),i=u*t,s=u*1.7;t===o-1&&(s=r-i),n.setStyle(en,s+d),n.setStyle(Et,i+d);var a=n.get(_t);a&&a.insert(n,t),e._filtered=!0})})},syncEventHeightUI:function(e){var t=this,n=e.get(Y),r=e.get(zt),i=a.clone(r);i.setHours(24,0,0);var s=a.getMinutesOffset(t.limitDate(n,i),r);e.get(At).item(0).set(Ot,t.calculateEventHeight(s));var o=e.get(At).item(1);if(o.inDoc()){var u=a.getMinutesOffset(n,a.toMidnight(e.getClearEndDate()));o.set(Ot,t.calculateEventHeight(u))}},syncEventTopUI:function(e){var t=this;e.get(At).item(0).setStyle(Gt,t.calculateTop(e.get(zt))+Pt),e.get(At).item(1).setStyle(Gt,0)},syncHeaderViewUI:function(){var e=this;if(e.get(ct)){var t=e[ct];t.plotEvents();var n=t.get(C);n.setStyle(xt,b());var r=n.one(h+sn),i=Math.max(r.get(Ot),40);t.set(dt,i),e._fillHeight()}},calculateYDelta:function(e,t){var n=this;return(t[1]-e[1])/(n.get(gt)/2)*30},findEventIntersections:function(t,n){var r=this,i=[];return e.Array.each(n,function(e){!t._filtered&&e.get(Zt)&&t.intersectHours(e)&&i.push(e)}),i},getXYDelta:function(t){var n=this,r=t.currentTarget.getXY(),i=[t.pageX,t.pageY];return e.Array.map(r,function(e,t){return i[t]-e})},getTickY:function(){var e=this;return E(Math.ceil(e.get(gt)/2),10)},roundToNearestHour:function(e,t){var n=this;e.setHours(t[0],E(t[1],n.getTickY()),t[2])},_afterDragAlign:function(e){var t=this,n=e.target;t[Wt]||(t[Wt]=n.actXY),n.actXY[0]=null},_dragTickAlignX:function(e){var t=this,n=t[Q];if(n&&!t[Ft]){var r=t[Z],i=S(e.attr(m))-t.startColNumber;t.draggingEventStartDate=a.add(n.get(zt),a.DAY,i);var s=a.clone(t.draggingEventStartDate);a.copyHours(s,r.get(zt)),r.move(s,{silent:!0}),t.plotEvent(r)}},_dragTickAlignY:function(e){var t=this,n=t.get(qt),r=n.get(et),i=t[Q];if(i){var s=e.target.get(mt),o=t[Z],u=t.calculateYDelta(t[Wt],s.actXY);if(t[Ft]){var f=a.add(t.draggingEventEndDate,a.MINUTES,u);if(a.getMinutesOffset(f,t.draggingEventStartDate)<30)return;o.set(Y,f,{silent:!0})}else o.move(a.add(t.draggingEventStartDate,a.MINUTES,u),{silent:!0});t.plotEvent(o)}},_setupDragDrop:function(){var t=this,n=t[Z];if(!n){var r=t.get(qt);n=new r.eventModel({scheduler:r}),n.removeTarget(r),n.get(At).addClass(an),n.set(Zt,!1,{silent:!0}),t[Z]=n}t.delegate||(t.delegate=new e.DD.Delegate(t.get(V)));var i=t.delegate.dd;i.unplug(e.Plugin.DDConstrained),i.unplug(e.Plugin.DDNodeScroll);var s=t.bodyNode.get(Ht);s.bottom=Infinity,s.top=-Infinity,i.plug(e.Plugin.DDConstrained,{bubbleTargets:t,constrain:s,stickY:!0,tickY:t.get(gt)/2}),i.plug(e.Plugin.DDNodeScroll,{node:t.bodyNode,scrollDelay:150})},_uiSetDate:function(e){var t=this;t.syncColumnsUI(),t.syncDaysHeaderUI()},_onClickDaysHeader:function(e){var t=this,n=t.get(qt);if(e.target.test(l)){var r=n.getViewByName(W);if(r){var i=S(e.currentTarget.attr(m));n.set(U,t.getDateByColumn(i)),n.set(T,r)}}e.preventDefault()},_onEventDragEnd:function(e){var t=this,n=t[Q];if(n){var r=t[Z];r.set(Zt,!1,{silent:!0}),n.set(Zt,!0,{silent:!0}),n.copyDates(r),t.get(qt).syncEventsUI()}t[Wt]=null,t[Q]=null},_onEventDragStart:function(e){var t=this,n=t[Q]=t.delegate.dd.get(At).getData(Rt);if(n){var r=t[Z];r.copyPropagateAttrValues(n,null,{silent:!0}),t.plotEvent(r),n.set(Zt,!1,{silent:!0}),t.draggingEventStartDate=a.clone(n.get(zt)),t.draggingEventEndDate=a.clone(n.get(Y));var i=t.getColumnByDate(n.get(zt));t.startColNumber=i?S(i.attr(m)):0}},_onMouseDownTableCol
:function(e){var t=this,n=e.target,r=t.get(qt),i=r.get(et);if(i&&!r.get($)){i.hidePopover();if(n.test(h+An)){t[Wt]=[e.pageX,e.pageY];var s=S(e.currentTarget.attr(m)),o=t.getDateByColumn(s),u=t.getXYDelta(e);t.roundToNearestHour(o,t.getYCoordTime(u[1]));var f=a.add(o,a.MINUTES,i.get(G));i.move(o,{silent:!0}),i.setAttrs({allDay:!1,endDate:f},{silent:!0}),t[R]=o,e.halt()}else n.test([h+Nn,h+Cn].join(c))&&(t[Ft]=!0)}t.get(C).unselectable()},_onMouseEnterEvent:function(e){var t=this,n=e.currentTarget,r=n.getData(Rt);r&&!r.get($)&&t[jt].appendTo(n)},_onMouseLeaveEvent:function(e){var t=this;t[Ft]||t._removeResizer()},_onMouseMoveTableCol:function(e){var t=this,n=e.currentTarget,r=t.get(qt).get(et);t[x]!==n&&(t[x]=n,t._dragTickAlignX(t[x]));var i=t[R];if(i){var s=E(t.calculateYDelta(t[Wt],[e.pageX,e.pageY]),t.getTickY()),o=s>=t._delta;if(t._delta!==s){if(s>0){var u=o?Math.max(s,r.get(G)):s;r.set(Y,a.add(i,a.MINUTES,u),{silent:!0})}else r.set(zt,a.add(i,a.MINUTES,s),{silent:!0});t.plotEvent(r),t._delta=s}}},_onMouseUpTableCol:function(e){var t=this,n=t.get(qt),r=n.get(et);r&&!n.get($)&&t[R]&&(t.plotEvent(r),r.showPopover()),t[R]=null,t[Ft]=!1,t[Wt]=null,t._removeResizer(),t.get(C).selectable()},_onSchedulerChange:function(e){var t=this;t[ct]&&t[ct].set(qt,e.newVal)},_removeResizer:function(){var e=this;e[jt].remove()},_valueColDaysNode:function(){var t=this,n=t.get(X),r=[],i=0;while(n--)r.push(e.Lang.sub(Fn,{colNumber:i++}));return e.NodeList.create(r.join(p))},_valueColHeaderDaysNode:function(){var t=this,n=t.get(X),r=[],i=0;r.push(Un);while(n--)r.push(e.Lang.sub(Rn,{colNumber:i++}));return r.push(zn),e.NodeList.create(r.join(p))},_valueMarkercellsNode:function(){var t=this,n=[],r;for(r=0;r<=23;r++)n.push(Hn);return e.NodeList.create(n.join(p))},_valueTimesNode:function(){var t=this,r=t.get(bt),i=[],s;for(s=0;s<=23;s++)i.push(n.sub(In,{hour:r?a.toIsoTimeString(s):a.toUsTimeString(s,!1,!0)}));return e.NodeList.create(i.join(p))}}});e.SchedulerDayView=Wn},"2.0.0pr5",{requires:["dd-drag","dd-delegate","dd-drop","dd-constrain","aui-scheduler-view-table"],skinnable:!0});
