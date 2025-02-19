<div class="popup-overlay">
    <div class="popup-content">
        <!-- Kapatma Butonu -->
        <span class="popup-close" onclick="closePopup()">&times;</span>
        
        <div class="status-popup-content-w-bc">
            <p class="delas-popup-content">
                <!-- Popup içeriğindeki görsel -->
                <img alt="Reklam Görseli" src="/default-image.webp" class="popup-image"> 
            </p>

            <!-- Kapat Butonu -->
            <div class="delas-popup-button-block">
                <button class="popup-button" type="button" onclick="closePopup()">Kapat</button>
            </div>
        </div>
    </div>
</div>

<script>
/* Popup'ı kapatma fonksiyonu */
function closePopup() {
    document.querySelector(".popup-overlay").style.display = "none";
}
</script>
