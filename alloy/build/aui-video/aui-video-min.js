YUI.add("aui-video",function(e,t){var n=e.Lang,r=e.UA,i=e.getClassName,s="video",o=i(s),u=i(s,"node"),a=e.config.base+"aui-video/assets/player.swf?t="+n.now(),f=e.config.doc,l="",c="contentBox",h="fixedAttributes",p="flashVars",d="height",v="movie",m="nodeName",g="ogvUrl",y="poster",b="source",w="src",E="swfUrl",S="type",x="url",T="video",N="videoReady",C="width",k='<video id="{id}" controls="controls" class="'+u+'" {height} {width}></video>',L='<div class="'+u+'"></div>',A=e.Component.create({NAME:s,ATTRS:{url:{value:""},ogvUrl:{value:""},swfUrl:{value:a},poster:{value:""},fixedAttributes:{value:{}},flashVars:{value:{}},render:{value:!0}},BIND_UI_ATTRS:["url","poster","ogvUrl","swfUrl","fixedAttributes","flashVars"],SYNC_UI_ATTRS:["url","poster","ogvUrl"],prototype:{renderUI:function(){var t=this;t._renderVideoTask=e.debounce(t._renderVideo,1,t),t._renderSwfTask=e.debounce(t._renderSwf,1,t),t._renderVideo(!t.get(g))},bindUI:function(){var e=this;e.publish(N,{fireOnce:!0})},_createSource:function(t){var n=this,r=new e.Node(f.createElement(b));return r.attr(S,t),r},_renderSwf:function(){var t=this,n=t.get(E);if(n){var i=t.get(x),s=t.get(y),o=t.get(p);e.mix(o,{controls:!0,src:i,poster:s});var u=e.QueryString.stringify(o);t._swfId?t._video.removeChild(e.one("#"+t._swfId)):t._swfId=e.guid();var a='<object id="'+t._swfId+'" ';r.ie?a+='classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" ':a+='type="application/x-shockwave-flash" data="'+n+'" ',a+='height="100%" width="100%">',r.ie&&(a+='<param name="movie" value="'+n+'"/>');var f=t.get(h);for(var l in f)a+='<param name="'+l+'" value="'+f[l]+'" />';u&&(a+='<param name="flashVars" value="'+u+'" />'),s!=""&&(a+='<img src="'+s+'" alt="" />'),a+="</object>",t._video.append(a)}},_renderVideo:function(t){var i=this,s,o,u,a,f,h,p;a=k,r.gecko&&t?a=L:(s=l,o=l,u=i.get(d),p=i.get(C),u&&(s='height="'+u+'"'),p&&(o='width="'+p+'"')),f=n.sub(a,{height:s,id:e.guid(),width:o}),h=e.Node.create(f),i.get(c).append(h),i._video=h},_uiSetFixedAttributes:function(e){var t=this;t._renderSwfTask()},_uiSetFlashVars:function(e){var t=this;t._renderSwfTask()},_uiSetOgvUrl:function(e){var t=this;if(r.gecko||r.opera){var n=t._video,i=t._usingVideo();if(!e&&i||e&&!i)n.remove(!0),t._renderVideoTask(!e);if(!e)t._renderSwfTask();else{var s=t._sourceOgv;s||(s=t._createSource('video/ogg; codecs="theora, vorbis"'),n.append(s),t._sourceOgv=s),s.attr(w,e)}}},_uiSetPoster:function(e){var t=this,n=t._video;t._usingVideo()&&n.setAttribute(y,e),t._renderSwfTask()},_uiSetSwfUrl:function(e){var t=this;t._renderSwfTask()},_uiSetUrl:function(e){var t=this,n=t.get(g),i=t._video,s=t._sourceMp4;if(r.gecko&&!t._usingVideo())s!=null&&(s.remove(!0),t._sourceMp4=null);else if(i||!n)s||(s=t._createSource("video/mp4;"),i.append(s),t._sourceMp4=s),s.attr(w,e);t._renderSwfTask()},_usingVideo:function(){var e=this;return e._video.get(m).toLowerCase()===T}}});e.Video=A},"2.0.0pr5",{requires:["querystring-stringify-simple","aui-node","aui-component","aui-debounce"],skinnable:!0});