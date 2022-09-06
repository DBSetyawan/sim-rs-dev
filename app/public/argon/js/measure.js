import {
    s as e,
    B as t,
    h as s,
    f as i,
    g as r,
    L as o,
    a,
    i as l,
    j as n
} from "./index-81ba9800.js";
import {
    s as h
} from "./store-f006a62f.js";
e("@keyframes indeterminate{0%{transform:translateX(0) scaleX(0)}40%{transform:translateX(0) scaleX(.4)}to{transform:translateX(100%) scaleX(.5)}}web-progress-bar{display:block}.web-progress-bar-wrapper{position:relative;height:4px;display:block;width:100%;background-color:rgba(96,1,255,.2);border-radius:2px;overflow:hidden;contain:strict}.web-progress-bar-indeterminate{background-color:#6001ff;width:100%;height:100%;animation:indeterminate 1s linear infinite;transform-origin:0 50%}");
customElements.define("web-progress-bar", class extends t {
    render() {
        return s `
      <div class="web-progress-bar-wrapper">
        <div class="web-progress-bar-indeterminate"></div>
      </div>
    `
    }
    firstUpdated() {
        this.setAttribute("role", "progressbar")
    }
});
e("@keyframes sparkline-dash-animation{to{stroke-dashoffset:0}}web-sparkline-chart{display:block;height:100px}web-sparkline-chart:focus{outline:none}web-sparkline-chart .sl-outer{position:absolute}web-sparkline-chart .path.dashed{stroke-linecap:round;stroke-width:1;stroke-dasharray:4;stroke-dashoffset:0;stop-color:#9aa0a6;stroke:#9aa0a6}web-sparkline-chart .result--fail{stroke:#e53935;stop-color:#e53935;fill:#e53935;stroke-width:2}web-sparkline-chart .result--average{stroke:#fb8c00;stop-color:#fb8c00;fill:#fb8c00;stroke-width:2}web-sparkline-chart .result--pass{stroke:#18b663;stop-color:#18b663;fill:#18b663;stroke-width:2}web-sparkline-chart .sl-caption{z-index:100;position:relative}web-sparkline-chart .sl-caption rect{stroke-width:0}web-sparkline-chart .sl-caption--value{font-size:14px;font-weight:600}web-sparkline-chart .sl-caption--date{font-size:12px;stroke-width:0!important;fill:#9aa0a6}web-sparkline-chart svg{pointer-events:none;display:block}web-sparkline-chart .path,web-sparkline-chart .sl-cursor{stroke-linecap:round}web-sparkline-chart .gradient{transition:opacity .6s ease-in-out;opacity:0}web-sparkline-chart .gradient.fadein{opacity:1}web-sparkline-chart .sr-announcer{position:absolute;left:-10000px;top:auto;width:1px;height:1px}");
const c = "function" == typeof ResizeObserver;
customElements.define("web-sparkline-chart", class extends t {
    static get properties() {
        return {
            fill: {
                type: Boolean
            },
            values: {
                type: Object
            },
            medians: {
                type: Object
            },
            topPadding: {
                type: Number
            },
            circleRadius: {
                type: Number
            },
            strokeWidth: {
                type: Number
            },
            demo: {
                type: Boolean
            }
        }
    }
    constructor() {
        if (super(), this.fill = !1, this.topPadding = 20, this.circleRadius = 3, this.strokeWidth = 2, this.width_ = 0, this.height_ = 0, this.point_ = null, this.cursorElement_ = null, this.scoreElement_ = null, this.announcerElement_ = null, this.scoreValueText_ = null, this.scoreDateText_ = null, this.datapoints = [], this.onResize = this.onResize.bind(this), c) {
            new ResizeObserver(this.onResize).observe(this)
        }
    }
    set demo(e) {
        this.demo_ = e, e && (this.values = [{
            score: 35,
            date: "2019-05-22"
        }, {
            score: 30,
            date: "2019-05-24"
        }, {
            score: 20,
            date: "2019-06-01"
        }, {
            score: 50,
            date: "2019-06-24"
        }, {
            score: 92,
            date: "2019-06-29"
        }, {
            score: 90,
            date: "2019-07-01"
        }], this.medians = [{
            score: 89,
            date: "2019-06-24"
        }])
    }
    get demo() {
        return this.demo_
    }
    redrawPoint() {
        if (!this.cursorElement_ || !this.scoreElement_) return;
        if (!this.point_) return this.cursorElement_.setAttribute("x1", "-10000"), this.cursorElement_.setAttribute("x2", "-10000"), void this.scoreElement_.setAttribute("transform", "translate(-10000,-10000)");
        this.cursorElement_.setAttribute("x1", this.point_.x), this.cursorElement_.setAttribute("x2", this.point_.x), this.cursorElement_.setAttribute("y1", this.point_.y), this.cursorElement_.setAttribute("y2", String(this.height_));
        const e = this.computeColorClass_(this.point_.score);
        this.cursorElement_.style.stroke = e, this.cursorElement_.classList.value = `sl-cursor result--${e}`, this.scoreValueText_.textContent = this.point_.score;
        const t = new Date(this.point_.date);
        let s = "—";
        if (t.getTime()) try {
            s = new Intl.DateTimeFormat("en-US", {
                day: "numeric",
                month: "short"
            }).format(t)
        } catch (e) {
            s = t.toLocaleDateString()
        }
        this.scoreDateText_.textContent = s;
        const i = this.scoreElement_.getBoundingClientRect().width,
            r = Math.max(3, Math.min(this.width_ - i - 6, this.point_.x - i / 2)),
            o = Math.max(this.height_ / 2 * -1, Math.min(this.height_ / 2 - 3 - 10, this.point_.y - 10)),
            a = this.scoreValueText_.getBoundingClientRect().width,
            l = this.scoreDateText_.getBoundingClientRect().width;
        this.scoreDateText_.setAttribute("x", String(i / 2 - l / 2)), this.scoreValueText_.setAttribute("x", String(i / 2 - a / 2)), this.scoreElement_.setAttribute("transform", `translate(${r},${o})`), this.scoreElement_.classList.value = `sl-caption result--${e}`
    }
    set point(e) {
        if (this.point_ !== e) {
            if (this.point_ = e, e) {
                const t = new Date(e.date).toLocaleDateString();
                this.announce_(`Score ${e.score} on date ${t}`)
            }
            this.redrawPoint()
        }
    }
    get point() {
        return this.point_
    }
    connectedCallback() {
        super.connectedCallback(), this.setAttribute("aria-valuemin", "0"), this.setAttribute("aria-valuemax", "100"), this.setAttribute("role", "group"), this.setAttribute("aria-label", "scores over time. Use arrow keys to navigate"), c || window.addEventListener("resize", this.onResize)
    }
    disconnectedCallback() {
        super.disconnectedCallback(), c || window.removeEventListener("resize", this.onResize)
    }
    onMouseMove(e) {
        const t = e.offsetX,
            s = this.datapoints.findIndex((e => e.x >= t)),
            i = this.datapoints[s - 1],
            r = this.datapoints[s];
        let o;
        o = r ? i ? Math.abs(t - i.x) <= Math.abs(t - r.x) ? i : r : this.datapoints[0] : this.datapoints[this.datapoints.length - 1], this.point = o
    }
    onKeyDown(e) {
        switch (e.key) {
            case "Right":
            case "ArrowRight":
                this.setNextPoint_();
                break;
            case "Left":
            case "ArrowLeft":
                this.setPrevPoint_();
                break;
            default:
                return
        }
        e.preventDefault()
    }
    setNextPoint_() {
        const e = this.cursorElement_.getAttribute("x1"),
            t = this.datapoints.find((t => t.x > e));
        t && (this.point = t)
    }
    setPrevPoint_() {
        const e = +this.cursorElement_.getAttribute("x1"),
            t = this.datapoints.findIndex((t => t.x === e)),
            s = -1 === t ? this.datapoints.slice(-1)[0] : this.datapoints[t - 1];
        s && (this.point = s)
    }
    onClearPoint() {
        this.point = null
    }
    announce_(e) {
        this.announcerElement_.textContent = e, window.setTimeout((() => {
            this.announcerElement_.textContent = ""
        }), 100)
    }
    calculateY(e) {
        return (1 - Math.min(1, Math.max(e / 100, 0))) * this.height_
    }
    processValues(e) {
        if (!e || 0 === e.length) return {
            datapoints: [],
            paths: [{
                points: "M0 0 L0 0",
                firstPoint: {
                    x: 0,
                    y: 0
                },
                lastPoint: {
                    x: 0,
                    y: 0
                },
                color: ""
            }]
        };
        const t = e.length > 1 ? Math.floor(this.width_ / (e.length - 1)) : 0,
            s = [],
            i = [];
        let r, o = `M0 ${this.calculateY(e[0].score).toFixed(2)}`,
            a = {
                x: NaN,
                y: NaN
            },
            l = {
                x: NaN,
                y: NaN
            };
        return e.forEach(((n, h) => {
            const c = 0 === h,
                d = h === e.length - 1,
                u = d ? this.width_ : h * t,
                p = parseFloat(this.calculateY(n.score).toFixed(2)),
                g = this.computeColorClass_(n.score);
            var b;
            c ? a = {
                x: u,
                y: p
            } : r !== g && (i.push({
                firstPoint: a,
                lastPoint: l,
                color: r,
                points: o
            }), o = `M${l.x} ${l.y} L${l.x} ${l.y}`, a = {
                x: l.x,
                y: l.y
            }), o += ` L${u} ${p}`, d && (c && (a.x = 0), i.push({
                firstPoint: a,
                lastPoint: {
                    x: u,
                    y: p
                },
                color: g,
                points: o
            })), r = g, l = {
                x: u,
                y: p
            }, s.push({
                x: u,
                y: p,
                score: (b = n.score, Math.round(100 * b) / 100),
                date: n.date
            })
        })), {
            paths: i,
            datapoints: s
        }
    }
    updated(e) {
        if (super.updated(e), e.has("fill") || e.has("values")) {
            const e = this.renderRoot.querySelectorAll(".gradient");
            for (const t of e) this.fill ? t.classList.add("fadein") : t.classList.remove("fadein")
        }
    }
    render() {
        const e = this.getBoundingClientRect();
        e.width && e.height || window.requestAnimationFrame((() => this.requestUpdate()));
        const t = this.circleRadius + this.strokeWidth / 2,
            r = `translate(${t},${t+this.topPadding})`;
        this.width_ = e.width - 2 * t, this.height_ = e.height - t - this.topPadding;
        const {
            paths: o,
            datapoints: a
        } = this.processValues(this.values);
        this.datapoints = a, this.datapoints.length ? this.setAttribute("aria-valuenow", this.datapoints.slice(-1)[0].score) : this.removeAttribute("aria-valuenow");
        const l = o[o.length - 1] || null;
        let n;
        if (this.medians && this.medians.length) {
            const {
                paths: e
            } = this.processValues(this.medians);
            n = e.map((({
                points: e
            }) => i `<path d="${e}" class="path dashed" />`))
        }
        const h = l ? i `
      <circle
        cx="${l.lastPoint.x}"
        cy="${l.lastPoint.y}"
        r="${this.circleRadius}"
        stroke-width="${this.strokeWidth}"
        class="result--${l.color}"
        style="fill:#fff" />` : "",
            c = i `
      <svg xmlns="http://www.w3.org/2000/svg"
          width="100%" height="100%">
        <defs>
          <filter id="hover-shadow">
            <feDropShadow dx="0" dy="1" stdDeviation="2" flood-color="#000"
               flood-opacity="0.4"/>
          </filter>
          <linearGradient id="gradient-pass" x1="0" x2="0" y1="0" y2="1">
            <stop offset="0" stop-color="rgb(24,182,99)" stop-opacity="0.2" />
          </linearGradient>
          <linearGradient id="gradient-average" x1="0" x2="0" y1="0" y2="1">
            <stop offset="0" stop-color="rgb(251,140,0)" stop-opacity="0.2" />
          </linearGradient>
          <linearGradient id="gradient-fail" x1="0" x2="0" y1="0" y2="1">
            <stop offset="0" stop-color="rgb(229,57,53)" stop-opacity="0.2" />
          </linearGradient>
        </defs>
        <g transform="${r}">
          ${o.map((({firstPoint:e,points:t,color:s})=>{const r=`
        $ {
            t
        }
        V $ {
            this.height_
        }
        H $ {
            e.x
        }
        Z `;return i` <
            path class = "gradient"
        d = "${r}"
        fill = "${this.fill?`url(#gradient-${s})`:"
        none "}" / >
            <
            path d = "${t}"
        class = "path result--${s}"
        style = "fill:none" / >
            `}))}
          ${n}
          <line class="sl-cursor"
                x1="-10000" x2="-10000" y1="0" y2="${this.height_}" />
          ${h}
          <g class="sl-caption" transform="translate(-10000,-10000)" aria-hidden="true">
            <rect width="50" height="40" fill="#fff" rx="2" ry="2"
                  style="filter:url(#hover-shadow)"/>
            <text class="sl-caption--value" stroke="none" x="25" y="18"></text>
            <text class="sl-caption--date" stroke="none" x="3" y="32"></text>
          </g>
        </g>
      </svg>`;
        return s `
      <div
        style="width: ${e.width}px; height: ${e.height}px"
        tabindex="0"
        class="sl-outer"
        @blur=${this.onClearPoint}
        @mouseout=${this.onClearPoint}
        @mousemove=${this.onMouseMove}
        @keydown=${this.onKeyDown}
      >
        ${c}
        <div aria-live="assertive" class="sr-announcer"></div>
      </div>
    `
    }
    computeColorClass_(e) {
        let t = "fail";
        return e >= 90 ? t = "pass" : e >= 50 && (t = "average"), t
    }
    onResize() {
        this.requestUpdate().then((() => {
            this.redrawPoint()
        }))
    }
    firstUpdated() {
        this.cursorElement_ = this.renderRoot.querySelector(".sl-cursor"), this.scoreElement_ = this.renderRoot.querySelector(".sl-caption"), this.announcerElement_ = this.querySelector(".sr-announcer"), this.scoreValueText_ = this.scoreElement_.querySelector(".sl-caption--value"), this.scoreDateText_ = this.scoreElement_.querySelector(".sl-caption--date")
    }
});
e("web-lighthouse-gauge{color:#bdc1c6;display:block;position:relative}web-lighthouse-gauge .gauge__pass{color:#18b663}web-lighthouse-gauge .gauge__average{color:#fb8c00}web-lighthouse-gauge .gauge__fail{color:#e53935}web-lighthouse-gauge .gauge{stroke-linecap:round}web-lighthouse-gauge .gauge-base{stroke:#e8eaed;stroke-width:9}web-lighthouse-gauge .gauge__pass .gauge-base{stroke:rgba(24,182,99,.2)}web-lighthouse-gauge .gauge__average .gauge-base{stroke:rgba(251,140,0,.2)}web-lighthouse-gauge .gauge__fail .gauge-base{stroke:rgba(229,57,53,.2)}web-lighthouse-gauge .gauge-arc{fill:none;stroke:currentColor;stroke-width:9;transition:stroke-dasharray 1.2s}web-lighthouse-gauge .bootstrap{stroke-dasharray:0 359!important}web-lighthouse-gauge .gauge-percent{align-items:center;bottom:0;color:currentColor;display:flex;font:inherit;justify-content:center;left:0;position:absolute;right:0;top:0}");
customElements.define("web-lighthouse-gauge", class extends t {
    static get properties() {
        return {
            score: {
                type: Number
            },
            _bootstrap: {
                type: Boolean
            }
        }
    }
    constructor() {
        super(), this.score = 0
    }
    connectedCallback() {
        super.connectedCallback(), this._bootstrap = !0, window.requestAnimationFrame((() => {
            this._bootstrap = !1
        }))
    }
    render() {
        const e = Math.max(0, Math.min(1, this.score)),
            t = Math.round(100 * e);
        let i = "fail";
        e >= .9 ? i = "pass" : e >= .5 && (i = "average");
        return s `
      <div class=${`gauge__${i}`}>
        <svg viewBox="0 0 120 120" class="gauge" fill="none" stroke-width="2">
          <circle class="gauge-base" r="53" cx="60" cy="60"></circle>
          <circle
            class="gauge-arc ${this._bootstrap?"bootstrap":""}"
            transform="rotate(-90 60 60)"
            stroke-dasharray="${329*e} 329"
            stroke-dashoffset="0"
            r="53"
            cx="60"
            cy="60"
          ></circle>
        </svg>
        <div class="gauge-percent">${t}</div>
      </div>
    `
    }
    firstUpdated() {
        this.setAttribute("role", "progressbar"), this.setAttribute("aria-valuemin", "0"), this.setAttribute("aria-valuemax", "100")
    }
    updated() {
        this.setAttribute("aria-valuenow", String(100 * this.score))
    }
});
let d = null;
const u = /^(.+) \[Learn more\]\((.+)\)\.$/,
    p = [{
        id: "performance",
        title: "Performance"
    }, {
        id: "accessibility",
        title: "Accessibility"
    }, {
        id: "best-practices",
        title: "Best Practices"
    }, {
        id: "seo",
        title: "SEO"
    }],
    g = [{
        title: "First Contentful Paint",
        id: "first-contentful-paint"
    }, {
        title: "Time to Interactive",
        id: "interactive"
    }, {
        title: "Speed Index",
        id: "speed-index"
    }, {
        title: "Total Blocking Time",
        id: "total-blocking-time"
    }, {
        title: "Largest Contentful Paint",
        id: "largest-contentful-paint",
        vitals: !0
    }, {
        title: "Cumulative Layout Shift",
        id: "cumulative-layout-shift",
        vitals: !0
    }],
    b = {
        Accessibility: ({
            weight: e
        }) => e <= 4 ? "Low" : e <= 7 ? "Medium" : "High",
        "Best Practices": () => "Medium",
        Performance: ({
            overallSavingsMs: e
        }) => e ? e <= 50 ? "Low" : e <= 250 ? "Medium" : "High" : "Low",
        "Progressive Web App": ({
            weight: e
        }) => e <= 3 ? "Low" : e <= 6 ? "Medium" : "High",
        SEO: () => "Medium"
    },
    w = {
        Low: 1,
        Medium: 2,
        High: 3
    };

