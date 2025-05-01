(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 45) {
    //         $('.navbar').addClass('sticky-top shadow-sm');
    //     } else {
    //         $('.navbar').removeClass('sticky-top shadow-sm');
    //     }
    // });

    window.addEventListener("scroll", function () {
        const navbar = document.getElementById("mainNavbar");

        if (window.scrollY > 45) {
            navbar.style.background = "#0F172B"; // var(--dark)
            navbar.classList.add("shadow-sm", "sticky-top");
        } else {
            navbar.style.background = "transparent";
            navbar.classList.remove("shadow-sm", "sticky-top");
        }
    });

    

    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    

})(jQuery);


// ChatBot Function Start
const GEMINI_API_KEY = "AIzaSyBx_YCEFmABMwgX_0JR3zN33UTBwbwwTN8";
const GEMINI_ENDPOINT = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${GEMINI_API_KEY}`;

// DOM toggle for chat window
function toggleChat() {
    const chat = document.getElementById('chat-window');
    chat.style.display = chat.style.display === 'none' ? 'block' : 'none';
}

// Send message to Gemini API and display response
async function sendMessage() {
    const input = document.getElementById('user-input');
    const msg = input.value.trim();
    if (!msg) return;

    const chatBody = document.getElementById('chat-body');

    // User message
    chatBody.innerHTML += `
        <div style="text-align: right; margin-bottom: 10px;">
            <span style="background: #F1F8FF; padding: 8px 12px; border-radius: 20px; display: inline-block;">${msg}</span>
        </div>`;

    input.value = '';
    chatBody.scrollTop = chatBody.scrollHeight;

    const GEMINI_API_KEY = "AIzaSyBx_YCEFmABMwgX_0JR3zN33UTBwbwwTN8";
    const GEMINI_ENDPOINT = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${GEMINI_API_KEY}`;
    const specificPrompt = `You are a food chatbot in my website. Use your intelligence and answer. You should only answer the question related to food and hotels/resturants in Coimbatore. Return in plain text wihtout formatting. {DONT RETURN THE PROMPT}.THE USER MESSAGE IS:"${msg}"`;
    // Send to Gemini API for processing
    try {
        const response = await fetch(GEMINI_ENDPOINT, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                contents: [{ parts: [{ text: specificPrompt }] }]
            })
        });

        const data = await response.json();
        const reply = data.candidates?.[0]?.content?.parts?.[0]?.text || "Sorry, I couldn't get that.";

        chatBody.innerHTML += `
            <div style="text-align: left; margin-bottom: 10px;">
                <span style="background: #FEA116; color: white; padding: 8px 12px; border-radius: 20px; display: inline-block;">${reply}</span>
            </div>`;
        chatBody.scrollTop = chatBody.scrollHeight;
    } catch (err) {
        console.error("Error:", err);
        chatBody.innerHTML += `<div><strong>Cravory Assistant:</strong> Something went wrong. Please try again later.</div>`;
    }
}

// ChatBot Function End