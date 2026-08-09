<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernikahan <?= htmlspecialchars($inv['bride_name']) ?> & <?= htmlspecialchars($inv['groom_name']) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bp-primary: <?= $theme_custom['primary_color'] ?? '#ec4899' ?>;
            --bp-secondary: <?= $theme_custom['secondary_color'] ?? '#f472b6' ?>;
            --bp-bg: <?= $theme_custom['bg_color'] ?? '#fff5f7' ?>;
            --bp-text: <?= $theme_custom['text_color'] ?? '#1f2937' ?>;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <?php
    // ============================================================
    // SET $theme_has_builtin_features = true jika tema Anda sudah
    // menyertakan semua fitur (Voting, Survey, Galeri Tamu, FAQ, dll.)
    // agar sistem tidak menginjeksikannya secara otomatis.
    // $theme_has_builtin_features = true;
    // ============================================================
    ?>

    <!-- 1. MUSIK LATAR (Semua Paket) -->
    <?php if (!empty($settings['music_url'])): ?>
        <audio id="bgMusic" loop autoplay>
            <source src="<?= htmlspecialchars($settings['music_url']) ?>" type="audio/mpeg">
        </audio>
    <?php endif; ?>

    <div class="max-w-md mx-auto bg-white min-h-screen shadow-xl overflow-hidden">
        
        <!-- 2. HALAMAN SAMPUL (Semua Paket) -->
        <section class="h-screen flex flex-col justify-center items-center text-center p-8" style="background:var(--bp-bg)">
            <h1 class="text-4xl font-serif font-bold mb-4" style="color:var(--bp-primary)">
                <?= htmlspecialchars($inv['bride_name']) ?> & <?= htmlspecialchars($inv['groom_name']) ?>
            </h1>
            <p class="text-gray-600 mb-2">Kpd Yth.</p>
            <p class="text-xl font-bold mb-8"><?= $guest_name ?></p>
            <button onclick="document.getElementById('content').classList.remove('hidden')" class="text-white px-6 py-3 rounded-full" style="background:var(--bp-primary)">Buka Undangan</button>
        </section>

        <div id="content" class="hidden">

            <!-- 3. SAVE THE DATE (Semua Paket) -->
            <?php if (!empty($inv['save_the_date'])): ?>
            <section class="p-8 text-center bg-gradient-to-r from-pink-50 to-purple-50">
                <div class="text-sm uppercase tracking-widest font-bold mb-2" style="color:var(--bp-primary)">Save the Date</div>
                <p class="text-gray-600 italic"><?= htmlspecialchars($inv['std_message'] ?? 'Kami mengundang Anda untuk hadir di hari bahagia kami.') ?></p>
            </section>
            <?php endif; ?>
            
            <!-- 4. KISAH CINTA (Semua Paket) -->
            <?php if (!empty($settings['love_story'])): ?>
            <section class="p-8 text-center">
                <h2 class="text-2xl font-bold mb-4" style="color:var(--bp-primary)">Kisah Kami</h2>
                <div class="text-gray-600 leading-relaxed space-y-3">
                    <?= nl2br(htmlspecialchars($settings['love_story'])) ?>
                </div>
            </section>
            <?php endif; ?>

            <!-- 5. LOKASI & JADWAL ACARA (Semua Paket) -->
            <section class="p-8 text-center" style="background:var(--bp-bg)">
                <h2 class="text-2xl font-bold mb-4" style="color:var(--bp-primary)">Waktu & Tempat</h2>
                <div id="countdown" class="text-lg font-bold mb-4" style="color:var(--bp-secondary)"></div>
                <p class="font-bold text-lg"><?= date('l, d F Y', $event_time) ?></p>
                <p class="text-gray-600 mt-2"><?= nl2br(htmlspecialchars($inv['location'])) ?></p>
                <?php if (!empty($settings['maps_url'])): ?>
                <a href="<?= htmlspecialchars($settings['maps_url']) ?>" target="_blank" class="inline-block mt-4 px-6 py-2 rounded-full text-white" style="background:var(--bp-primary)">
                    <i class="fas fa-map-marker-alt mr-2"></i>Buka Google Maps
                </a>
                <?php endif; ?>
            </section>

            <!-- 6. GALERI FOTO (Premium+) -->
            <?php if ($is_premium && !empty($settings['gallery'])): ?>
            <section class="p-8">
                <h2 class="text-2xl font-bold text-center mb-4" style="color:var(--bp-primary)">Galeri Foto</h2>
                <div class="grid grid-cols-2 gap-2">
                    <?php foreach($settings['gallery'] as $img): ?>
                        <img src="../<?= htmlspecialchars($img) ?>" class="w-full h-32 object-cover rounded-lg" loading="lazy">
                    <?php endforeach; ?>
                </div>
            </section>
            <?php endif; ?>

            <!-- 7. VIDEO YOUTUBE (Semua Paket) -->
            <?php if (!empty($settings['youtube_url'])): ?>
            <section class="p-8 text-center">
                <h2 class="text-2xl font-bold mb-4" style="color:var(--bp-primary)">Video</h2>
                <div class="aspect-video rounded-xl overflow-hidden">
                    <iframe src="<?= htmlspecialchars($settings['youtube_url']) ?>" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
                </div>
            </section>
            <?php endif; ?>

            <!-- 8. AMPLOP DIGITAL (Semua Paket) -->
            <?php if (!empty($settings['bank_account'])): ?>
            <section class="p-8 text-center bg-gray-50">
                <h2 class="text-2xl font-bold mb-4" style="color:var(--bp-primary)">Kado Digital</h2>
                <div class="bg-white p-4 rounded-xl shadow border">
                    <p class="font-bold"><?= htmlspecialchars($settings['bank_name']) ?></p>
                    <p class="text-xl tracking-widest my-2"><?= htmlspecialchars($settings['bank_account']) ?></p>
                    <p class="text-gray-500 text-sm">a.n <?= htmlspecialchars($settings['bank_owner']) ?></p>
                </div>
            </section>
            <?php endif; ?>

            <!-- 9. FORM RSVP & BUKU TAMU (Semua Paket) -->
            <section class="p-8">
                <h2 class="text-2xl font-bold text-center mb-6" style="color:var(--bp-primary)">Kehadiran & Ucapan</h2>
                
                <form onsubmit="submitRsvp(event)" class="mb-8 p-4 bg-gray-50 rounded-xl">
                    <input type="hidden" name="action" value="submit_rsvp">
                    <input type="hidden" name="invitation_id" value="<?= $inv['id'] ?>">
                    <input type="text" name="name" required placeholder="Nama" class="w-full mb-3 p-2 border rounded">
                    <select name="attendance" class="w-full mb-3 p-2 border rounded">
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak Hadir">Tidak Hadir</option>
                    </select>
                    <select name="pax" class="w-full mb-3 p-2 border rounded">
                        <option value="1">1 Orang</option>
                        <option value="2">2 Orang</option>
                    </select>
                    <button type="submit" class="w-full text-white p-2 rounded" style="background:var(--bp-primary)">Kirim RSVP</button>
                </form>

                <form onsubmit="submitMessage(event)" class="p-4 border rounded-xl">
                    <input type="hidden" name="action" value="submit_message">
                    <input type="hidden" name="invitation_id" value="<?= $inv['id'] ?>">
                    <input type="text" name="name" required placeholder="Nama" class="w-full mb-3 p-2 border rounded">
                    <textarea name="message" required placeholder="Ucapan..." class="w-full mb-3 p-2 border rounded"></textarea>
                    <button type="submit" class="w-full bg-gray-800 text-white p-2 rounded">Kirim Ucapan</button>
                </form>
            </section>

            <!-- 10. TRANSPORT & AKOMODASI (Premium+) -->
            <?php if ($is_premium):
            $transport = $settings['transport_info'] ?? '';
            $akomodasi = $settings['akomodasi_info'] ?? '';
            if (!empty($transport) || !empty($akomodasi)): ?>
            <section class="p-8 text-center" style="background:var(--bp-bg)">
                <h2 class="text-2xl font-bold mb-4" style="color:var(--bp-primary)">Transport & Akomodasi</h2>
                <?php if (!empty($transport)): ?>
                <div class="mb-4">
                    <p class="font-bold text-sm text-gray-500 mb-1">Transportasi</p>
                    <p class="text-gray-700"><?= nl2br(htmlspecialchars($transport)) ?></p>
                </div>
                <?php endif; ?>
                <?php if (!empty($akomodasi)): ?>
                <div>
                    <p class="font-bold text-sm text-gray-500 mb-1">Hotel Terdekat</p>
                    <p class="text-gray-700"><?= nl2br(htmlspecialchars($akomodasi)) ?></p>
                </div>
                <?php endif; ?>
            </section>
            <?php endif; endif; ?>

            <!-- 11. HASHTAG PERNIKAHAN (Semua Paket) -->
            <?php if (!empty($inv['wedding_hashtag'])): ?>
            <section class="p-8 text-center">
                <p class="text-lg font-bold" style="color:var(--bp-primary)">#<?= htmlspecialchars($inv['wedding_hashtag']) ?></p>
            </section>
            <?php endif; ?>

            <!-- 12. TERIMA KASIH (Semua Paket) -->
            <section class="p-8 text-center" style="background:var(--bp-bg)">
                <h2 class="text-2xl font-bold mb-4" style="color:var(--bp-primary)">Terima Kasih</h2>
                <p class="text-gray-600 italic">
                    <?= nl2br(htmlspecialchars($settings['thank_you_message'] ?? 'Merupakan suatu kehormatan dan kebahagiaan apabila Bapak/Ibu/Saudara/i berkenan hadir memberikan doa restu. Terima kasih.')) ?>
                </p>
            </section>

        </div>
    </div>

    <script>
        // Countdown Timer ke hari-H
        const eventDate = new Date('<?= $inv['event_date'] ?>').getTime();
        function updateCountdown() {
            const now = new Date().getTime();
            const diff = eventDate - now;
            if (diff <= 0) { document.getElementById('countdown')?.remove(); return; }
            const days = Math.floor(diff / (1000*60*60*24));
            const hours = Math.floor((diff % (1000*60*60*24)) / (1000*60*60));
            const minutes = Math.floor((diff % (1000*60*60)) / (1000*60));
            const el = document.getElementById('countdown');
            if (el) el.innerHTML = '<span class="text-3xl font-black">' + days + '</span> Hari <span class="text-xl font-bold">' + hours + '</span> Jam <span class="text-xl font-bold">' + minutes + '</span> Menit';
        }
        setInterval(updateCountdown, 60000);
        updateCountdown();

        // Fungsi AJAX standar untuk form backend
        async function submitRsvp(e) {
            e.preventDefault();
            const res = await fetch('', { method: 'POST', body: new FormData(e.target) });
            const data = await res.json();
            alert(data.msg);
            if (data.status === 'success') location.reload();
        }
        
        async function submitMessage(e) {
            e.preventDefault();
            const res = await fetch('', { method: 'POST', body: new FormData(e.target) });
            const data = await res.json();
            alert(data.msg);
            if (data.status === 'success') location.reload();
        }
    </script>
</body>
</html>