function m(e) {
    return e.impact = b[e.ref.cat]({
        weight: e.ref.weight,
        overallSavingsMs: e.audit.details && e.audit.details.overallSavingsMs
    }), e
}

function f(e) {
    if ("Progressive Web App" === e.ref.cat) return !1;
    if ("Performance" === e.ref.cat) {
        if (!e.audit.details) return !1;
        const t = e.audit.details.overallSavingsMs;
        return !(void 0 === t || t <= 0)
    }
    return null !== e.audit.score && void 0 !== e.audit.score && 1 !== e.audit.score
}

function _(e, t) {
    return w[t.impact] - w[e.impact]
}
e('web-lighthouse-scores-audits{display:block;min-height:400px;margin-top:40px}web-lighthouse-scores-audits .lh-audit-list-headers{font:500 14px/1.1428571429 Segoe UI,system-ui,-apple-system,sans-serif;color:#5f6368;text-transform:uppercase;display:flex;padding:8px 16px}web-lighthouse-scores-audits .lh-audit-list-headers .lh-audit-list-row__item{line-height:60px}web-lighthouse-scores-audits .lh-audit-list-rows .lh-audit-list-row{background-color:#fff;margin:8px 0;padding:16px;border-radius:2px;box-shadow:0 1px 2px 0 rgba(60,64,67,.3),0 1px 3px 1px rgba(60,64,67,.15);display:flex;align-items:center;font-size:14px}web-lighthouse-scores-audits .lh-audit-list-rows .lh-audit-list-row:last-child{margin-bottom:0}web-lighthouse-scores-audits .lh-audit-list-rows .lh-audit-list-row__impact{display:inline-flex;background-color:rgba(96,1,255,.2);color:#6001ff;font-weight:500;border-radius:20px;height:32px;flex-grow:0;flex-shrink:0;align-items:center;justify-content:center}web-lighthouse-scores-audits .lh-audit-list-rows .lh-audit-list-row__impact--high{background-color:#fcebea;color:#d5100c}web-lighthouse-scores-audits .lh-audit-list-rows .lh-audit-list-row__impact--medium{background-color:#fef3e5;color:#c6320d}web-lighthouse-scores-audits .lh-audit-list-rows .lh-audit-list-row__impact--low{background-color:#ebebff;color:#3740ff}web-lighthouse-scores-audits .lh-audit-list-row__item{margin-right:16px}web-lighthouse-scores-audits .lh-audit-list-row__link{text-decoration:underline}web-lighthouse-scores-audits .lh-audit-list-row__item:last-of-type{margin-right:0}web-lighthouse-scores-audits .lh-audit-list-row__impact{min-width:75px;display:flex;align-items:center}web-lighthouse-scores-audits .lh-audit-list-row__impact-arrow{display:flex;align-items:center;background:none;border:0;padding-left:0;border-bottom:1px solid transparent;color:inherit;text-transform:uppercase;outline:none;box-shadow:none;font:500 14px/1.1428571429 Segoe UI,system-ui,-apple-system,sans-serif}web-lighthouse-scores-audits .lh-audit-list-row__impact-arrow:focus-within{border-bottom:1px solid #5f6368;margin-bottom:0}web-lighthouse-scores-audits .lh-audit-list-row__impact-arrow:after{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font:normal normal normal 24px/1 Material Icons;font-feature-settings:"liga";text-rendering:optimizeSpeed;text-transform:none;word-wrap:normal;content:"arrow_drop_down"}web-lighthouse-scores-audits .lh-audit-list-row__impact-arrow[data-inverted]:after{content:"arrow_drop_up"}web-lighthouse-scores-audits .lh-audit-list-row__category{min-width:150px}web-lighthouse-scores-audits .lh-audit-list-row__guide,web-lighthouse-scores-audits .lh-audit-list-row__recommendation{width:50%;overflow:hidden}web-lighthouse-scores-audits .lh-audit-list-row__guide{padding:0 4px}web-lighthouse-scores-audits .lh-audit-list-see-more__container{display:flex;margin-top:32px;flex-direction:column}web-lighthouse-scores-audits .lh-audit-list-see-more__button{align-self:center}web-lighthouse-scores-audits .lh-audit-list-see-more__button:disabled{display:none}@media screen and (max-width:840px){web-lighthouse-scores-audits .lh-audit-list-headers .lh-audit-list-row__category,web-lighthouse-scores-audits .lh-audit-list-row__category{display:none}}');

