gsap.registerPlugin(ScrollTrigger);
var tl = gsap.timeline();

tl.from('.content', {
    y: '-30%',
    opacity: 0,
    duration: 2,
    ease: Power4.easeOut

})
tl.from('.stagger1', {
    y: -50,
    opacity: 0,
    stagger: .3,
    duration: 2,
    ease: Power4.easeOut

}, "-=1.5")
tl.from('.content-graphic', {
    y: 50,
    opacity: 0,
    duration: 1,
    ease: Power4.easeOut

}, "-=2")
tl.from('.editor-box', {
    y: '-50%',
    opacity: 0,
    duration: 1,
    ease: Power4.easeOut

}, "-=2.2")

gsap.from(".transition2", {
    scrollTrigger: {
        trigger: '.transition2',
        start: "top bottom"

    },
    y: 50,
    opacity: 0,
    duration: 1.2,
    stagger: .3
})

gsap.from(".bar-flex", {
    scrollTrigger: {
        trigger: '.bar-flex',
        start: "top bottom"

    },
    x: 70,
    opacity: 0,
    duration: 2,
    stagger: .3
})

gsap.from(".profile-image-container", {
    scrollTrigger: {
        trigger: '.profile-image-container',
        start: "top bottom"

    },
    x: -70,
    opacity: 0,
    duration: 2,
    stagger: .3
})

gsap.from(".project-card", {
    scrollTrigger: {
        trigger: '.project-card',
        start: "top bottom"

    },
    x: 70,
    opacity: 0,
    duration: 3,
    stagger: .3
})

gsap.from(".project-specs", {
    scrollTrigger: {
        trigger: '.project-specs',
        start: "top bottom"

    },
    x: -70,
    opacity: 0,
    duration: 3,
    stagger: .3
})