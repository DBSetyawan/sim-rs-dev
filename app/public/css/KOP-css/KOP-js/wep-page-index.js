 !function(e) {
    function t(t) {
        for(var i, o, a=t[0], l=t[1], c=t[2], u=0, d=[]; u<a.length; u++)o=a[u],
        r[o]&&d.push(r[o][0]),
        r[o]=0;
        for(i in l)Object.prototype.hasOwnProperty.call(l, i)&&(e[i]=l[i]);
        for(h&&h(t); d.length; )d.shift()();
        return s.push.apply(s, c||[]),
        n()
    }

    function n() {
        for(var e, t=0; t<s.length; t++) {
            for(var n=s[t], i= !0, a=1; a<n.length; a++) {
                var l=n[a];
                0 !==r[l]&&(i= !1)
            }

            i&&(s.splice(t--, 1), e=o(o.s=n[0]))
        }

        return e
    }

    var i= {}

    ,
    r= {
        16: 0
    }

    ,
    s=[];

    function o(t) {
        if(i[t])return i[t].exports;

        var n=i[t]= {

            i:t,
            l: !1,
            exports: {}
        }

        ;
        return e[t].call(n.exports, n, n.exports, o),
        n.l= !0,
        n.exports
    }

    o.m=e,
    o.c=i,
    o.d=function(e, t, n) {
        o.o(e, t)||Object.defineProperty(e, t, {
                enumerable: !0, get:n
            }

        )
    }

    ,
    o.r=function(e) {
        "undefined" !=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e, Symbol.toStringTag, {
                value:"Module"
            }

        ),
        Object.defineProperty(e, "__esModule", {
                value: !0
            }

        )
    }

    ,
    o.t=function(e, t) {
        if(1&t&&(e=o(e)), 8&t)return e;
        if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;
        var n=Object.create(null);

        if(o.r(n), Object.defineProperty(n, "default", {
                    enumerable: !0, value:e
                }

            ), 2&t&&"string" !=typeof e)for(var i in e)o.d(n, i, function(t) {
                return e[t]
            }

            .bind(null, i));
        return n
    }

    ,
    o.n=function(e) {
        var t=e&&e.__esModule?function() {
            return e.default
        }

        :function() {
            return e
        }

        ;
        return o.d(t, "a", t),
        t
    }

    ,
    o.o=function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }

    ,
    o.p="";
    var a=window.webpackJsonp=window.webpackJsonp||[],
    l=a.push.bind(a);
    a.push=t,
    a=a.slice();
    for(var c=0; c<a.length; c++)t(a[c]);
    var h=l;
    s.push([2044, 0]),
    n()
}

