<div id="cookieBanner" class="cookie-banner" style="display: none;">
    <div class="container py-3">
        <div class="cookie-content">
            <div class="cookie-text mb-3 mb-md-0">
                <p class="mb-2 mb-md-0">
                    Wir verwenden Cookies und ähnliche Technologien, um Ihnen ein besseres Nutzungserlebnis bieten zu können. 
                    Mit Ihrer Zustimmung erlauben Sie uns die Verwendung von Cookies gemäß unserer <a href="/impressum" class="text-primary">Datenschutzerklärung</a>.
                </p>
            </div>
            <div class="cookie-buttons">
                <button onclick="acceptCookies()" class="btn btn-primary w-100 mb-2 mb-md-0">Akzeptieren</button>
                <button onclick="declineCookies()" class="btn btn-outline-secondary w-100 w-md-auto">Ablehnen</button>
            </div>
        </div>
    </div>
</div>

<script>
function showCookieBanner() {
    if (!localStorage.getItem('cookieConsent')) {
        document.getElementById('cookieBanner').style.display = 'block';
        // Add padding to body to prevent banner from covering content
        document.body.style.paddingBottom = document.getElementById('cookieBanner').offsetHeight + 'px';
    }
}

function hideCookieBanner() {
    document.getElementById('cookieBanner').style.display = 'none';
    document.body.style.paddingBottom = '0';
}

function acceptCookies() {
    localStorage.setItem('cookieConsent', 'accepted');
    hideCookieBanner();
}

function declineCookies() {
    localStorage.setItem('cookieConsent', 'declined');
    hideCookieBanner();
}

// Show banner on load
window.onload = showCookieBanner;

// Update padding when window is resized
window.addEventListener('resize', function() {
    if (!localStorage.getItem('cookieConsent')) {
        document.body.style.paddingBottom = document.getElementById('cookieBanner').offsetHeight + 'px';
    }
});
</script>