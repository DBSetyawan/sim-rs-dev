! function (e) {
    function t(t) {
        for (var r, o, s = t[0], l = t[1], u = t[2], d = 0, h = []; d < s.length; d++) o = s[d], i[o] && h.push(i[o][0]), i[o] = 0;
        for (r in l) Object.prototype.hasOwnProperty.call(l, r) && (e[r] = l[r]);
        for (c && c(t); h.length;) h.shift()();
        return a.push.apply(a, u || []), n()
    }

    function n() {
        for (var e, t = 0; t < a.length; t++) {
            for (var n = a[t], r = !0, s = 1; s < n.length; s++) {
                var l = n[s];
                0 !== i[l] && (r = !1)
            }
            r && (a.splice(t--, 1), e = o(o.s = n[0]))
        }
        return e
    }
    var r = {},
        i = {
            18: 0
        },
        a = [];

    function o(t) {
        if (r[t]) return r[t].exports;
        var n = r[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(n.exports, n, n.exports, o), n.l = !0, n.exports
    }
    o.m = e, o.c = r, o.d = function (e, t, n) {
        o.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
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
        var n = Object.create(null);
        if (o.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var r in e) o.d(n, r, function (t) {
                return e[t]
            }.bind(null, r));
        return n
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
    var s = window.webpackJsonp = window.webpackJsonp || [],
        l = s.push.bind(s);
    s.push = t, s = s.slice();
    for (var u = 0; u < s.length; u++) t(s[u]);
    var c = l;
    a.push([2048, 0]), n()
}({
    2048: function (e, t, n) {
        "use strict";
        var r = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = r(n(2049)),
            a = r(n(2053)),
            o = r(n(2055));
        window.addEventListener("commonInitComplete", i.default), window.addEventListener("commonInitComplete", a.default), window.addEventListener("commonInitComplete", o.default)
    },
    2049: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2050),
            i = function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }(n(2052)),
            a = n(61);
        t.default = function () {
            var e = document.getElementById("size-select-js"),
                t = document.getElementById("quantity-select-js"),
                n = document.getElementById("priceOutput"),
                o = document.getElementById("average-rating-js"),
                s = document.getElementById("box-type"),
                l = document.getElementById("sub-slug"),
                u = document.getElementById("customizerContainer").children,
                c = document.getElementById("customizer-buttons").children,
                d = document.getElementById("customizer-container-3d"),
                h = document.getElementById("customizer-container-size"),
                f = document.getElementById("customizer-container-material"),
                m = document.getElementById("customizer-container-print"),
                p = document.getElementById("customizer-3d-button"),
                v = document.getElementById("customizer-size-button"),
                g = document.getElementById("customizer-material-button"),
                y = document.getElementById("customizer-print-button"),
                b = document.getElementById("scroll-to-reviews-js"),
                E = document.getElementById("customizer3d-page-1-button"),
                w = document.getElementById("customizer3d-page-2-button"),
                k = document.getElementById("customizer3d-page-3-button"),
                _ = document.getElementsByClassName("pager-page-1"),
                S = document.getElementsByClassName("pager-page-2"),
                P = document.getElementsByClassName("pager-page-3"),
                C = document.getElementsByClassName("customizerMaterial__item"),
                x = document.getElementsByClassName("material__button");

            function O() {
                var i = e.value.split(",");
                if (t.value >= 2001 && !l || t.value >= 10001) n.value = "Volume Discount Available", $(".volume-js").slideDown();
                else {
                    var o = $.get("/api/calculations/discreet_unit_price", {
                        box: {
                            length: i[0],
                            width: i[1],
                            depth: i[2],
                            ink_coverage: 0,
                            sheet_print_side: "neither",
                            type: s.value,
                            sub_type: l && l.value,
                            material: "white_corrugated"
                        },
                        quantity: t.value
                    });
                    (0, a.interactionInstantQuote)(s.value), o.done(function (e) {
                        (0, r.isNumber)(e.price) ? n.value = "$" + e.price.toFixed(2): n.value = "-"
                    }), o.catch(function (e) {
                        console.log(e)
                    }), $(".volume-js").slideUp()
                }
            }

            function T() {
                var e = $(s).val(),
                    t = $.get("/api/v1/reviews/" + e + "/averages"),
                    n = document.getElementById("star-count-js");
                t.done(function (e) {
                    var t = parseFloat(e.average.toFixed(1)),
                        r = Math.round(t);
                    if (o && n) {
                        o.innerHTML = t;
                        for (var i = 0; i < 5; i++) {
                            var a = document.createElement("IMG");
                            a.src = r >= 1 ? "/images/star-checked.svg" : "/images/star-empty.svg", a.className = "ratingsAndReviews__star", a.height = 36, a.width = 36, a.alt = "star", n.appendChild(a), r -= 1
                        }
                    }
                }), t.catch(function (e) {
                    console.log(e)
                })
            }

            function I(e) {
                for (var t = 0; t < u.length; t += 1) c[t].classList.remove("active"), u[t].classList.add("wizard-page-inactive");
                switch (e.target.id) {
                    case "customizer-3d-button":
                        p.classList.add("active"), d.classList.remove("wizard-page-inactive");
                        break;
                    case "customizer-size-button":
                        v.classList.add("active"), h.classList.remove("wizard-page-inactive");
                        break;
                    case "customizer-material-button":
                        g.classList.add("active"), f.classList.remove("wizard-page-inactive");
                        break;
                    case "customizer-print-button":
                        y.classList.add("active"), m.classList.remove("wizard-page-inactive")
                }
            }

            function j(e) {
                for (var t = 0; t < C.length; t += 1) C[t].classList.remove("active");
                var n = document.getElementsByClassName(e.target.dataset.class);
                Array.prototype.forEach.call(n, function (e) {
                    e.classList.add("active")
                })
            }

            function L(e) {
                switch (E.parentElement.classList.remove("pager__item--checked"), w.parentElement.classList.remove("pager__item--checked"), k.parentElement.classList.remove("pager__item--checked"), Array.prototype.forEach.call(_, function (e) {
                    e.classList.remove("active")
                }), Array.prototype.forEach.call(S, function (e) {
                    e.classList.remove("active")
                }), Array.prototype.forEach.call(P, function (e) {
                    e.classList.remove("active")
                }), e.target.id) {
                    case "customizer3d-page-1-button":
                        Array.prototype.forEach.call(_, function (e) {
                            e.classList.add("active")
                        }), E.parentElement.classList.add("pager__item--checked");
                        break;
                    case "customizer3d-page-2-button":
                        Array.prototype.forEach.call(S, function (e) {
                            e.classList.add("active")
                        }), w.parentElement.classList.add("pager__item--checked");
                        break;
                    case "customizer3d-page-3-button":
                        Array.prototype.forEach.call(P, function (e) {
                            e.classList.add("active")
                        }), k.parentElement.classList.add("pager__item--checked")
                }
            }
            "loading" !== document.readyState ? (O(), T()) : document.addEventListener("DOMContentLoaded", function () {
                O(), T()
            }), e.addEventListener("change", O), t.addEventListener("change", O), p.addEventListener("click", I), v.addEventListener("click", I), g.addEventListener("click", I), y && y.addEventListener("click", I), b && b.addEventListener("click", function () {
                document.getElementById("ratings-and-reviews").scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                    inline: "nearest"
                })
            }), E && w && k && (E.addEventListener("click", L), w.addEventListener("click", L), k.addEventListener("click", L)), Array.prototype.forEach.call(x, function (e) {
                e.addEventListener("click", j)
            });
            var M = document.getElementById("vimeo-player");
            if (M) {
                var N = new i.default(M),
                    q = document.getElementById("easy-assembly-show-me-how"),
                    A = document.getElementById("easy-assembly-play-button");
                N.on("play", function () {
                    A.classList.add("video-started")
                }), A.addEventListener("click", function () {
                    N.play()
                }), q.addEventListener("click", function () {
                    N.play()
                })
            }
        }
    },
    2053: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = o(n(0)),
            i = n(17),
            a = o(n(2054));

        function o(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        t.default = function () {
            var e = document.getElementsByClassName("trigger-quote-modal-js");

            function t(e) {
                e.preventDefault();
                var t = document.getElementById("quote-modal-container-js");
                if (!t) throw new Error("preview-container-js");
                (0, i.render)(r.default.createElement(a.default, {
                    boxType: t.dataset.boxType,
                    closeModal: n,
                    modalContainer: t
                }), t)
            }

            function n() {
                var e = document.getElementById("quote-modal-container-js");
                e && (0, i.unmountComponentAtNode)(e)
            }
            Array.from(e).forEach(function (e) {
                e.addEventListener("click", t)
            })
        }
    },
    2054: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = s(n(0)),
            i = s(n(90)),
            a = s(n(1)),
            o = s(n(252));

        function s(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var l = function (e) {
            return r.default.createElement(i.default, {
                className: "request-quote__modal",
                overlayClassName: "modal-overlay modal-overlay--primary",
                isOpen: !0,
                appElement: e.modalContainer,
                onRequestClose: e.closeModal,
                shouldCloseOnOverlayClick: !0
            }, r.default.createElement("button", {
                className: "modal__close-btn",
                onClick: e.closeModal
            }, r.default.createElement("i", {
                className: "fa fa-times"
            })), r.default.createElement("div", {
                className: "lead-form-wrapper"
            }, r.default.createElement("div", {
                className: "lead-form-wrapper__header"
            }, r.default.createElement("h3", {
                className: "lead-form-wrapper__title"
            }, "Request Your Quote"), r.default.createElement("p", {
                className: "lead-form-wrapper__text"
            }, "You should hear from our sales team soon. However, if it's the weekend, we're probably barbecuing. So you'll hear from us Monday."), r.default.createElement(o.default, {
                boxType: e.boxType,
                closeModal: e.closeModal,
                source: "productPage"
            }))))
        };
        l.propTypes = {
            boxType: a.default.string.isRequired,
            closeModal: a.default.func.isRequired,
            modalContainer: a.default.object.isRequired
        }, t.default = l
    },
    2055: function (e, t, n) {
        "use strict";
        (function (e) {
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                return typeof e
            } : function (e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            };
            t.default = function () {
                "undefined" != typeof window ? window : void 0 !== e || "undefined" != typeof self && self;
                var t = "function" == typeof Symbol && "symbol" === n(Symbol.iterator) ? function (e) {
                        return void 0 === e ? "undefined" : n(e)
                    } : function (e) {
                        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : void 0 === e ? "undefined" : n(e)
                    },
                    r = (function () {
                        function e(e) {
                            this.value = e
                        }

                        function t(t) {
                            var n, r;

                            function i(n, r) {
                                try {
                                    var o = t[n](r),
                                        s = o.value;
                                    s instanceof e ? Promise.resolve(s.value).then(function (e) {
                                        i("next", e)
                                    }, function (e) {
                                        i("throw", e)
                                    }) : a(o.done ? "return" : "normal", o.value)
                                } catch (e) {
                                    a("throw", e)
                                }
                            }

                            function a(e, t) {
                                switch (e) {
                                    case "return":
                                        n.resolve({
                                            value: t,
                                            done: !0
                                        });
                                        break;
                                    case "throw":
                                        n.reject(t);
                                        break;
                                    default:
                                        n.resolve({
                                            value: t,
                                            done: !1
                                        })
                                }(n = n.next) ? i(n.key, n.arg): r = null
                            }
                            this._invoke = function (e, t) {
                                return new Promise(function (a, o) {
                                    var s = {
                                        key: e,
                                        arg: t,
                                        resolve: a,
                                        reject: o,
                                        next: null
                                    };
                                    r ? r = r.next = s : (n = r = s, i(e, t))
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
                                if (n[r]) return n[r].exports;
                                var i = n[r] = {
                                    i: r,
                                    l: !1,
                                    exports: {}
                                };
                                return e[r].call(i.exports, i, i.exports, t), i.l = !0, i.exports
                            }
                            var n = {};
                            return t.m = e, t.c = n, t.d = function (e, n, r) {
                                t.o(e, n) || Object.defineProperty(e, n, {
                                    configurable: !1,
                                    enumerable: !0,
                                    get: r
                                })
                            }, t.n = function (e) {
                                var n = e && e.__esModule ? function () {
                                    return e.default
                                } : function () {
                                    return e
                                };
                                return t.d(n, "a", n), n
                            }, t.o = function (e, t) {
                                return Object.prototype.hasOwnProperty.call(e, t)
                            }, t.p = "", t(t.s = 0)
                        }([function (e, n, r) {
                            Object.defineProperty(n, "__esModule", {
                                value: !0
                            });
                            var i = "function" == typeof Symbol && "symbol" == t(Symbol.iterator) ? function (e) {
                                    return void 0 === e ? "undefined" : t(e)
                                } : function (e) {
                                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : void 0 === e ? "undefined" : t(e)
                                },
                                a = function () {
                                    function e(e, t) {
                                        for (var n = 0; n < t.length; n++) {
                                            var r = t[n];
                                            r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                                        }
                                    }
                                    return function (t, n, r) {
                                        return n && e(t.prototype, n), r && e(t, r), t
                                    }
                                }(),
                                o = function () {
                                    function e(t) {
                                        var n = this;
                                        if (function (e, t) {
                                                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                                            }(this, e), this.config = e.mergeSettings(t), this.selector = "string" == typeof this.config.selector ? document.querySelector(this.config.selector) : this.config.selector, null === this.selector) throw new Error("Something wrong with your selector ðŸ˜­");
                                        this.resolveSlidesNumber(), this.selectorWidth = this.selector.offsetWidth, this.innerElements = [].slice.call(this.selector.children), this.currentSlide = this.config.loop ? this.config.startIndex % this.innerElements.length : Math.max(0, Math.min(this.config.startIndex, this.innerElements.length - this.perPage)), this.transformProperty = e.webkitOrNot(), ["resizeHandler", "touchstartHandler", "touchendHandler", "touchmoveHandler", "mousedownHandler", "mouseupHandler", "mouseleaveHandler", "mousemoveHandler", "clickHandler"].forEach(function (e) {
                                            n[e] = n[e].bind(n)
                                        }), this.init()
                                    }
                                    return a(e, [{
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
                                            var n = document.createDocumentFragment();
                                            if (this.config.loop)
                                                for (var r = this.innerElements.length - this.perPage; r < this.innerElements.length; r++) {
                                                    var i = this.buildSliderFrameItem(this.innerElements[r].cloneNode(!0));
                                                    n.appendChild(i)
                                                }
                                            for (var a = 0; a < this.innerElements.length; a++) {
                                                var o = this.buildSliderFrameItem(this.innerElements[a]);
                                                n.appendChild(o)
                                            }
                                            if (this.config.loop)
                                                for (var s = 0; s < this.perPage; s++) {
                                                    var l = this.buildSliderFrameItem(this.innerElements[s].cloneNode(!0));
                                                    n.appendChild(l)
                                                }
                                            this.sliderFrame.appendChild(n), this.selector.innerHTML = "", this.selector.appendChild(this.sliderFrame), this.slideToCurrent()
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
                                            else if ("object" === i(this.config.perPage))
                                                for (var e in this.perPage = 1, this.config.perPage) window.innerWidth >= e && (this.perPage = this.config.perPage[e])
                                        }
                                    }, {
                                        key: "prev",
                                        value: function () {
                                            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                                                t = arguments[1];
                                            if (!(this.innerElements.length <= this.perPage)) {
                                                var n = this.currentSlide;
                                                if (this.config.loop)
                                                    if (this.currentSlide - e < 0) {
                                                        this.disableTransition();
                                                        var r = this.currentSlide + this.innerElements.length,
                                                            i = this.perPage,
                                                            a = r + i,
                                                            o = (this.config.rtl ? 1 : -1) * a * (this.selectorWidth / this.perPage),
                                                            s = this.config.draggable ? this.drag.endX - this.drag.startX : 0;
                                                        this.sliderFrame.style[this.transformProperty] = "translate3d(" + (o + s) + "px, 0, 0)", this.currentSlide = r - e
                                                    } else this.currentSlide = this.currentSlide - e;
                                                else this.currentSlide = Math.max(this.currentSlide - e, 0);
                                                n !== this.currentSlide && (this.slideToCurrent(this.config.loop), this.config.onChange.call(this), t && t.call(this))
                                            }
                                        }
                                    }, {
                                        key: "next",
                                        value: function () {
                                            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                                                t = arguments[1];
                                            if (!(this.innerElements.length <= this.perPage)) {
                                                var n = this.currentSlide;
                                                if (this.config.loop)
                                                    if (this.currentSlide + e > this.innerElements.length - this.perPage) {
                                                        this.disableTransition();
                                                        var r = this.currentSlide - this.innerElements.length,
                                                            i = this.perPage,
                                                            a = r + i,
                                                            o = (this.config.rtl ? 1 : -1) * a * (this.selectorWidth / this.perPage),
                                                            s = this.config.draggable ? this.drag.endX - this.drag.startX : 0;
                                                        this.sliderFrame.style[this.transformProperty] = "translate3d(" + (o + s) + "px, 0, 0)", this.currentSlide = r + e
                                                    } else this.currentSlide = this.currentSlide + e;
                                                else this.currentSlide = Math.min(this.currentSlide + e, this.innerElements.length - this.perPage);
                                                n !== this.currentSlide && (this.slideToCurrent(this.config.loop), this.config.onChange.call(this), t && t.call(this))
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
                                                var n = this.currentSlide;
                                                this.currentSlide = this.config.loop ? e % this.innerElements.length : Math.min(Math.max(e, 0), this.innerElements.length - this.perPage), n !== this.currentSlide && (this.slideToCurrent(), this.config.onChange.call(this), t && t.call(this))
                                            }
                                        }
                                    }, {
                                        key: "slideToCurrent",
                                        value: function (e) {
                                            var t = this,
                                                n = this.config.loop ? this.currentSlide + this.perPage : this.currentSlide,
                                                r = (this.config.rtl ? 1 : -1) * n * (this.selectorWidth / this.perPage);
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
                                                n = this.config.multipleDrag ? Math.ceil(t / (this.selectorWidth / this.perPage)) : 1,
                                                r = e > 0 && this.currentSlide - n < 0,
                                                i = e < 0 && this.currentSlide + n > this.innerElements.length - this.perPage;
                                            e > 0 && t > this.config.threshold && this.innerElements.length > this.perPage ? this.prev(n) : e < 0 && t > this.config.threshold && this.innerElements.length > this.perPage && this.next(n), this.slideToCurrent(r || i)
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
                                                    n = t * (this.selectorWidth / this.perPage),
                                                    r = this.drag.endX - this.drag.startX,
                                                    i = this.config.rtl ? n + r : n - r;
                                                this.sliderFrame.style[this.transformProperty] = "translate3d(" + (this.config.rtl ? 1 : -1) * i + "px, 0, 0)"
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
                                                    n = t * (this.selectorWidth / this.perPage),
                                                    r = this.drag.endX - this.drag.startX,
                                                    i = this.config.rtl ? n + r : n - r;
                                                this.sliderFrame.style[this.transformProperty] = "translate3d(" + (this.config.rtl ? 1 : -1) * i + "px, 0, 0)"
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
                                            var n = e < this.currentSlide,
                                                r = this.currentSlide + this.perPage - 1 === e;
                                            (n || r) && this.currentSlide--, this.innerElements.splice(e, 1), this.buildSliderFrame(), t && t.call(this)
                                        }
                                    }, {
                                        key: "insert",
                                        value: function (e, t, n) {
                                            if (t < 0 || t > this.innerElements.length + 1) throw new Error("Unable to inset it at this index ðŸ˜­");
                                            if (-1 !== this.innerElements.indexOf(e)) throw new Error("The same item in a carousel? Really? Nope ðŸ˜­");
                                            var r = t <= this.currentSlide > 0 && this.innerElements.length;
                                            this.currentSlide = r ? this.currentSlide + 1 : this.currentSlide, this.innerElements.splice(t, 0, e), this.buildSliderFrame(), n && n.call(this)
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
                                                for (var n = document.createDocumentFragment(), r = 0; r < this.innerElements.length; r++) n.appendChild(this.innerElements[r]);
                                                this.selector.innerHTML = "", this.selector.appendChild(n), this.selector.removeAttribute("style")
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
                                                n = e;
                                            for (var r in n) t[r] = n[r];
                                            return t
                                        }
                                    }, {
                                        key: "webkitOrNot",
                                        value: function () {
                                            return "string" == typeof document.documentElement.style.transform ? "transform" : "WebkitTransform"
                                        }
                                    }]), e
                                }();
                            n.default = o, e.exports = n.default
                        }])
                    }))),
                    i = document.querySelectorAll("*[data-slider-container]"),
                    a = '*[data-slider-arrow="prev"]',
                    o = '*[data-slider-arrow="next"]';
                ! function () {
                    for (var e = function (e) {
                            var t = new r({
                                selector: i[e].querySelector(".siema-js"),
                                loop: !0,
                                onChange: function () {
                                    this.updateDots(i[e].getAttribute("data-slider-container"))
                                }
                            });
                            r.prototype.addPagination = function () {
                                var t = this;
                                i[e].querySelectorAll("*[data-slider-nav-group]").forEach(function (e) {
                                    for (var n = function (n) {
                                            e.querySelectorAll("*[data-slider-nav-item]")[n].addEventListener("click", function () {
                                                t.goTo(n), e.querySelectorAll("*[data-slider-nav-item]").forEach(function (e) {
                                                    e.setAttribute("data-slider-nav-item", "")
                                                }), e.querySelectorAll("*[data-slider-nav-item]")[n].setAttribute("data-slider-nav-item", "active")
                                            })
                                        }, r = 0; r < e.querySelectorAll("*[data-slider-nav-item]").length; r++) n(r)
                                })
                            }, r.prototype.addArrows = function () {
                                var t = this,
                                    n = i[e].querySelector(a),
                                    r = i[e].querySelector(o);
                                n.addEventListener("click", function () {
                                    return t.prev()
                                }), r.addEventListener("click", function () {
                                    return t.next()
                                })
                            }, r.prototype.updateDots = function (e) {
                                var t = this.currentSlide;
                                i[e].querySelectorAll("*[data-slider-nav-group]").forEach(function (e) {
                                    for (var n = 0; n < e.querySelectorAll("*[data-slider-nav-item]").length; n++) e.querySelectorAll("*[data-slider-nav-item]").forEach(function (e) {
                                        e.setAttribute("data-slider-nav-item", "")
                                    }), e.querySelectorAll("*[data-slider-nav-item]")[t].setAttribute("data-slider-nav-item", "active")
                                })
                            }, t.addPagination(), t.addArrows()
                        }, t = 0; t < i.length; t++) e(t)
                }()
            }
        }).call(this, n(15))
    },
    252: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var r = t[n];
                        r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                    }
                }
                return function (t, n, r) {
                    return n && e(t.prototype, n), r && e(t, r), t
                }
            }(),
            i = n(0),
            a = p(i),
            o = p(n(1)),
            s = n(9),
            l = p(n(253)),
            u = p(n(254)),
            c = p(n(255)),
            d = p(n(256)),
            h = p(n(38)),
            f = n(77),
            m = n(61);

        function p(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }

        function v(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n, e
        }
        var g = ["Yes, I have my completed artwork already on a dieline", "No, but I have my design ready", "No, I'm in the pre-design phase currently"],
            y = function (e) {
                function t(e) {
                    ! function (e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    }(this, t);
                    var n = function (e, t) {
                        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                        return !t || "object" != typeof t && "function" != typeof t ? e : t
                    }(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                    return n.state = {
                        firstName: e.quoteData.firstName || "",
                        lastName: e.quoteData.lastName || "",
                        email: e.quoteData.email || "",
                        zipCode: e.quoteData.zipCode || "",
                        quantity: e.quoteData.quantity || "2000-5000",
                        product: e.boxType ? [(0, s.camelCase)(n.props.boxType)] : [],
                        artwork: "",
                        message: ""
                    }, n.handleSubmitQuote = n.handleSubmitQuote.bind(n), n.setFormValues = n.setFormValues.bind(n), n.setQuantity = n.setQuantity.bind(n), n.setBoxType = n.setBoxType.bind(n), n.clearForm = n.clearForm.bind(n), n
                }
                return function (e, t) {
                    if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                    e.prototype = Object.create(t && t.prototype, {
                        constructor: {
                            value: e,
                            enumerable: !1,
                            writable: !0,
                            configurable: !0
                        }
                    }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
                }(t, i.Component), r(t, [{
                    key: "setFormValues",
                    value: function (e) {
                        this.setState(v({}, e.currentTarget.name, e.currentTarget.value))
                    }
                }, {
                    key: "setBoxType",
                    value: function (e) {
                        var t = e.currentTarget.name,
                            n = e.currentTarget.checked,
                            r = new Set(this.state.product);
                        n ? r.add(t) : r.delete(t), this.setState({
                            product: Array.from(r)
                        })
                    }
                }, {
                    key: "setQuantity",
                    value: function (e) {
                        this.setState(v({}, e.currentTarget.name, e.currentTarget.value)), "less-than-2000" === e.target.value ? $(".low-volume-warning-js").slideDown() : $(".low-volume-warning-js").slideUp()
                    }
                }, {
                    key: "stateIsValid",
                    value: function () {
                        return this.state.firstName.trim().length > 0 && this.state.lastName.trim().length > 0 && this.state.email.length > 0 && this.state.zipCode.length > 4 && "" !== this.state.quantity && this.state.product.length > 0 && "" !== this.state.artwork
                    }
                }, {
                    key: "clearForm",
                    value: function () {
                        document.getElementById("lead-form").reset(), this.setState({
                            email: "",
                            firstName: "",
                            lastName: "",
                            zipCode: "",
                            quantity: "2000-5000",
                            product: this.props.boxType ? [(0, s.camelCase)(this.props.boxType)] : [],
                            artwork: "",
                            message: ""
                        })
                    }
                }, {
                    key: "handleSubmitQuote",
                    value: function (e) {
                        var t = this;
                        e.preventDefault();
                        var n = {
                                first_name: this.state.firstName,
                                last_name: this.state.lastName,
                                email: this.state.email,
                                zip_code: this.state.zipCode,
                                company: "",
                                phone: "",
                                source: this.props.source
                            },
                            r = {
                                artwork_option: g[this.state.artwork],
                                artwork_link: "",
                                dimensions: "",
                                material: "",
                                package_style: this.state.product.length ? this.state.product.join(",") : "other",
                                quantity: this.state.quantity,
                                snapshot_url: this.props.quoteData.snapshot ? this.props.quoteData.snapshot : "no-snapshot"
                            },
                            i = {
                                desiredDeliveryDate: null,
                                note: this.state.message
                            };
                        h.default.submitCustomQuote(n, r, i, !1, null, r.snapshot_url, []).then(function () {
                            t.clearForm(), (0, f.customNotyAlert)("", "success", "topRight", !1, 3500, "\n          <div class='lead-alert'>\n            <h5>Custom Quote Sent!</h5>\n            <p>Your request has been sent. We're excited to chat.</p>\n          </div>\n        "), (0, m.sendCustomQuoteRequest)(), t.props.closeModal && t.props.closeModal()
                        })
                    }
                }, {
                    key: "boxTypeQuantity",
                    value: function () {
                        var e = "folding-carton" === this.props.boxType ? 3e3 : 2e3;
                        return e.toLocaleString()
                    }
                }, {
                    key: "render",
                    value: function () {
                        return a.default.createElement("form", {
                            id: "lead-form",
                            className: "lead-form",
                            onSubmit: this.handleSubmitQuote
                        }, a.default.createElement(u.default, {
                            label: "First Name*",
                            fieldId: "firstName",
                            value: this.state.firstName,
                            handleOnChange: this.setFormValues
                        }), a.default.createElement(u.default, {
                            label: "Last Name*",
                            fieldId: "lastName",
                            value: this.state.lastName,
                            handleOnChange: this.setFormValues
                        }), a.default.createElement(u.default, {
                            label: "Email*",
                            fieldId: "email",
                            value: this.state.email,
                            handleOnChange: this.setFormValues
                        }), a.default.createElement("div", {
                            className: "horizontal-fields"
                        }, a.default.createElement(u.default, {
                            fieldId: "zipCode",
                            handleOnChange: this.setFormValues,
                            label: "Zip Code*",
                            value: this.state.zipCode,
                            half: !0
                        }), a.default.createElement(d.default, {
                            label: "Quantity*",
                            fieldId: "quantity",
                            half: !0,
                            value: this.state.quantity,
                            options: {
                                "2000-5000": "2,000-5,000",
                                "5000-or-more": "5,000 or more",
                                "less-than-2000": "Less than 2,000"
                            },
                            handleOnChange: this.setQuantity
                        }, a.default.createElement("span", {
                            className: "sub-text"
                        }, "Custom orders must be over ", this.boxTypeQuantity().toLocaleString(), " units."))), a.default.createElement("div", {
                            className: "notification low-volume-warning-js"
                        }, a.default.createElement("p", {
                            className: "notification__message"
                        }, "Unfortunately, these products are not yet available in low quantities. Please submit this form and weâ€™ll email you when they are, which should be soon.")), a.default.createElement(l.default, {
                            value: this.state.product,
                            handleOnChange: this.setBoxType
                        }), a.default.createElement(d.default, {
                            label: "Do you have artwork?*",
                            fieldId: "artwork",
                            value: this.state.artwork,
                            options: g,
                            includeEmpty: !0,
                            handleOnChange: this.setFormValues
                        }), a.default.createElement(c.default, {
                            fieldId: "message",
                            handleOnChange: this.setFormValues,
                            label: "Order details (the more information you provide, the faster weâ€™ll be able to\n            get you what you need)",
                            isOptional: !0
                        }), a.default.createElement("button", {
                            className: "pbtn pbtn--primary",
                            disabled: !this.stateIsValid(),
                            type: "submit"
                        }, "Request Quote"))
                    }
                }]), t
            }();
        y.propTypes = {
            boxType: o.default.string,
            quoteData: o.default.object,
            closeModal: o.default.func,
            source: o.default.string.isRequired
        }, y.defaultProps = {
            boxType: "",
            quoteData: {},
            closeModal: null
        }, t.default = y
    },
    253: function (e, t, n) {
        "use strict";
        var r = this && this.__importStar || function (e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e)
                for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = r(n(0)),
            a = {
                mailerBox: "Mailer Box (MOQ 2K)",
                shippingBox: "Shipper Box (MOQ 2K)",
                foldingCarton: "Product Box (MOQ 2K)",
                customTissuePaper: "Custom Tissue Paper (MOQ 10K)",
                customTape: "Custom Tape (add-on only)",
                flexiblePackaging: "Flexible Packaging (MOQ 5K)",
                customInserts: "Custom Inserts (add-on only)",
                polyMailers: "Poly Mailers (MOQ 30K)",
                boxDividers: "Box Dividers (add-on only)",
                bags: "Bags (MOQ 3K)",
                rigidPaperMailers: "Rigid Paper Mailers (MOQ 2K)"
            };
        t.default = (({
            handleOnChange: e,
            value: t
        }) => i.createElement("div", {
            className: "form__field"
        }, i.createElement("label", {
            className: "form__label",
            htmlFor: "ulist"
        }, "What packaging products(s) are you interested in?*"), i.createElement("ul", {
            id: "ulist"
        }, [...Object.keys(a)].map(n => i.createElement("li", {
            className: "checkboxes-item-container",
            key: n
        }, i.createElement("label", {
            htmlFor: n
        }, i.createElement("input", {
            type: "checkbox",
            id: n,
            name: n,
            onChange: e,
            checked: t.includes(n)
        }), a[n]))))))
    },
    254: function (e, t, n) {
        "use strict";
        var r = this && this.__importStar || function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            },
            i = this && this.__importDefault || function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = r(n(0)),
            o = i(n(4));
        t.default = (({
            fieldId: e,
            half: t,
            handleOnChange: n,
            isOptional: r,
            label: i,
            value: s
        }) => a.createElement("div", {
            className: o.default("form__field", {
                "form__field--half": t
            })
        }, a.createElement("label", {
            className: "form__label",
            htmlFor: e
        }, i, r && a.createElement("span", {
            className: "sub-text"
        }, "Optional"), a.createElement("input", {
            className: "form__text-input",
            defaultValue: s,
            id: e,
            name: e,
            onChange: e => n(e),
            type: "text"
        }))))
    },
    255: function (e, t, n) {
        "use strict";
        var r = this && this.__importStar || function (e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e)
                for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = r(n(0));
        t.default = (({
            fieldId: e,
            label: t,
            handleOnChange: n,
            isOptional: r
        }) => i.createElement("div", {
            className: "form__field"
        }, i.createElement("label", {
            className: "form__label",
            htmlFor: e
        }, t, r && i.createElement("span", {
            className: "sub-text"
        }, "Optional"), i.createElement("textarea", {
            className: "form__text-input",
            id: e,
            name: e,
            onChange: e => n(e)
        }))))
    },
    256: function (e, t, n) {
        "use strict";
        var r = this && this.__importStar || function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            },
            i = this && this.__importDefault || function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = r(n(0)),
            o = i(n(4));
        t.default = (({
            fieldId: e,
            half: t,
            handleOnChange: n,
            label: r,
            value: i,
            options: s,
            includeEmpty: l,
            children: u
        }) => a.createElement("div", {
            className: o.default("form__field", {
                "form__field--half": t
            })
        }, a.createElement("label", {
            className: "form__label",
            htmlFor: e
        }, r, a.createElement("select", {
            id: e,
            name: e,
            defaultValue: i || "",
            onChange: n,
            className: "form__text-input"
        }, l && a.createElement("option", {
            value: "",
            disabled: !0
        }), [...Object.keys(s)].map(e => a.createElement("option", {
            key: `option_${e}`,
            value: e
        }, s[e]))), u)))
    },
    26: function (e, t, n) {
        "use strict";
        var r = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = r(n(64)),
            a = r(n(9));

        function o(e, t, n = {}, r = 0) {
            const a = n.headers || {
                "Content-Type": n.contentType || function ({
                    constructor: e
                }) {
                    switch (e) {
                        case FormData:
                            return "multipart/form-data";
                        default:
                            return "application/json"
                    }
                }(t),
                "x-csrf-token": n.useCsrf && window.PACKLANE.csrfToken
            };
            return new Promise((s, l) => {
                i.default.post(e, t, {
                    headers: a,
                    withCredentials: n.withCredentials || !0,
                    timeout: n.timeout,
                    cancelToken: n.cancelToken
                }).then(s).catch(i => {
                    const {
                        retries: a = 0,
                        retryTimeout: u = 1e3
                    } = n;
                    a > r ? setTimeout(() => {
                        s(o(e, t, n, r + 1))
                    }, u) : l(i)
                })
            })
        }! function (e) {
            e.Pending = "Pending", e.Success = "Success", e.Error = "Error"
        }(t.RequestStatus || (t.RequestStatus = {})), t.post = o, t.postAsFormData = function (e, t, n = {}, r = 0) {
            const a = n.headers || {
                "Content-Type": "multipart/form-data",
                "x-csrf-token": n.useCsrf && window.PACKLANE.csrfToken
            };
            return new Promise((s, l) => {
                i.default.post(e, t, {
                    headers: a,
                    withCredentials: n.withCredentials || !0,
                    timeout: n.timeout
                }).then(s).catch(i => {
                    const {
                        retries: a = 0,
                        retryTimeout: u = 1e3
                    } = n;
                    a > r ? setTimeout(() => {
                        s(o(e, t, n, r + 1))
                    }, u) : l(i)
                })
            })
        }, t.put = function e(t, n, r = {}, a = 0) {
            const o = r.headers || {
                "Content-Type": "application/json",
                "x-csrf-token": r.useCsrf && window.PACKLANE.csrfToken
            };
            return new Promise((s, l) => {
                i.default.put(t, n, {
                    headers: o,
                    withCredentials: r.withCredentials || !0,
                    timeout: r.timeout
                }).then(s).catch(i => {
                    const {
                        retries: o = 0,
                        retryTimeout: u = 1e3
                    } = r;
                    o > a ? setTimeout(() => {
                        s(e(t, n, r, a + 1))
                    }, u) : l(i)
                })
            })
        }, t.get = function (e, t) {
            return i.default.get(e, t)
        }, t.deleteRequest = function (e, t) {
            const n = t.headers || {
                "x-csrf-token": t.useCsrf && window.PACKLANE.csrfToken
            };
            return i.default.delete(e, {
                headers: n
            })
        }, t.formDataFromObject = function (e) {
            const t = new FormData;
            return Object.keys(e).forEach(n => {
                const r = e[n];
                a.default.isArray(r) && r[0] && r[0].constructor === File ? r.forEach(e => {
                    t.append(`${n}[]`, e, e.name)
                }) : r && r.constructor !== File && (a.default.isArray(r) || a.default.isObject(r)) ? t.append(n, JSON.stringify(r)) : t.append(n, r)
            }), t
        }
    },
    38: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = Object.assign || function (e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
                }
                return e
            },
            i = function () {
                return function (e, t) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e)) return function (e, t) {
                        var n = [],
                            r = !0,
                            i = !1,
                            a = void 0;
                        try {
                            for (var o, s = e[Symbol.iterator](); !(r = (o = s.next()).done) && (n.push(o.value), !t || n.length !== t); r = !0);
                        } catch (e) {
                            i = !0, a = e
                        } finally {
                            try {
                                !r && s.return && s.return()
                            } finally {
                                if (i) throw a
                            }
                        }
                        return n
                    }(e, t);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }(),
            a = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var r = t[n];
                        r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                    }
                }
                return function (t, n, r) {
                    return n && e(t.prototype, n), r && e(t, r), t
                }
            }(),
            o = n(26);

        function s(e) {
            for (var t = arguments.length, n = Array(t > 1 ? t - 1 : 0), r = 1; r < t; r++) n[r - 1] = arguments[r];
            return ["/api", e].concat(n).join("/")
        }

        function l(e, t) {
            return $.ajax({
                url: e,
                type: "POST",
                data: t,
                processData: !1,
                contentType: !1
            })
        }

        function u(e, t) {
            return $.ajax({
                url: e,
                type: "POST",
                data: t
            })
        }

        function c(e, t) {
            return $.ajax({
                url: e,
                type: "GET",
                data: t
            })
        }
        var d = function () {
            function e() {
                ! function (e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            return a(e, null, [{
                key: "createFile",
                value: function (e, t) {
                    var n = s("artwork"),
                        r = new FormData;
                    return r.append("file", e), r.append("inventory_id", t), l(n, r)
                }
            }, {
                key: "createSnapshot",
                value: function (e) {
                    return new Promise(function (t, n) {
                        if (e) {
                            var r = s("artwork/snapshots"),
                                i = new FormData;
                            i.append("snapshot", e), l(r, i).then(t).fail(t)
                        } else n("no snapshot provided to API.createSnapshot")
                    })
                }
            }, {
                key: "createSnapshotEx",
                value: function (e, t) {
                    return new Promise(function (n, r) {
                        if (e) {
                            var i = s("artwork/snapshots_ex"),
                                a = new FormData;
                            a.append("snapshot", e), a.append("inventory_id", t), l(i, a).then(n).fail(r)
                        } else r("no snapshot provided to API.createSnapshotEx")
                    })
                }
            }, {
                key: "createLayout",
                value: function (e) {
                    return u(s("artwork/layouts"), {
                        layout: e
                    })
                }
            }, {
                key: "getPrices",
                value: function (e, t, n, r, i, a, o, l) {
                    return function (e, t) {
                        return $.ajax({
                            url: e,
                            type: "POST",
                            data: JSON.stringify(t),
                            dataType: "json",
                            contentType: "application/json; charset=UTF-8"
                        })
                    }(s("price"), {
                        box_type: e,
                        length: t,
                        width: n,
                        depth: r,
                        material: i,
                        ink_coverage: a,
                        quantities: o,
                        design: l
                    })
                }
            }, {
                key: "getBraintreeToken",
                value: function () {
                    return c(s("braintree/token"))
                }
            }, {
                key: "cmyk2rgb",
                value: function (e, t, n, r) {
                    return c(s("convert-color"), {
                        c: e,
                        m: t,
                        y: n,
                        k: r
                    })
                }
            }, {
                key: "rgb2cmyk",
                value: function (e, t, n) {
                    return c(s("convert-color"), {
                        r: e,
                        g: t,
                        b: n
                    })
                }
            }, {
                key: "rgbColor",
                value: function (t) {
                    var n = $.Deferred();
                    if (this.requestCache = this.requestCache || {}, this.requestCache[t]) return this.requestCache[t];
                    if (t)
                        if (/^device-cmyk/.test(t)) {
                            this.requestCache[t] = n;
                            var r = /device-cmyk\(([^,]+),\s*([^,]+),\s*([^,]+),\s*([^,\)]+)/.exec(t).slice(1).map(parseFloat),
                                a = i(r, 4),
                                o = a[0],
                                s = a[1],
                                l = a[2],
                                u = a[3];
                            e.cmyk2rgb(o, s, l, u).done(function (e) {
                                var t = i(e, 3),
                                    r = t[0],
                                    a = t[1],
                                    o = t[2],
                                    s = "rgb(" + Math.round(255 * r) + ", " + Math.round(255 * a) + ", " + Math.round(255 * o) + ")";
                                n.resolve(s)
                            })
                        } else n.resolve(t);
                    else n.resolve("#fff");
                    return n.promise()
                }
            }, {
                key: "saveBox",
                value: function (e, t) {
                    return u("/box", {
                        inventory: JSON.stringify(e),
                        faces: JSON.stringify(t)
                    })
                }
            }, {
                key: "getVendorReportData",
                value: function (e, t, n) {
                    var i = function (e, t) {
                            return r({}, e, function (e, t, n) {
                                return t in e ? Object.defineProperty(e, t, {
                                    value: n,
                                    enumerable: !0,
                                    configurable: !0,
                                    writable: !0
                                }) : e[t] = n, e
                            }({}, t, !0))
                        },
                        a = e.reduce(i, {}),
                        o = t.reduce(i, {});
                    return u(n ? "/api/tools/vendor_report/" + n + "/capacity" : "/api/tools/vendor_report/capacity", {
                        converting: o,
                        printing: a
                    })
                }
            }, {
                key: "submitRestock",
                value: function (e) {
                    var t = Object.entries({
                        id: e.orderId,
                        quantity: e.quantity,
                        product_id: e.boxId,
                        item_printing_method: e.itemPrintingMethod,
                        source: "web_restock_order"
                    }).map(function (e) {
                        return e[0] + "=" + e[1]
                    }).join("&");
                    window.location.href = "/checkout/" + e.orderId + "/edit?" + t
                }
            }, {
                key: "submitCustomQuote",
                value: function (e, t, n, r, i, a, s) {
                    var l = e.source,
                        u = n.desiredDeliveryDate,
                        c = n.note,
                        d = new FormData;
                    return Object.keys(e).forEach(function (t) {
                        d.append("customer_info[" + t + "]", e[t])
                    }), Object.keys(t).forEach(function (e) {
                        d.append("deal[" + e + "]", t[e])
                    }), d.append("deal[note]", c), d.append("deal[desired_delivery_date]", u), d.append("deal[snapshot_url]", a), s.forEach(function (e) {
                        d.append("files[]", e)
                    }), d.append("source", l), d.append("inventory_id", i), d.append("is_blank", r), new Promise(function (e, t) {
                        (0, o.post)("/api/v1/product/design/custom_quote", d).then(function (t) {
                            e(t.data.orderId)
                        }).catch(function (e) {
                            switch (e.response.status) {
                                case 400:
                                    t("bad params");
                                    break;
                                default:
                                    t("unknown error")
                            }
                        })
                    })
                }
            }]), e
        }();
        t.default = d
    },
    61: function (e, t, n) {
        "use strict";

        function r(e) {
            var t = e.name,
                n = e.category,
                r = e.position,
                i = e.quantity,
                a = e.price,
                o = e.variant,
                s = e.dimension2;
            ga("ec:addProduct", {
                name: t,
                category: n,
                position: r,
                quantity: i,
                price: a,
                variant: o,
                dimension2: s
            })
        }

        function i(e) {
            var t = e.unit_price.toFixed(2);
            if (e.box) {
                var n = e.box,
                    i = n.length,
                    a = n.width,
                    o = n.depth,
                    s = n.material_name,
                    l = n.type,
                    u = n.ink_coverage,
                    c = i + " x " + a + " x " + o,
                    d = s;
                r({
                    name: c,
                    category: l + "/" + c + "/" + d,
                    position: e.quantity,
                    quantity: e.quantity,
                    price: t,
                    variant: d,
                    dimension2: u
                })
            } else r({
                name: "Custom Order",
                category: "Custom Order",
                position: e.quantity,
                quantity: e.quantity,
                price: t
            })
        }

        function a(e) {
            ga("ec:addPromo", {
                id: e,
                name: e
            })
        }

        function o(e, t) {
            ga("ec:setAction", e, t)
        }

        function s() {
            ga("send", "pageview")
        }

        function l(e, t, n, r) {
            ga("send", {
                hitType: "event",
                eventCategory: e,
                eventAction: t,
                eventLabel: n,
                eventValue: r
            })
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.addProduct = r, t.addProductForOrderItem = i, t.addPromotion = a, t.sendViewCheckoutEventAnalytics = function (e, t) {
            e.forEach(i), t && a(t);
            o("checkout", {
                step: 1
            }), l("checkout", "pageView"), s()
        }, t.sendShippingRatesRecievedAnalytics = function (e, t, n, r) {
            o("shippingRatesRecieved", {
                id: e,
                subtotal: t,
                rates: r,
                address: n
            })
        }, t.sendPurchaseEventAnalytics = function (e, t, n, r, a) {
            r.forEach(i), o("purchase", {
                id: e,
                revenue: t,
                shipping: n,
                coupon: a
            }), ga("send", "event", "button", "click", "purchase"), s()
        }, t.customQuoteModalTriggered = function () {
            ga("send", {
                hitType: "event",
                eventCategory: "designerCustomQuoteModal",
                eventAction: "designerCustomQuoteModalTriggered",
                eventLabel: "triggered: designer custom quote modal",
                eventValue: void 0
            })
        }, t.sendCustomQuoteRequest = function () {
            ga("send", {
                hitType: "event",
                eventCategory: "customQuote",
                eventAction: "customQuoteRequest",
                eventLabel: "sent from: " + window.location.pathname,
                eventValue: void 0
            })
        }, t.setAction = o, t.emitPageview = s, t.emitCheckoutClick = function () {
            ga("send", "event", "button", "click", "checkout")
        }, t.reportGuestCheckout = function () {
            l("checkout", "signInDecision", "proceedAsGuest")
        }, t.reportSignInAtCheckout = function () {
            l("checkout", "signInDecision", "signInBefore")
        }, t.emitDesignChange = function () {
            l("design", "change")
        }, t.emitMoreReviewsClick = function () {
            l("reviews", "more")
        }, t.interactionInstantQuote = function (e) {
            ga("send", {
                hitType: "event",
                eventCategory: "instantQuote",
                eventAction: "changed quote for " + e,
                eventLabel: "instant quote for " + e,
                eventValue: void 0
            })
        }
    },
    77: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.notyAlert = function (e) {
            return noty({
                text: e,
                type: "error"
            })
        }, t.customNotyAlert = function (e, t, n, r, i, a) {
            return noty({
                text: e,
                type: t,
                layout: n,
                modal: r,
                timeout: i,
                template: a
            })
        }, t.dielineNotyAlert = function (e) {
            return noty({
                text: e,
                type: "error",
                maxVisible: "1",
                closeWith: ["button", "click"],
                timeout: 2e3
            })
        }
    }
});
//# sourceMappingURL=./packlane_web.product.product.js-451a65622c159c70b9be41a1495c46d7.map
