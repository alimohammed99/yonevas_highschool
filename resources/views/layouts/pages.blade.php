<!DOCTYPE html>
<html lang="en" dir="ltr"
    prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">

<head>
    <meta charset="utf-8" />
    <script src="https://kit.fontawesome.com/8b0f1bd379.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        (window.NREUM || (NREUM = {})).init = {
            ajax: {
                deny_list: ["bam.nr-data.net"]
            }
        };
        (window.NREUM || (NREUM = {})).loader_config = {
            licenseKey: "f639074655",
            applicationID: "117349135"
        }; /*! For license information please see nr-loader-rum-1220.min.js.LICENSE.txt */
        ! function(t, e) {
            "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define &&
                define.amd ? define([], e) : "object" == typeof exports ? exports.NRBA = e() : t.NRBA = e()
        }(self, (function() {
            return function() {
                var t, e, n = {
                        9034: function(t, e, n) {
                            "use strict";
                            var r = n(4168);
                            e.Z = (0, r.ky)(16)
                        },
                        5973: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                I: function() {
                                    return r
                                }
                            });
                            var r = 0,
                                o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                            o && (r = +o[1])
                        },
                        4280: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                H: function() {
                                    return o
                                }
                            });
                            var r = document.createElement("div");
                            r.innerHTML =
                                "\x3c!--[if lte IE 6]><div></div><![endif]--\x3e\x3c!--[if lte IE 7]><div></div><![endif]--\x3e\x3c!--[if lte IE 8]><div></div><![endif]--\x3e\x3c!--[if lte IE 9]><div></div><![endif]--\x3e";
                            var o, i = r.getElementsByTagName("div").length;
                            o = 4 === i ? 6 : 3 === i ? 7 : 2 === i ? 8 : 1 === i ? 9 : 0
                        },
                        5955: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                I: function() {
                                    return r
                                }
                            });
                            var r = function(t, e) {
                                var n = this;
                                return t && "object" == typeof t ? e && "object" == typeof e ? (Object
                                    .assign(this, e), void Object.entries(t).forEach((function(t) {
                                        var e = t[0],
                                            r = t[1];
                                        n[e] = r
                                    }))) : console.error(
                                    "setting a Configurable requires a model to set its initial properties"
                                ) : console.error(
                                    "setting a Configurable requires an object as input")
                            }
                        },
                        441: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                C: function() {
                                    return c
                                },
                                L: function() {
                                    return u
                                }
                            });
                            var r = n(1424),
                                o = n(5955),
                                i = {
                                    beacon: r.ce.beacon,
                                    errorBeacon: r.ce.errorBeacon,
                                    licenseKey: void 0,
                                    applicationID: void 0,
                                    sa: void 0,
                                    queueTime: void 0,
                                    applicationTime: void 0,
                                    ttGuid: void 0,
                                    user: void 0,
                                    account: void 0,
                                    product: void 0,
                                    extra: void 0,
                                    jsAttributes: {},
                                    userAttributes: void 0,
                                    atts: void 0,
                                    transactionName: void 0,
                                    tNamePlain: void 0
                                },
                                a = {};

                            function c(t) {
                                if (!t) throw new Error("All info objects require an agent identifier!");
                                if (!a[t]) throw new Error("Info for " + t + " was never set");
                                return a[t]
                            }

                            function u(t, e) {
                                if (!t) throw new Error("All info objects require an agent identifier!");
                                a[t] = new o.I(e, i), (0, r.Qy)(t, a[t], "info")
                            }
                        },
                        1476: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                Dg: function() {
                                    return c
                                },
                                Mt: function() {
                                    return u
                                }
                            });
                            var r = n(1424),
                                o = n(5955),
                                i = {
                                    privacy: {
                                        cookies_enabled: !0
                                    },
                                    ajax: {
                                        deny_list: void 0,
                                        enabled: !0
                                    },
                                    distributed_tracing: {
                                        enabled: void 0,
                                        exclude_newrelic_header: void 0,
                                        cors_use_newrelic_header: void 0,
                                        cors_use_tracecontext_headers: void 0,
                                        allowed_origins: void 0
                                    },
                                    ssl: void 0,
                                    obfuscate: void 0,
                                    jserrors: {
                                        enabled: !0
                                    },
                                    metrics: {
                                        enabled: !0
                                    },
                                    page_action: {
                                        enabled: !0
                                    },
                                    page_view_event: {
                                        enabled: !0
                                    },
                                    page_view_timing: {
                                        enabled: !0
                                    },
                                    session_trace: {
                                        enabled: !0
                                    },
                                    spa: {
                                        enabled: !0
                                    }
                                },
                                a = {};

                            function c(t, e) {
                                if (!t) throw new Error(
                                    "All configuration objects require an agent identifier!");
                                a[t] = new o.I(e, i), (0, r.Qy)(t, a[t], "config")
                            }

                            function u(t, e) {
                                if (!t) throw new Error(
                                    "All configuration objects require an agent identifier!");
                                var n = function(t) {
                                    if (!t) throw new Error(
                                        "All configuration objects require an agent identifier!"
                                    );
                                    if (!a[t]) throw new Error("Configuration for " + t +
                                        " was never set");
                                    return a[t]
                                }(t);
                                if (n) {
                                    for (var r = e.split("."), o = 0; o < r.length - 1; o++)
                                        if ("object" != typeof(n = n[r[o]])) return;
                                    n = n[r[r.length - 1]]
                                }
                                return n
                            }
                        },
                        2085: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                Y: function() {
                                    return r
                                }
                            });
                            var r = (0, n(1424).mF)().o
                        },
                        1220: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                O: function() {
                                    return w
                                },
                                s: function() {
                                    return x
                                }
                            });
                            var r = {};
                            n.r(r), n.d(r, {
                                agent: function() {
                                    return a
                                },
                                match: function() {
                                    return f
                                },
                                version: function() {
                                    return c
                                }
                            });
                            var o = n(4280),
                                i = n(6959),
                                a = null,
                                c = null;
                            if (navigator.userAgent) {
                                var u = navigator.userAgent,
                                    s = u.match(/Version\/(\S+)\s+Safari/);
                                s && -1 === u.indexOf("Chrome") && -1 === u.indexOf("Chromium") && (a =
                                    "Safari", c = s[1])
                            }

                            function f(t, e) {
                                if (!a) return !1;
                                if (t !== a) return !1;
                                if (!e) return !0;
                                if (!c) return !1;
                                for (var n = c.split("."), r = e.split("."), o = 0; o < r.length; o++)
                                    if (r[o] !== n[o]) return !1;
                                return !0
                            }
                            var d = n(5955),
                                l = n(1424),
                                v = n(4168),
                                p = window.sessionStorage,
                                h = "NRBA_SESSION_ID";
                            var g = n(1476),
                                y = window.XMLHttpRequest,
                                m = y && y.prototype,
                                b = {};

                            function w(t) {
                                if (!t) throw new Error("All runtime objects require an agent identifier!");
                                if (!b[t]) throw new Error("Runtime for " + t + " was never set");
                                return b[t]
                            }

                            function x(t, e) {
                                if (!t) throw new Error("All runtime objects require an agent identifier!");
                                var n, a;
                                b[t] = new d.I(e, (n = t, {
                                    customTransaction: void 0,
                                    disabled: !1,
                                    features: {},
                                    maxBytes: 6 === o.H ? 2e3 : 3e4,
                                    offset: (0, i.yf)(),
                                    onerror: void 0,
                                    origin: "" + window.location,
                                    ptid: void 0,
                                    releaseIds: {},
                                    sessionId: !0 === (0, g.Mt)(n, "privacy.cookies_enabled") ?
                                        (null === (a = p.getItem(h)) && (a = (0, v.ky)(16), p
                                            .setItem(h, a)), a) : "0",
                                    xhrWrappable: y && m && m.addEventListener && !/CriOS/.test(
                                        navigator.userAgent),
                                    userAgent: r
                                })), (0, l.Qy)(t, b[t], "runtime")
                            }
                        },
                        158: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                q: function() {
                                    return r
                                }
                            });
                            var r = ["1220", "PROD"].filter((function(t) {
                                return t
                            })).join(".")
                        },
                        3707: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                w: function() {
                                    return o
                                }
                            });
                            var r = {
                                    agentIdentifier: ""
                                },
                                o = function(t) {
                                    var e = this;
                                    if ("object" != typeof t) return console.error(
                                        "shared context requires an object as input");
                                    this.sharedContext = {}, Object.assign(this.sharedContext, r), Object
                                        .entries(t).forEach((function(t) {
                                            var n = t[0],
                                                o = t[1];
                                            Object.keys(r).includes(n) && (e.sharedContext[n] = o)
                                        }))
                                }
                        },
                        1776: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                ee: function() {
                                    return r
                                }
                            });
                            var r, o = n(1424),
                                i = n(4217),
                                a = n(357),
                                c = "nr@context",
                                u = (0, o.fP)();

                            function s() {}

                            function f() {
                                return new s
                            }

                            function d() {
                                (r.backlog.api || r.backlog.feature) && (r.aborted = !0, r.backlog = {})
                            }
                            u.ee ? r = u.ee : (r = function t(e, n) {
                                var o = {},
                                    u = {},
                                    l = {},
                                    v = {
                                        on: g,
                                        addEventListener: g,
                                        removeEventListener: y,
                                        emit: h,
                                        get: b,
                                        listeners: m,
                                        context: p,
                                        buffer: w,
                                        abort: d,
                                        aborted: !1,
                                        isBuffering: x,
                                        debugId: n,
                                        backlog: e && e.backlog ? e.backlog : {}
                                    };
                                return v;

                                function p(t) {
                                    return t && t instanceof s ? t : t ? (0, i.X)(t, c, f) : f()
                                }

                                function h(t, n, o, i, a) {
                                    if (!1 !== a && (a = !0), !r.aborted || i) {
                                        e && a && e.emit(t, n, o);
                                        for (var c = p(o), s = m(t), f = s.length, d = 0; d <
                                            f; d++) s[d].apply(c, n);
                                        var l = O()[u[t]];
                                        return l && l.push([v, t, n, c]), c
                                    }
                                }

                                function g(t, e) {
                                    o[t] = m(t).concat(e)
                                }

                                function y(t, e) {
                                    var n = o[t];
                                    if (n)
                                        for (var r = 0; r < n.length; r++) n[r] === e && n.splice(r,
                                            1)
                                }

                                function m(t) {
                                    return o[t] || []
                                }

                                function b(e) {
                                    return l[e] = l[e] || t(v, e)
                                }

                                function w(t, e) {
                                    var n = O();
                                    v.aborted || (0, a.D)(t, (function(t, r) {
                                        e = e || "feature", u[r] = e, e in n || (n[
                                            e] = [])
                                    }))
                                }

                                function x(t) {
                                    return !!O()[u[t]]
                                }

                                function O() {
                                    return v.backlog
                                }
                            }(void 0, "globalEE"), u.ee = r)
                        },
                        7361: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                E: function() {
                                    return r
                                },
                                p: function() {
                                    return o
                                }
                            });
                            var r = n(1776).ee.get("handle");

                            function o(t, e, n, o, i) {
                                i ? (i.buffer([t], o), i.emit(t, e, n)) : (r.buffer([t], o), r.emit(t, e,
                                    n))
                            }
                        },
                        3350: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                X: function() {
                                    return i
                                }
                            });
                            var r = n(7361);
                            i.on = a;
                            var o = i.handlers = {};

                            function i(t, e, n, i) {
                                a(i || r.E, o, t, e, n)
                            }

                            function a(t, e, n, o, i) {
                                i || (i = "feature"), t || (t = r.E);
                                var a = e[i] = e[i] || {};
                                (a[n] = a[n] || []).push([t, o])
                            }
                        },
                        4408: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                m: function() {
                                    return i
                                }
                            });
                            var r = !1;
                            try {
                                var o = Object.defineProperty({}, "passive", {
                                    get: function() {
                                        r = !0
                                    }
                                });
                                window.addEventListener("testPassive", null, o), window.removeEventListener(
                                    "testPassive", null, o)
                            } catch (t) {}

                            function i(t) {
                                return r ? {
                                    passive: !0,
                                    capture: !!t
                                } : !!t
                            }
                        },
                        4168: function(t, e, n) {
                            "use strict";

                            function r() {
                                var t = null,
                                    e = 0,
                                    n = window.crypto || window.msCrypto;

                                function r() {
                                    return t ? 15 & t[e++] : 16 * Math.random() | 0
                                }
                                n && n.getRandomValues && (t = n.getRandomValues(new Uint8Array(31)));
                                for (var o, i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx", a = "", c = 0; c < i
                                    .length; c++) a += "x" === (o = i[c]) ? r().toString(16) : "y" === o ? (
                                    o = 3 & r() | 8).toString(16) : o;
                                return a
                            }

                            function o(t) {
                                var e = null,
                                    n = 0,
                                    r = window.crypto || window.msCrypto;
                                r && r.getRandomValues && Uint8Array && (e = r.getRandomValues(
                                    new Uint8Array(31)));
                                for (var o = [], i = 0; i < t; i++) o.push(a().toString(16));
                                return o.join("");

                                function a() {
                                    return e ? 15 & e[n++] : 16 * Math.random() | 0
                                }
                            }
                            n.d(e, {
                                Rl: function() {
                                    return r
                                },
                                ky: function() {
                                    return o
                                }
                            })
                        },
                        6959: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                nb: function() {
                                    return u
                                },
                                os: function() {
                                    return s
                                },
                                yf: function() {
                                    return c
                                },
                                zO: function() {
                                    return a
                                }
                            });
                            var r = n(2364),
                                o = (new Date).getTime(),
                                i = o;

                            function a() {
                                return r.G && performance.now ? Math.round(performance.now()) : (o = Math
                                    .max((new Date).getTime(), o)) - i
                            }

                            function c() {
                                return o
                            }

                            function u(t) {
                                i = t
                            }

                            function s() {
                                return i
                            }
                        },
                        2364: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                G: function() {
                                    return r
                                }
                            });
                            var r = void 0 !== window.performance && window.performance.timing && void 0 !==
                                window.performance.timing.navigationStart
                        },
                        1793: function(t, e, n) {
                            "use strict";

                            function r(t) {
                                var e, n = 0;
                                for (e = 0; e < t.length; e++) n += (e + 1) * t.charCodeAt(e);
                                return Math.abs(n)
                            }
                            n.d(e, {
                                v: function() {
                                    return s
                                },
                                s: function() {
                                    return u
                                }
                            });
                            var o = n(6972),
                                i = n(5973),
                                a = n(6959),
                                c = n(2364),
                                u = !0;

                            function s(t) {
                                var e = function() {
                                    if (i.I && i.I < 9) return;
                                    if (c.G) return u = !1, window.performance.timing.navigationStart
                                }() || function() {
                                    for (var t = document.cookie.split(" "), e = 0; e < t.length; e++)
                                        if (0 === t[e].indexOf("NREUM=")) {
                                            for (var n, o, i, a, c = t[e].substring("NREUM=".length)
                                                    .split("&"), u = 0; u < c.length; u++) 0 === c[u]
                                                .indexOf("s=") ? i = c[u].substring(2) : 0 === c[u]
                                                .indexOf("p=") ? ";" === (o = c[u].substring(2)).charAt(
                                                    o.length - 1) && (o = o.substr(0, o.length - 1)) :
                                                0 === c[u].indexOf("r=") && ";" === (n = c[u].substring(
                                                    2)).charAt(n.length - 1) && (n = n.substr(0, n
                                                    .length - 1));
                                            if (n) {
                                                var s = r(document.referrer);
                                                (a = s == n) || (a = r(document.location.href) == n &&
                                                    s == o)
                                            }
                                            if (a && i) {
                                                if ((new Date).getTime() - i > 6e4) return;
                                                return i
                                            }
                                        }
                                }();
                                e && ((0, o.B)(t, "starttime", e), (0, a.nb)(e))
                            }
                        },
                        6972: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                B: function() {
                                    return i
                                },
                                L: function() {
                                    return a
                                }
                            });
                            var r = n(6959),
                                o = {};

                            function i(t, e, n) {
                                void 0 === n && (n = (0, r.zO)() + (0, r.os)()), o[t] = o[t] || {}, o[t][
                                    e
                                ] = n
                            }

                            function a(t, e, n, r) {
                                var i, a, c = t.sharedContext.agentIdentifier,
                                    u = null == (i = o[c]) ? void 0 : i[n],
                                    s = null == (a = o[c]) ? void 0 : a[r];
                                void 0 !== u && void 0 !== s && t.store("measures", e, {
                                    value: s - u
                                })
                            }
                        },
                        7299: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                T: function() {
                                    return a
                                }
                            });
                            var r = window,
                                o = r;

                            function i() {
                                return o
                            }
                            var a = {
                                isFileProtocol: function() {
                                    var t = i(),
                                        e = !(!t.location || !t.location.protocol || "file:" !== t
                                            .location.protocol);
                                    e && (a.supportabilityMetricSent = !0);
                                    return e
                                },
                                supportabilityMetricSent: !1
                            }
                        },
                        847: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                K: function() {
                                    return a
                                }
                            });
                            var r = n(1220),
                                o = n(1476),
                                i = ["ajax", "jserrors", "metrics", "page_action", "page_view_event",
                                    "page_view_timing", "session_trace", "spa"
                                ];

                            function a(t) {
                                var e = {};
                                return i.forEach((function(n) {
                                    e[n] = function(t, e) {
                                        return !0 !== (0, r.O)(e).disabled && !1 !== (0, o
                                            .Mt)(e, t + ".enabled")
                                    }(n, t)
                                })), e
                            }
                        },
                        5023: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                W: function() {
                                    return o
                                }
                            });
                            var r = n(1776),
                                o = function(t, e, n) {
                                    void 0 === n && (n = []), this.agentIdentifier = t, this.aggregator = e,
                                        this.ee = r.ee.get(t), this.externalFeatures = n
                                }
                        },
                        4217: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                X: function() {
                                    return o
                                }
                            });
                            var r = Object.prototype.hasOwnProperty;

                            function o(t, e, n) {
                                if (r.call(t, e)) return t[e];
                                var o = n();
                                if (Object.defineProperty && Object.keys) try {
                                    return Object.defineProperty(t, e, {
                                        value: o,
                                        writable: !0,
                                        enumerable: !1
                                    }), o
                                } catch (t) {}
                                return t[e] = o, o
                            }
                        },
                        357: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                D: function() {
                                    return o
                                }
                            });
                            var r = Object.prototype.hasOwnProperty;

                            function o(t, e) {
                                var n = [],
                                    o = "",
                                    i = 0;
                                for (o in t) r.call(t, o) && (n[i] = e(o, t[o]), i += 1);
                                return n
                            }
                        },
                        603: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                $c: function() {
                                    return s
                                },
                                Ng: function() {
                                    return f
                                },
                                RR: function() {
                                    return u
                                }
                            });
                            var r = n(1476),
                                o = n(3707),
                                i = n(7299);

                            function a(t, e) {
                                return a = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function(
                                    t, e) {
                                    return t.__proto__ = e, t
                                }, a(t, e)
                            }
                            var c = {
                                    regex: /^file:\/\/(.*)/,
                                    replacement: "file://OBFUSCATED"
                                },
                                u = function(t) {
                                    var e, n;

                                    function r(e) {
                                        return t.call(this, e) || this
                                    }
                                    n = t, (e = r).prototype = Object.create(n.prototype), e.prototype
                                        .constructor = e, a(e, n);
                                    var o = r.prototype;
                                    return o.shouldObfuscate = function() {
                                        return s(this.sharedContext.agentIdentifier).length > 0
                                    }, o.obfuscateString = function(t) {
                                        if (!t || "string" != typeof t) return t;
                                        for (var e = s(this.sharedContext.agentIdentifier), n = t, r =
                                                0; r < e.length; r++) {
                                            var o = e[r].regex,
                                                i = e[r].replacement || "*";
                                            n = n.replace(o, i)
                                        }
                                        return n
                                    }, r
                                }(o.w);

                            function s(t) {
                                var e = [],
                                    n = (0, r.Mt)(t, "obfuscate") || [];
                                return e = e.concat(n), i.T.isFileProtocol() && e.push(c), e
                            }

                            function f(t) {
                                for (var e = !1, n = !1, r = 0; r < t.length; r++) {
                                    "regex" in t[r] ? "string" != typeof t[r].regex && t[r].regex
                                        .constructor !== RegExp && (console && console.warn && console.warn(
                                            'An obfuscation replacement rule contains a "regex" value with an invalid type (must be a string or RegExp)'
                                        ), n = !0) : (console && console.warn && console.warn(
                                            'An obfuscation replacement rule was detected missing a "regex" value.'
                                        ), n = !0);
                                    var o = t[r].replacement;
                                    o && "string" != typeof o && (console && console.warn && console.warn(
                                        'An obfuscation replacement rule contains a "replacement" value with an invalid type (must be a string)'
                                    ), e = !0)
                                }
                                return !e && !n
                            }
                        },
                        1424: function(t, e, n) {
                            "use strict";
                            n.d(e, {
                                EZ: function() {
                                    return u
                                },
                                Qy: function() {
                                    return c
                                },
                                ce: function() {
                                    return o
                                },
                                fP: function() {
                                    return i
                                },
                                gG: function() {
                                    return s
                                },
                                mF: function() {
                                    return a
                                }
                            });
                            var r = n(6959),
                                o = {
                                    beacon: "bam.nr-data.net",
                                    errorBeacon: "bam.nr-data.net"
                                };

                            function i() {
                                return window.NREUM || (window.NREUM = {}), void 0 === window.newrelic && (
                                    window.newrelic = window.NREUM), window.NREUM
                            }

                            function a() {
                                var t = i();
                                if (!t.o) {
                                    var e = window,
                                        n = e.XMLHttpRequest;
                                    t.o = {
                                        ST: setTimeout,
                                        SI: e.setImmediate,
                                        CT: clearTimeout,
                                        XHR: n,
                                        REQ: e.Request,
                                        EV: e.Event,
                                        PR: e.Promise,
                                        MO: e.MutationObserver,
                                        FETCH: e.fetch
                                    }
                                }
                                return t
                            }

                            function c(t, e, n) {
                                var o, a, c = i(),
                                    u = c.initializedAgents || {},
                                    s = u[t] || {};
                                return Object.keys(s).length || (s.initializedAt = {
                                    ms: (0, r.zO)(),
                                    date: new Date
                                }), c.initializedAgents = Object.assign({}, u, ((a = {})[t] = Object
                                    .assign({}, s, ((o = {})[n] = e, o)), a)), c
                            }

                            function u(t, e) {
                                i()[t] = e
                            }

                            function s() {
                                var t, e;
                                return t = i(), e = t.info || {}, t.info = Object.assign({
                                        beacon: o.beacon,
                                        errorBeacon: o.errorBeacon
                                    }, e),
                                    function() {
                                        var t = i(),
                                            e = t.init || {};
                                        t.init = Object.assign({}, e)
                                    }(), a(),
                                    function() {
                                        var t = i(),
                                            e = t.loader_config || {};
                                        t.loader_config = Object.assign({}, e)
                                    }(), i()
                            }
                        },
                        8539: function(t) {
                            t.exports = function(t, e, n) {
                                e || (e = 0), void 0 === n && (n = t ? t.length : 0);
                                for (var r = -1, o = n - e || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[
                                    r] = t[e + r];
                                return i
                            }
                        }
                    },
                    r = {};

                function o(t) {
                    var e = r[t];
                    if (void 0 !== e) return e.exports;
                    var i = r[t] = {
                        exports: {}
                    };
                    return n[t](i, i.exports, o), i.exports
                }
                o.m = n, o.n = function(t) {
                        var e = t && t.__esModule ? function() {
                            return t.default
                        } : function() {
                            return t
                        };
                        return o.d(e, {
                            a: e
                        }), e
                    }, o.d = function(t, e) {
                        for (var n in e) o.o(e, n) && !o.o(t, n) && Object.defineProperty(t, n, {
                            enumerable: !0,
                            get: e[n]
                        })
                    }, o.f = {}, o.e = function(t) {
                        return Promise.all(Object.keys(o.f).reduce((function(e, n) {
                            return o.f[n](t, e), e
                        }), []))
                    }, o.u = function(t) {
                        return t + "." + o.h().slice(0, 8) + "-1220.js"
                    }, o.h = function() {
                        return "2d6a2503b7f18a5b77dd"
                    }, o.o = function(t, e) {
                        return Object.prototype.hasOwnProperty.call(t, e)
                    }, t = {}, e = "NRBA:", o.l = function(n, r, i, a) {
                        if (t[n]) t[n].push(r);
                        else {
                            var c, u;
                            if (void 0 !== i)
                                for (var s = document.getElementsByTagName("script"), f = 0; f < s
                                    .length; f++) {
                                    var d = s[f];
                                    if (d.getAttribute("src") == n || d.getAttribute("data-webpack") == e + i) {
                                        c = d;
                                        break
                                    }
                                }
                            c || (u = !0, (c = document.createElement("script")).charset = "utf-8", c.timeout =
                                120, o.nc && c.setAttribute("nonce", o.nc), c.setAttribute("data-webpack",
                                    e + i), c.src = n), t[n] = [r];
                            var l = function(e, r) {
                                    c.onerror = c.onload = null, clearTimeout(v);
                                    var o = t[n];
                                    if (delete t[n], c.parentNode && c.parentNode.removeChild(c), o && o
                                        .forEach((function(t) {
                                            return t(r)
                                        })), e) return e(r)
                                },
                                v = setTimeout(l.bind(null, void 0, {
                                    type: "timeout",
                                    target: c
                                }), 12e4);
                            c.onerror = l.bind(null, c.onerror), c.onload = l.bind(null, c.onload), u &&
                                document.head.appendChild(c)
                        }
                    }, o.r = function(t) {
                        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol
                            .toStringTag, {
                                value: "Module"
                            }), Object.defineProperty(t, "__esModule", {
                            value: !0
                        })
                    }, o.p = "https://js-agent.newrelic.com/",
                    function() {
                        var t = {
                            299: 0,
                            82: 0
                        };
                        o.f.j = function(e, n) {
                            var r = o.o(t, e) ? t[e] : void 0;
                            if (0 !== r)
                                if (r) n.push(r[2]);
                                else {
                                    var i = new Promise((function(n, o) {
                                        r = t[e] = [n, o]
                                    }));
                                    n.push(r[2] = i);
                                    var a = o.p + o.u(e),
                                        c = new Error;
                                    o.l(a, (function(n) {
                                        if (o.o(t, e) && (0 !== (r = t[e]) && (t[e] = void 0),
                                                r)) {
                                            var i = n && ("load" === n.type ? "missing" : n
                                                    .type),
                                                a = n && n.target && n.target.src;
                                            c.message = "Loading chunk " + e + " failed.\n(" +
                                                i + ": " + a + ")", c.name = "ChunkLoadError", c
                                                .type = i, c.request = a, r[1](c)
                                        }
                                    }), "chunk-" + e, e)
                                }
                        };
                        var e = function(e, n) {
                                var r, i, a = n[0],
                                    c = n[1],
                                    u = n[2],
                                    s = 0;
                                if (a.some((function(e) {
                                        return 0 !== t[e]
                                    }))) {
                                    for (r in c) o.o(c, r) && (o.m[r] = c[r]);
                                    if (u) u(o)
                                }
                                for (e && e(n); s < a.length; s++) i = a[s], o.o(t, i) && t[i] && t[i][0](), t[
                                    i] = 0
                            },
                            n = self.webpackChunkNRBA = self.webpackChunkNRBA || [];
                        n.forEach(e.bind(null, 0)), n.push = e.bind(null, n.push.bind(n))
                    }();
                var i = {};
                return function() {
                    "use strict";
                    o.r(i);
                    var t = o(9034),
                        e = o(4408),
                        n = window,
                        r = n.document;

                    function a(t) {
                        "complete" === r.readyState && t()
                    }

                    function c(t) {
                        a(t), r.addEventListener ? n.addEventListener("load", t, (0, e.m)(!1)) : n
                            .attachEvent("onload", t)
                    }

                    function u(t) {
                        a(t), r.addEventListener ? r.addEventListener("DOMContentLoaded", t, (0, e.m)(!1)) :
                            r.attachEvent("onreadystatechange", a)
                    }
                    var s = o(1776);

                    function f() {
                        f = function() {
                            return t
                        };
                        var t = {},
                            e = Object.prototype,
                            n = e.hasOwnProperty,
                            r = "function" == typeof Symbol ? Symbol : {},
                            o = r.iterator || "@@iterator",
                            i = r.asyncIterator || "@@asyncIterator",
                            a = r.toStringTag || "@@toStringTag";

                        function c(t, e, n) {
                            return Object.defineProperty(t, e, {
                                value: n,
                                enumerable: !0,
                                configurable: !0,
                                writable: !0
                            }), t[e]
                        }
                        try {
                            c({}, "")
                        } catch (t) {
                            c = function(t, e, n) {
                                return t[e] = n
                            }
                        }

                        function u(t, e, n, r) {
                            var o = e && e.prototype instanceof l ? e : l,
                                i = Object.create(o.prototype),
                                a = new j(r || []);
                            return i._invoke = function(t, e, n) {
                                var r = "suspendedStart";
                                return function(o, i) {
                                    if ("executing" === r) throw new Error(
                                        "Generator is already running");
                                    if ("completed" === r) {
                                        if ("throw" === o) throw i;
                                        return P()
                                    }
                                    for (n.method = o, n.arg = i;;) {
                                        var a = n.delegate;
                                        if (a) {
                                            var c = x(a, n);
                                            if (c) {
                                                if (c === d) continue;
                                                return c
                                            }
                                        }
                                        if ("next" === n.method) n.sent = n._sent = n.arg;
                                        else if ("throw" === n.method) {
                                            if ("suspendedStart" === r) throw r = "completed", n
                                                .arg;
                                            n.dispatchException(n.arg)
                                        } else "return" === n.method && n.abrupt("return", n.arg);
                                        r = "executing";
                                        var u = s(t, e, n);
                                        if ("normal" === u.type) {
                                            if (r = n.done ? "completed" : "suspendedYield", u
                                                .arg === d) continue;
                                            return {
                                                value: u.arg,
                                                done: n.done
                                            }
                                        }
                                        "throw" === u.type && (r = "completed", n.method = "throw",
                                            n.arg = u.arg)
                                    }
                                }
                            }(t, n, a), i
                        }

                        function s(t, e, n) {
                            try {
                                return {
                                    type: "normal",
                                    arg: t.call(e, n)
                                }
                            } catch (t) {
                                return {
                                    type: "throw",
                                    arg: t
                                }
                            }
                        }
                        t.wrap = u;
                        var d = {};

                        function l() {}

                        function v() {}

                        function p() {}
                        var h = {};
                        c(h, o, (function() {
                            return this
                        }));
                        var g = Object.getPrototypeOf,
                            y = g && g(g(_([])));
                        y && y !== e && n.call(y, o) && (h = y);
                        var m = p.prototype = l.prototype = Object.create(h);

                        function b(t) {
                            ["next", "throw", "return"].forEach((function(e) {
                                c(t, e, (function(t) {
                                    return this._invoke(e, t)
                                }))
                            }))
                        }

                        function w(t, e) {
                            function r(o, i, a, c) {
                                var u = s(t[o], t, i);
                                if ("throw" !== u.type) {
                                    var f = u.arg,
                                        d = f.value;
                                    return d && "object" == typeof d && n.call(d, "__await") ? e.resolve(d
                                        .__await).then((function(t) {
                                        r("next", t, a, c)
                                    }), (function(t) {
                                        r("throw", t, a, c)
                                    })) : e.resolve(d).then((function(t) {
                                        f.value = t, a(f)
                                    }), (function(t) {
                                        return r("throw", t, a, c)
                                    }))
                                }
                                c(u.arg)
                            }
                            var o;
                            this._invoke = function(t, n) {
                                function i() {
                                    return new e((function(e, o) {
                                        r(t, n, e, o)
                                    }))
                                }
                                return o = o ? o.then(i, i) : i()
                            }
                        }

                        function x(t, e) {
                            var n = t.iterator[e.method];
                            if (void 0 === n) {
                                if (e.delegate = null, "throw" === e.method) {
                                    if (t.iterator.return && (e.method = "return", e.arg = void 0, x(t, e),
                                            "throw" === e.method)) return d;
                                    e.method = "throw", e.arg = new TypeError(
                                        "The iterator does not provide a 'throw' method")
                                }
                                return d
                            }
                            var r = s(n, t.iterator, e.arg);
                            if ("throw" === r.type) return e.method = "throw", e.arg = r.arg, e.delegate =
                                null, d;
                            var o = r.arg;
                            return o ? o.done ? (e[t.resultName] = o.value, e.next = t.nextLoc, "return" !==
                                    e.method && (e.method = "next", e.arg = void 0), e.delegate = null, d) :
                                o : (e.method = "throw", e.arg = new TypeError(
                                    "iterator result is not an object"), e.delegate = null, d)
                        }

                        function O(t) {
                            var e = {
                                tryLoc: t[0]
                            };
                            1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[
                                3]), this.tryEntries.push(e)
                        }

                        function E(t) {
                            var e = t.completion || {};
                            e.type = "normal", delete e.arg, t.completion = e
                        }

                        function j(t) {
                            this.tryEntries = [{
                                tryLoc: "root"
                            }], t.forEach(O, this), this.reset(!0)
                        }

                        function _(t) {
                            if (t) {
                                var e = t[o];
                                if (e) return e.call(t);
                                if ("function" == typeof t.next) return t;
                                if (!isNaN(t.length)) {
                                    var r = -1,
                                        i = function e() {
                                            for (; ++r < t.length;)
                                                if (n.call(t, r)) return e.value = t[r], e.done = !1, e;
                                            return e.value = void 0, e.done = !0, e
                                        };
                                    return i.next = i
                                }
                            }
                            return {
                                next: P
                            }
                        }

                        function P() {
                            return {
                                value: void 0,
                                done: !0
                            }
                        }
                        return v.prototype = p, c(m, "constructor", p), c(p, "constructor", v), v
                            .displayName = c(p, a, "GeneratorFunction"), t.isGeneratorFunction = function(
                                t) {
                                var e = "function" == typeof t && t.constructor;
                                return !!e && (e === v || "GeneratorFunction" === (e.displayName || e.name))
                            }, t.mark = function(t) {
                                return Object.setPrototypeOf ? Object.setPrototypeOf(t, p) : (t.__proto__ =
                                    p, c(t, a, "GeneratorFunction")), t.prototype = Object.create(m), t
                            }, t.awrap = function(t) {
                                return {
                                    __await: t
                                }
                            }, b(w.prototype), c(w.prototype, i, (function() {
                                return this
                            })), t.AsyncIterator = w, t.async = function(e, n, r, o, i) {
                                void 0 === i && (i = Promise);
                                var a = new w(u(e, n, r, o), i);
                                return t.isGeneratorFunction(n) ? a : a.next().then((function(t) {
                                    return t.done ? t.value : a.next()
                                }))
                            }, b(m), c(m, a, "Generator"), c(m, o, (function() {
                                return this
                            })), c(m, "toString", (function() {
                                return "[object Generator]"
                            })), t.keys = function(t) {
                                var e = [];
                                for (var n in t) e.push(n);
                                return e.reverse(),
                                    function n() {
                                        for (; e.length;) {
                                            var r = e.pop();
                                            if (r in t) return n.value = r, n.done = !1, n
                                        }
                                        return n.done = !0, n
                                    }
                            }, t.values = _, j.prototype = {
                                constructor: j,
                                reset: function(t) {
                                    if (this.prev = 0, this.next = 0, this.sent = this._sent = void 0,
                                        this.done = !1, this.delegate = null, this.method = "next", this
                                        .arg = void 0, this.tryEntries.forEach(E), !t)
                                        for (var e in this) "t" === e.charAt(0) && n.call(this, e) && !
                                            isNaN(+e.slice(1)) && (this[e] = void 0)
                                },
                                stop: function() {
                                    this.done = !0;
                                    var t = this.tryEntries[0].completion;
                                    if ("throw" === t.type) throw t.arg;
                                    return this.rval
                                },
                                dispatchException: function(t) {
                                    if (this.done) throw t;
                                    var e = this;

                                    function r(n, r) {
                                        return a.type = "throw", a.arg = t, e.next = n, r && (e.method =
                                            "next", e.arg = void 0), !!r
                                    }
                                    for (var o = this.tryEntries.length - 1; o >= 0; --o) {
                                        var i = this.tryEntries[o],
                                            a = i.completion;
                                        if ("root" === i.tryLoc) return r("end");
                                        if (i.tryLoc <= this.prev) {
                                            var c = n.call(i, "catchLoc"),
                                                u = n.call(i, "finallyLoc");
                                            if (c && u) {
                                                if (this.prev < i.catchLoc) return r(i.catchLoc, !0);
                                                if (this.prev < i.finallyLoc) return r(i.finallyLoc)
                                            } else if (c) {
                                                if (this.prev < i.catchLoc) return r(i.catchLoc, !0)
                                            } else {
                                                if (!u) throw new Error(
                                                    "try statement without catch or finally");
                                                if (this.prev < i.finallyLoc) return r(i.finallyLoc)
                                            }
                                        }
                                    }
                                },
                                abrupt: function(t, e) {
                                    for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                                        var o = this.tryEntries[r];
                                        if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this
                                            .prev < o.finallyLoc) {
                                            var i = o;
                                            break
                                        }
                                    }
                                    i && ("break" === t || "continue" === t) && i.tryLoc <= e && e <= i
                                        .finallyLoc && (i = null);
                                    var a = i ? i.completion : {};
                                    return a.type = t, a.arg = e, i ? (this.method = "next", this.next =
                                        i.finallyLoc, d) : this.complete(a)
                                },
                                complete: function(t, e) {
                                    if ("throw" === t.type) throw t.arg;
                                    return "break" === t.type || "continue" === t.type ? this.next = t
                                        .arg : "return" === t.type ? (this.rval = this.arg = t.arg, this
                                            .method = "return", this.next = "end") : "normal" === t
                                        .type && e && (this.next = e), d
                                },
                                finish: function(t) {
                                    for (var e = this.tryEntries.length - 1; e >= 0; --e) {
                                        var n = this.tryEntries[e];
                                        if (n.finallyLoc === t) return this.complete(n.completion, n
                                            .afterLoc), E(n), d
                                    }
                                },
                                catch: function(t) {
                                    for (var e = this.tryEntries.length - 1; e >= 0; --e) {
                                        var n = this.tryEntries[e];
                                        if (n.tryLoc === t) {
                                            var r = n.completion;
                                            if ("throw" === r.type) {
                                                var o = r.arg;
                                                E(n)
                                            }
                                            return o
                                        }
                                    }
                                    throw new Error("illegal catch attempt")
                                },
                                delegateYield: function(t, e, n) {
                                    return this.delegate = {
                                        iterator: _(t),
                                        resultName: e,
                                        nextLoc: n
                                    }, "next" === this.method && (this.arg = void 0), d
                                }
                            }, t
                    }

                    function d(t, e, n, r, o, i, a) {
                        try {
                            var c = t[i](a),
                                u = c.value
                        } catch (t) {
                            return void n(t)
                        }
                        c.done ? e(u) : Promise.resolve(u).then(r, o)
                    }
                    var l = 0;

                    function v(t) {
                        var e;
                        (e = f().mark((function e() {
                            var n, r;
                            return f().wrap((function(e) {
                                for (;;) switch (e.prev = e.next) {
                                    case 0:
                                        if (!l++) {
                                            e.next = 2;
                                            break
                                        }
                                        return e.abrupt("return");
                                    case 2:
                                        return e.prev = 2, e.next = 5, o.e(552)
                                            .then(o.bind(o, 5552));
                                    case 5:
                                        return n = e.sent, r = n.aggregator, e
                                            .next = 9, r(t);
                                    case 9:
                                        e.next = 15;
                                        break;
                                    case 11:
                                        e.prev = 11, e.t0 = e.catch(2), console
                                            .error(
                                                "Failed to successfully load all aggregators. Aborting...\n",
                                                e.t0), s.ee.abort();
                                    case 15:
                                    case "end":
                                        return e.stop()
                                }
                            }), e, null, [
                                [2, 11]
                            ])
                        })), function() {
                            var t = this,
                                n = arguments;
                            return new Promise((function(r, o) {
                                var i = e.apply(t, n);

                                function a(t) {
                                    d(i, r, o, a, c, "next", t)
                                }

                                function c(t) {
                                    d(i, r, o, a, c, "throw", t)
                                }
                                a(void 0)
                            }))
                        })()
                    }
                    var p = o(8539),
                        h = o.n(p),
                        g = o(1424),
                        y = o(1220),
                        m = o(441),
                        b = o(7361),
                        w = o(357),
                        x = o(6959);
                    var O = o(1476),
                        E = o(5955),
                        j = {
                            accountID: void 0,
                            trustKey: void 0,
                            agentID: void 0,
                            licenseKey: void 0,
                            applicationID: void 0,
                            xpid: void 0
                        },
                        _ = {};
                    var P = !1;
                    var A = o(6972),
                        k = o(1793),
                        L = o(5023);

                    function S(t, e) {
                        return S = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function(t, e) {
                            return t.__proto__ = e, t
                        }, S(t, e)
                    }
                    var T, C, I, R = function(t) {
                        var e, n;

                        function r(e) {
                            var n;
                            return n = t.call(this, e) || this, (0, k.v)(e), (0, A.B)(e, "firstbyte", (
                                0, x.yf)()), c((function() {
                                return n.measureWindowLoaded()
                            })), u((function() {
                                return n.measureDomContentLoaded()
                            })), n
                        }
                        n = t, (e = r).prototype = Object.create(n.prototype), e.prototype.constructor =
                            e, S(e, n);
                        var o = r.prototype;
                        return o.measureWindowLoaded = function() {
                            var t = (0, x.zO)();
                            (0, A.B)(this.agentIdentifier, "onload", t + (0, x.os)()), (0, b.p)(
                                "timing", ["load", t], void 0, void 0, this.ee)
                        }, o.measureDomContentLoaded = function() {
                            (0, A.B)(this.agentIdentifier, "domContent", (0, x.zO)() + (0, x.os)())
                        }, r
                    }(L.W);
                    void 0 !== document.hidden ? (T = "hidden", C = "visibilitychange", I =
                        "visibilityState") : void 0 !== document.msHidden ? (T = "msHidden", C =
                        "msvisibilitychange") : void 0 !== document.webkitHidden && (T = "webkitHidden",
                        C = "webkitvisibilitychange", I = "webkitVisibilityState");
                    var M = o(2085);

                    function N(t, e) {
                        return N = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function(t, e) {
                            return t.__proto__ = e, t
                        }, N(t, e)
                    }
                    var D = function(t) {
                            var n, r;

                            function o(n) {
                                var r, o;
                                if ((r = t.call(this, n) || this).pageHiddenTime = "hidden" === document
                                    .visibilityState ? -1 : 1 / 0, r.performanceObserver, r
                                    .lcpPerformanceObserver, r.clsPerformanceObserver, r.fiRecorded = !1, !r
                                    .isEnabled()) return function(t) {
                                    if (void 0 === t) throw new ReferenceError(
                                        "this hasn't been initialised - super() hasn't been called"
                                    );
                                    return t
                                }(r);
                                if ("PerformanceObserver" in window && "function" == typeof window
                                    .PerformanceObserver) {
                                    r.performanceObserver = new PerformanceObserver((function() {
                                        var t;
                                        return (t = r).perfObserver.apply(t, arguments)
                                    }));
                                    try {
                                        r.performanceObserver.observe({
                                            entryTypes: ["paint"]
                                        })
                                    } catch (t) {}
                                    r.lcpPerformanceObserver = new PerformanceObserver((function() {
                                        var t;
                                        return (t = r).lcpObserver.apply(t, arguments)
                                    }));
                                    try {
                                        r.lcpPerformanceObserver.observe({
                                            entryTypes: ["largest-contentful-paint"]
                                        })
                                    } catch (t) {}
                                    r.clsPerformanceObserver = new PerformanceObserver((function() {
                                        var t;
                                        return (t = r).clsObserver.apply(t, arguments)
                                    }));
                                    try {
                                        r.clsPerformanceObserver.observe({
                                            type: "layout-shift",
                                            buffered: !0
                                        })
                                    } catch (t) {}
                                }
                                if ("addEventListener" in document) {
                                    r.fiRecorded = !1;
                                    ["click", "keydown", "mousedown", "pointerdown", "touchstart"].forEach((
                                        function(t) {
                                            document.addEventListener(t, (function() {
                                                var t;
                                                return (t = r).captureInteraction.apply(
                                                    t, arguments)
                                            }), (0, e.m)(!1))
                                        }))
                                }
                                return o = function() {
                                    var t;
                                    return (t = r).captureVisibilityChange.apply(t, arguments)
                                }, "addEventListener" in document && C && document.addEventListener(C, (
                                    function() {
                                        I && document[I] ? o(document[I]) : document[T] ? o(
                                            "hidden") : o("visible")
                                    }), (0, e.m)(!1)), r
                            }
                            r = t, (n = o).prototype = Object.create(r.prototype), n.prototype.constructor =
                                n, N(n, r);
                            var i = o.prototype;
                            return i.isEnabled = function() {
                                return !1 !== (0, O.Mt)(this.agentIdentifier,
                                    "page_view_timing.enabled")
                            }, i.perfObserver = function(t, e) {
                                var n = this;
                                t.getEntries().forEach((function(t) {
                                    "first-paint" === t.name ? (0, b.p)("timing", ["fp",
                                            Math.floor(t.startTime)
                                        ], void 0, void 0, n.ee) :
                                        "first-contentful-paint" === t.name && (0, b.p)(
                                            "timing", ["fcp", Math.floor(t.startTime)],
                                            void 0, void 0, n.ee)
                                }))
                            }, i.lcpObserver = function(t, e) {
                                var n = t.getEntries();
                                if (n.length > 0) {
                                    var r = n[n.length - 1];
                                    if (this.pageHiddenTime < r.startTime) return;
                                    var o = [r],
                                        i = this.addConnectionAttributes({});
                                    i && o.push(i), (0, b.p)("lcp", o, void 0, void 0, this.ee)
                                }
                            }, i.clsObserver = function(t) {
                                var e = this;
                                t.getEntries().forEach((function(t) {
                                    t.hadRecentInput || (0, b.p)("cls", [t], void 0, void 0,
                                        e.ee)
                                }))
                            }, i.addConnectionAttributes = function(t) {
                                var e = navigator.connection || navigator.mozConnection || navigator
                                    .webkitConnection;
                                if (e) return e.type && (t["net-type"] = e.type), e.effectiveType && (t[
                                    "net-etype"] = e.effectiveType), e.rtt && (t["net-rtt"] = e
                                    .rtt), e.downlink && (t["net-dlink"] = e.downlink), t
                            }, i.captureInteraction = function(t) {
                                if (t instanceof M.Y.EV && !this.fiRecorded) {
                                    var e = Math.round(t.timeStamp),
                                        n = {
                                            type: t.type
                                        };
                                    this.addConnectionAttributes(n), e <= (0, x.zO)() ? n.fid = (0, x
                                            .zO)() - e : e > (0, x.os)() && e <= Date.now() ? (e -= (0,
                                            x.os)(), n.fid = (0, x.zO)() - e) : e = (0, x.zO)(), this
                                        .fiRecorded = !0, (0, b.p)("timing", ["fi", e, n], void 0,
                                            void 0, this.ee)
                                }
                            }, i.captureVisibilityChange = function(t) {
                                "hidden" === t && (this.pageHiddenTime = (0, x.zO)(), (0, b.p)(
                                    "pageHide", [this.pageHiddenTime], void 0, void 0, this.ee))
                            }, o
                        }(L.W),
                        q = o(3350),
                        B = "React",
                        z = "Angular",
                        G = "AngularJS",
                        H = "Backbone",
                        F = "Ember",
                        V = "Vue",
                        Z = "Meteor",
                        U = "Zepto",
                        X = "Jquery";

                    function Q() {
                        var t = [];
                        try {
                            (function() {
                                try {
                                    if (window.React || window.ReactDOM || window.ReactRedux) return !0;
                                    if (document.querySelector("[data-reactroot], [data-reactid]"))
                                        return !0;
                                    for (var t = document.querySelectorAll("body > div"), e = 0; e < t
                                        .length; e++)
                                        if (Object.keys(t[e]).indexOf("_reactRootContainer") >= 0)
                                            return !0;
                                    return !1
                                } catch (t) {
                                    return !1
                                }
                            })() && t.push(B),
                                function() {
                                    try {
                                        return !!window.angular || (!!document.querySelector(
                                            ".ng-binding, [ng-app], [data-ng-app], [ng-controller], [data-ng-controller], [ng-repeat], [data-ng-repeat]"
                                        ) || !!document.querySelector(
                                            'script[src*="angular.js"], script[src*="angular.min.js"]'
                                        ))
                                    } catch (t) {
                                        return !1
                                    }
                                }() && t.push(G),
                                function() {
                                    try {
                                        return !!(window.hasOwnProperty("ng") && window.ng.hasOwnProperty(
                                                "coreTokens") && window.ng.coreTokens.hasOwnProperty(
                                                "NgZone")) || !!document.querySelectorAll("[ng-version]")
                                            .length
                                    } catch (t) {
                                        return !1
                                    }
                                }() && t.push(z), window.Backbone && t.push(H), window.Ember && t.push(F),
                                window.Vue && t.push(V), window.Meteor && t.push(Z), window.Zepto && t.push(
                                    U), window.jQuery && t.push(X)
                        } catch (t) {}
                        return t
                    }
                    var W = o(7299),
                        K = o(603),
                        Y = o(158);

                    function J(t, e) {
                        return J = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function(t, e) {
                            return t.__proto__ = e, t
                        }, J(t, e)
                    }
                    var $ = function(t) {
                            var e, n;

                            function r(e) {
                                var n;
                                return (n = t.call(this, e) || this).singleChecks(), (0, q.X)(
                                    "record-supportability", (function() {
                                        var t;
                                        return (t = n).recordSupportability.apply(t, arguments)
                                    }), void 0, n.ee), (0, q.X)("record-custom", (function() {
                                    var t;
                                    return (t = n).recordCustom.apply(t, arguments)
                                }), void 0, n.ee), n
                            }
                            n = t, (e = r).prototype = Object.create(n.prototype), e.prototype.constructor =
                                e, J(e, n);
                            var o = r.prototype;
                            return o.recordSupportability = function(t, e) {
                                var n = ["sm", t, {
                                    name: t
                                }, e];
                                return (0, b.p)("storeMetric", n, null, void 0, this.ee), n
                            }, o.recordCustom = function(t, e) {
                                var n = ["cm", t, {
                                    name: t
                                }, e];
                                return (0, b.p)("storeEventMetrics", n, null, void 0, this.ee), n
                            }, o.singleChecks = function() {
                                var t = this;
                                this.recordSupportability("Generic/Version/" + Y.q + "/Detected"), u((
                                    function() {
                                        Q().forEach((function(e) {
                                            t.recordSupportability("Framework/" +
                                                e + "/Detected")
                                        }))
                                    })), W.T.isFileProtocol() && (this.recordSupportability(
                                        "Generic/FileProtocol/Detected"), W.T
                                    .supportabilityMetricSent = !0);
                                var e = (0, K.$c)(this.agentIdentifier);
                                e.length > 0 && this.recordSupportability("Generic/Obfuscate/Detected"),
                                    e.length > 0 && !(0, K.Ng)(e) && this.recordSupportability(
                                        "Generic/Obfuscate/Invalid")
                            }, r
                        }(L.W),
                        tt = o(847);
                    new Promise((function(e, n) {
                        if (P) e(P);
                        else {
                            var r = (0, g.gG)();
                            try {
                                (0, m.L)(t.Z, r.info), (0, O.Dg)(t.Z, r.init),
                                function(t, e) {
                                    if (!t) throw new Error(
                                        "All loader-config objects require an agent identifier!"
                                    );
                                    _[t] = new E.I(e, j), (0, g.Qy)(t, _[t], "loader_config")
                                }(t.Z, r.loader_config), (0, y.s)(t.Z, {}),
                                function(t) {
                                    var e = (0, g.fP)(),
                                        n = s.ee.get(t),
                                        r = n.get("tracer"),
                                        o = "api-",
                                        i = "api-ixn-";

                                    function a() {}(0, w.D)(["setErrorHandler", "finished",
                                        "addToTrace", "inlineHit", "addRelease"
                                    ], (function(t, n) {
                                        e[n] = u(o, n, !0, "api")
                                    })), e.addPageAction = u(o, "addPageAction", !0), e
                                        .setCurrentRouteName = u(o, "routeName", !0), e
                                        .setPageViewName = function(e, n) {
                                            if ("string" == typeof e) return "/" !== e.charAt(
                                                    0) && (e = "/" + e), (0, y.O)(t)
                                                .customTransaction = (n ||
                                                    "http://custom.transaction") + e, u(o,
                                                    "setPageViewName", !0, "api")()
                                        }, e.setCustomAttribute = function(e, n) {
                                            var r, i = (0, m.C)(t);
                                            return (0, m.L)(t, Object.assign({}, i, {
                                                jsAttributes: Object.assign({}, i
                                                    .jsAttributes, (r = {}, r[
                                                        e] = n, r))
                                            })), u(o, "setCustomAttribute", !0, "api")()
                                        }, e.interaction = function() {
                                            return (new a).get()
                                        };
                                    var c = a.prototype = {
                                        createTracer: function(t, e) {
                                            var o = {},
                                                i = this,
                                                a = "function" == typeof e;
                                            return (0, b.p)("api-ixn-tracer", [(0, x.zO)
                                                    (), t, o
                                                ], i, void 0, n),
                                                function() {
                                                    if (r.emit((a ? "" : "no-") +
                                                            "fn-start", [(0, x.zO)(), i,
                                                                a
                                                            ], o), a) try {
                                                        return e.apply(this,
                                                            arguments)
                                                    } catch (t) {
                                                        throw r.emit("fn-err", [
                                                            arguments, this,
                                                            "string" ==
                                                            typeof t ?
                                                            new Error(t) : t
                                                        ], o), t
                                                    } finally {
                                                        r.emit("fn-end", [(0, x.zO)
                                                            ()
                                                        ], o)
                                                    }
                                                }
                                        }
                                    };

                                    function u(t, e, r, o) {
                                        return function() {
                                            return (0, b.p)("record-supportability", [
                                                "API/" + e + "/called"
                                            ], void 0, void 0, n), (0, b.p)(t + e, [(0,
                                                    x.zO)()].concat(h()(arguments)), r ?
                                                null : this, o, n), r ? void 0 : this
                                        }
                                    }(0, w.D)(
                                        "actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get"
                                        .split(","), (function(t, e) {
                                            c[e] = u(i, e)
                                        })), e.noticeError = function(t, e) {
                                        "string" == typeof t && (t = new Error(t)), (0, b.p)
                                            ("record-supportability", [
                                                "API/noticeError/called"
                                            ], void 0, void 0, n), (0, b.p)("err", [t, (0, x
                                                .zO)(), !1, e], void 0, void 0, n)
                                    }
                                }(t.Z), e(P = !0)
                            } catch (t) {
                                n(t)
                            }
                        }
                    })).then((function() {
                        var e, n, r, o = (0, tt.K)(t.Z);
                        o.page_view_event && new R(t.Z), o.page_view_timing && new D(t.Z), o
                            .metrics && new $(t.Z), e = "lite", n ? setTimeout((function() {
                                return v(e)
                            }), r || 1e3) : c((function() {
                                return v(e)
                            }))
                    }))
                }(), i
            }()
        }));
    </script>
    <noscript>
        <style>
            form.antibot * :not(.antibot-message) {
                display: none !important;
            }
        </style>
    </noscript>
    <script src="assets/js/hotjar.script.js?rmv1i3"></script>
    <link rel="canonical" href="https://ohs.stanford.edu/" />
    <link rel="shortlink" href="https://ohs.stanford.edu/" />
    <meta name="Generator" content="Drupal 9 (https://www.drupal.org)" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/newImages/Y-07.png" type="image/vnd.microsoft.icon" />
    <script src="assets/js/google_tag.script.js?rmv1i3" defer></script>

    <title>Yonevas Open University</title>
    <link rel="stylesheet" media="all" href="assets/css/css_h4x8_UEc-szQlKuRP09rIi4bYkcHg0w6wIORP3fOqt8.css?v=3" />
    <link rel="stylesheet" media="all" href="assets/css/css_x63AVUuowb7M9VtrtavyG0w1yBz88xxmHG7wLFVjWxg.css?v=3" />
    <link rel="stylesheet" media="all"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css" />

    <script src="assets/js/modernizr.min.js?v=3.11.7"></script>
    <script src="assets/js/modernizr-additional-tests.js?v=3.11.7"></script>