function x(e, t) {
    let i = ["Guide coming soon"];
    const r = e.audits[t.ref.id],
        o = function () {
            if (d) return d;
            const e = document.getElementById("guide-audit-mapping");
            if (null === e) return null;
            let t;
            try {
                t = JSON.parse(e.textContent)
            } catch (t) {
                throw console.warn("LH id -> guide JSON was malformed. Check", e), t
            }
            const s = {};
            for (const e of t.guides)
                for (const t of e.lighthouse) t in s || (s[t] = []), s[t].push(e);
            return d = s, d
        }();
    if (o) {
        const e = o[t.ref.id];
        if (e) i = e.map((e => s `
          <a
            href="${e.url}"
            class="lh-audit-list-row__link internal gc-analytics-event"
            data-category="web.dev"
            data-label="audit todos, internal link"
            data-action="click"
            target="_blank"
            >${e.title}</a
          >
        `));
        else {
            const e = function (e) {
                const t = u.exec(e);
                return t ? t[2] : null
            }(r.description);
            e && (i = s `
          <a
            href="${e}"
            class="lh-audit-list-row__link external gc-analytics-event"
            target="_blank"
            data-category="web.dev"
            data-label="audit todos, external link"
            data-action="click"
            >${r.title}</a
          >
        `)
        }
    }
    return s `
    <div class="lh-audit-list-row" role="row">
      <span
        class="lh-audit-list-row__impact lh-audit-list-row__item
                lh-audit-list-row__impact--${t.impact.toLowerCase()}"
        role="cell"
        >${t.impact}</span
      >
      <span
        class="lh-audit-list-row__item lh-audit-list-row__category"
        role="cell"
        >${t.ref.cat}</span
      >
      <span
        class="lh-audit-list-row__item lh-audit-list-row__recommendation"
        role="cell"
        >${r.title}</span
      >
      <span class="lh-audit-list-row__item lh-audit-list-row__guide" role="cell"
        >${i}</span
      >
    </div>
  `
}
customElements.define("web-lighthouse-scores-audits", class extends t {
    static get properties() {
        return {
            timesExpanded: {
                type: Number
            },
            inverted: {
                type: Boolean
            },
            filteringOn: {
                type: String
            },
            lhr: {
                type: Object
            }
        }
    }
    constructor() {
        super(), this.timesExpanded = 0, this.inverted = !1
    }
    set lhr(e) {
        if (this._lhr === e) return;
        this.timesExpanded = 1, this.inverted = !1, this.filteringOn = null;
        const t = this._lhr;
        this._lhr = e, this.requestUpdate("lhr", t)
    }
    get lhr() {
        return this._lhr
    }
    firstUpdated() {
        this.setAttribute("role", "table"), this.setAttribute("aria-label", "Lighthouse audits and suggested guides")
    }
    getHighestImpactScores(e) {
        const t = Object.values(e.categories).filter((e => !this.filteringOn || e.id === this.filteringOn)).map((e => e.auditRefs.map((t => Object.assign({
            cat: e.title
        }, t))))).reduce(((e, t) => e.concat(t)), []).map((t => ({
            ref: t,
            audit: e.audits[t.id]
        }))).filter(f).map(m).sort(_);
        return this.inverted && t.reverse(), t
    }
    render() {
        const e = this.lhr;
        let t = s ``,
            i = !1;
        if (e) {
            const s = this.getHighestImpactScores(e);
            i = s.length <= 10 * this.timesExpanded, t = s.slice(0, 10 * this.timesExpanded).map((t => x(e, t)))
        } else {
            const e = Array(10 * this.timesExpanded).keys();
            t = Array.from(e).map((() => s `
          <div class="lh-audit-list-row" role="row">
            <span
              class="lh-audit-list-row__impact lh-audit-list-row__item"
              role="cell"
            ></span>
          </div>
        `))
        }
        return s `
      <div class="lh-audit-list-headers" role="row">
        <span
          class="lh-audit-list-row__impact lh-audit-list-row__item"
          role="columnheader"
        >
          <button
            class="lh-audit-list-row__impact-arrow"
            @click="${this.onInvert}"
            ?data-inverted="${this.inverted}"
          >
            Impact
          </button>
        </span>
        <span
          class="lh-audit-list-row__category lh-audit-list-row__item"
          role="columnheader"
          >Category</span
        >
        <span
          class="lh-audit-list-row__recommendation lh-audit-list-row__item"
          role="columnheader"
          >Audit</span
        >
        <span
          class="lh-audit-list-row__guide lh-audit-list-row__item"
          role="columnheader"
          >Guide</span
        >
      </div>
      <div class="lh-audit-list-rows" role="rowgroup">${t}</div>
      <div class="lh-audit-list-see-more__container">
        <button
          @click="${this.onIncreaseAuditsShown}"
          ?disabled="${!e||i}"
          class="w-button lh-audit-list-see-more__button gc-analytics-event"
          data-category="web.dev"
          data-label="audit todos, see more"
          data-action="click"
        >
          See more
        </button>
      </div>
    `
    }
    onInvert(e) {
        e.preventDefault(), this.inverted = !this.inverted
    }
    onIncreaseAuditsShown(e) {
        e.preventDefault(), this.timesExpanded++
    }
    filter(e) {
        this.filteringOn = e === this.filteringOn ? null : e
    }
});
customElements.define("web-lighthouse-scores-container", class extends t {
    static get properties() {
        return {
            filteringOn: {
                type: String
            },
            lighthouseError: {
                type: String
            },
            activeLighthouseUrl: {
                type: String
            },
            auditedOn: {
                type: Date
            },
            lighthouseResultUrl: {
                type: String
            },
            lighthouseResultRuns: {
                type: Array
            },
            lighthouseResultLastLhr: {
                type: Object
            }
        }
    }
    constructor() {
        super(), this.onStateChanged = this.onStateChanged.bind(this)
    }
    render() {
        return s `
      <web-lighthouse-scores-meta
        .errorMessage=${this.lighthouseError}
        .auditedOn=${this.auditedOn}
        .url=${this.lighthouseResultUrl}
      ></web-lighthouse-scores-meta>
      <web-lighthouse-scores-stats
        @category=${e=>this.filteringOn=e.detail}
        .lhrRuns=${this.lighthouseResultRuns}
        .disabled=${Boolean(this.activeLighthouseUrl)}
      ></web-lighthouse-scores-stats>
      <web-lighthouse-scores-metrics
        .lhr=${this.lighthouseResultLastLhr}
        ?hidden=${!this.lighthouseResultLastLhr}
      ></web-lighthouse-scores-metrics>
      <web-lighthouse-scores-audits
        .filteringOn=${this.filteringOn}
        .lhr=${this.lighthouseResultLastLhr}
        ?hidden=${!this.lighthouseResultLastLhr}
      ></web-lighthouse-scores-audits>
    `
    }
    onStateChanged() {
        const {
            lighthouseError: e,
            lighthouseResult: t,
            activeLighthouseUrl: s,
            userUrlResultsPending: i
        } = h.getState();
        if (i) {
            const {
                userUrl: e,
                userUrlSeen: t
            } = h.getState();
            r(e, t), h.setState({
                userUrlResultsPending: !1
            })
        }
        this.lighthouseError = e, this.activeLighthouseUrl = s;
        const o = t && t.runs || [],
            a = o.slice(-1)[0] || null;
        this.lighthouseResultUrl = t ? t.url : null, this.lighthouseResultRuns = o, this.lighthouseResultLastLhr = a ? a.lhr : null;
        let l = null;
        if (a) {
            const e = new Date(a.auditedOn);
            e.getTime() && (l = e)
        }
        this.auditedOn = l
    }
    connectedCallback() {
        super.connectedCallback(), h.subscribe(this.onStateChanged), this.onStateChanged()
    }
    disconnectedCallback() {
        super.disconnectedCallback(), h.unsubscribe(this.onStateChanged)
    }
});
e('web-lighthouse-scores-meta .lh-report-meta{margin-top:8px;margin-bottom:16px;font-size:14px}web-lighthouse-scores-meta .lh-report-meta__links{display:flex;flex-direction:column}@media (min-width:481px){web-lighthouse-scores-meta .lh-report-meta__links{justify-content:space-between;flex-direction:row}}@media (min-width:865px){web-lighthouse-scores-meta .lh-report-meta__links{display:block}}web-lighthouse-scores-meta .lh-report-meta__lastaudit{margin-left:8px}@media (min-width:481px){web-lighthouse-scores-meta .lh-report-meta__lastaudit{margin-left:8px}}@media (min-width:865px){web-lighthouse-scores-meta .lh-report-meta__lastaudit{min-width:180px;margin-right:16px;display:inline-block}}web-lighthouse-scores-meta .lh-report-invisible{visibility:hidden}web-lighthouse-scores-meta .lh-report-link{margin:0 8px;text-decoration:underline;white-space:nowrap}web-lighthouse-scores-meta .lh-error-msg{color:#e53935;max-width:100%;font-weight:500;display:inline-flex;align-items:center}web-lighthouse-scores-meta .lh-error-msg:empty{display:none}web-lighthouse-scores-meta .lh-error-msg:before{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font:normal normal normal 24px/1 Material Icons;font-feature-settings:"liga";text-rendering:optimizeSpeed;text-transform:none;word-wrap:normal;content:"info";margin-right:8px;font-size:20px;alt:""}');
customElements.define("web-lighthouse-scores-meta", class extends t {
    static get properties() {
        return {
            errorMessage: {
                type: String
            },
            url: {
                type: String
            },
            auditedOn: {
                type: Date
            }
        }
    }
    constructor() {
        super(), this.errorMessage = null, this.url = null, this.auditedOn = null
    }
    firstUpdated() {
        this.setAttribute("aria-label", "Lighthouse meta information")
    }
    render() {
        const e = !this.url || this.errorMessage || !this.auditedOn;
        let t = "—";
        if (!e && this.auditedOn) try {
            const e = {
                day: "numeric",
                month: "short",
                hour: "numeric",
                minute: "numeric"
            };
            t = new Intl.DateTimeFormat("en-US", e).format(this.auditedOn)
        } catch (e) {
            t = this.auditedOn.toLocaleString()
        }
        const i = encodeURIComponent(this.url);
        return s `
      <div class="lh-report-meta">
        <span class="lh-report-meta__links" ?hidden="${e}">
          <span class="lh-report-meta__lastaudit">
            <span>Last audit:</span> <span>${t}</span>
          </span>
          <span>
            <a
              href="${o}/lh/html?url=${i}"
              title="View latest Lighthouse report"
              class="viewreport lh-report-link gc-analytics-event"
              data-category="web.dev"
              data-label="view lighthouse report"
              data-action="click"
              target="_blank"
              rel="noopener"
              >View Report</a
            >
          </span>
        </span>
        <span class="lh-error-msg">${this.errorMessage}</span>
      </div>
    `
    }
});
e('web-lighthouse-scores-metrics .lh-metrics-container{box-shadow:0 1px 2px 0 rgba(60,64,67,.3),0 2px 6px 2px rgba(60,64,67,.15);border-radius:inherit;background-color:#fff;margin-top:16px;padding:32px;min-height:64px}web-lighthouse-scores-metrics .lh-metrics-table{position:relative;display:flex}web-lighthouse-scores-metrics .lh-metrics-vitals{display:flex;font-size:14px;justify-content:center;padding-top:16px}web-lighthouse-scores-metrics .lh-metrics-vitals:before{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font:normal normal normal 24px/1 Material Icons;font-feature-settings:"liga";text-rendering:optimizeSpeed;text-transform:none;word-wrap:normal;color:#2962ff;content:"bookmark";margin-right:5px;font-size:20px}web-lighthouse-scores-metrics .lh-metrics-table{flex-wrap:wrap;justify-content:center}web-lighthouse-scores-metrics .lh-metrics-table__metric{flex:1;width:calc(50% - 15px);min-width:260px;max-width:300px;flex-basis:auto;margin:0 15px;display:flex;justify-content:space-between;align-items:center;height:40px;border-bottom:1px solid #e8eaed}web-lighthouse-scores-metrics .lh-metrics-table__metric span{display:flex}web-lighthouse-scores-metrics .lh-metrics-table__icon{-webkit-font-smoothing:antialiased;font:normal normal normal 24px/1 Material Icons;font-feature-settings:"liga";align-items:center;font-size:16px}web-lighthouse-scores-metrics .lh-metrics-table__icon,web-lighthouse-scores-metrics .lh-vital:after{-moz-osx-font-smoothing:grayscale;text-rendering:optimizeSpeed;text-transform:none;word-wrap:normal;margin-left:5px}web-lighthouse-scores-metrics .lh-vital:after{-webkit-font-smoothing:antialiased;font:normal normal normal 24px/1 Material Icons;font-feature-settings:"liga";color:#2962ff;content:"bookmark"}web-lighthouse-scores-metrics .lh-metrics-table__score.lh-score--fail{color:#e53935}web-lighthouse-scores-metrics .lh-metrics-table__score.lh-score--fail .lh-metrics-table__icon:before{content:"warning"}web-lighthouse-scores-metrics .lh-metrics-table__score.lh-score--average{color:#fb8c00}web-lighthouse-scores-metrics .lh-metrics-table__score.lh-score--average .lh-metrics-table__icon:before{content:"info"}web-lighthouse-scores-metrics .lh-metrics-table__score.lh-score--pass{color:#18b663}web-lighthouse-scores-metrics .lh-metrics-table__score.lh-score--pass .lh-metrics-table__icon:before{content:"check_circle"}');
customElements.define("web-lighthouse-scores-metrics", class extends t {
    static get properties() {
        return {
            lhr: {
                type: Object
            }
        }
    }
    constructor() {
        super(), this.lhr = null
    }
    firstUpdated() {
        this.setAttribute("role", "table"), this.setAttribute("aria-label", "Lighthouse key metrics")
    }
    render() {
        let e = "",
            t = !1;
        if (this.lhr) {
            const i = e => {
                const i = this.lhr.audits[e.id];
                if (!i) return "";
                let r = null;
                r = i.score >= .9 ? "pass" : i.score >= .5 ? "average" : "fail";
                const o = e.vitals ? "lh-vital" : "";
                return t = t || e.vitals, s `
          <div class="lh-metrics-table__metric">
            <span class="${o}">${e.title}</span>
            <span
              class="lh-metrics-table__score lh-score--${r}"
              aria-label="${r} score: ${i.displayValue}"
              role="group"
            >
              ${i.displayValue}
              <span class="lh-metrics-table__icon"></span>
            </span>
          </div>
        `
            };
            e = g.map(i)
        }
        return s `
      <div class="lh-metrics-container">
        <div class="lh-metrics-table">${e}</div>
        <div class="lh-metrics-vitals" ?hidden=${!t}>
          <span
            >Core Web Vitals assessment. To learn more, see
            <a href="/vitals">Web Vitals</a>.</span
          >
        </div>
      </div>
    `
    }
});
e('web-lighthouse-scores-stats web-progress-bar{display:block;position:absolute;left:0;top:0;right:0}web-lighthouse-scores-stats .lh-score-cards{position:relative;display:flex;flex-wrap:wrap;box-shadow:0 1px 2px 0 rgba(60,64,67,.3),0 2px 6px 2px rgba(60,64,67,.15);border-radius:inherit;background-color:#fff;min-height:64px;margin-top:16px}@media screen and (min-width:840px){web-lighthouse-scores-stats .lh-score-cards{margin-top:32px}}web-lighthouse-scores-stats .lh-score-card{color:unset;font-size:unset;display:block}web-lighthouse-scores-stats .lh-score-card>input[type=radio]{display:none}web-lighthouse-scores-stats .lh-audit-running web-progress-bar{visibility:visible}web-lighthouse-scores-stats .lh-score-cards--fade .lh-score-card{opacity:.5}web-lighthouse-scores-stats .lh-score-card{position:relative;padding:16px;width:25%;height:100%;border-left:1px solid #dadce0;border-bottom:1px solid #dadce0;display:flex;flex-direction:column}web-lighthouse-scores-stats .lh-score-card__header{display:flex;align-items:center;justify-content:space-between;flex-direction:column;font-size:18px;font-weight:500}web-lighthouse-scores-stats .lh-score-card__data{position:relative}web-lighthouse-scores-stats .lh-score-card__title{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;flex-shrink:0;user-select:none}web-lighthouse-scores-stats web-sparkline{display:inline-block;width:100%;height:100px}web-lighthouse-scores-stats web-lighthouse-gauge{width:50px;height:50px;contain:content;display:block;user-select:none}web-lighthouse-scores-stats .lh-score-card__scorescale{text-align:right}web-lighthouse-scores-stats .lh-score-card__scorescale.lh-score__label{margin:16px 0}web-lighthouse-scores-stats .lh-score__label{font-size:14px;color:#5f6368;width:100%}web-lighthouse-scores-stats .lh-score-card__legend{display:inline-block}web-lighthouse-scores-stats .lh-score-card__legend .lh-score-card__legend--ellipsis{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:100%}web-lighthouse-scores-stats .lh-score-card__range{white-space:nowrap}web-lighthouse-scores-stats .lh-score-card__range:before{content:"";width:14px;height:8px;border-radius:4px;display:inline-block;margin:0 5px}web-lighthouse-scores-stats .lh-score-card__range.lh-score--fail:before{background-color:#e53935}web-lighthouse-scores-stats .lh-score-card__range.lh-score--average:before{background-color:#fb8c00}web-lighthouse-scores-stats .lh-score-card__range.lh-score--pass:before{background-color:#18b663}@media screen and (min-width:1440px){web-lighthouse-scores-stats web-lighthouse-gauge{width:50px;height:50px}web-lighthouse-scores-stats .lh-score-cards{flex-wrap:nowrap}}@media screen and (min-width:840px) and (max-width:1024px){web-lighthouse-scores-stats web-lighthouse-gauge{width:30px;height:30px;font-size:14px}web-lighthouse-scores-stats .lh-score-card__title{font-size:14px;max-width:calc(100% - 30px)!important}}@media screen and (min-width:840px){web-lighthouse-scores-stats .results-row{grid-column:1/span 12}web-lighthouse-scores-stats .report_header_enterurl{display:flex}web-lighthouse-scores-stats .lh-controls{margin-top:0;flex-wrap:nowrap}web-lighthouse-scores-stats .lh-enterurl{margin-right:32px;width:100%}web-lighthouse-scores-stats .lh-input{width:100%}web-lighthouse-scores-stats .lh-score-card{border-bottom:0}web-lighthouse-scores-stats .lh-score-card.lh-score__label{display:none}web-lighthouse-scores-stats .lh-score-card__header{flex-direction:row}web-lighthouse-scores-stats .lh-score-card__title{max-width:calc(100% - 60px)}web-lighthouse-scores-stats .lh-score-card__range:not([data-first]){margin-left:4px}web-lighthouse-scores-stats .lh-score__label{text-align:right;margin-top:16px}web-lighthouse-scores-stats .lh-score-card__legend{margin-left:24px}}@media screen and (max-width:840px){web-lighthouse-scores-stats .lh-score-card{min-width:50%}web-lighthouse-scores-stats .lh-score-cards+.lh-score__label{display:none}web-lighthouse-scores-stats .lh-score-card__title{margin-bottom:8px}web-lighthouse-scores-stats .lh-score-card__legend{display:flex;flex-direction:column;align-items:center;margin:8px 0}web-lighthouse-scores-stats .lh-score-card__legend:last-child{order:-1}}');
customElements.define("web-lighthouse-scores-stats", class extends t {
    static get properties() {
        return {
            lhrRuns: {
                type: Array
            },
            category: {
                type: String
            },
            disabled: {
                type: Boolean
            },
            medians: {
                type: Array
            }
        }
    }
    constructor() {
        super(), this.lhrRuns = [], this.disabled = !1, this.medians = []
    }
    firstUpdated() {
        this.setAttribute("role", "table"), this.setAttribute("aria-label", "Lighthouse performance over time")
    }
    onCardClick(e) {
        this.category === e.target.value ? this.category = null : this.category = e.target.value;
        const t = new CustomEvent("category", {
            detail: this.category,
            bubbles: !0
        });
        this.dispatchEvent(t)
    }
    getScoresForCategory(e) {
        return (this.lhrRuns || []).map((t => {
            const s = (t.lhrSlim || []).find((t => t.id === e));
            return s ? {
                date: t.auditedOn,
                score: 100 * s.score
            } : null
        })).filter(Boolean)
    }
    generateCards() {
        const e = e => e.length ? s `
        <web-sparkline-chart
          class="score-line"
          fill
          showlast
          .values="${e}"
          .medians="${this.medians}"
        ></web-sparkline>
      ` : s ``;
        return p.map((({
            id: t,
            title: i
        }) => {
            const r = this.getScoresForCategory(t),
                o = r.slice(-1)[0] || {
                    score: 0
                };
            return s `
        <label class="lh-score-card">
          <input
            type="radio"
            name="lh-score-category"
            value="${t}"
            .checked=${this.category===t}
            @click=${this.onCardClick}
          />
          <div class="lh-score-card__header">
            <span
              class="lh-score-card__title"
              aria-hidden="true"
              >${i}</span
            >
            <web-lighthouse-gauge
              aria-labelledby="${t}-score-gauge-title"
              score="${o.score/100}"
            ></web-lighthouse-gauge>
          </div>
          <div class="lh-score-card__data">
            ${e(r)}
          </div>
        </div>
      `
        }))
    }
    scoreLegend(e = !0) {
        return s `
      <div class="${e?"lh-score-card":""} lh-score__label">
        <div class="lh-score-card__legend">
          <span>Score scale:</span>
          <span class="lh-score-card__range lh-score--fail" data-first>
            0-49
          </span>
          <span class="lh-score-card__range lh-score--average">50-89</span>
          <span class="lh-score-card__range lh-score--pass">90-100</span>
        </div>
      </div>
    `
    }
    render() {
        const e = this.lhrRuns && this.lhrRuns.slice(-1)[0],
            t = e ? e.lhr : null;
        return s `
      <div class="${this.disabled?"lh-audit-running":""}">
        <div class="lh-score-cards ${t?"":"lh-score-cards--fade"}">
          <web-progress-bar></web-progress-bar>
          ${this.generateCards()} ${this.scoreLegend(!0)}
        </div>
        ${this.scoreLegend(!1)}
      </div>
    `
    }
});
e('@charset "UTF-8";web-url-chooser{display:block}web-url-chooser:not([switching]) .lh-enterurl--switch,web-url-chooser[switching] .lh-enterurl--selected{display:none}web-url-chooser .lh-report-header-enterurl{position:relative}web-url-chooser .lh-enterurl{position:relative;align-self:center}web-url-chooser .lh-enterurl__close{align-items:center;background:none;border:0;box-shadow:none;display:flex;height:100%;justify-content:center;margin:0 8px;padding:0;position:absolute;right:0;top:0}web-url-chooser .lh-enterurl__close[disabled]{display:none}web-url-chooser .lh-enterurl__close:after{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font:normal normal normal 24px/1 Material Icons;font-feature-settings:"liga";text-rendering:optimizeSpeed;text-transform:none;word-wrap:normal;content:"close";color:#bdc1c6}web-url-chooser .lh-enterurl__close::-moz-focus-inner,web-url-chooser .lh-enterurl__close:focus{outline:0}web-url-chooser .lh-enterurl__close:focus:after{color:#202124}web-url-chooser .lh-enterurl--selected{font-weight:500;padding-left:24px;background:url(\'data:image/svg+xml;utf8,<svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg"><path fill="%23212121" d="M7.992,0 C3.576,0 0,3.584 0,8 C0,12.416 3.576,16 7.992,16 C12.416,16 16,12.416 16,8 C16,3.584 12.416,0 7.992,0 Z M13.536,4.8 L11.176,4.8 C10.92,3.8 10.552,2.84 10.072,1.952 C11.544,2.456 12.768,3.48 13.536,4.8 Z M8,1.632 C8.664,2.592 9.184,3.656 9.528,4.8 L6.472,4.8 C6.816,3.656 7.336,2.592 8,1.632 Z M1.808,9.6 C1.68,9.088 1.6,8.552 1.6,8 C1.6,7.448 1.68,6.912 1.808,6.4 L4.512,6.4 C4.448,6.928 4.4,7.456 4.4,8 C4.4,8.544 4.448,9.072 4.512,9.6 L1.808,9.6 Z M2.464,11.2 L4.824,11.2 C5.08,12.2 5.448,13.16 5.928,14.048 C4.456,13.544 3.232,12.528 2.464,11.2 Z M4.824,4.8 L2.464,4.8 C3.232,3.472 4.456,2.456 5.928,1.952 C5.448,2.84 5.08,3.8 4.824,4.8 Z M8,14.368 C7.336,13.408 6.816,12.344 6.472,11.2 L9.528,11.2 C9.184,12.344 8.664,13.408 8,14.368 Z M9.872,9.6 L6.128,9.6 C6.056,9.072 6,8.544 6,8 C6,7.456 6.056,6.92 6.128,6.4 L9.872,6.4 C9.944,6.92 10,7.456 10,8 C10,8.544 9.944,9.072 9.872,9.6 Z M10.072,14.048 C10.552,13.16 10.92,12.2 11.176,11.2 L13.536,11.2 C12.768,12.52 11.544,13.544 10.072,14.048 Z M11.488,9.6 C11.552,9.072 11.6,8.544 11.6,8 C11.6,7.456 11.552,6.928 11.488,6.4 L14.192,6.4 C14.32,6.912 14.4,7.448 14.4,8 C14.4,8.552 14.32,9.088 14.192,9.6 L11.488,9.6 Z" id="icon/action/language_24px"></path></svg>\') no-repeat 0 50%}web-url-chooser .lh-enterurl--selected:before{content:"​";user-select:none}web-url-chooser .lh-input{background-color:#fff;border-radius:2px;border:1px solid #e8eaed;color:#202124;font:16px/20px Roboto,sans-serif;height:56px;margin:0;max-width:100%;outline:none;padding:8px 16px;transition:box-shadow .2s ease-in-out;width:100%}web-url-chooser .lh-input:focus{box-shadow:inset 0 -2px 0 0 #3740ff}web-url-chooser .lh-input::-ms-clear{display:none}web-url-chooser .lh-controls{display:flex;flex-wrap:wrap;margin-top:8px}web-url-chooser .lh-controls .w-button{flex:1 1 auto;height:56px;justify-content:center}web-url-chooser .lh-controls button+button{margin-left:16px}@media screen and (min-width:840px){web-url-chooser .lh-report-header-enterurl{display:flex}web-url-chooser .lh-controls{margin-top:0;flex-wrap:nowrap}web-url-chooser .lh-enterurl{margin-right:32px;width:100%}web-url-chooser .lh-input{width:100%}}');
customElements.define("web-url-chooser", class extends t {
    static get properties() {
        return {
            url: {
                type: String
            },
            switching: {
                type: Boolean,
                reflect: !0
            },
            hasError: {
                type: Boolean
            },
            disabled: {
                type: Boolean
            }
        }
    }
    constructor() {
        super(), this.url = null, this.switching = !0, this.disabled = !1, this._urlInput, this._runLighthouseButton, this.hasError = !1
    }
    render() {
        return s `
      <div class="lh-report-header-enterurl">
        <div class="lh-enterurl lh-enterurl--selected">${this.url}</div>
        <div class="lh-enterurl lh-enterurl--switch">
          <input
            ?disabled=${this.disabled}
            type="url"
            class="lh-input"
            name="url"
            placeholder="Enter a web page URL"
            pattern="https?://.*"
            minlength="7"
            @keyup="${this.onUrlKeyup}"
          />
          <button
            ?disabled=${this.disabled}
            class="lh-enterurl__close gc-analytics-event"
            data-category="web.dev"
            data-label="measure, remove url"
            data-action="click"
            aria-label="Remove URL"
            @click=${this.onClearInput}
          ></button>
        </div>
        <div class="lh-controls">
          <button
            ?disabled=${this.disabled}
            class="w-button w-button--secondary gc-analytics-event"
            data-category="web.dev"
            data-label="measure, switch url"
            data-action="click"
            @click=${this.onSwitchUrl}
          >
            Switch URL
          </button>
          <button
            ?disabled=${this.disabled}
            class="w-button w-button--primary gc-analytics-event"
            data-category="web.dev"
            data-label="measure, run audit"
            data-action="click"
            id="run-lh-button"
            @click=${this.onRequestAudit}
          >
            Run Audit
          </button>
        </div>
      </div>
    `
    }
    firstUpdated() {
        this._urlInput = this.renderRoot.querySelector('input[type="url"]'), this._runLighthouseButton = this.renderRoot.querySelector("#run-lh-button")
    }
    updated(e) {
        const t = this._urlInput;
        if (e.has("hasError") && this.hasError && (this.switching = !0), e.has("switching") && this.switching && (t.setSelectionRange(0, t.value.length), t.focus()), e.has("url")) {
            const e = this.url;
            t && (this.switching && e && !t.value ? (t.value = e, this.switching = !1) : null !== e || this.switching ? this.switching || (t.value = e) : (t.value = "", this.switching = !0))
        }
    }
    onRequestAudit() {
        if (this.fixUpUrl(), !this._urlInput.validity.valid) {
            const e = new CustomEvent("web-error", {
                bubbles: !0,
                detail: "Invalid URL. Please enter a full URL starting with https://."
            });
            return void this.dispatchEvent(e)
        }
        this.switching = !1;
        const e = new CustomEvent("audit", {
            detail: this._urlInput.value
        });
        this.dispatchEvent(e)
    }
    onSwitchUrl() {
        this.switching = !0, this._urlInput.focus()
    }
    onUrlKeyup(e) {
        "Escape" === e.key ? this.onClearInput() : "Enter" === e.key && this._runLighthouseButton.click()
    }
    fixUpUrl() {
        let e = this._urlInput.value.trim();
        e.startsWith("https://") || e.startsWith("http://") || (e = `http://${e}`), e !== this._urlInput.value && this._urlInput && (this._urlInput.value = e)
    }
    onClearInput() {
        this._urlInput && (this._urlInput.value = "")
    }
});
customElements.define("web-url-chooser-container", class extends a {
    static get properties() {
        return {
            url: {
                type: String
            },
            active: {
                type: Boolean
            },
            hasError: {
                type: Boolean
            }
        }
    }
    constructor() {
        super(), this.url = null, this.active = !1
    }
    render() {
        return s `
      <web-url-chooser
        .url=${this.url}
        .disabled=${this.active}
        .hasError=${this.hasError}
        @audit=${this.runAudit}
      ></web-url-chooser>
    `
    }
    onStateChanged(e) {
        this.url = e.activeLighthouseUrl || e.userUrl, this.active = null !== e.activeLighthouseUrl, this.hasError = Boolean(e.lighthouseError)
    }
    runAudit(e) {
        const t = e.detail;
        l(t)
    }
});
e(".lh-signin-button{margin-top:16px}");
customElements.define("web-signin-button", class extends a {
    static get properties() {
        return {
            checkingSignedInState: {
                type: Boolean
            },
            isSignedIn: {
                type: Boolean
            }
        }
    }
    render() {
        if (this.isSignedIn) return s ``;
        const e = this.checkingSignedInState ? null : n;
        return s `
      <button
        @click=${e}
        class="w-button w-button--secondary lh-signin-button gc-analytics-event"
        data-category="web.dev"
        data-label="measure, big sign-in"
        data-action="click"
      >
        <svg
          class="w-mr--sm"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 48 48"
          width="24"
          heigh="24"
        >
          <defs>
            <path
              id="a"
              d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"
            />
          </defs>
          <clipPath id="b"><use xlink:href="#a" overflow="visible" /></clipPath>
          <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
          <path
            clip-path="url(#b)"
            fill="#EA4335"
            d="M0 11l17 13 7-6.1L48 14V0H0z"
          />
          <path
            clip-path="url(#b)"
            fill="#34A853"
            d="M0 37l30-23 7.9 1L48 0v48H0z"
          />
          <path
            clip-path="url(#b)"
            fill="#4285F4"
            d="M48 48L17 24l-4-3 35-10z"
          />
        </svg>
        Sign in with Google
      </button>
    `
    }
    onStateChanged({
        checkingSignedInState: e,
        isSignedIn: t
    }) {
        this.checkingSignedInState = e, this.isSignedIn = t
    }
});
