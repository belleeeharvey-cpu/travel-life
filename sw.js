self.addEventListener("install", e => {
  e.waitUntil(
    caches.open("travel-app").then(cache => {
      return cache.addAll([
        "index.html",
        "install.html",
        "signup.html",
        "login.html",
        "profile.html",
        "style.css"
      ]);
    })
  );
});
