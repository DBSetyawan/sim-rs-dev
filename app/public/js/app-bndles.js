! function (e) {
    function t(t) {
        for (var o, a, u = t[0], c = t[1], l = t[2], d = 0, f = []; d < u.length; d++) a = u[d], r[a] && f.push(r[a][0]), r[a] = 0;
        for (o in c) Object.prototype.hasOwnProperty.call(c, o) && (e[o] = c[o]);
        for (s && s(t); f.length;) f.shift()();
        return i.push.apply(i, l || []), n()
    }

    function n() {
        for (var e, t = 0; t < i.length; t++) {
            for (var n = i[t], o = !0, u = 1; u < n.length; u++) {
                var c = n[u];
                0 !== r[c] && (o = !1)
            }
            o && (i.splice(t--, 1), e = a(a.s = n[0]))
        }
        return e
    }
    var o = {},
        r = {
            1: 0
        },
        i = [];

    function a(t) {
        if (o[t]) return o[t].exports;
        var n = o[t] = {
            i: t,
            l: !1,
            exports: {}
        };
    }
    a.m = e, a.c = o, a.d = function (e, t, n) {
        a.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, a.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, a.t = function (e, t) {
        if (1 & t && (e = a(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (a.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var o in e) a.d(n, o, function (t) {
                return e[t]
            }.bind(null, o));
        return n
    }, a.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return a.d(t, "a", t), t
    }, a.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, a.p = "";
    var u = window.webpackJsonp = window.webpackJsonp || [],
        c = u.push.bind(u);
    u.push = t, u = u.slice();
    for (var l = 0; l < u.length; l++) t(u[l]);
    var s = c;
    i.push([908, 0]), n()
}({
    106: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var o = Object.assign || function (e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (e[o] = n[o])
                }
                return e
            },
            r = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var o = t[n];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function (t, n, o) {
                    return n && e(t.prototype, n), o && e(t, o), t
                }
            }(),
            i = function () {
                return function (e, t) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e)) return function (e, t) {
                        var n = [],
                            o = !0,
                            r = !1,
                            i = void 0;
                        try {
                            for (var a, u = e[Symbol.iterator](); !(o = (a = u.next()).done) && (n.push(a.value), !t || n.length !== t); o = !0);
                        } catch (e) {
                            r = !0, i = e
                        } finally {
                            try {
                                !o && u.return && u.return()
                            } finally {
                                if (r) throw i
                            }
                        }
                        return n
                    }(e, t);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }(),
            a = n(0),
            u = s(a),
            c = s(n(1)),
            l = s(n(65));

        function s(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var d = {
                container: {
                    color: "#ffffff",
                    display: "flex",
                    fontWeight: 900,
                    position: "fixed",
                    textAlign: "center",
                    top: 0,
                    width: "100%",
                    zIndex: 100
                },
                childrenContainer: {
                    flex: 1
                },
                closeButton: {
                    borderRadius: "0.25rem",
                    color: "#a7adcb",
                    cursor: "pointer",
                    fontSize: "26px",
                    marginRight: window.matchMedia("(max-width: 640px)").matches ? "4px" : "16px",
                    textDecoration: "none",
                    top: 0
                }
            },
            f = function (e) {
                var t = document.getElementsByTagName("header"),
                    n = i(t, 1)[0];
                if (!n) {
                    var o = document.getElementsByClassName("dashboard__top-bar");
                    n = i(o, 1)[0]
                }
                n.setAttribute("style", "margin-top: " + e)
            },
            p = function (e) {
                function t(e) {
                    ! function (e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    }(this, t);
                    var n = function (e, t) {
                        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                        return !t || "object" != typeof t && "function" != typeof t ? e : t
                    }(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                    return n.state = {
                        showing: !0
                    }, n
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
                }(t, a.Component), r(t, [{
                    key: "componentDidMount",
                    value: function () {
                        this.shouldShow() && f(this.props.height)
                    }
                }, {
                    key: "shouldShow",
                    value: function () {
                        var e = this.props.announcementId;
                        return this.state.showing && ! function (e) {
                            return "NO_ANNOUNCEMENT_ID" !== e && l.default.get(e, "ANNOUNCEMENT_CLOSED")
                        }(e)
                    }
                }, {
                    key: "handleXClick",
                    value: function () {
                        var e = this.props.announcementId;
                        this.setState({
                                showing: !1
                            }),
                            function (e) {
                                "NO_ANNOUNCEMENT_ID" !== e && l.default.set(e, "ANNOUNCEMENT_CLOSED")
                            }(e), f("0px")
                    }
                }, {
                    key: "render",
                    value: function () {
                        if (this.shouldShow()) {
                            var e = this.props,
                                t = e.children,
                                n = e.height,
                                r = e.background;
                            return u.default.createElement("div", {
                                style: o({}, d.container, {
                                    height: n,
                                    background: r
                                })
                            }, u.default.createElement("div", {
                                style: d.childrenContainer
                            }, t), u.default.createElement("button", {
                                style: d.closeButton,
                                onClick: this.handleXClick.bind(this),
                                type: "button"
                            }, "Ã—"))
                        }
                        return null
                    }
                }]), t
            }();
        p.propTypes = {
            announcementId: c.default.string,
            children: c.default.node,
            height: c.default.string,
            background: c.default.string
        }, p.defaultProps = {
            announcementId: "NO_ANNOUNCEMENT_ID",
            children: u.default.createElement("p", null, "Here is an announcement!"),
            height: "50px",
            background: "#21282a"
        }, t.default = p
    },
    1127: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        t.Cookie = {
            get: function (e) {
                return e && decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null
            },
            set: function (e, t, n, o, r, i) {
                if (!e || /^(?:expires|max\-age|path|domain|secure)$/i.test(e)) return !1;
                var a = "";
                if (n) switch (n.constructor) {
                    case Number:
                        a = n === 1 / 0 ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + n;
                        break;
                    case String:
                        a = "; expires=" + n;
                        break;
                    case Date:
                        a = "; expires=" + n.toUTCString()
                }
                return document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + a + (r ? "; domain=" + r : "") + (o ? "; path=" + o : "") + (i ? "; secure" : ""), !0
            },
            delete: function (e, t, n) {
                return !!this.hasItem(e) && (document.cookie = encodeURIComponent(e) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (n ? "; domain=" + n : "") + (t ? "; path=" + t : ""), !0)
            },
            exists: function (e) {
                return !(!e || /^(?:expires|max\-age|path|domain|secure)$/i.test(e)) && new RegExp("(?:^|;\\s*)" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=").test(document.cookie)
            },
            keys: function () {
                for (var e = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/), t = e.length, n = 0; n < t; n++) e[n] = decodeURIComponent(e[n]);
                return e
            }
        }
    },
    1128: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var o = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var o = t[n];
                    o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                }
            }
            return function (t, n, o) {
                return n && e(t.prototype, n), o && e(t, o), t
            }
        }();
        var r = function () {
            function e(t) {
                var n = this;
                ! function (e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e), this.element = t, this.img = t.querySelector("img") || t, this.src = "", this.img.addEventListener("load", function () {
                    n.update()
                }), this.img.complete && this.update()
            }
            return o(e, [{
                key: "update",
                value: function () {
                    var e = this.img,
                        t = e.currentSrc,
                        n = e.src,
                        o = void 0 !== t ? t : n;
                    this.src !== o && (this.src = o, this.element.style.backgroundImage = 'url("' + this.src + '")')
                }
            }], [{
                key: "init",
                value: function () {
                    document.querySelectorAll("[data-responsive-background-image]").forEach(function (t) {
                        new e(t)
                    })
                }
            }]), e
        }();
        t.default = r
    },
    1135: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        })
    },
    1136: function (e, t, n) {},
    223: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.renderAnnouncementBar = function () {
            l(i.default, "MyAnnouncementBarRoot")
        }, t.renderMaintenanceAnnouncementBar = function () {
            l(a.default, "MaintenanceAnnouncementBarRoot")
        }, t.renderHolidaysAnnouncementBar = function () {
            l(u.default, "HolidaysAnnouncementBarRoot")
        };
        var o = c(n(0)),
            r = n(15),
            i = c(n(106)),
            a = c(n(224)),
            u = c(n(225));

        function c(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }

        function l(e, t) {
            var n = document.createElement("div");
            n.id = t, $(document.body).append(n), (0, r.render)(o.default.createElement(e, null), n)
        }
    },
    224: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var o = i(n(0)),
            r = i(n(106));

        function i(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        t.default = function () {
            return o.default.createElement(r.default, null, o.default.createElement("p", null, "We are performing maintenance and some features will be unavailable for 1 hour"))
        }
    },
    225: function (e, t, n) {
        "use strict";
        var o = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const r = o(n(0)),
            i = o(n(106));
        t.default = (() => r.default.createElement(i.default, {
            background: "rgb(46, 70, 157)"
        }, r.default.createElement("div", {
            className: "holidays-container"
        }, r.default.createElement("div", {
            className: "holidays-container"
        }, r.default.createElement("svg", {
            width: "35px",
            height: "35px",
            viewBox: "0 0 44 44",
            version: "1.1"
        }, r.default.createElement("g", {
            id: "Page-1",
            stroke: "none",
            strokeWidth: "1",
            fill: "none",
            fillRule: "evenodd",
            strokeLinecap: "round",
            strokeLinejoin: "round"
        }, r.default.createElement("g", {
            id: "depth-icon",
            transform: "translate(1.000000, 1.000000)",
            stroke: "#98FF98",
            strokeWidth: "2"
        }, r.default.createElement("polygon", {
            id: "Path",
            points: "21.0703 0 0.15527 8.33823 21.0703 16.6765 41.9863 8.33823"
        }), r.default.createElement("polygon", {
            id: "Path",
            points: "0.15527 8.49268 0.15527 33.5074 21.0703 41.8456 21.0703 16.8309"
        }), r.default.createElement("polygon", {
            id: "Path",
            points: "41.9863 8.33838 41.9863 33.3531 21.0703 41.6913 21.0703 16.6766"
        }), r.default.createElement("line", {
            x1: "32.5732",
            y1: "12.0907",
            x2: "11.6582",
            y2: "3.75244",
            id: "Path"
        })))), r.default.createElement("p", {
            className: "holidays-text"
        }, r.default.createElement("span", {
            className: "holidays-text-normal"
        }, "The holidays are almost here! Plan ahead and follow", " ", r.default.createElement("a", {
            href: "https://packlane.com/holidays",
            className: "holidays-link"
        }, "these guidelines"), " ", "to get your order printed and shipped in plenty of time."), r.default.createElement("span", {
            className: "holidays-text-medium"
        }, "Heads up! Turnaround times have increased. Review our", " ", r.default.createElement("a", {
            href: "https://packlane.com/holidays",
            className: "holidays-link"
        }, "Holiday Ordering Schedule"), "."), r.default.createElement("span", {
            className: "holidays-text-small"
        }, "Review our", " ", r.default.createElement("a", {
            href: "https://packlane.com/holidays",
            className: "holidays-link"
        }, "Holiday Ordering Schedule"), "."))))))
    },
    281: function (e, t, n) {
        "use strict";

        function o() {}

        function r(e, t, n) {
            var o = "[EVENTS][FB] " + e + " " + t;
            n ? console.log(o + " payload: ", n) : console.log(o)
        }

        function i(e, t) {
            ! function (e, t, n) {
                (window.PACKLANE.isProduction ? window.fbq || o : r)(e, t, n)
            }("track", e, t)
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.viewContent = function () {
            i("ViewContent")
        }, t.initiateCheckout = function () {
            i("InitiateCheckout")
        }, t.reportPurchase = function (e) {
            i("Purchase", {
                value: e,
                currency: "USD"
            })
        }
    },
    364: function (e, t, n) {
        "use strict";

        function o() {}

        function r(e, t, n) {
            var o = "[EVENTS][PINTEREST] " + e + " " + t;
            n ? console.log(o + " payload: ", n) : console.log(o)
        }

        function i(e, t, n) {
            return (window.PACKLANE.isProduction ? window.pintrk || o : r)(e, t, n)
        }

        function a(e, t) {
            i("track", e, t)
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.setup = function (e, t) {
            if (!window.pintrk) {
                window.pintrk = function () {
                    window.pintrk.queue.push(Array.prototype.slice.call(arguments))
                };
                var n = window.pintrk;
                n.queue = [], n.version = "3.0";
                var o = document.createElement("script");
                o.async = !0, o.src = "https://s.pinimg.com/ct/core.js";
                var r = document.getElementsByTagName("script")[0];
                r.parentNode.insertBefore(o, r)
            }! function (e, t) {
                i("load", e, {
                    em: t
                })
            }(e, t)
        }, t.track = a, t.checkout = function (e) {
            a("checkout", {
                value: e,
                order_quantity: 1,
                currency: "USD",
                order_id: window.PACKLANE.orderId
            })
        }
    },
    365: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const o = n(223),
            r = !1;
        t.maybeMaintenanceWindow = function () {
            r && o.renderMaintenanceAnnouncementBar()
        }
    },
    531: function (e, t, n) {
        "use strict";
        var o = document.getElementById("instagramSlider__controls--next"),
            r = document.getElementById("instagramSlider__controls--prev"),
            i = document.getElementById("instagram-slides");
        null != o && o.addEventListener("click", function () {
            if (null != i) {
                var e = i.children;
                if (null != e) {
                    var t = e[0];
                    i.removeChild(t), i.appendChild(t)
                }
            }
        }), null != r && r.addEventListener("click", function () {
            if (null != i) {
                var e = i.children;
                if (null != e) {
                    var t = e[e.length - 1];
                    i.removeChild(t), i.insertBefore(t, e[0])
                }
            }
        })
    },
    65: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var o = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var o = t[n];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function (t, n, o) {
                    return n && e(t.prototype, n), o && e(t, o), t
                }
            }(),
            r = function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }(n(164));
        var i = function () {
            function e() {
                ! function (e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            return o(e, null, [{
                key: "get",
                value: function (e) {
                    return r.default.get(e)
                }
            }, {
                key: "set",
                value: function (e, t) {
                    r.default.set(e, t)
                }
            }, {
                key: "getItem",
                value: function (e) {
                    return r.default.get(e)
                }
            }, {
                key: "setItem",
                value: function (e, t) {
                    r.default.set(e, t)
                }
            }, {
                key: "removeItem",
                value: function (e) {
                    r.default.remove(e)
                }
            }, {
                key: "clear",
                value: function () {
                    r.default.clear()
                }
            }]), e
        }();
        t.default = i
    },
    87: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var o = Object.assign || function (e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (e[o] = n[o])
                }
                return e
            },
            r = function () {
                return function (e, t) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e)) return function (e, t) {
                        var n = [],
                            o = !0,
                            r = !1,
                            i = void 0;
                        try {
                            for (var a, u = e[Symbol.iterator](); !(o = (a = u.next()).done) && (n.push(a.value), !t || n.length !== t); o = !0);
                        } catch (e) {
                            r = !0, i = e
                        } finally {
                            try {
                                !o && u.return && u.return()
                            } finally {
                                if (r) throw i
                            }
                        }
                        return n
                    }(e, t);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }();
        t.on = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "true";
            return a.default.get("" + c + e) === t
        }, t.init = function () {
            var e = function () {
                var e = window.location.search.replace(/^\?/, "").split("&");
                return i.default.reduce(e, function (e, t) {
                    var n = t.split("="),
                        a = r(n, 2),
                        u = a[0],
                        c = a[1];
                    return i.default.isEmpty(u) ? e : o({}, e, function (e, t, n) {
                        t in e ? Object.defineProperty(e, t, {
                            value: n,
                            enumerable: !0,
                            configurable: !0,
                            writable: !0
                        }) : e[t] = n;
                        return e
                    }({}, u, c))
                }, {})
            }();
            i.default.each(e, function (e, t) {
                t.substr(0, 3) === c && a.default.set(t, e)
            })
        };
        var i = u(n(9)),
            a = u(n(65));

        function u(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var c = "ff:"
    },
    908: function (e, t, n) {
        "use strict";
        n(909);
        var o = v(n(1111)),
            r = v(n(9)),
            i = v(n(1112)),
            a = v(n(1114)),
            u = v(n(1115)),
            c = v(n(1116)),
            l = h(n(87)),
            s = n(1127),
            d = v(n(1128)),
            f = h(n(281)),
            p = h(n(364)),
            m = n(365);

        function h(e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e)
                for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        }

        function v(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }

        function y(e) {
            return !r.default.isNull(e) && !r.default.isUndefined(e)
        }

        function g() {
            return $(document.body).data("user")
        }

        function w() {
            var e = g();
            p.setup("2618895189805", e)
        }

        function b() {
            f.viewContent()
        }

        function _() {
            (new Image).src = "//hello.myfonts.net/count/3078f0"
        }

        function E() {
            $(".mobile-dropdown-js").on("click", function (e) {
                void 0 === $(e.target).attr("href") && $(window).width() < 1200 && (e.preventDefault(), $("ul.nav-dropdown").removeClass("show-dropdown-js"), $(e.currentTarget).find("ul.nav-dropdown").addClass("show-dropdown-js"))
            })
        }

        function k() {
            var e = this;
            /^((?!chrome|android).)*safari/i.test(navigator.userAgent) && $(document.body).on("submit", "form", function (t) {
                t.target.checkValidity() || (t.preventDefault(), $(e).children().each(function () {
                    $(e).is(":invalid") && $(e).addClass("invalid")
                }))
            })
        }

        function O() {
            $.noty.defaults = {
                layout: "center",
                theme: "relax",
                type: "alert",
                text: "",
                dismissQueue: !0,
                template: '<div class="noty_message">\n      <span class="noty_text"></span>\n      <div class="noty_close"></div>\n    </div>',
                animation: {
                    open: {
                        height: "toggle"
                    },
                    close: {
                        height: "toggle"
                    },
                    easing: "swing",
                    speed: 300
                },
                timeout: !1,
                force: !1,
                modal: !1,
                maxVisible: 5,
                killer: !1,
                closeWith: ["click"],
                callback: {
                    onShow: function () {},
                    afterShow: function () {},
                    onClose: function () {},
                    afterClose: function () {},
                    onCloseClick: function () {}
                },
                buttons: !1
            }
        }

        function C() {
            if (window.PACKLANE.isProduction) {
                var e = e || "pLHCMh";
                window.__klKey = e, (0, o.default)(["https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=" + e], {
                    success: function () {},
                    error: function () {
                        Rollbar.warning("KlaviyoSignupForm failed to load")
                    }
                })
            }
        }

        function j() {
            (0, o.default)(["//www.klaviyo.com/media/js/public/klaviyo_subscribe.js"], {
                success: function () {
                    KlaviyoSubscribe.attachToForms("#email_signup", {
                        hide_form_on_success: !0
                    }), window.KlaviyoSubscribe.log = function () {}
                },
                error: function () {
                    Rollbar.warning("KlaviyoSubscribe failed to load")
                }
            })
        }

        function N() {
            (0, o.default)(["//cdn.sweettooth.io/assets/storefront.js"], "smile_io")
        }

        function P() {
            window.location.pathname.startsWith("/tools/") || window.PACKLANE.barePage || (0, o.default)(["https://static.zdassets.com/ekr/snippet.js?key=55a88ba2-f1d5-4762-9825-65dbdcc38989"], {
                error: function () {
                    Rollbar.warning("ZendeskWidget failed to load")
                },
                before: function (e, t) {
                    t.id = "ze-snippet"
                }
            })
        }

        function x() {
            var e = document.querySelector(".demo-video");
            if (e) {
                var t = e.play();
                void 0 !== t && t.catch(function () {
                    e.setAttribute("controls", "")
                })
            }
        }

        function A() {
            if ($.ajaxSetup({
                    beforeSend: function (e, t) {
                        /^(GET|HEAD|OPTIONS|TRACE)$/i.test(t.type) || this.crossDomain || e.setRequestHeader("x-csrf-token", $(document.body).data("csrf"))
                    }
                }), window.Promise || (window.Promise = i.default), window.userId = g(), window.ga = window.ga || function () {
                    (ga.q = ga.q || []).push(arguments)
                }, ga.l = +new Date, ga("create", "UA-57174616-1", "auto", {
                    userId: window.userId
                }), ga("set", "transport", "beacon"), ga("require", "ec"), ga("require", "linkid"), setTimeout(function () {
                    ga("send", "pageview")
                }, 100), "undefined" != typeof Rollbar ? Rollbar.configure({
                    autoInstrument: !0,
                    payload: {
                        person: {
                            id: window.userId
                        },
                        user_id: window.userId,
                        order_id: window.PACKLANE.orderId,
                        inventory_id: window.PACKLANE.inventoryId,
                        client: {
                            javascript: {
                                source_map_enabled: !0,
                                code_version: window.PACKLANE.version,
                                guess_uncaught_frames: !0
                            }
                        }
                    }
                }) : window.Rollbar = {
                    error: function (e, t) {
                        return console.error(e, t)
                    },
                    warn: function (e, t) {
                        return console.warn(e, t)
                    }
                }, !window.PACKLANE_LEAN_AND_MEAN) {
                window.lazyLoad = new a.default({
                        elements_selector: ".lazy"
                    }),
                    function () {
                        var e = document.getElementById("hamburger-js"),
                            t = document.getElementById("hamburger-close-js"),
                            o = document.getElementById("design-box-link-js"),
                            r = document.getElementById("main-header-js"),
                            i = document.getElementById("nav-bar-js");

                        function a() {
                            i.classList.remove("nav-bar--open"), r.classList.remove("hamburger-open")
                        }
                        e && t && (e.addEventListener("click", function () {
                            i.classList.add("nav-bar--open"), r.classList.add("hamburger-open")
                        }), t.addEventListener("click", a), o.addEventListener("click", a)), n(531)
                    }();
                var e = function (e, t) {
                    e.forEach(function (e) {
                        setTimeout(function () {
                            e()
                        }, t)
                    })
                };
                window.addEventListener("load", function () {
                    var t = [E, O, k, _, b, w, m.maybeMaintenanceWindow, x];
                    e(t, 50)
                }), window.addEventListener("load", function () {
                    e([j, C, N, P], 1e3)
                })
            }
        }
        n(1135), n(1136), d.default.init(), l.init(), console.clear = function () {}, new u.default({
                preprocessor: function (e, t) {
                    if ("user_agent" === e) {
                        var n = new c.default(t);
                        return n.getOS().name + " " + n.getBrowser().name
                    }
                    return t
                }
            }).get(function (e) {
                y(e) && s.Cookie.set("puid", e);
                var t = window.PACKLANE.campaign;
                y(t) && s.Cookie.set("pcampaign", t)
            }),
            function () {
                var e = document.querySelector(".loader-animation");
                if (e) {
                    var t = function () {
                        $(e).fadeOut()
                    };
                    document.addEventListener("packlane:app_loaded", t, !1), setTimeout(t, 2e3)
                }
            }(),
            function () {
                var e = document.querySelector(".customize-message"),
                    t = document.querySelector(".close-customize-message");
                e && t.addEventListener("click", function () {
                    $(e).fadeOut()
                })
            }(), document.addEventListener("DOMContentLoaded", function () {
                A(), window.dispatchEvent(new Event("commonInitComplete"))
            });
        var I = 0,
            S = document.getElementById("main-header-js");
        null !== S && window.addEventListener("scroll", function () {
            window.scrollY > 0 ? 0 === I && S.classList.add("header--scrolled") : S.classList.remove("header--scrolled"), I = window.scrollY
        }), n(531)
    }
});
//# sourceMappingURL=./app.bundle.js-c7a9b0376de78af2964ec6bbee394b2d.map
