<!--rastgele popup başlangıç -->

<div class="popup-overlay">
  <div class="popup-content">
    <span class="popup-close" onclick="closePopup()">&times;</span>
    <div class="status-popup-content-w-bc">
      <p class="delas-popup-content">
        <a target="_blank" href="https://ornek.com/"> <!-- yönlendirme linki buraya gelicek -->
          <div class="casino-popup-button-block">
            <button class="btn a-color" type="button" onclick="closePopup()"></button>
          </div>
          <img id="popupImage" alt="popup" class="popup-image">
        </a>
      </p>
    </div>
  </div>
</div>

<script>
  // Görselleri önceden yükleyerek hızlı hale getiriyoruz
  const images = [
    "/ornek.png",
    "/ornek2.gif",
    
  ];

  // Önceden img nesneleri oluşturup tarayıcı önbelleğine al
  const preloadedImages = images.map(src => {
    const img = new Image();
    img.src = src;
    return img;
  });

  // Sayfa yüklendiğinde rastgele görseli hızlıca belirle
  document.addEventListener("DOMContentLoaded", function () {
    const randomIndex = Math.floor(Math.random() * images.length);
    document.getElementById("popupImage").src = preloadedImages[randomIndex].src;
  });


  function closePopup() {
    document.querySelector(".popup-overlay").style.display = "none";
}
</script>



<!--rastgele popup bitiş -->