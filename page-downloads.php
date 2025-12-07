<?php /* Template Name: Downloads */ ?>
<?php get_header(); ?>
<main>
    <section id="download-hero" class="section hero">
      <div class="section-inner hero__inner hero__inner--downloads">
        <div class="hero__content">
          <h1 class="hero__title">Download Nobara 42</h1>
          <p class="hero__subtitle">
            Pick your edition, flash your USB, and boot into a gaming-ready desktop in minutes.
          </p>
          <div class="hero__actions">
            <a href="#standard" class="button button--primary">
              Standard images
            </a>
            <a href="#nvidia" class="button button--tonal">
              NVIDIA images
            </a>
          </div>
          <ul class="hero__bullets">
            <li>Five editions: Official, GNOME, KDE, Steam-HTPC, and Steam-Handheld.</li>
            <li>Optional images with pre-installed NVIDIA drivers.</li>
            <li>Clear guides for USB creation and install steps.</li>
          </ul>
        </div>
        <div class="hero__media">
          <div class="hero-card hero-card--downloads">
            <h2>Before you download</h2>
            <ul>
              <li>Recommended: <a href="https://www.ventoy.net/en/index.html" target="_blank" rel="noreferrer">Ventoy</a> for multi-ISO USBs.</li>
              <li>Alternatives: Fedora Media Writer, Rufus (DD mode, GPT).</li>
              <li>Disable Secure Boot and use UEFI to avoid boot issues.</li>
            </ul>
            <a href="https://wiki.nobaraproject.org/en/new-user-guide-general-guidelines" class="chip-link" target="_blank" rel="noreferrer">
              Read the install guide
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--surface">
      <div class="section-inner">
        <div class="section-header">
          <h2>See the desktop first</h2>
          <p>Preview each edition before you commit. Every screenshot shows the actual experience.</p>
        </div>
        <div class="edition-grid">
          <article class="card edition-card">
            <div class="edition-card__media">
              <img src="https://nobaraproject.org/wp-content/uploads/2025/01/N41Official.png" alt="Nobara Official desktop" loading="lazy" class="lightbox-trigger" />
            </div>
            <div class="edition-card__content">
              <h3>Official</h3>
              <p>The main Nobara experience. Custom KDE design, tuned for games, creative tools, and daily use.</p>
            </div>
          </article>

          <article class="card edition-card">
            <div class="edition-card__media">
              <img src="https://nobaraproject.org/wp-content/uploads/2025/01/N41GNOME-1024x639.png" alt="Nobara GNOME desktop" loading="lazy" class="lightbox-trigger" />
            </div>
            <div class="edition-card__content">
              <h3>GNOME</h3>
              <p>Clean GNOME layout with a focus on content. Ideal for laptops and distraction-free workflows.</p>
            </div>
          </article>

          <article class="card edition-card">
            <div class="edition-card__media">
              <img src="https://nobaraproject.org/wp-content/uploads/2025/01/N41KDE-1024x639.png" alt="Nobara KDE desktop" loading="lazy" class="lightbox-trigger" />
            </div>
            <div class="edition-card__content">
              <h3>KDE</h3>
              <p>Classic KDE experience with deep customization for power users.</p>
            </div>
          </article>

          <article class="card edition-card">
            <div class="edition-card__media">
              <img src="https://nobaraproject.org/wp-content/uploads/2024/07/n40steam-2.png" alt="Nobara Steam HTPC interface" loading="lazy" class="lightbox-trigger" />
            </div>
            <div class="edition-card__content">
              <h3>Steam-HTPC</h3>
              <p>Console-like interface for living-room setups with big-screen TVs.</p>
            </div>
          </article>

          <article class="card edition-card">
            <div class="edition-card__media">
              <img src="https://nobaraproject.org/wp-content/uploads/2025/01/N41SDHH-1024x639.png" alt="Nobara Steam handheld desktop" loading="lazy" class="lightbox-trigger" />
            </div>
            <div class="edition-card__content">
              <h3>Steam-Handheld</h3>
              <p>Optimized for Steam Deck-style handheld devices and small displays.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="standard" class="section">
      <div class="section-inner">
        <div class="section-header">
          <h2>Standard downloads</h2>
          <p>Recommended ISOs for most AMD and Intel systems, or for users who prefer to handle NVIDIA manually.</p>
        </div>
        <div class="download-table">
          <article class="card download-row">
            <div class="download-row__info">
              <h3>Official</h3>
              <p class="download-row__meta">Nobara-42-Official-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-Official-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-Official-2025-09-25.iso"
                data-sha="365de82aa4f384a4c637e2e67f75fee14aad8014bf5bd6ce87ba630af0df45a4">
                Download
              </button>
            </div>
          </article>

          <article class="card download-row">
            <div class="download-row__info">
              <h3>GNOME</h3>
              <p class="download-row__meta">Nobara-42-GNOME-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-GNOME-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-GNOME-2025-09-25.iso"
                data-sha="907741f0fe4f661d4629c69011a9e55f5d76e77c1a5919e9a476157065548816">
                Download
              </button>
            </div>
          </article>

          <article class="card download-row">
            <div class="download-row__info">
              <h3>KDE</h3>
              <p class="download-row__meta">Nobara-42-KDE-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-KDE-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-KDE-2025-09-25.iso"
                data-sha="33aec279dedff92e20da70b4607fab02dfdd0a1064419bfe9f1d14f2b7a9b786">
                Download
              </button>
            </div>
          </article>

          <article class="card download-row">
            <div class="download-row__info">
              <h3>Steam-HTPC</h3>
              <p class="download-row__meta">Nobara-42-Steam-HTPC-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-Steam-HTPC-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-Steam-HTPC-2025-09-25.iso"
                data-sha="4dc3516e8000988af41d885e7a0efd97d0d9eb5a408b6716cef3a5396799c469">
                Download
              </button>
            </div>
          </article>

          <article class="card download-row">
            <div class="download-row__info">
              <h3>Steam-Handheld</h3>
              <p class="download-row__meta">Nobara-42-Steam-Handheld-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-Steam-Handheld-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-Steam-Handheld-2025-09-25.iso"
                data-sha="af9dbae13441c62817b2b0686f07a6ca009fc4f5873860e2c03f773cdd17bb62">
                Download
              </button>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="nvidia" class="section section--surface">
      <div class="section-inner">
        <div class="section-header">
          <h2>NVIDIA downloads</h2>
          <p>
            ISOs with the proprietary NVIDIA driver pre-installed, aimed at getting you to the desktop with fewer extra steps.
          </p>
        </div>
        <div class="nvidia-callout">
          <ul>
            <li>First boot may take 1–2 minutes while akmods builds the kernel modules.</li>
            <li>Only GPUs supported by the current NVIDIA driver are expected to work. Check the supported hardware list before installing.</li>
          </ul>
          <a href="https://wiki.nobaraproject.org/nvidia/supported-hardware" class="chip-link" target="_blank" rel="noreferrer">
            View supported NVIDIA hardware
          </a>
        </div>

        <div class="download-table">
          <article class="card download-row">
            <div class="download-row__info">
              <h3>Official-NV</h3>
              <p class="download-row__meta">Nobara-42-Official-NV-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-Official-NV-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-Official-NV-2025-09-25.iso"
                data-sha="6c2e2c2794bc0a39d7bb6c2be5c91a67625673477e10e48b62633244f9b72e3b">
                Download
              </button>
            </div>
          </article>

          <article class="card download-row">
            <div class="download-row__info">
              <h3>GNOME-NV</h3>
              <p class="download-row__meta">Nobara-42-GNOME-NV-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-GNOME-NV-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-GNOME-NV-2025-09-25.iso"
                data-sha="ef71b5e9621b914c792007051a47125c42da97ca77840b3b0e96279662b075f6">
                Download
              </button>
            </div>
          </article>

          <article class="card download-row">
            <div class="download-row__info">
              <h3>KDE-NV</h3>
              <p class="download-row__meta">Nobara-42-KDE-NV-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-KDE-NV-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-KDE-NV-2025-09-25.iso"
                data-sha="3cd20f7d9ca23903ac720118a130056ec4aab73037e236adbd8b21e8f2da8b4c">
                Download
              </button>
            </div>
          </article>

          <article class="card download-row">
            <div class="download-row__info">
              <h3>Steam-HTPC-NV</h3>
              <p class="download-row__meta">Nobara-42-Steam-HTPC-NV-2025-09-25.iso</p>
            </div>
            <div class="download-row__actions">
              <button class="button button--primary download-btn"
                data-iso="Nobara-42-Steam-HTPC-NV-2025-09-25.iso"
                data-url="https://nobara-images.nobaraproject.org/Nobara-42-Steam-HTPC-NV-2025-09-25.iso"
                data-sha="9dad977df2c3aa3216e8fdb3d69608e7e86761e8309895f05d439da8902688e6">
                Download
              </button>
            </div>
          </article>
        </div>

        <p class="license-footer">
          Before downloading any ISO, read the full license text on the official Nobara site. Nobara is a hobby distribution, ships with third-party repositories such as RPMFusion, and comes with no warranty.
        </p>
      </div>
    </section>

    <section class="section">
      <div class="section-inner">
        <div class="section-header">
          <h2>Helpful documentation</h2>
          <p>A couple of links to keep open while you download and install.</p>
        </div>
        <div class="cards-grid cards-grid--two">
          <article class="card card--horizontal">
            <div class="card__content">
              <h3>Download & install media</h3>
              <p>
                How to download the ISO, verify the checksum, and create a bootable USB with Ventoy, Fedora Media Writer, or Rufus.
              </p>
              <a href="https://wiki.nobaraproject.org/download/get-an-iso" class="chip-link" target="_blank" rel="noreferrer">
                Go to download section in the wiki
              </a>
            </div>
          </article>
          <article class="card card--horizontal">
            <div class="card__content">
              <h3>First-boot checklist</h3>
              <p>
                System updates, drivers, extra tools, and tips for stable gaming and streaming sessions.
              </p>
              <a href="https://wiki.nobaraproject.org/en/new-user-guide-general-guidelines" class="chip-link" target="_blank" rel="noreferrer">
                Open first-steps guide
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>