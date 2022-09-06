import {
    s as e,
    f as t,
    l as n
} from "./store-f006a62f.js";
const i = "undefined" != typeof window && null != window.customElements && void 0 !== window.customElements.polyfillWrapFlushCallback,
    r = (e, t, n = null) => {
        for (; t !== n;) {
            const n = t.nextSibling;
            e.removeChild(t), t = n
        }
    },
    s = `{{lit-${String(Math.random()).slice(2)}}}`,
    o = `\x3c!--${s}--\x3e`,
    a = new RegExp(`${s}|${o}`);
class c {
    constructor(e, t) {
        this.parts = [], this.element = t;
        const n = [],
            i = [],
            r = document.createTreeWalker(t.content, 133, null, !1);
        let o = 0,
            c = -1,
            l = 0;
        const {
            strings: f,
            values: {
                length: p
            }
        } = e;
        for (; l < p;) {
            const e = r.nextNode();
            if (null !== e) {
                if (c++, 1 === e.nodeType) {
                    if (e.hasAttributes()) {
                        const t = e.attributes,
                            {
                                length: n
                            } = t;
                        let i = 0;
                        for (let e = 0; e < n; e++) h(t[e].name, "$lit$") && i++;
                        for (; i-- > 0;) {
                            const t = f[l],
                                n = d.exec(t)[2],
                                i = n.toLowerCase() + "$lit$",
                                r = e.getAttribute(i);
                            e.removeAttribute(i);
                            const s = r.split(a);
                            this.parts.push({
                                type: "attribute",
                                index: c,
                                name: n,
                                strings: s
                            }), l += s.length - 1
                        }
                    }
                    "TEMPLATE" === e.tagName && (i.push(e), r.currentNode = e.content)
                } else if (3 === e.nodeType) {
                    const t = e.data;
                    if (t.indexOf(s) >= 0) {
                        const i = e.parentNode,
                            r = t.split(a),
                            s = r.length - 1;
                        for (let t = 0; t < s; t++) {
                            let n, s = r[t];
                            if ("" === s) n = u();
                            else {
                                const e = d.exec(s);
                                null !== e && h(e[2], "$lit$") && (s = s.slice(0, e.index) + e[1] + e[2].slice(0, -"$lit$".length) + e[3]), n = document.createTextNode(s)
                            }
                            i.insertBefore(n, e), this.parts.push({
                                type: "node",
                                index: ++c
                            })
                        }
                        "" === r[s] ? (i.insertBefore(u(), e), n.push(e)) : e.data = r[s], l += s
                    }
                } else if (8 === e.nodeType)
                    if (e.data === s) {
                        const t = e.parentNode;
                        null !== e.previousSibling && c !== o || (c++, t.insertBefore(u(), e)), o = c, this.parts.push({
                            type: "node",
                            index: c
                        }), null === e.nextSibling ? e.data = "" : (n.push(e), c--), l++
                    } else {
                        let t = -1;
                        for (; - 1 !== (t = e.data.indexOf(s, t + 1));) this.parts.push({
                            type: "node",
                            index: -1
                        }), l++
                    }
            } else r.currentNode = i.pop()
        }
        for (const e of n) e.parentNode.removeChild(e)
    }
}
const h = (e, t) => {
        const n = e.length - t.length;
        return n >= 0 && e.slice(n) === t
    },
    l = e => -1 !== e.index,
    u = () => document.createComment(""),
    d = /([ \x09\x0a\x0c\x0d])([^\0-\x1F\x7F-\x9F "'>=/]+)([ \x09\x0a\x0c\x0d]*=[ \x09\x0a\x0c\x0d]*(?:[^ \x09\x0a\x0c\x0d"'`<>=]*|"[^"]*|'[^']*))$/;

function f(e, t) {
    const {
        element: {
            content: n
        },
        parts: i
    } = e, r = document.createTreeWalker(n, 133, null, !1);
    let s = g(i),
        o = i[s],
        a = -1,
        c = 0;
    const h = [];
    let l = null;
    for (; r.nextNode();) {
        a++;
        const e = r.currentNode;
        for (e.previousSibling === l && (l = null), t.has(e) && (h.push(e), null === l && (l = e)), null !== l && c++; void 0 !== o && o.index === a;) o.index = null !== l ? -1 : o.index - c, s = g(i, s), o = i[s]
    }
    h.forEach((e => e.parentNode.removeChild(e)))
}
const p = e => {
        let t = 11 === e.nodeType ? 0 : 1;
        const n = document.createTreeWalker(e, 133, null, !1);
        for (; n.nextNode();) t++;
        return t
    },
    g = (e, t = -1) => {
        for (let n = t + 1; n < e.length; n++) {
            const t = e[n];
            if (l(t)) return n
        }
        return -1
    };
const m = new WeakMap,
    y = e => (...t) => {
        const n = e(...t);
        return m.set(n, !0), n
    },
    v = e => "function" == typeof e && m.has(e),
    w = {},
    b = {};
class _ {
    constructor(e, t, n) {
        this.__parts = [], this.template = e, this.processor = t, this.options = n
    }
    update(e) {
        let t = 0;
        for (const n of this.__parts) void 0 !== n && n.setValue(e[t]), t++;
        for (const e of this.__parts) void 0 !== e && e.commit()
    }
    _clone() {
        const e = i ? this.template.element.content.cloneNode(!0) : document.importNode(this.template.element.content, !0),
            t = [],
            n = this.template.parts,
            r = document.createTreeWalker(e, 133, null, !1);
        let s, o = 0,
            a = 0,
            c = r.nextNode();
        for (; o < n.length;)
            if (s = n[o], l(s)) {
                for (; a < s.index;) a++, "TEMPLATE" === c.nodeName && (t.push(c), r.currentNode = c.content), null === (c = r.nextNode()) && (r.currentNode = t.pop(), c = r.nextNode());
                if ("node" === s.type) {
                    const e = this.processor.handleTextExpression(this.options);
                    e.insertAfterNode(c.previousSibling), this.__parts.push(e)
                } else this.__parts.push(...this.processor.handleAttributeExpressions(c, s.name, s.strings, this.options));
                o++
            } else this.__parts.push(void 0), o++;
        return i && (document.adoptNode(e), customElements.upgrade(e)), e
    }
}
const E = window.trustedTypes && trustedTypes.createPolicy("lit-html", {
        createHTML: e => e
    }),
    T = ` ${s} `;
class S {
    constructor(e, t, n, i) {
        this.strings = e, this.values = t, this.type = n, this.processor = i
    }
    getHTML() {
        const e = this.strings.length - 1;
        let t = "",
            n = !1;
        for (let i = 0; i < e; i++) {
            const e = this.strings[i],
                r = e.lastIndexOf("\x3c!--");
            n = (r > -1 || n) && -1 === e.indexOf("--\x3e", r + 1);
            const a = d.exec(e);
            t += null === a ? e + (n ? T : o) : e.substr(0, a.index) + a[1] + a[2] + "$lit$" + a[3] + s
        }
        return t += this.strings[e], t
    }
    getTemplateElement() {
        const e = document.createElement("template");
        let t = this.getHTML();
        return void 0 !== E && (t = E.createHTML(t)), e.innerHTML = t, e
    }
}
class I extends S {
    getHTML() {
        return `<svg>${super.getHTML()}</svg>`
    }
    getTemplateElement() {
        const e = super.getTemplateElement(),
            t = e.content,
            n = t.firstChild;
        return t.removeChild(n), ((e, t, n = null, i = null) => {
            for (; t !== n;) {
                const n = t.nextSibling;
                e.insertBefore(t, i), t = n
            }
        })(t, n.firstChild), e
    }
}
const k = e => null === e || !("object" == typeof e || "function" == typeof e),
    A = e => Array.isArray(e) || !(!e || !e[Symbol.iterator]);
class N {
    constructor(e, t, n) {
        this.dirty = !0, this.element = e, this.name = t, this.strings = n, this.parts = [];
        for (let e = 0; e < n.length - 1; e++) this.parts[e] = this._createPart()
    }
    _createPart() {
        return new C(this)
    }
    _getValue() {
        const e = this.strings,
            t = e.length - 1,
            n = this.parts;
        if (1 === t && "" === e[0] && "" === e[1]) {
            const e = n[0].value;
            if ("symbol" == typeof e) return String(e);
            if ("string" == typeof e || !A(e)) return e
        }
        let i = "";
        for (let r = 0; r < t; r++) {
            i += e[r];
            const t = n[r];
            if (void 0 !== t) {
                const e = t.value;
                if (k(e) || !A(e)) i += "string" == typeof e ? e : String(e);
                else
                    for (const t of e) i += "string" == typeof t ? t : String(t)
            }
        }
        return i += e[t], i
    }
    commit() {
        this.dirty && (this.dirty = !1, this.element.setAttribute(this.name, this._getValue()))
    }
}
class C {
    constructor(e) {
        this.value = void 0, this.committer = e
    }
    setValue(e) {
        e === w || k(e) && e === this.value || (this.value = e, v(e) || (this.committer.dirty = !0))
    }
    commit() {
        for (; v(this.value);) {
            const e = this.value;
            this.value = w, e(this)
        }
        this.value !== w && this.committer.commit()
    }
}
class R {
    constructor(e) {
        this.value = void 0, this.__pendingValue = void 0, this.options = e
    }
    appendInto(e) {
        this.startNode = e.appendChild(u()), this.endNode = e.appendChild(u())
    }
    insertAfterNode(e) {
        this.startNode = e, this.endNode = e.nextSibling
    }
    appendIntoPart(e) {
        e.__insert(this.startNode = u()), e.__insert(this.endNode = u())
    }
    insertAfterPart(e) {
        e.__insert(this.startNode = u()), this.endNode = e.endNode, e.endNode = this.startNode
    }
    setValue(e) {
        this.__pendingValue = e
    }
    commit() {
        if (null === this.startNode.parentNode) return;
        for (; v(this.__pendingValue);) {
            const e = this.__pendingValue;
            this.__pendingValue = w, e(this)
        }
        const e = this.__pendingValue;
        e !== w && (k(e) ? e !== this.value && this.__commitText(e) : e instanceof S ? this.__commitTemplateResult(e) : e instanceof Node ? this.__commitNode(e) : A(e) ? this.__commitIterable(e) : e === b ? (this.value = b, this.clear()) : this.__commitText(e))
    }
    __insert(e) {
        this.endNode.parentNode.insertBefore(e, this.endNode)
    }
    __commitNode(e) {
        this.value !== e && (this.clear(), this.__insert(e), this.value = e)
    }
    __commitText(e) {
        const t = this.startNode.nextSibling,
            n = "string" == typeof (e = null == e ? "" : e) ? e : String(e);
        t === this.endNode.previousSibling && 3 === t.nodeType ? t.data = n : this.__commitNode(document.createTextNode(n)), this.value = e
    }
    __commitTemplateResult(e) {
        const t = this.options.templateFactory(e);
        if (this.value instanceof _ && this.value.template === t) this.value.update(e.values);
        else {
            const n = new _(t, e.processor, this.options),
                i = n._clone();
            n.update(e.values), this.__commitNode(i), this.value = n
        }
    }
    __commitIterable(e) {
        Array.isArray(this.value) || (this.value = [], this.clear());
        const t = this.value;
        let n, i = 0;
        for (const r of e) n = t[i], void 0 === n && (n = new R(this.options), t.push(n), 0 === i ? n.appendIntoPart(this) : n.insertAfterPart(t[i - 1])), n.setValue(r), n.commit(), i++;
        i < t.length && (t.length = i, this.clear(n && n.endNode))
    }
    clear(e = this.startNode) {
        r(this.startNode.parentNode, e.nextSibling, this.endNode)
    }
}
class x {
    constructor(e, t, n) {
        if (this.value = void 0, this.__pendingValue = void 0, 2 !== n.length || "" !== n[0] || "" !== n[1]) throw new Error("Boolean attributes can only contain a single expression");
        this.element = e, this.name = t, this.strings = n
    }
    setValue(e) {
        this.__pendingValue = e
    }
    commit() {
        for (; v(this.__pendingValue);) {
            const e = this.__pendingValue;
            this.__pendingValue = w, e(this)
        }
        if (this.__pendingValue === w) return;
        const e = !!this.__pendingValue;
        this.value !== e && (e ? this.element.setAttribute(this.name, "") : this.element.removeAttribute(this.name), this.value = e), this.__pendingValue = w
    }
}
class D extends N {
    constructor(e, t, n) {
        super(e, t, n), this.single = 2 === n.length && "" === n[0] && "" === n[1]
    }
    _createPart() {
        return new L(this)
    }
    _getValue() {
        return this.single ? this.parts[0].value : super._getValue()
    }
    commit() {
        this.dirty && (this.dirty = !1, this.element[this.name] = this._getValue())
    }
}
class L extends C {}
let O = !1;
(() => {
    try {
        const e = {
            get capture() {
                return O = !0, !1
            }
        };
        window.addEventListener("test", e, e), window.removeEventListener("test", e, e)
    } catch (e) {}
})();
class P {
    constructor(e, t, n) {
        this.value = void 0, this.__pendingValue = void 0, this.element = e, this.eventName = t, this.eventContext = n, this.__boundHandleEvent = e => this.handleEvent(e)
    }
    setValue(e) {
        this.__pendingValue = e
    }
    commit() {
        for (; v(this.__pendingValue);) {
            const e = this.__pendingValue;
            this.__pendingValue = w, e(this)
        }
        if (this.__pendingValue === w) return;
        const e = this.__pendingValue,
            t = this.value,
            n = null == e || null != t && (e.capture !== t.capture || e.once !== t.once || e.passive !== t.passive),
            i = null != e && (null == t || n);
        n && this.element.removeEventListener(this.eventName, this.__boundHandleEvent, this.__options), i && (this.__options = M(e), this.element.addEventListener(this.eventName, this.__boundHandleEvent, this.__options)), this.value = e, this.__pendingValue = w
    }
    handleEvent(e) {
        "function" == typeof this.value ? this.value.call(this.eventContext || this.element, e) : this.value.handleEvent(e)
    }
}
const M = e => e && (O ? {
    capture: e.capture,
    passive: e.passive,
    once: e.once
} : e.capture);

function U(e) {
    let t = V.get(e.type);
    void 0 === t && (t = {
        stringsArray: new WeakMap,
        keyString: new Map
    }, V.set(e.type, t));
    let n = t.stringsArray.get(e.strings);
    if (void 0 !== n) return n;
    const i = e.strings.join(s);
    return n = t.keyString.get(i), void 0 === n && (n = new c(e, e.getTemplateElement()), t.keyString.set(i, n)), t.stringsArray.set(e.strings, n), n
}
const V = new Map,
    F = new WeakMap,
    j = (e, t, n) => {
        let i = F.get(t);
        void 0 === i && (r(t, t.firstChild), F.set(t, i = new R(Object.assign({
            templateFactory: U
        }, n))), i.appendInto(t)), i.setValue(e), i.commit()
    };
const q = new class {
    handleAttributeExpressions(e, t, n, i) {
        const r = t[0];
        if ("." === r) {
            return new D(e, t.slice(1), n).parts
        }
        if ("@" === r) return [new P(e, t.slice(1), i.eventContext)];
        if ("?" === r) return [new x(e, t.slice(1), n)];
        return new N(e, t, n).parts
    }
    handleTextExpression(e) {
        return new R(e)
    }
};
"undefined" != typeof window && (window.litHtmlVersions || (window.litHtmlVersions = [])).push("1.4.1");
const B = (e, ...t) => new S(e, t, "html", q),
    $ = (e, ...t) => new I(e, t, "svg", q),
    H = (e, t) => `${e}--${t}`;
let z = !0;
void 0 === window.ShadyCSS ? z = !1 : void 0 === window.ShadyCSS.prepareTemplateDom && (console.warn("Incompatible ShadyCSS version detected. Please update to at least @webcomponents/webcomponentsjs@2.0.2 and @webcomponents/shadycss@1.3.1."), z = !1);
const K = e => t => {
        const n = H(t.type, e);
        let i = V.get(n);
        void 0 === i && (i = {
            stringsArray: new WeakMap,
            keyString: new Map
        }, V.set(n, i));
        let r = i.stringsArray.get(t.strings);
        if (void 0 !== r) return r;
        const o = t.strings.join(s);
        if (r = i.keyString.get(o), void 0 === r) {
            const n = t.getTemplateElement();
            z && window.ShadyCSS.prepareTemplateDom(n, e), r = new c(t, n), i.keyString.set(o, r)
        }
        return i.stringsArray.set(t.strings, r), r
    },
    G = ["html", "svg"],
    W = new Set,
    Q = (e, t, n) => {
        W.add(e);
        const i = n ? n.element : document.createElement("template"),
            r = t.querySelectorAll("style"),
            {
                length: s
            } = r;
        if (0 === s) return void window.ShadyCSS.prepareTemplateStyles(i, e);
        const o = document.createElement("style");
        for (let e = 0; e < s; e++) {
            const t = r[e];
            t.parentNode.removeChild(t), o.textContent += t.textContent
        }(e => {
            G.forEach((t => {
                const n = V.get(H(t, e));
                void 0 !== n && n.keyString.forEach((e => {
                    const {
                        element: {
                            content: t
                        }
                    } = e, n = new Set;
                    Array.from(t.querySelectorAll("style")).forEach((e => {
                        n.add(e)
                    })), f(e, n)
                }))
            }))
        })(e);
        const a = i.content;
        n ? function (e, t, n = null) {
            const {
                element: {
                    content: i
                },
                parts: r
            } = e;
            if (null == n) return void i.appendChild(t);
            const s = document.createTreeWalker(i, 133, null, !1);
            let o = g(r),
                a = 0,
                c = -1;
            for (; s.nextNode();)
                for (c++, s.currentNode === n && (a = p(t), n.parentNode.insertBefore(t, n)); - 1 !== o && r[o].index === c;) {
                    if (a > 0) {
                        for (; - 1 !== o;) r[o].index += a, o = g(r, o);
                        return
                    }
                    o = g(r, o)
                }
        }(n, o, a.firstChild) : a.insertBefore(o, a.firstChild), window.ShadyCSS.prepareTemplateStyles(i, e);
        const c = a.querySelector("style");
        if (window.ShadyCSS.nativeShadow && null !== c) t.insertBefore(c.cloneNode(!0), t.firstChild);
        else if (n) {
            a.insertBefore(o, a.firstChild);
            const e = new Set;
            e.add(o), f(n, e)
        }
    };
window.JSCompiler_renameProperty = (e, t) => e;
const J = {
        toAttribute(e, t) {
            switch (t) {
                case Boolean:
                    return e ? "" : null;
                case Object:
                case Array:
                    return null == e ? e : JSON.stringify(e)
            }
            return e
        },
        fromAttribute(e, t) {
            switch (t) {
                case Boolean:
                    return null !== e;
                case Number:
                    return null === e ? null : Number(e);
                case Object:
                case Array:
                    return JSON.parse(e)
            }
            return e
        }
    },
    X = (e, t) => t !== e && (t == t || e == e),
    Y = {
        attribute: !0,
        type: String,
        converter: J,
        reflect: !1,
        hasChanged: X
    };
class Z extends HTMLElement {
    constructor() {
        super(), this.initialize()
    }
    static get observedAttributes() {
        this.finalize();
        const e = [];
        return this._classProperties.forEach(((t, n) => {
            const i = this._attributeNameForProperty(n, t);
            void 0 !== i && (this._attributeToPropertyMap.set(i, n), e.push(i))
        })), e
    }
    static _ensureClassProperties() {
        if (!this.hasOwnProperty(JSCompiler_renameProperty("_classProperties", this))) {
            this._classProperties = new Map;
            const e = Object.getPrototypeOf(this)._classProperties;
            void 0 !== e && e.forEach(((e, t) => this._classProperties.set(t, e)))
        }
    }
    static createProperty(e, t = Y) {
        if (this._ensureClassProperties(), this._classProperties.set(e, t), t.noAccessor || this.prototype.hasOwnProperty(e)) return;
        const n = "symbol" == typeof e ? Symbol() : `__${e}`,
            i = this.getPropertyDescriptor(e, n, t);
        void 0 !== i && Object.defineProperty(this.prototype, e, i)
    }
    static getPropertyDescriptor(e, t, n) {
        return {
            get() {
                return this[t]
            },
            set(i) {
                const r = this[e];
                this[t] = i, this.requestUpdateInternal(e, r, n)
            },
            configurable: !0,
            enumerable: !0
        }
    }
    static getPropertyOptions(e) {
        return this._classProperties && this._classProperties.get(e) || Y
    }
    static finalize() {
        const e = Object.getPrototypeOf(this);
        if (e.hasOwnProperty("finalized") || e.finalize(), this.finalized = !0, this._ensureClassProperties(), this._attributeToPropertyMap = new Map, this.hasOwnProperty(JSCompiler_renameProperty("properties", this))) {
            const e = this.properties,
                t = [...Object.getOwnPropertyNames(e), ..."function" == typeof Object.getOwnPropertySymbols ? Object.getOwnPropertySymbols(e) : []];
            for (const n of t) this.createProperty(n, e[n])
        }
    }
    static _attributeNameForProperty(e, t) {
        const n = t.attribute;
        return !1 === n ? void 0 : "string" == typeof n ? n : "string" == typeof e ? e.toLowerCase() : void 0
    }
    static _valueHasChanged(e, t, n = X) {
        return n(e, t)
    }
    static _propertyValueFromAttribute(e, t) {
        const n = t.type,
            i = t.converter || J,
            r = "function" == typeof i ? i : i.fromAttribute;
        return r ? r(e, n) : e
    }
    static _propertyValueToAttribute(e, t) {
        if (void 0 === t.reflect) return;
        const n = t.type,
            i = t.converter;
        return (i && i.toAttribute || J.toAttribute)(e, n)
    }
    initialize() {
        this._updateState = 0, this._updatePromise = new Promise((e => this._enableUpdatingResolver = e)), this._changedProperties = new Map, this._saveInstanceProperties(), this.requestUpdateInternal()
    }
    _saveInstanceProperties() {
        this.constructor._classProperties.forEach(((e, t) => {
            if (this.hasOwnProperty(t)) {
                const e = this[t];
                delete this[t], this._instanceProperties || (this._instanceProperties = new Map), this._instanceProperties.set(t, e)
            }
        }))
    }
    _applyInstanceProperties() {
        this._instanceProperties.forEach(((e, t) => this[t] = e)), this._instanceProperties = void 0
    }
    connectedCallback() {
        this.enableUpdating()
    }
    enableUpdating() {
        void 0 !== this._enableUpdatingResolver && (this._enableUpdatingResolver(), this._enableUpdatingResolver = void 0)
    }
    disconnectedCallback() {}
    attributeChangedCallback(e, t, n) {
        t !== n && this._attributeToProperty(e, n)
    }
    _propertyToAttribute(e, t, n = Y) {
        const i = this.constructor,
            r = i._attributeNameForProperty(e, n);
        if (void 0 !== r) {
            const e = i._propertyValueToAttribute(t, n);
            if (void 0 === e) return;
            this._updateState = 8 | this._updateState, null == e ? this.removeAttribute(r) : this.setAttribute(r, e), this._updateState = -9 & this._updateState
        }
    }
    _attributeToProperty(e, t) {
        if (8 & this._updateState) return;
        const n = this.constructor,
            i = n._attributeToPropertyMap.get(e);
        if (void 0 !== i) {
            const e = n.getPropertyOptions(i);
            this._updateState = 16 | this._updateState, this[i] = n._propertyValueFromAttribute(t, e), this._updateState = -17 & this._updateState
        }
    }
    requestUpdateInternal(e, t, n) {
        let i = !0;
        if (void 0 !== e) {
            const r = this.constructor;
            n = n || r.getPropertyOptions(e), r._valueHasChanged(this[e], t, n.hasChanged) ? (this._changedProperties.has(e) || this._changedProperties.set(e, t), !0 !== n.reflect || 16 & this._updateState || (void 0 === this._reflectingProperties && (this._reflectingProperties = new Map), this._reflectingProperties.set(e, n))) : i = !1
        }!this._hasRequestedUpdate && i && (this._updatePromise = this._enqueueUpdate())
    }
    requestUpdate(e, t) {
        return this.requestUpdateInternal(e, t), this.updateComplete
    }
    async _enqueueUpdate() {
        this._updateState = 4 | this._updateState;
        try {
            await this._updatePromise
        } catch (e) {}
        const e = this.performUpdate();
        return null != e && await e, !this._hasRequestedUpdate
    }
    get _hasRequestedUpdate() {
        return 4 & this._updateState
    }
    get hasUpdated() {
        return 1 & this._updateState
    }
    performUpdate() {
        if (!this._hasRequestedUpdate) return;
        this._instanceProperties && this._applyInstanceProperties();
        let e = !1;
        const t = this._changedProperties;
        try {
            e = this.shouldUpdate(t), e ? this.update(t) : this._markUpdated()
        } catch (t) {
            throw e = !1, this._markUpdated(), t
        }
        e && (1 & this._updateState || (this._updateState = 1 | this._updateState, this.firstUpdated(t)), this.updated(t))
    }
    _markUpdated() {
        this._changedProperties = new Map, this._updateState = -5 & this._updateState
    }
    get updateComplete() {
        return this._getUpdateComplete()
    }
    _getUpdateComplete() {
        return this.getUpdateComplete()
    }
    getUpdateComplete() {
        return this._updatePromise
    }
    shouldUpdate(e) {
        return !0
    }
    update(e) {
        void 0 !== this._reflectingProperties && this._reflectingProperties.size > 0 && (this._reflectingProperties.forEach(((e, t) => this._propertyToAttribute(t, this[t], e))), this._reflectingProperties = void 0), this._markUpdated()
    }
    updated(e) {}
    firstUpdated(e) {}
}
Z.finalized = !0;
const ee = window.ShadowRoot && (void 0 === window.ShadyCSS || window.ShadyCSS.nativeShadow) && "adoptedStyleSheets" in Document.prototype && "replace" in CSSStyleSheet.prototype,
    te = Symbol();
class ne {
    constructor(e, t) {
        if (t !== te) throw new Error("CSSResult is not constructable. Use `unsafeCSS` or `css` instead.");
        this.cssText = e
    }
    get styleSheet() {
        return void 0 === this._styleSheet && (ee ? (this._styleSheet = new CSSStyleSheet, this._styleSheet.replaceSync(this.cssText)) : this._styleSheet = null), this._styleSheet
    }
    toString() {
        return this.cssText
    }
}(window.litElementVersions || (window.litElementVersions = [])).push("2.5.1");
const ie = {};
class re extends Z {
    static getStyles() {
        return this.styles
    }
    static _getUniqueStyles() {
        if (this.hasOwnProperty(JSCompiler_renameProperty("_styles", this))) return;
        const e = this.getStyles();
        if (Array.isArray(e)) {
            const t = (e, n) => e.reduceRight(((e, n) => Array.isArray(n) ? t(n, e) : (e.add(n), e)), n),
                n = t(e, new Set),
                i = [];
            n.forEach((e => i.unshift(e))), this._styles = i
        } else this._styles = void 0 === e ? [] : [e];
        this._styles = this._styles.map((e => {
            if (e instanceof CSSStyleSheet && !ee) {
                const t = Array.prototype.slice.call(e.cssRules).reduce(((e, t) => e + t.cssText), "");
                return new ne(String(t), te)
            }
            return e
        }))
    }
    initialize() {
        super.initialize(), this.constructor._getUniqueStyles(), this.renderRoot = this.createRenderRoot(), window.ShadowRoot && this.renderRoot instanceof window.ShadowRoot && this.adoptStyles()
    }
    createRenderRoot() {
        return this.attachShadow(this.constructor.shadowRootOptions)
    }
    adoptStyles() {
        const e = this.constructor._styles;
        0 !== e.length && (void 0 === window.ShadyCSS || window.ShadyCSS.nativeShadow ? ee ? this.renderRoot.adoptedStyleSheets = e.map((e => e instanceof CSSStyleSheet ? e : e.styleSheet)) : this._needsShimAdoptedStyleSheets = !0 : window.ShadyCSS.ScopingShim.prepareAdoptedCssText(e.map((e => e.cssText)), this.localName))
    }
    connectedCallback() {
        super.connectedCallback(), this.hasUpdated && void 0 !== window.ShadyCSS && window.ShadyCSS.styleElement(this)
    }
    update(e) {
        const t = this.render();
        super.update(e), t !== ie && this.constructor.render(t, this.renderRoot, {
            scopeName: this.localName,
            eventContext: this
        }), this._needsShimAdoptedStyleSheets && (this._needsShimAdoptedStyleSheets = !1, this.constructor._styles.forEach((e => {
            const t = document.createElement("style");
            t.textContent = e.cssText, this.renderRoot.appendChild(t)
        })))
    }
    render() {
        return ie
    }
}
re.finalized = !0, re.render = (e, t, n) => {
    if (!n || "object" != typeof n || !n.scopeName) throw new Error("The `scopeName` option is required.");
    const i = n.scopeName,
        s = F.has(t),
        o = z && 11 === t.nodeType && !!t.host,
        a = o && !W.has(i),
        c = a ? document.createDocumentFragment() : t;
    if (j(e, c, Object.assign({
            templateFactory: K(i)
        }, n)), a) {
        const e = F.get(c);
        F.delete(c);
        const n = e.value instanceof _ ? e.value.template : void 0;
        Q(i, c, n), r(t, t.firstChild), t.appendChild(c), F.set(t, e)
    }!s && o && window.ShadyCSS.styleElement(t.host)
}, re.shadowRootOptions = {
    mode: "open"
};
class se extends re {
    firstUpdated(e) {
        this.classList.remove("unresolved"), super.firstUpdated(e)
    }
    createRenderRoot() {
        return this
    }
}

function oe(e, t) {
    void 0 === t && (t = {});
    var n = t.insertAt;
    if (e && "undefined" != typeof document) {
        var i = document.head || document.getElementsByTagName("head")[0],
            r = document.createElement("style");
        r.type = "text/css", "top" === n && i.firstChild ? i.insertBefore(r, i.firstChild) : i.appendChild(r), r.styleSheet ? r.styleSheet.cssText = e : r.appendChild(document.createTextNode(e))
    }
}
var ae = function () {
    function e(e, t) {
        for (var n = 0; n < t.length; n++) {
            var i = t[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
        }
    }
    return function (t, n, i) {
        return n && e(t.prototype, n), i && e(t, i), t
    }
}();

function ce(e, t) {
    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}! function () {
    if ("undefined" != typeof window) {
        var e = Array.prototype.slice,
            t = Element.prototype.matches || Element.prototype.msMatchesSelector,
            n = ["a[href]", "area[href]", "input:not([disabled])", "select:not([disabled])", "textarea:not([disabled])", "button:not([disabled])", "details", "summary", "iframe", "object", "embed", "[contenteditable]"].join(","),
            i = function () {
                function i(e, t) {
                    ce(this, i), this._inertManager = t, this._rootElement = e, this._managedNodes = new Set, this._rootElement.hasAttribute("aria-hidden") ? this._savedAriaHidden = this._rootElement.getAttribute("aria-hidden") : this._savedAriaHidden = null, this._rootElement.setAttribute("aria-hidden", "true"), this._makeSubtreeUnfocusable(this._rootElement), this._observer = new MutationObserver(this._onMutation.bind(this)), this._observer.observe(this._rootElement, {
                        attributes: !0,
                        childList: !0,
                        subtree: !0
                    })
                }
                return ae(i, [{
                    key: "destructor",
                    value: function () {
                        this._observer.disconnect(), this._rootElement && (null !== this._savedAriaHidden ? this._rootElement.setAttribute("aria-hidden", this._savedAriaHidden) : this._rootElement.removeAttribute("aria-hidden")), this._managedNodes.forEach((function (e) {
                            this._unmanageNode(e.node)
                        }), this), this._observer = null, this._rootElement = null, this._managedNodes = null, this._inertManager = null
                    }
                }, {
                    key: "_makeSubtreeUnfocusable",
                    value: function (e) {
                        var t = this;
                        a(e, (function (e) {
                            return t._visitNode(e)
                        }));
                        var n = document.activeElement;
                        if (!document.body.contains(e)) {
                            for (var i = e, r = void 0; i;) {
                                if (i.nodeType === Node.DOCUMENT_FRAGMENT_NODE) {
                                    r = i;
                                    break
                                }
                                i = i.parentNode
                            }
                            r && (n = r.activeElement)
                        }
                        e.contains(n) && (n.blur(), n === document.activeElement && document.body.focus())
                    }
                }, {
                    key: "_visitNode",
                    value: function (e) {
                        if (e.nodeType === Node.ELEMENT_NODE) {
                            var i = e;
                            i !== this._rootElement && i.hasAttribute("inert") && this._adoptInertRoot(i), (t.call(i, n) || i.hasAttribute("tabindex")) && this._manageNode(i)
                        }
                    }
                }, {
                    key: "_manageNode",
                    value: function (e) {
                        var t = this._inertManager.register(e, this);
                        this._managedNodes.add(t)
                    }
                }, {
                    key: "_unmanageNode",
                    value: function (e) {
                        var t = this._inertManager.deregister(e, this);
                        t && this._managedNodes.delete(t)
                    }
                }, {
                    key: "_unmanageSubtree",
                    value: function (e) {
                        var t = this;
                        a(e, (function (e) {
                            return t._unmanageNode(e)
                        }))
                    }
                }, {
                    key: "_adoptInertRoot",
                    value: function (e) {
                        var t = this._inertManager.getInertRoot(e);
                        t || (this._inertManager.setInert(e, !0), t = this._inertManager.getInertRoot(e)), t.managedNodes.forEach((function (e) {
                            this._manageNode(e.node)
                        }), this)
                    }
                }, {
                    key: "_onMutation",
                    value: function (t, n) {
                        t.forEach((function (t) {
                            var n = t.target;
                            if ("childList" === t.type) e.call(t.addedNodes).forEach((function (e) {
                                this._makeSubtreeUnfocusable(e)
                            }), this), e.call(t.removedNodes).forEach((function (e) {
                                this._unmanageSubtree(e)
                            }), this);
                            else if ("attributes" === t.type)
                                if ("tabindex" === t.attributeName) this._manageNode(n);
                                else if (n !== this._rootElement && "inert" === t.attributeName && n.hasAttribute("inert")) {
                                this._adoptInertRoot(n);
                                var i = this._inertManager.getInertRoot(n);
                                this._managedNodes.forEach((function (e) {
                                    n.contains(e.node) && i._manageNode(e.node)
                                }))
                            }
                        }), this)
                    }
                }, {
                    key: "managedNodes",
                    get: function () {
                        return new Set(this._managedNodes)
                    }
                }, {
                    key: "hasSavedAriaHidden",
                    get: function () {
                        return null !== this._savedAriaHidden
                    }
                }, {
                    key: "savedAriaHidden",
                    set: function (e) {
                        this._savedAriaHidden = e
                    },
                    get: function () {
                        return this._savedAriaHidden
                    }
                }]), i
            }(),
            r = function () {
                function e(t, n) {
                    ce(this, e), this._node = t, this._overrodeFocusMethod = !1, this._inertRoots = new Set([n]), this._savedTabIndex = null, this._destroyed = !1, this.ensureUntabbable()
                }
                return ae(e, [{
                    key: "destructor",
                    value: function () {
                        if (this._throwIfDestroyed(), this._node && this._node.nodeType === Node.ELEMENT_NODE) {
                            var e = this._node;
                            null !== this._savedTabIndex ? e.setAttribute("tabindex", this._savedTabIndex) : e.removeAttribute("tabindex"), this._overrodeFocusMethod && delete e.focus
                        }
                        this._node = null, this._inertRoots = null, this._destroyed = !0
                    }
                }, {
                    key: "_throwIfDestroyed",
                    value: function () {
                        if (this.destroyed) throw new Error("Trying to access destroyed InertNode")
                    }
                }, {
                    key: "ensureUntabbable",
                    value: function () {
                        if (this.node.nodeType === Node.ELEMENT_NODE) {
                            var e = this.node;
                            if (t.call(e, n)) {
                                if (-1 === e.tabIndex && this.hasSavedTabIndex) return;
                                e.hasAttribute("tabindex") && (this._savedTabIndex = e.tabIndex), e.setAttribute("tabindex", "-1"), e.nodeType === Node.ELEMENT_NODE && (e.focus = function () {}, this._overrodeFocusMethod = !0)
                            } else e.hasAttribute("tabindex") && (this._savedTabIndex = e.tabIndex, e.removeAttribute("tabindex"))
                        }
                    }
                }, {
                    key: "addInertRoot",
                    value: function (e) {
                        this._throwIfDestroyed(), this._inertRoots.add(e)
                    }
                }, {
                    key: "removeInertRoot",
                    value: function (e) {
                        this._throwIfDestroyed(), this._inertRoots.delete(e), 0 === this._inertRoots.size && this.destructor()
                    }
                }, {
                    key: "destroyed",
                    get: function () {
                        return this._destroyed
                    }
                }, {
                    key: "hasSavedTabIndex",
                    get: function () {
                        return null !== this._savedTabIndex
                    }
                }, {
                    key: "node",
                    get: function () {
                        return this._throwIfDestroyed(), this._node
                    }
                }, {
                    key: "savedTabIndex",
                    set: function (e) {
                        this._throwIfDestroyed(), this._savedTabIndex = e
                    },
                    get: function () {
                        return this._throwIfDestroyed(), this._savedTabIndex
                    }
                }]), e
            }(),
            s = function () {
                function n(e) {
                    if (ce(this, n), !e) throw new Error("Missing required argument; InertManager needs to wrap a document.");
                    this._document = e, this._managedNodes = new Map, this._inertRoots = new Map, this._observer = new MutationObserver(this._watchForInert.bind(this)), c(e.head || e.body || e.documentElement), "loading" === e.readyState ? e.addEventListener("DOMContentLoaded", this._onDocumentLoaded.bind(this)) : this._onDocumentLoaded()
                }
                return ae(n, [{
                    key: "setInert",
                    value: function (e, t) {
                        if (t) {
                            if (this._inertRoots.has(e)) return;
                            var n = new i(e, this);
                            if (e.setAttribute("inert", ""), this._inertRoots.set(e, n), !this._document.body.contains(e))
                                for (var r = e.parentNode; r;) 11 === r.nodeType && c(r), r = r.parentNode
                        } else {
                            if (!this._inertRoots.has(e)) return;
                            this._inertRoots.get(e).destructor(), this._inertRoots.delete(e), e.removeAttribute("inert")
                        }
                    }
                }, {
                    key: "getInertRoot",
                    value: function (e) {
                        return this._inertRoots.get(e)
                    }
                }, {
                    key: "register",
                    value: function (e, t) {
                        var n = this._managedNodes.get(e);
                        return void 0 !== n ? n.addInertRoot(t) : n = new r(e, t), this._managedNodes.set(e, n), n
                    }
                }, {
                    key: "deregister",
                    value: function (e, t) {
                        var n = this._managedNodes.get(e);
                        return n ? (n.removeInertRoot(t), n.destroyed && this._managedNodes.delete(e), n) : null
                    }
                }, {
                    key: "_onDocumentLoaded",
                    value: function () {
                        e.call(this._document.querySelectorAll("[inert]")).forEach((function (e) {
                            this.setInert(e, !0)
                        }), this), this._observer.observe(this._document.body || this._document.documentElement, {
                            attributes: !0,
                            subtree: !0,
                            childList: !0
                        })
                    }
                }, {
                    key: "_watchForInert",
                    value: function (n, i) {
                        var r = this;
                        n.forEach((function (n) {
                            switch (n.type) {
                                case "childList":
                                    e.call(n.addedNodes).forEach((function (n) {
                                        if (n.nodeType === Node.ELEMENT_NODE) {
                                            var i = e.call(n.querySelectorAll("[inert]"));
                                            t.call(n, "[inert]") && i.unshift(n), i.forEach((function (e) {
                                                this.setInert(e, !0)
                                            }), r)
                                        }
                                    }), r);
                                    break;
                                case "attributes":
                                    if ("inert" !== n.attributeName) return;
                                    var i = n.target,
                                        s = i.hasAttribute("inert");
                                    r.setInert(i, s)
                            }
                        }), this)
                    }
                }]), n
            }();
        if (!Element.prototype.hasOwnProperty("inert")) {
            var o = new s(document);
            Object.defineProperty(Element.prototype, "inert", {
                enumerable: !0,
                get: function () {
                    return this.hasAttribute("inert")
                },
                set: function (e) {
                    o.setInert(this, e)
                }
            })
        }
    }

    function a(e, t, n) {
        if (e.nodeType == Node.ELEMENT_NODE) {
            var i = e;
            t && t(i);
            var r = i.shadowRoot;
            if (r) return void a(r, t);
            if ("content" == i.localName) {
                for (var s = i, o = s.getDistributedNodes ? s.getDistributedNodes() : [], c = 0; c < o.length; c++) a(o[c], t);
                return
            }
            if ("slot" == i.localName) {
                for (var h = i, l = h.assignedNodes ? h.assignedNodes({
                        flatten: !0
                    }) : [], u = 0; u < l.length; u++) a(l[u], t);
                return
            }
        }
        for (var d = e.firstChild; null != d;) a(d, t), d = d.nextSibling
    }

    function c(e) {
        if (!e.querySelector("style#inert-style, link#inert-style")) {
            var t = document.createElement("style");
            t.setAttribute("id", "inert-style"), t.textContent = "\n[inert] {\n  pointer-events: none;\n  cursor: default;\n}\n\n[inert], [inert] * {\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  -ms-user-select: none;\n  user-select: none;\n}\n", e.appendChild(t)
        }
    }
}();
var he = function (e, t) {
    return (he = Object.setPrototypeOf || {
            __proto__: []
        }
        instanceof Array && function (e, t) {
            e.__proto__ = t
        } || function (e, t) {
            for (var n in t) Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
        })(e, t)
};

function le(e, t) {
    var n = {};
    for (var i in e) Object.prototype.hasOwnProperty.call(e, i) && t.indexOf(i) < 0 && (n[i] = e[i]);
    if (null != e && "function" == typeof Object.getOwnPropertySymbols) {
        var r = 0;
        for (i = Object.getOwnPropertySymbols(e); r < i.length; r++) t.indexOf(i[r]) < 0 && Object.prototype.propertyIsEnumerable.call(e, i[r]) && (n[i[r]] = e[i[r]])
    }
    return n
}

function ue(e, t, n, i) {
    return new(n || (n = Promise))((function (r, s) {
        function o(e) {
            try {
                c(i.next(e))
            } catch (e) {
                s(e)
            }
        }

        function a(e) {
            try {
                c(i.throw(e))
            } catch (e) {
                s(e)
            }
        }

        function c(e) {
            var t;
            e.done ? r(e.value) : (t = e.value, t instanceof n ? t : new n((function (e) {
                e(t)
            }))).then(o, a)
        }
        c((i = i.apply(e, t || [])).next())
    }))
}

function de(e, t) {
    var n, i, r, s, o = {
        label: 0,
        sent: function () {
            if (1 & r[0]) throw r[1];
            return r[1]
        },
        trys: [],
        ops: []
    };
    return s = {
        next: a(0),
        throw: a(1),
        return: a(2)
    }, "function" == typeof Symbol && (s[Symbol.iterator] = function () {
        return this
    }), s;

    function a(s) {
        return function (a) {
            return function (s) {
                if (n) throw new TypeError("Generator is already executing.");
                for (; o;) try {
                    if (n = 1, i && (r = 2 & s[0] ? i.return : s[0] ? i.throw || ((r = i.return) && r.call(i), 0) : i.next) && !(r = r.call(i, s[1])).done) return r;
                    switch (i = 0, r && (s = [2 & s[0], r.value]), s[0]) {
                        case 0:
                        case 1:
                            r = s;
                            break;
                        case 4:
                            return o.label++, {
                                value: s[1],
                                done: !1
                            };
                        case 5:
                            o.label++, i = s[1], s = [0];
                            continue;
                        case 7:
                            s = o.ops.pop(), o.trys.pop();
                            continue;
                        default:
                            if (!(r = o.trys, (r = r.length > 0 && r[r.length - 1]) || 6 !== s[0] && 2 !== s[0])) {
                                o = 0;
                                continue
                            }
                            if (3 === s[0] && (!r || s[1] > r[0] && s[1] < r[3])) {
                                o.label = s[1];
                                break
                            }
                            if (6 === s[0] && o.label < r[1]) {
                                o.label = r[1], r = s;
                                break
                            }
                            if (r && o.label < r[2]) {
                                o.label = r[2], o.ops.push(s);
                                break
                            }
                            r[2] && o.ops.pop(), o.trys.pop();
                            continue
                    }
                    s = t.call(e, o)
                } catch (e) {
                    s = [6, e], i = 0
                } finally {
                    n = r = 0
                }
                if (5 & s[0]) throw s[1];
                return {
                    value: s[0] ? s[1] : void 0,
                    done: !0
                }
            }([s, a])
        }
    }
}

function fe(e) {
    var t = "function" == typeof Symbol && Symbol.iterator,
        n = t && e[t],
        i = 0;
    if (n) return n.call(e);
    if (e && "number" == typeof e.length) return {
        next: function () {
            return e && i >= e.length && (e = void 0), {
                value: e && e[i++],
                done: !e
            }
        }
    };
    throw new TypeError(t ? "Object is not iterable." : "Symbol.iterator is not defined.")
}

function pe(e, t) {
    var n = "function" == typeof Symbol && e[Symbol.iterator];
    if (!n) return e;
    var i, r, s = n.call(e),
        o = [];
    try {
        for (;
            (void 0 === t || t-- > 0) && !(i = s.next()).done;) o.push(i.value)
    } catch (e) {
        r = {
            error: e
        }
    } finally {
        try {
            i && !i.done && (n = s.return) && n.call(s)
        } finally {
            if (r) throw r.error
        }
    }
    return o
}

function ge(e, t, n) {
    if (n || 2 === arguments.length)
        for (var i, r = 0, s = t.length; r < s; r++) !i && r in t || (i || (i = Array.prototype.slice.call(t, 0, r)), i[r] = t[r]);
    return e.concat(i || t)
}
var me = {
        byteToCharMap_: null,
        charToByteMap_: null,
        byteToCharMapWebSafe_: null,
        charToByteMapWebSafe_: null,
        ENCODED_VALS_BASE: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",
        get ENCODED_VALS() {
            return this.ENCODED_VALS_BASE + "+/="
        },
        get ENCODED_VALS_WEBSAFE() {
            return this.ENCODED_VALS_BASE + "-_."
        },
        HAS_NATIVE_SUPPORT: "function" == typeof atob,
        encodeByteArray: function (e, t) {
            if (!Array.isArray(e)) throw Error("encodeByteArray takes an array as a parameter");
            this.init_();
            for (var n = t ? this.byteToCharMapWebSafe_ : this.byteToCharMap_, i = [], r = 0; r < e.length; r += 3) {
                var s = e[r],
                    o = r + 1 < e.length,
                    a = o ? e[r + 1] : 0,
                    c = r + 2 < e.length,
                    h = c ? e[r + 2] : 0,
                    l = s >> 2,
                    u = (3 & s) << 4 | a >> 4,
                    d = (15 & a) << 2 | h >> 6,
                    f = 63 & h;
                c || (f = 64, o || (d = 64)), i.push(n[l], n[u], n[d], n[f])
            }
            return i.join("")
        },
        encodeString: function (e, t) {
            return this.HAS_NATIVE_SUPPORT && !t ? btoa(e) : this.encodeByteArray(function (e) {
                for (var t = [], n = 0, i = 0; i < e.length; i++) {
                    var r = e.charCodeAt(i);
                    r < 128 ? t[n++] = r : r < 2048 ? (t[n++] = r >> 6 | 192, t[n++] = 63 & r | 128) : 55296 == (64512 & r) && i + 1 < e.length && 56320 == (64512 & e.charCodeAt(i + 1)) ? (r = 65536 + ((1023 & r) << 10) + (1023 & e.charCodeAt(++i)), t[n++] = r >> 18 | 240, t[n++] = r >> 12 & 63 | 128, t[n++] = r >> 6 & 63 | 128, t[n++] = 63 & r | 128) : (t[n++] = r >> 12 | 224, t[n++] = r >> 6 & 63 | 128, t[n++] = 63 & r | 128)
                }
                return t
            }(e), t)
        },
        decodeString: function (e, t) {
            return this.HAS_NATIVE_SUPPORT && !t ? atob(e) : function (e) {
                for (var t = [], n = 0, i = 0; n < e.length;) {
                    var r = e[n++];
                    if (r < 128) t[i++] = String.fromCharCode(r);
                    else if (r > 191 && r < 224) {
                        var s = e[n++];
                        t[i++] = String.fromCharCode((31 & r) << 6 | 63 & s)
                    } else if (r > 239 && r < 365) {
                        var o = ((7 & r) << 18 | (63 & (s = e[n++])) << 12 | (63 & (a = e[n++])) << 6 | 63 & e[n++]) - 65536;
                        t[i++] = String.fromCharCode(55296 + (o >> 10)), t[i++] = String.fromCharCode(56320 + (1023 & o))
                    } else {
                        s = e[n++];
                        var a = e[n++];
                        t[i++] = String.fromCharCode((15 & r) << 12 | (63 & s) << 6 | 63 & a)
                    }
                }
                return t.join("")
            }(this.decodeStringToByteArray(e, t))
        },
        decodeStringToByteArray: function (e, t) {
            this.init_();
            for (var n = t ? this.charToByteMapWebSafe_ : this.charToByteMap_, i = [], r = 0; r < e.length;) {
                var s = n[e.charAt(r++)],
                    o = r < e.length ? n[e.charAt(r)] : 0,
                    a = ++r < e.length ? n[e.charAt(r)] : 64,
                    c = ++r < e.length ? n[e.charAt(r)] : 64;
                if (++r, null == s || null == o || null == a || null == c) throw Error();
                var h = s << 2 | o >> 4;
                if (i.push(h), 64 !== a) {
                    var l = o << 4 & 240 | a >> 2;
                    if (i.push(l), 64 !== c) {
                        var u = a << 6 & 192 | c;
                        i.push(u)
                    }
                }
            }
            return i
        },
        init_: function () {
            if (!this.byteToCharMap_) {
                this.byteToCharMap_ = {}, this.charToByteMap_ = {}, this.byteToCharMapWebSafe_ = {}, this.charToByteMapWebSafe_ = {};
                for (var e = 0; e < this.ENCODED_VALS.length; e++) this.byteToCharMap_[e] = this.ENCODED_VALS.charAt(e), this.charToByteMap_[this.byteToCharMap_[e]] = e, this.byteToCharMapWebSafe_[e] = this.ENCODED_VALS_WEBSAFE.charAt(e), this.charToByteMapWebSafe_[this.byteToCharMapWebSafe_[e]] = e, e >= this.ENCODED_VALS_BASE.length && (this.charToByteMap_[this.ENCODED_VALS_WEBSAFE.charAt(e)] = e, this.charToByteMapWebSafe_[this.ENCODED_VALS.charAt(e)] = e)
            }
        }
    },
    ye = function () {
        function e() {
            var e = this;
            this.reject = function () {}, this.resolve = function () {}, this.promise = new Promise((function (t, n) {
                e.resolve = t, e.reject = n
            }))
        }
        return e.prototype.wrapCallback = function (e) {
            var t = this;
            return function (n, i) {
                n ? t.reject(n) : t.resolve(i), "function" == typeof e && (t.promise.catch((function () {})), 1 === e.length ? e(n) : e(n, i))
            }
        }, e
    }();

function ve() {
    return "undefined" != typeof navigator && "string" == typeof navigator.userAgent ? navigator.userAgent : ""
}

function we() {
    return "undefined" != typeof window && !!(window.cordova || window.phonegap || window.PhoneGap) && /ios|iphone|ipod|ipad|android|blackberry|iemobile/i.test(ve())
}

function be() {
    var e = "object" == typeof chrome ? chrome.runtime : "object" == typeof browser ? browser.runtime : void 0;
    return "object" == typeof e && void 0 !== e.id
}

function _e() {
    return "object" == typeof navigator && "ReactNative" === navigator.product
}

function Ee() {
    var e = ve();
    return e.indexOf("MSIE ") >= 0 || e.indexOf("Trident/") >= 0
}
var Te = function (e) {
        function t(n, i, r) {
            var s = e.call(this, i) || this;
            return s.code = n, s.customData = r, s.name = "FirebaseError", Object.setPrototypeOf(s, t.prototype), Error.captureStackTrace && Error.captureStackTrace(s, Se.prototype.create), s
        }
        return function (e, t) {
            if ("function" != typeof t && null !== t) throw new TypeError("Class extends value " + String(t) + " is not a constructor or null");

            function n() {
                this.constructor = e
            }
            he(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
        }(t, e), t
    }(Error),
    Se = function () {
        function e(e, t, n) {
            this.service = e, this.serviceName = t, this.errors = n
        }
        return e.prototype.create = function (e) {
            for (var t = [], n = 1; n < arguments.length; n++) t[n - 1] = arguments[n];
            var i = t[0] || {},
                r = this.service + "/" + e,
                s = this.errors[e],
                o = s ? Ie(s, i) : "Error",
                a = this.serviceName + ": " + o + " (" + r + ").",
                c = new Te(r, a, i);
            return c
        }, e
    }();

function Ie(e, t) {
    return e.replace(ke, (function (e, n) {
        var i = t[n];
        return null != i ? String(i) : "<" + n + "?>"
    }))
}
var ke = /\{\$([^}]+)}/g;

function Ae(e) {
    for (var t = [], n = function (e, n) {
            Array.isArray(n) ? n.forEach((function (n) {
                t.push(encodeURIComponent(e) + "=" + encodeURIComponent(n))
            })) : t.push(encodeURIComponent(e) + "=" + encodeURIComponent(n))
        }, i = 0, r = Object.entries(e); i < r.length; i++) {
        var s = r[i];
        n(s[0], s[1])
    }
    return t.length ? "&" + t.join("&") : ""
}
var Ne = function () {
    function e(e, t) {
        var n = this;
        this.observers = [], this.unsubscribes = [], this.observerCount = 0, this.task = Promise.resolve(), this.finalized = !1, this.onNoObservers = t, this.task.then((function () {
            e(n)
        })).catch((function (e) {
            n.error(e)
        }))
    }
    return e.prototype.next = function (e) {
        this.forEachObserver((function (t) {
            t.next(e)
        }))
    }, e.prototype.error = function (e) {
        this.forEachObserver((function (t) {
            t.error(e)
        })), this.close(e)
    }, e.prototype.complete = function () {
        this.forEachObserver((function (e) {
            e.complete()
        })), this.close()
    }, e.prototype.subscribe = function (e, t, n) {
        var i, r = this;
        if (void 0 === e && void 0 === t && void 0 === n) throw new Error("Missing Observer.");
        void 0 === (i = function (e, t) {
            if ("object" != typeof e || null === e) return !1;
            for (var n = 0, i = t; n < i.length; n++) {
                var r = i[n];
                if (r in e && "function" == typeof e[r]) return !0
            }
            return !1
        }(e, ["next", "error", "complete"]) ? e : {
            next: e,
            error: t,
            complete: n
        }).next && (i.next = Ce), void 0 === i.error && (i.error = Ce), void 0 === i.complete && (i.complete = Ce);
        var s = this.unsubscribeOne.bind(this, this.observers.length);
        return this.finalized && this.task.then((function () {
            try {
                r.finalError ? i.error(r.finalError) : i.complete()
            } catch (e) {}
        })), this.observers.push(i), s
    }, e.prototype.unsubscribeOne = function (e) {
        void 0 !== this.observers && void 0 !== this.observers[e] && (delete this.observers[e], this.observerCount -= 1, 0 === this.observerCount && void 0 !== this.onNoObservers && this.onNoObservers(this))
    }, e.prototype.forEachObserver = function (e) {
        if (!this.finalized)
            for (var t = 0; t < this.observers.length; t++) this.sendOne(t, e)
    }, e.prototype.sendOne = function (e, t) {
        var n = this;
        this.task.then((function () {
            if (void 0 !== n.observers && void 0 !== n.observers[e]) try {
                t(n.observers[e])
            } catch (e) {
                "undefined" != typeof console && console.error && console.error(e)
            }
        }))
    }, e.prototype.close = function (e) {
        var t = this;
        this.finalized || (this.finalized = !0, void 0 !== e && (this.finalError = e), this.task.then((function () {
            t.observers = void 0, t.onNoObservers = void 0
        })))
    }, e
}();

function Ce() {}

function Re(e) {
    return e && e._delegate ? e._delegate : e
}
var xe = function () {
        function e(e, t, n) {
            this.name = e, this.instanceFactory = t, this.type = n, this.multipleInstances = !1, this.serviceProps = {}, this.instantiationMode = "LAZY", this.onInstanceCreated = null
        }
        return e.prototype.setInstantiationMode = function (e) {
            return this.instantiationMode = e, this
        }, e.prototype.setMultipleInstances = function (e) {
            return this.multipleInstances = e, this
        }, e.prototype.setServiceProps = function (e) {
            return this.serviceProps = e, this
        }, e.prototype.setInstanceCreatedCallback = function (e) {
            return this.onInstanceCreated = e, this
        }, e
    }(),
    De = function () {
        function e(e, t) {
            this.name = e, this.container = t, this.component = null, this.instances = new Map, this.instancesDeferred = new Map, this.onInitCallbacks = new Map
        }
        return e.prototype.get = function (e) {
            var t = this.normalizeInstanceIdentifier(e);
            if (!this.instancesDeferred.has(t)) {
                var n = new ye;
                if (this.instancesDeferred.set(t, n), this.isInitialized(t) || this.shouldAutoInitialize()) try {
                    var i = this.getOrInitializeService({
                        instanceIdentifier: t
                    });
                    i && n.resolve(i)
                } catch (e) {}
            }
            return this.instancesDeferred.get(t).promise
        }, e.prototype.getImmediate = function (e) {
            var t, n = this.normalizeInstanceIdentifier(null == e ? void 0 : e.identifier),
                i = null !== (t = null == e ? void 0 : e.optional) && void 0 !== t && t;
            if (!this.isInitialized(n) && !this.shouldAutoInitialize()) {
                if (i) return null;
                throw Error("Service " + this.name + " is not available")
            }
            try {
                return this.getOrInitializeService({
                    instanceIdentifier: n
                })
            } catch (e) {
                if (i) return null;
                throw e
            }
        }, e.prototype.getComponent = function () {
            return this.component
        }, e.prototype.setComponent = function (e) {
            var t, n;
            if (e.name !== this.name) throw Error("Mismatching Component " + e.name + " for Provider " + this.name + ".");
            if (this.component) throw Error("Component for " + this.name + " has already been provided");
            if (this.component = e, this.shouldAutoInitialize()) {
                if (function (e) {
                        return "EAGER" === e.instantiationMode
                    }(e)) try {
                    this.getOrInitializeService({
                        instanceIdentifier: "[DEFAULT]"
                    })
                } catch (e) {}
                try {
                    for (var i = fe(this.instancesDeferred.entries()), r = i.next(); !r.done; r = i.next()) {
                        var s = pe(r.value, 2),
                            o = s[0],
                            a = s[1],
                            c = this.normalizeInstanceIdentifier(o);
                        try {
                            var h = this.getOrInitializeService({
                                instanceIdentifier: c
                            });
                            a.resolve(h)
                        } catch (e) {}
                    }
                } catch (e) {
                    t = {
                        error: e
                    }
                } finally {
                    try {
                        r && !r.done && (n = i.return) && n.call(i)
                    } finally {
                        if (t) throw t.error
                    }
                }
            }
        }, e.prototype.clearInstance = function (e) {
            void 0 === e && (e = "[DEFAULT]"), this.instancesDeferred.delete(e), this.instances.delete(e)
        }, e.prototype.delete = function () {
            return ue(this, void 0, void 0, (function () {
                var e;
                return de(this, (function (t) {
                    switch (t.label) {
                        case 0:
                            return e = Array.from(this.instances.values()), [4, Promise.all(ge(ge([], pe(e.filter((function (e) {
                                return "INTERNAL" in e
                            })).map((function (e) {
                                return e.INTERNAL.delete()
                            })))), pe(e.filter((function (e) {
                                return "_delete" in e
                            })).map((function (e) {
                                return e._delete()
                            })))))];
                        case 1:
                            return t.sent(), [2]
                    }
                }))
            }))
        }, e.prototype.isComponentSet = function () {
            return null != this.component
        }, e.prototype.isInitialized = function (e) {
            return void 0 === e && (e = "[DEFAULT]"), this.instances.has(e)
        }, e.prototype.initialize = function (e) {
            var t, n;
            void 0 === e && (e = {});
            var i = e.options,
                r = void 0 === i ? {} : i,
                s = this.normalizeInstanceIdentifier(e.instanceIdentifier);
            if (this.isInitialized(s)) throw Error(this.name + "(" + s + ") has already been initialized");
            if (!this.isComponentSet()) throw Error("Component " + this.name + " has not been registered yet");
            var o = this.getOrInitializeService({
                instanceIdentifier: s,
                options: r
            });
            try {
                for (var a = fe(this.instancesDeferred.entries()), c = a.next(); !c.done; c = a.next()) {
                    var h = pe(c.value, 2),
                        l = h[0],
                        u = h[1];
                    s === this.normalizeInstanceIdentifier(l) && u.resolve(o)
                }
            } catch (e) {
                t = {
                    error: e
                }
            } finally {
                try {
                    c && !c.done && (n = a.return) && n.call(a)
                } finally {
                    if (t) throw t.error
                }
            }
            return o
        }, e.prototype.onInit = function (e, t) {
            var n, i = this.normalizeInstanceIdentifier(t),
                r = null !== (n = this.onInitCallbacks.get(i)) && void 0 !== n ? n : new Set;
            r.add(e), this.onInitCallbacks.set(i, r);
            var s = this.instances.get(i);
            return s && e(s, i),
                function () {
                    r.delete(e)
                }
        }, e.prototype.invokeOnInitCallbacks = function (e, t) {
            var n, i, r = this.onInitCallbacks.get(t);
            if (r) try {
                for (var s = fe(r), o = s.next(); !o.done; o = s.next()) {
                    var a = o.value;
                    try {
                        a(e, t)
                    } catch (e) {}
                }
            } catch (e) {
                n = {
                    error: e
                }
            } finally {
                try {
                    o && !o.done && (i = s.return) && i.call(s)
                } finally {
                    if (n) throw n.error
                }
            }
        }, e.prototype.getOrInitializeService = function (e) {
            var t, n = e.instanceIdentifier,
                i = e.options,
                r = void 0 === i ? {} : i,
                s = this.instances.get(n);
            if (!s && this.component && (s = this.component.instanceFactory(this.container, {
                    instanceIdentifier: (t = n, "[DEFAULT]" === t ? void 0 : t),
                    options: r
                }), this.instances.set(n, s), this.invokeOnInitCallbacks(s, n), this.component.onInstanceCreated)) try {
                this.component.onInstanceCreated(this.container, n, s)
            } catch (e) {}
            return s || null
        }, e.prototype.normalizeInstanceIdentifier = function (e) {
            return void 0 === e && (e = "[DEFAULT]"), this.component ? this.component.multipleInstances ? e : "[DEFAULT]" : e
        }, e.prototype.shouldAutoInitialize = function () {
            return !!this.component && "EXPLICIT" !== this.component.instantiationMode
        }, e
    }();
var Le, Oe, Pe = function () {
    function e(e) {
        this.name = e, this.providers = new Map
    }
    return e.prototype.addComponent = function (e) {
        var t = this.getProvider(e.name);
        if (t.isComponentSet()) throw new Error("Component " + e.name + " has already been registered with " + this.name);
        t.setComponent(e)
    }, e.prototype.addOrOverwriteComponent = function (e) {
        this.getProvider(e.name).isComponentSet() && this.providers.delete(e.name), this.addComponent(e)
    }, e.prototype.getProvider = function (e) {
        if (this.providers.has(e)) return this.providers.get(e);
        var t = new De(e, this);
        return this.providers.set(e, t), t
    }, e.prototype.getProviders = function () {
        return Array.from(this.providers.values())
    }, e
}();

function Me() {
    for (var e = 0, t = 0, n = arguments.length; t < n; t++) e += arguments[t].length;
    var i = Array(e),
        r = 0;
    for (t = 0; t < n; t++)
        for (var s = arguments[t], o = 0, a = s.length; o < a; o++, r++) i[r] = s[o];
    return i
}! function (e) {
    e[e.DEBUG = 0] = "DEBUG", e[e.VERBOSE = 1] = "VERBOSE", e[e.INFO = 2] = "INFO", e[e.WARN = 3] = "WARN", e[e.ERROR = 4] = "ERROR", e[e.SILENT = 5] = "SILENT"
}(Oe || (Oe = {}));
var Ue = {
        debug: Oe.DEBUG,
        verbose: Oe.VERBOSE,
        info: Oe.INFO,
        warn: Oe.WARN,
        error: Oe.ERROR,
        silent: Oe.SILENT
    },
    Ve = Oe.INFO,
    Fe = ((Le = {})[Oe.DEBUG] = "log", Le[Oe.VERBOSE] = "log", Le[Oe.INFO] = "info", Le[Oe.WARN] = "warn", Le[Oe.ERROR] = "error", Le),
    je = function (e, t) {
        for (var n = [], i = 2; i < arguments.length; i++) n[i - 2] = arguments[i];
        if (!(t < e.logLevel)) {
            var r = (new Date).toISOString(),
                s = Fe[t];
            if (!s) throw new Error("Attempted to log a message with an invalid logType (value: " + t + ")");
            console[s].apply(console, Me(["[" + r + "]  " + e.name + ":"], n))
        }
    },
    qe = function () {
        function e(e) {
            this.name = e, this._logLevel = Ve, this._logHandler = je, this._userLogHandler = null
        }
        return Object.defineProperty(e.prototype, "logLevel", {
            get: function () {
                return this._logLevel
            },
            set: function (e) {
                if (!(e in Oe)) throw new TypeError('Invalid value "' + e + '" assigned to `logLevel`');
                this._logLevel = e
            },
            enumerable: !1,
            configurable: !0
        }), e.prototype.setLogLevel = function (e) {
            this._logLevel = "string" == typeof e ? Ue[e] : e
        }, Object.defineProperty(e.prototype, "logHandler", {
            get: function () {
                return this._logHandler
            },
            set: function (e) {
                if ("function" != typeof e) throw new TypeError("Value assigned to `logHandler` must be a function");
                this._logHandler = e
            },
            enumerable: !1,
            configurable: !0
        }), Object.defineProperty(e.prototype, "userLogHandler", {
            get: function () {
                return this._userLogHandler
            },
            set: function (e) {
                this._userLogHandler = e
            },
            enumerable: !1,
            configurable: !0
        }), e.prototype.debug = function () {
            for (var e = [], t = 0; t < arguments.length; t++) e[t] = arguments[t];
            this._userLogHandler && this._userLogHandler.apply(this, Me([this, Oe.DEBUG], e)), this._logHandler.apply(this, Me([this, Oe.DEBUG], e))
        }, e.prototype.log = function () {
            for (var e = [], t = 0; t < arguments.length; t++) e[t] = arguments[t];
            this._userLogHandler && this._userLogHandler.apply(this, Me([this, Oe.VERBOSE], e)), this._logHandler.apply(this, Me([this, Oe.VERBOSE], e))
        }, e.prototype.info = function () {
            for (var e = [], t = 0; t < arguments.length; t++) e[t] = arguments[t];
            this._userLogHandler && this._userLogHandler.apply(this, Me([this, Oe.INFO], e)), this._logHandler.apply(this, Me([this, Oe.INFO], e))
        }, e.prototype.warn = function () {
            for (var e = [], t = 0; t < arguments.length; t++) e[t] = arguments[t];
            this._userLogHandler && this._userLogHandler.apply(this, Me([this, Oe.WARN], e)), this._logHandler.apply(this, Me([this, Oe.WARN], e))
        }, e.prototype.error = function () {
            for (var e = [], t = 0; t < arguments.length; t++) e[t] = arguments[t];
            this._userLogHandler && this._userLogHandler.apply(this, Me([this, Oe.ERROR], e)), this._logHandler.apply(this, Me([this, Oe.ERROR], e))
        }, e
    }();
class Be {
    constructor(e) {
        this.container = e
    }
    getPlatformInfoString() {
        return this.container.getProviders().map((e => {
            if (function (e) {
                    const t = e.getComponent();
                    return "VERSION" === (null == t ? void 0 : t.type)
                }(e)) {
                const t = e.getImmediate();
                return `${t.library}/${t.version}`
            }
            return null
        })).filter((e => e)).join(" ")
    }
}
const $e = new qe("@firebase/app"),
    He = {
        "@firebase/app-exp": "fire-core",
        "@firebase/app-compat": "fire-core-compat",
        "@firebase/analytics-exp": "fire-analytics",
        "@firebase/analytics-compat": "fire-analytics-compat",
        "@firebase/app-check-exp": "fire-app-check",
        "@firebase/app-check-compat": "fire-app-check-compat",
        "@firebase/auth-exp": "fire-auth",
        "@firebase/auth-compat": "fire-auth-compat",
        "@firebase/database": "fire-rtdb",
        "@firebase/database-compat": "fire-rtdb-compat",
        "@firebase/functions-exp": "fire-fn",
        "@firebase/functions-compat": "fire-fn-compat",
        "@firebase/installations-exp": "fire-iid",
        "@firebase/installations-compat": "fire-iid-compat",
        "@firebase/messaging-exp": "fire-fcm",
        "@firebase/messaging-compat": "fire-fcm-compat",
        "@firebase/performance-exp": "fire-perf",
        "@firebase/performance-compat": "fire-perf-compat",
        "@firebase/remote-config-exp": "fire-rc",
        "@firebase/remote-config-compat": "fire-rc-compat",
        "@firebase/storage": "fire-gcs",
        "@firebase/storage-compat": "fire-gcs-compat",
        "@firebase/firestore": "fire-fst",
        "@firebase/firestore-compat": "fire-fst-compat",
        "fire-js": "fire-js",
        "firebase-exp": "fire-js-all"
    },
    ze = new Map,
    Ke = new Map;

function Ge(e, t) {
    try {
        e.container.addComponent(t)
    } catch (n) {
        $e.debug(`Component ${t.name} failed to register with FirebaseApp ${e.name}`, n)
    }
}

function We(e) {
    const t = e.name;
    if (Ke.has(t)) return $e.debug(`There were multiple attempts to register component ${t}.`), !1;
    Ke.set(t, e);
    for (const t of ze.values()) Ge(t, e);
    return !0
}

function Qe(e, t) {
    return e.container.getProvider(t)
}
const Je = new Se("app", "Firebase", {
    "no-app": "No Firebase App '{$appName}' has been created - call Firebase App.initializeApp()",
    "bad-app-name": "Illegal App name: '{$appName}",
    "duplicate-app": "Firebase App named '{$appName}' already exists",
    "app-deleted": "Firebase App named '{$appName}' already deleted",
    "invalid-app-argument": "firebase.{$appName}() takes either no argument or a Firebase App instance.",
    "invalid-log-argument": "First argument to `onLog` must be null or a function."
});
class Xe {
    constructor(e, t, n) {
        this._isDeleted = !1, this._options = Object.assign({}, e), this._name = t.name, this._automaticDataCollectionEnabled = t.automaticDataCollectionEnabled, this._container = n, this.container.addComponent(new xe("app-exp", (() => this), "PUBLIC"))
    }
    get automaticDataCollectionEnabled() {
        return this.checkDestroyed(), this._automaticDataCollectionEnabled
    }
    set automaticDataCollectionEnabled(e) {
        this.checkDestroyed(), this._automaticDataCollectionEnabled = e
    }
    get name() {
        return this.checkDestroyed(), this._name
    }
    get options() {
        return this.checkDestroyed(), this._options
    }
    get container() {
        return this._container
    }
    get isDeleted() {
        return this._isDeleted
    }
    set isDeleted(e) {
        this._isDeleted = e
    }
    checkDestroyed() {
        if (this.isDeleted) throw Je.create("app-deleted", {
            appName: this._name
        })
    }
}

function Ye(e = "[DEFAULT]") {
    const t = ze.get(e);
    if (!t) throw Je.create("no-app", {
        appName: e
    });
    return t
}

function Ze(e, t, n) {
    var i;
    let r = null !== (i = He[e]) && void 0 !== i ? i : e;
    n && (r += `-${n}`);
    const s = r.match(/\s|\//),
        o = t.match(/\s|\//);
    if (s || o) {
        const e = [`Unable to register library "${r}" with version "${t}":`];
        return s && e.push(`library name "${r}" contains illegal characters (whitespace or "/")`), s && o && e.push("and"), o && e.push(`version name "${t}" contains illegal characters (whitespace or "/")`), void $e.warn(e.join(" "))
    }
    We(new xe(`${r}-version`, (() => ({
        library: r,
        version: t
    })), "VERSION"))
}
var et;
We(new xe("platform-logger", (e => new Be(e)), "PRIVATE")), Ze("@firebase/app-exp", "0.0.900-exp.6ef484a04", et), Ze("fire-js", "");
Ze("firebase-exp", "9.0.0-beta.7", "app");
const tt = new Se("auth", "Firebase", {
        "dependent-sdk-initialized-before-auth": "Another Firebase SDK was initialized and is trying to use Auth before Auth is initialized. Please be sure to call `initializeAuth` or `getAuth` before starting any other Firebase SDK."
    }),
    nt = new qe("@firebase/auth-exp");

function it(e, ...t) {
    nt.logLevel <= Oe.ERROR && nt.error(`Auth (9.0.0-beta.7): ${e}`, ...t)
}

function rt(e, ...t) {
    throw ot(e, ...t)
}

function st(e, ...t) {
    return ot(e, ...t)
}

function ot(e, ...t) {
    if ("string" != typeof e) {
        const n = t[0],
            i = [...t.slice(1)];
        return i[0] && (i[0].appName = e.name), e._errorFactory.create(n, ...i)
    }
    return tt.create(e, ...t)
}

function at(e, t, ...n) {
    if (!e) throw ot(t, ...n)
}

function ct(e) {
    const t = "INTERNAL ASSERTION FAILED: " + e;
    throw it(t), new Error(t)
}

function ht(e, t) {
    e || ct(t)
}
const lt = new Map;

function ut(e) {
    ht(e instanceof Function, "Expected a class definition");
    let t = lt.get(e);
    return t ? (ht(t instanceof e, "Instance stored in cache mismatched with class"), t) : (t = new e, lt.set(e, t), t)
}

function dt() {
    var e;
    return "undefined" != typeof self && (null === (e = self.location) || void 0 === e ? void 0 : e.href) || ""
}

function ft() {
    var e;
    return "undefined" != typeof self && (null === (e = self.location) || void 0 === e ? void 0 : e.protocol) || null
}

function pt() {
    return "undefined" == typeof navigator || !navigator || !("onLine" in navigator) || "boolean" != typeof navigator.onLine || "http:" !== ft() && "https:" !== ft() && !be() && !("connection" in navigator) || navigator.onLine
}
class gt {
    constructor(e, t) {
        this.shortDelay = e, this.longDelay = t, ht(t > e, "Short delay should be less than long delay!"), this.isMobile = we() || _e()
    }
    get() {
        return pt() ? this.isMobile ? this.longDelay : this.shortDelay : Math.min(5e3, this.shortDelay)
    }
}

function mt(e, t) {
    ht(e.emulator, "Emulator should always be set here");
    const {
        url: n
    } = e.emulator;
    return t ? `${n}${t.startsWith("/")?t.slice(1):t}` : n
}
class yt {
    static initialize(e, t, n) {
        this.fetchImpl = e, t && (this.headersImpl = t), n && (this.responseImpl = n)
    }
    static fetch() {
        return this.fetchImpl ? this.fetchImpl : "undefined" != typeof self && "fetch" in self ? self.fetch : void ct("Could not find fetch implementation, make sure you call FetchProvider.initialize() with an appropriate polyfill")
    }
    static headers() {
        return this.headersImpl ? this.headersImpl : "undefined" != typeof self && "Headers" in self ? self.Headers : void ct("Could not find Headers implementation, make sure you call FetchProvider.initialize() with an appropriate polyfill")
    }
    static response() {
        return this.responseImpl ? this.responseImpl : "undefined" != typeof self && "Response" in self ? self.Response : void ct("Could not find Response implementation, make sure you call FetchProvider.initialize() with an appropriate polyfill")
    }
}
const vt = {
        CREDENTIAL_MISMATCH: "custom-token-mismatch",
        MISSING_CUSTOM_TOKEN: "internal-error",
        INVALID_IDENTIFIER: "invalid-email",
        MISSING_CONTINUE_URI: "internal-error",
        INVALID_PASSWORD: "wrong-password",
        MISSING_PASSWORD: "internal-error",
        EMAIL_EXISTS: "email-already-in-use",
        PASSWORD_LOGIN_DISABLED: "operation-not-allowed",
        INVALID_IDP_RESPONSE: "invalid-credential",
        INVALID_PENDING_TOKEN: "invalid-credential",
        FEDERATED_USER_ID_ALREADY_LINKED: "credential-already-in-use",
        MISSING_REQ_TYPE: "internal-error",
        EMAIL_NOT_FOUND: "user-not-found",
        RESET_PASSWORD_EXCEED_LIMIT: "too-many-requests",
        EXPIRED_OOB_CODE: "expired-action-code",
        INVALID_OOB_CODE: "invalid-action-code",
        MISSING_OOB_CODE: "internal-error",
        CREDENTIAL_TOO_OLD_LOGIN_AGAIN: "requires-recent-login",
        INVALID_ID_TOKEN: "invalid-user-token",
        TOKEN_EXPIRED: "user-token-expired",
        USER_NOT_FOUND: "user-token-expired",
        TOO_MANY_ATTEMPTS_TRY_LATER: "too-many-requests",
        INVALID_CODE: "invalid-verification-code",
        INVALID_SESSION_INFO: "invalid-verification-id",
        INVALID_TEMPORARY_PROOF: "invalid-credential",
        MISSING_SESSION_INFO: "missing-verification-id",
        SESSION_EXPIRED: "code-expired",
        MISSING_ANDROID_PACKAGE_NAME: "missing-android-pkg-name",
        UNAUTHORIZED_DOMAIN: "unauthorized-continue-uri",
        INVALID_OAUTH_CLIENT_ID: "invalid-oauth-client-id",
        ADMIN_ONLY_OPERATION: "admin-restricted-operation",
        INVALID_MFA_PENDING_CREDENTIAL: "invalid-multi-factor-session",
        MFA_ENROLLMENT_NOT_FOUND: "multi-factor-info-not-found",
        MISSING_MFA_ENROLLMENT_ID: "missing-multi-factor-info",
        MISSING_MFA_PENDING_CREDENTIAL: "missing-multi-factor-session",
        SECOND_FACTOR_EXISTS: "second-factor-already-in-use",
        SECOND_FACTOR_LIMIT_EXCEEDED: "maximum-second-factor-count-exceeded"
    },
    wt = new gt(3e4, 6e4);
async function bt(e, t, n, i, r = {}) {
    return _t(e, r, (() => {
        let r = {},
            s = {};
        i && ("GET" === t ? s = i : r = {
            body: JSON.stringify(i)
        });
        const o = Ae(Object.assign({
                key: e.config.apiKey
            }, s)).slice(1),
            a = new(yt.headers());
        return a.set("Content-Type", "application/json"), a.set("X-Client-Version", e._getSdkClientVersion()), e.languageCode && a.set("X-Firebase-Locale", e.languageCode), yt.fetch()(Et(e, e.config.apiHost, n, o), Object.assign({
            method: t,
            headers: a,
            referrerPolicy: "no-referrer"
        }, r))
    }))
}
async function _t(e, t, n) {
    e._canInitEmulator = !1;
    const i = Object.assign(Object.assign({}, vt), t);
    try {
        const t = new Tt(e),
            r = await Promise.race([n(), t.promise]);
        t.clearNetworkTimeout();
        const s = await r.json();
        if ("needConfirmation" in s) throw St(e, "account-exists-with-different-credential", s);
        if (r.ok && !("errorMessage" in s)) return s; {
            const t = (r.ok ? s.errorMessage : s.error.message).split(" : ")[0];
            if ("FEDERATED_USER_ID_ALREADY_LINKED" === t) throw St(e, "credential-already-in-use", s);
            if ("EMAIL_EXISTS" === t) throw St(e, "email-already-in-use", s);
            rt(e, i[t] || t.toLowerCase().replace(/[_\s]+/g, "-"))
        }
    } catch (t) {
        if (t instanceof Te) throw t;
        rt(e, "network-request-failed")
    }
}

function Et(e, t, n, i) {
    const r = `${t}${n}?${i}`;
    return e.config.emulator ? mt(e.config, r) : `${e.config.apiScheme}://${r}`
}
class Tt {
    constructor(e) {
        this.auth = e, this.timer = null, this.promise = new Promise(((e, t) => {
            this.timer = setTimeout((() => t(st(this.auth, "timeout"))), wt.get())
        }))
    }
    clearNetworkTimeout() {
        clearTimeout(this.timer)
    }
}

function St(e, t, n) {
    const i = {
        appName: e.name
    };
    n.email && (i.email = n.email), n.phoneNumber && (i.phoneNumber = n.phoneNumber);
    const r = st(e, t, i);
    return r.customData._tokenResponse = n, r
}

function It(e) {
    if (e) try {
        const t = new Date(Number(e));
        if (!isNaN(t.getTime())) return t.toUTCString()
    } catch (e) {}
}

function kt(e) {
    return 1e3 * Number(e)
}

function At(e) {
    const [t, n, i] = e.split(".");
    if (void 0 === t || void 0 === n || void 0 === i) return it("JWT malformed, contained fewer than 3 sections"), null;
    try {
        const e = function (e) {
            try {
                return me.decodeString(e, !0)
            } catch (e) {
                console.error("base64Decode failed: ", e)
            }
            return null
        }(n);
        return e ? JSON.parse(e) : (it("Failed to decode base64 JWT payload"), null)
    } catch (e) {
        return it("Caught error parsing JWT payload as JSON", e), null
    }
}
async function Nt(e, t, n = !1) {
    if (n) return t;
    try {
        return await t
    } catch (t) {
        throw t instanceof Te && function ({
            code: e
        }) {
            return "auth/user-disabled" === e || "auth/user-token-expired" === e
        }(t) && e.auth.currentUser === e && await e.auth.signOut(), t
    }
}
class Ct {
    constructor(e) {
        this.user = e, this.isRunning = !1, this.timerId = null, this.errorBackoff = 3e4
    }
    _start() {
        this.isRunning || (this.isRunning = !0, this.schedule())
    }
    _stop() {
        this.isRunning && (this.isRunning = !1, null !== this.timerId && clearTimeout(this.timerId))
    }
    getInterval(e) {
        var t;
        if (e) {
            const e = this.errorBackoff;
            return this.errorBackoff = Math.min(2 * this.errorBackoff, 96e4), e
        } {
            this.errorBackoff = 3e4;
            const e = (null !== (t = this.user.stsTokenManager.expirationTime) && void 0 !== t ? t : 0) - Date.now() - 3e5;
            return Math.max(0, e)
        }
    }
    schedule(e = !1) {
        if (!this.isRunning) return;
        const t = this.getInterval(e);
        this.timerId = setTimeout((async () => {
            await this.iteration()
        }), t)
    }
    async iteration() {
        try {
            await this.user.getIdToken(!0)
        } catch (e) {
            return void("auth/network-request-failed" === e.code && this.schedule(!0))
        }
        this.schedule()
    }
}
class Rt {
    constructor(e, t) {
        this.createdAt = e, this.lastLoginAt = t, this._initializeTime()
    }
    _initializeTime() {
        this.lastSignInTime = It(this.lastLoginAt), this.creationTime = It(this.createdAt)
    }
    _copy(e) {
        this.createdAt = e.createdAt, this.lastLoginAt = e.lastLoginAt, this._initializeTime()
    }
    toJSON() {
        return {
            createdAt: this.createdAt,
            lastLoginAt: this.lastLoginAt
        }
    }
}
async function xt(e) {
    var t;
    const n = e.auth,
        i = await e.getIdToken(),
        r = await Nt(e, async function (e, t) {
            return bt(e, "POST", "/v1/accounts:lookup", t)
        }(n, {
            idToken: i
        }));
    at(null == r ? void 0 : r.users.length, n, "internal-error");
    const s = r.users[0];
    e._notifyReloadListener(s);
    const o = (null === (t = s.providerUserInfo) || void 0 === t ? void 0 : t.length) ? s.providerUserInfo.map((e => {
        var {
            providerId: t
        } = e, n = le(e, ["providerId"]);
        return {
            providerId: t,
            uid: n.rawId || "",
            displayName: n.displayName || null,
            email: n.email || null,
            phoneNumber: n.phoneNumber || null,
            photoURL: n.photoUrl || null
        }
    })) : [];
    const a = (c = e.providerData, h = o, [...c.filter((e => !h.some((t => t.providerId === e.providerId)))), ...h]);
    var c, h;
    const l = e.isAnonymous,
        u = !(e.email && s.passwordHash || (null == a ? void 0 : a.length)),
        d = !!l && u,
        f = {
            uid: s.localId,
            displayName: s.displayName || null,
            photoURL: s.photoUrl || null,
            email: s.email || null,
            emailVerified: s.emailVerified || !1,
            phoneNumber: s.phoneNumber || null,
            tenantId: s.tenantId || null,
            providerData: a,
            metadata: new Rt(s.createdAt, s.lastLoginAt),
            isAnonymous: d
        };
    Object.assign(e, f)
}
class Dt {
    constructor() {
        this.refreshToken = null, this.accessToken = null, this.expirationTime = null
    }
    get isExpired() {
        return !this.expirationTime || Date.now() > this.expirationTime - 3e4
    }
    updateFromServerResponse(e) {
        at(e.idToken, "internal-error"), at(void 0 !== e.idToken, "internal-error"), at(void 0 !== e.refreshToken, "internal-error");
        const t = "expiresIn" in e && void 0 !== e.expiresIn ? Number(e.expiresIn) : function (e) {
            const t = At(e);
            return at(t, "internal-error"), at(void 0 !== t.exp, "internal-error"), at(void 0 !== t.iat, "internal-error"), Number(t.exp) - Number(t.iat)
        }(e.idToken);
        this.updateTokensAndExpiration(e.idToken, e.refreshToken, t)
    }
    async getToken(e, t = !1) {
        return at(!this.accessToken || this.refreshToken, e, "user-token-expired"), t || !this.accessToken || this.isExpired ? this.refreshToken ? (await this.refresh(e, this.refreshToken), this.accessToken) : null : this.accessToken
    }
    clearRefreshToken() {
        this.refreshToken = null
    }
    async refresh(e, t) {
        const {
            accessToken: n,
            refreshToken: i,
            expiresIn: r
        } = await async function (e, t) {
            const n = await _t(e, {}, (() => {
                const n = Ae({
                        grant_type: "refresh_token",
                        refresh_token: t
                    }).slice(1),
                    {
                        tokenApiHost: i,
                        apiKey: r
                    } = e.config,
                    s = Et(e, i, "/v1/token", `key=${r}`);
                return yt.fetch()(s, {
                    method: "POST",
                    headers: {
                        "X-Client-Version": e._getSdkClientVersion(),
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: n
                })
            }));
            return {
                accessToken: n.access_token,
                expiresIn: n.expires_in,
                refreshToken: n.refresh_token
            }
        }(e, t);
        this.updateTokensAndExpiration(n, i, Number(r))
    }
    updateTokensAndExpiration(e, t, n) {
        this.refreshToken = t || null, this.accessToken = e || null, this.expirationTime = Date.now() + 1e3 * n
    }
    static fromJSON(e, t) {
        const {
            refreshToken: n,
            accessToken: i,
            expirationTime: r
        } = t, s = new Dt;
        return n && (at("string" == typeof n, "internal-error", {
            appName: e
        }), s.refreshToken = n), i && (at("string" == typeof i, "internal-error", {
            appName: e
        }), s.accessToken = i), r && (at("number" == typeof r, "internal-error", {
            appName: e
        }), s.expirationTime = r), s
    }
    toJSON() {
        return {
            refreshToken: this.refreshToken,
            accessToken: this.accessToken,
            expirationTime: this.expirationTime
        }
    }
    _assign(e) {
        this.accessToken = e.accessToken, this.refreshToken = e.refreshToken, this.expirationTime = e.expirationTime
    }
    _clone() {
        return Object.assign(new Dt, this.toJSON())
    }
    _performRefresh() {
        return ct("not implemented")
    }
}

function Lt(e, t) {
    at("string" == typeof e || void 0 === e, "internal-error", {
        appName: t
    })
}
class Ot {
    constructor(e) {
        var {
            uid: t,
            auth: n,
            stsTokenManager: i
        } = e, r = le(e, ["uid", "auth", "stsTokenManager"]);
        this.providerId = "firebase", this.emailVerified = !1, this.isAnonymous = !1, this.tenantId = null, this.providerData = [], this.proactiveRefresh = new Ct(this), this.reloadUserInfo = null, this.reloadListener = null, this.uid = t, this.auth = n, this.stsTokenManager = i, this.accessToken = i.accessToken, this.displayName = r.displayName || null, this.email = r.email || null, this.phoneNumber = r.phoneNumber || null, this.photoURL = r.photoURL || null, this.isAnonymous = r.isAnonymous || !1, this.metadata = new Rt(r.createdAt || void 0, r.lastLoginAt || void 0)
    }
    async getIdToken(e) {
        const t = await Nt(this, this.stsTokenManager.getToken(this.auth, e));
        return at(t, this.auth, "internal-error"), this.accessToken !== t && (this.accessToken = t, await this.auth._persistUserIfCurrent(this), this.auth._notifyListenersIfCurrent(this)), t
    }
    getIdTokenResult(e) {
        return async function (e, t = !1) {
            const n = Re(e),
                i = await n.getIdToken(t),
                r = At(i);
            at(r && r.exp && r.auth_time && r.iat, n.auth, "internal-error");
            const s = "object" == typeof r.firebase ? r.firebase : void 0,
                o = null == s ? void 0 : s.sign_in_provider;
            return {
                claims: r,
                token: i,
                authTime: It(kt(r.auth_time)),
                issuedAtTime: It(kt(r.iat)),
                expirationTime: It(kt(r.exp)),
                signInProvider: o || null,
                signInSecondFactor: (null == s ? void 0 : s.sign_in_second_factor) || null
            }
        }(this, e)
    }
    reload() {
        return async function (e) {
            const t = Re(e);
            await xt(t), await t.auth._persistUserIfCurrent(t), t.auth._notifyListenersIfCurrent(t)
        }(this)
    }
    _assign(e) {
        this !== e && (at(this.uid === e.uid, this.auth, "internal-error"), this.displayName = e.displayName, this.photoURL = e.photoURL, this.email = e.email, this.emailVerified = e.emailVerified, this.phoneNumber = e.phoneNumber, this.isAnonymous = e.isAnonymous, this.tenantId = e.tenantId, this.providerData = e.providerData.map((e => Object.assign({}, e))), this.metadata._copy(e.metadata), this.stsTokenManager._assign(e.stsTokenManager))
    }
    _clone(e) {
        return new Ot(Object.assign(Object.assign({}, this), {
            auth: e,
            stsTokenManager: this.stsTokenManager._clone()
        }))
    }
    _onReload(e) {
        at(!this.reloadListener, this.auth, "internal-error"), this.reloadListener = e, this.reloadUserInfo && (this._notifyReloadListener(this.reloadUserInfo), this.reloadUserInfo = null)
    }
    _notifyReloadListener(e) {
        this.reloadListener ? this.reloadListener(e) : this.reloadUserInfo = e
    }
    _startProactiveRefresh() {
        this.proactiveRefresh._start()
    }
    _stopProactiveRefresh() {
        this.proactiveRefresh._stop()
    }
    async _updateTokensIfNecessary(e, t = !1) {
        let n = !1;
        e.idToken && e.idToken !== this.stsTokenManager.accessToken && (this.stsTokenManager.updateFromServerResponse(e), n = !0), t && await xt(this), await this.auth._persistUserIfCurrent(this), n && this.auth._notifyListenersIfCurrent(this)
    }
    async delete() {
        const e = await this.getIdToken();
        return await Nt(this, async function (e, t) {
            return bt(e, "POST", "/v1/accounts:delete", t)
        }(this.auth, {
            idToken: e
        })), this.stsTokenManager.clearRefreshToken(), this.auth.signOut()
    }
    toJSON() {
        return Object.assign(Object.assign({
            uid: this.uid,
            email: this.email || void 0,
            emailVerified: this.emailVerified,
            displayName: this.displayName || void 0,
            isAnonymous: this.isAnonymous,
            photoURL: this.photoURL || void 0,
            phoneNumber: this.phoneNumber || void 0,
            tenantId: this.tenantId || void 0,
            providerData: this.providerData.map((e => Object.assign({}, e))),
            stsTokenManager: this.stsTokenManager.toJSON(),
            _redirectEventId: this._redirectEventId
        }, this.metadata.toJSON()), {
            apiKey: this.auth.config.apiKey,
            appName: this.auth.name
        })
    }
    get refreshToken() {
        return this.stsTokenManager.refreshToken || ""
    }
    static _fromJSON(e, t) {
        var n, i, r, s, o, a, c, h;
        const l = null !== (n = t.displayName) && void 0 !== n ? n : void 0,
            u = null !== (i = t.email) && void 0 !== i ? i : void 0,
            d = null !== (r = t.phoneNumber) && void 0 !== r ? r : void 0,
            f = null !== (s = t.photoURL) && void 0 !== s ? s : void 0,
            p = null !== (o = t.tenantId) && void 0 !== o ? o : void 0,
            g = null !== (a = t._redirectEventId) && void 0 !== a ? a : void 0,
            m = null !== (c = t.createdAt) && void 0 !== c ? c : void 0,
            y = null !== (h = t.lastLoginAt) && void 0 !== h ? h : void 0,
            {
                uid: v,
                emailVerified: w,
                isAnonymous: b,
                providerData: _,
                stsTokenManager: E
            } = t;
        at(v && E, e, "internal-error");
        const T = Dt.fromJSON(this.name, E);
        at("string" == typeof v, e, "internal-error"), Lt(l, e.name), Lt(u, e.name), at("boolean" == typeof w, e, "internal-error"), at("boolean" == typeof b, e, "internal-error"), Lt(d, e.name), Lt(f, e.name), Lt(p, e.name), Lt(g, e.name), Lt(m, e.name), Lt(y, e.name);
        const S = new Ot({
            uid: v,
            auth: e,
            email: u,
            emailVerified: w,
            displayName: l,
            isAnonymous: b,
            photoURL: f,
            phoneNumber: d,
            tenantId: p,
            stsTokenManager: T,
            createdAt: m,
            lastLoginAt: y
        });
        return _ && Array.isArray(_) && (S.providerData = _.map((e => Object.assign({}, e)))), g && (S._redirectEventId = g), S
    }
    static async _fromIdTokenResponse(e, t, n = !1) {
        const i = new Dt;
        i.updateFromServerResponse(t);
        const r = new Ot({
            uid: t.localId,
            auth: e,
            stsTokenManager: i,
            isAnonymous: n
        });
        return await xt(r), r
    }
}
class Pt {
    constructor() {
        this.type = "NONE", this.storage = {}
    }
    async _isAvailable() {
        return !0
    }
    async _set(e, t) {
        this.storage[e] = t
    }
    async _get(e) {
        const t = this.storage[e];
        return void 0 === t ? null : t
    }
    async _remove(e) {
        delete this.storage[e]
    }
    _addListener(e, t) {}
    _removeListener(e, t) {}
}
Pt.type = "NONE";
const Mt = Pt;

function Ut(e, t, n) {
    return `firebase:${e}:${t}:${n}`
}
class Vt {
    constructor(e, t, n) {
        this.persistence = e, this.auth = t, this.userKey = n;
        const {
            config: i,
            name: r
        } = this.auth;
        this.fullUserKey = Ut(this.userKey, i.apiKey, r), this.fullPersistenceKey = Ut("persistence", i.apiKey, r), this.boundEventHandler = t._onStorageEvent.bind(t), this.persistence._addListener(this.fullUserKey, this.boundEventHandler)
    }
    setCurrentUser(e) {
        return this.persistence._set(this.fullUserKey, e.toJSON())
    }
    async getCurrentUser() {
        const e = await this.persistence._get(this.fullUserKey);
        return e ? Ot._fromJSON(this.auth, e) : null
    }
    removeCurrentUser() {
        return this.persistence._remove(this.fullUserKey)
    }
    savePersistenceForRedirect() {
        return this.persistence._set(this.fullPersistenceKey, this.persistence.type)
    }
    async setPersistence(e) {
        if (this.persistence === e) return;
        const t = await this.getCurrentUser();
        return await this.removeCurrentUser(), this.persistence = e, t ? this.setCurrentUser(t) : void 0
    }
    delete() {
        this.persistence._removeListener(this.fullUserKey, this.boundEventHandler)
    }
    static async create(e, t, n = "authUser") {
        if (!t.length) return new Vt(ut(Mt), e, n);
        let i = ut(Mt);
        for (const e of t)
            if (await e._isAvailable()) {
                i = e;
                break
            } let r = null;
        const s = Ut(n, e.config.apiKey, e.name);
        for (const n of t) try {
            const t = await n._get(s);
            if (t) {
                const s = Ot._fromJSON(e, t);
                n !== i && (r = s);
                break
            }
        } catch (e) {}
        return r && await i._set(s, r.toJSON()), await Promise.all(t.map((async e => {
            if (e !== i) try {
                await e._remove(s)
            } catch (e) {}
        }))), new Vt(i, e, n)
    }
}

function Ft(e) {
    const t = e.toLowerCase();
    if (t.includes("opera/") || t.includes("opr/") || t.includes("opios/")) return "Opera";
    if ($t(t)) return "IEMobile";
    if (t.includes("msie") || t.includes("trident/")) return "IE";
    if (t.includes("edge/")) return "Edge";
    if (jt(t)) return "Firefox";
    if (t.includes("silk/")) return "Silk";
    if (zt(t)) return "Blackberry";
    if (Kt(t)) return "Webos";
    if (qt(t)) return "Safari";
    if ((t.includes("chrome/") || Bt(t)) && !t.includes("edge/")) return "Chrome";
    if (Ht(t)) return "Android"; {
        const t = /([a-zA-Z\d\.]+)\/[a-zA-Z\d\.]*$/,
            n = e.match(t);
        if (2 === (null == n ? void 0 : n.length)) return n[1]
    }
    return "Other"
}

function jt(e = ve()) {
    return /firefox\//i.test(e)
}

function qt(e = ve()) {
    const t = e.toLowerCase();
    return t.includes("safari/") && !t.includes("chrome/") && !t.includes("crios/") && !t.includes("android")
}

function Bt(e = ve()) {
    return /crios\//i.test(e)
}

function $t(e = ve()) {
    return /iemobile/i.test(e)
}

function Ht(e = ve()) {
    return /android/i.test(e)
}

function zt(e = ve()) {
    return /blackberry/i.test(e)
}

function Kt(e = ve()) {
    return /webos/i.test(e)
}

function Gt(e = ve()) {
    return /iphone|ipad|ipod/i.test(e)
}

function Wt(e = ve()) {
    return Gt(e) || Ht(e) || Kt(e) || zt(e) || /windows phone/i.test(e) || $t(e)
}

function Qt(e, t = []) {
    let n;
    switch (e) {
        case "Browser":
            n = Ft(ve());
            break;
        case "Worker":
            n = `${Ft(ve())}-${e}`;
            break;
        default:
            n = e
    }
    return `${n}/JsCore/9.0.0-beta.7/${t.length?t.join(","):"FirebaseCore-web"}`
}
class Jt {
    constructor(e, t) {
        this.app = e, this.config = t, this.currentUser = null, this.emulatorConfig = null, this.operations = Promise.resolve(), this.authStateSubscription = new Yt(this), this.idTokenSubscription = new Yt(this), this.redirectUser = null, this.isProactiveRefreshEnabled = !1, this.redirectInitializerError = null, this._canInitEmulator = !0, this._isInitialized = !1, this._deleted = !1, this._initializationPromise = null, this._popupRedirectResolver = null, this._errorFactory = tt, this.lastNotifiedUid = void 0, this.languageCode = null, this.tenantId = null, this.settings = {
            appVerificationDisabledForTesting: !1
        }, this.frameworks = [], this.name = e.name, this.clientVersion = t.sdkClientVersion
    }
    _initializeWithPersistence(e, t) {
        return t && (this._popupRedirectResolver = ut(t)), this._initializationPromise = this.queue((async () => {
            var n;
            this._deleted || (this.persistenceManager = await Vt.create(this, e), this._deleted || ((null === (n = this._popupRedirectResolver) || void 0 === n ? void 0 : n._shouldInitProactively) && await this._popupRedirectResolver._initialize(this), await this.initializeCurrentUser(t), this._deleted || (this._isInitialized = !0)))
        })), this._initializationPromise.then((() => {
            if (this.redirectInitializerError) throw this.redirectInitializerError
        }))
    }
    async _onStorageEvent() {
        if (this._deleted) return;
        const e = await this.assertedPersistence.getCurrentUser();
        return this.currentUser || e ? this.currentUser && e && this.currentUser.uid === e.uid ? (this._currentUser._assign(e), void await this.currentUser.getIdToken()) : void await this._updateCurrentUser(e) : void 0
    }
    async initializeCurrentUser(e) {
        var t;
        let n = await this.assertedPersistence.getCurrentUser();
        if (e && this.config.authDomain) {
            await this.getOrInitRedirectPersistenceManager();
            const i = null === (t = this.redirectUser) || void 0 === t ? void 0 : t._redirectEventId,
                r = null == n ? void 0 : n._redirectEventId,
                s = await this.tryRedirectSignIn(e);
            i && i !== r || !(null == s ? void 0 : s.user) || (n = s.user)
        }
        return n ? n._redirectEventId ? (at(this._popupRedirectResolver, this, "argument-error"), await this.getOrInitRedirectPersistenceManager(), this.redirectUser && this.redirectUser._redirectEventId === n._redirectEventId ? this.directlySetCurrentUser(n) : this.reloadAndSetCurrentUserOrClear(n)) : this.reloadAndSetCurrentUserOrClear(n) : this.directlySetCurrentUser(null)
    }
    async tryRedirectSignIn(e) {
        let t = null;
        try {
            t = await this._popupRedirectResolver._completeRedirectFn(this, e, !0)
        } catch (e) {
            this.redirectInitializerError = e, await this._setRedirectUser(null)
        }
        return t
    }
    async reloadAndSetCurrentUserOrClear(e) {
        try {
            await xt(e)
        } catch (e) {
            if ("auth/network-request-failed" !== e.code) return this.directlySetCurrentUser(null)
        }
        return this.directlySetCurrentUser(e)
    }
    useDeviceLanguage() {
        this.languageCode = function () {
            if ("undefined" == typeof navigator) return null;
            const e = navigator;
            return e.languages && e.languages[0] || e.language || null
        }()
    }
    async _delete() {
        this._deleted = !0
    }
    async updateCurrentUser(e) {
        const t = e ? Re(e) : null;
        return t && at(t.auth.config.apiKey === this.config.apiKey, this, "invalid-user-token"), this._updateCurrentUser(t && t._clone(this))
    }
    async _updateCurrentUser(e) {
        if (!this._deleted) return e && at(this.tenantId === e.tenantId, this, "tenant-id-mismatch"), this.queue((async () => {
            await this.directlySetCurrentUser(e), this.notifyAuthListeners()
        }))
    }
    async signOut() {
        return (this.redirectPersistenceManager || this._popupRedirectResolver) && await this._setRedirectUser(null), this._updateCurrentUser(null)
    }
    setPersistence(e) {
        return this.queue((async () => {
            await this.assertedPersistence.setPersistence(ut(e))
        }))
    }
    _getPersistence() {
        return this.assertedPersistence.persistence.type
    }
    _updateErrorMap(e) {
        this._errorFactory = new Se("auth", "Firebase", e())
    }
    onAuthStateChanged(e, t, n) {
        return this.registerStateListener(this.authStateSubscription, e, t, n)
    }
    onIdTokenChanged(e, t, n) {
        return this.registerStateListener(this.idTokenSubscription, e, t, n)
    }
    toJSON() {
        var e;
        return {
            apiKey: this.config.apiKey,
            authDomain: this.config.authDomain,
            appName: this.name,
            currentUser: null === (e = this._currentUser) || void 0 === e ? void 0 : e.toJSON()
        }
    }
    async _setRedirectUser(e, t) {
        const n = await this.getOrInitRedirectPersistenceManager(t);
        return null === e ? n.removeCurrentUser() : n.setCurrentUser(e)
    }
    async getOrInitRedirectPersistenceManager(e) {
        if (!this.redirectPersistenceManager) {
            const t = e && ut(e) || this._popupRedirectResolver;
            at(t, this, "argument-error"), this.redirectPersistenceManager = await Vt.create(this, [ut(t._redirectPersistence)], "redirectUser"), this.redirectUser = await this.redirectPersistenceManager.getCurrentUser()
        }
        return this.redirectPersistenceManager
    }
    async _redirectUserForId(e) {
        var t, n;
        return this._isInitialized && await this.queue((async () => {})), (null === (t = this._currentUser) || void 0 === t ? void 0 : t._redirectEventId) === e ? this._currentUser : (null === (n = this.redirectUser) || void 0 === n ? void 0 : n._redirectEventId) === e ? this.redirectUser : null
    }
    async _persistUserIfCurrent(e) {
        if (e === this.currentUser) return this.queue((async () => this.directlySetCurrentUser(e)))
    }
    _notifyListenersIfCurrent(e) {
        e === this.currentUser && this.notifyAuthListeners()
    }
    _key() {
        return `${this.config.authDomain}:${this.config.apiKey}:${this.name}`
    }
    _startProactiveRefresh() {
        this.isProactiveRefreshEnabled = !0, this.currentUser && this._currentUser._startProactiveRefresh()
    }
    _stopProactiveRefresh() {
        this.isProactiveRefreshEnabled = !1, this.currentUser && this._currentUser._stopProactiveRefresh()
    }
    get _currentUser() {
        return this.currentUser
    }
    notifyAuthListeners() {
        var e, t;
        if (!this._isInitialized) return;
        this.idTokenSubscription.next(this.currentUser);
        const n = null !== (t = null === (e = this.currentUser) || void 0 === e ? void 0 : e.uid) && void 0 !== t ? t : null;
        this.lastNotifiedUid !== n && (this.lastNotifiedUid = n, this.authStateSubscription.next(this.currentUser))
    }
    registerStateListener(e, t, n, i) {
        if (this._deleted) return () => {};
        const r = "function" == typeof t ? t : t.next.bind(t),
            s = this._isInitialized ? Promise.resolve() : this._initializationPromise;
        return at(s, this, "internal-error"), s.then((() => r(this.currentUser))), "function" == typeof t ? e.addObserver(t, n, i) : e.addObserver(t)
    }
    async directlySetCurrentUser(e) {
        this.currentUser && this.currentUser !== e && (this._currentUser._stopProactiveRefresh(), e && this.isProactiveRefreshEnabled && e._startProactiveRefresh()), this.currentUser = e, e ? await this.assertedPersistence.setCurrentUser(e) : await this.assertedPersistence.removeCurrentUser()
    }
    queue(e) {
        return this.operations = this.operations.then(e, e), this.operations
    }
    get assertedPersistence() {
        return at(this.persistenceManager, this, "internal-error"), this.persistenceManager
    }
    _logFramework(e) {
        e && !this.frameworks.includes(e) && (this.frameworks.push(e), this.frameworks.sort(), this.clientVersion = Qt(this.config.clientPlatform, this._getFrameworks()))
    }
    _getFrameworks() {
        return this.frameworks
    }
    _getSdkClientVersion() {
        return this.clientVersion
    }
}

function Xt(e) {
    return Re(e)
}
class Yt {
    constructor(e) {
        var t, n;
        this.auth = e, this.observer = null, this.addObserver = (n = new Ne((e => this.observer = e), t)).subscribe.bind(n)
    }
    get next() {
        return at(this.observer, this.auth, "internal-error"), this.observer.next.bind(this.observer)
    }
}
class Zt {
    constructor(e, t) {
        this.providerId = e, this.signInMethod = t
    }
    toJSON() {
        return ct("not implemented")
    }
    _getIdTokenResponse(e) {
        return ct("not implemented")
    }
    _linkToIdToken(e, t) {
        return ct("not implemented")
    }
    _getReauthenticationResolver(e) {
        return ct("not implemented")
    }
}
async function en(e, t) {
    return async function (e, t, n, i, r = {}) {
        const s = await bt(e, t, n, i, r);
        return "mfaPendingCredential" in s && rt(e, "multi-factor-auth-required", {
            serverResponse: s
        }), s
    }(e, "POST", "/v1/accounts:signInWithIdp", function (e, t) {
        return e.tenantId && !t.tenantId ? Object.assign(Object.assign({}, t), {
            tenantId: e.tenantId
        }) : t
    }(e, t))
}
class tn extends Zt {
    constructor() {
        super(...arguments), this.pendingToken = null
    }
    static _fromParams(e) {
        const t = new tn(e.providerId, e.signInMethod);
        return e.idToken || e.accessToken ? (e.idToken && (t.idToken = e.idToken), e.accessToken && (t.accessToken = e.accessToken), e.nonce && !e.pendingToken && (t.nonce = e.nonce), e.pendingToken && (t.pendingToken = e.pendingToken)) : e.oauthToken && e.oauthTokenSecret ? (t.accessToken = e.oauthToken, t.secret = e.oauthTokenSecret) : rt("argument-error"), t
    }
    toJSON() {
        return {
            idToken: this.idToken,
            accessToken: this.accessToken,
            secret: this.secret,
            nonce: this.nonce,
            pendingToken: this.pendingToken,
            providerId: this.providerId,
            signInMethod: this.signInMethod
        }
    }
    static fromJSON(e) {
        const t = "string" == typeof e ? JSON.parse(e) : e,
            {
                providerId: n,
                signInMethod: i
            } = t,
            r = le(t, ["providerId", "signInMethod"]);
        if (!n || !i) return null;
        const s = new tn(n, i);
        return Object.assign(s, r), s
    }
    _getIdTokenResponse(e) {
        return en(e, this.buildRequest())
    }
    _linkToIdToken(e, t) {
        const n = this.buildRequest();
        return n.idToken = t, en(e, n)
    }
    _getReauthenticationResolver(e) {
        const t = this.buildRequest();
        return t.autoCreate = !1, en(e, t)
    }
    buildRequest() {
        const e = {
            requestUri: "http://localhost",
            returnSecureToken: !0
        };
        if (this.pendingToken) e.pendingToken = this.pendingToken;
        else {
            const t = {};
            this.idToken && (t.id_token = this.idToken), this.accessToken && (t.access_token = this.accessToken), this.secret && (t.oauth_token_secret = this.secret), t.providerId = this.providerId, this.nonce && !this.pendingToken && (t.nonce = this.nonce), e.postBody = Ae(t)
        }
        return e
    }
}
class nn {
    constructor(e) {
        this.providerId = e, this.defaultLanguageCode = null, this.customParameters = {}
    }
    setDefaultLanguage(e) {
        this.defaultLanguageCode = e
    }
    setCustomParameters(e) {
        return this.customParameters = e, this
    }
    getCustomParameters() {
        return this.customParameters
    }
}
class rn extends nn {
    constructor() {
        super(...arguments), this.scopes = []
    }
    addScope(e) {
        return this.scopes.includes(e) || this.scopes.push(e), this
    }
    getScopes() {
        return [...this.scopes]
    }
}
class sn extends rn {
    constructor() {
        super("facebook.com")
    }
    static credential(e) {
        return tn._fromParams({
            providerId: sn.PROVIDER_ID,
            signInMethod: sn.FACEBOOK_SIGN_IN_METHOD,
            accessToken: e
        })
    }
    static credentialFromResult(e) {
        return sn.credentialFromTaggedObject(e)
    }
    static credentialFromError(e) {
        return sn.credentialFromTaggedObject(e.customData || {})
    }
    static credentialFromTaggedObject({
        _tokenResponse: e
    }) {
        if (!e || !("oauthAccessToken" in e)) return null;
        if (!e.oauthAccessToken) return null;
        try {
            return sn.credential(e.oauthAccessToken)
        } catch (e) {
            return null
        }
    }
}
sn.FACEBOOK_SIGN_IN_METHOD = "facebook.com", sn.PROVIDER_ID = "facebook.com";
class on extends rn {
    constructor() {
        super("google.com"), this.addScope("profile")
    }
    static credential(e, t) {
        return tn._fromParams({
            providerId: on.PROVIDER_ID,
            signInMethod: on.GOOGLE_SIGN_IN_METHOD,
            idToken: e,
            accessToken: t
        })
    }
    static credentialFromResult(e) {
        return on.credentialFromTaggedObject(e)
    }
    static credentialFromError(e) {
        return on.credentialFromTaggedObject(e.customData || {})
    }
    static credentialFromTaggedObject({
        _tokenResponse: e
    }) {
        if (!e) return null;
        const {
            oauthIdToken: t,
            oauthAccessToken: n
        } = e;
        if (!t && !n) return null;
        try {
            return on.credential(t, n)
        } catch (e) {
            return null
        }
    }
}
on.GOOGLE_SIGN_IN_METHOD = "google.com", on.PROVIDER_ID = "google.com";
class an extends rn {
    constructor() {
        super("github.com")
    }
    static credential(e) {
        return tn._fromParams({
            providerId: an.PROVIDER_ID,
            signInMethod: an.GITHUB_SIGN_IN_METHOD,
            accessToken: e
        })
    }
    static credentialFromResult(e) {
        return an.credentialFromTaggedObject(e)
    }
    static credentialFromError(e) {
        return an.credentialFromTaggedObject(e.customData || {})
    }
    static credentialFromTaggedObject({
        _tokenResponse: e
    }) {
        if (!e || !("oauthAccessToken" in e)) return null;
        if (!e.oauthAccessToken) return null;
        try {
            return an.credential(e.oauthAccessToken)
        } catch (e) {
            return null
        }
    }
}
an.GITHUB_SIGN_IN_METHOD = "github.com", an.PROVIDER_ID = "github.com";
class cn extends rn {
    constructor() {
        super("twitter.com")
    }
    static credential(e, t) {
        return tn._fromParams({
            providerId: cn.PROVIDER_ID,
            signInMethod: cn.TWITTER_SIGN_IN_METHOD,
            oauthToken: e,
            oauthTokenSecret: t
        })
    }
    static credentialFromResult(e) {
        return cn.credentialFromTaggedObject(e)
    }
    static credentialFromError(e) {
        return cn.credentialFromTaggedObject(e.customData || {})
    }
    static credentialFromTaggedObject({
        _tokenResponse: e
    }) {
        if (!e) return null;
        const {
            oauthAccessToken: t,
            oauthTokenSecret: n
        } = e;
        if (!t || !n) return null;
        try {
            return cn.credential(t, n)
        } catch (e) {
            return null
        }
    }
}
cn.TWITTER_SIGN_IN_METHOD = "twitter.com", cn.PROVIDER_ID = "twitter.com";
class hn {
    constructor(e) {
        this.user = e.user, this.providerId = e.providerId, this._tokenResponse = e._tokenResponse, this.operationType = e.operationType
    }
    static async _fromIdTokenResponse(e, t, n, i = !1) {
        const r = await Ot._fromIdTokenResponse(e, n, i),
            s = ln(n);
        return new hn({
            user: r,
            providerId: s,
            _tokenResponse: n,
            operationType: t
        })
    }
    static async _forOperation(e, t, n) {
        await e._updateTokensIfNecessary(n, !0);
        const i = ln(n);
        return new hn({
            user: e,
            providerId: i,
            _tokenResponse: n,
            operationType: t
        })
    }
}

function ln(e) {
    return e.providerId ? e.providerId : "phoneNumber" in e ? "phone" : null
}
class un extends Te {
    constructor(e, t, n, i) {
        var r;
        super(t.code, t.message), this.operationType = n, this.user = i, this.name = "FirebaseError", Object.setPrototypeOf(this, un.prototype), this.appName = e.name, this.code = t.code, this.tenantId = null !== (r = e.tenantId) && void 0 !== r ? r : void 0, this.serverResponse = t.customData.serverResponse
    }
    static _fromErrorAndOperation(e, t, n, i) {
        return new un(e, t, n, i)
    }
}

function dn(e, t, n, i) {
    return ("reauthenticate" === t ? n._getReauthenticationResolver(e) : n._getIdTokenResponse(e)).catch((n => {
        if ("auth/multi-factor-auth-required" === n.code) throw un._fromErrorAndOperation(e, n, t, i);
        throw n
    }))
}
class fn {
    constructor(e) {
        this.auth = e, this.internalListeners = new Map
    }
    getUid() {
        var e;
        return this.assertAuthConfigured(), (null === (e = this.auth.currentUser) || void 0 === e ? void 0 : e.uid) || null
    }
    async getToken(e) {
        if (this.assertAuthConfigured(), await this.auth._initializationPromise, !this.auth.currentUser) return null;
        return {
            accessToken: await this.auth.currentUser.getIdToken(e)
        }
    }
    addAuthTokenListener(e) {
        if (this.assertAuthConfigured(), this.internalListeners.has(e)) return;
        const t = this.auth.onIdTokenChanged((t => {
            var n;
            e((null === (n = t) || void 0 === n ? void 0 : n.stsTokenManager.accessToken) || null)
        }));
        this.internalListeners.set(e, t), this.updateProactiveRefresh()
    }
    removeAuthTokenListener(e) {
        this.assertAuthConfigured();
        const t = this.internalListeners.get(e);
        t && (this.internalListeners.delete(e), t(), this.updateProactiveRefresh())
    }
    assertAuthConfigured() {
        at(this.auth._initializationPromise, "dependent-sdk-initialized-before-auth")
    }
    updateProactiveRefresh() {
        this.internalListeners.size > 0 ? this.auth._startProactiveRefresh() : this.auth._stopProactiveRefresh()
    }
}
class pn {
    constructor(e, t) {
        this.storage = e, this.type = t
    }
    _isAvailable() {
        try {
            return this.storage ? (this.storage.setItem("__sak", "1"), this.storage.removeItem("__sak"), Promise.resolve(!0)) : Promise.resolve(!1)
        } catch (e) {
            return Promise.resolve(!1)
        }
    }
    _set(e, t) {
        return this.storage.setItem(e, JSON.stringify(t)), Promise.resolve()
    }
    _get(e) {
        const t = this.storage.getItem(e);
        return Promise.resolve(t ? JSON.parse(t) : null)
    }
    _remove(e) {
        return this.storage.removeItem(e), Promise.resolve()
    }
}
class gn extends pn {
    constructor() {
        super(window.localStorage, "LOCAL"), this.listeners = {}, this.localCache = {}, this.pollTimer = null, this.safariLocalStorageNotSynced = function () {
            const e = ve();
            return qt(e) || Gt(e)
        }() && function () {
            try {
                return !(!window || window === window.top)
            } catch (e) {
                return !1
            }
        }(), this.fallbackToPolling = Wt(), this.boundEventHandler = this.onStorageEvent.bind(this)
    }
    forAllChangedKeys(e) {
        for (const t of Object.keys(this.listeners)) {
            const n = this.storage.getItem(t),
                i = this.localCache[t];
            n !== i && e(t, i, n)
        }
    }
    onStorageEvent(e, t = !1) {
        if (!e.key) return void this.forAllChangedKeys(((e, t, n) => {
            this.notifyListeners(e, n)
        }));
        const n = e.key;
        if (t ? this.detachListener() : this.stopPolling(), this.safariLocalStorageNotSynced) {
            const i = this.storage.getItem(n);
            if (e.newValue !== i) null !== e.newValue ? this.storage.setItem(n, e.newValue) : this.storage.removeItem(n);
            else if (this.localCache[n] === e.newValue && !t) return
        }
        const i = () => {
                const e = this.storage.getItem(n);
                (t || this.localCache[n] !== e) && this.notifyListeners(n, e)
            },
            r = this.storage.getItem(n);
        Ee() && 10 === document.documentMode && r !== e.newValue && e.newValue !== e.oldValue ? setTimeout(i, 10) : i()
    }
    notifyListeners(e, t) {
        this.localCache[e] = t;
        const n = this.listeners[e];
        if (n)
            for (const e of Array.from(n)) e(t ? JSON.parse(t) : t)
    }
    startPolling() {
        this.stopPolling(), this.pollTimer = setInterval((() => {
            this.forAllChangedKeys(((e, t, n) => {
                this.onStorageEvent(new StorageEvent("storage", {
                    key: e,
                    oldValue: t,
                    newValue: n
                }), !0)
            }))
        }), 1e3)
    }
    stopPolling() {
        this.pollTimer && (clearInterval(this.pollTimer), this.pollTimer = null)
    }
    attachListener() {
        window.addEventListener("storage", this.boundEventHandler)
    }
    detachListener() {
        window.removeEventListener("storage", this.boundEventHandler)
    }
    _addListener(e, t) {
        0 === Object.keys(this.listeners).length && (this.fallbackToPolling ? this.startPolling() : this.attachListener()), this.listeners[e] || (this.listeners[e] = new Set, this.localCache[e] = this.storage.getItem(e)), this.listeners[e].add(t)
    }
    _removeListener(e, t) {
        this.listeners[e] && (this.listeners[e].delete(t), 0 === this.listeners[e].size && delete this.listeners[e]), 0 === Object.keys(this.listeners).length && (this.detachListener(), this.stopPolling())
    }
    async _set(e, t) {
        await super._set(e, t), this.localCache[e] = JSON.stringify(t)
    }
    async _get(e) {
        const t = await super._get(e);
        return this.localCache[e] = JSON.stringify(t), t
    }
    async _remove(e) {
        await super._remove(e), delete this.localCache[e]
    }
}
gn.type = "LOCAL";
const mn = gn;
class yn {
    constructor(e) {
        this.eventTarget = e, this.handlersMap = {}, this.boundEventHandler = this.handleEvent.bind(this)
    }
    static _getInstance(e) {
        const t = this.receivers.find((t => t.isListeningto(e)));
        if (t) return t;
        const n = new yn(e);
        return this.receivers.push(n), n
    }
    isListeningto(e) {
        return this.eventTarget === e
    }
    async handleEvent(e) {
        const t = e,
            {
                eventId: n,
                eventType: i,
                data: r
            } = t.data,
            s = this.handlersMap[i];
        if (!(null == s ? void 0 : s.size)) return;
        t.ports[0].postMessage({
            status: "ack",
            eventId: n,
            eventType: i
        });
        const o = Array.from(s).map((async e => e(t.origin, r))),
            a = await
        function (e) {
            return Promise.all(e.map((async e => {
                try {
                    return {
                        fulfilled: !0,
                        value: await e
                    }
                } catch (e) {
                    return {
                        fulfilled: !1,
                        reason: e
                    }
                }
            })))
        }(o);
        t.ports[0].postMessage({
            status: "done",
            eventId: n,
            eventType: i,
            response: a
        })
    }
    _subscribe(e, t) {
        0 === Object.keys(this.handlersMap).length && this.eventTarget.addEventListener("message", this.boundEventHandler), this.handlersMap[e] || (this.handlersMap[e] = new Set), this.handlersMap[e].add(t)
    }
    _unsubscribe(e, t) {
        this.handlersMap[e] && t && this.handlersMap[e].delete(t), t && 0 !== this.handlersMap[e].size || delete this.handlersMap[e], 0 === Object.keys(this.handlersMap).length && this.eventTarget.removeEventListener("message", this.boundEventHandler)
    }
}

function vn(e = "", t = 10) {
    let n = "";
    for (let e = 0; e < t; e++) n += Math.floor(10 * Math.random());
    return e + n
}
yn.receivers = [];
class wn {
    constructor(e) {
        this.target = e, this.handlers = new Set
    }
    removeMessageHandler(e) {
        e.messageChannel && (e.messageChannel.port1.removeEventListener("message", e.onMessage), e.messageChannel.port1.close()), this.handlers.delete(e)
    }
    async _send(e, t, n = 50) {
        const i = "undefined" != typeof MessageChannel ? new MessageChannel : null;
        if (!i) throw new Error("connection_unavailable");
        let r, s;
        return new Promise(((o, a) => {
            const c = vn("", 20);
            i.port1.start();
            const h = setTimeout((() => {
                a(new Error("unsupported_event"))
            }), n);
            s = {
                messageChannel: i,
                onMessage(e) {
                    const t = e;
                    if (t.data.eventId === c) switch (t.data.status) {
                        case "ack":
                            clearTimeout(h), r = setTimeout((() => {
                                a(new Error("timeout"))
                            }), 3e3);
                            break;
                        case "done":
                            clearTimeout(r), o(t.data.response);
                            break;
                        default:
                            clearTimeout(h), clearTimeout(r), a(new Error("invalid_response"))
                    }
                }
            }, this.handlers.add(s), i.port1.addEventListener("message", s.onMessage), this.target.postMessage({
                eventType: e,
                eventId: c,
                data: t
            }, [i.port2])
        })).finally((() => {
            s && this.removeMessageHandler(s)
        }))
    }
}

function bn() {
    return window
}

function _n() {
    return void 0 !== bn().WorkerGlobalScope && "function" == typeof bn().importScripts
}
const En = "firebaseLocalStorageDb";
class Tn {
    constructor(e) {
        this.request = e
    }
    toPromise() {
        return new Promise(((e, t) => {
            this.request.addEventListener("success", (() => {
                e(this.request.result)
            })), this.request.addEventListener("error", (() => {
                t(this.request.error)
            }))
        }))
    }
}

function Sn(e, t) {
    return e.transaction(["firebaseLocalStorage"], t ? "readwrite" : "readonly").objectStore("firebaseLocalStorage")
}

function In() {
    const e = indexedDB.open(En, 1);
    return new Promise(((t, n) => {
        e.addEventListener("error", (() => {
            n(e.error)
        })), e.addEventListener("upgradeneeded", (() => {
            const t = e.result;
            try {
                t.createObjectStore("firebaseLocalStorage", {
                    keyPath: "fbase_key"
                })
            } catch (e) {
                n(e)
            }
        })), e.addEventListener("success", (async () => {
            const n = e.result;
            n.objectStoreNames.contains("firebaseLocalStorage") ? t(n) : (n.close(), await
                function () {
                    const e = indexedDB.deleteDatabase(En);
                    return new Tn(e).toPromise()
                }(), t(await In()))
        }))
    }))
}
async function kn(e, t, n) {
    const i = Sn(e, !0).put({
        fbase_key: t,
        value: n
    });
    return new Tn(i).toPromise()
}

function An(e, t) {
    const n = Sn(e, !0).delete(t);
    return new Tn(n).toPromise()
}
class Nn {
    constructor() {
        this.type = "LOCAL", this.listeners = {}, this.localCache = {}, this.pollTimer = null, this.pendingWrites = 0, this.receiver = null, this.sender = null, this.serviceWorkerReceiverAvailable = !1, this.activeServiceWorker = null, this._workerInitializationPromise = this.initializeServiceWorkerMessaging().then((() => {}), (() => {}))
    }
    async _openDb() {
        return this.db || (this.db = await In()), this.db
    }
    async _withRetries(e) {
        let t = 0;
        for (;;) try {
            const t = await this._openDb();
            return await e(t)
        } catch (e) {
            if (t++ > 3) throw e;
            this.db && (this.db.close(), this.db = void 0)
        }
    }
    async initializeServiceWorkerMessaging() {
        return _n() ? this.initializeReceiver() : this.initializeSender()
    }
    async initializeReceiver() {
        this.receiver = yn._getInstance(_n() ? self : null), this.receiver._subscribe("keyChanged", (async (e, t) => ({
            keyProcessed: (await this._poll()).includes(t.key)
        }))), this.receiver._subscribe("ping", (async (e, t) => ["keyChanged"]))
    }
    async initializeSender() {
        var e, t;
        if (this.activeServiceWorker = await async function () {
                if (!(null === navigator || void 0 === navigator ? void 0 : navigator.serviceWorker)) return null;
                try {
                    return (await navigator.serviceWorker.ready).active
                } catch (e) {
                    return null
                }
            }(), !this.activeServiceWorker) return;
        this.sender = new wn(this.activeServiceWorker);
        const n = await this.sender._send("ping", {}, 800);
        n && (null === (e = n[0]) || void 0 === e ? void 0 : e.fulfilled) && (null === (t = n[0]) || void 0 === t ? void 0 : t.value.includes("keyChanged")) && (this.serviceWorkerReceiverAvailable = !0)
    }
    async notifyServiceWorker(e) {
        if (this.sender && this.activeServiceWorker && function () {
                var e;
                return (null === (e = null === navigator || void 0 === navigator ? void 0 : navigator.serviceWorker) || void 0 === e ? void 0 : e.controller) || null
            }() === this.activeServiceWorker) try {
            await this.sender._send("keyChanged", {
                key: e
            }, this.serviceWorkerReceiverAvailable ? 800 : 50)
        } catch (e) {}
    }
    async _isAvailable() {
        try {
            if (!indexedDB) return !1;
            const e = await In();
            return await kn(e, "__sak", "1"), await An(e, "__sak"), !0
        } catch (e) {}
        return !1
    }
    async _withPendingWrite(e) {
        this.pendingWrites++;
        try {
            await e()
        } finally {
            this.pendingWrites--
        }
    }
    async _set(e, t) {
        return this._withPendingWrite((async () => (await this._withRetries((n => kn(n, e, t))), this.localCache[e] = t, this.notifyServiceWorker(e))))
    }
    async _get(e) {
        const t = await this._withRetries((t => async function (e, t) {
            const n = Sn(e, !1).get(t),
                i = await new Tn(n).toPromise();
            return void 0 === i ? null : i.value
        }(t, e)));
        return this.localCache[e] = t, t
    }
    async _remove(e) {
        return this._withPendingWrite((async () => (await this._withRetries((t => An(t, e))), delete this.localCache[e], this.notifyServiceWorker(e))))
    }
    async _poll() {
        const e = await this._withRetries((e => {
            const t = Sn(e, !1).getAll();
            return new Tn(t).toPromise()
        }));
        if (!e) return [];
        if (0 !== this.pendingWrites) return [];
        const t = [],
            n = new Set;
        for (const {
                fbase_key: i,
                value: r
            } of e) n.add(i), JSON.stringify(this.localCache[i]) !== JSON.stringify(r) && (this.notifyListeners(i, r), t.push(i));
        for (const e of Object.keys(this.localCache)) this.localCache[e] && !n.has(e) && (this.notifyListeners(e, null), t.push(e));
        return t
    }
    notifyListeners(e, t) {
        this.localCache[e] = t;
        const n = this.listeners[e];
        if (n)
            for (const e of Array.from(n)) e(t)
    }
    startPolling() {
        this.stopPolling(), this.pollTimer = setInterval((async () => this._poll()), 800)
    }
    stopPolling() {
        this.pollTimer && (clearInterval(this.pollTimer), this.pollTimer = null)
    }
    _addListener(e, t) {
        0 === Object.keys(this.listeners).length && this.startPolling(), this.listeners[e] || (this.listeners[e] = new Set, this._get(e)), this.listeners[e].add(t)
    }
    _removeListener(e, t) {
        this.listeners[e] && (this.listeners[e].delete(t), 0 === this.listeners[e].size && delete this.listeners[e]), 0 === Object.keys(this.listeners).length && this.stopPolling()
    }
}
Nn.type = "LOCAL";
const Cn = Nn;
class Rn {
    constructor(e) {
        this.auth = e, this.cachedEventUids = new Set, this.consumers = new Set, this.queuedRedirectEvent = null, this.hasHandledPotentialRedirect = !1, this.lastProcessedEventTime = Date.now()
    }
    registerConsumer(e) {
        this.consumers.add(e), this.queuedRedirectEvent && this.isEventForConsumer(this.queuedRedirectEvent, e) && (this.sendToConsumer(this.queuedRedirectEvent, e), this.saveEventToCache(this.queuedRedirectEvent), this.queuedRedirectEvent = null)
    }
    unregisterConsumer(e) {
        this.consumers.delete(e)
    }
    onEvent(e) {
        if (this.hasEventBeenHandled(e)) return !1;
        let t = !1;
        return this.consumers.forEach((n => {
            this.isEventForConsumer(e, n) && (t = !0, this.sendToConsumer(e, n), this.saveEventToCache(e))
        })), this.hasHandledPotentialRedirect || ! function (e) {
            switch (e.type) {
                case "signInViaRedirect":
                case "linkViaRedirect":
                case "reauthViaRedirect":
                    return !0;
                case "unknown":
                    return Dn(e);
                default:
                    return !1
            }
        }(e) || (this.hasHandledPotentialRedirect = !0, t || (this.queuedRedirectEvent = e, t = !0)), t
    }
    sendToConsumer(e, t) {
        var n;
        if (e.error && !Dn(e)) {
            const i = (null === (n = e.error.code) || void 0 === n ? void 0 : n.split("auth/")[1]) || "internal-error";
            t.onError(st(this.auth, i))
        } else t.onAuthEvent(e)
    }
    isEventForConsumer(e, t) {
        const n = null === t.eventId || !!e.eventId && e.eventId === t.eventId;
        return t.filter.includes(e.type) && n
    }
    hasEventBeenHandled(e) {
        return Date.now() - this.lastProcessedEventTime >= 6e5 && this.cachedEventUids.clear(), this.cachedEventUids.has(xn(e))
    }
    saveEventToCache(e) {
        this.cachedEventUids.add(xn(e)), this.lastProcessedEventTime = Date.now()
    }
}

function xn(e) {
    return [e.type, e.eventId, e.sessionId, e.tenantId].filter((e => e)).join("-")
}

function Dn({
    type: e,
    error: t
}) {
    return "unknown" === e && "auth/no-auth-event" === (null == t ? void 0 : t.code)
}
const Ln = /^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/,
    On = /^https?/;
async function Pn(e) {
    if (e.config.emulator) return;
    const {
        authorizedDomains: t
    } = await async function (e, t = {}) {
        return bt(e, "GET", "/v1/projects", t)
    }(e);
    for (const e of t) try {
        if (Mn(e)) return
    } catch (e) {}
    rt(e, "unauthorized-domain")
}

function Mn(e) {
    const t = dt(),
        {
            protocol: n,
            hostname: i
        } = new URL(t);
    if (e.startsWith("chrome-extension://")) {
        const r = new URL(e);
        return "" === r.hostname && "" === i ? "chrome-extension:" === n && e.replace("chrome-extension://", "") === t.replace("chrome-extension://", "") : "chrome-extension:" === n && r.hostname === i
    }
    if (!On.test(n)) return !1;
    if (Ln.test(e)) return i === e;
    const r = e.replace(/\./g, "\\.");
    return new RegExp("^(.+\\." + r + "|" + r + ")$", "i").test(i)
}

function Un(e) {
    return new Promise(((t, n) => {
        const i = document.createElement("script");
        i.setAttribute("src", e), i.onload = t, i.onerror = e => {
                const t = st("internal-error");
                t.customData = e, n(t)
            }, i.type = "text/javascript", i.charset = "UTF-8",
            function () {
                var e, t;
                return null !== (t = null === (e = document.getElementsByTagName("head")) || void 0 === e ? void 0 : e[0]) && void 0 !== t ? t : document
            }().appendChild(i)
    }))
}
const Vn = new gt(3e4, 6e4);

function Fn() {
    const e = bn().___jsl;
    if (null == e ? void 0 : e.H)
        for (const t of Object.keys(e.H))
            if (e.H[t].r = e.H[t].r || [], e.H[t].L = e.H[t].L || [], e.H[t].r = [...e.H[t].L], e.CP)
                for (let t = 0; t < e.CP.length; t++) e.CP[t] = null
}

function jn(e) {
    return new Promise(((t, n) => {
        var i, r, s;

        function o() {
            Fn(), gapi.load("gapi.iframes", {
                callback: () => {
                    t(gapi.iframes.getContext())
                },
                ontimeout: () => {
                    Fn(), n(st(e, "network-request-failed"))
                },
                timeout: Vn.get()
            })
        }
        if (null === (r = null === (i = bn().gapi) || void 0 === i ? void 0 : i.iframes) || void 0 === r ? void 0 : r.Iframe) t(gapi.iframes.getContext());
        else {
            if (!(null === (s = bn().gapi) || void 0 === s ? void 0 : s.load)) {
                const t = `__${"iframefcb"}${Math.floor(1e6*Math.random())}`;
                return bn()[t] = () => {
                    gapi.load ? o() : n(st(e, "network-request-failed"))
                }, Un(`https://apis.google.com/js/api.js?onload=${t}`)
            }
            o()
        }
    })).catch((e => {
        throw qn = null, e
    }))
}
let qn = null;
const Bn = new gt(5e3, 15e3),
    $n = {
        style: {
            position: "absolute",
            top: "-100px",
            width: "1px",
            height: "1px"
        }
    },
    Hn = new Map([
        ["identitytoolkit.googleapis.com", "p"],
        ["staging-identitytoolkit.sandbox.googleapis.com", "s"],
        ["test-identitytoolkit.sandbox.googleapis.com", "t"]
    ]);

function zn(e) {
    const t = e.config;
    at(t.authDomain, e, "auth-domain-config-required");
    const n = t.emulator ? mt(t, "emulator/auth/iframe") : `https://${e.config.authDomain}/__/auth/iframe`,
        i = {
            apiKey: t.apiKey,
            appName: e.name,
            v: "9.0.0-beta.7"
        },
        r = Hn.get(e.config.apiHost);
    r && (i.eid = r);
    const s = e._getFrameworks();
    return s.length && (i.fw = s.join(",")), `${n}?${Ae(i).slice(1)}`
}
async function Kn(e) {
    const t = await
    function (e) {
        return qn = qn || jn(e), qn
    }(e), n = bn().gapi;
    return at(n, e, "internal-error"), t.open({
        where: document.body,
        url: zn(e),
        messageHandlersFilter: n.iframes.CROSS_ORIGIN_IFRAMES_FILTER,
        attributes: $n,
        dontclear: !0
    }, (t => new Promise((async (n, i) => {
        await t.restyle({
            setHideOnLeave: !1
        });
        const r = st(e, "network-request-failed"),
            s = bn().setTimeout((() => {
                i(r)
            }), Bn.get());

        function o() {
            bn().clearTimeout(s), n(t)
        }
        t.ping(o).then(o, (() => {
            i(r)
        }))
    }))))
}
class Gn extends pn {
    constructor() {
        super(window.sessionStorage, "SESSION")
    }
    _addListener(e, t) {}
    _removeListener(e, t) {}
}
Gn.type = "SESSION";
const Wn = Gn,
    Qn = {
        location: "yes",
        resizable: "yes",
        statusbar: "yes",
        toolbar: "no"
    };
class Jn {
    constructor(e) {
        this.window = e, this.associatedEvent = null
    }
    close() {
        if (this.window) try {
            this.window.close()
        } catch (e) {}
    }
}

function Xn(e, t, n, i = 500, r = 600) {
    const s = Math.min((window.screen.availHeight - r) / 2, 0).toString(),
        o = Math.min((window.screen.availWidth - i) / 2, 0).toString();
    let a = "";
    const c = Object.assign(Object.assign({}, Qn), {
            width: i.toString(),
            height: r.toString(),
            top: s,
            left: o
        }),
        h = ve().toLowerCase();
    n && (a = Bt(h) ? "_blank" : n), jt(h) && (t = t || "http://localhost", c.scrollbars = "yes");
    const l = Object.entries(c).reduce(((e, [t, n]) => `${e}${t}=${n},`), "");
    if (function (e = ve()) {
            var t;
            return Gt(e) && !!(null === (t = window.navigator) || void 0 === t ? void 0 : t.standalone)
        }(h) && "_self" !== a) return function (e, t) {
        const n = document.createElement("a");
        n.href = e, n.target = t;
        const i = document.createEvent("MouseEvent");
        i.initMouseEvent("click", !0, !0, window, 1, 0, 0, 0, 0, !1, !1, !1, !1, 1, null), n.dispatchEvent(i)
    }(t || "", a), new Jn(null);
    const u = window.open(t || "", a, l);
    at(u, e, "popup-blocked");
    try {
        u.focus()
    } catch (e) {}
    return new Jn(u)
}

function Yn(e, t) {
    return t ? ut(t) : (at(e._popupRedirectResolver, e, "argument-error"), e._popupRedirectResolver)
}
class Zn extends Zt {
    constructor(e) {
        super("custom", "custom"), this.params = e
    }
    _getIdTokenResponse(e) {
        return en(e, this._buildIdpRequest())
    }
    _linkToIdToken(e, t) {
        return en(e, this._buildIdpRequest(t))
    }
    _getReauthenticationResolver(e) {
        return en(e, this._buildIdpRequest())
    }
    _buildIdpRequest(e) {
        const t = {
            requestUri: this.params.requestUri,
            sessionId: this.params.sessionId,
            postBody: this.params.postBody,
            tenantId: this.params.tenantId,
            pendingToken: this.params.pendingToken,
            returnSecureToken: !0,
            returnIdpCredential: !0
        };
        return e && (t.idToken = e), t
    }
}

function ei(e) {
    return async function (e, t, n = !1) {
        const i = "signIn",
            r = await dn(e, i, t),
            s = await hn._fromIdTokenResponse(e, i, r);
        return n || await e._updateCurrentUser(s.user), s
    }(e.auth, new Zn(e), e.bypassAuthState)
}

function ti(e) {
    const {
        auth: t,
        user: n
    } = e;
    return at(n, t, "internal-error"), async function (e, t, n = !1) {
        const {
            auth: i
        } = e, r = "reauthenticate";
        try {
            const s = await Nt(e, dn(i, r, t, e), n);
            at(s.idToken, i, "internal-error");
            const o = At(s.idToken);
            at(o, i, "internal-error");
            const {
                sub: a
            } = o;
            return at(e.uid === a, i, "user-mismatch"), hn._forOperation(e, r, s)
        } catch (e) {
            throw "auth/user-not-found" === (null == e ? void 0 : e.code) && rt(i, "user-mismatch"), e
        }
    }(n, new Zn(e), e.bypassAuthState)
}
async function ni(e) {
    const {
        auth: t,
        user: n
    } = e;
    return at(n, t, "internal-error"), async function (e, t, n = !1) {
        const i = await Nt(e, t._linkToIdToken(e.auth, await e.getIdToken()), n);
        return hn._forOperation(e, "link", i)
    }(n, new Zn(e), e.bypassAuthState)
}
class ii {
    constructor(e, t, n, i, r = !1) {
        this.auth = e, this.resolver = n, this.user = i, this.bypassAuthState = r, this.pendingPromise = null, this.eventManager = null, this.filter = Array.isArray(t) ? t : [t]
    }
    execute() {
        return new Promise((async (e, t) => {
            this.pendingPromise = {
                resolve: e,
                reject: t
            };
            try {
                this.eventManager = await this.resolver._initialize(this.auth), await this.onExecution(), this.eventManager.registerConsumer(this)
            } catch (e) {
                this.reject(e)
            }
        }))
    }
    async onAuthEvent(e) {
        const {
            urlResponse: t,
            sessionId: n,
            postBody: i,
            tenantId: r,
            error: s,
            type: o
        } = e;
        if (s) return void this.reject(s);
        const a = {
            auth: this.auth,
            requestUri: t,
            sessionId: n,
            tenantId: r || void 0,
            postBody: i || void 0,
            user: this.user,
            bypassAuthState: this.bypassAuthState
        };
        try {
            this.resolve(await this.getIdpTask(o)(a))
        } catch (e) {
            this.reject(e)
        }
    }
    onError(e) {
        this.reject(e)
    }
    getIdpTask(e) {
        switch (e) {
            case "signInViaPopup":
            case "signInViaRedirect":
                return ei;
            case "linkViaPopup":
            case "linkViaRedirect":
                return ni;
            case "reauthViaPopup":
            case "reauthViaRedirect":
                return ti;
            default:
                rt(this.auth, "internal-error")
        }
    }
    resolve(e) {
        ht(this.pendingPromise, "Pending promise was never set"), this.pendingPromise.resolve(e), this.unregisterAndCleanUp()
    }
    reject(e) {
        ht(this.pendingPromise, "Pending promise was never set"), this.pendingPromise.reject(e), this.unregisterAndCleanUp()
    }
    unregisterAndCleanUp() {
        this.eventManager && this.eventManager.unregisterConsumer(this), this.pendingPromise = null, this.cleanUp()
    }
}
const ri = new Map;
class si extends ii {
    constructor(e, t, n = !1) {
        super(e, ["signInViaRedirect", "linkViaRedirect", "reauthViaRedirect", "unknown"], t, void 0, n), this.eventId = null
    }
    async execute() {
        let e = ri.get(this.auth._key());
        if (!e) {
            try {
                const t = await async function (e, t) {
                    const n = function (e) {
                            return Ut("pendingRedirect", e.config.apiKey, e.name)
                        }(t),
                        i = "true" === await oi(e)._get(n);
                    return await oi(e)._remove(n), i
                }(this.resolver, this.auth) ? await super.execute() : null;
                e = () => Promise.resolve(t)
            } catch (t) {
                e = () => Promise.reject(t)
            }
            ri.set(this.auth._key(), e)
        }
        return e()
    }
    async onAuthEvent(e) {
        if ("signInViaRedirect" === e.type) return super.onAuthEvent(e);
        if ("unknown" !== e.type) {
            if (e.eventId) {
                const t = await this.auth._redirectUserForId(e.eventId);
                if (t) return this.user = t, super.onAuthEvent(e);
                this.resolve(null)
            }
        } else this.resolve(null)
    }
    async onExecution() {}
    cleanUp() {}
}

function oi(e) {
    return ut(e._redirectPersistence)
}
async function ai(e, t, n = !1) {
    const i = Xt(e),
        r = Yn(i, t),
        s = new si(i, r, n),
        o = await s.execute();
    return o && !n && (delete o.user._redirectEventId, await i._persistUserIfCurrent(o.user), await i._setRedirectUser(null, t)), o
}

function ci(e, t, n, i, r, s) {
    at(e.config.authDomain, e, "auth-domain-config-required"), at(e.config.apiKey, e, "invalid-api-key");
    const o = {
        apiKey: e.config.apiKey,
        appName: e.name,
        authType: n,
        redirectUrl: i,
        v: "9.0.0-beta.7",
        eventId: r
    };
    if (t instanceof nn) {
        t.setDefaultLanguage(e.languageCode), o.providerId = t.providerId || "",
            function (e) {
                for (var t in e)
                    if (Object.prototype.hasOwnProperty.call(e, t)) return !1;
                return !0
            }(t.getCustomParameters()) || (o.customParameters = JSON.stringify(t.getCustomParameters()));
        for (const [e, t] of Object.entries(s || {})) o[e] = t
    }
    if (t instanceof rn) {
        const e = t.getScopes().filter((e => "" !== e));
        e.length > 0 && (o.scopes = e.join(","))
    }
    e.tenantId && (o.tid = e.tenantId);
    const a = o;
    for (const e of Object.keys(a)) void 0 === a[e] && delete a[e];
    return `${function({config:e}){if(!e.emulator)return`
    https: //${e.authDomain}/__/auth/handler`;return mt(e,"emulator/auth/handler")}(e)}?${Ae(a).slice(1)}`}const hi=class{constructor(){this.eventManagers={},this.iframes={},this.originValidationPromises={},this._redirectPersistence=Wn,this._completeRedirectFn=ai}async _openPopup(e,t,n,i){var r;ht(null===(r=this.eventManagers[e._key()])||void 0===r?void 0:r.manager,"_initialize() not called before _openPopup()");return Xn(e,ci(e,t,n,dt(),i),vn())}async _openRedirect(e,t,n,i){var r;return await this._originValidation(e),r=ci(e,t,n,dt(),i),bn().location.href=r,new Promise((()=>{}))}_initialize(e){const t=e._key();if(this.eventManagers[t]){const{manager:e,promise:n}=this.eventManagers[t];return e?Promise.resolve(e):(ht(n,"If manager is not set, promise should be"),n)}const n=this.initAndGetManager(e);return this.eventManagers[t]={promise:n},n}async initAndGetManager(e){const t=await Kn(e),n=new Rn(e);return t.register("authEvent",(t=>{at(null==t?void 0:t.authEvent,e,"invalid-auth-event");return{status:n.onEvent(t.authEvent)?"ACK":"ERROR"}}),gapi.iframes.CROSS_ORIGIN_IFRAMES_FILTER),this.eventManagers[e._key()]={manager:n},this.iframes[e._key()]=t,n}_isIframeWebStorageSupported(e,t){this.iframes[e._key()].send("webStorageSupport",{type:"webStorageSupport"},(n=>{var i;const r=null===(i=null==n?void 0:n[0])||void 0===i?void 0:i.webStorageSupport;void 0!==r&&t(!!r),rt(e,"internal-error")}),gapi.iframes.CROSS_ORIGIN_IFRAMES_FILTER)}_originValidation(e){const t=e._key();return this.originValidationPromises[t]||(this.originValidationPromises[t]=Pn(e)),this.originValidationPromises[t]}get _shouldInitProactively(){return Wt()||qt()||Gt()}};new gt(3e4,6e4);const li=new gt(2e3,1e4);class ui extends ii{constructor(e,t,n,i,r){super(e,t,i,r),this.provider=n,this.authWindow=null,this.pollId=null,ui.currentPopupAction&&ui.currentPopupAction.cancel(),ui.currentPopupAction=this}async executeNotNull(){const e=await this.execute();return at(e,this.auth,"internal-error"),e}async onExecution(){ht(1===this.filter.length,"Popup operations only handle one event");const e=vn();this.authWindow=await this.resolver._openPopup(this.auth,this.provider,this.filter[0],e),this.authWindow.associatedEvent=e,this.resolver._originValidation(this.auth).catch((e=>{this.reject(e)})),this.resolver._isIframeWebStorageSupported(this.auth,(e=>{e||this.reject(st(this.auth,"web-storage-unsupported"))})),this.pollUserCancellation()}get eventId(){var e;return(null===(e=this.authWindow)||void 0===e?void 0:e.associatedEvent)||null}cancel(){this.reject(st(this.auth,"cancelled-popup-request"))}cleanUp(){this.authWindow&&this.authWindow.close(),this.pollId&&window.clearTimeout(this.pollId),this.authWindow=null,this.pollId=null,ui.currentPopupAction=null}pollUserCancellation(){const e=()=>{var t,n;(null===(n=null===(t=this.authWindow)||void 0===t?void 0:t.window)||void 0===n?void 0:n.closed)?this.pollId=window.setTimeout((()=>{this.pollId=null,this.reject(st(this.auth,"popup-closed-by-user"))}),2e3):this.pollId=window.setTimeout(e,li.get())};e()}}function di(e=Ye()){const t=Qe(e,"auth-exp");return t.isInitialized()?t.getImmediate():function(e,t){const n=Qe(e,"auth-exp");n.isInitialized()&&rt(n.getImmediate(),"already-initialized");return n.initialize({options:t})}(e,{popupRedirectResolver:hi,persistence:[Cn,mn]})}var fi;ui.currentPopupAction=null,fi="Browser",We(new xe("auth-exp",((e,{options:t})=>{const n=e.getProvider("app-exp").getImmediate(),{apiKey:i,authDomain:r}=n.options;return(e=>{at(i&&!i.includes(":"),"invalid-api-key",{appName:e.name}),at(!(null==r?void 0:r.includes(":")),"argument-error",{appName:e.name});const n={apiKey:i,authDomain:r,clientPlatform:fi,apiHost:"identitytoolkit.googleapis.com",tokenApiHost:"securetoken.googleapis.com",apiScheme:"https",sdkClientVersion:Qt(fi)},s=new Jt(e,n);return function(e,t){const n=(null==t?void 0:t.persistence)||[],i=(Array.isArray(n)?n:[n]).map(ut);(null==t?void 0:t.errorMap)&&e._updateErrorMap(t.errorMap),e._initializeWithPersistence(i,null==t?void 0:t.popupRedirectResolver)}(s,t),s})(n)}),"PUBLIC").setInstantiationMode("EXPLICIT").setInstanceCreatedCallback(((e,t,n)=>{e.getProvider("auth-internal").initialize()}))),We(new xe("auth-internal",(e=>(e=>new fn(e))(Xt(e.getProvider("auth-exp").getImmediate()))),"PRIVATE").setInstantiationMode("EXPLICIT")),Ze("@firebase/auth-exp","0.0.900-exp.6ef484a04",function(e){switch(e){case"Node":return"node";case"ReactNative":return"rn";case"Worker":return"webworker";case"Cordova":return"cordova";default:return}}(fi));var pi=function(e,t){return(pi=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n])})(e,t)};function gi(e){var t="function"==typeof Symbol&&Symbol.iterator,n=t&&e[t],i=0;if(n)return n.call(e);if(e&&"number"==typeof e.length)return{next:function(){return e&&i>=e.length&&(e=void 0),{value:e&&e[i++],done:!e}}};throw new TypeError(t?"Object is not iterable.":"Symbol.iterator is not defined.")}var mi,yi="undefined"!=typeof globalThis?globalThis:"undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:{},vi=vi||{},wi=yi||self;function bi(){}function _i(e){var t=typeof e;return"array"==(t="object"!=t?t:e?Array.isArray(e)?"array":t:"null")||"object"==t&&"number"==typeof e.length}function Ei(e){var t=typeof e;return"object"==t&&null!=e||"function"==t}var Ti="closure_uid_"+(1e9*Math.random()>>>0),Si=0;function Ii(e,t,n){return e.call.apply(e.bind,arguments)}function ki(e,t,n){if(!e)throw Error();if(2<arguments.length){var i=Array.prototype.slice.call(arguments,2);return function(){var n=Array.prototype.slice.call(arguments);return Array.prototype.unshift.apply(n,i),e.apply(t,n)}}return function(){return e.apply(t,arguments)}}function Ai(e,t,n){return(Ai=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?Ii:ki).apply(null,arguments)}function Ni(e,t){var n=Array.prototype.slice.call(arguments,1);return function(){var t=n.slice();return t.push.apply(t,arguments),e.apply(this,t)}}function Ci(e,t){function n(){}n.prototype=t.prototype,e.Z=t.prototype,e.prototype=new n,e.prototype.constructor=e,e.Vb=function(e,n,i){for(var r=Array(arguments.length-2),s=2;s<arguments.length;s++)r[s-2]=arguments[s];return t.prototype[n].apply(e,r)}}function Ri(){this.s=this.s,this.o=this.o}var xi={};Ri.prototype.s=!1,Ri.prototype.na=function(){if(!this.s&&(this.s=!0,this.M(),0)){var e=function(e){return Object.prototype.hasOwnProperty.call(e,Ti)&&e[Ti]||(e[Ti]=++Si)}(this);delete xi[e]}},Ri.prototype.M=function(){if(this.o)for(;this.o.length;)this.o.shift()()};var Di=Array.prototype.indexOf?function(e,t){return Array.prototype.indexOf.call(e,t,void 0)}:function(e,t){if("string"==typeof e)return"string"!=typeof t||1!=t.length?-1:e.indexOf(t,0);for(var n=0;n<e.length;n++)if(n in e&&e[n]===t)return n;return-1},Li=Array.prototype.forEach?function(e,t,n){Array.prototype.forEach.call(e,t,n)}:function(e,t,n){for(var i=e.length,r="string"==typeof e?e.split(""):e,s=0;s<i;s++)s in r&&t.call(n,r[s],s,e)};function Oi(e){return Array.prototype.concat.apply([],arguments)}function Pi(e){var t=e.length;if(0<t){for(var n=Array(t),i=0;i<t;i++)n[i]=e[i];return n}return[]}function Mi(e){return/^[\s\xa0]*$/.test(e)}var Ui,Vi=String.prototype.trim?function(e){return e.trim()}:function(e){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(e)[1]};function Fi(e,t){return-1!=e.indexOf(t)}function ji(e,t){return e<t?-1:e>t?1:0}e:{var qi=wi.navigator;if(qi){var Bi=qi.userAgent;if(Bi){Ui=Bi;break e}}Ui=""}function $i(e,t,n){for(var i in e)t.call(n,e[i],i,e)}function Hi(e){var t={};for(var n in e)t[n]=e[n];return t}var zi="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function Ki(e,t){for(var n,i,r=1;r<arguments.length;r++){for(n in i=arguments[r])e[n]=i[n];for(var s=0;s<zi.length;s++)n=zi[s],Object.prototype.hasOwnProperty.call(i,n)&&(e[n]=i[n])}}function Gi(e){return Gi[" "](e),e}Gi[" "]=bi;var Wi,Qi=Fi(Ui,"Opera"),Ji=Fi(Ui,"Trident")||Fi(Ui,"MSIE"),Xi=Fi(Ui,"Edge"),Yi=Xi||Ji,Zi=Fi(Ui,"Gecko")&&!(Fi(Ui.toLowerCase(),"webkit")&&!Fi(Ui,"Edge"))&&!(Fi(Ui,"Trident")||Fi(Ui,"MSIE"))&&!Fi(Ui,"Edge"),er=Fi(Ui.toLowerCase(),"webkit")&&!Fi(Ui,"Edge");function tr(){var e=wi.document;return e?e.documentMode:void 0}e:{var nr="",ir=function(){var e=Ui;return Zi?/rv:([^\);]+)(\)|;)/.exec(e):Xi?/Edge\/([\d\.]+)/.exec(e):Ji?/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(e):er?/WebKit\/(\S+)/.exec(e):Qi?/(?:Version)[ \/]?(\S+)/.exec(e):void 0}();if(ir&&(nr=ir?ir[1]:""),Ji){var rr=tr();if(null!=rr&&rr>parseFloat(nr)){Wi=String(rr);break e}}Wi=nr}var sr,or={};function ar(){return function(e){var t=or;return Object.prototype.hasOwnProperty.call(t,9)?t[9]:t[9]=e(9)}((function(){for(var e=0,t=Vi(String(Wi)).split("."),n=Vi("9").split("."),i=Math.max(t.length,n.length),r=0;0==e&&r<i;r++){var s=t[r]||"",o=n[r]||"";do{if(s=/(\d*)(\D*)(.*)/.exec(s)||["","","",""],o=/(\d*)(\D*)(.*)/.exec(o)||["","","",""],0==s[0].length&&0==o[0].length)break;e=ji(0==s[1].length?0:parseInt(s[1],10),0==o[1].length?0:parseInt(o[1],10))||ji(0==s[2].length,0==o[2].length)||ji(s[2],o[2]),s=s[3],o=o[3]}while(0==e)}return 0<=e}))}if(wi.document&&Ji){var cr=tr();sr=cr||(parseInt(Wi,10)||void 0)}else sr=void 0;var hr=sr,lr=function(){if(!wi.addEventListener||!Object.defineProperty)return!1;var e=!1,t=Object.defineProperty({},"passive",{get:function(){e=!0}});try{wi.addEventListener("test",bi,t),wi.removeEventListener("test",bi,t)}catch(e){}return e}();function ur(e,t){this.type=e,this.g=this.target=t,this.defaultPrevented=!1}function dr(e,t){if(ur.call(this,e?e.type:""),this.relatedTarget=this.g=this.target=null,this.button=this.screenY=this.screenX=this.clientY=this.clientX=0,this.key="",this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1,this.state=null,this.pointerId=0,this.pointerType="",this.i=null,e){var n=this.type=e.type,i=e.changedTouches&&e.changedTouches.length?e.changedTouches[0]:null;if(this.target=e.target||e.srcElement,this.g=t,t=e.relatedTarget){if(Zi){e:{try{Gi(t.nodeName);var r=!0;break e}catch(e){}r=!1}r||(t=null)}}else"mouseover"==n?t=e.fromElement:"mouseout"==n&&(t=e.toElement);this.relatedTarget=t,i?(this.clientX=void 0!==i.clientX?i.clientX:i.pageX,this.clientY=void 0!==i.clientY?i.clientY:i.pageY,this.screenX=i.screenX||0,this.screenY=i.screenY||0):(this.clientX=void 0!==e.clientX?e.clientX:e.pageX,this.clientY=void 0!==e.clientY?e.clientY:e.pageY,this.screenX=e.screenX||0,this.screenY=e.screenY||0),this.button=e.button,this.key=e.key||"",this.ctrlKey=e.ctrlKey,this.altKey=e.altKey,this.shiftKey=e.shiftKey,this.metaKey=e.metaKey,this.pointerId=e.pointerId||0,this.pointerType="string"==typeof e.pointerType?e.pointerType:fr[e.pointerType]||"",this.state=e.state,this.i=e,e.defaultPrevented&&dr.Z.h.call(this)}}ur.prototype.h=function(){this.defaultPrevented=!0},Ci(dr,ur);var fr={2:"touch",3:"pen",4:"mouse"};dr.prototype.h=function(){dr.Z.h.call(this);var e=this.i;e.preventDefault?e.preventDefault():e.returnValue=!1};var pr="closure_listenable_"+(1e6*Math.random()|0),gr=0;function mr(e,t,n,i,r){this.listener=e,this.proxy=null,this.src=t,this.type=n,this.capture=!!i,this.ia=r,this.key=++gr,this.ca=this.fa=!1}function yr(e){e.ca=!0,e.listener=null,e.proxy=null,e.src=null,e.ia=null}function vr(e){this.src=e,this.g={},this.h=0}function wr(e,t){var n=t.type;if(n in e.g){var i,r=e.g[n],s=Di(r,t);(i=0<=s)&&Array.prototype.splice.call(r,s,1),i&&(yr(t),0==e.g[n].length&&(delete e.g[n],e.h--))}}function br(e,t,n,i){for(var r=0;r<e.length;++r){var s=e[r];if(!s.ca&&s.listener==t&&s.capture==!!n&&s.ia==i)return r}return-1}vr.prototype.add=function(e,t,n,i,r){var s=e.toString();(e=this.g[s])||(e=this.g[s]=[],this.h++);var o=br(e,t,i,r);return-1<o?(t=e[o],n||(t.fa=!1)):((t=new mr(t,this.src,s,!!i,r)).fa=n,e.push(t)),t};var _r="closure_lm_"+(1e6*Math.random()|0),Er={};function Tr(e,t,n,i,r){if(i&&i.once)return Ir(e,t,n,i,r);if(Array.isArray(t)){for(var s=0;s<t.length;s++)Tr(e,t[s],n,i,r);return null}return n=Dr(n),e&&e[pr]?e.N(t,n,Ei(i)?!!i.capture:!!i,r):Sr(e,t,n,!1,i,r)}function Sr(e,t,n,i,r,s){if(!t)throw Error("Invalid event type");var o=Ei(r)?!!r.capture:!!r,a=Rr(e);if(a||(e[_r]=a=new vr(e)),(n=a.add(t,n,i,o,s)).proxy)return n;if(i=function(){function e(n){return t.call(e.src,e.listener,n)}var t=Cr;return e}(),n.proxy=i,i.src=e,i.listener=n,e.addEventListener)lr||(r=o),void 0===r&&(r=!1),e.addEventListener(t.toString(),i,r);else if(e.attachEvent)e.attachEvent(Nr(t.toString()),i);else{if(!e.addListener||!e.removeListener)throw Error("addEventListener and attachEvent are unavailable.");e.addListener(i)}return n}function Ir(e,t,n,i,r){if(Array.isArray(t)){for(var s=0;s<t.length;s++)Ir(e,t[s],n,i,r);return null}return n=Dr(n),e&&e[pr]?e.O(t,n,Ei(i)?!!i.capture:!!i,r):Sr(e,t,n,!0,i,r)}function kr(e,t,n,i,r){if(Array.isArray(t))for(var s=0;s<t.length;s++)kr(e,t[s],n,i,r);else i=Ei(i)?!!i.capture:!!i,n=Dr(n),e&&e[pr]?(e=e.i,(t=String(t).toString())in e.g&&(-1<(n=br(s=e.g[t],n,i,r))&&(yr(s[n]),Array.prototype.splice.call(s,n,1),0==s.length&&(delete e.g[t],e.h--)))):e&&(e=Rr(e))&&(t=e.g[t.toString()],e=-1,t&&(e=br(t,n,i,r)),(n=-1<e?t[e]:null)&&Ar(n))}function Ar(e){if("number"!=typeof e&&e&&!e.ca){var t=e.src;if(t&&t[pr])wr(t.i,e);else{var n=e.type,i=e.proxy;t.removeEventListener?t.removeEventListener(n,i,e.capture):t.detachEvent?t.detachEvent(Nr(n),i):t.addListener&&t.removeListener&&t.removeListener(i),(n=Rr(t))?(wr(n,e),0==n.h&&(n.src=null,t[_r]=null)):yr(e)}}}function Nr(e){return e in Er?Er[e]:Er[e]="on"+e}function Cr(e,t){if(e.ca)e=!0;else{t=new dr(t,this);var n=e.listener,i=e.ia||e.src;e.fa&&Ar(e),e=n.call(i,t)}return e}function Rr(e){return(e=e[_r])instanceof vr?e:null}var xr="__closure_events_fn_"+(1e9*Math.random()>>>0);function Dr(e){return"function"==typeof e?e:(e[xr]||(e[xr]=function(t){return e.handleEvent(t)}),e[xr])}function Lr(){Ri.call(this),this.i=new vr(this),this.P=this,this.I=null}function Or(e,t){var n,i=e.I;if(i)for(n=[];i;i=i.I)n.push(i);if(e=e.P,i=t.type||t,"string"==typeof t)t=new ur(t,e);else if(t instanceof ur)t.target=t.target||e;else{var r=t;Ki(t=new ur(i,e),r)}if(r=!0,n)for(var s=n.length-1;0<=s;s--){var o=t.g=n[s];r=Pr(o,i,!0,t)&&r}if(r=Pr(o=t.g=e,i,!0,t)&&r,r=Pr(o,i,!1,t)&&r,n)for(s=0;s<n.length;s++)r=Pr(o=t.g=n[s],i,!1,t)&&r}function Pr(e,t,n,i){if(!(t=e.i.g[String(t)]))return!0;t=t.concat();for(var r=!0,s=0;s<t.length;++s){var o=t[s];if(o&&!o.ca&&o.capture==n){var a=o.listener,c=o.ia||o.src;o.fa&&wr(e.i,o),r=!1!==a.call(c,i)&&r}}return r&&!i.defaultPrevented}Ci(Lr,Ri),Lr.prototype[pr]=!0,Lr.prototype.removeEventListener=function(e,t,n,i){kr(this,e,t,n,i)},Lr.prototype.M=function(){if(Lr.Z.M.call(this),this.i){var e,t=this.i;for(e in t.g){for(var n=t.g[e],i=0;i<n.length;i++)yr(n[i]);delete t.g[e],t.h--}}this.I=null},Lr.prototype.N=function(e,t,n,i){return this.i.add(String(e),t,!1,n,i)},Lr.prototype.O=function(e,t,n,i){return this.i.add(String(e),t,!0,n,i)};var Mr=wi.JSON.stringify;function Ur(){var e=zr,t=null;return e.g&&(t=e.g,e.g=e.g.next,e.g||(e.h=null),t.next=null),t}var Vr,Fr=function(){function e(){this.h=this.g=null}return e.prototype.add=function(e,t){var n=jr.get();n.set(e,t),this.h?this.h.next=n:this.g=n,this.h=n},e}(),jr=new(function(){function e(e,t){this.i=e,this.j=t,this.h=0,this.g=null}return e.prototype.get=function(){var e;return 0<this.h?(this.h--,e=this.g,this.g=e.next,e.next=null):e=this.i(),e},e}())((function(){return new qr}),(function(e){return e.reset()})),qr=function(){function e(){this.next=this.g=this.h=null}return e.prototype.set=function(e,t){this.h=e,this.g=t,this.next=null},e.prototype.reset=function(){this.next=this.g=this.h=null},e}();function Br(e){wi.setTimeout((function(){throw e}),0)}function $r(e,t){Vr||function(){var e=wi.Promise.resolve(void 0);Vr=function(){e.then(Kr)}}(),Hr||(Vr(),Hr=!0),zr.add(e,t)}var Hr=!1,zr=new Fr;function Kr(){for(var e;e=Ur();){try{e.h.call(e.g)}catch(e){Br(e)}var t=jr;t.j(e),100>t.h&&(t.h++,e.next=t.g,t.g=e)}Hr=!1}function Gr(e,t){Lr.call(this),this.h=e||1,this.g=t||wi,this.j=Ai(this.kb,this),this.l=Date.now()}function Wr(e){e.da=!1,e.S&&(e.g.clearTimeout(e.S),e.S=null)}function Qr(e,t,n){if("function"==typeof e)n&&(e=Ai(e,n));else{if(!e||"function"!=typeof e.handleEvent)throw Error("Invalid listener argument");e=Ai(e.handleEvent,e)}return 2147483647<Number(t)?-1:wi.setTimeout(e,t||0)}function Jr(e){e.g=Qr((function(){e.g=null,e.i&&(e.i=!1,Jr(e))}),e.j);var t=e.h;e.h=null,e.m.apply(null,t)}Ci(Gr,Lr),(mi=Gr.prototype).da=!1,mi.S=null,mi.kb=function(){if(this.da){var e=Date.now()-this.l;0<e&&e<.8*this.h?this.S=this.g.setTimeout(this.j,this.h-e):(this.S&&(this.g.clearTimeout(this.S),this.S=null),Or(this,"tick"),this.da&&(Wr(this),this.start()))}},mi.start=function(){this.da=!0,this.S||(this.S=this.g.setTimeout(this.j,this.h),this.l=Date.now())},mi.M=function(){Gr.Z.M.call(this),Wr(this),delete this.g};var Xr=function(e){function t(t,n){var i=e.call(this)||this;return i.m=t,i.j=n,i.h=null,i.i=!1,i.g=null,i}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Class extends value "+String(t)+" is not a constructor or null");function n(){this.constructor=e}pi(e,t),e.prototype=null===t?Object.create(t):(n.prototype=t.prototype,new n)}(t,e),t.prototype.l=function(e){this.h=arguments,this.g?this.i=!0:Jr(this)},t.prototype.M=function(){e.prototype.M.call(this),this.g&&(wi.clearTimeout(this.g),this.g=null,this.i=!1,this.h=null)},t}(Ri);function Yr(e){Ri.call(this),this.h=e,this.g={}}Ci(Yr,Ri);var Zr=[];function es(e,t,n,i){Array.isArray(n)||(n&&(Zr[0]=n.toString()),n=Zr);for(var r=0;r<n.length;r++){var s=Tr(t,n[r],i||e.handleEvent,!1,e.h||e);if(!s)break;e.g[s.key]=s}}function ts(e){$i(e.g,(function(e,t){this.g.hasOwnProperty(t)&&Ar(e)}),e),e.g={}}function ns(){this.g=!0}function is(e,t,n,i){e.info((function(){return"XMLHTTP TEXT ("+t+"): "+function(e,t){if(!e.g)return t;if(!t)return null;try{var n=JSON.parse(t);if(n)for(e=0;e<n.length;e++)if(Array.isArray(n[e])){var i=n[e];if(!(2>i.length)){var r=i[1];if(Array.isArray(r)&&!(1>r.length)){var s=r[0];if("noop"!=s&&"stop"!=s&&"close"!=s)for(var o=1;o<r.length;o++)r[o]=""}}}return Mr(n)}catch(e){return t}}(e,n)+(i?" "+i:"")}))}Yr.prototype.M=function(){Yr.Z.M.call(this),ts(this)},Yr.prototype.handleEvent=function(){throw Error("EventHandler.handleEvent not implemented")},ns.prototype.Aa=function(){this.g=!1},ns.prototype.info=function(){};var rs={},ss=null;function os(){return ss=ss||new Lr}function as(e){ur.call(this,rs.Ma,e)}function cs(e){var t=os();Or(t,new as(t,e))}function hs(e,t){ur.call(this,rs.STAT_EVENT,e),this.stat=t}function ls(e){var t=os();Or(t,new hs(t,e))}function us(e,t){ur.call(this,rs.Na,e),this.size=t}function ds(e,t){if("function"!=typeof e)throw Error("Fn must not be null and must be a function");return wi.setTimeout((function(){e()}),t)}rs.Ma="serverreachability",Ci(as,ur),rs.STAT_EVENT="statevent",Ci(hs,ur),rs.Na="timingevent",Ci(us,ur);var fs={NO_ERROR:0,lb:1,yb:2,xb:3,sb:4,wb:5,zb:6,Ja:7,TIMEOUT:8,Cb:9},ps={qb:"complete",Mb:"success",Ka:"error",Ja:"abort",Eb:"ready",Fb:"readystatechange",TIMEOUT:"timeout",Ab:"incrementaldata",Db:"progress",tb:"downloadprogress",Ub:"uploadprogress"};function gs(){}function ms(e){return e.h||(e.h=e.i())}function ys(){}gs.prototype.h=null;var vs,ws={OPEN:"a",pb:"b",Ka:"c",Bb:"d"};function bs(){ur.call(this,"d")}function _s(){ur.call(this,"c")}function Es(){}function Ts(e,t,n,i){this.l=e,this.j=t,this.m=n,this.X=i||1,this.V=new Yr(this),this.P=Is,e=Yi?125:void 0,this.W=new Gr(e),this.H=null,this.i=!1,this.s=this.A=this.v=this.K=this.F=this.Y=this.B=null,this.D=[],this.g=null,this.C=0,this.o=this.u=null,this.N=-1,this.I=!1,this.O=0,this.L=null,this.aa=this.J=this.$=this.U=!1,this.h=new Ss}function Ss(){this.i=null,this.g="",this.h=!1}Ci(bs,ur),Ci(_s,ur),Ci(Es,gs),Es.prototype.g=function(){return new XMLHttpRequest},Es.prototype.i=function(){return{}},vs=new Es;var Is=45e3,ks={},As={};function Ns(e,t,n){e.K=1,e.v=Xs(zs(t)),e.s=n,e.U=!0,Cs(e,null)}function Cs(e,t){e.F=Date.now(),Ls(e),e.A=zs(e.v);var n=e.A,i=e.X;Array.isArray(i)||(i=[String(i)]),lo(n.h,"t",i),e.C=0,n=e.l.H,e.h=new Ss,e.g=da(e.l,n?t:null,!e.s),0<e.O&&(e.L=new Xr(Ai(e.Ia,e,e.g),e.O)),es(e.V,e.g,"readystatechange",e.gb),t=e.H?Hi(e.H):{},e.s?(e.u||(e.u="POST"),t["Content-Type"]="application/x-www-form-urlencoded",e.g.ea(e.A,e.u,e.s,t)):(e.u="GET",e.g.ea(e.A,e.u,null,t)),cs(1),function(e,t,n,i,r,s){e.info((function(){if(e.g)if(s)for(var o="",a=s.split("&"),c=0;c<a.length;c++){var h=a[c].split("=");if(1<h.length){var l=h[0];h=h[1];var u=l.split("_");o=2<=u.length&&"type"==u[1]?o+(l+"=")+h+"&":o+(l+"=redacted&")}}else o=null;else o=s;return"XMLHTTP REQ ("+i+") [attempt "+r+"]: "+t+"\n"+n+"\n"+o}))}(e.j,e.u,e.A,e.m,e.X,e.s)}function Rs(e){return!!e.g&&("GET"==e.u&&2!=e.K&&e.l.Ba)}function xs(e,t,n){for(var i,r=!0;!e.I&&e.C<n.length;){if((i=Ds(e,n))==As){4==t&&(e.o=4,ls(14),r=!1),is(e.j,e.m,null,"[Incomplete Response]");break}if(i==ks){e.o=4,ls(15),is(e.j,e.m,n,"[Invalid Chunk]"),r=!1;break}is(e.j,e.m,i,null),Vs(e,i)}Rs(e)&&i!=As&&i!=ks&&(e.h.g="",e.C=0),4!=t||0!=n.length||e.h.h||(e.o=1,ls(16),r=!1),e.i=e.i&&r,r?0<n.length&&!e.aa&&(e.aa=!0,(t=e.l).g==e&&t.$&&!t.L&&(t.h.info("Great, no buffering proxy detected. Bytes received: "+n.length),ra(t),t.L=!0,ls(11))):(is(e.j,e.m,n,"[Invalid Chunked Response]"),Us(e),Ms(e))}function Ds(e,t){var n=e.C,i=t.indexOf("\n",n);return-1==i?As:(n=Number(t.substring(n,i)),isNaN(n)?ks:(i+=1)+n>t.length?As:(t=t.substr(i,n),e.C=i+n,t))}function Ls(e){e.Y=Date.now()+e.P,Os(e,e.P)}function Os(e,t){if(null!=e.B)throw Error("WatchDog timer not null");e.B=ds(Ai(e.eb,e),t)}function Ps(e){e.B&&(wi.clearTimeout(e.B),e.B=null)}function Ms(e){0==e.l.G||e.I||aa(e.l,e)}function Us(e){Ps(e);var t=e.L;t&&"function"==typeof t.na&&t.na(),e.L=null,Wr(e.W),ts(e.V),e.g&&(t=e.g,e.g=null,t.abort(),t.na())}function Vs(e,t){try{var n=e.l;if(0!=n.G&&(n.g==e||vo(n.i,e)))if(n.I=e.N,!e.J&&vo(n.i,e)&&3==n.G){try{var i=n.Ca.g.parse(t)}catch(s){i=null}if(Array.isArray(i)&&3==i.length){var r=i;if(0==r[0]){e:if(!n.u){if(n.g){if(!(n.g.F+3e3<e.F))break e;oa(n),Qo(n)}ia(n),ls(18)}}else n.ta=r[1],0<n.ta-n.U&&37500>r[2]&&n.N&&0==n.A&&!n.v&&(n.v=ds(Ai(n.ab,n),6e3));if(1>=yo(n.i)&&n.ka){try{n.ka()}catch(s){}n.ka=void 0}}else ha(n,11)}else if((e.J||n.g==e)&&oa(n),!Mi(t))for(r=n.Ca.g.parse(t),t=0;t<r.length;t++){var s=r[t];if(n.U=s[0],s=s[1],2==n.G)if("c"==s[0]){n.J=s[1],n.la=s[2];var o=s[3];null!=o&&(n.ma=o,n.h.info("VER="+n.ma));var a=s[4];null!=a&&(n.za=a,n.h.info("SVER="+n.za));var c=s[5];null!=c&&"number"==typeof c&&0<c&&(i=1.5*c,n.K=i,n.h.info("backChannelRequestTimeoutMs_="+i)),i=n;var h=e.g;if(h){var l=h.g?h.g.getResponseHeader("X-Client-Wire-Protocol"):null;if(l){var u=i.i;!u.g&&(Fi(l,"spdy")||Fi(l,"quic")||Fi(l,"h2"))&&(u.j=u.l,u.g=new Set,u.h&&(wo(u,u.h),u.h=null))}if(i.D){var d=h.g?h.g.getResponseHeader("X-HTTP-Session-Id"):null;d&&(i.sa=d,Js(i.F,i.D,d))}}n.G=3,n.j&&n.j.xa(),n.$&&(n.O=Date.now()-e.F,n.h.info("Handshake RTT: "+n.O+"ms"));var f=e;if((i=n).oa=ua(i,i.H?i.la:null,i.W),f.J){bo(i.i,f);var p=f,g=i.K;g&&p.setTimeout(g),p.B&&(Ps(p),Ls(p)),i.g=f}else na(i);0<n.l.length&&Yo(n)}else"stop"!=s[0]&&"close"!=s[0]||ha(n,7);else 3==n.G&&("stop"==s[0]||"close"==s[0]?"stop"==s[0]?ha(n,7):Wo(n):"noop"!=s[0]&&n.j&&n.j.wa(s),n.A=0)}cs(4)}catch(s){}}function Fs(e,t){if(e.forEach&&"function"==typeof e.forEach)e.forEach(t,void 0);else if(_i(e)||"string"==typeof e)Li(e,t,void 0);else{if(e.T&&"function"==typeof e.T)var n=e.T();else if(e.R&&"function"==typeof e.R)n=void 0;else if(_i(e)||"string"==typeof e){n=[];for(var i=e.length,r=0;r<i;r++)n.push(r)}else for(r in n=[],i=0,e)n[i++]=r;r=(i=function(e){if(e.R&&"function"==typeof e.R)return e.R();if("string"==typeof e)return e.split("");if(_i(e)){for(var t=[],n=e.length,i=0;i<n;i++)t.push(e[i]);return t}for(i in t=[],n=0,e)t[n++]=e[i];return t}(e)).length;for(var s=0;s<r;s++)t.call(void 0,i[s],n&&n[s],e)}}function js(e,t){this.h={},this.g=[],this.i=0;var n=arguments.length;if(1<n){if(n%2)throw Error("Uneven number of arguments");for(var i=0;i<n;i+=2)this.set(arguments[i],arguments[i+1])}else if(e)if(e instanceof js)for(n=e.T(),i=0;i<n.length;i++)this.set(n[i],e.get(n[i]));else for(i in e)this.set(i,e[i])}function qs(e){if(e.i!=e.g.length){for(var t=0,n=0;t<e.g.length;){var i=e.g[t];Bs(e.h,i)&&(e.g[n++]=i),t++}e.g.length=n}if(e.i!=e.g.length){var r={};for(n=t=0;t<e.g.length;)Bs(r,i=e.g[t])||(e.g[n++]=i,r[i]=1),t++;e.g.length=n}}function Bs(e,t){return Object.prototype.hasOwnProperty.call(e,t)}(mi=Ts.prototype).setTimeout=function(e){this.P=e},mi.gb=function(e){e=e.target;var t=this.L;t&&3==$o(e)?t.l():this.Ia(e)},mi.Ia=function(e){try{if(e==this.g)e:{var t=$o(this.g),n=this.g.Da(),i=this.g.ba();if(!(3>t)&&(3!=t||Yi||this.g&&(this.h.h||this.g.ga()||Ho(this.g)))){this.I||4!=t||7==n||cs(8==n||0>=i?3:2),Ps(this);var r=this.g.ba();this.N=r;t:if(Rs(this)){var s=Ho(this.g);e="";var o=s.length,a=4==$o(this.g);if(!this.h.i){if("undefined"==typeof TextDecoder){Us(this),Ms(this);var c="";break t}this.h.i=new wi.TextDecoder}for(n=0;n<o;n++)this.h.h=!0,e+=this.h.i.decode(s[n],{stream:a&&n==o-1});s.splice(0,o),this.h.g+=e,this.C=0,c=this.h.g}else c=this.g.ga();if(this.i=200==r,function(e,t,n,i,r,s,o){e.info((function(){return"XMLHTTP RESP ("+i+") [ attempt "+r+"]: "+t+"\n"+n+"\n"+s+" "+o}))}(this.j,this.u,this.A,this.m,this.X,t,r),this.i){if(this.$&&!this.J){t:{if(this.g){var h,l=this.g;if((h=l.g?l.g.getResponseHeader("X-HTTP-Initial-Response"):null)&&!Mi(h)){var u=h;break t}}u=null}if(!(r=u)){this.i=!1,this.o=3,ls(12),Us(this),Ms(this);break e}is(this.j,this.m,r,"Initial handshake response via X-HTTP-Initial-Response"),this.J=!0,Vs(this,r)}this.U?(xs(this,t,c),Yi&&this.i&&3==t&&(es(this.V,this.W,"tick",this.fb),this.W.start())):(is(this.j,this.m,c,null),Vs(this,c)),4==t&&Us(this),this.i&&!this.I&&(4==t?aa(this.l,this):(this.i=!1,Ls(this)))}else 400==r&&0<c.indexOf("Unknown SID")?(this.o=3,ls(12)):(this.o=0,ls(13)),Us(this),Ms(this)}}}catch(t){}},mi.fb=function(){if(this.g){var e=$o(this.g),t=this.g.ga();this.C<t.length&&(Ps(this),xs(this,e,t),this.i&&4!=e&&Ls(this))}},mi.cancel=function(){this.I=!0,Us(this)},mi.eb=function(){this.B=null;var e=Date.now();0<=e-this.Y?(function(e,t){e.info((function(){return"TIMEOUT: "+t}))}(this.j,this.A),2!=this.K&&(cs(3),ls(17)),Us(this),this.o=2,Ms(this)):Os(this,this.Y-e)},(mi=js.prototype).R=function(){qs(this);for(var e=[],t=0;t<this.g.length;t++)e.push(this.h[this.g[t]]);return e},mi.T=function(){return qs(this),this.g.concat()},mi.get=function(e,t){return Bs(this.h,e)?this.h[e]:t},mi.set=function(e,t){Bs(this.h,e)||(this.i++,this.g.push(e)),this.h[e]=t},mi.forEach=function(e,t){for(var n=this.T(),i=0;i<n.length;i++){var r=n[i],s=this.get(r);e.call(t,s,r,this)}};var $s=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^\\/?#]*)@)?([^\\/?#]*?)(?::([0-9]+))?(?=[\\/?#]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;function Hs(e,t){if(this.i=this.s=this.j="",this.m=null,this.o=this.l="",this.g=!1,e instanceof Hs){this.g=void 0!==t?t:e.g,Ks(this,e.j),this.s=e.s,Gs(this,e.i),Ws(this,e.m),this.l=e.l,t=e.h;var n=new oo;n.i=t.i,t.g&&(n.g=new js(t.g),n.h=t.h),Qs(this,n),this.o=e.o}else e&&(n=String(e).match($s))?(this.g=!!t,Ks(this,n[1]||"",!0),this.s=Ys(n[2]||""),Gs(this,n[3]||"",!0),Ws(this,n[4]),this.l=Ys(n[5]||"",!0),Qs(this,n[6]||"",!0),this.o=Ys(n[7]||"")):(this.g=!!t,this.h=new oo(null,this.g))}function zs(e){return new Hs(e)}function Ks(e,t,n){e.j=n?Ys(t,!0):t,e.j&&(e.j=e.j.replace(/:$/,""))}function Gs(e,t,n){e.i=n?Ys(t,!0):t}function Ws(e,t){if(t){if(t=Number(t),isNaN(t)||0>t)throw Error("Bad port number "+t);e.m=t}else e.m=null}function Qs(e,t,n){t instanceof oo?(e.h=t,function(e,t){t&&!e.j&&(ao(e),e.i=null,e.g.forEach((function(e,t){var n=t.toLowerCase();t!=n&&(co(this,t),lo(this,n,e))}),e)),e.j=t}(e.h,e.g)):(n||(t=Zs(t,ro)),e.h=new oo(t,e.g))}function Js(e,t,n){e.h.set(t,n)}function Xs(e){return Js(e,"zx",Math.floor(2147483648*Math.random()).toString(36)+Math.abs(Math.floor(2147483648*Math.random())^Date.now()).toString(36)),e}function Ys(e,t){return e?t?decodeURI(e.replace(/%25/g,"%2525")):decodeURIComponent(e):""}function Zs(e,t,n){return"string"==typeof e?(e=encodeURI(e).replace(t,eo),n&&(e=e.replace(/%25([0-9a-fA-F]{2})/g,"%$1")),e):null}function eo(e){return"%"+((e=e.charCodeAt(0))>>4&15).toString(16)+(15&e).toString(16)}Hs.prototype.toString=function(){var e=[],t=this.j;t&&e.push(Zs(t,to,!0),":");var n=this.i;return(n||"file"==t)&&(e.push("//"),(t=this.s)&&e.push(Zs(t,to,!0),"@"),e.push(encodeURIComponent(String(n)).replace(/%25([0-9a-fA-F]{2})/g,"%$1")),null!=(n=this.m)&&e.push(":",String(n))),(n=this.l)&&(this.i&&"/"!=n.charAt(0)&&e.push("/"),e.push(Zs(n,"/"==n.charAt(0)?io:no,!0))),(n=this.h.toString())&&e.push("?",n),(n=this.o)&&e.push("#",Zs(n,so)),e.join("")};var to=/[#\/\?@]/g,no=/[#\?:]/g,io=/[#\?]/g,ro=/[#\?@]/g,so=/#/g;function oo(e,t){this.h=this.g=null,this.i=e||null,this.j=!!t}function ao(e){e.g||(e.g=new js,e.h=0,e.i&&function(e,t){if(e){e=e.split("&");for(var n=0;n<e.length;n++){var i=e[n].indexOf("="),r=null;if(0<=i){var s=e[n].substring(0,i);r=e[n].substring(i+1)}else s=e[n];t(s,r?decodeURIComponent(r.replace(/\+/g," ")):"")}}}(e.i,(function(t,n){e.add(decodeURIComponent(t.replace(/\+/g," ")),n)})))}function co(e,t){ao(e),t=uo(e,t),Bs(e.g.h,t)&&(e.i=null,e.h-=e.g.get(t).length,Bs((e=e.g).h,t)&&(delete e.h[t],e.i--,e.g.length>2*e.i&&qs(e)))}function ho(e,t){return ao(e),t=uo(e,t),Bs(e.g.h,t)}function lo(e,t,n){co(e,t),0<n.length&&(e.i=null,e.g.set(uo(e,t),Pi(n)),e.h+=n.length)}function uo(e,t){return t=String(t),e.j&&(t=t.toLowerCase()),t}(mi=oo.prototype).add=function(e,t){ao(this),this.i=null,e=uo(this,e);var n=this.g.get(e);return n||this.g.set(e,n=[]),n.push(t),this.h+=1,this},mi.forEach=function(e,t){ao(this),this.g.forEach((function(n,i){Li(n,(function(n){e.call(t,n,i,this)}),this)}),this)},mi.T=function(){ao(this);for(var e=this.g.R(),t=this.g.T(),n=[],i=0;i<t.length;i++)for(var r=e[i],s=0;s<r.length;s++)n.push(t[i]);return n},mi.R=function(e){ao(this);var t=[];if("string"==typeof e)ho(this,e)&&(t=Oi(t,this.g.get(uo(this,e))));else{e=this.g.R();for(var n=0;n<e.length;n++)t=Oi(t,e[n])}return t},mi.set=function(e,t){return ao(this),this.i=null,ho(this,e=uo(this,e))&&(this.h-=this.g.get(e).length),this.g.set(e,[t]),this.h+=1,this},mi.get=function(e,t){return e&&0<(e=this.R(e)).length?String(e[0]):t},mi.toString=function(){if(this.i)return this.i;if(!this.g)return"";for(var e=[],t=this.g.T(),n=0;n<t.length;n++){var i=t[n],r=encodeURIComponent(String(i));i=this.R(i);for(var s=0;s<i.length;s++){var o=r;""!==i[s]&&(o+="="+encodeURIComponent(String(i[s]))),e.push(o)}}return this.i=e.join("&")};var fo=function(e,t){this.h=e,this.g=t};function po(e){this.l=e||go,wi.PerformanceNavigationTiming?e=0<(e=wi.performance.getEntriesByType("navigation")).length&&("hq"==e[0].nextHopProtocol||"h2"==e[0].nextHopProtocol):e=!!(wi.g&&wi.g.Ea&&wi.g.Ea()&&wi.g.Ea().Zb),this.j=e?this.l:1,this.g=null,1<this.j&&(this.g=new Set),this.h=null,this.i=[]}var go=10;function mo(e){return!!e.h||!!e.g&&e.g.size>=e.j}function yo(e){return e.h?1:e.g?e.g.size:0}function vo(e,t){return e.h?e.h==t:!!e.g&&e.g.has(t)}function wo(e,t){e.g?e.g.add(t):e.h=t}function bo(e,t){e.h&&e.h==t?e.h=null:e.g&&e.g.has(t)&&e.g.delete(t)}function _o(e){var t,n;if(null!=e.h)return e.i.concat(e.h.D);if(null!=e.g&&0!==e.g.size){var i=e.i;try{for(var r=gi(e.g.values()),s=r.next();!s.done;s=r.next()){var o=s.value;i=i.concat(o.D)}}catch(e){t={error:e}}finally{try{s&&!s.done&&(n=r.return)&&n.call(r)}finally{if(t)throw t.error}}return i}return Pi(e.i)}function Eo(){}function To(){this.g=new Eo}function So(e,t,n){var i=n||"";try{Fs(e,(function(e,n){var r=e;Ei(e)&&(r=Mr(e)),t.push(i+n+"="+encodeURIComponent(r))}))}catch(e){throw t.push(i+"type="+encodeURIComponent("_badmap")),e}}function Io(e,t,n,i,r){try{t.onload=null,t.onerror=null,t.onabort=null,t.ontimeout=null,r(i)}catch(e){}}function ko(e){this.l=e.$b||null,this.j=e.ib||!1}function Ao(e,t){Lr.call(this),this.D=e,this.u=t,this.m=void 0,this.readyState=No,this.status=0,this.responseType=this.responseText=this.response=this.statusText="",this.onreadystatechange=null,this.v=new Headers,this.h=null,this.C="GET",this.B="",this.g=!1,this.A=this.j=this.l=null}po.prototype.cancel=function(){var e,t;if(this.i=_o(this),this.h)this.h.cancel(),this.h=null;else if(this.g&&0!==this.g.size){try{for(var n=gi(this.g.values()),i=n.next();!i.done;i=n.next()){i.value.cancel()}}catch(t){e={error:t}}finally{try{i&&!i.done&&(t=n.return)&&t.call(n)}finally{if(e)throw e.error}}this.g.clear()}},Eo.prototype.stringify=function(e){return wi.JSON.stringify(e,void 0)},Eo.prototype.parse=function(e){return wi.JSON.parse(e,void 0)},Ci(ko,gs),ko.prototype.g=function(){return new Ao(this.l,this.j)},ko.prototype.i=function(e){return function(){return e}}({}),Ci(Ao,Lr);var No=0;function Co(e){e.j.read().then(e.Sa.bind(e)).catch(e.ha.bind(e))}function Ro(e){e.readyState=4,e.l=null,e.j=null,e.A=null,xo(e)}function xo(e){e.onreadystatechange&&e.onreadystatechange.call(e)}(mi=Ao.prototype).open=function(e,t){if(this.readyState!=No)throw this.abort(),Error("Error reopening a connection");this.C=e,this.B=t,this.readyState=1,xo(this)},mi.send=function(e){if(1!=this.readyState)throw this.abort(),Error("need to call open() first. ");this.g=!0;var t={headers:this.v,method:this.C,credentials:this.m,cache:void 0};e&&(t.body=e),(this.D||wi).fetch(new Request(this.B,t)).then(this.Va.bind(this),this.ha.bind(this))},mi.abort=function(){this.response=this.responseText="",this.v=new Headers,this.status=0,this.j&&this.j.cancel("Request was aborted."),1<=this.readyState&&this.g&&4!=this.readyState&&(this.g=!1,Ro(this)),this.readyState=No},mi.Va=function(e){if(this.g&&(this.l=e,this.h||(this.status=this.l.status,this.statusText=this.l.statusText,this.h=e.headers,this.readyState=2,xo(this)),this.g&&(this.readyState=3,xo(this),this.g)))if("arraybuffer"===this.responseType)e.arrayBuffer().then(this.Ta.bind(this),this.ha.bind(this));else if(void 0!==wi.ReadableStream&&"body"in e){if(this.j=e.body.getReader(),this.u){if(this.responseType)throw Error('responseType must be empty for "streamBinaryChunks" mode responses.');this.response=[]}else this.response=this.responseText="",this.A=new TextDecoder;Co(this)}else e.text().then(this.Ua.bind(this),this.ha.bind(this))},mi.Sa=function(e){if(this.g){if(this.u&&e.value)this.response.push(e.value);else if(!this.u){var t=e.value?e.value:new Uint8Array(0);(t=this.A.decode(t,{stream:!e.done}))&&(this.response=this.responseText+=t)}e.done?Ro(this):xo(this),3==this.readyState&&Co(this)}},mi.Ua=function(e){this.g&&(this.response=this.responseText=e,Ro(this))},mi.Ta=function(e){this.g&&(this.response=e,Ro(this))},mi.ha=function(){this.g&&Ro(this)},mi.setRequestHeader=function(e,t){this.v.append(e,t)},mi.getResponseHeader=function(e){return this.h&&this.h.get(e.toLowerCase())||""},mi.getAllResponseHeaders=function(){if(!this.h)return"";for(var e=[],t=this.h.entries(),n=t.next();!n.done;)n=n.value,e.push(n[0]+": "+n[1]),n=t.next();return e.join("\r\n")},Object.defineProperty(Ao.prototype,"withCredentials",{get:function(){return"include"===this.m},set:function(e){this.m=e?"include":"same-origin"}});var Do=wi.JSON.parse;function Lo(e){Lr.call(this),this.headers=new js,this.u=e||null,this.h=!1,this.C=this.g=null,this.H="",this.m=0,this.j="",this.l=this.F=this.v=this.D=!1,this.B=0,this.A=null,this.J=Oo,this.K=this.L=!1}Ci(Lo,Lr);var Oo="",Po=/^https?$/i,Mo=["POST","PUT"];function Uo(e){return"content-type"==e.toLowerCase()}function Vo(e,t){e.h=!1,e.g&&(e.l=!0,e.g.abort(),e.l=!1),e.j=t,e.m=5,Fo(e),qo(e)}function Fo(e){e.D||(e.D=!0,Or(e,"complete"),Or(e,"error"))}function jo(e){if(e.h&&void 0!==vi&&(!e.C[1]||4!=$o(e)||2!=e.ba()))if(e.v&&4==$o(e))Qr(e.Fa,0,e);else if(Or(e,"readystatechange"),4==$o(e)){e.h=!1;try{var t,n=e.ba();e:switch(n){case 200:case 201:case 202:case 204:case 206:case 304:case 1223:var i=!0;break e;default:i=!1}if(!(t=i)){var r;if(r=0===n){var s=String(e.H).match($s)[1]||null;if(!s&&wi.self&&wi.self.location){var o=wi.self.location.protocol;s=o.substr(0,o.length-1)}r=!Po.test(s?s.toLowerCase():"")}t=r}if(t)Or(e,"complete"),Or(e,"success");else{e.m=6;try{var a=2<$o(e)?e.g.statusText:""}catch(e){a=""}e.j=a+" ["+e.ba()+"]",Fo(e)}}finally{qo(e)}}}function qo(e,t){if(e.g){Bo(e);var n=e.g,i=e.C[0]?bi:null;e.g=null,e.C=null,t||Or(e,"ready");try{n.onreadystatechange=i}catch(e){}}}function Bo(e){e.g&&e.K&&(e.g.ontimeout=null),e.A&&(wi.clearTimeout(e.A),e.A=null)}function $o(e){return e.g?e.g.readyState:0}function Ho(e){try{if(!e.g)return null;if("response"in e.g)return e.g.response;switch(e.J){case Oo:case"text":return e.g.responseText;case"arraybuffer":if("mozResponseArrayBuffer"in e.g)return e.g.mozResponseArrayBuffer}return null}catch(e){return null}}function zo(e,t,n){e:{for(i in n){var i=!1;break e}i=!0}i||(n=function(e){var t="";return $i(e,(function(e,n){t+=n,t+=":",t+=e,t+="\r\n"})),t}(n),"string"==typeof e?null!=n&&encodeURIComponent(String(n)):Js(e,t,n))}function Ko(e,t,n){return n&&n.internalChannelParams&&n.internalChannelParams[e]||t}function Go(e){this.za=0,this.l=[],this.h=new ns,this.la=this.oa=this.F=this.W=this.g=this.sa=this.D=this.aa=this.o=this.P=this.s=null,this.Za=this.V=0,this.Xa=Ko("failFast",!1,e),this.N=this.v=this.u=this.m=this.j=null,this.X=!0,this.I=this.ta=this.U=-1,this.Y=this.A=this.C=0,this.Pa=Ko("baseRetryDelayMs",5e3,e),this.$a=Ko("retryDelaySeedMs",1e4,e),this.Ya=Ko("forwardChannelMaxRetries",2,e),this.ra=Ko("forwardChannelRequestTimeoutMs",2e4,e),this.qa=e&&e.xmlHttpFactory||void 0,this.Ba=e&&e.Yb||!1,this.K=void 0,this.H=e&&e.supportsCrossDomainXhr||!1,this.J="",this.i=new po(e&&e.concurrentRequestLimit),this.Ca=new To,this.ja=e&&e.fastHandshake||!1,this.Ra=e&&e.Wb||!1,e&&e.Aa&&this.h.Aa(),e&&e.forceLongPolling&&(this.X=!1),this.$=!this.ja&&this.X&&e&&e.detectBufferingProxy||!1,this.ka=void 0,this.O=0,this.L=!1,this.B=null,this.Wa=!e||!1!==e.Xb}function Wo(e){if(Jo(e),3==e.G){var t=e.V++,n=zs(e.F);Js(n,"SID",e.J),Js(n,"RID",t),Js(n,"TYPE","terminate"),ea(e,n),(t=new Ts(e,e.h,t,void 0)).K=2,t.v=Xs(zs(n)),n=!1,wi.navigator&&wi.navigator.sendBeacon&&(n=wi.navigator.sendBeacon(t.v.toString(),"")),!n&&wi.Image&&((new Image).src=t.v,n=!0),n||(t.g=da(t.l,null),t.g.ea(t.v)),t.F=Date.now(),Ls(t)}la(e)}function Qo(e){e.g&&(ra(e),e.g.cancel(),e.g=null)}function Jo(e){Qo(e),e.u&&(wi.clearTimeout(e.u),e.u=null),oa(e),e.i.cancel(),e.m&&("number"==typeof e.m&&wi.clearTimeout(e.m),e.m=null)}function Xo(e,t){e.l.push(new fo(e.Za++,t)),3==e.G&&Yo(e)}function Yo(e){mo(e.i)||e.m||(e.m=!0,$r(e.Ha,e),e.C=0)}function Zo(e,t){var n;n=t?t.m:e.V++;var i=zs(e.F);Js(i,"SID",e.J),Js(i,"RID",n),Js(i,"AID",e.U),ea(e,i),e.o&&e.s&&zo(i,e.o,e.s),n=new Ts(e,e.h,n,e.C+1),null===e.o&&(n.H=e.s),t&&(e.l=t.D.concat(e.l)),t=ta(e,n,1e3),n.setTimeout(Math.round(.5*e.ra)+Math.round(.5*e.ra*Math.random())),wo(e.i,n),Ns(n,i,t)}function ea(e,t){e.j&&Fs({},(function(e,n){Js(t,n,e)}))}function ta(e,t,n){n=Math.min(e.l.length,n);var i=e.j?Ai(e.j.Oa,e.j,e):null;e:for(var r=e.l,s=-1;;){var o=["count="+n];-1==s?0<n?(s=r[0].h,o.push("ofs="+s)):s=0:o.push("ofs="+s);for(var a=!0,c=0;c<n;c++){var h=r[c].h,l=r[c].g;if(0>(h-=s))s=Math.max(0,r[c].h-100),a=!1;else try{So(l,o,"req"+h+"_")}catch(e){i&&i(l)}}if(a){i=o.join("&");break e}}return e=e.l.splice(0,n),t.D=e,i}function na(e){e.g||e.u||(e.Y=1,$r(e.Ga,e),e.A=0)}function ia(e){return!(e.g||e.u||3<=e.A)&&(e.Y++,e.u=ds(Ai(e.Ga,e),ca(e,e.A)),e.A++,!0)}function ra(e){null!=e.B&&(wi.clearTimeout(e.B),e.B=null)}function sa(e){e.g=new Ts(e,e.h,"rpc",e.Y),null===e.o&&(e.g.H=e.s),e.g.O=0;var t=zs(e.oa);Js(t,"RID","rpc"),Js(t,"SID",e.J),Js(t,"CI",e.N?"0":"1"),Js(t,"AID",e.U),ea(e,t),Js(t,"TYPE","xmlhttp"),e.o&&e.s&&zo(t,e.o,e.s),e.K&&e.g.setTimeout(e.K);var n=e.g;e=e.la,n.K=1,n.v=Xs(zs(t)),n.s=null,n.U=!0,Cs(n,e)}function oa(e){null!=e.v&&(wi.clearTimeout(e.v),e.v=null)}function aa(e,t){var n=null;if(e.g==t){oa(e),ra(e),e.g=null;var i=2}else{if(!vo(e.i,t))return;n=t.D,bo(e.i,t),i=1}if(e.I=t.N,0!=e.G)if(t.i)if(1==i){n=t.s?t.s.length:0,t=Date.now()-t.F;var r=e.C;Or(i=os(),new us(i,n,t,r)),Yo(e)}else na(e);else if(3==(r=t.o)||0==r&&0<e.I||!(1==i&&function(e,t){return!(yo(e.i)>=e.i.j-(e.m?1:0)||(e.m?(e.l=t.D.concat(e.l),0):1==e.G||2==e.G||e.C>=(e.Xa?0:e.Ya)||(e.m=ds(Ai(e.Ha,e,t),ca(e,e.C)),e.C++,0)))}(e,t)||2==i&&ia(e)))switch(n&&0<n.length&&(t=e.i,t.i=t.i.concat(n)),r){case 1:ha(e,5);break;case 4:ha(e,10);break;case 3:ha(e,6);break;default:ha(e,2)}}function ca(e,t){var n=e.Pa+Math.floor(Math.random()*e.$a);return e.j||(n*=2),n*t}function ha(e,t){if(e.h.info("Error code "+t),2==t){var n=null;e.j&&(n=null);var i=Ai(e.jb,e);n||(n=new Hs("//www.google.com/images/cleardot.gif"),wi.location&&"http"==wi.location.protocol||Ks(n,"https"),Xs(n)),function(e,t){var n=new ns;if(wi.Image){var i=new Image;i.onload=Ni(Io,n,i,"TestLoadImage: loaded",!0,t),i.onerror=Ni(Io,n,i,"TestLoadImage: error",!1,t),i.onabort=Ni(Io,n,i,"TestLoadImage: abort",!1,t),i.ontimeout=Ni(Io,n,i,"TestLoadImage: timeout",!1,t),wi.setTimeout((function(){i.ontimeout&&i.ontimeout()}),1e4),i.src=e}else t(!1)}(n.toString(),i)}else ls(2);e.G=0,e.j&&e.j.va(t),la(e),Jo(e)}function la(e){e.G=0,e.I=-1,e.j&&(0==_o(e.i).length&&0==e.l.length||(e.i.i.length=0,Pi(e.l),e.l.length=0),e.j.ua())}function ua(e,t,n){var i=function(e){return e instanceof Hs?zs(e):new Hs(e,void 0)}(n);if(""!=i.i)t&&Gs(i,t+"."+i.i),Ws(i,i.m);else{var r=wi.location;i=function(e,t,n,i){var r=new Hs(null,void 0);return e&&Ks(r,e),t&&Gs(r,t),n&&Ws(r,n),i&&(r.l=i),r}(r.protocol,t?t+"."+r.hostname:r.hostname,+r.port,n)}return e.aa&&$i(e.aa,(function(e,t){Js(i,t,e)})),t=e.D,n=e.sa,t&&n&&Js(i,t,n),Js(i,"VER",e.ma),ea(e,i),i}function da(e,t,n){if(t&&!e.H)throw Error("Can't create secondary domain capable XhrIo object.");return(t=n&&e.Ba&&!e.qa?new Lo(new ko({ib:!0})):new Lo(e.qa)).L=e.H,t}function fa(){}function pa(){if(Ji&&!(10<=Number(hr)))throw Error("Environmental error: no available transport.")}function ma(e,t){Lr.call(this),this.g=new Go(t),this.l=e,this.h=t&&t.messageUrlParams||null,e=t&&t.messageHeaders||null,t&&t.clientProtocolHeaderRequired&&(e?e["X-Client-Protocol"]="webchannel":e={"X-Client-Protocol":"webchannel"}),this.g.s=e,e=t&&t.initMessageHeaders||null,t&&t.messageContentType&&(e?e["X-WebChannel-Content-Type"]=t.messageContentType:e={"X-WebChannel-Content-Type":t.messageContentType}),t&&t.ya&&(e?e["X-WebChannel-Client-Profile"]=t.ya:e={"X-WebChannel-Client-Profile":t.ya}),this.g.P=e,(e=t&&t.httpHeadersOverwriteParam)&&!Mi(e)&&(this.g.o=e),this.A=t&&t.supportsCrossDomainXhr||!1,this.v=t&&t.sendRawJson||!1,(t=t&&t.httpSessionIdParam)&&!Mi(t)&&(this.g.D=t,null!==(e=this.h)&&t in e&&(t in(e=this.h)&&delete e[t])),this.j=new wa(this)}function ya(e){bs.call(this);var t=e.__sm__;if(t){e:{for(var n in t){e=n;break e}e=void 0}(this.i=e)&&(e=this.i,t=null!==t&&e in t?t[e]:void 0),this.data=t}else this.data=e}function va(){_s.call(this),this.status=1}function wa(e){this.g=e}(mi=Lo.prototype).ea=function(e,t,n,i){if(this.g)throw Error("[goog.net.XhrIo] Object is active with another request="+this.H+"; newUri="+e);t=t?t.toUpperCase():"GET",this.H=e,this.j="",this.m=0,this.D=!1,this.h=!0,this.g=this.u?this.u.g():vs.g(),this.C=this.u?ms(this.u):ms(vs),this.g.onreadystatechange=Ai(this.Fa,this);try{this.F=!0,this.g.open(t,String(e),!0),this.F=!1}catch(e){return void Vo(this,e)}e=n||"";var r=new js(this.headers);i&&Fs(i,(function(e,t){r.set(t,e)})),i=function(e){e:{for(var t=Uo,n=e.length,i="string"==typeof e?e.split(""):e,r=0;r<n;r++)if(r in i&&t.call(void 0,i[r],r,e)){t=r;break e}t=-1}return 0>t?null:"string"==typeof e?e.charAt(t):e[t]}(r.T()),n=wi.FormData&&e instanceof wi.FormData,!(0<=Di(Mo,t))||i||n||r.set("Content-Type","application/x-www-form-urlencoded;charset=utf-8"),r.forEach((function(e,t){this.g.setRequestHeader(t,e)}),this),this.J&&(this.g.responseType=this.J),"withCredentials"in this.g&&this.g.withCredentials!==this.L&&(this.g.withCredentials=this.L);try{Bo(this),0<this.B&&((this.K=function(e){return Ji&&ar()&&"number"==typeof e.timeout&&void 0!==e.ontimeout}(this.g))?(this.g.timeout=this.B,this.g.ontimeout=Ai(this.pa,this)):this.A=Qr(this.pa,this.B,this)),this.v=!0,this.g.send(e),this.v=!1}catch(e){Vo(this,e)}},mi.pa=function(){void 0!==vi&&this.g&&(this.j="Timed out after "+this.B+"ms, aborting",this.m=8,Or(this,"timeout"),this.abort(8))},mi.abort=function(e){this.g&&this.h&&(this.h=!1,this.l=!0,this.g.abort(),this.l=!1,this.m=e||7,Or(this,"complete"),Or(this,"abort"),qo(this))},mi.M=function(){this.g&&(this.h&&(this.h=!1,this.l=!0,this.g.abort(),this.l=!1),qo(this,!0)),Lo.Z.M.call(this)},mi.Fa=function(){this.s||(this.F||this.v||this.l?jo(this):this.cb())},mi.cb=function(){jo(this)},mi.ba=function(){try{return 2<$o(this)?this.g.status:-1}catch(e){return-1}},mi.ga=function(){try{return this.g?this.g.responseText:""}catch(e){return""}},mi.Qa=function(e){if(this.g){var t=this.g.responseText;return e&&0==t.indexOf(e)&&(t=t.substring(e.length)),Do(t)}},mi.Da=function(){return this.m},mi.La=function(){return"string"==typeof this.j?this.j:String(this.j)},(mi=Go.prototype).ma=8,mi.G=1,mi.hb=function(e){try{this.h.info("Origin Trials invoked: "+e)}catch(e){}},mi.Ha=function(e){if(this.m)if(this.m=null,1==this.G){if(!e){this.V=Math.floor(1e5*Math.random()),e=this.V++;var t=new Ts(this,this.h,e,void 0),n=this.s;if(this.P&&(n?Ki(n=Hi(n),this.P):n=this.P),null===this.o&&(t.H=n),this.ja)e:{for(var i=0,r=0;r<this.l.length;r++){var s=this.l[r];if(void 0===(s="__data__"in s.g&&"string"==typeof(s=s.g.__data__)?s.length:void 0))break;if(4096<(i+=s)){i=r;break e}if(4096===i||r===this.l.length-1){i=r+1;break e}}i=1e3}else i=1e3;i=ta(this,t,i),Js(r=zs(this.F),"RID",e),Js(r,"CVER",22),this.D&&Js(r,"X-HTTP-Session-Id",this.D),ea(this,r),this.o&&n&&zo(r,this.o,n),wo(this.i,t),this.Ra&&Js(r,"TYPE","init"),this.ja?(Js(r,"$req",i),Js(r,"SID","null"),t.$=!0,Ns(t,r,null)):Ns(t,r,i),this.G=2}}else 3==this.G&&(e?Zo(this,e):0==this.l.length||mo(this.i)||Zo(this))},mi.Ga=function(){if(this.u=null,sa(this),this.$&&!(this.L||null==this.g||0>=this.O)){var e=2*this.O;this.h.info("BP detection timer enabled: "+e),this.B=ds(Ai(this.bb,this),e)}},mi.bb=function(){this.B&&(this.B=null,this.h.info("BP detection timeout reached."),this.h.info("Buffering proxy detected and switch to long-polling!"),this.N=!1,this.L=!0,ls(10),Qo(this),sa(this))},mi.ab=function(){null!=this.v&&(this.v=null,Qo(this),ia(this),ls(19))},mi.jb=function(e){e?(this.h.info("Successfully pinged google.com"),ls(2)):(this.h.info("Failed to ping google.com"),ls(1))},(mi=fa.prototype).xa=function(){},mi.wa=function(){},mi.va=function(){},mi.ua=function(){},mi.Oa=function(){},pa.prototype.g=function(e,t){return new ma(e,t)},Ci(ma,Lr),ma.prototype.m=function(){this.g.j=this.j,this.A&&(this.g.H=!0);var e=this.g,t=this.l,n=this.h||void 0;e.Wa&&(e.h.info("Origin Trials enabled."),$r(Ai(e.hb,e,t))),ls(0),e.W=t,e.aa=n||{},e.N=e.X,e.F=ua(e,null,e.W),Yo(e)},ma.prototype.close=function(){Wo(this.g)},ma.prototype.u=function(e){if("string"==typeof e){var t={};t.__data__=e,Xo(this.g,t)}else this.v?((t={}).__data__=Mr(e),Xo(this.g,t)):Xo(this.g,e)},ma.prototype.M=function(){this.g.j=null,delete this.j,Wo(this.g),delete this.g,ma.Z.M.call(this)},Ci(ya,bs),Ci(va,_s),Ci(wa,fa),wa.prototype.xa=function(){Or(this.g,"a")},wa.prototype.wa=function(e){Or(this.g,new ya(e))},wa.prototype.va=function(e){Or(this.g,new va(e))},wa.prototype.ua=function(){Or(this.g,"b")},pa.prototype.createWebChannel=pa.prototype.g,ma.prototype.send=ma.prototype.u,ma.prototype.open=ma.prototype.m,ma.prototype.close=ma.prototype.close,fs.NO_ERROR=0,fs.TIMEOUT=8,fs.HTTP_ERROR=6,ps.COMPLETE="complete",ys.EventType=ws,ws.OPEN="a",ws.CLOSE="b",ws.ERROR="c",ws.MESSAGE="d",Lr.prototype.listen=Lr.prototype.N,Lo.prototype.listenOnce=Lo.prototype.O,Lo.prototype.getLastError=Lo.prototype.La,Lo.prototype.getLastErrorCode=Lo.prototype.Da,Lo.prototype.getStatus=Lo.prototype.ba,Lo.prototype.getResponseJson=Lo.prototype.Qa,Lo.prototype.getResponseText=Lo.prototype.ga,Lo.prototype.send=Lo.prototype.ea;var ba=fs,_a=ps,Ea=rs,Ta=10,Sa=11,Ia=ko,ka=ys,Aa=Lo;let Na="8.7.1";class Ca{constructor(e,t){this.previousValue=e,t&&(t.sequenceNumberHandler=e=>this.t(e),this.i=e=>t.writeSequenceNumber(e))}t(e){return this.previousValue=Math.max(e,this.previousValue),this.previousValue}next(){const e=++this.previousValue;return this.i&&this.i(e),e}}Ca.o=-1;const Ra={OK:"ok",CANCELLED:"cancelled",UNKNOWN:"unknown",INVALID_ARGUMENT:"invalid-argument",DEADLINE_EXCEEDED:"deadline-exceeded",NOT_FOUND:"not-found",ALREADY_EXISTS:"already-exists",PERMISSION_DENIED:"permission-denied",UNAUTHENTICATED:"unauthenticated",RESOURCE_EXHAUSTED:"resource-exhausted",FAILED_PRECONDITION:"failed-precondition",ABORTED:"aborted",OUT_OF_RANGE:"out-of-range",UNIMPLEMENTED:"unimplemented",INTERNAL:"internal",UNAVAILABLE:"unavailable",DATA_LOSS:"data-loss"};class xa extends Error{constructor(e,t){super(t),this.code=e,this.message=t,this.name="FirebaseError",this.toString=()=>`${this.name}: [code=${this.code}]: ${this.message}`}}const Da=new qe("@firebase/firestore");function La(){return Da.logLevel}function Oa(e,...t){if(Da.logLevel<=Oe.DEBUG){const n=t.map(Ua);Da.debug(`Firestore (${Na}): ${e}`,...n)}}function Pa(e,...t){if(Da.logLevel<=Oe.ERROR){const n=t.map(Ua);Da.error(`Firestore (${Na}): ${e}`,...n)}}function Ma(e,...t){if(Da.logLevel<=Oe.WARN){const n=t.map(Ua);Da.warn(`Firestore (${Na}): ${e}`,...n)}}function Ua(e){if("string"==typeof e)return e;try{return t=e,JSON.stringify(t)}catch(t){return e}var t}function Va(e="Unexpected state"){const t=`FIRESTORE (${Na}) INTERNAL ASSERTION FAILED: `+e;throw Pa(t),new Error(t)}function Fa(e,t){e||Va()}function ja(e,t){return e}function qa(e){const t="undefined"!=typeof self&&(self.crypto||self.msCrypto),n=new Uint8Array(e);if(t&&"function"==typeof t.getRandomValues)t.getRandomValues(n);else for(let t=0;t<e;t++)n[t]=Math.floor(256*Math.random());return n}class Ba{static u(){const e="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",t=Math.floor(256/e.length)*e.length;let n="";for(;n.length<20;){const i=qa(40);for(let r=0;r<i.length;++r)n.length<20&&i[r]<t&&(n+=e.charAt(i[r]%e.length))}return n}}function $a(e,t){return e<t?-1:e>t?1:0}function Ha(e,t,n){return e.length===t.length&&e.every(((e,i)=>n(e,t[i])))}class za{constructor(e,t){if(this.seconds=e,this.nanoseconds=t,t<0)throw new xa(Ra.INVALID_ARGUMENT,"Timestamp nanoseconds out of range: "+t);if(t>=1e9)throw new xa(Ra.INVALID_ARGUMENT,"Timestamp nanoseconds out of range: "+t);if(e<-62135596800)throw new xa(Ra.INVALID_ARGUMENT,"Timestamp seconds out of range: "+e);if(e>=253402300800)throw new xa(Ra.INVALID_ARGUMENT,"Timestamp seconds out of range: "+e)}static now(){return za.fromMillis(Date.now())}static fromDate(e){return za.fromMillis(e.getTime())}static fromMillis(e){const t=Math.floor(e/1e3),n=Math.floor(1e6*(e-1e3*t));return new za(t,n)}toDate(){return new Date(this.toMillis())}toMillis(){return 1e3*this.seconds+this.nanoseconds/1e6}_compareTo(e){return this.seconds===e.seconds?$a(this.nanoseconds,e.nanoseconds):$a(this.seconds,e.seconds)}isEqual(e){return e.seconds===this.seconds&&e.nanoseconds===this.nanoseconds}toString(){return"Timestamp(seconds="+this.seconds+", nanoseconds="+this.nanoseconds+")"}toJSON(){return{seconds:this.seconds,nanoseconds:this.nanoseconds}}valueOf(){const e=this.seconds- -62135596800;return String(e).padStart(12,"0")+"."+String(this.nanoseconds).padStart(9,"0")}}class Ka{constructor(e){this.timestamp=e}static fromTimestamp(e){return new Ka(e)}static min(){return new Ka(new za(0,0))}compareTo(e){return this.timestamp._compareTo(e.timestamp)}isEqual(e){return this.timestamp.isEqual(e.timestamp)}toMicroseconds(){return 1e6*this.timestamp.seconds+this.timestamp.nanoseconds/1e3}toString(){return"SnapshotVersion("+this.timestamp.toString()+")"}toTimestamp(){return this.timestamp}}function Ga(e){let t=0;for(const n in e)Object.prototype.hasOwnProperty.call(e,n)&&t++;return t}function Wa(e,t){for(const n in e)Object.prototype.hasOwnProperty.call(e,n)&&t(n,e[n])}function Qa(e){for(const t in e)if(Object.prototype.hasOwnProperty.call(e,t))return!1;return!0}class Ja{constructor(e,t,n){void 0===t?t=0:t>e.length&&Va(),void 0===n?n=e.length-t:n>e.length-t&&Va(),this.segments=e,this.offset=t,this.len=n}get length(){return this.len}isEqual(e){return 0===Ja.comparator(this,e)}child(e){const t=this.segments.slice(this.offset,this.limit());return e instanceof Ja?e.forEach((e=>{t.push(e)})):t.push(e),this.construct(t)}limit(){return this.offset+this.length}popFirst(e){return e=void 0===e?1:e,this.construct(this.segments,this.offset+e,this.length-e)}popLast(){return this.construct(this.segments,this.offset,this.length-1)}firstSegment(){return this.segments[this.offset]}lastSegment(){return this.get(this.length-1)}get(e){return this.segments[this.offset+e]}isEmpty(){return 0===this.length}isPrefixOf(e){if(e.length<this.length)return!1;for(let t=0;t<this.length;t++)if(this.get(t)!==e.get(t))return!1;return!0}isImmediateParentOf(e){if(this.length+1!==e.length)return!1;for(let t=0;t<this.length;t++)if(this.get(t)!==e.get(t))return!1;return!0}forEach(e){for(let t=this.offset,n=this.limit();t<n;t++)e(this.segments[t])}toArray(){return this.segments.slice(this.offset,this.limit())}static comparator(e,t){const n=Math.min(e.length,t.length);for(let i=0;i<n;i++){const n=e.get(i),r=t.get(i);if(n<r)return-1;if(n>r)return 1}return e.length<t.length?-1:e.length>t.length?1:0}}class Xa extends Ja{construct(e,t,n){return new Xa(e,t,n)}canonicalString(){return this.toArray().join("/")}toString(){return this.canonicalString()}static fromString(...e){const t=[];for(const n of e){if(n.indexOf("//")>=0)throw new xa(Ra.INVALID_ARGUMENT,`Invalid segment (${n}). Paths must not contain // in them.`);t.push(...n.split("/").filter((e=>e.length>0)))}return new Xa(t)}static emptyPath(){return new Xa([])}}const Ya=/^[_a-zA-Z][_a-zA-Z0-9]*$/;class Za extends Ja{construct(e,t,n){return new Za(e,t,n)}static isValidIdentifier(e){return Ya.test(e)}canonicalString(){return this.toArray().map((e=>(e=e.replace(/\\/g,"\\\\").replace(/`/g,"\\`"),Za.isValidIdentifier(e)||(e="`"+e+"`"),e))).join(".")}toString(){return this.canonicalString()}isKeyField(){return 1===this.length&&"__name__"===this.get(0)}static keyField(){return new Za(["__name__"])}static fromServerFormat(e){const t=[];let n="",i=0;const r=()=>{if(0===n.length)throw new xa(Ra.INVALID_ARGUMENT,`Invalid field path (${e}). Paths must not be empty, begin with '.', end with '.', or contain '..'`);t.push(n),n=""};let s=!1;for(;i<e.length;){const t=e[i];if("\\"===t){if(i+1===e.length)throw new xa(Ra.INVALID_ARGUMENT,"Path has trailing escape character: "+e);const t=e[i+1];if("\\"!==t&&"."!==t&&"`"!==t)throw new xa(Ra.INVALID_ARGUMENT,"Path has invalid escape sequence: "+e);n+=t,i+=2}else"`"===t?(s=!s,i++):"."!==t||s?(n+=t,i++):(r(),i++)}if(r(),s)throw new xa(Ra.INVALID_ARGUMENT,"Unterminated ` in path: "+e);return new Za(t)}static emptyPath(){return new Za([])}}class ec{constructor(e){this.fields=e,e.sort(Za.comparator)}covers(e){for(const t of this.fields)if(t.isPrefixOf(e))return!0;return!1}isEqual(e){return Ha(this.fields,e.fields,((e,t)=>e.isEqual(t)))}}class tc{constructor(e){this.binaryString=e}static fromBase64String(e){const t=atob(e);return new tc(t)}static fromUint8Array(e){const t=function(e){let t="";for(let n=0;n<e.length;++n)t+=String.fromCharCode(e[n]);return t}(e);return new tc(t)}toBase64(){return e=this.binaryString,btoa(e);var e}toUint8Array(){return function(e){const t=new Uint8Array(e.length);for(let n=0;n<e.length;n++)t[n]=e.charCodeAt(n);return t}(this.binaryString)}approximateByteSize(){return 2*this.binaryString.length}compareTo(e){return $a(this.binaryString,e.binaryString)}isEqual(e){return this.binaryString===e.binaryString}}tc.EMPTY_BYTE_STRING=new tc("");const nc=new RegExp(/^\d{4}-\d\d-\d\dT\d\d:\d\d:\d\d(?:\.(\d+))?Z$/);function ic(e){if(Fa(!!e),"string"==typeof e){let t=0;const n=nc.exec(e);if(Fa(!!n),n[1]){let e=n[1];e=(e+"000000000").substr(0,9),t=Number(e)}const i=new Date(e);return{seconds:Math.floor(i.getTime()/1e3),nanos:t}}return{seconds:rc(e.seconds),nanos:rc(e.nanos)}}function rc(e){return"number"==typeof e?e:"string"==typeof e?Number(e):0}function sc(e){return"string"==typeof e?tc.fromBase64String(e):tc.fromUint8Array(e)}function oc(e){var t,n;return"server_timestamp"===(null===(n=((null===(t=null==e?void 0:e.mapValue)||void 0===t?void 0:t.fields)||{}).__type__)||void 0===n?void 0:n.stringValue)}function ac(e){const t=e.mapValue.fields.__previous_value__;return oc(t)?ac(t):t}function cc(e){const t=ic(e.mapValue.fields.__local_write_time__.timestampValue);return new za(t.seconds,t.nanos)}function hc(e){return null==e}function lc(e){return 0===e&&1/e==-1/0}class uc{constructor(e){this.path=e}static fromPath(e){return new uc(Xa.fromString(e))}static fromName(e){return new uc(Xa.fromString(e).popFirst(5))}hasCollectionId(e){return this.path.length>=2&&this.path.get(this.path.length-2)===e}isEqual(e){return null!==e&&0===Xa.comparator(this.path,e.path)}toString(){return this.path.toString()}static comparator(e,t){return Xa.comparator(e.path,t.path)}static isDocumentKey(e){return e.length%2==0}static fromSegments(e){return new uc(new Xa(e.slice()))}}function dc(e){return"nullValue"in e?0:"booleanValue"in e?1:"integerValue"in e||"doubleValue"in e?2:"timestampValue"in e?3:"stringValue"in e?5:"bytesValue"in e?6:"referenceValue"in e?7:"geoPointValue"in e?8:"arrayValue"in e?9:"mapValue"in e?oc(e)?4:10:Va()}function fc(e,t){const n=dc(e);if(n!==dc(t))return!1;switch(n){case 0:return!0;case 1:return e.booleanValue===t.booleanValue;case 4:return cc(e).isEqual(cc(t));case 3:return function(e,t){if("string"==typeof e.timestampValue&&"string"==typeof t.timestampValue&&e.timestampValue.length===t.timestampValue.length)return e.timestampValue===t.timestampValue;const n=ic(e.timestampValue),i=ic(t.timestampValue);return n.seconds===i.seconds&&n.nanos===i.nanos}(e,t);case 5:return e.stringValue===t.stringValue;case 6:return function(e,t){return sc(e.bytesValue).isEqual(sc(t.bytesValue))}(e,t);case 7:return e.referenceValue===t.referenceValue;case 8:return function(e,t){return rc(e.geoPointValue.latitude)===rc(t.geoPointValue.latitude)&&rc(e.geoPointValue.longitude)===rc(t.geoPointValue.longitude)}(e,t);case 2:return function(e,t){if("integerValue"in e&&"integerValue"in t)return rc(e.integerValue)===rc(t.integerValue);if("doubleValue"in e&&"doubleValue"in t){const n=rc(e.doubleValue),i=rc(t.doubleValue);return n===i?lc(n)===lc(i):isNaN(n)&&isNaN(i)}return!1}(e,t);case 9:return Ha(e.arrayValue.values||[],t.arrayValue.values||[],fc);case 10:return function(e,t){const n=e.mapValue.fields||{},i=t.mapValue.fields||{};if(Ga(n)!==Ga(i))return!1;for(const e in n)if(n.hasOwnProperty(e)&&(void 0===i[e]||!fc(n[e],i[e])))return!1;return!0}(e,t);default:return Va()}}function pc(e,t){return void 0!==(e.values||[]).find((e=>fc(e,t)))}function gc(e,t){const n=dc(e),i=dc(t);if(n!==i)return $a(n,i);switch(n){case 0:return 0;case 1:return $a(e.booleanValue,t.booleanValue);case 2:return function(e,t){const n=rc(e.integerValue||e.doubleValue),i=rc(t.integerValue||t.doubleValue);return n<i?-1:n>i?1:n===i?0:isNaN(n)?isNaN(i)?0:-1:1}(e,t);case 3:return mc(e.timestampValue,t.timestampValue);case 4:return mc(cc(e),cc(t));case 5:return $a(e.stringValue,t.stringValue);case 6:return function(e,t){const n=sc(e),i=sc(t);return n.compareTo(i)}(e.bytesValue,t.bytesValue);case 7:return function(e,t){const n=e.split("/"),i=t.split("/");for(let e=0;e<n.length&&e<i.length;e++){const t=$a(n[e],i[e]);if(0!==t)return t}return $a(n.length,i.length)}(e.referenceValue,t.referenceValue);case 8:return function(e,t){const n=$a(rc(e.latitude),rc(t.latitude));return 0!==n?n:$a(rc(e.longitude),rc(t.longitude))}(e.geoPointValue,t.geoPointValue);case 9:return function(e,t){const n=e.values||[],i=t.values||[];for(let e=0;e<n.length&&e<i.length;++e){const t=gc(n[e],i[e]);if(t)return t}return $a(n.length,i.length)}(e.arrayValue,t.arrayValue);case 10:return function(e,t){const n=e.fields||{},i=Object.keys(n),r=t.fields||{},s=Object.keys(r);i.sort(),s.sort();for(let e=0;e<i.length&&e<s.length;++e){const t=$a(i[e],s[e]);if(0!==t)return t;const o=gc(n[i[e]],r[s[e]]);if(0!==o)return o}return $a(i.length,s.length)}(e.mapValue,t.mapValue);default:throw Va()}}function mc(e,t){if("string"==typeof e&&"string"==typeof t&&e.length===t.length)return $a(e,t);const n=ic(e),i=ic(t),r=$a(n.seconds,i.seconds);return 0!==r?r:$a(n.nanos,i.nanos)}function yc(e){return vc(e)}function vc(e){return"nullValue"in e?"null":"booleanValue"in e?""+e.booleanValue:"integerValue"in e?""+e.integerValue:"doubleValue"in e?""+e.doubleValue:"timestampValue"in e?function(e){const t=ic(e);return`time(${t.seconds},${t.nanos})`}(e.timestampValue):"stringValue"in e?e.stringValue:"bytesValue"in e?sc(e.bytesValue).toBase64():"referenceValue"in e?(n=e.referenceValue,uc.fromName(n).toString()):"geoPointValue"in e?`geo(${(t=e.geoPointValue).latitude},${t.longitude})`:"arrayValue"in e?function(e){let t="[",n=!0;for(const i of e.values||[])n?n=!1:t+=",",t+=vc(i);return t+"]"}(e.arrayValue):"mapValue"in e?function(e){const t=Object.keys(e.fields||{}).sort();let n="{",i=!0;for(const r of t)i?i=!1:n+=",",n+=`${r}:${vc(e.fields[r])}`;return n+"}"}(e.mapValue):Va();var t,n}function wc(e){return!!e&&"integerValue"in e}function bc(e){return!!e&&"arrayValue"in e}function _c(e){return!!e&&"nullValue"in e}function Ec(e){return!!e&&"doubleValue"in e&&isNaN(Number(e.doubleValue))}function Tc(e){return!!e&&"mapValue"in e}function Sc(e){if(e.geoPointValue)return{geoPointValue:Object.assign({},e.geoPointValue)};if(e.timestampValue&&"object"==typeof e.timestampValue)return{timestampValue:Object.assign({},e.timestampValue)};if(e.mapValue){const t={mapValue:{fields:{}}};return Wa(e.mapValue.fields,((e,n)=>t.mapValue.fields[e]=Sc(n))),t}if(e.arrayValue){const t={arrayValue:{values:[]}};for(let n=0;n<(e.arrayValue.values||[]).length;++n)t.arrayValue.values[n]=Sc(e.arrayValue.values[n]);return t}return Object.assign({},e)}class Ic{constructor(e){this.value=e}static empty(){return new Ic({mapValue:{}})}field(e){if(e.isEmpty())return this.value;{let t=this.value;for(let n=0;n<e.length-1;++n)if(t=(t.mapValue.fields||{})[e.get(n)],!Tc(t))return null;return t=(t.mapValue.fields||{})[e.lastSegment()],t||null}}set(e,t){this.getFieldsMap(e.popLast())[e.lastSegment()]=Sc(t)}setAll(e){let t=Za.emptyPath(),n={},i=[];e.forEach(((e,r)=>{if(!t.isImmediateParentOf(r)){const e=this.getFieldsMap(t);this.applyChanges(e,n,i),n={},i=[],t=r.popLast()}e?n[r.lastSegment()]=Sc(e):i.push(r.lastSegment())}));const r=this.getFieldsMap(t);this.applyChanges(r,n,i)}delete(e){const t=this.field(e.popLast());Tc(t)&&t.mapValue.fields&&delete t.mapValue.fields[e.lastSegment()]}isEqual(e){return fc(this.value,e.value)}getFieldsMap(e){let t=this.value;t.mapValue.fields||(t.mapValue={fields:{}});for(let n=0;n<e.length;++n){let i=t.mapValue.fields[e.get(n)];Tc(i)&&i.mapValue.fields||(i={mapValue:{fields:{}}},t.mapValue.fields[e.get(n)]=i),t=i}return t.mapValue.fields}applyChanges(e,t,n){Wa(t,((t,n)=>e[t]=n));for(const t of n)delete e[t]}clone(){return new Ic(Sc(this.value))}}class kc{constructor(e,t,n,i,r){this.key=e,this.documentType=t,this.version=n,this.data=i,this.documentState=r}static newInvalidDocument(e){return new kc(e,0,Ka.min(),Ic.empty(),0)}static newFoundDocument(e,t,n){return new kc(e,1,t,n,0)}static newNoDocument(e,t){return new kc(e,2,t,Ic.empty(),0)}static newUnknownDocument(e,t){return new kc(e,3,t,Ic.empty(),2)}convertToFoundDocument(e,t){return this.version=e,this.documentType=1,this.data=t,this.documentState=0,this}convertToNoDocument(e){return this.version=e,this.documentType=2,this.data=Ic.empty(),this.documentState=0,this}convertToUnknownDocument(e){return this.version=e,this.documentType=3,this.data=Ic.empty(),this.documentState=2,this}setHasCommittedMutations(){return this.documentState=2,this}setHasLocalMutations(){return this.documentState=1,this}get hasLocalMutations(){return 1===this.documentState}get hasCommittedMutations(){return 2===this.documentState}get hasPendingWrites(){return this.hasLocalMutations||this.hasCommittedMutations}isValidDocument(){return 0!==this.documentType}isFoundDocument(){return 1===this.documentType}isNoDocument(){return 2===this.documentType}isUnknownDocument(){return 3===this.documentType}isEqual(e){return e instanceof kc&&this.key.isEqual(e.key)&&this.version.isEqual(e.version)&&this.documentType===e.documentType&&this.documentState===e.documentState&&this.data.isEqual(e.data)}clone(){return new kc(this.key,this.documentType,this.version,this.data.clone(),this.documentState)}toString(){return`Document(${this.key}, ${this.version}, ${JSON.stringify(this.data.value)}, {documentType: ${this.documentType}}), {documentState: ${this.documentState}})`}}class Ac{constructor(e,t=null,n=[],i=[],r=null,s=null,o=null){this.path=e,this.collectionGroup=t,this.orderBy=n,this.filters=i,this.limit=r,this.startAt=s,this.endAt=o,this.h=null}}function Nc(e,t=null,n=[],i=[],r=null,s=null,o=null){return new Ac(e,t,n,i,r,s,o)}function Cc(e){const t=ja(e);if(null===t.h){let e=t.path.canonicalString();null!==t.collectionGroup&&(e+="|cg:"+t.collectionGroup),e+="|f:",e+=t.filters.map((e=>function(e){return e.field.canonicalString()+e.op.toString()+yc(e.value)}(e))).join(","),e+="|ob:",e+=t.orderBy.map((e=>function(e){return e.field.canonicalString()+e.dir}(e))).join(","),hc(t.limit)||(e+="|l:",e+=t.limit),t.startAt&&(e+="|lb:",e+=Bc(t.startAt)),t.endAt&&(e+="|ub:",e+=Bc(t.endAt)),t.h=e}return t.h}function Rc(e,t){if(e.limit!==t.limit)return!1;if(e.orderBy.length!==t.orderBy.length)return!1;for(let n=0;n<e.orderBy.length;n++)if(!Hc(e.orderBy[n],t.orderBy[n]))return!1;if(e.filters.length!==t.filters.length)return!1;for(let r=0;r<e.filters.length;r++)if(n=e.filters[r],i=t.filters[r],n.op!==i.op||!n.field.isEqual(i.field)||!fc(n.value,i.value))return!1;var n,i;return e.collectionGroup===t.collectionGroup&&!!e.path.isEqual(t.path)&&!!Kc(e.startAt,t.startAt)&&Kc(e.endAt,t.endAt)}function xc(e){return uc.isDocumentKey(e.path)&&null===e.collectionGroup&&0===e.filters.length}class Dc extends class{}{constructor(e,t,n){super(),this.field=e,this.op=t,this.value=n}static create(e,t,n){return e.isKeyField()?"in"===t||"not-in"===t?this.l(e,t,n):new Lc(e,t,n):"array-contains"===t?new Uc(e,n):"in"===t?new Vc(e,n):"not-in"===t?new Fc(e,n):"array-contains-any"===t?new jc(e,n):new Dc(e,t,n)}static l(e,t,n){return"in"===t?new Oc(e,n):new Pc(e,n)}matches(e){const t=e.data.field(this.field);return"!="===this.op?null!==t&&this.m(gc(t,this.value)):null!==t&&dc(this.value)===dc(t)&&this.m(gc(t,this.value))}m(e){switch(this.op){case"<":return e<0;case"<=":return e<=0;case"==":return 0===e;case"!=":return 0!==e;case">":return e>0;case">=":return e>=0;default:return Va()}}g(){return["<","<=",">",">=","!=","not-in"].indexOf(this.op)>=0}}class Lc extends Dc{constructor(e,t,n){super(e,t,n),this.key=uc.fromName(n.referenceValue)}matches(e){const t=uc.comparator(e.key,this.key);return this.m(t)}}class Oc extends Dc{constructor(e,t){super(e,"in",t),this.keys=Mc("in",t)}matches(e){return this.keys.some((t=>t.isEqual(e.key)))}}class Pc extends Dc{constructor(e,t){super(e,"not-in",t),this.keys=Mc("not-in",t)}matches(e){return!this.keys.some((t=>t.isEqual(e.key)))}}function Mc(e,t){var n;return((null===(n=t.arrayValue)||void 0===n?void 0:n.values)||[]).map((e=>uc.fromName(e.referenceValue)))}class Uc extends Dc{constructor(e,t){super(e,"array-contains",t)}matches(e){const t=e.data.field(this.field);return bc(t)&&pc(t.arrayValue,this.value)}}class Vc extends Dc{constructor(e,t){super(e,"in",t)}matches(e){const t=e.data.field(this.field);return null!==t&&pc(this.value.arrayValue,t)}}class Fc extends Dc{constructor(e,t){super(e,"not-in",t)}matches(e){if(pc(this.value.arrayValue,{nullValue:"NULL_VALUE"}))return!1;const t=e.data.field(this.field);return null!==t&&!pc(this.value.arrayValue,t)}}class jc extends Dc{constructor(e,t){super(e,"array-contains-any",t)}matches(e){const t=e.data.field(this.field);return!(!bc(t)||!t.arrayValue.values)&&t.arrayValue.values.some((e=>pc(this.value.arrayValue,e)))}}class qc{constructor(e,t){this.position=e,this.before=t}}function Bc(e){return`${e.before?"b":"a"}:${e.position.map((e=>yc(e))).join(",")}`}class $c{constructor(e,t="asc"){this.field=e,this.dir=t}}function Hc(e,t){return e.dir===t.dir&&e.field.isEqual(t.field)}function zc(e,t,n){let i=0;for(let r=0;r<e.position.length;r++){const s=t[r],o=e.position[r];if(i=s.field.isKeyField()?uc.comparator(uc.fromName(o.referenceValue),n.key):gc(o,n.data.field(s.field)),"desc"===s.dir&&(i*=-1),0!==i)break}return e.before?i<=0:i<0}function Kc(e,t){if(null===e)return null===t;if(null===t)return!1;if(e.before!==t.before||e.position.length!==t.position.length)return!1;for(let n=0;n<e.position.length;n++)if(!fc(e.position[n],t.position[n]))return!1;return!0}class Gc{constructor(e,t=null,n=[],i=[],r=null,s="F",o=null,a=null){this.path=e,this.collectionGroup=t,this.explicitOrderBy=n,this.filters=i,this.limit=r,this.limitType=s,this.startAt=o,this.endAt=a,this.p=null,this.T=null,this.startAt,this.endAt}}function Wc(e){return new Gc(e)}function Qc(e){return!hc(e.limit)&&"F"===e.limitType}function Jc(e){return!hc(e.limit)&&"L"===e.limitType}function Xc(e){const t=ja(e);if(null===t.p){t.p=[];const e=function(e){for(const t of e.filters)if(t.g())return t.field;return null}(t),n=function(e){return e.explicitOrderBy.length>0?e.explicitOrderBy[0].field:null}(t);if(null!==e&&null===n)e.isKeyField()||t.p.push(new $c(e)),t.p.push(new $c(Za.keyField(),"asc"));else{let e=!1;for(const n of t.explicitOrderBy)t.p.push(n),n.field.isKeyField()&&(e=!0);if(!e){const e=t.explicitOrderBy.length>0?t.explicitOrderBy[t.explicitOrderBy.length-1].dir:"asc";t.p.push(new $c(Za.keyField(),e))}}}return t.p}function Yc(e){const t=ja(e);if(!t.T)if("F"===t.limitType)t.T=Nc(t.path,t.collectionGroup,Xc(t),t.filters,t.limit,t.startAt,t.endAt);else{const e=[];for(const n of Xc(t)){const t="desc"===n.dir?"asc":"desc";e.push(new $c(n.field,t))}const n=t.endAt?new qc(t.endAt.position,!t.endAt.before):null,i=t.startAt?new qc(t.startAt.position,!t.startAt.before):null;t.T=Nc(t.path,t.collectionGroup,e,t.filters,t.limit,n,i)}return t.T}function Zc(e,t){return Rc(Yc(e),Yc(t))&&e.limitType===t.limitType}function eh(e){return`${Cc(Yc(e))}|lt:${e.limitType}`}function th(e){return`Query(target=${function(e){let t=e.path.canonicalString();return null!==e.collectionGroup&&(t+=" collectionGroup="+e.collectionGroup),e.filters.length>0&&(t+=`, filters: [${e.filters.map((e=>{return`${(t=e).field.canonicalString()} ${t.op} ${yc(t.value)}`;var t})).join(", ")}]`),hc(e.limit)||(t+=", limit: "+e.limit),e.orderBy.length>0&&(t+=`, orderBy: [${e.orderBy.map((e=>function(e){return`${e.field.canonicalString()} (${e.dir})`}(e))).join(", ")}]`),e.startAt&&(t+=", startAt: "+Bc(e.startAt)),e.endAt&&(t+=", endAt: "+Bc(e.endAt)),`Target(${t})`}(Yc(e))}; limitType=${e.limitType})`}function nh(e,t){return t.isFoundDocument()&&function(e,t){const n=t.key.path;return null!==e.collectionGroup?t.key.hasCollectionId(e.collectionGroup)&&e.path.isPrefixOf(n):uc.isDocumentKey(e.path)?e.path.isEqual(n):e.path.isImmediateParentOf(n)}(e,t)&&function(e,t){for(const n of e.explicitOrderBy)if(!n.field.isKeyField()&&null===t.data.field(n.field))return!1;return!0}(e,t)&&function(e,t){for(const n of e.filters)if(!n.matches(t))return!1;return!0}(e,t)&&function(e,t){return!(e.startAt&&!zc(e.startAt,Xc(e),t))&&(!e.endAt||!zc(e.endAt,Xc(e),t))}(e,t)}function ih(e){return(t,n)=>{let i=!1;for(const r of Xc(e)){const e=rh(r,t,n);if(0!==e)return e;i=i||r.field.isKeyField()}return 0}}function rh(e,t,n){const i=e.field.isKeyField()?uc.comparator(t.key,n.key):function(e,t,n){const i=t.data.field(e),r=n.data.field(e);return null!==i&&null!==r?gc(i,r):Va()}(e.field,t,n);switch(e.dir){case"asc":return i;case"desc":return-1*i;default:return Va()}}function sh(e,t){if(e.I){if(isNaN(t))return{doubleValue:"NaN"};if(t===1/0)return{doubleValue:"Infinity"};if(t===-1/0)return{doubleValue:"-Infinity"}}return{doubleValue:lc(t)?"-0":t}}function oh(e){return{integerValue:""+e}}function ah(e,t){return function(e){return"number"==typeof e&&Number.isInteger(e)&&!lc(e)&&e<=Number.MAX_SAFE_INTEGER&&e>=Number.MIN_SAFE_INTEGER}(t)?oh(t):sh(e,t)}class ch{constructor(){this._=void 0}}function hh(e,t,n){return e instanceof uh?function(e,t){const n={fields:{__type__:{stringValue:"server_timestamp"},__local_write_time__:{timestampValue:{seconds:e.seconds,nanos:e.nanoseconds}}}};return t&&(n.fields.__previous_value__=t),{mapValue:n}}(n,t):e instanceof dh?fh(e,t):e instanceof ph?gh(e,t):function(e,t){const n=function(e,t){return e instanceof mh?wc(n=t)||function(e){return!!e&&"doubleValue"in e}(n)?t:{integerValue:0}:null;var n}(e,t),i=yh(n)+yh(e.A);return wc(n)&&wc(e.A)?oh(i):sh(e.R,i)}(e,t)}function lh(e,t,n){return e instanceof dh?fh(e,t):e instanceof ph?gh(e,t):n}class uh extends ch{}class dh extends ch{constructor(e){super(),this.elements=e}}function fh(e,t){const n=vh(t);for(const t of e.elements)n.some((e=>fc(e,t)))||n.push(t);return{arrayValue:{values:n}}}class ph extends ch{constructor(e){super(),this.elements=e}}function gh(e,t){let n=vh(t);for(const t of e.elements)n=n.filter((e=>!fc(e,t)));return{arrayValue:{values:n}}}class mh extends ch{constructor(e,t){super(),this.R=e,this.A=t}}function yh(e){return rc(e.integerValue||e.doubleValue)}function vh(e){return bc(e)&&e.arrayValue.values?e.arrayValue.values.slice():[]}class wh{constructor(e,t){this.updateTime=e,this.exists=t}static none(){return new wh}static exists(e){return new wh(void 0,e)}static updateTime(e){return new wh(e)}get isNone(){return void 0===this.updateTime&&void 0===this.exists}isEqual(e){return this.exists===e.exists&&(this.updateTime?!!e.updateTime&&this.updateTime.isEqual(e.updateTime):!e.updateTime)}}function bh(e,t){return void 0!==e.updateTime?t.isFoundDocument()&&t.version.isEqual(e.updateTime):void 0===e.exists||e.exists===t.isFoundDocument()}class _h{}function Eh(e,t,n){e instanceof kh?function(e,t,n){const i=e.value.clone(),r=Ch(e.fieldTransforms,t,n.transformResults);i.setAll(r),t.convertToFoundDocument(n.version,i).setHasCommittedMutations()}(e,t,n):e instanceof Ah?function(e,t,n){if(!bh(e.precondition,t))return void t.convertToUnknownDocument(n.version);const i=Ch(e.fieldTransforms,t,n.transformResults),r=t.data;r.setAll(Nh(e)),r.setAll(i),t.convertToFoundDocument(n.version,r).setHasCommittedMutations()}(e,t,n):function(e,t,n){t.convertToNoDocument(n.version).setHasCommittedMutations()}(0,t,n)}function Th(e,t,n){e instanceof kh?function(e,t,n){if(!bh(e.precondition,t))return;const i=e.value.clone(),r=Rh(e.fieldTransforms,n,t);i.setAll(r),t.convertToFoundDocument(Ih(t),i).setHasLocalMutations()}(e,t,n):e instanceof Ah?function(e,t,n){if(!bh(e.precondition,t))return;const i=Rh(e.fieldTransforms,n,t),r=t.data;r.setAll(Nh(e)),r.setAll(i),t.convertToFoundDocument(Ih(t),r).setHasLocalMutations()}(e,t,n):function(e,t){bh(e.precondition,t)&&t.convertToNoDocument(Ka.min())}(e,t)}function Sh(e,t){return e.type===t.type&&!!e.key.isEqual(t.key)&&!!e.precondition.isEqual(t.precondition)&&!!function(e,t){return void 0===e&&void 0===t||!(!e||!t)&&Ha(e,t,((e,t)=>function(e,t){return e.field.isEqual(t.field)&&function(e,t){return e instanceof dh&&t instanceof dh||e instanceof ph&&t instanceof ph?Ha(e.elements,t.elements,fc):e instanceof mh&&t instanceof mh?fc(e.A,t.A):e instanceof uh&&t instanceof uh}(e.transform,t.transform)}(e,t)))}(e.fieldTransforms,t.fieldTransforms)&&(0===e.type?e.value.isEqual(t.value):1!==e.type||e.data.isEqual(t.data)&&e.fieldMask.isEqual(t.fieldMask))}function Ih(e){return e.isFoundDocument()?e.version:Ka.min()}class kh extends _h{constructor(e,t,n,i=[]){super(),this.key=e,this.value=t,this.precondition=n,this.fieldTransforms=i,this.type=0}}class Ah extends _h{constructor(e,t,n,i,r=[]){super(),this.key=e,this.data=t,this.fieldMask=n,this.precondition=i,this.fieldTransforms=r,this.type=1}}function Nh(e){const t=new Map;return e.fieldMask.fields.forEach((n=>{if(!n.isEmpty()){const i=e.data.field(n);t.set(n,i)}})),t}function Ch(e,t,n){const i=new Map;Fa(e.length===n.length);for(let r=0;r<n.length;r++){const s=e[r],o=s.transform,a=t.data.field(s.field);i.set(s.field,lh(o,a,n[r]))}return i}function Rh(e,t,n){const i=new Map;for(const r of e){const e=r.transform,s=n.data.field(r.field);i.set(r.field,hh(e,s,t))}return i}class xh extends _h{constructor(e,t){super(),this.key=e,this.precondition=t,this.type=2,this.fieldTransforms=[]}}class Dh extends _h{constructor(e,t){super(),this.key=e,this.precondition=t,this.type=3,this.fieldTransforms=[]}}class Lh{constructor(e){this.count=e}}var Oh,Ph;function Mh(e){if(void 0===e)return Pa("GRPC error has no .code"),Ra.UNKNOWN;switch(e){case Oh.OK:return Ra.OK;case Oh.CANCELLED:return Ra.CANCELLED;case Oh.UNKNOWN:return Ra.UNKNOWN;case Oh.DEADLINE_EXCEEDED:return Ra.DEADLINE_EXCEEDED;case Oh.RESOURCE_EXHAUSTED:return Ra.RESOURCE_EXHAUSTED;case Oh.INTERNAL:return Ra.INTERNAL;case Oh.UNAVAILABLE:return Ra.UNAVAILABLE;case Oh.UNAUTHENTICATED:return Ra.UNAUTHENTICATED;case Oh.INVALID_ARGUMENT:return Ra.INVALID_ARGUMENT;case Oh.NOT_FOUND:return Ra.NOT_FOUND;case Oh.ALREADY_EXISTS:return Ra.ALREADY_EXISTS;case Oh.PERMISSION_DENIED:return Ra.PERMISSION_DENIED;case Oh.FAILED_PRECONDITION:return Ra.FAILED_PRECONDITION;case Oh.ABORTED:return Ra.ABORTED;case Oh.OUT_OF_RANGE:return Ra.OUT_OF_RANGE;case Oh.UNIMPLEMENTED:return Ra.UNIMPLEMENTED;case Oh.DATA_LOSS:return Ra.DATA_LOSS;default:return Va()}}(Ph=Oh||(Oh={}))[Ph.OK=0]="OK",Ph[Ph.CANCELLED=1]="CANCELLED",Ph[Ph.UNKNOWN=2]="UNKNOWN",Ph[Ph.INVALID_ARGUMENT=3]="INVALID_ARGUMENT",Ph[Ph.DEADLINE_EXCEEDED=4]="DEADLINE_EXCEEDED",Ph[Ph.NOT_FOUND=5]="NOT_FOUND",Ph[Ph.ALREADY_EXISTS=6]="ALREADY_EXISTS",Ph[Ph.PERMISSION_DENIED=7]="PERMISSION_DENIED",Ph[Ph.UNAUTHENTICATED=16]="UNAUTHENTICATED",Ph[Ph.RESOURCE_EXHAUSTED=8]="RESOURCE_EXHAUSTED",Ph[Ph.FAILED_PRECONDITION=9]="FAILED_PRECONDITION",Ph[Ph.ABORTED=10]="ABORTED",Ph[Ph.OUT_OF_RANGE=11]="OUT_OF_RANGE",Ph[Ph.UNIMPLEMENTED=12]="UNIMPLEMENTED",Ph[Ph.INTERNAL=13]="INTERNAL",Ph[Ph.UNAVAILABLE=14]="UNAVAILABLE",Ph[Ph.DATA_LOSS=15]="DATA_LOSS";class Uh{constructor(e,t){this.comparator=e,this.root=t||Fh.EMPTY}insert(e,t){return new Uh(this.comparator,this.root.insert(e,t,this.comparator).copy(null,null,Fh.BLACK,null,null))}remove(e){return new Uh(this.comparator,this.root.remove(e,this.comparator).copy(null,null,Fh.BLACK,null,null))}get(e){let t=this.root;for(;!t.isEmpty();){const n=this.comparator(e,t.key);if(0===n)return t.value;n<0?t=t.left:n>0&&(t=t.right)}return null}indexOf(e){let t=0,n=this.root;for(;!n.isEmpty();){const i=this.comparator(e,n.key);if(0===i)return t+n.left.size;i<0?n=n.left:(t+=n.left.size+1,n=n.right)}return-1}isEmpty(){return this.root.isEmpty()}get size(){return this.root.size}minKey(){return this.root.minKey()}maxKey(){return this.root.maxKey()}inorderTraversal(e){return this.root.inorderTraversal(e)}forEach(e){this.inorderTraversal(((t,n)=>(e(t,n),!1)))}toString(){const e=[];return this.inorderTraversal(((t,n)=>(e.push(`${t}:${n}`),!1))),`{${e.join(", ")}}`}reverseTraversal(e){return this.root.reverseTraversal(e)}getIterator(){return new Vh(this.root,null,this.comparator,!1)}getIteratorFrom(e){return new Vh(this.root,e,this.comparator,!1)}getReverseIterator(){return new Vh(this.root,null,this.comparator,!0)}getReverseIteratorFrom(e){return new Vh(this.root,e,this.comparator,!0)}}class Vh{constructor(e,t,n,i){this.isReverse=i,this.nodeStack=[];let r=1;for(;!e.isEmpty();)if(r=t?n(e.key,t):1,i&&(r*=-1),r<0)e=this.isReverse?e.left:e.right;else{if(0===r){this.nodeStack.push(e);break}this.nodeStack.push(e),e=this.isReverse?e.right:e.left}}getNext(){let e=this.nodeStack.pop();const t={key:e.key,value:e.value};if(this.isReverse)for(e=e.left;!e.isEmpty();)this.nodeStack.push(e),e=e.right;else for(e=e.right;!e.isEmpty();)this.nodeStack.push(e),e=e.left;return t}hasNext(){return this.nodeStack.length>0}peek(){if(0===this.nodeStack.length)return null;const e=this.nodeStack[this.nodeStack.length-1];return{key:e.key,value:e.value}}}class Fh{constructor(e,t,n,i,r){this.key=e,this.value=t,this.color=null!=n?n:Fh.RED,this.left=null!=i?i:Fh.EMPTY,this.right=null!=r?r:Fh.EMPTY,this.size=this.left.size+1+this.right.size}copy(e,t,n,i,r){return new Fh(null!=e?e:this.key,null!=t?t:this.value,null!=n?n:this.color,null!=i?i:this.left,null!=r?r:this.right)}isEmpty(){return!1}inorderTraversal(e){return this.left.inorderTraversal(e)||e(this.key,this.value)||this.right.inorderTraversal(e)}reverseTraversal(e){return this.right.reverseTraversal(e)||e(this.key,this.value)||this.left.reverseTraversal(e)}min(){return this.left.isEmpty()?this:this.left.min()}minKey(){return this.min().key}maxKey(){return this.right.isEmpty()?this.key:this.right.maxKey()}insert(e,t,n){let i=this;const r=n(e,i.key);return i=r<0?i.copy(null,null,null,i.left.insert(e,t,n),null):0===r?i.copy(null,t,null,null,null):i.copy(null,null,null,null,i.right.insert(e,t,n)),i.fixUp()}removeMin(){if(this.left.isEmpty())return Fh.EMPTY;let e=this;return e.left.isRed()||e.left.left.isRed()||(e=e.moveRedLeft()),e=e.copy(null,null,null,e.left.removeMin(),null),e.fixUp()}remove(e,t){let n,i=this;if(t(e,i.key)<0)i.left.isEmpty()||i.left.isRed()||i.left.left.isRed()||(i=i.moveRedLeft()),i=i.copy(null,null,null,i.left.remove(e,t),null);else{if(i.left.isRed()&&(i=i.rotateRight()),i.right.isEmpty()||i.right.isRed()||i.right.left.isRed()||(i=i.moveRedRight()),0===t(e,i.key)){if(i.right.isEmpty())return Fh.EMPTY;n=i.right.min(),i=i.copy(n.key,n.value,null,null,i.right.removeMin())}i=i.copy(null,null,null,null,i.right.remove(e,t))}return i.fixUp()}isRed(){return this.color}fixUp(){let e=this;return e.right.isRed()&&!e.left.isRed()&&(e=e.rotateLeft()),e.left.isRed()&&e.left.left.isRed()&&(e=e.rotateRight()),e.left.isRed()&&e.right.isRed()&&(e=e.colorFlip()),e}moveRedLeft(){let e=this.colorFlip();return e.right.left.isRed()&&(e=e.copy(null,null,null,null,e.right.rotateRight()),e=e.rotateLeft(),e=e.colorFlip()),e}moveRedRight(){let e=this.colorFlip();return e.left.left.isRed()&&(e=e.rotateRight(),e=e.colorFlip()),e}rotateLeft(){const e=this.copy(null,null,Fh.RED,null,this.right.left);return this.right.copy(null,null,this.color,e,null)}rotateRight(){const e=this.copy(null,null,Fh.RED,this.left.right,null);return this.left.copy(null,null,this.color,null,e)}colorFlip(){const e=this.left.copy(null,null,!this.left.color,null,null),t=this.right.copy(null,null,!this.right.color,null,null);return this.copy(null,null,!this.color,e,t)}checkMaxDepth(){const e=this.check();return Math.pow(2,e)<=this.size+1}check(){if(this.isRed()&&this.left.isRed())throw Va();if(this.right.isRed())throw Va();const e=this.left.check();if(e!==this.right.check())throw Va();return e+(this.isRed()?0:1)}}Fh.EMPTY=null,Fh.RED=!0,Fh.BLACK=!1,Fh.EMPTY=new class{constructor(){this.size=0}get key(){throw Va()}get value(){throw Va()}get color(){throw Va()}get left(){throw Va()}get right(){throw Va()}copy(e,t,n,i,r){return this}insert(e,t,n){return new Fh(e,t)}remove(e,t){return this}isEmpty(){return!0}inorderTraversal(e){return!1}reverseTraversal(e){return!1}minKey(){return null}maxKey(){return null}isRed(){return!1}checkMaxDepth(){return!0}check(){return 0}};class jh{constructor(e){this.comparator=e,this.data=new Uh(this.comparator)}has(e){return null!==this.data.get(e)}first(){return this.data.minKey()}last(){return this.data.maxKey()}get size(){return this.data.size}indexOf(e){return this.data.indexOf(e)}forEach(e){this.data.inorderTraversal(((t,n)=>(e(t),!1)))}forEachInRange(e,t){const n=this.data.getIteratorFrom(e[0]);for(;n.hasNext();){const i=n.getNext();if(this.comparator(i.key,e[1])>=0)return;t(i.key)}}forEachWhile(e,t){let n;for(n=void 0!==t?this.data.getIteratorFrom(t):this.data.getIterator();n.hasNext();)if(!e(n.getNext().key))return}firstAfterOrEqual(e){const t=this.data.getIteratorFrom(e);return t.hasNext()?t.getNext().key:null}getIterator(){return new qh(this.data.getIterator())}getIteratorFrom(e){return new qh(this.data.getIteratorFrom(e))}add(e){return this.copy(this.data.remove(e).insert(e,!0))}delete(e){return this.has(e)?this.copy(this.data.remove(e)):this}isEmpty(){return this.data.isEmpty()}unionWith(e){let t=this;return t.size<e.size&&(t=e,e=this),e.forEach((e=>{t=t.add(e)})),t}isEqual(e){if(!(e instanceof jh))return!1;if(this.size!==e.size)return!1;const t=this.data.getIterator(),n=e.data.getIterator();for(;t.hasNext();){const e=t.getNext().key,i=n.getNext().key;if(0!==this.comparator(e,i))return!1}return!0}toArray(){const e=[];return this.forEach((t=>{e.push(t)})),e}toString(){const e=[];return this.forEach((t=>e.push(t))),"SortedSet("+e.toString()+")"}copy(e){const t=new jh(this.comparator);return t.data=e,t}}class qh{constructor(e){this.iter=e}getNext(){return this.iter.getNext().key}hasNext(){return this.iter.hasNext()}}const Bh=new Uh(uc.comparator);function $h(){return Bh}const Hh=new Uh(uc.comparator);function zh(){return Hh}new Uh(uc.comparator);const Kh=new jh(uc.comparator);function Gh(...e){let t=Kh;for(const n of e)t=t.add(n);return t}const Wh=new jh($a);function Qh(){return Wh}class Jh{constructor(e,t,n,i,r){this.snapshotVersion=e,this.targetChanges=t,this.targetMismatches=n,this.documentUpdates=i,this.resolvedLimboDocuments=r}static createSynthesizedRemoteEventForCurrentChange(e,t){const n=new Map;return n.set(e,Xh.createSynthesizedTargetChangeForCurrentChange(e,t)),new Jh(Ka.min(),n,Qh(),$h(),Gh())}}class Xh{constructor(e,t,n,i,r){this.resumeToken=e,this.current=t,this.addedDocuments=n,this.modifiedDocuments=i,this.removedDocuments=r}static createSynthesizedTargetChangeForCurrentChange(e,t){return new Xh(tc.EMPTY_BYTE_STRING,t,Gh(),Gh(),Gh())}}class Yh{constructor(e,t,n,i){this.P=e,this.removedTargetIds=t,this.key=n,this.v=i}}class Zh{constructor(e,t){this.targetId=e,this.V=t}}class el{constructor(e,t,n=tc.EMPTY_BYTE_STRING,i=null){this.state=e,this.targetIds=t,this.resumeToken=n,this.cause=i}}class tl{constructor(){this.S=0,this.D=rl(),this.C=tc.EMPTY_BYTE_STRING,this.N=!1,this.k=!0}get current(){return this.N}get resumeToken(){return this.C}get $(){return 0!==this.S}get O(){return this.k}F(e){e.approximateByteSize()>0&&(this.k=!0,this.C=e)}M(){let e=Gh(),t=Gh(),n=Gh();return this.D.forEach(((i,r)=>{switch(r){case 0:e=e.add(i);break;case 2:t=t.add(i);break;case 1:n=n.add(i);break;default:Va()}})),new Xh(this.C,this.N,e,t,n)}L(){this.k=!1,this.D=rl()}B(e,t){this.k=!0,this.D=this.D.insert(e,t)}U(e){this.k=!0,this.D=this.D.remove(e)}q(){this.S+=1}K(){this.S-=1}j(){this.k=!0,this.N=!0}}class nl{constructor(e){this.W=e,this.G=new Map,this.H=$h(),this.J=il(),this.Y=new jh($a)}X(e){for(const t of e.P)e.v&&e.v.isFoundDocument()?this.Z(t,e.v):this.tt(t,e.key,e.v);for(const t of e.removedTargetIds)this.tt(t,e.key,e.v)}et(e){this.forEachTarget(e,(t=>{const n=this.nt(t);switch(e.state){case 0:this.st(t)&&n.F(e.resumeToken);break;case 1:n.K(),n.$||n.L(),n.F(e.resumeToken);break;case 2:n.K(),n.$||this.removeTarget(t);break;case 3:this.st(t)&&(n.j(),n.F(e.resumeToken));break;case 4:this.st(t)&&(this.it(t),n.F(e.resumeToken));break;default:Va()}}))}forEachTarget(e,t){e.targetIds.length>0?e.targetIds.forEach(t):this.G.forEach(((e,n)=>{this.st(n)&&t(n)}))}rt(e){const t=e.targetId,n=e.V.count,i=this.ot(t);if(i){const e=i.target;if(xc(e))if(0===n){const n=new uc(e.path);this.tt(t,n,kc.newNoDocument(n,Ka.min()))}else Fa(1===n);else this.ct(t)!==n&&(this.it(t),this.Y=this.Y.add(t))}}ut(e){const t=new Map;this.G.forEach(((n,i)=>{const r=this.ot(i);if(r){if(n.current&&xc(r.target)){const t=new uc(r.target.path);null!==this.H.get(t)||this.at(i,t)||this.tt(i,t,kc.newNoDocument(t,e))}n.O&&(t.set(i,n.M()),n.L())}}));let n=Gh();this.J.forEach(((e,t)=>{let i=!0;t.forEachWhile((e=>{const t=this.ot(e);return!t||2===t.purpose||(i=!1,!1)})),i&&(n=n.add(e))}));const i=new Jh(e,t,this.Y,this.H,n);return this.H=$h(),this.J=il(),this.Y=new jh($a),i}Z(e,t){if(!this.st(e))return;const n=this.at(e,t.key)?2:0;this.nt(e).B(t.key,n),this.H=this.H.insert(t.key,t),this.J=this.J.insert(t.key,this.ht(t.key).add(e))}tt(e,t,n){if(!this.st(e))return;const i=this.nt(e);this.at(e,t)?i.B(t,1):i.U(t),this.J=this.J.insert(t,this.ht(t).delete(e)),n&&(this.H=this.H.insert(t,n))}removeTarget(e){this.G.delete(e)}ct(e){const t=this.nt(e).M();return this.W.getRemoteKeysForTarget(e).size+t.addedDocuments.size-t.removedDocuments.size}q(e){this.nt(e).q()}nt(e){let t=this.G.get(e);return t||(t=new tl,this.G.set(e,t)),t}ht(e){let t=this.J.get(e);return t||(t=new jh($a),this.J=this.J.insert(e,t)),t}st(e){const t=null!==this.ot(e);return t||Oa("WatchChangeAggregator","Detected inactive target",e),t}ot(e){const t=this.G.get(e);return t&&t.$?null:this.W.lt(e)}it(e){this.G.set(e,new tl),this.W.getRemoteKeysForTarget(e).forEach((t=>{this.tt(e,t,null)}))}at(e,t){return this.W.getRemoteKeysForTarget(e).has(t)}}function il(){return new Uh(uc.comparator)}function rl(){return new Uh(uc.comparator)}const sl={asc:"ASCENDING",desc:"DESCENDING"},ol={"<":"LESS_THAN","<=":"LESS_THAN_OR_EQUAL",">":"GREATER_THAN",">=":"GREATER_THAN_OR_EQUAL","==":"EQUAL","!=":"NOT_EQUAL","array-contains":"ARRAY_CONTAINS",in:"IN","not-in":"NOT_IN","array-contains-any":"ARRAY_CONTAINS_ANY"};class al{constructor(e,t){this.databaseId=e,this.I=t}}function cl(e,t){return e.I?`${new Date(1e3*t.seconds).toISOString().replace(/\.\d*/,"").replace("Z","")}.${("000000000"+t.nanoseconds).slice(-9)}Z`:{seconds:""+t.seconds,nanos:t.nanoseconds}}function hl(e,t){return e.I?t.toBase64():t.toUint8Array()}function ll(e,t){return cl(e,t.toTimestamp())}function ul(e){return Fa(!!e),Ka.fromTimestamp(function(e){const t=ic(e);return new za(t.seconds,t.nanos)}(e))}function dl(e,t){return function(e){return new Xa(["projects",e.projectId,"databases",e.database])}(e).child("documents").child(t).canonicalString()}function fl(e){const t=Xa.fromString(e);return Fa(Ll(t)),t}function pl(e,t){return dl(e.databaseId,t.path)}function gl(e,t){const n=fl(t);if(n.get(1)!==e.databaseId.projectId)throw new xa(Ra.INVALID_ARGUMENT,"Tried to deserialize key from different project: "+n.get(1)+" vs "+e.databaseId.projectId);if(n.get(3)!==e.databaseId.database)throw new xa(Ra.INVALID_ARGUMENT,"Tried to deserialize key from different database: "+n.get(3)+" vs "+e.databaseId.database);return new uc(vl(n))}function ml(e,t){return dl(e.databaseId,t)}function yl(e){return new Xa(["projects",e.databaseId.projectId,"databases",e.databaseId.database]).canonicalString()}function vl(e){return Fa(e.length>4&&"documents"===e.get(4)),e.popFirst(5)}function wl(e,t,n){return{name:pl(e,t),fields:n.value.mapValue.fields}}function bl(e,t){return{documents:[ml(e,t.path)]}}function _l(e,t){const n={structuredQuery:{}},i=t.path;null!==t.collectionGroup?(n.parent=ml(e,i),n.structuredQuery.from=[{collectionId:t.collectionGroup,allDescendants:!0}]):(n.parent=ml(e,i.popLast()),n.structuredQuery.from=[{collectionId:i.lastSegment()}]);const r=function(e){if(0===e.length)return;const t=e.map((e=>function(e){if("=="===e.op){if(Ec(e.value))return{unaryFilter:{field:Nl(e.field),op:"IS_NAN"}};if(_c(e.value))return{unaryFilter:{field:Nl(e.field),op:"IS_NULL"}}}else if("!="===e.op){if(Ec(e.value))return{unaryFilter:{field:Nl(e.field),op:"IS_NOT_NAN"}};if(_c(e.value))return{unaryFilter:{field:Nl(e.field),op:"IS_NOT_NULL"}}}return{fieldFilter:{field:Nl(e.field),op:Al(e.op),value:e.value}}}(e)));return 1===t.length?t[0]:{compositeFilter:{op:"AND",filters:t}}}(t.filters);r&&(n.structuredQuery.where=r);const s=function(e){if(0!==e.length)return e.map((e=>function(e){return{field:Nl(e.field),direction:kl(e.dir)}}(e)))}(t.orderBy);s&&(n.structuredQuery.orderBy=s);const o=function(e,t){return e.I||hc(t)?t:{value:t}}(e,t.limit);return null!==o&&(n.structuredQuery.limit=o),t.startAt&&(n.structuredQuery.startAt=Sl(t.startAt)),t.endAt&&(n.structuredQuery.endAt=Sl(t.endAt)),n}function El(e){let t=function(e){const t=fl(e);return 4===t.length?Xa.emptyPath():vl(t)}(e.parent);const n=e.structuredQuery,i=n.from?n.from.length:0;let r=null;if(i>0){Fa(1===i);const e=n.from[0];e.allDescendants?r=e.collectionId:t=t.child(e.collectionId)}let s=[];n.where&&(s=Tl(n.where));let o=[];n.orderBy&&(o=n.orderBy.map((e=>function(e){return new $c(Cl(e.field),function(e){switch(e){case"ASCENDING":return"asc";case"DESCENDING":return"desc";default:return}}(e.direction))}(e))));let a=null;n.limit&&(a=function(e){let t;return t="object"==typeof e?e.value:e,hc(t)?null:t}(n.limit));let c=null;n.startAt&&(c=Il(n.startAt));let h=null;return n.endAt&&(h=Il(n.endAt)),function(e,t,n,i,r,s,o,a){return new Gc(e,t,n,i,r,s,o,a)}(t,r,o,s,a,"F",c,h)}function Tl(e){return e?void 0!==e.unaryFilter?[xl(e)]:void 0!==e.fieldFilter?[Rl(e)]:void 0!==e.compositeFilter?e.compositeFilter.filters.map((e=>Tl(e))).reduce(((e,t)=>e.concat(t))):Va():[]}function Sl(e){return{before:e.before,values:e.position}}function Il(e){const t=!!e.before,n=e.values||[];return new qc(n,t)}function kl(e){return sl[e]}function Al(e){return ol[e]}function Nl(e){return{fieldPath:e.canonicalString()}}function Cl(e){return Za.fromServerFormat(e.fieldPath)}function Rl(e){return Dc.create(Cl(e.fieldFilter.field),function(e){switch(e){case"EQUAL":return"==";case"NOT_EQUAL":return"!=";case"GREATER_THAN":return">";case"GREATER_THAN_OR_EQUAL":return">=";case"LESS_THAN":return"<";case"LESS_THAN_OR_EQUAL":return"<=";case"ARRAY_CONTAINS":return"array-contains";case"IN":return"in";case"NOT_IN":return"not-in";case"ARRAY_CONTAINS_ANY":return"array-contains-any";case"OPERATOR_UNSPECIFIED":default:return Va()}}(e.fieldFilter.op),e.fieldFilter.value)}function xl(e){switch(e.unaryFilter.op){case"IS_NAN":const t=Cl(e.unaryFilter.field);return Dc.create(t,"==",{doubleValue:NaN});case"IS_NULL":const n=Cl(e.unaryFilter.field);return Dc.create(n,"==",{nullValue:"NULL_VALUE"});case"IS_NOT_NAN":const i=Cl(e.unaryFilter.field);return Dc.create(i,"!=",{doubleValue:NaN});case"IS_NOT_NULL":const r=Cl(e.unaryFilter.field);return Dc.create(r,"!=",{nullValue:"NULL_VALUE"});case"OPERATOR_UNSPECIFIED":default:return Va()}}function Dl(e){const t=[];return e.fields.forEach((e=>t.push(e.canonicalString()))),{fieldPaths:t}}function Ll(e){return e.length>=4&&"projects"===e.get(0)&&"databases"===e.get(2)}class Ol{constructor(){this.promise=new Promise(((e,t)=>{this.resolve=e,this.reject=t}))}}class Pl{constructor(e){this.nextCallback=null,this.catchCallback=null,this.result=void 0,this.error=void 0,this.isDone=!1,this.callbackAttached=!1,e((e=>{this.isDone=!0,this.result=e,this.nextCallback&&this.nextCallback(e)}),(e=>{this.isDone=!0,this.error=e,this.catchCallback&&this.catchCallback(e)}))}catch(e){return this.next(void 0,e)}next(e,t){return this.callbackAttached&&Va(),this.callbackAttached=!0,this.isDone?this.error?this.wrapFailure(t,this.error):this.wrapSuccess(e,this.result):new Pl(((n,i)=>{this.nextCallback=t=>{this.wrapSuccess(e,t).next(n,i)},this.catchCallback=e=>{this.wrapFailure(t,e).next(n,i)}}))}toPromise(){return new Promise(((e,t)=>{this.next(e,t)}))}wrapUserFunction(e){try{const t=e();return t instanceof Pl?t:Pl.resolve(t)}catch(e){return Pl.reject(e)}}wrapSuccess(e,t){return e?this.wrapUserFunction((()=>e(t))):Pl.resolve(t)}wrapFailure(e,t){return e?this.wrapUserFunction((()=>e(t))):Pl.reject(t)}static resolve(e){return new Pl(((t,n)=>{t(e)}))}static reject(e){return new Pl(((t,n)=>{n(e)}))}static waitFor(e){return new Pl(((t,n)=>{let i=0,r=0,s=!1;e.forEach((e=>{++i,e.next((()=>{++r,s&&r===i&&t()}),(e=>n(e)))})),s=!0,r===i&&t()}))}static or(e){let t=Pl.resolve(!1);for(const n of e)t=t.next((e=>e?Pl.resolve(e):n()));return t}static forEach(e,t){const n=[];return e.forEach(((e,i)=>{n.push(t.call(this,e,i))})),this.waitFor(n)}}function Ml(e){return"IndexedDbTransactionError"===e.name}class Ul{constructor(e,t,n,i){this.batchId=e,this.localWriteTime=t,this.baseMutations=n,this.mutations=i}applyToRemoteDocument(e,t){const n=t.mutationResults;for(let t=0;t<this.mutations.length;t++){const i=this.mutations[t];i.key.isEqual(e.key)&&Eh(i,e,n[t])}}applyToLocalView(e){for(const t of this.baseMutations)t.key.isEqual(e.key)&&Th(t,e,this.localWriteTime);for(const t of this.mutations)t.key.isEqual(e.key)&&Th(t,e,this.localWriteTime)}applyToLocalDocumentSet(e){this.mutations.forEach((t=>{const n=e.get(t.key),i=n;this.applyToLocalView(i),n.isValidDocument()||i.convertToNoDocument(Ka.min())}))}keys(){return this.mutations.reduce(((e,t)=>e.add(t.key)),Gh())}isEqual(e){return this.batchId===e.batchId&&Ha(this.mutations,e.mutations,((e,t)=>Sh(e,t)))&&Ha(this.baseMutations,e.baseMutations,((e,t)=>Sh(e,t)))}}class Vl{constructor(e,t,n,i,r=Ka.min(),s=Ka.min(),o=tc.EMPTY_BYTE_STRING){this.target=e,this.targetId=t,this.purpose=n,this.sequenceNumber=i,this.snapshotVersion=r,this.lastLimboFreeSnapshotVersion=s,this.resumeToken=o}withSequenceNumber(e){return new Vl(this.target,this.targetId,this.purpose,e,this.snapshotVersion,this.lastLimboFreeSnapshotVersion,this.resumeToken)}withResumeToken(e,t){return new Vl(this.target,this.targetId,this.purpose,this.sequenceNumber,t,this.lastLimboFreeSnapshotVersion,e)}withLastLimboFreeSnapshotVersion(e){return new Vl(this.target,this.targetId,this.purpose,this.sequenceNumber,this.snapshotVersion,e,this.resumeToken)}}class Fl{constructor(e){this.Lt=e}}function jl(e){const t=El({parent:e.parent,structuredQuery:e.structuredQuery});return"LAST"===e.limitType?function(e,t,n){return new Gc(e.path,e.collectionGroup,e.explicitOrderBy.slice(),e.filters.slice(),t,n,e.startAt,e.endAt)}(t,t.limit,"L"):t}class ql{constructor(){this.Bt=new Bl}addToCollectionParentIndex(e,t){return this.Bt.add(t),Pl.resolve()}getCollectionParents(e,t){return Pl.resolve(this.Bt.getEntries(t))}}class Bl{constructor(){this.index={}}add(e){const t=e.lastSegment(),n=e.popLast(),i=this.index[t]||new jh(Xa.comparator),r=!i.has(n);return this.index[t]=i.add(n),r}has(e){const t=e.lastSegment(),n=e.popLast(),i=this.index[t];return i&&i.has(n)}getEntries(e){return(this.index[e]||new jh(Xa.comparator)).toArray()}}class $l{constructor(e){this.Ht=e}next(){return this.Ht+=2,this.Ht}static Jt(){return new $l(0)}static Yt(){return new $l(-1)}}async function Hl(e){if(e.code!==Ra.FAILED_PRECONDITION||"The current tab is not in the required state to perform this operation. It might be necessary to refresh the browser tab."!==e.message)throw e;Oa("LocalStore","Unexpectedly lost primary lease")}class zl{constructor(e,t){this.mapKeyFn=e,this.equalsFn=t,this.inner={}}get(e){const t=this.mapKeyFn(e),n=this.inner[t];if(void 0!==n)for(const[t,i]of n)if(this.equalsFn(t,e))return i}has(e){return void 0!==this.get(e)}set(e,t){const n=this.mapKeyFn(e),i=this.inner[n];if(void 0!==i){for(let n=0;n<i.length;n++)if(this.equalsFn(i[n][0],e))return void(i[n]=[e,t]);i.push([e,t])}else this.inner[n]=[[e,t]]}delete(e){const t=this.mapKeyFn(e),n=this.inner[t];if(void 0===n)return!1;for(let i=0;i<n.length;i++)if(this.equalsFn(n[i][0],e))return 1===n.length?delete this.inner[t]:n.splice(i,1),!0;return!1}forEach(e){Wa(this.inner,((t,n)=>{for(const[t,i]of n)e(t,i)}))}isEmpty(){return Qa(this.inner)}}class Kl{constructor(e,t,n){this.qe=e,this._n=t,this.qt=n}mn(e,t){return this._n.getAllMutationBatchesAffectingDocumentKey(e,t).next((n=>this.gn(e,t,n)))}gn(e,t,n){return this.qe.getEntry(e,t).next((e=>{for(const t of n)t.applyToLocalView(e);return e}))}yn(e,t){e.forEach(((e,n)=>{for(const e of t)e.applyToLocalView(n)}))}pn(e,t){return this.qe.getEntries(e,t).next((t=>this.En(e,t).next((()=>t))))}En(e,t){return this._n.getAllMutationBatchesAffectingDocumentKeys(e,t).next((e=>this.yn(t,e)))}getDocumentsMatchingQuery(e,t,n){return function(e){return uc.isDocumentKey(e.path)&&null===e.collectionGroup&&0===e.filters.length}(t)?this.Tn(e,t.path):function(e){return null!==e.collectionGroup}(t)?this.In(e,t,n):this.An(e,t,n)}Tn(e,t){return this.mn(e,new uc(t)).next((e=>{let t=zh();return e.isFoundDocument()&&(t=t.insert(e.key,e)),t}))}In(e,t,n){const i=t.collectionGroup;let r=zh();return this.qt.getCollectionParents(e,i).next((s=>Pl.forEach(s,(s=>{const o=function(e,t){return new Gc(t,null,e.explicitOrderBy.slice(),e.filters.slice(),e.limit,e.limitType,e.startAt,e.endAt)}(t,s.child(i));return this.An(e,o,n).next((e=>{e.forEach(((e,t)=>{r=r.insert(e,t)}))}))})).next((()=>r))))}An(e,t,n){let i,r;return this.qe.getDocumentsMatchingQuery(e,t,n).next((n=>(i=n,this._n.getAllMutationBatchesAffectingQuery(e,t)))).next((t=>(r=t,this.Rn(e,r,i).next((e=>{i=e;for(const e of r)for(const t of e.mutations){const n=t.key;let r=i.get(n);null==r&&(r=kc.newInvalidDocument(n),i=i.insert(n,r)),Th(t,r,e.localWriteTime),r.isFoundDocument()||(i=i.remove(n))}}))))).next((()=>(i.forEach(((e,n)=>{nh(t,n)||(i=i.remove(e))})),i)))}Rn(e,t,n){let i=Gh();for(const e of t)for(const t of e.mutations)t instanceof Ah&&null===n.get(t.key)&&(i=i.add(t.key));let r=n;return this.qe.getEntries(e,i).next((e=>(e.forEach(((e,t)=>{t.isFoundDocument()&&(r=r.insert(e,t))})),r)))}}class Gl{constructor(e,t,n,i){this.targetId=e,this.fromCache=t,this.Pn=n,this.bn=i}static vn(e,t){let n=Gh(),i=Gh();for(const e of t.docChanges)switch(e.type){case 0:n=n.add(e.doc.key);break;case 1:i=i.add(e.doc.key)}return new Gl(e,t.fromCache,n,i)}}class Wl{Vn(e){this.Sn=e}getDocumentsMatchingQuery(e,t,n,i){return function(e){return 0===e.filters.length&&null===e.limit&&null==e.startAt&&null==e.endAt&&(0===e.explicitOrderBy.length||1===e.explicitOrderBy.length&&e.explicitOrderBy[0].field.isKeyField())}(t)||n.isEqual(Ka.min())?this.Dn(e,t):this.Sn.pn(e,i).next((r=>{const s=this.Cn(t,r);return(Qc(t)||Jc(t))&&this.Nn(t.limitType,s,i,n)?this.Dn(e,t):(La()<=Oe.DEBUG&&Oa("QueryEngine","Re-using previous result from %s to execute query: %s",n.toString(),th(t)),this.Sn.getDocumentsMatchingQuery(e,t,n).next((e=>(s.forEach((t=>{e=e.insert(t.key,t)})),e))))}))}Cn(e,t){let n=new jh(ih(e));return t.forEach(((t,i)=>{nh(e,i)&&(n=n.add(i))})),n}Nn(e,t,n,i){if(n.size!==t.size)return!0;const r="F"===e?t.last():t.first();return!!r&&(r.hasPendingWrites||r.version.compareTo(i)>0)}Dn(e,t){return La()<=Oe.DEBUG&&Oa("QueryEngine","Using full collection scan to execute query:",th(t)),this.Sn.getDocumentsMatchingQuery(e,t,Ka.min())}}class Ql{constructor(e,t,n,i){this.persistence=e,this.xn=t,this.R=i,this.kn=new Uh($a),this.$n=new zl((e=>Cc(e)),Rc),this.On=Ka.min(),this._n=e.getMutationQueue(n),this.Fn=e.getRemoteDocumentCache(),this.Ue=e.getTargetCache(),this.Mn=new Kl(this.Fn,this._n,this.persistence.getIndexManager()),this.Ke=e.getBundleCache(),this.xn.Vn(this.Mn)}collectGarbage(e){return this.persistence.runTransaction("Collect garbage","readwrite-primary",(t=>e.collect(t,this.kn)))}}async function Jl(e,t){const n=ja(e);let i=n._n,r=n.Mn;const s=await n.persistence.runTransaction("Handle user change","readonly",(e=>{let s;return n._n.getAllMutationBatches(e).next((o=>(s=o,i=n.persistence.getMutationQueue(t),r=new Kl(n.Fn,i,n.persistence.getIndexManager()),i.getAllMutationBatches(e)))).next((t=>{const n=[],i=[];let o=Gh();for(const e of s){n.push(e.batchId);for(const t of e.mutations)o=o.add(t.key)}for(const e of t){i.push(e.batchId);for(const t of e.mutations)o=o.add(t.key)}return r.pn(e,o).next((e=>({Ln:e,removedBatchIds:n,addedBatchIds:i})))}))}));return n._n=i,n.Mn=r,n.xn.Vn(n.Mn),s}function Xl(e){const t=ja(e);return t.persistence.runTransaction("Get last remote snapshot version","readonly",(e=>t.Ue.getLastRemoteSnapshotVersion(e)))}function Yl(e,t){const n=ja(e),i=t.snapshotVersion;let r=n.kn;return n.persistence.runTransaction("Apply remote event","readwrite-primary",(e=>{const s=n.Fn.newChangeBuffer({trackRemovals:!0});r=n.kn;const o=[];t.targetChanges.forEach(((t,s)=>{const a=r.get(s);if(!a)return;o.push(n.Ue.removeMatchingKeys(e,t.removedDocuments,s).next((()=>n.Ue.addMatchingKeys(e,t.addedDocuments,s))));const c=t.resumeToken;if(c.approximateByteSize()>0){const h=a.withResumeToken(c,i).withSequenceNumber(e.currentSequenceNumber);r=r.insert(s,h),function(e,t,n){return Fa(t.resumeToken.approximateByteSize()>0),0===e.resumeToken.approximateByteSize()||(t.snapshotVersion.toMicroseconds()-e.snapshotVersion.toMicroseconds()>=3e8||n.addedDocuments.size+n.modifiedDocuments.size+n.removedDocuments.size>0)}(a,h,t)&&o.push(n.Ue.updateTargetData(e,h))}}));let a=$h();if(t.documentUpdates.forEach(((i,r)=>{t.resolvedLimboDocuments.has(i)&&o.push(n.persistence.referenceDelegate.updateLimboDocument(e,i))})),o.push(function(e,t,n,i,r){let s=Gh();return n.forEach((e=>s=s.add(e))),t.getEntries(e,s).next((e=>{let s=$h();return n.forEach(((n,o)=>{const a=e.get(n),c=(null==r?void 0:r.get(n))||i;o.isNoDocument()&&o.version.isEqual(Ka.min())?(t.removeEntry(n,c),s=s.insert(n,o)):!a.isValidDocument()||o.version.compareTo(a.version)>0||0===o.version.compareTo(a.version)&&a.hasPendingWrites?(t.addEntry(o,c),s=s.insert(n,o)):Oa("LocalStore","Ignoring outdated watch update for ",n,". Current version:",a.version," Watch version:",o.version)})),s}))}(e,s,t.documentUpdates,i,void 0).next((e=>{a=e}))),!i.isEqual(Ka.min())){const t=n.Ue.getLastRemoteSnapshotVersion(e).next((t=>n.Ue.setTargetsMetadata(e,e.currentSequenceNumber,i)));o.push(t)}return Pl.waitFor(o).next((()=>s.apply(e))).next((()=>n.Mn.En(e,a))).next((()=>a))})).then((e=>(n.kn=r,e)))}async function Zl(e,t,n){const i=ja(e),r=i.kn.get(t),s=n?"readwrite":"readwrite-primary";try{n||await i.persistence.runTransaction("Release target",s,(e=>i.persistence.referenceDelegate.removeTarget(e,r)))}catch(e){if(!Ml(e))throw e;Oa("LocalStore",`Failed to update sequence numbers for target ${t}: ${e}`)}i.kn=i.kn.remove(t),i.$n.delete(r.target)}function eu(e,t,n){const i=ja(e);let r=Ka.min(),s=Gh();return i.persistence.runTransaction("Execute query","readonly",(e=>function(e,t,n){const i=ja(e),r=i.$n.get(n);return void 0!==r?Pl.resolve(i.kn.get(r)):i.Ue.getTargetData(t,n)}(i,e,Yc(t)).next((t=>{if(t)return r=t.lastLimboFreeSnapshotVersion,i.Ue.getMatchingKeysForTargetId(e,t.targetId).next((e=>{s=e}))})).next((()=>i.xn.getDocumentsMatchingQuery(e,t,n?r:Ka.min(),n?s:Gh()))).next((e=>({documents:e,Bn:s})))))}class tu{constructor(e){this.R=e,this.jn=new Map,this.Qn=new Map}getBundleMetadata(e,t){return Pl.resolve(this.jn.get(t))}saveBundleMetadata(e,t){var n;return this.jn.set(t.id,{id:(n=t).id,version:n.version,createTime:ul(n.createTime)}),Pl.resolve()}getNamedQuery(e,t){return Pl.resolve(this.Qn.get(t))}saveNamedQuery(e,t){return this.Qn.set(t.name,function(e){return{name:e.name,query:jl(e.bundledQuery),readTime:ul(e.readTime)}}(t)),Pl.resolve()}}class nu{constructor(){this.Wn=new jh(iu.Gn),this.zn=new jh(iu.Hn)}isEmpty(){return this.Wn.isEmpty()}addReference(e,t){const n=new iu(e,t);this.Wn=this.Wn.add(n),this.zn=this.zn.add(n)}Jn(e,t){e.forEach((e=>this.addReference(e,t)))}removeReference(e,t){this.Yn(new iu(e,t))}Xn(e,t){e.forEach((e=>this.removeReference(e,t)))}Zn(e){const t=new uc(new Xa([])),n=new iu(t,e),i=new iu(t,e+1),r=[];return this.zn.forEachInRange([n,i],(e=>{this.Yn(e),r.push(e.key)})),r}ts(){this.Wn.forEach((e=>this.Yn(e)))}Yn(e){this.Wn=this.Wn.delete(e),this.zn=this.zn.delete(e)}es(e){const t=new uc(new Xa([])),n=new iu(t,e),i=new iu(t,e+1);let r=Gh();return this.zn.forEachInRange([n,i],(e=>{r=r.add(e.key)})),r}containsKey(e){const t=new iu(e,0),n=this.Wn.firstAfterOrEqual(t);return null!==n&&e.isEqual(n.key)}}class iu{constructor(e,t){this.key=e,this.ns=t}static Gn(e,t){return uc.comparator(e.key,t.key)||$a(e.ns,t.ns)}static Hn(e,t){return $a(e.ns,t.ns)||uc.comparator(e.key,t.key)}}class ru{constructor(e,t){this.qt=e,this.referenceDelegate=t,this._n=[],this.ss=1,this.rs=new jh(iu.Gn)}checkEmpty(e){return Pl.resolve(0===this._n.length)}addMutationBatch(e,t,n,i){const r=this.ss;this.ss++,this._n.length>0&&this._n[this._n.length-1];const s=new Ul(r,t,n,i);this._n.push(s);for(const t of i)this.rs=this.rs.add(new iu(t.key,r)),this.qt.addToCollectionParentIndex(e,t.key.path.popLast());return Pl.resolve(s)}lookupMutationBatch(e,t){return Pl.resolve(this.os(t))}getNextMutationBatchAfterBatchId(e,t){const n=t+1,i=this.cs(n),r=i<0?0:i;return Pl.resolve(this._n.length>r?this._n[r]:null)}getHighestUnacknowledgedBatchId(){return Pl.resolve(0===this._n.length?-1:this.ss-1)}getAllMutationBatches(e){return Pl.resolve(this._n.slice())}getAllMutationBatchesAffectingDocumentKey(e,t){const n=new iu(t,0),i=new iu(t,Number.POSITIVE_INFINITY),r=[];return this.rs.forEachInRange([n,i],(e=>{const t=this.os(e.ns);r.push(t)})),Pl.resolve(r)}getAllMutationBatchesAffectingDocumentKeys(e,t){let n=new jh($a);return t.forEach((e=>{const t=new iu(e,0),i=new iu(e,Number.POSITIVE_INFINITY);this.rs.forEachInRange([t,i],(e=>{n=n.add(e.ns)}))})),Pl.resolve(this.us(n))}getAllMutationBatchesAffectingQuery(e,t){const n=t.path,i=n.length+1;let r=n;uc.isDocumentKey(r)||(r=r.child(""));const s=new iu(new uc(r),0);let o=new jh($a);return this.rs.forEachWhile((e=>{const t=e.key.path;return!!n.isPrefixOf(t)&&(t.length===i&&(o=o.add(e.ns)),!0)}),s),Pl.resolve(this.us(o))}us(e){const t=[];return e.forEach((e=>{const n=this.os(e);null!==n&&t.push(n)})),t}removeMutationBatch(e,t){Fa(0===this.hs(t.batchId,"removed")),this._n.shift();let n=this.rs;return Pl.forEach(t.mutations,(i=>{const r=new iu(i.key,t.batchId);return n=n.delete(r),this.referenceDelegate.markPotentiallyOrphaned(e,i.key)})).next((()=>{this.rs=n}))}Gt(e){}containsKey(e,t){const n=new iu(t,0),i=this.rs.firstAfterOrEqual(n);return Pl.resolve(t.isEqual(i&&i.key))}performConsistencyCheck(e){return this._n.length,Pl.resolve()}hs(e,t){return this.cs(e)}cs(e){return 0===this._n.length?0:e-this._n[0].batchId}os(e){const t=this.cs(e);return t<0||t>=this._n.length?null:this._n[t]}}class su{constructor(e,t){this.qt=e,this.ls=t,this.docs=new Uh(uc.comparator),this.size=0}addEntry(e,t,n){const i=t.key,r=this.docs.get(i),s=r?r.size:0,o=this.ls(t);return this.docs=this.docs.insert(i,{document:t.clone(),size:o,readTime:n}),this.size+=o-s,this.qt.addToCollectionParentIndex(e,i.path.popLast())}removeEntry(e){const t=this.docs.get(e);t&&(this.docs=this.docs.remove(e),this.size-=t.size)}getEntry(e,t){const n=this.docs.get(t);return Pl.resolve(n?n.document.clone():kc.newInvalidDocument(t))}getEntries(e,t){let n=$h();return t.forEach((e=>{const t=this.docs.get(e);n=n.insert(e,t?t.document.clone():kc.newInvalidDocument(e))})),Pl.resolve(n)}getDocumentsMatchingQuery(e,t,n){let i=$h();const r=new uc(t.path.child("")),s=this.docs.getIteratorFrom(r);for(;s.hasNext();){const{key:e,value:{document:r,readTime:o}}=s.getNext();if(!t.path.isPrefixOf(e.path))break;o.compareTo(n)<=0||nh(t,r)&&(i=i.insert(r.key,r.clone()))}return Pl.resolve(i)}fs(e,t){return Pl.forEach(this.docs,(e=>t(e)))}newChangeBuffer(e){return new ou(this)}getSize(e){return Pl.resolve(this.size)}}class ou extends class{constructor(){this.changes=new zl((e=>e.toString()),((e,t)=>e.isEqual(t))),this.changesApplied=!1}getReadTime(e){const t=this.changes.get(e);return t?t.readTime:Ka.min()}addEntry(e,t){this.assertNotApplied(),this.changes.set(e.key,{document:e,readTime:t})}removeEntry(e,t=null){this.assertNotApplied(),this.changes.set(e,{document:kc.newInvalidDocument(e),readTime:t})}getEntry(e,t){this.assertNotApplied();const n=this.changes.get(t);return void 0!==n?Pl.resolve(n.document):this.getFromCache(e,t)}getEntries(e,t){return this.getAllFromCache(e,t)}apply(e){return this.assertNotApplied(),this.changesApplied=!0,this.applyChanges(e)}assertNotApplied(){}}{constructor(e){super(),this.Ie=e}applyChanges(e){const t=[];return this.changes.forEach(((n,i)=>{i.document.isValidDocument()?t.push(this.Ie.addEntry(e,i.document,this.getReadTime(n))):this.Ie.removeEntry(n)})),Pl.waitFor(t)}getFromCache(e,t){return this.Ie.getEntry(e,t)}getAllFromCache(e,t){return this.Ie.getEntries(e,t)}}class au{constructor(e){this.persistence=e,this.ds=new zl((e=>Cc(e)),Rc),this.lastRemoteSnapshotVersion=Ka.min(),this.highestTargetId=0,this.ws=0,this._s=new nu,this.targetCount=0,this.gs=$l.Jt()}forEachTarget(e,t){return this.ds.forEach(((e,n)=>t(n))),Pl.resolve()}getLastRemoteSnapshotVersion(e){return Pl.resolve(this.lastRemoteSnapshotVersion)}getHighestSequenceNumber(e){return Pl.resolve(this.ws)}allocateTargetId(e){return this.highestTargetId=this.gs.next(),Pl.resolve(this.highestTargetId)}setTargetsMetadata(e,t,n){return n&&(this.lastRemoteSnapshotVersion=n),t>this.ws&&(this.ws=t),Pl.resolve()}te(e){this.ds.set(e.target,e);const t=e.targetId;t>this.highestTargetId&&(this.gs=new $l(t),this.highestTargetId=t),e.sequenceNumber>this.ws&&(this.ws=e.sequenceNumber)}addTargetData(e,t){return this.te(t),this.targetCount+=1,Pl.resolve()}updateTargetData(e,t){return this.te(t),Pl.resolve()}removeTargetData(e,t){return this.ds.delete(t.target),this._s.Zn(t.targetId),this.targetCount-=1,Pl.resolve()}removeTargets(e,t,n){let i=0;const r=[];return this.ds.forEach(((s,o)=>{o.sequenceNumber<=t&&null===n.get(o.targetId)&&(this.ds.delete(s),r.push(this.removeMatchingKeysForTargetId(e,o.targetId)),i++)})),Pl.waitFor(r).next((()=>i))}getTargetCount(e){return Pl.resolve(this.targetCount)}getTargetData(e,t){const n=this.ds.get(t)||null;return Pl.resolve(n)}addMatchingKeys(e,t,n){return this._s.Jn(t,n),Pl.resolve()}removeMatchingKeys(e,t,n){this._s.Xn(t,n);const i=this.persistence.referenceDelegate,r=[];return i&&t.forEach((t=>{r.push(i.markPotentiallyOrphaned(e,t))})),Pl.waitFor(r)}removeMatchingKeysForTargetId(e,t){return this._s.Zn(t),Pl.resolve()}getMatchingKeysForTargetId(e,t){const n=this._s.es(t);return Pl.resolve(n)}containsKey(e,t){return Pl.resolve(this._s.containsKey(t))}}class cu{constructor(e,t){this.ys={},this.Ne=new Ca(0),this.xe=!1,this.xe=!0,this.referenceDelegate=e(this),this.Ue=new au(this),this.qt=new ql,this.qe=function(e,t){return new su(e,t)}(this.qt,(e=>this.referenceDelegate.ps(e))),this.R=new Fl(t),this.Ke=new tu(this.R)}start(){return Promise.resolve()}shutdown(){return this.xe=!1,Promise.resolve()}get started(){return this.xe}setDatabaseDeletedListener(){}setNetworkEnabled(){}getIndexManager(){return this.qt}getMutationQueue(e){let t=this.ys[e.toKey()];return t||(t=new ru(this.qt,this.referenceDelegate),this.ys[e.toKey()]=t),t}getTargetCache(){return this.Ue}getRemoteDocumentCache(){return this.qe}getBundleCache(){return this.Ke}runTransaction(e,t,n){Oa("MemoryPersistence","Starting transaction:",e);const i=new hu(this.Ne.next());return this.referenceDelegate.Es(),n(i).next((e=>this.referenceDelegate.Ts(i).next((()=>e)))).toPromise().then((e=>(i.raiseOnCommittedEvent(),e)))}Is(e,t){return Pl.or(Object.values(this.ys).map((n=>()=>n.containsKey(e,t))))}}class hu extends class{constructor(){this.onCommittedListeners=[]}addOnCommittedListener(e){this.onCommittedListeners.push(e)}raiseOnCommittedEvent(){this.onCommittedListeners.forEach((e=>e()))}}{constructor(e){super(),this.currentSequenceNumber=e}}class lu{constructor(e){this.persistence=e,this.As=new nu,this.Rs=null}static Ps(e){return new lu(e)}get bs(){if(this.Rs)return this.Rs;throw Va()}addReference(e,t,n){return this.As.addReference(n,t),this.bs.delete(n.toString()),Pl.resolve()}removeReference(e,t,n){return this.As.removeReference(n,t),this.bs.add(n.toString()),Pl.resolve()}markPotentiallyOrphaned(e,t){return this.bs.add(t.toString()),Pl.resolve()}removeTarget(e,t){this.As.Zn(t.targetId).forEach((e=>this.bs.add(e.toString())));const n=this.persistence.getTargetCache();return n.getMatchingKeysForTargetId(e,t.targetId).next((e=>{e.forEach((e=>this.bs.add(e.toString())))})).next((()=>n.removeTargetData(e,t)))}Es(){this.Rs=new Set}Ts(e){const t=this.persistence.getRemoteDocumentCache().newChangeBuffer();return Pl.forEach(this.bs,(n=>{const i=uc.fromPath(n);return this.vs(e,i).next((e=>{e||t.removeEntry(i)}))})).next((()=>(this.Rs=null,t.apply(e))))}updateLimboDocument(e,t){return this.vs(e,t).next((e=>{e?this.bs.delete(t.toString()):this.bs.add(t.toString())}))}ps(e){return 0}vs(e,t){return Pl.or([()=>Pl.resolve(this.As.containsKey(t)),()=>this.persistence.getTargetCache().containsKey(e,t),()=>this.persistence.Is(e,t)])}}class uu{constructor(e){this.uid=e}isAuthenticated(){return null!=this.uid}toKey(){return this.isAuthenticated()?"uid:"+this.uid:"anonymous-user"}isEqual(e){return e.uid===this.uid}}uu.UNAUTHENTICATED=new uu(null),uu.GOOGLE_CREDENTIALS=new uu("google-credentials-uid"),uu.FIRST_PARTY=new uu("first-party-uid");class du{constructor(){this.activeTargetIds=Qh()}Ds(e){this.activeTargetIds=this.activeTargetIds.add(e)}Cs(e){this.activeTargetIds=this.activeTargetIds.delete(e)}Ss(){const e={activeTargetIds:this.activeTargetIds.toArray(),updateTimeMs:Date.now()};return JSON.stringify(e)}}class fu{constructor(){this.li=new du,this.fi={},this.onlineStateHandler=null,this.sequenceNumberHandler=null}addPendingMutation(e){}updateMutationState(e,t,n){}addLocalQueryTarget(e){return this.li.Ds(e),this.fi[e]||"not-current"}updateQueryState(e,t,n){this.fi[e]=t}removeLocalQueryTarget(e){this.li.Cs(e)}isLocalQueryTarget(e){return this.li.activeTargetIds.has(e)}clearQueryState(e){delete this.fi[e]}getAllActiveQueryTargets(){return this.li.activeTargetIds}isActiveQueryTarget(e){return this.li.activeTargetIds.has(e)}start(){return this.li=new du,Promise.resolve()}handleUserChange(e,t,n){}setOnlineState(e){}shutdown(){}writeSequenceNumber(e){}notifyBundleLoaded(){}}class pu{di(e){}shutdown(){}}class gu{constructor(){this.wi=()=>this._i(),this.mi=()=>this.gi(),this.yi=[],this.pi()}di(e){this.yi.push(e)}shutdown(){window.removeEventListener("online",this.wi),window.removeEventListener("offline",this.mi)}pi(){window.addEventListener("online",this.wi),window.addEventListener("offline",this.mi)}_i(){Oa("ConnectivityMonitor","Network connectivity changed: AVAILABLE");for(const e of this.yi)e(0)}gi(){Oa("ConnectivityMonitor","Network connectivity changed: UNAVAILABLE");for(const e of this.yi)e(1)}static gt(){return"undefined"!=typeof window&&void 0!==window.addEventListener&&void 0!==window.removeEventListener}}const mu={BatchGetDocuments:"batchGet",Commit:"commit",RunQuery:"runQuery"};class yu{constructor(e){this.Ei=e.Ei,this.Ti=e.Ti}Ii(e){this.Ai=e}Ri(e){this.Pi=e}onMessage(e){this.bi=e}close(){this.Ti()}send(e){this.Ei(e)}vi(){this.Ai()}Vi(e){this.Pi(e)}Si(e){this.bi(e)}}class vu extends class{constructor(e){this.databaseInfo=e,this.databaseId=e.databaseId;const t=e.ssl?"https":"http";this.Di=t+"://"+e.host,this.Ci="projects/"+this.databaseId.projectId+"/databases/"+this.databaseId.database+"/documents"}Ni(e,t,n,i){const r=this.xi(e,t);Oa("RestConnection","Sending: ",r,n);const s={};return this.ki(s,i),this.$i(e,r,s,n).then((e=>(Oa("RestConnection","Received: ",e),e)),(t=>{throw Ma("RestConnection",`${e} failed with error: `,t,"url: ",r,"request:",n),t}))}Oi(e,t,n,i){return this.Ni(e,t,n,i)}ki(e,t){if(e["X-Goog-Api-Client"]="gl-js/ fire/"+Na,e["Content-Type"]="text/plain",this.databaseInfo.appId&&(e["X-Firebase-GMPID"]=this.databaseInfo.appId),t)for(const n in t.authHeaders)t.authHeaders.hasOwnProperty(n)&&(e[n]=t.authHeaders[n])}xi(e,t){const n=mu[e];return`${this.Di}/v1/${t}:${n}`}}{constructor(e){super(e),this.forceLongPolling=e.forceLongPolling,this.autoDetectLongPolling=e.autoDetectLongPolling,this.useFetchStreams=e.useFetchStreams}$i(e,t,n,i){return new Promise(((r,s)=>{const o=new Aa;o.listenOnce(_a.COMPLETE,(()=>{try{switch(o.getLastErrorCode()){case ba.NO_ERROR:const t=o.getResponseJson();Oa("Connection","XHR received:",JSON.stringify(t)),r(t);break;case ba.TIMEOUT:Oa("Connection",'RPC "'+e+'" timed out'),s(new xa(Ra.DEADLINE_EXCEEDED,"Request time out"));break;case ba.HTTP_ERROR:const n=o.getStatus();if(Oa("Connection",'RPC "'+e+'" failed with status:',n,"response text:",o.getResponseText()),n>0){const e=o.getResponseJson().error;if(e&&e.status&&e.message){const t=function(e){const t=e.toLowerCase().replace(/_/g,"-");return Object.values(Ra).indexOf(t)>=0?t:Ra.UNKNOWN}(e.status);s(new xa(t,e.message))}else s(new xa(Ra.UNKNOWN,"Server responded with status "+o.getStatus()))}else s(new xa(Ra.UNAVAILABLE,"Connection failed."));break;default:Va()}}finally{Oa("Connection",'RPC "'+e+'" completed.')}}));const a=JSON.stringify(i);o.send(t,"POST",a,n,15)}))}Fi(e,t){const n=[this.Di,"/","google.firestore.v1.Firestore","/",e,"/channel"],i=new pa,r=os(),s={httpSessionIdParam:"gsessionid",initMessageHeaders:{},messageUrlParams:{database:`projects/${this.databaseId.projectId}/databases/${this.databaseId.database}`},sendRawJson:!0,supportsCrossDomainXhr:!0,internalChannelParams:{forwardChannelRequestTimeoutMs:6e5},forceLongPolling:this.forceLongPolling,detectBufferingProxy:this.autoDetectLongPolling};this.useFetchStreams&&(s.xmlHttpFactory=new Ia({})),this.ki(s.initMessageHeaders,t),we()||_e()||ve().indexOf("Electron/")>=0||Ee()||ve().indexOf("MSAppHost/")>=0||be()||(s.httpHeadersOverwriteParam="$httpHeaders");const o=n.join("");Oa("Connection","Creating WebChannel: "+o,s);const a=i.createWebChannel(o,s);let c=!1,h=!1;const l=new yu({Ei:e=>{h?Oa("Connection","Not sending because WebChannel is closed:",e):(c||(Oa("Connection","Opening WebChannel transport."),a.open(),c=!0),Oa("Connection","WebChannel sending:",e),a.send(e))},Ti:()=>a.close()}),u=(e,t,n)=>{e.listen(t,(e=>{try{n(e)}catch(e){setTimeout((()=>{throw e}),0)}}))};return u(a,ka.EventType.OPEN,(()=>{h||Oa("Connection","WebChannel transport opened.")})),u(a,ka.EventType.CLOSE,(()=>{h||(h=!0,Oa("Connection","WebChannel transport closed"),l.Vi())})),u(a,ka.EventType.ERROR,(e=>{h||(h=!0,Ma("Connection","WebChannel transport errored:",e),l.Vi(new xa(Ra.UNAVAILABLE,"The operation could not be completed")))})),u(a,ka.EventType.MESSAGE,(e=>{var t;if(!h){const n=e.data[0];Fa(!!n);const i=n,r=i.error||(null===(t=i[0])||void 0===t?void 0:t.error);if(r){Oa("Connection","WebChannel received error:",r);const e=r.status;let t=function(e){const t=Oh[e];if(void 0!==t)return Mh(t)}(e),n=r.message;void 0===t&&(t=Ra.INTERNAL,n="Unknown error status: "+e+" with message "+r.message),h=!0,l.Vi(new xa(t,n)),a.close()}else Oa("Connection","WebChannel received:",n),l.Si(n)}})),u(r,Ea.STAT_EVENT,(e=>{e.stat===Ta?Oa("Connection","Detected buffering proxy"):e.stat===Sa&&Oa("Connection","Detected no buffering proxy")})),setTimeout((()=>{l.vi()}),0),l}}function wu(){return"undefined"!=typeof document?document:null}function bu(e){return new al(e,!0)}class _u{constructor(e,t,n=1e3,i=1.5,r=6e4){this.Se=e,this.timerId=t,this.Mi=n,this.Li=i,this.Bi=r,this.Ui=0,this.qi=null,this.Ki=Date.now(),this.reset()}reset(){this.Ui=0}ji(){this.Ui=this.Bi}Qi(e){this.cancel();const t=Math.floor(this.Ui+this.Wi()),n=Math.max(0,Date.now()-this.Ki),i=Math.max(0,t-n);i>0&&Oa("ExponentialBackoff",`Backing off for ${i} ms (base delay: ${this.Ui} ms, delay with jitter: ${t} ms, last attempt: ${n} ms ago)`),this.qi=this.Se.enqueueAfterDelay(this.timerId,i,(()=>(this.Ki=Date.now(),e()))),this.Ui*=this.Li,this.Ui<this.Mi&&(this.Ui=this.Mi),this.Ui>this.Bi&&(this.Ui=this.Bi)}Gi(){null!==this.qi&&(this.qi.skipDelay(),this.qi=null)}cancel(){null!==this.qi&&(this.qi.cancel(),this.qi=null)}Wi(){return(Math.random()-.5)*this.Ui}}class Eu extends class{constructor(e,t,n,i,r,s){this.Se=e,this.zi=n,this.Hi=i,this.Ji=r,this.listener=s,this.state=0,this.Yi=0,this.Xi=null,this.stream=null,this.Zi=new _u(e,t)}tr(){return 1===this.state||2===this.state||4===this.state}er(){return 2===this.state}start(){3!==this.state?this.auth():this.nr()}async stop(){this.tr()&&await this.close(0)}sr(){this.state=0,this.Zi.reset()}ir(){this.er()&&null===this.Xi&&(this.Xi=this.Se.enqueueAfterDelay(this.zi,6e4,(()=>this.rr())))}cr(e){this.ur(),this.stream.send(e)}async rr(){if(this.er())return this.close(0)}ur(){this.Xi&&(this.Xi.cancel(),this.Xi=null)}async close(e,t){this.ur(),this.Zi.cancel(),this.Yi++,3!==e?this.Zi.reset():t&&t.code===Ra.RESOURCE_EXHAUSTED?(Pa(t.toString()),Pa("Using maximum backoff delay to prevent overloading the backend."),this.Zi.ji()):t&&t.code===Ra.UNAUTHENTICATED&&this.Ji.invalidateToken(),null!==this.stream&&(this.ar(),this.stream.close(),this.stream=null),this.state=e,await this.listener.Ri(t)}ar(){}auth(){this.state=1;const e=this.hr(this.Yi),t=this.Yi;this.Ji.getToken().then((e=>{this.Yi===t&&this.lr(e)}),(t=>{e((()=>{const e=new xa(Ra.UNKNOWN,"Fetching auth token failed: "+t.message);return this.dr(e)}))}))}lr(e){const t=this.hr(this.Yi);this.stream=this.wr(e),this.stream.Ii((()=>{t((()=>(this.state=2,this.listener.Ii())))})),this.stream.Ri((e=>{t((()=>this.dr(e)))})),this.stream.onMessage((e=>{t((()=>this.onMessage(e)))}))}nr(){this.state=4,this.Zi.Qi((async()=>{this.state=0,this.start()}))}dr(e){return Oa("PersistentStream",`close with error: ${e}`),this.stream=null,this.close(3,e)}hr(e){return t=>{this.Se.enqueueAndForget((()=>this.Yi===e?t():(Oa("PersistentStream","stream callback skipped by getCloseGuardedDispatcher."),Promise.resolve())))}}}{constructor(e,t,n,i,r){super(e,"listen_stream_connection_backoff","listen_stream_idle",t,n,r),this.R=i}wr(e){return this.Hi.Fi("Listen",e)}onMessage(e){this.Zi.reset();const t=function(e,t){let n;if("targetChange"in t){t.targetChange;const i=function(e){return"NO_CHANGE"===e?0:"ADD"===e?1:"REMOVE"===e?2:"CURRENT"===e?3:"RESET"===e?4:Va()}(t.targetChange.targetChangeType||"NO_CHANGE"),r=t.targetChange.targetIds||[],s=function(e,t){return e.I?(Fa(void 0===t||"string"==typeof t),tc.fromBase64String(t||"")):(Fa(void 0===t||t instanceof Uint8Array),tc.fromUint8Array(t||new Uint8Array))}(e,t.targetChange.resumeToken),o=t.targetChange.cause,a=o&&function(e){const t=void 0===e.code?Ra.UNKNOWN:Mh(e.code);return new xa(t,e.message||"")}(o);n=new el(i,r,s,a||null)}else if("documentChange"in t){t.documentChange;const i=t.documentChange;i.document,i.document.name,i.document.updateTime;const r=gl(e,i.document.name),s=ul(i.document.updateTime),o=new Ic({mapValue:{fields:i.document.fields}}),a=kc.newFoundDocument(r,s,o),c=i.targetIds||[],h=i.removedTargetIds||[];n=new Yh(c,h,a.key,a)}else if("documentDelete"in t){t.documentDelete;const i=t.documentDelete;i.document;const r=gl(e,i.document),s=i.readTime?ul(i.readTime):Ka.min(),o=kc.newNoDocument(r,s),a=i.removedTargetIds||[];n=new Yh([],a,o.key,o)}else if("documentRemove"in t){t.documentRemove;const i=t.documentRemove;i.document;const r=gl(e,i.document),s=i.removedTargetIds||[];n=new Yh([],s,r,null)}else{if(!("filter"in t))return Va();{t.filter;const e=t.filter;e.targetId;const i=e.count||0,r=new Lh(i),s=e.targetId;n=new Zh(s,r)}}return n}(this.R,e),n=function(e){if(!("targetChange"in e))return Ka.min();const t=e.targetChange;return t.targetIds&&t.targetIds.length?Ka.min():t.readTime?ul(t.readTime):Ka.min()}(e);return this.listener._r(t,n)}mr(e){const t={};t.database=yl(this.R),t.addTarget=function(e,t){let n;const i=t.target;return n=xc(i)?{documents:bl(e,i)}:{query:_l(e,i)},n.targetId=t.targetId,t.resumeToken.approximateByteSize()>0?n.resumeToken=hl(e,t.resumeToken):t.snapshotVersion.compareTo(Ka.min())>0&&(n.readTime=cl(e,t.snapshotVersion.toTimestamp())),n}(this.R,e);const n=function(e,t){const n=function(e,t){switch(t){case 0:return null;case 1:return"existence-filter-mismatch";case 2:return"limbo-document";default:return Va()}}(0,t.purpose);return null==n?null:{"goog-listen-tags":n}}(this.R,e);n&&(t.labels=n),this.cr(t)}gr(e){const t={};t.database=yl(this.R),t.removeTarget=e,this.cr(t)}}class Tu extends class{}{constructor(e,t,n){super(),this.credentials=e,this.Hi=t,this.R=n,this.Rr=!1}Pr(){if(this.Rr)throw new xa(Ra.FAILED_PRECONDITION,"The client has already been terminated.")}Ni(e,t,n){return this.Pr(),this.credentials.getToken().then((i=>this.Hi.Ni(e,t,n,i))).catch((e=>{throw"FirebaseError"===e.name?(e.code===Ra.UNAUTHENTICATED&&this.credentials.invalidateToken(),e):new xa(Ra.UNKNOWN,e.toString())}))}Oi(e,t,n){return this.Pr(),this.credentials.getToken().then((i=>this.Hi.Oi(e,t,n,i))).catch((e=>{throw"FirebaseError"===e.name?(e.code===Ra.UNAUTHENTICATED&&this.credentials.invalidateToken(),e):new xa(Ra.UNKNOWN,e.toString())}))}terminate(){this.Rr=!0}}class Su{constructor(e,t){this.asyncQueue=e,this.onlineStateHandler=t,this.state="Unknown",this.br=0,this.vr=null,this.Vr=!0}Sr(){0===this.br&&(this.Dr("Unknown"),this.vr=this.asyncQueue.enqueueAfterDelay("online_state_timeout",1e4,(()=>(this.vr=null,this.Cr("Backend didn't respond within 10 seconds."),this.Dr("Offline"),Promise.resolve()))))}Nr(e){"Online"===this.state?this.Dr("Unknown"):(this.br++,this.br>=1&&(this.kr(),this.Cr(`Connection failed 1 times. Most recent error: ${e.toString()}`),this.Dr("Offline")))}set(e){this.kr(),this.br=0,"Online"===e&&(this.Vr=!1),this.Dr(e)}Dr(e){e!==this.state&&(this.state=e,this.onlineStateHandler(e))}Cr(e){const t=`Could not reach Cloud Firestore backend. ${e}\nThis typically indicates that your device does not have a healthy Internet connection at the moment. The client will operate in offline mode until it is able to successfully connect to the backend.`;this.Vr?(Pa(t),this.Vr=!1):Oa("OnlineStateTracker",t)}kr(){null!==this.vr&&(this.vr.cancel(),this.vr=null)}}class Iu{constructor(e,t,n,i,r){this.localStore=e,this.datastore=t,this.asyncQueue=n,this.remoteSyncer={},this.$r=[],this.Or=new Map,this.Fr=new Set,this.Mr=[],this.Lr=r,this.Lr.di((e=>{n.enqueueAndForget((async()=>{Ou(this)&&(Oa("RemoteStore","Restarting streams for network reachability change."),await async function(e){const t=ja(e);t.Fr.add(4),await Au(t),t.Br.set("Unknown"),t.Fr.delete(4),await ku(t)}(this))}))})),this.Br=new Su(n,i)}}async function ku(e){if(Ou(e))for(const t of e.Mr)await t(!0)}async function Au(e){for(const t of e.Mr)await t(!1)}function Nu(e,t){const n=ja(e);n.Or.has(t.targetId)||(n.Or.set(t.targetId,t),Lu(n)?Du(n):ju(n).er()&&Ru(n,t))}function Cu(e,t){const n=ja(e),i=ju(n);n.Or.delete(t),i.er()&&xu(n,t),0===n.Or.size&&(i.er()?i.ir():Ou(n)&&n.Br.set("Unknown"))}function Ru(e,t){e.Ur.q(t.targetId),ju(e).mr(t)}function xu(e,t){e.Ur.q(t),ju(e).gr(t)}function Du(e){e.Ur=new nl({getRemoteKeysForTarget:t=>e.remoteSyncer.getRemoteKeysForTarget(t),lt:t=>e.Or.get(t)||null}),ju(e).start(),e.Br.Sr()}function Lu(e){return Ou(e)&&!ju(e).tr()&&e.Or.size>0}function Ou(e){return 0===ja(e).Fr.size}function Pu(e){e.Ur=void 0}async function Mu(e){e.Or.forEach(((t,n)=>{Ru(e,t)}))}async function Uu(e,t){Pu(e),Lu(e)?(e.Br.Nr(t),Du(e)):e.Br.set("Unknown")}async function Vu(e,t,n){if(e.Br.set("Online"),t instanceof el&&2===t.state&&t.cause)try{await async function(e,t){const n=t.cause;for(const i of t.targetIds)e.Or.has(i)&&(await e.remoteSyncer.rejectListen(i,n),e.Or.delete(i),e.Ur.removeTarget(i))}(e,t)}catch(n){Oa("RemoteStore","Failed to remove targets %s: %s ",t.targetIds.join(","),n),await Fu(e,n)}else if(t instanceof Yh?e.Ur.X(t):t instanceof Zh?e.Ur.rt(t):e.Ur.et(t),!n.isEqual(Ka.min()))try{const t=await Xl(e.localStore);n.compareTo(t)>=0&&await function(e,t){const n=e.Ur.ut(t);return n.targetChanges.forEach(((n,i)=>{if(n.resumeToken.approximateByteSize()>0){const r=e.Or.get(i);r&&e.Or.set(i,r.withResumeToken(n.resumeToken,t))}})),n.targetMismatches.forEach((t=>{const n=e.Or.get(t);if(!n)return;e.Or.set(t,n.withResumeToken(tc.EMPTY_BYTE_STRING,n.snapshotVersion)),xu(e,t);const i=new Vl(n.target,t,1,n.sequenceNumber);Ru(e,i)})),e.remoteSyncer.applyRemoteEvent(n)}(e,n)}catch(t){Oa("RemoteStore","Failed to raise snapshot:",t),await Fu(e,t)}}async function Fu(e,t,n){if(!Ml(t))throw t;e.Fr.add(1),await Au(e),e.Br.set("Offline"),n||(n=()=>Xl(e.localStore)),e.asyncQueue.enqueueRetryable((async()=>{Oa("RemoteStore","Retrying IndexedDB access"),await n(),e.Fr.delete(1),await ku(e)}))}function ju(e){return e.qr||(e.qr=function(e,t,n){const i=ja(e);return i.Pr(),new Eu(t,i.Hi,i.credentials,i.R,n)}(e.datastore,e.asyncQueue,{Ii:Mu.bind(null,e),Ri:Uu.bind(null,e),_r:Vu.bind(null,e)}),e.Mr.push((async t=>{t?(e.qr.sr(),Lu(e)?Du(e):e.Br.set("Unknown")):(await e.qr.stop(),Pu(e))}))),e.qr}class qu{constructor(e,t,n,i,r){this.asyncQueue=e,this.timerId=t,this.targetTimeMs=n,this.op=i,this.removalCallback=r,this.deferred=new Ol,this.then=this.deferred.promise.then.bind(this.deferred.promise),this.deferred.promise.catch((e=>{}))}static createAndSchedule(e,t,n,i,r){const s=Date.now()+n,o=new qu(e,t,s,i,r);return o.start(n),o}start(e){this.timerHandle=setTimeout((()=>this.handleDelayElapsed()),e)}skipDelay(){return this.handleDelayElapsed()}cancel(e){null!==this.timerHandle&&(this.clearTimeout(),this.deferred.reject(new xa(Ra.CANCELLED,"Operation cancelled"+(e?": "+e:""))))}handleDelayElapsed(){this.asyncQueue.enqueueAndForget((()=>null!==this.timerHandle?(this.clearTimeout(),this.op().then((e=>this.deferred.resolve(e)))):Promise.resolve()))}clearTimeout(){null!==this.timerHandle&&(this.removalCallback(this),clearTimeout(this.timerHandle),this.timerHandle=null)}}function Bu(e,t){if(Pa("AsyncQueue",`${t}: ${e}`),Ml(e))return new xa(Ra.UNAVAILABLE,`${t}: ${e}`);throw e}class $u{constructor(e){this.comparator=e?(t,n)=>e(t,n)||uc.comparator(t.key,n.key):(e,t)=>uc.comparator(e.key,t.key),this.keyedMap=zh(),this.sortedSet=new Uh(this.comparator)}static emptySet(e){return new $u(e.comparator)}has(e){return null!=this.keyedMap.get(e)}get(e){return this.keyedMap.get(e)}first(){return this.sortedSet.minKey()}last(){return this.sortedSet.maxKey()}isEmpty(){return this.sortedSet.isEmpty()}indexOf(e){const t=this.keyedMap.get(e);return t?this.sortedSet.indexOf(t):-1}get size(){return this.sortedSet.size}forEach(e){this.sortedSet.inorderTraversal(((t,n)=>(e(t),!1)))}add(e){const t=this.delete(e.key);return t.copy(t.keyedMap.insert(e.key,e),t.sortedSet.insert(e,null))}delete(e){const t=this.get(e);return t?this.copy(this.keyedMap.remove(e),this.sortedSet.remove(t)):this}isEqual(e){if(!(e instanceof $u))return!1;if(this.size!==e.size)return!1;const t=this.sortedSet.getIterator(),n=e.sortedSet.getIterator();for(;t.hasNext();){const e=t.getNext().key,i=n.getNext().key;if(!e.isEqual(i))return!1}return!0}toString(){const e=[];return this.forEach((t=>{e.push(t.toString())})),0===e.length?"DocumentSet ()":"DocumentSet (\n  "+e.join("  \n")+"\n)"}copy(e,t){const n=new $u;return n.comparator=this.comparator,n.keyedMap=e,n.sortedSet=t,n}}class Hu{constructor(){this.jr=new Uh(uc.comparator)}track(e){const t=e.doc.key,n=this.jr.get(t);n?0!==e.type&&3===n.type?this.jr=this.jr.insert(t,e):3===e.type&&1!==n.type?this.jr=this.jr.insert(t,{type:n.type,doc:e.doc}):2===e.type&&2===n.type?this.jr=this.jr.insert(t,{type:2,doc:e.doc}):2===e.type&&0===n.type?this.jr=this.jr.insert(t,{type:0,doc:e.doc}):1===e.type&&0===n.type?this.jr=this.jr.remove(t):1===e.type&&2===n.type?this.jr=this.jr.insert(t,{type:1,doc:n.doc}):0===e.type&&1===n.type?this.jr=this.jr.insert(t,{type:2,doc:e.doc}):Va():this.jr=this.jr.insert(t,e)}Qr(){const e=[];return this.jr.inorderTraversal(((t,n)=>{e.push(n)})),e}}class zu{constructor(e,t,n,i,r,s,o,a){this.query=e,this.docs=t,this.oldDocs=n,this.docChanges=i,this.mutatedKeys=r,this.fromCache=s,this.syncStateChanged=o,this.excludesMetadataChanges=a}static fromInitialDocuments(e,t,n,i){const r=[];return t.forEach((e=>{r.push({type:0,doc:e})})),new zu(e,t,$u.emptySet(t),r,n,i,!0,!1)}get hasPendingWrites(){return!this.mutatedKeys.isEmpty()}isEqual(e){if(!(this.fromCache===e.fromCache&&this.syncStateChanged===e.syncStateChanged&&this.mutatedKeys.isEqual(e.mutatedKeys)&&Zc(this.query,e.query)&&this.docs.isEqual(e.docs)&&this.oldDocs.isEqual(e.oldDocs)))return!1;const t=this.docChanges,n=e.docChanges;if(t.length!==n.length)return!1;for(let e=0;e<t.length;e++)if(t[e].type!==n[e].type||!t[e].doc.isEqual(n[e].doc))return!1;return!0}}class Ku{constructor(){this.Wr=void 0,this.listeners=[]}}class Gu{constructor(){this.queries=new zl((e=>eh(e)),Zc),this.onlineState="Unknown",this.Gr=new Set}}function Wu(e,t){const n=ja(e);let i=!1;for(const e of t){const t=e.query,r=n.queries.get(t);if(r){for(const t of r.listeners)t.Hr(e)&&(i=!0);r.Wr=e}}i&&Ju(n)}function Qu(e,t,n){const i=ja(e),r=i.queries.get(t);if(r)for(const e of r.listeners)e.onError(n);i.queries.delete(t)}function Ju(e){e.Gr.forEach((e=>{e.next()}))}class Xu{constructor(e,t,n){this.query=e,this.Jr=t,this.Yr=!1,this.Xr=null,this.onlineState="Unknown",this.options=n||{}}Hr(e){if(!this.options.includeMetadataChanges){const t=[];for(const n of e.docChanges)3!==n.type&&t.push(n);e=new zu(e.query,e.docs,e.oldDocs,t,e.mutatedKeys,e.fromCache,e.syncStateChanged,!0)}let t=!1;return this.Yr?this.Zr(e)&&(this.Jr.next(e),t=!0):this.eo(e,this.onlineState)&&(this.no(e),t=!0),this.Xr=e,t}onError(e){this.Jr.error(e)}zr(e){this.onlineState=e;let t=!1;return this.Xr&&!this.Yr&&this.eo(this.Xr,e)&&(this.no(this.Xr),t=!0),t}eo(e,t){if(!e.fromCache)return!0;const n="Offline"!==t;return!(this.options.so&&n||e.docs.isEmpty()&&"Offline"!==t)}Zr(e){if(e.docChanges.length>0)return!0;const t=this.Xr&&this.Xr.hasPendingWrites!==e.hasPendingWrites;return!(!e.syncStateChanged&&!t)&&!0===this.options.includeMetadataChanges}no(e){e=zu.fromInitialDocuments(e.query,e.docs,e.mutatedKeys,e.fromCache),this.Yr=!0,this.Jr.next(e)}}class Yu{constructor(e){this.key=e}}class Zu{constructor(e){this.key=e}}class ed{constructor(e,t){this.query=e,this.uo=t,this.ao=null,this.current=!1,this.ho=Gh(),this.mutatedKeys=Gh(),this.lo=ih(e),this.fo=new $u(this.lo)}get wo(){return this.uo}_o(e,t){const n=t?t.mo:new Hu,i=t?t.fo:this.fo;let r=t?t.mutatedKeys:this.mutatedKeys,s=i,o=!1;const a=Qc(this.query)&&i.size===this.query.limit?i.last():null,c=Jc(this.query)&&i.size===this.query.limit?i.first():null;if(e.inorderTraversal(((e,t)=>{const h=i.get(e),l=nh(this.query,t)?t:null,u=!!h&&this.mutatedKeys.has(h.key),d=!!l&&(l.hasLocalMutations||this.mutatedKeys.has(l.key)&&l.hasCommittedMutations);let f=!1;h&&l?h.data.isEqual(l.data)?u!==d&&(n.track({type:3,doc:l}),f=!0):this.yo(h,l)||(n.track({type:2,doc:l}),f=!0,(a&&this.lo(l,a)>0||c&&this.lo(l,c)<0)&&(o=!0)):!h&&l?(n.track({type:0,doc:l}),f=!0):h&&!l&&(n.track({type:1,doc:h}),f=!0,(a||c)&&(o=!0)),f&&(l?(s=s.add(l),r=d?r.add(e):r.delete(e)):(s=s.delete(e),r=r.delete(e)))})),Qc(this.query)||Jc(this.query))for(;s.size>this.query.limit;){const e=Qc(this.query)?s.last():s.first();s=s.delete(e.key),r=r.delete(e.key),n.track({type:1,doc:e})}return{fo:s,mo:n,Nn:o,mutatedKeys:r}}yo(e,t){return e.hasLocalMutations&&t.hasCommittedMutations&&!t.hasLocalMutations}applyChanges(e,t,n){const i=this.fo;this.fo=e.fo,this.mutatedKeys=e.mutatedKeys;const r=e.mo.Qr();r.sort(((e,t)=>function(e,t){const n=e=>{switch(e){case 0:return 1;case 2:case 3:return 2;case 1:return 0;default:return Va()}};return n(e)-n(t)}(e.type,t.type)||this.lo(e.doc,t.doc))),this.po(n);const s=t?this.Eo():[],o=0===this.ho.size&&this.current?1:0,a=o!==this.ao;return this.ao=o,0!==r.length||a?{snapshot:new zu(this.query,e.fo,i,r,e.mutatedKeys,0===o,a,!1),To:s}:{To:s}}zr(e){return this.current&&"Offline"===e?(this.current=!1,this.applyChanges({fo:this.fo,mo:new Hu,mutatedKeys:this.mutatedKeys,Nn:!1},!1)):{To:[]}}Io(e){return!this.uo.has(e)&&!!this.fo.has(e)&&!this.fo.get(e).hasLocalMutations}po(e){e&&(e.addedDocuments.forEach((e=>this.uo=this.uo.add(e))),e.modifiedDocuments.forEach((e=>{})),e.removedDocuments.forEach((e=>this.uo=this.uo.delete(e))),this.current=e.current)}Eo(){if(!this.current)return[];const e=this.ho;this.ho=Gh(),this.fo.forEach((e=>{this.Io(e.key)&&(this.ho=this.ho.add(e.key))}));const t=[];return e.forEach((e=>{this.ho.has(e)||t.push(new Zu(e))})),this.ho.forEach((n=>{e.has(n)||t.push(new Yu(n))})),t}Ao(e){this.uo=e.Bn,this.ho=Gh();const t=this._o(e.documents);return this.applyChanges(t,!0)}Ro(){return zu.fromInitialDocuments(this.query,this.fo,this.mutatedKeys,0===this.ao)}}class td{constructor(e,t,n){this.query=e,this.targetId=t,this.view=n}}class nd{constructor(e){this.key=e,this.Po=!1}}class id{constructor(e,t,n,i,r,s){this.localStore=e,this.remoteStore=t,this.eventManager=n,this.sharedClientState=i,this.currentUser=r,this.maxConcurrentLimboResolutions=s,this.bo={},this.vo=new zl((e=>eh(e)),Zc),this.Vo=new Map,this.So=new Set,this.Do=new Uh(uc.comparator),this.Co=new Map,this.No=new nu,this.xo={},this.ko=new Map,this.$o=$l.Yt(),this.onlineState="Unknown",this.Oo=void 0}get isPrimaryClient(){return!0===this.Oo}}async function rd(e,t){const n=function(e){const t=ja(e);return t.remoteStore.remoteSyncer.applyRemoteEvent=od.bind(null,t),t.remoteStore.remoteSyncer.getRemoteKeysForTarget=md.bind(null,t),t.remoteStore.remoteSyncer.rejectListen=cd.bind(null,t),t.bo._r=Wu.bind(null,t.eventManager),t.bo.Mo=Qu.bind(null,t.eventManager),t}(e);let i,r;const s=n.vo.get(t);if(s)i=s.targetId,n.sharedClientState.addLocalQueryTarget(i),r=s.view.Ro();else{const e=await function(e,t){const n=ja(e);return n.persistence.runTransaction("Allocate target","readwrite",(e=>{let i;return n.Ue.getTargetData(e,t).next((r=>r?(i=r,Pl.resolve(i)):n.Ue.allocateTargetId(e).next((r=>(i=new Vl(t,r,0,e.currentSequenceNumber),n.Ue.addTargetData(e,i).next((()=>i)))))))})).then((e=>{const i=n.kn.get(e.targetId);return(null===i||e.snapshotVersion.compareTo(i.snapshotVersion)>0)&&(n.kn=n.kn.insert(e.targetId,e),n.$n.set(t,e.targetId)),e}))}(n.localStore,Yc(t)),s=n.sharedClientState.addLocalQueryTarget(e.targetId);i=e.targetId,r=await async function(e,t,n,i){e.Fo=(t,n,i)=>async function(e,t,n,i){let r=t.view._o(n);r.Nn&&(r=await eu(e.localStore,t.query,!1).then((({documents:e})=>t.view._o(e,r))));const s=i&&i.targetChanges.get(t.targetId),o=t.view.applyChanges(r,e.isPrimaryClient,s);return ud(e,t.targetId,o.To),o.snapshot}(e,t,n,i);const r=await eu(e.localStore,t,!0),s=new ed(t,r.Bn),o=s._o(r.documents),a=Xh.createSynthesizedTargetChangeForCurrentChange(n,i&&"Offline"!==e.onlineState),c=s.applyChanges(o,e.isPrimaryClient,a);ud(e,n,c.To);const h=new td(t,n,s);return e.vo.set(t,h),e.Vo.has(n)?e.Vo.get(n).push(t):e.Vo.set(n,[t]),c.snapshot}(n,t,i,"current"===s),n.isPrimaryClient&&Nu(n.remoteStore,e)}return r}async function sd(e,t){const n=ja(e),i=n.vo.get(t),r=n.Vo.get(i.targetId);if(r.length>1)return n.Vo.set(i.targetId,r.filter((e=>!Zc(e,t)))),void n.vo.delete(t);n.isPrimaryClient?(n.sharedClientState.removeLocalQueryTarget(i.targetId),n.sharedClientState.isActiveQueryTarget(i.targetId)||await Zl(n.localStore,i.targetId,!1).then((()=>{n.sharedClientState.clearQueryState(i.targetId),Cu(n.remoteStore,i.targetId),hd(n,i.targetId)})).catch(Hl)):(hd(n,i.targetId),await Zl(n.localStore,i.targetId,!0))}async function od(e,t){const n=ja(e);try{const e=await Yl(n.localStore,t);t.targetChanges.forEach(((e,t)=>{const i=n.Co.get(t);i&&(Fa(e.addedDocuments.size+e.modifiedDocuments.size+e.removedDocuments.size<=1),e.addedDocuments.size>0?i.Po=!0:e.modifiedDocuments.size>0?Fa(i.Po):e.removedDocuments.size>0&&(Fa(i.Po),i.Po=!1))})),await pd(n,e,t)}catch(e){await Hl(e)}}function ad(e,t,n){const i=ja(e);if(i.isPrimaryClient&&0===n||!i.isPrimaryClient&&1===n){const e=[];i.vo.forEach(((n,i)=>{const r=i.view.zr(t);r.snapshot&&e.push(r.snapshot)})),function(e,t){const n=ja(e);n.onlineState=t;let i=!1;n.queries.forEach(((e,n)=>{for(const e of n.listeners)e.zr(t)&&(i=!0)})),i&&Ju(n)}(i.eventManager,t),e.length&&i.bo._r(e),i.onlineState=t,i.isPrimaryClient&&i.sharedClientState.setOnlineState(t)}}async function cd(e,t,n){const i=ja(e);i.sharedClientState.updateQueryState(t,"rejected",n);const r=i.Co.get(t),s=r&&r.key;if(s){let e=new Uh(uc.comparator);e=e.insert(s,kc.newNoDocument(s,Ka.min()));const n=Gh().add(s),r=new Jh(Ka.min(),new Map,new jh($a),e,n);await od(i,r),i.Do=i.Do.remove(s),i.Co.delete(t),fd(i)}else await Zl(i.localStore,t,!1).then((()=>hd(i,t,n))).catch(Hl)}function hd(e,t,n=null){e.sharedClientState.removeLocalQueryTarget(t);for(const i of e.Vo.get(t))e.vo.delete(i),n&&e.bo.Mo(i,n);e.Vo.delete(t),e.isPrimaryClient&&e.No.Zn(t).forEach((t=>{e.No.containsKey(t)||ld(e,t)}))}function ld(e,t){e.So.delete(t.path.canonicalString());const n=e.Do.get(t);null!==n&&(Cu(e.remoteStore,n),e.Do=e.Do.remove(t),e.Co.delete(n),fd(e))}function ud(e,t,n){for(const i of n)i instanceof Yu?(e.No.addReference(i.key,t),dd(e,i)):i instanceof Zu?(Oa("SyncEngine","Document no longer in limbo: "+i.key),e.No.removeReference(i.key,t),e.No.containsKey(i.key)||ld(e,i.key)):Va()}function dd(e,t){const n=t.key,i=n.path.canonicalString();e.Do.get(n)||e.So.has(i)||(Oa("SyncEngine","New document in limbo: "+n),e.So.add(i),fd(e))}function fd(e){for(;e.So.size>0&&e.Do.size<e.maxConcurrentLimboResolutions;){const t=e.So.values().next().value;e.So.delete(t);const n=new uc(Xa.fromString(t)),i=e.$o.next();e.Co.set(i,new nd(n)),e.Do=e.Do.insert(n,i),Nu(e.remoteStore,new Vl(Yc(Wc(n.path)),i,2,Ca.o))}}async function pd(e,t,n){const i=ja(e),r=[],s=[],o=[];i.vo.isEmpty()||(i.vo.forEach(((e,a)=>{o.push(i.Fo(a,t,n).then((e=>{if(e){i.isPrimaryClient&&i.sharedClientState.updateQueryState(a.targetId,e.fromCache?"not-current":"current"),r.push(e);const t=Gl.vn(a.targetId,e);s.push(t)}})))})),await Promise.all(o),i.bo._r(r),await async function(e,t){const n=ja(e);try{await n.persistence.runTransaction("notifyLocalViewChanges","readwrite",(e=>Pl.forEach(t,(t=>Pl.forEach(t.Pn,(i=>n.persistence.referenceDelegate.addReference(e,t.targetId,i))).next((()=>Pl.forEach(t.bn,(i=>n.persistence.referenceDelegate.removeReference(e,t.targetId,i)))))))))}catch(e){if(!Ml(e))throw e;Oa("LocalStore","Failed to update sequence numbers: "+e)}for(const e of t){const t=e.targetId;if(!e.fromCache){const e=n.kn.get(t),i=e.snapshotVersion,r=e.withLastLimboFreeSnapshotVersion(i);n.kn=n.kn.insert(t,r)}}}(i.localStore,s))}async function gd(e,t){const n=ja(e);if(!n.currentUser.isEqual(t)){Oa("SyncEngine","User change. New user:",t.toKey());const e=await Jl(n.localStore,t);n.currentUser=t,function(e,t){e.ko.forEach((e=>{e.forEach((e=>{e.reject(new xa(Ra.CANCELLED,"'waitForPendingWrites' promise is rejected due to a user change."))}))})),e.ko.clear()}(n),n.sharedClientState.handleUserChange(t,e.removedBatchIds,e.addedBatchIds),await pd(n,e.Ln)}}function md(e,t){const n=ja(e),i=n.Co.get(t);if(i&&i.Po)return Gh().add(i.key);{let e=Gh();const i=n.Vo.get(t);if(!i)return e;for(const t of i){const i=n.vo.get(t);e=e.unionWith(i.view.wo)}return e}}class yd{constructor(){this.synchronizeTabs=!1}async initialize(e){this.R=bu(e.databaseInfo.databaseId),this.sharedClientState=this.Bo(e),this.persistence=this.Uo(e),await this.persistence.start(),this.gcScheduler=this.qo(e),this.localStore=this.Ko(e)}qo(e){return null}Ko(e){return function(e,t,n,i){return new Ql(e,t,n,i)}(this.persistence,new Wl,e.initialUser,this.R)}Uo(e){return new cu(lu.Ps,this.R)}Bo(e){return new fu}async terminate(){this.gcScheduler&&this.gcScheduler.stop(),await this.sharedClientState.shutdown(),await this.persistence.shutdown()}}class vd{async initialize(e,t){this.localStore||(this.localStore=e.localStore,this.sharedClientState=e.sharedClientState,this.datastore=this.createDatastore(t),this.remoteStore=this.createRemoteStore(t),this.eventManager=this.createEventManager(t),this.syncEngine=this.createSyncEngine(t,!e.synchronizeTabs),this.sharedClientState.onlineStateHandler=e=>ad(this.syncEngine,e,1),this.remoteStore.remoteSyncer.handleCredentialChange=gd.bind(null,this.syncEngine),await async function(e,t){const n=ja(e);t?(n.Fr.delete(2),await ku(n)):t||(n.Fr.add(2),await Au(n),n.Br.set("Unknown"))}(this.remoteStore,this.syncEngine.isPrimaryClient))}createEventManager(e){return new Gu}createDatastore(e){const t=bu(e.databaseInfo.databaseId),n=(i=e.databaseInfo,new vu(i));var i;return function(e,t,n){return new Tu(e,t,n)}(e.credentials,n,t)}createRemoteStore(e){return t=this.localStore,n=this.datastore,i=e.asyncQueue,r=e=>ad(this.syncEngine,e,0),s=gu.gt()?new gu:new pu,new Iu(t,n,i,r,s);var t,n,i,r,s}createSyncEngine(e,t){return function(e,t,n,i,r,s,o){const a=new id(e,t,n,i,r,s);return o&&(a.Oo=!0),a}(this.localStore,this.remoteStore,this.eventManager,this.sharedClientState,e.initialUser,e.maxConcurrentLimboResolutions,t)}terminate(){return async function(e){const t=ja(e);Oa("RemoteStore","RemoteStore shutting down."),t.Fr.add(5),await Au(t),t.Lr.shutdown(),t.Br.set("Unknown")}(this.remoteStore)}}class wd{constructor(e){this.observer=e,this.muted=!1}next(e){this.observer.next&&this.Qo(this.observer.next,e)}error(e){this.observer.error?this.Qo(this.observer.error,e):console.error("Uncaught Error in snapshot listener:",e)}Wo(){this.muted=!0}Qo(e,t){this.muted||setTimeout((()=>{this.muted||e(t)}),0)}}class bd{constructor(e){this.datastore=e,this.readVersions=new Map,this.mutations=[],this.committed=!1,this.lastWriteError=null,this.writtenDocs=new Set}async lookup(e){if(this.ensureCommitNotCalled(),this.mutations.length>0)throw new xa(Ra.INVALID_ARGUMENT,"Firestore transactions require all reads to be executed before all writes.");const t=await async function(e,t){const n=ja(e),i=yl(n.R)+"/documents",r={documents:t.map((e=>pl(n.R,e)))},s=await n.Oi("BatchGetDocuments",i,r),o=new Map;s.forEach((e=>{const t=function(e,t){return"found"in t?function(e,t){Fa(!!t.found),t.found.name,t.found.updateTime;const n=gl(e,t.found.name),i=ul(t.found.updateTime),r=new Ic({mapValue:{fields:t.found.fields}});return kc.newFoundDocument(n,i,r)}(e,t):"missing"in t?function(e,t){Fa(!!t.missing),Fa(!!t.readTime);const n=gl(e,t.missing),i=ul(t.readTime);return kc.newNoDocument(n,i)}(e,t):Va()}(n.R,e);o.set(t.key.toString(),t)}));const a=[];return t.forEach((e=>{const t=o.get(e.toString());Fa(!!t),a.push(t)})),a}(this.datastore,e);return t.forEach((e=>this.recordVersion(e))),t}set(e,t){this.write(t.toMutation(e,this.precondition(e))),this.writtenDocs.add(e.toString())}update(e,t){try{this.write(t.toMutation(e,this.preconditionForUpdate(e)))}catch(e){this.lastWriteError=e}this.writtenDocs.add(e.toString())}delete(e){this.write(new xh(e,this.precondition(e))),this.writtenDocs.add(e.toString())}async commit(){if(this.ensureCommitNotCalled(),this.lastWriteError)throw this.lastWriteError;const e=this.readVersions;this.mutations.forEach((t=>{e.delete(t.key.toString())})),e.forEach(((e,t)=>{const n=uc.fromPath(t);this.mutations.push(new Dh(n,this.precondition(n)))})),await async function(e,t){const n=ja(e),i=yl(n.R)+"/documents",r={writes:t.map((e=>function(e,t){let n;if(t instanceof kh)n={update:wl(e,t.key,t.value)};else if(t instanceof xh)n={delete:pl(e,t.key)};else if(t instanceof Ah)n={update:wl(e,t.key,t.data),updateMask:Dl(t.fieldMask)};else{if(!(t instanceof Dh))return Va();n={verify:pl(e,t.key)}}return t.fieldTransforms.length>0&&(n.updateTransforms=t.fieldTransforms.map((e=>function(e,t){const n=t.transform;if(n instanceof uh)return{fieldPath:t.field.canonicalString(),setToServerValue:"REQUEST_TIME"};if(n instanceof dh)return{fieldPath:t.field.canonicalString(),appendMissingElements:{values:n.elements}};if(n instanceof ph)return{fieldPath:t.field.canonicalString(),removeAllFromArray:{values:n.elements}};if(n instanceof mh)return{fieldPath:t.field.canonicalString(),increment:n.A};throw Va()}(0,e)))),t.precondition.isNone||(n.currentDocument=function(e,t){return void 0!==t.updateTime?{updateTime:ll(e,t.updateTime)}:void 0!==t.exists?{exists:t.exists}:Va()}(e,t.precondition)),n}(n.R,e)))};await n.Ni("Commit",i,r)}(this.datastore,this.mutations),this.committed=!0}recordVersion(e){let t;if(e.isFoundDocument())t=e.version;else{if(!e.isNoDocument())throw Va();t=Ka.min()}const n=this.readVersions.get(e.key.toString());if(n){if(!t.isEqual(n))throw new xa(Ra.ABORTED,"Document version changed between two reads.")}else this.readVersions.set(e.key.toString(),t)}precondition(e){const t=this.readVersions.get(e.toString());return!this.writtenDocs.has(e.toString())&&t?wh.updateTime(t):wh.none()}preconditionForUpdate(e){const t=this.readVersions.get(e.toString());if(!this.writtenDocs.has(e.toString())&&t){if(t.isEqual(Ka.min()))throw new xa(Ra.INVALID_ARGUMENT,"Can't update a document that doesn't exist.");return wh.updateTime(t)}return wh.exists(!0)}write(e){this.ensureCommitNotCalled(),this.mutations.push(e)}ensureCommitNotCalled(){}}class _d{constructor(e,t,n,i){this.asyncQueue=e,this.datastore=t,this.updateFunction=n,this.deferred=i,this.ec=5,this.Zi=new _u(this.asyncQueue,"transaction_retry")}run(){this.ec-=1,this.nc()}nc(){this.Zi.Qi((async()=>{const e=new bd(this.datastore),t=this.sc(e);t&&t.then((t=>{this.asyncQueue.enqueueAndForget((()=>e.commit().then((()=>{this.deferred.resolve(t)})).catch((e=>{this.ic(e)}))))})).catch((e=>{this.ic(e)}))}))}sc(e){try{const t=this.updateFunction(e);return!hc(t)&&t.catch&&t.then?t:(this.deferred.reject(Error("Transaction callback must return a Promise")),null)}catch(e){return this.deferred.reject(e),null}}ic(e){this.ec>0&&this.rc(e)?(this.ec-=1,this.asyncQueue.enqueueAndForget((()=>(this.nc(),Promise.resolve())))):this.deferred.reject(e)}rc(e){if("FirebaseError"===e.name){const t=e.code;return"aborted"===t||"failed-precondition"===t||!function(e){switch(e){case Ra.OK:return Va();case Ra.CANCELLED:case Ra.UNKNOWN:case Ra.DEADLINE_EXCEEDED:case Ra.RESOURCE_EXHAUSTED:case Ra.INTERNAL:case Ra.UNAVAILABLE:case Ra.UNAUTHENTICATED:return!1;case Ra.INVALID_ARGUMENT:case Ra.NOT_FOUND:case Ra.ALREADY_EXISTS:case Ra.PERMISSION_DENIED:case Ra.FAILED_PRECONDITION:case Ra.ABORTED:case Ra.OUT_OF_RANGE:case Ra.UNIMPLEMENTED:case Ra.DATA_LOSS:return!0;default:return Va()}}(t)}return!1}}class Ed{constructor(e,t,n){this.credentials=e,this.asyncQueue=t,this.databaseInfo=n,this.user=uu.UNAUTHENTICATED,this.clientId=Ba.u(),this.credentialListener=()=>Promise.resolve(),this.credentials.setChangeListener(t,(async e=>{Oa("FirestoreClient","Received user=",e.uid),await this.credentialListener(e),this.user=e}))}async getConfiguration(){return{asyncQueue:this.asyncQueue,databaseInfo:this.databaseInfo,clientId:this.clientId,credentials:this.credentials,initialUser:this.user,maxConcurrentLimboResolutions:100}}setCredentialChangeListener(e){this.credentialListener=e}verifyNotTerminated(){if(this.asyncQueue.isShuttingDown)throw new xa(Ra.FAILED_PRECONDITION,"The client has already been terminated.")}terminate(){this.asyncQueue.enterRestrictedMode();const e=new Ol;return this.asyncQueue.enqueueAndForgetEvenWhileRestricted((async()=>{try{this.onlineComponents&&await this.onlineComponents.terminate(),this.offlineComponents&&await this.offlineComponents.terminate(),this.credentials.removeChangeListener(),e.resolve()}catch(t){const n=Bu(t,"Failed to shutdown persistence");e.reject(n)}})),e.promise}}async function Td(e,t){e.asyncQueue.verifyOperationInProgress();const n=await async function(e){return e.offlineComponents||(Oa("FirestoreClient","Using default OfflineComponentProvider"),await async function(e,t){e.asyncQueue.verifyOperationInProgress(),Oa("FirestoreClient","Initializing OfflineComponentProvider");const n=await e.getConfiguration();await t.initialize(n);let i=n.initialUser;e.setCredentialChangeListener((async e=>{i.isEqual(e)||(await Jl(t.localStore,e),i=e)})),t.persistence.setDatabaseDeletedListener((()=>e.terminate())),e.offlineComponents=t}(e,new yd)),e.offlineComponents}(e);Oa("FirestoreClient","Initializing OnlineComponentProvider");const i=await e.getConfiguration();await t.initialize(n,i),e.setCredentialChangeListener((e=>async function(e,t){const n=ja(e);n.asyncQueue.verifyOperationInProgress(),Oa("RemoteStore","RemoteStore received new credentials");const i=Ou(n);n.Fr.add(3),await Au(n),i&&n.Br.set("Unknown"),await n.remoteSyncer.handleCredentialChange(t),n.Fr.delete(3),await ku(n)}(t.remoteStore,e))),e.onlineComponents=t}async function Sd(e){return e.onlineComponents||(Oa("FirestoreClient","Using default OnlineComponentProvider"),await Td(e,new vd)),e.onlineComponents}async function Id(e){const t=await Sd(e),n=t.eventManager;return n.onListen=rd.bind(null,t.syncEngine),n.onUnlisten=sd.bind(null,t.syncEngine),n}class kd{constructor(e,t,n,i,r,s,o,a){this.databaseId=e,this.appId=t,this.persistenceKey=n,this.host=i,this.ssl=r,this.forceLongPolling=s,this.autoDetectLongPolling=o,this.useFetchStreams=a}}class Ad{constructor(e,t){this.projectId=e,this.database=t||"(default)"}get isDefaultDatabase(){return"(default)"===this.database}isEqual(e){return e instanceof Ad&&e.projectId===this.projectId&&e.database===this.database}}const Nd=new Map;class Cd{constructor(e,t){this.user=t,this.type="OAuth",this.authHeaders={},this.authHeaders.Authorization=`Bearer ${e}`}}class Rd{constructor(){this.changeListener=null}getToken(){return Promise.resolve(null)}invalidateToken(){}setChangeListener(e,t){this.changeListener=t,e.enqueueRetryable((()=>t(uu.UNAUTHENTICATED)))}removeChangeListener(){this.changeListener=null}}class xd{constructor(e){this.currentUser=uu.UNAUTHENTICATED,this.oc=new Ol,this.cc=0,this.forceRefresh=!1,this.auth=null,this.asyncQueue=null,this.uc=()=>{this.cc++,this.currentUser=this.ac(),this.oc.resolve(),this.changeListener&&this.asyncQueue.enqueueRetryable((()=>this.changeListener(this.currentUser)))};const t=e=>{Oa("FirebaseCredentialsProvider","Auth detected"),this.auth=e,this.auth.addAuthTokenListener(this.uc)};e.onInit((e=>t(e))),setTimeout((()=>{if(!this.auth){const n=e.getImmediate({optional:!0});n?t(n):(Oa("FirebaseCredentialsProvider","Auth not yet detected"),this.oc.resolve())}}),0)}getToken(){const e=this.cc,t=this.forceRefresh;return this.forceRefresh=!1,this.auth?this.auth.getToken(t).then((t=>this.cc!==e?(Oa("FirebaseCredentialsProvider","getToken aborted due to token change."),this.getToken()):t?(Fa("string"==typeof t.accessToken),new Cd(t.accessToken,this.currentUser)):null)):Promise.resolve(null)}invalidateToken(){this.forceRefresh=!0}setChangeListener(e,t){this.asyncQueue=e,this.asyncQueue.enqueueRetryable((async()=>{await this.oc.promise,await t(this.currentUser),this.changeListener=t}))}removeChangeListener(){this.auth&&this.auth.removeAuthTokenListener(this.uc),this.changeListener=()=>Promise.resolve()}ac(){const e=this.auth&&this.auth.getUid();return Fa(null===e||"string"==typeof e),new uu(e)}}class Dd{constructor(e,t,n){this.hc=e,this.lc=t,this.fc=n,this.type="FirstParty",this.user=uu.FIRST_PARTY}get authHeaders(){const e={"X-Goog-AuthUser":this.lc},t=this.hc.auth.getAuthHeaderValueForFirstParty([]);return t&&(e.Authorization=t),this.fc&&(e["X-Goog-Iam-Authorization-Token"]=this.fc),e}}class Ld{constructor(e,t,n){this.hc=e,this.lc=t,this.fc=n}getToken(){return Promise.resolve(new Dd(this.hc,this.lc,this.fc))}setChangeListener(e,t){e.enqueueRetryable((()=>t(uu.FIRST_PARTY)))}removeChangeListener(){}invalidateToken(){}}function Od(e,t,n){if(!n)throw new xa(Ra.INVALID_ARGUMENT,`Function ${e}() cannot be called with an empty ${t}.`)}function Pd(e){if(!uc.isDocumentKey(e))throw new xa(Ra.INVALID_ARGUMENT,`Invalid document reference. Document references must have an even number of segments, but ${e} has ${e.length}.`)}function Md(e){if(void 0===e)return"undefined";if(null===e)return"null";if("string"==typeof e)return e.length>20&&(e=`${e.substring(0,20)}...`),JSON.stringify(e);if("number"==typeof e||"boolean"==typeof e)return""+e;if("object"==typeof e){if(e instanceof Array)return"an array";{const t=function(e){if(e.constructor){const t=/function\s+([^\s(]+)\s*\(/.exec(e.constructor.toString());if(t&&t.length>1)return t[1]}return null}(e);return t?`a custom ${t} object`:"an object"}}return"function"==typeof e?"a function":Va()}function Ud(e,t){if("_delegate"in e&&(e=e._delegate),!(e instanceof t)){if(t.name===e.constructor.name)throw new xa(Ra.INVALID_ARGUMENT,"Type does not match the expected instance. Did you pass a reference from a different Firestore SDK?");{const n=Md(e);throw new xa(Ra.INVALID_ARGUMENT,`Expected type '${t.name}', but it was: ${n}`)}}return e}class Vd{constructor(e){var t;if(void 0===e.host){if(void 0!==e.ssl)throw new xa(Ra.INVALID_ARGUMENT,"Can't provide ssl option if host option is not set");this.host="firestore.googleapis.com",this.ssl=!0}else this.host=e.host,this.ssl=null===(t=e.ssl)||void 0===t||t;if(this.credentials=e.credentials,this.ignoreUndefinedProperties=!!e.ignoreUndefinedProperties,void 0===e.cacheSizeBytes)this.cacheSizeBytes=41943040;else{if(-1!==e.cacheSizeBytes&&e.cacheSizeBytes<1048576)throw new xa(Ra.INVALID_ARGUMENT,"cacheSizeBytes must be at least 1048576");this.cacheSizeBytes=e.cacheSizeBytes}this.experimentalForceLongPolling=!!e.experimentalForceLongPolling,this.experimentalAutoDetectLongPolling=!!e.experimentalAutoDetectLongPolling,this.useFetchStreams=!!e.useFetchStreams,function(e,t,n,i){if(!0===t&&!0===i)throw new xa(Ra.INVALID_ARGUMENT,"experimentalForceLongPolling and experimentalAutoDetectLongPolling cannot be used together.")}(0,e.experimentalForceLongPolling,0,e.experimentalAutoDetectLongPolling)}isEqual(e){return this.host===e.host&&this.ssl===e.ssl&&this.credentials===e.credentials&&this.cacheSizeBytes===e.cacheSizeBytes&&this.experimentalForceLongPolling===e.experimentalForceLongPolling&&this.experimentalAutoDetectLongPolling===e.experimentalAutoDetectLongPolling&&this.ignoreUndefinedProperties===e.ignoreUndefinedProperties&&this.useFetchStreams===e.useFetchStreams}}class Fd{constructor(e,t){this.type="firestore-lite",this._persistenceKey="(lite)",this._settings=new Vd({}),this._settingsFrozen=!1,e instanceof Ad?(this._databaseId=e,this._credentials=new Rd):(this._app=e,this._databaseId=function(e){if(!Object.prototype.hasOwnProperty.apply(e.options,["projectId"]))throw new xa(Ra.INVALID_ARGUMENT,'"projectId" not provided in firebase.initializeApp.');return new Ad(e.options.projectId)}(e),this._credentials=new xd(t))}get app(){if(!this._app)throw new xa(Ra.FAILED_PRECONDITION,"Firestore was not initialized using the Firebase SDK. 'app' is not available");return this._app}get _initialized(){return this._settingsFrozen}get _terminated(){return void 0!==this._terminateTask}_setSettings(e){if(this._settingsFrozen)throw new xa(Ra.FAILED_PRECONDITION,"Firestore has already been started and its settings can no longer be changed. You can only modify settings before calling any other methods on a Firestore object.");this._settings=new Vd(e),void 0!==e.credentials&&(this._credentials=function(e){if(!e)return new Rd;switch(e.type){case"gapi":const t=e.client;return Fa(!("object"!=typeof t||null===t||!t.auth||!t.auth.getAuthHeaderValueForFirstParty)),new Ld(t,e.sessionIndex||"0",e.iamToken||null);case"provider":return e.client;default:throw new xa(Ra.INVALID_ARGUMENT,"makeCredentialsProvider failed due to invalid credential type")}}(e.credentials))}_getSettings(){return this._settings}_freezeSettings(){return this._settingsFrozen=!0,this._settings}_delete(){return this._terminateTask||(this._terminateTask=this._terminate()),this._terminateTask}toJSON(){return{app:this._app,databaseId:this._databaseId,settings:this._settings}}_terminate(){return function(e){const t=Nd.get(e);t&&(Oa("ComponentProvider","Removing Datastore"),Nd.delete(e),t.terminate())}(this),Promise.resolve()}}class jd{constructor(e,t,n){this.converter=t,this._key=n,this.type="document",this.firestore=e}get _path(){return this._key.path}get id(){return this._key.path.lastSegment()}get path(){return this._key.path.canonicalString()}get parent(){return new Bd(this.firestore,this.converter,this._key.path.popLast())}withConverter(e){return new jd(this.firestore,e,this._key)}}class qd{constructor(e,t,n){this.converter=t,this._query=n,this.type="query",this.firestore=e}withConverter(e){return new qd(this.firestore,e,this._query)}}class Bd extends qd{constructor(e,t,n){super(e,t,Wc(n)),this._path=n,this.type="collection"}get id(){return this._query.path.lastSegment()}get path(){return this._query.path.canonicalString()}get parent(){const e=this._path.popLast();return e.isEmpty()?null:new jd(this.firestore,null,new uc(e))}withConverter(e){return new Bd(this.firestore,e,this._path)}}class $d{constructor(){this.dc=Promise.resolve(),this.wc=[],this._c=!1,this.mc=[],this.gc=null,this.yc=!1,this.Ec=!1,this.Tc=[],this.Zi=new _u(this,"async_queue_retry"),this.Ic=()=>{const e=wu();e&&Oa("AsyncQueue","Visibility state changed to "+e.visibilityState),this.Zi.Gi()};const e=wu();e&&"function"==typeof e.addEventListener&&e.addEventListener("visibilitychange",this.Ic)}get isShuttingDown(){return this._c}enqueueAndForget(e){this.enqueue(e)}enqueueAndForgetEvenWhileRestricted(e){this.Ac(),this.Rc(e)}enterRestrictedMode(e){if(!this._c){this._c=!0,this.Ec=e||!1;const t=wu();t&&"function"==typeof t.removeEventListener&&t.removeEventListener("visibilitychange",this.Ic)}}enqueue(e){if(this.Ac(),this._c)return new Promise((()=>{}));const t=new Ol;return this.Rc((()=>this._c&&this.Ec?Promise.resolve():(e().then(t.resolve,t.reject),t.promise))).then((()=>t.promise))}enqueueRetryable(e){this.enqueueAndForget((()=>(this.wc.push(e),this.Pc())))}async Pc(){if(0!==this.wc.length){try{await this.wc[0](),this.wc.shift(),this.Zi.reset()}catch(e){if(!Ml(e))throw e;Oa("AsyncQueue","Operation failed with retryable error: "+e)}this.wc.length>0&&this.Zi.Qi((()=>this.Pc()))}}Rc(e){const t=this.dc.then((()=>(this.yc=!0,e().catch((e=>{throw this.gc=e,this.yc=!1,Pa("INTERNAL UNHANDLED ERROR: ",function(e){let t=e.message||"";return e.stack&&(t=e.stack.includes(e.message)?e.stack:e.message+"\n"+e.stack),t}(e)),e})).then((e=>(this.yc=!1,e))))));return this.dc=t,t}enqueueAfterDelay(e,t,n){this.Ac(),this.Tc.indexOf(e)>-1&&(t=0);const i=qu.createAndSchedule(this,e,t,n,(e=>this.bc(e)));return this.mc.push(i),i}Ac(){this.gc&&Va()}verifyOperationInProgress(){}async vc(){let e;do{e=this.dc,await e}while(e!==this.dc)}Vc(e){for(const t of this.mc)if(t.timerId===e)return!0;return!1}Sc(e){return this.vc().then((()=>{this.mc.sort(((e,t)=>e.targetTimeMs-t.targetTimeMs));for(const t of this.mc)if(t.skipDelay(),"all"!==e&&t.timerId===e)break;return this.vc()}))}Dc(e){this.Tc.push(e)}bc(e){const t=this.mc.indexOf(e);this.mc.splice(t,1)}}function Hd(e){return function(e,t){if("object"!=typeof e||null===e)return!1;const n=e;for(const e of["next","error","complete"])if(e in n&&"function"==typeof n[e])return!0;return!1}(e)}class zd extends Fd{constructor(e,t){super(e,t),this.type="firestore",this._queue=new $d,this._persistenceKey="name"in e?e.name:"[DEFAULT]"}_terminate(){return this._firestoreClient||Wd(this),this._firestoreClient.terminate()}}function Kd(e=Ye()){return Qe(e,"firestore-exp").getImmediate()}function Gd(e){return e._firestoreClient||Wd(e),e._firestoreClient.verifyNotTerminated(),e._firestoreClient}function Wd(e){var t;const n=e._freezeSettings(),i=function(e,t,n,i){return new kd(e,t,n,i.host,i.ssl,i.experimentalForceLongPolling,i.experimentalAutoDetectLongPolling,i.useFetchStreams)}(e._databaseId,(null===(t=e._app)||void 0===t?void 0:t.options.appId)||"",e._persistenceKey,n);e._firestoreClient=new Ed(e._credentials,e._queue,i)}class Qd{constructor(...e){for(let t=0;t<e.length;++t)if(0===e[t].length)throw new xa(Ra.INVALID_ARGUMENT,"Invalid field name at argument $(i + 1). Field names must not be empty.");this._internalPath=new Za(e)}isEqual(e){return this._internalPath.isEqual(e._internalPath)}}class Jd{constructor(e){this._byteString=e}static fromBase64String(e){try{return new Jd(tc.fromBase64String(e))}catch(e){throw new xa(Ra.INVALID_ARGUMENT,"Failed to construct data from Base64 string: "+e)}}static fromUint8Array(e){return new Jd(tc.fromUint8Array(e))}toBase64(){return this._byteString.toBase64()}toUint8Array(){return this._byteString.toUint8Array()}toString(){return"Bytes(base64: "+this.toBase64()+")"}isEqual(e){return this._byteString.isEqual(e._byteString)}}class Xd{constructor(e){this._methodName=e}}class Yd{constructor(e,t){if(!isFinite(e)||e<-90||e>90)throw new xa(Ra.INVALID_ARGUMENT,"Latitude must be a number between -90 and 90, but was: "+e);if(!isFinite(t)||t<-180||t>180)throw new xa(Ra.INVALID_ARGUMENT,"Longitude must be a number between -180 and 180, but was: "+t);this._lat=e,this._long=t}get latitude(){return this._lat}get longitude(){return this._long}isEqual(e){return this._lat===e._lat&&this._long===e._long}toJSON(){return{latitude:this._lat,longitude:this._long}}_compareTo(e){return $a(this._lat,e._lat)||$a(this._long,e._long)}}const Zd=/^__.*__$/;class ef{constructor(e,t,n){this.data=e,this.fieldMask=t,this.fieldTransforms=n}toMutation(e,t){return null!==this.fieldMask?new Ah(e,this.data,this.fieldMask,t,this.fieldTransforms):new kh(e,this.data,t,this.fieldTransforms)}}class tf{constructor(e,t,n){this.data=e,this.fieldMask=t,this.fieldTransforms=n}toMutation(e,t){return new Ah(e,this.data,this.fieldMask,t,this.fieldTransforms)}}function nf(e){switch(e){case 0:case 2:case 1:return!0;case 3:case 4:return!1;default:throw Va()}}class rf{constructor(e,t,n,i,r,s){this.settings=e,this.databaseId=t,this.R=n,this.ignoreUndefinedProperties=i,void 0===r&&this.Cc(),this.fieldTransforms=r||[],this.fieldMask=s||[]}get path(){return this.settings.path}get Nc(){return this.settings.Nc}xc(e){return new rf(Object.assign(Object.assign({},this.settings),e),this.databaseId,this.R,this.ignoreUndefinedProperties,this.fieldTransforms,this.fieldMask)}kc(e){var t;const n=null===(t=this.path)||void 0===t?void 0:t.child(e),i=this.xc({path:n,$c:!1});return i.Oc(e),i}Fc(e){var t;const n=null===(t=this.path)||void 0===t?void 0:t.child(e),i=this.xc({path:n,$c:!1});return i.Cc(),i}Mc(e){return this.xc({path:void 0,$c:!0})}Lc(e){return pf(e,this.settings.methodName,this.settings.Bc||!1,this.path,this.settings.Uc)}contains(e){return void 0!==this.fieldMask.find((t=>e.isPrefixOf(t)))||void 0!==this.fieldTransforms.find((t=>e.isPrefixOf(t.field)))}Cc(){if(this.path)for(let e=0;e<this.path.length;e++)this.Oc(this.path.get(e))}Oc(e){if(0===e.length)throw this.Lc("Document fields must not be empty");if(nf(this.Nc)&&Zd.test(e))throw this.Lc('Document fields cannot begin and end with "__"')}}class sf{constructor(e,t,n){this.databaseId=e,this.ignoreUndefinedProperties=t,this.R=n||bu(e)}qc(e,t,n,i=!1){return new rf({Nc:e,methodName:t,Uc:n,path:Za.emptyPath(),$c:!1,Bc:i},this.databaseId,this.R,this.ignoreUndefinedProperties)}}class of extends Xd{_toFieldTransform(e){if(2!==e.Nc)throw 1===e.Nc?e.Lc(`${this._methodName}() can only appear at the top level of your update data`):e.Lc(`${this._methodName}() cannot be used with set() unless you pass {merge:true}`);return e.fieldMask.push(e.path),null}isEqual(e){return e instanceof of}}function af(e,t){if(hf(e=Re(e)))return lf("Unsupported field value:",t,e),cf(e,t);if(e instanceof Xd)return function(e,t){if(!nf(t.Nc))throw t.Lc(`${e._methodName}() can only be used with update() and set()`);if(!t.path)throw t.Lc(`${e._methodName}() is not currently supported inside arrays`);const n=e._toFieldTransform(t);n&&t.fieldTransforms.push(n)}(e,t),null;if(void 0===e&&t.ignoreUndefinedProperties)return null;if(t.path&&t.fieldMask.push(t.path),e instanceof Array){if(t.settings.$c&&4!==t.Nc)throw t.Lc("Nested arrays are not supported");return function(e,t){const n=[];let i=0;for(const r of e){let e=af(r,t.Mc(i));null==e&&(e={nullValue:"NULL_VALUE"}),n.push(e),i++}return{arrayValue:{values:n}}}(e,t)}return function(e,t){if(null===(e=Re(e)))return{nullValue:"NULL_VALUE"};if("number"==typeof e)return ah(t.R,e);if("boolean"==typeof e)return{booleanValue:e};if("string"==typeof e)return{stringValue:e};if(e instanceof Date){const n=za.fromDate(e);return{timestampValue:cl(t.R,n)}}if(e instanceof za){const n=new za(e.seconds,1e3*Math.floor(e.nanoseconds/1e3));return{timestampValue:cl(t.R,n)}}if(e instanceof Yd)return{geoPointValue:{latitude:e.latitude,longitude:e.longitude}};if(e instanceof Jd)return{bytesValue:hl(t.R,e._byteString)};if(e instanceof jd){const n=t.databaseId,i=e.firestore._databaseId;if(!i.isEqual(n))throw t.Lc(`Document reference is for database ${i.projectId}/${i.database} but should be for database ${n.projectId}/${n.database}`);return{referenceValue:dl(e.firestore._databaseId||t.databaseId,e._key.path)}}throw t.Lc(`Unsupported field value: ${Md(e)}`)}(e,t)}function cf(e,t){const n={};return Qa(e)?t.path&&t.path.length>0&&t.fieldMask.push(t.path):Wa(e,((e,i)=>{const r=af(i,t.kc(e));null!=r&&(n[e]=r)})),{mapValue:{fields:n}}}function hf(e){return!("object"!=typeof e||null===e||e instanceof Array||e instanceof Date||e instanceof za||e instanceof Yd||e instanceof Jd||e instanceof jd||e instanceof Xd)}function lf(e,t,n){if(!hf(n)||!function(e){return"object"==typeof e&&null!==e&&(Object.getPrototypeOf(e)===Object.prototype||null===Object.getPrototypeOf(e))}(n)){const i=Md(n);throw"an object"===i?t.Lc(e+" a custom object"):t.Lc(e+" "+i)}}function uf(e,t,n){if((t=Re(t))instanceof Qd)return t._internalPath;if("string"==typeof t)return ff(e,t);throw pf("Field path arguments must be of type string or FieldPath.",e,!1,void 0,n)}const df=new RegExp("[~\\*/\\[\\]]");function ff(e,t,n){if(t.search(df)>=0)throw pf(`Invalid field path (${t}). Paths must not contain '~', '*', '/', '[', or ']'`,e,!1,void 0,n);try{return new Qd(...t.split("."))._internalPath}catch(i){throw pf(`Invalid field path (${t}). Paths must not be empty, begin with '.', end with '.', or contain '..'`,e,!1,void 0,n)}}function pf(e,t,n,i,r){const s=i&&!i.isEmpty(),o=void 0!==r;let a=`Function ${t}() called with invalid data`;n&&(a+=" (via `toFirestore()`)"),a+=". ";let c="";return(s||o)&&(c+=" (found",s&&(c+=` in field ${i}`),o&&(c+=` in document ${r}`),c+=")"),new xa(Ra.INVALID_ARGUMENT,a+e+c)}function gf(e,t){return e.some((e=>e.isEqual(t)))}class mf{constructor(e,t,n,i,r){this._firestore=e,this._userDataWriter=t,this._key=n,this._document=i,this._converter=r}get id(){return this._key.path.lastSegment()}get ref(){return new jd(this._firestore,this._converter,this._key)}exists(){return null!==this._document}data(){if(this._document){if(this._converter){const e=new yf(this._firestore,this._userDataWriter,this._key,this._document,null);return this._converter.fromFirestore(e)}return this._userDataWriter.convertValue(this._document.data.value)}}get(e){if(this._document){const t=this._document.data.field(vf("DocumentSnapshot.get",e));if(null!==t)return this._userDataWriter.convertValue(t)}}}class yf extends mf{data(){return super.data()}}function vf(e,t){return"string"==typeof t?ff(e,t):t instanceof Qd?t._internalPath:t._delegate._internalPath}class wf{constructor(e,t){this.hasPendingWrites=e,this.fromCache=t}isEqual(e){return this.hasPendingWrites===e.hasPendingWrites&&this.fromCache===e.fromCache}}class bf extends mf{constructor(e,t,n,i,r,s){super(e,t,n,i,s),this._firestore=e,this._firestoreImpl=e,this.metadata=r}exists(){return super.exists()}data(e={}){if(this._document){if(this._converter){const t=new _f(this._firestore,this._userDataWriter,this._key,this._document,this.metadata,null);return this._converter.fromFirestore(t,e)}return this._userDataWriter.convertValue(this._document.data.value,e.serverTimestamps)}}get(e,t={}){if(this._document){const n=this._document.data.field(vf("DocumentSnapshot.get",e));if(null!==n)return this._userDataWriter.convertValue(n,t.serverTimestamps)}}}class _f extends bf{data(e={}){return super.data(e)}}class Ef{constructor(e,t,n,i){this._firestore=e,this._userDataWriter=t,this._snapshot=i,this.metadata=new wf(i.hasPendingWrites,i.fromCache),this.query=n}get docs(){const e=[];return this.forEach((t=>e.push(t))),e}get size(){return this._snapshot.docs.size}get empty(){return 0===this.size}forEach(e,t){this._snapshot.docs.forEach((n=>{e.call(t,new _f(this._firestore,this._userDataWriter,n.key,n,new wf(this._snapshot.mutatedKeys.has(n.key),this._snapshot.fromCache),this.query.converter))}))}docChanges(e={}){const t=!!e.includeMetadataChanges;if(t&&this._snapshot.excludesMetadataChanges)throw new xa(Ra.INVALID_ARGUMENT,"To include metadata changes with your document changes, you must also pass { includeMetadataChanges:true } to onSnapshot().");return this._cachedChanges&&this._cachedChangesIncludeMetadataChanges===t||(this._cachedChanges=function(e,t){if(e._snapshot.oldDocs.isEmpty()){let t=0;return e._snapshot.docChanges.map((n=>({type:"added",doc:new _f(e._firestore,e._userDataWriter,n.doc.key,n.doc,new wf(e._snapshot.mutatedKeys.has(n.doc.key),e._snapshot.fromCache),e.query.converter),oldIndex:-1,newIndex:t++})))}{let n=e._snapshot.oldDocs;return e._snapshot.docChanges.filter((e=>t||3!==e.type)).map((t=>{const i=new _f(e._firestore,e._userDataWriter,t.doc.key,t.doc,new wf(e._snapshot.mutatedKeys.has(t.doc.key),e._snapshot.fromCache),e.query.converter);let r=-1,s=-1;return 0!==t.type&&(r=n.indexOf(t.doc.key),n=n.delete(t.doc.key)),1!==t.type&&(n=n.add(t.doc),s=n.indexOf(t.doc.key)),{type:Tf(t.type),doc:i,oldIndex:r,newIndex:s}}))}}(this,t),this._cachedChangesIncludeMetadataChanges=t),this._cachedChanges}}function Tf(e){switch(e){case 0:return"added";case 2:case 3:return"modified";case 1:return"removed";default:return Va()}}class Sf{convertValue(e,t="none"){switch(dc(e)){case 0:return null;case 1:return e.booleanValue;case 2:return rc(e.integerValue||e.doubleValue);case 3:return this.convertTimestamp(e.timestampValue);case 4:return this.convertServerTimestamp(e,t);case 5:return e.stringValue;case 6:return this.convertBytes(sc(e.bytesValue));case 7:return this.convertReference(e.referenceValue);case 8:return this.convertGeoPoint(e.geoPointValue);case 9:return this.convertArray(e.arrayValue,t);case 10:return this.convertObject(e.mapValue,t);default:throw Va()}}convertObject(e,t){const n={};return Wa(e.fields,((e,i)=>{n[e]=this.convertValue(i,t)})),n}convertGeoPoint(e){return new Yd(rc(e.latitude),rc(e.longitude))}convertArray(e,t){return(e.values||[]).map((e=>this.convertValue(e,t)))}convertServerTimestamp(e,t){switch(t){case"previous":const n=ac(e);return null==n?null:this.convertValue(n,t);case"estimate":return this.convertTimestamp(cc(e));default:return null}}convertTimestamp(e){const t=ic(e);return new za(t.seconds,t.nanos)}convertDocumentKey(e,t){const n=Xa.fromString(e);Fa(Ll(n));const i=new Ad(n.get(1),n.get(3)),r=new uc(n.popFirst(5));return i.isEqual(t)||Pa(`Document ${r} contains a document reference within a different database (${i.projectId}/${i.database}) which is not supported. It will be treated as a reference in the current database (${t.projectId}/${t.database}) instead.`),r}}class If extends Sf{constructor(e){super(),this.firestore=e}convertBytes(e){return new Jd(e)}convertReference(e){const t=this.convertDocumentKey(e,this.firestore._databaseId);return new jd(this.firestore,null,t)}}function kf(e,t){if((e=Re(e)).firestore!==t)throw new xa(Ra.INVALID_ARGUMENT,"Provided document reference is from a different Firestore instance.");return e}class Af extends Sf{constructor(e){super(),this.firestore=e}convertBytes(e){return new Jd(e)}convertReference(e){const t=this.convertDocumentKey(e,this.firestore._databaseId);return new jd(this.firestore,null,t)}}function Nf(e,...t){var n,i,r;e=Re(e);let s={includeMetadataChanges:!1},o=0;"object"!=typeof t[o]||Hd(t[o])||(s=t[o],o++);const a={includeMetadataChanges:s.includeMetadataChanges};if(Hd(t[o])){const e=t[o];t[o]=null===(n=e.next)||void 0===n?void 0:n.bind(e),t[o+1]=null===(i=e.error)||void 0===i?void 0:i.bind(e),t[o+2]=null===(r=e.complete)||void 0===r?void 0:r.bind(e)}let c,h,l;if(e instanceof jd)h=Ud(e.firestore,zd),l=Wc(e._key.path),c={next:n=>{t[o]&&t[o](function(e,t,n){const i=n.docs.get(t._key),r=new Af(e);return new bf(e,r,t._key,i,new wf(n.hasPendingWrites,n.fromCache),t.converter)}(h,e,n))},error:t[o+1],complete:t[o+2]};else{const n=Ud(e,qd);h=Ud(n.firestore,zd),l=n._query;const i=new Af(h);c={next:e=>{t[o]&&t[o](new Ef(h,i,n,e))},error:t[o+1],complete:t[o+2]},function(e){if(Jc(e)&&0===e.explicitOrderBy.length)throw new xa(Ra.UNIMPLEMENTED,"limitToLast() queries require specifying at least one orderBy() clause")}(e._query)}return function(e,t,n,i){const r=new wd(i),s=new Xu(t,r,n);return e.asyncQueue.enqueueAndForget((async()=>async function(e,t){const n=ja(e),i=t.query;let r=!1,s=n.queries.get(i);if(s||(r=!0,s=new Ku),r)try{s.Wr=await n.onListen(i)}catch(e){const n=Bu(e,`Initialization of query '${th(t.query)}' failed`);return void t.onError(n)}n.queries.set(i,s),s.listeners.push(t),t.zr(n.onlineState),s.Wr&&t.Hr(s.Wr)&&Ju(n)}(await Id(e),s))),()=>{r.Wo(),e.asyncQueue.enqueueAndForget((async()=>async function(e,t){const n=ja(e),i=t.query;let r=!1;const s=n.queries.get(i);if(s){const e=s.listeners.indexOf(t);e>=0&&(s.listeners.splice(e,1),r=0===s.listeners.length)}if(r)return n.queries.delete(i),n.onUnlisten(i)}(await Id(e),s)))}}(Gd(h),l,a,c)}class Cf extends class{constructor(e,t){this._firestore=e,this._transaction=t,this._dataReader=function(e){const t=e._freezeSettings(),n=bu(e._databaseId);return new sf(e._databaseId,!!t.ignoreUndefinedProperties,n)}(e)}get(e){const t=kf(e,this._firestore),n=new If(this._firestore);return this._transaction.lookup([t._key]).then((e=>{if(!e||1!==e.length)return Va();const i=e[0];if(i.isFoundDocument())return new mf(this._firestore,n,i.key,i,t.converter);if(i.isNoDocument())return new mf(this._firestore,n,t._key,null,t.converter);throw Va()}))}set(e,t,n){const i=kf(e,this._firestore),r=function(e,t,n){let i;return i=e?n&&(n.merge||n.mergeFields)?e.toFirestore(t,n):e.toFirestore(t):t,i}(i.converter,t,n),s=function(e,t,n,i,r,s={}){const o=e.qc(s.merge||s.mergeFields?2:0,t,n,r);lf("Data must be an object, but it was:",o,i);const a=cf(i,o);let c,h;if(s.merge)c=new ec(o.fieldMask),h=o.fieldTransforms;else if(s.mergeFields){const e=[];for(const i of s.mergeFields){const r=uf(t,i,n);if(!o.contains(r))throw new xa(Ra.INVALID_ARGUMENT,`Field '${r}' is specified in your field mask but missing from your input data.`);gf(e,r)||e.push(r)}c=new ec(e),h=o.fieldTransforms.filter((e=>c.covers(e.field)))}else c=null,h=o.fieldTransforms;return new ef(new Ic(a),c,h)}(this._dataReader,"Transaction.set",i._key,r,null!==i.converter,n);return this._transaction.set(i._key,s),this}update(e,t,n,...i){const r=kf(e,this._firestore);let s;return s="string"==typeof(t=Re(t))||t instanceof Qd?function(e,t,n,i,r,s){const o=e.qc(1,t,n),a=[uf(t,i,n)],c=[r];if(s.length%2!=0)throw new xa(Ra.INVALID_ARGUMENT,`Function ${t}() needs to be called with an even number of arguments that alternate between field names and values.`);for(let e=0;e<s.length;e+=2)a.push(uf(t,s[e])),c.push(s[e+1]);const h=[],l=Ic.empty();for(let e=a.length-1;e>=0;--e)if(!gf(h,a[e])){const t=a[e];let n=c[e];n=Re(n);const i=o.Fc(t);if(n instanceof of)h.push(t);else{const e=af(n,i);null!=e&&(h.push(t),l.set(t,e))}}const u=new ec(h);return new tf(l,u,o.fieldTransforms)}(this._dataReader,"Transaction.update",r._key,t,n,i):function(e,t,n,i){const r=e.qc(1,t,n);lf("Data must be an object, but it was:",r,i);const s=[],o=Ic.empty();Wa(i,((e,i)=>{const a=ff(t,e,n);i=Re(i);const c=r.Fc(a);if(i instanceof of)s.push(a);else{const e=af(i,c);null!=e&&(s.push(a),o.set(a,e))}}));const a=new ec(s);return new tf(o,a,r.fieldTransforms)}(this._dataReader,"Transaction.update",r._key,t),this._transaction.update(r._key,s),this}delete(e){const t=kf(e,this._firestore);return this._transaction.delete(t._key),this}}{constructor(e,t){super(e,t),this._firestore=e}get(e){const t=kf(e,this._firestore),n=new Af(this._firestore);return super.get(e).then((e=>new bf(this._firestore,n,t._key,e._document,new wf(!1,!1),t.converter)))}}function Rf(e,t){return function(e,t){const n=new Ol;return e.asyncQueue.enqueueAndForget((async()=>{const i=await function(e){return Sd(e).then((e=>e.datastore))}(e);new _d(e.asyncQueue,i,t,n).run()})),n.promise}(Gd(e),(n=>t(new Cf(e,n))))}Na="9.0.0-beta.7",We(new xe("firestore-exp",((e,{options:t})=>{const n=e.getProvider("app-exp").getImmediate(),i=new zd(n,e.getProvider("auth-internal"));return t=Object.assign({useFetchStreams:!1},t),i._setSettings(t),i}),"PUBLIC")),Ze("@firebase/firestore","0.0.900-exp.6ef484a04",undefined);var xf,Df,Lf=function(){return"".concat(Date.now(),"-").concat(Math.floor(8999999999999*Math.random())+1e12)},Of=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:-1;return{name:e,value:t,delta:0,entries:[],id:Lf(),isFinal:!1}},Pf=function(e,t){try{if(PerformanceObserver.supportedEntryTypes.includes(e)){var n=new PerformanceObserver((function(e){return e.getEntries().map(t)}));return n.observe({type:e,buffered:!0}),n}}catch(e){}},Mf=!1,Uf=!1,Vf=function(e){Mf=!e.persisted},Ff=function(){addEventListener("pagehide",Vf),addEventListener("beforeunload",(function(){}))},jf=function(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1];Uf||(Ff(),Uf=!0),addEventListener("visibilitychange",(function(t){var n=t.timeStamp;"hidden"===document.visibilityState&&e({timeStamp:n,isUnloading:Mf})}),{capture:!0,once:t})},qf=function(e,t,n,i){var r;return function(){n&&t.isFinal&&n.disconnect(),t.value>=0&&(i||t.isFinal||"hidden"===document.visibilityState)&&(t.delta=t.value-(r||0),(t.delta||t.isFinal||void 0===r)&&(e(t),r=t.value))}},Bf=function(){return void 0===xf&&(xf="hidden"===document.visibilityState?0:1/0,jf((function(e){var t=e.timeStamp;return xf=t}),!0)),{get timeStamp(){return xf}}},$f=function(){return Df||(Df=new Promise((function(e){return["scroll","keydown","pointerdown"].map((function(t){addEventListener(t,e,{once:!0,passive:!0,capture:!0})}))}))),Df},Hf="dimension1";function zf({category:e,action:t,label:n,value:i}){ga("send","event",{eventCategory:e,eventAction:t,eventLabel:n,eventValue:i})}function Kf(e,t="",n=!1){const i=t?`${t} (${e.message})`:e.message;ga("send","exception",{exDescription:i,exFatal:n})}function Gf({name:e,delta:t,id:n}){ga("send","event",{eventCategory:"Web Vitals",eventAction:e,eventValue:Math.round("CLS"===e?1e3*t:t),eventLabel:n,nonInteraction:!0})}function Wf(){const t=e.getState();if(!t.user)return null;return function(e,t,...n){if(e=Re(e),1===arguments.length&&(t=Ba.u()),Od("doc","path",t),e instanceof Fd){const i=Xa.fromString(t,...n);return Pd(i),new jd(e,null,new uc(i))}{if(!(e instanceof jd||e instanceof Bd))throw new xa(Ra.INVALID_ARGUMENT,"Expected first argument to collection() to be a CollectionReference, a DocumentReference or FirebaseFirestore");const i=e._path.child(Xa.fromString(t,...n));return Pd(i),new jd(e.firestore,e instanceof Bd?e.converter:null,new uc(i))}}(Kd(),"users",t.user.uid)}async function Qf(e,t=null){const n=Wf();if(!n)return null;const i=Rf(Kd(),(async i=>{const r=(await i.get(n)).data()||{},s={currentUrl:e},o=r.urls&&r.urls[e]||null;if(o){const e=o.toDate();e.getTime()&&e.getTime()<t.getTime()&&(t=e)}else t&&t.getTime()&&(s.urls={[e]:t});return i.set(n,s,{merge:!0})}));try{await i}catch(e){console.warn("could not write URL to Firestore",e),Kf(e,"write URL")}return t}async function Jf(){let e=null;try{const t=new on;e=(await async function(e,t,n){const i=Xt(e);at(t instanceof nn,e,"argument-error");const r=Yn(i,n);return new ui(i,"signInViaPopup",t,r).executeNotNull()}(di(),t)).user}catch(e){console.error("signIn error",e),Kf(e,"signIn")}return e}async function Xf(){try{await(e=di(),Re(e).signOut())}catch(e){console.error("signOut error",e),Kf(e,"signOut")}var e}document.addEventListener("click",(e=>{const t=e.target.closest("a[href], .gc-analytics-event");if(!t)return;const n=function(e,t="click"){return{category:e.dataset.category||void 0,action:e.dataset.action||t,label:e.dataset.label||void 0,value:Number(e.dataset.value)||void 0}}(t);n.category&&zf(n)})),e.subscribe((({isSignedIn:e})=>{ga("set",Hf,e?"1":"0")})),function(e){var t,n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],i=Of("CLS",0),r=function(e){e.hadRecentInput||(i.value+=e.value,i.entries.push(e),t())},s=Pf("layout-shift",r);s&&(t=qf(e,i,s,n),jf((function(e){var n=e.isUnloading;s.takeRecords().map(r),n&&(i.isFinal=!0),t()})))}(Gf),function(e){var t=Of("FID"),n=Bf(),i=function(e){e.startTime<n.timeStamp&&(t.value=e.processingStart-e.startTime,t.entries.push(e),t.isFinal=!0,s())},r=Pf("first-input",i),s=qf(e,t,r);r?jf((function(){r.takeRecords().map(i),r.disconnect()}),!0):window.perfMetrics&&window.perfMetrics.onFirstInputDelay&&window.perfMetrics.onFirstInputDelay((function(e,i){i.timeStamp<n.timeStamp&&(t.value=e,t.isFinal=!0,t.entries=[{entryType:"first-input",name:i.type,target:i.target,cancelable:i.cancelable,startTime:i.timeStamp,processingStart:i.timeStamp+e}],s())}))}(Gf),function(e){var t,n=arguments.length>1&&void 0!==arguments[1]&&arguments[1],i=Of("LCP"),r=Bf(),s=function(e){var n=e.startTime;n<r.timeStamp?(i.value=n,i.entries.push(e)):i.isFinal=!0,t()},o=Pf("largest-contentful-paint",s);if(o){t=qf(e,i,o,n);var a=function(){i.isFinal||(o.takeRecords().map(s),i.isFinal=!0,t())};$f().then(a),jf(a,!0)}}(Gf),function(){!function(e,t={}){"object"!=typeof t&&(t={name:t});const n=Object.assign({name:"[DEFAULT]",automaticDataCollectionEnabled:!1},t),i=n.name;if("string"!=typeof i||!i)throw Je.create("bad-app-name",{appName:String(i)});if(ze.has(i))throw Je.create("duplicate-app",{appName:i});const r=new Pe(i);for(const e of Ke.values())r.addComponent(e);const s=new Xe(e,n,r);ze.set(i,s)}(t);let n=()=>{},i=null;const r=t=>{let n=!1;const r=t.data()||{},s=r.currentUrl||"",{userUrl:o,userUrlSeen:a,activeLighthouseUrl:c}=e.getState();if(null!==c);else if(i&&i!==s)n=!0;else if(o){if(!i&&o)return Qf(o,a),void(i=o)}else n=!0;if(i=s,n){const t=r.urls&&r.urls[s]||null,n=t?t.toDate():null,i=Boolean(s);e.setState({userUrl:s,userUrlSeen:n,userUrlResultsPending:i})}};di().onAuthStateChanged((t=>{e.setState({checkingSignedInState:!1}),n(),t?(e.setState({isSignedIn:!0,user:t}),i=null,n=function(){let e=null,t=!1;return t||(e=Nf(Wf(),r)),()=>{t=!0,e&&(e(),e=null)}}()):sp()}))}();const Yf="https://lighthouse-dot-webdotdevsite.appspot.com/";async function Zf(e,t=null){const n=window.encodeURIComponent(e);let i=`${Yf}/lh/reports?url=${n}`;t&&(i+=`&since=${t.getTime()}`);const r=await window.fetch(i),s=await r.json();if(!r.ok)throw new Error(s.errors);return s}const ep={en:"English",pl:"Polski",es:"Español",ko:"한국어",zn:"Chinese",ru:"Rусский",pt:"Português",ja:"日本語"},tp=Object.keys(ep);var np={languageNames:ep,defaultLanguage:"en",isValidLanguage:function(e){return tp.indexOf(e)>-1},supportedLanguages:tp};"undefined"!=typeof globalThis?globalThis:"undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self&&self;function ip(e){var t={exports:{}};return e(t,t.exports),t.exports}var rp=ip((function(e,t){var n;n=function(){function e(){for(var e=0,t={};e<arguments.length;e++){var n=arguments[e];for(var i in n)t[i]=n[i]}return t}function t(e){return e.replace(/(%[0-9A-Z]{2})+/g,decodeURIComponent)}return function n(i){function r(){}function s(t,n,s){if("undefined"!=typeof document){"number"==typeof(s=e({path:"/"},r.defaults,s)).expires&&(s.expires=new Date(1*new Date+864e5*s.expires)),s.expires=s.expires?s.expires.toUTCString():"";try{var o=JSON.stringify(n);/^[\{\[]/.test(o)&&(n=o)}catch(e){}n=i.write?i.write(n,t):encodeURIComponent(String(n)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),t=encodeURIComponent(String(t)).replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent).replace(/[\(\)]/g,escape);var a="";for(var c in s)s[c]&&(a+="; "+c,!0!==s[c]&&(a+="="+s[c].split(";")[0]));return document.cookie=t+"="+n+a}}function o(e,n){if("undefined"!=typeof document){for(var r={},s=document.cookie?document.cookie.split("; "):[],o=0;o<s.length;o++){var a=s[o].split("="),c=a.slice(1).join("=");n||'"'!==c.charAt(0)||(c=c.slice(1,-1));try{var h=t(a[0]);if(c=(i.read||i)(c,h)||t(c),n)try{c=JSON.parse(c)}catch(e){}if(r[h]=c,e===h)break}catch(e){}}return e?r[e]:r}}return r.set=s,r.get=function(e){return o(e,!1)},r.getJSON=function(e){return o(e,!0)},r.remove=function(t,n){s(t,"",e(n,{expires:-1}))},r.defaults={},r.withConverter=n,r}((function(){}))},e.exports=n()}));const sp=e.action((()=>{const{isSignedIn:t}=e.getState();if(t)return{userUrlSeen:null,userUrl:null,checkingSignedInState:!1,isSignedIn:!1,user:null,lighthouseResult:null,lighthouseError:null}})),op=e.action(((t,n)=>(async()=>{if(t.activeLighthouseUrl)return null;e.setState({activeLighthouseUrl:n,lighthouseError:null});const i=await async function(e,t=!1){const n={url:e,replace:!0,save:t},i=await fetch(`${Yf}/lh/newaudit`,{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify(n)}),r=await i.json();if(!i.ok)throw new Error(r.errors);if(!r.lhrSlim)throw new Error("unexpected result, no lhrSlim key");return r}(n,t.isSignedIn),r=new Date(i.auditedOn);t=e.getState();const s=await Qf(n,r),o=await Zf(n,s);return{userUrl:n,activeLighthouseUrl:null,lighthouseResult:{url:n,runs:o}}})().catch((t=>{const i="FetchError"===t.name?t.name:t.toString();console.warn("failed to run Lighthouse",n,i);const r={lighthouseError:i,activeLighthouseUrl:null},{lighthouseResult:s}=e.getState();return s&&s.url!==n&&(r.lighthouseResult=null),r})))),ap=e.action(((t,n,i)=>(async()=>{const t=await Zf(n,i),{activeLighthouseUrl:r}=e.getState();return r?null:{userUrl:n,userUrlSeen:i,activeLighthouseUrl:null,lighthouseResult:{url:n,runs:t}}})().catch((t=>{console.warn("failed to fetch reports for",n,t);const{activeLighthouseUrl:i}=e.getState();if(i)return null;const r={userUrl:n,lighthouseError:t.toString()},{lighthouseResult:s}=e.getState();return s&&s.url!==n&&(r.lighthouseResult=null),r})))),cp=()=>{const e=document.querySelector("main")||{},t=document.querySelector("web-header")||{},n=document.querySelector(".w-footer")||{};document.body.classList.add("overflow-hidden"),e.inert=!0,t.inert=!0,n.inert=!0},hp=()=>{const e=document.querySelector("main")||{},t=document.querySelector("web-header")||{},n=document.querySelector(".w-footer")||{};document.body.classList.remove("overflow-hidden"),e.inert=!1,t.inert=!1,n.inert=!1},lp=e.action((()=>(cp(),{isNavigationDrawerOpen:!0}))),up=e.action((()=>(hp(),{isNavigationDrawerOpen:!1}))),dp=e.action((()=>(cp(),{isModalOpen:!0}))),fp=e.action((()=>(hp(),{isModalOpen:!1}))),pp=e.action((({userAcceptsCookies:e})=>{if(!e)return n["web-accepts-cookies"]?{userAcceptsCookies:!0}:{showingSnackbar:!0,snackbarType:"cookies"}})),gp=e.action((()=>(n["web-accepts-cookies"]="1",{userAcceptsCookies:!0,showingSnackbar:!1}))),mp=e.action(((e,t)=>{if(!np.isValidLanguage(t))return e;return rp.set("firebase-language-override",t,{expires:3650,samesite:"strict"}),t!==e.currentLanguage&&location.reload(),{currentLanguage:t}})),yp=e.action((()=>(zf({category:"Site-Wide Custom Events",action:"click",label:"ToC",value:0}),document.querySelector("main").classList.remove("w-toc-open"),{isTocOpened:!1}))),vp=e.action((()=>(zf({category:"Site-Wide Custom Events",action:"click",label:"ToC",value:1}),document.querySelector("main").classList.add("w-toc-open"),{isTocOpened:!0})));ip((function(e,t){!function(){function e(e){var t=!0,n=!1,i=null,r={text:!0,search:!0,url:!0,tel:!0,email:!0,password:!0,number:!0,date:!0,month:!0,week:!0,time:!0,datetime:!0,"datetime-local":!0};function s(e){return!!(e&&e!==document&&"HTML"!==e.nodeName&&"BODY"!==e.nodeName&&"classList"in e&&"contains"in e.classList)}function o(e){var t=e.type,n=e.tagName;return!("INPUT"!==n||!r[t]||e.readOnly)||"TEXTAREA"===n&&!e.readOnly||!!e.isContentEditable}function a(e){e.classList.contains("focus-visible")||(e.classList.add("focus-visible"),e.setAttribute("data-focus-visible-added",""))}function c(e){e.hasAttribute("data-focus-visible-added")&&(e.classList.remove("focus-visible"),e.removeAttribute("data-focus-visible-added"))}function h(n){n.metaKey||n.altKey||n.ctrlKey||(s(e.activeElement)&&a(e.activeElement),t=!0)}function l(e){t=!1}function u(e){s(e.target)&&(t||o(e.target))&&a(e.target)}function d(e){s(e.target)&&(e.target.classList.contains("focus-visible")||e.target.hasAttribute("data-focus-visible-added"))&&(n=!0,window.clearTimeout(i),i=window.setTimeout((function(){n=!1}),100),c(e.target))}function f(e){"hidden"===document.visibilityState&&(n&&(t=!0),p())}function p(){document.addEventListener("mousemove",m),document.addEventListener("mousedown",m),document.addEventListener("mouseup",m),document.addEventListener("pointermove",m),document.addEventListener("pointerdown",m),document.addEventListener("pointerup",m),document.addEventListener("touchmove",m),document.addEventListener("touchstart",m),document.addEventListener("touchend",m)}function g(){document.removeEventListener("mousemove",m),document.removeEventListener("mousedown",m),document.removeEventListener("mouseup",m),document.removeEventListener("pointermove",m),document.removeEventListener("pointerdown",m),document.removeEventListener("pointerup",m),document.removeEventListener("touchmove",m),document.removeEventListener("touchstart",m),document.removeEventListener("touchend",m)}function m(e){e.target.nodeName&&"html"===e.target.nodeName.toLowerCase()||(t=!1,g())}document.addEventListener("keydown",h,!0),document.addEventListener("mousedown",l,!0),document.addEventListener("pointerdown",l,!0),document.addEventListener("touchstart",l,!0),document.addEventListener("visibilitychange",f,!0),p(),e.addEventListener("focus",u,!0),e.addEventListener("blur",d,!0),e.nodeType===Node.DOCUMENT_FRAGMENT_NODE&&e.host?e.host.setAttribute("data-js-focus-visible",""):e.nodeType===Node.DOCUMENT_NODE&&(document.documentElement.classList.add("js-focus-visible"),document.documentElement.setAttribute("data-js-focus-visible",""))}if("undefined"!=typeof window&&"undefined"!=typeof document){var t;window.applyFocusVisiblePolyfill=e;try{t=new CustomEvent("focus-visible-polyfill-ready")}catch(e){(t=document.createEvent("CustomEvent")).initCustomEvent("focus-visible-polyfill-ready",!1,!1,{})}window.dispatchEvent(t)}"undefined"!=typeof document&&e(document)}()}));class wp extends se{constructor(){super(),this.onStateChanged=this.onStateChanged.bind(this)}connectedCallback(){super.connectedCallback(),e.subscribe(this.onStateChanged),this.onStateChanged(e.getState())}disconnectedCallback(){super.disconnectedCallback(),e.unsubscribe(this.onStateChanged)}onStateChanged(e){}}class bp extends HTMLElement{constructor(){super(),this.iframeLoaded=!1,this.setupDom()}static get observedAttributes(){return["videoid"]}connectedCallback(){this.addEventListener("pointerover",bp.warmConnections,{once:!0}),this.addEventListener("click",(()=>this.addIframe()))}get videoId(){return encodeURIComponent(this.getAttribute("videoid")||"")}set videoId(e){this.setAttribute("videoid",e)}get videoTitle(){return this.getAttribute("videotitle")||"Video"}set videoTitle(e){this.setAttribute("videotitle",e)}get videoPlay(){return this.getAttribute("videoPlay")||"Play"}set videoPlay(e){this.setAttribute("videoPlay",e)}get videoStartAt(){return Number(this.getAttribute("videoStartAt")||"0")}set videoStartAt(e){this.setAttribute("videoStartAt",String(e))}get autoLoad(){return this.hasAttribute("autoload")}set autoLoad(e){e?this.setAttribute("autoload",""):this.removeAttribute("autoload")}get params(){return`start=${this.videoStartAt}&${this.getAttribute("params")}`}setupDom(){this.attachShadow({mode:"open"}).innerHTML='\n      <style>\n        :host {\n          contain: content;\n          display: block;\n          position: relative;\n          width: 100%;\n          padding-bottom: calc(100% / (16 / 9));\n        }\n\n        #frame, #fallbackPlaceholder, iframe {\n          position: absolute;\n          width: 100%;\n          height: 100%;\n        }\n\n        #frame {\n          cursor: pointer;\n        }\n\n        #fallbackPlaceholder {\n          object-fit: cover;\n        }\n\n        #frame::before {\n          content: \'\';\n          display: block;\n          position: absolute;\n          top: 0;\n          background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAADGCAYAAAAT+OqFAAAAdklEQVQoz42QQQ7AIAgEF/T/D+kbq/RWAlnQyyazA4aoAB4FsBSA/bFjuF1EOL7VbrIrBuusmrt4ZZORfb6ehbWdnRHEIiITaEUKa5EJqUakRSaEYBJSCY2dEstQY7AuxahwXFrvZmWl2rh4JZ07z9dLtesfNj5q0FU3A5ObbwAAAABJRU5ErkJggg==);\n          background-position: top;\n          background-repeat: repeat-x;\n          height: 60px;\n          padding-bottom: 50px;\n          width: 100%;\n          transition: all 0.2s cubic-bezier(0, 0, 0.2, 1);\n          z-index: 1;\n        }\n        /* play button */\n        .lty-playbtn {\n          width: 70px;\n          height: 46px;\n          background-color: #212121;\n          z-index: 1;\n          opacity: 0.8;\n          border-radius: 14%; /* TODO: Consider replacing this with YT\'s actual svg. Eh. */\n          transition: all 0.2s cubic-bezier(0, 0, 0.2, 1);\n          border: 0;\n        }\n        #frame:hover .lty-playbtn {\n          background-color: #f00;\n          opacity: 1;\n        }\n        /* play button triangle */\n        .lty-playbtn:before {\n          content: \'\';\n          border-style: solid;\n          border-width: 11px 0 11px 19px;\n          border-color: transparent transparent transparent #fff;\n        }\n        .lty-playbtn,\n        .lty-playbtn:before {\n          position: absolute;\n          top: 50%;\n          left: 50%;\n          transform: translate3d(-50%, -50%, 0);\n        }\n\n        /* Post-click styles */\n        .lyt-activated {\n          cursor: unset;\n        }\n\n        #frame.lyt-activated::before,\n        .lyt-activated .lty-playbtn {\n          display: none;\n        }\n      </style>\n      <div id="frame">\n        <picture>\n          <source id="webpPlaceholder" type="image/webp">\n          <source id="jpegPlaceholder" type="image/jpeg">\n          <img id="fallbackPlaceholder" referrerpolicy="origin">\n        </picture>\n        <button class="lty-playbtn"></button>\n      </div>\n    ',this.domRefFrame=this.shadowRoot.querySelector("#frame"),this.domRefImg={fallback:this.shadowRoot.querySelector("#fallbackPlaceholder"),webp:this.shadowRoot.querySelector("#webpPlaceholder"),jpeg:this.shadowRoot.querySelector("#jpegPlaceholder")},this.domRefPlayButton=this.shadowRoot.querySelector(".lty-playbtn")}setupComponent(){this.initImagePlaceholder(),this.domRefPlayButton.setAttribute("aria-label",`${this.videoPlay}: ${this.videoTitle}`),this.setAttribute("title",`${this.videoPlay}: ${this.videoTitle}`),this.autoLoad&&this.initIntersectionObserver()}attributeChangedCallback(e,t,n){switch(e){case"videoid":t!==n&&(this.setupComponent(),this.domRefFrame.classList.contains("lyt-activated")&&(this.domRefFrame.classList.remove("lyt-activated"),this.shadowRoot.querySelector("iframe").remove(),this.iframeLoaded=!1))}}addIframe(){if(!this.iframeLoaded){const e=`\n<iframe frameborder="0"\n  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen\n  src="https://www.youtube.com/embed/${this.videoId}?autoplay=1&${this.params}"\n></iframe>`;this.domRefFrame.insertAdjacentHTML("beforeend",e),this.domRefFrame.classList.add("lyt-activated"),this.iframeLoaded=!0}}initImagePlaceholder(){bp.addPrefetch("preconnect","https://i.ytimg.com/");const e=`https://i.ytimg.com/vi_webp/${this.videoId}/hqdefault.webp`,t=`https://i.ytimg.com/vi/${this.videoId}/hqdefault.jpg`;this.domRefImg.webp.srcset=e,this.domRefImg.jpeg.srcset=t,this.domRefImg.fallback.src=t,this.domRefImg.fallback.setAttribute("aria-label",`${this.videoPlay}: ${this.videoTitle}`),this.domRefImg.fallback.setAttribute("alt",`${this.videoPlay}: ${this.videoTitle}`)}initIntersectionObserver(){if("IntersectionObserver"in window&&"IntersectionObserverEntry"in window){new IntersectionObserver(((e,t)=>{e.forEach((e=>{e.isIntersecting&&!this.iframeLoaded&&(bp.warmConnections(),this.addIframe(),t.unobserve(this))}))}),{root:null,rootMargin:"0px",threshold:0}).observe(this)}}static addPrefetch(e,t,n){const i=document.createElement("link");i.rel=e,i.href=t,n&&(i.as=n),i.crossOrigin="true",document.head.append(i)}static warmConnections(){bp.preconnected||(bp.addPrefetch("preconnect","https://s.ytimg.com"),bp.addPrefetch("preconnect","https://www.youtube.com"),bp.addPrefetch("preconnect","https://www.google.com"),bp.addPrefetch("preconnect","https://googleads.g.doubleclick.net"),bp.addPrefetch("preconnect","https://static.doubleclick.net"),bp.preconnected=!0)}}bp.preconnected=!1,customElements.define("lite-youtube",bp);const _p=new WeakMap,Ep=y(((...e)=>t=>{let n=_p.get(t);void 0===n&&(n={lastRenderedIndex:2147483647,values:[]},_p.set(t,n));const i=n.values;let r=i.length;n.values=e;for(let s=0;s<e.length&&!(s>n.lastRenderedIndex);s++){const o=e[s];if(k(o)||"function"!=typeof o.then){t.setValue(o),n.lastRenderedIndex=s;break}s<r&&o===i[s]||(n.lastRenderedIndex=2147483647,r=0,Promise.resolve(o).then((e=>{const i=n.values.indexOf(o);i>-1&&i<n.lastRenderedIndex&&(n.lastRenderedIndex=i,t.setValue(e),t.commit())})))}}));oe('web-profile-switcher-container{align-items:center;display:flex;height:100%}@media (min-width:865px){web-profile-switcher-container{margin-left:16px}}.w-profile-signin{background:transparent;border:0;box-shadow:none;color:#202124;cursor:pointer;font-family:Segoe UI,system-ui,-apple-system,sans-serif;text-transform:uppercase;font-size:14px;font-weight:500;height:100%;outline:none;padding:0 8px}@media (min-width:865px){.w-profile-signin{padding:0 24px}}.w-profile-signin:hover{background-color:rgba(32,33,36,.04)}.w-profile-signin:focus{background-color:rgba(32,33,36,.12)}.w-profile-signin:active{background-color:rgba(32,33,36,.16)}web-profile-switcher{display:block;margin:0 0 0 16px}.w-profile-toggle{background:#f1f3f4;border:4px solid #fff;border-radius:50%;box-shadow:none;box-sizing:content-box;display:flex;height:auto;justify-content:center;min-height:32px;min-width:32px;overflow:hidden;padding:0;width:auto}.w-profile-toggle:active,.w-profile-toggle:focus,.w-profile-toggle:hover{box-shadow:none}.w-profile-toggle:focus{border-color:rgba(0,0,0,.2)!important}@keyframes w-profile-toggle__appear{0%{opacity:0}to{opacity:1}}.w-profile-toggle__photo{border-radius:50%;height:32px;width:32px;animation:w-profile-toggle__appear .45s}.w-profile-dialog{background:#fff;border:1px solid rgba(0,0,0,.2);border-radius:2px;box-shadow:0 2px 10px rgba(0,0,0,.2);display:block;overflow:hidden;position:absolute;right:15px;top:62px}@media (min-width:481px){.w-profile-dialog{right:24px}}.w-profile-dialog__user{padding:20px}@media (min-width:321px){.w-profile-dialog__user{display:flex}}.w-profile-dialog__photo-container{align-items:center;display:flex;justify-content:center;margin:0 0 20px}@media (min-width:321px){.w-profile-dialog__photo-container{margin:0 20px 0 0}}.w-profile-dialog__photo{border-radius:50%;display:block;height:64px;width:64px}@media (min-width:321px){.w-profile-dialog__photo{height:96px;width:96px}}.w-profile-dialog__details{font-size:13px;line-height:normal}.w-profile-dialog__name{font-weight:500;margin-bottom:1px}.w-profile-dialog__email{color:#666;overflow:hidden;text-overflow:ellipsis}.w-profile-dialog__privacy{color:#1a73e8;display:block;margin:6px 0}.w-profile-dialog__privacy:hover{text-decoration:none}.w-profile-dialog__account{background:#4d90fe;border:1px solid #3079ed;border-radius:2px;color:#fff;display:inline-block;font:13px/28px Roboto,Noto Sans,sans-serif;margin:10px 0 0;padding:0 12px;position:relative;text-align:center;white-space:nowrap;width:100%}@media (min-width:321px){.w-profile-dialog__account{width:auto}}.w-profile-dialog__account:active,.w-profile-dialog__account:focus,.w-profile-dialog__account:hover{outline:none;text-decoration:none}.w-profile-dialog__account:after{bottom:0;content:"";left:0;pointer-events:none;position:absolute;right:0;top:0;transition:background-color .2s,border .2s;z-index:1}.w-profile-dialog__account:hover:after{background-color:hsla(0,0%,100%,.08)}.w-profile-dialog__account:focus:after{background-color:hsla(0,0%,100%,.12)}.w-profile-dialog__account:active:after{background-color:hsla(0,0%,100%,.24)}.w-profile-dialog__controls{background:#f5f5f5;border-top:1px solid rgba(0,0,0,.2);display:block;padding:10px 20px}@media (min-width:321px){.w-profile-dialog__controls{align-items:center;display:flex;justify-content:space-between}}.w-profile-dialog__button{background:#f8f8f8;border:1px solid #c6c6c6;border-radius:2px;box-shadow:none;color:#666;display:block;font:13px/28px Roboto,Noto Sans,sans-serif;height:auto;margin:0;padding:0 12px;position:relative;text-align:center;text-transform:none;width:100%}@media (min-width:321px){.w-profile-dialog__button{width:auto}}.w-profile-dialog__button:not(:last-of-type){margin-bottom:8px}@media (min-width:321px){.w-profile-dialog__button:not(:last-of-type){margin:0}}.w-profile-dialog__button:focus{background:#f8f8f8;outline:none;text-decoration:none}.w-profile-dialog__button:after{bottom:0;content:"";left:0;pointer-events:none;position:absolute;right:0;top:0;transition:background-color .2s,border .2s;z-index:1}.w-profile-dialog__button:hover:after{background-color:rgba(0,0,0,.04)}.w-profile-dialog__button:focus:after{background-color:rgba(0,0,0,.08)}.w-profile-dialog__button:active:after{background-color:rgba(0,0,0,.1)}');const Tp=document.createDocumentFragment();customElements.define("web-profile-switcher",class extends se{static get properties(){return{expanded:{type:Boolean},user:{type:Object},photoPromise:{type:Promise}}}constructor(){super(),this.user=null}render(){return B`
        <
        button
    class = "w-profile-toggle"
        .disabled = $ {
            !this.user
        }
    @click = "${()=>this.expanded=!this.expanded}" >
        $ {
            Ep(this.photoPromise)
        } <
        /button>
    $ {
        this.expanded && this.user ? this.expandedTemplate : ""
    }
    `}firstUpdated(){this.addEventListener("keyup",(e=>{"Escape"===e.key&&this.expanded&&(this.expanded=!1)})),document.addEventListener("click",(e=>{this.expanded&&!this.contains(e.target)&&(this.expanded=!1)}))}shouldUpdate(e){return!e.has("user")||(this.expanded=!1,this.user?(this.photoPromise=new Promise((e=>{const t=new Image;t.src=this.user.photoURL,t.className="w-profile-toggle__photo",t.onload=()=>e(t),t.onerror=()=>e(Tp)})),!0):(this.photoPromise=null,!0))}get expandedTemplate(){return B` <
    div class = "w-profile-dialog" >
        <
        div class = "w-profile-dialog__user" >
        <
        div class = "w-profile-dialog__photo-container" >
        <
        img
    class = "w-profile-dialog__photo"
    alt = ""
    src = "${this.user.photoURL}" /
        >
        <
        /div> <
        div class = "w-profile-dialog__details" >
        <
        div class = "w-profile-dialog__name" > $ {
            this.user.displayName
        } < /div> <
        div class = "w-profile-dialog__email" > $ {
            this.user.email
        } < /div> <
        a
    class = "w-profile-dialog__privacy"
    href = "https://myaccount.google.com/privacypolicy"
    target = "_blank" >
        Privacy <
        /a> <
        a
    class = "w-profile-dialog__account"
    href = "https://myaccount.google.com"
    target = "_blank" >
        Google Account <
        /a> <
        /div> <
        /div> <
        div class = "w-profile-dialog__controls" >
        <
        button class = "w-profile-dialog__button"
    @click = "${Jf}" >
        Change accounts <
        /button> <
        button class = "w-profile-dialog__button"
    @click = "${Xf}" >
        Sign out <
        /button> <
        /div> <
        /div>
    `}});customElements.define("web-profile-switcher-container",class extends wp{static get properties(){return{checkingSignedInState:{type:Boolean},isSignedIn:{type:Boolean},user:{type:Object}}}render(){return this.isSignedIn?B` <
    web - profile - switcher.user = "${this.user}" > < /web-profile-switcher>
    `:B` <
    button
    class = "w-profile-signin"
        .disabled = $ {
            this.checkingSignedInState
        }
    @click = "${Jf}" >
        Sign in
        <
        /button>
    `}onStateChanged({checkingSignedInState:e,isSignedIn:t,user:n}){this.checkingSignedInState=e,this.isSignedIn=t,this.user=n}});customElements.define("web-header",class extends wp{constructor(){super()}connectedCallback(){super.connectedCallback(),this.openDrawerBtn=this.querySelector("[data-open-drawer-button]"),this.openDrawerBtn&&this.openDrawerBtn.addEventListener("click",lp)}disconnectedCallback(){this.openDrawerBtn&&this.openDrawerBtn.removeEventListener("click",lp),e.unsubscribe(this.onStateChanged)}onStateChanged({isSearchExpanded:e,currentUrl:t}){this.classList.toggle("web-header--has-expanded-search",e),t=((t=t.replace(/"/g,'\\"')).match(/^\/\w+\//)||[""])[0];const n=this.querySelector("[active]"),i=this.querySelector(` [href = "${t}"]
    `);n!==i&&(n&&(n.removeAttribute("active"),n.removeAttribute("aria-current")),i&&(i.setAttribute("active",""),i.setAttribute("aria-current","page")))}manageFocus(){this.openDrawerBtn&&this.openDrawerBtn.focus()}});customElements.define("web-language-select",class extends wp{static get properties(){return{current:{type:String}}}onStateChanged({currentLanguage:e}){this.current=e}onChange(e){mp(e.target.value)}renderOption(e){let t=np.languageNames[e];return t?(t=t.toUpperCase(),this.current===e?B` <
    option value = "${e}"
    selected >
        $ {
            t
        }($ {
            e
        }) <
        /option>
    `:B` <
    option value = "${e}" > $ {
        t
    }($ {
        e
    }) < /option>
    `):""}render(){const e=Array.from(document.querySelectorAll('link[rel="alternate"]')).filter((e=>e.hreflang)).map((e=>e.hreflang)),t=document.documentElement.lang,n=np.supportedLanguages.filter((n=>e.includes(n)||n===t));return B` <
    div class = "w-display-flex" >
        <
        label class = "w-visually-hidden"
    for = "preferred-language" >
    Choose language
        <
        /label> <
        select id = "preferred-language"
    @change = "${this.onChange}" >
        $ {
            n.map((e => this.renderOption(e)))
        } <
        /select> <
        /div>
    `}});const Sp="modal";customElements.define("web-navigation-drawer",class extends wp{static get properties(){return{type:{type:String,reflect:!0},open:{type:Boolean,reflect:!0},animating:{type:Boolean,reflect:!0}}}set open(e){if(this._open===e)return;const t=this._open;this._open=e,this.animating=!0,this._open&&document.addEventListener("keyup",this.onKeyUp),this.addEventListener("transitionend",this.onTransitionEnd),this.requestUpdate("open",t)}get open(){return this._open}constructor(){super(),this.type=null,this._open=!1,this.animating=!1,this.onTransitionEnd=this.onTransitionEnd.bind(this),this.onKeyUp=this.onKeyUp.bind(this)}connectedCallback(){this.tabIndex=-1,this.type===Sp&&(this.inert=!0),this.drawerContainer=this.querySelector("[data-drawer-container]"),this.closeBtn=this.querySelector("[data-drawer-close-button]"),this.addEventListeners(),super.connectedCallback()}addEventListeners(){this.drawerContainer.addEventListener("click",this.onBlockClicks),this.closeBtn.addEventListener("click",up),this.addEventListener("click",up)}onStateChanged({isNavigationDrawerOpen:e,currentUrl:t}){if(this.open=e,t){t=((t=t.replace(/"/g,'\\"')).match(/^\/\w+\//)||[""])[0];const e=this.querySelector("[active]"),n=this.querySelector(` [href = "${t}"]
    `);if(e===n)return;e&&(e.removeAttribute("active"),e.removeAttribute("aria-current")),n&&(n.setAttribute("active",""),n.setAttribute("aria-current","page"))}}onBlockClicks(e){e.target.closest("a")||e.stopPropagation()}onTransitionEnd(e){if(e.target===this){if(this.animating=!1,this.open)this.focus();else{const e=document.querySelector("web-header");e&&e.manageFocus()}this.inert=!this.open,this.removeEventListener("transitionend",this.onTransitionEnd)}}onKeyUp(e){"Escape"===e.key&&(up(),document.removeEventListener("keyup",this.onKeyUp))}});oe("web-snackbar{align-items:center;display:flex;visibility:hidden}web-snackbar .web-snackbar__surface{align-items:center;background-color:#202124;display:flex;justify-content:flex-start;opacity:0;transform:scale(.8);width:100vw}@media (min-width:481px){web-snackbar .web-snackbar__surface{border-radius:3px;box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12);min-width:344px}}@media (min-width:865px){web-snackbar .web-snackbar__surface{max-width:400px}}web-snackbar .web-snackbar__label{color:hsla(0,0%,100%,.87);font-size:.875rem;padding:14px 16px}web-snackbar .web-snackbar__actions{margin-left:0;margin-right:8px;display:flex;align-items:center}web-snackbar .web-snackbar__action{font-size:.875rem;color:#3fc4ff;height:auto}web-snackbar .web-snackbar__action:active,web-snackbar .web-snackbar__action:focus,web-snackbar .web-snackbar__action:hover{box-shadow:none}web-snackbar .web-snackbar__action:hover{background:rgba(63,196,255,.08)}web-snackbar .web-snackbar__action:focus{background:rgba(63,196,255,.12)}web-snackbar .web-snackbar__action:active{background:rgba(63,196,255,.16)}web-snackbar .web-snackbar__action+.web-snackbar__action{margin-left:8px}web-snackbar[open]{visibility:visible}web-snackbar[open] .web-snackbar__surface{transform:scale(1);opacity:1;pointer-events:auto}web-snackbar[open][animatable] .web-snackbar__surface{transition:opacity .15s cubic-bezier(0,0,.2,1),transform .15s cubic-bezier(0,0,.2,1)}web-snackbar[animatable]{visibility:visible}web-snackbar[animatable] .web-snackbar__surface{transition:opacity 75ms cubic-bezier(.4,0,1,1),transform 75ms cubic-bezier(0,0,.2,1)}web-snackbar[stacked] .web-snackbar__surface{flex-direction:column;align-items:flex-start}web-snackbar[stacked] .web-snackbar__actions{align-self:flex-end;margin-bottom:8px}");customElements.define("web-snackbar",class extends se{static get properties(){return{animatable:{type:Boolean,reflect:!0},stacked:{type:Boolean,reflect:!0},type:{type:String},action:{type:Object}}}constructor(){super(),this.action=null,this.type=null}get open(){return this.hasAttribute("open")}set open(e){let t;e?(this.setAttribute("open",""),t=150):(this.removeAttribute("open"),t=75),this.animatable=!0,setTimeout((()=>this.animatable=!1),t)}get cookiesTemplate(){return B` <
    div class = "web-snackbar__label"
    role = "status" >
        We serve cookies on this site to analyze traffic, remember your
    preferences, and optimize your experience. <
        /div> <
        div class = "web-snackbar__actions" >
        <
        a
    href = "https://policies.google.com/technologies/cookies"
    class = "w-button web-snackbar__action" >
        More details < /a >
        <
        button @click = $ {
            this.action
        }
    class = "w-button web-snackbar__action" >
        OK <
        /button> <
        /div>
    `}render(){let e;switch(this.type){case"cookies":e=this.cookiesTemplate}return B` < div class = "web-snackbar__surface" > $ {
            e
        } < /div> `}});oe("web-snackbar-container{bottom:0;display:block;left:0;margin:0;pointer-events:none;position:fixed;right:0;z-index:1000}@media (min-width:481px){web-snackbar-container{margin:8px}}");customElements.define("web-snackbar-container",class extends se{static get properties(){return{open:{type:Boolean},type:{type:String}}}constructor(){super(),this.onBeforeInstallPrompt=this.onBeforeInstallPrompt.bind(this),this.onStateChanged=this.onStateChanged.bind(this)}connectedCallback(){super.connectedCallback(),pp(),e.subscribe(this.onStateChanged),this.onStateChanged(),window.addEventListener("beforeinstallprompt",this.onBeforeInstallPrompt)}disconnectedCallback(){super.disconnectedCallback(),e.unsubscribe(this.onStateChanged),window.removeEventListener("beforeinstallprompt",this.onBeforeInstallPrompt)}onBeforeInstallPrompt(e){this.acceptedCookies||e.preventDefault()}onStateChanged(){const t=e.getState();this.open=t.showingSnackbar,this.type=t.snackbarType,this.acceptedCookies=t.userAcceptsCookies}render(){let e,t;switch(this.type){case"cookies":e=gp,t=!0}return B` <
        web - snackbar
        .type = $ {
            this.type
        }
        .open = $ {
            this.open
        }
        .stacked = $ {
            t
        }
        .action = "${e}" >
        < /web-snackbar>
    `}});class Ip extends HTMLElement{constructor(){super(),this.STORAGE_KEY="user-color-scheme",this.COLOR_MODE_KEY="--color-mode"}connectedCallback(){this.toggleSwitch=this.querySelector('[role="switch"]'),this.toggleSwitch&&(this.toggleSwitch.addEventListener("change",(()=>{const e=this.toggleSwitch.checked?"dark":"light";this.applySetting(e),localStorage.setItem(this.STORAGE_KEY,e)})),this.applySetting())}applySetting(e){const t=e||localStorage.getItem(this.STORAGE_KEY);t?(this.setToggleSwitchStatus(t),window.applyThemeSetting(t)):(window.matchMedia("(prefers-color-scheme: dark)").matches&&this.setToggleSwitchStatus("dark"),window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change",(e=>{this.setToggleSwitchStatus(e.matches?"dark":"light")})))}setToggleSwitchStatus(e){const t="dark"===e;this.toggleSwitch.setAttribute("aria-checked",t?"true":"false"),this.toggleSwitch.checked=t}}"customElements"in window&&customElements.define("theme-toggle",Ip);const kp=(e,t)=>{if(!e)throw new TypeError("func is a required argument.");if(!t)throw new TypeError("wait is a required argument.");let n;return function(...i){n&&clearTimeout(n),n=setTimeout((()=>{e(...i)}),t)}};let Ap;function Np(){return Ap=Ap||async function(){const{default:e}=await import("./algoliasearch-lite.esm.browser-e1b03016.js"),t="prod_web_dev",n=e("2JPAZHQ6K7","01ca870a3f1cad9984ed72419a12577c");return n.initIndex(t)}(),Ap}oe("web-search{--web-search-animation-time:0;align-items:center;display:flex;height:100%;justify-content:flex-end;min-width:50%}@media (min-width:865px){web-search{--web-search-animation-time:200ms;justify-content:flex-start}}web-search .web-search__close-btn{display:none;margin-left:8px;text-overflow:clip}web-search .web-search__close-btn,web-search .web-search__open-btn{border-radius:0;border:none;box-shadow:none;color:#5f6368;cursor:pointer;padding:0 8px;transition:none;background:transparent}web-search .web-search__close-btn:focus,web-search .web-search__close-btn:hover,web-search .web-search__open-btn:focus,web-search .web-search__open-btn:hover{background:transparent}web-search .web-search__close-btn.focus-visible,web-search .web-search__open-btn.focus-visible{box-shadow:inset 0 0 0 1px #3fc4ff;outline:none}web-search .web-search__input-wrapper{align-items:center;background:#fff;color:#5f6368;display:none;height:100%;width:100%;position:relative}web-search .web-search__input-wrapper .web-search__search-icon{left:8px;position:absolute}web-search .web-search__close-icon,web-search .web-search__search-icon{fill:#80868b}web-search .web-search__input{background:#f1f3f4;border:none;padding:8px 8px 8px 40px;width:100%;font:inherit;font-size:1rem;line-height:20px;border-top-left-radius:2px;border-top-right-radius:2px}web-search .web-search__input:focus{outline:none;box-shadow:0 2px 0 0 #3fc4ff}web-search[expanded] .web-search__open-btn{display:none}web-search[expanded] .web-search__input-wrapper{display:flex}web-search[expanded] .web-search__close-btn{display:inline-flex;align-items:center}@media (min-width:865px){web-search[expanded] .web-search__close-btn{display:none}}");customElements.define("web-search",class extends wp{static get properties(){return{expanded:{type:Boolean,reflect:!0},hits:{type:Object},showHits:{type:Boolean},locale:{type:String},query:{type:String},tag:{type:String}}}constructor(){super(),this.hits=[],this.showHits=!1,this.query="",this.tag="",this.timeout,this.expanded=!1,this.locale="en",this.resultsEl,this.onResize=kp(this.onResize.bind(this),200),this.search=kp(this.search.bind(this),200),this.onResultSelect=this.onResultSelect.bind(this)}onStateChanged({currentLanguage:e}){this.locale=e}connectedCallback(){super.connectedCallback(),window.addEventListener("resize",this.onResize),this.onResize(),this.resultsEl=document.getElementById(this.getAttribute("results-id")),this.resultsEl?this.resultsEl.addEventListener("resultselect",this.onResultSelect):console.warn(`
    No search results element found
    for $ {
        this
    }
    `)}disconnectedCallback(){super.disconnectedCallback(),window.removeEventListener("resize",this.onResize),this.resultsEl&&this.resultsEl.removeEventListener("resultselect",this.onResultSelect)}render(){return B` <
    button
    class = "web-search__open-btn"
    @click = "${this.onOpenSearch}"
    aria - label = "Open search" >
        <
        svg
    class = "web-search__search-icon"
    xmlns = "http://www.w3.org/2000/svg"
    height = "24"
    width = "24"
    aria - hidden = "true" >
        <
        path d = "M0 0h24v24H0z"
    fill = "none" / >
        <
        path
    d = "M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" /
        >
        <
        /svg> <
        /button> <
        div
    class = "web-search__input-wrapper"
    role = "combobox"
    aria - expanded = "${this.expanded}"
    aria - controls = "web-search__input"
    aria - owns = "${this.resultsEl.id}-list"
    aria - haspopup = "listbox" >
        <
        svg
    class = "web-search__search-icon"
    xmlns = "http://www.w3.org/2000/svg"
    height = "24"
    width = "24"
    aria - hidden = "true" >
        <
        path d = "M0 0h24v24H0z"
    fill = "none" / >
        <
        path
    d = "M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" /
        >
        <
        /svg> <
        input
    id = "web-search__input"
    class = "web-search__input"
    type = "text"
    role = "searchbox"
    autocomplete = "off"
    aria - autocomplete = "list"
    aria - controls = "${this.resultsEl.id}-list"
    aria - label = "All articles"
    placeholder = "Search"
    @keydown = "${this.onKeyDown}"
    @input = "${this.onInput}"
    @focusin = "${this.onFocusIn}"
    @focusout = "${this.onFocusOut}" /
        >
        <
        /div> <
        button
    @click = "${this.onCloseSearch}"
    class = "web-search__close-btn"
    aria - label = "Close search" >
        <
        svg
    class = "web-search__close-icon"
    xmlns = "http://www.w3.org/2000/svg"
    height = "24"
    width = "24" >
        <
        path d = "M0 0h24v24H0z"
    fill = "none" / >
        <
        path
    d = "M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z" /
        >
        <
        /svg> <
        /button>
    `}firstUpdated(){this.inputEl=this.renderRoot.querySelector(".web-search__input")}updated(e){["query","hits","showHits"].forEach((t=>{e.has(t)&&(this.resultsEl[t]=this[t])}))}onResize(){const e=getComputedStyle(this).getPropertyValue("--web-search-animation-time");this.animationTime=parseInt(e,10)}onResultSelect(e){const t=e.detail.selected;t&&t.id?this.inputEl.setAttribute("aria-activedescendant",t.id):this.inputEl.removeAttribute("aria-activedescendant")}onKeyDown(e){["Home","End","Up","ArrowUp","Down","ArrowDown","Enter"].includes(e.key)&&(e.preventDefault(),this.resultsEl.navigate(e.key)),["Esc","Escape"].includes(e.key)&&document.activeElement.blur()}onInput(e){this.search(e.target.value)}async search(e){if(this.query=e,""!==e)try{const t=await Np(),n={hitsPerPage:10,attributesToHighlight:["title"],attributesToRetrieve:["url"],highlightPreTag:"<strong>",highlightPostTag:"</strong>",facetFilters:[`
    locales: $ {
        this.locale
    }
    `],attributesToSnippet:["content:20"],snippetEllipsisText:"..."};this.tag&&n.facetFilters.push(`
    tags: $ {
        this.tag
    }
    `);const{hits:i}=await t.search(e,n);this.query===e&&(this.hits=i)}catch(e){console.error(e),console.error(e.debugData),Kf(e,"search")}else this.hits=[]}clear(){this.inputEl.value="",this.inputEl.removeAttribute("aria-activedescendant"),this.query=""}onOpenSearch(){this.expanded=!0,e.setState({isSearchExpanded:!0}),this.requestUpdate().then((()=>{this.inputEl.focus()}))}onCloseSearch(){this.expanded=!1}onFocusIn(){Np().catch((e=>{console.error("failed to load Algolia",e),Kf(e,"algolia load")})),this.expanded=!0,this.timeout=setTimeout((()=>{e.setState({isSearchExpanded:!0}),this.showHits=!0}),this.animationTime)}onFocusOut(t){const n=t.relatedTarget;n&&this.resultsEl.contains(n)&&n.click(),clearTimeout(this.timeout),e.setState({isSearchExpanded:!1}),this.expanded=!1,this.showHits=!1,this.hits=[],this.clear()}});const Cp=new WeakMap,Rp=y((e=>t=>{if(!(t instanceof R))throw new Error("unsafeHTML can only be used in text bindings");const n=Cp.get(t);if(void 0!==n&&k(e)&&e===n.value&&t.value===n.fragment)return;const i=document.createElement("template");i.innerHTML=e;const r=document.importNode(i.content,!0);t.setValue(r),Cp.set(t,{value:e,fragment:r})}));oe(".web-search-popout{background:#fff;padding:16px 0;position:absolute}.web-search-popout__heading{color:#5f6368;font-size:12px;padding:0 24px}.web-search-popout__list{list-style:none;max-height:50vh;overflow:auto}.web-search-popout__link{color:#202124;display:block;padding:8px 24px}.web-search-popout__link--active,.web-search-popout__link:hover{background:#e8eaed}");class xp extends se{static get properties(){return{hits:{type:Object},hits_:{type:Object},showHits:{type:Boolean},cursor:{type:Number}}}constructor(){super(),this.hits=[],this.hits_=[],this.showHits=!1,this.cursor=-1,this.query=""}set hits(e){this.hits_=e,this.cursor=-1}navigate(e){switch(e){case"Home":return void this.firstHit();case"End":return void this.lastHit();case"Up":case"ArrowUp":return void this.prevHit();case"Down":case"ArrowDown":return void this.nextHit();case"Enter":const e=this.hits_[this.cursor];return void(e&&this.navigateToHit(e))}}firstHit(){this.cursor=0,this.scrollHitIntoView()}lastHit(){this.cursor=this.hits_.length-1,this.scrollHitIntoView()}nextHit(){this.cursor=(this.cursor+1)%this.hits_.length,this.scrollHitIntoView()}prevHit(){-1===this.cursor?this.cursor=this.hits_.length-1:this.cursor=(this.cursor-1+this.hits_.length)%this.hits_.length,this.scrollHitIntoView()}scrollHitIntoView(){this.requestUpdate().then((()=>{const e=this.renderRoot.querySelector(".web-search-popout__link--active");e.scrollIntoView({block:"nearest"}),this.dispatchEvent(new CustomEvent("resultselect",{detail:{selected:e}}))}))}navigateToHit({url:e}){window.location.href=e}render(){if(!this.showHits)return B` <
    div id = "${this.id}-list"
    role = "listbox"
    aria - hidden = "true" > < /div>
    `;if(!this.hits_.length){if(!this.query)return"";const e="web.dev "+this.query.trim(),t="https://google.com/search?q="+window.encodeURIComponent(e);return B` <
    div class = "web-search-popout" >
        <
        div class = "web-search-popout__heading" >
        There are no suggestions
    for your query & mdash;
    try <
    a
    data - category = "web.dev"
    data - label = "search, open Google"
    data - action = "click"
    target = "_blank"
    tabindex = "-1"
    href = $ {
            t
        } >
        Google search <
        /a> <
        /div> <
        /div>
    `}return B` <
    div class = "web-search-popout" >
        <
        div class = "web-search-popout__heading" > Results < /div> <
        ul id = "${this.id}-list"
    class = "web-search-popout__list"
    role = "listbox" >
        $ {
            this.itemsTemplate
        } <
        /ul> <
        /div>
    `}get itemsTemplate(){return this.hits_.map(((e,t)=>{if(!e._highlightResult.title||!e._highlightResult.title.value)return B`
    `;const n=this.formatAlgoliaValue(e._highlightResult.title.value);return B` <
    li class = "web-search-popout__item" >
        <
        a
    id = "${this.id}-link-${t}"
    class = "web-search-popout__link ${t===this.cursor?"
    web - search - popout__link--active ":"
    "}"
    aria - selected = "${t===this.cursor}"
    tabindex = "-1"
    href = "${e.url}" >
        $ {
            Rp(n)
        } < /a >
        <
        /li>
    `}))}formatAlgoliaValue(e){return(e=((e,t)=>{const n=new RegExp(` & lt;
    $ {
        t
    } & gt;
    `,"g"),i=new RegExp(` & lt;
    /${t}&gt;`,"g");return e.replace(n,`<${t}>`).replace(i,`</$ {
        t
    } > `)})(e.replace(/</g,"&lt;").replace(/>/g,"&gt;"),"strong")).replace(/` / g, "")
}
}
customElements.define("web-search-results", xp);
export {
    se as B, Yf as L, xp as S, wp as a, vp as b, fp as c, yp as d, zf as e, $ as f, ap as g, B as h, op as i, Jf as j, kp as k, dp as o, j as r, oe as s, Kf as t, Rp as u
};
