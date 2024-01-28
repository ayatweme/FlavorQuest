<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <!-- resources/views/components/preloader.blade.php -->

<div class="preloader-container">
    <div class="loading-text">
        <span class="letter" style="color: #ff0000;">L</span>
        <span class="letter" style="color: #00ff00;">o</span>
        <span class="letter" style="color: #0000ff;">a</span>
        <span class="letter" style="color: #ffff00;">d</span>
        <span class="letter" style="color: #ff00ff;">i</span>
        <span class="letter" style="color: #00ffff;">n</span>
        <span class="letter" style="color: #ffffff;">g</span>
    </div>
</div>

<style>
    .preloader-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fff; /* Set your background color */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .loading-text {
        font-size: 24px; /* Set your font size */
        font-weight: bold;
        text-align: center;
    }

    .letter {
        animation: colorChange 2s infinite alternate;
    }

    @keyframes colorChange {
        0% {
            color: #000;
        }
        100% {
            color: #ff5618;
        }
    }
</style>

</div>