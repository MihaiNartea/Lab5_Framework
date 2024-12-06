### Raport Laboratorul 5

-   **Ce soluții integrate pentru autentificare oferă Laravel?**
    
    -   Laravel Breeze
    -   Laravel Fortify
    -   Laravel Jetstream
    -   Sanctum (pentru API-uri)
    -   Passport (pentru API-uri complexe)
-   **Ce metode de autentificare a utilizatorilor cunoașteți?**
    
    -   Autentificare cu e-mail și parolă
    -   Autentificare cu token (API-uri)
    -   OAuth (Google, Facebook etc.)
    -   Autentificare cu sesiuni
    -   Autentificare prin middleware-uri personalizate
-   **Care este diferența dintre autentificare și autorizare?**
    
    -   **Autentificare:** Verifică identitatea utilizatorului (e.g., logarea cu un cont valid).
    -   **Autorizare:** Controlează accesul utilizatorului la anumite resurse sau funcționalități (e.g., verificarea rolurilor).
-   **Cum se asigură protecția împotriva atacurilor CSRF în Laravel?**
    
    -   Laravel generează automat un token CSRF pentru fiecare sesiune.
    -   Token-ul este inclus în formulare folosind `@csrf`.
    -   Middleware-ul `VerifyCsrfToken` validează token-ul la fiecare cerere POST, PUT, PATCH sau DELETE.