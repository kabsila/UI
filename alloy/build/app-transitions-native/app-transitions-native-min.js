YUI.add("app-transitions-native",function(e,t){function r(){}var n=e.App.Transitions;r.prototype={initializer:function(){this._transitioning=!1,this._viewTransitionQueue=[],e.Do.before(this._queueActiveView,this,"_uiSetActiveView")},_dequeueActiveView:function(){var t=this._viewTransitionQueue,n=t.shift(),r;n&&(t.length&&(r=e.merge(n[2],{transition:!1}),n.splice(2,1,r)),this._uiTransitionActiveView.apply(this,n))},_getFx:function(e,t,r){var i=n.FX,s=this.get("transitions");return r===!1||!s?null:r?i[r]:this._isChildView(e,t)?i[s.toChild]:this._isParentView(e,t)?i[s.toParent]:i[s.navigate]},_queueActiveView:function(){var t=e.Array(arguments,0,!0);return this._viewTransitionQueue.push(t),this._transitioning||this._dequeueActiveView(),new e.Do.Prevent},_uiTransitionActiveView:function(t,n,r){function p(){return this._detachView(n),s.removeClass(o),i&&i.call(this,t),this._transitioning=!1,this._dequeueActiveView()}r||(r={});var i=r.callback,s,o,u,a,f,l,c,h;if(t===n)return i&&i.call(this,t),this._transitioning=!1,this._dequeueActiveView();l=this._getFx(t,n,r.transition),u=this._isChildView(t,n),a=!u&&this._isParentView(t,n),f=!!r.prepend||a;if(!l)return this._attachView(t,f),this._detachView(n),i&&i.call(this,t),this._transitioning=!1,this._dequeueActiveView();this._transitioning=!0,s=this.get("container"),o=e.App.CLASS_NAMES.transitioning,s.addClass(o),this._attachView(t,f),h=new e.Parallel({context:this}),c={crossView:!!n&&!!t,prepended:f},t&&l.viewIn&&t.get("container").transition(l.viewIn,c,h.add()),n&&l.viewOut&&n.get("container").transition(l.viewOut,c,h.add()),h.done(p)}},e.mix(e.Transition.fx,{"app:fadeIn":{opacity:1,duration:.3,on:{start:function(e){var t={opacity:0},n=e.config;n.crossView&&!n.prepended&&(t.transform="translateX(-100%)"),this.setStyles(t)},end:function(){this.setStyle("transform","translateX(0)")}}},"app:fadeOut":{opacity:0,duration:.3,on:{start:function(e){var t={opacity:1},n=e.config;n.crossView&&n.prepended&&(t.transform="translateX(-100%)"),this.setStyles(t)},end:function(){this.setStyle("transform","translateX(0)")}}},"app:slideLeft":{duration:.3,transform:"translateX(-100%)",on:{start:function(){this.setStyles({opacity:1,transform:"translateX(0%)"})},end:function(){this.setStyle("transform","translateX(0)")}}},"app:slideRight":{duration:.3,transform:"translateX(0)",on:{start:function(){this.setStyles({opacity:1,transform:"translateX(-100%)"})},end:function(){this.setStyle("transform","translateX(0)")}}}}),e.App.TransitionsNative=r,e.Base.mix(e.App,[r])},"patched-dev-3.x",{requires:["app-transitions","app-transitions-css","parallel","transition"]});
