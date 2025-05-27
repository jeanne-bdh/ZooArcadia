import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/services", "Nos services", "/pages/services.html"),
    new Route("/habitats", "Nos habitats", "/pages/habitats/habitats.html"),
    new Route("/contact", "Contact", "/pages/contact.html"),
    new Route("/login", "Connexion", "/pages/auth/login.html", "/js/login.js"),
    new Route("/logout", "Déconnexion", "/pages/auth/logout.html"),
    new Route("/savane", "Savane", "/pages/habitats/savane.html"),
    new Route("/jungle", "Jungle", "/pages/habitats/jungle.html"),
    new Route("/marais", "Marais", "/pages/habitats/marais.html"),
    new Route("/form-review", "Rédiger un avis", "/pages/reviews/form-review.html"),
    new Route("/all-reviews", "Tous les avis", "/pages/reviews/all-reviews.html"),
    new Route("/legalInfos", "Mentions légales", "/pages/legal-infos/legal_infos.html"),
    new Route("/cookieManagment", "Gestion des cookies", "/pages/legal-infos/cookie_managment.html"),
    new Route("/cgu", "CGU", "/pages/legal-infos/cgu.html"),
    new Route("/privacyPolicy", "Politique de confidentialité", "/pages/legal-infos/privacy_policy.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";