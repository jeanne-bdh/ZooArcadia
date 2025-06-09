import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/services", "Nos services", "/pages/services.html"),
    new Route("/habitats", "Nos habitats", "/pages/habitats/habitats.html"),
    new Route("/contact", "Contact", "/pages/contact.html", "/js/contact.js"),
    new Route("/login", "Connexion", "/pages/auth/login.html", "/js/login.js"),
    new Route("/logout", "Déconnexion", "/pages/auth/logout.html"),
    new Route("/savane", "Savane", "/pages/habitats/savane/savane.html"),
    new Route("/jungle", "Jungle", "/pages/habitats/jungle/jungle.html"),
    new Route("/marais", "Marais", "/pages/habitats/marais/marais.html"),
    new Route("/crocodile", "Marais", "/pages/habitats/marais/crocodile.html"),
    new Route("/form-review", "Rédiger un avis", "/pages/reviews/form-review.html"),
    new Route("/all-reviews", "Tous les avis", "/pages/reviews/all-reviews.html"),
    new Route("/legalInfos", "Mentions légales", "/pages/legal-infos/legal_infos.html"),
    new Route("/cookieManagement", "Gestion des cookies", "/pages/legal-infos/cookie_management.html"),
    new Route("/cgu", "CGU", "/pages/legal-infos/cgu.html"),
    new Route("/privacyPolicy", "Politique de confidentialité", "/pages/legal-infos/privacy_policy.html"),
    new Route("/admin", "Administrateur", "/pages/admin/admin_session.html"),
    new Route("/reportVet", "Comptes rendus animaliers", "/pages/admin/report_vet.html"),
    new Route("/dashboard", "Dashboard", "/pages/admin/dashboard.html"),
    new Route("/register", "Créer des comptes", "/pages/admin/register.html", "/js/register.js"),
    new Route("/crud", "Comptes rendus animaliers", "/pages/admin/crud/crud.html"),
    new Route("/crudHours", "Modifier les horaires", "/pages/admin/crud/crud-hours.html"),
    new Route("/crudServAdmin", "Modifier les services", "/pages/admin/crud/crud-services-admin.html"),
    new Route("/crudHabitats", "Modifier les habitats", "/pages/admin/crud/crud-habitats.html"),
    new Route("/crudAnimals", "Modifier les animaux", "/pages/admin/crud/crud-animals.html"),
    new Route("/employee", "Employé", "/pages/employee/employee_session.html"),
    new Route("/crudServEmpl", "Modifier les services", "/pages/employee/crud-services-empl.html"),
    new Route("/inputFoodConso", "Saisir la nourriture", "/pages/employee/input-food-conso.html"),
    new Route("/reviewValid", "Valider les avis", "/pages/employee/review-valid.html"),
    new Route("/veterinary", "Vétérinaire", "/pages/veterinary/veterinary_session.html"),
    new Route("/consultFoodConso", "Consulter la consommmation des animaux", "/pages/veterinary/consult-food-conso.html"),
    new Route("/habitatComment", "Commenter les habitats", "/pages/veterinary/habitat-comment.html"),
    new Route("/inputReport", "Saisir les comptes rendus animaliers", "/pages/veterinary/input-report.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo Arcadia";