YUI.add("aui-scheduler-view-agenda",function(e,t){var n=e.Lang,r=n.isFunction,i=e.Array,s=e.DataType.DateMath,o="%H:%M",u="%l:%M",a=".",f="",l="&mdash;",c=" ",h="activeView",p="agenda",d="biggie",v="bodyContent",m="boundingBox",g="clearfix",y="click",b="clientId",w="color",E="container",S="content",x="date",T="dates",N="day",C="disabled",k="endDate",L="event",A="eventRecorder",O="events",M="eventsDateFormatter",_="extra",D="first",P="header",H="headerContent",B="headerDayDateFormatter",j="headerExtraDateFormatter",F="info",I="infoDayDateFormatter",q="infoLabelBigDateFormatter",R="infoLabelSmallDateFormatter",U="isoTime",z="label",W="last",X="locale",V="metal",$="no",J="noEvents",K="past",Q="pm",G="scheduler",Y="schedulerEvent",Z="small",et="startDate",tt="strings",nt="timestamp",rt="today",it="viewDate",st="visible",ot="scheduler-view-agenda",ut=function(t){return function(n){var r=this,i=r.get(G);return e.DataType.Date.format(n,{format:t,locale:i.get(X)})}},at=function(e){return i.map(e,function(e){return+e}).sort(i.numericSort)},ft=e.getClassName,lt=ft(ot,E),ct=ft(ot,L),ht=ft(ot,L,w),pt=ft(ot,L,S),dt=ft(ot,L,T),vt=ft(ot,L,D),mt=ft(ot,F),gt=ft(ot,F,d),yt=ft(ot,F,E),bt=ft(ot,F,z),wt=ft(ot,F,z,d),Et=ft(ot,F,z,Z),St=ft(ot,L,W),xt=ft(ot,$,O),Tt=ft(ot,L,K),Nt=ft(ot,O),Ct=ft(ot,P),kt=ft(ot,P,N),Lt=ft(ot,P,_),At=ft(ot,P,D),Ot=ft(ot,P,W),Mt=ft(g),_t=ft(ot,V),Dt='<div class="'+lt+'">{content}</div>',Pt='<div class="'+[Ct,_t,Mt].join(c)+' {firstClassName} {lastClassName}">'+'<div class="'+kt+'">{day}</div>'+'<a href="javascript:;" class="'+Lt+'" data-timestamp="{timestamp}">{extra}</a>'+"</div>",Ht='<div class="'+Nt+'">{content}</div>',Bt='<div class="'+[ct,Mt].join(c)+' {firstClassName} {lastClassName} {eventClassName}" data-clientId="{clientId}">'+'<div class="'+ht+'" style="background-color: {color};"></div>'+'<div class="'+pt+'">{content}</div>'+'<div class="'+dt+'">{dates}</div>'+"</div>",jt='<div class="'+xt+'">{content}</div>',Ft='<div class="'+yt+'">'+'<div class="'+[mt,Mt].join(c)+'">'+'<div class="'+[gt,_t].join(c)+'">{day}</div>'+'<div class="'+bt+'">'+'<div class="'+wt+'">{labelBig}</div>'+'<div class="'+Et+'">{labelSmall}</div>'+"</div>"+"</div>"+"</div>",It=e.Component.create({NAME:ot,ATTRS:{bodyContent:{value:f},eventsDateFormatter:{value:function(e,t){var n=this,r=n.get(G),i=r.get(h).get(U),a=o,f=o,p,d;return i||(a=u,f=u,e.getHours()>=12&&(a+=Q),t.getHours()>=12&&(f+=Q)),s.isDayOverlap(e,t)&&(a+=", %b %e",f+=", %b %e"),p=ut.call(n,a),d=ut.call(n,f),[p.call(n,e),l,d.call(n,t)].join(c)},validator:r},headerDayDateFormatter:{value:function(e){var t=this,n,r;return s.isToday(e)?n=rt:n="%A",r=ut.call(t,n),r.call(t,e)},validator:r},headerExtraDateFormatter:{validator:r,value:ut("%B %e")},infoDayDateFormatter:{validator:r,value:ut("%e")},infoLabelBigDateFormatter:{validator:r,value:ut("%A")},infoLabelSmallDateFormatter:{validator:r,value:ut("%B %d, %Y")},name:{value:p},strings:{value:{noEvents:"No future events."}}},EXTENDS:e.SchedulerView,prototype:{bindUI:function(){var e=this,t=e.get(m);t.delegate(y,e._onSchedulerEventClick,a+ct,e),t.delegate(y,e._onEventsHeaderClick,a+Lt,e)},getNextDate:function(){var e=this,t=e.get(G).get(it);return s.toMidnight(s.add(t,s.DAY,1))},getPrevDate:function(){var e=this,t=e.get(G).get(it);return s.toLastHour(s.subtract(t,s.DAY,1))},plotEvents:function(){var t=this,n=t.get(tt),r=t.get(G),o=r.get(it),u=t.get(M),a=t.get(B),l=t.get(j),c=t.get(I),h=t.get(q),p=t.get(R),d=[],m=t._getDayEventsMap(),g=e.Object.keys(m),y=g.length;t.set(H,e.Lang.sub(Ft,{day:c.call(t,o),labelBig:h.call(t,o),labelSmall:p.call(t,o)})),e.Object.isEmpty(m)?d.push(e.Lang.sub(jt,{content:n[J]})):i.each(at(g),function(n,r){var o=new Date(e.Lang.toInt(n)),c=m[n],h=c.length;d.push(e.Lang.sub(Pt,{day:a.call(t,o),extra:l.call(t,o),firstClassName:r===0?At:f,lastClassName:r===y-1?Ot:f,timestamp:n})),i.each(c,function(n,r){var i=s.toMidnight(new Date),o=n.get(k),a=n.get(et);d.push(e.Lang.sub(Bt,{clientId:n.get(b),color:n.get(w),content:n.get(S),dates:u.call(t,a,o),eventClassName:a.getTime()<i.getTime()?Tt:f,firstClassName:r===0?vt:f,lastClassName:r===h-1?St:f}))})});var E=e.Lang.sub(Dt,{content:e.Lang.sub(Ht,{content:d.join(f)})});t.set(v,E)},_getDayEventsMap:function(){var e=this,t=e.get(G),n=s.toMidnight(t.get(it)),r={};return t.eachEvent(function(e){var t=e.get(et),i=e.get(st),o;if(!i||t.getTime()<n.getTime())return;o=s.safeClearTime(t).getTime(),r[o]||(r[o]=[]),r[o].push(e)}),r},_onEventsHeaderClick:function(t){var n=this,r=n.get(G),i=t.currentTarget,s=e.Lang.toInt(i.getData(nt))||Date.now(),o=new Date(s),u=r.getViewByName(N);u&&(r.set(x,o),r.set(h,u))},_onSchedulerEventClick:function(e){var t=this,n=e.currentTarget,r=t.get(G),i=r.get(A),s=n.getData(Y);s||(s=r.getEventByClientId(n.getData(b)),n.setData(Y,s)),s&&i&&!r.get(C)&&(i.set(L,s,{silent:!0}),i.showPopover(n))}}});e.SchedulerAgendaView=It},"2.0.0pr5",{requires:["aui-scheduler-base"],skinnable:!0});
