import {
    s as e,
    l as i
} from "./store-f006a62f.js";

function n({
    isSignedIn: e
}) {
    document.body.classList.toggle("lh-signedin", e), i.webdev_isSignedIn = e ? "probably" : ""
}
document.body.classList.remove("unresolved"), e.subscribe(n), n(e.getState()),
    function () {
        if ("serviceWorker" in navigator) navigator.serviceWorker.getRegistrations().then((e => Promise.all(e.map((e => e.unregister()))))).then((e => {
            e.length && window.location.reload()
        }))
    }();
