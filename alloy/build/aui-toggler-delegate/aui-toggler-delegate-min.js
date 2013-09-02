YUI.add("aui-toggler-delegate",function(e,t){var n=e.Lang,r=n.isBoolean,i=n.isObject,s=n.isString,o=e.Array,u=e.config.doc,a=e.Toggler,f=".",l="animated",c="click",h="closeAllOnExpand",p="collapsed",d="container",v="content",m="cubic-bezier",g="expanded",y="firstChild",b="header",w="keydown",E="toggler",S="toggler:animatingChange",x="toggler-delegate",T="transition",N="wrapper",C=e.getClassName,k=C(E,v,N),L=C(E,b,p),A=C(E,b,g),O=e.Component.create({NAME:x,ATTRS:{animated:{validator:r,value:!1,writeOnce:!0},closeAllOnExpand:{validator:r,value:!1},container:{setter:e.one,value:u},content:{validator:s},expanded:{validator:r,value:!0},header:{validator:s},transition:{validator:i,value:{duration:.4,easing:m}}},EXTENDS:e.Base,prototype:{items:null,initializer:function(){var e=this;e.items=[],e.bindUI(),e.renderUI()},renderUI:function(){var e=this;e.get(h)&&e.createAll()},bindUI:function(){var t=this,n=t.get(d),r=t.get(b);t.on(S,e.bind("_onAnimatingChange",t)),n.delegate([c,w],e.bind("headerEventHandler",t),r)},collapseAll:function(t){var n=this;n.createAll(),e.Array.invoke(n.items,"collapse",t)},createAll:function(){var e=this;e.get(d).all(e.get(b)).each(function(t){t.getData(E)||e._create(t)})},expandAll:function(t){var n=this;n.createAll(),e.Array.invoke(n.items,"expand",t)},findContentNode:function(e){var t=this,n=t.get(v),r=e.next(n)||e.one(n);if(!r){var i=e.next(f+k);i&&(r=i.get(y))}return r},headerEventHandler:function(e){var t=this;if(t.animating)return!1;var n=e.currentTarget,r=n.getData(E)||t._create(n);a.headerEventHandler(e,r)&&t.get(h)&&o.each(t.items,function(e,t){e!==r&&e.get(g)&&e.collapse()})},_create:function(e){var t=this,n=t.get(g);e.hasClass(A)?n=!0:e.hasClass(L)&&(n=!1);var r=new a({animated:t.get(l),bindDOMEvents:!1,bubbleTargets:[t],content:t.findContentNode(e),expanded:n,header:e,transition:t.get(T)});return t.items.push(r),r},_onAnimatingChange:function(e){var t=this;t.animating=e.newVal}}});e.TogglerDelegate=O},"2.0.0pr5",{requires:["array-invoke","node-event-delegate","aui-toggler-base"]});
