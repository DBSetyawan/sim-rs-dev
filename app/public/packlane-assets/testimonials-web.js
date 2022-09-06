! function (e) {
    function t(t) {
        for (var r, o, a = t[0], l = t[1], h = t[2], d = 0, u = []; d < a.length; d++) o = a[d], n[o] && u.push(n[o][0]), n[o] = 0;
        for (r in l) Object.prototype.hasOwnProperty.call(l, r) && (e[r] = l[r]);
        for (c && c(t); u.length;) u.shift()();
        return s.push.apply(s, h || []), i()
    }

    function i() {
        for (var e, t = 0; t < s.length; t++) {
            for (var i = s[t], r = !0, a = 1; a < i.length; a++) {
                var l = i[a];
                0 !== n[l] && (r = !1)
            }
            r && (s.splice(t--, 1), e = o(o.s = i[0]))
        }
        return e
    }
    var r = {},
        n = {
            22: 0
        },
        s = [];

    function o(t) {
        if (r[t]) return r[t].exports;
        var i = r[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(i.exports, i, i.exports, o), i.l = !0, i.exports
    }
    o.m = e, o.c = r, o.d = function (e, t, i) {
        o.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: i
        })
    }, o.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, o.t = function (e, t) {
        if (1 & t && (e = o(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var i = Object.create(null);
        if (o.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var r in e) o.d(i, r, function (t) {
                return e[t]
            }.bind(null, r));
        return i
    }, o.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return o.d(t, "a", t), t
    }, o.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, o.p = "";
    var a = window.webpackJsonp = window.webpackJsonp || [],
        l = a.push.bind(a);
    a.push = t, a = a.slice();
    for (var h = 0; h < a.length; h++) t(a[h]);
    var c = l;
    s.push([2062, 0]), i()
}({
    2062: function (e, t, i) {
        "use strict";
        var r = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const n = r(i(491));
        window.addEventListener("commonInitComplete", n.default)
    },
    491: function (e, t, i) {
        "use strict";
        (function (e) {
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                return typeof e
            } : function (e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            };
            t.default = function () {
                "undefined" != typeof window ? window : void 0 !== e || "undefined" != typeof self && self;
                var t = "function" == typeof Symbol && "symbol" === i(Symbol.iterator) ? function (e) {
                        return void 0 === e ? "undefined" : i(e)
                    } : function (e) {
                        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : void 0 === e ? "undefined" : i(e)
                    },
                    r = (function () {
                        function e(e) {
                            this.value = e
                        }

                        function t(t) {
                            var i, r;

                            function n(i, r) {
                                try {
                                    var o = t[i](r),
                                        a = o.value;
                                    a instanceof e ? Promise.resolve(a.value).then(function (e) {
                                        n("next", e)
                                    }, function (e) {
                                        n("throw", e)
                                    }) : s(o.done ? "return" : "normal", o.value)
                                } catch (e) {
                                    s("throw", e)
                                }
                            }

                            function s(e, t) {
                                switch (e) {
                                    case "return":
                                        i.resolve({
                                            value: t,
                                            done: !0
                                        });
                                        break;
                                    case "throw":
                                        i.reject(t);
                                        break;
                                    default:
                                        i.resolve({
                                            value: t,
                                            done: !1
                                        })
                                }(i = i.next) ? n(i.key, i.arg): r = null
                            }
                            this._invoke = function (e, t) {
                                return new Promise(function (s, o) {
                                    var a = {
                                        key: e,
                                        arg: t,
                                        resolve: s,
                                        reject: o,
                                        next: null
                                    };
                                    r ? r = r.next = a : (i = r = a, n(e, t))
                                })
                            }, "function" != typeof t.return && (this.return = void 0)
                        }
                        "function" == typeof Symbol && Symbol.asyncIterator && (t.prototype[Symbol.asyncIterator] = function () {
                            return this
                        }), t.prototype.next = function (e) {
                            return this._invoke("next", e)
                        }, t.prototype.throw = function (e) {
                            return this._invoke("throw", e)
                        }, t.prototype.return = function (e) {
                            return this._invoke("return", e)
                        }
                    }(), function (e) {
                        return e && e.__esModule && Object.prototype.hasOwnProperty.call(e, "default") ? e.default : e
                    }(function (e, t) {
                        return e(t = {
                            exports: {}
                        }, t.exports), t.exports
                    }(function (e) {
                        "undefined" != typeof self && self, e.exports = function (e) {
                            function t(r) {
                                if (i[r]) return i[r].exports;
                                var n = i[r] = {
                                    i: r,
                                    l: !1,
                                    exports: {}
                                };
                                return e[r].call(n.exports, n, n.exports, t), n.l = !0, n.exports
                            }
                            var i = {};
                            return t.m = e, t.c = i, t.d = function (e, i, r) {
                                t.o(e, i) || Object.defineProperty(e, i, {
                                    configurable: !1,
                                    enumerable: !0,
                                    get: r
                                })
                            }, t.n = function (e) {
                                var i = e && e.__esModule ? function () {
                                    return e.default
                                } : function () {
                                    return e
                                };
                                return t.d(i, "a", i), i
                            }, t.o = function (e, t) {
                                return Object.prototype.hasOwnProperty.call(e, t)
                            }, t.p = "", t(t.s = 0)
                        }([function (e, i, r) {
                            Object.defineProperty(i, "__esModule", {
                                value: !0
                            });
                            var n = "function" == typeof Symbol && "symbol" == t(Symbol.iterator) ? function (e) {
                                    return void 0 === e ? "undefined" : t(e)
                                } : function (e) {
                                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : void 0 === e ? "undefined" : t(e)
                                },
                                s = function () {
                                    function e(e, t) {
                                        for (var i = 0; i < t.length; i++) {
                                            var r = t[i];
                                            r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                                        }
                                    }
                                    return function (t, i, r) {
                                        return i && e(t.prototype, i), r && e(t, r), t
                                    }
                                }(),
                                o = function () {
                                    function e(t) {
                                        var i = this;
                                        if (function (e, t) {
                                                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                                            }(this, e), this.config = e.mergeSettings(t), this.selector = "string" == typeof this.config.selector ? document.querySelector(this.config.selector) : this.config.selector, null === this.selector) throw new Error("Something wrong with your selector ðŸ˜­");
                                        this.resolveSlidesNumber(), this.selectorWidth = this.selector.offsetWidth, this.innerElements = [].slice.call(this.selector.children), this.currentSlide = this.config.loop ? this.config.startIndex % this.innerElements.length : Math.max(0, Math.min(this.config.startIndex, this.innerElements.length - this.perPage)), this.transformProperty = e.webkitOrNot(), ["resizeHandler", "touchstartHandler", "touchendHandler", "touchmoveHandler", "mousedownHandler", "mouseupHandler", "mouseleaveHandler", "mousemoveHandler", "clickHandler"].forEach(function (e) {
                                            i[e] = i[e].bind(i)
                                        }), this.init()
                                    }
                                    return s(e, [{
                                        key: "attachEvents",
                                        value: function () {
                                            window.addEventListener("resize", this.resizeHandler), this.config.draggable && (this.pointerDown = !1, this.drag = {
                                                startX: 0,
                                                endX: 0,
                                                startY: 0,
                                                letItGo: null,
                                                preventClick: !1
                                            }, this.selector.addEventListener("touchstart", this.touchstartHandler), this.selector.addEventListener("touchend", this.touchendHandler), this.selector.addEventListener("touchmove", this.touchmoveHandler), this.selector.addEventListener("mousedown", this.mousedownHandler), this.selector.addEventListener("mouseup", this.mouseupHandler), this.selector.addEventListener("mouseleave", this.mouseleaveHandler), this.selector.addEventListener("mousemove", this.mousemoveHandler), this.selector.addEventListener("click", this.clickHandler))
                                        }
                                    }, {
                                        key: "detachEvents",
                                        value: function () {
                                            window.removeEventListener("resize", this.resizeHandler), this.selector.removeEventListener("touchstart", this.touchstartHandler), this.selector.removeEventListener("touchend", this.touchendHandler), this.selector.removeEventListener("touchmove", this.touchmoveHandler), this.selector.removeEventListener("mousedown", this.mousedownHandler), this.selector.removeEventListener("mouseup", this.mouseupHandler), this.selector.removeEventListener("mouseleave", this.mouseleaveHandler), this.selector.removeEventListener("mousemove", this.mousemoveHandler), this.selector.removeEventListener("click", this.clickHandler)
                                        }
                                    }, {
                                        key: "init",
                                        value: function () {
                                            this.attachEvents(), this.selector.style.overflow = "hidden", this.selector.style.direction = this.config.rtl ? "rtl" : "ltr", this.buildSliderFrame(), this.config.onInit.call(this)
                                        }
                                    }, {
                                        key: "buildSliderFrame",
                                        value: function () {
                                            var e = this.selectorWidth / this.perPage,
                                                t = this.config.loop ? this.innerElements.length + 2 * this.perPage : this.innerElements.length;
                                            this.sliderFrame = document.createElement("div"), this.sliderFrame.style.width = e * t + "px", this.enableTransition(), this.config.draggable && (this.selector.style.cursor = "-webkit-grab");
                                            var i = document.createDocumentFragment();
                                            if (this.config.loop)
                                                for (var r = this.innerElements.length - this.perPage; r < this.innerElements.length; r++) {
                                                    var n = this.buildSliderFrameItem(this.innerElements[r].cloneNode(!0));
                                                    i.appendChild(n)
                                                }
                                            for (var s = 0; s < this.innerElements.length; s++) {
                                                var o = this.buildSliderFrameItem(this.innerElements[s]);
                                                i.appendChild(o)
                                            }
                                            if (this.config.loop)
                                                for (var a = 0; a < this.perPage; a++) {
                                                    var l = this.buildSliderFrameItem(this.innerElements[a].cloneNode(!0));
                                                    i.appendChild(l)
                                                }
                                            this.sliderFrame.appendChild(i), this.selector.innerHTML = "", this.selector.appendChild(this.sliderFrame), this.slideToCurrent()
                                        }
                                    }, {
                                        key: "buildSliderFrameItem",
                                        value: function (e) {
                                            var t = document.createElement("div");
                                            return t.style.cssFloat = this.config.rtl ? "right" : "left", t.style.float = this.config.rtl ? "right" : "left", t.style.width = (this.config.loop ? 100 / (this.innerElements.length + 2 * this.perPage) : 100 / this.innerElements.length) + "%", t.appendChild(e), t
                                        }
                                    }, {
                                        key: "resolveSlidesNumber",
                                        value: function () {
                                            if ("number" == typeof this.config.perPage) this.perPage = this.config.perPage;
                                            else if ("object" === n(this.config.perPage))
                                                for (var e in this.perPage = 1, this.config.perPage) window.innerWidth >= e && (this.perPage = this.config.perPage[e])
                                        }
                                    }, {
                                        key: "prev",
                                        value: function () {
                                            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                                                t = arguments[1];
                                            if (!(this.innerElements.length <= this.perPage)) {
                                                var i = this.currentSlide;
                                                if (this.config.loop)
                                                    if (this.currentSlide - e < 0) {
                                                        this.disableTransition();
                                                        var r = this.currentSlide + this.innerElements.length,
                                                            n = this.perPage,
                                                            s = r + n,
                                                            o = (this.config.rtl ? 1 : -1) * s * (this.selectorWidth / this.perPage),
                                                            a = this.config.draggable ? this.drag.endX - this.drag.startX : 0;
                                                        this.sliderFrame.style[this.transformProperty] = "translate3d(" + (o + a) + "px, 0, 0)", this.currentSlide = r - e
                                                    } else this.currentSlide = this.currentSlide - e;
                                                else this.currentSlide = Math.max(this.currentSlide - e, 0);
                                                i !== this.currentSlide && (this.slideToCurrent(this.config.loop), this.config.onChange.call(this), t && t.call(this))
                                            }
                                        }
                                    }, {
                                        key: "next",
                                        value: function () {
                                            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                                                t = arguments[1];
                                            if (!(this.innerElements.length <= this.perPage)) {
                                                var i = this.currentSlide;
                                                if (this.config.loop)
                                                    if (this.currentSlide + e > this.innerElements.length - this.perPage) {
                                                        this.disableTransition();
                                                        var r = this.currentSlide - this.innerElements.length,
                                                            n = this.perPage,
                                                            s = r + n,
                                                            o = (this.config.rtl ? 1 : -1) * s * (this.selectorWidth / this.perPage),
                                                            a = this.config.draggable ? this.drag.endX - this.drag.startX : 0;
                                                        this.sliderFrame.style[this.transformProperty] = "translate3d(" + (o + a) + "px, 0, 0)", this.currentSlide = r + e
                                                    } else this.currentSlide = this.currentSlide + e;
                                                else this.currentSlide = Math.min(this.currentSlide + e, this.innerElements.length - this.perPage);
                                                i !== this.currentSlide && (this.slideToCurrent(this.config.loop), this.config.onChange.call(this), t && t.call(this))
                                            }
                                        }
                                    }, {
                                        key: "disableTransition",
                                        value: function () {
                                            this.sliderFrame.style.webkitTransition = "all 0ms " + this.config.easing, this.sliderFrame.style.transition = "all 0ms " + this.config.easing
                                        }
                                    }, {
                                        key: "enableTransition",
                                        value: function () {
                                            this.sliderFrame.style.webkitTransition = "all " + this.config.duration + "ms " + this.config.easing, this.sliderFrame.style.transition = "all " + this.config.duration + "ms " + this.config.easing
                                        }
                                    }, {
                                        key: "goTo",
                                        value: function (e, t) {
                                            if (!(this.innerElements.length <= this.perPage)) {
                                                var i = this.currentSlide;
                                                this.currentSlide = this.config.loop ? e % this.innerElements.length : Math.min(Math.max(e, 0), this.innerElements.length - this.perPage), i !== this.currentSlide && (this.slideToCurrent(), this.config.onChange.call(this), t && t.call(this))
                                            }
                                        }
                                    }, {
                                        key: "slideToCurrent",
                                        value: function (e) {
                                            var t = this,
                                                i = this.config.loop ? this.currentSlide + this.perPage : this.currentSlide,
                                                r = (this.config.rtl ? 1 : -1) * i * (this.selectorWidth / this.perPage);
                                            e ? requestAnimationFrame(function () {
                                                requestAnimationFrame(function () {
                                                    t.enableTransition(), t.sliderFrame.style[t.transformProperty] = "translate3d(" + r + "px, 0, 0)"
                                                })
                                            }) : this.sliderFrame.style[this.transformProperty] = "translate3d(" + r + "px, 0, 0)"
                                        }
                                    }, {
                                        key: "updateAfterDrag",
                                        value: function () {
                                            var e = (this.config.rtl ? -1 : 1) * (this.drag.endX - this.drag.startX),
                                                t = Math.abs(e),
                                                i = this.config.multipleDrag ? Math.ceil(t / (this.selectorWidth / this.perPage)) : 1,
                                                r = e > 0 && this.currentSlide - i < 0,
                                                n = e < 0 && this.currentSlide + i > this.innerElements.length - this.perPage;
                                            e > 0 && t > this.config.threshold && this.innerElements.length > this.perPage ? this.prev(i) : e < 0 && t > this.config.threshold && this.innerElements.length > this.perPage && this.next(i), this.slideToCurrent(r || n)
                                        }
                                    }, {
                                        key: "resizeHandler",
                                        value: function () {
                                            this.resolveSlidesNumber(), this.currentSlide + this.perPage > this.innerElements.length && (this.currentSlide = this.innerElements.length <= this.perPage ? 0 : this.innerElements.length - this.perPage), this.selectorWidth = this.selector.offsetWidth, this.buildSliderFrame()
                                        }
                                    }, {
                                        key: "clearDrag",
                                        value: function () {
                                            this.drag = {
                                                startX: 0,
                                                endX: 0,
                                                startY: 0,
                                                letItGo: null,
                                                preventClick: this.drag.preventClick
                                            }
                                        }
                                    }, {
                                        key: "touchstartHandler",
                                        value: function (e) {
                                            -1 !== ["TEXTAREA", "OPTION", "INPUT", "SELECT"].indexOf(e.target.nodeName) || (e.stopPropagation(), this.pointerDown = !0, this.drag.startX = e.touches[0].pageX, this.drag.startY = e.touches[0].pageY)
                                        }
                                    }, {
                                        key: "touchendHandler",
                                        value: function (e) {
                                            e.stopPropagation(), this.pointerDown = !1, this.enableTransition(), this.drag.endX && this.updateAfterDrag(), this.clearDrag()
                                        }
                                    }, {
                                        key: "touchmoveHandler",
                                        value: function (e) {
                                            if (e.stopPropagation(), null === this.drag.letItGo && (this.drag.letItGo = Math.abs(this.drag.startY - e.touches[0].pageY) < Math.abs(this.drag.startX - e.touches[0].pageX)), this.pointerDown && this.drag.letItGo) {
                                                e.preventDefault(), this.drag.endX = e.touches[0].pageX, this.sliderFrame.style.webkitTransition = "all 0ms " + this.config.easing, this.sliderFrame.style.transition = "all 0ms " + this.config.easing;
                                                var t = this.config.loop ? this.currentSlide + this.perPage : this.currentSlide,
                                                    i = t * (this.selectorWidth / this.perPage),
                                                    r = this.drag.endX - this.drag.startX,
                                                    n = this.config.rtl ? i + r : i - r;
                                                this.sliderFrame.style[this.transformProperty] = "translate3d(" + (this.config.rtl ? 1 : -1) * n + "px, 0, 0)"
                                            }
                                        }
                                    }, {
                                        key: "mousedownHandler",
                                        value: function (e) {
                                            -1 !== ["TEXTAREA", "OPTION", "INPUT", "SELECT"].indexOf(e.target.nodeName) || (e.preventDefault(), e.stopPropagation(), this.pointerDown = !0, this.drag.startX = e.pageX)
                                        }
                                    }, {
                                        key: "mouseupHandler",
                                        value: function (e) {
                                            e.stopPropagation(), this.pointerDown = !1, this.selector.style.cursor = "-webkit-grab", this.enableTransition(), this.drag.endX && this.updateAfterDrag(), this.clearDrag()
                                        }
                                    }, {
                                        key: "mousemoveHandler",
                                        value: function (e) {
                                            if (e.preventDefault(), this.pointerDown) {
                                                "A" === e.target.nodeName && (this.drag.preventClick = !0), this.drag.endX = e.pageX, this.selector.style.cursor = "-webkit-grabbing", this.sliderFrame.style.webkitTransition = "all 0ms " + this.config.easing, this.sliderFrame.style.transition = "all 0ms " + this.config.easing;
                                                var t = this.config.loop ? this.currentSlide + this.perPage : this.currentSlide,
                                                    i = t * (this.selectorWidth / this.perPage),
                                                    r = this.drag.endX - this.drag.startX,
                                                    n = this.config.rtl ? i + r : i - r;
                                                this.sliderFrame.style[this.transformProperty] = "translate3d(" + (this.config.rtl ? 1 : -1) * n + "px, 0, 0)"
                                            }
                                        }
                                    }, {
                                        key: "mouseleaveHandler",
                                        value: function (e) {
                                            this.pointerDown && (this.pointerDown = !1, this.selector.style.cursor = "-webkit-grab", this.drag.endX = e.pageX, this.drag.preventClick = !1, this.enableTransition(), this.updateAfterDrag(), this.clearDrag())
                                        }
                                    }, {
                                        key: "clickHandler",
                                        value: function (e) {
                                            this.drag.preventClick && e.preventDefault(), this.drag.preventClick = !1
                                        }
                                    }, {
                                        key: "remove",
                                        value: function (e, t) {
                                            if (e < 0 || e >= this.innerElements.length) throw new Error("Item to remove doesn't exist ðŸ˜­");
                                            var i = e < this.currentSlide,
                                                r = this.currentSlide + this.perPage - 1 === e;
                                            (i || r) && this.currentSlide--, this.innerElements.splice(e, 1), this.buildSliderFrame(), t && t.call(this)
                                        }
                                    }, {
                                        key: "insert",
                                        value: function (e, t, i) {
                                            if (t < 0 || t > this.innerElements.length + 1) throw new Error("Unable to inset it at this index ðŸ˜­");
                                            if (-1 !== this.innerElements.indexOf(e)) throw new Error("The same item in a carousel? Really? Nope ðŸ˜­");
                                            var r = t <= this.currentSlide > 0 && this.innerElements.length;
                                            this.currentSlide = r ? this.currentSlide + 1 : this.currentSlide, this.innerElements.splice(t, 0, e), this.buildSliderFrame(), i && i.call(this)
                                        }
                                    }, {
                                        key: "prepend",
                                        value: function (e, t) {
                                            this.insert(e, 0), t && t.call(this)
                                        }
                                    }, {
                                        key: "append",
                                        value: function (e, t) {
                                            this.insert(e, this.innerElements.length + 1), t && t.call(this)
                                        }
                                    }, {
                                        key: "destroy",
                                        value: function () {
                                            var e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0],
                                                t = arguments[1];
                                            if (this.detachEvents(), this.selector.style.cursor = "auto", e) {
                                                for (var i = document.createDocumentFragment(), r = 0; r < this.innerElements.length; r++) i.appendChild(this.innerElements[r]);
                                                this.selector.innerHTML = "", this.selector.appendChild(i), this.selector.removeAttribute("style")
                                            }
                                            t && t.call(this)
                                        }
                                    }], [{
                                        key: "mergeSettings",
                                        value: function (e) {
                                            var t = {
                                                    selector: ".siema-js",
                                                    duration: 200,
                                                    easing: "ease-out",
                                                    perPage: 1,
                                                    startIndex: 0,
                                                    draggable: !0,
                                                    multipleDrag: !0,
                                                    threshold: 20,
                                                    loop: !1,
                                                    rtl: !1,
                                                    onInit: function () {},
                                                    onChange: function () {}
                                                },
                                                i = e;
                                            for (var r in i) t[r] = i[r];
                                            return t
                                        }
                                    }, {
                                        key: "webkitOrNot",
                                        value: function () {
                                            return "string" == typeof document.documentElement.style.transform ? "transform" : "WebkitTransform"
                                        }
                                    }]), e
                                }();
                            i.default = o, e.exports = i.default
                        }])
                    }))),
                    n = document.querySelectorAll("*[data-slider-container]"),
                    s = '*[data-slider-arrow="prev"]',
                    o = '*[data-slider-arrow="next"]',
                    a = document.querySelector("*[data-player]"),
                    l = document.createElement("script"),
                    h = a.querySelector("*[data-play-button]"),
                    c = a.querySelector("*[data-play-trigger]"),
                    d = a.querySelector("*[data-video-overlay]"),
                    u = "testimonial-video__overlay--active",
                    f = "testimonial-video__play-btn--active",
                    p = "",
                    g = !1;
                ! function () {
                    for (var e = document.querySelectorAll("[data-tiles]"), t = 0; t < e.length; t++)
                        for (var i = 1; i <= 2; i++) {
                            var r = e[t].cloneNode(!0);
                            e[t].parentNode.appendChild(r), e[t].parentNode.querySelectorAll("[data-tiles]").forEach(function (e) {
                                e.style.animationPlayState = "running"
                            })
                        }
                }(),
                function () {
                    for (var e = function (e) {
                            var t = new r({
                                selector: n[e].querySelector(".siema-js"),
                                loop: !0,
                                onChange: function () {
                                    this.updateDots(n[e].getAttribute("data-slider-container"))
                                }
                            });
                            r.prototype.addPagination = function () {
                                var t = this;
                                n[e].querySelectorAll("*[data-slider-nav-group]").forEach(function (e) {
                                    for (var i = function (i) {
                                            e.querySelectorAll("*[data-slider-nav-item]")[i].addEventListener("click", function () {
                                                t.goTo(i), e.querySelectorAll("*[data-slider-nav-item]").forEach(function (e) {
                                                    e.setAttribute("data-slider-nav-item", "")
                                                }), e.querySelectorAll("*[data-slider-nav-item]")[i].setAttribute("data-slider-nav-item", "active")
                                            })
                                        }, r = 0; r < e.querySelectorAll("*[data-slider-nav-item]").length; r++) i(r)
                                })
                            }, r.prototype.addArrows = function () {
                                var t = this,
                                    i = n[e].querySelector(s),
                                    r = n[e].querySelector(o);
                                i.addEventListener("click", function () {
                                    return t.prev()
                                }), r.addEventListener("click", function () {
                                    return t.next()
                                })
                            }, r.prototype.updateDots = function (e) {
                                var t = this.currentSlide;
                                n[e].querySelectorAll("*[data-slider-nav-group]").forEach(function (e) {
                                    for (var i = 0; i < e.querySelectorAll("*[data-slider-nav-item]").length; i++) e.querySelectorAll("*[data-slider-nav-item]").forEach(function (e) {
                                        e.setAttribute("data-slider-nav-item", "")
                                    }), e.querySelectorAll("*[data-slider-nav-item]")[t].setAttribute("data-slider-nav-item", "active")
                                })
                            }, t.addPagination(), t.addArrows()
                        }, t = 0; t < n.length; t++) e(t)
                }(),
                function () {
                    for (var e = document.querySelectorAll("[data-player]"), t = function (t) {
                            var i = e[t].querySelector("*[data-play-button]"),
                                s = e[t].querySelector("*[data-video-overlay]");
                            c.addEventListener("click", function (e) {
                                e.preventDefault();
                                var t = c.dataset.videoId;
                                s.classList.add(u), i.classList.add(f), s.classList.add(u), i.classList.add(f), g && !p ? p = new YT.Player("video-player", {
                                    videoId: t,
                                    playerVars: {
                                        origin: document.location.origin,
                                        widget_referrer: document.location.origin,
                                        enablejsapi: 1,
                                        controls: 0,
                                        autoplay: 1
                                    },
                                    events: {
                                        onReady: r,
                                        onStateChange: n
                                    }
                                }) : p.playVideo()
                            })
                        }, i = 0; i < e.length; i++) t(i);
                    window.addEventListener("load", function () {
                        l.src = "https://www.youtube.com/iframe_api";
                        var e = document.getElementsByTagName("script")[0];
                        e.parentNode.insertBefore(l, e), window.onYouTubeIframeAPIReady = function () {
                            g = !0
                        }
                    });
                    var r = function () {
                            c.addEventListener("click", function (e) {
                                e.preventDefault(), d.classList.add(u), h.classList.add(f), p.playVideo()
                            })
                        },
                        n = function (e) {
                            switch (e.data) {
                                case 0:
                                case 2:
                                    d.classList.remove(u), h.classList.remove(f);
                                    break;
                                default:
                                    d.classList.add(u), h.classList.add(f)
                            }
                        }
                }()
            }
        }).call(this, i(15))
    }
});
//# sourceMappingURL=./packlane_web.testimonial.index.js-c52f0b75545bad0bbd17b78a0c6f2b0c.map
