<script>
// Establecer la duraci贸n de la cookie en 24 horas
const cookieDuration = 24 * 60 * 60 * 1000; // en milisegundos

// Verificar si la cookie ya existe
const cookie = document.cookie.replace(/(?:(?:^|.*;\s*)redirected\s*\=\s*([^;]*).*$)|^.*$/, '$1');
if (!cookie) {
    // Si la cookie no existe, establecerla y redirigir al usuario
    document.cookie = `redirected=true; max-age=${cookieDuration}; path=/`;
    window.location.href = "https://softdental.marketingenloscabos.com/gallery/";
} else {
    // Si la cookie existe, verificar si ha expirado y redirigir al usuario si es necesario
    const currentTime = new Date().getTime();
    const cookieExpiration = parseInt(cookie) + cookieDuration;
    if (currentTime > cookieExpiration) {
        document.cookie = `redirected=true; max-age=${cookieDuration}; path=/`;
        window.location.href = "https://softdental.marketingenloscabos.com/gallery/";
    }
}
</script>