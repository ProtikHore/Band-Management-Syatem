"document" in self && ("classList" in document.createElement("_") ? function() {
    "use strict";
    var t = document.createElement("_");
    if (t.classList.add("c1", "c2"), !t.classList.contains("c2")) {
        var e = function(t) {
            var e = DOMTokenList.prototype[t];
            DOMTokenList.prototype[t] = function(t) {
                var i, o = arguments.length;
                for (i = 0; i < o; i++) t = arguments[i], e.call(this, t)
            }
        };
        e("add"), e("remove")
    }
    if (t.classList.toggle("c3", !1), t.classList.contains("c3")) {
        var i = DOMTokenList.prototype.toggle;
        DOMTokenList.prototype.toggle = function(t, e) {
            return 1 in arguments && !this.contains(t) == !e ? e : i.call(this, t)
        }
    }
    t = null
}() : function(t) {
    "use strict";
    if ("Element" in t) {
        var e = t.Element.prototype,
            i = Object,
            o = String.prototype.trim || function() {
                return this.replace(/^\s+|\s+$/g, "")
            },
            s = Array.prototype.indexOf || function(t) {
                for (var e = 0, i = this.length; e < i; e++)
                    if (e in this && this[e] === t) return e;
                return -1
            },
            n = function(t, e) {
                this.name = t, this.code = DOMException[t], this.message = e
            },
            r = function(t, e) {
                if ("" === e) throw new n("SYNTAX_ERR", "An invalid or illegal string was specified");
                if (/\s/.test(e)) throw new n("INVALID_CHARACTER_ERR", "String contains an invalid character");
                return s.call(t, e)
            },
            a = function(t) {
                for (var e = o.call(t.getAttribute("class") || ""), i = e ? e.split(/\s+/) : [], s = 0, n = i.length; s < n; s++) this.push(i[s]);
                this._updateClassName = function() {
                    t.setAttribute("class", this.toString())
                }
            },
            c = a.prototype = [],
            l = function() {
                return new a(this)
            };
        if (n.prototype = Error.prototype, c.item = function(t) {
                return this[t] || null
            }, c.contains = function(t) {
                return t += "", -1 !== r(this, t)
            }, c.add = function() {
                var t, e = arguments,
                    i = 0,
                    o = e.length,
                    s = !1;
                do {
                    t = e[i] + "", -1 === r(this, t) && (this.push(t), s = !0)
                } while (++i < o);
                s && this._updateClassName()
            }, c.remove = function() {
                var t, e, i = arguments,
                    o = 0,
                    s = i.length,
                    n = !1;
                do {
                    for (t = i[o] + "", e = r(this, t); - 1 !== e;) this.splice(e, 1), n = !0, e = r(this, t)
                } while (++o < s);
                n && this._updateClassName()
            }, c.toggle = function(t, e) {
                t += "";
                var i = this.contains(t),
                    o = i ? !0 !== e && "remove" : !1 !== e && "add";
                return o && this[o](t), !0 === e || !1 === e ? e : !i
            }, c.toString = function() {
                return this.join(" ")
            }, i.defineProperty) {
            var u = {
                get: l,
                enumerable: !0,
                configurable: !0
            };
            try {
                i.defineProperty(e, "classList", u)
            } catch (t) {
                -2146823252 === t.number && (u.enumerable = !1, i.defineProperty(e, "classList", u))
            }
        } else i.prototype.__defineGetter__ && e.__defineGetter__("classList", l)
    }
}(self)),
    function() {
        function t(t, e, i) {
            if (t)
                if (t.classList) t.classList[i ? "add" : "remove"](e);
                else {
                    var o = (" " + t.className + " ").replace(/\s+/g, " ").replace(" " + e + " ", "");
                    t.className = o + (i ? " " + e : "")
                }
        }

        function e(e, i) {
            if (e in n && (i || e !== r) && (r.length || e !== n.video)) {
                switch (e) {
                    case n.video:
                        o.source({
                            type: "video",
                            title: "View From A Blue Moon",
                            sources: [{
                                src: "https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4",
                                type: "video/mp4"
                            }, {
                                src: "https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm",
                                type: "video/webm"
                            }],
                            poster: "https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg",
                            tracks: [{
                                kind: "captions",
                                label: "English",
                                srclang: "en",
                                src: "https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt",
                                default: !0
                            }]
                        });
                        break;
                    case n.audio:
                        o.source({
                            type: "audio",
                            title: "Kishi Bashi &ndash; &ldquo;It All Began With A Burst&rdquo;",
                            sources: [{
                                src: "https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3",
                                type: "audio/mp3"
                            }, {
                                src: "https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.ogg",
                                type: "audio/ogg"
                            }]
                        });
                        break;
                    case n.youtube:
                        o.source({
                            type: "video",
                            title: "View From A Blue Moon",
                            sources: [{
                                src: "bTqVqk7FSmY",
                                type: "youtube"
                            }]
                        });
                        break;
                    case n.vimeo:
                        o.source({
                            type: "video",
                            title: "View From A Blue Moon",
                            sources: [{
                                src: "147865858",
                                type: "vimeo"
                            }]
                        })
                }
                r = e;
                for (var a = s.length - 1; a >= 0; a--) t(s[a].parentElement, "active", !1);
                t(document.querySelector('[data-source="' + e + '"]').parentElement, "active", !0)
            }
        }
        var i = plyr.setup({
            debug: !0,
            title: "Video demo",
            iconUrl: "/css/plyr.svg",
            tooltips: {
                controls: !0
            },
            captions: {
                defaultActive: !0
            }
        });
        plyr.loadSprite("/js/demo.svg");
        for (var o = i[0], s = document.querySelectorAll("[data-source]"), n = {
            video: "video",
            audio: "audio",
            youtube: "youtube",
            vimeo: "vimeo"
        }, r = window.location.hash.replace("#", ""), a = window.history && window.history.pushState, c = s.length - 1; c >= 0; c--) s[c].addEventListener("click", function() {
            var t = this.getAttribute("data-source");
            e(t), a && history.pushState({
                type: t
            }, "", "#" + t)
        });
        if (window.addEventListener("popstate", function(t) {
                t.state && "type" in t.state && e(t.state.type)
            }), a) {
            var l = !r.length;
            l && (r = n.video), r in n && history.replaceState({
                type: r
            }, "", l ? "" : "#" + r), r !== n.video && e(r, !0)
        }
    }(), document.domain.indexOf("plyr.io") > -1 && (! function(t, e, i, o, s, n, r) {
    t.GoogleAnalyticsObject = s, t.ga = t.ga || function() {
        (t.ga.q = t.ga.q || []).push(arguments)
    }, t.ga.l = 1 * new Date, n = e.createElement(i), r = e.getElementsByTagName(i)[0], n.async = 1, n.src = "//www.google-analytics.com/analytics.js", r.parentNode.insertBefore(n, r)
}(window, document, "script", 0, "ga"), ga("create", "UA-40881672-11", "auto"), ga("send", "pageview"));