</head>

<body onload="slider()" class="path-frontpage page-node-type-landing-page">
    <a href="#main-content" class="skip-link">
        Skip to main content
    </a>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZGGPR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <div class="page-wrapper ">
            <header class="header js-header">
                <div class="header-responsive clearfix hidden-on-desktop">
                    <div class="branding">
                        <div class="region region-branding">
                            <a href="/" title="Home" rel="home" class="logo">

                                <img src="assets/newImages/Y-02.png"
                                    style="height: 100px; width: 100px; object-fit: contain;" alt="Home"
                                    class="hidden-on-mobileTabletOnly" />
                                <img src="assets/newImages/Y-06.png"
                                    style="height: 50px; width: 100px object-fit: contain;" alt="Home"
                                    class="hidden-on-desktop" />
                            </a>

                        </div>
                    </div>
                    <a class="menu-toggle-wrap" href="#">
                        <span class="menu-toggle">
                            <i></i>
                            <i></i>
                            <i></i>
                        </span>
                        <span class="menu-toggle-normal">Menu</span>
                        <span class="menu-toggle-close">Close</span>
                    </a>
                </div>

                <div class="header-top bg--cardinal-red text--white hidden-on-mobileTabletOnly">
                    <div class="container">
                        <div class="header-top__content">
                            <div class="header-top__help helper-menu-wrap">
                                <div class="region region-help-nav">
                                    <nav role="navigation" aria-labelledby="block-helpnavigation-menu"
                                        id="block-helpnavigation" class="block block-menu navigation menu--help-nav">
                                        <ul class="menu desktop">
                                            <li class="menu-item">
                                                <a href="{{ url('programs') }}">Programs</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('academics') }}"
                                                    data-drupal-link-system-path="node/884">Academics</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('admission') }}"
                                                    data-drupal-link-system-path="node/717">Admission</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('resource') }}"
                                                    data-drupal-link-system-path="node/717">Resources</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('registrar') }}"
                                                    data-drupal-link-system-path="node/717">Registrar</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('about') }}"
                                                    data-drupal-link-system-path="node/794">About Us</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('contact-us') }}"
                                                    data-drupal-link-system-path="node/794">Contact Us</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('faq') }}"
                                                    data-drupal-link-system-path="node/794">Q&A sections</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="https://hetrynow.brightspace.com/d2l/login?sessionExpired=1&target=%2fd2l%2fhome"
                                                    data-drupal-link-system-path="node/717">D2L</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="https://ex.yonevas.institute"
                                                    data-drupal-link-system-path="node/794">NEWS</a>
                                            </li>

                                            @if (Route::has('login'))

                                                @auth
                                                    <x-app-layout class="menu-item">
                                                    </x-app-layout>
                                                @else
                                                    <li class="menu-item"><a href="{{ route('login') }}">Log in</a></li>

                                                    @if (Route::has('register'))
                                                        <li class="menu-item"> <a
                                                                href="{{ route('register') }}">Apply/Enroll</a></li>
                                                    @endif
                                                @endauth

                                            @endif

                                        </ul>




                                    </nav>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="header-main js-nav-menu bg--white text--dark">
                    <div class="container">
                        <div class="header-main__left hidden-on-mobileTabletOnly">
                            <div class="logosite">
                                <a href="{{ url('/') }}"> <img src="assets/newImages/Y-02.png"
                                        alt="" /></a>
                            </div>
                        </div>
                        <div class="header-main__right">

                            <div class="search-box hidden-on-desktop">

                            </div>


                            <div class="navigation-menu">
                                <div class="region region-main-menu">
                                    <div id="block-dynamicmainmenublock"
                                        class="block block-spcs-domain block-dynamic-main-menu-block">



                                        <div class="main-menu js-expanded-menu ">
                                            <ul class="menu">

                                                <li class="menu-item menu-item--expanded expanded-menu lv-1">
                                                    <a href="{{ url('cost') }}" tabindex="-1"
                                                        data-drupal-link-system-path="node/27">Cost & Aids</a>
                                                    <div class="expanded-menu__menu-child">
                                                        <ul class="menu">
                                                            <li class="menu-item">
                                                                <a href="{{ url('cost') }}"
                                                                    data-drupal-link-system-path="node/27">Overview</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ url('scholarship') }}"
                                                                    data-drupal-link-system-path="node/27">Scholarships</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ url('financial-aid') }}"
                                                                    data-drupal-link-system-path="node/27">Financial
                                                                    Aid</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="menu-item menu-item--expanded expanded-menu lv-1">
                                                    <a href="{{ url('student') }}" tabindex="-1"
                                                        data-drupal-link-system-path="node/27">Student Life</a>
                                                    <div class="expanded-menu__menu-child">
                                                        <ul class="menu">
                                                            <li class="menu-item">
                                                                <a href="{{ url('student') }}"
                                                                    data-drupal-link-system-path="node/27">Student
                                                                    Life</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ url('lyzo-fi') }}"
                                                                    data-drupal-link-system-path="node/27">Lyzo Fi</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ url('zlasic') }}"
                                                                    data-drupal-link-system-path="node/27">Zlasic</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ url('explore') }}"
                                                                    data-drupal-link-system-path="node/27">Explore</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="javascript:;"
                                                                    data-drupal-link-system-path="node/27">Study
                                                                    Abroad</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="javascript:void(0)"
                                                                    data-drupal-link-system-path="node/27">Career
                                                                    Center</a>
                                                            </li>
                                                            <!--<li style="display:none" class="menu-item">-->
                                                            <!--    <a href="{{ url('foundation') }}" data-drupal-link-system-path="node/27">Foundation</a>-->
                                                            <!--</li>-->
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu-item menu-item--expanded expanded-menu lv-1">
                                                    <a href="{{ url('partnership') }}" tabindex="-1"
                                                        data-drupal-link-system-path="node/27">Partnership</a>
                                                    <div class="expanded-menu__menu-child">
                                                        <ul class="menu">
                                                            <li class="menu-item">
                                                                <a href="{{ url('partnership') }}"
                                                                    data-drupal-link-system-path="node/27">Overview</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ url('wellness') }}"
                                                                    data-drupal-link-system-path="node/27">Wellness</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ url('login') }}"
                                                                    data-drupal-link-system-path="node/27">Alumni</a>
                                                            </li>
                                                            <li style="display:none" class="menu-item">
                                                                <a href="{{ route('board') }}"
                                                                    data-drupal-link-system-path="node/27">Board
                                                                    Members</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ url('donate') }}"
                                                                    data-drupal-link-system-path="node/27">Donate</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="menu-item menu-item--expanded expanded-menu lv-1">
                                                    <a href="javascript:void(0)" tabindex="-1"
                                                        data-drupal-link-system-path="node/27">Faculties</a>
                                                    <div class="expanded-menu__menu-child">
                                                        <ul class="menu">
                                                            <li class="menu-item">
                                                                <a href="{{ route('social-science') }}"
                                                                    data-drupal-link-system-path="node/27">Social
                                                                    Sciences</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ route('business-management') }}"
                                                                    data-drupal-link-system-path="node/27">Business
                                                                    management</a>
                                                            </li>
                                                            {{-- <li class="menu-item">
                                                                <a href="{{ route('school-of-law') }}"
                                                                    data-drupal-link-system-path="node/27">LAW</a>
                                                            </li> --}}
                                                              <li class="menu-item">
                                                                <a href="{{ route('faculty-of-education') }}"
                                                                    data-drupal-link-system-path="node/27">Education</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ route('communication-studies') }}" data-drupal-link-system-path="node/27">Communication Studies</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="{{ route('school-of-computer') }}" data-drupal-link-system-path="node/27">Computer Science</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            </ul>

                                        </div>



                                    </div>

                                </div>

                            </div>

                            <div class="helper-menu-wrap hidden-on-desktop">
                                <div class="region region-help-nav">
                                    <nav role="navigation" aria-labelledby="block-helpnavigation-menu"
                                        id="block-helpnavigation" class="block block-menu navigation menu--help-nav">

                                        <h2 class="visually-hidden" id="block-helpnavigation-menu">Help Navigation
                                        </h2>
                                        <ul class="menu">
                                            <li class="menu-item">
                                                <a href="{{ url('programs') }}">Programs</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('academics') }}"
                                                    data-drupal-link-system-path="node/884">Academics</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('admission') }}"
                                                    data-drupal-link-system-path="node/717">Admission</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('resource') }}"
                                                    data-drupal-link-system-path="node/717">Resources</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('registrar') }}"
                                                    data-drupal-link-system-path="node/717">Registrar</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('about') }}"
                                                    data-drupal-link-system-path="node/794">About Us</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('contact-us') }}"
                                                    data-drupal-link-system-path="node/794">Contact Us</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('faq') }}"
                                                    data-drupal-link-system-path="node/794">Q&A sections</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="https://hetrynow.brightspace.com/d2l/login?sessionExpired=1&target=%2fd2l%2fhome"
                                                    data-drupal-link-system-path="node/717">D2L</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="https://ex.yonevas.institute"
                                                    data-drupal-link-system-path="node/794">NEWS</a>
                                            </li>





                                            @if (Route::has('login'))

                                                @auth




                                                    <x-app-layout>

                                                    </x-app-layout>
                                                @else
                                                    <li class="nav-item"><a href="{{ route('login') }}"
                                                            class="nav-link">Log in</a></li>

                                                    @if (Route::has('register'))
                                                        <li class="nav-item"> <a href="{{ route('register') }}"
                                                                class="nav-link">Apply/Enroll</a></li>
                                                    @endif
                                                @endauth

                                            @endif








                                        </ul>



                                    </nav>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </header>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            
            @yield('content')
            <!-- Footer -->
            <footer class="footer">
                <section class="new-footer-section">
                    <div class="new-footer-block">
                        <div class="new-footer-menu">
                            <nav role="navigation" aria-labelledby="new-footer-explore-menu" class="new-footer-nav">
                                <div class="new-footer-menu-container">
                                    <ul>
                                        <li>
                                            <h5>Explore</h5>
                                        </li>
                                        <li>
                                            <a href="https://ex.yonevas.institute/login"
                                                data-drupal-link-system-path="node/22">Agent</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}"
                                                data-drupal-link-system-path="node/22">About</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('admission') }}"
                                                data-drupal-link-system-path="node/717">Admissions</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://calendly.com/meet_yonevas/30min"
                                                data-drupal-link-system-path="node/717">Virtual Assistance</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/employment"
                                                data-drupal-link-system-path="node/884">Employment Oppurtunity</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('programs') }}"
                                                data-drupal-link-system-path="node/884">Programs</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('cost') }}"
                                                data-drupal-link-system-path="node/717">Cost & Aid</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('partnership') }}"
                                                data-drupal-link-system-path="node/717">Partnership</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('academics') }}">Academics</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('student') }}"
                                                data-drupal-link-system-path="node/717">Student Life</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <h5>Connect</h5>
                                        </li>
                                        <li>
                                            <a href="{{ url('website_feedback') }}"
                                                data-drupal-link-system-path="node/717">Website Feedback</a>
                                        </li>
                                        <li>
                                            <a href="mailto:career@yonevas.institute"
                                                data-drupal-link-system-path="node/717">Career Center</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="javascript:void(0)"
                                                data-drupal-link-system-path="node/717">Directory</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/questions" data-drupal-link-system-path="node/717">Terms and
                                                Conditions</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://calendly.com/ebubeyonevas/60mins?month=2023-03"
                                                data-drupal-link-system-path="node/717">Calendar</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://ex.yonevas.institute"
                                                data-drupal-link-system-path="node/717">News</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="http://bnizlytes.org.ng"
                                                data-drupal-link-system-path="node/717">Foundation</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('login') }}" data-drupal-link-system-path="node/717">My
                                                Yonevas</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://hetrynow.brightspace.com/d2l/login?sessionExpired=1&target=%2fd2l%2fhome"
                                                data-drupal-link-system-path="node/717">D2L</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="new-footer-block">
                        <div class="new-contact-info">
                            <h3>Contact Info</h3>
                            <div class="new-info-details">
                                <span>Airport Rd by Piwoyi, <br />FCT, Abuja.</span>
                                <span style="display: block; color: white;">
                                    Phone Number:<a class="new-contact-link"
                                        href="tel:+2347048778559">(+234)7048778559</a>
                                </span>
                                <span style="display: block; color: white;">
                                    Email:<a class="new-contact-link"
                                        href="mailto:info@yonevas.institute">info@yonevas.institute</a>
                                </span>
                            </div>
                            <div class="new-social-media">
                                <ul>
                                    <li>
                                        <a class="facebook-follow" href="https://www.facebook.com/Yonevascollege"
                                            title="Facebook"> <i class="fab fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a class="facebook-follow" href="https://ng.linkedin.com/company/yonevas-digital-college"
                                            title="Facebook"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="facebook-follow" href="https://twitter.com/yoneversity?t=plKZJ0vjHwGQPREFik6AVA&s=09"
                                            title="Facebook"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="facebook-follow" href="https://instagram.com/yonevascollege?igshid=NTc4MTIwNjQ2YQ=="
                                            title="Facebook"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="facebook-follow" href="https://www.youtube.com/@yonevas4604"
                                            title="Facebook"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="new-footer-block">
                        <div class="new-support-block">
                            <h3>Support Us</h3>
                            <div class="new-support-content">
                                <p>Your gift to Yonevas Open University benefits instructional and outreach activities.
                                </p>
                                <a class="new-donate-link" href="{{ route('donate') }}">Make a Gift</a>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="footer-global bg--cardinal-red text--white">
                    <div class="container">
                        <div class="footer-global__inner">
                            <div id="block-copyright"
                                class="block block-block-content block-block-contente1fe857b-e8b5-4803-82f7-b71f368652e9"
                                style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
                                <div class="footer-global__logo">
                                </div>
                                <div class="footer-global__navs">
                                    <ul class="footer-global__links">
                                        <li>
                                            <a href="">Yonevas Home</a>
                                        </li>
                                        <li>
                                            <a href="">Maps &amp; Directions</a>
                                        </li>
                                        <li>
                                            <a href="">Search Yonevas</a>
                                        </li>
                                        <li>
                                            <a href="">Emergency Info</a>
                                        </li>
                                    </ul>
                                    <ul class="footer-global__policy-links">
                                        <li>
                                            <a href="{{ route('terms') }}">Terms of Use</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('privacy') }}">Privacy</a>
                                        </li>
                                        <li>
                                            <a href="">Copyright</a>
                                        </li>
                                        <li>
                                            <a href="">Trademarks</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('disclosure') }}">Disclosure Statement</a>
                                        </li>
                                        <li>
                                            <a href="">Accessibility</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-global__copyrightd">
                                    <div
                                        class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                        <p>© Yonevas Open University.</p>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
        </div>
        </section>
        </footer>
    </div>

    </div>

    <script src="assets/js/app.js"></script>
    <script type="application/json" data-drupal-selector="drupal-settings-json">
        {
            "path": {
                "baseUrl": "\/"
                , "scriptPath": null
                , "pathPrefix": ""
                , "currentPath": "node\/629"
                , "currentPathIsAdmin": false
                , "isFront": true
                , "currentLanguage": "en"
            }
            , "pluralDelimiter": "\u0003"
            , "suppressDeprecationErrors": true
            , "ajaxPageState": {
                "libraries": "classy\/base,classy\/messages,classy\/node,core\/normalize,core\/picturefill,domain_base_color\/main_ohs,extlink\/drupal.extlink,paragraphs\/drupal.paragraphs.unpublished,spcs\/feature-banner-carousel,spcs\/global-js,spcs\/global-styling,system\/base,video_embed_field\/responsive-video"
                , "theme": "spcs"
                , "theme_token": null
            }
            , "ajaxTrustedUrl": {
                "form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM": true
            }
            , "data": {
                "extlink": {
                    "extTarget": true
                    , "extTargetNoOverride": false
                    , "extNofollow": false
                    , "extNoreferrer": false
                    , "extFollowNoOverride": false
                    , "extClass": "0"
                    , "extLabel": "(link is external)"
                    , "extImgClass": false
                    , "extSubdomains": false
                    , "extExclude": ""
                    , "extInclude": ""
                    , "extCssExclude": ""
                    , "extCssExplicit": ""
                    , "extAlert": false
                    , "extAlertText": "This link will take you to an external web site. We are not responsible for their content."
                    , "mailtoClass": "0"
                    , "mailtoLabel": "(link sends email)"
                    , "extUseFontAwesome": false
                    , "extIconPlacement": "append"
                    , "extFaLinkClasses": "fa fa-external-link"
                    , "extFaMailtoClasses": "fa fa-envelope-o"
                    , "whitelistedDomains": null
                }
            }
            , "user": {
                "uid": 0
                , "permissionsHash": "50089a5f011b5b9a54fa8c2bf7a41281b226ce0f84fceddfbe7a1f473fbf38a7"
            }
        }

    </script>
    <script src="assets/js/js_iPxEG5lcgpgUc64NbihYYKxdRXqPwZ2H2Eh-fxB8WG8.js"></script>

    <script type="text/javascript">
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "licenseKey": "f639074655",
            "applicationID": "117349135",
            "transactionName": "ZQAENhRUV0EEB00PV1xKJwESXFZcShRYAV1tBgcBDlA=",
            "queueTime": 0,
            "applicationTime": 27,
            "atts": "SUcHQFxORE8=",
            "errorBeacon": "bam.nr-data.net",
            "agent": ""
        }
    </script>
    @yield('js')
</body>

</html>
