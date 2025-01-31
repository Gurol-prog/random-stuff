# Popunder JavaScript Script

Bu depo, bir popunder (arka planda açılan yeni pencere) açan JavaScript kodunu içerir.

## Kullanım

1. **Dosyayı Dahil Et:** HTML dosyanızda bu JavaScript dosyasını aşağıdaki gibi dahil edebilirsiniz:
   
   ```html
   <script src="popunder.js"></script>
   ```

2. **Kodun Çalışma Prensibi:**
   - Kullanıcı sayfaya tıkladığında popunder açılır.
   - Çerezler kullanılarak, kullanıcıya tekrar tekrar açılmasını engeller.
   - Popunder 30 dakika boyunca tekrar açılmaz.

3. **Özelleştirme:**
   - `doOpen('Yönlendirilecek URL');` satırındaki URL'yi kendi açmak istediğiniz sayfa ile değiştirin.
   - Çerezin süresini değiştirmek için `setCookie('popundr', 1, 30 * 60 * 1000);` değerini güncelleyebilirsiniz.



