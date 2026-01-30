@extends('landing.layouts.app', [
    'title' => 'Vending Machine',
])

@push('style')
    <style>
        .carousel-viewport {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .carousel-track {
            display: flex;
            width: max-content;
            gap: 14px;
            will-change: transform;
        }

        .carousel-track.is-dragging {
            cursor: grabbing;
        }

        .carousel-viewport::-webkit-scrollbar {
            display: none;
        }

        .carousel-viewport::-webkit-scrollbar-thumb {
            background: rgba(92, 42, 148, 0.25);
            border-radius: 999px;
        }

        .animated-gradient {
            background: linear-gradient(270deg, #5c2a94, #a76ade, #5c2a94, #a76ade);
            background-size: 100% 100%;
            animation: gradientAnimation 5s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
@endpush

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-[#f7f3ff] via-white to-[#f3f0ff]">
        <div id="default-carousel"
            class="relative w-full px-6 sm:px-10 lg:px-[72px] pt-[40px] sm:pt-[45px] lg:pt-[56px] pb-[32px] lg:pb-[40px]"
            data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-base h-[220px]">
                @for ($i = 0; $i < 5; $i++)
                    <div class="hidden duration-700 ease-in-out bg-cover shadow-[0_24px_60px_rgba(89,42,155,0.18)]"
                        data-carousel-item>
                        <img src="{{ asset('assets/images/ads/ads.jpg') }}"
                            class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 w-full h-[220px] sm:h-[220px] lg:h-[360px]"
                            alt="...">
                    </div>
                @endfor
            </div>
        </div>

        <div class="px-6 sm:px-10 lg:px-[72px] pb-[60px] lg:pb-[80px]">
            <div class="flex gap-[18px] lg:gap-[32px] items-start">
                <div class="carousel-viewport w-full">
                    <div class="carousel-track">
                        @for ($i = 0; $i < 12; $i++)
                            <div
                                class="bg-white rounded-[15px] p-[10px] border border-[#c0bacb] w-[130px] my-2">
                                <div class="bg-cover h-[120px] w-full rounded-[15px] bg-gradient-to-b from-[#f1ecff] to-[#fff] border border-[#e1dee6] flex items-center justify-center"
                                    style="background-image: url('{{ asset('assets/images/products/fruittea_blackcurrant.png') }}');">
                                    {{-- <img src="{{ asset('assets/images/products/fruittea_blackcurrant.png') }}" alt="" class="object-contain"> --}}
                                </div>
                                <div class="mt-[12px]">
                                    <div class="text-[13px] font-semibold text-[#2b1a43]">Fruit Tea Blackcurrant</div>
                                    <div class="text-[12px] font-semibold text-[#6d5a88] mt-[2px]">Rp 5.000</div>
                                    <div class="mt-[10px] flex items-center justify-between">
                                        <button id="min-qty"
                                            class="h-[28px] w-[28px] rounded-full border border-[#ceb9ee] text-[#5c2a94]">-</button>
                                        <div id="qty" class="text-[12px] font-semibold text-[#2b1a43]">0</div>
                                        <button id="plus-qty"
                                            class="h-[28px] w-[28px] rounded-full bg-[#5c2a94] text-white">+</button>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="carousel-track">
                        @for ($i = 0; $i < 12; $i++)
                            <div
                                class="bg-white rounded-[15px] p-[10px] border border-[#c0bacb] w-[130px] my-2">
                                <div class="bg-cover h-[120px] w-full rounded-[15px] bg-gradient-to-b from-[#f1ecff] to-[#fff] border border-[#e1dee6] flex items-center justify-center"
                                    style="background-image: url('{{ asset('assets/images/products/fruittea_blackcurrant.png') }}');">
                                    {{-- <img src="{{ asset('assets/images/products/fruittea_blackcurrant.png') }}" alt="" class="object-contain"> --}}
                                </div>
                                <div class="mt-[12px]">
                                    <div class="text-[13px] font-semibold text-[#2b1a43]">Fruit Tea Blackcurrant</div>
                                    <div class="text-[12px] font-semibold text-[#6d5a88] mt-[2px]">Rp 5.000</div>
                                    <div class="mt-[10px] flex items-center justify-between">
                                        <button id="min-qty"
                                            class="h-[28px] w-[28px] rounded-full border border-[#ceb9ee] text-[#5c2a94]">-</button>
                                        <div id="qty" class="text-[12px] font-semibold text-[#2b1a43]">0</div>
                                        <button id="plus-qty"
                                            class="h-[28px] w-[28px] rounded-full bg-[#5c2a94] text-white">+</button>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="carousel-track">
                        @for ($i = 0; $i < 12; $i++)
                            <div
                                class="bg-white rounded-[15px] p-[10px] border border-[#c0bacb] w-[130px] my-2">
                                <div class="bg-cover h-[120px] w-full rounded-[15px] bg-gradient-to-b from-[#f1ecff] to-[#fff] border border-[#e1dee6] flex items-center justify-center"
                                    style="background-image: url('{{ asset('assets/images/products/fruittea_blackcurrant.png') }}');">
                                    {{-- <img src="{{ asset('assets/images/products/fruittea_blackcurrant.png') }}" alt="" class="object-contain"> --}}
                                </div>
                                <div class="mt-[12px]">
                                    <div class="text-[13px] font-semibold text-[#2b1a43]">Fruit Tea Blackcurrant</div>
                                    <div class="text-[12px] font-semibold text-[#6d5a88] mt-[2px]">Rp 5.000</div>
                                    <div class="mt-[10px] flex items-center justify-between">
                                        <button id="min-qty"
                                            class="h-[28px] w-[28px] rounded-full border border-[#ceb9ee] text-[#5c2a94]">-</button>
                                        <div id="qty" class="text-[12px] font-semibold text-[#2b1a43]">0</div>
                                        <button id="plus-qty"
                                            class="h-[28px] w-[28px] rounded-full bg-[#5c2a94] text-white">+</button>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <div
                    class="bg-white rounded-[15px] border border-[#eee5f9] shadow-[0_12px_30px_rgba(60,34,97,0.12)] p-[24px] lg:sticky lg:top-[24px]">
                    <div class="text-[18px] font-semibold text-[#2a1a42] text-center">Detail Pesanan</div>
                    <div class="mt-[16px] border-t border-[#efe6ff] pt-[16px]">
                        <div
                            class="grid grid-cols-[1fr_40px_80px] text-[12px] font-semibold text-[#5b4a7a] pb-[10px] border-b border-[#f1ecff]">
                            <div>Produk</div>
                            <div class="text-center">Qty</div>
                            <div class="text-right">Harga</div>
                        </div>
                        <div class="mt-[10px] space-y-[8px] text-[12px] text-[#2b1a43]">
                            <div class="grid grid-cols-[1fr_40px_80px]">
                                <div>Fruit Tea Blackcurrant</div>
                                <div class="text-center">1</div>
                                <div class="text-right">5.000,-</div>
                            </div>
                            <div class="grid grid-cols-[1fr_40px_80px]">
                                <div>Fruit Tea Freeze</div>
                                <div class="text-center">2</div>
                                <div class="text-right">10.000,-</div>
                            </div>
                            <div class="grid grid-cols-[1fr_40px_80px]">
                                <div>Fruit Tea Apel</div>
                                <div class="text-center">3</div>
                                <div class="text-right">15.000,-</div>
                            </div>
                        </div>
                        <div
                            class="mt-[16px] pt-[12px] border-t border-[#f1ecff] flex items-center justify-between text-[13px] font-semibold text-[#2b1a43]">
                            <div>Total</div>
                            <div>Rp 30.000,-</div>
                        </div>
                    </div>
                    <button id="btn-pay"
                        class="text-sm mt-[24px] w-full h-[44px] rounded-full bg-[#5c2a94] text-white font-semibold">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-pay" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 p-[24px]">
        <div class="bg-white w-full max-w-[420px] rounded-[20px] p-[24px] shadow-[0_24px_60px_rgba(0,0,0,0.25)]">
            <div class="text-[18px] font-semibold text-[#2b1a43] text-center">Pembayaran QRIS</div>
            <div
                class="mt-[16px] mx-auto h-[220px] w-[220px] rounded-[16px] border border-[#e9dcf9] bg-gradient-to-br from-[#f6f0ff] to-white flex items-center justify-center">
                <div class="text-[12px] text-[#6b5a84]">QR Code</div>
            </div>
            <div class="mt-[12px] text-center text-[12px] text-[#6b5a84]">Scan untuk membayar</div>
            <div class="mt-[20px] flex gap-[10px]">
                <button id="btn-cancel-pay"
                    class="w-full h-[40px] rounded-full border border-[#d6c7ee] text-[#5c2a94] font-semibold">Batal</button>
                <button id="btn-success" class="w-full h-[40px] rounded-full bg-[#5c2a94] text-white font-semibold">Sudah
                    Bayar</button>
            </div>
        </div>
    </div>

    <div id="modal-success" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 p-[24px]">
        <div
            class="bg-white w-full max-w-[420px] rounded-[20px] p-[24px] text-center shadow-[0_24px_60px_rgba(0,0,0,0.25)]">
            <div
                class="mx-auto h-[72px] w-[72px] rounded-full bg-[#e8dcff] flex items-center justify-center text-[#5c2a94] text-[24px] font-bold">
                OK</div>
            <div class="mt-[12px] text-[18px] font-semibold text-[#2b1a43]">Pembayaran Berhasil</div>
            <div class="mt-[6px] text-[12px] text-[#6b5a84]">Silakan ambil produk Anda.</div>
            <button id="btn-close-success"
                class="mt-[18px] w-full h-[40px] rounded-full bg-[#5c2a94] text-white font-semibold">Tutup</button>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const btnPay = document.getElementById('btn-pay');
        const modalPay = document.getElementById('modal-pay');
        const btnCancel = document.getElementById('btn-cancel-pay');
        const btnSuccess = document.getElementById('btn-success');
        const modalSuccess = document.getElementById('modal-success');
        const btnCloseSuccess = document.getElementById('btn-close-success');

        btnPay?.addEventListener('click', () => {
            modalPay?.classList.remove('hidden');
            modalPay?.classList.add('flex');
        });

        btnCancel?.addEventListener('click', () => {
            modalPay?.classList.add('hidden');
            modalPay?.classList.remove('flex');
        });

        btnSuccess?.addEventListener('click', () => {
            modalPay?.classList.add('hidden');
            modalPay?.classList.remove('flex');
            modalSuccess?.classList.remove('hidden');
            modalSuccess?.classList.add('flex');
        });

        btnCloseSuccess?.addEventListener('click', () => {
            modalSuccess?.classList.add('hidden');
            modalSuccess?.classList.remove('flex');
        });
    </script>

    <script>
        const viewports = document.querySelectorAll('.carousel-viewport');

        viewports.forEach((viewport) => {
            const track = viewport.querySelector('.carousel-track');
            if (!track) return;

            const cards = [...track.children];
            for (const card of cards) {
                track.appendChild(card.cloneNode(true));
            }

            const resetThreshold = track.scrollWidth / 2;
            let isDown = false;
            let startX = 0;
            let startScrollLeft = 0;
            let isPaused = false;
            let resumeTimer = null;
            const speed = 0.6;

            const resumeLater = () => {
                if (resumeTimer) clearTimeout(resumeTimer);
                resumeTimer = setTimeout(() => {
                    isPaused = false;
                }, 500);
            };

            const loopScroll = () => {
                if (!isPaused) {
                    viewport.scrollLeft += speed;
                }

                if (viewport.scrollLeft >= resetThreshold) {
                    viewport.scrollLeft -= resetThreshold;
                } else if (viewport.scrollLeft <= 0) {
                    viewport.scrollLeft += resetThreshold;
                }

                requestAnimationFrame(loopScroll);
            };

            requestAnimationFrame(loopScroll);

            viewport.addEventListener('pointerdown', (event) => {
                isDown = true;
                startX = event.pageX;
                startScrollLeft = viewport.scrollLeft;
                isPaused = true;
                track.classList.add('is-dragging');
                viewport.setPointerCapture(event.pointerId);
            });

            viewport.addEventListener('pointermove', (event) => {
                if (!isDown) return;
                const walk = startX - event.pageX;
                viewport.scrollLeft = startScrollLeft + walk;
            });

            const endDrag = () => {
                isDown = false;
                track.classList.remove('is-dragging');
                resumeLater();
            };

            viewport.addEventListener('pointerup', endDrag);
            viewport.addEventListener('pointerleave', endDrag);
            viewport.addEventListener('mouseenter', () => {
                isPaused = true;
            });
            viewport.addEventListener('mouseleave', () => {
                resumeLater();
            });
            viewport.addEventListener('wheel', () => {
                isPaused = true;
                resumeLater();
            }, {
                passive: true
            });
        });
    </script>
@endpush
