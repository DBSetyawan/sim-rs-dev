! function (e) {
    function n(n) {
        for (var o, a, u = n[0], c = n[1], l = n[2], d = 0, f = []; d < u.length; d++) a = u[d], r[a] && f.push(r[a][0]), r[a] = 0;
        for (o in c) Object.prototype.hasOwnProperty.call(c, o) && (e[o] = c[o]);
        for (s && s(n); f.length;) f.shift()();
        return i.push.apply(i, l || []), t()
    }

    function t() {
        for (var e, n = 0; n < i.length; n++) {
            for (var t = i[n], o = !0, u = 1; u < t.length; u++) {
                var c = t[u];
                0 !== r[c] && (o = !1)
            }
            o && (i.splice(n--, 1), e = a(a.s = t[0]))
        }
        return e
    }
    var o = {},
        r = {
            1: 0
        },
        i = [];

    function a(n) {
        if (o[n]) return o[n].exports;
        var t = o[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(t.exports, t, t.exports, a), t.l = !0, t.exports
    }
    a.m = e, a.c = o, a.d = function (e, n, t) {
        a.o(e, n) || Object.defineProperty(e, n, {
            enumerable: !0,
            get: t
        })
    }, a.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, a.t = function (e, n) {
        if (1 & n && (e = a(e)), 8 & n) return e;
        if (4 & n && "object" == typeof e && e && e.__esModule) return e;
        var t = Object.create(null);
        if (a.r(t), Object.defineProperty(t, "default", {
                enumerable: !0,
                value: e
            }), 2 & n && "string" != typeof e)
            for (var o in e) a.d(t, o, function (n) {
                return e[n]
            }.bind(null, o));
        return t
    }, a.n = function (e) {
        var n = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return a.d(n, "a", n), n
    }, a.o = function (e, n) {
        return Object.prototype.hasOwnProperty.call(e, n)
    }, a.p = "";
    var u = window.webpackJsonp = window.webpackJsonp || [],
        c = u.push.bind(u);
    u.push = n, u = u.slice();
    for (var l = 0; l < u.length; l++) n(u[l]);
    var s = c;
    i.push([907, 0]), t()
}({
    1126: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        n.Cookie = {
            get: function (e) {
                return e && decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null
            },
            set: function (e, n, t, o, r, i) {
                if (!e || /^(?:expires|max\-age|path|domain|secure)$/i.test(e)) return !1;
                var a = "";
                if (t) switch (t.constructor) {
                    case Number:
                        a = t === 1 / 0 ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + t;
                        break;
                    case String:
                        a = "; expires=" + t;
                        break;
                    case Date:
                        a = "; expires=" + t.toUTCString()
                }
                return document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(n) + a + (r ? "; domain=" + r : "") + (o ? "; path=" + o : "") + (i ? "; secure" : ""), !0
            },
            delete: function (e, n, t) {
                return !!this.hasItem(e) && (document.cookie = encodeURIComponent(e) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (t ? "; domain=" + t : "") + (n ? "; path=" + n : ""), !0)
            },
            exists: function (e) {
                return !(!e || /^(?:expires|max\-age|path|domain|secure)$/i.test(e)) && new RegExp("(?:^|;\\s*)" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=").test(document.cookie)
            },
            keys: function () {
                for (var e = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/), n = e.length, t = 0; t < n; t++) e[t] = decodeURIComponent(e[t]);
                return e
            }
        }
    },
    1127: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var o = function () {
            function e(e, n) {
                for (var t = 0; t < n.length; t++) {
                    var o = n[t];
                    o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                }
            }
            return function (n, t, o) {
                return t && e(n.prototype, t), o && e(n, o), n
            }
        }();
        var r = function () {
            function e(n) {
                var t = this;
                ! function (e, n) {
                    if (!(e instanceof n)) throw new TypeError("Cannot call a class as a function")
                }(this, e), this.element = n, this.img = n.querySelector("img") || n, this.src = "", this.img.addEventListener("load", function () {
                    t.update()
                }), this.img.complete && this.update()
            }
            return o(e, [{
                key: "update",
                value: function () {
                    var e = this.img,
                        n = e.currentSrc,
                        t = e.src,
                        o = void 0 !== n ? n : t;
                    this.src !== o && (this.src = o, this.element.style.backgroundImage = 'url("' + this.src + '")')
                }
            }], [{
                key: "init",
                value: function () {
                    document.querySelectorAll("[data-responsive-background-image]").forEach(function (n) {
                        new e(n)
                    })
                }
            }]), e
        }();
        n.default = r
    },
    1134: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        })
    },
    1135: function (e, n, t) {},
    222: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var o = Object.assign || function (e) {
                for (var n = 1; n < arguments.length; n++) {
                    var t = arguments[n];
                    for (var o in t) Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o])
                }
                return e
            },
            r = function () {
                function e(e, n) {
                    for (var t = 0; t < n.length; t++) {
                        var o = n[t];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function (n, t, o) {
                    return t && e(n.prototype, t), o && e(n, o), n
                }
            }(),
            i = function () {
                return function (e, n) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e)) return function (e, n) {
                        var t = [],
                            o = !0,
                            r = !1,
                            i = void 0;
                        try {
                            for (var a, u = e[Symbol.iterator](); !(o = (a = u.next()).done) && (t.push(a.value), !n || t.length !== n); o = !0);
                        } catch (e) {
                            r = !0, i = e
                        } finally {
                            try {
                                !o && u.return && u.return()
                            } finally {
                                if (r) throw i
                            }
                        }
                        return t
                    }(e, n);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }(),
            a = t(0),
            u = s(a),
            c = s(t(1)),
            l = s(t(73));

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
                var n = document.getElementsByTagName("header"),
                    t = i(n, 1)[0];
                if (!t) {
                    var o = document.getElementsByClassName("dashboard__top-bar");
                    t = i(o, 1)[0]
                }
                t.setAttribute("style", "margin-top: " + e)
            },
            p = function (e) {
                function n(e) {
                    ! function (e, n) {
                        if (!(e instanceof n)) throw new TypeError("Cannot call a class as a function")
                    }(this, n);
                    var t = function (e, n) {
                        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                        return !n || "object" != typeof n && "function" != typeof n ? e : n
                    }(this, (n.__proto__ || Object.getPrototypeOf(n)).call(this, e));
                    return t.state = {
                        showing: !0
                    }, t
                }
                return function (e, n) {
                    if ("function" != typeof n && null !== n) throw new TypeError("Super expression must either be null or a function, not " + typeof n);
                    e.prototype = Object.create(n && n.prototype, {
                        constructor: {
                            value: e,
                            enumerable: !1,
                            writable: !0,
                            configurable: !0
                        }
                    }), n && (Object.setPrototypeOf ? Object.setPrototypeOf(e, n) : e.__proto__ = n)
                }(n, a.Component), r(n, [{
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
                                n = e.children,
                                t = e.height,
                                r = e.background;
                            return u.default.createElement("div", {
                                style: o({}, d.container, {
                                    height: t,
                                    background: r
                                })
                            }, u.default.createElement("div", {
                                style: d.childrenContainer
                            }, n), u.default.createElement("button", {
                                style: d.closeButton,
                                onClick: this.handleXClick.bind(this),
                                type: "button"
                            }, "Ã—"))
                        }
                        return null
                    }
                }]), n
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
        }, n.default = p
    },
    278: function (e, n, t) {
        "use strict";

        function o() {}

        function r(e, n, t) {
            var o = "[EVENTS][FB] " + e + " " + n;
            t ? console.log(o + " payload: ", t) : console.log(o)
        }

        function i(e, n) {
            ! function (e, n, t) {
                (window.PACKLANE.isProduction ? window.fbq || o : r)(e, n, t)
            }("track", e, n)
        }
        Object.defineProperty(n, "__esModule", {
            value: !0
        }), n.viewContent = function () {
            i("ViewContent")
        }, n.initiateCheckout = function () {
            i("InitiateCheckout")
        }, n.reportPurchase = function (e) {
            i("Purchase", {
                value: e,
                currency: "USD"
            })
        }
    },
    361: function (e, n, t) {
        "use strict";

        function o() {}

        function r(e, n, t) {
            var o = "[EVENTS][PINTEREST] " + e + " " + n;
            t ? console.log(o + " payload: ", t) : console.log(o)
        }

        function i(e, n, t) {
            return (window.PACKLANE.isProduction ? window.pintrk || o : r)(e, n, t)
        }

        function a(e, n) {
            i("track", e, n)
        }
        Object.defineProperty(n, "__esModule", {
            value: !0
        }), n.setup = function (e, n) {
            if (!window.pintrk) {
                window.pintrk = function () {
                    window.pintrk.queue.push(Array.prototype.slice.call(arguments))
                };
                var t = window.pintrk;
                t.queue = [], t.version = "3.0";
                var o = document.createElement("script");
                o.async = !0, o.src = "https://s.pinimg.com/ct/core.js";
                var r = document.getElementsByTagName("script")[0];
                r.parentNode.insertBefore(o, r)
            }! function (e, n) {
                i("load", e, {
                    em: n
                })
            }(e, n)
        }, n.track = a, n.checkout = function (e) {
            a("checkout", {
                value: e,
                order_quantity: 1,
                currency: "USD",
                order_id: window.PACKLANE.orderId
            })
        }
    },
    362: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        const o = t(363),
            r = !1;
        n.maybeMaintenanceWindow = function () {
            r && o.renderMaintenanceAnnouncementBar()
        }
    },
    363: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        }), n.renderAnnouncementBar = function () {
            c(i.default, "MyAnnouncementBarRoot")
        }, n.renderMaintenanceAnnouncementBar = function () {
            c(a.default, "MaintenanceAnnouncementBarRoot")
        };
        var o = u(t(0)),
            r = t(17),
            i = u(t(222)),
            a = u(t(365));

        function u(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }

        function c(e, n) {
            var t = document.createElement("div");
            t.id = n, $(document.body).append(t), (0, r.render)(o.default.createElement(e, null), t)
        }
    },
    365: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var o = i(t(0)),
            r = i(t(222));

        function i(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        n.default = function () {
            return o.default.createElement(r.default, null, o.default.createElement("p", null, "We are performing maintenance and some features will be unavailable for 1 hour"))
        }
    },
    531: function (e, n, t) {
        "use strict";
        var o = document.getElementById("instagramSlider__controls--next"),
            r = document.getElementById("instagramSlider__controls--prev"),
            i = document.getElementById("instagram-slides");
        null != o && o.addEventListener("click", function () {
            if (null != i) {
                var e = i.children;
                if (null != e) {
                    var n = e[0];
                    i.removeChild(n), i.appendChild(n)
                }
            }
        }), null != r && r.addEventListener("click", function () {
            if (null != i) {
                var e = i.children;
                if (null != e) {
                    var n = e[e.length - 1];
                    i.removeChild(n), i.insertBefore(n, e[0])
                }
            }
        })
    },
    73: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var o = function () {
                function e(e, n) {
                    for (var t = 0; t < n.length; t++) {
                        var o = n[t];
                        o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
                    }
                }
                return function (n, t, o) {
                    return t && e(n.prototype, t), o && e(n, o), n
                }
            }(),
            r = function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }(t(188));
        var i = function () {
            function e() {
                ! function (e, n) {
                    if (!(e instanceof n)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            return o(e, null, [{
                key: "get",
                value: function (e) {
                    return r.default.get(e)
                }
            }, {
                key: "set",
                value: function (e, n) {
                    r.default.set(e, n)
                }
            }, {
                key: "getItem",
                value: function (e) {
                    return r.default.get(e)
                }
            }, {
                key: "setItem",
                value: function (e, n) {
                    r.default.set(e, n)
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
        n.default = i
    },
    87: function (e, n, t) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var o = Object.assign || function (e) {
                for (var n = 1; n < arguments.length; n++) {
                    var t = arguments[n];
                    for (var o in t) Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o])
                }
                return e
            },
            r = function () {
                return function (e, n) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e)) return function (e, n) {
                        var t = [],
                            o = !0,
                            r = !1,
                            i = void 0;
                        try {
                            for (var a, u = e[Symbol.iterator](); !(o = (a = u.next()).done) && (t.push(a.value), !n || t.length !== n); o = !0);
                        } catch (e) {
                            r = !0, i = e
                        } finally {
                            try {
                                !o && u.return && u.return()
                            } finally {
                                if (r) throw i
                            }
                        }
                        return t
                    }(e, n);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }();
        n.on = function (e) {
            var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "true";
            return a.default.get("" + c + e) === n
        }, n.init = function () {
            var e = function () {
                var e = window.location.search.replace(/^\?/, "").split("&");
                return i.default.reduce(e, function (e, n) {
                    var t = n.split("="),
                        a = r(t, 2),
                        u = a[0],
                        c = a[1];
                    return i.default.isEmpty(u) ? e : o({}, e, function (e, n, t) {
                        n in e ? Object.defineProperty(e, n, {
                            value: t,
                            enumerable: !0,
                            configurable: !0,
                            writable: !0
                        }) : e[n] = t;
                        return e
                    }({}, u, c))
                }, {})
            }();
            i.default.each(e, function (e, n) {
                n.substr(0, 3) === c && a.default.set(n, e)
            })
        };
        var i = u(t(9)),
            a = u(t(73));

        function u(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var c = "ff:"
    },
    907: function (e, n, t) {
        "use strict";
        t(908);
        var o = h(t(1110)),
            r = h(t(9)),
            i = h(t(1111)),
            a = h(t(1113)),
            u = h(t(1114)),
            c = h(t(1115)),
            l = v(t(87)),
            s = t(1126),
            d = h(t(1127)),
            f = v(t(278)),
            p = v(t(361)),
            m = t(362);

        function v(e) {
            if (e && e.__esModule) return e;
            var n = {};
            if (null != e)
                for (var t in e) Object.prototype.hasOwnProperty.call(e, t) && (n[t] = e[t]);
            return n.default = e, n
        }

        function h(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }

        function y(e) {
            return !r.default.isNull(e) && !r.default.isUndefined(e)
        }

        function w() {
            return $(document.body).data("user")
        }

        function g() {
            var e = w();
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
            /^((?!chrome|android).)*safari/i.test(navigator.userAgent) && $(document.body).on("submit", "form", function (n) {
                n.target.checkValidity() || (n.preventDefault(), $(e).children().each(function () {
                    $(e).is(":invalid") && $(e).addClass("invalid")
                }))
            })
        }

        function C() {
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

        function O() {
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

        function P() {
            (0, o.default)(["//cdn.sweettooth.io/assets/storefront.js"], "smile_io")
        }

        function A() {
            window.location.pathname.startsWith("/tools/") || window.PACKLANE.barePage || (0, o.default)(["https://static.zdassets.com/ekr/snippet.js?key=55a88ba2-f1d5-4762-9825-65dbdcc38989"], {
                error: function () {
                    Rollbar.warning("ZendeskWidget failed to load")
                },
                before: function (e, n) {
                    n.id = "ze-snippet"
                }
            })
        }

        function N() {
            var e = document.querySelector(".demo-video");
            if (e) {
                var n = e.play();
                void 0 !== n && n.catch(function () {
                    e.setAttribute("controls", "")
                })
            }
        }

        function I() {
            if ($.ajaxSetup({
                    beforeSend: function (e, n) {
                        /^(GET|HEAD|OPTIONS|TRACE)$/i.test(n.type) || this.crossDomain || e.setRequestHeader("x-csrf-token", $(document.body).data("csrf"))
                    }
                }), window.Promise || (window.Promise = i.default), window.userId = w(), window.ga = window.ga || function () {
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
                    error: function (e, n) {
                        return console.error(e, n)
                    },
                    warn: function (e, n) {
                        return console.warn(e, n)
                    }
                }, !window.PACKLANE_LEAN_AND_MEAN) {
                window.lazyLoad = new a.default({
                        elements_selector: ".lazy"
                    }),
                    function () {
                        var e = document.getElementById("hamburger-js"),
                            n = document.getElementById("hamburger-close-js"),
                            o = document.getElementById("design-box-link-js"),
                            r = document.getElementById("main-header-js"),
                            i = document.getElementById("nav-bar-js");

                        function a() {
                            i.classList.remove("nav-bar--open"), r.classList.remove("hamburger-open")
                        }
                        e && n && (e.addEventListener("click", function () {
                            i.classList.add("nav-bar--open"), r.classList.add("hamburger-open")
                        }), n.addEventListener("click", a), o.addEventListener("click", a)), t(531)
                    }();
                var e = function (e, n) {
                    e.forEach(function (e) {
                        setTimeout(function () {
                            e()
                        }, n)
                    })
                };
                window.addEventListener("load", function () {
                    var n = [E, C, k, _, b, g, m.maybeMaintenanceWindow, N];
                    e(n, 50)
                }), window.addEventListener("load", function () {
                    e([j, O, P, A], 1e3)
                })
            }
        }
        t(1134), t(1135), d.default.init(), l.init(), console.clear = function () {}, new u.default({
                preprocessor: function (e, n) {
                    if ("user_agent" === e) {
                        var t = new c.default(n);
                        return t.getOS().name + " " + t.getBrowser().name
                    }
                    return n
                }
            }).get(function (e) {
                y(e) && s.Cookie.set("puid", e);
                var n = window.PACKLANE.campaign;
                y(n) && s.Cookie.set("pcampaign", n)
            }),
            function () {
                var e = document.querySelector(".loader-animation");
                if (e) {
                    var n = function () {
                        $(e).fadeOut()
                    };
                    document.addEventListener("packlane:app_loaded", n, !1), setTimeout(n, 2e3)
                }
            }(),
            function () {
                var e = document.querySelector(".customize-message"),
                    n = document.querySelector(".close-customize-message");
                e && n.addEventListener("click", function () {
                    $(e).fadeOut()
                })
            }(), document.addEventListener("DOMContentLoaded", function () {
                I(), window.dispatchEvent(new Event("commonInitComplete"))
            });
        var S = 0,
            x = document.getElementById("main-header-js");
        null !== x && window.addEventListener("scroll", function () {
            window.scrollY > 0 ? 0 === S && x.classList.add("header--scrolled") : x.classList.remove("header--scrolled"), S = window.scrollY
        }), t(531)
    }
});
//# sourceMappingURL=./app.bundle.js-2a7f2bb806f37a9e73bf5bea6907f145.map
