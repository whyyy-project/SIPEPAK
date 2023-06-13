const texts = [
    "platform inovatif yang dirancang khusus untuk memudahkan dan mempercepat proses pengajuan proposal bagi mahasiswa Unugiri. Dengan SIPEPAK, mahasiswa dapat dengan mudah mengajukan proposal kegiatan mereka tanpa hambatan.",
    "memberikan kemudahan bagi mahasiswa Unugiri untuk mengakses platform yang intuitif dan efisien. Dalam platform ini, mahasiswa dapat mengisi formulir pengajuan proposal dengan langkah-langkah yang jelas dan sistematis. SIPEPAK juga memberikan ruang bagi mahasiswa untuk melampirkan dokumen pendukung, memasukkan detail anggaran, serta menjelaskan tujuan dan manfaat dari kegiatan yang diajukan.",
    "mendukung mahasiswa agar tidak perlu lagi khawatir tentang proses pengajuan proposal yang rumit dan memakan waktu. Platform ini memberikan kemudahan dalam mengajukan proposal, mempercepat peninjauan dan persetujuan oleh pihak terkait, serta meningkatkan transparansi dalam manajemen anggaran kegiatan.",
    "juga memberikan perlindungan terhadap keamanan data pengguna. Dengan mengatur atribut-atribut cookie, seperti SameSite=None dan Secure, SIPEPAK memastikan bahwa data pengguna aman dari ancaman kebocoran informasi atau serangan cross-site request forgery.",
    "mari manfaatkan SIPEPAK sebagai alat yang membantu kita mengajukan proposal dengan mudah dan memastikan bahwa setiap kegiatan mahasiswa di Unugiri mendapatkan perhatian yang layak. Bersama SIPEPAK, kita dapat mewujudkan ide-ide kreatif dan memberikan dampak positif bagi komunitas kita."
];

let i = 0;
let textIndex = 0;
const typingText = document.getElementById('typing-text');

function typeWriter() {
    const text = texts[textIndex];

    if (i < text.length) {
        typingText.textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, 30); // Waktu pengetikan per karakter (ms)
    } else {
        // Menghapus teks sebelumnya sebelum melanjutkan ke teks berikutnya
        setTimeout(eraseText, 1200);
    }
}

function eraseText() {
    if (i > 0) {
        typingText.textContent = typingText.textContent.slice(0, -1);
        i--;
        setTimeout(eraseText, 20); // Waktu penghapusan per karakter (ms)
    } else {
        textIndex++;
        if (textIndex === texts.length) {
            textIndex = 0;
        }
        setTimeout(typeWriter, 500);
    }
}

typeWriter();

var topButton = document.getElementById("topButton");

window.addEventListener("scroll", function() {
    if (window.pageYOffset > 0) {
        topButton.style.display = "block";
    } else {
        topButton.style.display = "none";
    }
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        420: {
            items: 2
        },
        1000: {
            items: 5
        }
    }

});

var nav = $("#navbarSupportedContent");
var btn = $(".custom_menu-btn");
btn.click
btn.click(function(e) {

    e.preventDefault();
    nav.toggleClass("lg_nav-toggle");
    document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
});

$('.carousel').on('slid.bs.carousel', function() {
    $(".indicator-2 li").removeClass("active");
    indicators = $(".carousel-indicators li.active").data("slide-to");
    a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
})

var scroll = new SmoothScroll('a[data-scroll]', {
    speed: 1000, // Kecepatan scroll (dalam milidetik)
    easing: 'easeInOutCubic', // Gaya transisi scroll
    offset: 100 // Jarak offset dari elemen target (dalam piksel)
});