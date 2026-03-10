<style>
    .whatsapp-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .whtapps-btn {
        background-color: #25d366;
        color: white;
        border: none;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        font-size: 24px;
        position: relative;
        transition: transform 0.3s;
        transform: translate(-25px, 10px);
    }

    .whtapps-btn:hover {
        transform: scale(1.1);
    }

    .number-options {
        position: absolute;
        bottom: 0;
        right: 70px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        opacity: 0;
        transform: translateX(20px);
        transition: opacity 0.3s, transform 0.3s;
    }

    .whatsapp-container:hover .number-options {
        opacity: 1;
        transform: translateX(0);
    }

    .number-options a {
        background-color: #25d366;
        color: white;
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 5px;
        font-size: 14px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s;
    }

    .number-options a:hover {
        background-color: #128c7e;
    }
</style>
<div class="whatsapp-container">
    <button class="whtapps-btn">
        <i class="bi bi-whatsapp"></i>
    </button>
    <div class="number-options">
        <a href="https://wa.me/7815039065" target="_blank">7815039065</a>
        <a href="https://wa.me/8118031833" target="_blank">8118031833</a>
    </div>
</div>


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
