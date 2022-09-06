function e(e, n) {
    for (var t in n) e[t] = n[t];
    return e
}
const n = function () {
    let e;
    try {
        e = window.localStorage
    } catch (e) {}
    return e || {}
}();
var t = "prod",
    r = {
        apiKey: "AIzaSyCyThSjI_ZUT1NwV9aQLtqklVcNj72gvo8",
        authDomain: "auth.web.dev",
        databaseURL: "https://web-dev-production-1.firebaseio.com",
        projectId: "web-dev-production-1",
        storageBucket: "web-dev-production-1.appspot.com",
        messagingSenderId: "1051961234704",
        appId: "1:1051961234704:web:d706ff04eb3dc39d128195",
        measurementId: "G-RY6ENK9E06"
    };
const a = function (e) {
    if (!e) return 0;
    e = {
        "wdl-day1": "2020-06-30T16:02Z",
        "wdl-preday2": "2020-07-01T10:59Z",
        "wdl-day2": "2020-07-01T12:00Z",
        "wdl-day3": "2020-07-02T07:30Z"
    } [e] || e;
    const n = new Date(e);
    if (+n) {
        const e = new Date;
        return console.warn("debug time start at", n), +n - +e
    }
    return 0
}(new URLSearchParams(window.location.search).get("_now"));
let o;
o = function (n) {
    var t = [];

    function r(e) {
        for (var n = [], r = 0; r < t.length; r++) t[r] === e ? e = null : n.push(t[r]);
        t = n
    }

    function a(r, a, o) {
        n = a ? r : e(e({}, n), r);
        for (var u = t, i = 0; i < u.length; i++) u[i](n, o)
    }
    return n = n || {}, {
        action: function (e) {
            function t(n) {
                a(n, !1, e)
            }
            return function () {
                for (var r = arguments, a = [n], o = 0; o < arguments.length; o++) a.push(r[o]);
                var u = e.apply(this, a);
                if (null != u) return u.then ? u.then(t) : t(u)
            }
        },
        setState: a,
        subscribe: function (e) {
            return t.push(e),
                function () {
                    r(e)
                }
        },
        unsubscribe: r,
        getState: function () {
            return n
        }
    }
}({
    checkingSignedInState: !0,
    isSignedIn: Boolean(n.webdev_isSignedIn),
    user: null,
    userUrlSeen: null,
    userUrl: null,
    userUrlResultsPending: !1,
    activeLighthouseUrl: null,
    lighthouseResult: null,
    lighthouseError: null,
    currentUrl: window.location.pathname,
    currentLanguage: document.documentElement.getAttribute("lang"),
    isOffline: Boolean(function (e) {
        const n = document.querySelector(`meta[name="${e}"]`);
        return n ? n.getAttribute("content") || n.getAttribute("value") : null
    }("offline")),
    isNavigationDrawerOpen: !1,
    isModalOpen: !1,
    isSearchExpanded: !1,
    isPageLoading: !1,
    userAcceptsCookies: !1,
    showingSnackbar: !1,
    snackbarType: null,
    timeOffset: a,
    eventDays: [],
    activeEventDay: null
});
export {
    t as e, r as f, n as l, o as s
};
