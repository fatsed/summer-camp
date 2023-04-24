<style>
    :root {
        --scrollcolor: #fd8203;
        --scrollbackground: #141e27;
    }
    .gal {
        font-size: 2.5rem;
        font-family: system-ui;
        line-height: 1.1;
        font-weight: 300;
        color: #100e0e;
        margin: 4rem auto 1rem;
        width: 85%;
        max-width: 1280px;
    }
    .slider {
        width: 85%;
        max-width: 1280px;
        margin: 0 auto;
    }
    .slider__content {
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
        display: flex;
        gap: 1rem;
        padding-bottom: 1rem;
        scrollbar-color: var(--scrollcolor) var(--scrollbackground);
    }
    .slider__content::-webkit-scrollbar {
        height: 0.5rem;
        width: 0.5rem;
        border-radius: 1rem;
        background: var(--scrollbackground);
    }
    .slider__content::-webkit-scrollbar-thumb {
        border-radius: 1rem;
        background: var(--scrollcolor);
    }
    .slider__content::-webkit-scrollbar-track {
        border-radius: 1rem;
        background: var(--scrollbackground);
    }
    .slider__item {
        scroll-snap-align: start;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        min-width: 100%;
        width: 100%;
        border-radius: 0.25rem;
        overflow: hidden;
        position: relative;
        aspect-ratio: 1;
    }
    @media (min-width: 460px) {
        .slider__item {
            aspect-ratio: 0.6666666667;
            min-width: calc((100% / 2) - 2rem);
        }
    }
    @media (min-width: 940px) {
        .slider__item {
            min-width: calc((100% / 3) - 4rem);
        }
    }
    .slider__image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }
    .slider__info {
        position: relative;
        padding: 4rem 2rem 2rem;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(32, 50, 57, 0));
    }
    .slider__info h2 {
        color: #757171;
        font-family: system-ui;
        line-height: 1.1;
        font-weight: 300;
        font-size: 1.75rem;
        margin: 0;
    }
    .slider__nav {
        margin: 1rem 0 4rem;
        width: 100%;
        padding: 0;
        display: flex;
        justify-content: flex-start;
        gap: 1rem;
        align-content: center;
        align-items: center;
        pointer-events: none;
    }
    @media (min-width: 460px) {
        .slider__nav {
            justify-content: flex-end;
        }
    }
    .slider__nav__button {
        margin: 0;
        appearance: none;
        border: 0;
        border-radius: 2rem;
        background: #100e0e;
        color: #203239;
        padding: 0.5rem 1rem;
        font-size: 0.75rem;
        line-height: 1;
        pointer-events: none;
        transition: 0.2s ease-out;
        opacity: 0.25;
    }
    .slider__nav__button--active {
        opacity: 1;
        pointer-events: auto;
        cursor: pointer;
    }

</style>
<h1 class="gal" id="gallery"> gallery</h1>
<div class="slider" x-data="{start: true, end: false}">
    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
       @foreach($galleries as $gallery)
        <div class="slider__item">
            <img class="slider__image" src="{{ $gallery->picture}}" alt="Image">
            <div class="slider__info">
                <h2>{{ $gallery->name}}</h2>
            </div>
        </div>
        @endforeach
</div>
</div>