( {
        2044:function(e, t, n) {
            "use strict"; var i=s(n(2045)), r=s(n(491)); function s(e) {
                return e&&e.__esModule?e: {
                    default:e
                }
            }

            window.addEventListener("commonInitComplete", function() {
                    new i.default(window.$("main"))
                }

            ), window.addEventListener("commonInitComplete", r.default)
        }

        , 2045:function(e, t, n) {
            "use strict"; Object.defineProperty(t, "__esModule", {
                    value: !0
                }

            ); var i=function() {
                function e(e, t) {
                    for(var n=0; n<t.length; n++) {
                        var i=t[n]; i.enumerable=i.enumerable|| !1, i.configurable= !0, "value"in i&&(i.writable= !0), Object.defineProperty(e, i.key, i)
                    }
                }

                return function(t, n, i) {
                    return n&&e(t.prototype, n), i&&e(t, i), t
                }
            }

            (); function r() {
                var e=$(this).data("hover"), t=$(this).attr("src"); $(this).data("hover", t), $(this).attr("src", e)
            }

            var s=function() {
                function e(t) {
                    var n=arguments.length>1&&void 0 !==arguments[1]?arguments[1]: {}

                    ;  !function(e, t) {
                        if( !(e instanceof t))throw new TypeError("Cannot call a class as a function")
                    }

                    (this, e), this.container=$(t), this.opts=n, this.setupEvents(), this.setupLazyLoadImage()
                }

                return i(e, [ {
                        key:"setupEvents", value:function() {
                            var e=this;  !function(e) {
                                var t=new Image; t.onload=e, t.src="data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
                            }

                            (function() {
                                    e.container.on("mouseenter", ".package-image img", r), e.container.on("mouseleave", ".package-image img", r)
                                }

                            )
                        }
                    }

                    , {
                        key:"setupLazyLoadImage", value:function() {
                            var e=$(".packlanePlusBanner"), t=void 0; t=$(window).width()>=700?"/images/bg-packlaneplus.png":"/images/bg-packlaneplus-s.png", e.addClass("lazy"), e.attr("data-src", t), lazyLoad.update()
                        }
                    }

                    ]), e
            }

            (); t.default=s
        }

        , 491:function(e, t, n) {
            "use strict"; (function(e) {
                    Object.defineProperty(t, "__esModule", {
                            value: !0
                        }

                    ); var n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e) {
                        return typeof e
                    }

                    :function(e) {
                        return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e !==Symbol.prototype?"symbol":typeof e
                    }

                    ; t.default=function() {
                        "undefined" !=typeof window?window:void 0 !==e||"undefined" !=typeof self&&self; var t="function"==typeof Symbol&&"symbol"===n(Symbol.iterator)?function(e) {
                            return void 0===e?"undefined":n(e)
                        }

                        :function(e) {
                            return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e !==Symbol.prototype?"symbol":void 0===e?"undefined":n(e)
                        }

                        , i=(function() {
                                function e(e) {
                                    this.value=e
                                }

                                function t(t) {
                                    var n, i; function r(n, i) {
                                        try {
                                            var o=t[n](i), a=o.value; a instanceof e?Promise.resolve(a.value).then(function(e) {
                                                    r("next", e)
                                                }

                                                , function(e) {
                                                    r("throw", e)
                                                }

                                            ):s(o.done?"return":"normal", o.value)
                                        }

                                        catch(e) {
                                            s("throw", e)
                                        }
                                    }

                                    function s(e, t) {
                                        switch(e) {
                                            case"return":n.resolve( {
                                                    value:t, done: !0
                                                }

                                            ); break; case"throw":n.reject(t); break; default:n.resolve( {
                                                    value:t, done: !1
                                                }

                                            )
                                        }

                                        (n=n.next)?r(n.key, n.arg):i=null
                                    }

                                    this._invoke=function(e, t) {
                                        return new Promise(function(s, o) {
                                                var a= {
                                                    key:e, arg:t, resolve:s, reject:o, next:null
                                                }

                                                ; i?i=i.next=a:(n=i=a, r(e, t))
                                            }

                                        )
                                    }

                                    , "function" !=typeof t.return&&(this.return=void 0)
                                }

                                "function"==typeof Symbol&&Symbol.asyncIterator&&(t.prototype[Symbol.asyncIterator]=function() {
                                        return this
                                    }

                                ), t.prototype.next=function(e) {
                                    return this._invoke("next", e)
                                }

                                , t.prototype.throw=function(e) {
                                    return this._invoke("throw", e)
                                }

                                , t.prototype.return=function(e) {
                                    return this._invoke("return", e)
                                }
                            }

                            (), function(e) {
                                return e&&e.__esModule&&Object.prototype.hasOwnProperty.call(e, "default")?e.default:e
                            }

                            (function(e, t) {
                                    return e(t= {
                                            exports: {}
                                        }

                                        , t.exports), t.exports
                                }

                                (function(e) {
                                        "undefined" !=typeof self&&self, e.exports=function(e) {
                                            function t(i) {
                                                if(n[i])return n[i].exports; var r=n[i]= {
                                                    i:i, l: !1, exports: {}
                                                }

                                                ; return e[i].call(r.exports, r, r.exports, t), r.l= !0, r.exports
                                            }

                                            var n= {}

                                            ; return t.m=e, t.c=n, t.d=function(e, n, i) {
                                                t.o(e, n)||Object.defineProperty(e, n, {
                                                        configurable: !1, enumerable: !0, get:i
                                                    }

                                                )
                                            }

                                            , t.n=function(e) {
                                                var n=e&&e.__esModule?function() {
                                                    return e.default
                                                }

                                                :function() {
                                                    return e
                                                }

                                                ; return t.d(n, "a", n), n
                                            }

                                            , t.o=function(e, t) {
                                                return Object.prototype.hasOwnProperty.call(e, t)
                                            }

                                            , t.p="", t(t.s=0)
                                        }

                                        ([function(e, n, i) {
                                                Object.defineProperty(n, "__esModule", {
                                                        value: !0
                                                    }

                                                ); var r="function"==typeof Symbol&&"symbol"==t(Symbol.iterator)?function(e) {
                                                    return void 0===e?"undefined":t(e)
                                                }

                                                :function(e) {
                                                    return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e !==Symbol.prototype?"symbol":void 0===e?"undefined":t(e)
                                                }

                                                , s=function() {
                                                    function e(e, t) {
                                                        for(var n=0; n<t.length; n++) {
                                                            var i=t[n]; i.enumerable=i.enumerable|| !1, i.configurable= !0, "value"in i&&(i.writable= !0), Object.defineProperty(e, i.key, i)
                                                        }
                                                    }

                                                    return function(t, n, i) {
                                                        return n&&e(t.prototype, n), i&&e(t, i), t
                                                    }
                                                }

                                                (), o=function() {
                                                    function e(t) {
                                                        var n=this; if(function(e, t) {
                                                                if( !(e instanceof t))throw new TypeError("Cannot call a class as a function")
                                                            }

                                                            (this, e), this.config=e.mergeSettings(t), this.selector="string"==typeof this.config.selector?document.querySelector(this.config.selector):this.config.selector, null===this.selector)throw new Error("Something wrong with your selector ðŸ˜­"); this.resolveSlidesNumber(), this.selectorWidth=this.selector.offsetWidth, this.innerElements=[].slice.call(this.selector.children), this.currentSlide=this.config.loop?this.config.startIndex%this.innerElements.length:Math.max(0, Math.min(this.config.startIndex, this.innerElements.length-this.perPage)), this.transformProperty=e.webkitOrNot(), ["resizeHandler", "touchstartHandler", "touchendHandler", "touchmoveHandler", "mousedownHandler", "mouseupHandler", "mouseleaveHandler", "mousemoveHandler", "clickHandler"].forEach(function(e) {
                                                                n[e]=n[e].bind(n)
                                                            }

                                                        ), this.init()
                                                    }

                                                    return s(e, [ {
                                                            key:"attachEvents", value:function() {
                                                                window.addEventListener("resize", this.resizeHandler), this.config.draggable&&(this.pointerDown= !1, this.drag= {
                                                                        startX:0, endX:0, startY:0, letItGo:null, preventClick: !1
                                                                    }

                                                                    , this.selector.addEventListener("touchstart", this.touchstartHandler), this.selector.addEventListener("touchend", this.touchendHandler), this.selector.addEventListener("touchmove", this.touchmoveHandler), this.selector.addEventListener("mousedown", this.mousedownHandler), this.selector.addEventListener("mouseup", this.mouseupHandler), this.selector.addEventListener("mouseleave", this.mouseleaveHandler), this.selector.addEventListener("mousemove", this.mousemoveHandler), this.selector.addEventListener("click", this.clickHandler))
                                                            }
                                                        }

                                                        , {
                                                            key:"detachEvents", value:function() {
                                                                window.removeEventListener("resize", this.resizeHandler), this.selector.removeEventListener("touchstart", this.touchstartHandler), this.selector.removeEventListener("touchend", this.touchendHandler), this.selector.removeEventListener("touchmove", this.touchmoveHandler), this.selector.removeEventListener("mousedown", this.mousedownHandler), this.selector.removeEventListener("mouseup", this.mouseupHandler), this.selector.removeEventListener("mouseleave", this.mouseleaveHandler), this.selector.removeEventListener("mousemove", this.mousemoveHandler), this.selector.removeEventListener("click", this.clickHandler)
                                                            }
                                                        }

                                                        , {
                                                            key:"init", value:function() {
                                                                this.attachEvents(), this.selector.style.overflow="hidden", this.selector.style.direction=this.config.rtl?"rtl":"ltr", this.buildSliderFrame(), this.config.onInit.call(this)
                                                            }
                                                        }

                                                        , {
                                                            key:"buildSliderFrame", value:function() {
                                                                var e=this.selectorWidth/this.perPage, t=this.config.loop?this.innerElements.length+2*this.perPage:this.innerElements.length; this.sliderFrame=document.createElement("div"), this.sliderFrame.style.width=e*t+"px", this.enableTransition(), this.config.draggable&&(this.selector.style.cursor="-webkit-grab"); var n=document.createDocumentFragment(); if(this.config.loop)for(var i=this.innerElements.length-this.perPage; i<this.innerElements.length; i++) {
                                                                    var r=this.buildSliderFrameItem(this.innerElements[i].cloneNode( !0)); n.appendChild(r)
                                                                }

                                                                for(var s=0; s<this.innerElements.length; s++) {
                                                                    var o=this.buildSliderFrameItem(this.innerElements[s]); n.appendChild(o)
                                                                }

                                                                if(this.config.loop)for(var a=0; a<this.perPage; a++) {
                                                                    var l=this.buildSliderFrameItem(this.innerElements[a].cloneNode( !0)); n.appendChild(l)
                                                                }

                                                                this.sliderFrame.appendChild(n), this.selector.innerHTML="", this.selector.appendChild(this.sliderFrame), this.slideToCurrent()
                                                            }
                                                        }

                                                        , {
                                                            key:"buildSliderFrameItem", value:function(e) {
                                                                var t=document.createElement("div"); return t.style.cssFloat=this.config.rtl?"right":"left", t.style.float=this.config.rtl?"right":"left", t.style.width=(this.config.loop?100/(this.innerElements.length+2*this.perPage):100/this.innerElements.length)+"%", t.appendChild(e), t
                                                            }
                                                        }

                                                        , {
                                                            key:"resolveSlidesNumber", value:function() {
                                                                if("number"==typeof this.config.perPage)this.perPage=this.config.perPage; else if("object"===r(this.config.perPage))for(var e in this.perPage=1, this.config.perPage)window.innerWidth>=e&&(this.perPage=this.config.perPage[e])
                                                            }
                                                        }

                                                        , {
                                                            key:"prev", value:function() {
                                                                var e=arguments.length>0&&void 0 !==arguments[0]?arguments[0]:1, t=arguments[1]; if( !(this.innerElements.length<=this.perPage)) {
                                                                    var n=this.currentSlide; if(this.config.loop)if(this.currentSlide-e<0) {
                                                                        this.disableTransition(); var i=this.currentSlide+this.innerElements.length, r=this.perPage, s=i+r, o=(this.config.rtl?1:-1)*s*(this.selectorWidth/this.perPage), a=this.config.draggable?this.drag.endX-this.drag.startX:0; this.sliderFrame.style[this.transformProperty]="translate3d("+(o+a)+"px, 0, 0)", this.currentSlide=i-e
                                                                    }

                                                                    else this.currentSlide=this.currentSlide-e; else this.currentSlide=Math.max(this.currentSlide-e, 0); n !==this.currentSlide&&(this.slideToCurrent(this.config.loop), this.config.onChange.call(this), t&&t.call(this))
                                                                }
                                                            }
                                                        }

                                                        , {
                                                            key:"next", value:function() {
                                                                var e=arguments.length>0&&void 0 !==arguments[0]?arguments[0]:1, t=arguments[1]; if( !(this.innerElements.length<=this.perPage)) {
                                                                    var n=this.currentSlide; if(this.config.loop)if(this.currentSlide+e>this.innerElements.length-this.perPage) {
                                                                        this.disableTransition(); var i=this.currentSlide-this.innerElements.length, r=this.perPage, s=i+r, o=(this.config.rtl?1:-1)*s*(this.selectorWidth/this.perPage), a=this.config.draggable?this.drag.endX-this.drag.startX:0; this.sliderFrame.style[this.transformProperty]="translate3d("+(o+a)+"px, 0, 0)", this.currentSlide=i+e
                                                                    }

                                                                    else this.currentSlide=this.currentSlide+e; else this.currentSlide=Math.min(this.currentSlide+e, this.innerElements.length-this.perPage); n !==this.currentSlide&&(this.slideToCurrent(this.config.loop), this.config.onChange.call(this), t&&t.call(this))
                                                                }
                                                            }
                                                        }

                                                        , {
                                                            key:"disableTransition", value:function() {
                                                                this.sliderFrame.style.webkitTransition="all 0ms "+this.config.easing, this.sliderFrame.style.transition="all 0ms "+this.config.easing
                                                            }
                                                        }

                                                        , {
                                                            key:"enableTransition", value:function() {
                                                                this.sliderFrame.style.webkitTransition="all "+this.config.duration+"ms "+this.config.easing, this.sliderFrame.style.transition="all "+this.config.duration+"ms "+this.config.easing
                                                            }
                                                        }

                                                        , {
                                                            key:"goTo", value:function(e, t) {
                                                                if( !(this.innerElements.length<=this.perPage)) {
                                                                    var n=this.currentSlide; this.currentSlide=this.config.loop?e%this.innerElements.length:Math.min(Math.max(e, 0), this.innerElements.length-this.perPage), n !==this.currentSlide&&(this.slideToCurrent(), this.config.onChange.call(this), t&&t.call(this))
                                                                }
                                                            }
                                                        }

                                                        , {
                                                            key:"slideToCurrent", value:function(e) {
                                                                var t=this, n=this.config.loop?this.currentSlide+this.perPage:this.currentSlide, i=(this.config.rtl?1:-1)*n*(this.selectorWidth/this.perPage); e?requestAnimationFrame(function() {
                                                                        requestAnimationFrame(function() {
                                                                                t.enableTransition(), t.sliderFrame.style[t.transformProperty]="translate3d("+i+"px, 0, 0)"
                                                                            }

                                                                        )
                                                                    }

                                                                ):this.sliderFrame.style[this.transformProperty]="translate3d("+i+"px, 0, 0)"
                                                            }
                                                        }

                                                        , {
                                                            key:"updateAfterDrag", value:function() {
                                                                var e=(this.config.rtl?-1:1)*(this.drag.endX-this.drag.startX), t=Math.abs(e), n=this.config.multipleDrag?Math.ceil(t/(this.selectorWidth/this.perPage)):1, i=e>0&&this.currentSlide-n<0, r=e<0&&this.currentSlide+n>this.innerElements.length-this.perPage; e>0&&t>this.config.threshold&&this.innerElements.length>this.perPage?this.prev(n):e<0&&t>this.config.threshold&&this.innerElements.length>this.perPage&&this.next(n), this.slideToCurrent(i||r)
                                                            }
                                                        }

                                                        , {
                                                            key:"resizeHandler", value:function() {
                                                                this.resolveSlidesNumber(), this.currentSlide+this.perPage>this.innerElements.length&&(this.currentSlide=this.innerElements.length<=this.perPage?0:this.innerElements.length-this.perPage), this.selectorWidth=this.selector.offsetWidth, this.buildSliderFrame()
                                                            }
                                                        }

                                                        , {
                                                            key:"clearDrag", value:function() {
                                                                this.drag= {
                                                                    startX:0, endX:0, startY:0, letItGo:null, preventClick:this.drag.preventClick
                                                                }
                                                            }
                                                        }

                                                        , {
                                                            key:"touchstartHandler", value:function(e) {
                                                                -1 !==["TEXTAREA", "OPTION", "INPUT", "SELECT"].indexOf(e.target.nodeName)||(e.stopPropagation(), this.pointerDown= !0, this.drag.startX=e.touches[0].pageX, this.drag.startY=e.touches[0].pageY)
                                                            }
                                                        }

                                                        , {
                                                            key:"touchendHandler", value:function(e) {
                                                                e.stopPropagation(), this.pointerDown= !1, this.enableTransition(), this.drag.endX&&this.updateAfterDrag(), this.clearDrag()
                                                            }
                                                        }

                                                        , {
                                                            key:"touchmoveHandler", value:function(e) {
                                                                if(e.stopPropagation(), null===this.drag.letItGo&&(this.drag.letItGo=Math.abs(this.drag.startY-e.touches[0].pageY)<Math.abs(this.drag.startX-e.touches[0].pageX)), this.pointerDown&&this.drag.letItGo) {
                                                                    e.preventDefault(), this.drag.endX=e.touches[0].pageX, this.sliderFrame.style.webkitTransition="all 0ms "+this.config.easing, this.sliderFrame.style.transition="all 0ms "+this.config.easing; var t=this.config.loop?this.currentSlide+this.perPage:this.currentSlide, n=t*(this.selectorWidth/this.perPage), i=this.drag.endX-this.drag.startX, r=this.config.rtl?n+i:n-i; this.sliderFrame.style[this.transformProperty]="translate3d("+(this.config.rtl?1:-1)*r+"px, 0, 0)"
                                                                }
                                                            }
                                                        }

                                                        , {
                                                            key:"mousedownHandler", value:function(e) {
                                                                -1 !==["TEXTAREA", "OPTION", "INPUT", "SELECT"].indexOf(e.target.nodeName)||(e.preventDefault(), e.stopPropagation(), this.pointerDown= !0, this.drag.startX=e.pageX)
                                                            }
                                                        }

                                                        , {
                                                            key:"mouseupHandler", value:function(e) {
                                                                e.stopPropagation(), this.pointerDown= !1, this.selector.style.cursor="-webkit-grab", this.enableTransition(), this.drag.endX&&this.updateAfterDrag(), this.clearDrag()
                                                            }
                                                        }

                                                        , {
                                                            key:"mousemoveHandler", value:function(e) {
                                                                if(e.preventDefault(), this.pointerDown) {
                                                                    "A"===e.target.nodeName&&(this.drag.preventClick= !0), this.drag.endX=e.pageX, this.selector.style.cursor="-webkit-grabbing", this.sliderFrame.style.webkitTransition="all 0ms "+this.config.easing, this.sliderFrame.style.transition="all 0ms "+this.config.easing; var t=this.config.loop?this.currentSlide+this.perPage:this.currentSlide, n=t*(this.selectorWidth/this.perPage), i=this.drag.endX-this.drag.startX, r=this.config.rtl?n+i:n-i; this.sliderFrame.style[this.transformProperty]="translate3d("+(this.config.rtl?1:-1)*r+"px, 0, 0)"
                                                                }
                                                            }
                                                        }

                                                        , {
                                                            key:"mouseleaveHandler", value:function(e) {
                                                                this.pointerDown&&(this.pointerDown= !1, this.selector.style.cursor="-webkit-grab", this.drag.endX=e.pageX, this.drag.preventClick= !1, this.enableTransition(), this.updateAfterDrag(), this.clearDrag())
                                                            }
                                                        }

                                                        , {
                                                            key:"clickHandler", value:function(e) {
                                                                this.drag.preventClick&&e.preventDefault(), this.drag.preventClick= !1
                                                            }
                                                        }

                                                        , {
                                                            key:"remove", value:function(e, t) {
                                                                if(e<0||e>=this.innerElements.length)throw new Error("Item to remove doesn't exist ðŸ˜­"); var n=e<this.currentSlide, i=this.currentSlide+this.perPage-1===e; (n||i)&&this.currentSlide--, this.innerElements.splice(e, 1), this.buildSliderFrame(), t&&t.call(this)
                                                            }
                                                        }

                                                        , {
                                                            key:"insert", value:function(e, t, n) {
                                                                if(t<0||t>this.innerElements.length+1)throw new Error("Unable to inset it at this index ðŸ˜­"); if(-1 !==this.innerElements.indexOf(e))throw new Error("The same item in a carousel? Really? Nope ðŸ˜­"); var i=t<=this.currentSlide>0&&this.innerElements.length; this.currentSlide=i?this.currentSlide+1:this.currentSlide, this.innerElements.splice(t, 0, e), this.buildSliderFrame(), n&&n.call(this)
                                                            }
                                                        }

                                                        , {
                                                            key:"prepend", value:function(e, t) {
                                                                this.insert(e, 0), t&&t.call(this)
                                                            }
                                                        }

                                                        , {
                                                            key:"append", value:function(e, t) {
                                                                this.insert(e, this.innerElements.length+1), t&&t.call(this)
                                                            }
                                                        }

                                                        , {
                                                            key:"destroy", value:function() {
                                                                var e=arguments.length>0&&void 0 !==arguments[0]&&arguments[0], t=arguments[1]; if(this.detachEvents(), this.selector.style.cursor="auto", e) {
                                                                    for(var n=document.createDocumentFragment(), i=0; i<this.innerElements.length; i++)n.appendChild(this.innerElements[i]); this.selector.innerHTML="", this.selector.appendChild(n), this.selector.removeAttribute("style")
                                                                }

                                                                t&&t.call(this)
                                                            }
                                                        }

                                                        ], [ {
                                                            key:"mergeSettings", value:function(e) {
                                                                var t= {
                                                                    selector:".siema-js", duration:200, easing:"ease-out", perPage:1, startIndex:0, draggable: !0, multipleDrag: !0, threshold:20, loop: !1, rtl: !1, onInit:function() {}

                                                                    , onChange:function() {}
                                                                }

                                                                , n=e; for(var i in n)t[i]=n[i]; return t
                                                            }
                                                        }

                                                        , {
                                                            key:"webkitOrNot", value:function() {
                                                                return"string"==typeof document.documentElement.style.transform?"transform":"WebkitTransform"
                                                            }
                                                        }

                                                        ]), e
                                                }

                                                (); n.default=o, e.exports=n.default
                                            }

                                            ])
                                    }

                                ))), r=document.querySelectorAll("*[data-slider-container]"), s='*[data-slider-arrow="prev"]', o='*[data-slider-arrow="next"]', a=document.querySelector("*[data-player]"), l=document.createElement("script"), c=a.querySelector("*[data-play-button]"), h=a.querySelector("*[data-play-trigger]"), u=a.querySelector("*[data-video-overlay]"), d="testimonial-video__overlay--active", f="testimonial-video__play-btn--active", p="", g= !1;  !function() {
                            for(var e=document.querySelectorAll("[data-tiles]"), t=0; t<e.length; t++)for(var n=1; n<=2; n++) {
                                var i=e[t].cloneNode( !0); e[t].parentNode.appendChild(i), e[t].parentNode.querySelectorAll("[data-tiles]").forEach(function(e) {
                                        e.style.animationPlayState="running"
                                    }

                                )
                            }
                        }

                        (), function() {
                            for(var e=function(e) {
                                    var t=new i( {
                                            selector:r[e].querySelector(".siema-js"), loop: !0, onChange:function() {
                                                this.updateDots(r[e].getAttribute("data-slider-container"))
                                            }
                                        }

                                    ); i.prototype.addPagination=function() {
                                        var t=this; r[e].querySelectorAll("*[data-slider-nav-group]").forEach(function(e) {
                                                for(var n=function(n) {
                                                        e.querySelectorAll("*[data-slider-nav-item]")[n].addEventListener("click", function() {
                                                                t.goTo(n), e.querySelectorAll("*[data-slider-nav-item]").forEach(function(e) {
                                                                        e.setAttribute("data-slider-nav-item", "")
                                                                    }

                                                                ), e.querySelectorAll("*[data-slider-nav-item]")[n].setAttribute("data-slider-nav-item", "active")
                                                            }

                                                        )
                                                    }

                                                    , i=0; i<e.querySelectorAll("*[data-slider-nav-item]").length; i++)n(i)
                                            }

                                        )
                                    }

                                    , i.prototype.addArrows=function() {
                                        var t=this, n=r[e].querySelector(s), i=r[e].querySelector(o); n.addEventListener("click", function() {
                                                return t.prev()
                                            }

                                        ), i.addEventListener("click", function() {
                                                return t.next()
                                            }

                                        )
                                    }

                                    , i.prototype.updateDots=function(e) {
                                        var t=this.currentSlide; r[e].querySelectorAll("*[data-slider-nav-group]").forEach(function(e) {
                                                for(var n=0; n<e.querySelectorAll("*[data-slider-nav-item]").length; n++)e.querySelectorAll("*[data-slider-nav-item]").forEach(function(e) {
                                                        e.setAttribute("data-slider-nav-item", "")
                                                    }

                                                ), e.querySelectorAll("*[data-slider-nav-item]")[t].setAttribute("data-slider-nav-item", "active")
                                            }

                                        )
                                    }

                                    , t.addPagination(), t.addArrows()
                                }

                                , t=0; t<r.length; t++)e(t)
                        }

                        (), function() {
                            for(var e=document.querySelectorAll("[data-player]"), t=function(t) {
                                    var n=e[t].querySelector("*[data-play-button]"), s=e[t].querySelector("*[data-video-overlay]"); h.addEventListener("click", function(e) {
                                            e.preventDefault(); var t=h.dataset.videoId; s.classList.add(d), n.classList.add(f), s.classList.add(d), n.classList.add(f), g&& !p?p=new YT.Player("video-player", {
                                                    videoId:t, playerVars: {
                                                        origin:document.location.origin, widget_referrer:document.location.origin, enablejsapi:1, controls:0, autoplay:1
                                                    }

                                                    , events: {
                                                        onReady:i, onStateChange:r
                                                    }
                                                }

                                            ):p.playVideo()
                                        }

                                    )
                                }

                                , n=0; n<e.length; n++)t(n); window.addEventListener("load", function() {
                                    l.src="https://www.youtube.com/iframe_api"; var e=document.getElementsByTagName("script")[0]; e.parentNode.insertBefore(l, e), window.onYouTubeIframeAPIReady=function() {
                                        g= !0
                                    }
                                }

                            ); var i=function() {
                                h.addEventListener("click", function(e) {
                                        e.preventDefault(), u.classList.add(d), c.classList.add(f), p.playVideo()
                                    }

                                )
                            }

                            , r=function(e) {
                                switch(e.data) {
                                    case 0:case 2:u.classList.remove(d), c.classList.remove(f); break; default:u.classList.add(d), c.classList.add(f)
                                }
                            }
                        }

                        ()
                    }
                }

            ).call(this, n(15))
        }
    }

);
//# sourceMappingURL=./packlane_web.page.index.js-e45c6ad4d7842fe555ed9ef4933e26bf.map
