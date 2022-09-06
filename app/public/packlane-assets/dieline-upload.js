! function (e) {
    function t(t) {
        for (var a, r, l = t[0], s = t[1], u = t[2], c = 0, p = []; c < l.length; c++) r = l[c], i[r] && p.push(i[r][0]), i[r] = 0;
        for (a in s) Object.prototype.hasOwnProperty.call(s, a) && (e[a] = s[a]);
        for (d && d(t); p.length;) p.shift()();
        return o.push.apply(o, u || []), n()
    }

    function n() {
        for (var e, t = 0; t < o.length; t++) {
            for (var n = o[t], a = !0, l = 1; l < n.length; l++) {
                var s = n[l];
                0 !== i[s] && (a = !1)
            }
            a && (o.splice(t--, 1), e = r(r.s = n[0]))
        }
        return e
    }
    var a = {},
        i = {
            10: 0
        },
        o = [];

    function r(t) {
        if (a[t]) return a[t].exports;
        var n = a[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(n.exports, n, n.exports, r), n.l = !0, n.exports
    }
    r.m = e, r.c = a, r.d = function (e, t, n) {
        r.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, r.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, r.t = function (e, t) {
        if (1 & t && (e = r(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (r.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var a in e) r.d(n, a, function (t) {
                return e[t]
            }.bind(null, a));
        return n
    }, r.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return r.d(t, "a", t), t
    }, r.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, r.p = "";
    var l = window.webpackJsonp = window.webpackJsonp || [],
        s = l.push.bind(l);
    l.push = t, l = l.slice();
    for (var u = 0; u < l.length; u++) t(l[u]);
    var d = s;
    o.push([1876, 0]), n()
}({
    143: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var a = t[n];
                        a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                    }
                }
                return function (t, n, a) {
                    return n && e(t.prototype, n), a && e(t, a), t
                }
            }(),
            i = n(0),
            o = s(i),
            r = s(n(301)),
            l = s(n(1));

        function s(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var u = function (e) {
            function t() {
                return function (e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    }(this, t),
                    function (e, t) {
                        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                        return !t || "object" != typeof t && "function" != typeof t ? e : t
                    }(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
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
            }(t, i.Component), a(t, [{
                key: "handleClickOutside",
                value: function () {
                    this.props.toClose()
                }
            }, {
                key: "render",
                value: function () {
                    return o.default.createElement("div", null, this.props.children)
                }
            }]), t
        }();
        u.propTypes = {
            toClose: l.default.func.isRequired,
            children: l.default.object.isRequired
        };
        var d = (0, r.default)(u);
        t.default = d
    },
    16: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
                value: !0
            }),
            function (e) {
                e.Discount = "discount", e.FlatFee = "flat_fee", e.RushCharge = "rush_charge", e.ShippingCharge = "shipping_charge", e.StandardCharge = "standard_charge"
            }(t.AdjustmentType || (t.AdjustmentType = {})),
            function (e) {
                e.Freeform = "freeform", e.Mirrored = "mirrored"
            }(t.ArtworkLayoutType || (t.ArtworkLayoutType = {})),
            function (e) {
                e.Net30 = "30", e.Net60 = "60", e.Net90 = "90"
            }(t.AuthorizedPaymentDuration || (t.AuthorizedPaymentDuration = {})),
            function (e) {
                e.Accepted = "accepted", e.Paid = "paid", e.Pending = "pending", e.Rejected = "rejected"
            }(t.AuthorizedPaymentStatus || (t.AuthorizedPaymentStatus = {})),
            function (e) {
                e.Net = "net"
            }(t.AuthorizedPaymentTerms || (t.AuthorizedPaymentTerms = {})),
            function (e) {
                e.Digital = "digital", e.Flexo = "flexo", e.Litho = "litho", e.Optiflex = "optiflex"
            }(t.BasicPrintMethod || (t.BasicPrintMethod = {})),
            function (e) {
                e.Back = "back", e.Bottom = "bottom", e.FacingFlap = "facingFlap", e.Front = "front", e.InsideBack = "insideBack", e.InsideBottom = "insideBottom", e.InsideFlap = "insideFlap", e.InsideFront = "insideFront", e.InsideLeft = "insideLeft", e.InsideRight = "insideRight", e.InsideTop = "insideTop", e.Left = "left", e.LockingFlap = "lockingFlap", e.Right = "right", e.Top = "top"
            }(t.BoxRegionName || (t.BoxRegionName = {})),
            function (e) {
                e.Face = "face", e.Flap = "flap"
            }(t.BoxRegionType || (t.BoxRegionType = {})),
            function (e) {
                e.Exterior = "exterior", e.Interior = "interior"
            }(t.BoxSide || (t.BoxSide = {})),
            function (e) {
                e.A = "A", e.B = "B", e.C = "C", e.E = "E", e.Other = "other", e.Paperboard = "paperboard"
            }(t.Caliper || (t.Caliper = {})),
            function (e) {
                e.HalfTone = "half_tone", e.SingleColor = "single_color", e.SpotWhite = "spot_white", e.ToPNG = "to_png"
            }(t.ConversionProcessStepName || (t.ConversionProcessStepName = {})),
            function (e) {
                e.Autobox = "autobox", e.CADCut = "cad_cut", e.DieCut = "die_cut"
            }(t.ConvertingMethod || (t.ConvertingMethod = {})),
            function (e) {
                e.F0201 = "F0201", e.F0203 = "F0203", e.F0210 = "F0210", e.F0211 = "F0211", e.F0212 = "F0212", e.F0215 = "F0215", e.F0300 = "F0300", e.F0351 = "F0351", e.F0401 = "F0401", e.F0409 = "F0409", e.F0415 = "F0415", e.F0421 = "F0421", e.F0422 = "F0422", e.F0427 = "F0427", e.F0429 = "F0429", e.F0451 = "F0451", e.F0452 = "F0452", e.F0470 = "F0470", e.F0713 = "F0713", e.F32010W = "F32010W", e.F32020W = "F32020W"
            }(t.CorrugatedDesignStandards || (t.CorrugatedDesignStandards = {})),
            function (e) {
                e.Custom = "CUSTOM", e.RTE = "RTE", e.Reft = "REFT", e.Ste = "STE", e.Ttab = "TTAB", e.Ttlb = "TTLB"
            }(t.CuttingDieStyle || (t.CuttingDieStyle = {})),
            function (e) {
                e.A20200304 = "A20.20.03.04", e.A2120 = "A2120", e.F0201 = "F0201", e.F0202 = "F0202", e.F0203 = "F0203", e.F0204 = "F0204", e.F0210 = "F0210", e.F0211 = "F0211", e.F0212 = "F0212", e.F0215 = "F0215", e.F0300 = "F0300", e.F0351 = "F0351", e.F0401 = "F0401", e.F0409 = "F0409", e.F0415 = "F0415", e.F0421 = "F0421", e.F0422 = "F0422", e.F0427 = "F0427", e.F0429 = "F0429", e.F0451 = "F0451", e.F0452 = "F0452", e.F0470 = "F0470", e.F0713 = "F0713", e.F32010W = "F32010W", e.F32020W = "F32020W", e.Fc0102 = "FC0102", e.Fc0106 = "FC0106", e.Fc0204 = "FC0204", e.Lfp = "LFP", e.Sup = "SUP"
            }(t.DesignStandards || (t.DesignStandards = {})),
            function (e) {
                e.Customer = "customer", e.Internal = "internal"
            }(t.DielineRequestSource || (t.DielineRequestSource = {})),
            function (e) {
                e.Custom = "custom", e.Standard = "standard"
            }(t.DielineRequestType || (t.DielineRequestType = {})),
            function (e) {
                e.DigitalMultipassDurst = "digital-multipass-durst", e.DigitalMultipassEFI = "digital-multipass-efi", e.DigitalMultipassFuji = "digital-multipass-fuji", e.DigitalMultipassHPHdr = "digital-multipass-hp_hdr", e.DigitalMultipassVutek = "digital-multipass-vutek"
            }(t.DigitalMultipassPrintMethod || (t.DigitalMultipassPrintMethod = {})),
            function (e) {
                e.Durst = "durst", e.EFI = "efi", e.Fuji = "fuji", e.HPHdr = "hp_hdr", e.Vutek = "vutek"
            }(t.DigitalMultipassPrinter || (t.DigitalMultipassPrinter = {})),
            function (e) {
                e.DigitalSinglepassBarberan = "digital-singlepass-barberan", e.DigitalSinglepassC500 = "digital-singlepass-c500", e.DigitalSinglepassNozomi = "digital-singlepass-nozomi"
            }(t.DigitalSinglepassPrintMethod || (t.DigitalSinglepassPrintMethod = {})),
            function (e) {
                e.Barberan = "barberan", e.C500 = "c500", e.Nozomi = "nozomi"
            }(t.DigitalSinglepassPrinter || (t.DigitalSinglepassPrinter = {})),
            function (e) {
                e.Multipass = "multipass", e.Singlepass = "singlepass"
            }(t.DigitalSubPrintMethod || (t.DigitalSubPrintMethod = {})),
            function (e) {
                e.ClassicPaperboard = "classic_paperboard"
            }(t.FoldingCartonMaterial || (t.FoldingCartonMaterial = {})),
            function (e) {
                e.Neither = "neither", e.Top = "top"
            }(t.FoldingCartonSheetPrintSide || (t.FoldingCartonSheetPrintSide = {})),
            function (e) {
                e.FoldingCarton = "folding-carton", e.MailerBox = "mailer-box", e.ProductBox = "product-box", e.ShippingBox = "shipping-box", e.TuckTop = "tuck-top"
            }(t.InventoryBoxSlug || (t.InventoryBoxSlug = {})),
            function (e) {
                e.Econoflex = "econoflex", e.Economy = "economy", e.Hanging = "hanging", e.LayFlat = "lay-flat", e.LayFlat2SideSeal = "lay-flat-2-side-seal", e.LayFlat3SideSeal = "lay-flat-3-side-seal", e.StandUp = "stand-up", e.Standard = "standard"
            }(t.InventoryBoxSubSlug || (t.InventoryBoxSubSlug = {})),
            function (e) {
                e.FoldingCarton = "folding-carton", e.FoldingCartonStandard = "folding-carton_standard", e.MailerBox = "mailer-box", e.MailerBoxStandard = "mailer-box_standard", e.ProductBox = "product-box", e.ProductBoxStandard = "product-box_standard", e.ShippingBox = "shipping-box", e.ShippingBoxEconoflex = "shipping-box_econoflex", e.ShippingBoxStandard = "shipping-box_standard", e.TuckTop = "tuck-top", e.TuckTopStandard = "tuck-top_standard"
            }(t.InventoryBoxSubType || (t.InventoryBoxSubType = {})),
            function (e) {
                e.Created = "created", e.Purchased = "purchased", e.Saved = "saved"
            }(t.InventoryItemState || (t.InventoryItemState = {})),
            function (e) {
                e.Box = "box", e.Custom = "custom", e.CustomCuttingDie = "custom-cutting-die", e.CustomInsert = "custom-insert", e.Pouch = "pouch", e.PrintPlate = "print-plate"
            }(t.InventoryItemType || (t.InventoryItemType = {})),
            function (e) {
                e.BottomDoyen = "bottom_doyen", e.BottomKSeal = "bottom_k_seal"
            }(t.InventoryPouchGussetType || (t.InventoryPouchGussetType = {})),
            function (e) {
                e.EcoPouch = "eco-pouch"
            }(t.InventoryPouchSlug || (t.InventoryPouchSlug = {})),
            function (e) {
                e.LayFlat = "lay-flat", e.StandUp = "stand-up"
            }(t.InventoryPouchSubSlug || (t.InventoryPouchSubSlug = {})),
            function (e) {
                e.Custom = "custom", e.CustomCuttingDie = "custom-cutting-die", e.CustomInsert = "custom-insert", e.EcoPouch = "eco-pouch", e.FoldingCarton = "folding-carton", e.MailerBox = "mailer-box", e.PrintPlate = "print-plate", e.ProductBox = "product-box", e.ShippingBox = "shipping-box", e.TuckTop = "tuck-top"
            }(t.ItemSku || (t.ItemSku = {})),
            function (e) {
                e.AdjustmentArtwork = "adjustment_artwork", e.AdjustmentSalesTax = "adjustment_sales-tax", e.AdjustmentShipping = "adjustment_shipping", e.CorrugatedProductBoxBudget = "corrugated-product-box_budget", e.CorrugatedProductBoxStandard = "corrugated-product-box_standard", e.CustomCuttingDie = "custom-cutting-die", e.CustomDivider = "custom-divider", e.CustomInsert = "custom-insert", e.CustomPackagingItem = "custom-packaging-item", e.CustomPrintPlate = "custom-print-plate", e.CustomTooling = "custom-tooling", e.EcoPouchLayFlat = "eco-pouch_lay-flat", e.EcoPouchStandUp = "eco-pouch_stand-up", e.FeeArtworkSetup = "fee_artwork-setup", e.FeePrepress = "fee_prepress", e.MailerBoxBudget = "mailer-box_budget", e.MailerBoxEcommerce = "mailer-box_ecommerce", e.ProductBoxHanging = "product-box_hanging", e.ProductBoxPaperboard = "product-box_paperboard", e.ShipperBoxBudget = "shipper-box_budget", e.ShipperBoxBudgetWrap = "shipper-box_budget-wrap", e.ShipperBoxEconoflex = "shipper-box_econoflex", e.ShipperBoxStandard = "shipper-box_standard", e.ShipperBoxWrap = "shipper-box_wrap"
            }(t.MagentoSku || (t.MagentoSku = {})),
            function (e) {
                e.Dreamcoat = "dreamcoat", e.KraftCorrugated = "kraft_corrugated", e.WhiteCorrugated = "white_corrugated"
            }(t.MailerMaterial || (t.MailerMaterial = {})),
            function (e) {
                e.ClassicPaperboard = "classic_paperboard", e.Dreamcoat = "dreamcoat", e.KemiWhite = "kemi_white", e.KraftCorrugated = "kraft_corrugated", e.WhiteCorrugated = "white_corrugated"
            }(t.Material || (t.Material = {})),
            function (e) {
                e.The1 = "1", e.The2 = "2", e.The3 = "3", e.The4 = "4"
            }(t.MaterialID || (t.MaterialID = {})),
            function (e) {
                e.A20200304 = "A20.20.03.04", e.A2120 = "A2120", e.F0202 = "F0202", e.F0204 = "F0204", e.Fc0102 = "FC0102", e.Fc0106 = "FC0106", e.Fc0204 = "FC0204"
            }(t.PaperboardDesignStandards || (t.PaperboardDesignStandards = {})),
            function (e) {
                e.ChildResistantZipper = "child_resistant_zipper", e.HookAndHook = "hook_and_hook", e.PressToCloseZipper = "press_to_close_zipper"
            }(t.PouchClosure || (t.PouchClosure = {})),
            function (e) {
                e.Gloss = "gloss", e.Matte = "matte"
            }(t.PouchCoating || (t.PouchCoating = {})),
            function (e) {
                e.Lfp = "LFP", e.Sup = "SUP"
            }(t.PouchDesignStandards || (t.PouchDesignStandards = {})),
            function (e) {
                e.Clear = "clear", e.Metallized3_Mil = "metallized_3_mil", e.Metallized4_Mil = "metallized_4_mil", e.White = "white"
            }(t.PouchMaterial || (t.PouchMaterial = {})),
            function (e) {
                e.Peghole1_4 = "peghole_1_4", e.Peghole3_16 = "peghole_3_16"
            }(t.PouchPegholeSize || (t.PouchPegholeSize = {})),
            function (e) {
                e.CornerCut = "corner_cut", e.StraightEdge = "straight_edge"
            }(t.PouchSideEdgeShape || (t.PouchSideEdgeShape = {})),
            function (e) {
                e.The2_SideSeal = "2_side_seal", e.The3_SideSeal = "3_side_seal"
            }(t.PouchSideSeal || (t.PouchSideSeal = {})),
            function (e) {
                e.Digital = "digital", e.DigitalMultipassDurst = "digital-multipass-durst", e.DigitalMultipassEFI = "digital-multipass-efi", e.DigitalMultipassFuji = "digital-multipass-fuji", e.DigitalMultipassHPHdr = "digital-multipass-hp_hdr", e.DigitalMultipassVutek = "digital-multipass-vutek", e.DigitalSinglepassBarberan = "digital-singlepass-barberan", e.DigitalSinglepassC500 = "digital-singlepass-c500", e.DigitalSinglepassNozomi = "digital-singlepass-nozomi", e.Flexo = "flexo", e.Litho = "litho", e.Optiflex = "optiflex"
            }(t.PrintMethod || (t.PrintMethod = {})),
            function (e) {
                e.HalfToneColorMode = "HALF_TONE_COLOR_MODE", e.NormalColorMode = "NORMAL_COLOR_MODE", e.SingleColorMode = "SINGLE_COLOR_MODE", e.SpotColorMode = "SPOT_COLOR_MODE"
            }(t.PrintingColorMode || (t.PrintingColorMode = {})),
            function (e) {
                e.EggShell = "egg_shell", e.Gloss = "gloss", e.Matte = "matte", e.Satin = "satin", e.SemiGloss = "semi_gloss"
            }(t.PrintingFinish || (t.PrintingFinish = {})),
            function (e) {
                e.Economy = "economy", e.Rush = "rush", e.Standard = "standard"
            }(t.ProductionSpeed || (t.ProductionSpeed = {})),
            function (e) {
                e.Both = "both", e.None = "none", e.Packlane = "packlane", e.Vendor = "vendor"
            }(t.Proofing || (t.Proofing = {})),
            function (e) {
                e.AqCoating = "aq_coating", e.EggShell = "egg_shell", e.Gloss = "gloss", e.Matte = "matte", e.Satin = "satin", e.SemiGloss = "semi_gloss"
            }(t.RefinementPageOption || (t.RefinementPageOption = {})),
            function (e) {
                e.Both = "both", e.Bottom = "bottom", e.Neither = "neither", e.Top = "top"
            }(t.SheetPrintSide || (t.SheetPrintSide = {})),
            function (e) {
                e.Bottom = "bottom", e.Top = "top"
            }(t.SheetSide || (t.SheetSide = {})),
            function (e) {
                e.Packlane = "packlane", e.Shiplane = "shiplane"
            }(t.SignupSource || (t.SignupSource = {})),
            function (e) {
                e.DetailedQuote = "detailed_quote", e.InternalOrder = "internal_order", e.QuickQuote = "quick_quote"
            }(t.SubmissionType || (t.SubmissionType = {})),
            function (e) {
                e.Accepted = "accepted", e.Pending = "pending", e.Rejected = "rejected"
            }(t.TaxExemptionStatus || (t.TaxExemptionStatus = {})),
            function (e) {
                e.Partnered = "partnered", e.Preferred = "preferred", e.Standard = "standard"
            }(t.VendorStatus || (t.VendorStatus = {}));

        function a(e, t) {
            throw Error(`Invalid value ${JSON.stringify(t)} for type ${JSON.stringify(e)}`)
        }

        function i(e) {
            if (void 0 === e.jsonToJS) {
                var t = {};
                e.props.forEach(e => t[e.json] = {
                    key: e.js,
                    typ: e.typ
                }), e.jsonToJS = t
            }
            return e.jsonToJS
        }

        function o(e) {
            if (void 0 === e.jsToJSON) {
                var t = {};
                e.props.forEach(e => t[e.js] = {
                    key: e.json,
                    typ: e.typ
                }), e.jsToJSON = t
            }
            return e.jsToJSON
        }

        function r(e, t, n) {
            if ("any" === t) return e;
            if (null === t) return null === e ? e : a(t, e);
            if (!1 === t) return a(t, e);
            for (;
                "object" == typeof t && void 0 !== t.ref;) t = u[t.ref];
            return Array.isArray(t) ? function (e, t) {
                return -1 !== e.indexOf(t) ? t : a(e, t)
            }(t, e) : "object" == typeof t ? t.hasOwnProperty("unionMembers") ? function (e, t) {
                for (var i = e.length, o = 0; o < i; o++) {
                    var l = e[o];
                    try {
                        return r(t, l, n)
                    } catch (e) {}
                }
                return a(e, t)
            }(t.unionMembers, e) : t.hasOwnProperty("arrayItems") ? function (e, t) {
                return Array.isArray(t) ? t.map(t => r(t, e, n)) : a("array", t)
            }(t.arrayItems, e) : t.hasOwnProperty("props") ? function (e, t, i) {
                if (null === i || "object" != typeof i || Array.isArray(i)) return a("object", i);
                var o = {};
                return Object.getOwnPropertyNames(e).forEach(t => {
                    const a = e[t],
                        l = Object.prototype.hasOwnProperty.call(i, t) ? i[t] : void 0;
                    o[a.key] = r(l, a.typ, n)
                }), Object.getOwnPropertyNames(i).forEach(a => {
                    Object.prototype.hasOwnProperty.call(e, a) || (o[a] = r(i[a], t, n))
                }), o
            }(n(t), t.additional, e) : a(t, e) : t === Date && "number" != typeof e ? function (e, t) {
                if (null === t) return null;
                const n = new Date(t);
                return isNaN(n.valueOf()) ? a("Date", t) : n
            }(0, e) : function (e, t) {
                return typeof e == typeof t ? t : a(e, t)
            }(t, e)
        }

        function l(...e) {
            return {
                unionMembers: e
            }
        }

        function s(e) {
            return {
                ref: e
            }
        }
        t.Convert = class {
            static toEnums(e) {
                return function (e, t) {
                    return r(e, t, i)
                }(JSON.parse(e), s("Enums"))
            }
            static enumsToJson(e) {
                return JSON.stringify(function (e, t) {
                    return r(e, t, o)
                }(e, s("Enums")), null, 2)
            }
        };
        const u = {
            Enums: function (e, t) {
                return {
                    props: e,
                    additional: t
                }
            }([{
                json: "AdjustmentType",
                js: "adjustmentType",
                typ: l(void 0, s("AdjustmentType"))
            }, {
                json: "ArtworkLayoutType",
                js: "artworkLayoutType",
                typ: l(void 0, s("ArtworkLayoutType"))
            }, {
                json: "AuthorizedPaymentDuration",
                js: "authorizedPaymentDuration",
                typ: l(void 0, s("AuthorizedPaymentDuration"))
            }, {
                json: "AuthorizedPaymentStatus",
                js: "authorizedPaymentStatus",
                typ: l(void 0, s("AuthorizedPaymentStatus"))
            }, {
                json: "AuthorizedPaymentTerms",
                js: "authorizedPaymentTerms",
                typ: l(void 0, s("AuthorizedPaymentTerms"))
            }, {
                json: "BasicPrintMethod",
                js: "basicPrintMethod",
                typ: l(void 0, s("BasicPrintMethod"))
            }, {
                json: "BoxRegionName",
                js: "boxRegionName",
                typ: l(void 0, s("BoxRegionName"))
            }, {
                json: "BoxRegionType",
                js: "boxRegionType",
                typ: l(void 0, s("BoxRegionType"))
            }, {
                json: "BoxSide",
                js: "boxSide",
                typ: l(void 0, s("BoxSide"))
            }, {
                json: "Caliper",
                js: "caliper",
                typ: l(void 0, s("Caliper"))
            }, {
                json: "ConversionProcessStepName",
                js: "conversionProcessStepName",
                typ: l(void 0, s("ConversionProcessStepName"))
            }, {
                json: "ConvertingMethod",
                js: "convertingMethod",
                typ: l(void 0, s("ConvertingMethod"))
            }, {
                json: "CorrugatedDesignStandards",
                js: "corrugatedDesignStandards",
                typ: l(void 0, s("CorrugatedDesignStandards"))
            }, {
                json: "CuttingDieStyle",
                js: "cuttingDieStyle",
                typ: l(void 0, s("CuttingDieStyle"))
            }, {
                json: "DesignStandards",
                js: "designStandards",
                typ: l(void 0, s("DesignStandards"))
            }, {
                json: "DielineRequestSource",
                js: "dielineRequestSource",
                typ: l(void 0, s("DielineRequestSource"))
            }, {
                json: "DielineRequestType",
                js: "dielineRequestType",
                typ: l(void 0, s("DielineRequestType"))
            }, {
                json: "DigitalMultipassPrinter",
                js: "digitalMultipassPrinter",
                typ: l(void 0, s("DigitalMultipassPrinter"))
            }, {
                json: "DigitalMultipassPrintMethod",
                js: "digitalMultipassPrintMethod",
                typ: l(void 0, s("DigitalMultipassPrintMethod"))
            }, {
                json: "DigitalSinglepassPrinter",
                js: "digitalSinglepassPrinter",
                typ: l(void 0, s("DigitalSinglepassPrinter"))
            }, {
                json: "DigitalSinglepassPrintMethod",
                js: "digitalSinglepassPrintMethod",
                typ: l(void 0, s("DigitalSinglepassPrintMethod"))
            }, {
                json: "DigitalSubPrintMethod",
                js: "digitalSubPrintMethod",
                typ: l(void 0, s("DigitalSubPrintMethod"))
            }, {
                json: "FoldingCartonMaterial",
                js: "foldingCartonMaterial",
                typ: l(void 0, s("FoldingCartonMaterial"))
            }, {
                json: "FoldingCartonSheetPrintSide",
                js: "foldingCartonSheetPrintSide",
                typ: l(void 0, s("FoldingCartonSheetPrintSide"))
            }, {
                json: "InventoryBoxSlug",
                js: "inventoryBoxSlug",
                typ: l(void 0, s("InventoryBoxSlug"))
            }, {
                json: "InventoryBoxSubSlug",
                js: "inventoryBoxSubSlug",
                typ: l(void 0, s("InventoryBoxSubSlug"))
            }, {
                json: "InventoryBoxSubType",
                js: "inventoryBoxSubType",
                typ: l(void 0, s("InventoryBoxSubType"))
            }, {
                json: "InventoryItemState",
                js: "inventoryItemState",
                typ: l(void 0, s("InventoryItemState"))
            }, {
                json: "InventoryItemType",
                js: "inventoryItemType",
                typ: l(void 0, s("InventoryItemType"))
            }, {
                json: "InventoryPouchGussetType",
                js: "inventoryPouchGussetType",
                typ: l(void 0, s("InventoryPouchGussetType"))
            }, {
                json: "InventoryPouchSlug",
                js: "inventoryPouchSlug",
                typ: l(void 0, s("InventoryPouchSlug"))
            }, {
                json: "InventoryPouchSubSlug",
                js: "inventoryPouchSubSlug",
                typ: l(void 0, s("InventoryPouchSubSlug"))
            }, {
                json: "ItemSku",
                js: "itemSku",
                typ: l(void 0, s("ItemSku"))
            }, {
                json: "ItemSubSku",
                js: "itemSubSku",
                typ: l(void 0, s("InventoryBoxSubSlug"))
            }, {
                json: "MagentoSku",
                js: "magentoSku",
                typ: l(void 0, s("MagentoSku"))
            }, {
                json: "MailerMaterial",
                js: "mailerMaterial",
                typ: l(void 0, s("MailerMaterial"))
            }, {
                json: "Material",
                js: "material",
                typ: l(void 0, s("Material"))
            }, {
                json: "MaterialID",
                js: "materialID",
                typ: l(void 0, s("MaterialID"))
            }, {
                json: "PaperboardDesignStandards",
                js: "paperboardDesignStandards",
                typ: l(void 0, s("PaperboardDesignStandards"))
            }, {
                json: "PouchClosure",
                js: "pouchClosure",
                typ: l(void 0, s("PouchClosure"))
            }, {
                json: "PouchCoating",
                js: "pouchCoating",
                typ: l(void 0, s("PouchCoating"))
            }, {
                json: "PouchDesignStandards",
                js: "pouchDesignStandards",
                typ: l(void 0, s("PouchDesignStandards"))
            }, {
                json: "PouchMaterial",
                js: "pouchMaterial",
                typ: l(void 0, s("PouchMaterial"))
            }, {
                json: "PouchPegholeSize",
                js: "pouchPegholeSize",
                typ: l(void 0, s("PouchPegholeSize"))
            }, {
                json: "PouchSideEdgeShape",
                js: "pouchSideEdgeShape",
                typ: l(void 0, s("PouchSideEdgeShape"))
            }, {
                json: "PouchSideSeal",
                js: "pouchSideSeal",
                typ: l(void 0, s("PouchSideSeal"))
            }, {
                json: "PrintingColorMode",
                js: "printingColorMode",
                typ: l(void 0, s("PrintingColorMode"))
            }, {
                json: "PrintingFinish",
                js: "printingFinish",
                typ: l(void 0, s("PrintingFinish"))
            }, {
                json: "PrintMethod",
                js: "printMethod",
                typ: l(void 0, s("PrintMethod"))
            }, {
                json: "ProductionSpeed",
                js: "productionSpeed",
                typ: l(void 0, s("ProductionSpeed"))
            }, {
                json: "Proofing",
                js: "proofing",
                typ: l(void 0, s("Proofing"))
            }, {
                json: "RefinementPageOption",
                js: "refinementPageOption",
                typ: l(void 0, s("RefinementPageOption"))
            }, {
                json: "SheetPrintSide",
                js: "sheetPrintSide",
                typ: l(void 0, s("SheetPrintSide"))
            }, {
                json: "SheetSide",
                js: "sheetSide",
                typ: l(void 0, s("SheetSide"))
            }, {
                json: "SignupSource",
                js: "signupSource",
                typ: l(void 0, s("SignupSource"))
            }, {
                json: "SubmissionType",
                js: "submissionType",
                typ: l(void 0, s("SubmissionType"))
            }, {
                json: "TaxExemptionStatus",
                js: "taxExemptionStatus",
                typ: l(void 0, s("TaxExemptionStatus"))
            }, {
                json: "VendorStatus",
                js: "vendorStatus",
                typ: l(void 0, s("VendorStatus"))
            }], "any"),
            AdjustmentType: ["discount", "flat_fee", "rush_charge", "shipping_charge", "standard_charge"],
            ArtworkLayoutType: ["freeform", "mirrored"],
            AuthorizedPaymentDuration: ["30", "60", "90"],
            AuthorizedPaymentStatus: ["accepted", "paid", "pending", "rejected"],
            AuthorizedPaymentTerms: ["net"],
            BasicPrintMethod: ["digital", "flexo", "litho", "optiflex"],
            BoxRegionName: ["back", "bottom", "facingFlap", "front", "insideBack", "insideBottom", "insideFlap", "insideFront", "insideLeft", "insideRight", "insideTop", "left", "lockingFlap", "right", "top"],
            BoxRegionType: ["face", "flap"],
            BoxSide: ["exterior", "interior"],
            Caliper: ["A", "B", "C", "E", "other", "paperboard"],
            ConversionProcessStepName: ["half_tone", "single_color", "spot_white", "to_png"],
            ConvertingMethod: ["autobox", "cad_cut", "die_cut"],
            CorrugatedDesignStandards: ["F0201", "F0203", "F0210", "F0211", "F0212", "F0215", "F0300", "F0351", "F0401", "F0409", "F0415", "F0421", "F0422", "F0427", "F0429", "F0451", "F0452", "F0470", "F0713", "F32010W", "F32020W"],
            CuttingDieStyle: ["CUSTOM", "RTE", "REFT", "STE", "TTAB", "TTLB"],
            DesignStandards: ["A20.20.03.04", "A2120", "F0201", "F0202", "F0203", "F0204", "F0210", "F0211", "F0212", "F0215", "F0300", "F0351", "F0401", "F0409", "F0415", "F0421", "F0422", "F0427", "F0429", "F0451", "F0452", "F0470", "F0713", "F32010W", "F32020W", "FC0102", "FC0106", "FC0204", "LFP", "SUP"],
            DielineRequestSource: ["customer", "internal"],
            DielineRequestType: ["custom", "standard"],
            DigitalMultipassPrintMethod: ["digital-multipass-durst", "digital-multipass-efi", "digital-multipass-fuji", "digital-multipass-hp_hdr", "digital-multipass-vutek"],
            DigitalMultipassPrinter: ["durst", "efi", "fuji", "hp_hdr", "vutek"],
            DigitalSinglepassPrintMethod: ["digital-singlepass-barberan", "digital-singlepass-c500", "digital-singlepass-nozomi"],
            DigitalSinglepassPrinter: ["barberan", "c500", "nozomi"],
            DigitalSubPrintMethod: ["multipass", "singlepass"],
            FoldingCartonMaterial: ["classic_paperboard"],
            FoldingCartonSheetPrintSide: ["neither", "top"],
            InventoryBoxSlug: ["folding-carton", "mailer-box", "product-box", "shipping-box", "tuck-top"],
            InventoryBoxSubSlug: ["econoflex", "economy", "hanging", "lay-flat", "lay-flat-2-side-seal", "lay-flat-3-side-seal", "stand-up", "standard"],
            InventoryBoxSubType: ["folding-carton", "folding-carton_standard", "mailer-box", "mailer-box_standard", "product-box", "product-box_standard", "shipping-box", "shipping-box_econoflex", "shipping-box_standard", "tuck-top", "tuck-top_standard"],
            InventoryItemState: ["created", "purchased", "saved"],
            InventoryItemType: ["box", "custom", "custom-cutting-die", "custom-insert", "pouch", "print-plate"],
            InventoryPouchGussetType: ["bottom_doyen", "bottom_k_seal"],
            InventoryPouchSlug: ["eco-pouch"],
            InventoryPouchSubSlug: ["lay-flat", "stand-up"],
            ItemSku: ["custom", "custom-cutting-die", "custom-insert", "eco-pouch", "folding-carton", "mailer-box", "print-plate", "product-box", "shipping-box", "tuck-top"],
            MagentoSku: ["adjustment_artwork", "adjustment_sales-tax", "adjustment_shipping", "corrugated-product-box_budget", "corrugated-product-box_standard", "custom-cutting-die", "custom-divider", "custom-insert", "custom-packaging-item", "custom-print-plate", "custom-tooling", "eco-pouch_lay-flat", "eco-pouch_stand-up", "fee_artwork-setup", "fee_prepress", "mailer-box_budget", "mailer-box_ecommerce", "product-box_hanging", "product-box_paperboard", "shipper-box_budget", "shipper-box_budget-wrap", "shipper-box_econoflex", "shipper-box_standard", "shipper-box_wrap"],
            MailerMaterial: ["dreamcoat", "kraft_corrugated", "white_corrugated"],
            Material: ["classic_paperboard", "dreamcoat", "kemi_white", "kraft_corrugated", "white_corrugated"],
            MaterialID: ["1", "2", "3", "4"],
            PaperboardDesignStandards: ["A20.20.03.04", "A2120", "F0202", "F0204", "FC0102", "FC0106", "FC0204"],
            PouchClosure: ["child_resistant_zipper", "hook_and_hook", "press_to_close_zipper"],
            PouchCoating: ["gloss", "matte"],
            PouchDesignStandards: ["LFP", "SUP"],
            PouchMaterial: ["clear", "metallized_3_mil", "metallized_4_mil", "white"],
            PouchPegholeSize: ["peghole_1_4", "peghole_3_16"],
            PouchSideEdgeShape: ["corner_cut", "straight_edge"],
            PouchSideSeal: ["2_side_seal", "3_side_seal"],
            PrintMethod: ["digital", "digital-multipass-durst", "digital-multipass-efi", "digital-multipass-fuji", "digital-multipass-hp_hdr", "digital-multipass-vutek", "digital-singlepass-barberan", "digital-singlepass-c500", "digital-singlepass-nozomi", "flexo", "litho", "optiflex"],
            PrintingColorMode: ["HALF_TONE_COLOR_MODE", "NORMAL_COLOR_MODE", "SINGLE_COLOR_MODE", "SPOT_COLOR_MODE"],
            PrintingFinish: ["egg_shell", "gloss", "matte", "satin", "semi_gloss"],
            ProductionSpeed: ["economy", "rush", "standard"],
            Proofing: ["both", "none", "packlane", "vendor"],
            RefinementPageOption: ["aq_coating", "egg_shell", "gloss", "matte", "satin", "semi_gloss"],
            SheetPrintSide: ["both", "bottom", "neither", "top"],
            SheetSide: ["bottom", "top"],
            SignupSource: ["packlane", "shiplane"],
            SubmissionType: ["detailed_quote", "internal_order", "quick_quote"],
            TaxExemptionStatus: ["accepted", "pending", "rejected"],
            VendorStatus: ["partnered", "preferred", "standard"]
        }
    },
    1876: function (e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = a(n(1877));
        window.addEventListener("commonInitComplete", i.default)
    },
    1877: function (e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = n(17),
            o = a(n(1878));
        t.default = (() => {
            const e = document.getElementById("dieline-upload-container");
            if (!e) throw new Error("react app mount failure. could not find root <div/> with id dieline-upload-container");
            i.render(o.default, e)
        })
    },
    1878: function (e, t, n) {
        "use strict";
        (function (e) {
            var a = this && this.__importDefault || function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            const i = a(n(0)),
                o = n(3),
                r = n(79),
                l = a(n(860)),
                s = a(n(1880)),
                u = r.hot(e)(() => i.default.createElement(o.Provider, {
                    store: l.default
                }, i.default.createElement(s.default, null)));
            t.default = i.default.createElement(u, null)
        }).call(this, n(63)(e))
    },
    1879: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = n(861),
            i = n(210),
            o = n(321);
        t.default = ((e, t) => a.actions.match(t, {
            UPDATE_FIELD: ({
                field: t,
                value: n
            }) => {
                const a = Object.assign({}, e, {
                    [t]: n
                });
                return ["length", "width", "depth"].includes(t) && !o.getIsStockSize(a) ? Object.assign({}, a, {
                    finish: null
                }) : a
            },
            UPDATE_SUBMIT_STATUS: ({
                status: t
            }) => Object.assign({}, e, {
                dielineSubmitted: t
            }),
            UPDATE_MATERIAL: ({
                material: t
            }) => {
                const n = Object.assign({}, e, {
                    material: t
                });
                return o.getIsStockSize(n) ? Object.assign({}, e, {
                    material: t,
                    finish: i.FINISHES_FOR_MATERIAL[t][0]
                }) : Object.assign({}, n, {
                    finish: null
                })
            },
            UPDATE_BOX_TYPE: ({
                boxType: t
            }) => {
                const n = {};
                switch (n.boxType = t, t) {
                    case "foldingCarton":
                        n.material = i.FOLDING_CARTON_BOX_MATERIALS[0];
                        break;
                    case "econoflexBox":
                        n.material = i.ECONOFLEX_BOX_MATERIALS[0];
                        break;
                    default:
                        n.material = i.BOX_MATERIALS[0]
                }
                return n.finish = null, Object.assign({}, e, n)
            },
            default: () => e
        }))
    },
    1880: function (e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = n(3),
            o = a(n(1881)),
            r = n(861),
            l = n(321);
        t.default = i.connect(e => ({
            boxType: l.getBoxType(e),
            flatLength: l.getFlatLength(e),
            flatWidth: l.getFlatWidth(e),
            length: l.getLength(e),
            width: l.getWidth(e),
            depth: l.getDepth(e),
            material: l.getMaterial(e),
            whiteInk: l.getWhiteInk(e),
            quantity: l.getQuantity(e),
            notes: l.getNotes(e),
            exteriorFile: l.getExteriorFile(e),
            exteriorFilePreview: l.getExteriorFilePreview(e),
            interiorFile: l.getInteriorFile(e),
            interiorFilePreview: l.getInteriorFilePreview(e),
            statusMessage: l.getStatusMessage(e),
            csrfToken: l.getCSRFToken(e),
            firstName: l.getFirstName(e),
            lastName: l.getLastName(e),
            email: l.getEmail(e),
            dielineSubmitted: l.getDielineSubmitted(e),
            showFinishes: l.getShowFinishes(e),
            finish: l.getFinish(e),
            finishOptions: l.getFinishOptions(e),
            singlepassFinishForBoxTypeAndMaterial: l.getSinglepassFinishForBoxTypeAndMaterial(e)
        }), e => ({
            updateField: (t, n) => {
                e(r.actions.UPDATE_FIELD({
                    field: t,
                    value: n
                }))
            },
            updateSubmitStatus: t => {
                e(r.actions.UPDATE_SUBMIT_STATUS({
                    status: t
                }))
            },
            updateBoxType: t => {
                e(r.actions.UPDATE_BOX_TYPE({
                    boxType: t
                }))
            },
            updateMaterial: t => {
                e(r.actions.UPDATE_MATERIAL({
                    material: t
                }))
            }
        }))(o.default)
    },
    1881: function (e, t, n) {
        "use strict";
        var a = this && this.__rest || function (e, t) {
                var n = {};
                for (var a in e) Object.prototype.hasOwnProperty.call(e, a) && t.indexOf(a) < 0 && (n[a] = e[a]);
                if (null != e && "function" == typeof Object.getOwnPropertySymbols) {
                    var i = 0;
                    for (a = Object.getOwnPropertySymbols(e); i < a.length; i++) t.indexOf(a[i]) < 0 && (n[a[i]] = e[a[i]])
                }
                return n
            },
            i = this && this.__importStar || function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            },
            o = this && this.__importDefault || function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const r = i(n(0)),
            l = o(n(1882)),
            s = o(n(1883)),
            u = o(n(1886)),
            d = o(n(1887)),
            c = o(n(1888)),
            p = o(n(1890)),
            f = (e, t, n) => {
                const a = "foldingCarton" !== e && "econoflexBox" !== e;
                return "foldingCarton" !== e && t ? r.default.createElement(l.default, {
                    boxSide: "Interior",
                    file: t,
                    updateField: n
                }) : a ? r.default.createElement(u.default, {
                    boxSide: "Interior",
                    updateField: n
                }) : null
            };
        t.default = class extends r.Component {
            constructor(e) {
                super(e), this.state = {
                    modalOpen: !1
                }, this.toggleModal = this.toggleModal.bind(this)
            }
            toggleModal() {
                this.setState({
                    modalOpen: !this.state.modalOpen
                })
            }
            render() {
                const e = this.props,
                    {
                        exteriorFilePreview: t,
                        interiorFilePreview: n
                    } = e,
                    i = a(e, ["exteriorFilePreview", "interiorFilePreview"]),
                    {
                        statusMessage: o,
                        updateField: m
                    } = this.props,
                    h = document.getElementById("dieline-upload-container");
                return r.default.createElement("div", {
                    className: "dashboard-container"
                }, r.default.createElement(p.default, null), r.default.createElement(d.default, {
                    statusMessage: o,
                    updateField: m
                }), r.default.createElement("div", {
                    className: "upload-container"
                }, t ? r.default.createElement(l.default, {
                    boxSide: "Exterior",
                    file: t,
                    updateField: m
                }) : r.default.createElement(u.default, {
                    boxSide: "Exterior",
                    updateField: m
                }), f(this.props.boxType, n, m), r.default.createElement("div", {
                    className: "footer"
                }, r.default.createElement("div", {
                    className: "footer-message"
                }, r.default.createElement("p", null, "Don't have a dieline?"), r.default.createElement("p", null, r.default.createElement("span", {
                    className: "emphasized"
                }, r.default.createElement("a", {
                    href: "/dieline-request"
                }, "Request a dieline"), " or", " ", r.default.createElement("a", {
                    href: "/#choose-style"
                }, "start designing"), " on our 3D builder."))))), r.default.createElement(s.default, Object.assign({}, i, {
                    toggleModal: this.toggleModal
                })), r.default.createElement(c.default, {
                    isOpen: this.state.modalOpen,
                    modalContainer: h,
                    toggleModal: this.toggleModal
                }))
            }
        }
    },
    1882: function (e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = a(n(0)),
            o = a(n(862));
        t.default = (({
            file: e,
            boxSide: t,
            updateField: n
        }) => {
            const a = t.toLowerCase();
            return i.default.createElement("div", {
                className: "previewer"
            }, i.default.createElement("div", {
                className: "title"
            }, i.default.createElement("h2", null, t), i.default.createElement("button", {
                onClick: () => {
                    n(`${a}FilePreview`, ""), n(`${a}File`, "")
                }
            }, i.default.createElement("svg", {
                viewBox: "0 0 20 20",
                xmlns: "http://www.w3.org/2000/svg"
            }, i.default.createElement("path", {
                d: "m10 20c5.5228 0 10-4.4772 10-10 0-5.5228-4.4772-10-10-10-5.5228 0-10 4.4772-10 10 0 5.5228 4.4772 10 10 10z",
                clipRule: "evenodd",
                fill: "#DD5E4A",
                fillRule: "evenodd",
                opacity: ".1"
            }), i.default.createElement("path", {
                d: "m13.536 6.4642c-0.3254-0.32543-0.853-0.32543-1.1785 0l-2.357 2.357-2.357-2.357c-0.32544-0.32543-0.85308-0.32543-1.1785 0-0.32544 0.32544-0.32544 0.85308 0 1.1785l2.357 2.357-2.357 2.357c-0.32544 0.3254-0.32544 0.8531 0 1.1785 0.32543 0.3254 0.85307 0.3254 1.1785 0l2.357-2.357 2.357 2.357c0.3255 0.3254 0.8531 0.3254 1.1785 0 0.3255-0.3254 0.3255-0.8531 0-1.1785l-2.357-2.357 2.357-2.357c0.3255-0.32544 0.3255-0.85308 0-1.1785z",
                clipRule: "evenodd",
                fill: "#DD5E4A",
                fillRule: "evenodd"
            })))), i.default.createElement("div", {
                className: "preview-container"
            }, i.default.createElement(o.default, {
                className: "preview-magnifier",
                mgHeight: 250,
                mgWidth: 250,
                src: e,
                width: "60%",
                zoomFactor: .9
            })))
        })
    },
    1883: function (e, t, n) {
        "use strict";
        var a = this && this.__importStar || function (e) {
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
        const o = a(n(0)),
            r = i(n(4)),
            l = n(9),
            s = i(n(1884)),
            u = n(1885),
            d = n(210),
            c = n(863);
        t.default = (({
            interiorFile: e,
            exteriorFile: t,
            boxType: n,
            length: a,
            width: i,
            depth: p,
            material: f,
            whiteInk: m,
            quantity: h,
            notes: g,
            toggleModal: y,
            updateBoxType: _,
            updateField: v,
            updateSubmitStatus: b,
            updateMaterial: S,
            showFinishes: E,
            finish: P,
            finishOptions: F,
            singlepassFinishForBoxTypeAndMaterial: x
        }) => {
            const w = () => "dreamcoat" === f && "gloss" === P,
                O = () => w() ? h.length > 0 && parseInt(h, 10) < 15 : h.length > 0 && parseInt(h, 10) < d.MINIMUM_QUANTITY[n],
                M = () => w() ? 15 : d.MINIMUM_QUANTITY[n];
            return o.createElement("aside", {
                className: "side-panel"
            }, o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement("h4", null, "Customize your dieline")), o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement("div", {
                className: "panel-title"
            }, o.createElement(s.default, {
                label: "Dieline",
                options: d.BOX_TYPES.map(e => ({
                    value: e,
                    label: d.BOX_TYPES_LABELS[e]
                })),
                value: n,
                onChange: e => {
                    _(e)
                }
            })), o.createElement("p", {
                className: "description"
            }, d.BOX_TYPES_DESCRIPTIONS[n])), "econoflexBox" !== n ? o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement(u.ThreeDimensionalInput, {
                boxType: n,
                depth: p,
                length: a,
                updateField: v,
                width: i
            })) : o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement("label", {
                className: "stacked"
            }, "Size"), o.createElement("div", {
                className: "dimension-input-wrapper"
            }, o.createElement("div", {
                className: "labeled-input"
            }, o.createElement("select", {
                required: !0,
                defaultValue: d.ECONOFLEX_DIMENSIONS[0].length,
                onChange: ({
                    target: e
                }) => {
                    const t = d.ECONOFLEX_DIMENSIONS.find(t => t.name === e.value);
                    v("length", t.length), v("width", t.width), v("depth", t.depth)
                },
                className: "boxed-input-extended"
            }, d.ECONOFLEX_DIMENSIONS.map((e, t) => o.createElement("option", {
                key: e.name,
                value: e.name
            }, d.ECONOFLEX_DIMENSIONS[t].length, " x ", d.ECONOFLEX_DIMENSIONS[t].width, " x", " ", d.ECONOFLEX_DIMENSIONS[t].depth)))))), o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement(s.default, {
                label: "Material",
                options: (e => {
                    let t;
                    switch (e) {
                        case "foldingCarton":
                            t = d.FOLDING_CARTON_BOX_MATERIALS;
                            break;
                        case "econoflexBox":
                            t = d.ECONOFLEX_BOX_MATERIALS;
                            break;
                        default:
                            t = d.BOX_MATERIALS
                    }
                    return t.map(e => ({
                        value: e,
                        label: d.BOX_MATERIALS_LABELS[e]
                    }))
                })(n),
                onChange: e => {
                    S(e)
                },
                value: f
            }), E && o.createElement("div", {
                className: "nested-options active"
            }, o.createElement("div", {
                className: "nested-options__header-without-background-color"
            }, o.createElement("span", {
                className: "nested-options__legend",
                style: {
                    backgroundColor: "white"
                }
            }, "Print Area Finishes")), F.map(e => o.createElement("label", {
                htmlFor: e,
                className: "nested-options__label",
                key: e
            }, o.createElement("input", {
                className: "nested-options__radio",
                type: "radio",
                id: e,
                checked: P === e,
                onChange: () => v("finish", e)
            }), o.createElement("span", {
                className: "nested-options__label-text"
            }, l.startCase(e), " ", e === x[n][f] && " (HDPrint Gloss)"))))), "kraft" === f && "econoflexBox" !== n && o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement("span", {
                className: "labeled-select__label stacked"
            }, "White ink"), o.createElement("span", {
                className: "sub-text"
            }, "* White ink is not available on double-sided orders."), o.createElement("div", {
                className: "ink-toggle"
            }, o.createElement("button", {
                className: r.default("ink-toggle__button ink-toggle__button--left", {
                    selected: m
                }),
                onClick: () => {
                    v("whiteInk", !0)
                },
                type: "button"
            }, "On"), o.createElement("button", {
                className: r.default("ink-toggle__button ink-toggle__button--right", {
                    selected: !m
                }),
                onClick: () => {
                    v("whiteInk", !1)
                },
                type: "button"
            }, "Off"))), o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement("span", {
                className: "labeled-select__label quantity-field"
            }, "Quantity", o.createElement("input", {
                className: r.default({
                    input__error: O(),
                    "boxed-input": !0
                }),
                min: d.MINIMUM_QUANTITY[n],
                onChange: ({
                    target: e
                }) => {
                    v("quantity", e.value.toString())
                },
                placeholder: `Min ${M()}`,
                required: !0,
                type: "number",
                value: h
            })), O() && o.createElement("span", {
                className: "sub-text sub-text--error u-text-right"
            }, "Minimum order of ", M())), o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement("div", {
                className: "notes"
            }, o.createElement("span", {
                className: "labeled-select__label stacked"
            }, "Notes (optional)"), o.createElement("textarea", {
                value: g,
                placeholder: "Anything else we should know?",
                onChange: ({
                    target: e
                }) => {
                    v("notes", e.value)
                }
            }))), o.createElement("div", {
                className: "side-panel-section"
            }, o.createElement("button", {
                className: "submit",
                onClick: () => {
                    (() => {
                        try {
                            c.processRequest().then(e => {
                                e.data.error ? v("statusMessage", "We were unable to process your dieline upload.") : b(!0)
                            })
                        } catch (e) {
                            v("statusMessage", e.message)
                        }
                    })()
                },
                disabled: (() => {
                    let n = !1;
                    return m && e && t && (v("statusMessage", "White ink is not available on double-sided orders. Please turn off white ink or limit your design to one side."), n = !0), n
                })(),
                type: "button"
            }, "Email me a quote")), o.createElement("button", {
                className: "normal-link u-p-8",
                onClick: y,
                type: "button"
            }, "Looking for something more custom?"))
        })
    },
    1884: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var a = t[n];
                        a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                    }
                }
                return function (t, n, a) {
                    return n && e(t.prototype, n), a && e(t, a), t
                }
            }(),
            i = n(0),
            o = u(i),
            r = u(n(1)),
            l = u(n(4)),
            s = u(n(143));

        function u(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var d = function (e) {
            function t(e) {
                ! function (e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, t);
                var n = function (e, t) {
                    if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                    return !t || "object" != typeof t && "function" != typeof t ? e : t
                }(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                return n.state = {
                    dropdownOpen: !1
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
            }(t, i.Component), a(t, [{
                key: "handleValueChange",
                value: function (e) {
                    var t = this.props,
                        n = t.onChange;
                    t.value !== e && n(e), this.setState({
                        dropdownOpen: !1
                    })
                }
            }, {
                key: "selectedValueLabel",
                value: function () {
                    var e = this.props,
                        t = e.value,
                        n = e.options.find(function (e) {
                            return e.value === t
                        });
                    if (n) return n.label;
                    throw new Error("labeled select recieved " + t + " but there is no option for that value")
                }
            }, {
                key: "renderOptionsList",
                value: function () {
                    var e = this;
                    if (!this.state.dropdownOpen) return null;
                    var t = this.props,
                        n = t.options,
                        a = t.value,
                        i = n.map(function (t) {
                            return o.default.createElement("button", {
                                className: (0, l.default)("dropdown__item list__item", "select__item", {
                                    "select__item--active": a === t.value,
                                    "select__item--right": a === t.value
                                }),
                                key: t.value,
                                onClick: function () {
                                    e.handleValueChange(t.value)
                                },
                                value: t.value
                            }, o.default.createElement("p", null, t.label))
                        });
                    return o.default.createElement("ul", {
                        className: "dropdown__list select list"
                    }, i)
                }
            }, {
                key: "render",
                value: function () {
                    var e = this,
                        n = this.props.label,
                        a = this.state.dropdownOpen;
                    return o.default.createElement(s.default, {
                        toClose: function () {
                            e.setState({
                                dropdownOpen: !1
                            })
                        }
                    }, o.default.createElement("div", {
                        className: "labeled-select"
                    }, o.default.createElement("span", {
                        className: "labeled-select__label"
                    }, n), o.default.createElement("div", {
                        className: "labeled-select__dropdown"
                    }, o.default.createElement("div", {
                        className: (0, l.default)("dropdown", {
                            "dropdown--open": a
                        })
                    }, o.default.createElement("button", {
                        className: "dropdown__active",
                        onClick: function () {
                            e.setState({
                                dropdownOpen: !a
                            })
                        }
                    }, o.default.createElement("span", {
                        className: "dropdown__active-text"
                    }, this.selectedValueLabel()), o.default.createElement("span", {
                        className: "rd-i dropdown__active-arrow"
                    }, t.renderArrowSvg())), this.renderOptionsList()))))
                }
            }], [{
                key: "renderArrowSvg",
                value: function () {
                    return o.default.createElement("svg", {
                        width: "10",
                        height: "6",
                        viewBox: "0 0 10 6",
                        version: "1.1",
                        xmlns: "http://www.w3.org/2000/svg"
                    }, o.default.createElement("path", {
                        stroke: "#2b46a0",
                        transform: "rotate(-90 5 2)",
                        d: "M2 -2L6 2.00923077 2.02 6",
                        strokeWidth: "1.5",
                        fill: "none",
                        fillRule: "evenodd"
                    }))
                }
            }]), t
        }();
        d.propTypes = {
            label: r.default.string.isRequired,
            options: r.default.arrayOf(r.default.shape({
                value: r.default.any.isRequired,
                label: r.default.string.isRequired
            })).isRequired,
            value: r.default.any.isRequired,
            onChange: r.default.func.isRequired
        }, t.default = d
    },
    1885: function (e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = a(n(0)),
            o = n(210);
        t.ThreeDimensionalInput = (e => {
            const {
                length: t,
                width: n,
                depth: a,
                updateField: r,
                boxType: l
            } = e;
            return i.default.createElement("div", {
                className: "dimension-input"
            }, i.default.createElement("label", {
                className: "stacked"
            }, "Size"), i.default.createElement("div", {
                className: "dimension-input-wrapper"
            }, i.default.createElement("div", {
                className: "labeled-input"
            }, i.default.createElement("label", null, "L"), i.default.createElement("input", {
                className: "boxed-input",
                placeholder: o.DEFAULT_DIMENSIONS[l].length,
                value: t,
                required: !0,
                onChange: ({
                    target: e
                }) => {
                    r("length", e.value)
                }
            })), i.default.createElement("span", {
                className: "dimension-spacer"
            }, "x"), i.default.createElement("div", {
                className: "labeled-input"
            }, i.default.createElement("label", null, "W"), i.default.createElement("input", {
                placeholder: o.DEFAULT_DIMENSIONS[l].width,
                className: "boxed-input width-input",
                value: n,
                required: !0,
                onChange: ({
                    target: e
                }) => {
                    r("width", e.value)
                }
            })), i.default.createElement("span", {
                className: "dimension-spacer"
            }, "x"), i.default.createElement("div", {
                className: "labeled-input"
            }, i.default.createElement("label", null, "D"), i.default.createElement("input", {
                className: "boxed-input",
                placeholder: o.DEFAULT_DIMENSIONS[l].depth,
                value: a,
                required: !0,
                onChange: ({
                    target: e
                }) => {
                    r("depth", e.value)
                }
            }))))
        })
    },
    1886: function (e, t, n) {
        "use strict";
        var a = this && this.__importStar || function (e) {
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
        const o = a(n(0)),
            r = i(n(329)),
            l = n(863);
        t.default = (({
            updateField: e,
            boxSide: t
        }) => {
            return o.createElement("div", {
                className: "uploader"
            }, o.createElement("h2", null, t), o.createElement("div", {
                className: "dropzone-container"
            }, o.createElement("div", {
                className: "dropzone-message"
            }, o.createElement("svg", {
                xmlns: "http://www.w3.org/2000/svg",
                viewBox: "0 0 847 1058.75",
                fillRule: "evenodd",
                clipRule: "evenodd",
                shapeRendering: "geometricPrecision",
                textRendering: "geometricPrecision",
                imageRendering: "optimizeQuality"
            }, o.createElement("path", {
                d: "M317 18h213v299h299v213H530v299H317V530H18V317h299z",
                fill: "#474E66"
            })), o.createElement("p", {
                className: "dropzone-message__title"
            }, o.createElement("svg", {
                width: "20",
                height: "20",
                fill: "none",
                xmlns: "http://www.w3.org/2000/svg"
            }, o.createElement("path", {
                d: "M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z",
                stroke: "#2B46A0",
                strokeWidth: "2"
            }), o.createElement("path", {
                stroke: "#2B46A0",
                strokeWidth: "2",
                d: "M8 8h11v11H8z"
            })), `Upload your ${t} file`.toUpperCase()), o.createElement("p", {
                className: "dropzone-message__subtitle"
            }, ".ai .pdf .eps")), o.createElement(r.default, {
                className: "dropzone",
                style: {},
                required: !0,
                accept: ".ai, .pdf, .eps",
                onDrop: n => (n => {
                    if (n.length < 1) return void e("statusMessage", "Unsupported file extension. Confirm the file type and please try again. Or send us your artwork, material choice and the quantity you would like to order. You can email us for a quote at contact@packlane.com");
                    const a = t.toLowerCase();
                    l.processArt(n[0]).then(t => {
                        e(`${a}FilePreview`, t.data.preview), e(`${a}File`, t.data.file)
                    }).catch(t => {
                        e("statusMessage", "We apologize but we're unable to process this file. Please send us your artwork, material choice and the quantity you would like to order. You can email us for a quote at contact@packlane.com")
                    })
                })(n)
            })))
        })
    },
    1887: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = r(n(0)),
            i = r(n(1)),
            o = r(n(143));

        function r(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var l = function (e) {
            var t = e.statusMessage,
                n = e.updateField;
            return t ? a.default.createElement("div", {
                className: "status-display"
            }, a.default.createElement(o.default, {
                toClose: function () {
                    return n("statusMessage", null)
                }
            }, a.default.createElement("div", null, t))) : null
        };
        l.propTypes = {
            statusMessage: i.default.string,
            updateField: i.default.func.isRequired
        }, l.defaultProps = {
            statusMessage: null
        }, t.default = l
    },
    1888: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = l(n(0)),
            i = l(n(90)),
            o = l(n(1)),
            r = l(n(1889));

        function l(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var s = function (e) {
            return a.default.createElement(i.default, {
                appElement: e.modalContainer,
                className: "dieline-quote__modal request-quote__modal--restock",
                isOpen: e.isOpen,
                overlayClassName: "modal-overlay modal-overlay--primary"
            }, a.default.createElement("button", {
                className: "modal__close-btn",
                onClick: e.toggleModal
            }, a.default.createElement("i", {
                className: "fa fa-times"
            })), a.default.createElement("div", {
                className: "dieline-quote-wrapper"
            }, a.default.createElement("div", {
                className: "dieline-quote-wrapper__header"
            }, a.default.createElement("img", {
                alt: "Custom Dieline Quote",
                className: "dieline-quote__image",
                src: "/images/ico-designs.svg"
            }), a.default.createElement("h2", {
                className: "dieline-quote__title"
            }, "Looking for something custom?"), a.default.createElement("p", {
                className: "dieline-quote__copy"
            }, "Maybe we can help! Send us your contact details and any artwork you may have (even a sketch on a napkin is a start). We'll look it over and see if we can make it a reality.")), a.default.createElement("div", {
                className: "dieline-quote-wrapper__body"
            }, a.default.createElement(r.default, null))))
        };
        s.propTypes = {
            toggleModal: o.default.func.isRequired,
            modalContainer: o.default.object.isRequired,
            isOpen: o.default.bool.isRequired
        }, t.default = s
    },
    1889: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var a = t[n];
                        a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                    }
                }
                return function (t, n, a) {
                    return n && e(t.prototype, n), a && e(t, a), t
                }
            }(),
            i = n(0),
            o = p(i),
            r = p(n(329)),
            l = p(n(38)),
            s = n(77),
            u = n(61),
            d = p(n(481)),
            c = p(n(482));

        function p(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var f = function (e) {
            function t(e) {
                ! function (e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, t);
                var n = function (e, t) {
                    if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                    return !t || "object" != typeof t && "function" != typeof t ? e : t
                }(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                return n.state = {
                    email: "",
                    firstName: "",
                    lastName: "",
                    message: "",
                    quantity: 300,
                    files: []
                }, n.handleSubmitQuote = n.handleSubmitQuote.bind(n), n.setFormValues = n.setFormValues.bind(n), n.clearForm = n.clearForm.bind(n), n
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
            }(t, i.Component), a(t, [{
                key: "setQuantityError",
                value: function (e) {
                    this.setState({
                        hasQuantityError: e
                    })
                }
            }, {
                key: "setFormValues",
                value: function (e) {
                    this.setState(function (e, t, n) {
                        return t in e ? Object.defineProperty(e, t, {
                            value: n,
                            enumerable: !0,
                            configurable: !0,
                            writable: !0
                        }) : e[t] = n, e
                    }({}, e.currentTarget.name, e.currentTarget.value))
                }
            }, {
                key: "stateIsValid",
                value: function () {
                    return this.state.firstName.trim().length > 0 && this.state.lastName.trim().length > 0 && this.state.email.length > 0 && this.state.quantity > 0
                }
            }, {
                key: "clearForm",
                value: function () {
                    document.getElementById("dieline-quote-form").reset(), this.setState({
                        firstName: "",
                        lastName: "",
                        email: "",
                        quantity: 300,
                        message: "",
                        files: []
                    })
                }
            }, {
                key: "handleSubmitQuote",
                value: function (e) {
                    var t = this;
                    e.preventDefault();
                    var n = {
                            company: "",
                            email: this.state.email,
                            first_name: this.state.firstName,
                            last_name: this.state.lastName,
                            phone: "",
                            source: "dieline_upload_custom_request",
                            zip_code: ""
                        },
                        a = {
                            artwork_link: "",
                            dimensions: "",
                            material: "",
                            package_style: "other",
                            quantity: this.state.quantity,
                            snapshot_url: "no-snapshot(consultation)"
                        },
                        i = {
                            desiredDeliveryDate: null,
                            note: this.state.message
                        },
                        o = this.state.files;
                    l.default.submitCustomQuote(n, a, i, !1, null, "no-snapshot(consultation)", o).then(function () {
                        t.clearForm(), (0, s.customNotyAlert)("", "success", "topRight", !1, 3500, "\n          <div class='lead-alert'>\n            <h5>Dieline request sent!</h5>\n            <p>Your request has been sent. We're excited to chat.</p>\n          </div>\n        "), (0, u.sendCustomQuoteRequest)()
                    })
                }
            }, {
                key: "dropHandler",
                value: function (e) {
                    this.setState({
                        files: e
                    })
                }
            }, {
                key: "render",
                value: function () {
                    var e = this;
                    return o.default.createElement("form", {
                        id: "dieline-quote-form",
                        className: "lead-form",
                        onSubmit: this.handleSubmitQuote
                    }, o.default.createElement("div", {
                        className: "form-layout__rows"
                    }, o.default.createElement("div", {
                        className: "row row--half"
                    }, o.default.createElement(d.default, {
                        label: "First Name",
                        fieldId: "firstName",
                        handleOnChange: this.setFormValues
                    }), o.default.createElement(d.default, {
                        label: "Last Name",
                        fieldId: "lastName",
                        handleOnChange: this.setFormValues
                    })), o.default.createElement("div", {
                        className: "row row--half"
                    }, o.default.createElement(d.default, {
                        label: "Email",
                        fieldId: "email",
                        handleOnChange: this.setFormValues
                    }), o.default.createElement(d.default, {
                        label: "Quantity",
                        fieldId: "quantity",
                        handleOnChange: this.setFormValues
                    })), o.default.createElement("div", {
                        className: "row row--half"
                    }, o.default.createElement(c.default, {
                        fieldId: "message",
                        handleOnChange: this.setFormValues,
                        label: "Message",
                        isOptional: !0
                    }), o.default.createElement("div", {
                        className: "form__field"
                    }, o.default.createElement("label", {
                        className: "form__label",
                        htmlFor: "dieline-dropzone"
                    }, "Upload ", o.default.createElement("span", {
                        className: "sub-text"
                    }, "Optional"), o.default.createElement(r.default, {
                        accept: "image/png",
                        className: "dieline-dropzone",
                        id: "dieline-dropzone",
                        onDrop: function (t) {
                            return e.dropHandler(t)
                        },
                        required: !0
                    }), this.state.files.length > 1 ? o.default.createElement("span", {
                        className: "upload-label"
                    }, this.state.files.length, " files uploaded") : o.default.createElement("span", {
                        className: "upload-label"
                    }, this.state.files[0] && this.state.files[0].name))))), o.default.createElement("button", {
                        className: "pbtn pbtn--primary",
                        disabled: !this.stateIsValid(),
                        type: "submit"
                    }, "Letâ€™s talk"))
                }
            }]), t
        }();
        t.default = f
    },
    1890: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var a = t[n];
                        a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                    }
                }
                return function (t, n, a) {
                    return n && e(t.prototype, n), a && e(t, a), t
                }
            }(),
            i = n(0),
            o = u(i),
            r = u(n(1)),
            l = n(3),
            s = n(321);

        function u(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var d = function (e) {
            function t() {
                return function (e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    }(this, t),
                    function (e, t) {
                        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                        return !t || "object" != typeof t && "function" != typeof t ? e : t
                    }(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
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
            }(t, i.Component), a(t, [{
                key: "renderSuccessModal",
                value: function () {
                    return o.default.createElement("div", {
                        className: "dieline-modal dieline-modal__confirmation"
                    }, o.default.createElement("a", {
                        className: "close",
                        href: "/dieline-upload"
                    }, o.default.createElement("img", {
                        alt: "close",
                        src: "/images/close.svg"
                    })), o.default.createElement("header", {
                        className: "dieline-modal__header"
                    }, o.default.createElement("img", {
                        alt: "confirmation",
                        src: "/images/confirmation.svg"
                    }), o.default.createElement("h2", null, "Thank you")), o.default.createElement("span", {
                        className: "divider"
                    }), o.default.createElement("p", null, "We'll look this over and send you a checkout link"), o.default.createElement("p", null, o.default.createElement("small", null, "PS. Don't worry, if we have questions during review, we'll reach out!")), o.default.createElement("a", {
                        className: "btn btn--blue",
                        href: "/dieline-upload"
                    }, "Close this window"))
                }
            }, {
                key: "renderModal",
                value: function () {
                    return o.default.createElement("div", {
                        className: ""
                    }, o.default.createElement("div", {
                        className: "modal__overlay"
                    }), o.default.createElement("div", {
                        className: "modal__container dieline-modal"
                    }, this.renderSuccessModal()))
                }
            }, {
                key: "render",
                value: function () {
                    return o.default.createElement("div", null, this.props.dielineSubmitted ? this.renderModal() : null)
                }
            }]), t
        }();
        d.propTypes = {
            dielineSubmitted: r.default.bool.isRequired
        };
        t.default = (0, l.connect)(function (e) {
            return {
                dielineSubmitted: (0, s.getDielineSubmitted)(e)
            }
        })(d)
    },
    210: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = n(16);
        t.BOX_TYPES = ["mailerBox", "shippingBox", "econoflexBox", "tuckTop", "foldingCarton"], t.BOX_TYPES_LABELS = {
            mailerBox: "Mailer Box",
            shippingBox: "Shipping Box",
            econoflexBox: "Econoflex Box",
            tuckTop: "Tuck Top",
            foldingCarton: "Product Box"
        }, t.BOX_TYPES_DESCRIPTIONS = {
            mailerBox: "A beautiful and durable box in corrugated cardboard that's ready for shipping or retail shelves",
            shippingBox: "A strong and economical box in corrugated cardboard that provides extra protection in the mail",
            econoflexBox: "Our most economical and eco-friendly shipping boxes. Printed on sturdy 100% recycled Kraft with a trifecta of print quality rivaling Flexo, speedy turnaround, and affordable pricing.",
            tuckTop: "The product-ready structure of our product boxes made with the sturdy corrugated cardboard of our mailers",
            foldingCarton: "A simple and elegant paperboard carton that looks great on retail shelves and is exceptionally lightweight"
        }, t.BOX_MATERIALS = ["white", "kraft", "dreamcoat"], t.FOLDING_CARTON_BOX_MATERIALS = ["paperboard"], t.ECONOFLEX_BOX_MATERIALS = ["kraft"], t.BOX_MATERIALS_LABELS = {
            kraft: "Kraft",
            white: "White",
            dreamcoat: "Dreamcoat",
            paperboard: "Paperboard"
        }, t.REQUIRED_FIELDS = ["length", "width", "depth", "quantity"], t.DEFAULT_DIMENSIONS = {
            mailerBox: {
                length: "9",
                width: "6",
                depth: "3"
            },
            shippingBox: {
                length: "12",
                width: "12",
                depth: "12"
            },
            econoflexBox: {
                length: "12",
                width: "12",
                depth: "12"
            },
            tuckTop: {
                length: "4",
                width: "4",
                depth: "4"
            },
            foldingCarton: {
                length: "4",
                width: "4",
                depth: "4"
            }
        }, t.ECONOFLEX_DIMENSIONS = [{
            length: "12",
            width: "12",
            depth: "12",
            name: "12 x 12 x 12"
        }, {
            length: "12",
            width: "12",
            depth: "6",
            name: "12 x 12 x 6"
        }, {
            length: "11.25",
            width: "8.75",
            depth: "6",
            name: "11.25 x 8.75 x 6"
        }, {
            length: "11.25",
            width: "8.75",
            depth: "4",
            name: "11.25 x 8.75 x 4"
        }, {
            length: "10",
            width: "10",
            depth: "8",
            name: "10 x 10 x 8"
        }, {
            length: "8",
            width: "8",
            depth: "8",
            name: "8 x 8 x 8"
        }, {
            length: "6",
            width: "6",
            depth: "6",
            name: "6 x 6 x 6"
        }], t.FINISHES_FOR_MATERIAL = {
            dreamcoat: [a.PrintingFinish.SemiGloss, a.PrintingFinish.Gloss],
            kraft: [],
            white: [],
            paperboard: []
        }, t.MINIMUM_QUANTITY = {
            mailerBox: 1,
            shippingBox: 1,
            econoflexBox: 1,
            tuckTop: 1,
            foldingCarton: 25
        }
    },
    26: function (e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = a(n(64)),
            o = a(n(9));

        function r(e, t, n = {}, a = 0) {
            const o = n.headers || {
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
            return new Promise((l, s) => {
                i.default.post(e, t, {
                    headers: o,
                    withCredentials: n.withCredentials || !0,
                    timeout: n.timeout,
                    cancelToken: n.cancelToken
                }).then(l).catch(i => {
                    const {
                        retries: o = 0,
                        retryTimeout: u = 1e3
                    } = n;
                    o > a ? setTimeout(() => {
                        l(r(e, t, n, a + 1))
                    }, u) : s(i)
                })
            })
        }! function (e) {
            e.Pending = "Pending", e.Success = "Success", e.Error = "Error"
        }(t.RequestStatus || (t.RequestStatus = {})), t.post = r, t.postAsFormData = function (e, t, n = {}, a = 0) {
            const o = n.headers || {
                "Content-Type": "multipart/form-data",
                "x-csrf-token": n.useCsrf && window.PACKLANE.csrfToken
            };
            return new Promise((l, s) => {
                i.default.post(e, t, {
                    headers: o,
                    withCredentials: n.withCredentials || !0,
                    timeout: n.timeout
                }).then(l).catch(i => {
                    const {
                        retries: o = 0,
                        retryTimeout: u = 1e3
                    } = n;
                    o > a ? setTimeout(() => {
                        l(r(e, t, n, a + 1))
                    }, u) : s(i)
                })
            })
        }, t.put = function e(t, n, a = {}, o = 0) {
            const r = a.headers || {
                "Content-Type": "application/json",
                "x-csrf-token": a.useCsrf && window.PACKLANE.csrfToken
            };
            return new Promise((l, s) => {
                i.default.put(t, n, {
                    headers: r,
                    withCredentials: a.withCredentials || !0,
                    timeout: a.timeout
                }).then(l).catch(i => {
                    const {
                        retries: r = 0,
                        retryTimeout: u = 1e3
                    } = a;
                    r > o ? setTimeout(() => {
                        l(e(t, n, a, o + 1))
                    }, u) : s(i)
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
                const a = e[n];
                o.default.isArray(a) && a[0] && a[0].constructor === File ? a.forEach(e => {
                    t.append(`${n}[]`, e, e.name)
                }) : a && a.constructor !== File && (o.default.isArray(a) || o.default.isObject(a)) ? t.append(n, JSON.stringify(a)) : t.append(n, a)
            }), t
        }
    },
    321: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = n(118),
            i = n(9),
            o = n(210);
        t.getBoxType = (e => e.boxType), t.getFlatLength = (e => e.flatLength), t.getFlatWidth = (e => e.flatWidth), t.getLength = (e => e.length), t.getWidth = (e => e.width), t.getDepth = (e => e.depth), t.getMaterial = (e => e.material), t.getWhiteInk = (e => e.whiteInk), t.getQuantity = (e => e.quantity), t.getNotes = (e => e.notes), t.getExteriorFile = (e => e.exteriorFile), t.getExteriorFilePreview = (e => e.exteriorFilePreview), t.getInteriorFile = (e => e.interiorFile), t.getInteriorFilePreview = (e => e.interiorFilePreview), t.getStatusMessage = (e => e.statusMessage), t.getCSRFToken = (e => e.csrfToken), t.getDielineSubmitted = (e => e.dielineSubmitted), t.getFirstName = (e => e.firstName), t.getLastName = (e => e.lastName), t.getEmail = (e => e.email), t.getFinish = (e => e.finish), t.getStockSizes = (e => e.stock_sizes), t.getSinglepassFinishForBoxTypeAndMaterial = (e => e.singlepass_finish_for_box_type_and_material), t.getFinishOptions = a.createSelector(t.getBoxType, t.getMaterial, (e, t) => "mailerBox" !== e ? [] : o.FINISHES_FOR_MATERIAL[t]), t.getStockSizesForCurrentBoxType = a.createSelector(t.getBoxType, t.getStockSizes, (e, t) => t[e]), t.getCurrentDimensions = a.createSelector(t.getLength, t.getWidth, t.getDepth, (e, t, n) => [e, t, n].map(Number)), t.getIsStockSize = a.createSelector(t.getStockSizesForCurrentBoxType, t.getCurrentDimensions, (e, t) => e.some(e => i.isEqual(e, t))), t.getShowFinishes = a.createSelector(t.getBoxType, t.getMaterial, (e, t) => "mailerBox" === e && "dreamcoat" === t)
    },
    38: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = Object.assign || function (e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var a in n) Object.prototype.hasOwnProperty.call(n, a) && (e[a] = n[a])
                }
                return e
            },
            i = function () {
                return function (e, t) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e)) return function (e, t) {
                        var n = [],
                            a = !0,
                            i = !1,
                            o = void 0;
                        try {
                            for (var r, l = e[Symbol.iterator](); !(a = (r = l.next()).done) && (n.push(r.value), !t || n.length !== t); a = !0);
                        } catch (e) {
                            i = !0, o = e
                        } finally {
                            try {
                                !a && l.return && l.return()
                            } finally {
                                if (i) throw o
                            }
                        }
                        return n
                    }(e, t);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }(),
            o = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var a = t[n];
                        a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                    }
                }
                return function (t, n, a) {
                    return n && e(t.prototype, n), a && e(t, a), t
                }
            }(),
            r = n(26);

        function l(e) {
            for (var t = arguments.length, n = Array(t > 1 ? t - 1 : 0), a = 1; a < t; a++) n[a - 1] = arguments[a];
            return ["/api", e].concat(n).join("/")
        }

        function s(e, t) {
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

        function d(e, t) {
            return $.ajax({
                url: e,
                type: "GET",
                data: t
            })
        }
        var c = function () {
            function e() {
                ! function (e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            return o(e, null, [{
                key: "createFile",
                value: function (e, t) {
                    var n = l("artwork"),
                        a = new FormData;
                    return a.append("file", e), a.append("inventory_id", t), s(n, a)
                }
            }, {
                key: "createSnapshot",
                value: function (e) {
                    return new Promise(function (t, n) {
                        if (e) {
                            var a = l("artwork/snapshots"),
                                i = new FormData;
                            i.append("snapshot", e), s(a, i).then(t).fail(t)
                        } else n("no snapshot provided to API.createSnapshot")
                    })
                }
            }, {
                key: "createSnapshotEx",
                value: function (e, t) {
                    return new Promise(function (n, a) {
                        if (e) {
                            var i = l("artwork/snapshots_ex"),
                                o = new FormData;
                            o.append("snapshot", e), o.append("inventory_id", t), s(i, o).then(n).fail(a)
                        } else a("no snapshot provided to API.createSnapshotEx")
                    })
                }
            }, {
                key: "createLayout",
                value: function (e) {
                    return u(l("artwork/layouts"), {
                        layout: e
                    })
                }
            }, {
                key: "getPrices",
                value: function (e, t, n, a, i, o, r, s) {
                    return function (e, t) {
                        return $.ajax({
                            url: e,
                            type: "POST",
                            data: JSON.stringify(t),
                            dataType: "json",
                            contentType: "application/json; charset=UTF-8"
                        })
                    }(l("price"), {
                        box_type: e,
                        length: t,
                        width: n,
                        depth: a,
                        material: i,
                        ink_coverage: o,
                        quantities: r,
                        design: s
                    })
                }
            }, {
                key: "getBraintreeToken",
                value: function () {
                    return d(l("braintree/token"))
                }
            }, {
                key: "cmyk2rgb",
                value: function (e, t, n, a) {
                    return d(l("convert-color"), {
                        c: e,
                        m: t,
                        y: n,
                        k: a
                    })
                }
            }, {
                key: "rgb2cmyk",
                value: function (e, t, n) {
                    return d(l("convert-color"), {
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
                            var a = /device-cmyk\(([^,]+),\s*([^,]+),\s*([^,]+),\s*([^,\)]+)/.exec(t).slice(1).map(parseFloat),
                                o = i(a, 4),
                                r = o[0],
                                l = o[1],
                                s = o[2],
                                u = o[3];
                            e.cmyk2rgb(r, l, s, u).done(function (e) {
                                var t = i(e, 3),
                                    a = t[0],
                                    o = t[1],
                                    r = t[2],
                                    l = "rgb(" + Math.round(255 * a) + ", " + Math.round(255 * o) + ", " + Math.round(255 * r) + ")";
                                n.resolve(l)
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
                            return a({}, e, function (e, t, n) {
                                return t in e ? Object.defineProperty(e, t, {
                                    value: n,
                                    enumerable: !0,
                                    configurable: !0,
                                    writable: !0
                                }) : e[t] = n, e
                            }({}, t, !0))
                        },
                        o = e.reduce(i, {}),
                        r = t.reduce(i, {});
                    return u(n ? "/api/tools/vendor_report/" + n + "/capacity" : "/api/tools/vendor_report/capacity", {
                        converting: r,
                        printing: o
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
                value: function (e, t, n, a, i, o, l) {
                    var s = e.source,
                        u = n.desiredDeliveryDate,
                        d = n.note,
                        c = new FormData;
                    return Object.keys(e).forEach(function (t) {
                        c.append("customer_info[" + t + "]", e[t])
                    }), Object.keys(t).forEach(function (e) {
                        c.append("deal[" + e + "]", t[e])
                    }), c.append("deal[note]", d), c.append("deal[desired_delivery_date]", u), c.append("deal[snapshot_url]", o), l.forEach(function (e) {
                        c.append("files[]", e)
                    }), c.append("source", s), c.append("inventory_id", i), c.append("is_blank", a), new Promise(function (e, t) {
                        (0, r.post)("/api/v1/product/design/custom_quote", c).then(function (t) {
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
        t.default = c
    },
    42: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = Object.assign || function (e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var a in n) Object.prototype.hasOwnProperty.call(n, a) && (e[a] = n[a])
            }
            return e
        };
        t.default = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                n = void 0,
                l = t.initialDecoder || function (e) {
                    return e
                };
            if (t.mergeInitialStores) {
                var s = t.initialStore,
                    u = window.STORE_INIT ? JSON.parse(atob(window.STORE_INIT)) : {};
                n = a({}, s, u)
            } else n = t.initialStore || (window.STORE_INIT ? JSON.parse(atob(window.STORE_INIT)) : {});
            var d = void 0;
            return window.PACKLANE.isProduction ? d = (0, i.createStore)(e, l(n), t.middleware && i.applyMiddleware.apply(void 0, o(t.middleware))) : (d = (0, i.createStore)(e, l(n), t.middleware ? r(i.applyMiddleware.apply(void 0, o(t.middleware))) : r()), window.PACKLANE.store = d), window.STORE_INIT = void 0,
                function () {
                    var e = document.getElementById(window.PACKLANE.scriptTagId);
                    e && e.parentNode.removeChild(e)
                }(), d
        };
        var i = n(70);

        function o(e) {
            if (Array.isArray(e)) {
                for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
                return n
            }
            return Array.from(e)
        }
        var r = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ && window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__({
            trace: !0,
            traceLimit: 25
        }) || i.compose
    },
    481: function (e, t, n) {
        "use strict";
        var a = this && this.__importStar || function (e) {
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
        const o = a(n(0)),
            r = i(n(4));
        t.default = (({
            fieldId: e,
            half: t,
            handleOnChange: n,
            isOptional: a,
            label: i
        }) => o.createElement("div", {
            className: r.default("form__field", {
                "form__field--half": t
            })
        }, o.createElement("label", {
            className: "form__label",
            htmlFor: e
        }, i, a && o.createElement("span", {
            className: "sub-text"
        }, "Optional"), o.createElement("input", {
            className: "form__text-input",
            id: e,
            name: e,
            onChange: e => n(e),
            type: "text"
        }))))
    },
    482: function (e, t, n) {
        "use strict";
        var a = this && this.__importStar || function (e) {
            if (e && e.__esModule) return e;
            var t = {};
            if (null != e)
                for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t.default = e, t
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = a(n(0));
        t.default = (({
            fieldId: e,
            label: t,
            handleOnChange: n,
            isOptional: a
        }) => i.createElement("div", {
            className: "form__field"
        }, i.createElement("label", {
            className: "form__label",
            htmlFor: e
        }, t, a && i.createElement("span", {
            className: "sub-text"
        }, "Optional"), i.createElement("textarea", {
            className: "form__text-input",
            id: e,
            name: e,
            onChange: e => n(e)
        }))))
    },
    61: function (e, t, n) {
        "use strict";

        function a(e) {
            var t = e.name,
                n = e.category,
                a = e.position,
                i = e.quantity,
                o = e.price,
                r = e.variant,
                l = e.dimension2;
            ga("ec:addProduct", {
                name: t,
                category: n,
                position: a,
                quantity: i,
                price: o,
                variant: r,
                dimension2: l
            })
        }

        function i(e) {
            var t = e.unit_price.toFixed(2);
            if (e.box) {
                var n = e.box,
                    i = n.length,
                    o = n.width,
                    r = n.depth,
                    l = n.material_name,
                    s = n.type,
                    u = n.ink_coverage,
                    d = i + " x " + o + " x " + r,
                    c = l;
                a({
                    name: d,
                    category: s + "/" + d + "/" + c,
                    position: e.quantity,
                    quantity: e.quantity,
                    price: t,
                    variant: c,
                    dimension2: u
                })
            } else a({
                name: "Custom Order",
                category: "Custom Order",
                position: e.quantity,
                quantity: e.quantity,
                price: t
            })
        }

        function o(e) {
            ga("ec:addPromo", {
                id: e,
                name: e
            })
        }

        function r(e, t) {
            ga("ec:setAction", e, t)
        }

        function l() {
            ga("send", "pageview")
        }

        function s(e, t, n, a) {
            ga("send", {
                hitType: "event",
                eventCategory: e,
                eventAction: t,
                eventLabel: n,
                eventValue: a
            })
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.addProduct = a, t.addProductForOrderItem = i, t.addPromotion = o, t.sendViewCheckoutEventAnalytics = function (e, t) {
            e.forEach(i), t && o(t);
            r("checkout", {
                step: 1
            }), s("checkout", "pageView"), l()
        }, t.sendShippingRatesRecievedAnalytics = function (e, t, n, a) {
            r("shippingRatesRecieved", {
                id: e,
                subtotal: t,
                rates: a,
                address: n
            })
        }, t.sendPurchaseEventAnalytics = function (e, t, n, a, o) {
            a.forEach(i), r("purchase", {
                id: e,
                revenue: t,
                shipping: n,
                coupon: o
            }), ga("send", "event", "button", "click", "purchase"), l()
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
        }, t.setAction = r, t.emitPageview = l, t.emitCheckoutClick = function () {
            ga("send", "event", "button", "click", "checkout")
        }, t.reportGuestCheckout = function () {
            s("checkout", "signInDecision", "proceedAsGuest")
        }, t.reportSignInAtCheckout = function () {
            s("checkout", "signInDecision", "signInBefore")
        }, t.emitDesignChange = function () {
            s("design", "change")
        }, t.emitMoreReviewsClick = function () {
            s("reviews", "more")
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
        }, t.customNotyAlert = function (e, t, n, a, i, o) {
            return noty({
                text: e,
                type: t,
                layout: n,
                modal: a,
                timeout: i,
                template: o
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
    },
    860: function (e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = a(n(42)),
            o = a(n(1879)),
            r = n(210),
            l = n(9),
            s = i.default(o.default, {
                initialStore: {
                    boxType: (() => {
                        const e = new URLSearchParams(window.location.search);
                        return e.get("box_type") ? l.camelCase(e.get("box_type")) : r.BOX_TYPES[0]
                    })(),
                    flatLength: "",
                    flatWidth: "",
                    length: "",
                    width: "",
                    depth: "",
                    material: "folding-carton" === new URLSearchParams(window.location.search).get("box_type") ? r.FOLDING_CARTON_BOX_MATERIALS[0] : r.BOX_MATERIALS[0],
                    whiteInk: !1,
                    quantity: "",
                    notes: "",
                    exteriorFile: "",
                    exteriorFilePreview: "",
                    interiorFile: "",
                    interiorFilePreview: "",
                    statusMessage: "",
                    dielineSubmitted: !1,
                    finish: ""
                },
                mergeInitialStores: !0
            });
        t.default = s
    },
    861: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const a = n(281);
        t.actions = a.unionize({
            UPDATE_FIELD: a.ofType(),
            UPDATE_SUBMIT_STATUS: a.ofType(),
            UPDATE_BOX_TYPE: a.ofType(),
            UPDATE_MATERIAL: a.ofType()
        }, {
            tag: "type"
        })
    },
    863: function (e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function (e) {
            return e && e.__esModule ? e : {
                default: e
            }
        };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        const i = a(n(64)),
            o = a(n(860)),
            r = n(210),
            l = n(321);
        t.processArt = (e => {
            const t = o.default.getState(),
                n = new FormData;
            return n.append("file", e), i.default.post("/dieline-upload/art", n, {
                headers: {
                    "Content-Type": "multipart/form-data",
                    "x-csrf-token": l.getCSRFToken(t)
                }
            }).then(e => e).catch(e => {
                throw new Error("asset upload error")
            })
        }), t.processRequest = (() => {
            const e = new FormData,
                t = o.default.getState(),
                n = s(t);
            if (!u(n)) throw new Error("Please ensure you've uploaded at least one dieline file and completed all form fields");
            return Object.keys(n).forEach(t => {
                e.append(t, n[t])
            }), i.default.post("/dieline-upload", e, {
                headers: {
                    "Content-Type": "multipart/form-data",
                    "x-csrf-token": l.getCSRFToken(t)
                }
            }).then(e => e).catch(e => {
                throw new Error("Unable to process request")
            })
        });
        const s = e => ({
                boxType: l.getBoxType(e),
                length: l.getLength(e),
                width: l.getWidth(e),
                depth: l.getDepth(e),
                material: l.getMaterial(e),
                whiteInk: l.getWhiteInk(e).toString(),
                quantity: l.getQuantity(e),
                notes: l.getNotes(e),
                exteriorFile: l.getExteriorFile(e),
                interiorFile: l.getInteriorFile(e),
                exteriorFilePreview: l.getExteriorFilePreview(e),
                interiorFilePreview: l.getInteriorFilePreview(e),
                finish: l.getFinish(e)
            }),
            u = e => {
                let t = [];
                return Object.keys(e).forEach(n => {
                    r.REQUIRED_FIELDS.includes(n) && !e[n] && t.push(n)
                }), (e => {
                    var t = parseInt(e.quantity);
                    return "dreamcoat" === e.material && "gloss" === e.finish ? t >= 15 : t >= r.MINIMUM_QUANTITY[e.boxType]
                })(e) || t.push("quantity"), e.exteriorFile || e.interiorFile || (t = [...t, ...["exteriorFile", "interiorFile"]]), 0 === t.length
            }
    }
});
//# sourceMappingURL=./packlane_web.dieline_upload.index.js-c20986d0ca0ab57ed98f49581f0093cb.map
