document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".burger");
    const navLinks = document.querySelector(".nav-links");

    burger.addEventListener("click", function () {
        navLinks.classList.toggle("active");
        burger.classList.toggle("active");
    });

    // Initialize Google Translate
    googleTranslateElementInit();

    // Toggle dropdown
    function toggleLanguageSelector() {
        var dropdown = document.getElementById("language-dropdown");
        dropdown.classList.toggle("show");
    }

    // Change language dynamically
    function changeLanguage(lang) {
        var selectField = document.querySelector(".goog-te-combo");
        if (selectField) {
            selectField.value = lang;
            selectField.dispatchEvent(new Event("change"));
        }
    }

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        var dropdown = document.getElementById("language-dropdown");
        var button = document.querySelector(".language-button");

        if (!dropdown.contains(event.target) && !button.contains(event.target)) {
            dropdown.classList.remove("show");
        }
    });
});

// Initialize Google Translate
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,mk',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}
