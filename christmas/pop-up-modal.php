<!-- Include this component anywhere (preferably before </body>) -->
<div class="xmas-popup" id="xmasPopup">
    <div class="xmas-popup-box">
        <button class="xmas-popup-close" onclick="XmasPopup.close()">&times;</button>
        <span class="xmas-popup-badge">🎄 Christmas Special</span>
        <h2>Merry Christmas at Golden Leaf Resort</h2>
        <p>Celebrate Christmas with festive stays, special dinners, live music & joyful moments.</p>
        <a href="/booking" class="xmas-popup-btn">Book Christmas Stay</a>
    </div>
</div>


<style>
    /* ===== CHRISTMAS POPUP COMPONENT ===== */
    .xmas-popup {
        position: fixed;
        inset: 0;
        display: none;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.65);
        z-index: 99999;
    }

    .xmas-popup-box {
        position: relative;
        background: linear-gradient(135deg, #fffaf3, #f3e6d8);
        max-width: 520px;
        width: 92%;
        padding: 48px 38px;
        text-align: center;
        border-radius: 26px;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
        animation: popupSlide 0.5s ease;
    }


    .xmas-popup-badge {
        display: inline-block;
        background: linear-gradient(135deg, #f5c16c, #ffd98a);
        padding: 8px 22px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 14px;
        margin-bottom: 18px;
    }


    .xmas-popup-box h2 {
        font-size: 32px;
        color: var(--dark-red);
        margin-bottom: 14px;
    }


    .xmas-popup-box p {
        font-size: 16px;
        color: #4a3f35;
        line-height: 1.6;
        margin-bottom: 26px;
    }


    .xmas-popup-btn {
        display: inline-block;
        background: linear-gradient(135deg, #b11226, #8e0e1e);
        color: #fff;
        padding: 14px 38px;
        border-radius: 40px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 12px 35px rgba(177, 18, 38, 0.45);
    }


    .xmas-popup-close {
        position: absolute;
        top: 12px;
        right: 16px;
        background: none;
        border: none;
        font-size: 30px;
        cursor: pointer;
        color: #8e0e1e;
    }


    @keyframes popupSlide {
        from {
            transform: translateY(30px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }


    @media(max-width:480px) {
        .xmas-popup-box h2 {
            font-size: 26px;
        }
    }
</style>


<script>
    /* ===== CHRISTMAS POPUP CONTROLLER ===== */
    const XmasPopup = {
        open(delay = 800) {
            setTimeout(() => {
                if (!sessionStorage.getItem('xmasPopupShown')) {
                    document.getElementById('xmasPopup').style.display = 'flex';
                    sessionStorage.setItem('xmasPopupShown', 'yes');
                }
            }, delay);
        },


        close() {
            document.getElementById('xmasPopup').style.display = 'none';
        }
    };


    // Auto open on page load
    window.addEventListener('load', () => XmasPopup.open());
</script>


<!-- END CHRISTMAS DESIGN COLLECTION -->