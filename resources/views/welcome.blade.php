<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dimas Jati Satria — Developer Portfolio & API Portal</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>

        .fade {
            animation: fadeIn 0.9s ease forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }

            from {
                opacity: 0;
                transform: translateY(20px);
            }
        }
    </style>
</head>

<body class="bg-gradient-to-b from-gray-900 to-gray-800 min-h-screen text-gray-200 relative overflow-x-hidden">

    <div id="cursor-glow"></div>

    <script>
        const glow = document.getElementById("cursor-glow");
        document.addEventListener("mousemove", (e) => {
            glow.style.top = e.clientY + "px";
            glow.style.left = e.clientX + "px";
        });
    </script>

    <!-- NAVBAR -->
    <nav class="px-10 py-5 flex justify-between items-center backdrop-blur-md bg-gray-900/40 border-b border-gray-700 fade">
        <h1 class="text-2xl font-bold tracking-wide">
            <span class="text-teal-400">Dimas</span> Jati Satria
        </h1>

        <a href="/docs"
            class="px-5 py-2 rounded-lg bg-teal-500 text-white text-sm font-semibold hover:bg-teal-400 transition-all duration-200 shadow-md hover:shadow-teal-400/40">
            API Documentation
        </a>
    </nav>

    <!-- HERO -->
    <section class="max-w-4xl mx-auto text-center py-20 px-4 fade">
        <h2 class="text-5xl font-extrabold mb-6 leading-tight">
            Developer, Innovator, and  
            <span class="text-teal-400">Creative Engineer</span>
        </h2>

        <p class="text-gray-300 text-lg max-w-2xl mx-auto">
            Applied Software Engineering student at Universitas Gadjah Mada  
            with interests in backend development, renewable energy,  
            and building impactful digital solutions. 
        </p>

        <div class="mt-10 flex flex-wrap justify-center gap-6">
            <a href="/DImasJatiSatria-resume.pdf"
                class="px-6 py-3 rounded-xl bg-gray-700 hover:bg-gray-600 transition shadow-lg hover:shadow-gray-500/30">
                📄 Download Resume
            </a>

            <a href="/Situs Web Portofolio Fotografi Abu-abu Hitam Eksperimental Terang.pdf"
                class="px-6 py-3 rounded-xl bg-gray-700 hover:bg-gray-600 transition shadow-lg hover:shadow-gray-500/30">
                📁 View Portfolio
            </a>
        </div>
    </section>

    <!-- PROFILE SECTION -->
    <section class="max-w-5xl mx-auto py-14 px-6 fade">
        <h3 class="text-3xl font-bold mb-6">About Me</h3>

        <p class="text-gray-300 leading-relaxed">
            Saya adalah pribadi yang haus akan ilmu pengetahuan dan selalu ingin meningkatkan kemampuan diri.  
            Ketertarikan saya terhadap backend development, Web3, serta renewable energy mendorong saya  
            untuk mengembangkan berbagai project mulai dari marketplace, website bisnis, hingga aplikasi mobile.  
        </p>
    </section>

    <!-- PROJECTS -->
    <section class="max-w-6xl mx-auto py-14 px-6 fade">
        <h3 class="text-3xl font-bold mb-10 text-center">Highlighted Projects</h3>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card -->
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-teal-400/20 transition border border-gray-700">
                <h4 class="text-xl font-semibold mb-2 text-teal-400">Inofa – Developer Marketplace</h4>
                <p class="text-gray-300 text-sm">Marketplace untuk menghubungkan developer dan konsumen dengan fitur live chat, escrow, dan searching.  
                    Dibangun dengan Laravel.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-teal-400/20 transition border border-gray-700">
                <h4 class="text-xl font-semibold mb-2 text-teal-400">Bloomarie</h4>
                <p class="text-gray-300 text-sm">Website penjualan buket bunga dengan HTML, CSS, JS.  
                    Fitur searching dan sistem admin bawaan.
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-teal-400/20 transition border border-gray-700">
                <h4 class="text-xl font-semibold mb-2 text-teal-400">Pulsa App (Design)</h4>
                <p class="text-gray-300 text-sm">UI/UX modern aplikasi penjualan pulsa berbasis Kotlin + Compose (in design stage).  
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-teal-400/20 transition border border-gray-700">
                <h4 class="text-xl font-semibold mb-2 text-teal-400">Books App</h4>
                <p class="text-gray-300 text-sm">Aplikasi membaca buku dengan Kotlin + Room + Jetpack Compose. :contentReference[oaicite:9]{index=9}</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-teal-400/20 transition border border-gray-700">
                <h4 class="text-xl font-semibold mb-2 text-teal-400">Java Presensi App</h4>
                <p class="text-gray-300 text-sm">Sistem presensi berbasis Java dengan login dosen/mahasiswa dan penyimpanan file.  
                </p>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="max-w-4xl mx-auto py-16 text-center fade">
        <h3 class="text-3xl font-bold mb-4">Let's Connect</h3>
        <p class="text-gray-300">Feel free to reach me anytime for collaboration or discussion.</p>

        <div class="mt-6 text-gray-300 space-y-2">
            <p>Email: jati.satria000@gmail.com | dimasjatisatria@mail.ugm.ac.id </p>
            <p>Phone: 081268959527</p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/dimasjatisatria/" class="text-teal-400 hover:underline">Dimas Jati Satria</a> </p>
        </div>
    </section>

</body>
</html>
