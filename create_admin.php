<?php

use App\Entity\User;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;

// Chargement de l'autoload
require __DIR__ . '/vendor/autoload.php';

// Chargement des variables d'environnement (si nécessaire)
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

// Récupération du container Symfony
$kernel = new \App\Kernel($_SERVER['APP_ENV'] ?? 'dev', (bool) ($_SERVER['APP_DEBUG'] ?? true));
$kernel->boot();
$container = $kernel->getContainer();

// Récupération de l'EntityManager et du PasswordHasher
/** @var EntityManagerInterface $entityManager */
$entityManager = $container->get('doctrine')->getManager();
/** @var UserPasswordHasherInterface $passwordHasher */
$passwordHasher = $container->get('security.user_password_hasher');

// Création de l'utilisateur admin
$user = new User();
$user->setEmail('admin@zooarcadia.com');
$user->setFirstname('José');
$user->setLastname('Fougerre');
$user->setRoles(['ROLE_ADMIN']);
$user->setPassword($passwordHasher->hashPassword($user, 'T!ZxKmLp9@#vR02n')); // change le mot de passe

// Enregistrement dans la base
$entityManager->persist($user);
$entityManager->flush();

echo "Admin créé avec succès !\n";
