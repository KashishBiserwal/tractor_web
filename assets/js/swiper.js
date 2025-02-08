var Swiper = function () {
    "use strict";

    const s = {
        body: {},
        addEventListener() {},
        removeEventListener() {},
        activeElement: {
            blur() {},
            nodeName: ""
        },
        querySelector: () => null,
        querySelectorAll: () => [],
        getElementById: () => null,
        createEvent: () => ({}),
        createElement: () => ({}),
        createElementNS: () => ({}),
        importNode: () => null,
        location: {
            hash: "",
            host: "",
            hostname: "",
            href: "",
            origin: "",
            pathname: "",
            protocol: "",
            search: ""
        }
    };

    const i = {
        document: s,
        navigator: {
            userAgent: ""
        },
        location: {
            hash: "",
            host: "",
            hostname: "",
            href: "",
            origin: "",
            pathname: "",
            protocol: "",
            search: ""
        },
        history: {
            replaceState() {},
            pushState() {},
            go() {}
        },
        CustomEvent: function () {},
        addEventListener() {},
        removeEventListener() {},
        getComputedStyle: () => ({}),
        Image() {},
        Date() {},
        screen: {},
        setTimeout() {},
        clearTimeout() {},
        matchMedia: () => ({}),
        requestAnimationFrame: e => "undefined" == typeof setTimeout ? (e(), null) : setTimeout(e, 0),
    };

    const z = (e, t) => {};
    const A = (e, t) => {};
    const $ = e => {};

    var I = {
        updateSize: function () {},
        updateSlides: function () {},
        updateAutoHeight: function (e) {},
        updateSlidesOffset: function () {},
        updateSlidesProgress: function (e) {},
        updateProgress: function (e) {},
        updateSlidesClasses: function () {},
        updateActiveIndex: function (e) {},
        updateClickedSlide: function (e) {},
    };

    var k = {
        getTranslate: function (e) {},
        minTranslate: function () {},
        maxTranslate: function () {},
        translateTo: function (e, t, s, a, i) {},
    };

    var D = {
        slideTo: function (e, t, s, a, i) {},
        slideToLoop: function (e, t, s, a) {},
        slideNext: function (e, t, s) {},
        slidePrev: function (e, t, s) {},
        slideReset: function (e, t, s) {},
        slideToClosest: function (e, t, s, a) {},
        slideToClickedSlide: function () {},
    };

    var G = {
        loopCreate: function (e) {},
        loopFix: function (e) {},
        loopDestroy: function () {},
    };

    let F = !1;

    const V = (e, t) => {};

    const j = (e, t) => e.grid && t.grid && t.grid.rows > 1;

    var W = {
        init: !0,
        direction: "horizontal",
        oneWayMovement: !1,
        touchEventsTarget: "wrapper",
        initialSlide: 0,
        speed: 300,
        cssMode: !1,
        updateOnWindowResize: !0,
        resizeObserver: !0,
        nested: !1,
        createElements: !1,
        enabled: !0,
        focusableElements: "input, select, option, textarea, button, video, label",
        width: null,
        height: null,
        preventInteractionOnTransition: !1,
        userAgent: null,
        url: null,
        edgeSwipeDetection: !1,
        edgeSwipeThreshold: 20,
        autoHeight: !1,
        setWrapperSize: !1,
        virtualTranslate: !1,
        effect: "slide",
        breakpoints: void 0,
        breakpointsBase: "window",
        spaceBetween: 0,
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerGroupSkip: 0,
        slidesPerGroupAuto: !1,
        centeredSlides: !1,
        centeredSlidesBounds: !1,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
        normalizeSlideIndex: !0,
        centerInsufficientSlides: !1,
        watchOverflow: !0,
        roundLengths: !1,
        touchRatio: 1,
        touchAngle: 45,
        simulateTouch: !0,
        shortSwipes: !0,
        longSwipes: !0,
        longSwipesRatio: .5,
        longSwipesMs: 300,
        followFinger: !0,
        allowTouchMove: !0,
        threshold: 5,
        touchMoveStopPropagation: !1,
        touchStartPreventDefault: !0,
        touchStartForcePreventDefault: !1,
        touchReleaseOnEdges: !1,
        uniqueNavElements: !0,
        resistance: !0,
        resistanceRatio: .85,
        watchSlidesProgress: !1,
        grabCursor: !1,
        preventClicks: !0,
        preventClicksPropagation: !0,
        slideToClickedSlide: !1,
        loop: !1,
        loopedSlides: null,
        loopPreventsSliding: !0,
        rewind: !1,
        allowSlidePrev: !0,
        allowSlideNext: !0,
        swipeHandler: null,
        noSwiping: !0,
        noSwipingClass: "swiper-no-swiping",
        noSwipingSelector: null,
        passiveListeners: !0,
        maxBackfaceHiddenSlides: 10,
        containerModifierClass: "swiper-",
        slideClass: "swiper-slide",
        slideActiveClass: "swiper-slide-active",
        slideVisibleClass: "swiper-slide-visible",
        slideNextClass: "swiper-slide-next",
        slidePrevClass: "swiper-slide-prev",
        wrapperClass: "swiper-wrapper",
        lazyPreloaderClass: "swiper-lazy-preloader",
        lazyPreloadPrevNext: 0,
        runCallbacksOnInit: !0,
        _emitClasses: !1
    };

    const K = {
        eventsEmitter: L,
        update: I,
        translate: k,
        transition: {
            setTransition: function (e, t) {},
            transitionStart: function (e, t) {},
            transitionEnd: function (e, t) {},
        },
        slide: D,
        loop: G,
        grabCursor: {
            setGrabCursor: function (e) {},
            unsetGrabCursor: function () {},
        },
        events: {
            attachEvents: function () {},
            detachEvents: function () {},
        },
        breakpoints: {
            setBreakpoint: function () {},
            getBreakpoint: function (e, t, s) {},
        },
        checkOverflow: {
            checkOverflow: function () {},
        },
        classes: {
            addClasses: function () {},
            removeClasses: function () {},
        }
    };

    let Z = {};

    class Q {
        static extendDefaults(e) {}

        static get extendedDefaults() {}

        static get defaults() {}

        static installModule(e) {
            Q.prototype.__modules_ || (Q.prototype.__modules_ = []);
            const t = Q.prototype.__modules_;
            if (typeof e === "function" && t.indexOf(e) < 0) {
                t.push(e);
            }
        }

        static use(e) {
            return Array.isArray(e) ? (e.forEach((e) => Q.installModule(e)), Q) : (Q.installModule(e), Q);
        }
    }

    Object.keys(K).forEach((e) => {
        Object.keys(K[e]).forEach((t) => {
            Q.prototype[t] = K[e][t];
        });
    });

    Q.use([
        function (e) {},
        function (e) {},
        function (e) {},
        function (e) {},
        function (e) {},
        function (e) {},
        function (e) {},
        function (e) {},
        function (e) {},
    ]);

    return Q.use(ce), Q;
};
